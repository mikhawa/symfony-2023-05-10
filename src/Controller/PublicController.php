<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    // Nous choisissons de mettre le nom de la route en annotation pour éviter de le mettre dans le fichier config/routes.yaml
    // Nous choisissons le chemin de la page d'accueil à la racine du site, et nous la nommons public_accueil
    #[Route('/', name: 'public_accueil')]
    public function index(): Response
    {
        // chemin du fichier twig à partir du dossier templates
        return $this->render('public/index.html.twig', [
            // variable envoyée au fichier twig
            'controller_name' => 'PublicController',
        ]);
    }
    // Nous allons mettre la route de la page contact dans le fichier config/routes.yaml
    // équivalent à #[Route('/contact', name: 'public_contact')]
    public function contact(): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response (html basique incomplet)
        return new Response('<body><h1>Page de contact</h1><a href="./">Retour à l\'accueil</a></body>');
    }

    #[Route('/article/{id}', name: 'public_article')]
    public function article($id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response en utilisant la variable $id
        return new Response("<body><h1>Page de l'article dont l'id est $id</h1><a href='../../'>Retour à l'accueil</a></body>");
    }
    #[Route('/articleType/{id<\d+>}', name: 'public_article_type',methods: ['GET'])]
    public function articleType(int $id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response en utilisant la variable $id
        return new Response("<body><h1>Page de l'article Typée en int dont l'id est $id</h1><p>Ne fonctionne qu'avec une variable GET de type numérique !</p><a href='../../'>Retour à l'accueil</a></body>");
    }

    #[Route('/articleTypeDefault/{id<\d+>}',
        name: 'public_article_type_default',
        defaults: ['id' => 1],
        methods: ['GET'])]
    public function articleTypeDefault(int $id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response en utilisant
        // la variable $id
        return new Response("<body><h1>Page de l'article Typée avec valeur par Défaut en int dont l'id est $id</h1>
        <p>Ne fonctionne qu'avec une variable GET de type numérique !<br>
        La valeur par défaut est 1</p><a href='../../'>Retour à l'accueil</a></body>");
    }
}
