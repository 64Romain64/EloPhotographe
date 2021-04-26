<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="about")
     */
    public function index(UserRepository $userRepository): Response
    {
        // return $this->render('about/index.html.twig', [
        //     'controller_name' => 'AboutController',
        // ]);

        return $this->render('about/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
        ]);
        
    }
}
