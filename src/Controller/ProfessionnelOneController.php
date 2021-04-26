<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionnelOneController extends AbstractController
{
    
    /**
     * @Route("/photo/objet", name="objet")
     */
    public function index(ProjetRepository $projetRepository, CategorieRepository $categorieRepository): Response
    {
        $projet = $projetRepository->findAll();
        $categorie = $categorieRepository->findAll();

        return $this->render('professionnel_one/index.html.twig', [
            'projets' => $projet,
            'categories' => $categorie
        ]);
    }

    /**
     * @Route("/projet/{id}", name="projet")
     */
    public function projet($id, ProjetRepository $projetRepository): Response
    {
        $projet = $projetRepository->find($id);
        
        return $this->render('professionnel_one/test.html.twig', [
            'projet' => $projet,
        ]);
    }

}
