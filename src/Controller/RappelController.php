<?php

// src/Controller/RappelController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RappelController extends AbstractController
{
    /**
     * @Route("/rappel", name="rappel")
     */
    public function index(): Response
    {
        return $this->render('rappel/index.html.twig');
    }
}
?>