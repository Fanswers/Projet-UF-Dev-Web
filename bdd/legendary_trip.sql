-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 juin 2020 à 11:39
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
  `departement` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `logement_type`, `total_occupant`, `total_chambre`, `total_toilette`, `adresse`, `tv`, `kitchen`, `climatisation`, `chauffage`, `internet`, `prix`, `date_publication`, `proprietaire_id`, `latitude`, `longitude`, `departement`) VALUES
(10, 'maison', 2, 2, 2, 'La maison', 1, 1, 1, 1, 0, 200, NULL, 7, NULL, NULL, 11),
(11, 'maison', 5, 4, 1, '1 impasse du petit bois', 0, 0, 0, 1, 1, 200, NULL, 7, NULL, NULL, 24);

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

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_utilisateur`, `id_logement`, `date_debut`, `dete_fin`, `prix_total`, `nb_personne`) VALUES
(2, 7, 10, '2020-08-10', '2020-08-17', 1000, 2),
(5, 7, 10, '2020-08-10', '2020-08-10', 100, 3),
(6, 7, 10, '2020-06-02', '2020-06-24', 100, 2);

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
  `adresse` varchar(100) DEFAULT NULL,
  `sold` int(8) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `prenom`, `nom`, `pseudo`, `motDePasse`, `email`, `numero`, `code_postal`, `adresse`, `sold`) VALUES
(7, 'Patrick', 'Petit', 'Fanswers', 'P@ssword1234', 'exemple@gmail.com', 612345678, 42000, '69 rue des exemples', 48),
(8, 'test', 'test', 'test', 'P@ssword1234', 'test@test.com', 123456789, 12345, 'test', 0);

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
  MODIFY `id_logement` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
