<?php

namespace App\Controller\Admin;

use App\Entity\Commentaire;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commentaire::class;
    }

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
}
