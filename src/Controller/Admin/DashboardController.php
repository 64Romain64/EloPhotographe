<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use App\Entity\Projet;
use App\Entity\Categorie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EloPhotographe');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour à la page d\'accueil', 'fas fa-arrow-left', 'main');
        yield MenuItem::linkToRoute('Deconnexion', 'fas fa-sign-out-alt', 'app_logout');
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('Catégorie');
        yield MenuItem::linkToCrud('Categorie', 'fas fa-cat', Categorie::class);
        yield MenuItem::linkToCrud('Créer une categorie', 'fas fa-cat', Categorie::class)
            ->setAction('new');
 
        yield MenuItem::section('Projets');
        yield MenuItem::subMenu('Projets', 'fa fa-article')
                        ->setSubItems
                        ([
                            MenuItem::linkToCrud('Projets', 'fas fa-tasks', Projet::class),
                            MenuItem::linkToCrud('Photos', 'fas fa-camera', Photo::class),
                        ]);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        // Usually it's better to call the parent method because that gives you a
        // user menu with some menu items already created ("sign out", "exit impersonation", etc.)
        // if you prefer to create the user menu from scratch, use: return UserMenu::new()->...
        return parent::configureUserMenu($user)
            // use the given $user object to get the user name
            ->setName($user->getUsername())
            // use this method if you don't want to display the name of the user
            ->displayUserName(false)

            // you can use any type of menu item, except submenus
            ->addMenuItems([
                MenuItem::linkToRoute('My Profile', 'fa fa-id-card', '...', ['...' => '...']),
                MenuItem::linkToRoute('Settings', 'fa fa-user-cog', '...', ['...' => '...']),
                MenuItem::section(),
                MenuItem::linkToLogout('Logout', 'fa fa-sign-out'),
            ]);
    }
}
