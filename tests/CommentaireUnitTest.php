<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Photo;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue(){

        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $photo = new Photo();
        $user = new User();

        $commentaire->setUser($user)
                    ->setContenu('contenu')
                    ->setDate($datetime)
                    ->setPublie(true)
                    ->setPhoto($photo);

        $this->assertTrue($commentaire->getUser() === $user);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getDate() === $datetime);
        $this->assertTrue($commentaire->getPublie() === true);
        $this->assertTrue($commentaire->getPhoto() === $photo);
    }

    public function testIsFalse(){

        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $photo = new Photo();
        $user = new User();

        $commentaire->setUser($user)
                    ->setContenu('contenu')
                    ->setDate($datetime)
                    ->setPublie(true)
                    ->setPhoto($photo);

        $this->assertFalse($commentaire->getUser() === new User());
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getDate() === new DateTime());
        $this->assertFalse($commentaire->getPublie() === false);
        $this->assertFalse($commentaire->getPhoto() === new Photo());

    }

    public function testIsEmpty(){

        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getUser());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getDate());
        $this->assertEmpty($commentaire->getPhoto());
        $this->assertEmpty($commentaire->getPublie());
        $this->assertEmpty($commentaire->getId());
    }
}
