-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 août 2024 à 12:39
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `tactivite`
--

DROP TABLE IF EXISTS `tactivite`;
CREATE TABLE IF NOT EXISTS `tactivite` (
  `id` int NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `description_activite` text,
  `type_activite` varchar(250) DEFAULT NULL,
  `duree_estimee` varchar(100) DEFAULT NULL,
  `dateDebut` varchar(100) DEFAULT NULL,
  `dateFin` varchar(100) DEFAULT NULL,
  `Statut` varchar(250) DEFAULT NULL,
  `FK_Project` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tbeneficiaire`
--

DROP TABLE IF EXISTS `tbeneficiaire`;
CREATE TABLE IF NOT EXISTS `tbeneficiaire` (
  `id` int NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `Phone` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Adresse` varchar(250) DEFAULT NULL,
  `FK_Project` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tdocument`
--

DROP TABLE IF EXISTS `tdocument`;
CREATE TABLE IF NOT EXISTS `tdocument` (
  `idDoc` int NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Auteur` varchar(250) DEFAULT NULL,
  `Type_document` varchar(250) DEFAULT NULL,
  `FK_Project` int DEFAULT NULL,
  PRIMARY KEY (`idDoc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `temploye`
--

DROP TABLE IF EXISTS `temploye`;
CREATE TABLE IF NOT EXISTS `temploye` (
  `matricule` varchar(250) NOT NULL,
  `Noms` varchar(250) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Adresse` text,
  `sexe` varchar(15) DEFAULT NULL,
  `Poste` varchar(250) DEFAULT NULL,
  `MotDePasse` varchar(250) DEFAULT NULL,
  `FK_equipe` int DEFAULT NULL,
  `FK_role` int DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tequipe`
--

DROP TABLE IF EXISTS `tequipe`;
CREATE TABLE IF NOT EXISTS `tequipe` (
  `idEquipe` int NOT NULL,
  `nomEquipe` varchar(100) DEFAULT NULL,
  `description_Equipe` text,
  `FK_Project` int DEFAULT NULL,
  PRIMARY KEY (`idEquipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tinfrastructure`
--

DROP TABLE IF EXISTS `tinfrastructure`;
CREATE TABLE IF NOT EXISTS `tinfrastructure` (
  `id` int NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `Avenue` varchar(250) DEFAULT NULL,
  `Quartier` varchar(250) DEFAULT NULL,
  `Commune` varchar(250) DEFAULT NULL,
  `Ville` varchar(250) DEFAULT NULL,
  `Province` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tnotification`
--

DROP TABLE IF EXISTS `tnotification`;
CREATE TABLE IF NOT EXISTS `tnotification` (
  `idNotification` int NOT NULL,
  `message_contenu` varchar(250) DEFAULT NULL,
  `DateNotif` datetime DEFAULT NULL,
  `TypeNotif` varchar(100) DEFAULT NULL,
  `FK_employe` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idNotification`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tpassword_reset`
--

DROP TABLE IF EXISTS `tpassword_reset`;
CREATE TABLE IF NOT EXISTS `tpassword_reset` (
  `email` varchar(250) NOT NULL,
  `Token` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tprojet`
--

DROP TABLE IF EXISTS `tprojet`;
CREATE TABLE IF NOT EXISTS `tprojet` (
  `idProjet` int NOT NULL,
  `NomProjet` varchar(250) DEFAULT NULL,
  `description_Projet` text,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Statut` varchar(100) DEFAULT NULL,
  `Cout_projet` decimal(20,10) DEFAULT NULL,
  PRIMARY KEY (`idProjet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tressources`
--

DROP TABLE IF EXISTS `tressources`;
CREATE TABLE IF NOT EXISTS `tressources` (
  `id` int NOT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `type_ressource` varchar(250) DEFAULT NULL,
  `Quantite` int DEFAULT NULL,
  `cout` decimal(20,10) DEFAULT NULL,
  `FK_Project` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trole`
--

DROP TABLE IF EXISTS `trole`;
CREATE TABLE IF NOT EXISTS `trole` (
  `id` int NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tsessions`
--

DROP TABLE IF EXISTS `tsessions`;
CREATE TABLE IF NOT EXISTS `tsessions` (
  `ID` varchar(250) DEFAULT NULL,
  `Ip_adress` varchar(250) DEFAULT NULL,
  `Payload` text,
  `Last_activity` varchar(250) DEFAULT NULL,
  `FK_Employe` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ttaches`
--

DROP TABLE IF EXISTS `ttaches`;
CREATE TABLE IF NOT EXISTS `ttaches` (
  `idTaces` int NOT NULL,
  `NomTache` varchar(250) DEFAULT NULL,
  `desciption_tache` text,
  `Priorite` varchar(50) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Statut` varchar(100) DEFAULT NULL,
  `FK_activite` int DEFAULT NULL,
  `FK_Employe` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idTaces`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
