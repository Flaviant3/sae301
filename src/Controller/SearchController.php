<?php

// src/Controller/SearchController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
/**
* @Route("/search", name="search")
*/
public function search(Request $request): Response
{
// Récupère le terme de recherche depuis la requête
$searchTerm = $request->query->get('term', '');

// TODO: Effectue la recherche dans ta base de données ou autre source
// et retourne les résultats au format JSON
$results = $this->getSearchResults($searchTerm);

return $this->json($results);
}

private function getSearchResults($searchTerm)
{
// TODO: Implémente la logique de recherche réelle
// Ici, c'est un exemple statique
$searchResults = [
'Rendu de Mathématiques TP',
'Évaluation de Physique',
'Rendu dHistoire',
// ... d'autres résultats
];

// Filtrer les résultats qui contiennent le terme de recherche
$filteredResults = array_filter($searchResults, function ($result) use ($searchTerm) {
return stripos($result, $searchTerm) !== false;
});

// Retourne les résultats filtrés
return array_values($filteredResults);
}
}
?>