<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\PhotoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="about")
     */
    public function index(UserRepository $userRepository, PhotoRepository $photoRepository): Response
    {

        // Permet de trouver la photo dont le nom est photoAbout. Permet son affichage dans la page about
        $photo = $photoRepository->findBy(['nom' => 'photoAbout']);

        return $this->render('about/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
            'photo' => $photo,
        ]);
        
    }
}
