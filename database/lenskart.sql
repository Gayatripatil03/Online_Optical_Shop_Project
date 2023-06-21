-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 02:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenskart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL,
  `busid` int(11) NOT NULL,
  `no_of_seat` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `busid`, `no_of_seat`, `userid`) VALUES
(2, 110213, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_problem`
--

CREATE TABLE `customer_problem` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `eyepower` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_problem`
--

INSERT INTO `customer_problem` (`id`, `name`, `mobile`, `email`, `address`, `problem`, `eyepower`, `userid`, `status`) VALUES
(1, 'anshu', '7745990607', 'anshu@gmail.com', 'abct', '3', '0.5+', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `glass`
--

CREATE TABLE `glass` (
  `glassid` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(400) NOT NULL,
  `price` varchar(300) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glass`
--

INSERT INTO `glass` (`glassid`, `name`, `image`, `price`, `description`) VALUES
(1, 'square Glass', 'q.png', '700', 'Rim: Full Rim\r\nShape: Square\r\nMaterial: TR\r\nFeature: Custom engraving , Lightweight , Universal Bridge Fit\r\nTags: Holiday Eyewear\r\nFrame Width: 137 mm\r\n Lens Width: 50 mm\r\n Bridge: 19 mm'),
(3, 'Square Glasses 126225', 'ty.png', '20000', 'Rim: Full Rim\r\nShape: Square\r\nMaterial: Other Plastic\r\nFeature: Custom engraving\r\nTags: Teen Glasses , All Kids Eyeglasses , Teen Girls Glasses , Teen Guys Glasses Frame Width: 137 mm\r\n Lens Width: 53 mm\r\n Bridge: 17 mm'),
(4, 'Hangtime 125118', 'd.png', '800', 'Rim: Full Rim\r\nShape: Rectangle\r\nMaterial: Other Plastic\r\nFeature: Custom engraving\r\nFrame Width: 139 mm\r\n Lens Width: 53 mm\r\n Bridge: 16 mm'),
(5, 'Rectangle Glasses 125021', 'q.png', '700', 'Rim: Full Rim\r\nShape: Rectangle\r\nMaterial: Other Plastic\r\nFeature: Custom engraving\r\nFrame Width: 138 mm\r\n Lens Width: 50 mm\r\n Bridge: 20 mm'),
(6, 'Square Glasses 124121', 'e.png', '999', 'Rim: Full Rim\r\nShape: Square\r\nMaterial: Other Plastic\r\nFeature: Custom engraving\r\n Frame Width: 142 mm\r\n Lens Width: 50 mm\r\n Bridge: 20 mm'),
(7, 'quare Glasses 127921', 't.png', '999', 'Rim: Full Rim\r\nShape: Square\r\nMaterial: Other Plastic\r\nFeature: Custom engraving , Lightweight\r\n Frame Width: 142 mm\r\n Lens Width: 51 mm\r\n Bridge: 18 mm'),
(8, 'Rectangle Glasses 129521', 'ty.png', '700', 'Rim: Full Rim\r\nShape: Rectangle\r\nMaterial: Other Plastic\r\nFeature: Custom engraving\r\nFRAME SIZE\r\n Frame Width: 138 mm\r\n Lens Width: 51 mm\r\n Bridge: 18 mm'),
(9, 'Round Glasses 7801821', 'o.png', '70', 'Rim: Full Rim\r\nShape: Round\r\nMaterial: Mixed Materials\r\nFeature: Universal Bridge Fit\r\nFRAME SIZE\r\n Frame Width: 140 mm\r\n Lens Width: 52 mm\r\n Bridge: 18 mm');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(3) NOT NULL,
  `cardnumber` int(10) NOT NULL,
  `card_expairy` varchar(60) NOT NULL,
  `cvc_code` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `userid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardnumber`, `card_expairy`, `cvc_code`, `amount`, `userid`) VALUES
(1, 2147483647, '11/2', 465, 1100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `eyeglass` varchar(228) NOT NULL,
  `computer` varchar(225) NOT NULL,
  `sunglasses` varchar(300) NOT NULL
  `progressive` varchar(300) NOT NULL
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addglass type`
--

INSERT INTO `problem` (`eyeglass`, `computer`, `sunglasses`,'progressive') VALUES
('Rectangle','Zero power','extra wide','Round','easy to used'),
('Round','With Power','Narrow','Round','Geometric'),


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(3) NOT NULL,s
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'anshu', '7745990607', 'anshu@gmail.com', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `customer_problem`
--
ALTER TABLE `customer_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glass`
--
ALTER TABLE `glass`
  ADD PRIMARY KEY (`glassid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`problemid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_problem`
--
ALTER TABLE `customer_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `glass`
--
ALTER TABLE `glass`
  MODIFY `glassid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `problemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
