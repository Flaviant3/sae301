<?php

// src/Controller/MesEvalController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesEvalController extends AbstractController
{
    /**
     * @Route("/meseval", name="meseval")
     */
    public function index(): Response
    {
        // Récupère les données réelles depuis ta base de données ou tout autre endroit
        $allEvaluations = [
            ['title' => 'Évaluation 1', 'subject' => 'Mathématiques', 'date' => new \DateTime('2023-01-15')],
            ['title' => 'Évaluation 2', 'subject' => 'Histoire', 'date' => new \DateTime('2023-02-01')],
            // ... d'autres évaluations
        ];

        return $this->render('meseval/index.html.twig', [
            'allEvaluations' => $allEvaluations,
        ]);
    }
}

?>