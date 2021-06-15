<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
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
           yield TextField::new('titre'),
           yield TextareaField::new('description', 'Description du projet'),
           yield DateField::new('date')->hideOnForm(),
           yield ChoiceField::new('statut', 'Statut')
                ->setHelp('<b>Actualité : </b><i>Projet mis sur la page d\'accueil</i></br>
                           <b>Projet : </b><i>Projet mis dans la catégorie Professionnel ou Photographie d\'art</i></br>
                           <b>Archive : </b><i>Projet non visible sur le site</i>')
                ->setChoices(['Actualité' => 0,
                              'Projet' => 1,
                              'Archive' => 2]
                            ),                  
           yield AssociationField::new('categorie')->hideOnIndex(),
           yield AssociationField::new('photo', 'Nombre de photos')->hideOnForm(),
           yield SlugField::new('slug')->setTargetFieldName('titre')->hideOnIndex(),
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
