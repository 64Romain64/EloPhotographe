<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProjetRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionnelOneController extends AbstractController
{
    
    /**
     * @Route("/photo-objet", name="objet")
     */
    public function index(ProjetRepository $projetRepository, CategorieRepository $categorieRepository, UserRepository $userRepository): Response
    {
        $projet = $projetRepository->findAll();
        $categorie = $categorieRepository->findAll();

        return $this->render('professionnel_one/index.html.twig', [
            'projets' => $projet,
            'categories' => $categorie,
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }



}
