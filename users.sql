-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 11:47 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

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
(10, 'arijit patra', '1234567890', '', NULL, NULL, 'NO', '17/12/2015 07:45:02pm'),
(11, 'arijit patra', '1234567890', '', NULL, NULL, 'NO', '17/12/2015 09:00:53pm'),
(12, 'arijit p', '1111111111', '000', 7343, '1450372989', 'NO', '17/12/2015 10:48:09pm'),
(13, 'arijit p2', '1111111112', 'aa', 5060, '1450373157', 'NO', '17/12/2015 10:50:57pm'),
(14, 'arijit p3', '1111111113', '', 7194, '1450373213', 'NO', '17/12/2015 10:51:53pm'),
(15, 'gsg', '436346', 'fdh', 9238, '1450375636', 'NO', '17/12/2015 11:32:16pm'),
(16, 'gsfas', '436346', 'asda', 6915, '1450375693', 'NO', '17/12/2015 11:33:13pm'),
(17, 'gsfassd', '436346', '', 9355, '1450375821', 'NO', '17/12/2015 11:35:21pm'),
(18, 'gsfassd', '436346sfa', '', 8125, '1450375861', 'NO', '17/12/2015 11:36:01pm'),
(19, 'vcb', '258', 'dsa', 1942, '1450463100', 'NO', '18/12/2015 11:50:00pm'),
(20, 'hcl', '456', 'tcs', 9470, '1450463862', 'NO', '19/12/2015 12:02:42am'),
(21, 'tata', '2000', 'nano', 5088, '1450463947', 'NO', '19/12/2015 12:04:07am'),
(22, 'price', '111', 'baba', 3958, '1450464377', 'NO', '19/12/2015 12:11:17am'),
(23, 'idea', '9088', 'asd', 2879, '1450464700', 'YES', '19/12/2015 12:16:40am'),
(24, 'heyyyy', '999', 'lol', 2937, '1450465130', 'NO', '19/12/2015 12:23:50am'),
(25, 'fella', '420', 'aaa', 4155, '1450465201', 'YES', '19/12/2015 12:25:01am'),
(26, 'game', '9874561230', 'jhgh', 7033, '1450465534', 'NO', '19/12/2015 12:30:34am'),
(27, 'ggigigiuguubnu', '75567576', 'huho', 2282, '1450465572', 'YES', '19/12/2015 12:31:12am'),
(28, 'hgjdghkm', '588657', 'hjm', 3556, '1450469766', 'YES', '19/12/2015 01:41:06am'),
(29, 'test1', '789456', 'testpass', 9316, '1450472473', 'YES', '19/12/2015 02:26:13am'),
(30, 'test2', '102030', 'testpass', 8412, '1450472925', 'NO', '19/12/2015 02:33:45am'),
(31, 'test3', '9477589925', 'sd', 8902, '1450473008', 'YES', '19/12/2015 02:35:08am'),
(32, 'intelligent', '333', '44dsd', 8126, '1450476419', 'YES', '19/12/2015 03:31:59am'),
(33, 'hi5', '555', 'h5', 9721, '1450476594', 'YES', '19/12/2015 03:34:54am'),
(34, 'five min', '000', 'f5', 5450, '1450476695', 'NO', '19/12/2015 03:36:35am'),
(35, 'someone', '159', 'one', 4104, '1450476794', 'YES', '19/12/2015 03:38:14am'),
(36, 'taxi number', '9211', 'film', 4543, '1450477395', 'YES', '19/12/2015 03:48:15am'),
(37, 'taxi number', '9211', 'ss', 9356, '1450478415', 'NO', '19/12/2015 04:05:15am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
