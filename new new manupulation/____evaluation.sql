-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 05:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `⦁	evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprenant`
--

CREATE TABLE `apprenant` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apprenant`
--

INSERT INTO `apprenant` (`cin`, `nom`, `prenom`, `mail`) VALUES
('', '', '', ''),
('00991111', 'aloui', 'mayssa', 'mayssaaloui@gmail.com'),
('11112222', 'habib', 'mohamed', 'mohamedhabib@edunet.tn'),
('11113333', 'keskes', 'meriem', 'meriemkeskes@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `idcours` varchar(4) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `duree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`idcours`, `libelle`, `duree`) VALUES
('html', 'le langage html', 10),
('js', 'le langague javascript', 12),
('sql', 'la manupulation d\'un base de donne', 20),
('strc', 'les structure de contoles', 30);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `cin` varchar(8) NOT NULL,
  `idcours` varchar(4) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idcours`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `idcours` (`idcours`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`cin`) REFERENCES `apprenant` (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
