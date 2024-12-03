<?php
// src/Controller/GUsersController.php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Enum\UserRole;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Annotation\Route;

class GUsersController extends AbstractController
{
    // Route for creating a new user
    #[Route('/user/new', name: 'user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture file upload
            /** @var UploadedFile $profilePicture */
            $profilePicture = $form->get('profilePicture')->getData();
            if ($profilePicture) {
                // Generate a unique file name
                $filename = uniqid() . '.' . $profilePicture->guessExtension();

                // Move the uploaded file to the directory
                $profilePicture->move(
                    $parameterBag->get('profile_pictures_directory'), // Directory where the file will be saved
                    $filename
                );

                // Set the profile picture in the User entity
                $user->setProfilePicture($filename);
            }

            // If no role was set during form submission, use a default value
            if (!$user->getRole()) {
                $user->setRole(UserRole::ROLE_USER); // Default to 'ROLE_USER' role
            }

            // Persist the user entity to the database
            $entityManager->persist($user);
            $entityManager->flush();

            // Redirect to the user index page (assuming the route name is 'user_index')
            return $this->redirectToRoute('user_index');
        }

        return $this->render('g_users/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Route for listing all users
    #[Route('/users', name: 'user_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('g_users/index.html.twig', [
            'users' => $users,
        ]);
    }

   
}
