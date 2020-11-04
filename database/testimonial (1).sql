-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2020 at 04:25 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wise`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` text NOT NULL,
  `client_image` text DEFAULT NULL,
  `testimonial_msg` text NOT NULL,
  `testimonial_delete` int(11) DEFAULT 0,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `client_name`, `client_image`, `testimonial_msg`, `testimonial_delete`) VALUES
(1, 'yash', NULL, 'heyyyy', 1),
(2, 'dinal', NULL, 'heyyyy', 1),
(3, 'sdgs', NULL, 'heyyyy', 1),
(4, 'yash', NULL, 'heyyyy', 1),
(5, 'dinal', NULL, 'heyyyy', 1),
(6, 'bhavika', NULL, 'hello', 1),
(7, 'krunal', NULL, 'hey', 1),
(8, 'yash', NULL, 'heyyyy', 1),
(9, 'Yashraj', 'client_image9.jpg', 'heyyyy', 0),
(10, 'Bhavika', 'client_image.jpg', 'hell', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
