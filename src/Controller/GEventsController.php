<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;


#[Route('/events')]
class GEventsController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    // Display all events
    #[Route('/', name: 'app_g_events')]
    public function index(EventRepository $eventRepository): Response
    {
        $currentDate = new \DateTime(); // Current date and time
        
        // Use QueryBuilder for filtering events by date
        $upcomingEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut >= :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->getQuery()
            ->getResult();
        
        // Fetch latest events (events that have already occurred)
        $latestEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut < :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->orderBy('e.datedebut', 'DESC')
            ->setMaxResults(3) // Get the 3 most recent past events
            ->getQuery()
            ->getResult();

        return $this->render('g_events/index.html.twig', [
            'upcomingEvents' => $upcomingEvents,
            'latestEvents' => $latestEvents,
        ]);
    }
    private $mailer;

    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }

    // Add a new event
    #[Route('/add', name: 'app_g_events_add', methods: ['GET', 'POST'])]
    public function add(Request $request, UserRepository $userRepository): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload
            $image = $form->get('image')->getData();
            if ($image) {
                $newFilename = uniqid() . '.' . $image->guessExtension();
                try {
                    $image->move(
                        $this->getParameter('event_pictures_directory'),
                        $newFilename
                    );
                    $event->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading the image.');
                }
            }

            // Check if the participant limit is enabled
            if ($form->get('hasParticipantLimit')->getData()) {
                $event->setHasParticipantLimit(true);
                $event->setMaxParticipants($form->get('maxParticipants')->getData());
            } else {
                $event->setHasParticipantLimit(false);
                $event->setMaxParticipants(null);
            }

            // Persist the event
            $this->entityManager->persist($event);
            $this->entityManager->flush();

            // Send email notification to all users
            $users = $userRepository->findAll();
            foreach ($users as $user) {
                $email = (new Email())
                    ->from('YOUR_EMAIL@outlook.com') // Your Outlook email
                    ->to($user->getEmail())
                    ->subject('New Event: ' . $event->getTitre())
                    ->html($this->renderView('emails/new_event.html.twig', [
                        'event' => $event
                    ]));

                $this->mailer->send($email);
            }

            $this->addFlash('success', 'Event added successfully and emails sent to all users.');
            return $this->redirectToRoute('app_g_events');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

//     Update an existing event
//    Show Event (View details of the event)
#[Route('/show', name: 'app_g_events_show')]
public function show( EventRepository $eventRepository): Response
{
    $currentDate = new \DateTime(); // Current date and time
        
        // Use QueryBuilder for filtering events by date
        $upcomingEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut >= :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->getQuery()
            ->getResult();
        
        // Fetch latest events (events that have already occurred)
        $latestEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut < :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->orderBy('e.datedebut', 'DESC')
            ->setMaxResults(3) // Get the 3 most recent past events
            ->getQuery()
            ->getResult();

        return $this->render('g_events/show.html.twig', [
            'upcomingEvents' => $upcomingEvents,
            'latestEvents' => $latestEvents,
        ]);
}

// Update Event (Update an existing event)
#[Route('/update/{id}', name: 'app_g_events_update', methods: ['GET', 'POST'])]
public function update(int $id, Request $request, EntityManagerInterface $entityManager, EventRepository $eventRepository): Response
{
    $event = $eventRepository->find($id);
    if (!$event) {
        throw $this->createNotFoundException('Event not found.');
    }

    $form = $this->createForm(EventType::class, $event);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Handle the form submission and image upload
        $entityManager->flush();
        $this->addFlash('success', 'Event updated successfully.');

        return $this->redirectToRoute('app_g_events_show', ['id' => $event->getId()]);
    }

    return $this->render('g_events/update.html.twig', [
        'form' => $form->createView(),
        'event' => $event,  // Pass the event object to the template
    ]);
}

    // Delete an event
    #[Route('/delete/{id}', name: 'app_g_events_delete', methods: ['GET'])]
    public function delete(Event $event, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($event);
        $entityManager->flush();

        $this->addFlash('success', 'Event deleted successfully.');

        return $this->redirectToRoute('app_g_events');
    }

    // Event participation
    #[Route('/participate/{id}', name: 'app_event_participate', methods: ['POST', 'GET'])]
    public function participate(int $id, EventRepository $eventRepository, EntityManagerInterface $entityManager): Response
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            throw $this->createNotFoundException('Event not found.');
        }

        $user = $this->getUser(); // Ensure the user is logged in
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to participate in events.');
            return $this->redirectToRoute('app_g_events');
        }

        // Add the current user as a participant if not already added
        if (!$event->getParticipants()->contains($user)) {
            $event->addParticipant($user);
            $entityManager->flush();
            $this->addFlash('success', 'You have successfully participated in the event.');
        } else {
            $this->addFlash('info', 'You are already participating in this event.');
        }

        return $this->redirectToRoute('app_g_events');
    }

   
     #[Route("/{id}/cancel", name:"app_event_cancel_participation")]
     public function cancelParticipation(Event $event): Response
     {
         // Get the current logged-in user
         $user = $this->getUser();
 
         // Check if the user is already participating in the event
         if ($event->getParticipants()->contains($user)) {
             // Remove the user from participants
             $event->removeParticipant($user);
             $this->entityManager->flush();
             
             $this->addFlash('success', 'You have canceled your participation in this event.');
         } else {
             $this->addFlash('error', 'You are not participating in this event.');
         }
 
         // Redirect to the events list
         return $this->redirectToRoute('app_g_events');
     }
}
