<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GUsersController extends AbstractController
{
    #[Route('/g/users', name: 'app_g_users')]
    public function index(): Response
    {
        return $this->render('g_users/index.html.twig', [
            'controller_name' => 'GUsersController',
        ]);
    }
}
