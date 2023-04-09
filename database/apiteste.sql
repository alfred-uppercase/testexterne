-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 09 avr. 2023 à 11:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apiteste`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL,
  `siren` varchar(15) NOT NULL,
  `activityArea` varchar(200) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `city` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`cid`, `cname`, `siren`, `activityArea`, `Address`, `cp`, `city`, `country`) VALUES
(1, 'Danonea', '2125FG1', 'Activity1', 'Street view', 25100, 'Paris', 'Francea'),
(5, 'Bezz Pany', '34855', 'Lightbizz', '52 II G', 101, 'Antananarivo', 'Madagascar');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`rid`, `cname`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `snom` varchar(15) NOT NULL,
  `sprenom` varchar(15) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `spass` varchar(100) NOT NULL,
  `srole` int(10) NOT NULL,
  `scompanie` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`sid`, `snom`, `sprenom`, `semail`, `spass`, `srole`, `scompanie`) VALUES
(1, 'Alfreda', 'Sergioa', 'alfreddjpro@gmail.com', 'sdsdsdsd', 1, 5),
(15, 'Alfred', 'Sergio', 'alfreddjpro@gmail.com', '', 1, 5),
(16, 'Alfred', 'Sergio', 'f203666@gmail.com', 'alfred3369', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
