-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 06:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hmwk2147`
--

-- --------------------------------------------------------

--
-- Table structure for table `dd_customers`
--

CREATE TABLE IF NOT EXISTS `dd_customers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pword` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alt_phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `apt_suite_floor` varchar(10) DEFAULT NULL,
  `complex_name` varchar(30) DEFAULT NULL,
  `cross_street` varchar(30) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `promotions` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dd_customers`
--

INSERT INTO `dd_customers` (`id`, `uname`, `f_name`, `l_name`, `email`, `pword`, `phone`, `alt_phone`, `address`, `apt_suite_floor`, `complex_name`, `cross_street`, `city`, `state`, `zip`, `promotions`) VALUES
(1, 'japarra4', 'Jordan', 'Parra', 'japarra4@asu.edu', 'cis425', '9283887003', '9284461500', '2040 S. Rural Rd.', 'Unit D', 'Joshua Square', 'Broadway/Rural Rd.', 'Tempe', 'AZ', '', NULL),
(9, 'deande', 'Dennis', 'Anderson', 'dennis.anderson@asu.edu', 'redbull', '4805926541', '', '652 Sparky St.', '', '', '', 'Tempe', 'AZ', '', NULL),
(10, 'Dummy1', 'Dummy', 'One', 'dummy1@asu.edu', 'asdfasdf', '6549874562', '1564561565', '985 Nowhere Blvd.', '25-D', 'Gateway Square', '', 'Tempe', 'AR', '', NULL),
(11, 'Dummy2', 'Dummy', 'Two', 'dummy2@asdf.com', 'lkjhlkjh', '6516511565', '1566511489', '651 Rural Rd.', '', '', 'Rural/Southern', 'Tempe', 'ME', '', NULL),
(12, 'Dummy3', 'Dummy', 'Three', 'dummy3@asdf.com', 'ururur', '4562345543', '2345345645', '9458 McClintock Dr.', 'Q', 'Town Apts.', '', 'Tempe', 'NC', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
