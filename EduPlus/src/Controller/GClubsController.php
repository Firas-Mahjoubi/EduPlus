<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GClubsController extends AbstractController
{
    #[Route('/g/clubs', name: 'app_g_clubs')]
    public function index(): Response
    {
        return $this->render('g_clubs/index.html.twig', [
            'controller_name' => 'GClubsController',
        ]);
    }
}
