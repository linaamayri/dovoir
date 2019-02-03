-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2019 at 07:15 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monsters`
--

-- --------------------------------------------------------

--
-- Table structure for table `monsters`
--

DROP TABLE IF EXISTS `monsters`;
CREATE TABLE IF NOT EXISTS `monsters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `strength` int(11) DEFAULT NULL,
  `life` int(11) DEFAULT NULL,
  `type` char(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `strength`, `life`, `type`) VALUES
(1, 'Domovoi', 30, 300, 'water'),
(2, 'Wendigos', 100, 450, 'earth'),
(3, 'Thunderbird', 400, 500, 'air'),
(4, 'Sirrush', 250, 1500, 'fire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
