-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 17:45
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis_offres`
--

CREATE TABLE `avis_offres` (
  `id_avis` int(255) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `message` text NOT NULL,
  `id_offres` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis_offres`
--

INSERT INTO `avis_offres` (`id_avis`, `nom`, `email`, `message`, `id_offres`) VALUES
(1239, 'mohamed bjeoui', 'bejooui@esprit.tn', 'bon offre', 50);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id_offres` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `code_promo` int(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `plats` varchar(35) NOT NULL,
  `prix` int(255) NOT NULL,
  `remise` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id_offres`, `nom`, `prenom`, `code_promo`, `email`, `plats`, `prix`, `remise`) VALUES
(32, 'validation', 'validation', 147894, 'validation@email.com', 'couscous', 4000, 20),
(50, 'msalmi', 'sarra', 11, 'sarra8199@gmail.com', 'brikaaa', 18, 9),
(56, 'hosni', 'ameni', 0, '123', 'brika', 12, 7),
(58, 'hosni', 'ameni', 0, '123', 'brika', 10, 8),
(64, 'hosni', 'ameni', 0, '123', 'poisson', 7, 7),
(69, 'salim', 'ameni', 0, '123', 'couscous', 20, 6),
(70, 'hosniiiii', 'ameniiiii', 0, '123', 'brika', 6, 3),
(71, 'hosniiiii', 'ameniiiii', 0, '123', 'brika', 8, 8),
(72, 'hosniiiii', 'ameniiiii', 0, '123', 'couscous', 7, 5);

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` int(11) NOT NULL,
  `nom_plat` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `id_specialite` int(11) NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT current_timestamp(),
  `lien_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `nom_plat`, `prix`, `id_specialite`, `dateCreation`, `lien_image`) VALUES
(47, 'test', 125.5, 53, '2022-12-04 12:07:41', '638c7f7d23777.jfif'),
(48, 'Le riz Jerbien', 3.5, 19, '2022-12-04 12:13:46', '638c80ea8c5ec.jfif'),
(49, 'la Charmoula ', 2, 19, '2022-12-04 12:51:17', '638c89b587987.jfif'),
(50, 'brika', 12, 57, '2022-12-06 12:24:24', '638f26684a6d9.jfif'),
(51, 'la Charmoula ', 2.5, 59, '2022-12-07 09:04:46', '6390491eb6207.jfif'),
(52, 'lablabi', 2, 59, '2022-12-07 09:32:27', '63904f9b917c5.jfif'),
(54, 'testplat', 1200, 20, '2022-12-11 17:54:22', '63960b3ea48be.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `msg`, `id_user`) VALUES
(2, 'reco4445', 1),
(3, 'okkkkkkk', 1),
(13, 'beehyy', 1),
(14, 'nuuul', 1),
(15, 'reclamationn', 1),
(22, 'recccc', 1),
(23, 'Aenean luctus semper orci, non malesuada turpis consectetur vel. Fusce nibh sem, sagittis et lectus mollis, placerat tincidunt lorem. Mauris iaculis felis in massa semper, in rhoncus justo porta. Donec facilisis iaculis sapien, nec facilisis nunc faucibus', 1),
(24, 'okhuhu124', 1),
(25, 'okoko1234', 65);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `reclamation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id_reponse`, `msg`, `reclamation`) VALUES
(8, 'test', 15),
(10, 'testmm45', 14);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(13, 'CLIENT'),
(14, 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `roleuser`
--

CREATE TABLE `roleuser` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(11) NOT NULL,
  `nom_specialite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `nom_specialite`) VALUES
(19, 'Supp'),
(20, 'Deserts'),
(53, 'Fast '),
(55, 'Nos platsss'),
(57, 'Supplément'),
(58, 'specialite1'),
(59, 'boufe sfaxienne'),
(60, 'desc');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `passworduser` varchar(255) NOT NULL,
  `idrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `adresse`, `email`, `dob`, `passworduser`, `idrole`) VALUES
(1, 'maram123', 'hleli', 'ariana la superieure', 'maram.hlali@esprit.tn', '2022-12-07', '$2y$10$fPVusGHj9pbYI1jYdimk9uRV7vYARlsUmwtM5EiSLWzbAddktxDv6', 13),
(57, 'kefi', 'yassine', 'germany munich', 'yassinekefi@gmail.com', '2002-03-10', '$2y$10$.wvDYdpPPom94zxpRHu6EOBSckmD8f8UmsN9z0XTgxx.cKl0Ca0YW', 14),
(58, 'molkka', 'ameni4', 'ariana5YH', 'HTN@KK.LL', '2022-12-15', '$2y$10$0tbPbYic8UhyipwMcZEi2uQcVwY0ghvTLBabre0O6p5XbT49w7jx.', 13),
(61, 'yasmine', 'jema', 'ariana', 'maram.benhamed@gmail.com', '2022-12-09', '$2y$10$Ss6qbyLQDX3rx2KWvRx4kOtF/K3QYijpE5LZjIRj7tz9bXXQPjuIK', 13),
(62, 'yasmine', 'jema', 'ariana', 'maram.benhamed@gmail.com', '2022-12-09', '$2y$10$w6Fj3RKIG2UjU7Kesh58gOVIP5.Rui2l7RonS3uEIAJOFABHXN02y', 13),
(63, 'faouzi', 'kefi', 'bardo', 'faouzikefi@gmail.com', '2022-12-14', '$2y$10$v7y4Pp/P0SsXC9qmJDaivuLT6peYcnkTjao6kMdTrtiGBlk/JtqYe', 14),
(65, 'MOLKA', 'benhmida', 'sfaxtunis', 'molka@esprit.tn', '2022-12-17', '$2y$10$vR1gs0bqgPHK/1QPRWxp/OmMpO3cHPkKLWzvME/skazbw.19xaCqm', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis_offres`
--
ALTER TABLE `avis_offres`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `id_offres` (`id_offres`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id_offres`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_specialite` (`id_specialite`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `reclamation` (`reclamation`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_role` (`idrole`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis_offres`
--
ALTER TABLE `avis_offres`
  MODIFY `id_avis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1244;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id_offres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis_offres`
--
ALTER TABLE `avis_offres`
  ADD CONSTRAINT `fk_offre` FOREIGN KEY (`id_offres`) REFERENCES `offres` (`id_offres`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_ibfk_1` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`reclamation`) REFERENCES `reclamation` (`id_reclamation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`idrole`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
