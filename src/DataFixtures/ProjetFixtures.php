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
        // ------------------------ USER ------------------------//
        $admin = new User();
        $admin->setNom('GONTHIER');
        $admin->setPrenom('Elodie');
        $admin->setEmail('admin@gmail.com');
        $admin->setRoles(['ROLE_PHOTOGRAPHE']);
        $hash = $this->encoder->encodePassword($admin, "admin");
        $admin->setPassword($hash);
        $admin->setTelephone('0559000000');
        $admin->setAPropos("Je suis Elodie et je blablablabla");
        $admin->setInstagram("https://www.instagram.com/elophotographe_64/");
        $admin->setLinkedin("https://fr.linkedin.com/in/elodie-gonthier-0557561b8");
        $admin->setFacebook("https://fr-fr.facebook.com/elodiegonthierphotographe");
        
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
        
        $manager->persist($admin);
        $manager->persist($user);

        // ------------------------ CATEGORIES ------------------------//
        $cat1 = new Categorie();
        $cat1->setTitre("Professionnel");
        $cat1->setNom('Objet');
        $cat1->setSlug('objet');

        $cat2 = new Categorie();
        $cat2->setTitre("Art");
        $cat2->setNom('Paysage');
        $cat2->setSlug('paysage');
    
        $cat3 = new Categorie();
        $cat3->setTitre("Professionnel");
        $cat3->setNom('Immobilier');
        $cat3->setSlug('immobilier');
        
        $manager->persist($cat1);
        $manager->persist($cat2);
        $manager->persist($cat3);


        // ------------------------ PROJET 1 ------------------------//
        for ($i = 1; $i <= 3; $i++) {

            $proj1 = new Projet();
            $proj1->setTitre("A la plage_" . $i);
            $proj1->setDescription("je ne sais pas");
            $proj1->setSlug("a_la_plage_" . $i);
            $proj1->setDate(new DateTime());
            $proj1->setStatut(1);
            $proj1->setUser($admin);
            $proj1->addCategorie($cat1);


            $ph1 = new Photo();
            $ph1->setNom('La plage_' . $i);
            $ph1->setDescription("lorem ipsum blabla");
            $ph1->setSlug("laplage_" . $i);
            $ph1->setFile("img{$i}.jpg");
            $ph1->setEnVente('true');
            $ph1->setLargeur(25, 50);
            $ph1->setHauteur(25, 50);
            $ph1->setPrix(30, 00);
            $ph1->setCadre("bois d'arbre");
            $ph1->setEtat(1);
            $ph1->setProjet($proj1);

            $manager->persist($ph1);

            for ($j = 1; $j <= 2; $j++) {
                $ph2 = new Photo();
                $ph2->setNom('La plage_' . $j);
                $ph2->setDescription("lorem ipsum blabla");
                $ph2->setSlug("laplage_" . $j);
                $ph2->setFile("img{$j}.jpg");
                $ph2->setEnVente('true');
                $ph2->setLargeur(25, 50);
                $ph2->setHauteur(25, 50);
                $ph2->setPrix(30, 00);
                $ph2->setCadre("bois d'arbre");
                $ph2->setEtat(2);
                $ph2->setProjet($proj1);

                $manager->persist($ph2);
            }
            $manager->persist($proj1);
        }

        // ------------------------ PROJET 2 ------------------------//
        for ($i = 1; $i <= 3; $i++) {

            $proj2 = new Projet();
            $proj2->setTitre("A la montagne_" . $i);
            $proj2->setDescription("blablabla de la montagne");
            $proj2->setSlug("a_la_montagne_". $i);
            $proj2->setDate(new DateTime());
            $proj2->setStatut("1");
            $proj2->setUser($admin);
            $proj2->addCategorie($cat2);


            $ph1 = new Photo();
            $ph1->setNom('La montagne_' . $i);
            $ph1->setDescription("lorem ipsum montagne");
            $ph1->setSlug("laplage_". $i);
            $ph1->setFile("img{$i}.jpg");
            $ph1->setEnVente('true');
            $ph1->setLargeur(25, 50);
            $ph1->setHauteur(25, 50);
            $ph1->setPrix(30, 00);
            $ph1->setCadre("bois d'arbre");
            $ph1->setEtat(1);
            $ph1->setProjet($proj2);

            $manager->persist($ph1);

            for ($j = 1; $j <= 2; $j++) {
                $ph2 = new Photo();
                $ph2->setNom('La montagne_' . $j);
                $ph2->setDescription("lorem ipsum montagne");
                $ph2->setSlug("laplage_". $j);
                $ph2->setFile("img{$j}.jpg");
                $ph2->setEnVente('true');
                $ph2->setLargeur(25, 50);
                $ph2->setHauteur(25, 50);
                $ph2->setPrix(30, 00);
                $ph2->setCadre("bois d'arbre");
                $ph2->setEtat(2);
                $ph2->setProjet($proj2);

                $manager->persist($ph2);

            }
            $manager->persist($proj2);
        }

        // ------------------------ PROJET 3 ------------------------//
        $proj3 = new Projet();
        $proj3->setTitre("A la campagne");
        $proj3->setDescription("je ne sais pas");
        $proj3->setSlug("a_la_campagne");
        $proj3->setDate(new DateTime());
        $proj3->setStatut("1");
        $proj3->setUser($admin);
        $proj3->addCategorie($cat2);
        $proj3->addCategorie($cat3);

        $ph1 = new Photo();
        $ph1->setNom('La plage_');
        $ph1->setDescription("lorem ipsum blabla");
        $ph1->setSlug("laplage_");
        $ph1->setFile("img1.jpg");
        $ph1->setEnVente('true');
        $ph1->setLargeur(25, 50);
        $ph1->setHauteur(25, 50);
        $ph1->setPrix(30, 00);
        $ph1->setCadre("bois d'arbre");
        $ph1->setEtat(1);
        $ph1->setProjet($proj3);

        $manager->persist($ph1);

        for ($j = 1; $j <= 2; $j++) {
            $ph2 = new Photo();
            $ph2->setNom('La plage_' . $j);
            $ph2->setDescription("lorem ipsum blabla");
            $ph2->setSlug("laplage_" . $j);
            $ph2->setFile("img{$j}.jpg");
            $ph2->setEnVente('true');
            $ph2->setLargeur(25, 50);
            $ph2->setHauteur(25, 50);
            $ph2->setPrix(30, 00);
            $ph2->setCadre("bois d'arbre");
            $ph2->setEtat(2);
            $ph2->setProjet($proj3);

            $manager->persist($ph2);
        }
        $manager->persist($proj3);


        // ------------------------ COMMENTAIRES ------------------------//
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
