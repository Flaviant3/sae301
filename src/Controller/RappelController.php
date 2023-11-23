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
// Récupère les données réelles depuis ta base de données ou tout autre endroit
$upcomingEvaluations = [
['title' => 'Évaluation 1', 'date' => new \DateTime('2023-01-01')],
['title' => 'Évaluation 2', 'date' => new \DateTime('2023-02-01')],
];

$upcomingSubmissions = [
['title' => 'Rendu 1', 'deadline' => new \DateTime('2023-01-15')],
['title' => 'Rendu 2', 'deadline' => new \DateTime('2023-02-01')],
];

return $this->render('rappel/index.html.twig', [
'upcomingEvaluations' => $upcomingEvaluations,
'upcomingSubmissions' => $upcomingSubmissions,
]);
}
}
?>