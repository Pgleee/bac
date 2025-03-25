-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 12:55 AM
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
-- Database: `bdbac2`
--

-- --------------------------------------------------------

--
-- Table structure for table `affectation`
--

CREATE TABLE `affectation` (
  `idMem` int(11) NOT NULL,
  `idPar` int(11) NOT NULL,
  `datedeb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jardin`
--

CREATE TABLE `jardin` (
  `idJar` varchar(2) NOT NULL,
  `nomJar` varchar(50) NOT NULL,
  `addresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jardin`
--

INSERT INTO `jardin` (`idJar`, `nomJar`, `addresse`) VALUES
('j1', 'residence de pins', 'cite de pins'),
('r3', 'eden de roses', 'rue des matryse');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `idMem` int(8) NOT NULL,
  `nommem` varchar(50) NOT NULL,
  `genre` char(30) NOT NULL,
  `datenais` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parcelle`
--

CREATE TABLE `parcelle` (
  `idPar` int(11) NOT NULL,
  `numPar` int(11) NOT NULL,
  `idJar` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcelle`
--

INSERT INTO `parcelle` (`idPar`, `numPar`, `idJar`) VALUES
(1, 1, 'j1'),
(2, 2, 'j1'),
(3, 3, 'j1'),
(4, 4, 'j1'),
(5, 1, 'r3'),
(6, 2, 'r3'),
(7, 3, 'r3'),
(8, 4, 'r3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affectation`
--
ALTER TABLE `affectation`
  ADD UNIQUE KEY `idMem` (`idMem`),
  ADD UNIQUE KEY `idPar` (`idPar`);

--
-- Indexes for table `jardin`
--
ALTER TABLE `jardin`
  ADD PRIMARY KEY (`idJar`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idMem`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `parcelle`
--
ALTER TABLE `parcelle`
  ADD PRIMARY KEY (`idPar`),
  ADD KEY `idJar` (`idJar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membre`
--
ALTER TABLE `membre`
  MODIFY `idMem` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcelle`
--
ALTER TABLE `parcelle`
  MODIFY `idPar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `affectation_ibfk_1` FOREIGN KEY (`idMem`) REFERENCES `membre` (`idMem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `affectation_ibfk_2` FOREIGN KEY (`idPar`) REFERENCES `parcelle` (`idPar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parcelle`
--
ALTER TABLE `parcelle`
  ADD CONSTRAINT `parcelle_ibfk_1` FOREIGN KEY (`idJar`) REFERENCES `jardin` (`idJar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
