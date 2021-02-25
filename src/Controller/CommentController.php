<?php

declare(strict_types=1);

namespace App\Controller;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @param int $id
     * @param string $direction
     * @param LoggerInterface $logger
     * @return JsonResponse
     * @throws Exception
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="Post")
     */
    public function commentVote(int $id, string $direction, LoggerInterface $logger): JsonResponse
    {
        if ($direction === 'up') {
            $currentVoteCount = random_int(7, 100);
        } else {
            $currentVoteCount = random_int(0, 5);
        }

        $logger->info('test');

        return $this->json(['votes' => $currentVoteCount]);
    }
}
