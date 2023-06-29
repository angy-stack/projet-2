-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juin 2023 à 15:06
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etudiantdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `relevenote`
--

CREATE TABLE `relevenote` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `matiere` varchar(50) DEFAULT NULL,
  `note1` decimal(5,2) DEFAULT NULL,
  `note2` decimal(5,2) DEFAULT NULL,
  `moyenne` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `relevenote`
--

INSERT INTO `relevenote` (`id`, `nom`, `prenom`, `matiere`, `note1`, `note2`, `moyenne`) VALUES
(1, 'Angy', 'Darkness', 'maths', '12.00', '13.00', '12.50'),
(2, 'Ngoro', 'Thaly', 'maths', '17.00', '18.00', '17.50'),
(4, 'Angy', 'Darkness', 'français', '15.00', '12.00', '13.50'),
(5, 'tchikaya', 'loic', 'python', '13.00', '18.00', '15.50'),
(6, 'Makengo', 'Jordan', 'Chinois', '15.00', '13.00', '14.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `relevenote`
--
ALTER TABLE `relevenote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `relevenote`
--
ALTER TABLE `relevenote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
