<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\UserRepository;
use App\Repository\ProjetRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfessionnelController extends AbstractController
{
    /**
     * @Route("/professionnel-{slug}", name="{slug}")
     */
    public function professionnel(Categorie $categorie, ProjetRepository $projetRepository, UserRepository $userRepository, CategorieRepository $categorieRepository): Response
    {
        $projet = $projetRepository->findAllActualite($categorie);
        $categories = $categorieRepository->findAll();


        return $this->render('professionnel/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
            'categorie' => $categorie,
            'categories' => $categories,
            'projets' => $projet,
        ]);
    }

    /**
     * @Route("/projet/{slug}/{id}", name="projet")
     */
    public function projet($id, ProjetRepository $projetRepository, UserRepository $userRepository, CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();
        $projet = $projetRepository->find($id);
        
        return $this->render('professionnel/projet-detail.html.twig', [
            'categories' => $categories,
            'projet' => $projet,
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
