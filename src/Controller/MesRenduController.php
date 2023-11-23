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
        return $this->render('mesrendu/index.html.twig');
    }
}
?>