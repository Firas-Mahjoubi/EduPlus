<?php

namespace App\Controller;

use App\Entity\Club;

use App\Enum\MemberRole;

use Symfony\Bridge\Doctrine\Attribute\MapEntity;

use App\Entity\Member;
use App\Entity\Application;

use App\Entity\Rating;
use App\Entity\Commentary;


use App\Repository\RatingRepository;
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
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;



use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

#[Route('/club')]
class GClubsController extends AbstractController
{
    #[Route('/', name: 'club_index')]
    public function index(ManagerRegistry $doctrine, ParameterBagInterface $parameterBag): Response
    {
        $clubs = $doctrine->getRepository(Club::class)->findAll();
        $logosDirectory = $parameterBag->get('club_logos_directory');
        $clubsWithRatings = [];
        foreach ($clubs as $club) {
            $averageRating = $this->getAverageRating($club); // Calculate the average rating
            $clubsWithRatings[] = [
                'club' => $club,
                'averageRating' => $averageRating,
            ];
        }

        return $this->render('club/index.html.twig', [
            'clubsWithRatings' => $clubsWithRatings,

            'clubs' => $clubs,
            'logos_directory' => $logosDirectory,
        ]);
    }
    #[Route('/rating/{id}', name: 'rate_club')]
    public function rateClub(
        Request $request,
        Security $security,
        ClubRepository $clubRepository,
        RatingRepository $ratingRepository,
        int $id
    ) {
        $club = $clubRepository->find($id);

        if (!$club) {
            throw $this->createNotFoundException('Club not found');
        }

        $user = $security->getUser();
        if (!$user) {
            // Redirect to login page if the user is not logged in
            return $this->redirectToRoute('app_login');
        }

        $ratingValue = $request->request->get('rating');
        if ($ratingValue >= 1 && $ratingValue <= 5) {
            // Save the new rating
            $rating = new Rating();
            $rating->setClub($club);
            $rating->setValue((float) $ratingValue);

            $ratingRepository->save($rating); // Persist the rating

            $this->addFlash('success', 'Rating added successfully!');
        } else {
            $this->addFlash('error', 'Invalid rating. Please provide a rating between 1 and 5.');
        }

        return $this->redirectToRoute('club_details', ['id' => $id]);
    }

    public function getAverageRating(Club $club): float
    {
        $ratings = $club->getRating();
        if ($ratings->isEmpty()) {
            return 0.0; // Default if no ratings
        }

        $total = 0;
        foreach ($ratings as $rating) {
            $total += $rating->getValue();
        }

        return $total / count($ratings);
    }


    #[Route('/allClubs', name: 'club_manage')]
    public function showClubs(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        return $this->render('club/allClubs.html.twig', [
            'clubs' => $clubs,
        ]);
    }
    #[Route('/listallClubs', name: 'club_list')]

    public function list(Request $request, ClubRepository $clubRepository)
    {
        // Get the search term (if any)
        $searchTerm = $request->query->get('search', '');

        // Find clubs matching the search term
        $clubs = $clubRepository->createQueryBuilder('c')
            ->where('c.nom LIKE :searchTerm OR c.description LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();

        // Fetch all clubs for display
        $allClubs = $clubRepository->findAll();

        // Initialize the searched club to null
        $searchedClub = null;

        // If a search term is provided, find the searched club
        if ($searchTerm) {
            foreach ($allClubs as $club) {
                if (str_contains(strtolower($club->getNom()), strtolower($searchTerm))) {
                    $searchedClub = $club;
                    break;
                }
            }
        }

        // Pass the clubs and searchedClub variables to the template
        return $this->render('club/index.html.twig', [
            'clubs' => $clubs,
            'allClubs' => $allClubs,
            'searchedClub' => $searchedClub, // Ensure searchedClub is passed to the template
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
    #[Route('/{id}/search', name: 'club_search_by_id', methods: ['GET'])]
    public function searchById(int $id, ClubRepository $clubRepository): Response
    {
        $club = $clubRepository->find($id);

        if (!$club) {
            $this->addFlash('error', 'Club not found.');
            return $this->redirectToRoute('club_index'); // Or any other redirect route
        }

        return $this->render('club/club_details.html.twig', [
            'club' => $club,
        ]);
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

    private ManagerRegistry $doctrine;


    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    public function addComment(Request $request): JsonResponse
    {
        $content = $request->request->get('content');
        $clubId = $request->request->get('club_id');

        if (!$content || !$clubId) {
            return new JsonResponse(['error' => 'Invalid data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Access the Club repository via the injected doctrine service
        $club = $this->doctrine->getRepository(Club::class)->find($clubId);

        if (!$club) {
            return new JsonResponse(['error' => 'Club not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Create a new commentary object
        $comment = new Commentary();
        $comment->setContent($content);
        $comment->setClub($club);
        $comment->setDate(new \DateTime());
        $comment->setUser($this->getUser()); // Assuming user is authenticated

        // Persist and flush the comment entity
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($comment);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Comment added successfully'], JsonResponse::HTTP_CREATED);
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
