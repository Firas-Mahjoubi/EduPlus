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
use App\Repository\CommentaryRepository;
use App\Entity\user;

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
    public function index(
        ManagerRegistry $doctrine,
        ParameterBagInterface $parameterBag,
        ClubRepository $clubRepository,
        Request $request
    ): Response {
        $logosDirectory = $parameterBag->get('club_logos_directory');
        $searchTerm = $request->query->get('search', ''); // Default to an empty string if no search term is provided

        // If a search term is provided, filter clubs by name ('nom')
        if ($searchTerm) {
            $clubs = $clubRepository->createQueryBuilder('c')
                ->where('c.nom LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%')
                ->getQuery()
                ->getResult();
        } else {
            // If no search term is provided, show all clubs
            $clubs = $clubRepository->findAll();
        }

        // Prepare clubs with ratings
        $clubsWithRatings = [];
        foreach ($clubs as $club) {
            $averageRating = $this->getAverageRating($club); // Calculate the average rating
            $clubsWithRatings[] = [
                'club' => $club,
                'averageRating' => $averageRating,
            ];
        }

        // Render the view
        return $this->render('club/index.html.twig', [
            'clubsWithRatings' => $clubsWithRatings,
            'logos_directory' => $logosDirectory,
            'searchTerm' => $searchTerm,
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
        $searchTerm = $request->query->get('search', '');  // Default to empty string if no search term is provided

        // If a search term is provided, filter by club name ('nom')
        if ($searchTerm) {
            $clubs = $clubRepository->createQueryBuilder('c')
                ->where('c.nom LIKE :searchTerm')  // Search only by club name
                ->setParameter('searchTerm', '%' . $searchTerm . '%')
                ->getQuery()
                ->getResult();
        } else {
            // If no search term is provided, show all clubs
            $clubs = $clubRepository->findAll();
        }

        return $this->render('club/adminclub.html.twig', [
            'clubs' => $clubs,  // Pass the clubs (either filtered or all)
            'searchTerm' => $searchTerm,  // Pass the current search term (if any)
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

    
    #[Route('/{clubId}/remove-member/{memberId}', name: 'remove_member', methods: ['POST'])]
    public function removeMember(int $clubId, int $memberId, ClubRepository $clubRepository, MemberRepository $memberRepository): Response
    {
        $club = $clubRepository->find($clubId);
        $member = $memberRepository->find($memberId);

        if ($club && $member) {
            $memberRepository->remove($member);  // Delete the member
            $this->addFlash('success', 'Member removed successfully!');
        } else {
            $this->addFlash('error', 'Member not found.');
        }

        return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
    }


    #[Route('/club/{id}/manage-members', name: 'club_manage_members')]
    public function manageMembers(Club $club)
    {
        // Ensure the user is a member and is a president
        $user = $this->getUser();
        $isPresident = false;

        foreach ($club->getMembers() as $member) {
            if ($member->getUtilisateur() === $user && $member->getRole()->value === 'PRESIDENT') {
                $isPresident = true;
                break;
            }
        }

        if (!$isPresident) {
            throw $this->createAccessDeniedException('You are not authorized to manage this club.');
        }

        return $this->render('club/showclubmembers.html.twig', [
            'club' => $club,
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



    #[Route('/club/{id}', name: 'club_details', requirements: ['id' => '\d+'])]
    public function clubDetails(int $id, ClubRepository $clubRepository, CommentaryRepository $commentaryRepository): Response
    {
        // Fetch the club by ID
        $club = $clubRepository->find($id);

        if (!$club) {
            throw $this->createNotFoundException('Club not found');
        }

        // Fetch the comments associated with the club
        $comments = $commentaryRepository->findBy(['club' => $club]);

        return $this->render('club/details.html.twig', [
            'club' => $club,
            'comments' => $comments, // Pass comments to the template
        ]);
    }

    private ManagerRegistry $doctrine;


    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
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
