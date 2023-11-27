<?php

// src/Controller/MesRenduController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesRenduController extends BaseController
{
    #[Route('/mesrendu', name: 'app_mesrendu')]
    public function index(): Response
    {
        // Obtenir les évaluations à partir de la classe parente
        $allRendus = $this->getRendus();

        
        
        return $this->render('mesrendu/index.html.twig', [
            'allRendus' => $allRendus,
        ]);
    }
}
?>
