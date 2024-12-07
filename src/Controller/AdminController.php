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

#[Route('/admin')]  // Add the '/admin' prefix here at the class level
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
                    ->from('mahjoubi.firas@esprit.tn') // Your Outlook email
                    ->to($user->getEmail())
                    ->subject('New Event: ' . $event->getTitre())
                    ->html($this->renderView('emails/new_event.html.twig', [
                        'event' => $event
                    ]));

                $this->mailer->send($email);
            }

            $this->addFlash('success', 'Event added successfully and emails sent to all users.');
            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('g_events/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
