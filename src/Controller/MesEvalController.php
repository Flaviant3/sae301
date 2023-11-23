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
return $this->render('meseval/index.html.twig');
}
}
?>