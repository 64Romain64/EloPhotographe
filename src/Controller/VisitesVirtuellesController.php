<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VisitesVirtuellesController extends AbstractController
{
    /**
     * @Route("/visites-virtuelles", name="visites")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('visites_virtuelles/index.html.twig', [
            'controller_name' => 'VisitesVirtuellesController',
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
