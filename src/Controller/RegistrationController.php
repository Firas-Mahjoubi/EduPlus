<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security as CoreSecurity;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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
            // Get the profile picture from the form
            $profilePicture = $form->get('profilePicture')->getData();

            if ($profilePicture) {
                // Generate a unique file name for the profile picture
                $newFilename = uniqid() . '.' . $profilePicture->guessExtension();

                try {
                    // Move the file to the directory where profile pictures are stored
                    $profilePicture->move(
                        $this->getParameter('profile_pictures_directory'), // Using the updated parameter for path
                        $newFilename
                    );

                    // Set the filename of the profile picture to the user entity
                    $user->setProfilePicture($newFilename);
                } catch (FileException $e) {
                    // If there's an error uploading the image, show an error message
                    $this->addFlash('error', 'Error uploading the profile picture.');
                }
            }

            // Handle password
            $password = $form->get('password')->getData();
            $user->setPassword($userPasswordHasher->hashPassword($user, $password));

            // Save the new user to the database
            $entityManager->persist($user);
            $entityManager->flush();

            // Log the user in after registration
            $this->addFlash('success', 'Registration successful, you are now logged in!');
            
            // After login, redirect to a specific page
            return $this->redirectToRoute('app_login'); // Change 'app_home' to your desired route
        }

        // Render the registration page with the form
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
