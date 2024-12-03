<?php
namespace App\Controller;

use App\Entity\Ressource;
use App\Entity\DemandeRessource;
use App\Entity\Club;
use App\Form\DemandeRessourceType;
use App\Form\DemandeType;
use App\Form\RessourceType;
use App\Repository\RessourcesRepository;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface; // Ajout de l'import pour l'EntityManagerInterface

class GRessourcesController extends AbstractController
{
    private $entityManager;

    // Injection de EntityManagerInterface via le constructeur
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
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
  


    
   
    #[Route('/g/ressources/new', name: 'ressource_new')]
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
    
        return $this->render('g_ressources/new.html.twig', [
            'form' => $form->createView(),
        ]);

        
    
    }
    #[Route('/g/ressources', name: 'app_g_ressources')]
    public function index(): Response
    {
        // Fetch all resources from the database
        $ressources = $this->entityManager->getRepository(Ressource::class)->findAll();

        // Pass resources to the template
        return $this->render('g_ressources/index.html.twig', [
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

    return $this->render('g_ressources/confirm_delete.html.twig', [
        'ressource' => $ressource,
    ]);
}
#[Route('/g/ressources/edit/{id}', name: 'ressource_edit')]
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
    return $this->render('g_ressources/edit.html.twig', [
        'form' => $form->createView(),
        'ressource' => $ressource, // Optionally pass the resource to display additional info
    ]);
}   



//partie demande 
/**
     * @Route("/demande/ressource", name="demande_ressource")
     */
    #[Route('/g/ressources/demande', name: 'demande_ressource')]
    public function demandeRessource(Request $request, EntityManagerInterface $entityManager)
    {
        $demande = new DemandeRessource();
    
        // Récupérer l'ID de la ressource depuis l'URL
        $ressourceId = $request->query->get('ressourceId');
    
        if ($ressourceId) {
            // Trouver la ressource par ID
            $ressource = $entityManager->getRepository(Ressource::class)->find($ressourceId);
            if ($ressource) {
                // Pré-remplir la ressource dans la demande
                $demande->setRessource($ressource);
            }
        }
    
        $form = $this->createForm(DemandeRessourceType::class, $demande);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $demande->setDateDemande(new \DateTime());
            $demande->setStatutDemande('en attente');
    
            // Associer le club actuellement connecté
           // $demande->setClub($this->getUser()->getClub());
    
            $entityManager->persist($demande);
            $entityManager->flush();
    
            // Rediriger après la demande
            return $this->redirectToRoute('demande_liste');
        }
    
        return $this->render('g_ressources/demandeRessource.html.twig', [
            'form' => $form->createView(),
        ]);


}



#[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('g_ressources/dashboard.html.twig');
    }
}