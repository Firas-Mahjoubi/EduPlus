<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GRecrutementsController extends AbstractController
{
    #[Route('/g/recrutements', name: 'app_g_recrutements')]
    public function index(): Response
    {
        return $this->render('g_recrutements/index.html.twig', [
            'controller_name' => 'GRecrutementsController',
        ]);
    }
}
