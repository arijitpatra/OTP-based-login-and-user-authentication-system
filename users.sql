-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2015 at 07:35 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile_number`, `password`, `otp`, `expiration_date`, `verified`, `registered_on`) VALUES
(1, 'Arijit Patra', '9477589925', 'lol', 9822, '1450511204', 'YES', '19/12/2015 01:11:44pm'),
(2, 'perfect number', '9874563210', '123', 7767, '1450511343', 'NO', '19/12/2015 01:14:03pm'),
(3, 'vodafone', '9830012345', 'vodA', 8033, '1450511716', 'YES', '19/12/2015 01:20:16pm'),
(4, 'someone', '1478523690', 'iii', 4781, '1450584362', 'NO', '20/12/2015 09:31:02am'),
(5, 'dswdffasf', '9685852293', 'qwe', 3858, '1450585406', 'NO', '20/12/2015 09:48:26am'),
(6, 'sdsa', '6524444444', 'a', 2027, '1450585459', 'NO', '20/12/2015 09:49:19am'),
(7, 'apap', '8888888888', '201', 7929, '1450585852', 'NO', '20/12/2015 09:55:52am'),
(8, 'seven', '7777777777', 'iam', 2968, '1450586240', 'YES', '20/12/2015 10:02:20am'),
(9, 'binary', '0101010101', 'bin', 6315, '1450586347', 'NO', '20/12/2015 10:04:07am'),
(10, 'three', '3333333333', '3', 6829, '1450586715', 'NO', '20/12/2015 10:10:15am'),
(11, 'two', '2222222222', '2', 7649, '1450587901', 'YES', '20/12/2015 10:30:01am'),
(12, 'five', '5555555555', '5', 8717, '1450587957', 'YES', '20/12/2015 10:30:57am'),
(13, 'six', '6666666666', '6', 4929, '1450587991', 'NO', '20/12/2015 10:31:31am'),
(14, 'to', '2020202020', 'to', 6718, '1450588165', 'YES', '20/12/2015 10:34:25am'),
(15, 'hsjsjsj', '6793838383', 'klsjsls', 5569, '1450588235', 'NO', '20/12/2015 10:35:35am'),
(16, '', '6793838383', '', 2534, '1450588259', 'NO', '20/12/2015 10:35:59am'),
(17, 'hsjsj', '9282729202', 'dddxx', 6232, '1450588291', 'NO', '20/12/2015 10:36:31am'),
(18, 'ed', '3696385523', '8', 8547, '1450588752', 'NO', '20/12/2015 10:44:12am'),
(19, 'tf', '2525252525', '25', 9047, '1450589564', 'NO', '20/12/2015 10:57:44am'),
(20, 'eqer', '9442987489', 'f', 2467, '1450590794', 'NO', '20/12/2015 11:18:14am'),
(21, 'ijhbihbjb', '2214141444', 'ff', 9568, '1450591472', 'NO', '20/12/2015 11:29:32am'),
(22, 'hbdgb', '3658376398', 'h', 9054, '1450591506', 'NO', '20/12/2015 11:30:06am'),
(23, 'hfx', '3454637757', 'b', 5874, '1450592757', 'NO', '20/12/2015 11:50:57am'),
(24, 'bn', '8568595567', 'u', 9746, '1450592836', 'NO', '20/12/2015 11:52:16am'),
(25, 'decimal', '0123456789', 'a2', 6722, '1450593412', 'YES', '20/12/2015 12:01:52pm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
