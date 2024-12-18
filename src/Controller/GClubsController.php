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
use App\Repository\ApplicationClubRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Dompdf\Dompdf;
use Dompdf\Options;



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
        $searchTerm = $request->query->get('search', '');

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
        EntityManagerInterface $entityManager,  // Add EntityManagerInterface
        int $id
    ) {
        // Find the club by ID
        $club = $clubRepository->find($id);

        if (!$club) {
            throw $this->createNotFoundException('Club not found');
        }

        // Get the logged-in user
        $user = $security->getUser();
        if (!$user) {
            // Redirect to login page if the user is not logged in
            return $this->redirectToRoute('app_login');
        }

        // Get the rating value from the request
        $ratingValue = $request->request->get('rating');
        if ($ratingValue >= 1 && $ratingValue <= 5) {
            // Create a new Rating entity
            $rating = new Rating();
            $rating->setClub($club);
            $rating->setValue((float) $ratingValue);
            $rating->setUser($user); // You can also associate the rating with the logged-in user if needed

            // Persist and flush the rating to the database
            $entityManager->persist($rating);
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'Rating added successfully!');
        } else {
            // Add an error message if the rating is invalid
            $this->addFlash('error', 'Invalid rating. Please provide a rating between 1 and 5.');
        }

        // Render the current club details page with the updated rating
        return $this->render('club/details.html.twig', [
            'club' => $club,
            'rating' => $ratingValue, // pass the new rating value if needed
        ]);
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
    public function removeMember(
        int $clubId,
        int $memberId,
        ClubRepository $clubRepository,
        MemberRepository $memberRepository,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        // Fetch the club by ID
        $club = $clubRepository->find($clubId);
        if (!$club) {
            throw $this->createNotFoundException('Club not found.');
        }

        // Fetch the member by ID
        $member = $memberRepository->find($memberId);
        if (!$member || $member->getClub() !== $club) {
            throw $this->createNotFoundException('Member not found in this club.');
        }

        $user = $member->getUtilisateur(); // Assuming `Member` has a reference to a `Utilisateur` with an email field.
        $email = $user->getEmail();
        $name = $user->getNom();

        // Remove the member from the club
        $entityManager->remove($member);
        $entityManager->flush();

        // Generate the PDF
        $pdfContent = $this->generateRemovalPdf($club, $name);

        // Send the email with PDF attachment
        $email = (new Email())
            ->from(new Address('no-reply@yourdomain.com', $club->getNom()))
            ->to($email)
            ->subject('Membership Removal Notice')
            ->text('Please find attached the details regarding your membership removal.')
            ->html('<p>Dear ' . $name . ',</p><p>Please find attached a document regarding your removal from the club <strong>' . $club->getNom() . '</strong>.</p>')
            ->attach($pdfContent, 'membership_removal.pdf', 'application/pdf');

        $mailer->send($email);

        // Add a flash message to notify the user
        $this->addFlash('success', 'Member removed successfully, and email sent.');

        // Redirect back to the club's members page
        return $this->redirectToRoute('club_show', ['id' => $clubId]);
    }

    /**
     * Generates a PDF with the membership removal details.
     */
    private function generateRemovalPdf(Club $club, string $name): string
    {
        $dompdf = new Dompdf(new Options(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]));

        $html = '
        <h1>Membership Removal Notice</h1>
        <p>Dear ' . htmlspecialchars($name) . ',</p>
        <p>This is to inform you that you have been removed as a member of the club <strong>' . htmlspecialchars($club->getNom()) . '</strong>.</p>
        <p>If you have any questions, please contact us.</p>
        <p>Best regards,</p>
        <p>The ' . htmlspecialchars($club->getNom()) . ' Team</p>
    ';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
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
    public function rejectApplication(
        Club $club,
        ApplicationClubRepository $applicationClubRepository,
        int $applicationId,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $application = $applicationClubRepository->find($applicationId);

        if (!$application || $application->getClub() !== $club) {
            throw $this->createNotFoundException('Application does not belong to this club.');
        }

        // Check if the application has already been rejected
        if ($application->getStatus() === 'REJECTED') {
            $this->addFlash('warning', 'This application has already been rejected.');
            return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
        }

        // Set the application status to 'REJECTED'
        $application->setStatus('REJECTED');
        $entityManager->flush();

        // Get candidate details
        $candidate = $application->getCandidat();
        $email = $candidate->getEmail();
        $name = $candidate->getNom();

        // Generate the PDF
        $pdfContent = $this->generateApplicationPdf($club, $name, 'REJECTED');

        // Send email
        $email = (new Email())
            ->from(new Address('no-reply@yourdomain.com', $club->getNom()))
            ->to($email)
            ->subject('Application Rejection Notice')
            ->text('Please find attached the details regarding your application rejection.')
            ->html('<p>Dear ' . $name . ',</p><p>Your application to the club <strong>' . $club->getNom() . '</strong> has been rejected. Please find attached the official notice.</p>')
            ->attach($pdfContent, 'application_rejection.pdf', 'application/pdf');

        $mailer->send($email);

        $this->addFlash('success', 'Application rejected successfully, and email sent.');
        return $this->redirectToRoute('club_index');
    }

    #[Route('/{id}/acceptApplication/{applicationId}', name: 'club_accept_application', methods: ['POST'])]
    public function acceptApplication(
        Club $club,
        ApplicationClubRepository $applicationClubRepository,
        int $applicationId,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $application = $applicationClubRepository->find($applicationId);

        if (!$application || $application->getClub() !== $club) {
            throw $this->createNotFoundException('Application does not belong to this club.');
        }

        // Check if the application has already been accepted
        if ($application->getStatus() === 'ACCEPTED') {
            $this->addFlash('warning', 'This application has already been accepted.');
            return $this->redirectToRoute('club_show', ['id' => $club->getId()]);
        }

        // Create and add the member to the club
        $candidate = $application->getCandidat();
        $member = new Member();
        $member->setUtilisateur($candidate);
        $member->setClub($club);
        $member->setRole(MemberRole::MEMBER);
        $member->setDateAdhesion(new \DateTime());

        // Update the application status to 'ACCEPTED'
        $application->setStatus('ACCEPTED');
        $entityManager->persist($member);
        $entityManager->flush();

        // Get candidate details
        $email = $candidate->getEmail();
        $name = $candidate->getNom();

        // Generate the PDF
        $pdfContent = $this->generateApplicationPdf($club, $name, 'ACCEPTED');

        // Send email
        $email = (new Email())
            ->from(new Address(
                'no-reply@yourdomain.com',

                $club->getNom()
            ))
            ->to($email)
            ->subject('Application Acceptance Notice')
            ->text('Please find attached the details regarding your application acceptance.')
            ->html('<p>Dear ' . $name . ',</p><p>Your application to the club <strong>' . $club->getNom() . '</strong> has been accepted. Please find attached the official notice.</p>')
            ->attach($pdfContent, 'application_acceptance.pdf', 'application/pdf');

        $mailer->send($email);

        $this->addFlash('success', 'Application accepted, member added successfully, and email sent.');
        return $this->redirectToRoute('club_index');
    }

    /**
     * Generates a PDF for application acceptance or rejection.
     */
    private function generateApplicationPdf(Club $club, string $name, string $status): string
    {
        $dompdf = new Dompdf(new Options(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]));

        $html = '
        <h1>Application ' . htmlspecialchars($status) . ' Notice</h1>
        <p>Dear ' . htmlspecialchars($name) . ',</p>
        <p>Your application to the club <strong>' . htmlspecialchars($club->getNom()) . '</strong> has been ' . strtolower($status) . '.</p>
        <p>If you have any questions, please contact us.</p>
        <p>Best regards,</p>
        <p>The ' . htmlspecialchars($club->getNom()) . ' Team</p>
    ';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
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





    #[Route('/{id}/pending-applications', name: 'club_pending_applications', methods: ['GET'])]
    public function pendingApplications(Club $club, ApplicationClubRepository $applicationClubRepository): Response
    {
        // Retrieve all applications for the given club with status 'PENDING'
        $applications = $applicationClubRepository->findBy(
            ['club' => $club, 'status' => 'PENDING']
        );

        return $this->render('club/pending_members.html.twig', [
            'club' => $club,
            'applications' => $applications,  // Fetch only pending applications for the club
        ]);
    }


    // src/Controller/ClubController.php


    #[Route('/club/{id}/applications-statistics', name: 'club_applications_statistics')]
    public function applicationsStatistics(Club $club, ApplicationClubRepository $applicationClubRepository): Response
    {
        $data = $applicationClubRepository->getApplicationsCountByMonthAndStatus($club);

        // Process data into chart-friendly format
        $chartData = [
            'months' => [],
            'approved' => [],
            'rejected' => [],
        ];

        $monthlyData = [];
        foreach ($data as $row) {
            $month = $row['month'];
            $status = $row['status'];
            $count = $row['count'];

            if (!isset($monthlyData[$month])) {
                $monthlyData[$month] = ['approved' => 0, 'rejected' => 0];
            }

            if ($status === 'APPROVED') {
                $monthlyData[$month]['approved'] = $count;
            } elseif ($status === 'REJECTED') {
                $monthlyData[$month]['rejected'] = $count;
            }
        }

        // Sort by month and populate chart data
        foreach ($monthlyData as $month => $counts) {
            $chartData['months'][] = $month;
            $chartData['approved'][] = $counts['approved'];
            $chartData['rejected'][] = $counts['rejected'];
        }

        return $this->render('club/club_applications_statistics.html.twig', [
            'club' => $club,
            'chartData' => $chartData,
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
