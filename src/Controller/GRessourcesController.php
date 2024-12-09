<?php
namespace App\Controller;
use App\Form\StatutDemandeType;

use App\Entity\Ressource;
use App\Entity\DemandeRessource;
use App\Entity\Club;
use App\Entity\Notification;
use App\Repository\NotificationRepository;
use App\Form\DemandeRessourceType;
use App\Form\DemandeType;
use App\Form\AdminDemandeStatusType;
use App\Form\RessourceType;
use App\Repository\RessourcesRepository;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface; // Ajout de l'import pour l'EntityManagerInterface
use Doctrine\Persistence\ManagerRegistry;  // For Doctrine

class GRessourcesController extends AbstractController
{
    private $entityManager;
    private $doctrine;
    private NotificationRepository $notificationRepository;


    public function __construct(EntityManagerInterface $entityManager, ManagerRegistry $doctrine,NotificationRepository $notificationRepository)
    {
        $this->entityManager = $entityManager;
        $this->doctrine = $doctrine;
        $this->notificationRepository = $notificationRepository;
    }
    #[Route('/g/ressources', name: 'app_g_ressources')]
    public function indexx(): Response
    {
        return $this->render('g_ressources/index.html.twig', [
            'controller_name' => 'GRessourcesController',
        ]);
    }
    #[Route('/g/ressourcess', name: 'app_g_ressourcess')]
    public function indexxx(RessourcesRepository $ressourceRepository): Response 
    {
        
        $ressources = $ressourceRepository->findAll();

        return $this->render('g_ressources/show.html.twig', [
            'ressources' => $ressources,
        ]);
        
        $search = $request->query->get('search');
        if ($search) {
            $ressources = $ressourceRepository->findBySearch($search);
        } else {
            $ressources = $ressourceRepository->findAll();
        }
    
        return $this->render('g_ressources/show.html.twig', [
            'ressources' => $ressources,
        ]);
    }
  


    
   
    #[Route('/dashboard/ressources/new', name: 'ressource_new')]
    public function new(Request $request): Response
    {
        $ressource = new Ressource();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le fichier téléchargé
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();
            $ressource->setDateCreationRessource(new \DateTime());

    
            if ($file) {
                // Générer un nom unique pour l'image
                $newFilename = uniqid() . '.' . $file->guessExtension();
    
                // Déplacer le fichier dans le répertoire 'uploads/ressources'
                $file->move(
                    $this->getParameter('uploads_directory'), // Récupère le paramètre du répertoire
                    $newFilename
                );
    
                // Mettre à jour l'entité avec le nom de fichier
                $ressource->setImage($newFilename);
            }
    
            // Sauvegarder la ressource
            $this->entityManager->persist($ressource);
            $this->entityManager->flush();
    
            // Rediriger après l'ajout
            return $this->redirectToRoute('app_g_ressources');
        }
    
        return $this->render('g_ressources/backOffice/new.html.twig', [
            'form' => $form->createView(),
        ]);

        
    
    }
    #[Route('/dashboard/ressources', name: 'app_g_ressources')]
    public function index(): Response
    {
        // Fetch all resources from the database
        $ressources = $this->entityManager->getRepository(Ressource::class)->findAll();

        // Pass resources to the template
        return $this->render('g_ressources/backOffice/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }
    #[Route('/g/ressources/delete/{id}', name: 'ressource_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, Ressource $ressource): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ressource->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($ressource);
            $this->entityManager->flush();
        }

        // Redirect back to the resources list
        return $this->redirectToRoute('app_g_ressources');
    }

    #[Route('/g/ressources/delete/confirm/{id}', name: 'ressource_delete_confirm')]
public function confirmDelete(int $id, Request $request): Response
{
    // Fetch the resource by ID to display information
    $ressource = $this->entityManager->getRepository(Ressource::class)->find($id);

    if (!$ressource) {
        throw $this->createNotFoundException('Ressource non trouvée');
    }

    return $this->render('g_ressources/backOffice/confirm_delete.html.twig', [
        'ressource' => $ressource,
    ]);
}
#[Route('g_ressources/backOffice/edit/{id}', name: 'ressource_edit')]
public function edit(Request $request, Ressource $ressource): Response
{
    // Create the form and bind it to the existing Ressource entity
    $form = $this->createForm(RessourceType::class, $ressource);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Save changes to the database
        $this->entityManager->flush();

        // Redirect to the resource index or list page
        return $this->redirectToRoute('app_g_ressources');
    }

    // Render the form template
    return $this->render('g_ressources/backOffice/edit.html.twig', [
        'form' => $form->createView(),
        'ressource' => $ressource, // Optionally pass the resource to display additional info
    ]);
}   



