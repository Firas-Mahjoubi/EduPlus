<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/events')]
class GEventsController extends AbstractController
{
    // Display all events
   // In your EventController
  // GEventsController.php

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
    // Add a new event
    #[Route('/add', name: 'app_g_events_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
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

            // Persist the event and save participants
            $entityManager->persist($event);
            $entityManager->flush();

            $this->addFlash('success', 'Event added successfully.');

            return $this->redirectToRoute('app_g_events');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Update an existing event
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
            // Handle new image upload
            $pictureFile = $form->get('image')->getData();
            if ($pictureFile) {
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();
                try {
                    $pictureFile->move(
                        $this->getParameter('event_pictures_directory'),
                        $newFilename
                    );
                    $event->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the image.');
                }
            }

            // Update participants
            $participants = $form->get('participants')->getData();
            $event->clearParticipants(); // Clear existing participants
            foreach ($participants as $participant) {
                $event->addParticipant($participant);
            }

            $entityManager->flush();
            $this->addFlash('success', 'Event updated successfully.');

            return $this->redirectToRoute('app_g_events');
        }

        return $this->render('g_events/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Show a single event
    #[Route('/show/{id}', name: 'app_g_events_show', methods: ['GET'])]
    public function show(int $id, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->find($id);
        if (!$event) {
            throw $this->createNotFoundException('Event not found.');
        }

        return $this->render('g_events/show.html.twig', [
            'event' => $event,
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

}
