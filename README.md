# SitePerso
Mon site personnel, me présentant, mais aussi avec quelques fonction implémenté grace à mes cours de webdynamic.
A la base, ce site est hébergé sur un raspberry pi. Une base de donnée mysql est présente sur le raspberry.



# Contenu
Plusieurs pages différentes... qui utilisent du HTML, CSS, PHP, mySql.

#En cas de problème ou de question
nico.v.44@gmail.com


# What you need
Les fichiers sont à mettre sur un serveur PHP pour que les pages PHP fonctionnent.
Il faut aussi une base de donnée mysql pour les commentaires :
La base mysql contient la base "db001" qui contient la table "commentaires" importable par le fichier *.sql suivant :



-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 01 Avril 2017 à 02:01
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db001`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
`ID` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commentaire` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`ID`, `timeStamp`, `commentaire`) VALUES
(11, '2017-03-24 19:43:21', 'Il est cool ton site internet !'),
(12, '2017-03-24 20:35:21', 'fme ncyryerhcfcgytzdthrcgfryrfcjreuyctkqrk<rg kcyfhtcqu<fw,hc uq<gk cfhsdfslglglquhdfgyqgffl<l sbra :!!'),
(13, '2017-03-25 18:01:13', 'Je mettrais le lien pour ton projet en plus gros caractère.'),
(14, '2017-03-30 22:30:46', 'Très bien...mais les questions posées dans le questionnaire sont toujours les mêmes, et on ne voit pas les autres...'),
(15, '2017-03-31 23:43:03', '0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
