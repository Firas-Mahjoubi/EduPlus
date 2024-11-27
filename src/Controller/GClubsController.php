<?php

namespace App\Controller;

use App\Entity\Club;

use App\Enum\MemberRole;
use App\Entity\Member;
use App\Entity\Application;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use App\Repository\MemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ApplicationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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

    #[Route('/allClubs', name: 'club_manage')]
    public function showClubs(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        return $this->render('club/allClubs.html.twig', [
            'clubs' => $clubs,
        ]);
    }



    #[Route('/new', name: 'club_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                $filename = uniqid() . '.' . $logoFile->guessExtension();
                $logoFile->move($this->getParameter('club_logos_directory'), $filename);
                $club->setLogo($filename);
            }

            $entityManager->persist($club);
            $entityManager->flush();

            $this->addFlash('success', 'Club created successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/new.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'club_show', methods: ['GET'])]
    public function showMembers(Club $club, MemberRepository $memberRepository): Response
    {
        $members = $memberRepository->findBy(['club' => $club]);

        return $this->render('club/showclubmembers.html.twig', [
            'club' => $club,
            'members' => $members,
        ]);
    }


    #[Route('/{id}/acceptApplication/{applicationId}', name: 'club_accept_application', methods: ['POST'])]
    public function acceptApplication(
        Club $club,
        ApplicationRepository $applicationRepository,
        int $applicationId,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        $application = $applicationRepository->find($applicationId);

        if (!$application || $application->getClub() !== $club) {
            throw $this->createNotFoundException('Application does not belong to this club.');
        }

        $candidate = $application->getCandidat();

        $role = $request->get('role');

        try {
            $roleEnum = MemberRole::from($role);
        } catch (\ValueError $e) {
            $this->addFlash('error', 'Invalid role selected.');
            return $this->redirectToRoute('club_applications', ['clubId' => $club->getId()]);
        }

        $member = new Member();
        $member->setUtilisateur($candidate);
        $member->setClub($club);

        $member->setRole($roleEnum);

        $application->setStatus('ACCEPTED');
        $entityManager->flush();

        $member->setDateAdhesion(new \DateTime());
        $entityManager->persist($member);
        $entityManager->flush();

        $this->addFlash('success', 'Application accepted, and member added successfully!');
        return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
    }

    #[Route('/{id}/rejectApplication/{applicationId}', name: 'club_reject_application', methods: ['POST'])]
    public function rejectApplication(Club $club, ApplicationRepository $applicationRepository, int $applicationId, EntityManagerInterface $entityManager): Response
    {
        $application = $applicationRepository->find($applicationId);

        if (!$application || $application->getClub() !== $club) {
            throw $this->createNotFoundException('Application does not belong to this club.');
        }

        if ($application->getStatus() === 'REJECTED') {
            $this->addFlash('warning', 'This application has already been rejected.');
            return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
        }

        $application->setStatus('REJECTED');
        $entityManager->flush();

        $this->addFlash('success', 'Application rejected successfully!');
        return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
    }

    #[Route('/{id}/edit', name: 'club_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Club $club, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $form->get('logo')->getData();
            if ($logoFile) {
                if ($club->getLogo()) {
                    $filesystem = new Filesystem();
                    $filesystem->remove($this->getParameter('club_logos_directory') . '/' . $club->getLogo());
                }

                $filename = uniqid() . '.' . $logoFile->guessExtension();
                $logoFile->move($this->getParameter('club_logos_directory'), $filename);
                $club->setLogo($filename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Club updated successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/edit.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{clubId}/applications', name: 'club_applications')]
    public function showClubApplications(
        int $clubId,
        ClubRepository $clubRepository,
        ApplicationRepository $applicationRepository
    ): Response {
        $club = $clubRepository->find($clubId);

        if (!$club) {
            throw $this->createNotFoundException('Club not found.');
        }

        $applications = $applicationRepository->findBy(['club' => $club]);

        $roles = array_map(fn($role) => $role->value, MemberRole::cases());

        return $this->render('application/club_applications.html.twig', [
            'club' => $club,
            'applications' => $applications,
            'roles' => $roles,
        ]);
    }
    #[Route('/search', name: 'club_search', methods: ['GET'])]
    public function search(Request $request, ClubRepository $clubRepository): Response
    {
        $searchQuery = $request->query->get('query', ''); // Get the query parameter from the URL
        $clubs = [];

        if (!empty($searchQuery)) {
            // Search for clubs that match the query
            $clubs = $clubRepository->findBySearchQuery($searchQuery);
        }

        return $this->render('club/search.html.twig', [
            'clubs' => $clubs,
            'searchQuery' => $searchQuery,
        ]);
    }




    #[Route('/club/{id}', name: 'club_details')]
    public function clubDetails(int $id, ClubRepository $clubRepository): Response
    {
        $club = $clubRepository->find($id);

        if (!$club) {
            throw $this->createNotFoundException('Club not found');
        }

        return $this->render('club/details.html.twig', [
            'club' => $club,
        ]);
    }



    #[Route('/delete/{id}', name: 'club_delete', methods: ['POST'])]
    public function delete(Request $request, Club $club, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $club->getId(), $request->request->get('_token'))) {
            if ($club->getLogo()) {
                $filesystem = new Filesystem();
                $filesystem->remove($this->getParameter('club_logos_directory') . '/' . $club->getLogo());
            }

            $entityManager->remove($club);
            $entityManager->flush();

            $this->addFlash('success', 'Club deleted successfully!');
        }

        return $this->redirectToRoute('club_index');
    }
}
