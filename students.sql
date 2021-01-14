-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 jan. 2021 à 16:07
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `students`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210113110650', '2021-01-14 12:39:16', 823),
('DoctrineMigrations\\Version20210114133750', '2021-01-14 13:39:37', 1619);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `last_name`, `first_name`, `height`, `gender`) VALUES
(1, 'Parker', 'Candace', 168, 'M'),
(2, 'Sawayn', 'Esther', 157, 'M'),
(3, 'Swaniawski', 'Arlo', 165, 'F'),
(4, 'Casper', 'Jasper', 137, 'M'),
(5, 'Huel', 'Mateo', 125, 'M'),
(6, 'Corkery', 'Bernard', 127, 'F'),
(7, 'Douglas', 'May', 144, 'M'),
(8, 'Stracke', 'Maxine', 140, 'F'),
(9, 'Jones', 'Dante', 123, 'F'),
(10, 'White', 'Gregg', 197, 'M'),
(11, 'Keebler', 'Kaitlyn', 170, 'F'),
(12, 'Emard', 'Gabriella', 207, 'F'),
(13, 'Franecki', 'Bud', 139, 'M'),
(14, 'Cronin', 'Barrett', 176, 'M'),
(15, 'Ernser', 'Alexandro', 176, 'M'),
(16, 'Bernhard', 'Aleen', 194, 'F'),
(17, 'Stoltenberg', 'Andres', 176, 'F'),
(18, 'Predovic', 'Susie', 210, 'F'),
(19, 'Hirthe', 'Bradley', 179, 'F'),
(20, 'Okuneva', 'Carroll', 184, 'F'),
(21, 'Johnson', 'Eleonore', 181, 'F'),
(22, 'Champlin', 'Jolie', 121, 'M'),
(23, 'Reynolds', 'Uriel', 124, 'M'),
(24, 'Hermann', 'Santina', 187, 'F'),
(25, 'Kassulke', 'Augustine', 196, 'F'),
(26, 'Harvey', 'Carolyn', 127, 'F'),
(27, 'Kohler', 'Edyth', 186, 'M'),
(28, 'Kulas', 'Imogene', 187, 'F'),
(29, 'Dooley', 'Korey', 188, 'M'),
(30, 'Wintheiser', 'Aubrey', 139, 'M'),
(31, 'Torphy', 'Jerel', 171, 'F'),
(32, 'Stamm', 'Jany', 176, 'M'),
(33, 'Kuhlman', 'Laila', 194, 'F'),
(34, 'Orn', 'Chadd', 156, 'F'),
(35, 'Gusikowski', 'Bernadette', 135, 'F'),
(36, 'Jacobson', 'Ephraim', 148, 'M'),
(37, 'Bradtke', 'Reta', 133, 'F'),
(38, 'Muller', 'Lavon', 201, 'F'),
(39, 'Turner', 'Lilla', 166, 'M'),
(40, 'Emard', 'Annabell', 190, 'M'),
(41, 'Pollich', 'Kitty', 191, 'F'),
(42, 'Bednar', 'Elyse', 124, 'F'),
(43, 'Rodriguez', 'Estefania', 210, 'F'),
(44, 'Hane', 'Estefania', 191, 'M'),
(45, 'Greenfelder', 'Bernice', 175, 'M'),
(46, 'Heaney', 'Golden', 135, 'M'),
(47, 'Champlin', 'Lionel', 186, 'M'),
(48, 'Dare', 'Jadon', 124, 'M'),
(49, 'Ortiz', 'Jaylon', 138, 'M'),
(50, 'Emmerich', 'Leanna', 191, 'M'),
(51, 'Hagenes', 'Isadore', 172, 'M'),
(52, 'Funk', 'Nathanael', 194, 'M'),
(53, 'Kessler', 'Madyson', 171, 'F'),
(54, 'Davis', 'Kaylah', 197, 'M'),
(55, 'Bradtke', 'General', 136, 'F'),
(56, 'Koss', 'Ruby', 166, 'F'),
(57, 'Schaefer', 'Lamont', 172, 'M'),
(58, 'Kuhlman', 'Gracie', 194, 'M'),
(59, 'O\'Connell', 'Tyra', 201, 'F'),
(60, 'Boehm', 'Domenico', 144, 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
