-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 juin 2020 à 12:25
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `legendary_trip`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(6) NOT NULL,
  `logement_type` varchar(20) DEFAULT NULL,
  `total_occupant` int(2) DEFAULT NULL,
  `total_chambre` int(2) DEFAULT NULL,
  `total_toilette` int(2) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `tv` tinyint(1) DEFAULT NULL,
  `kitchen` tinyint(1) DEFAULT NULL,
  `climatisation` tinyint(1) DEFAULT NULL,
  `chauffage` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `prix` int(7) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `proprietaire_id` int(6) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_text` text DEFAULT NULL,
  `departement` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `logement_type`, `total_occupant`, `total_chambre`, `total_toilette`, `adresse`, `tv`, `kitchen`, `climatisation`, `chauffage`, `internet`, `prix`, `date_publication`, `proprietaire_id`, `latitude`, `longitude`, `image`, `image_text`, `departement`) VALUES
(22, 'Villa vue sur la mer', 8, 4, 3, '37 route de la mer', 1, 1, 1, 1, 1, 1200, NULL, 6, NULL, NULL, 'VacancesLuxe.jpg', 'Villa toute équipée avec vue imprenable sur la mer, longue piscine extérieur, climatisation dans toutes les pièces plus internet très haut débit disponible. Barbecue au gaz déjà alimenté, four, micro-onde et lave vaisselle dans la cuisine.  ', 33),
(24, 'Villa piscine + anne', 6, 3, 2, '48 rue Bernard Adour', 1, 1, 1, 1, 1, 900, NULL, 8, NULL, NULL, 'VillaNum2.jpg', 'Villa toute équipée, longue piscine extérieur, deuxième salon mi-extérieur dans un annexe climatisation dans toutes les pièces plus internet très haut débit disponible. Barbecue au gaz déjà alimenté, four, micro-onde et lave vaisselle dans la cuisine.  ', 6),
(25, 'Villa moderne ', 10, 5, 3, '37 chemin de Mauvarre', 1, 1, 1, 1, 1, 1100, NULL, 8, NULL, NULL, 'villaNum3.jpg', 'Villa moderne toute équipée, longue piscine extérieur, climatisation dans toutes les pièces plus internet très haut débit disponible. Barbecue au gaz déjà alimenté, four, micro-onde et lave vaisselle dans la cuisine.  ', 6);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(6) NOT NULL,
  `id_utilisateur` int(6) DEFAULT NULL,
  `id_logement` int(6) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `dete_fin` date DEFAULT NULL,
  `prix_total` int(8) DEFAULT NULL,
  `nb_personne` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(6) NOT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `motDePasse` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `numero` varchar(20) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `sold` int(8) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `prenom`, `nom`, `pseudo`, `motDePasse`, `email`, `numero`, `code_postal`, `adresse`, `sold`) VALUES
(6, 'Alexis', 'Larrode', 'Fanswers', 'P@ssword1234', 'alexis.larrode@gmail.com', '0', 0, '', 0),
(8, 'Julien', 'Cruz', 'Jucrz', 'P@ssword1234', 'julien.cruz@ynov.com', '06 06 06 06 06', 78000, 'El V&eacute;sizou', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
