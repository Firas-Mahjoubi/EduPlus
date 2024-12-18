<?php

namespace App\Controller;

use App\Entity\Application;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Recruitment;
use App\Entity\User;
use App\Repository\RecruitmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\RecruitmentType;

use App\Form\ApplicationRType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

#[Route('/g/recrutements')]

class GRecrutementsController extends AbstractController
{
    

    //show recrutements

        #[Route('/', name: 'app_show_all_user')]


        public function show_alluser(RecruitmentRepository $rec): Response
        {
            return $this->render('g_recrutements/SSOW.html.twig', [
                'liste_recruitement'=>$rec->findAll()
            ]);
        }



//details rec
    

#[Route('/recruitment/details/{id}', name: 'user_recruitment_details')]
public function showDetailsForUser(Recruitment $recruitment): Response
{
    return $this->render('g_recrutements/user_show.html.twig', [
        'recruitment' => $recruitment,
    ]);
}



#[Route('/apply/{id}', name: 'recruitment_apply')]
public function apply(Request $request, Recruitment $recruitment, ManagerRegistry $doctrine): Response
{
    $user = $this->getUser();

    // Vérifier si l'utilisateur est connecté
    if (!$user) {
        $this->addFlash('error', 'Vous devez être connecté pour postuler.');
        return $this->redirectToRoute('app_login');
    }

    // Vérifier si l'utilisateur a déjà postulé pour ce recrutement
    $existingApplication = $doctrine->getRepository(Application::class)->findOneBy([
        'candidat' => $user,
        'recruitment' => $recruitment,
    ]);

    if ($existingApplication) {
        $this->addFlash('error', 'Vous avez déjà postulé pour ce recrutement.');
        return $this->redirectToRoute('app_show_all_user'); // Rediriger vers la liste des recrutements
    }

    // Vérifier si le recrutement est associé à un club
    $club = $recruitment->getClub();
    if (!$club) {
        $this->addFlash('error', 'Aucun club associé à ce recrutement.');
        return $this->redirectToRoute('app_show_all_user');
    }

    // Créer une nouvelle candidature
    $application = new Application();
    $application->setRecruitment($recruitment);
    $application->setCandidat($user);
    $application->setClub($club);
    $application->setDateSoumission(new \DateTime());
    $application->setStatus('PENDING');

    // Créer le formulaire de candidature
    $form = $this->createForm(ApplicationRType::class, $application);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gérer le téléchargement du CV (si applicable)
        $cvFile = $form->get('cv')->getData();
        if ($cvFile) {
            $cvFileName = uniqid() . '.' . $cvFile->guessExtension();
            $cvFile->move($this->getParameter('cv_directory'), $cvFileName);
            $application->setCv($cvFileName);
        }

        // Enregistrer la candidature dans la base de données
        $entityManager = $doctrine->getManager();
        $entityManager->persist($application);
        $entityManager->flush();

        $this->addFlash('success', 'Votre candidature a été soumise avec succès.');
        return $this->redirectToRoute('app_show_all_user');
    }

    // Rendre la vue du formulaire
    return $this->render('g_recrutements/apply.html.twig', [
        'form' => $form->createView(),
        'recruitment' => $recruitment,
    ]);
}

#[Route('/application/delete/{id}', name: 'application_delete')]
public function deleteApplication(Application $application, ManagerRegistry $doctrine): Response
{
    $user = $this->getUser();

    // Vérifiez que l'utilisateur est connecté et est le propriétaire de la candidature
    if ($application->getCandidat() !== $user) {
        $this->addFlash('error', 'Vous ne pouvez pas supprimer cette candidature.');
        return $this->redirectToRoute('app_show_all_user');
    }

    $entityManager = $doctrine->getManager();
    $entityManager->remove($application);
    $entityManager->flush();

    $this->addFlash('success', 'Votre candidature a été supprimée avec succès.');
    return $this->redirectToRoute('app_show_all_user');
}


#[Route('/recruitment/{id}/check', name: 'check_application_status')]
public function checkApplicationStatus(Recruitment $recruitment, ManagerRegistry $doctrine): Response
{
    $user = $this->getUser();

    // Vérifiez si une candidature existe pour l'utilisateur connecté
    $existingApplication = $doctrine->getRepository(Application::class)->findOneBy([
        'candidat' => $user,
        'recruitment' => $recruitment,
    ]);

    return $this->render('g_recrutements/recruitment_status.html.twig', [
        'recruitment' => $recruitment,
        'application' => $existingApplication,
    ]);
}


//recherche 



#[Route('/search', name: 'recruitment_search')]
public function search(Request $request, RecruitmentRepository $repository): Response
{
    // Récupérer le terme de recherche depuis la requête
    $searchTerm = $request->query->get('q', '');

    // Appeler la méthode du Repository pour obtenir les résultats
    $results = $repository->searchRecruitments($searchTerm);

    // Rendre la vue Twig avec les résultats
    return $this->render('g_recrutements/search_results.html.twig', [
        'results' => $results,
        'searchTerm' => $searchTerm,
    ]);
}

}
