// //partie demande 
// /**
//      * @Route("/demande/ressource", name="demande_ressource")
//      */
//     #[Route('/g/ressources/demande', name: 'demande_ressource')]
//     public function demandeRessource(Request $request, EntityManagerInterface $entityManager)
//     {
//         $demande = new DemandeRessource();
    
//         // Récupérer l'ID de la ressource depuis l'URL
//         $ressourceId = $request->query->get('ressourceId');
    
//         if ($ressourceId) {
//             // Trouver la ressource par ID
//             $ressource = $entityManager->getRepository(Ressource::class)->find($ressourceId);
//             if ($ressource) {
//                 // Pré-remplir la ressource dans la demande
//                 $demande->setRessource($ressource);
//             }
//         }
    
//         $form = $this->createForm(DemandeRessourceType::class, $demande);
//         $form->handleRequest($request);
    
//         if ($form->isSubmitted() && $form->isValid()) {
//             $demande = $form->getData();
//             $demande->setDateDemande(new \DateTime());
//             $demande->setStatutDemande('en attente');
    

          
            
            
//             // Associer le club actuellement connecté
//            // $demande->setClub($this->getUser()->getClub());
    
//             $entityManager->persist($demande);
//             $entityManager->flush();
            
//             $this->addFlash('success', 'Votre demande a été envoyée avec succès.');
//             // Rediriger après la demande
//             return $this->redirectToRoute('demande_ressource');
//         }
    
