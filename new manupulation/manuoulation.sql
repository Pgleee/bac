-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 06:55 PM
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
-- Database: `manuoulation`
--

-- --------------------------------------------------------

--
-- Table structure for table `colis`
--

CREATE TABLE `colis` (
  `idcolis` int(20) NOT NULL,
  `datecolis` date NOT NULL,
  `nomdest` varchar(100) NOT NULL,
  `adrdest` varchar(100) NOT NULL,
  `codepostal` int(20) NOT NULL,
  `fragile` char(1) NOT NULL,
  `etat` int(20) NOT NULL,
  `cinexp` varchar(8) NOT NULL,
  `idtrans` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expediteur`
--

CREATE TABLE `expediteur` (
  `cinexp` varchar(8) NOT NULL,
  `nomexp` varchar(100) NOT NULL,
  `teleexp` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transporteur`
--

CREATE TABLE `transporteur` (
  `idtrans` varchar(5) NOT NULL,
  `nomtrans` varchar(100) NOT NULL,
  `teltrans` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colis`
--
ALTER TABLE `colis`
  ADD PRIMARY KEY (`idcolis`),
  ADD KEY `cinexp` (`cinexp`),
  ADD KEY `idtrans` (`idtrans`);

--
-- Indexes for table `expediteur`
--
ALTER TABLE `expediteur`
  ADD PRIMARY KEY (`cinexp`);

--
-- Indexes for table `transporteur`
--
ALTER TABLE `transporteur`
  ADD PRIMARY KEY (`idtrans`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colis`
--
ALTER TABLE `colis`
  MODIFY `idcolis` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colis`
--
ALTER TABLE `colis`
  ADD CONSTRAINT `colis_ibfk_1` FOREIGN KEY (`idtrans`) REFERENCES `transporteur` (`idtrans`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `colis_ibfk_2` FOREIGN KEY (`cinexp`) REFERENCES `expediteur` (`cinexp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
