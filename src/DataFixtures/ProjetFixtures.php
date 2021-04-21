<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\User;
use App\Entity\Photo;
use App\Entity\Projet;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProjetFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoderInterface)
    {
        $this->encoder = $userPasswordEncoderInterface;
    }
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $admin = new User();
        $admin->setNom('Admin');
        $admin->setPrenom('Admin');
        $admin->setEmail('admin@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $hash = $this->encoder->encodePassword($admin, "admin");
        $admin->setPassword($hash);
        $admin->setTelephone('0559000000');
        $admin->setAPropos("Admin");
        $admin->setInstagram("admin/instagram.com");
        
        $manager->persist($admin);

        $cat1 = new Categorie();
        $cat1->setNom('Océan');
        $cat1->setSlug('/ocean');

        $manager->persist($cat1);

        for ($i = 1; $i <= 3; $i++) {

            $proj1 = new Projet();
            $proj1->setTitre("A la plage" . $i);
            $proj1->setDescription("je ne sais pas");
            $proj1->setSlug("/a_la_plage");
            $proj1->setDate(new DateTime());
            $proj1->setStatut("1");
            $proj1->setUser($admin);
            $proj1->addCategorie($cat1);


            for ($j = 1; $j <= 3; $j++) {
                $ph1 = new Photo();
                $ph1->setNom('La plage' . $j);
                $ph1->setDescription("lorem ipsum blabla");
                $ph1->setSlug("/laplage");
                $ph1->setFile("img{$j}.jpg");
                $ph1->setEnVente('true');
                $ph1->setLargeur(25, 50);
                $ph1->setHauteur(25, 50);
                $ph1->setPrix(30, 00);
                $ph1->setCadre("bois d'arbre");
                $ph1->setEtat("1");
                $ph1->setProjet($proj1);

                $manager->persist($ph1);
            }

            $manager->persist($proj1);
        }

        $user = new User();
        $user->setNom('Dupont');
        $user->setPrenom('Toto');
        $user->setEmail('toto@gmail.com');
        $user->setRoles(['ROLE_USER']);
        $hash = $this->encoder->encodePassword($user, "toto");
        $user->setPassword($hash);
        $user->setTelephone('0559000000');
        $user->setAPropos("c'est moi");
        $user->setInstagram("instagram.com");
        
        $manager->persist($user);

        for($k = 1 ; $k<=5 ; $k++){
            $commentaire = new Commentaire();
            $commentaire->setContenu("Lorem ipsum");
            $commentaire->setDate(new DateTime());
            $commentaire->setPublie(true);
            $commentaire->setUser($user);
            $commentaire->setPhoto($ph1);

             $manager->persist($commentaire);
        }

        $manager->flush();
    }
}
