-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 08:13 AM
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
-- Database: `kokrajhar_mb`
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
(38, 'Kokrajhar Municipality Board', '<p>Kokrajhar is a town in the Bodoland Territorial Region an autonomous territory in Assam, one of the North Eastern States of India. Kokrajhar town is located along the bank of the river Gaurang. The North East Indian Railways divides the city into two divisions, north and the south Kokrajhar. Kokrajhar town is the headquarters of Kokrajhar district and the Bodoland Territorial Council (BTC).</p>', 'img/about/fdd0c838954862212e2fe20c92e24e7bkokmb.jpg', '2024-07-13');

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
-- Table structure for table `chair_person_message`
--

CREATE TABLE `chair_person_message` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chair_person_message`
--

INSERT INTO `chair_person_message` (`id`, `name`, `message`, `image`) VALUES
(5, 'Smt. Pratibha Brahma', '<p style=\"text-align:justify;\"><strong>Welcome to Kokrajhar, the City of Peace…</strong></p><p style=\"text-align:justify;\">&nbsp;</p><p style=\"text-align:justify;\">&nbsp;</p><p style=\"text-align:justify;\">&nbsp;</p><p style=\"text-align:justify;\">&nbsp;Kokrajhar town being the Headquarter of Kokrajhar district as well as the capital of Bodoland Territorial Region (BTR) is growing in size and population rapidly. It is very important to usher an era of planned development. Any development must enhance the role of the town in the region. In the year 1956 Kokrajhar town committee was formed to look after the various civic needs of the growing community and it got the status of Municipal Board in the Year 1970. Simultaneously with the efforts of the Town and Country Planning Department there has resulted in a manifold rise in its population and development. The Kokrajhar Development Authority was established in the year 2008 for taking care of various development activities. Kokrajhar Municipal area consists of 10 wards. The proposal of additional more wards are in the process Besides being an administrative centre, Kokrajhar is also important for trade and commerce. Kokrajhar contains many offices as the capital of BTR and the head quarter of Kokrajhar district like the Secretariat of BTC, offices of Directors as Council Head of Departments for different line departments. The Kokrajhar town has many offices and educational institutions like Central Institute of Technology, Kokrajhar Government College, Bineswar Brahma Engineering College, Bodoland University, telephone exchange, 200 bedded Civil Hospital, B T. College, General Colleges, I.T.I and other facilities required for capital and the district Head Quarter town. The population density of Municipality area is 3784 p/sq.km. in 2001 and 4144 p/sq.km. in 2011 while the population density of whole Kokrajhar district is 665 p/sq.km. in 2001 and 793 p/sq.km. The socio economic base and work areas establishments are developedproperly in demarcated land areas with beautiful front side appearances of the establishments within the town or city. All the trade and commercial activities are carried out within the properly developed commercial house buildings that are supported and developed by the BTR Government. Kokrajhar-Karigaon Road (State National Highway) is connected to National Highway No.31C at Karigaon which is 19km North from the town and Kokrajhar-Bahalpur Road connects National Highway No. 37 at Bahalpur which is 24.5km. The town has great advantage of rail communication by means of Broad Gauge (B.G.) lines. The railways line passes through the heart of the town and make connection of Kokrajhar with Guwahati and Upper Assam on the east and Dhubri and other parts of the country on the West. The railways have their own housing colonies. After becoming BG lines, it has increased the commercial activities of the town and helped to a large extent for the development of Kokrajhar town.</p><p style=\"text-align:justify;\">&nbsp;</p><p style=\"text-align:justify;\"><strong>&nbsp;With warm regards</strong></p><p style=\"text-align:justify;\"><strong>Smt. &nbsp;Pratibha Brahma, Chairperson</strong></p>', 'img/chairPersonMessage/9b20cfa9a1f7dbf2034643c2ad0df5bbchairmanPhoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_grievance`
--

