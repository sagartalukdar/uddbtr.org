-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 08:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udd_newest`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `head`, `description`, `image`, `date_uploaded`) VALUES
(33, 'URBAN DEVELOPMENT DEPARTMENT', '<p>The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C. The other functions including administering the provisions of the Assam Town &amp; Country Planning Act, 1958 by way of publishing the Master Plan of each and enforcement of building by-laws as per Assam Notified Urban Areas Building Rules (other than Guwahati) 2014 in every urban areas of BTR.</p><p>The Urban Development Department (UDD) was established vide Govt. Notification No. AR. 17/2002/33 on the 9th of June 2002 after amalgamating the erstwhile departments of Municipal Administration and Town &amp; Country Planning. There are four (4) Directorates/Boards under Urban Development Department viz. Directorate of Municipal Administration, Directorate of Town &amp; Country Planning, Assam Urban Water &amp; Sewage Board and Assam State Housing Board. These Offices look after the affairs of urban local bodies of the state other than Guwahati Municipal Corporation. The main function of the Urban Development Department is coordination between the urban local bodies of the state and discahrging the statutory ressponsibilities under the provisions of the Assam Municipal Act 1956.The other functions include administering the provisions of the Assam Town &amp; Country Planning Act 1958 by way of publishing the Master Plan of each and every urban area of the state. Schemes for development of the urban local bodies are sanctioned by the Department, sponsored to Government of India wherever necessary.</p>', 'img/about/e1699bd44654ae67c65a1367a1d3dfd2udd-office.jpeg', '2024-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_scrolling_imges`
--

