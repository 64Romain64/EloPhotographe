<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ProjetRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProjetRepository $projetRepository, UserRepository $userRepository): Response
    {
        $projet = $projetRepository->findAll();

        // return $this->render('main/index.html.twig', [
        //     'controller_name' => 'MainController',
        // ]);

        return $this->render('main/index.html.twig', [
            'projets' => $projet,
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
