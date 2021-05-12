<?php

namespace App\Controller\Admin;

use DateTime;
use App\Entity\Commentaire;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commentaire::class;
    }

    // Fonction pour configurer le menu Commentaire
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Contenu')->hideOnForm(),

            TextField::new('Contenu', "Contenu du commentaire")->hideOnIndex(),

            DateTimeField::new('date', 'Date et heure'),

            BooleanField::new('publie'),
            
            AssociationField::new('user')
        ];
    }

    /* Fonction permettant de modifier le titre
    */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setPageTitle('index', 'Liste des commentaires');
    }

}
