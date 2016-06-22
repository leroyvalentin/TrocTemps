-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 15 Juin 2016 à 11:36
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `TrocTemps`


-- --------------------------------------------------------

--
-- Structure de la table `tt_inscrit`
--

DROP TABLE IF EXISTS `tt_inscrit`;
CREATE TABLE IF NOT EXISTS `tt_inscrit` (
  `num_inscrit` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `sexe` text NOT NULL,
  `nom_ville` text NOT NULL,
  `cp` text NOT NULL,
  `rue` text NOT NULL,
  `add_mail` text NOT NULL,
  `telephone` text NOT NULL,
  `description` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`num_inscrit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=REDUNDANT AUTO_INCREMENT=00 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
