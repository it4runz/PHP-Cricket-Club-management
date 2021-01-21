-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 02:57 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbccms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `meassage` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `meassage`, `date`) VALUES
(1, 'krish', 'Krishpatel@gmail.com', '9999000099', 'ground ahmedabad', 'can you provide me a ground @ ghodasar ahmedabad location?', '2020-01-04 10:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE IF NOT EXISTS `imgupload` (
  `id` int(11) NOT NULL,
  `image` varchar(400) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`id`, `image`) VALUES
(1, 'anshul.png'),
(3, 'chirag.png');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `contactno` decimal(10,0) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `contactno`, `email`, `address`, `pincode`, `city`, `state`, `country`) VALUES
(1, 'krutarth patel', '9990009990', 'krutarth@gmail.com', 'vadodara', 390007, 'vadodara', 'gujarat', 'india'),
(2, 'Zeel patel', '9777977779', 'zeelpatel@gmail.com', 'vadodara', 390007, 'vadodara', 'gujarat', 'india'),
(3, '1', '1321231321', 'NH@GMil.om', '11', 1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminreg`
--

CREATE TABLE IF NOT EXISTS `tbladminreg` (
  `adminid` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladminreg`
--

INSERT INTO `tbladminreg` (`adminid`, `name`, `username`, `password`, `emailid`, `mobileno`) VALUES
(1, '1', '1', '1', '1', '1'),
(2, 'krutarth', 'krutarth', 'krutarth', 'krutarth@gmail.com', '9898980000'),
(3, 'ZEEL', 'zeel', 'zeel', 'zeel@gmail.com', '9990009990');

-- --------------------------------------------------------

--
-- Table structure for table `tblbatchregistration`
--

CREATE TABLE IF NOT EXISTS `tblbatchregistration` (
  `batchid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactno` decimal(10,0) DEFAULT NULL,
  `batchtype` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbatchregistration`
--

INSERT INTO `tblbatchregistration` (`batchid`, `uid`, `name`, `email`, `contactno`, `batchtype`) VALUES
(1, 1, 'krutarth', 'krutarth@gmail.com', '9990009990', 'Regular'),
(2, 1, '1', 'KRUTARTH@GMAIL.COM', '1', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tblgroundbooking`
--

CREATE TABLE IF NOT EXISTS `tblgroundbooking` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactno` decimal(10,0) DEFAULT NULL,
  `purpose` varchar(40) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `noofday` int(11) DEFAULT NULL,
  `todate` varchar(40) DEFAULT NULL,
  `Amount` varchar(40) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgroundbooking`
--

INSERT INTO `tblgroundbooking` (`id`, `name`, `email`, `contactno`, `purpose`, `date`, `noofday`, `todate`, `Amount`, `status`) VALUES
(1, 'krutarth', 'krutarth@gmail.com', '9990009990', 'for match', '2020-01-01', 3, '2020-01-04', '2000', 1),
(2, 'Zeel', 'zeelp@gmail.com', '8989000098', 'twenty match', '16-01-2020', 1, '17-01-2020', '3000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE IF NOT EXISTS `tblpost` (
  `id` int(11) NOT NULL,
  `newpost` varchar(400) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`id`, `newpost`, `date`) VALUES
(1, 'match will be on 4th january,2020', '2020-01-03'),
(2, 'for date 16th January, 2020 has been booked in advanced.', '2020-01-03'),
(3, 'NEW BOOKING OFFER ', '2020-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminreg`
--
ALTER TABLE `tbladminreg`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblbatchregistration`
--
ALTER TABLE `tblbatchregistration`
  ADD PRIMARY KEY (`batchid`);

--
-- Indexes for table `tblgroundbooking`
--
ALTER TABLE `tblgroundbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbladminreg`
--
ALTER TABLE `tbladminreg`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblbatchregistration`
--
ALTER TABLE `tblbatchregistration`
  MODIFY `batchid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblgroundbooking`
--
ALTER TABLE `tblgroundbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
