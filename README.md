# symfony-2023-05-10

## Version installée de Symfony 6.2.10

## Installation de Symfony dans l'environnement de développement sous Windows

## Menu de navigation
- [symfony-2023-05-10](#symfony-2023-05-10)
  - [Version installée de Symfony 6.2.10](#version-installée-de-symfony-6210)
  - [Prérequis](#prérequis)
    - [Environnement de développement](#environnement-de-développement)
    - [Liens de téléchargement des logiciels](#liens-de-téléchargement-des-logiciels)
    - [Installation de Symfony dans l'environnement de développement sous Windows](#installation-de-symfony-dans-lenvironnement-de-développement-sous-windows)
  - [Création d'un nouveau projet Symfony](#création-dun-nouveau-projet-symfony)

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


Retour au [Menu de navigation](#menu-de-navigation)

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

Retour au [Menu de navigation](#menu-de-navigation)

### Installation de Symfony dans l'environnement de développement sous Windows

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

Documentation :

https://symfony.com/doc/current/setup.html#creating-symfony-applications

Vérifions si notre poste de travail est bien configuré pour Symfony

```bash
symfony check:requirements
```

Retour au [Menu de navigation](#menu-de-navigation)

### Création d'un nouveau projet Symfony

```bash
symfony new symfony6 --webapp
```

- Vérifions que les dépendances sont bien installées et sécurisées

```bash
symfony check:security
```

- Mettons à jour les dépendances

```bash
composer update
```