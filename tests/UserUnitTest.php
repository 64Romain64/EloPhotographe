<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\Projet;
use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(){
        $user = new User();

        $user->setEmail("true@test.com")
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password')
             ->setAPropos('a propos')
             ->setInstagram('instagram')
             ->setFacebook('facebook')
             ->setLinkedin('linkedin')
             ->setRoles(["ROLE_USER"])
             ->setTelephone('0559000000');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'a propos');
        $this->assertTrue($user->getInstagram() === 'instagram');
        $this->assertTrue($user->getFacebook() === 'facebook');
        $this->assertTrue($user->getLinkedin() === 'linkedin');
        $this->assertTrue($user->getRoles() === ["ROLE_USER"]);
        $this->assertTrue($user->getTelephone() === '0559000000');
    }

    public function testIsFalse(){

        $user = new User();

        $user->setEmail("true@test.com")
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password')
             ->setAPropos('a propos')
             ->setInstagram('instagram')
             ->setFacebook('facebook')
             ->setLinkedin('linkedin')
             ->setRoles(["ROLE_USER"])
             ->setTelephone('0559000000');


        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAPropos() === 'false');
        $this->assertFalse($user->getInstagram() === 'false');
        $this->assertFalse($user->getFacebook() === 'false');
        $this->assertFalse($user->getLinkedin() === 'false');
        $this->assertFalse($user->getRoles() === ["false"]);
        $this->assertFalse($user->getTelephone() === 'false');
    }

    public function testIsEmpty(){

        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getInstagram());
        $this->assertEmpty($user->getFacebook());
        $this->assertEmpty($user->getLinkedin());
        $this->assertEmpty($user->getTelephone());
        $this->assertEmpty($user->getId());
        $this->assertEmpty($user->getUsername());
        $this->assertEmpty($user->getProjet());
        $this->assertEmpty($user->getCommentaire());
    }

    public function testAddRemoveProjet(){

        $projet = new Projet();
        $user = new User();

        $user->addProjet($projet);
        $this->assertContains($projet, $user->getProjet());

        $user->removeProjet($projet);
        $this->assertEmpty($user->getProjet());

    }

    public function testAddRemoveCommentaire (){

        $commentaire = new Commentaire();
        $user = new User();

        $user->addCommentaire($commentaire);
        $this->assertContains($commentaire, $user->getCommentaire());

        $user->removeCommentaire($commentaire);
        $this->assertEmpty($user->getCommentaire());

    }
}
