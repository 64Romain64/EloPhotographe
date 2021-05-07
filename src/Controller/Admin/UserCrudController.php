<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use Symfony\Component\Validator\Constraints\Choice;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('Utilisateur :'),
            TextField::new('nom'),
            TextField::new('prenom'),
            EmailField::new('email'),
            TextField::new('telephone')->hideOnIndex(),
            ArrayField::new('roles')->hideOnForm(),
            ChoiceField::new('roles', 'Roles')
                ->allowMultipleChoices()
                ->autocomplete()
                ->setChoices(['User' => 'ROLE_USER',
                              'Admin' => 'ROLE_ADMIN',
                              'SuperAdmin' => 'ROLE_SUPER_ADMIN']
                            )
                ->setPermission('ROLE_SUPER_ADMIN'),
            FormField::addPanel('Détail :'),
            UrlField::new('facebook')->hideOnIndex(),
            UrlField::new('instagram')->hideOnIndex(),
            UrlField::new('linkedin')->hideOnIndex(),
            TextareaField::new('aPropos')->hideOnIndex(),

        ];
    }
    
    public function configureActions(Actions $actions): Actions
    {
        // $viewInvoice = Action::new('')
        // ->linkToCrudAction('');

        return $actions
    
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        // ->setPermission(Action::DELETE, 'ROLE_SUPER_ADMIN')
        // ->setPermission(Action::NEW, 'ROLE_SUPER_ADMIN');
        ->disable(Action::DELETE, Action::NEW);
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Paramètres')
            ->setPageTitle('edit', 'Editer les paramètres');
    }
}
