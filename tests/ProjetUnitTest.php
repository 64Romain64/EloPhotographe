<?php

namespace App\Tests;

use DateTime;
use App\Entity\Projet;
use PHPUnit\Framework\TestCase;

class ProjetUnitTest extends TestCase
{

    public function testIsTrue(){

        $Projet = new Projet();
        $datetime = new DateTime();

        $Projet->setTitre('titre')
               ->setDescription('description')
               ->setSlug('slug')
               ->setDate($datetime)
               ->setStatut(1);


        $this->assertTrue($Projet->getTitre() === 'titre');
        $this->assertTrue($Projet->getDescription() === 'description');
        $this->assertTrue($Projet->getSlug() === 'slug');
        $this->assertTrue($Projet->getDate() === $datetime);
        $this->assertTrue($Projet->getStatut() == 1);

    }

    public function testIsFalse(){

        $Projet = new Projet();
        $datetime = new DateTime();

        $Projet->setTitre('titre')
               ->setDescription('description')
               ->setSlug('slug')
               ->setDate($datetime)
               ->setStatut(1);

        $this->assertFalse($Projet->getTitre() === 'false');
        $this->assertFalse($Projet->getDescription() === 'false');
        $this->assertFalse($Projet->getSlug() === 'false');
        $this->assertFalse($Projet->getDate() === new DateTime());
        $this->assertFalse($Projet->getStatut() == 2);
    }

    public function testIsEmpty(){

        $Projet = new Projet();

        $this->assertEmpty($Projet->getTitre());
        $this->assertEmpty($Projet->getDescription());
        $this->assertEmpty($Projet->getSlug());
        $this->assertEmpty($Projet->getDate());
        $this->assertEmpty($Projet->getStatut());
    }

}
