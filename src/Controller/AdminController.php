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
use App\Repository\RecruitmentRepository;
use App\Form\RecruitmentType;
use App\Entity\Application;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Recruitment;
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
/////////////////////////////////////////////////////////////////////////////
 //dash recrutements
 #[Route('/dash', name: 'app_show_all')]
 public function show_all(ManagerRegistry $doctrine): Response
 {
     $entityManager = $doctrine->getManager();
     $recruitmentRepository = $doctrine->getRepository(Recruitment::class);
 
     $recruitments = $recruitmentRepository->findAll();
 
     foreach ($recruitments as $recruitment) {
         if ($recruitment->getDeadline() < new \DateTime() && $recruitment->getStatus() === 'open') {
             $recruitment->setStatus('closed');
             $entityManager->persist($recruitment);
         }
     }
 
     // Enregistrer les changements dans la base de données
     $entityManager->flush();
 
     return $this->render('g_recrutements/index.html.twig', [
         'liste_recruitement' => $recruitments,
     ]);
 }
 
 
    
 
     // add recrutement
 
     #[Route('/add', name: 'recruitment_add')]
 public function recruitmentAdd(Request $request, ManagerRegistry $manager): Response
 {
     $em = $manager->getManager();
     $recruitment = new Recruitment();
     $form = $this->createForm(RecruitmentType::class, $recruitment);
     $form->handleRequest($request);
 
     if ($form->isSubmitted() && $form->isValid()) {
         // Gestion de l'image
         $imageFile = $form->get('image')->getData();
 
         if ($imageFile) {
             $newFilename = uniqid() . '.' . $imageFile->guessExtension();
 
             try {
                 $imageFile->move(
                     $this->getParameter('images_directory'),
                     $newFilename
                 );
             } catch (FileException $e) {
                 // Gérer une exception d'upload si nécessaire
             }
 
             $recruitment->setImage($newFilename);
         }
 
         $recruitment->setDateCreated(new \DateTime());
         $em->persist($recruitment);
         $em->flush();
 
         $this->addFlash('success', 'Recrutement ajouté avec succès.');
         return $this->redirectToRoute('app_show_all');
     }
 
     return $this->render('g_recrutements/form.html.twig', [
         'f' => $form->createView(),
     ]);
 }
 
    
 
 //delete recrutements
 #[Route('/delete/{id}', name: 'Recruitment_delete')]
 public function authorDelete1(Recruitment $rec, ManagerRegistry $manager)
 {
     $em = $manager->getManager();
     $em->remove($rec);
     $em->flush();
     return $this->redirectToRoute('app_show_all');
 }
 
 //update recrutements
 #[Route('/edit/{id}', name: 'recruitment_edit')]
 public function edit(Request $request, Recruitment $recruitment, ManagerRegistry $doctrine): Response
 {
     $form = $this->createForm(RecruitmentType::class, $recruitment);
     $form->handleRequest($request);
 
     if ($form->isSubmitted() && $form->isValid()) {
         // Gestion de l'image
         $imageFile = $form->get('image')->getData();
 
         if ($imageFile) {
             // Générer un nom unique pour l'image
             $newFilename = uniqid() . '.' . $imageFile->guessExtension();
 
             try {
                 // Déplacer l'image dans le répertoire défini
                 $imageFile->move(
                     $this->getParameter('images_directory'),
                     $newFilename
                 );
 
                 // Mettre à jour l'image dans l'entité
                 $recruitment->setImage($newFilename);
             } catch (FileException $e) {
                 // Gérer les erreurs lors du téléchargement de l'image
                 $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
             }
         }
 
         // Mettre à jour la date de modification
         $recruitment->setDateUpdated(new \DateTime());
 
         // Sauvegarder les modifications dans la base de données
         $entityManager = $doctrine->getManager();
         $entityManager->flush();
 
         $this->addFlash('success', 'Recrutement modifié avec succès.');
 
         return $this->redirectToRoute('app_show_all');
     }
 
     return $this->render('g_recrutements/edit.html.twig', [
         'form' => $form->createView(),
     ]);
 }
 
 
 //liste de candidatures pour un recru
 #[Route('/applications/{id}', name: 'recruitment_applications')]
 public function listApplications(Recruitment $recruitment, ManagerRegistry $doctrine): Response
 {
     $applications = $doctrine->getRepository(Application::class)->findBy(['recruitment' => $recruitment]);
 
     return $this->render('g_recrutements/applications.html.twig', [
         'applications' => $applications,
         'recruitment' => $recruitment,
     ]);
 }
 
 
 
 //decision de l'accepter ou refusr candidat
 #[Route('/application/decision/{id}/{decision}', name: 'application_decision')]
 public function applicationDecision(
     Application $application,
     string $decision,
     MailerInterface $mailer,
     ManagerRegistry $doctrine
 ): Response {
     $entityManager = $doctrine->getManager();
 
     // Déterminer le statut et le message
     if ($decision === 'valider') {
         $application->setStatus('ACCEPTED');
         $subject = 'Votre candidature a été acceptée';
         $message = 'Félicitations ! Votre candidature a été acceptée.';
     } elseif ($decision === 'rejeter') {
         $application->setStatus('REJECTED');
         $subject = 'Votre candidature a été rejetée';
         $message = 'Nous sommes désolés, mais votre candidature a été rejetée.';
     } else {
         $this->addFlash('error', 'Décision invalide.');
         return $this->redirectToRoute('recruitment_applications', ['id' => $application->getRecruitment()->getId()]);
     }
 
     // Mettre à jour le statut dans la base de données
     $entityManager->flush();
 
     // Vérifier que le candidat est associé à l'application
     if ($application->getCandidat() && $application->getCandidat()->getEmail()) {
         // Créer et envoyer l'e-mail
         $email = (new TemplatedEmail())
     ->from('no-reply@yourdomain.com')
     ->to($application->getCandidat()->getEmail())
     ->subject($subject)
     ->htmlTemplate('emails/application_decision.html.twig') // Assurez-vous que ce chemin est correct
     ->context([
         'application' => $application,
         'message' => $message,
     ]);
 
         $mailer->send($email);
     }
 
     // Message flash pour l'administrateur
     $this->addFlash('success', 'La décision a été enregistrée et un e-mail a été envoyé au candidat.');
 
     return $this->redirectToRoute('recruitment_applications', ['id' => $application->getRecruitment()->getId()]);
 }
 
 //details de candidat
 #[Route('/application/{id}/details', name: 'application_details')]
 public function showApplicationDetails(Application $application): Response
 {
     return $this->render('g_recrutements/application_details.html.twig', [
         'application' => $application,
         'candidat' => $application->getCandidat(),
     ]);
 }
 
 
 
 //details recrutements
 #[Route('/details/{id}', name: 'recruitment_details')]
 public function showDetails(Recruitment $recruitment): Response
 {
     return $this->render('g_recrutements/show.html.twig', [
         'recruitment' => $recruitment,
     ]);
 }
 
 //statistic 
 
 #[Route('/dashboard1', name: 'admin_dashboard')]
 public function dashboard1(ManagerRegistry $doctrine): Response
 {
     $recruitmentRepository = $doctrine->getRepository(Recruitment::class);
     $applicationRepository = $doctrine->getRepository(Application::class);
 
     // Récupérer tous les recrutements
     $recruitments = $recruitmentRepository->findAll();
 
     $statistics = [];
     $labels = [];
     $applicationsData = [];
     $acceptedData = [];
     $rejectedData = [];
     $pendingData = [];
     $totalAccepted = 0;
     $totalRejected = 0;
     $totalPending = 0;
 
     foreach ($recruitments as $recruitment) {
         // Récupérer les candidatures pour chaque recrutement
         $applications = $applicationRepository->findBy(['recruitment' => $recruitment]);
 
         // Calcul des statistiques par statut
         $accepted = count(array_filter($applications, fn($app) => $app->getStatus() === 'ACCEPTED'));
         $rejected = count(array_filter($applications, fn($app) => $app->getStatus() === 'REJECTED'));
         $pending = count(array_filter($applications, fn($app) => $app->getStatus() === 'PENDING'));
 
         // Ajouter les statistiques au tableau général
         $statistics[] = [
             'title' => $recruitment->getTitle(),
             'applications' => count($applications),
             'accepted' => $accepted,
             'rejected' => $rejected,
             'pending' => $pending,
         ];
 
         // Préparer les données pour les graphiques
         $labels[] = $recruitment->getTitle();
         $applicationsData[] = count($applications);
         $acceptedData[] = $accepted;
         $rejectedData[] = $rejected;
         $pendingData[] = $pending;
 
         // Calcul des totaux globaux
         $totalAccepted += $accepted;
         $totalRejected += $rejected;
         $totalPending += $pending;
     }
 
     $totalApplications = array_sum($applicationsData);
 
     return $this->render('admin/dashboardR.html.twig', [
         'statistics' => $statistics,
         'labels' => $labels,
         'applicationsData' => $applicationsData,
         'acceptedData' => $acceptedData,
         'rejectedData' => $rejectedData,
         'pendingData' => $pendingData,
         'totalApplications' => $totalApplications,
         'totalAccepted' => $totalAccepted,
         'totalRejected' => $totalRejected,
         'totalPending' => $totalPending,
     ]);
 }
 

}






