<?php

namespace App\Service;

use App\Entity\Contact;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class ContactService
{

    private $manager;
    private $flash;

    // EntityManagerInterface permet de persister les données dans la BDD
    // FlashBagInterface permet d'envoyer un message à la personne qui soumet le commentaire.
    public function __construct(EntityManagerInterface $manager, FlashBagInterface $flash)
    {

        $this->manager = $manager;
        $this->flash = $flash;
    }

    public function persistContact(Contact $contact): void
    {
        $contact->setIsSend(false)
                ->setCreatedAt(new DateTime('now'));

        $this->manager->persist($contact);
        $this->manager->flush();
        $this->flash->add('success', 'Votre message a bien été envoyé, Merci !');
    }

    public function isSend(Contact $contact): void
    {

        $contact->setIsSend(true);

        $this->manager->persist($contact);
        $this->manager->flush();
    }
}
