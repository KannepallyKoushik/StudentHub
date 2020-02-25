-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 11:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `college` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `rollno`, `name`, `phonenum`, `college`, `department`) VALUES
(1, 'kannepallykoushikkumar@gmail.com', '94400_koushik', '16831A1223', 'Koushik Kumar', '9346617100 ', 'GNIT  ', 'IT'),
(2, 'pavan@gmail.com', 'pavanitem', '16831A1229', 'pavan kumar', '1234567890', 'GNIT', 'IT'),
(3, 'archithareddychalla@gmail.com', 'archi123', '17831A1204', 'Architha Reddy', '9100623924', 'GNIT', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `helpnotification`
--

CREATE TABLE `helpnotification` (
  `id` int(11) NOT NULL,
  `senderid` varchar(20) NOT NULL,
  `recieverid` varchar(20) NOT NULL,
  `projectid` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `checked` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpnotification`
--

INSERT INTO `helpnotification` (`id`, `senderid`, `recieverid`, `projectid`, `message`, `date`, `checked`) VALUES
(1, '2', '1', '15', 'I can help you with the front end development ,\r\nContact me if there is any need for me', '2019-11-04 17:55:40', '0'),
(5, '1', '1', '16', 'testing', '2019-11-04 20:55:16', '1'),
(6, '1', '1', '15', 'testing 2', '2019-11-04 20:55:46', '0'),
(7, '1', '1', '16', 'testing 3', '2019-11-04 20:56:02', '1'),
(8, '2', '1', '16', 'testing 4', '2019-11-04 20:56:57', '1'),
(9, '2', '1', '15', 'testing 5', '2019-11-04 20:57:12', '1'),
(10, '2', '1', '15', 'testing 6', '2019-11-04 20:57:30', '0'),
(11, '2', '1', '16', 'testing 7', '2019-11-04 20:57:45', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `ID` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `domain` varchar(20) NOT NULL,
  `idea_description` varchar(500) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`ID`, `userid`, `domain`, `idea_description`, `query`) VALUES
(2, '1', 'hardware', 'Want to develope home automation process', 'what microcontrollers should i use?');

-- --------------------------------------------------------

--
-- Table structure for table `ideasolution`
--

CREATE TABLE `ideasolution` (
  `ID` int(11) NOT NULL,
  `solution` varchar(500) NOT NULL,
  `idea_id` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideasolution`
--

INSERT INTO `ideasolution` (`ID`, `solution`, `idea_id`, `userid`) VALUES
(2, 'user esp and arduino', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `expiry` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `userid`, `otp`, `created_at`, `expiry`) VALUES
(1, '1', '818643', '2019-11-03 16:22:18', '1'),
(2, '1', '261279', '2019-11-03 16:25:48', '1'),
(3, '1', '243508', '2019-11-03 17:44:53', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subpro`
--

CREATE TABLE `subpro` (
  `ID` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `project_description` varchar(5000) NOT NULL,
  `domain` varchar(20) NOT NULL,
  `project_file` varchar(5000) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dateofposting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subpro`
--

INSERT INTO `subpro` (`ID`, `userid`, `project_name`, `project_description`, `domain`, `project_file`, `status`, `dateofposting`) VALUES
(15, '1', 'Street Cause', 'It is an NGO Web page', 'software', '5a67a03ee4b066cbce1a8ec9.jpg', 'needhelp', '2019-10-31 21:35:19'),
(16, '1', 'Retrofit', 'Can toggle Home appliances.\r\nCan be controlled using mobile app or voice control over alexa.', 'hardware', 'wp1828938.jpg', 'needhelp', '2019-11-04 20:47:01'),
(17, '3', 'Food Delivery App', 'It is same as swiggy', 'software', '665091.jpg', 'needhelp', '2019-11-04 22:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpnotification`
--
ALTER TABLE `helpnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ideasolution`
--
ALTER TABLE `ideasolution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpro`
--
ALTER TABLE `subpro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `helpnotification`
--
ALTER TABLE `helpnotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ideasolution`
--
ALTER TABLE `ideasolution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subpro`
--
ALTER TABLE `subpro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
