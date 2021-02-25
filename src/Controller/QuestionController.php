<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homePage")
     */
    public function homePage(): Response
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @param string $slug
     * @return Response
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show(string $slug): Response
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => 'test',
            'answers' => $answers
        ]);
    }
}
