<?php

namespace App\Tests;

use App\Entity\Projet;
use App\Entity\Photo;
use PHPUnit\Framework\TestCase;

class PhotoUnitTest extends TestCase
{
    public function testIsTrue(){

        $photo = new Photo();
        $projet = new Projet();

        $photo->setNom('nom')
              ->setDescription('description')
              ->setSlug('slug')
              ->setFile('file')
              ->setEnVente(true)
              ->setHauteur(20.20)
              ->setLargeur(20.20)
              ->setPrix(20.20)
              ->setCadre('cadre')
              ->setEtat(1);

        $this->assertTrue($photo->getNom() === 'nom');
        $this->assertTrue($photo->getDescription() === 'description');
        $this->assertTrue($photo->getSlug() === 'slug');
        $this->assertTrue($photo->getFile() === 'file');
        $this->assertTrue($photo->getEnVente() === true);
        $this->assertTrue($photo->getHauteur() == 20.20);
        $this->assertTrue($photo->getLargeur() == 20.20);
        $this->assertTrue($photo->getPrix() == 20.20);
        $this->assertTrue($photo->getCadre() === 'cadre');
        $this->assertTrue($photo->getEtat() == 1);
    }

    public function testIsFalse(){

        $photo = new Photo();

        $photo->setNom('nom')
              ->setDescription('description')
              ->setSlug('slug')
              ->setFile('file')
              ->setEnVente(true)
              ->setHauteur(20.20)
              ->setLargeur(20.20)
              ->setPrix(20.20)
              ->setCadre('cadre')
              ->setEtat(1);

        $this->assertFalse($photo->getNom() === 'false');
        $this->assertFalse($photo->getDescription() === 'false');
        $this->assertFalse($photo->getSlug() === 'false');
        $this->assertFalse($photo->getFile() === 'false');
        $this->assertFalse($photo->getEnVente() === false);
        $this->assertFalse($photo->getHauteur() == 40.40);
        $this->assertFalse($photo->getLargeur() == 40.40);
        $this->assertFalse($photo->getPrix() == 40.40);
        $this->assertFalse($photo->getCadre() === 'false');
    }

    public function testIsEmpty(){

        $photo = new Photo();

        $this->assertEmpty($photo->getNom());
        $this->assertEmpty($photo->getDescription());
        $this->assertEmpty($photo->getSlug());
        $this->assertEmpty($photo->getFile());
        $this->assertEmpty($photo->getEnVente());
        $this->assertEmpty($photo->getHauteur());
        $this->assertEmpty($photo->getLargeur());
        $this->assertEmpty($photo->getPrix());
        $this->assertEmpty($photo->getCadre());
        $this->assertEmpty($photo->getEtat());
    }
}
