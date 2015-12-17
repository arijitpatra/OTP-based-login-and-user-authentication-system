-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 03:18 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `otp` int(4) DEFAULT NULL,
  `expiration_date` varchar(50) DEFAULT NULL,
  `verified` varchar(5) DEFAULT 'NO',
  `registered_on` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile_number`, `password`, `otp`, `expiration_date`, `verified`, `registered_on`) VALUES
(2, 'ap', '2112424', 'gdfg', NULL, NULL, NULL, '17/12/2015'),
(3, 'fsf', '2112424344', 'asfdc', NULL, NULL, 'NO', '17/12/2015'),
(4, 'fsfdaf', '2112424334', 'fhnfd', NULL, NULL, 'NO', '17/12/2015 01:27:25pm'),
(5, 'fsfdaf', '2112424334', 'fs', NULL, NULL, 'NO', '17/12/2015 05:58:57pm'),
(6, 'arijit', '2147483647', '123145', NULL, NULL, 'NO', '17/12/2015 06:52:35pm'),
(7, 'dgg', '9477589925', 'dfg', NULL, NULL, 'NO', '17/12/2015 06:57:14pm'),
(8, 'fhbfrg', '12345', 'bgh', NULL, NULL, 'NO', '17/12/2015 06:58:29pm'),
(9, 'hello world', '24306535', 'kol', NULL, NULL, 'NO', '17/12/2015 07:44:17pm'),
(10, 'arijit patra', '1234567890', '', NULL, NULL, 'NO', '17/12/2015 07:45:02pm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
