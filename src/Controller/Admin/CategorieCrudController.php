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

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titre');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            
            ChoiceField::new('titre', 'Menu')
                ->setHelp('Le menu correspond aux intitulés de la barre de navigation')
                ->setChoices(['Professionnel' => 'Professionnel',
                              'Art' => 'Art']
                            ),
            TextField::new('nom', 'Nom du sous-Menu'),
            AssociationField::new('projets', 'Nombre de projets')->hideOnForm(),

            SlugField::new('slug')->setTargetFieldName('nom')->hideOnIndex(),

        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort(['titre' => 'ASC']);
    }
}
