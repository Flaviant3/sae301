<?php
// src/Controller/CollaborationController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollaborationController extends AbstractController
{
/**
* @Route("/collaboration", name="collaboration")
*/
public function index(): Response
{
return $this->render('collaboration/index.html.twig');
}
}
?>