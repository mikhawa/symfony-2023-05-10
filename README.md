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
    - [Création d'une entité avec une relation ManyToMany](#création-dune-entité-avec-une-relation-manytomany)
      - [Troisième migration vers la DB](#troisième-migration-vers-la-db)
  - [Mise à jour de version mineure de Symfony](#mise-à-jour-de-version-mineure-de-symfony)
  - [Création d'un utilisateur](#création-dun-utilisateur)
    - [Modification de la table utilisateur](#modification-de-la-table-utilisateur)
    - [Lions la table utilisateur à la table article](#lions-la-table-utilisateur-à-la-table-article)
    - [Lions la table utilisateur avec commentaire](#lions-la-table-utilisateur-avec-commentaire)
  - [Création des fixtures](#création-des-fixtures)
    - [Création des fixtures pour la table utilisateur](#création-des-fixtures-pour-la-table-utilisateur)
    - [Création des fixtures pour les utilisateurs ET les articles](#création-des-fixtures-pour-les-utilisateurs-et-les-articles)
    - [Création des fixtures pour les autres tables](#création-des-fixtures-pour-les-autres-tables)
  - [Modification de la page d'accueil](#modification-de-la-page-daccueil)
    - [Modification du contrôleur pour la page d'accueil](#modification-du-contrôleur-pour-la-page-daccueil)
  - [Twig : Création d'un template de base](#twig--création-dun-template-de-base)
    - [Modification du fichier `templates/base.html.twig`](#modification-du-fichier-templatesbasehtmltwig)
    - [Installation de Webpack Encore](#installation-de-webpack-encore)
    - [Installation de Yarn](#installation-de-yarn)
    - [Création des fichiers `CSS` et `JS` via `Webpack Encore`](#création-des-fichiers-css-et-js-via-webpack-encore)
    - [Installation de Bootstrap](#installation-de-bootstrap)
  - [Choix du template](#choix-du-template)
    - [Modification de base.html.twig](#modification-de-basehtmltwig)
    - [Modification de template.html.twig](#modification-de-templatehtmltwig)
    - [Modification de la page d'accueil](#modification-de-la-page-daccueil-1)
    - [Création de la section Catégories](#création-de-la-section-catégories)
    - [Affichage des articles par catégorie](#affichage-des-articles-par-catégorie)
    - [Création de la section Article](#création-de-la-section-article)
      - [Création de la route dans le controller](#création-de-la-route-dans-le-controller)
      - [Création des liens vers les articles dans la section `categorie` et `index`](#création-des-liens-vers-les-articles-dans-la-section-categorie-et-index)
      - [Affichage d'un résumé de l'article avec slice](#affichage-dun-résumé-de-larticle-avec-slice)
      - [Installation de la bibliothèque Twig Extra String](#installation-de-la-bibliothèque-twig-extra-string)
      - [Utilisation de la fonction `truncate` de la bibliothèque Twig Extra String](#utilisation-de-la-fonction-truncate-de-la-bibliothèque-twig-extra-string)
      - [Modification de la méthode `article` du controller](#modification-de-la-méthode-article-du-controller)
      - [Création de la vue `article.html.twig`](#création-de-la-vue-articlehtmltwig)
    - [Création de la vue `commentaire.html.twig`](#création-de-la-vue-commentairehtmltwig)
      - [Chargement des commentaires dans BlogController](#chargement-des-commentaires-dans-blogcontroller)
      - [Affichage des commentaires dans la vue `commentaire.html.twig`](#affichage-des-commentaires-dans-la-vue-commentairehtmltwig)
      - [Erreur de mapping entre les entités Article et Commentaire](#erreur-de-mapping-entre-les-entités-article-et-commentaire)
      - [Utilisation des relations inverses](#utilisation-des-relations-inverses)
  - [Authentification et autorisation](#authentification-et-autorisation)
    - [Création de la connexion utilisateur](#création-de-la-connexion-utilisateur)
    - [Modification du formulaire de connexion](#modification-du-formulaire-de-connexion)
      - [Route de connexion](#route-de-connexion)
      - [Menu de navigation et formulaire de connexion](#menu-de-navigation-et-formulaire-de-connexion)
      - [Réorganisation des templates](#réorganisation-des-templates)
      - [Possibilité de déconnexion](#possibilité-de-déconnexion)
      - [Remember me](#remember-me)
      - [Protection du formulaire de connexion](#protection-du-formulaire-de-connexion)
    - [Mise en place de la création de commentaires](#mise-en-place-de-la-création-de-commentaires)
      - [Création d'un CRUD pour les commentaires](#création-dun-crud-pour-les-commentaires)
        - [Correction des erreurs de type toString sur les commentaires](#correction-des-erreurs-de-type-tostring-sur-les-commentaires)
        - [Pour avoir une date par défaut lors de la création d'un commentaire](#pour-avoir-une-date-par-défaut-lors-de-la-création-dun-commentaire)
        - [Protection du CRUD des commentaires](#protection-du-crud-des-commentaires)
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
- Yarn (pour Webpack Encore)

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

ou le mettre à jour avec la commande :

```bash
npm install -g npm@latest
```

Lien de téléchargement de Yarn :

https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable

ou l'installer avec la commande :

```bash
npm install --global yarn
```

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
> ArticleTitle
> > string
> > 160
> > nullable => no
> ArticleSlug
> > string
> > 160
> > nullable => no
> ArticleContent
> > text
> > nullable => no
> ArticleDateCreate
> > date
> > nullable => yes
> ArticleDateUpdate
> > datetime
> > nullable => yes
> ArticleIsPublished
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
php bin/console make:entity Commentaire
```

Nous allons ensuite répondre aux questions suivantes :

```bash
> Class name of the entity to create or update (e.g. BravePuppy):
> > Commentaire
> CommentaireTitle
> > string
> > 100
> > nullable => no
> CommentaireText
> > string
> > 800
> > nullable => no
> CommentaireDateCreate
> > datetime
> > nullable => yes
> > CommentaireManyToOneArticle
> > ManyToOne
> > Article
> > nullable => no
> > CommentaireIsPublished
> > boolean
> > nullable => no

```

Nous allons faire quelques modifications dans le fichier `src/Entity/Commentaire.php` :

```php
    // ...
    // pour que l'id soit unsigned
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;

    // ...
    // pour que la date actuelle soit insérée automatiquement
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true,options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $CommentaireDateCreate = null;

    // ...
    // Pour que la relation soit bidirectionnelle,
    // on peut ajouter une propriété targetEntity et inversedBy
    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'Commentaires')]
    private ?Article $CommentaireManyToOneArticle = null;
    
    // pour que la valeur par défaut soit false
    #[ORM\Column(type: Types::BOOLEAN, options: ["default" => false])]
    private ?bool $CommentaireIsPublished = null;

```

Nous allons faire quelques modifications dans le fichier `src/Entity/Article.php` :

```php
    // ...
    
    // pour que la date actuelle soit insérée automatiquement lors de la création
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, 
            options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $AritcleDateCreate = null;

    // pour que la date actuelle soit insérée automatiquement lors de la mise à jour
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, columnDefinition: "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",)]
    private ?\DateTimeInterface $AgirticleDateUpdate = null;

``` 

[v0.2.3](https://github.com/mikhawa/symfony-2023-05-10/commit/06cb586e26196d37f0acd63621b2f8cc6934ddd8#diff-bfda95459173a4f13453f500a164b7f3afdc09bed8d039383e8d94fabcce2649)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Deuxième migration vers la DB

```bash
php bin/console make:migration
```

Ce qui nous a créé un fichier `src/Migrations/Version***.php` contenant la migration de la table `commentaire` et les modifications de la table `article`.

Nous allons maintenant effectuer la migration vers la DB :

```bash
php bin/console doctrine:migrations:migrate
```



---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création d'une entité avec une relation ManyToMany

Les articles seront liés à des catégories, nous allons donc créer une entité `Categorie` avec une relation `ManyToMany` vers `Article`.

```bash
php bin/console make:entity Categorie
```

Nous allons ensuite répondre aux questions suivantes :

```bash

> CategorieTitle
> > string
> > 160
> > nullable => no
> > CategorieSlug
> > string
> > 160
> > nullable => no
> > CategorieDesc 
> > string
> > 500
> > nullable => yes
> > Categorie_m2m_Article
> > ManyToMany
> > Article
> > acces into Article
> > yes

```

Nous allons faire quelques modifications dans le fichier `src/Entity/Categorie.php` :

```php
    // ...
    // pour que l'id soit unsigned
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;

    // ...
```

[v0.2.4](https://github.com/mikhawa/symfony-2023-05-10/commit/2596db5b66a0524d26d5ac6e7955ba288f6c8a3e#diff-65fec058e1346b760cbe5d0bfc6867ef3fca25727dc922e5137cc7ab712f285e)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Troisième migration vers la DB

Ensuite on refait une migration :

```bash
php bin/console make:migration
```

Puis on effectue la migration :

```bash
php bin/console doctrine:migrations:migrate
```


---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Mise à jour de version mineure de Symfony

Pour des raisons de sécurité, il est important de mettre à jour régulièrement les versions des packages utilisés dans notre projet:

Aujourd'hui nous sommes le 2023-06-13, et il ne reste qu'un mois de mises à jour de sécurité pour la version 6.2 de Symfony :

https://endoflife.date/symfony


Nous allons mettre à jour la version de Symfony de **6.2.11** à **6.3.0** :

Il vaut mieux commencer par créer une branche git pour pouvoir retourner sur la version précédente si besoin !

Dans le fichier `composer.json` :

```json
    "require": {
        "php": ">=8.1",
        "ext-ctype": "*",
        "ext-iconv": "*",
        "doctrine/annotations": "^2.0",
        "doctrine/doctrine-bundle": "^2.9",
        "doctrine/doctrine-migrations-bundle": "^3.2",
        "doctrine/orm": "^2.15",
        "phpdocumentor/reflection-docblock": "^5.3",
        "phpstan/phpdoc-parser": "^1.20",
        "sensio/framework-extra-bundle": "^6.1",
        "symfony/asset": "6.2.*",
        "symfony/console": "6.2.*",
        "symfony/doctrine-messenger": "6.2.*",
        "symfony/dotenv": "6.2.*",
        "symfony/expression-language": "6.2.*",
        "symfony/flex": "^2",
        "symfony/form": "6.2.*",
        "symfony/framework-bundle": "6.2.*",
        "symfony/http-client": "6.2.*",
        "symfony/intl": "6.2.*",
        "symfony/mailer": "6.2.*",
        "symfony/mime": "6.2.*",
        "symfony/monolog-bundle": "^3.0",
        "symfony/notifier": "6.2.*",
        "symfony/process": "6.2.*",
        "symfony/property-access": "6.2.*",
        "symfony/property-info": "6.2.*",
        "symfony/runtime": "6.2.*",
        "symfony/security-bundle": "6.2.*",
        "symfony/serializer": "6.2.*",
        "symfony/string": "6.2.*",
        "symfony/translation": "6.2.*",
        "symfony/twig-bundle": "6.2.*",
        "symfony/validator": "6.2.*",
        "symfony/web-link": "6.2.*",
        "symfony/yaml": "6.2.*",  
 
...

"extra": {
    "symfony": {
        "allow-contrib": false,
        "require": "6.2.*"
        }
    },
    "require-dev": {
        "phpunit/phpunit": "^9.5",
        "symfony/browser-kit": "6.2.*",
        "symfony/css-selector": "6.2.*",
        "symfony/debug-bundle": "6.2.*",
        "symfony/maker-bundle": "^1.0",
        "symfony/phpunit-bridge": "^6.2",
        "symfony/stopwatch": "6.2.*",
        "symfony/web-profiler-bundle": "6.2.*"
}
```

Par les lignes suivantes :


```json
"require": {
        "php": ">=8.1",
        "ext-ctype": "*",
        "ext-iconv": "*",
        "doctrine/annotations": "^2.0",
        "doctrine/doctrine-bundle": "^2.9",
        "doctrine/doctrine-migrations-bundle": "^3.2",
        "doctrine/orm": "^2.15",
        "phpdocumentor/reflection-docblock": "^5.3",
        "phpstan/phpdoc-parser": "^1.20",
        "sensio/framework-extra-bundle": "^6.1",
        "symfony/asset": "6.3.*",
        "symfony/console": "6.3.*",
        "symfony/doctrine-messenger": "6.3.*",
        "symfony/dotenv": "6.3.*",
        "symfony/expression-language": "6.3.*",
        "symfony/flex": "^2",
        "symfony/form": "6.3.*",
        "symfony/framework-bundle": "6.3.*",
        "symfony/http-client": "6.3.*",
        "symfony/intl": "6.3.*",
        "symfony/mailer": "6.3.*",
        "symfony/mime": "6.3.*",
        "symfony/monolog-bundle": "^3.0",
        "symfony/notifier": "6.3.*",
        "symfony/process": "6.3.*",
        "symfony/property-access": "6.3.*",
        "symfony/property-info": "6.3.*",
        "symfony/runtime": "6.3.*",
        "symfony/security-bundle": "6.3.*",
        "symfony/serializer": "6.3.*",
        "symfony/string": "6.3.*",
        "symfony/translation": "6.3.*",
        "symfony/twig-bundle": "6.3.*",
        "symfony/validator": "6.3.*",
        "symfony/web-link": "6.3.*",
        "symfony/yaml": "6.3.*",
        "twig/extra-bundle": "^2.12|^3.0",
        "twig/twig": "^2.12|^3.0"
    },

... et

"extra": {
        "symfony": {
            "allow-contrib": false,
            "require": "6.3.*"
        }
    },
    "require-dev": {
        "phpunit/phpunit": "^9.5",
        "symfony/browser-kit": "6.3.*",
        "symfony/css-selector": "6.3.*",
        "symfony/debug-bundle": "6.3.*",
        "symfony/maker-bundle": "^1.0",
        "symfony/phpunit-bridge": "^6.3",
        "symfony/stopwatch": "6.3.*",
        "symfony/web-profiler-bundle": "6.3.*"
    }
```

Puis dans le terminal :

```bash
composer update "symfony/*"
```


En cas de soucis, voir cette page :

https://symfony.com/doc/current/setup/upgrade_major.html#2-update-to-the-new-major-version-via-composer

Pour être certain de la compatibilité des dépendances, il est possible de lancer la commande suivante :

```bash
composer recipes:install --force -v
```

[v0.3.0](https://github.com/mikhawa/symfony-2023-05-10/commit/5299754210d4add384bad41ee06f0e1f0b4bb7c3#diff-d2ab9925cad7eac58e0ff4cc0d251a937ecf49e4b6bf57f8b95aab76648a9d34)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création d'un utilisateur

Nous allons créer la table utilisateur et l'entité associée avec la commande suivante :

```bash
php bin/console make:user
```

Nous choisissons comme options pour cette entité sécurisée :

```bash
> The class name of the security user entity (e.g. User) [User]: Utilisateur
> Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]: yes
> Enter a property name that will be the unique "display" name for the user
 (e.g. email, username, uuid) [email]: email
> Will this app need to hash/check user passwords? Choose No if passwords are not needed
 or will be checked/hashed by some other system (e.g. a single sign-on server). (yes/no) [yes]: yes
```

Fichiers créés :

```bash
 created: src/Entity/Utilisateur.php
 created: src/Repository/UtilisateurRepository.php
 updated: src/Entity/Utilisateur.php
 updated: config/packages/security.yaml
```

[v0.3.1](https://github.com/mikhawa/symfony-2023-05-10/commit/7ce664d0400cf9c4464b585eab8ea65c42de57f4#diff-7930a7aa0c6617e26bc6ac5b6c0a759e0d114b3dbcf69e5861c63c3c9b3e98a2)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Modification de la table utilisateur

Nous allons modifier la table utilisateur pour ajouter les champs suivants :

```php
#[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;
```

Nous allons ensuite mettre à jour la base de données :

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

[v0.3.2](https://github.com/mikhawa/symfony-2023-05-10/commit/8df7e6489143129e0e93d8c8e30a50cb53a6d3ae#diff-56b5f1c89f9bfa70ff84ca115b07a2de432ebef3dd0e1dd92ce384396d570a5d)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Lions la table utilisateur à la table article

Nous allons lier la table `utilisateur` en `OneToMany` avec la table `Article` :


```bash
php bin/console make:entity Utilisateur
```

En utilisant les options suivantes :

```bash
Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > name

 Field type (enter ? to see all types) [string]:
 > 


 Field length [255]:
 > 100

 Can this field be null in the database (nullable) (yes/no) [no]:
 >

 updated: src/Entity/Utilisateur.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > articles

 Field type (enter ? to see all types) [string]:
 > OneToMany
OneToMany

 What class should this entity be related to?:
 > Article
Article

 A new property will also be added to the Article class so that you can access and set the related Utilisateur object from it.

 New field name inside Article [utilisateur]:
 >

 Is the Article.utilisateur property allowed to be null (nullable)? (yes/no) [yes]:
 > yes

 updated: src/Entity/Utilisateur.php
 updated: src/Entity/Article.php
```

Ce qui liera la table `utilisateur` en `OneToMany` avec la table `Article`.

```php
src/Entity/Utilisateur.php

#[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Article::class)]
    private Collection $articles;

...

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): static
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setUtilisateur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getUtilisateur() === $this) {
                $article->setUtilisateur(null);
            }
        }

        return $this;
    }


```

Et la table `Article` en `ManyToOne` avec la table `Utilisateur` :

```php
src/Entity/Article.php

#[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Utilisateur $utilisateur = null;

...

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
```

Nous allons ensuite mettre à jour la base de données :

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Voici l'export de la table à ce moment :

https://github.com/mikhawa/symfony-2023-05-10/blob/main/datas/sym_64_2023-06-13.sql

[v0.3.3](https://github.com/mikhawa/symfony-2023-05-10/commit/bb0da5ac1255cf8ba462a348ff7c24b8287b2adf#diff-7930a7aa0c6617e26bc6ac5b6c0a759e0d114b3dbcf69e5861c63c3c9b3e98a2)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Lions la table utilisateur avec commentaire

Nous aurons une bonne base pour commencer le projet.

Nous allons lier la table `utilisateur` en `OneToMany` avec la table `Commentaire` :

```bash
php bin/console make:entity Utilisateur
```

En utilisant les options suivantes :

```bash
 New property name (press <return> to stop adding fields):
 > commentaires

 Field type (enter ? to see all types) [string]:
 > OneToMany
OneToMany

 What class should this entity be related to?:
 > Commentaire
Commentaire

 A new property will also be added to the Commentaire class so that you can access and set the related Utilisateur object from it.

 New field name inside Commentaire [utilisateur]:
 >

 Is the Commentaire.utilisateur property allowed to be null (nullable)? (yes/no) [yes]:
 >

 updated: src/Entity/Utilisateur.php
 updated: src/Entity/Commentaire.php
```

Ensuite nous allons mettre à jour la base de données :

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Voici l'export de la table à ce moment :

https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/sym_64_2023-06-14.sql

Et le schéma :

![sym_64](https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/screenshot-localhost_8080-2023.06.14-09_38_23.png)

[v0.3.4](https://github.com/mikhawa/symfony-2023-05-10/commit/72a98d0c50e79fafb9dbd24ebc51e56042eae0b9#diff-7930a7aa0c6617e26bc6ac5b6c0a759e0d114b3dbcf69e5861c63c3c9b3e98a2)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création des fixtures

Nous allons créer des fixtures pour avoir des données de test dans notre base de donnée.

Nous allons charger le bundle `doctrine/doctrine-fixtures-bundle` :

```bash
composer require orm-fixtures --dev
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Création des fixtures pour la table utilisateur

Nous allons commencer par créer une fixture pour la table `Utilisateur` :

```bash
php bin/console make:fixtures AllFixtures
```

Ce qui créera le fichier `src/DataFixtures/UtilisateurFixtures.php`.

Nous allons ensuite créer des données de test dans la méthode `load()` :

```php
src/DataFixtures/UtilisateurFixtures.php

<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
# 1. Importer l'entité Utilisateur
use App\Entity\Utilisateur;
# 2. Importer le gestionnaire de mot de passe
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordEncoder;


    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new Utilisateur();
        $user->setName('Dupont');
        $user->setEmail('dupont@dupont.com');
        $password = $this->passwordEncoder->hashPassword($user,'123456');
        $user->setPassword($password);

        $manager->persist($user);

        $manager->flush();
    }
}

```

Nous allons ensuite charger les fixtures :

```bash
php bin/console doctrine:fixtures:load
```

Nous avons donc un utilisateur dans la base de données ! :)

Le fichier .sql :

https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/sym_64_2023-06-14-1.sql

[v0.3.5](https://github.com/mikhawa/symfony-2023-05-10/commit/253e7fba0dae65ced7b7b382cacb0f7d80064a74#diff-95c4003977cca1f8472ede2b9816095727f735d46c3f5467b42126ee72d35825)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Création des fixtures pour les utilisateurs ET les articles

Pour éviter de devoir définir l'ordre de chargement des fixtures, nous allons créer une fixture pour toutes les tables :

`src/DataFixtures/AllFixtures.php`

Nous allons également installer une bibliothèque pour générer des données aléatoires en `Lorem Ipsum`:

```bash
composer require joshtronic/php-loremipsum
```

Esuite une bibliothèque pour slugifier les données :

```bash
composer require cocur/slugify
```

Nous pouvons commencer par `Utilisateur` puis `Article` qui est lié :

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
# 1. Importer l'entité Utilisateur
use App\Entity\Utilisateur;
# 2. Importer le gestionnaire de mot de passe
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
# 3. Importer l'entité Article
use App\Entity\Article;
# 4. Importer le générateur de texte en Lorem Ipsum
use joshtronic\LoremIpsum;
# 5. Importer le slugger
use Cocur\Slugify\Slugify;

class AllFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager): void
    {
        // création de 10 utilisateurs
        for($i=0;$i<10;$i++) {
            $user = new Utilisateur();
            $user->setName('Dupont' . $i);
            $user->setEmail("dupont$i@dupont.com");
            // on encode le mot de passe
            $password = $this->passwordEncoder->hashPassword($user, "123456$i");
            $user->setPassword($password);
            // on l'ajoute à la liste des utilisateurs pour les articles
            $randUser[] = $user;

            // on garde la requête de persistance pour la fin
            $manager->persist($user);
        }
        // instanciation du générateur de Lorem Ipsum
        $lipsum = new LoremIpsum();
        // instanciation du slugger
        $slugify = new Slugify();

        // création de 30 articles
        for($i=0;$i<30;$i++) {
            $article = new Article();
            $title = $lipsum->words(5);
            $article->setArticleTitle($title);
            $article->setArticleContent($lipsum->paragraphs(3));
            $article->setArticleSlug($slugify->slugify($title));
            $article->setArticleDateCreate(new \DateTime());
            $article->setArticleIsPublished(true);
            // on tire au sort la clef d'un utilisateur pour l'article
            $keyUser=array_rand($randUser);
            // on récupère l'utilisateur correspondant
            $oneUser = $randUser[$keyUser];
            // on ajoute l'article à la liste des articles de l'utilisateur
            $article->setUtilisateur($oneUser);

            $manager->persist($article);
        }
        // on exécute les requêtes de persistance
        $manager->flush();
    }
}
    
```

Ensuite nous vérifions si cela fonctionne :

```bash
php bin/console doctrine:fixtures:load
```

le fichier .sql :

https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/sym_64_2023-06-15.sql

[v0.3.6](https://github.com/mikhawa/symfony-2023-05-10/commit/e0be37065939539ebd86ae3de58b5aab12c8f476#diff-5d12fa212ca0735a3554a8614bee32a0e5e687cd0ab820c3af8c7b21883adcdd)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Création des fixtures pour les autres tables

On va remplir toute notre base de données avec des données. On pourra ainsi tester notre application avec des données réalistes.


```php
<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
# 1. Importer l'entité Utilisateur
use App\Entity\Utilisateur;
# 2. Importer le gestionnaire de mot de passe
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
# 3. Importer l'entité Article
use App\Entity\Article;
# 4. Importer l'entité Commentaire
use App\Entity\Commentaire;
# 5. Importer l'entité Catégorie
use App\Entity\Categorie;
# 6. Importer le générateur de texte en Lorem Ipsum
use joshtronic\LoremIpsum;
# 7. Importer le slugger
use Cocur\Slugify\Slugify;

###

// création de 100 commentaires
        for($i=0;$i<100;$i++) {
            $comment = new Commentaire();
            $comment->setCommentaireTitle($lipsum->words(mt_rand(2,5)));
            $comment->setCommentaireText($lipsum->sentences(mt_rand(1,2)));
            $comment->setCommentaireDateCreate(new \DateTime());
            $comment->setCommentaireIsPublished(true);
            // on tire au sort la clef d'un utilisateur pour le commentaire
            $keyUser=array_rand($randUser);
            // on récupère l'utilisateur correspondant
            $oneUser = $randUser[$keyUser];
            // on ajoute le commentaire à la liste des commentaires de l'utilisateur
            $comment->setUtilisateur($oneUser);
            // on tire au sort la clef d'un article pour le commentaire
            $keyArticle=array_rand($randArticle);
            // on récupère l'article correspondant
            $oneArticle = $randArticle[$keyArticle];
            // on ajoute le commentaire à la liste des commentaires de l'article
            $comment->setCommentaireManyToOneArticle($oneArticle);

            $manager->persist($comment);
        }

        // création de 5 catégories
        for($i=0;$i<5;$i++) {
            $category = new Categorie();
            $nameCategory = $lipsum->words(mt_rand(1,2));
            $category->setCategorieTitle($nameCategory);
            $category->setCategorySlug($slugify->slugify($nameCategory));
            $category->setCategorieDesc($lipsum->sentences(mt_rand(1,2)));

            // on va donner la catégorie à 20 articles au hasard
            for($j=0;$j<35;$j++) {
                // on tire au sort la clef d'un article pour la catégorie
                $keyArticle=array_rand($randArticle);
                // on récupère l'article correspondant
                $oneArticle = $randArticle[$keyArticle];
                // on ajoute la catégorie à la liste des catégories de l'article
                $category->addCategorieM2mArticle($oneArticle);
            }

            $manager->persist($category);
        }

        // on exécute les requêtes de persistance
        $manager->flush();

###
```

le fichier .sql :

https://raw.githubusercontent.com/mikhawa/symfony-2023-05-10/main/datas/sym_64_2023-06-15-1.sql

[v0.3.7](https://github.com/mikhawa/symfony-2023-05-10/commit/8d4507a9bb93c6b9eddf209935dd5f1b1964f2d8#diff-5d12fa212ca0735a3554a8614bee32a0e5e687cd0ab820c3af8c7b21883adcdd)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Modification de la page d'accueil

#### Modification du contrôleur pour la page d'accueil

Nous allons modifier BlogController.php pour créer une page d'accueil avec la récupération des catégories.

```php
<?php
# Controller/BlogController.php

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

class BlogController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        return $this->render('blog/index.html.twig', [
            // on envoie les catégories à la vue
            'categories' => $categories,
        ]);
    }
}
```

Et dans le fichier de vue au format `Twig`, on va afficher les catégories :

```twig
{# templates/blog/index.html.twig #}

{# .... #}

<div class="example-wrapper">
    <h1>Page d'accueil ✅</h1>
    {% for categ in categories %}
        <h2>{{ categ.CategorieTitle }}</h2>
        <p>{{ categ.CategorySlug }}</p>
        <p>{{ categ.CategorieDesc }}</p>
    {% endfor %}

</div>
```

Et le résultat :

https://127.0.0.1:8000/

Maintenant que nous voyons que c'est fonctionnel, nous allons créer un template de base pour notre application.

[v0.3.8](https://github.com/mikhawa/symfony-2023-05-10/commit/061b5a3a9f220ca0e6bb6e523617b66f008333fc#diff-f8af05fe3ed91657a96bece8df2f0639855fdbe18e5287e3186e088e66664cd0)

---

Retour au [Menu de navigation](#menu-de-navigation)

---


### Twig : Création d'un template de base

Nous allons utiliser un moteur de template pour générer les vies de notre blog : `Twig`.

La documentation officielle de `Twig` : https://twig.symfony.com

Ce moteur de template est déjà installé dans notre projet. Il est utilisé par défaut par `Symfony`.

Il utilise une syntaxe orientée objet et a un système de cache pour optimiser les performances.

#### Modification du fichier `templates/base.html.twig`

Ce fichier va contenir le code HTML de base de notre application. C'est là que nous créerons les blocks principaux qui seront utilisés par toutes les autres vues de notre projet.

```twig
{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Notre Blog {% endblock %}</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
```

Nous voyons dans les commentaires que nous pouvons utiliser `Webpack Encore` pour gérer les fichiers `CSS` et `JS` de notre projet.

#### Installation de Webpack Encore

Pour cela il faut installer le bundle `Webpack Encore` :

```bash
composer require symfony/webpack-encore-bundle
```

#### Installation de Yarn

```bash
curl --compressed -o- -L https://yarnpkg.com/install.sh | bash
```

Puis

```bash
yarn install
```

Pour cela vous devez avoir installé `Yarn` sur votre machine ainsi que `NodeJS` :

https://nodejs.org/fr/download/

Puis `Yarn` :

https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable


#### Création des fichiers `CSS` et `JS` via `Webpack Encore`

Et nous allons lancer la commande `npm` suivante pour créer nos fichiers `CSS` et `JS` dans le dossier `public/build` :

```bash
npm run build
```

Ces fichiers sont créés à partir des fichiers `CSS` et `JS` du dossier `assets` et sont minifiés et optimisés pour les performances. Ils sont chargés automatiquement dans le fichier `base.html.twig`.

Nous modifierons le fichier `webpack.config.js` et le dossier `assests` pour ajouter le fichier `CSS` de `Bootstrap` par la suite.

Notre site est de nouveau fonctionnel :

https://127.0.0.1:8000/


[v0.4.0](https://github.com/mikhawa/symfony-2023-05-10/commit/f1e4e98e01a59208b25947f391e65862545b93df#diff-bc37d034bad564583790a46f19d807abfe519c5671395fd494d8cce506c42947)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Installation de Bootstrap

Nous allons installer `Bootstrap` et son `CSS` pour avoir un site responsive et un peu plus joli.

```bash 
npm i bootstrap@5.3.0
```

Puis chargeons le javascript :

```bash
npm install jquery @popperjs/core --save-dev
```

Et ajoutons le fichier `CSS` et le `JS` de `Bootstrap` dans le fichier `webpack.config.js` :

```js
// webpack.config.js
// ...
Encore
        .addEntry('app', './assets/app.js')
        .addEntry('bootstrapJS', './node_modules/bootstrap/dist/js/bootstrap.min.js')
        .addStyleEntry('bootstrapCSS', './node_modules/bootstrap/dist/css/bootstrap.min.css')
```

Puis nous allons modifier le fichier `base.html.twig` pour charger les fichiers `CSS` et `JS` de `Bootstrap` :

```twig
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {# création du CSS Bootstrap #}
            {{ encore_entry_link_tags('bootstrapCSS') }}
            {# création de notre CSS personnalisé #}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {# création du JS Bootstrap #}
            {{ encore_entry_script_tags('bootstrapJS') }}
            {# création de notre JS personnalisé #}
            {{ encore_entry_script_tags('app') }}
            
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
```

Nous pouvons maintenant utiliser les classes de `Bootstrap` dans notre projet.

Lançons les commandes `npm` pour créer les fichiers `CSS` et `JS` :

```bash
npm run build
```

Notre site est de nouveau fonctionnel :

https://127.0.0.1:8000/

[v0.4.1](https://github.com/mikhawa/symfony-2023-05-10/commit/52f71956fa6f84bbbc0aa6f94105551ba8a7d871#diff-5a6565b208e6ab8222ae5be3180f45af0410b09d94250b64f42d7e7041bd4250)


---

Retour au [Menu de navigation](#menu-de-navigation)

---


### Choix du template

Nous allons utiliser le template `bootstrap Business frontpage` pour notre projet :

https://startbootstrap.com/template/business-frontpage

Nous l'avons dézippé dans le dossier `datas` et nous allons le modifier pour l'adapter à notre projet.

J'ai mis les `JS` et `CSS` du template pour les utiliser, ils sont donc pour le `js` dans `app.js` et pour le style dans `app.css`.

```bash
npm run build
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Modification de base.html.twig

Nous allons modifier le fichier `base.html.twig` pour utiliser le template :

```twig
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Pitz Michaël" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel="icon" href="build/favicon.ico">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {# création de notre CSS personnalisé #}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {# création de notre JS personnalisé #}
            {{ encore_entry_script_tags('app') }}

        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
``` 

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Modification de template.html.twig

Puis, nous créons le template avec de nouveaux blocs enfants :
`templates/template.html.twig`

```twig
{% extends 'base.html.twig' %}

{% block title %}MonSite |{% endblock %}

{% block body %}
{% block navbar %}
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ path('homepage') }}">MonSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    {% block menuLinks %}
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ path('homepage') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                    {% endblock %}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Responsive navbar-->
{% endblock %}
    {% block header %}
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">{%block htitle %}Present your business in a whole new way{% endblock %}</h1>
                            <p class="lead text-white-50 mb-4">{%block hdesc %}Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!{% endblock %}</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    {% endblock %}
    {% block articles %}<!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a class="text-decoration-none" href="./">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {% endblock %}
    {% block footer %}
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; MonSite {{ "now"|date('Y') }}</p></div>
        </footer>
        {% endblock %}
{% endblock %}
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Modification de la page d'accueil

Nous pouvons maintenant utiliser le template dans notre projet:

`templates/blog/index.html.twig`

```twig
{% extends 'template.html.twig' %}

{% block title %}{{ parent() }}Page d'accueil{% endblock %}


{% block articles %}
    <h1>Page d'accueil ✅</h1>
    {% for categ in categories %}
        <h2>{{ categ.CategorieTitle }}</h2>
        <p>{{ categ.CategorySlug }}</p>
        <p>{{ categ.CategorieDesc }}</p>
    {% endfor %}
{% endblock %}

```

[v0.4.2](https://github.com/mikhawa/symfony-2023-05-10/commit/528c63a9bbd6db6ffb056f30708c8910721285d5)

Nous pouvons par la suite afficher les 12 derniers articles sur la page d'accueil avec le findBy() de Doctrine:

```php
<?php
###
use App\Entity\Article;
###
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
###
```

Et dans la vue:
    
```twig
{% block articlePerOne %}
    {% for article in articles %}
    <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
        <h2 class="h4 fw-bolder">{{ article.ArticleTitle }}</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a class="text-decoration-none" href="#!">
            Call to action
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
    {% endfor %}
{% endblock %}
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création de la section Catégories

Nous allons remplir le menu avec les catégories de notre blog:

`templates/blog/index.html.twig`


```twig
{% for categ in categories %}
<li class="nav-item"><a class="nav-link" aria-current="page" href="{{ path("categorie", { 'slug' :  categ.CategorySlug }) }}">{{ categ.CategorieTitle }}</a></li>
{% endfor %}
``` 


Nous allons créer la section `categorie` de notre site:
`src/Controller/BlogController.php` :

```php
###
#[Route('/categorie/{slug}', name: 'categorie')]
    public function categorie($slug, EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération de la catégorie dont le slug est $category_slug
        $categorie = $entityManager->getRepository(Categorie::class)->findOneBy(['CategorySlug' => $slug]);
        return $this->render('blog/categorie.html.twig', [
            // on envoie la catégorie à la vue
            'categories' => $categories,
            'categorie' => $categorie,
        ]);
    }
###
```
Après avoir créé le template `categorie.html.twig` nous pouvons voir le résultat :

```Twig
...
{%block htitle %}Catégorie : {{ categorie.CategorieTitle }}{% endblock %}
{%block hdesc %}{{ categorie.CategorieDesc }}{% endblock %}
...
```

[v0.4.3](https://github.com/mikhawa/symfony-2023-05-10/commit/aa0d2e7581ccea147b888004ba385b2b9cfe8588#diff-f8af05fe3ed91657a96bece8df2f0639855fdbe18e5287e3186e088e66664cd0)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Affichage des articles par catégorie

Nous allons maintenant afficher les articles par catégorie:

`src/Controller/BlogController.php` :

```php
###
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
###
```

Et dans le template `categorie.html.twig` :

```twig
{% block articlePerOne %}
    {% for article in articles %}
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
            <h2 class="h4 fw-bolder">{{ article.ArticleTitle }}</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a class="text-decoration-none" href="#!">
                Call to action
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    {% endfor %}
{% endblock %}
```

[v0.4.4](https://github.com/mikhawa/symfony-2023-05-10/commit/ddb5b07bc1cb4cde9853d26333b3d1eff1691f44#diff-f8af05fe3ed91657a96bece8df2f0639855fdbe18e5287e3186e088e66664cd0)


---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création de la section Article

Nous allons créer la section `article` de notre site et afficher le slug de l'article demandé dans l'URL :
`src/Controller/BlogController.php` :

#### Création de la route dans le controller

```php
###
#[Route('/article/{slug}', name: 'article')]
    public function article($slug, EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération de l'article dont le slug est $slug
        $article = $entityManager->getRepository(Article::class)->findOneBy(['ArticleSlug' => $slug]);
        // on commence par afficher le slug
        return new Response($article->getArticleSlug());
    }
    
###
```

#### Création des liens vers les articles dans la section `categorie` et `index`

Nous allons d'abord créer les liens vers les articles dans la section `categorie` et `index`:

`templates/blog/categorie.html.twig` :
`templates/blog/index.html.twig` :

```twig
{% block articlePerOne %}
    {% for article in articles %}
       ...
            <a class="text-decoration-none" href="{{ path("article", { 'slug' :  article.ArticleSlug }) }}">
                Lire la suite
                <i class="bi bi-arrow-right"></i>
            </a>
        ...
    {% endfor %}
{% endblock %}
```


---

Retour au [Menu de navigation](#menu-de-navigation)

---



#### Affichage d'un résumé de l'article avec slice

Au passage, nous allons mettre un résumé du texte des articles dans la section `index` et `categorie` :

`templates/blog/index.html.twig` :
`templates/blog/categorie.html.twig` :

```twig
{% block articlePerOne %}
    {% for article in articles %}
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
            <h2 class="h4 fw-bolder">{{ article.ArticleTitle }}</h2>
            <p>{{ article.ArticleContent|slice(0, 150) }}...</p>
            <a class="text-decoration-none" href="{{ path("article", { 'slug' :  article.ArticleSlug }) }}">
                Lire la suite
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    {% endfor %}
{% endblock %}
```

Nous constatons que les mots sont coupés en plein milieu avec la fonction `slice`, nous allons donc charger une bibliothèque de fonctions Twig pour couper les mots à la fin de la phrase :

#### Installation de la bibliothèque Twig Extra String

```bash
composer require twig/string-extra
```

Pour la documentation de la bibliothèque, c'est [ici](https://twig.symfony.com/doc/3.x/filters/u.html)

#### Utilisation de la fonction `truncate` de la bibliothèque Twig Extra String

`templates/blog/index.html.twig` :
`templates/blog/categorie.html.twig` :

```twig
<p>{{ article.ArticleContent|u.truncate(120, '...', false) }}</p>
```

Le false à la fin permet de couper les mots à la fin de la phrase.

#### Modification de la méthode `article` du controller

Nous allons maintenant modifier la méthode `article` du controller pour afficher le contenu de l'article, avec les rubriques dans lesquelles il se trouve (si il si trouve) :

`src/Controller/BlogController.php` :

```php
###
#[Route('/article/{slug}', name: 'article')]
    public function article($slug, EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération de l'article dont le slug est $slug
        $article = $entityManager->getRepository(Article::class)->findOneBy(['ArticleSlug' => $slug]);
        // récupération des catégories grâce à la relation ManyToMany de 'article' vers 'catégorie' puis prises de valeurs
        $categoriesArticle = $article->getCategories()->getValues();
        // Appel de la vue
        return $this->render('blog/article.html.twig', [
            // on envoie la catégorie à la vue
            'categories' => $categories,
            // on envoie l'article à la vue
            'article' => $article,
            // on envoie les catégories de l'article à la vue 
            'categoriesArticle' => $categoriesArticle,
        ]);

    }
###
```


---

Retour au [Menu de navigation](#menu-de-navigation)

---



#### Création de la vue `article.html.twig`

Nous allons maintenant créer la vue 
`templates/blog/article.html.twig` :

```twig
...
{% block title %}{{ parent() }} Article | {{ article.ArticleTitle }}{% endblock %}
...
{% block articlePerOne %}

    <div class="col-lg-12 mb-5 mb-lg-0">
        <h2 class="h4 fw-bolder mb-3">{{ article.ArticleTitle }}</h2>
        <h4 class="h5">Par {{ article.utilisateur.name }} le {{ article.ArticleDateCreate|date("d/m/Y") }}</h4>
        <hr>
        {% for categ in categoriesArticle %}
            <a href="{{ path("categorie", { 'slug' :  categ.CategorySlug }) }}" 
            class="badge bg-secondary text-decoration-none link-light">{{ categ.CategorieTitle }}</a>
            {% else %}
            <h5>Présent dans aucune catégorie</h5>
        {% endfor %}
        <hr>
        <p>{{ article.ArticleContent|nl2br }}</p>
        <h4 class="h5">Par {{ article.utilisateur.name }} le 
        {{ article.ArticleDateCreate|date("d/m/Y") }}</h4>
    </div>

{% endblock %}
...
```

[v0.4.5](https://github.com/mikhawa/symfony-2023-05-10/commit/8bca1487359034c0e0a21520e483b80cb5f244c0#diff-da5d78d1e07dfc565fe1017f09e3be6840ab3bd4d9f75d0a0f7dee274066f68d)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Création de la vue `commentaire.html.twig`

Cette vue sera appelée depuis la page article, un block est créé dans le block `articlePerOne` de la vue `article.html.twig` :

`templates/blog/article.html.twig` :

```twig
...
{% block articlePerOne %}
    ...
    {% block commentaire %}
    {# Ici seront affichés les commentaires + formulaires,
     on importe toujours depuis la racine templates #}
    {% include 'blog/inc/commentaire.html.twig' %}
    {% endblock %}
    ...
{% endblock %}
```

Et sa vue vierge :

`templates/blog/inc/commentaire.html.twig` :

```twig
<div>
    <h3>Commentaires</h3>
</div>
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Chargement des commentaires dans BlogController

Nous allons maintenant charger les commentaires dans la partie `article` du controller :

`src/Controller/BlogController.php` :

```php
###

# Importation de l'entité Commentaire
use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;

###

#[Route('/article/{slug}', name: 'article')]
    public function article($slug, EntityManagerInterface $entityManager): Response
    {
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        $article = $entityManager->getRepository(Article::class)->findOneBy(['ArticleSlug' => $slug]);
        $categoriesArticle = $article->getCategories()->getValues();
        // récupération des commentaires de l'article grâce à son id
        $commentaires = $entityManager->getRepository(Commentaire::class)
        ->findBy(['CommentaireManyToOneArticle' => $article->getId()]);
        return $this->render('blog/article.html.twig', [
            'categories' => $categories,
            'article' => $article,
            'categoriesArticle' => $categoriesArticle,
            // on envoie les commentaires à la vue
            'commentaires' => $commentaires,
        ]);
    }
###
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Affichage des commentaires dans la vue `commentaire.html.twig`

Nous allons maintenant afficher les commentaires dans la vue :

`templates/blog/inc/commentaire.html.twig` :

```twig
<div>
    <hr>
    <h3>Commentaires ({{ commentaires|length }})</h3>
    {% for commentaire in commentaires %}
        <h5>{{ commentaire.CommentaireTitle }} <small>Par 
        {{ commentaire.utilisateur.name}} le 
        {{ commentaire.CommentaireDateCreate|date("Y-m-d") }}</small></h5>
        <p>{{ commentaire.CommentaireText }}</p>
    {% else %}
        <p>Aucun commentaire</p>
    {% endfor %}
</div>
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Erreur de mapping entre les entités Article et Commentaire

Nous obtenons une erreur de mapping de type `App\Entity\Commentaire
The association App\Entity\Commentaire#CommentaireManyToOneArticle refers to the inverse side field App\Entity\Article#Commentaires which does not exist.` sur la page de détail d'un article.

Dans le mapping de l'entité `Commentaire`, nous avons bien une relation `ManyToOne` vers l'entité `Article` : 

`src/Entity/Commentaire.php` :

```php
###
   // Pour que la relation soit bidirectionnelle, il faut ajouter une propriété targetEntity et inversedBy
    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'Commentaires')]
    private ?Article $CommentaireManyToOneArticle = null;
###
```

Nous devons créer la relation inverse dans l'entité `Article`, puis l'appeler dans son constructeur en tant que `ArrayCollection` :

`src/Entity/Article.php` :

```php
###
    #[ORM\OneToMany(mappedBy: 'CommentaireManyToOneArticle', targetEntity: Commentaire::class)]
    private Collection $Commentaires;
    
###
    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->Commentaires = new ArrayCollection();
    }
```

[v0.4.6](https://github.com/mikhawa/symfony-2023-05-10/commit/f2b2a41ca53cd84ddad23f2787ad8ddea0a45ebc#diff-6c398b4c27155c10ce5fcca09e4354392a097b432db26069e5135f8f64398029)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Utilisation des relations inverses

Nous pouvons maintenant utiliser la relation inverse plutôt que le findBy dans le controller :

`src/Controller/BlogController.php` :

```php
###

  // récupération des commentaires de l'article en cours
  $commentaires = $article->getCommentaires()->getValues();
  
  /* code remplacé
   * $commentaires = $entityManager->getRepository(Commentaire::class)
   ->findBy(['CommentaireManyToOneArticle' => $article->getId()]);
   * */
###
```

Pour que cela fonctionne, nous devons rajouter le getter et les autres méthodes dans l'entité `Article` :

`src/Entity/Article.php` :

```php
###
  /**
     * @return Collection<int, Categorie>
     */
    public function getCommentaires(): Collection   {
        return $this->Commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->Commentaires->contains($commentaire)) {
            $this->Commentaires->add($commentaire);
            $commentaire->setCommentaireManyToOneArticle($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->Commentaires->removeElement($commentaire)) {
            if ($commentaire->getCommentaireManyToOneArticle() === $this) {
                $commentaire->setCommentaireManyToOneArticle(null);
            }
        }

        return $this;
    }
###
```

Nous pouvons dorénavant supprimer toutes les lignes de code concernant les commentaires et les catégories dans le controller en utilisant les relations inverses dans les vues :

`src/Controller/BlogController.php` :

```php
###

    #[Route('/article/{slug}', name: 'article')]
    public function article($slug, EntityManagerInterface $entityManager): Response
    {
        // récupération de toutes les catégories pour le menu
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        // récupération de l'article dont le slug est $slug
        $article = $entityManager->getRepository(Article::class)->findOneBy(['ArticleSlug' => $slug]);
        
        /* code devenu non nécessaire avec les relations ManyToMany,
         ManyToOne et OneToMany avec inversedBy et mappedBy
         *
            $categoriesArticle = $article->getCategories()->getValues();
         
         * $commentaires = 
         * $entityManager->getRepository(Commentaire::class)->findBy(['CommentaireManyToOneArticle' => $article->getId()]);
         * */
        
        return $this->render('blog/article.html.twig', [
            'categories' => $categories,
            'article' => $article,
           // 'categoriesArticle' => $categoriesArticle,
           // 'commentaires' => $commentaires,
        ]);
    }

###
```

Ceci est possible grâce à la relation inverse que nous avons créée dans l'entité `Article`, mais non obligatoire. Nous aurions pu continuer à utiliser les méthodes `findBy` et `findOneBy` dans le controller.

Ceci permet surtout de comprendre le fonctionnement de Doctrine et de Symfony.

Ensuite, nous pouvons modifier les vues `article.html.twig` et `commentaire.html.twig` pour utiliser les relations inverses :

`templates/blog/article.html.twig` :

```twig

###
{% for categ in article.categories %}
            <a href="{{ path("categorie", { 'slug' :  categ.CategorySlug }) }}" class="badge bg-secondary text-decoration-none link-light">{{ categ.CategorieTitle }}</a>
            {% else %}
            <h5>Présent dans aucune catégorie</h5>
        {% endfor %}
###
```

`templates/blog/inc/commentaire.html.twig` :

```twig
<div>
    <hr>
    <h3>Commentaires ({{ article.Commentaires|length }})</h3>
    {% for commentaire in article.Commentaires %}
        <h5>{{ commentaire.CommentaireTitle }} <small>Par {{ commentaire.utilisateur.name}} le {{ commentaire.CommentaireDateCreate|date("Y-m-d") }}</small></h5>
        <p>{{ commentaire.CommentaireText }}</p>
    {% else %}
        <p>Aucun commentaire</p>
    {% endfor %}
</div>
```

[v0.4.7](https://github.com/mikhawa/symfony-2023-05-10/commit/404b883bdf961db615db7c5af3f053687cc1d418#diff-f8af05fe3ed91657a96bece8df2f0639855fdbe18e5287e3186e088e66664cd0)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

## Authentification et autorisation

L'email et le mot de passe crypté sont stockés dans la table `utilisateur` de la base de données.

### Création de la connexion utilisateur

Nous allons créer tout le système de connexion avec un formulaire de connexion, les vérifications de sécurités pour l'authentification des utilisateurs en une seule commande !

Pour cela, nous allons utiliser la commande `make:auth` :

```bash
php bin/console make:auth
```

Nous allons créer un formulaire de connexion pour l'authentification des utilisateurs.

```bash
 Choose a number or alias to load:
  [0] - app
  [1] - security
 > 1
 
 The class name of the authenticator to create 
 (e.g. AppCustomAuthenticator):
    > UtilisateurAuthenticator
 
 Choose a name for the controller class (e.g. SecurityController) 
 [SecurityController]: SecurityController
 
 Do you want to generate a '/logout' URL? (yes/no) [yes]: yes
 
 Do you want to support remember me? (yes/no) [yes]: yes
 
 How should remember me be activated? 
 [Activate when the user checks a box]: 0
```

Nous pouvons désormais voir le nouveau fichier `src/Security/UtilisateurAuthenticator.php`.

Nous devons modifier le fichier `src/Security/UtilisateurAuthenticator.php` pour la redirection en cas de succès de l'authentification, pour le moment sur notre accueil :

```php
###
public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // For example:
        return new RedirectResponse($this->urlGenerator->generate('homepage'));
        // throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }
###

```

Le fichier `src/Controller/SecurityController.php` devrait déjà être fonctionnel.

Le fichier `config/packages/security.yaml` devrait déjà être fonctionnel, mais vous pouvez vérifier que les lignes suivantes sont présentes :

```yaml
security:
    # https://symfony.com/doc/current/security.html#registering-the-user-hashing-passwords
    password_hashers:
        Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface: 'auto'
    # https://symfony.com/doc/current/security.html#loading-the-user-the-user-provider
    providers:
        # used to reload user from session & other features (e.g. switch_user)
        app_user_provider:
            entity:
                class: App\Entity\Utilisateur
                property: email
    firewalls:
        dev:
            pattern: ^/(_(profiler|wdt)|css|images|js)/
            security: false
        main:
            lazy: true
            provider: app_user_provider
            custom_authenticator: App\Security\UtilisateurAuthenticator
            logout:
                path: app_logout
                # where to redirect after logout
                # target: app_any_route

            remember_me:
                secret: '%kernel.secret%'
                lifetime: 604800
                path: /
                always_remember_me: true

            # activate different ways to authenticate
            # https://symfony.com/doc/current/security.html#the-firewall

            # https://symfony.com/doc/current/security/impersonating_user.html
            # switch_user: true

    # Easy way to control access for large sections of your site
    # Note: Only the *first* access control that matches will be used
    access_control:
        # - { path: ^/admin, roles: ROLE_ADMIN }
        # - { path: ^/profile, roles: ROLE_USER }

when@test:
    security:
        password_hashers:
            # By default, password hashers are resource intensive and take time. This is
            # important to generate secure password hashes. In tests however, secure hashes
            # are not important, waste resources and increase test times. The following
            # reduces the work factor to the lowest possible values.
            Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface:
                algorithm: auto
                cost: 4 # Lowest possible value for bcrypt
                time_cost: 3 # Lowest possible value for argon
                memory_cost: 10 # Lowest possible value for argon
```

Les pages de connexion et de déconnexion sont déjà créées.

Nous pouvons tester notre formulaire de connexion en allant sur la route `/login` avec par exemple l'email `dupont9@dupont.com` et le mot de passe `1234569`.

https://127.0.0.1:8000/login

Nous devrions être connectés et redirigés vers la page d'accueil.

[v0.5.0](https://github.com/mikhawa/symfony-2023-05-10/pull/3/commits/c8586fd44b47299abd64274ac0e01705602d93f5#diff-19446c4b69407952b20ae26dbd032cdad8dcc487db081a5cb17261831e80a4cc)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Modification du formulaire de connexion

#### Route de connexion
Nous allons modifier la route vers le formulaire de connexion en `/connect` au lieu de `/login`, et également activer la redirection si on retourne sur cette page en étant déjà connecté.

Le fichier `src/Controller/SecurityController.php` :

```php

###
  #[Route(path: '/connect', name: 'app_login')]
    public function login(AuthenticationUtils 
    $authenticationUtils): Response
    {   
    # redirection si on retourne sur cette page en
    # étant déjà connecté
        if ($this->getUser()) {
            return $this->redirectToRoute('homepage');
        }
        ###
###
```

#### Menu de navigation et formulaire de connexion

Nous allons ensuite passer le menu depuis notre `src/Controller/SecurityController.php` :

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
###
# Appel de l'ORM Doctrine
use Doctrine\ORM\EntityManagerInterface;
# Importation de l'entité Categorie
use App\Entity\Categorie;

class SecurityController extends AbstractController
{
    #[Route(path: '/connect', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,EntityManagerInterface $entityManager): Response
    {
        ###
        $categories = $entityManager->getRepository(Categorie::class)->findAll();

        ###

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            // on envoie les catégories à la vue
            'categories' => $categories,
            ]);
    }

    ###
}
  
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Réorganisation des templates

Nous allons mettre de l'ordre dans les templates, en créant un dossier `public` dans `templates` et en y déplaçant les fichiers destinés à être publics 

**Attention aux chemins à cette étape !**

#### Possibilité de déconnexion

Nous séparerons également le menu public `templates/public/inc/menu.html.twig` pour ne pas devoir le modifier dans chaque template.

On va également ajouter la possibilité de se déconnecter, si nous sommes connectés bien sûr.

Nous allons pour cela vérifier si l'utilisateur est connecté avec la fonction `is_granted()`, avec le rôle par défaut de tous les utilisateurs : `ROLE_USER`.

Le fichier `templates/public/inc/menu.html.twig` :

```twig

###

  {% if is_granted("ROLE_USER") %}
        <a class="nav-link" aria-current="page" 
        href="{{ path('app_logout') }}">Déconnexion</a>
    {% else %}
        <a class="nav-link" aria-current="page" 
        href="{{ path('app_login') }}">Connexion</a>
    {% endif %}
###
```

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Remember me

Nous allons modifier le formulaire de connexion pour mettre le design de notre site et ajouter la checkbox `remember me`.

Le fichier `templates/security/login.html.twig` :

```twig
  <label>
        <input type="checkbox" name="_remember_me" checked>
        Rester connecté
    </label>
```

Nous allons désactiver le `remember me` par défaut dans `config/packages/security.yaml` :

```yaml
remember_me:
    secret: '%kernel.secret%'
    lifetime: 604800
    path: /
    # always_remember_me: true
```

Ainsi le cookie `REMEMBERME` ne sera pas créé par défaut.

[v0.5.1](https://github.com/mikhawa/symfony-2023-05-10/commit/e3a5154e1cafcda75f2aa72de8a3524c948bd335#diff-2f3e529a92a275218fe2869988c9edc3fe6c614ed0d2212160a2dfbebc1ade5a)

---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Protection du formulaire de connexion

Nous allons installer rate-limiter pour protéger le formulaire de connexion contre les attaques par force brute.

```bash
composer require symfony/rate-limiter
```

Nous allons protéger le formulaire de connexion contre les attaques par force brute, en ne permettant que 5 tentatives par 15 minutes, dans `config/packages/security.yaml` :

```yaml

# config/packages/security.yaml
security:

  firewalls:
    # ...

    main:
      # ...

      # configure the maximum login attempts
      login_throttling:
        max_attempts: 5          # per minute ...
        interval: '15 minutes' # ... or in a custom period
        
```

L'adresse ip de l'utilisateur sera bloquée pendant 15 minutes si il dépasse les 5 tentatives de connexion, cette information sera stockée dans le cache du serveur par défaut.

---

Retour au [Menu de navigation](#menu-de-navigation)

---

### Mise en place de la création de commentaires

Chaque utilisateur connecté pourra créer un commentaire sur un article.

Pour cela le rôle `ROLE_USER` sera suffisant. Il est défini comme tel par défaut

#### Création d'un CRUD pour les commentaires

Nous allons créer un CRUD pour les commentaires, avec la commande `make:crud` :

```bash
php bin/console make:crud Commentaire
```

Nous allons accepter la création de tests pour ce CRUD. Nous verrons les tests plus tard. Vous pouvez trouver le fichier de test dans `tests/Controller/CommentaireControllerTest.php`.

Un contrôleur `CommentaireController.php` est créé dans `src/Controller`.

Nous allons vérifier ce CRUD en allant sur la route `/commentaire/` :

https://127.0.0.1:8000/commentaire/

##### Correction des erreurs de type toString sur les commentaires

Si nous essayons de modifier un commentaire, nous avons une erreur de type : `Object of class App\Entity\Article could not be converted to string`.

Nous allons corriger cela en ajoutant une méthode `__toString()` dans l'entité `Article` :

```php
<?php

namespace App\Entity;

###

class Article
{
    ###

    // si demandé en tant que string, on renvoie le titre de l'article
    public function __toString()
    {
        return $this->ArticleTitle;
    }
}
```

Nous devons répéter cette opération pour chaque entité qui est liée à une autre entité dans le CRUD.

Pour la modification d'un commentaire, nous avons une erreur pour l'utilisateur, car nous n'avons pas de méthode `__toString()` dans l'entité `Utilisateur`.

Nous allons donc en ajouter une :

```php
<?php

namespace App\Entity;

###
// si demandé en tant que string, on renvoie le nom de l'utilisateur
    public function __toString()
    {
        return $this->name;
    }
###
```

Le CRUD est maintenant fonctionnel.

##### Pour avoir une date par défaut lors de la création d'un commentaire

Nous allons modifier le fichier `src/Entity/Commentaire.php` et lui ajouter un constructeur :

```php
<?php

###
// Pour que la date actuelle soit insérée automatiquement
// dans le formulaire
    public function __construct()
    {
        $this->CommentaireDateCreate = new \DateTime();
    }
###

```

[v0.5.2](https://github.com/mikhawa/symfony-2023-05-10/commit/696a44afccaf36b5368254e24510cfc8a71548bb#diff-bfda95459173a4f13453f500a164b7f3afdc09bed8d039383e8d94fabcce2649)


---

Retour au [Menu de navigation](#menu-de-navigation)

---

#### Protection du CRUD des commentaires

Nous protégerons ensuite les routes de ce CRUD pour que seuls les utilisateurs connectés puissent y accéder. Nous changerons les permissions plus tard pour ne permettre qu'aux administrateurs de modifier les commentaires.


Ajoutons `admin` dans l'URL du contrôleur de CRUD  `src/Controller/CommentaireController.php` :

```php
<?php
###
// #[Route('/commentaire')]
#[Route('/admin/commentaire')]
###
```

Nous avons plusieurs solutions pour protéger les routes de ce CRUD, nous allons dans notre cas choisir la solution du fichier `security.yaml`.

Nous allons donc ajouter les lignes suivantes dans `config/packages/security.yaml` :

```yaml
# config/packages/security.yaml
security:
    # ...

    access_control:
        - { path: ^/admin, roles: ROLE_USER }
```

Nous ne pourrons désormais y accéder qu'en étant connecté (pour le moment en tant que simple utilisateur (`ROLE_ADMIN`), par le suite par une autre permission, par exemple `ROLE_ADMIN`).

A l'adresse :

https://127.0.0.1:8000/admin/commentaire/

Nous avons désormais une erreur `Access Denied` et une redirection sur https://127.0.0.1:8000/connect si nous ne sommes pas connecté.



---

Retour au [Menu de navigation](#menu-de-navigation)

---