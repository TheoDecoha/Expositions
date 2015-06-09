-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 28 Février 2013 à 14:10
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bd_expositions`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_categories`
--

CREATE TABLE IF NOT EXISTS `t_categories` (
  `num_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(30) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`num_categorie`),
  UNIQUE KEY `nom_categorie` (`nom_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs COMMENT='table des 3 catÃ©gories d''expositions' AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_categories`
--

INSERT INTO `t_categories` (`num_categorie`, `nom_categorie`) VALUES
(1, 'ART CONTEMPORAIN'),
(2, 'PEINTURE'),
(3, 'SCULPTURE');

-- --------------------------------------------------------

--
-- Structure de la table `t_expositions`
--

CREATE TABLE IF NOT EXISTS `t_expositions` (
  `num_exposition` int(11) NOT NULL AUTO_INCREMENT,
  `num_categorie` int(11) NOT NULL,
  `num_lieu` int(11) NOT NULL,
  `nom_exposition` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `commentaires` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `jour_debut` date NOT NULL,
  `jour_fin` date NOT NULL,
  `nbre_visiteurs` int(10) unsigned NOT NULL DEFAULT '0',
  `prix_entree` decimal(4,2) unsigned NOT NULL,
  PRIMARY KEY (`num_exposition`),
  KEY `num_categorie` (`num_categorie`),
  KEY `num_lieu` (`num_lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=8 ;

--
-- Contenu de la table `t_expositions`
--

INSERT INTO `t_expositions` (`num_exposition`, `num_categorie`, `num_lieu`, `nom_exposition`, `commentaires`, `jour_debut`, `jour_fin`, `nbre_visiteurs`, `prix_entree`) VALUES
(1, 1, 4, 'Too web or not to web', 'Exposition internationale de mini-textiles', '2013-01-03', '2013-03-17', 0, '8.50'),
(2, 3, 3, 'Parvine Curie', 'Artiste autodidacte franco-iranienne', '2013-02-10', '2013-05-05', 0, '5.50'),
(3, 1, 2, 'Corrélation', 'Exposants : Moriceau, Mauger, Zarka', '2013-03-03', '2013-04-21', 0, '0.00'),
(4, 2, 6, 'Salon de printemps', 'Artistes locaux : Bocquel, Quent, Rétif', '2013-04-07', '2013-06-09', 0, '5.00'),
(5, 1, 3, 'Triptyque', 'Exposition européenne d''art contemporain', '2013-05-12', '2013-07-28', 0, '6.25'),
(6, 3, 1, 'La sculpture à  l''honneur', 'Invité d''honneur : Krystoff Antier', '2013-06-09', '2013-08-11', 0, '0.00'),
(7, 2, 5, 'Les internationales de pastel', 'Invité d''honneur : Peter Thomas', '2013-06-02', '2013-08-25', 0, '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `t_lieux`
--

CREATE TABLE IF NOT EXISTS `t_lieux` (
  `num_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_lieu` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `adresse_lieu` varchar(40) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`num_lieu`),
  UNIQUE KEY `nom_lieu` (`nom_lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs COMMENT='table des lieux d''expositions' AUTO_INCREMENT=7 ;

--
-- Contenu de la table `t_lieux`
--

INSERT INTO `t_lieux` (`num_lieu`, `nom_lieu`, `adresse_lieu`) VALUES
(1, 'La Collégiale Saint Martin', '23, rue Saint Martin'),
(2, 'Le Quai', 'Cale de la Savatte'),
(3, 'Musée des beaux arts', '14, rue du musée'),
(4, 'Musée Jean Lurçat', '4, boulevard Arago'),
(5, 'Musée Pincé', '32 bis, rue Lenepveu'),
(6, 'Tour Saint Aubin', 'Rue des lices');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_expositions`
--
ALTER TABLE `t_expositions`
  ADD CONSTRAINT `t_expositions_ibfk_1` FOREIGN KEY (`num_categorie`) REFERENCES `t_categories` (`num_categorie`),
  ADD CONSTRAINT `t_expositions_ibfk_2` FOREIGN KEY (`num_lieu`) REFERENCES `t_lieux` (`num_lieu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
