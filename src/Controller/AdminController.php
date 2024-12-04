<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Corrected import for annotations
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        // Assuming the user is authenticated and retrieved from Symfony's security system
        $user = $this->getUser();

        // Render the index view, passing the authenticated user data
        return $this->render('admin/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/dashboard', name: 'admin_dashboard')]
    public function dashboard(EntityManagerInterface $entityManager): Response
    {
        // Fetch all users from the database
        $users = $entityManager->getRepository(User::class)->findAll();

        // Render the dashboard view, passing all users to the Twig template
        return $this->render('admin/dashboard.html.twig', [
            'users' => $users
        ]);
    }
}
