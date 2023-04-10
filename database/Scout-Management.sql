-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 08:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_471db`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_info`
--

CREATE TABLE `club_info` (
  `club_name` varchar(30) NOT NULL,
  `club_Info` varchar(1200) NOT NULL,
  `club_email` varchar(30) NOT NULL,
  `club_id` int(30) NOT NULL,
  `club_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_info`
--

INSERT INTO `club_info` (`club_name`, `club_Info`, `club_email`, `club_id`, `club_password`) VALUES
('Polarian Hazard', 'A football team consisting of 20 software engineers who know nothing about football. They just know bunch of php and calling themselves fast a gtr, are they?', 'team.deploy@gmail.com', 1, 'abc123'),
('mohamedan', 'Mohammedan Sporting Club Limited Dhaka, founded in 1936 at Dhaka, is one of the oldest and one of the most popular football clubs in Bangladesh, with a support base in all parts of the country.', 'mohamedan@bd.com', 2, 'mohamedan123'),
('abahoni', 'Abahoni Limited Dhaka, also known as Abahoni Krira Chakra, is a Bangladeshi professional football club based in Dhaka, that competes in the Bangladesh Premier League, the top flight of Bangladeshi Football', 'abahoni@bd.com', 3, 'abahoni123'),
('sheikh rasel', 'Sheikh Russel KC is a professional football club based in Dhaka, Bangladesh, currently playing in the Bangladesh Premier League. The club has won the Federation Cup in 2012, which was their first major title.', 'sheikhrasel@bd.com', 4, 'sheikhrasel123'),
('sheikh jamal', 'Lt. Sheikh Jamal Dhanmondi Club, nicknamed Yellow Fear, is a multi-sports club based in the Dhanmondi area, Dhaka, Bangladesh. The club competes in the Bangladesh Premier League, the top-flight of football in Bangladesh', 'sheikhjamal@bd.com', 7, 'sheikhjamal123'),
('muktijoddha sks', 'Muktijoddha Sangsad KC is a Bangladeshi professional football club based in Dhaka, Bangladesh. The club is nicknamed The Freedom Fighters. It competes in the country\'s premier competition, Bangladesh Premier League. ', 'muktijoddhasks@bd.com', 8, 'muktijoddhasks123'),
('bashundhara kings', 'Bashundhara Kings are a professional football team based in Bashundhara Residential Area, Dhaka, Bangladesh. They clinched the title of the 2017 Bangladesh Championship League, the second tier of the professional football league, in their maiden appearance', 'bashundharakings@bd.com', 9, 'bashundharakings123');

-- --------------------------------------------------------

--
-- Table structure for table `coach_info`
--

CREATE TABLE `coach_info` (
  `coach_name` varchar(30) NOT NULL,
  `coach_id` varchar(30) NOT NULL,
  `coach_email` varchar(30) NOT NULL,
  `coach_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach_info`
--

INSERT INTO `coach_info` (`coach_name`, `coach_id`, `coach_email`, `coach_password`) VALUES
('test name', '1', 'admin@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `player_info`
--

CREATE TABLE `player_info` (
  `p_id` varchar(4) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_phone` varchar(12) NOT NULL,
  `p_pace` varchar(3) NOT NULL,
  `p_dribble` varchar(3) NOT NULL,
  `p_shooting` varchar(3) NOT NULL,
  `p_defense` varchar(3) NOT NULL,
  `p_passing` varchar(3) NOT NULL,
  `p_physic` varchar(3) NOT NULL,
  `current_club` varchar(30) NOT NULL,
  `p_position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_info`
--

INSERT INTO `player_info` (`p_id`, `p_name`, `p_phone`, `p_pace`, `p_dribble`, `p_shooting`, `p_defense`, `p_passing`, `p_physic`, `current_club`, `p_position`) VALUES
('1024', 'Griffin Grayson', '30637030599', '98', '97', '70', '88', '55', '60', 'muktijoddha sks', 'ST'),
('1031', 'Massey Jayce', '58101937868', '85', '60', '54', '89', '97', '62', 'sheikh jamal', 'CAM'),
('1106', 'Helen Black', '30092029042', '90', '90', '90', '96', '93', '99', 'bashundhara kings', 'LB'),
('1244', 'Lindsey Teagan', '98538145787', '90', '98', '51', '55', '60', '93', 'abahoni', 'GK'),
('1264', 'Mylee Jayden', '39155634702', '74', '90', '74', '89', '84', '99', 'muktijoddha sks', 'RB'),
('1281', 'Helen Martin', '24274684438', '83', '54', '50', '81', '78', '52', 'sheikh rasel', 'ST'),
('1378', 'Silva Grayson', '13484090057', '82', '82', '74', '98', '82', '50', 'sheikh rasel', 'LB'),
('1379', 'Bryan Griffin', '38647008034', '73', '64', '95', '82', '84', '82', 'abahoni', 'CM'),
('1402', 'Jayce Zuniga', '15216368590', '64', '70', '59', '63', '59', '90', 'bashundhara kings', 'RW'),
('1422', 'Teagan \r\nValeria', '70572084820', '73', '51', '95', '56', '90', '51', 'bashundhara kings', 'CM'),
('1459', 'Jayden Price', '34305965486', '65', '60', '86', '89', '86', '52', 'sheikh rasel', 'LB'),
('1470', 'Valeria Sharp', '79879613479', '73', '70', '65', '95', '64', '68', 'mohamedan', 'CAM'),
('1539', 'Griffin Zuniga', '64633541865', '59', '64', '90', '51', '60', '65', 'mohamedan', 'CAM'),
('1621', 'Martin Price', '79474722723', '76', '60', '56', '56', '84', '72', 'sheikh rasel', 'CAM'),
('1810', 'Gonzalez Bell', '22196047334', '85', '57', '54', '72', '88', '81', 'sheikh rasel', 'CF'),
('1942', 'Gonzalez Mylee', '95703192481', '52', '57', '95', '50', '96', '57', 'sheikh jamal', 'RW'),
('2026', 'Martin Jayden', '27824682734', '83', '76', '78', '65', '59', '83', 'sheikh rasel', 'CM'),
('2079', 'Price Bell', '73190943791', '99', '89', '63', '95', '51', '51', 'sheikh jamal', 'CF'),
('2083', 'Sharp Sharp', '53736540704', '98', '81', '77', '55', '69', '98', 'mohamedan', 'RB'),
('2128', 'Bell Bryan', '29279280201', '68', '51', '99', '74', '74', '75', 'abahoni', 'CF'),
('2138', 'Dodson Grayson', '41654811223', '96', '97', '91', '58', '70', '78', 'sheikh rasel', 'LB'),
('2164', 'Valeria Mylee', '93836651709', '63', '96', '99', '78', '58', '63', 'bashundhara kings', 'CB'),
('2203', 'Bryan Sergio', '33053069937', '62', '76', '76', '77', '99', '77', 'sheikh rasel', 'CM'),
('2213', 'Bradley Price', '79278632723', '82', '50', '50', '79', '55', '75', 'abahoni', 'CB'),
('2627', 'Grayson Gonzalez', '63451861425', '51', '96', '86', '92', '51', '86', 'muktijoddha sks', 'CF'),
('2655', 'Valeria Jayce', '89554933408', '82', '91', '91', '74', '89', '82', 'sheikh rasel', 'CDM'),
('2894', 'Massey Sergio', '99936402470', '52', '59', '90', '90', '60', '63', 'sheikh rasel', 'GK'),
('2996', 'Hess Sergio', '80918618979', '97', '96', '97', '58', '76', '81', 'sheikh rasel', 'CDM'),
('3118', 'Teagan Helen', '91727807476', '98', '64', '53', '53', '94', '75', 'sheikh jamal', 'LB'),
('3141', 'Bryan Jayce', '91858228721', '83', '85', '78', '88', '61', '89', 'mohamedan', 'LW'),
('3202', 'Bell Gonzalez', '21839683434', '80', '99', '90', '69', '58', '73', 'sheikh jamal', 'CAM'),
('3383', 'Lindsey Sergio', '70522542097', '83', '51', '58', '71', '56', '83', 'abahoni', 'GK'),
('3482', 'Jayce Bryan', '98439557658', '93', '76', '96', '64', '95', '97', 'mohamedan', 'CF'),
('3556', 'Hess Silva', '10342484016', '60', '52', '94', '62', '90', '70', 'muktijoddha sks', 'CAM'),
('3585', 'Jayden Black', '39335505540', '84', '58', '53', '55', '73', '93', 'sheikh rasel', 'CF'),
('3638', 'Jayce Bryan', '59629334980', '63', '55', '83', '87', '91', '67', 'sheikh jamal', 'CDM'),
('3646', 'Silva Black', '43494737745', '53', '95', '80', '96', '77', '80', 'muktijoddha sks', 'CM'),
('3652', 'Sergio Lindsey', '22613833620', '99', '93', '99', '83', '52', '99', 'abahoni', 'RW'),
('3653', 'Jayden Silva', '68209995147', '97', '74', '64', '73', '68', '67', 'bashundhara kings', 'GK'),
('3684', 'Price Bryan', '33030731730', '89', '71', '53', '87', '69', '68', 'bashundhara kings', 'RW'),
('3849', 'Valeria Bryan', '29033611491', '87', '64', '61', '61', '89', '90', 'abahoni', 'CDM'),
('3888', 'Jayden Gonzalez', '55935043225', '56', '92', '83', '88', '50', '78', 'abahoni', 'RB'),
('3926', 'Bryan Bryan', '12649251235', '86', '57', '96', '92', '84', '85', 'abahoni', 'CM'),
('3942', 'Jayden Jayce', '72896112407', '61', '54', '61', '89', '89', '59', 'sheikh rasel', 'CF'),
('3976', 'Bradley \r\nMylee', '95245433704', '94', '65', '80', '70', '69', '91', 'bashundhara kings', 'CB'),
('3983', 'Sergio Lindsey', '72726160068', '94', '80', '71', '89', '80', '62', 'muktijoddha sks', 'RW'),
('4181', 'Massey Sharp', '93722163457', '73', '58', '57', '53', '52', '60', 'muktijoddha sks', 'CAM'),
('4261', 'Jayden Griffin', '57393878090', '70', '89', '74', '57', '65', '84', 'mohamedan', 'CAM'),
('4362', 'Bradley Lindsey', '11607438074', '54', '58', '96', '74', '69', '56', 'bashundhara kings', 'RW'),
('4368', 'Massey Zuniga', '22812303782', '59', '84', '91', '87', '53', '50', 'abahoni', 'LW'),
('4378', 'Zuniga Mylee', '30024446390', '74', '79', '50', '50', '91', '80', 'sheikh rasel', 'RB'),
('4430', 'Hess Bryan', '79462517316', '96', '56', '55', '57', '70', '61', 'abahoni', 'CDM'),
('4437', 'Jayden Massey', '64233153181', '95', '80', '50', '87', '51', '91', 'sheikh rasel', 'GK'),
('4444', 'Lindsey Zuniga', '58272953261', '68', '94', '82', '53', '95', '56', 'muktijoddha sks', 'GK'),
('4473', 'Helen Gonzalez', '18355287972', '74', '60', '80', '74', '58', '72', 'sheikh rasel', 'LW'),
('4517', 'Dodson Bradley', '94442166861', '74', '89', '84', '70', '66', '94', 'sheikh rasel', 'CDM'),
('4542', 'Bryan Bradley', '99426568944', '87', '94', '94', '90', '65', '69', 'abahoni', 'CM'),
('4582', 'Sharp Mylee', '35996111979', '61', '59', '89', '82', '97', '59', 'abahoni', 'CB'),
('4597', 'Zuniga Lindsey', '21616089958', '94', '73', '80', '58', '66', '75', 'bashundhara kings', 'CDM'),
('4727', 'Dodson Grayson', '82812012354', '95', '85', '85', '69', '93', '64', 'mohamedan', 'LW'),
('4779', 'Hess Zuniga', '92851707819', '66', '62', '90', '87', '76', '90', 'sheikh rasel', 'CAM'),
('5112', 'Bell Jayce', '64999985427', '87', '78', '93', '68', '83', '99', 'sheikh rasel', 'RW'),
('5178', 'Grayson Price', '21524357374', '78', '78', '78', '73', '78', '79', 'mohamedan', 'CM'),
('5204', 'Bell Griffin', '29194762849', '59', '59', '76', '69', '63', '51', 'abahoni', 'ST'),
('5234', 'Hess Gonzalez', '68378760335', '83', '55', '93', '88', '55', '88', 'muktijoddha sks', 'CAM'),
('5325', 'Mylee Martin', '60531609726', '52', '93', '60', '84', '65', '51', 'muktijoddha sks', 'CAM'),
('5332', 'Sergio Dodson', '56551014336', '51', '80', '96', '92', '83', '80', 'mohamedan', 'RW'),
('5426', 'Helen Silva', '64953566093', '92', '94', '54', '93', '73', '88', 'sheikh jamal', 'LB'),
('5527', 'Griffin Bradley', '30392523483', '57', '94', '83', '53', '66', '96', 'sheikh jamal', 'LB'),
('5593', 'Griffin Jayce', '44165865108', '69', '86', '73', '81', '58', '98', 'mohamedan', 'CM'),
('5786', 'Hess Price', '82492491587', '57', '56', '52', '72', '57', '61', 'abahoni', 'ST'),
('5921', 'Martin Jayden', '22441052229', '96', '91', '65', '86', '53', '70', 'mohamedan', 'ST'),
('5991', 'Silva Hess', '65745532122', '58', '90', '86', '96', '96', '59', 'sheikh jamal', 'CM'),
('6013', 'Valeria Helen', '34477774547', '55', '55', '60', '55', '82', '55', 'mohamedan', 'CF'),
('6014', 'Martin Bell', '32922258109', '60', '51', '51', '53', '98', '63', 'abahoni', 'CF'),
('6118', 'Mylee Black', '96341965547', '93', '65', '91', '91', '59', '57', 'abahoni', 'LW'),
('6144', 'Hayle Black', '44241125817', '69', '60', '87', '54', '64', '87', 'abahoni', 'LW'),
('6164', 'Sergio Bryan', '89270025982', '51', '85', '98', '79', '67', '77', 'sheikh jamal', 'CDM'),
('6261', 'Black Bell', '96666310093', '78', '72', '59', '55', '68', '97', 'abahoni', 'RW'),
('6331', 'Helen Hayle', '85145913703', '96', '90', '94', '88', '62', '54', 'abahoni', 'CDM'),
('6355', 'Bell Bradley', '78217603649', '88', '95', '83', '61', '88', '95', 'abahoni', 'LW'),
('6386', 'Valeria Bell', '89949972195', '91', '54', '76', '83', '85', '54', 'mohamedan', 'CF'),
('6456', 'Silva Black', '54345281536', '65', '84', '96', '96', '64', '77', 'sheikh rasel', 'LW'),
('6524', 'Jayden Bradley', '73199293615', '57', '81', '87', '51', '69', '96', 'muktijoddha sks', 'CDM'),
('6531', 'Price Sergio', '23419451390', '99', '94', '57', '72', '74', '99', 'bashundhara kings', 'LW'),
('6640', 'Bryan Jayce', '57794342256', '62', '82', '56', '53', '56', '79', 'muktijoddha sks', 'RW'),
('6659', 'Grayson Zuniga', '33849123522', '51', '53', '96', '68', '56', '55', 'abahoni', 'CB'),
('6865', 'Silva Valeria', '98146874225', '68', '85', '87', '68', '59', '57', 'abahoni', 'GK'),
('7308', 'Silva Jayden', '66366127724', '56', '61', '61', '58', '58', '79', 'muktijoddha sks', 'RW'),
('7398', 'Teagan Hayle', '96211455558', '60', '61', '73', '55', '74', '83', 'mohamedan', 'CB'),
('7454', 'Teagan Bradley', '45583129455', '70', '76', '54', '58', '97', '72', 'sheikh rasel', 'CB'),
('7462', 'Lindsey Silva', '24516606477', '71', '71', '77', '88', '80', '56', 'mohamedan', 'LW'),
('7789', 'Price Black', '35335270185', '87', '96', '52', '83', '92', '73', 'abahoni', 'LW'),
('7799', 'Sharp Silva', '59140305111', '97', '94', '80', '62', '63', '67', 'sheikh rasel', 'GK'),
('7919', 'Dodson Sergio', '33407299083', '83', '72', '62', '91', '85', '85', 'sheikh rasel', 'ST'),
('7957', 'Sharp Helen', '93653048835', '65', '61', '57', '93', '83', '87', 'abahoni', 'CF'),
('7958', 'Teagan Valeria', '15415788595', '78', '91', '58', '78', '56', '77', 'bashundhara kings', 'CDM'),
('8139', 'Hess Teagan', '36469858017', '76', '55', '86', '69', '70', '76', 'mohamedan', 'CF'),
('8208', 'Grayson Bryan', '99249104229', '73', '91', '68', '77', '70', '96', 'sheikh rasel', 'RB'),
('8212', 'Dodson Lindsey', '46141142215', '90', '78', '82', '52', '51', '99', 'mohamedan', 'GK'),
('8229', 'Sharp Hess', '78589525761', '58', '71', '84', '89', '55', '89', 'bashundhara kings', 'LB'),
('8389', 'Helen Silva', '64707041539', '51', '56', '90', '56', '87', '56', 'sheikh rasel', 'RW'),
('8398', 'Sharp Bradley', '61046878392', '76', '76', '79', '85', '83', '62', 'bashundhara \r\nkings', 'CAM'),
('8405', 'Bradley Lindsey', '23730663327', '96', '87', '89', '81', '70', '63', 'sheikh jamal', 'CDM'),
('8686', 'Bradley Hayle', '48644893555', '89', '66', '50', '66', '86', '86', 'abahoni', 'LB'),
('8764', 'Dodson Griffin', '62587205417', '62', '69', '82', '68', '69', '63', 'abahoni', 'LB'),
('8966', 'Bell Sharp', '27281329056', '72', '71', '56', '90', '56', '62', 'sheikh rasel', 'GK'),
('9051', 'Bryan Jayce', '19705184864', '90', '70', '51', '74', '57', '51', 'bashundhara kings', 'CB'),
('9081', 'Silva Griffin', '22490205255', '56', '90', '81', '59', '69', '85', 'sheikh rasel', 'LB'),
('9149', 'Valeria Griffin', '89198513746', '65', '66', '91', '85', '74', '91', 'sheikh jamal', 'RB'),
('9159', 'Grayson Price', '46270224513', '61', '59', '91', '84', '79', '59', 'muktijoddha sks', 'LB'),
('9173', 'Black Massey', '27380847315', '53', '83', '80', '97', '70', '85', 'sheikh rasel', 'LB'),
('9272', 'Bryan Dodson', '81566999624', '98', '99', '95', '99', '92', '80', 'sheikh rasel', 'CM'),
('9359', 'Bradley Gonzalez', '97222669830', '83', '54', '78', '69', '96', '97', 'muktijoddha sks', 'LB'),
('9497', 'Hayle Martin', '86942433458', '90', '58', '93', '71', '86', '88', 'abahoni', 'CM'),
('9544', 'Sergio Bradley', '55964333792', '86', '95', '93', '95', '95', '80', 'sheikh rasel', 'RB'),
('9577', 'Lindsey Sharp', '13921168203', '95', '71', '59', '56', '95', '92', 'muktijoddha sks', 'RW'),
('9638', 'Gonzalez Griffin', '86682643365', '68', '85', '71', '65', '50', '64', 'mohamedan', 'LW'),
('9797', 'Helen Dodson', '70006530654', '96', '51', '55', '57', '55', '89', 'sheikh jamal', 'CAM'),
('9798', 'Grayson Black', '78079302483', '96', '61', '55', '79', '86', '54', 'bashundhara kings', 'CDM');

-- --------------------------------------------------------

--
-- Table structure for table `scout_info`
--

CREATE TABLE `scout_info` (
  `name` varchar(30) DEFAULT NULL,
  `scout_id` int(5) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scout_info`
--

INSERT INTO `scout_info` (`name`, `scout_id`, `email`, `password`) VALUES
('Corey Anderson', 12256, 'candy@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `scout_report`
--

CREATE TABLE `scout_report` (
  `scoutName` varchar(45) NOT NULL,
  `about` varchar(120) NOT NULL,
  `reportTitle` varchar(120) NOT NULL,
  `report` varchar(1200) NOT NULL,
  `id` int(5) NOT NULL,
  `scoutID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scout_report`
--

INSERT INTO `scout_report` (`scoutName`, `about`, `reportTitle`, `report`, `id`, `scoutID`) VALUES
('Corey Anderson', 'dsadsa', 'dsadsa', ' dsadsa', 1, 12256),
('Corey Anderson', 'dsadsa', 'dsadas', ' dsadas', 2, 12256);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_info`
--
ALTER TABLE `club_info`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `player_info`
--
ALTER TABLE `player_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `scout_report`
--
ALTER TABLE `scout_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_info`
--
ALTER TABLE `club_info`
  MODIFY `club_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scout_report`
--
ALTER TABLE `scout_report`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
