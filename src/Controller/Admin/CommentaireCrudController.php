<?php

namespace App\Controller\Admin;

use App\Entity\Commentaire;

# Pour gérer le CRUD
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commentaire::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // classés par id décroissant
            ->setDefaultSort(['id' => 'DESC'])
            // Nombre d'articles par page
            ->setPaginatorPageSize(20)
            // Titres des pages
            ->setPageTitle('index', 'Liste des commentaires')
            ->setPageTitle('new', 'Créer un commentaire')
            ->setPageTitle('edit', 'Modifier un commentaire');

    }

    public function configureFields(string $pageName): iterable
    {
        return [
            # id seulement sur l'accueil
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('CommentaireTitle'),
            TextEditorField::new('CommentaireText'),
            DateTimeField::new('CommentaireDateCreate'),
            BooleanField::new('CommentaireIsPublished'),
            # Panel pour regrouper les champs
            FormField::addPanel('Lien avec les autres tables'),
            # Lien avec l'utilisateur
            AssociationField::new('utilisateur'),
            # Lien avec l'article
            AssociationField::new('CommentaireManyToOneArticle')
                ->setDisabled()
                ->setFormTypeOptions([
                    'label' => 'Article',
                    'help' => 'Article non modifiable',
                ]),


        ];
    }
}
