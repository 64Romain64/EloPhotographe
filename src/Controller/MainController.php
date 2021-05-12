<?php

namespace App\Controller;

use App\Repository\CommentaireRepository;
use App\Repository\PhotoRepository;
use App\Repository\UserRepository;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProjetRepository $projetRepository, UserRepository $userRepository, CommentaireRepository $commentaireRepository, PhotoRepository $photoRepository): Response
    {
        // Statut -> O : Actualité / 1 : Portfolio / 2 : Archives
        $projet = $projetRepository->findby(["statut" => 0]); // Permet de retrouver les catégories avec un statut 0 
        $commentaire = $commentaireRepository->findby(["publie" => true]); // Permet de retrouver les commentaires qui ont été publié
        $photo = $photoRepository->findBy(['nom' => 'photoAccueil']); // Permet de retrouver la photo dont le nom est photoAccueil

        return $this->render('main/index.html.twig', [
            'projets' => $projet,
            'commentaires' => $commentaire,
            'photographe' => $userRepository->getPhotographe(),
            'photo' => $photo,
        ]);
    }
}
