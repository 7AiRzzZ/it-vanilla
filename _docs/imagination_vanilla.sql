-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 nov. 2023 à 10:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imagination_vanilla`
--

DROP DATABASE IF EXISTS `imagination_vanilla`;
CREATE DATABASE `imagination_vanilla`;
USE `imagination_vanilla`;

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

DROP TABLE IF EXISTS `creation`;
CREATE TABLE IF NOT EXISTS `creation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `creation`
--

INSERT INTO `creation` (`id`, `url`, `name`, `description`) VALUES
(13, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpqvri1YdM-5WyXaO6rrQBUjtTgm37P2YT5eoxZRBSpoxNRS8P7YbmhnlyuH3wcnoJhYE&usqp=CAU', 'tribale', 'tribale'),
(14, 'https://img.freepik.com/vecteurs-premium/vector-phoenix-tattoo-symbole-renaissance-renouveau_840347-1314.jpg?w=2000', 'phoenix', 'phoenix');

-- --------------------------------------------------------

--
-- Structure de la table `tattoo`
--

DROP TABLE IF EXISTS `tattoo`;
CREATE TABLE IF NOT EXISTS `tattoo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tattoo`
--

INSERT INTO `tattoo` (`id`, `url`, `name`, `categorie`, `description`) VALUES
(18, 'https://bensonstudio.b-cdn.net/wp-content/uploads/2022/10/lion-piano-geometric-tattoo-a51.jpg', 'lion-piano', 'animale', 'Un tattoo de lion'),
(19, 'https://artcorpus.fr/wp-content/uploads/2017/11/Tattooserpent1301-scaled.jpg', 'serpent', 'animale', 'Un tattoo de serpent');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_collection`
--

DROP TABLE IF EXISTS `user_collection`;
CREATE TABLE IF NOT EXISTS `user_collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_alias` varchar(255) NOT NULL,
  `tattoo_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `creation_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_alias` (`user_alias`),
  KEY `fk_creation_name` (`creation_name`) USING BTREE,
  KEY `fk_tattoo_name` (`tattoo_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_collection`
--
ALTER TABLE `user_collection`
  ADD CONSTRAINT `fk_creation_name` FOREIGN KEY (`creation_name`) REFERENCES `creation` (`name`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tattoo_name` FOREIGN KEY (`tattoo_name`) REFERENCES `tattoo` (`name`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_alias` FOREIGN KEY (`user_alias`) REFERENCES `user` (`alias`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
