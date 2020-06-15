-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 02:52
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
  `longitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `logement_type`, `total_occupant`, `total_chambre`, `total_toilette`, `adresse`, `tv`, `kitchen`, `climatisation`, `chauffage`, `internet`, `prix`, `date_publication`, `proprietaire_id`, `latitude`, `longitude`) VALUES
(4, 'appartement', 4, 3, 2, '69 rue des exemples', 1, 1, 0, 0, 0, 400, NULL, 7, NULL, NULL),
(5, 'test', 2, 2, 2, 'azertyu', 1, 1, 0, 1, 0, 200, NULL, 7, NULL, NULL),
(6, 'maison', 10, 7, 4, 'test', 0, 0, 1, 0, 0, 500, NULL, 8, NULL, NULL);

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
  `numero` int(10) NOT NULL,
  `code_postal` int(5) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `prenom`, `nom`, `pseudo`, `motDePasse`, `email`, `numero`, `code_postal`, `adresse`) VALUES
(7, 'Patrick', 'Petit', 'Fanswers', 'P@ssword1234', 'exemple@gmail.com', 612345678, 42000, '69 rue des exemples'),
(8, 'test', 'test', 'test', 'P@ssword1234', 'test@test.com', 123456789, 12345, 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

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
  MODIFY `id_logement` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
