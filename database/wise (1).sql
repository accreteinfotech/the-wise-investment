-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 12:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'admin', 'Kem_6o??', 'roshan.u.desai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cphone` varchar(50) NOT NULL,
  `csubject` varchar(50) NOT NULL,
  `cmessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `page_seo`
--

CREATE TABLE `page_seo` (
  `page_seo_id` int(11) NOT NULL,
  `page_seo_name` varchar(255) DEFAULT NULL,
  `page_seo_url` varchar(255) DEFAULT NULL,
  `page_seo_title` text DEFAULT NULL,
  `page_seo_description` text DEFAULT NULL,
  `page_seo_keywords` text DEFAULT NULL,
  `page_seo_author` text DEFAULT NULL,
  `page_seo_og_title` text DEFAULT NULL,
  `page_seo_og_description` text DEFAULT NULL,
  `page_seo_og_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_codes`
--

CREATE TABLE `seo_codes` (
  `seo_codes_id` int(11) NOT NULL,
  `seo_codes_name` varchar(255) DEFAULT NULL,
  `sco_codes_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_codes`
--

INSERT INTO `seo_codes` (`seo_codes_id`, `seo_codes_name`, `sco_codes_description`) VALUES
(1, 'google_analytics', NULL),
(2, 'facebook_pixel', NULL),
(3, 'Tag_manager', NULL),
(4, 'search_consol', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_seo`
--
ALTER TABLE `page_seo`
  ADD PRIMARY KEY (`page_seo_id`);

--
-- Indexes for table `seo_codes`
--
ALTER TABLE `seo_codes`
  ADD PRIMARY KEY (`seo_codes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_seo`
--
ALTER TABLE `page_seo`
  MODIFY `page_seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seo_codes`
--
ALTER TABLE `seo_codes`
  MODIFY `seo_codes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
