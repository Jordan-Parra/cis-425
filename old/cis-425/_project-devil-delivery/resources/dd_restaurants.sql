-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 06:27 PM
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
-- Table structure for table `dd_restaurants`
--

CREATE TABLE IF NOT EXISTS `dd_restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `menu` varchar(100) NOT NULL DEFAULT '#',
  `image` varchar(100) NOT NULL,
  `image_alt_attribute` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dd_restaurants`
--

INSERT INTO `dd_restaurants` (`id`, `name`, `menu`, `image`, `image_alt_attribute`) VALUES
(1, 'Little Caesars', 'little-caesars/menu.php', 'http://s21.postimg.org/vys6n89zb/lc_logo.jpg', 'Little Caesars Logo'),
(2, 'Big Jimmy''s $5 Large Pizza', 'big-jimmy-s/menu.php', 'http://s11.postimg.org/ecmpi960h/bj_logo.jpg', 'Big Jimmy''s Logo'),
(3, 'Hungry Howie''s', 'hungry-howies/menu.php', 'http://s28.postimg.org/r9ddcfk8d/hh_logo.jpg', 'Hungry Howie''s Logo'),
(4, 'Gus''s New York Pizza', 'gus-s-pizza/menu.php', 'http://s4.postimg.org/5x3x571ml/gp_logo.png', 'Gus''s Pizza Logo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
