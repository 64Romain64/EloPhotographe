<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\UserRepository;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfessionnelController extends AbstractController
{
    /**
     * @Route("/professionnel-{slug}", name="professionnel")
     */
    public function professionnel(Categorie $categorie, ProjetRepository $projetRepository, UserRepository $userRepository): Response
    {
        $projet = $projetRepository->findAllActualite($categorie);

        return $this->render('professionnel/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
            'categorie' => $categorie,
            'projets' => $projet,
        ]);
    }

    /**
     * @Route("/projet/{slug}/{id}", name="projet")
     */
    public function projet($id, ProjetRepository $projetRepository, UserRepository $userRepository): Response
    {
        $projet = $projetRepository->find($id);
        
        return $this->render('professionnel/projet/index.html.twig', [
            'projet' => $projet,
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
