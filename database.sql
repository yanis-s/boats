-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Septembre 2017 à 19:11
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `boats`
--

-- --------------------------------------------------------

--
-- Structure de la table `boats`
--

CREATE TABLE `boats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `created` date NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_boats_1` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `boats`
--

INSERT INTO `boats` (`id`, `name`, `description`, `weight`, `created`, `login_id`) VALUES
(5, 'Bateau A', 'Le bateau le plus beau du monde', 14345.00, '2017-09-20', 1),
(6, 'Bateau B', 'Le bateau le plus petit du monde', 145.00, '2017-09-20', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Yanis', 'yanis.salti@gmail.com', 'yanis', 'cd3eea95a5a0f3fd176bf5bb624ea431');