CREATE TABLE `citizen_grievance` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `message_date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citizen_grievance`
--

INSERT INTO `citizen_grievance` (`id`, `email`, `subject`, `message`, `message_date`, `status`) VALUES
(20, 'sdf@gmail.com', 'Grievance', 'sd', '2024-08-03', '1'),
(21, 'sdf@gmail.com', 'Ideas', 'sdf', '2024-08-03', '1');

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
(5, '<p>refgerg</p>', '<p>ergerg</p>', 'img/departmentOverview/b79d4564a3514118ca2443cc558ae1bakokrajhar-district-map.jpg', 'img/departmentOverview/b79d4564a3514118ca2443cc558ae1bakok-dev-dept.jpg', 'img/departmentOverview/b79d4564a3514118ca2443cc558ae1bamandir.jpg');

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
(118, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_1.jpeg', 'Event'),
(119, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_4.jpg', 'Event'),
(120, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_5.jpg', 'Event'),
(121, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_6.jpg', 'Event'),
(122, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_8.jpeg', 'Event'),
(123, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3700x480_10.jpeg', 'Event'),
(124, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3btr1.jpg', 'Event'),
(125, 'img/gallery/d7f8506f73d03c49f5282e6483ae2cb3gate.jpg', 'Event'),
(126, 'img/gallery/e3dee7c06fca64bd34e82f9dd209294a700x480_1.jpeg', 'Culture'),
(127, 'img/gallery/e3dee7c06fca64bd34e82f9dd209294aety (1).jpg', 'Culture'),
(128, 'img/gallery/e3dee7c06fca64bd34e82f9dd209294aety.jpg', 'Culture'),
(129, 'img/gallery/e3dee7c06fca64bd34e82f9dd209294atangla mb.jpg', 'Culture'),
(130, 'img/gallery/e3dee7c06fca64bd34e82f9dd209294aurban-wr2.jpg', 'Culture'),
(131, 'img/gallery/640686bee044f267ccb7871afe21d2fc700x480_4.jpg', 'Development'),
(132, 'img/gallery/640686bee044f267ccb7871afe21d2fc700x480_5.jpg', 'Development'),
(133, 'img/gallery/640686bee044f267ccb7871afe21d2fc700x480_10.jpeg', 'Development'),
(134, 'img/gallery/640686bee044f267ccb7871afe21d2fc700x480_11.jpeg', 'Development'),
(135, 'img/gallery/640686bee044f267ccb7871afe21d2fc700x480_14.jpeg', 'Development'),
(136, 'img/gallery/640686bee044f267ccb7871afe21d2fc449170313_122094855314387363_6468345228650660617_n.jpg', 'Development'),
(137, 'img/gallery/640686bee044f267ccb7871afe21d2fcety (1).jpg', 'Development'),
(138, 'img/gallery/640686bee044f267ccb7871afe21d2fcety.jpg', 'Development'),
(139, 'img/gallery/640686bee044f267ccb7871afe21d2fcimage-1699892222766.jpeg', 'Development'),
(140, 'img/gallery/640686bee044f267ccb7871afe21d2fcimage-1699892222779.jpeg', 'Development'),
(141, 'img/gallery/640686bee044f267ccb7871afe21d2fckokrajhar.jpg', 'Development'),
(142, 'img/gallery/640686bee044f267ccb7871afe21d2fcrailway.jpg', 'Development'),
(143, 'img/gallery/84a050a5401904d43a8201091ae76729tangla mb.jpg', 'Development'),
(144, 'img/gallery/84a050a5401904d43a8201091ae76729urban-wr2.jpg', 'Development'),
(145, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1700x480_14.jpeg', 'Local areas'),
(146, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1baksa.jpg', 'Local areas'),
(147, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1Basugaon Mb.jpg', 'Local areas'),
(148, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1Goreswar Minucipal Board.jpg', 'Local areas'),
(149, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1hist.jpg', 'Local areas'),
(150, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1kokrajhar-mb-wr.jpg', 'Local areas'),
(151, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1picsart012209237845.jpg', 'Local areas'),
(152, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1urban-wr.jpg', 'Local areas'),
(153, 'img/gallery/005d68f688b1c393d5a9dfe0ff6823d1urban-wr2.jpg', 'Local areas'),
(154, 'img/gallery/2156f71f9fd1688915aa928557a86df5baksa.jpg', 'Planings'),
(155, 'img/gallery/2156f71f9fd1688915aa928557a86df5hist.jpg', 'Planings');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(20) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `description`, `image`) VALUES
(1, '<p>kasd dsafsadfa</p>', 'img/History/878dccebd09e7cca143c15e6e53d1eddwh.png'),
(4, '<h2>BRIEF HISTORY&nbsp;</h2><p>&nbsp;</p><p>&nbsp;Kokrajhar town is the Headquarter of Kokrajhar district as well as the capital of Bodoland Territorial Region (BTR) and is situated on the eastern side of Gaurang River.</p><p>&nbsp;</p><p>&nbsp;Kokrajhar was originally a part of the undivided Goalpara district. In 1957 it was curved out as a Civil Sub-division from the then Dhubri Sub-division of Goalpara district. Till then it was merely small town with a railway station. On 1st July, 1983 it was upgraded into a district. At that time, there were four Police stations viz. Bijni, Sidli, Kokrajhar and Gossaigaon with a total area of 4,065.88 Sq.Km. spreading from the river Manas in the east to the river Sonkosh in the west. In 1989, the district of Bongaigaon was curved out with about 40% area of Kokrajhar district. Later on, the Nayekgaon G.P. of Dhubri district with an area of 40.22sq.km was merged with this district. Again on 10th February, 2009 Chirang district was created by curving out parts of Kokrajhar district and some parts of Dhubri district were merged with Kokrajhar district. The present area of the district is estimated to be 3,169.22sq.km and that of the town is 125.78 sq.km.&nbsp;</p><p>&nbsp;</p><p>In the year 1956 Kokrajhar town committee was formed to look after the various civic needs of the growing community and it got the status of Municipal Board in the Year 1970.&nbsp;</p><p>&nbsp;</p><p>Kokrajhar was declared Sub-Division in the year 1957. Electricity came to Kokrajhar for the first time in 15th August, 1957. Kokrajhar College was established in the year 1959, B.T. College 1971, Law College and Commerce College in 1986 and Girlsâ€™ College in 1989.&nbsp;</p><p>&nbsp;</p><p>Kokrajhar was declared District in the year 1983, The Bongaigaon refinery and Petrol Chemical Complex established in the year 1972 came under Kokrajhar District. The Bongaigaon Thermal Power Station was established in the year 1975 at Salakathi. As a district Headquater, number of Government and Semi-Government establishments came into existence at Kokrajhar creating employment opportunities to a considerable extent and as a result people from outside have started migrating to Kokrajhar in search of job and economic opportunities.</p><p>&nbsp;</p><p>&nbsp;The colourful Bodo community comprises the majority in Kokrajhar district. It also has a sizeable Rajbongshi and Santhal population. Issues relating to disparities across socio-religious communities have attracted much attention of the Government of India and have led to the growing realisation about the relative backwardness of the relative minorities. The result of one such situation is the formation of the BTAD which was created as a new political administrative region with four new districts viz. Kokrajhar, Chirang, Baksa and Udalguri after the signing of BTC accord between the Bodo Liberation Tigers (BLT) the then organisation spearheading the movement for separate Bodoland State, Assam Government and the Central Government on 10th February of the year 2003. The BTAD was created after the amendment of 6th schedule of Indian Constitution. A new agreement was signed between NDFB, ABSU, Assam Government and the Central Government on on 27th January 2020 by creating Bodoland Territorial Region (BTR).</p>', 'img/History/d52b5da52b179155eacb54b0bfe05879kokrajhar-district-map.jpg');

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
(10, 'Kokrajhar Municipal Board', 'To monitor the growth of new Kokrajhar Municipal areas in BTR and include them under planning procedures to ensure their efficient and orderly growth.', 'img/homeSlider/6e3a01df33bd85e90da0cd9e52360bb0118387822_154013893019059_2752825440606284772_n.jpg', '', '2024-07-13');

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

--
-- Dumping data for table `home_sliding_card`
--

INSERT INTO `home_sliding_card` (`id`, `title`, `description`, `image`) VALUES
(7, 'Our Objectives', '<p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Enhance the town\'s infrastructure, including roads, drainage systems, and public spaces. Promote green and eco-friendly initiatives to ensure a clean and healthy environment. Public Services.</p><p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Provide efficient and transparent municipal services to all residents. Ensure the availability of essential services such as water supply, sanitation, and waste management. Improve the quality and accessibility of health and educational facilities. Economic Growth.</p><p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Foster a conducive environment for economic development and entrepreneurship. Support local businesses and attract investments to create employment opportunities. Develop Kokrajhar as a hub for trade and commerce in the Bodoland Territorial Region. Social Welfare.</p><p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Strengthen the governance framework to ensure accountability, transparency, and responsiveness. Encourage citizen participation in decision-making processes through consultations and feedback mechanisms. Build capacity within the municipal administration to effectively manage urban challenges. Core Values.</p><p class=\"t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The Kokrajhar Municipality Board aims to transform Kokrajhar into a sustainable, inclusive, and vibrant urban center that ensures a high quality of life for all its residents. Our vision is to develop Kokrajhar as a model town in Assam by integrating modern infrastructure with the rich cultural heritage of the region.</p><p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Promote social equity and inclusion, ensuring that all communities benefit from development initiatives. Implement programs for the welfare of women, children, senior citizens, and marginalized groups. Enhance recreational and cultural facilities to enrich the social life of residents. Governance and Participation:</p><p class=\"pera t-justify\" style=\"-webkit-font-smoothing:antialiased;-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(75, 80, 81);font-family:&quot;DM Sans&quot;, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;hyphens:auto;letter-spacing:normal;line-height:1.6;margin-bottom:0px;margin-top:0px;orphans:2;outline:none;scrollbar-width:thin;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Ensuring that all sections of society are included in the development process. Sustainability: Prioritizing long-term environmental and sustainability in all initiatives. Transparency: Maintaining openness in all municipal operations and decision-making. Innovation: Encouraging innovative solutions to address urban challenges and improve service delivery. Collaboration: Working together with residents, businesses, and other stakeholders to achieve common goals. By adhering to these objectives, the Kokrajhar.</p>', 'img/Cards/fbf2c5123c3dd8e6c3187e8352802589version-control.png'),
(11, 'Transportation', 'Kokrajhar is served by the Assam State Transport Corporation.\n                                                        The Kokrajhar railway station lies on the N', 'img/Cards/7a788eebfbaed56a00cb9a916504da4bsl2.jpg'),
(12, 'BTR, Assam', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(0,0,0);font-family:&quot;DM Sans&quot;, sans-serif;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Bodoland Territorial Region is an autonomous region in Assam, Northeast part of India. It is made up of four districts (Kokrajhar, Chirang, Baksa and Udalguri) on the north bank of the Brahmaputra below the foothills of Bhutan and Arunachal Pradesh. It is administered by an elected body known as the Bodoland Territorial Council which came into existence under the terms of a peace agreement signed in February 2003 and its autonomy was further extended by an agreement signed in January 2020. The region covers an area of over nine thousand Sq km and is predominantly inhabited by the Bodo people and other indigenous of Assam.</span></span></p>', 'img/Cards/502dfcbc5497c0a0ea9b4a058c8ad356kokrajhar-district-map.jpg'),
(13, 'DEMOGRAPHICS', 'It is inhibited by people of different ethnicities and cultures. The main inhabitants are Bodos, Koch Rajbongshi, Assamese, Garo, and Santalis. Bodos and other tribals can be seen in most of the villages while Bengalis, Gorkha, Biharis and Marwaris are seen as merchants in Market areas. The tea tribes can also be seen in the tea gardens.As of 2001 India census,[3] Kokrajhar had a population of 31,152. Males constitute 52% of the population and females 48%. Kokrajhar has an average literacy rate of 79%, higher than the national average of 59.5%: male literacy is 84%, and female literacy is 74%. In Kokrajhar, 10% of the population is under 6 years of age. The district has 3 sub divisions Kokrajhar, Gossaigaon and Basugaon.', 'img/Cards/de57c4ab9d269c957a0dbcad14d6b0aekok-dem.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(20) NOT NULL,
  `introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `introduction`) VALUES
(6, '<p>The Bodoland Territorial Council (BTC) is an autonomous district council for the Bodoland Territorial Region in India. It was established in February 2003.The BTC has 40 elected members and an additional six members that are appointed by the Governor of Assam. The area under the BTC jurisdiction is officially called the Bodoland Territorial Region (BTR). The region falls within the geographical map of the least developed region in India. The agro-based economy is the only source of livelihood of the people. Industrialisation and other employment opportunities are scant.The Bodoland Territorial Council is headed by a Speaker and is executive committee is chaired by a Chief Executive Member, currently Pramod Boro.The BTC consists of four contiguous districts â€” Kokrajhar, Baksa, Udalguri and Chirang â€” carved out of seven existing districts â€” Kokrajhar, Bongaigaon, Barpeta, Nalbari, Kamrup, Darrang and Sonitpur â€” an area of 8,822 km2 (11% of Assam land area i.e. 78,438 km2 ) comprising various protected tribal belts and blocks in Assam. Its establishment was under the Amended Sixth Schedule of the Constitution of India.&nbsp;</p><p>&nbsp;</p><p>BTAD is an autonomous region in Assam, Northeast India. It is made up of four districts on the north bank of the Brahmaputra river below the foothills of Bhutan and Arunachal Pradesh. It is administered by an elected body known as the Bodoland Territorial Council which came into existence under the terms of a peace agreement signed in February 2003 and its autonomy was further extended by an agreement signed in January 2020. The region covers an area of over nine thousand square kilometres and is predominantly inhabited by the Bodo people and other indigenous communities of Assam.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `os` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `browser` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(57, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '16:01:07'),
(58, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '16:02:26'),
(59, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '17:23:32'),
(60, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '17:56:46'),
(61, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-26', '20:07:13'),
(62, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-27', '11:17:32'),
(63, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-27', '17:29:03'),
(64, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-06-28', '17:13:36'),
(65, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-06', '13:31:04'),
(66, 2, 'Windows 10', 'Firefox', '127.0.0.1', '2024-07-06', '15:00:19'),
(67, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '12:06:49'),
(68, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '12:12:27'),
(69, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '12:14:52'),
(70, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '12:38:28'),
(71, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '13:37:57'),
(72, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '14:10:48'),
(73, 2, 'Windows 10', 'Firefox', '2401:b200:2051:14ef:7825:5684:c60e:28f6', '2024-08-02', '16:04:43'),
(74, 2, 'Windows 10', 'Chrome', '2401:b200:2051:2fa7:3c9b:d3ab:c04c:42d0', '2024-08-03', '12:53:11'),
(75, 2, 'Windows 10', 'Firefox', '2401:b200:2051:1bc1:5a:4f36:1103:de2', '2024-08-08', '16:08:17'),
(76, 2, 'Windows 10', 'Chrome', '2401:b200:2051:1bc1:7cfa:64d2:a0bf:5262', '2024-08-08', '16:16:24'),
(77, 2, 'Windows 10', 'Chrome', '2401:b200:2051:506:cdc6:48a2:5c15:477e', '2024-08-12', '12:32:29'),
(78, 2, 'Windows 10', 'Firefox', '2401:b200:2051:506:bcdf:72c9:dfe6:68bb', '2024-08-12', '14:32:10'),
(79, 2, 'Windows 10', 'Firefox', '2401:b200:2051:1ad2:c17:6a65:28d8:59b4', '2024-08-13', '11:19:02'),
(80, 2, 'Windows 10', 'Chrome', '2401:b200:2051:1d6:9443:c6c7:b339:51b8', '2024-08-17', '11:06:51'),
(81, 2, 'Windows 10', 'Chrome', '2401:b200:2051:1d6:9443:c6c7:b339:51b8', '2024-08-17', '11:07:48'),
(82, 2, 'Android', 'Handheld Browser', '2401:b200:2051:2260:c56:db74:57c0:50ab', '2024-08-20', '12:57:50'),
(83, 2, 'Windows 10', 'Chrome', '2401:b200:2051:2260:254f:7e18:10e8:9866', '2024-08-20', '13:06:42'),
(84, 2, 'Android', 'Handheld Browser', '2401:b200:2051:2260:c56:db74:57c0:50ab', '2024-08-20', '13:48:11'),
(85, 2, 'Windows 10', 'Chrome', '2401:b200:2051:7d1:7144:c7f6:8118:5bbf', '2024-08-21', '12:11:24'),
(86, 2, 'Windows 10', 'Chrome', '::1', '2024-09-06', '14:05:18'),
(87, 2, 'Windows 10', 'Chrome', '::1', '2024-09-06', '14:06:57'),
(88, 2, 'Windows 10', 'Chrome', '::1', '2024-09-09', '10:43:46'),
(89, 2, 'Windows 10', 'Chrome', '::1', '2024-09-09', '10:47:56');

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
(15, 'img/newsEvent/d7d838b095ad7682013af4a746790a77kok-news1.PNG', 'Hon\'ble EM Wilson Hasda Urban Development interaction with media persons at CHD office Urban Kokrajhar after the inauguration of programme in Kokrajhar today.', '<p>Kokrajhar, BTR, Assam</p>', '<p><strong>Hon\'ble EM Wilson Hasda Engages with Media Post Inauguration at CHD Office, Urban Kokrajhar</strong></p><p>In a significant event held today, Hon\'ble Executive Member (EM) Wilson Hasda of the Urban Development department engaged with media persons at the CHD office in Urban Kokrajhar. The interaction took place following the inauguration of a key urban development programme aimed at enhancing infrastructure and services in Kokrajhar. During the interaction, EM Hasda highlighted the strategic initiatives undertaken to foster urban growth and improve living standards for residents. The event saw active participation from various stakeholders, emphasizing the administration\'s commitment to sustainable urban development and community welfare.</p>', '2024-07-20', ''),
(16, 'img/newsEvent/11a2fc324db98be905c06cc04e266afakok-news2.jpg', 'CLEAN-UP DRIVE AT WARD NO-4', '<p>Kokrajhar, BTR, Assam</p>', '<p><strong>· CLEAN-UP DRIVE AT WARD NO-4&nbsp;</strong></p><p>&nbsp;</p><p>Join us in keeping our community clean and beautiful! Today, we tackled a roadside GVP (Garbage Vulnerable Point) at Ward No 5,</p><p>&nbsp;beside a prominent fuel station. Together, we can make a difference! Special thanks to our team of volunteers and the local authorities for their support.&nbsp;</p><p>&nbsp;</p><p>Let\'s continue to work together to keep our streets clean and our environment healthy.</p>', '2024-07-04', ''),
(17, 'img/newsEvent/f7c2acb3e90b39791033212e02e915a0kok-news3.jpg', 'Kokrajhar Municipal Board\'s Daily Cleanliness Drive', '<p>Kokrajhar, BTR, Assam</p>', 'Kokrajhar Municipal Board\'s Cleanliness Drive in Full Swing.\nWe\'re tackling Garbage Vulnerable Points and sweeping roads daily in all wards to keep Kokrajhar clean and beautiful!\nOur team is working tirelessly to ensure a cleaner and healthier environment for all.\nJoin us in our mission to maintain a trash-free Kokrajhar.', '2024-07-26', ''),
(18, 'img/newsEvent/154e3d1a2727a0d479e71802398f2a04kok-news4.jpg', 'Kokrajhar Municipal Board\'s Door-to-Door Waste Collection Drive', '<p>Kokrajhar, BTR, Assam</p>', 'Kokrajhar Municipal Board\'s Door-to-Door Waste Collection Drive\n\nWe\'re coming to your doorstep to collect waste and keep Kokrajhar clean!\n\nOur team is working tirelessly to ensure efficient waste collection in all wards.\n\nLet\'s work together to maintain a trash-free environment and a healthier community.\n\nRemember, a clean home is a happy home.', '2024-07-25', ''),
(19, 'img/newsEvent/f63c70482e5cb16dba059e9f22d92969kok-news5.jpg', 'In our ongoing efforts to promote a clean and green environment', '<p>Kokrajhar, BTR, Assam</p>', '<p>In our ongoing efforts to promote a clean and green environment, we wish to inform you about a recent successful drive to implement a ban on single-use plastic conducted near the Kokrajhar municipality area. This drive, supported by the District Administration and Kokrajhar Police, resulted in the seizure of approximately 350 kilograms of single-use plastic items. A total fine of approximately Rs 51,000 was imposed as part of enforcing the ban on single-use plastics having thickness of less than 120 microns which was in effect from December 31, 2022. We urge all citizens to join us in this initiative by avoiding the use of single-use plastics, particularly those with a thickness of less than 120 microns. These actions are crucial to protect our environment and to ensure the sustainability of our region. Remember, each one of us is an ambassador for Kokrajhar, and our collective efforts can make a significant impact in preserving our surroundings. Moving forward, we will continue to communicate updates and important notices through our official social media channels. Please stay informed and spread awareness among your friends and family about the importance of reducing plastic waste. Let’s work together to create a cleaner and healthier Kokrajhar. We sincerely thank you for your cooperation.</p>', '2024-07-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `head` text NOT NULL,
  `title` text NOT NULL,
  `pdf` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `head`, `title`, `pdf`, `date`) VALUES
(4, 'sadadasd', 'Notification for the post of PGT&GT Teachers payment date extension', 'img/notice/99311b26c0dee4674ad66f4f9b17e79esd.pdf', '2024-08-08 00:00:00');

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
(2, 'To formulate Master Plans to ensure sustainable urban development in notified urban areas of BTR. '),
(3, 'To provide technical support to Urban Local Bodies for better urban management and service provision. '),
(4, 'To facilitate the proper implementation of urban services and infrastructure schemes mandated under this Department. ');

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
(8, 'img/organizationInfo/e8719525f15ff53afc117c3776b376c7udd-office.jpeg', 'img/organizationInfo/e8719525f15ff53afc117c3776b376c7kokrajhar-population.pdf', '<p>aa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `population_info`
--

CREATE TABLE `population_info` (
  `id` int(20) NOT NULL,
  `pdf` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `population_info`
--

INSERT INTO `population_info` (`id`, `pdf`, `image`) VALUES
(6, 'img/populationInfo/167b28cc369da390f37b6d8fd24bbc1bpopkok.pdf', 'img/populationInfo/3df045c6a481852d0084ea3dd10e116dkokrajar-urban.jpg');

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
(4, 'Assam Govt Jobs on 22.08.2024 | A list of latest Assam Sarkari Naukri job notifications & online forms. Read more:  from kokrajhar database', 'Assam Job Notifications', 'img/notice/99311b26c0dee4674ad66f4f9b17e79esd.pdf', '', '<p>Latest announcements regarding Sarkari Naukri in the State Government of Assam are available below. We\'ve curated \"Assam Govt Jobs 2024\" collection/list containing latest recruitment notifications published by the Assam Government. It has 2 active job notifications containing 1,065 job vacancies in Assam. To Apply for these 1,065 vacancies, browse through below list of notifications and get details of the recruitment you\'re interested in. Read more:</p>', '2024-09-01 18:30:00'),
(15, 'Test Add Udd update Head from kokrajhar database', 'Test Add Udd update Title', 'sdd', 'https://job.assam.gov.in/', '<p>Test Add Udd update Description</p>', '2024-08-30 09:34:59'),
(21, 'Assam Govt Jobs on 22.08.2024 | A list of latest Assam Sarkari Naukri job notifications & online forms. Read more:  from kokrajhar database', 'Assam Job Notifications', 'img/notice/d92b3dd2f987c298ce24e9d577365182sd.pdf', 'https://www.9curry.com/states/assam', '<p>Latest announcements regarding Sarkari Naukri in the State Government of Assam are available below. We\'ve curated \"Assam Govt Jobs 2024\" collection/list containing latest recruitment notifications published by the Assam Government. It has 2 active job notifications containing 1,065 job vacancies in Assam. To Apply for these 1,065 vacancies, browse through below list of notifications and get details of the recruitment you\'re interested in. Read more:</p>', '2024-09-01 18:30:00'),
(22, 'Jobs on 22.08.2024 | A list of latest job notifications & online forms. Read more: from kokrajhar database', 'Recent Update', '', '', '<p>Recent Update</p>', '2024-08-30 09:35:12');

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
(5, 'BTR GOVERNMENT WEB PasORTAL ', 'https://bodoland.gov.in/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `MB` varchar(200) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `register_date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`, `MB`, `userType`, `register_date`, `status`) VALUES
(2, 'asas', 'asd@gmail.com', '9954632145', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'kokrajhar_mb', 'CP', '2024-06-26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vision_goals`
--

CREATE TABLE `vision_goals` (
  `id` int(20) NOT NULL,
  `vision` text NOT NULL,
  `goals` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vision_goals`
--

INSERT INTO `vision_goals` (`id`, `vision`, `goals`) VALUES
(5, '<ul><li><strong>To improve the quality of life of the people of Kokrajhar through facilitation of infrastructure.</strong></li></ul>', '<ul><li><strong>To promote inclusive growth.</strong></li><li><strong>To promote eco-tourism.</strong></li><li><strong>To improve the socio-economic status.</strong></li></ul>');

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
-- Indexes for table `chair_person_message`
--
ALTER TABLE `chair_person_message`
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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
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
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
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
-- Indexes for table `population_info`
--
ALTER TABLE `population_info`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision_goals`
--
ALTER TABLE `vision_goals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `bottom_scrolling_imges`
--
ALTER TABLE `bottom_scrolling_imges`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `chair_person_message`
--
ALTER TABLE `chair_person_message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `citizen_grievance`
--
ALTER TABLE `citizen_grievance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `department_dignities`
--
ALTER TABLE `department_dignities`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department_overview`
--
ALTER TABLE `department_overview`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_sliding_card`
--
ALTER TABLE `home_sliding_card`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organization_info`
--
ALTER TABLE `organization_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `population_info`
--
ALTER TABLE `population_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recent_updates`
--
ALTER TABLE `recent_updates`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `scheme_details`
--
ALTER TABLE `scheme_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `usefull_links`
--
ALTER TABLE `usefull_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vision_goals`
--
ALTER TABLE `vision_goals`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
