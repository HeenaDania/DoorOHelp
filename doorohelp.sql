-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 03:41 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doorohelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'heena', 'heena.dania7@gmail.com', 'aA==', './../images/avatar.png'),
(2, 'thakur', 'thakur.preetirana@gmail.com', 'cA==', './../images/avatar.png'),
(3, 'muskan', 'manisood55@gmail.com', 'bQ==', './../images/avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE IF NOT EXISTS `professionals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `verified` int(50) NOT NULL,
  `experience` int(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`id`, `name`, `city`, `profession`, `phone`, `email`, `image`, `verified`, `experience`, `address`, `latitude`, `longitude`) VALUES
(1, 'Flora Cooling Point', 'Ludhiana', 'Air Cooler Repair', '8054939243', 'floraCoolingPoint@gmail.com', './../images/business5.png', 1, 5, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(2, 'Deep A.C. Care Center', 'Ludhiana', 'Air Cooler Repair', '9815560170', 'deepAC@gmail.com', './../images/06.jpg', 1, 7, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767927', '75.8658968'),
(3, 'Videocon Service Centre', 'Ludhiana', 'Air Cooler Repair', '7527054277', 'videocoServiceCentre@gmail.com', './../images/ac.jpg', 1, 10, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.865896875.8604663'),
(4, 'H.S. SEHGAL & ASSOCIATES - HSSA', 'Ludhiana', 'Architect', '8054200048', 'sehgalAssoc@outlook.com', './../images/03.jpg', 1, 5, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767927', '75.8658968'),
(5, 'RIDDEN INTERIO', 'Ludhiana', 'Architect', '9815309840', 'riddenInterio@gmail.com', './../images/architect.jpg', 1, 4, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8659110999999975.8604663'),
(6, 'King IT Solutions', 'Ludhiana', 'Web Developer', '9815465528', 'kingITS@yahoo.com', './../images/03.jpg', 1, 6, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(7, 'Pioneer Web Technology', 'Ludhiana', 'Web Developer', '9815023491', 'pioneerWT@gmail.com', './../images/06.jpg', 1, 5, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(8, 'DCS Web Solutions', 'Ludhiana', 'Web Developer', '9356092897', 'DCS@outlook.com', './../images/ac.jpg', 1, 2, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(9, 'Dutt Astro Vision', 'Ludhiana', 'Astrologer', '9356092897', 'duttAstroVision@outlook.com', './../images/business5.png', 1, 8, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(10, 'Ganga Jyotish Kendra', 'Ludhiana', 'Astrologer', '75080 28749', 'gangaJyotish@yahoo.com', './../images/team1.jpg', 0, 4, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(11, 'Star Health And Allied Insurance Co. Ltd', 'Ludhiana', 'Insurance Agent', '161 434 9003', 'starHealth@outlook.com', './../images/business5.png', 1, 6, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(12, 'Lic Agent', 'Ludhiana', 'Insurance Agent', '161 249 4030', 'lic@gmail.com', './../images/team3.jpg', 1, 12, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(13, 'Vandana Traders', 'Ludhiana', 'Carpenter', '98721 86007', 'vandanaTraders@gmail.com', './../images/team1.jpg', 1, 3, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(14, 'Waheguru Wood Works', 'Ludhiana', 'Carpenter', '94641 38858', 'waheguruWorks@gmail.com', './../images/team2.jpg', 1, 7, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(15, 'Jasmine & Associates', 'Ludhiana', 'CA for Income Tax Filling', '98141 60550', 'jasmineAssoc@outlook.com', './../images/team3.jpg', 1, 10, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(16, 'R.K. Chadha & Co', 'Ludhiana', 'CA for Income Tax Filling', '161 464 0666', 'RKChadha@gmail.com', './../images/business5.png', 1, 2, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(17, 'Anup Kumar Jain & Co.', 'Ludhiana', 'CA for Income Tax Filling', '161 463 3764', 'anupKumar@yahoo.com', './../images/05.jpg', 0, 3, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(18, 'Asian Communications', 'Ludhiana', 'Mobile Repair', '98154 82215', 'asianComm@yahoo.com', './../images/team1.jpg', 1, 6, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(19, 'Mehar Electronics', 'Ludhiana', 'Mobile Repair', '81467 46721', 'meharElect@outlook.com', './../images/testimonials2.png', 1, 7, '200, D-Block Bhai Rahdhir Singh Nagar, Ludhiana, Punjab 141001, D Block, BRS Nagar, Ludhiana, Punjab 141012', '30.885964', '75.81508'),
(20, 'Gupta Mobile Care Center', 'Ludhiana', 'Mobile Repair', '161 438 1473', 'guptaCentre@gmail.com', './../images/team2.jpg', 1, 5, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(21, 'Baba Tent Services', 'Ludhiana', 'Birthday Party Planner', '98725 86860', 'babaTS@yahoo.com', './../images/team3.jpg', 1, 7, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(22, 'Taj Catering & Events', 'Ludhiana', 'Birthday Party Planner', '99889 01858', 'tajCaterers@gmail.com', './../images/team1.jpg', 1, 9, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(23, 'Dhawan Computer Solution', 'Ludhiana', 'Computer Repair', '98036 81706', 'dhawanCS@yahoo.com', './../images/team2.jpg', 1, 5, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663'),
(24, 'Sharma P.C Care', 'Ludhiana', 'Computer Repair', '98888 13239', 'sharmaCare@outlook.com', './../images/ac.jpg', 1, 4, '1567, Street Number 17, Janta Nagar, Ludhiana, Punjab 141003, India', '30.8767991', '75.86591109999999'),
(25, 'R.R Computer World', 'Ludhiana', 'Computer Repair', '99880 90190', 'RRCompWorld@gmail.com', './../images/business5.png', 0, 6, '73, Phase V, Gill Park, Ludhiana, Punjab 142021, India', '30.859949600000004', '75.8604663');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Air Cooler Repair'),
(2, 'Architect'),
(3, 'Web Developer'),
(4, 'Astrologer'),
(5, 'AC Service and Repair'),
(6, 'Insurance Agent'),
(7, 'Birthday Party Planner'),
(8, 'CA for Small Business'),
(9, 'Baby Portfolio Photographer'),
(10, 'Computer Repair'),
(11, 'Car Cleaning'),
(12, 'CCTV Cameras and Installation'),
(13, 'Carpenter'),
(14, 'Dry Cleaning'),
(15, 'Dietician'),
(16, 'Event Photographers'),
(17, 'Real Estate Lawyer'),
(18, 'Painters'),
(19, 'Web Designer'),
(20, 'Monthly Tifin Service'),
(21, 'Fitness Trainer at Home'),
(22, 'CAs for Tax Registration'),
(23, 'CA for Income Tax Filling'),
(24, 'Graphics Designer'),
(25, 'Geyser/Water Heater Repair'),
(26, 'Guitar Classes'),
(27, 'Microwave Repair'),
(28, 'Home Tutor'),
(29, 'Salon at Home'),
(30, 'Home Deep Cleaning'),
(31, 'Pest Control'),
(32, 'Television Installation and Repair'),
(33, 'Mobile Repair'),
(34, 'Physiotherapy at Home'),
(35, 'Keyboard Classes'),
(36, 'Modular Kitchens'),
(37, 'Yoga Trainer at Home'),
(38, 'Laptop Repair'),
(39, 'Lawyer'),
(40, 'Logo Designers'),
(41, 'Mathematics Tutor'),
(42, 'DJ'),
(43, 'Study Abroad Councellors'),
(44, 'Elder Care at Home'),
(45, 'Plumber'),
(46, 'Party Caterer'),
(47, 'Packers and Movers'),
(48, 'Photographer'),
(49, 'Refrigirator Repair'),
(50, 'GST Registration and Migration Services'),
(51, 'Sofa Cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `feedback`) VALUES
(1, 'Muskan', './../images/02.jpg', 'I have a great experience after  using this Door-O-Help.Thanks for helping me in getting the Electrician quickly.'),
(2, 'Ashutosh Gore', './../images/01.jpg', 'Highly recommended! I logged the issue, the technician arrived on time, found the root cause & replaced the faulty component.'),
(3, 'Sarthak Patel', './../images/team2.jpg', 'New found respect for Door O Help today! I decided to try their housekeeping services. Very happy and would definitely be using it again.'),
(4, 'Naina', './../images/comment5.jpg', 'Used UrbanClap to hire packers, came highly recommended'),
(5, 'Aseem Soherwardi', './../images/05.jpg', 'Great service! Works on a very systematic process and consists of good technicians'),
(6, 'Deeksha', './../images/testimonials2.png', 'Such hygienic services by Door O Help. Super impressed! :clap:');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'heena.dania7@gmail.com', 'aA=='),
(2, 'thakur.preetirana@gmail.com', 'cHJlZXRp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
