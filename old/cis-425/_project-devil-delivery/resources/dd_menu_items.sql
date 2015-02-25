-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 06:23 PM
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
-- Table structure for table `dd_menu_items`
--

CREATE TABLE IF NOT EXISTS `dd_menu_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `rest_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `rest_id` (`rest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dd_menu_items`
--

INSERT INTO `dd_menu_items` (`item_id`, `rest_id`, `name`, `description`, `price`) VALUES
(1, 1, 'Pepperoni Pizza', 'Round pizza topped with cheese and pepperoni ', 5),
(2, 2, 'Pepperoni Pizza', 'Round pizza topped with cheese and pepperoni', 5),
(3, 3, 'Pepperoni Pizza', 'Round pizza topped with cheese and pepperoni', 5),
(4, 4, 'Pepperoni Pizza', 'Round pizza topped with cheese and pepperoni ', 5),
(5, 1, 'Cheese Pizza', 'Round pizza topped with freshly shredded cheese', 5),
(6, 2, 'Cheese Pizza', 'Round pizza topped with freshly shredded cheese', 5),
(7, 3, 'Cheese Pizza', 'Round pizza topped with freshly shredded cheese', 5),
(8, 4, 'Cheese Pizza', 'Round pizza topped with freshly shredded cheese', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dd_menu_items`
--
ALTER TABLE `dd_menu_items`
  ADD CONSTRAINT `dd_menu_items_ibfk_1` FOREIGN KEY (`rest_id`) REFERENCES `dd_restaurants` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
