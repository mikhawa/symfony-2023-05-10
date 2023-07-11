<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
# Importation de la classe Response
use Symfony\Component\HttpFoundation\Response;
# Importation de la classe Request
use Symfony\Component\HttpFoundation\Request;
# Importation de la classe Route
use Symfony\Component\Routing\Annotation\Route;
# Appel de l'ORM Doctrine
use Doctrine\ORM\EntityManagerInterface;
# Importation de l'entité Categorie
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Entity\Article;

class BlogController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération des 9 derniers articles
        $articles = $entityManager->getRepository(Article::class)->findBy([], ['ArticleDateCreate' => 'DESC'], 12);
        return $this->render('blog/index.html.twig', [
            // on envoie les catégories à la vue
            'categories' => $categories,
            // on envoie les articles à la vue
            'articles' => $articles,
        ]);
    }
    #[Route('/categorie/{slug}', name: 'categorie')]
    public function categorie($slug, EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération de la catégorie dont le slug est $category_slug
        $categorie = $entityManager->getRepository(Categorie::class)->findOneBy(['CategorySlug' => $slug]);
        // récupération des articles de la catégorie grâce à la relation ManyToMany de categorie vers articlesn puis prises de valeurs
        $articles = $categorie->getCategorieM2mArticle()->getValues();
        return $this->render('blog/categorie.html.twig', [
            // on envoie la catégorie à la vue
            'categories' => $categories,
            'categorie' => $categorie,
            'articles' => $articles,
        ]);
    }

}
