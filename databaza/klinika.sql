-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 06:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinika`
--

-- --------------------------------------------------------

--
-- Table structure for table `pacientat`
--

CREATE TABLE `pacientat` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pacientat`
--

INSERT INTO `pacientat` (`ID`, `Name`, `Surname`, `Email`) VALUES
(0, 'Erion', 'Azemi', 'eri@gmail.com'),
(0, 'Eriona', 'Azemii', 'erii@gmail.com'),
(0, 'hasan', 'hysa', 'hysa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `terminet`
--

CREATE TABLE `terminet` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Data` varchar(255) NOT NULL,
  `Orari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terminet`
--

INSERT INTO `terminet` (`ID`, `Name`, `Surname`, `Email`, `Data`, `Orari`) VALUES
(56, 'eri', 'berisha', 'be@gmail.com', '01/03/2025', '13:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
