-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 19 Décembre 2019 à 18:00
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soireeetoile`
--

-- --------------------------------------------------------

--
-- Structure de la table `login_tokens`
--

CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `idUsager` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `token`, `idUsager`) VALUES
(1, '6fcba9c376d4389d2dfa3bca7c9b6991444035b457b56b27c18144e8a0d814627f7b5660f26ed9cf759b6ee59aca5a9cdc1c20a1dbdecb2f664b388464693ee5', 1),
(2, '4d65429db2959a41e9d50f7c677aa6a098fe997cfa1e2cdef2e85c36b2093cc5942702bd68aff74b125759f1ff0daf53ec12197c4c373f290728a52e2b76b7f4', 1),
(3, '18cd825c6d0a3951b59f1828c75d3f56ce8036a5e34ae488a017f74149f8c5d797ca91b89354f617f65667feab9b9c5c325efba5144692be872168f81d51a87b', 1),
(4, 'be2c8a59c9574f0b1ac5deaa0bc8d5ff6a8e9e45ddaa8ad54d922aca7b3645bd2624efa071f34e0d8eb982b90e06c94610d66e4ebc9933b47743f14715f077f7', 1),
(5, '58401e1920ea5373d136604c3f41db97afe57f17688cbbf567b1e11d8bf65cb3a37698145886d5e8a98b8689429aa2629840f52e2cd99d8b635f8fa9ffd44cff', 1),
(6, '28a3fd03ba3d333d3617ec6cb1f8cdc915df1f3363a2f543ed34b7f2079c854b1aec082ffb825df3e1e6f15297410e755637d4517b7f5be2230807f39d39baf0', 1),
(7, 'dfa640163a66c56ed46dd134eaffa22c00a07e90dc1df367bf270ee202dcdae4df499c166a92204c0343255fe0739f7bd7def75b96159563e4e76598ce078f0e', 1),
(8, 'b8905501ce912772fbfb5367cc6238f9747fe1f74689fee338c1ac25869eb905011cbe93ebb532bf7d486b3eca5b268124102150d70c5be98fa318139240c4aa', 1),
(9, '86288e6bef2f537c2abd0236c5ff99762b81e9a36a059fc4701c53accfd9858ba457dde5f15cdbc83dab5ed68195d123bc9842829892ebb0f31cd627c34027e0', 1),
(10, '16852b14684518321e802892de7197e447e46fc8b7853cf60fb604059577ece860b1864b94c93f353aafa531c570f7d04df07deb2de3263338756e5a6af42eee', 1),
(11, '7b71a1b017005074c92fd5de1939067c48b5d170a0839fe2311322f567087adb2b914a77c9a97d76ab2c5dd3f9b9e158d2d81d4abf4b05233d1204e9debe4ce7', 1),
(12, 'c1e77d9fbe7c76eb393e012730370bd7e0b99156727a9f65cd9cc1225767f8f68107cdf673cf50c9e1aca75cbc3c5893778c9968641a5ce692195bb911640d8f', 1),
(13, '790190c1c978f1caa37eba72005fb65535219f22bcd2d957f0ec7b95beb754ab00f5fdb3dc86b6d530de504066bbd345d76f862fc7a711fc418769407a6d3495', 1),
(14, 'b3f4a328059b3c6d15c827f95e4f0f37adaec41cee9517d04ace6c57ed3c627ac87f13e6372b3c483d75164b98dca90f3fda9c8da5579dad48bfc38f1624d6fa', 1),
(15, 'd75b53bd911c235738a428eb3e4c6f2ea25c9aec6a63c876c25a12d60af6755a9cefcb57fb77d451b72d80ae59f51f519b207cc742ad6002d9f786e89079ef4c', 1),
(16, '39e1e0de75fecd2398d6cb390a94649682fcd02749b66127791ed439e74981312359e3a46f09be223b31088951883bc560b45b73a4a6c58988b1902bfc8bc9e9', 1),
(17, 'b057e6e8d4a3362ba545c77d08f08bbef97c7f944137d629b498567b1850c8fe3d9d02f6880d694b9cbcf8dee1e0063f54e4a40056e6dae2bd0ce739f1179840', 1),
(18, '38fa83309008ab1ff4baeb6ce3ee89be896ef7605b63071541e39a51ec6f9e8f05eefb22c20e7b9afb042208c24b1f1d61d9f11e3772bbee4e29bbc48993c2d4', 1),
(19, 'b85d361c399bddab7fad23a704180547608a0f15537a4f29a65419834b3931a02304315eb00d1ee09ca418b00d151d7c50ec53bbe3e16a495c86ec283d9c5b23', 1),
(20, 'd8ffee7e59970fa817947900e341ccefef2946f5f722780e04cb29032cfb1ea010737d26548a98c3027b752f0f2ec7fe822ee605f32447dd56f3d47b0b99d0c0', 1),
(21, 'f29995f8ccaa9a7b15b0080d7a61ab57c5118caa80fa23b6ef420b074faf4c87929bef6e938a2aebd5c0662b79f6640fb63074f3608b495c0d7db7b58637f16d', 1),
(22, '4e27b3d20da8c2c91ade36e1b187772195900ff4b56d3a4882450a1d30ee77ffd3c8d8855caead0c6d0a32a1ab95afbb2de0b68ee9041524a87081d79a31132d', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE `reserver` (
  `idUsager` int(11) NOT NULL,
  `idSoiree` int(11) NOT NULL,
  `validation` tinyint(1) DEFAULT NULL,
  `nbPlacePrise` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`idUsager`, `idSoiree`, `validation`, `nbPlacePrise`) VALUES
(2, 1, NULL, 12),
(6, 1, NULL, 6),
(2, 2, NULL, 22),
(2, 12, NULL, 5),
(99, 2, NULL, 3),
(2, 16, NULL, 5),
(3, 16, NULL, 2),
(6, 18, NULL, 10),
(6, 21, NULL, 64),
(2, 21, NULL, 2),
(2, 15, NULL, 3),
(55, 21, NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `soiree`
--

CREATE TABLE `soiree` (
  `idSoiree` int(11) NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(200) NOT NULL,
  `nombreDePlace` int(11) DEFAULT NULL,
  `prixPlace` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `soiree`
--

INSERT INTO `soiree` (`idSoiree`, `date`, `nom`, `nombreDePlace`, `prixPlace`) VALUES
(21, '2019-12-29', 'Test de soirée trop bien de fou', 70, 12),
(19, '2020-02-20', 'Une pure soiree', 24, 12),
(17, '2020-12-24', 'original ', 645, 6),
(15, '2019-12-29', 'La soiree des bro s', 100, 5),
(16, '2020-04-11', 'Une etoilee du pic', 12, 4);

-- --------------------------------------------------------

--
-- Structure de la table `typecompte`
--

CREATE TABLE `typecompte` (
  `idType` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE `usager` (
  `idUsager` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `idType` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `identifiant` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `usager`
--

INSERT INTO `usager` (`idUsager`, `nom`, `prenom`, `dateNaissance`, `adresse`, `mail`, `tel`, `idType`, `password`, `identifiant`) VALUES
(1, 'yfy', 'jkjhkjh', '2019-12-04', 'hjkjh', 'jgjghkjg', 'gjkggk', 1, '$2y$12$.55sX.o8PzUVm2wCe8vogeHBoIHAEzjB7hlvnePYQjfeTxNMuGhCm', 'tomo'),
(2, 'wxwxcw', 'wxcwxcvwxcvwxcv', '2019-12-04', 'xcgb', 'wxcvw', 'w134313', 1, 'gh', 'gh');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idUsager` (`idUsager`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`idUsager`,`idSoiree`),
  ADD KEY `fk_idSoiree` (`idSoiree`);

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
  ADD PRIMARY KEY (`idUsager`),
  ADD KEY `fk_idType` (`idType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `soiree`
--
ALTER TABLE `soiree`
  MODIFY `idSoiree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `typecompte`
--
ALTER TABLE `typecompte`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `usager`
--
ALTER TABLE `usager`
  MODIFY `idUsager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
