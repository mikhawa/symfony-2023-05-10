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

---

Retour au [Menu de navigation](#menu-de-navigation)

---

