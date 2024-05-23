-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 mai 2024 à 23:22
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mariage`
--

-- --------------------------------------------------------

--
-- Structure de la table `acte_mariage`
--

CREATE TABLE `acte_mariage` (
  `identifiant` int(11) NOT NULL,
  `conjoin` int(160) NOT NULL,
  `conjointe` int(160) NOT NULL,
  `temoin_conjoin` int(160) NOT NULL,
  `temoin_conjointe` int(160) NOT NULL,
  `pere_conjoin` int(160) NOT NULL,
  `pere_conjointe` int(160) NOT NULL,
  `mere_conjoin` int(11) NOT NULL,
  `mere_conjointe` int(11) NOT NULL,
  `nom_maire` varchar(100) NOT NULL,
  `date_etablissement` date NOT NULL,
  `statut` enum('en attente','refuser','valider','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `documents_perso`
--

CREATE TABLE `documents_perso` (
  `id_document` int(11) NOT NULL,
  `cni` varchar(200) NOT NULL,
  `acteMariage` varchar(100) NOT NULL,
  `acteNaissance` varchar(100) NOT NULL,
  `doc_perso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `nature` enum('mari','mariee','temoins','parent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acte_mariage`
--
ALTER TABLE `acte_mariage`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `conjoin` (`conjoin`),
  ADD KEY `conjointe` (`conjointe`),
  ADD KEY `parent_conjointe` (`pere_conjointe`),
  ADD KEY `temoin_conjoin` (`temoin_conjoin`),
  ADD KEY `temoin_conjointe` (`temoin_conjointe`),
  ADD KEY `pere_conjoin` (`pere_conjoin`),
  ADD KEY `acte_mariage_ibfk_7` (`mere_conjoin`),
  ADD KEY `mere_conjointe` (`mere_conjointe`);

--
-- Index pour la table `documents_perso`
--
ALTER TABLE `documents_perso`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `documents_perso_ibfk_1` (`doc_perso`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acte_mariage`
--
ALTER TABLE `acte_mariage`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `documents_perso`
--
ALTER TABLE `documents_perso`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acte_mariage`
--
ALTER TABLE `acte_mariage`
  ADD CONSTRAINT `acte_mariage_ibfk_1` FOREIGN KEY (`conjoin`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_2` FOREIGN KEY (`conjointe`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_3` FOREIGN KEY (`pere_conjoin`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_4` FOREIGN KEY (`pere_conjointe`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_5` FOREIGN KEY (`temoin_conjoin`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_6` FOREIGN KEY (`temoin_conjointe`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_7` FOREIGN KEY (`mere_conjoin`) REFERENCES `personne` (`Identifiant`),
  ADD CONSTRAINT `acte_mariage_ibfk_8` FOREIGN KEY (`mere_conjointe`) REFERENCES `personne` (`Identifiant`);

--
-- Contraintes pour la table `documents_perso`
--
ALTER TABLE `documents_perso`
  ADD CONSTRAINT `documents_perso_ibfk_1` FOREIGN KEY (`doc_perso`) REFERENCES `personne` (`Identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
