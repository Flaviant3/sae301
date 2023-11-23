<?php
// src/Controller/ProgresController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgresController extends AbstractController
{
/**
* @Route("/progres", name="progres")
*/
public function index(): Response
{
return $this->render('progres/index.html.twig');
}
}
?>