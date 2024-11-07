<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GEventsController extends AbstractController
{
    #[Route('/g/events', name: 'app_g_events')]
    public function index(): Response
    {
        return $this->render('g_events/index.html.twig', [
            'controller_name' => 'GEventsController',
        ]);
    }
}
