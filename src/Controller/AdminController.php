<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

#[Route('/admin')]  // Add the '/admin' prefix here at the class level
class AdminController extends AbstractController
{
    private $entityManager;

    // Inject the EntityManagerInterface into the constructor
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        $user = $this->getUser();  // Assuming you are using Symfony's security system

        return $this->render('admin/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/dashboard', name: 'admin_dashboard')]
    public function dashboard(EntityManagerInterface $entityManager)
    {
        // Get the list of all users
        $user = $entityManager->getRepository(User::class)->findAll();
    
        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,  // Pass the list of users to the template
        ]);
    }
}
