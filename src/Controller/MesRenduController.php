<?php

// src/Controller/MesRenduController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesRenduController extends AbstractController
{
    /**
     * @Route("/mesrendu", name="mesrendu")
     */
    public function index(): Response
    {
        // Récupère les données réelles depuis ta base de données ou tout autre endroit
        $allSubmissions = [
            ['title' => 'Rendu 1', 'subject' => 'Mathématiques', 'deadline' => new \DateTime('2023-01-15')],
            ['title' => 'Rendu 2', 'subject' => 'Histoire', 'deadline' => new \DateTime('2023-02-01')],
            // ... d'autres rendus
        ];

        return $this->render('mesrendu/index.html.twig', [
            'allSubmissions' => $allSubmissions,
        ]);
    }
}

?>