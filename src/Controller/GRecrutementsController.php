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

#[Route('/g/recrutements')]

class GRecrutementsController extends AbstractController
{
    #[Route('/dash', name: 'app_show_all')]


    public function show_all(RecruitmentRepository $rec): Response
    {
        return $this->render('g_recrutements/index.html.twig', [
            'liste_recruitement'=>$rec->findAll()
        ]);
    }


    #[Route('/', name: 'app_show_all_user')]


    public function show_alluser(RecruitmentRepository $rec): Response
    {
        return $this->render('g_recrutements/SSOW.html.twig', [
            'liste_recruitement'=>$rec->findAll()
        ]);
    }

    #[Route('/details/{id}', name: 'recruitement_details')]

    public function authorDetails(RecruitmentRepository $repo, $id): Response

    {
        return $this->render('g_recrutements/show.html.twig', [
            'recruitment'=> $repo ->find($id)
        ]);
    }

    #[Route('/delete/{id}', name: 'Recruitment_delete')]
    public function authorDelete1(Recruitment $rec, ManagerRegistry $manager)
    {
        $em = $manager->getManager();
        $em->remove($rec);
        $em->flush();
        return $this->redirectToRoute('app_show_all');
    }
    


    #[Route('/add', name: 'recruitment_add')]
public function recruitmentAdd(Request $request, ManagerRegistry $manager): Response
{
    $em = $manager->getManager();
    $recruitment = new Recruitment();
    $form = $this->createForm(RecruitmentType::class, $recruitment);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
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

#[Route('/edit/{id}', name: 'recruitment_edit')]
public function edit(Request $request, Recruitment $recruitment, ManagerRegistry $doctrine): Response
{
   
    $form = $this->createForm(RecruitmentType::class, $recruitment);
    $form->handleRequest($request);

    
    if ($form->isSubmitted() && $form->isValid()) {
        
        $recruitment->setDateUpdated(new \DateTime());

       
        $entityManager = $doctrine->getManager();
        $entityManager->flush();

        
        $this->addFlash('success', 'Recrutement modifié avec succès.');

        
        return $this->redirectToRoute('app_show_all');
    }

    
    return $this->render('g_recrutements/edit.html.twig', [
        'form' => $form->createView(),
    ]);
} 


#[Route('/apply/{id}', name: 'recruitment_apply')]
public function apply(Request $request, Recruitment $recruitment, ManagerRegistry $doctrine): Response
{
    $user = $this->getUser();

    if (!$user) {
        $this->addFlash('error', 'Vous devez être connecté pour postuler.');
        return $this->redirectToRoute('app_login');
    }

    // Retrieve the club associated with the recruitment
    $club = $recruitment->getClub();
    if (!$club) {
        $this->addFlash('error', 'Aucun club associé à ce recrutement.');
        return $this->redirectToRoute('app_show_all_user');
    }

    $application = new Application();
    $application->setRecruitment($recruitment);
    $application->setCandidat($user);
    $application->setClub($club);
    $application->setDateSoumission(new \DateTime());
    $application->setStatus('PENDING');

    $form = $this->createForm(ApplicationRType::class, $application);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Handle file uploads (e.g., CV)
        $cvFile = $form->get('cv')->getData();
        if ($cvFile) {
            $cvFileName = uniqid() . '.' . $cvFile->guessExtension();
            $cvFile->move($this->getParameter('cv_directory'), $cvFileName);
            $application->setCv($cvFileName);
        }

        $entityManager = $doctrine->getManager();
        $entityManager->persist($application);
        $entityManager->flush();

        $this->addFlash('success', 'Votre candidature a été soumise avec succès.');
        return $this->redirectToRoute('app_show_all_user');
    }

    return $this->render('g_recrutements/apply.html.twig', [
        'form' => $form->createView(),
        'recruitment' => $recruitment,
    ]);
}



}