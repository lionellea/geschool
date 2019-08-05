-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 05 Août 2019 à 19:27
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.1.29-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesco`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`id`, `date_debut`, `date_fin`) VALUES
(1, '2019-09-02', '2020-06-08'),
(2, '2020-09-03', '2021-06-06');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id`, `libelle`, `section`) VALUES
(1, 'SIL', 'francophone'),
(2, 'CEP', 'francophone'),
(3, 'CE1', 'francophone'),
(4, 'CE2', 'francophone'),
(5, 'CM1', 'francophone'),
(6, 'CM2', 'francophone');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` datetime NOT NULL,
  `lieu_de_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salle_id` int(11) NOT NULL,
  `nationalite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_inscription` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `lieu_de_naissance`, `matricule`, `salle_id`, `nationalite`, `etat_inscription`) VALUES
(2, 'Adjimi', 'Lionie', 'feminin', '2019-08-21 00:00:00', 'bertoua', 'null', 1, 'CMR', 1),
(20, 'Temani', 'Igor', 'masculin', '2014-01-01 00:00:00', 'Yde', 'PF000119', 1, 'CMR', 0),
(21, 'assouma', 'alice', 'feminin', '2014-01-01 00:00:00', 'Yde', 'PF000120', 1, 'CMR', 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `eleve_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `montant`, `date_inscription`, `eleve_id`, `salle_id`) VALUES
(3, 10000, '2019-08-04 23:23:12', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190730045331', '2019-07-30 04:53:56'),
('20190730075510', '2019-07-30 07:55:30'),
('20190730130755', '2019-07-30 13:08:13'),
('20190730215329', '2019-07-30 21:53:38'),
('20190730223731', '2019-07-30 22:37:41'),
('20190731055051', '2019-07-31 05:51:05'),
('20190804134257', '2019-08-04 13:43:04'),
('20190804142151', '2019-08-04 14:21:58'),
('20190804142651', '2019-08-04 14:27:21'),
('20190804144835', '2019-08-04 14:48:42'),
('20190804144932', '2019-08-04 14:49:42'),
('20190804145520', '2019-08-04 14:55:27'),
('20190804145858', '2019-08-04 14:59:12'),
('20190804151759', '2019-08-04 15:18:11'),
('20190804152109', '2019-08-04 15:21:16'),
('20190804152410', '2019-08-04 15:24:16'),
('20190804152552', '2019-08-04 15:26:02'),
('20190804155402', '2019-08-04 15:54:12'),
('20190804220336', '2019-08-04 22:03:52');

-- --------------------------------------------------------

--
-- Structure de la table `pansion`
--

CREATE TABLE `pansion` (
  `id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `tranche_id` int(11) NOT NULL,
  `eleve_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `date_paiement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `classe_id`, `libelle`) VALUES
(1, 1, 'SIL_A'),
(2, 1, 'SIL_B');

-- --------------------------------------------------------

--
-- Structure de la table `tranche`
--

CREATE TABLE `tranche` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `date_paiement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ECA105F7DC304035` (`salle_id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5E90F6D6A6CC7B2` (`eleve_id`),
  ADD KEY `IDX_5E90F6D6DC304035` (`salle_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `pansion`
--
ALTER TABLE `pansion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E24DDE6CB76F6B31` (`tranche_id`),
  ADD KEY `IDX_E24DDE6CA6CC7B2` (`eleve_id`),
  ADD KEY `IDX_E24DDE6CDC304035` (`salle_id`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4E977E5C8F5EA509` (`classe_id`);

--
-- Index pour la table `tranche`
--
ALTER TABLE `tranche`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annee`
--
ALTER TABLE `annee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pansion`
--
ALTER TABLE `pansion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tranche`
--
ALTER TABLE `tranche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `FK_ECA105F7DC304035` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D6A6CC7B2` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `FK_5E90F6D6DC304035` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `pansion`
--
ALTER TABLE `pansion`
  ADD CONSTRAINT `FK_E24DDE6CA6CC7B2` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `FK_E24DDE6CB76F6B31` FOREIGN KEY (`tranche_id`) REFERENCES `tranche` (`id`),
  ADD CONSTRAINT `FK_E24DDE6CDC304035` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `FK_4E977E5C8F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
