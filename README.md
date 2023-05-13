# symfony-2023-05-10

## Version installée de Symfony 6.2.10

## Installation de Symfony dans l'environnement de développement sous Windows

---

## Menu de navigation
- [Accueil](#symfony-2023-05-10)
  - [Prérequis](#prérequis)
    - [Environnement de développement](#environnement-de-développement)
    - [Liens de téléchargement des logiciels](#liens-de-téléchargement-des-logiciels)
    - [Installation de Symfony dans l'environnement de développement](#installation-de-symfony-dans-lenvironnement-de-développement)
  - [Création d'un nouveau projet Symfony](#création-dun-nouveau-projet-symfony)
  - [Lancement du serveur web de Symfony](#lancement-du-serveur-web-de-symfony)
  - [Création du premier contrôleur](#création-du-premier-contrôleur)
  - [Manipulation des routes](#manipulation-des-routes)
    - [Création d'une route depuis le contrôleur](#création-dune-route-depuis-le-contrôleur)
    - [Création d'une route depuis les fichiers de configuration](#création-dune-route-depuis-les-fichiers-de-configuration)
  
---

### Prérequis

#### Environnement de développement

- Windows 10 ou 11
- WampServer 3.2.5 ou supérieur
- PHP 8.1 ou supérieur (depuis WampServer en le rajoutant dans le `PATH`, les variables d'environnement Windows)
- Composer
- Symfony CLI
- Git
- MySQL - MariaDB (depuis WampServer)
- Node.js (pour Webpack Encore)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Liens de téléchargement des logiciels

Lien de téléchargement de composer :

https://getcomposer.org/download/


Lien de téléchargement de WampServer :

https://wampserver.aviatechno.net/?lang=french


Lien de téléchargement de Symfony CLI :

https://symfony.com/download


Lien de téléchargement de Git :

https://git-scm.com/download/win


Lien de téléchargement de Node.js :

https://nodejs.org/fr/download

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Installation de Symfony dans l'environnement de développement

- Vérifier que PHP est bien installé

```bash
php -v
```

- Vérifier que Composer est bien installé

```bash
composer -V
```

- Vérifier que Symfony CLI est bien installé

```bash
symfony -V
```

- Vérifier que Git est bien installé

```bash
git --version
```

- Créer un nouveau projet Symfony, ici, nous ne choisirons pas la version LTS (Long Term Support), mais la dernière version stable

Documentation de versioning de Symfony :

https://symfony.com/releases


Vérifions si notre poste de travail est bien configuré pour Symfony

```bash
symfony check:requirements
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création d'un nouveau projet Symfony

L'écriture de la commande suivante va créer un nouveau projet (dossier) Symfony, en utilisant la dernière version stable de Symfony, et en utilisant le template `webapp`, qui est un template de base pour créer une application web.

symfony new `nom_du_projet` --webapp

```bash
symfony new symfony6 --webapp
```

Voici le lien de la documentation officielle de Symfony pour créer un nouveau projet :

https://symfony.com/doc/current/setup.html

- Vérifions que les dépendances sont bien installées et sécurisées

```bash
symfony check:security
```

- Mettons à jour les dépendances

```bash
composer update
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Lancement du serveur web de Symfony

```bash
symfony serve
```

Si le serveur est démarré en http://, quittez avec ctrl-c, et installez le certificat SSL

```bash
symfony server:ca:install
```

Une manière plus "propre" de lancer le serveur en mode deamon (invisible) est la suivante :

```bash
symfony server:start -d
```

Et pour le fermer proprement :

```bash
symfony server:stop
```

Vous pourrez retrouver le serveur web de Symfony à l'adresse suivante :

https://127.0.0.1:8000/

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création du premier contrôleur

Dans le terminal, à la racine du projet, exécutez la commande suivante :

```bash
symfony console make:controller
```

- Nom du contrôleur à indiquer : `PublicController`

2 fichiers ont été créés :

- `src/Controller/PublicController.php`
- `templates/public/index.html.twig`

Le premier fichier est le contrôleur en PHP, le second est la vue en Twig.

```php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    #[Route('/public', name: 'app_public')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}
```

```twig
{% extends 'base.html.twig' %}

{% block title %}Hello PublicController!{% endblock %}

{% block body %}

...

```

Vous pouvez le tester en vous rendant à l'adresse suivante :

https://127.0.0.1:8000/public

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Manipulation des routes

#### Création d'une route depuis le contrôleur

Dans le fichier `src/Controller/PublicController.php`, nous allons modifier la route de la méthode `index()`.

Nous choisissons de mettre le nom de la route en `annotation` pour éviter de devoir la mettre dans le fichier `config/routes.yaml` (ce qui est possible également, comme dans Laravel, par exemple, mais ce n'est pas la méthode préconisée par Symfony).



Nous choisissons le chemin de la page d'accueil à la racine du site `/`, et nous la nommons `public_accueil`

```php
namespace App\Controller;
###
    #[Route('/', name: 'public_accueil')]
    public function index(): Response
    {
        // chemin du fichier twig à partir du dossier templates
        return $this->render('public/index.html.twig', [
            // variable envoyée au fichier twig
            'controller_name' => 'PublicController',
        ]);
    }
###
```

Nous pouvons maintenant tester la route à l'adresse suivante :

https://127.0.0.1:8000/

Nous pouvons également voir nos routes disponibles en tapant la commande suivante :

```bash
symfony console debug:router
```

Nous verrons notre route `public_accueil` avec la méthode `ANY` et le chemin `/`. Les méthodes `ANY` signifie que la route est disponible en `GET` et en `POST`.

Les routes `_profiler` sont des routes qui permettent de voir les requêtes SQL, les requêtes HTTP, les variables globales, etc... en mode développement.

---

Retour au [Menu de navigation](#menu-de-navigation)

---


#### Création d'une route depuis le fichier de configuration

Nous allons créer une nouvelle méthode dans le contrôleur `PublicController.php` :

```php  
    public function contact(): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response (html basique)
        return new Response('<body><h1>Page de contact</h1><a href="./">Retour à l\'accueil</a></body>');
    }
```


Nous allons utiliser le fichier de configuration `config/routes.yaml` pour créer un chemin vers cette nouvelle méthode.

```yaml
public_contact:
    path: /contact
    controller: App\Controller\PublicController::contact
```

Nous pouvons mettre un lien sur l'accueil vers la page de contact en utilisant la fonction `path()` de Twig.

Dans le fichier `templates/public/index.html.twig` :

```twig
{# chemin vers la page de contact en utilisant son nom
de route (public_contact). Ceci est une bonne pratique 
dans Symfony #}
<li>Me <a href="{{ path('public_contact') }}">contacter</a></li>
```

Nous pouvons maintenant tester la route à l'adresse suivante :

https://127.0.0.1:8000/contact

---

Retour au [Menu de navigation](#menu-de-navigation)

---

