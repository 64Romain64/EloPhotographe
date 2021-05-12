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
        /* ------------------------------------------------------
        --------------------- UTILISATEURS ----------------------
         ----           Création des utilisateurs          ------
        -------------------------------------------------------*/

        // Création d'un rôle ADMIN
        $admin = new User();
        $admin->setNom('GONTHIER');
        $admin->setPrenom('Elodie');
        $admin->setEmail('admin@admin.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $hash = $this->encoder->encodePassword($admin, "admin");
        $admin->setPassword($hash);
        $admin->setTelephone('0559000000');
        $admin->setAPropos("Je suis Elodie et je blablablabla");
        $admin->setInstagram("https://www.instagram.com/elophotographe_64/");
        $admin->setLinkedin("https://fr.linkedin.com/in/elodie-gonthier-0557561b8");
        $admin->setFacebook("https://fr-fr.facebook.com/elodiegonthierphotographe");
        
        // Création d'un utilisateur normal
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
        
        // Persister l'utilisateur et l'ADMIN
        $manager->persist($admin);
        $manager->persist($user);

        /* ------------------------------------------------------
        ---------------------- CATEGORIES -----------------------
        ----            Création des catégories            ------
        -------------------------------------------------------*/
      
        // Catégorie 1
        $cat1 = new Categorie();
        $cat1->setTitre("Professionnel");
        $cat1->setNom('Objet');
        $cat1->setSlug('objet');

        // Catégorie 2
        $cat2 = new Categorie();
        $cat2->setTitre("Art");
        $cat2->setNom('Paysage');
        $cat2->setSlug('paysage');
    
        // Catégorie 3
        $cat3 = new Categorie();
        $cat3->setTitre("Professionnel");
        $cat3->setNom('Immobilier');
        $cat3->setSlug('immobilier');
        
        // Persister les catégories
        $manager->persist($cat1);
        $manager->persist($cat2);
        $manager->persist($cat3);

        /* ------------------------------------------------------
        ------------------------ PHOTOS -------------------------
        ----              Création d'une photo             ------
        -------------------------------------------------------*/

        $ph = new Photo();
        $ph->setNom('photoAccueil');
        $ph->setDescription("lorem ipsum blabla");
        $ph->setSlug('photoAccueil');
        $ph->setFile("img5.jpg");
        $ph->setEnVente('true');
        $ph->setEtat(1);

        $manager->persist($ph);

        /* ------------------------------------------------------
        ------------------------ PROJETS ------------------------
        -------------------------------------------------------*/

        /* -----------------
        --     PROJET 1   --
        ------------------*/

        // Pour chaque projet dans la catégorie 1 (3)
        for ($i = 1; $i <= 3; $i++) {

            // Création du projet 1
            $proj1 = new Projet();
            $proj1->setTitre("A la plage_" . $i);
            $proj1->setDescription("je ne sais pas");
            $proj1->setSlug("a_la_plage_" . $i);
            $proj1->setDate(new DateTime());
            $proj1->setStatut(1);
            $proj1->setUser($admin);
            $proj1->addCategorie($cat1);

            // Création de la photo principale 
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

            // Persister la photo principale
            $manager->persist($ph1);

            // Création de 2 photos secondaires pour le projet 1
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

                // Persister les photos
                $manager->persist($ph2);
            }

            // Persister le projet 1
            $manager->persist($proj1);
        }

        /* -----------------
        --     PROJET 2   --
        ------------------*/

         // Pour chaque projet dans la catégorie 2 (3)
        for ($i = 1; $i <= 3; $i++) {

            // Création du projet 2
            $proj2 = new Projet();
            $proj2->setTitre("A la montagne_" . $i);
            $proj2->setDescription("blablabla de la montagne");
            $proj2->setSlug("a_la_montagne_". $i);
            $proj2->setDate(new DateTime());
            $proj2->setStatut("1");
            $proj2->setUser($admin);
            $proj2->addCategorie($cat2);

            // Création de la photo principale
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

            // Persister la photo
            $manager->persist($ph1);

            // Création de 2 photos secondaires pour le projet 2
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

                // Persister les photos
                $manager->persist($ph2);

            }

            // Persister le projet 2
            $manager->persist($proj2);
        }

        /* -----------------
        --     PROJET 3   --
        ------------------*/

        // Création du projet 3
        $proj3 = new Projet();
        $proj3->setTitre("A la campagne");
        $proj3->setDescription("je ne sais pas");
        $proj3->setSlug("a_la_campagne");
        $proj3->setDate(new DateTime());
        $proj3->setStatut("1");
        $proj3->setUser($admin);
        $proj3->addCategorie($cat2);
        $proj3->addCategorie($cat3);

        // Création de la photo principale
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

        // Persister la photo
        $manager->persist($ph1);

        // Création de 2 photos secondaires pour le projet 3
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

            // Persister les photos
            $manager->persist($ph2);
        }

        // Persister le projet 3
        $manager->persist($proj3);


        /* ------------------------------------------------------
        ---------------------- COMMENTAIRES ---------------------
        -------------------------------------------------------*/

        // Création des commentaires
        for($k = 1 ; $k<=5 ; $k++){
            $commentaire = new Commentaire();
            $commentaire->setContenu("Lorem ipsum");
            $commentaire->setDate(new DateTime());
            $commentaire->setPublie(true);
            $commentaire->setUser($user);
            $commentaire->setPhoto($ph1);

            // Persister les commentaires
            $manager->persist($commentaire);
        }

        $manager->flush();
    }
}
