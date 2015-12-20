-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2015 at 11:22 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile_number`, `password`, `otp`, `expiration_date`, `verified`, `registered_on`) VALUES
(1, 'Arijit Patra', '9477589925', 'lol', 9822, '1450511204', 'YES', '19/12/2015 01:11:44pm'),
(2, 'perfect number', '9874563210', '123', 7767, '1450511343', 'NO', '19/12/2015 01:14:03pm'),
(40, 'num one', '8974258689', 'xyz', 7660, '1450606103', 'YES', '20/12/2015 03:33:23pm'),
(41, 'hello mobile', '7589631426', 'asd', 8489, '1450606173', 'NO', '20/12/2015 03:34:33pm'),
(42, 'Xyz Abc', '9632587410', 'abcxyz', 1551, '1450606226', 'YES', '20/12/2015 03:35:26pm'),
(43, 'Cell One', '9494949494', 'bsnl', 1726, '1450606751', 'NO', '20/12/2015 03:44:11pm'),
(44, 'Vodafone Network', '9830012345', 'voda', 9175, '1450606916', 'YES', '20/12/2015 03:46:56pm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
