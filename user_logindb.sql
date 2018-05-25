-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 02:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`, `mobile`, `designation`, `image`) VALUES
(23, 'amanami00', 'Aman', 'Singh', 'amiam8090an@gmail.com', '123456', 'male', '7503402287', 'manager', 'a.jpg'),
(24, 'aman.singh', 'Aman', 'Singh', 'aman.singh@sts.in', 'amanami00', 'male', '', 'manager', 'a.jpg'),
(25, 'abhay.rinku90', 'Aman', 'Singh', 'Siddharth.Kothari@sts.in', '123456', 'male', '', 'manager', 'Lighthouse.jpg'),
(27, 'abraim.alina', 'Alina', 'Abraim', 'alian109ab@zorpia.com', '123456', 'female', '23578904543', 'manager', 'a.jpg'),
(28, 'maurya.rajendra', 'Rajendra', 'Maurya', 'maurya.rajendra@gmail.com', '123456', 'male', '1234567890', 'manager', 'Koala.jpg'),
(29, 'singh.siddharth', 'Siddharth', 'singh', 'singh.siddharth@rediffmail.com', 'amanami00', 'male', '8090400781', 'manager', 'Koala.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
