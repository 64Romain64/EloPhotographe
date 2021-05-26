<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Photo;
use App\Entity\Projet;
use App\Entity\Contact;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Repository\ProjetRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

/**
 * @IsGranted("ROLE_ADMIN")
 */

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    // Titre de la partie Admin
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Elo Photographe');
    }

     // Fonction pour configurer le menu principal
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'main');
        yield MenuItem::linkToLogout('Deconnexion', 'fas fa-sign-out-alt');
        
        // --------------------------

        yield MenuItem::section('Accueil');
        yield MenuItem::linktoDashboard('Accueil', 'fa fa-home');
        
        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus-circle', User::class)
        ->setAction('new')
        ->setPermission('ROLE_SUPER_ADMIN');
        // yield MenuItem::section('Utilisateurs');
        // yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        // yield MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus-circle', User::class)
        // ->setAction('new');

        // --------------------------

        yield MenuItem::section('Barre de navigation');
        // yield MenuItem::linkToCrud('Menu', 'fas fa-cat', Categorie::class);
        yield MenuItem::linkToCrud('Ajouter un sous-menu', 'fas fa-plus-circle', Categorie::class)
            ->setAction('new');

        // --------------------------
 
        yield MenuItem::section('Projets');

        yield MenuItem::linkToCrud('<b>Projets</b>', 'fas fa-tasks', Projet::class);
        yield MenuItem::linkToCrud('<i>Ajouter un projet</i>', 'fas fa-plus-circle', Projet::class)
            ->setAction('new');

        yield MenuItem::linkToCrud('<b>Photos</b>', 'fas fa-camera', Photo::class);
        yield MenuItem::linkToCrud('<i>Ajouter une photo</i>', 'fas fa-plus-circle', Photo::class)
        ->setAction('new');

        // --------------------------

        yield MenuItem::section('Commentaires');
        yield MenuItem::linkToCrud('<b>Commentaire</b>', 'fas fa-comments', Commentaire::class);

    }

    // Configuration de l'onget en haut à droite dans l'administration
    public function configureUserMenu(UserInterface $user): UserMenu
    {

        return parent::configureUserMenu($user)
            ->setName($user->getUsername())
            ->displayUserName(false)
            ->addMenuItems([
                MenuItem::linkToCrud('Moi', 'fas fa-users', User::class),
                MenuItem::linkToLogout('Deconnexion', 'fa fa-sign-out'),
            ]);
    }
}
