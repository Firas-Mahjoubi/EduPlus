<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GRessourcesController extends AbstractController
{
    #[Route('/g/ressources', name: 'app_g_ressources')]
    public function index(): Response
    {
        return $this->render('g_ressources/index.html.twig', [
            'controller_name' => 'GRessourcesController',
        ]);
    }
}
