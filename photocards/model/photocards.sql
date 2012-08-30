-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2012 at 05:39 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photocards`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `subject`, `message`) VALUES
(1, 'mela_knee@hotmail.com', '', ''),
(2, 'testing1251', '', ''),
(3, 'testing1251', '', ''),
(4, 'testing1251', '', ''),
(5, 'testing1251', '', ''),
(6, 'testing1251', '', ''),
(7, 'testing1251', '', ''),
(8, 'testing1251', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photocards`
--

CREATE TABLE IF NOT EXISTS `photocards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `photocards`
--

INSERT INTO `photocards` (`id`, `title`, `description`, `fileName`) VALUES
(1, 'Red Sumac in Winter', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-2.jpg'),
(2, 'Ducks of the Grand', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-6.jpg'),
(3, 'Winter in Wellington County', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-8.jpg'),
(4, 'Blue Frost', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-9.jpg'),
(5, 'Lacy Queen', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-15.jpg'),
(6, 'Fair weather', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-21.jpg'),
(7, 'Chevy fins', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-24.jpg'),
(8, 'Chevy skies', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-26.jpg'),
(9, 'Misty fall morning', '4 x 5.25" photocard', 'PhotoCard2009v01-PQ-croppedWM-31.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
