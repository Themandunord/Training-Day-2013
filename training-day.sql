-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 23 Novembre 2013 à 16:21
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `training-day`
--

-- --------------------------------------------------------

--
-- Structure de la table `itineraire`
--

CREATE TABLE IF NOT EXISTS `itineraire` (
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `prix` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`name`, `firstname`, `pass`, `email`, `phone`, `date_inscription`, `id`) VALUES
('test', 'tset', '098f6bcd4621d373cade4e832627b4f6', 'test@test.test', 'test', '2013-11-23', 1),
('test', 'tset', '098f6bcd4621d373cade4e832627b4f6', 'test@test.test', 'test', '2013-11-23', 2),
('test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.fr', '0660622', '2013-11-23', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
