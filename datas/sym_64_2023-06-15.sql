-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 14 juin 2023 à 08:44
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `sym_62`
--
DROP DATABASE IF EXISTS `sym_62`;
CREATE DATABASE IF NOT EXISTS `sym_62` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sym_62`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
                                         `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                         `article_title` varchar(160) NOT NULL,
                                         `article_slug` varchar(160) NOT NULL,
                                         `article_content` longtext NOT NULL,
                                         `article_date_create` datetime DEFAULT current_timestamp(),
                                         `article_date_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                                         `article_is_published` tinyint(1) NOT NULL,
                                         `utilisateur_id` int(10) UNSIGNED DEFAULT NULL,
                                         PRIMARY KEY (`id`),
                                         KEY `IDX_23A0E66FB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
                                           `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                           `categorie_title` varchar(160) NOT NULL,
                                           `category_slug` varchar(160) NOT NULL,
                                           `categorie_desc` varchar(500) DEFAULT NULL,
                                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_article`
--

DROP TABLE IF EXISTS `categorie_article`;
CREATE TABLE IF NOT EXISTS `categorie_article` (
                                                   `categorie_id` int(10) UNSIGNED NOT NULL,
                                                   `article_id` int(10) UNSIGNED NOT NULL,
                                                   PRIMARY KEY (`categorie_id`,`article_id`),
                                                   KEY `IDX_5DB9A0C4BCF5E72D` (`categorie_id`),
                                                   KEY `IDX_5DB9A0C47294869C` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
                                             `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                             `commentaire_many_to_one_article_id` int(10) UNSIGNED DEFAULT NULL,
                                             `commentaire_title` varchar(100) NOT NULL,
                                             `commentaire_text` varchar(800) NOT NULL,
                                             `commentaire_date_create` datetime DEFAULT current_timestamp(),
                                             `commentaire_is_published` tinyint(1) NOT NULL DEFAULT 0,
                                             `utilisateur_id` int(10) UNSIGNED DEFAULT NULL,
                                             PRIMARY KEY (`id`),
                                             KEY `IDX_67F068BC7698D20` (`commentaire_many_to_one_article_id`),
                                             KEY `IDX_67F068BCFB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
                                                             `version` varchar(191) NOT NULL,
                                                             `executed_at` datetime DEFAULT NULL,
                                                             `execution_time` int(11) DEFAULT NULL,
                                                             PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
                                                                                           ('DoctrineMigrations\\Version20230601105311', '2023-06-01 10:54:00', 612),
                                                                                           ('DoctrineMigrations\\Version20230605102024', '2023-06-05 10:21:28', 694),
                                                                                           ('DoctrineMigrations\\Version20230613095712', '2023-06-13 09:57:32', 456),
                                                                                           ('DoctrineMigrations\\Version20230613135146', '2023-06-13 13:51:58', 595),
                                                                                           ('DoctrineMigrations\\Version20230614072751', '2023-06-14 07:28:20', 78077);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
                                                    `id` bigint(20) NOT NULL AUTO_INCREMENT,
                                                    `body` longtext NOT NULL,
                                                    `headers` longtext NOT NULL,
                                                    `queue_name` varchar(190) NOT NULL,
                                                    `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
                                                    `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
                                                    `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
                                                    PRIMARY KEY (`id`),
                                                    KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
                                                    KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
                                                    KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
                                             `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                                             `email` varchar(180) NOT NULL,
                                             `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
                                             `password` varchar(255) NOT NULL,
                                             `name` varchar(100) NOT NULL,
                                             PRIMARY KEY (`id`),
                                             UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `name`) VALUES
    (2, 'dupont@dupont.com', '[]', '$2y$13$pt.ncrxrAeK4FE9ph/KMpuYUKEdAAyyqsxF8MhTu88rxnoI89VX4y', 'Dupont');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
    ADD CONSTRAINT `FK_23A0E66FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `categorie_article`
--
ALTER TABLE `categorie_article`
    ADD CONSTRAINT `FK_5DB9A0C47294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `FK_5DB9A0C4BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
    ADD CONSTRAINT `FK_67F068BC7698D20` FOREIGN KEY (`commentaire_many_to_one_article_id`) REFERENCES `article` (`id`),
    ADD CONSTRAINT `FK_67F068BCFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;
