<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\PhotoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /* ----------------------------------------------
    ------------------ CONNEXION --------------------
    -----------------------------------------------*/

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, PhotoRepository $photoRepository): Response
    {

        // Obtenir une erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier nom saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        // Permet de trouver la photo dont le nom est photoAccueil. Permet son affichage en arrière plan de la page de connexion
        $photo = $photoRepository->findBy(['nom' => 'photoAccueil']);

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error,
            'photographe' => $userRepository->getPhotographe(),
            'photo' => $photo,
            ]);
    }

    /* ----------------------------------------------
    ----------------- DECONNEXION -------------------
    -----------------------------------------------*/

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank');
    }
}
