-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 mai 2024 à 01:46
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
  `nom_maire` varchar(100) DEFAULT NULL,
  `date_etablissement` date DEFAULT NULL,
  `statut` enum('en attente','refuser','valider','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `acte_mariage`
--

INSERT INTO `acte_mariage` (`identifiant`, `conjoin`, `conjointe`, `temoin_conjoin`, `temoin_conjointe`, `pere_conjoin`, `pere_conjointe`, `mere_conjoin`, `mere_conjointe`, `nom_maire`, `date_etablissement`, `statut`) VALUES
(1, 282, 283, 284, 285, 286, 287, 288, 289, NULL, NULL, 'en attente'),
(2, 291, 292, 293, 294, 295, 296, 297, 298, NULL, NULL, 'refuser'),
(3, 299, 300, 301, 302, 303, 304, 305, 306, NULL, NULL, 'valider');

-- --------------------------------------------------------

--
-- Structure de la table `documents_perso`
--

CREATE TABLE `documents_perso` (
  `id_document` int(11) NOT NULL,
  `cni` varchar(200) DEFAULT NULL,
  `acteMariage` varchar(100) DEFAULT NULL,
  `acteNaissance` varchar(100) DEFAULT NULL,
  `doc_perso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `documents_perso`
--

INSERT INTO `documents_perso` (`id_document`, `cni`, `acteMariage`, `acteNaissance`, `doc_perso`) VALUES
(62, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 82),
(63, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 83),
(64, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 84),
(65, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 85),
(66, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 88),
(67, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 86),
(68, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 89),
(69, NULL, NULL, NULL, 87),
(70, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 90),
(71, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 91),
(72, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 92),
(73, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 93),
(74, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 96),
(75, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 94),
(76, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 97),
(77, NULL, NULL, NULL, 95),
(78, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 98),
(79, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 99),
(80, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 100),
(81, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 101),
(82, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 104),
(83, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 102),
(84, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 105),
(85, NULL, NULL, NULL, 103),
(86, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 106),
(87, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 107),
(88, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 108),
(89, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 109),
(90, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 112),
(91, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 110),
(92, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 113),
(93, NULL, NULL, NULL, 111),
(94, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 114),
(95, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 115),
(96, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 116),
(97, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 117),
(98, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 120),
(99, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 118),
(100, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 121),
(101, NULL, NULL, NULL, 119),
(102, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 122),
(103, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 123),
(104, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 124),
(105, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 125),
(106, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 128),
(107, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 126),
(108, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 129),
(109, NULL, NULL, NULL, 127),
(110, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 130),
(111, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 131),
(112, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 132),
(113, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 133),
(114, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 136),
(115, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 134),
(116, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 137),
(117, NULL, NULL, NULL, 135),
(118, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 138),
(119, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 139),
(120, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 140),
(121, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 141),
(122, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 144),
(123, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 142),
(124, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 145),
(125, NULL, NULL, NULL, 143),
(126, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 146),
(127, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 147),
(128, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 148),
(129, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 149),
(130, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 152),
(131, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 150),
(132, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 153),
(133, NULL, NULL, NULL, 151),
(134, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 154),
(135, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 155),
(136, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 156),
(137, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 157),
(138, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 160),
(139, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 158),
(140, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 161),
(141, NULL, NULL, NULL, 159),
(142, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 162),
(143, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 163),
(144, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 164),
(145, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 165),
(146, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 168),
(147, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 166),
(148, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 169),
(149, NULL, NULL, NULL, 167),
(150, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 170),
(151, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 171),
(152, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 172),
(153, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 173),
(154, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 176),
(155, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 174),
(156, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 177),
(157, NULL, NULL, NULL, 175),
(158, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 178),
(159, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 179),
(160, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 180),
(161, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 181),
(162, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 184),
(163, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 182),
(164, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 185),
(165, NULL, NULL, NULL, 183),
(166, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 186),
(167, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 187),
(168, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 188),
(169, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 189),
(170, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 192),
(171, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 190),
(172, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 193),
(173, NULL, NULL, NULL, 191),
(174, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 194),
(175, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 195),
(176, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 196),
(177, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 197),
(178, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 200),
(179, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 198),
(180, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 201),
(181, NULL, NULL, NULL, 199),
(182, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 202),
(183, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 203),
(184, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 204),
(185, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 205),
(186, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 208),
(187, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 206),
(188, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 209),
(189, NULL, NULL, NULL, 207),
(190, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 210),
(191, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 211),
(192, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 212),
(193, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 213),
(194, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 216),
(195, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 214),
(196, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 217),
(197, NULL, NULL, NULL, 215),
(198, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 218),
(199, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 219),
(200, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 220),
(201, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 221),
(202, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 224),
(203, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 222),
(204, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 225),
(205, NULL, NULL, NULL, 223),
(206, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 226),
(207, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 227),
(208, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 228),
(209, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 229),
(210, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 232),
(211, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 230),
(212, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 233),
(213, NULL, NULL, NULL, 231),
(214, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 234),
(215, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 235),
(216, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 236),
(217, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 237),
(218, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 240),
(219, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 238),
(220, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 241),
(221, NULL, NULL, NULL, 239),
(222, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 242),
(223, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 243),
(224, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 244),
(225, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 245),
(226, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 248),
(227, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 246),
(228, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 249),
(229, NULL, NULL, NULL, 247),
(230, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 250),
(231, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 251),
(232, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 252),
(233, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 253),
(234, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 256),
(235, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 254),
(236, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 257),
(237, NULL, NULL, NULL, 255),
(238, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 258),
(239, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 259),
(240, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 260),
(241, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 261),
(242, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 264),
(243, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 262),
(244, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 265),
(245, NULL, NULL, NULL, 263),
(246, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 266),
(247, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 267),
(248, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 268),
(249, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 269),
(250, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 272),
(251, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 270),
(252, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 273),
(253, NULL, NULL, NULL, 271),
(254, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 274),
(255, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 275),
(256, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 276),
(257, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 277),
(258, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 280),
(259, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 278),
(260, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 281),
(261, NULL, NULL, NULL, 279),
(262, '../Public/pdf/14177-creer-une-icone-pour-son-programme.pdf', NULL, '../Public/pdf/10017-creer-son-forum-de-toutes-pieces.pdf', 282),
(263, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/51729-recuperer-des-fichiers-apres-un-vidage-de-la-corbeille.pdf', 283),
(264, '../Public/pdf/37125-css-les-compteurs.pdf', NULL, NULL, 284),
(265, '../Public/pdf/88620-votre-site-php-presque-complet-architecture-mvc-et-bonnes-pratiques.pdf', NULL, NULL, 285),
(266, '../Public/pdf/36649-le-tri-a-paniers.pdf', NULL, NULL, 288),
(267, '../Public/pdf/32719-creer-un-systeme-de-newsletter.pdf', NULL, NULL, 286),
(268, '../Public/pdf/193225-decouverte-de-la-programmation-par-contraintes.pdf', NULL, NULL, 289),
(269, NULL, NULL, NULL, 287),
(270, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/548458-les-premiers-algorithmes-de-chiffrement.pdf', 291),
(271, '../Public/pdf/37795-creer-un-menu-horizontal-deroulant-en-css.pdf', NULL, '../Public/pdf/60409-le-tri-a-bulles.pdf', 292),
(272, '../Public/pdf/184477-la-reconnaissance-vocale-dans-son-application.pdf', NULL, NULL, 293),
(273, '../Public/pdf/31452-adopter-un-style-de-programmation-clair-avec-le-modele-mvc.pdf', NULL, NULL, 294),
(274, '../Public/pdf/213681-le-tri-par-selection.pdf', NULL, NULL, 297),
(275, '../Public/pdf/220089-les-animations-optimisees-avec-sdl.pdf', NULL, NULL, 295),
(276, '../Public/pdf/35692-creer-un-menu-circulaire.pdf', NULL, NULL, 298),
(277, NULL, NULL, NULL, 296),
(278, '../Public/pdf/219147-des-statistiques-pour-votre-site.pdf', NULL, '../Public/pdf/548458-les-premiers-algorithmes-de-chiffrement.pdf', 299),
(279, '../Public/pdf/37795-creer-un-menu-horizontal-deroulant-en-css.pdf', NULL, '../Public/pdf/60409-le-tri-a-bulles.pdf', 300),
(280, '../Public/pdf/184477-la-reconnaissance-vocale-dans-son-application.pdf', NULL, NULL, 301),
(281, '../Public/pdf/31452-adopter-un-style-de-programmation-clair-avec-le-modele-mvc.pdf', NULL, NULL, 302),
(282, '../Public/pdf/213681-le-tri-par-selection.pdf', NULL, NULL, 305),
(283, '../Public/pdf/220089-les-animations-optimisees-avec-sdl.pdf', NULL, NULL, 303),
(284, '../Public/pdf/35692-creer-un-menu-circulaire.pdf', NULL, NULL, 306),
(285, NULL, NULL, NULL, 304);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `nature` enum('mari','mariee','temoins','parent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`identifiant`, `nom`, `prenom`, `date_naissance`, `contact`, `email`, `sexe`, `nature`) VALUES
(82, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(83, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(84, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(85, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(86, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(87, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(88, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(89, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(90, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(91, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(92, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(93, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(94, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(95, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(96, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(97, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(98, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(99, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(100, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(101, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(102, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(103, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(104, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(105, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(106, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(107, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(108, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(109, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(110, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(111, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(112, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(113, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(114, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(115, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(116, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(117, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(118, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(119, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(120, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(121, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(122, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(123, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(124, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(125, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(126, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(127, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(128, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(129, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(130, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(131, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(132, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(133, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(134, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(135, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(136, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(137, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(138, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(139, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(140, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(141, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(142, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(143, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(144, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(145, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(146, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(147, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(148, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(149, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(150, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(151, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(152, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(153, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(154, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(155, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(156, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(157, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(158, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(159, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(160, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(161, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(162, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(163, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(164, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(165, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(166, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(167, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(168, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(169, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(170, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(171, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(172, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(173, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(174, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(175, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(176, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(177, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(178, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(179, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(180, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(181, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(182, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(183, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(184, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(185, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(186, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(187, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(188, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(189, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(190, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(191, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(192, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(193, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(194, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(195, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(196, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(197, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(198, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(199, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(200, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(201, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(202, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(203, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(204, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(205, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(206, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(207, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(208, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(209, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(210, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(211, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(212, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(213, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(214, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(215, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(216, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(217, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(218, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(219, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(220, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(221, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(222, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(223, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(224, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(225, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(226, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(227, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(228, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(229, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(230, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(231, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(232, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(233, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(234, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(235, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(236, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(237, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(238, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(239, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(240, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(241, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(242, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(243, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(244, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(245, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(246, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(247, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(248, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(249, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(250, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(251, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(252, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(253, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(254, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(255, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(256, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(257, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(258, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(259, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(260, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(261, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(262, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(263, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(264, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(265, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(266, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(267, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(268, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(269, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(270, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(271, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(272, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(273, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(274, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(275, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(276, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(277, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(278, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(279, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(280, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(281, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(282, 'NAJ oueduoq', 'PROieie', '2024-05-03', 2147483647, 'me@gmail.com', 'M', 'mari'),
(283, 'NAJlkdkldjkl', 'PROlndknl', '2024-05-09', 2147483647, 'salo@gmail.com', 'F', 'mariee'),
(284, 'NAJspipis', 'PROsljjjs', '0000-00-00', 2147483647, 'traviste@gmail.com', 'M', 'temoins'),
(285, 'JOGO  dlbjkao', 'AMANDAsiouu', '0000-00-00', 849089420, 'amanda@gmail.com', '', 'temoins'),
(286, 'JOGO oluoud', 'AMAljdbNDA', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(287, 'JOGO331', 'AMANDAo8889', '0000-00-00', 0, '', 'M', 'parent'),
(288, 'JOGOsnbsso', 'AMANDA sjka', '0000-00-00', 0, 'of@ga.com', 'F', 'parent'),
(289, 'JOGOhj', 'AMANDAddn', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(290, 'Nganou', 'Pierre', '1997-02-21', 2147483647, 'kevin1@gmail.com', 'M', 'mari'),
(291, 'Nganou', 'Pierre', '1997-02-21', 2147483647, 'kevin1@gmail.com', 'M', 'mari'),
(292, 'Fabiola', 'NK', '1992-12-02', 944209, 'djjd@asdkn.com', 'F', 'mariee'),
(293, 'Temoin 1', 'paon', '0000-00-00', 949090904, 'iud@gamil.com', '', 'temoins'),
(294, 'Coment', 'Goak', '0000-00-00', 2147483647, 'lal@com.com', 'M', 'temoins'),
(295, 'Tapi', 'Daniel', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(296, 'peo', 'norton', '0000-00-00', 0, 'kkds@ann.com', 'M', 'parent'),
(297, 'Fogou', 'Coline', '0000-00-00', 0, 'sidoin@gmali.com', 'F', 'parent'),
(298, 'Huber', 'Kulen', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent'),
(299, 'Nganou', 'Pierre', '1997-02-21', 2147483647, 'kevin1@gmail.com', 'M', 'mari'),
(300, 'Fabiola', 'NK', '1992-12-02', 944209, 'djjd@asdkn.com', 'F', 'mariee'),
(301, 'Temoin 1', 'paon', '0000-00-00', 949090904, 'iud@gamil.com', '', 'temoins'),
(302, 'Coment', 'Goak', '0000-00-00', 2147483647, 'lal@com.com', 'M', 'temoins'),
(303, 'Tapi', 'Daniel', '0000-00-00', 0, 'lsos@ansi.com', 'M', 'parent'),
(304, 'peo', 'norton', '0000-00-00', 0, 'kkds@ann.com', 'M', 'parent'),
(305, 'Fogou', 'Coline', '0000-00-00', 0, 'sidoin@gmali.com', 'F', 'parent'),
(306, 'Huber', 'Kulen', '0000-00-00', 0, 'oduj@gamil.com', 'F', 'parent');

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
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `documents_perso`
--
ALTER TABLE `documents_perso`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

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
