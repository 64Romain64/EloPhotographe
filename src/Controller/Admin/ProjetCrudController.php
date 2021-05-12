<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Projet;
use App\Form\StatutType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    // Fonction Permettant d'ajouter un filtre par titre / categorie
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre')
            ->add('categorie');
    }

    // Fonction pour configurer le menu projet
    public function configureFields(string $pageName): iterable
    {
        return [
           TextField::new('titre', 'Titre du projet'),

           TextareaField::new('description', 'Description du projet'),

           DateField::new('date')->hideOnForm(),

           ChoiceField::new('statut', 'Statut')
                ->setHelp('<b>Actualité : </b><i>Projet mis sur la page d\'accueil</i></br>
                           <b>Projet : </b><i>Projet mis dans la catégorie Professionnel ou Photographie d\'art</i></br>
                           <b>Archive : </b><i>Projet non visible sur le site</i>')
                ->setChoices(['Actualité' => 0,
                              'Projet' => 1,
                              'Archive' => 2]
                            ),
                            
           AssociationField::new('categorie')->hideOnIndex(),

           AssociationField::new('photo', 'Nombre de photos')->hideOnForm(),

           SlugField::new('slug')->setTargetFieldName('titre')->hideOnIndex()->setHelp("Chemin 'url' du projet"),
        ];
    }

    /* Fonction permettant :
            - l'affichage des projets par ordre chronologique
            - Modifier les titres
    */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['date' => 'ASC'])
            ->setPageTitle('edit', 'Modifier le projet')
            ->setPageTitle('index', 'Liste des projets')
            ->setPageTitle('new', 'Créer un projet');;
    }

    
}