//         return $this->render('g_ressources/demandeRessource.html.twig', [
//             'form' => $form->createView(),
//         ]);
//     }
#[Route('/g/ressources/demande', name: 'demande_ressource')]
public function demandeRessource(Request $request, EntityManagerInterface $entityManager)
{
    $demande = new DemandeRessource();

    $ressourceId = $request->query->get('ressourceId');

    if ($ressourceId) {
        $ressource = $entityManager->getRepository(Ressource::class)->find($ressourceId);
        if ($ressource) {
            $demande->setRessource($ressource);
        }
    }

    $form = $this->createForm(DemandeRessourceType::class, $demande);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $demande = $form->getData();
        $demande->setDateDemande(new \DateTime());
        $demande->setStatutDemande('en attente');

        // Créer la notification liée à la demande
        $notification = new Notification();
        $notification->setContent('Une nouvelle demande de ressource a été soumise.');
        $notification->setStatus(0);
        $notification->setCreatedAt(new \DateTimeImmutable());
        $notification->setDemandeRessource($demande);

        $entityManager->persist($notification);
        $entityManager->persist($demande);
        $entityManager->flush();

        $this->addFlash('success', 'Votre demande a été envoyée avec succès.');
        return $this->redirectToRoute('demande_ressource');
    }

    return $this->render('g_ressources/demandeRessource.html.twig', [
        'form' => $form->createView(),
    ]);
}


    #[Route('/ressources/live-search', name: 'ressource_live_search', methods: ['GET'])]
    public function liveSearch(Request $request, RessourcesRepository $ressourceRepository): JsonResponse
    {
        $query = $request->query->get('q', '');
        $resources = $ressourceRepository->searchByQuery($query);
    
        $response = array_map(function ($ressource) {
            return [
                'id' => $ressource->getId(),
                'nomRessource' => $ressource->getNomRessource(),
                'descriptionRessource' => $ressource->getDescriptionRessource(),
                'dateCreationRessource' => $ressource->getDateCreationRessource()->format('d M, Y'),
                'image' => $ressource->getImage(),
            ];
        }, $resources);
    
        return new JsonResponse($response);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(EntityManagerInterface $entityManager): Response
    {
        // Fetch all unread notifications
        $notifications = $entityManager->getRepository(Notification::class)->findBy(['status' => 'unread']);
    
        // Return the dashboard view with notifications passed to Twig
        return $this->render('g_ressources/backOffice/notification.html.twig', [
            'notifications' => $notifications,
        ]);
    }

#[Route('/notification/{id}/mark-as-read', name: 'notification_mark_as_read')]
public function markAsRead(int $id): Response
{
    $notification = $this->entityManager->getRepository(Notification::class)->find($id);

    if ($notification) {
        $notification->setStatus('read');
        $this->entityManager->flush();
    }

    return $this->redirectToRoute('app_dashboard');
}


#[Route('/admin/demande/{id}', name: 'admin_demande_detail')]
public function detailDemande(int $id, EntityManagerInterface $entityManager, Request $request): Response
{
    $demande = $entityManager->getRepository(DemandeRessource::class)->find($id);

    if (!$demande) {
        throw $this->createNotFoundException('La demande de ressource n\'existe pas.');
    }

    $form = $this->createForm(StatutDemandeType::class, $demande);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        $this->addFlash('success', 'Le statut de la demande a été mis à jour.');
        return $this->redirectToRoute('app_dashboard');
    }

    return $this->render('g_ressources/backOffice/demande_detail.html.twig', [
        'demande' => $demande,
        'form' => $form->createView(),
    ]);
}

 #[Route('/admin/demande/{id}/edit-status', name: 'admin_demande_status')]
 public function editStatus(Request $request, DemandeRessource $demande): Response
 {
     // Créez le formulaire en liant l'entité 'DemandeRessource'
     $form = $this->createForm(AdminDemandeStatusType::class, $demande);
 
     $form->handleRequest($request);
 
     if ($form->isSubmitted() && $form->isValid()) {
         // Sauvegardez les changements dans la base de données
         $entityManager = $this->doctrine->getManager();
         $entityManager->flush();
 
         $this->addFlash('success', 'Le statut de la demande a été mis à jour.');
         return $this->redirectToRoute('app_dashboard');
     }
 
     return $this->render('g_ressources/backOffice/demande_edit_status.html.twig', [
         'form' => $form->createView(),
         'demande' => $demande,
     ]);
 }
 #[Route('/notifications/latest', name: 'latest_notifications')]
 public function fetchLatestNotifications(NotificationRepository $notificationRepository): Response
 {
     $notifications = $notificationRepository->findBy(
         ['isRead' => false], // Filter unread notifications
         ['createdAt' => 'DESC'], // Order by the latest first
         4 // Limit to the latest 4 notifications
     );

     return $this->json($notifications);
 }

 #[Route('/notifications', name: 'all_notifications')]
 public function fetchAllNotifications(NotificationRepository $notificationRepository): Response
 {
     $notifications = $notificationRepository->findBy(
         [],
         ['createdAt' => 'DESC'] // Order by the latest first
     );

     return $this->render('g_ressources/backOffice/all.html.twig', [
         'notifications' => $notifications,
     ]);
 }

 #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function dashboardd(): Response
    {
        // Fetch the latest 4 unread notifications
        $notifications = $this->notificationRepository->findBy(
            ['status' => 'unread'],  // Assuming 'unread' is the status
            ['createdAt' => 'DESC'],
            4
        );

        return $this->render('base_backoffice.html.twig', [
            'notifications' => $notifications,
        ]);
    }

    #[Route('/get-notifications', name: 'get_notifications')]
    public function getNotifications(): JsonResponse
    {
        // Dummy data for testing
        $notifications = [
            ['content' => 'New notification 1', 'createdAt' => '2024-12-07'],
            ['content' => 'New notification 2', 'createdAt' => '2024-12-06'],
            ['content' => 'New notification 3', 'createdAt' => '2024-12-05']
        ];

        return new JsonResponse($notifications); // Return JSON
    }
    
    #[Route('/notification/{id}/mark-read', name: 'mark_notification_read')]
    public function markNotificationRead(Notification $notification): Response
    {
        // Update the notification status to 'read'
        $notification->setStatus(1);
        
        // Use injected EntityManagerInterface instead of getDoctrine()
        $this->entityManager->flush();

        // Redirect back to the dashboard
        return $this->redirectToRoute('admin_dashboard');
    }
    
}