<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProjetRepository $projetRepository): Response
    {
        $projet = $projetRepository->findAll();

        // return $this->render('main/index.html.twig', [
        //     'controller_name' => 'MainController',
        // ]);

        return $this->render('main/index.html.twig', [
            'projets' => $projet,
        ]);
    }
}
