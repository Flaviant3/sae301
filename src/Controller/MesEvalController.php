<?php

// src/Controller/MesEvalController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesEvalController extends BaseController
{
    #[Route('/meseval', name: 'app_meseval')]
    public function index(): Response
    {
                // Obtenir les évaluations à partir de la classe parente
                $allEvaluations = $this->getEvaluations();

        
        
                return $this->render('meseval/index.html.twig', [
                    'allEvaluations' => $allEvaluations,
                ]);

    }
}
?>