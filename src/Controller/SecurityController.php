<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
# Appel de l'ORM Doctrine
use Doctrine\ORM\EntityManagerInterface;
# Importation de l'entité Categorie
use App\Entity\Categorie;

class SecurityController extends AbstractController
{
    #[Route(path: '/connect', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
         }

        $categories = $entityManager->getRepository(Categorie::class)->findAll();

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            // on envoie les catégories à la vue
            'categories' => $categories,
            ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
