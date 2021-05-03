<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('projet')
            ->add('etat');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom', 'Nom de la photo')
            ->setHelp('Pour mettre une photo en présentation du site, appelé "photoAccueil"'),
            TextareaField::new('description', 'Description de la photo')->hideOnIndex(),
            // TextareaField::new('cadre')->hideOnIndex(),
            // NumberField::new('largeur')->hideOnIndex(),
            // NumberField::new('hauteur')->hideOnIndex(),
            // NumberField::new('prix')->hideOnIndex(),
            // BooleanField::new('enVente'),
            ChoiceField::new('etat', 'Principale ou secondaire')
            ->setHelp('<b>Choisir 1 photo comme principale seulement</b></br>
                <b>Principale : </b><i>Affichage de la photo sur la page du projet</i></br> 
                <b>Secondaire : </b><i>Affichage des photos dans le projet</i>' )
            ->setChoices(['Principal' => 1,
                          'Secondaire' => 2]
                        ),
            ImageField::new('file', 'Image')
                ->setBasePath('/images/')
                ->setUploadDir('public/images')
                ->setFormType(FileUploadType::class)
                ->setUploadedFileNamePattern('[slug].[extension]'),
            // TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            // ImageField::new('file')->setBasePath('/images/')->onlyOnIndex(),
            SlugField::new('slug')->setTargetFieldName('nom')->hideOnIndex()->setHelp("Chemin 'url' de la photo"),
            AssociationField::new('projet', 'Photo associée au projet :'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort(['projet' => 'ASC']);
    }
}
