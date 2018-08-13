-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 07:52 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `title`, `description`, `file_name`) VALUES
(4, 'What is AMDA ?', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">The Association of Medical Doctors of Asia (AMDA) is a humanitarian, non-profit, non-political, non-sectarian, and non-governmental organization formally established in 1984. AMDA\'s headquarters is in Okayama City, Japan, and it has thirty chapters as partners worldwide. It\'s vision is global peace and development, and it\'s mission is to promote the health and well-being of underprivileged and marginalized people in Asia and other continents. These principles are embodied in its slogan \"Better Quality of Life for a Better Future\". AMDA views itself as an active network, which builds respect and trust through partnerships in humanitarian activities. Throughout its existence, AMDA has made earnest efforts in pursuing and achieving its aims and objectives. AMDA recognizes three main obstacles to improving the quality of life of underprivileged and marginalized people — war, natural disaster, and poverty — and AMDA projects seek to overcome these obstacles. In 1995, AMDA was granted Consultative Status by the United Nations Economic and Social Council (ECOSOC)</span><br></p>', '1526192299.png'),
(5, 'Vission & Mission', '<p>Vission & Mission<br></p>', '1526291486.png'),
(6, 'Organogram', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Under Constraction</span><br></p>', '1526192339.png'),
(7, 'Executive Committe', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526291510.png'),
(8, 'Management', '<div class=\"col-md-8\" style=\"margin: 0px; padding: 0px 8px; outline: none; width: 686.656px; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px;\"><h4 style=\"margin: 0px; padding: 0px; outline: none; font-family: monda; color: rgb(42, 85, 105);\">President Message:</h4><p class=\"well_p\" style=\"margin-bottom: 0px; padding: 25px 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; line-height: 18px; text-align: justify;\">Our focus is on building best-in-class products through a culture of continuous innovation. As an employer, we seek to be a workplace of choice for the best of talent, a place where their growth, empowerment and satisfaction is high priority. In turn, our employees find motivation to excel and deliver value to our customers and stakeholders. We have the strength to challenge established norms and a passion to achieve newer heights through teamwork. At CEAT, our journey towards excellence is driven through mutual respect which spurs every employee to give their best.\"</p><p class=\"well_p\" style=\"margin-bottom: 0px; padding: 25px 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; line-height: 18px; text-align: justify;\"><br></p></div>', '1526291282.png'),
(9, 'Our Branches', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526291536.png'),
(10, 'Citizen Charter', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526291550.png'),
(11, 'Notice', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526193020.png'),
(12, 'Intergrity Stragtegy', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526193084.png'),
(13, 'Plicies', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>', '1526193104.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `id` varchar(10) NOT NULL COMMENT 'PK',
  `category` varchar(255) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`id`, `category`, `album_name`, `album_cover`) VALUES
('ALB000001', 'Photo', 'Events', 'ALB000001.jpg'),
('ALB000002', 'Photo', 'News', 'ALB000002.jpg'),
('ALB000003', 'Video', 'News', 'ALB000003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `title`, `details`) VALUES
(3, 'Welcome to Association of Medical Doctors of Asia (AMDA)', '<p><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify; background-color: rgb(217, 234, 248);\">Thank you</span><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify; background-color: rgb(217, 234, 248);\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span></p><p><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify; background-color: rgb(217, 234, 248);\">Thank you</span><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify; background-color: rgb(217, 234, 248);\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify; background-color: rgb(217, 234, 248);\"><br></span><br></p>'),
(4, 'Welcome to Association of Medical Doctors of Asia (AMDA)', '<p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">Thank you</span><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span></p><p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">Thank you</span><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span></p><p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\"><br></span></p><p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">Thank you</span><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span></p><p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\"></span></p><p style=\"margin-bottom: 0px; padding: 0px; outline: none; color: rgb(255, 255, 255); font-family: Raleway, sans-serif; font-size: 14px; background-color: rgb(217, 234, 248);\"><span style=\"margin: 0px; padding: 0px 0px 0px 50px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">Thank you</span><span style=\"margin: 0px; padding: 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; text-align: justify;\">&nbsp;very much for accessing our home page. AMDA (Association of Medical Doctors of Asia) Bangladesh is celebrating its 15th Anniversary in the year 2004. Throughout its existence, AMDA Bangladesh has made earnest efforts in pursuing and achieving its aims and objectives. Many of the people in Bangladesh have been struggling with the misfortunes of disease, illiteracy, poverty and human oppression. These people continue to fight for their survival daily. They possess the potential to change their fate but they are in need of leadership and direction. This is precisely where AMDA Bangladesh can offer positive and purposeful support and can play a pivotal role in bringing out dynamic and revolutionary changes in Bangladesh.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `title`, `file_name`) VALUES
(8, 'ads', '1526106558.jpg'),
(9, 'dfg', '1526106574.jpg'),
(10, 'sddf', '1526106584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` tinyint(1) NOT NULL COMMENT 'PK',
  `company_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `headoffice` varchar(255) NOT NULL,
  `amdaoffice` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `company_name`, `mobile_no`, `phone_no`, `email`, `headoffice`, `amdaoffice`, `facebook`, `twitter`, `googleplus`, `youtube`, `logo`) VALUES
(1, 'AMDA', '01919-605040, 01919-264823', '01711819986', 'halim@wanitbd.com', 'Flat #2/B (1st Floor), House #5, Road #3,\r\nBlock-E, Banasree, Dhaka-1219\r\nTel :02-55124415\r\nMobile: 01711819986\r\nE-mail : director@amdabd.org', '3-31-1 Ifukuchou, Kitaku, Okayama City,\r\nOkayama 700-0013 Japan\r\nTel : +81-86-252-6051,\r\nFax: +81-86-252-7717', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', 'http://www.youtube.com', 'logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coreprograms`
--

CREATE TABLE `tbl_coreprograms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_coreprograms`
--

INSERT INTO `tbl_coreprograms` (`id`, `title`, `description`) VALUES
(3, 'Down Syndrome Parents Support Group of Bangladesh', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(4, 'Micro Finance Program', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(5, 'Emergency Relief and Rehabilitation Activities', '<p class=\"well_p\" style=\"margin-bottom: 0px; padding: 25px 0px; outline: none; color: rgb(61, 61, 61); font-family: monda; font-size: 14px; line-height: 18px; text-align: justify;\">This program is implemented by AMDA in case of natural calamities (flood, cyclone, etc.). Since 1992 it has carried out 10 relief and rehabilitation operations throughout the country. In 2007 it has also carried out emergency medical relief activities for the Sid\'r victims in Patuakhali and Barguna. This activity is totally depend on the donation receive form the respective donors to support the emergency situation.</p><h4 style=\"margin: 0px; padding: 0px; outline: none; font-family: monda; color: rgb(42, 85, 105);\">Emergency &amp; Post Emergency Activities</h4><ul class=\"well_p\" style=\"margin-bottom: 0px; margin-left: 0px; padding-top: 25px; padding-bottom: 25px; outline: none; color: rgb(61, 61, 61); font-family: monda; font-size: 14px; line-height: 18px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; outline: none;\">Humanitarian activities toward Myanmar Refugees, 1992</li><li style=\"margin: 0px; padding: 0px; outline: none;\">Emergency medical aids for Tornado victims in Tangail and Jamalpur, 1996</li><li style=\"margin: 0px; padding: 0px; outline: none;\">AMDA Bangladesh Emergency Respond Team Formation, 1997</li><li style=\"margin: 0px; padding: 0px; outline: none;\">Emergency Rehabilitation for Cyclone victims in Chittagong, 1997</li><li style=\"margin: 0px; padding: 0px; outline: none;\">Emergency &amp; Post Emergency Rehabilitation for flood victims in Gazaria, Munshigonj, 1998</li><li style=\"margin: 0px; padding: 0px; outline: none;\">Emergency Medical Relief for the Cyclone Victims in Mirzagonj, Patuakhali, 2007</li><li style=\"margin: 0px; padding: 0px; outline: none;\">Emergency Medical Relief for the Cyclone Aila in Barguna, 2009.</li></ul>'),
(6, 'Low Cost Health Care Service', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(7, 'Skill Training and Employment Promotion', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction</span><br></p>'),
(8, 'Non Formal Education for Sustainable Development', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(9, 'School Development Program', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(10, 'Nursery', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(11, 'Computer Training', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` varchar(10) NOT NULL COMMENT 'PK',
  `album_id` varchar(10) NOT NULL COMMENT 'FK',
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `album_id`, `title`, `file_name`) VALUES
('GLR000001', 'ALB000001', '', '20180514102501.jpg'),
('GLR000002', 'ALB000001', '', '20180514102505.jpg'),
('GLR000003', 'ALB000001', '', '20180514102511.jpg'),
('GLR000004', 'ALB000001', '', '20180514102515.jpg'),
('GLR000005', 'ALB000002', '', '20180514102539.jpg'),
('GLR000006', 'ALB000002', '', '20180514102542.jpg'),
('GLR000007', 'ALB000002', '', '20180514102546.jpg'),
('GLR000008', 'ALB000002', '', '20180514102552.jpg'),
('GLR000011', 'ALB000003', '', 'xhiZJbPdBK0'),
('GLR000012', 'ALB000003', '', 'RSyG5HImgcY'),
('GLR000013', 'ALB000003', '', '1cGdw8AzVnM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership`
--

CREATE TABLE `tbl_membership` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_membership`
--

INSERT INTO `tbl_membership` (`id`, `title`, `description`) VALUES
(3, 'Representative Member', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction.</span><br></p>'),
(4, 'Affiliated Member', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction</span><br></p>'),
(5, 'General Member', '<p><span style=\"color: rgb(61, 61, 61); font-family: monda; font-size: 14px; text-align: justify;\">Working Under Constraction</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `published_date` date NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `published_date`, `description`, `file_name`) VALUES
(3, '2018-05-14', '<p><span style=\"color: rgb(61, 61, 61); font-family: Raleway, sans-serif; font-size: 14px; text-align: justify;\">ILO/UNDP/BMET joint project \"Skills Training and Employment Promotion for Poor Women through Strengthening of the Technical Training Centres\" Phase 3 is going to start!!</span><span style=\"color: rgb(61, 61, 61); font-family: Raleway, sans-serif; font-size: 14px; text-align: justify;\">I</span><br></p>', '1526185735.jpg'),
(4, '2018-05-13', '<p><span style=\"color: rgb(61, 61, 61); font-family: Raleway, sans-serif; font-size: 14px; text-align: justify;\">ILO/UNDP/BMET joint project \"Skills Training and Employment Promotion for Poor Women through Strengthening of the Technical Training Centres\" Phase 3 is going to start!!</span><span style=\"color: rgb(61, 61, 61); font-family: Raleway, sans-serif; font-size: 14px; text-align: justify;\">I</span><br></p>', '1526185753.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `web_link` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `web_link`, `file_name`) VALUES
(0, 'Amda', 'http://dss-bd.org/', '1526189040.png'),
(0, 'JSBF', 'http://dss-bd.org/', '1526189063.png'),
(0, 'Du', 'www.du.ac.bd', '1526189133.png'),
(0, 'df', 'www.du.ac.bd', '1526189141.png'),
(0, 'sded', 'www.du.ac.bd', '1526189146.png'),
(0, 'fg', 'www.du.ac.bd', '1526189156.png'),
(0, 'fg', 'www.du.ac.bd', '1526191279.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL COMMENT 'PK',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'Unique',
  `roles` varchar(10) NOT NULL COMMENT 'SuperAdmin, Admin, Editor',
  `username` varchar(25) NOT NULL COMMENT 'Unique',
  `encode_password` varchar(100) NOT NULL COMMENT 'My Custom Hash Password',
  `status` tinyint(1) NOT NULL COMMENT '1 for Active, 0 for Inactive',
  `last_login` datetime NOT NULL COMMENT 'Last login time',
  `last_logout` datetime NOT NULL COMMENT 'Last logout time',
  `created_at` datetime NOT NULL COMMENT 'Created time',
  `modified_at` datetime NOT NULL COMMENT 'Modified time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `roles`, `username`, `encode_password`, `status`, `last_login`, `last_logout`, `created_at`, `modified_at`) VALUES
(1, 'Mohammad Halim', 'halim@wanitbd.com', 'SuperAdmin', 'Halim', '$2y$10$u0XC9.uJlR8z3G0AxfEmeetHDJki4n2ZUTzVR8NPrMV0x1Frxpuly', 1, '2018-05-15 09:06:04', '2018-04-11 11:21:49', '2018-01-17 11:45:20', '2018-04-11 11:21:33'),
(2, 'Admin', 'admin@gmail.com', 'Admin', 'Admin', '$2y$10$H3N82we5U3D6mHLVsk8H1ujdnOyFY8ER07BVMwhwuwz5ETjrhJx2m', 1, '2018-04-11 11:21:59', '2018-04-11 11:22:13', '2018-01-17 11:59:19', '2018-01-17 15:24:36'),
(3, 'Editor', 'editor@gmail.com', 'Editor', 'Editor', '$2y$10$0Ua7SfQACDE2DYUY.pngJ.COjB.kDemKO5fcvDxKp4luGrm8dVm0q', 1, '2018-01-18 10:12:09', '2018-01-18 10:13:30', '2018-01-18 10:04:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coreprograms`
--
ALTER TABLE `tbl_coreprograms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership`
--
ALTER TABLE `tbl_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_coreprograms`
--
ALTER TABLE `tbl_coreprograms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_membership`
--
ALTER TABLE `tbl_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
