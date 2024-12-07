<?php

namespace App\Controller;

use App\Entity\Application;
use App\Form\ApplicationType;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class ApplicationController extends AbstractController
{
    #[Route('/application', name: 'application_submit')]
    public function submit(Request $request, ClubRepository $clubRepository, EntityManagerInterface $entityManager): Response
    {
        $clubs = $clubRepository->findAll();

        $application = new Application();

        $form = $this->createForm(ApplicationType::class, $application, [
            'clubs' => $clubs,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $application = $form->getData();



            // when done with the login instead of 11 getUser->getid


            $user = $entityManager->getRepository(User::class)->find(15); 
            if ($user) {
                $application->setCandidat($user); 
            } else {
                throw $this->createNotFoundException('User not found');
            }

            $entityManager->persist($application);
            $entityManager->flush();

            $this->addFlash('success', 'Your application has been submitted successfully!');
            return $this->redirectToRoute('application_submit');
        }

        return $this->render('application/submit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
}
