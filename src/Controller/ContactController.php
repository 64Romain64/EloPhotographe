<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\ContactService;
use App\Repository\UserRepository;
use App\Repository\PhotoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ContactService $contactService, UserRepository $userRepository, PhotoRepository $photoRepository): Response
    {

        // Permet de trouver la photo dont le nom est photoContact. Permet son affichage dans la page contact
        $photo = $photoRepository->findBy(['nom' => 'photoContact']);

        // Envoi d'un mail
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $contactService->persistContact($contact);
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'photographe' => $userRepository->getPhotographe(),
            'form' => $form->createView(),
            'photo' => $photo,
        ]);
    }
}
