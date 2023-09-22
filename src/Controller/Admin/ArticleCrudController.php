<?php

namespace App\Controller\Admin;

use App\Entity\Article;

# Pour gérer le CRUD
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    # Options de configuration du CRUD
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // classés par id décroissant
            ->setDefaultSort(['id' => 'DESC'])
            // Nombre d'articles par page
            ->setPaginatorPageSize(20)
            // Titres des pages
            ->setPageTitle('index', 'Liste des articles')
            ->setPageTitle('new', 'Créer un article')
            ->setPageTitle('edit', 'Modifier un article');

    }
}
