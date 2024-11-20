<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
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
            // Handle file upload for the event image
            $image = $form->get('image')->getData();
            if ($image) {
                $newFilename = uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $image->move(
                        $this->getParameter('event_pictures_directory'), // Directory path
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle exception if the file couldn't be moved
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                }

                // Save the filename in the database
                $event->setImage($newFilename);
            }

            // Persist the event to the database
            $entityManager->persist($event);
            $entityManager->flush();

            // Associate the selected participants with the event
            $participants = $form->get('participants')->getData();
            foreach ($participants as $participant) {
                $event->addParticipant($participant);
            }
            $entityManager->flush();

            $this->addFlash('success', 'Event added successfully.');

            return $this->redirectToRoute('app_g_events');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

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
            // Handle file upload if a new picture is uploaded
            $pictureFile = $form->get('image')->getData();

            if ($pictureFile) {
                $uploadDirectory = $this->getParameter('event_pictures_directory'); // Get the upload directory

                // Generate a unique filename for the image
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();

                // Move the uploaded file to the upload directory
                try {
                    $pictureFile->move($uploadDirectory, $newFilename);
                    // Set the picture filename in the event entity
                    $event->setImage($newFilename);
                } catch (FileException $e) {
                    // Handle the error, e.g., log it, or show a user-friendly message
                    $this->addFlash('error', 'Failed to upload the image.');
                    return $this->redirectToRoute('app_g_events_update', ['id' => $id]);
                }
            }

            // Handle participants update (remove any participants that are unchecked)
            $participants = $form->get('participants')->getData();
            $event->clearParticipants(); // Remove existing participants
            foreach ($participants as $participant) {
                $event->addParticipant($participant);
            }

            // Persist the updated event to the database
            $entityManager->flush();

            $this->addFlash('success', 'Event updated successfully.');
            return $this->redirectToRoute('app_g_events_show', ['id' => $event->getId()]);
        }

        return $this->render('g_events/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'app_g_events_delete', methods: ['GET'])]
    public function delete(Event $event, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($event);
        $entityManager->flush();

        $this->addFlash('success', 'Event deleted successfully.');

        return $this->redirectToRoute('app_g_events');
    }
    #[Route('/show/{id}', name: 'app_g_events_show')]
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

}