CREATE TABLE `bottom_scrolling_imges` (
  `id` int(50) NOT NULL,
  `image` varchar(195) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bottom_scrolling_imges`
--

INSERT INTO `bottom_scrolling_imges` (`id`, `image`) VALUES
(44, 'img/bottom-scrolling-images/eee986b1b3685a2c387acfb07c245c74assam-Copy.jpeg'),
(45, 'img/bottom-scrolling-images/eee986b1b3685a2c387acfb07c245c74download.png'),
(46, 'img/bottom-scrolling-images/eee986b1b3685a2c387acfb07c245c74f2.png'),
(47, 'img/bottom-scrolling-images/eee986b1b3685a2c387acfb07c245c74G20_India_LogoforUSP.png'),
(48, 'img/bottom-scrolling-images/eee986b1b3685a2c387acfb07c245c74udd-logo-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `chd_message`
--

CREATE TABLE `chd_message` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chd_message`
--

INSERT INTO `chd_message` (`id`, `name`, `message`, `image`) VALUES
(4, 'Sri Lankeswar Owarie', '<p>Bodoland Territorial Region (BTR) is an autonomous region within the state of Assam with the total population of 31,55,395 residing in 8970 sq km area. Like any other part of our great country, urbanization is posing problems in BTR as well. Currently urban population of BTR is 1,50,530 (04.77% of the total population) and IS still increasing. The Region currently has 09 (nine) Municipal Boards <strong>(Kokrajhar, Fakiragram, Gossaigaon, Basugaon, Kajalgaon, Bijni, Goreswar, Tangla and Udalguri)</strong> and 01(one) Development Authority (Kokrajhar) to provide qualitative municipal services in Urban Areas.</p><p>&nbsp;</p><p>&nbsp;The urban Development Department of Bodoland Territorial Council (BTC), in close partnership with ULBs is striving to find innovative and advanced technological solutions to urban problems of the region like; integrated urban transport, Sanitation, Solid Waste Management, Urban Infrastructure, Urban Housing, Urban Planning, Financial Sustainability of ULBs and general Urban Governance. The task is gigantic; but the Department find it to be achievable through the active community involvement and hard work and sincere efforts of all officers and employees of the department. Visitors of this website are humbly requested to give their valuable suggestions and feed back to assist the Department of Urban Development in its \"pursuit of excellence.\"</p>', 'img/chdMessage/c0c130681db89265bea67f1b15dca0d0chd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_grievance`
--

CREATE TABLE `citizen_grievance` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mb` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `message_date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citizen_grievance`
--

INSERT INTO `citizen_grievance` (`id`, `email`, `mb`, `subject`, `message`, `message_date`, `status`) VALUES
(40, 'email@gmail.com', 'Goreswar MB', 'Grievance', 'dfbf', '2024-09-07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_mail`
--

CREATE TABLE `contact_mail` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_dignities`
--

CREATE TABLE `department_dignities` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department_dignities`
--

INSERT INTO `department_dignities` (`id`, `name`, `designation`) VALUES
(3, 'Sri. Santanu Das', 'Assistant Director, Town and Country Planning, Udalguri'),
(4, 'Smt. Trishna Gogoi', 'Assistant Director, Town and Country Planning, Baksa'),
(5, 'Sri. Neepjyoti Das', 'Assistant Director, Town and Country Planning, Chirang'),
(6, 'Sri. Biren Swargiary', 'Deputy Director, Town and Country Planning, Kokrajhar'),
(7, 'Sri Lankeswar Owarie', 'CHD, Urban Development Department BTC, Kokrajhar');

-- --------------------------------------------------------

--
-- Table structure for table `department_overview`
--

CREATE TABLE `department_overview` (
  `id` int(20) NOT NULL,
  `history` text NOT NULL,
  `overview` text NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department_overview`
--

INSERT INTO `department_overview` (`id`, `history`, `overview`, `image1`, `image2`, `image3`) VALUES
(4, '<p><span style=\"font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">BTAD is an autonomous region in Assam, Northeast India. It is made up of four districts on the north bank of the Brahmaputra river below the foothills of Bhutan and Arunachal Pradesh. It is administered by an elected body known as the Bodoland Territorial Council which came into existence under the terms of a peace agreement signed in February 2003 and its autonomy was further extended by an agreement signed in January 2020. The region covers an area of over nine thousand square kilometres and is predominantly inhabited by the Bodo people and other indigenous communities of Assam.</span></span></p>', '<p><span style=\"font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C. The other functions including administering the provisions of the Assam Town &amp; Country Planning Act, 1958 by way of publishing the Master Plan of each and enforcement of building by-laws as per Assam Notified Urban Areas Building Rules (other than Guwahati) 2014 in every urban areas of BTR.</span></span></p>', 'img/departmentOverview/aee6d99a2c34d7134da318745949cd67btc-secretary-Photoroom.png', 'img/departmentOverview/fa92249f3ad462bda3b6e668d129f23cudd-office.jpeg', 'img/departmentOverview/fa92249f3ad462bda3b6e668d129f23ckokrajar-urban.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `executive_message`
--

CREATE TABLE `executive_message` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `message` text NOT NULL,
  `banner` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `executive_message`
--

INSERT INTO `executive_message` (`id`, `name`, `image`, `message`, `banner`, `url`) VALUES
(17, 'Wilson Hasda', 'img/executive/9627517f269a85dc2ee3ff7e7cc64857em.png', '<p>The beauty of Indian democracy lies in the role played by its citizens. The citizens make their representatives responsible to ensure peace, freedom and progress in the society. As a people\'s representative, I am happy for the opprtunity I have got to serve the people and lead them towards a better future. Grateful to all for your love and immense support.</p>', 'img/executive/9627517f269a85dc2ee3ff7e7cc64857em-mssg.jpg', 'https://www.youtube.com/watch?v=P2-6tu0pWTc&t=2s');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `category`) VALUES
(120, 'img/gallery/7fa5d01757d875134079d3474fa4241bkb2.jpeg', 'Local areas'),
(121, 'img/gallery/741347525e66634eff35260670b165dd449131183_122095700600387363_701628104119839628_n.jpg', 'Development'),
(123, 'img/gallery/6dd1694dec1a5a3eca4a04947e1b0fd7449170313_122094855314387363_6468345228650660617_n.jpg', 'Local areas'),
(127, 'img/gallery/7604c5db4c28acbe66f7eed9bb4679fa700x480_1.jpeg', 'Culture'),
(128, 'img/gallery/a23112e75f2ecd88f5da71760d040ea7700x480_4.jpg', 'Development'),
(129, 'img/gallery/a23112e75f2ecd88f5da71760d040ea7700x480_6.jpg', 'Development'),
(130, 'img/gallery/a23112e75f2ecd88f5da71760d040ea7700x480_8.jpeg', 'Development'),
(131, 'img/gallery/a23112e75f2ecd88f5da71760d040ea7700x480_10.jpeg', 'Development'),
(132, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7449131183_122095700600387363_701628104119839628_n.jpg', 'Local areas'),
(133, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7449170313_122094855314387363_6468345228650660617_n.jpg', 'Local areas'),
(134, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7gossaigaon-mb-works.jpg', 'Local areas'),
(135, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7hist.jpg', 'Local areas'),
(136, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7kokrajhar-mb.jpg', 'Local areas'),
(137, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7picsart012209237845.jpg', 'Local areas'),
(138, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7udd works 3.jpg', 'Local areas'),
(139, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7udd works.jpg', 'Local areas'),
(140, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7udd works2.jpg', 'Local areas'),
(141, 'img/gallery/2544e78b2a967504032f7a0e30f3eec7udd-works.jpg', 'Local areas'),
(142, 'img/gallery/1a1b55762aede5011ec9f2d43eff86c7ety.jpg', 'Culture'),
(143, 'img/gallery/1a1b55762aede5011ec9f2d43eff86c7Kajolgaon mb.jpg', 'Culture'),
(144, 'img/gallery/aefe59ba2c2c4305b74cd343ee2d3647700x480_4.jpg', 'Event'),
(145, 'img/gallery/aefe59ba2c2c4305b74cd343ee2d3647449131183_122095700600387363_701628104119839628_n.jpg', 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(20) NOT NULL,
  `head` varchar(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `head`, `title`, `image`, `url`, `date_uploaded`) VALUES
(8, ' Urban Development Department ', ' To monitor the growth of new urban areas in BTR and include them under planning procedures to ensure their efficient and orderly growth.', 'img/homeSlider/7b6c39d2dca72e75ef5a39e47b4adf3eudd-office.jpeg', '', '2024-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliding_card`
--

CREATE TABLE `home_sliding_card` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honourable_dignities`
--

CREATE TABLE `honourable_dignities` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `honourable_dignities`
--

INSERT INTO `honourable_dignities` (`id`, `name`, `designation`, `description`, `image`, `facebook`, `youtube`, `twitter`, `instagram`) VALUES
(4, 'Wilson Hasda', 'Executive Member, BTR', '<p>Wilson Hasda is an esteemed individual who currently serves as an executive member of the Bodoland Territorial Council. He is affiliated with the United People\'s Party Liberal (UPPL) and has made significant contributions to the community as a social worker in various non-governmental organizations (NGOs).As an executive member of the Bodoland Territorial Council, Wilson Hasda plays a crucial role in the governance and decision-making processes. His deep understanding of social issues and his commitment to public service make him a valuable asset to the council.</p>', 'img/honourable/a48310d1ed6130b297c658c2c7537a89EM.jpg', 'https://www.facebook.com/iamwilsonhasda', 'https://www.youtube.com/@wilsonhasda8616', 'https://x.com/iamwilsonhasda', 'https://www.instagram.com/iamwilsonhasda/'),
(5, 'Promod Boro', 'Chief Executive Member, BTR', '<p>Pramod Boro (Born 1 March 1975) is an Indian politician serving as the president of The United People\'s Party Liberal (UPPL) since 25 February 2020 and Chief Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He was the former president of All Bodo Students Union. Pramod Boro was born to Late Ghanashyam Boro. He is a resident of Tamulpur, Baksa district.As the CEM of BTC, Pramod Boro exemplifies a dedicated leader who is driven by the welfare of the people and the progress of the region. His efforts to bring about positive change and his commitment to inclusive development make him an influential figure in the Bodoland Territorial Council.</p>', 'img/honourable/03adf6f9ac42623aefcbfac0a3fb07b0chief.jpg', 'https://www.facebook.com/pramodboroofficial', 'https://www.youtube.com/channel/UCsVyuFk-yxNsAsuHX-pIGkw', 'https://x.com/PramodBoroBTR', 'https://www.instagram.com/pramodboroofficial/');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(100) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `os` varchar(200) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(1, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '12:30:28'),
(2, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '09:13:01'),
(3, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '12:57:39'),
(4, '2', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '09:36:45'),
(5, '2', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '09:38:51'),
(6, '2', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '10:01:39'),
(7, '2', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '10:20:29'),
(8, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '14:58:12'),
(9, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '11:29:46'),
(10, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '17:01:01'),
(11, '1', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '17:33:20'),
(12, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '17:55:34'),
(13, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '19:54:15'),
(14, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-27', '13:51:55'),
(15, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-27', '13:59:31'),
(16, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-28', '10:21:54'),
(17, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-28', '13:47:10'),
(18, '4', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-29', '08:06:59'),
(19, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-29', '12:36:01'),
(20, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-29', '12:53:51'),
(21, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-29', '13:06:01'),
(22, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-29', '14:43:38'),
(23, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-02', '14:47:08'),
(24, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-02', '17:21:01'),
(25, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-02', '17:48:59'),
(26, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-06', '12:47:24'),
(27, '5', 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-06', '14:54:50'),
(28, '5', 'Windows 10', 'Chrome', '2401:b200:55:4aeb:a0f8:de43:51e7:1f01', '2024-07-23', '14:15:26'),
(29, '5', 'Windows 10', 'Firefox', '2401:b200:55:4225:91d:bf9d:5fc6:84ec', '2024-07-26', '16:12:32'),
(30, '5', 'Windows 10', 'Chrome', '2401:b200:2051:d09:9f1:3178:2526:fb4c', '2024-07-29', '16:04:53'),
(31, '4', 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '06:56:34'),
(32, '4', 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '06:58:58'),
(33, '4', 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '07:20:17'),
(34, '5', 'Windows 10', 'Firefox', '2401:b200:2051:2132:85b4:b716:ed4a:f68d', '2024-08-05', '15:16:29'),
(35, '5', 'Windows 10', 'Chrome', '2401:b200:2051:2132:61f9:e53a:39d9:ad3f', '2024-08-05', '15:28:45'),
(36, '5', 'Windows 10', 'Chrome', '2401:b200:2051:45c:2cfe:7101:340a:49f1', '2024-08-06', '11:36:07'),
(37, '5', 'Windows 10', 'Chrome', '2401:b200:2051:45c:95ae:23cb:8f47:4c68', '2024-08-06', '11:36:12'),
(38, '5', 'Windows 10', 'Firefox', '2401:b200:2051:378:dd5d:8fcf:7cf7:9236', '2024-08-06', '15:53:16'),
(39, '5', 'Windows 10', 'Firefox', '2401:b200:2051:1bc1:5a:4f36:1103:de2', '2024-08-08', '12:36:10'),
(40, '5', 'Windows 10', 'Chrome', '2401:b200:2051:18b1:501:c879:c3ff:ca9', '2024-08-10', '16:12:05'),
(41, '5', 'Windows 10', 'Firefox', '2401:b200:2051:506:bcdf:72c9:dfe6:68bb', '2024-08-12', '15:29:01'),
(42, '5', 'Windows 10', 'Firefox', '2401:b200:2051:1ad2:c17:6a65:28d8:59b4', '2024-08-13', '11:48:25'),
(43, '5', 'Windows 10', 'Firefox', '2401:b200:2051:1ad2:c17:6a65:28d8:59b4', '2024-08-13', '11:50:46'),
(44, '5', 'Windows 10', 'Chrome', '2409:40e6:e:84e5:a3:e2b6:cd7a:63a5', '2024-08-13', '16:28:34'),
(45, '5', 'Windows 10', 'Firefox', '2401:b200:2051:1188:6c0e:a6a3:afe6:e25f', '2024-08-14', '15:25:59'),
(46, '5', 'Windows 10', 'Chrome', '2401:b200:2051:2260:54a7:abcb:5f60:69d1', '2024-08-20', '13:01:43'),
(47, '5', 'Windows 10', 'Chrome', '2401:b200:2051:2260:254f:7e18:10e8:9866', '2024-08-20', '13:26:11'),
(48, '5', 'Windows 10', 'Chrome', '::1', '2024-08-22', '11:00:05'),
(49, '5', 'Windows 10', 'Chrome', '::1', '2024-08-22', '16:07:23'),
(50, '5', 'Windows 10', 'Chrome', '::1', '2024-08-23', '10:47:45'),
(51, '5', 'Windows 10', 'Chrome', '::1', '2024-08-26', '11:04:13'),
(52, '5', 'Windows 10', 'Chrome', '::1', '2024-08-27', '10:42:58'),
(53, '5', 'Windows 10', 'Chrome', '::1', '2024-08-29', '11:59:40'),
(54, '5', 'Windows 10', 'Chrome', '::1', '2024-08-30', '11:15:54'),
(55, '5', 'Windows 10', 'Chrome', '::1', '2024-09-02', '11:00:37'),
(56, '5', 'Windows 10', 'Chrome', '::1', '2024-09-06', '10:58:19'),
(57, '5', 'Windows 10', 'Chrome', '::1', '2024-09-06', '13:47:52'),
(58, '7', 'Windows 10', 'Chrome', '::1', '2024-09-06', '14:08:41'),
(59, '7', 'Windows 10', 'Chrome', '::1', '2024-09-06', '14:34:45'),
(60, '7', 'Windows 10', 'Chrome', '::1', '2024-09-06', '14:42:41'),
(61, '5', 'Windows 10', 'Chrome', '::1', '2024-09-07', '10:16:02'),
(62, '7', 'Windows 10', 'Chrome', '::1', '2024-09-09', '11:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `head` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `image`, `head`, `address`, `description`, `date`, `url`) VALUES
(10, 'img/newsEvent/c281ab5a3c6e21ad6df4d0b1fa74b7aedr.jpg', 'Kokrajhar Town Drainage', '<p>Kokrajhar municipality area</p>', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">We recently conducted a comprehensive inspection of the major drains in Kokrajhar Town. Last year, our town faced significant flooding primarily due to blocked drains from improper garbage disposal.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">This year, we have taken extensive cleaning efforts to address these concerns. We\'re pleased to report that these efforts have greatly alleviated the flooding problem, ensuring a safer environment for all residents. We also discussed measures for flash flood mitigation to further protect our community.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">A humble request to all citizens: Please avoid disposing of garbage in the drains to help keep our town safe and clean.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Hon\'ble Executive Member Shri Wilson Hasda; Shri Lankeshwar Owari, CHD, Urban Development Department, along with other officials, were present during the inspection.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Together, let\'s keep Kokrajhar Town flood-free!</div></div>', '2024-07-02', 'https://www.youtube.com/watch?v=3WFu6RNq-pI'),
(11, 'img/newsEvent/ae0fb4d44accb9ab7151bf70fa72f945449764031_462472396521327_1674051699155433295_n.jpg', 'CLEAN-UP DRIVE AT WARD NO-4', '<p>Kokrajhar</p>', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Join us in keeping our community clean and beautiful!</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Today, we tackled a roadside GVP (Garbage Vulnerable Point) at Ward No 5, beside a prominent fuel station.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Together, we can make a difference!</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Special thanks to our team of volunteers and the local authorities for their support.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Let\'s continue to work together to keep our streets clean and our environment healthy.</div></div>', '2024-06-28', 'https://www.youtube.com/watch?v=9C9lRcetrUI&t=5s'),
(12, 'img/newsEvent/7385446e4b80de4c4be04cd4294a2876cl.jpg', 'Cleaning', '<p>Gossaigaon Municipal area</p>', '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Visited Gossaigaon Town to take stock of the ongoing cleaning works of a major drain under the Gossaigaon Municipal Board. Notably, this is the first time in 18 years that the drain is being cleaned, with the aim of removing accumulated garbage and preventing flash floods in the town areas.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Additionally, identified and visited various sites where garbage is currently being disposed. Immediate steps will be taken to clean these areas and halt the ongoing disposal of garbage at these locations.</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">We also addressed public grievances and issues requiring immediate attention to implement necessary measures.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">CHD Urban Development Department Shri Lankeshwar Owari,</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Chairman Gossaigaon Municipal Board Shri Prafulla Islary,</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">EO Gossaigaon Municipal Board Smt. Nobonita Boro amongst others were present.</div></div>', '2024-06-22', 'https://www.youtube.com/watch?v=Gz7bkekPgok&t=8s'),
(13, 'img/newsEvent/a027dfe17c3d92eeccb3d4fa62598d64dtd.jpg', 'Door-to-Door awareness campaign on source segregation of waste across various wards. ', '<p>Kokrajhar Municipal Area</p>', '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Door-to-door awareness campaigns on waste segregation are in full swing across various wards under Kokrajhar Municipal Board.</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Let\'s work together for a sustainable future.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">---</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">à¤®à¥‹à¤¨à¤¸à¥‡ à¤—à¥‹à¤—à¥‹ à¤†à¤¬à¤¹à¤¾à¤µà¤¾à¤–à¥Œ à¤œà¥Œà¤—à¤¾à¤¹à¥‹à¤¨à¤¾à¤¯à¤¾à¤µ à¤œà¥‹à¤‚à¤œà¥‹à¤‚ à¤²à¥‹à¤—à¥‹à¤¸à¥‡ à¤¥à¤¾à¤«à¤¾!</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">à¤•\'à¤•à¤°à¤¾à¤à¤¾à¤° à¤®à¤¿à¤‰à¤¨à¤¿à¤¸à¤¿à¤ªà¤¾à¤² à¤¬à¤°à¥à¤¡à¤¨à¤¿ à¤¸à¤¿à¤™à¤¾à¤µ à¤¥à¤¾à¤¨à¤¾à¤¯ à¤—à¥à¤¬à¥à¤¨ à¤—à¥à¤¬à¥à¤¨ à¤µà¤¾à¤°à¥à¤¡à¤«à¥‹à¤°à¤¾à¤µ à¤¦à¤¾à¤–à¥‹à¤°-à¤¦à¤¾à¤²à¤¾ à¤¬à¥‹à¤–à¤¾à¤µà¤¨à¤¾à¤¯à¤¨à¤¿ à¤¸à¤¾à¤¯à¤¾à¤µ à¤¨\'-à¤¨\' à¤¥à¤¾à¤‚à¤¨à¤¾à¤¨à¥ˆ à¤¸à¤¾à¤‚à¤—à¥à¤°à¤¾à¤‚à¤¥à¤¿ à¤«à¥‹à¤¸à¤¾à¤µà¤¨à¤¾à¤¯à¤¾ à¤—à¥‹à¤–à¥à¤°à¥‹à¤™à¥ˆ à¤¸à¥‹à¤²à¤¿à¤—à¤¾à¤¸à¤¿à¤¨à¥‹ à¤¦à¤‚à¥¤</div><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">à¤«à¥ˆ à¤œà¥‹à¤‚ à¤®à¥‹à¤¨à¤¸à¥‡ à¤—à¥‹à¤œà¥‹à¤° à¤‡à¤¯à¥à¤¨à¤¨à¤¿ à¤¥à¤¾à¤–à¤¾à¤¯ à¤œà¤¯à¥ˆ à¤¹à¤¾à¤¬à¤¾ à¤®à¤¾à¤µà¤¨à¤¿à¥¤</div></div></div>', '2024-06-15', 'https://www.youtube.com/watch?v=9C9lRcetrUI&t=5s'),
(18, 'img/newsEvent/07bbc1312ccbe1af746b796bff3403c7449170313_122094855314387363_6468345228650660617_n.jpg', 'Kokrajhar Town Drainage Inspection: Significant                                         Improvements in Flood Prevention and Community Safety', '<p>Kokrajhar, &nbsp;BTR</p>', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Cleaning road side Garbage Vulnerable Points, one spot at a time!</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Notices issued to citizens for blocking footpaths and roads with debris. Let\'s keep Kokrajhar\'s roads clear and safe!</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Day-to-day sweeping in all wards to maintain a trash-free environment.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(5, 5, 5);font-family:&quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;font-size:15px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0.5em 0px 0px;orphans:2;overflow-wrap:break-word;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\"><div style=\"font-family:inherit;text-align:start;\" dir=\"auto\">Join us in our mission to keep Kokrajhar clean, green, and beautiful</div></div>', '2024-06-25', ''),
(19, 'img/newsEvent/7179fb59d81cf751e10569e44f69964f449131183_122095700600387363_701628104119839628_n.jpg', 'Kokrajhar Municipal Board Launches Door-to-Door Waste                                         Segregation Awareness Campaign', '<p><strong>Kokrajhar, BTR</strong></p>', '<p>Kokrajhar Municipal Board\'s Door-to-Door Waste Collection Drive We\'re coming to your doorstep to collect waste and keep Kokrajhar clean! Our team is working tirelessly to ensure efficient waste collection in all wards. Let\'s work together to maintain a trash-free environment and a healthier community. Remember, a clean home is a happy home.</p>', '2024-06-25', 'https://www.youtube.com/watch?v=YzpOJX_Sxj4'),
(20, 'img/newsEvent/2043948fed613ecab9adb045e18296aalatest-events-urban.jpg_large.jpeg', 'Inauguration of Non-Residential Skill Training Programme                                         in Kokrajhar: A Step Forward in Skill Development', '<p>Kokrajhar, Assam</p>', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(51, 51, 51);font-family:Vollkorn;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;margin:0px 0px 1em;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong>The department will also be providing skill training to 10,120 trainees in different job roles, which is also one of the department\'s six targets under the 100 Days targets. The SEED has taken several skilling initiatives and plans to roll out more this year. Apart from skilling, they also encourage students to take up entrepreneurship. As a first step to making them self-employed, the department will be giving the toolkit to 1163 trainees for the trades of electrician and self-employed tailor.</strong></p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(51, 51, 51);font-family:Vollkorn;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;margin:0px 0px 1em;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong>On the occasion, Shri Pramod Boro addressed the gathering by appreciating the ITI students for their performance at the campus placement drive, where 142 students from Kokrajhar and Chirang got placed at Anvil Cables India Private Limited and ITC Limited.</strong></p>', '2024-03-12', ''),
(21, 'img/newsEvent/8fb9332cff7bbe6eb940706b455a20c1tamalpurdistrict.PNG', 'New District Tamulpur | Documentary Video | Assam\'s 35th District | BTR\'s 5th District', '<p>Assam, BTR</p>', '<p><span style=\"background-color:rgba(0,0,0,0.05);color:rgb(19,19,19);font-family:Roboto, Arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\">It\'s a documentary video do Tamulpur District. It is the newly added District in the map of Assam. It\'s the 5th District of BTR &amp; 35th District of Assam.</span></span></p>', '2024-08-05', 'https://www.youtube.com/watch?v=wV42zqweJ3U&t=1s');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `head` text NOT NULL,
  `title` text NOT NULL,
  `pdf` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `head`, `title`, `pdf`, `link`, `description`, `date`) VALUES
(4, 'PGT & GT  Teachers payment', 'Notification for the post of PGT&GT Teachers payment date extension', 'img/notice/99311b26c0dee4674ad66f4f9b17e79esd.pdf', '', '<p>desc</p>', '2024-08-19 18:30:00'),
(15, 'fsd gdfg', 'fdg dfgdf', '', 'https://testlink.com', '<p>fd gdfgdfg</p>', '2024-08-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `id` int(20) NOT NULL,
  `objective` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`id`, `objective`) VALUES
(6, 'To formulate Master Plans to ensure sustainable urban development in notified urban areas of BTR.'),
(7, 'To provide technical support to Urban Local Bodies for better urban management and service provision.'),
(8, 'To facilitate the proper implementation of urban services and infrastructure schemes mandated under this Department.'),
(9, 'To facilitate planning process to make every town of BTR slum-free with better hygiene & sanitation system to improve living environment.'),
(10, 'To facilitate capacity building of officials and other employees for increasing efficiency to understand ever-changing policies and paradigms of urban governance.'),
(11, 'To monitor the growth of new urban areas in BTR and include them under planning procedures to ensure their efficient and orderly growth.'),
(12, 'To facilitate ULB\'s and Development Authorities to implement Master plan for orderly development of urban areas.');

-- --------------------------------------------------------

--
-- Table structure for table `organization_info`
--

CREATE TABLE `organization_info` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `udd_information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `organization_info`
--

INSERT INTO `organization_info` (`id`, `image`, `pdf`, `udd_information`) VALUES
(7, 'img/organizationInfo/d77e2d0f8f36cfbf96cbdb8f6a0c5cd2udd-office.jpeg', 'img/organizationInfo/fc5de68deecdb3560094c67e5c6064e6UDD-department-organization-chart.pdf', '<p><span style=\"color:rgb(75,80,81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C. The other functions including administering the provisions of the Assam Town &amp; Country Planning Act, 1958 by way of publishing the Master Plan of each and enforcement of building by-laws as per Assam Notified Urban Areas Building Rules (other than Guwahati) 2014 in every urban areas of BTR.</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `recent_updates`
--

CREATE TABLE `recent_updates` (
  `id` int(20) NOT NULL,
  `head` text NOT NULL,
  `title` text NOT NULL,
  `pdf` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recent_updates`
--

INSERT INTO `recent_updates` (`id`, `head`, `title`, `pdf`, `link`, `description`, `date`) VALUES
(4, 'udd PGT & GT  Teachers payment', 'Notification for the post of PGT&GT Teachers payment date extension', 'img/notice/99311b26c0dee4674ad66f4f9b17e79esd.pdf', '', '<p>desc</p>', '2024-08-29 18:30:00'),
(15, 'updates from udd database', 'update title', '', '', '<p>fd gdfgdfg</p>', '2024-08-26 07:05:34'),
(16, 'Update From udd database', 'Update Title', 'img/notice/65583314920815d117e89db0323a7589ce27f8855034553a0acc19ea5c3c1785sample - sample.pdf', 'https://uddbtr.org', '<p>Update Description</p>', '2024-08-25 18:30:00'),
(18, 'Update From udd database', 'update Title', 'img/notice/46cbf56ed150f43b525663e357c22186ce27f8855034553a0acc19ea5c3c1785sample - sample.pdf', '', '<p>Update Description</p>', '2024-08-25 18:30:00'),
(19, 'Update From udd database', 'Update Title', '', 'https://uddbtr.org', '<p>Update Description</p>', '2024-08-25 18:30:00'),
(20, 'Update from udd database 1', 'Update Title', 'img/notice/b7ca971ea354ce9d936006967a953c4eRed and Yellow Modern Minimalist Event Parking Yard Sign (5).pdf', 'https://uddbtr.org', '<p>Update Description</p>', '2024-08-29 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(20) NOT NULL,
  `scheme_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `done_by` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `short_desc` text NOT NULL,
  `pdf` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `scheme_name`, `location`, `done_by`, `date`, `contact_no`, `status`, `short_desc`, `pdf`, `image`) VALUES
(37, 'udd constructions', 'udd location', 'udd done by', '2024-09-07', '9568235698', 0, '', 'images/schemes/a184b239db1a50e8f4e31d395e30bbb6ce27f8855034553a0acc19ea5c3c1785sample - sample.pdf', ''),
(38, 'udd constructions 2', 'udd location 2', 'udd done by 2', '2024-09-07', '9521035689', 1, '', 'images/schemes/98401c90fdb1dc12dd89c068ebfd16e2ce27f8855034553a0acc19ea5c3c1785sample - sample.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `scheme_details`
--

CREATE TABLE `scheme_details` (
  `id` int(100) NOT NULL,
  `scheme_details` varchar(300) NOT NULL,
  `progress` varchar(100) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `scheme_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(15) NOT NULL DEFAULT 0 COMMENT '0:not verify;1:verified;2:cancel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme_details`
--

INSERT INTO `scheme_details` (`id`, `scheme_details`, `progress`, `image1`, `image2`, `image3`, `scheme_id`, `date`, `status`) VALUES
(35, 'pd1', '10', 'images/schemes/b8cb0db480f8eae4d6361cc608536c0a_urban-logo-removebg-preview.png', 'images/schemes/30dae05549f1024304a2e6f325bb5611notice-removebg-preview.png', 'images/schemes/5f60074ecb720bf8075314193ab4f622tenders-removebg-preview.png', '38', '2024-09-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usefull_links`
--

CREATE TABLE `usefull_links` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usefull_links`
--

INSERT INTO `usefull_links` (`id`, `title`, `link`) VALUES
(3, 'GOVERNMENT OF ASSAM SKILL EMPLOYMENT AND ENTREPRENEUR ', 'https://skill.assam.gov.in/'),
(4, 'BTR SEED DEPARTMENT ', 'https://seedbtr.com/'),
(5, 'BTR GOVERNMENT WEB PORTAL ', 'https://bodoland.gov.in/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `register_date` date NOT NULL,
  `MB` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1' COMMENT '0:inactive;1:active;2:banned',
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `designation`, `email`, `password`, `phone`, `userType`, `user_image`, `register_date`, `MB`, `status`, `otp`) VALUES
(2, 'EO_bijniulb', '', 'EO_bijni@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '7002563451', 'EO', 'images/users/65ec56cb6bf6fd5986634fd3348c0270user.png', '2024-06-26', 'bijni_mb', '1', '760614'),
(4, 'kokjhar_EO', '', 'kokjhar_EO@GMAIL.COM', '79474ba8132de5222aebb7d4145f28e929154e757a81282a2edfcce3b22093a7b699e318e96574115ff35d82f6a4e7a67055969f91a1ad35a6713956bdf9dbbe', '9954852634', 'EO', 'images/users/d2602f9c84a452fc675d26ca54202353national-emblem(1).png', '2024-06-26', 'kokrajhar_mb', '1', '755013'),
(5, 'Lankeswar Owarie', 'CHD', 'uddbtr@gmail.com', '79474ba8132de5222aebb7d4145f28e929154e757a81282a2edfcce3b22093a7b699e318e96574115ff35d82f6a4e7a67055969f91a1ad35a6713956bdf9dbbe', '8134000271', 'ADMIN', 'images/users/3b9a60c9496dda055f52ac16f70faea1logo.png', '2024-06-26', 'UDD', '1', '355251'),
(7, 'admin-kokrajhar', 'admin kokrajhar MB', 'admin-kokrajhar@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '9568259682', 'ADMIN', 'images/users/5e431c29ce757a2e81110f91c9aa6846unknow user.jpg', '2024-09-06', 'kokrajhar_mb', '1', '961316');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_scrolling_imges`
--
ALTER TABLE `bottom_scrolling_imges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chd_message`
--
ALTER TABLE `chd_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizen_grievance`
--
ALTER TABLE `citizen_grievance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_mail`
--
ALTER TABLE `contact_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_dignities`
--
ALTER TABLE `department_dignities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_overview`
--
ALTER TABLE `department_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive_message`
--
ALTER TABLE `executive_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliding_card`
--
ALTER TABLE `home_sliding_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honourable_dignities`
--
ALTER TABLE `honourable_dignities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_info`
--
ALTER TABLE `organization_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_updates`
--
ALTER TABLE `recent_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme_details`
--
ALTER TABLE `scheme_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usefull_links`
--
ALTER TABLE `usefull_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `bottom_scrolling_imges`
--
ALTER TABLE `bottom_scrolling_imges`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `chd_message`
--
ALTER TABLE `chd_message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `citizen_grievance`
--
ALTER TABLE `citizen_grievance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `department_dignities`
--
ALTER TABLE `department_dignities`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_overview`
--
ALTER TABLE `department_overview`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `executive_message`
--
ALTER TABLE `executive_message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_sliding_card`
--
ALTER TABLE `home_sliding_card`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `honourable_dignities`
--
ALTER TABLE `honourable_dignities`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `organization_info`
--
ALTER TABLE `organization_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recent_updates`
--
ALTER TABLE `recent_updates`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `scheme_details`
--
ALTER TABLE `scheme_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `usefull_links`
--
ALTER TABLE `usefull_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
