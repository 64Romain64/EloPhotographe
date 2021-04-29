<?php

namespace App\Tests;

use App\Entity\Photo;
use App\Entity\Projet;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{

    public function testIsTrue(){

        $categorie = new Categorie();
        $projet = new Projet();

        $categorie->setNom('nom')
                  ->setSlug('slug')
                  ->setTitre('titre');

        $this->assertTrue($categorie->getNom() === 'nom');
        $this->assertTrue($categorie->getSlug() === 'slug');
        $this->assertTrue($categorie->getTitre() === 'titre');
    }

    public function testIsFalse(){

        $categorie = new Categorie();

        $categorie->setNom('nom')
                  ->setSlug('slug')
                  ->setTitre('titre');

        $this->assertFalse($categorie->getNom() === 'false');
        $this->assertFalse($categorie->getSlug() === 'false');
        $this->assertFalse($categorie->getTitre() === 'false');
    }

    public function testIsEmpty(){

        $categorie = new Categorie();

        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getSlug());
        $this->assertEmpty($categorie->getId());
        $this->assertEmpty($categorie->getProjets());
        $this->assertEmpty($categorie->getTitre());
    }

    public function testAddRemoveProjet(){

        $categorie = new Categorie();
        $projet = new Projet();

        $categorie->addProjet($projet);
        $this->assertContains($projet, $categorie->getProjets());

        $categorie->removeProjet($projet);
        $this->assertEmpty($categorie->getProjets());
    }

}
