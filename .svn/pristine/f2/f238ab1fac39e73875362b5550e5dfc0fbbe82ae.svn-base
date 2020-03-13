-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 11 Décembre 2019 à 08:18
-- Version du serveur :  5.6.20-log
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `soireeetoile`
--

-- --------------------------------------------------------

--
-- Structure de la table `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
`id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `idUsager` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE IF NOT EXISTS `reserver` (
  `idUsager` int(11) NOT NULL,
  `idSoiree` int(11) NOT NULL,
  `validation` tinyint(1) DEFAULT NULL,
  `nbPlacePrise` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`idUsager`, `idSoiree`, `validation`, `nbPlacePrise`) VALUES
(2, 1, NULL, 1),
(2, 3, NULL, 20);

-- --------------------------------------------------------

--
-- Structure de la table `soiree`
--

CREATE TABLE IF NOT EXISTS `soiree` (
`idSoiree` int(11) NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(200) NOT NULL,
  `nombreDePlace` int(11) DEFAULT NULL,
  `prixPlace` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `soiree`
--

INSERT INTO `soiree` (`idSoiree`, `date`, `nom`, `nombreDePlace`, `prixPlace`) VALUES
(1, '2020-05-14', 'Epreuve PPE', 300, 500),
(3, '2020-01-29', 'Observation Lune', 17, 20),
(11, '2020-01-17', 'htr', 20, 20);

-- --------------------------------------------------------

--
-- Structure de la table `typecompte`
--

CREATE TABLE IF NOT EXISTS `typecompte` (
`idType` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `typecompte`
--

INSERT INTO `typecompte` (`idType`, `libelle`) VALUES
(1, 'Gestionnaire'),
(2, 'Usager');

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE IF NOT EXISTS `usager` (
`idUsager` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `idType` int(11) NOT NULL,
  `identifiant` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `estConnecte` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `usager`
--

INSERT INTO `usager` (`idUsager`, `nom`, `prenom`, `dateNaissance`, `adresse`, `mail`, `tel`, `idType`, `identifiant`, `password`, `estConnecte`) VALUES
(1, 'Durand', 'Daniel', '1985-04-30', '2 rue Jules Ferry 64000 Pau', 'durand.daniel@gmail.com', '0102030405', 1, 'root', '$2y$10$d.Gr.C8oKc8gcVLeDwMGzeS.DQgPO409bH8LdSPMr0YPmMbE8.ykW', 0),
(2, 'Campanella', 'Thomas', '2000-11-14', 'feseger', 'hfgvjhc@gmail.com', '0102030405', 2, 'tomo', '$2y$12$.55sX.o8PzUVm2wCe8vogeHBoIHAEzjB7hlvnePYQjfeTxNMuGhCm', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `login_tokens`
--
ALTER TABLE `login_tokens`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_idUsager` (`idUsager`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
 ADD PRIMARY KEY (`idUsager`,`idSoiree`), ADD KEY `fk_idSoiree` (`idSoiree`);

--
-- Index pour la table `soiree`
--
ALTER TABLE `soiree`
 ADD PRIMARY KEY (`idSoiree`);

--
-- Index pour la table `typecompte`
--
ALTER TABLE `typecompte`
 ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `usager`
--
ALTER TABLE `usager`
 ADD PRIMARY KEY (`idUsager`), ADD KEY `fk_idType` (`idType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `login_tokens`
--
ALTER TABLE `login_tokens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `soiree`
--
ALTER TABLE `soiree`
MODIFY `idSoiree` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `typecompte`
--
ALTER TABLE `typecompte`
MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `usager`
--
ALTER TABLE `usager`
MODIFY `idUsager` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
