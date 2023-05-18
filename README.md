# symfony-2023-05-10

## Version installée de Symfony 6.2.10

## Installation de Symfony dans l'environnement de développement sous Windows


---

## Menu de navigation
- [Code](https://github.com/mikhawa/symfony-2023-05-10)
  - [Utilisation des tags de github](#utilisation-des-tags-de-github)
  - [Historique de Symfony](#historique-de-symfony)
  - [Prérequis](#prérequis)
    - [Environnement de développement](#environnement-de-développement)
    - [Liens de téléchargement des logiciels](#liens-de-téléchargement-des-logiciels)
    - [Installation de Symfony dans l'environnement de développement](#installation-de-symfony-dans-lenvironnement-de-développement)
  - [Création d'un nouveau projet Symfony](#création-dun-nouveau-projet-symfony)
  - [Structure d'un projet Symfony](#structure-dun-projet-symfony)
  - [Lancement du serveur web de Symfony](#lancement-du-serveur-web-de-symfony)
  - [Création du premier contrôleur](#création-du-premier-contrôleur)
  - [Manipulation des routes](#manipulation-des-routes)
    - [Création d'une route depuis le contrôleur](#création-dune-route-depuis-le-contrôleur)
    - [Création d'une route depuis les annotations](#création-dune-route-depuis-les-annotations)
    - [Création d'une route depuis le fichier de configuration](#création-dune-route-depuis-le-fichier-de-configuration)
    - [Création d'une route avec paramètre](#création-dune-route-avec-paramètre)
    - [Création d'une route avec paramètre typé](#création-dune-route-avec-paramètre-typé)
    - [Création d'une route avec paramètre typé et valeur par défaut](#création-dune-route-avec-paramètre-typé-et-valeur-par-défaut)
    
    
  
---

### Utilisation des tags de github

Différents `tag` de `git` sont utilisés pour marquer les différentes étapes de ce tutoriel sur Symfony.

Vous les trouverez à cette URL : 

https://github.com/mikhawa/symfony-2023-05-10/tags

Ainsi, vous pourrez retourner dans le code source et pourrez voir le code source correspondant à l'étape du tutoriel.

Une partie du code sera supprimée et une autre partie sera ajoutée, le système de `tag` de `git` permettra de retrouver le code source correspondant à celle-ci, car il est lié à un `commit` de `git`.

Par exemple le tag v0.0.1 correspond au commit qui met la route par défaut de Symfony sur la page d'accueil :

https://github.com/mikhawa/symfony-2023-05-10/commit/f5d6f13df83f64551cfc8250a65eda8ed964ed29


---

Retour au [Menu de navigation](#menu-de-navigation)

---



### Historique de Symfony

`Symfony` est un `framework web open-source` écrit en `PHP`, qui a été créé par le développeur français `Fabien Potencier` en 2005. Le but principal de Symfony était de faciliter le développement d'applications web en fournissant un ensemble d'outils et de bibliothèques réutilisables, ainsi qu'une architecture claire et cohérente.

La première version de Symfony, la version 1.0, a été publiée en octobre 2005. Elle a rapidement gagné en popularité auprès de la communauté des développeurs PHP en raison de sa simplicité et de sa flexibilité. 

Aujourd'hui, Symfony est l'un des frameworks web les plus populaires pour le développement d'applications PHP. Il est utilisé par des entreprises de toutes tailles, des petites start-ups aux grandes entreprises internationales. La communauté Symfony est également très active et contribue régulièrement à l'amélioration du framework en fournissant des mises à jour, des correctifs de bugs et de nouveaux composants.

Il y a plusieurs raisons pour lesquelles Symfony est un choix populaire pour le `développement d'applications web` en PHP :

1. **Structuration et modularité** : Symfony offre une `structure et une organisation claire` de type `MVC` (Model-View-Controller) pour les projets, ce qui facilite leur `maintenance` et leur `évolution`. Le framework est également `modulaire`, ce qui signifie que les développeurs peuvent utiliser uniquement les composants dont ils ont besoin, sans avoir à intégrer des fonctionnalités superflues.

2. **Grande flexibilité** : Symfony est conçu pour être flexible et s'adapter à différents types de projets, qu'il s'agisse de petites applications ou de grandes plateformes web. Il est également facilement extensible grâce à sa capacité à intégrer des bibliothèques tierces.

3. **Sécurité** : La `sécurité` est une `préoccupation majeure` dans le développement web, et Symfony offre des fonctionnalités de sécurité avancées telles que la protection contre les `injections SQL` et les attaques `XSS`. Il fournit également des fonctionnalités d'`authentification` et d'`autorisation` pour garantir que les utilisateurs ne peuvent accéder qu'aux parties de l'application qui leur sont autorisées.

4. **Documentation et communauté active** : Symfony est livré avec une `documentation complète`, (à présent uniquement en anglais, choisie comme langue internationale) qui est constamment `mise à jour` pour refléter les dernières fonctionnalités. La communauté Symfony est également très active et fournit un support et des ressources utiles pour les développeurs qui travaillent avec le framework.

5. **Performance** : Symfony est conçu pour être rapide et efficace, et offre des fonctionnalités telles que le `cache` de requête pour améliorer les performances des applications web.

Dans l'ensemble, Symfony est un choix solide pour les développeurs PHP qui cherchent à construire des applications web évolutives, modulaires et sécurisées.

---

Retour au [Menu de navigation](#menu-de-navigation)

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

- Créer un nouveau projet Symfony, ici, nous ne choisirons pas la version `LTS` (Long Term Support), mais la dernière version stable

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

Lors de l'écriture de ces lignes la version stable de Symfony est la version 6.2.10 (La LTS est la version 5.4.27). Pour voir les versions LTS de nombreux projets, vous pouvez consulter le lien suivant :

https://endoflife.date/symfony

Dans la console, nous allons écrire la commande suivante :

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

### Structure d'un projet Symfony

- Le dossier `bin` contient les fichiers binaires, qui sont des fichiers exécutables qui peuvent être utilisés pour exécuter des tâches spécifiques. (par exemple, le fichier `console` est un fichier binaire qui peut être utilisé pour exécuter des commandes Symfony) en ligne de commande (CLI).:

```bash
php bin/console
# ou
symfony console
```

- Le dossier `config` contient les fichiers de configuration de l'application, tels que les fichiers de configuration de la base de données, les fichiers de configuration de l'environnement, etc.


- Le dossier `public` contient les fichiers publics de l'application, tels que les fichiers CSS, JavaScript, les images, etc. Le fichier `index.php` est le point d'entrée de l'application (`contrôleur frontal`).


- Le dossier `src` contient le code source de l'application, y compris les contrôleurs, les entités, les formulaires, etc.
  - Le dossier `src/Controller` contient les contrôleurs de l'application. (MV`C`) 
  - Le dossier `src/Entity` contient les entités de l'application. (`M`VC)
  - Le dossier `src/Form` contient les formulaires de l'application. (`M`VC)
  - Le dossier `src/Repository` contient les dépôts de l'application. (`M`VC)
  - Le dossier `src/Service` contient les services de l'application. (`M`VC)
  - etc...


- Le dossier `templates` contient les fichiers de template de l'application, qui sont des fichiers HTML qui sont utilisés pour afficher les pages de l'application. (M`V`C)


- Le dossier `tests` contient les tests de l'application.


- Le dossier `translations` contient les fichiers de traduction de l'application.


- Le dossier `var` contient les fichiers de cache, les fichiers de logs, etc. Il se trouvera dans le `.gitignore`, et ne sera donc pas envoyé sur le dépôt distant.


- Le dossier `vendor` contient les dépendances de l'application, qui sont des bibliothèques tierces qui sont utilisées par l'application. Il se trouvera dans le `.gitignore`. (`M`VC)


- Le fichier `.env` contient les variables d'environnement de l'application. (par exemple, les informations de connexion à la base de données, etc.). Ce fichier est utilisé par défaut pour l'environnement de développement. Pour l'environnement de production, le fichier `.env` est ignoré, et le fichier `.env.local` est utilisé à la place, c'est ce fichier `.env.local` qui se trouvera dans le `.gitignore`, et ne sera donc pas envoyé sur le dépôt distant. Le `.env` est l'équivalent du fichier `config.php.bak` utilisé couramment dans les projets PHP.


- Le fichier `.env.local` contient les variables d'environnement de l'application pour l'environnement de production. Ce fichier est ignoré par Git, et ne sera donc pas envoyé sur le dépôt distant. C'est l'équivalent du fichier `config.php` utilisé couramment dans les projets PHP.


- Le fichier `.env.test` contient les variables d'environnement de l'application pour l'environnement de test. Ce fichier est utilisé par défaut pour l'environnement de test. Pour l'environnement de production, le fichier `.env.test` est ignoré, et le fichier `.env.test.local` est utilisé à la place. Il se trouvera dans le `.gitignore`, et ne sera donc pas envoyé sur le dépôt distant.


- Le fichier `.gitignore` contient la liste des fichiers et dossiers qui ne doivent pas être envoyés sur le dépôt distant. (par exemple, les fichiers de logs, les fichiers de cache, les fichiers de configuration, etc.)


- Le fichier `composer.json` contient les dépendances de l'application, qui sont des bibliothèques tierces qui sont utilisées par l'application. Il permet à un utilisateur de pouvoir installer les dépendances de l'application en exécutant la commande `composer install` (création du dossier `vendor`) ou de mettre à jour les dépendances en exécutant la commande `composer update`.


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

Le premier fichier est le contrôleur en PHP, classe héritant de `AbstractController`, le second est la vue en `Twig` (moteur de template que nous verrons plus tard dans ce cours).

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

Fichier Twig :
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

On peut créer des routes en utilisant 4 méthodes différentes :

- `annotation` : dans le contrôleur
- `yaml` : dans le fichier `config/routes.yaml`
- `xml` : dans le fichier `config/routes.xml`
- `php` : dans le fichier `config/routes.php`

Symfony utilise par défaut la méthode `annotation` et l'utilisation des `attributs` (depuis PHP 8) `#[Route()]` dans les contrôleurs.

Voir la documentation :

https://symfony.com/doc/current/routing.html

Pour l'utilisation des attributs dans Symfony ou de manière plus générale dans PHP 8, voir ces liens :

https://www.elao.com/blog/dev/les-attributs-php-8-dans-symfony

https://grafikart.fr/tutoriels/attribut-php8-1371

https://www.php.net/manual/fr/language.attributes.overview.php


---

Retour au [Menu de navigation](#menu-de-navigation)

---


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

Pour en savoir plus sur la classe `Response` et les réponses HTTP, vous pouvez consulter la documentation officielle de Symfony :

https://symfony.com/doc/current/introduction/http_fundamentals.html

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

Cette méthode est également valable pour les routes avec paramètres, mais ne fait pas partie de la méthode préconisée par Symfony : Les fichiers de configuration sont plutôt utilisés pour les routes de type API.

Voir le guide des bonnes pratiques :

https://symfony.com/doc/current/best_practices.html#use-the-yaml-format-to-configure-your-own-services

---

Retour au [Menu de navigation](#menu-de-navigation)

---


#### Création d'une route avec paramètre

Nous allons créer une nouvelle méthode dans le contrôleur `PublicController.php` en utilisant un paramètre dans la route, la variable `GET` `{id}` qui sera récupérée dans la méthode sous le nom `$id` :

```php  
    #[Route('/article/{id}', name: 'public_article')]
    public function article($id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant
        // la classe Response en utilisant la variable $id
        return new Response("<body><h1>Page de l'article dont l'id est $id</h1>
        <a href='./'>Retour à l'accueil</a></body>");
    }
```

Nous pouvons mettre un lien sur l'accueil vers la page de l'article en utilisant la fonction `path()` de Twig. Attention, il faut envoyer l'id en paramètre de la route.

Pour le moment aucune vérification n'est faite sur l'id, il peut être n'importe quoi, il faut donc faire attention à ce que l'on envoie dans la route.

Dans le fichier `templates/public/index.html.twig` :

```twig
# chemin vers la page de l'article en utilisant son nom  de route (public_article) et en envoyant l'id 1
 en paramètre#}
<li>Un <a href="{{ path('public_article', {'id': 1}) }}">article dont l'id vaut 1</a></li>
```

Nous pouvons maintenant tester la route à l'adresse suivante :

https://127.0.0.1:8000/article/1

Sans protections, nous pouvons passer n'importe quoi dans l'id ! :

https://127.0.0.1:8000/article/Coucou-les-amis

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Création d'une route avec paramètre typé


Nous allons créer une nouvelle méthode dans le contrôleur `PublicController.php` en utilisant un paramètre dans la route, la variable `{id}` qui sera ensuite récupérée dans la méthode sous le nom `$id`, on va vérifier que la méthode est bien en `GET` et le type en `Int` :

```php  
#[Route('/articleType/{id<\d+>}', name: 'public_article_type',methods: ['GET'])]
    public function articleType(int $id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response en utilisant
         // la variable $id
        return new Response("<body><h1>Page de l'article Typée en int dont l'id est $id</h1>
        <p>Ne fonctionne qu'avec une variable GET de type numérique !</p><a href='../../'>Retour à l'accueil</a></body>");
    }
```

Puis dans le fichier `templates/public/index.html.twig` :

```twig
{# chemin vers la page de l'article en utilisant son nom  de route (public_article_type) 
et en envoyant l'id 1 en paramètre protégé#}
<li>Un <a href="{{ path('public_article_type', {'id': 1}) }}">article dont l'id vaut 1</a></li>
```

On peut vérifier que la route ne fonctionne pas avec une variable de type `string` :

https://127.0.0.1:8000/articleType/coucou

Pour debugger les routes, nous pouvons utiliser la commande suivante :

```bash
php bin/console debug:router
```


---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Création d'une route avec paramètre typé et valeur par défaut

Nous allons créer une nouvelle méthode dans le contrôleur `PublicController.php` en utilisant un paramètre dans la route, la variable `{id}` qui sera ensuite récupérée dans la méthode sous le nom `$id`, on va vérifier que la méthode est bien en `GET` et le type en `Int` et on va mettre une valeur par défaut à l'id :

```php
#[Route('/articleTypeDefault/{id<\d+>}', 
        name: 'public_article_type_default', 
        defaults: ['id' => 1], 
        methods: ['GET'])]
    public function articleTypeDefault(int $id): Response
    {
        // Nous allons envoyer une réponse de type texte en utilisant la classe Response en utilisant
        // la variable $id
        return new Response("<body><h1>Page de l'article Typée avec valeur par défaut en int dont l'id est $id</h1>
        <p>Ne fonctionne qu'avec une variable GET de type numérique !<br>
        La valeur par défaut est 1</p><a href='../../'>Retour à l'accueil</a></body>");
    }
```

Puis dans le fichier `templates/public/index.html.twig` :

```twig
{# chemin vers la page de l'article en utilisant son nom  de route (public_article_type_default)
sans envoyer de paramètre#}
        <li>Un <a href="{{ path('public_article_type_default') }}">articleTypeDefault 
        sans id</a></li>
        <li>Un <a href="{{ path('public_article_type_default', {'id': 15}) }}">articleTypeDefault 
        avec un id de 15</a></li>
```


---

Retour au [Menu de navigation](#menu-de-navigation)

---


