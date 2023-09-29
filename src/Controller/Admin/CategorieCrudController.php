<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

# Pour gérer le CRUD
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // classés par titre croissant
            ->setDefaultSort(['CategorieTitle' => 'ASC'])
            // Nombre d'articles par page
            ->setPaginatorPageSize(20)
            // Titres des pages
            ->setPageTitle('index', 'Liste des catégories')
            ->setPageTitle('new', 'Créer une catégorie')
            ->setPageTitle('edit', 'Modifier une catégorie');

    }
    public function configureFields(string $pageName): iterable
    {
        return [
            # id seulement sur l'accueil
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('CategorieTitle')->setFormTypeOptions([
                'label' => 'Titre',
                'help' => 'Titre de la catégorie',]),
            # slug seulement sur les formulaires,
            # lié au titre avec création automatique
            SlugField::new('CategorySlug')->onlyOnForms()
                ->setTargetFieldName('CategorieTitle')
                ->setFormTypeOptions([
                    'label' => 'Slug',
                    'help' => 'Créé à partir du titre, modifiable en cliquant sur le cadenas',]),
            # description
            TextEditorField::new('CategorieDesc')->setFormTypeOptions([
                'label' => 'Description',
                'help' => 'Description de la catégorie',
                ]),
            # Panel pour regrouper les champs
            FormField::addPanel('Lien avec les autres tables'),
            # Lien avec les articles
            AssociationField::new('Categorie_m2m_Article')
                ->setFormTypeOptions([
                    'label' => 'Articles',
                    'help' => 'Articles liés à cette catégorie',
                ]),

        ];
    }
}
