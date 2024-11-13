<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/events')]
class GEventsController extends AbstractController
{
    #[Route('/', name: 'app_g_events')]
public function index(EventRepository $eventRepository): Response
{
    // Fetch all events
    $events = $eventRepository->findAll();

    return $this->render('g_events/index.html.twig', [
        'events' => $events,  // Pass events to the template
    ]);
}

    #[Route('/add', name: 'app_g_events_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Save the new event to the database
            $entityManager->persist($event);
            $entityManager->flush();

            // Optionally, add a success message
            $this->addFlash('success', 'Event added successfully.');

            // Redirect to a different page after adding the event
            return $this->redirectToRoute('app_g_events');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
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
    #[Route('/update/{id}', name: 'app_g_events_update', methods: ['GET', 'POST'])]
public function update(int $id, Request $request, EntityManagerInterface $entityManager, EventRepository $eventRepository): Response
{
    // Find the event by ID
    $event = $eventRepository->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found.');
    }

    // Create the form for updating the event
    $form = $this->createForm(EventType::class, $event);
    $form->handleRequest($request);

    // If form is submitted and valid, update the event
    if ($form->isSubmitted() && $form->isValid()) {
        // Persist the updated event
        $entityManager->flush();

        // Add a success message
        $this->addFlash('success', 'Event updated successfully.');

        // Redirect to the event's detail page
        return $this->redirectToRoute('app_g_events_show', ['id' => $event->getId()]);
    }

    return $this->render('g_events/update.html.twig', [
        'form' => $form->createView(),
    ]);
}
#[Route('/delete/{id}', name: 'app_g_events_delete', methods: ['POST'])]
public function delete(int $id, Request $request, EntityManagerInterface $entityManager, EventRepository $eventRepository): Response
{
    // Find the event by ID
    $event = $eventRepository->find($id);

    if (!$event) {
        throw $this->createNotFoundException('Event not found.');
    }

    // Check CSRF token for protection
    if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->get('_token'))) {
        // Remove the event from the database
        $entityManager->remove($event);
        $entityManager->flush();

        // Add a success message
        $this->addFlash('success', 'Event deleted successfully.');
    } else {
        $this->addFlash('error', 'Invalid CSRF token.');
    }

    // Redirect to the event list page after deletion
    return $this->redirectToRoute('app_g_events');
}

}
