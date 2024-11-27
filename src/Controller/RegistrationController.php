<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security as CoreSecurity;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager, 
        AuthenticationUtils $authenticationUtils,
        CoreSecurity $security // Used for login after registration
    ): Response {
        // Create a new user entity
        $user = new User();
        
        // Create the registration form
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        // Check if the form was submitted and is valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the plain password from the form and hash it
            $password = $form->get('password')->getData();
            $user->setPassword($userPasswordHasher->hashPassword($user, $password));

            // Save the new user to the database
            $entityManager->persist($user);
            $entityManager->flush();

            // Log the user in after registration
            // Use Symfony's default authentication system to log the user in
            // The firewall and login will automatically log them in as defined in your security.yaml
            $this->addFlash('success', 'Registration successful, you are now logged in!');
            
            // After login, redirect to a specific page, for example the home page
            return $this->redirectToRoute('app_g_events'); // Change 'app_g_events' to your desired route
        }

        // Render the registration page with the form
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
