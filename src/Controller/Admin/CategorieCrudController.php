<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    // Fonction Permettant d'ajouter un filtre par titre
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre');
    }

    // Fonction pour configurer le menu catégorie
    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('titre', 'Menu')
                ->setHelp('Le menu correspond aux intitulés de la barre de navigation') // Message d'aide
                ->setChoices(['Professionnel' => 'Professionnel', // Choix des catégories
                              'Art' => 'Art']),
                              
            TextField::new('nom', 'Nom du sous-Menu'),

            AssociationField::new('projets', 'Nombre de projets')->hideOnForm(), // Cacher sur le formulaire

            SlugField::new('slug')->setTargetFieldName('nom')->hideOnIndex(), // Cacher sur l'index

        ];
    }

    /* Fonction permettant :
            - l'affichage des projets par ordre chronologique
            - Modifier les titres
    */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['titre' => 'ASC'])
            ->setPageTitle('new', 'Ajouter un sous-menu');;;
    }
}
