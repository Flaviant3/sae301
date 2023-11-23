<?php
// src/Controller/ProfilController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ProfilType;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(Request $request): Response
    {
        // Your code to retrieve profile data from local storage
        $profilData = json_decode($request->cookies->get('profil_data'), true) ?? [];

        $form = $this->createForm(ProfilType::class);
        $form->submit($profilData); // Submit data to the form

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Your code to handle form submission
            $newPhoto = $form->get('photo')->getData();

            if ($newPhoto) {
                // Your code to handle the new profile photo
            }

            // Your code to save changes to local storage
            $updatedProfilData = $form->getData();
            // Update data in local storage
            $response = new Response();
            $response->headers->setCookie(new Cookie('profil_data', json_encode($updatedProfilData)));
            $response->send();
        }

        return $this->render('profil/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

?>