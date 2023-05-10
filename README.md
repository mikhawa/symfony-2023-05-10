# symfony-2023-05-10

## Version installée de Symfony 6.2.10

## Installation de Symfony dans l'environement de développement sous Windows

### Prérequis

- PHP 8.0 ou supérieur
- Composer
- Symfony CLI
- Git
- MySQL
- Node.js (pour Webpack Encore)

### Installation

- Cloner le projet
- Installer les dépendances avec la commande `composer install`
- Créer la base de données avec la commande `symfony console doctrine:database:create`
- Créer les tables avec la commande `symfony console doctrine:migrations:migrate`
- Charger les données de test avec la commande `symfony console doctrine:fixtures:load`
- Lancer le serveur avec la commande `symfony serve`
- Lancer le serveur de Webpack avec la commande `npm run dev-server`
- Ouvrir le navigateur à l'adresse `http://localhost:8000`
- Se connecter avec l'utilisateur `admin` et le mot de passe `admin`