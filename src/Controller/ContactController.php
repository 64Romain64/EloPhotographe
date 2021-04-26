<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'photographe' => $userRepository->getPhotographe(),
        ]);
    }
}
