-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 sep. 2019 à 06:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gvf`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `IdAdmin` varchar(10) NOT NULL,
  `NomAdmin` varchar(50) NOT NULL,
  `PrenomAdmin` varchar(50) NOT NULL,
  `FonctionAdmin` varchar(20) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `PassAdmin` varchar(50) NOT NULL,
  PRIMARY KEY (`IdAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`IdAdmin`, `NomAdmin`, `PrenomAdmin`, `FonctionAdmin`, `Avatar`, `PassAdmin`) VALUES
('naval419', 'Ranarivola', 'Herinavalona', 'Admin', '', 'navalona'),
('admin123', 'admin', 'admin', 'admin', '', 'admin'),
('admin456', 'admin', 'admin', 'admin', '', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `NomCategorie` varchar(30) NOT NULL,
  PRIMARY KEY (`NomCategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`NomCategorie`) VALUES
('Comedie'),
('Horreur');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `TelephoneClient` char(10) NOT NULL,
  `NomClient` varchar(50) DEFAULT NULL,
  `PrenomClient` varchar(50) DEFAULT NULL,
  `Adresse` varchar(30) NOT NULL,
  `IdCompte` int(11) DEFAULT NULL,
  PRIMARY KEY (`TelephoneClient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comptabilites`
--

DROP TABLE IF EXISTS `comptabilites`;
CREATE TABLE IF NOT EXISTS `comptabilites` (
  `RecetteDuJour` float NOT NULL,
  `Imprevu` float NOT NULL,
  `Bonus` float NOT NULL,
  `IdCompta` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IdCompta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
  `Email` varchar(50) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `VirtualMoney` int(11) NOT NULL DEFAULT '50000',
  `Fidelite` int(2) NOT NULL,
  `Recuperation` varchar(10) NOT NULL,
  `IdCompte` int(11) NOT NULL AUTO_INCREMENT,
  `TelephoneClient` char(10) NOT NULL,
  PRIMARY KEY (`IdCompte`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `disponibilites`
--

DROP TABLE IF EXISTS `disponibilites`;
CREATE TABLE IF NOT EXISTS `disponibilites` (
  `NomQualite` varchar(20) NOT NULL,
  `IdFilm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `disponibilites`
--

INSERT INTO `disponibilites` (`NomQualite`, `IdFilm`) VALUES
('hd', 0);

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `Ref` int(11) NOT NULL,
  `DateFacture` timestamp NOT NULL,
  `HeureFacture` time NOT NULL,
  `Etat` varchar(15) NOT NULL,
  `TelephoneClient` char(10) NOT NULL,
  PRIMARY KEY (`Ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `IdFilm` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(200) NOT NULL,
  `Duree` varchar(10) DEFAULT NULL,
  `Realisateur` varchar(50) DEFAULT NULL,
  `MaisonDeProd` varchar(50) DEFAULT NULL,
  `Synopsis` text,
  `AnneeDeSortie` int(4) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdFilm`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`IdFilm`, `Titre`, `Duree`, `Realisateur`, `MaisonDeProd`, `Synopsis`, `AnneeDeSortie`, `Image`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `IdFilm` int(11) NOT NULL,
  `NomCategorie` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gestions`
--

DROP TABLE IF EXISTS `gestions`;
CREATE TABLE IF NOT EXISTS `gestions` (
  `IdAdmin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IdCompta` int(11) NOT NULL,
  `DateCompa` date NOT NULL,
  UNIQUE KEY `DateCompa` (`DateCompa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `qualites`
--

DROP TABLE IF EXISTS `qualites`;
CREATE TABLE IF NOT EXISTS `qualites` (
  `NomQualite` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `qualites`
--

INSERT INTO `qualites` (`NomQualite`) VALUES
('hd'),
('fhd');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdFilm` int(11) NOT NULL,
  `IdAdmin` varchar(10) NOT NULL,
  `TelephoneClient` char(10) NOT NULL,
  `PrixAchat` float NOT NULL,
  `DateAchat` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
