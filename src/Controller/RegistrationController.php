<?php
// src/Controller/RegistrationController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\RegistrationFormType;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        // Créez une instance de votre formulaire d'inscription
        $form = $this->createForm(RegistrationFormType::class);

        // Obtention des erreurs du formulaire d'inscription (le cas échéant)
        $error = null; // Vous pouvez ajouter la logique nécessaire pour gérer les erreurs ici

        // Logique de traitement après la soumission du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérez les données du formulaire
            $userData = $form->getData();

            // Encodez le mot de passe avant de l'enregistrer dans la base de données
            $userData->setPassword(
                $passwordEncoder->encodePassword(
                    $userData,
                    $userData->getPassword()
                )
            );

            // Enregistrez l'utilisateur dans la base de données (à implémenter)

            // Définissez la variable userData pour le template
            $userDataArray = [
                'username' => $userData->getUsername(),
                'email' => $userData->getEmail(),
                // Ajoutez d'autres données si nécessaire
            ];

            return $this->render('registration/index.html.twig', [
                'userData' => $userDataArray,
                'form' => $form->createView(),
                'error' => $error,
            ]);
        }

        // ... (votre logique existante)

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
            'error' => $error,
            'userData' => null,
        ]);
    }
}
?>