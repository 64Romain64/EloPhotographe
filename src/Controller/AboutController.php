<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="about")
     */
    public function index(UserRepository $userRepository, CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findAll();

        return $this->render('about/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
            'categories' => $categorie,
        ]);
        
    }
}
