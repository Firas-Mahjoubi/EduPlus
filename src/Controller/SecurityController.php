<?php

// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
    {
        // If the user is already logged in, redirect them to the target page
        if ($this->getUser()) {
            return $this->redirectToRoute('app_g_events');  // Replace 'app_g_events' with your desired route name
        }

        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Retrieve the last username entered by the user (for re-populating the email field)
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony intercepts this, no need to implement logic here
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
