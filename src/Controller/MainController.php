<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\ProjetRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProjetRepository $projetRepository, UserRepository $userRepository, CategorieRepository $categorieRepository): Response
    {
        $projet = $projetRepository->findAll();
        $categorie = $categorieRepository->findAll();

        return $this->render('main/index.html.twig', [
            'projets' => $projet,
            'photographe' => $userRepository->getPhotographe(),
            'categories' => $categorie,
        ]);
    }
}
