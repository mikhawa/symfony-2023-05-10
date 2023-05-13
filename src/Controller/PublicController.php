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
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}
