<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use App\Repository\MemberRepository;  // Add the MemberRepository for fetching members
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

#[Route('/club')]
class GClubsController extends AbstractController
{
    #[Route('/', name: 'club_index')]
    public function index(ManagerRegistry $doctrine, ParameterBagInterface $parameterBag): Response
    {
        $clubs = $doctrine->getRepository(Club::class)->findAll();
        $logosDirectory = $parameterBag->get('club_logos_directory');

        return $this->render('club/index.html.twig', [
            'clubs' => $clubs,
            'logos_directory' => $logosDirectory,
        ]);
    }

    #[Route('/new', name: 'club_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle logo file upload
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                $filename = uniqid() . '.' . $logoFile->guessExtension();
                $logoFile->move($this->getParameter('club_logos_directory'), $filename);
                $club->setLogo($filename);
            }

            // Persist the club entity
            $entityManager->persist($club);
            $entityManager->flush();

            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/new.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'club_show', methods: ['GET'])]
    public function show(Club $club, MemberRepository $memberRepository): Response
    {
        // Fetch all members of the current club
        $members = $memberRepository->findBy(['club' => $club]);

        return $this->render('club/showclubmembers.html.twig', [
            'club' => $club,
            'members' => $members,
        ]);
    }

    #[Route('/{id}/edit', name: 'club_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Club $club, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle logo file upload (if new logo is uploaded)
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                // Remove the old logo file if it exists
                if ($club->getLogo()) {
                    $filesystem = new Filesystem();
                    $filesystem->remove($this->getParameter('club_logos_directory') . '/' . $club->getLogo());
                }

                // Move the new logo to the directory
                $filename = uniqid() . '.' . $logoFile->guessExtension();
                $logoFile->move($this->getParameter('club_logos_directory'), $filename);
                $club->setLogo($filename);
            }

            // Update the club entity
            $entityManager->flush();

            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/edit.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/delete/{id}', name: 'club_delete', methods: ['POST'])]
    public function delete(Request $request, Club $club, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $club->getId(), $request->request->get('_token'))) {
            // Remove the logo file if it exists
            if ($club->getLogo()) {
                $filesystem = new Filesystem();
                $filesystem->remove($this->getParameter('club_logos_directory') . '/' . $club->getLogo());
            }

            // Remove the club entity
            $entityManager->remove($club);
            $entityManager->flush();
        }

        return $this->redirectToRoute('club_index');
    }
}
