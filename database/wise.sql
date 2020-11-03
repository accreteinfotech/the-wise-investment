-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 12:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_alias` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_writer` varchar(255) DEFAULT NULL,
  `blog_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_thumb_image` text,
  `blog_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `blog_short_desc` text,
  `meta_keyword` text,
  `blog_big_image` text,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_alias`, `blog_name`, `blog_description`, `blog_writer`, `blog_date`, `blog_thumb_image`, `blog_title`, `meta_description`, `blog_short_desc`, `meta_keyword`, `blog_big_image`, `is_active`) VALUES
(40, 'Pethni', 'Kapse', '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'Harsh Fruitwala', '2020-10-22 11:22:43', 'blog_thumb_image40.jpg', 'Kapse', 'Testing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, ', 'Testing', 'blog_big_image40.jpg', 1),
(41, 'American-Crape', 'American Crape', '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'Yashraj Pindiwala', '2020-10-22 11:53:21', 'blog_thumb_image41.jpg', 'American Crape', 'Testing Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, ', 'Testing Blog', 'blog_big_image41.jpg', 1),
(42, 'Jumpsuit', 'Jumpsuit', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,courier new,monospace; font-size:12px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, </span></p>\r\n', 'Khyati Unadkat', '2020-10-31 20:24:14', 'blog_thumb_image42.jpg', 'Jumpsuit', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,                                 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,                                 ', '', 'blog_big_image42.jpg', 1);

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
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `featured_id` int(11) NOT NULL,
  `featured_name` varchar(250) NOT NULL,
  `featured_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lets_talk`
--

CREATE TABLE `lets_talk` (
  `lets_talk_id` int(11) NOT NULL,
  `lets_talk_email` text NOT NULL,
  `lets_talk_name` varchar(255) NOT NULL,
  `lets_talk_phono` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page_seo`
--

CREATE TABLE `page_seo` (
  `page_seo_id` int(11) NOT NULL,
  `page_seo_name` varchar(255) DEFAULT NULL,
  `page_seo_url` varchar(255) DEFAULT NULL,
  `page_seo_title` text,
  `page_seo_description` text,
  `page_seo_keywords` text,
  `page_seo_author` text,
  `page_seo_og_title` text,
  `page_seo_og_description` text,
  `page_seo_og_url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picks`
--

CREATE TABLE `picks` (
  `picks_id` int(11) NOT NULL,
  `picks_name` varchar(250) NOT NULL,
  `picks_description` text NOT NULL,
  `picks_website` text NOT NULL,
  `picks_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_description` text NOT NULL,
  `review_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_codes`
--

CREATE TABLE `seo_codes` (
  `seo_codes_id` int(11) NOT NULL,
  `seo_codes_name` varchar(255) DEFAULT NULL,
  `sco_codes_description` text
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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seo_codes`
--
ALTER TABLE `seo_codes`
  MODIFY `seo_codes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
