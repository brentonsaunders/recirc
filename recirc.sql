-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 12:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recirc`
--

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` int(11) NOT NULL,
  `carrier` varchar(255) NOT NULL,
  `sms_gateway` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `carrier`, `sms_gateway`) VALUES
(1, 'AT&T', 'txt.att.net'),
(2, 'Boost Mobile', 'sms.myboostmobile.com'),
(3, 'C-Spire', 'cspire1.com'),
(4, 'Consumer Cellular', 'mailmymobile.net'),
(5, 'Cricket', 'sms.cricketwireless.net'),
(6, 'Google Fi', 'msg.fi.google.com'),
(7, 'Metro PCS', 'mymetropcs.com'),
(8, 'Mint Mobile', 'mailmymobile.net'),
(9, 'Page Plus', 'vtext.com'),
(10, 'Republic Wireless', 'text.republicwireless.com'),
(11, 'Simple Mobile', 'smtext.com'),
(12, 'Sprint', 'messaging.sprintpcs.com'),
(13, 'T-Mobile', 'tmomail.net'),
(14, 'Ting', 'message.ting.com'),
(15, 'Tracfone', 'mmst5.tracfone.com'),
(16, 'U.S. Cellular', 'email.uscc.net'),
(17, 'Verizon', 'vtext.com'),
(18, 'Virgin Mobile', 'vmobl.com'),
(19, 'Visible', 'text.com'),
(20, 'Xfinity Mobile', 'vtext.com');

-- --------------------------------------------------------

--
-- Table structure for table `lanes`
--

CREATE TABLE `lanes` (
  `lane` varchar(255) NOT NULL,
  `recirc` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `running`
--

CREATE TABLE `running` (
  `id` int(11) NOT NULL,
  `running` tinyint(1) NOT NULL,
  `time` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `running`
--

INSERT INTO `running` (`id`, `running`, `time`) VALUES
(0, 1, '2022-04-23 08:49:45.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shift` enum('1','2','','') NOT NULL,
  `phone` char(10) NOT NULL,
  `carrier_id` int(11) NOT NULL,
  `notifications_on` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lanes`
--
ALTER TABLE `lanes`
  ADD PRIMARY KEY (`lane`);

--
-- Indexes for table `running`
--
ALTER TABLE `running`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `carrier_id` (`carrier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
