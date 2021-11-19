-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 03:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Userid` int(10) DEFAULT NULL,
  `addressid` int(11) NOT NULL,
  `country` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `homeno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Userid`, `addressid`, `country`, `state`, `city`, `address`, `pincode`, `homeno`) VALUES
(3, 21, 'Belize', 'Toledo', 'Punta Gorda', 'meerut ', '8523', '48454'),
(3, 22, 'Armenia', 'Shirak', 'Shirak', 'meerut hg', '852385', '48454858'),
(3, 23, 'Armenia', 'Lori', 'Lori', 'meerut ', '260405', '48454');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `reaction` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `reaction`, `name`, `email`, `age`, `phone`, `message`) VALUES
(49, 0, 'Akansha', 'ak12@gmail.com', 123123123, 123312, 'Good ');

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(12) NOT NULL,
  `govtid` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `expdocument` varchar(200) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceproviders`
--

INSERT INTO `serviceproviders` (`id`, `fname`, `image`, `experience`, `email`, `mobile`, `govtid`, `service`, `city`, `expdocument`, `price`) VALUES
(31, 'Danish Khan', '316353120.jpg', '1 year', 'danish12@gmail.com', 2147483647, '1647279230.pdf', 'plumber', 'Roorkee', '1410678160.pdf', 584),
(32, 'Jhon', '680790201.jpg', '4 year', 'jhon12@gmail.com', 7878, '1119753813.pdf', 'carpenter', 'Delhi', '611822583.pdf', 750),
(33, 'Siyaram', '2012762674.jpg', '4 year', 'siya12@gmail.com', 2147483647, '965432134.pdf', 'electrician', 'Delhi', '148014002.pdf', 500),
(34, 'Rakesh', '1217019897.jpg', '3 year', 'rk2@gmail.com', 34234234, '5995466.pdf', 'plumber', 'roorkee', '43554728.pdf', 350);

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `gender` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`id`, `name`, `mobile`, `email`, `gender`, `DOB`, `password`, `date`, `time`, `token`) VALUES
(1, 'nishant kumar', '6399508523 ', 'nishantkumar9520@gmail.com', 'Male', '2021-10-25', '741852963', '09/29/2021', '11:04:59', '0'),
(2, 'gagan', '7418523695', 'gagan@gmail.com', 'Male', '2021-10-28', 'gagan', '09/29/2021', '14:56:32', '0'),
(3, 'aditya Kumar', '8529631224', 'aditya02@gmail.com', 'Female', '2021-10-26', 'aditya', '10/01/2021', '06:00:27', ''),
(4, 'aditya Kumar', '1236548520 ', 'aditya@gmail.com', 'Male', '2021-10-13', '852963', '10/01/2021', '06:02:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `name`, `email`) VALUES
(5, 'Aman', 'mo12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userservice`
--

CREATE TABLE `userservice` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `nameservice` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cite` varchar(200) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `noemployee` varchar(100) DEFAULT NULL,
  `timedetails` varchar(255) DEFAULT NULL,
  `datadetails` varchar(255) DEFAULT NULL,
  `paymenttype` varchar(255) NOT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `paydate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinup`
--
ALTER TABLE `sinup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userservice`
--
ALTER TABLE `userservice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sinup`
--
ALTER TABLE `sinup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userservice`
--
ALTER TABLE `userservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
