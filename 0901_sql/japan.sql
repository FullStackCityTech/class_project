%search phrase%
mmmm nap oooo 
8888nap00000 jjjj kkkk 


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 02, 2022 at 12:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `population`
--

-- --------------------------------------------------------

--
-- Table structure for table `japan`
--

CREATE TABLE `japan` (
  `city` varchar(100) NOT NULL,
  `population` int(10) NOT NULL,
  `gdp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `japan`
--

INSERT INTO `japan` (`city`, `population`, `gdp`) VALUES
('Osaka', 2753862, 0),
('Sapporo', 0, 4),
('Tokyo', 8336599, 8.66667),
('Yokohama', 3574442, 3.57444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `japan`
--
ALTER TABLE `japan`
  ADD UNIQUE KEY `city` (`city`),
  ADD UNIQUE KEY `city_2` (`city`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
