<?php

namespace App\Controller;

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
    public function index(ProjetRepository $projetRepository, UserRepository $userRepository): Response
    {
        $projet = $projetRepository->findAll();

        return $this->render('main/index.html.twig', [
            'projets' => $projet,
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
