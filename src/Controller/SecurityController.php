<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security as SecurityBundleSecurity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
    {
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Retrieve the last username entered by the user (for re-populating the email field)
        $lastUsername = $authenticationUtils->getLastUsername();

        // Get the current user
        $user = $security->getUser();

        // If the user is authenticated, redirect based on their roles
        if ($user) {
            // Redirect to admin dashboard if the user has ROLE_ADMIN
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                return $this->redirectToRoute('admin_dashboard'); // Make sure this route exists
            }

            // Redirect to user dashboard if the user has ROLE_USER
            if (in_array('ROLE_USER', $user->getRoles())) {
                return $this->redirectToRoute('user_dashboard'); // Make sure this route exists
            }
        }

        // If no user is authenticated or roles don't match, proceed with login form
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

    #[Route('/admin', name: 'admin_dashboard')] // Make sure the route name is correct here
    public function adminDashboard(EventRepository $eventRepository): Response
    {
        $currentDate = new \DateTime(); // Current date and time
        
        // Use QueryBuilder for filtering events by date
        $upcomingEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut >= :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->getQuery()
            ->getResult();
        
        // Fetch latest events (events that have already occurred)
        $latestEvents = $eventRepository->createQueryBuilder('e')
            ->where('e.datedebut < :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->orderBy('e.datedebut', 'DESC')
            ->setMaxResults(3) // Get the 3 most recent past events
            ->getQuery()
            ->getResult();

        return $this->render('g_events/show.html.twig', [
            'upcomingEvents' => $upcomingEvents,
            'latestEvents' => $latestEvents,
        ]);
    }
   
}
