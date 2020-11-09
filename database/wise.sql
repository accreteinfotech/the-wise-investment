-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 10:59 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_alias` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_writer` varchar(255) DEFAULT NULL,
  `blog_date` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_thumb_image` text DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `blog_short_desc` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `blog_big_image` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_alias`, `blog_name`, `blog_description`, `blog_writer`, `blog_date`, `blog_thumb_image`, `blog_title`, `meta_description`, `blog_short_desc`, `meta_keyword`, `blog_big_image`, `is_active`) VALUES
(43, 'Tips', 'Tips for having a good relationship at work.', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'John Doe', '2020-11-03 21:43:05', 'blog_thumb_image43.jpg', 'Tips for having a good relationship at work.', '', 'Tips for having a good relationship at work.', '', 'blog_big_image43.jpg', 1),
(46, 'Data', 'Data scientists are a booming profession.', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'John Doe', '2020-11-04 15:21:35', 'blog_thumb_image46.jpg', 'Data scientists are a booming profession.', '', 'Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris curabitur dictum pharetra.', '', 'blog_big_image46.jpg', 1);

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

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`featured_id`, `featured_name`, `featured_logo`) VALUES
(1, 'WordPress', 'featured_logo1.png'),
(2, 'Magento', 'featured_logo2.png'),
(3, 'Sass', 'featured_logo3.png'),
(4, 'Pingdom', 'featured_logo4.png'),
(5, 'less', 'featured_logo5.png'),
(6, 'jQuery', 'featured_logo6.png');

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

--
-- Dumping data for table `lets_talk`
--

INSERT INTO `lets_talk` (`lets_talk_id`, `lets_talk_email`, `lets_talk_name`, `lets_talk_phono`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

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

--
-- Dumping data for table `page_seo`
--

INSERT INTO `page_seo` (`page_seo_id`, `page_seo_name`, `page_seo_url`, `page_seo_title`, `page_seo_description`, `page_seo_keywords`, `page_seo_author`, `page_seo_og_title`, `page_seo_og_description`, `page_seo_og_url`) VALUES
(5, 'Home\r\n', 'index.php', 'Home', '', '', '', '', '', ''),
(11, 'About', 'about.php', 'About', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Blog', 'blog.php', 'Blog', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Contact-Us', 'contact.php', 'Contact-Us', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Why Invest', 'why-invest.php', 'Why Invest', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Subscription', 'subscription.php', 'Subscription', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'FAQ', 'faq.php', 'FAQ', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Login-Register', 'login.php', 'Login-Register', NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `picks`
--

INSERT INTO `picks` (`picks_id`, `picks_name`, `picks_description`, `picks_website`, `picks_image`) VALUES
(4, 'PRPO', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'http://accreteit.com/', 'picks_image4.png'),
(5, 'PRPO', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'picks_image5.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_description` text NOT NULL,
  `review_image` text DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_image` text DEFAULT NULL,
  `testimonial_img` text DEFAULT NULL,
  `testimonial_msg` text NOT NULL,
  `testimonial_delete` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `client_name`, `client_image`, `testimonial_img`, `testimonial_msg`, `testimonial_delete`) VALUES
(27, 'Adams Baker', 'client_image27.jpg', NULL, '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">My website looks amazing with the Leverage Theme.</font></font></p>\r\n', 0),
(28, 'Mary Evans', 'client_image28.jpg', NULL, '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">This company created an exclusive form. </font><font style=\"vertical-align: inherit;\">Fan-tas-tic.</font></font></p>\r\n', 0),
(29, 'Sarah Lopez', 'client_image29.jpg', NULL, '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">I&#39;m loving the partnership. </font><font style=\"vertical-align: inherit;\">The support deserves 5 stars.</font></font></p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_dob` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full_name`, `user_email`, `user_password`, `user_dob`, `is_active`) VALUES
(48, 'khyati unadkat', 'khyati.unadkat1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-11-05', 1),
(49, 'Harsh Fruitwala', 'harsh.fruitwala6579@gmail.com', '2c75d586979d79eaa302baf86fc14611', '1999-05-19', 1);

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
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`featured_id`);

--
-- Indexes for table `lets_talk`
--
ALTER TABLE `lets_talk`
  ADD PRIMARY KEY (`lets_talk_id`);

--
-- Indexes for table `page_seo`
--
ALTER TABLE `page_seo`
  ADD PRIMARY KEY (`page_seo_id`);

--
-- Indexes for table `picks`
--
ALTER TABLE `picks`
  ADD PRIMARY KEY (`picks_id`);

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
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `featured_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lets_talk`
--
ALTER TABLE `lets_talk`
  MODIFY `lets_talk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_seo`
--
ALTER TABLE `page_seo`
  MODIFY `page_seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `picks`
--
ALTER TABLE `picks`
  MODIFY `picks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
