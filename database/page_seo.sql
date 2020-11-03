-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2020 at 11:59 AM
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
-- Table structure for table `page_seo`
--

DROP TABLE IF EXISTS `page_seo`;
CREATE TABLE IF NOT EXISTS `page_seo` (
  `page_seo_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_seo_name` varchar(255) DEFAULT NULL,
  `page_seo_url` varchar(255) DEFAULT NULL,
  `page_seo_title` text DEFAULT NULL,
  `page_seo_description` text DEFAULT NULL,
  `page_seo_keywords` text DEFAULT NULL,
  `page_seo_author` text DEFAULT NULL,
  `page_seo_og_title` text DEFAULT NULL,
  `page_seo_og_description` text DEFAULT NULL,
  `page_seo_og_url` text DEFAULT NULL,
  PRIMARY KEY (`page_seo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_seo`
--

INSERT INTO `page_seo` (`page_seo_id`, `page_seo_name`, `page_seo_url`, `page_seo_title`, `page_seo_description`, `page_seo_keywords`, `page_seo_author`, `page_seo_og_title`, `page_seo_og_description`, `page_seo_og_url`) VALUES
(25, 'Home', 'index.php', 'Home', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Subscription', 'subscription.php', 'Subscription', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'why-Invset', 'why-invest.php', 'why-Invset', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Affiliations', 'affiliations.php', 'Affiliations', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'About-us', 'about.php', 'About-us', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Blog-Detail', 'blog-detail.php', 'Blog-Detail', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Contact', 'contact.php', 'Contact', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Faq', 'faq.php', 'Faq', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Blog', 'blog.php', 'Blog', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
