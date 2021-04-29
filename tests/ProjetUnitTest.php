<?php

namespace App\Tests;

use DateTime;
use App\Entity\User;
use App\Entity\Photo;
use App\Entity\Projet;
use PHPUnit\Framework\TestCase;

class ProjetUnitTest extends TestCase
{

    public function testIsTrue(){

        $Projet = new Projet();
        $datetime = new DateTime();
        $user = new User();

        $Projet->setTitre('titre')
               ->setDescription('description')
               ->setSlug('slug')
               ->setDate($datetime)
               ->setStatut(1)
               ->setUser($user);

        $this->assertTrue($Projet->getTitre() === 'titre');
        $this->assertTrue($Projet->getDescription() === 'description');
        $this->assertTrue($Projet->getSlug() === 'slug');
        $this->assertTrue($Projet->getDate() === $datetime);
        $this->assertTrue($Projet->getStatut() == 1);
        $this->assertTrue($Projet->getUser() === $user);
    }

    public function testIsFalse(){

        $Projet = new Projet();
        $datetime = new DateTime();
        $user = new User();

        $Projet->setTitre('titre')
               ->setDescription('description')
               ->setSlug('slug')
               ->setDate($datetime)
               ->setStatut(1)
               ->setUser($user);

        $this->assertFalse($Projet->getTitre() === 'false');
        $this->assertFalse($Projet->getDescription() === 'false');
        $this->assertFalse($Projet->getSlug() === 'false');
        $this->assertFalse($Projet->getDate() === new DateTime());
        $this->assertFalse($Projet->getStatut() == 2);
        $this->assertFalse($Projet->getUser() === new user());
    }

    public function testIsEmpty(){

        $Projet = new Projet();

        $this->assertEmpty($Projet->getTitre());
        $this->assertEmpty($Projet->getDescription());
        $this->assertEmpty($Projet->getSlug());
        $this->assertEmpty($Projet->getDate());
        $this->assertEmpty($Projet->getStatut());
        $this->assertEmpty($Projet->getPhoto());
        $this->assertEmpty($Projet->getUser());
        $this->assertEmpty($Projet->getId());
        $this->assertEmpty($Projet->getCategorie());
    }

    public function testAddRemovePhoto(){

        $projet = new Projet();
        $photo = new Photo();

        $projet->addPhoto($photo);
        $this->assertContains($photo, $projet->getPhoto());

        $projet->removePhoto($photo);
        $this->assertEmpty($projet->getPhoto());

    }

}
