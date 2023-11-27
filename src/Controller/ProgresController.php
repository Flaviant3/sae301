<?php
// src/Controller/ProgresController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgresController extends BaseController
{
    #[Route('/progres', name: 'app_progres')]
    public function votreAction(): Response
    {
        // Obtenir les évaluations à partir de la classe parente
        $allEvaluations = $this->getEvaluations();

        // Filtrer les évaluations pour obtenir les rendus effectués
        $completedSubmissions = array_filter($allEvaluations, function ($evaluation) {
            // Vous devrez adapter cette condition en fonction de votre modèle d'évaluation
            return $evaluation->completed;
        });

        // Passez les variables à votre vue
        return $this->render('progres/index.html.twig', [
            'allItems' => $allEvaluations,
            'completedSubmissions' => $completedSubmissions,
        ]);
    }

    /*#[Route('/progres2', name: 'app_progres2')]
    public function votreAction2(): Response
    {
        // Obtenir les évaluations à partir de la classe parente
        $allRendus = $this->getRendus();

        // Filtrer les évaluations pour obtenir les rendus effectués
        $completedSubmissions2 = array_filter($allRendus, function ($rendu) {
            // Vous devrez adapter cette condition en fonction de votre modèle d'évaluation
            return $rendu->completed;
        });

        // Passez les variables à votre vue
        return $this->render('progres/index.html.twig', [
            'allItems' => $allRendus,
            'completedSubmissions2' => $completedSubmissions2,
        ]);
    }*/

    // Ajoutez d'autres méthodes et fonctionnalités nécessaires pour votre contrôleur
}

?>