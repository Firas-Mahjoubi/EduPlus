<?php

namespace App\Controller;

use App\Entity\EventMessage;
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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;



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
    #[Route('/events', name: 'app_event_list')]
    public function search(Request $request, EventRepository $eventRepository): Response
{
    $search = $request->query->get('search', '');
    $upcomingEvents = $eventRepository->findUpcomingEvents($search);
    $latestEvents = $eventRepository->findLatestEvents($search);
    
    // Render the results as a partial Twig template
    $html = $this->renderView('g_events/list.html.twig', [
        'upcomingEvents' => $upcomingEvents,
        'latestEvents' => $latestEvents,
    ]);
    
    return new Response($html); // Return a plain Response with the HTML
}
    private $mailer;

    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
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


//     // Event participation
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
    
    #[Route("/event/{id}", name:"event_details")]
    public function showev($id, EntityManagerInterface $entityManager): Response
    {
        // Fetch the event from the database using the id
        $event = $entityManager->getRepository(Event::class)->find($id);

        // If the event is not found, you can handle it accordingly (e.g., return a 404)
        if (!$event) {
            throw $this->createNotFoundException('The event does not exist');
        }

        // Render the event details template
        return $this->render('g_events/details.html.twig', [
            'event' => $event,
        ]);
    }
#[Route("/event/{id}/discussion", name:"event_discussion")]
public function eventDiscussion($id, EntityManagerInterface $entityManager): Response
{
    // Fetch the event from the database using the id
    $event = $entityManager->getRepository(Event::class)->find($id);

    // If the event is not found, you can handle it accordingly (e.g., return a 404)
    if (!$event) {
        throw $this->createNotFoundException('The event does not exist');
    }

    // Check if the current user is participating in the event
    $user = $this->getUser();
    if (!$user || !$event->getParticipants()->contains($user)) {
        // Redirect to event details if the user is not a participant
        $this->addFlash('error', 'You must be a participant to access the event discussion.');
        return $this->redirectToRoute('event_details', ['id' => $id]);
    }

    // Render the event discussion template
    return $this->render('g_events/discussion.html.twig', [
        'event' => $event,
    ]);
}

#[Route('/event/{id}/discussion/post', name: 'event_post_message', methods: ['POST'])]
public function postMessage(Request $request, $id, EntityManagerInterface $entityManager): RedirectResponse
{
    // Fetch the event from the database using the id
    $event = $entityManager->getRepository(Event::class)->find($id);

    if (!$event) {
        throw $this->createNotFoundException('The event does not exist');
    }

    // Check if the user is participating
    $user = $this->getUser();
    if (!$event->getParticipants()->contains($user)) {
        $this->addFlash('error', 'You must be a participant to post a message.');
        return $this->redirectToRoute('event_discussion', ['id' => $id]);
    }

    // Get the message content from the form
    $messageContent = $request->request->get('message');
    if ($messageContent) {
        // Create and save the message
        $message = new EventMessage();
        $message->setUser($user);
        $message->setEvent($event);
        $message->setContent($messageContent);

        // Persist the message
        $entityManager->persist($message);
        $entityManager->flush();
    }

    // Redirect back to the event discussion page
    return $this->redirectToRoute('event_discussion', ['id' => $id]);
}
}
