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
  - [Création du fichier .env.local](#création-du-fichier-envlocal)
    - [Création de la base de données](#création-de-la-base-de-données)
    - [Si la base de données existe déjà](#si-la-base-de-données-existe-déjà)
      - [Création d'un crud pour la table `post`](#création-dun-crud-pour-la-table-post)
      - [Correction des erreurs](#correction-des-erreurs)
      - [0.2.0 - reset de fichier](#020)
      - [0.2.1 - nouveau contrôleur](#021)
    - [Création d'une entité](#création-dune-entité)
      - [Première migration vers la DB](#première-migration-vers-la-db)
    - [Création d'une entité avec une relation ManyToOne](#création-dune-entité-avec-une-relation-manytoone)
      - [Deuxième migration vers la DB](#deuxième-migration-vers-la-db)
    
  
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

Les routes en `_...` sont des routes qui permettent de voir les requêtes SQL, les requêtes HTTP, les variables globales, etc... en mode développement.

[V0.0.1](https://github.com/mikhawa/symfony-2023-05-10/commit/f5d6f13df83f64551cfc8250a65eda8ed964ed29#diff-b1b5b30007fdfcd4be14b1260eb4278fa1bdc57cc7cd6224ef521116360b99e2)

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


[V0.0.2](https://github.com/mikhawa/symfony-2023-05-10/commit/ff72c74f4996c9b931c27ecd3bc2f843fb7f2cf3#diff-dec2af5f7d9970f289445f4d0e64b7ef32010495a60d370ee293f82db366847f)


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

[V0.0.3](https://github.com/mikhawa/symfony-2023-05-10/commit/e000b4563d809657feeb43467ce91099464176b3#diff-b1b5b30007fdfcd4be14b1260eb4278fa1bdc57cc7cd6224ef521116360b99e2)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création du fichier .env.local

Nous allons créer un fichier `.env.local` en copiant le fichier `.env` et en le renommant `.env.local` :

```bash 
cp .env .env.local
```

Ou de manière plus simple en utilisant la commande suivante :

```bash
composer dump-env dev
```

Ce qui créera un fichier `.env.local.php`, que nous ne garderons pas pour le moment. Cette commande est à utiliser pour la mise en production : `composer dump-env prod`.

Nous allons modifier le fichier `.env.local` pour y mettre les informations de connexion à la base de données MariaDB, ici pas de danger car nous travaillons en local, mais en production il faudra faire attention à ne pas mettre les informations de connexion à la base de données dans un fichier qui sera versionné.

```bash
# .env.local

###> doctrine/doctrine-bundle ###
 DATABASE_URL="mysql://root:@127.0.0.1:3307/sym_62?serverVersion=10.10.2-MariaDB&charset=utf8mb4"
# DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=15&charset=utf8"
###< doctrine/doctrine-bundle ###
```

#### Création de la base de données

Nous allons créer la base de données en utilisant la commande suivante :

```bash
php bin/console doctrine:database:create
```

[V0.0.4](https://github.com/mikhawa/symfony-2023-05-10/commit/aacd2d2e2c44e0b0b95ae5b2fc645c08f414aa76)


---

Retour au [Menu de navigation](#menu-de-navigation)

---


#### Si la base de données existe déjà

Si la base de données existe déjà et que des tables y sont présentes, nous pouvons importer toute la structure !

Les tables seront importées sous forme d'entités avec annotations dans les fichiers `src/Entity` de notre projet.

Nous allons en faire la démonstration dans le tag [V0.1.1](https://github.com/mikhawa/symfony-2023-05-10/commit/5969a228f473ee7f6d0ecb90060415f4c2d4b418)
 en utilisant la DB `mvcprojets` que vous trouverez dans le dossier `datas` de ce projet.

Pour le tester vous pouvez importer la base de données dans votre serveur MariaDB en utilisant le fichier contenu dans le dossier `datas` de ce projet: 

https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/mvcprojets.sql


Remplacez les informations de connexion à la base de données dans le fichier `.env.local` par les vôtres :

```bash
# .env.local

###> doctrine/doctrine-bundle ###
 DATABASE_URL="mysql://root:@127.0.0.1:3307/mvcprojets?serverVersion=10.10.2-MariaDB&charset=utf8mb4"
###< doctrine/doctrine-bundle ###
```

Puis lancez la commande suivante :

```bash
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```

Vous devriez voir apparaître les fichiers 
- `src/Entity/Category.php`
- `src/Entity/Post.php`
- `src/Entity/User.php`

Qui contiennent les annotations de nos entités. C'est-à-dire le mapping de nos tables avec les propriétés et les liens entre les tables.

Il faut une étape de plus pour que les entités soient prises en compte par le système de migration de Symfony, nous allons donc lancer la commande suivante :

```bash 
php bin/console make:entity --regenerate
```

Il va ainsi créer les getters et les setters de nos entités, ainsi que des méthodes pour les liens entre les tables.

##### Il y aura des erreurs ! Nous devons comprendre le fonctionnement de Doctrine pour pouvoir les corriger !

Nous allons donc commencer par comprendre le fonctionnement de Doctrine en créant un premier CRUD.


---

Retour au [Menu de navigation](#menu-de-navigation)

---


##### Création d'un crud pour la table `post`

Nous allons créer un CRUD pour la table `post` en utilisant la commande suivante :

```bash
php bin/console make:crud Post
```

Le nom choisi pour le controller est `PostController` et le nom de l'entité est `Post`.

Voici le résultat de la commande :

```bash
created: src/Controller/PostController.php
created: src/Form/PostType.php
created: templates/post/_delete_form.html.twig
created: templates/post/_form.html.twig
created: templates/post/edit.html.twig
created: templates/post/index.html.twig
created: templates/post/new.html.twig
created: templates/post/show.html.twig 
```

[v0.1.2](https://github.com/mikhawa/symfony-2023-05-10/commit/219832ee5af7af29a8550520e783890cdc695274#diff-a16c7b92171671c30d962bee80704485170906fb2e4e9f6df0716b971678bcb4)


Nous allons rajouter un lien vers la route `/post` dans le fichier `templates/public/index.html.twig` :

```twig
#
<li>Un lien vers le CRUD de 'post'
 <a href="{{ path('app_post_index')}}">CRUD Post</a></li>
#
```

Nous pouvons ensuite aller sur la route `/post` de notre projet et voir le résultat :

https://127.0.0.1:8000/post/

Nous voici sur la page d'index du CRUD de la table `post` !

Elle devrait être fonctionnelle, mais nous allons avoir des erreurs si nous essayons de créer un nouveau post, ou de modifier un post existant.

---

Retour au [Menu de navigation](#menu-de-navigation)

---


##### Correction des erreurs

Nous allons donc commencer par corriger ces erreurs.

Nous allons commencer par la création d'un nouveau post.

Nous allons donc aller sur la route `/post/new` de notre projet :

https://127.0.0.1:8000/post/new

Nous avons une erreur :

```bash
App\Entity\Post::getDatecreate(): Return value must be of type ?DateTimeInterface, string returned
```

Dans le constructeur du fichier  `src/Entity/Post.php`, nous rajoutons la ligne suivante

```php
public function __construct()
    {
        $this->category = new
         \Doctrine\Common\Collections\ArrayCollection();
         // rajout d'une date de création par défaut
        $this->setDatecreate(new \DateTime());
    }
```

Nous avons ensuite cette erreur :

```bash
Object of class App\Entity\User could not be converted to string
```

Dans le fichier `src/Entity/User.php` nous allons rajouter la méthode `__toString()` :

```php  
    // permet l'affichage du nom de l'utilisateur dans le formulaire du CRUD
    // de la table Post
    public function __toString()
    {
        return $this->getUsername();
    }
```

Dans le fichier `src/Entity/Category.php` nous allons rajouter la méthode `__toString()` :

```php  
    // permet l'affichage du nom de la catégorie dans le formulaire du CRUD
    // de la table Post
    public function __toString()
    {
        return $this->getTitle();
    }
```

Nous pouvons maintenant créer un nouveau post !

[v0.1.3](https://github.com/mikhawa/symfony-2023-05-10/commit/1eef25bd772327f78312aac218abcb411397d007#diff-1dc9c8fdb2d9aaa479424bdd89a00ef749cd5b1673ab9bcd75744e92e3d3e44a)

Nous remarquons que nous avons une erreur, les catégories sélectionnées le sont en many to many, mais l'insertion ne fonctionne pas pour les catégories de notre post !

Nous allons modifier le fichier de formulaire pour changer l'affichage de celui-ci `src/Form/PostType.php` :

```php
    // ...
// pour le many to many
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    // ...
    ->add('category', EntityType::class, [
        'class' => Category::class,
        'choice_label' => 'title',
        'multiple' => true,
        'expanded' => true,
    ])
    // ...
```

Ensuite nous allons modifier le fichier `src/Entity/Post.php` :

En changeant la ligne de jointure qui ne semble pas fonctionner en create et update depuis Post vers Category :

```php
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="post")
     */
     private $category = array();
```

Par

```php
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="Post")
     * @ORM\JoinTable(name="category_has_post",
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *   },
     *   joinColumns={
     *     @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     *   }
     * )
     */
    private $category = array();
```

Et voici notre CRUD de la table `post` fonctionnel !

[v0.1.4](https://github.com/mikhawa/symfony-2023-05-10/commit/52da0675544b0be4cd562723a890c3175c86368b#diff-c1d37559aa251754682b2e972c2eef2018b93e96aa35730a6a2e73363b210fc4)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### 0.2.0


Nous allons retourner dans le passé du projet, en enlevant le CRUD de la table `post` que nous venons de créer, les contrôleurs, les formulaires, les templates, les entités, etc.

On va aussi modifier les fichiers `.env`, `.env.local` pour changer le nom de la base de données locale.

.env

```bash
# ...
DATABASE_URL="mysql://root:@127.0.0.1:3307/sym_62?serverVersion=10.10.2-MariaDB&charset=utf8mb4"
# ...
```


Nous passerons à la version [0.2.0](https://github.com/mikhawa/symfony-2023-05-10/commit/8d5623a73a03d19b599c16570ec0eb8e2fc8a10d)


---

Retour au [Menu de navigation](#menu-de-navigation)

---

### 0.2.1

Nous allons tout d'abord créer à nouveau un contrôleur pour pouvoir tester nos entités.

```bash
php bin/console make:controller BlogController
```

puis modifier le fichier `src/Controller/BlogController.php` :

```php
#[Route('/', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
```

[v0.2.1](https://github.com/mikhawa/symfony-2023-05-10/commit/393ea1c398bbb855f4407194ce9dda238611a46e#diff-f8af05fe3ed91657a96bece8df2f0639855fdbe18e5287e3186e088e66664cd0)

---

Retour au [Menu de navigation](#menu-de-navigation)

---


### Création d'une entité

Nous allons créer un mini blog, avec des articles, des catégories, des utilisateurs, des commentaires etc.

Pour créer une entité `Article`, nous allons utiliser la commande suivante :

```bash
php bin/console make:entity
```

Nous allons ensuite répondre aux questions suivantes :

```bash
> Class name of the entity to create or update (e.g. BravePuppy):
> > Article
> AritcleTitle
> > string
> > 160
> > nullable => no
> AritcleSlug
> > string
> > 160
> > nullable => no
> AritcleContent
> > text
> > nullable => no
> AritcleDateCreate
> > date
> > nullable => yes
> AritcleDateUpdate
> > datetime
> > nullable => yes
> AritcleIsPublished
> > boolean
> > nullable => no
```

L'enregistrement de l'entité se fait automatiquement dans le fichier `src/Entity/Article.php`. Un fichier `src/Repository/ArticleRepository.php` contenant la gestion de la table `article`est aussi créé.

On peut voir si les champs correspondent bien à ce que nous souhaitons dans la DB de notre projet.

dans le fichier `src/Entity/Article.php` nous allons modifier la ligne suivante :

```php
    // ...
    // pour que l'id soit unsigned
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;
```

Il peut y avoir d'autres modifications à faire plus tard, pour le moment cela nous suffit.

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Première migration vers la DB

Nous allons maintenant effectuer une migration vers la DB pour créer la table `article` :

```bash
php bin/console make:migration
```

Ce qui nous a créé un fichier `src/Migrations/Version***.php` contenant la migration de la table `article`.

Nous allons maintenant effectuer la migration vers la DB :

```bash 
php bin/console doctrine:migrations:migrate
```

[V0.2.2](https://github.com/mikhawa/symfony-2023-05-10/commit/29baabb0afd2dfd6c21768ec869c75f1c21dde56#diff-19199e05681cd32d662f72e9d78fa3f433ec404a9812c9dbc21663e24b7245e8)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création d'une entité avec une relation ManyToOne

Les commentaires seront liés à un article, nous allons donc créer une entité `Commentaire` avec une relation `ManyToOne` vers `Article`.

```bash
php bin/console make:entity
```

Nous allons ensuite répondre aux questions suivantes :




---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Deuxième migration vers la DB



---

Retour au [Menu de navigation](#menu-de-navigation)

---