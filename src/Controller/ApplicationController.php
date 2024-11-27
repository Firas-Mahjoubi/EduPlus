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
    #[Route('/application/submit/{clubId}', name: 'application_submit_club', methods: ['POST'])]
    public function submitForClub(
        int $clubId,
        ClubRepository $clubRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Fetch the club by ID
        $club = $clubRepository->find($clubId);

        if (!$club) {
            return $this->json(['success' => false, 'message' => 'Club not found'], 404);
        }

        // Get the currently logged-in user
        $user = $this->getUser(); // Ensure your app uses authentication

        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not logged in'], 401);
        }

        // Create and persist the application
        $application = new Application();
        $application->setCandidat($user);
        $application->setClub($club);

        $entityManager->persist($application);
        $entityManager->flush();

        return $this->json(['success' => true, 'message' => 'Application submitted successfully!']);
    }
}
