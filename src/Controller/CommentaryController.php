<?php

namespace App\Controller;

use App\Entity\Commentary;
use App\Repository\CommentaryRepository;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentaryController extends AbstractController
{
    private $entityManager;
    private $commentRepository;

    public function __construct(EntityManagerInterface $entityManager, CommentaryRepository $commentRepository)
    {
        $this->entityManager = $entityManager;
        $this->commentRepository = $commentRepository;
    }

    /**
     * Add a comment to a specific club
     */
    #[Route('/comment/add', name: 'comment_add', methods: ['POST'])]
    public function addComment(Request $request, ClubRepository $clubRepository): JsonResponse
    {
        $content = $request->request->get('content');
        $clubId = $request->request->get('club_id');

        if (!$content || !$clubId) {
            return new JsonResponse(['error' => 'Content and club_id are required.'], 400);
        }

        $club = $clubRepository->find($clubId);
        if (!$club) {
            return new JsonResponse(['error' => 'Club not found.'], 404);
        }

        // Create a new comment
        $comment = new Commentary();
        $comment->setContent($content);
        $comment->setClub($club);
        $comment->setDate(new \DateTime());
        $comment->setUser($this->getUser()); // Assume the user is logged in

        $this->entityManager->persist($comment);
        $this->entityManager->flush();

        return new JsonResponse([
            'message' => 'Comment added successfully.',
            'comment' => [
                'id' => $comment->getId(),
                'content' => $comment->getContent(),
                'user' => $this->getUser(), // Adjust with your User model's field
                'time' => $comment->getDate()->format('H:i'),
            ]
        ]);
    }

    /**
     * Add a reply to an existing comment
     */
    #[Route('/comment/reply/{commentId}', name: 'comment_reply', methods: ['POST'])]
    public function addReply(Request $request, int $commentId): JsonResponse
    {
        $content = $request->request->get('content');
        if (!$content) {
            return new JsonResponse(['error' => 'Content is required.'], 400);
        }

        // Find the parent comment
        $parentComment = $this->commentRepository->find($commentId);
        if (!$parentComment) {
            return new JsonResponse(['error' => 'Comment not found.'], 404);
        }

        // Create a new reply
        $reply = new Commentary();
        $reply->setContent($content);
        $reply->setDate(new \DateTime());
        $reply->setUser($this->getUser()); // Assume the user is logged in
        $reply->setParent($parentComment); // Set the parent comment
        $reply->setClub($parentComment->getClub()); // Use the same club as the parent comment

        $this->entityManager->persist($reply);
        $this->entityManager->flush();

        return new JsonResponse([
            'message' => 'Reply added successfully.',
            'reply' => [
                'id' => $reply->getId(),
                'content' => $reply->getContent(),
                'user' => $this->getUser(),// Adjust with your User model's field
                'time' => $reply->getDate()->format('H:i'),
                'parent_comment_id' => $parentComment->getId(),
            ]
        ]);
    }
}
