<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Dompdf\Dompdf;
use Dompdf\Options;



#[Route('/admin')]  
class AdminController extends AbstractController
{
    private $entityManager;
    private $mailer;

    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }
    // Inject the EntityManagerInterface into the constructor
   
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        $user = $this->getUser();  // Assuming you are using Symfony's security system

        return $this->render('admin/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/dashboard', name: 'admin_dashboard')]
    public function dashboard(EntityManagerInterface $entityManager)
    {
        // Get the list of all users
        $user = $entityManager->getRepository(User::class)->findAll();
    
        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,  // Pass the list of users to the template
        ]);
    }
    // Add a new event
    #[Route('/event/add', name: 'app_g_events_add', methods: ['GET', 'POST'])]
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
                } catch (\Exception $e) {
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
            $this->entityManager->persist($event); // Use injected entity manager
            $this->entityManager->flush(); // Save to the database

            // Generate PDF
            $pdfContent = $this->renderView('emails/event_pdf.html.twig', [
                'event' => $event,
            ]);
            $pdf = $this->generatePdf($pdfContent);

            // Send email notification to all users
            $users = $userRepository->findAll();
            foreach ($users as $user) {
                $email = (new Email())
                    ->from('no-reply@yourdomain.com')
                    ->to($user->getEmail())
                    ->subject('New Event: ' . $event->getTitre())
                    ->html($this->renderView('emails/new_event.html.twig', [
                        'event' => $event
                    ]))
                    ->attach($pdf, 'event-details.pdf', 'application/pdf');

                $this->mailer->send($email);
            }

            $this->addFlash('success', 'Event added successfully and emails sent to all users.');
            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function generatePdf(string $htmlContent): string
    {
        // Initialize Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($htmlContent);

        // Render PDF (first pass)
        $dompdf->render();

        // Stream PDF to browser
        return $dompdf->output(); // Return the generated PDF content
    }
    #[Route('/event/backoffice', name: 'app_event_dashboard_backoffice')]
    public function dashboardevents(Request $request, EventRepository $eventRepository): Response
    {
        $search = $request->query->get('search', '');
        $events = $eventRepository->findBySearch($search); // Search function implemented in EventRepository

        return $this->render('g_events/dashboard.html.twig', [
            'events' => $events,
        ]);
    }
    #[Route('/event/update/{id}', name: 'app_g_events_update', methods: ['GET', 'POST'])]
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

        return $this->redirectToRoute('app_event_dashboard_backoffice', ['id' => $event->getId()]);
    }

    return $this->render('g_events/update.html.twig', [
        'form' => $form->createView(),
        'event' => $event,  // Pass the event object to the template
    ]);
}

    // Delete an event
    #[Route('/event/delete/{id}', name: 'app_g_events_delete', methods: ['POST'])]
public function delete(Event $event, EntityManagerInterface $entityManager, CsrfTokenManagerInterface $csrfTokenManager, Request $request): Response
{
    // Verify CSRF Token
    $token = $request->request->get('_token');
    if (!$csrfTokenManager->isTokenValid(new CsrfToken('delete' . $event->getId(), $token))) {
        throw $this->createAccessDeniedException('Invalid CSRF token.');
    }

    // Remove the event from the database
    $entityManager->remove($event);
    $entityManager->flush();

    // Add a success message to the session flash
    $this->addFlash('success', 'Event deleted successfully.');

    // Redirect to the event dashboard
    return $this->redirectToRoute('app_event_dashboard_backoffice');
}
}
