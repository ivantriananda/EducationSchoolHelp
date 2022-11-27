-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 10:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationschoolhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(50) NOT NULL,
  `offerDate` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `offerstatus` varchar(50) NOT NULL,
  `get_ID_Request` int(50) NOT NULL,
  `get_ID_User` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id_offer`, `offerDate`, `remarks`, `offerstatus`, `get_ID_Request`, `get_ID_User`) VALUES
(1, '19-11-22', '', 'ACCEPTED', 2, 1),
(2, '19-11-22', '', 'ACCEPTED', 2, 1),
(3, '19-11-22', '', 'ACCEPTED', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(50) NOT NULL,
  `requestDate` varchar(50) NOT NULL,
  `requestStatus` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `get_ID_School` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestID`, `requestDate`, `requestStatus`, `description`, `get_ID_School`) VALUES
(1, '19-11-22', 'New', '', 0),
(2, '19-11-22', 'CLOSED', 'a', 0),
(3, '26-11-22', 'New', 'DatCom', 0),
(4, '26-11-22', 'New', 'DatCom', 0),
(5, '26-11-22', 'New', 'DatCom', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resourcerequest`
--

CREATE TABLE `resourcerequest` (
  `resourcetype` varchar(50) NOT NULL,
  `numrequired` int(50) NOT NULL,
  `get_ID_request` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resourcerequest`
--

INSERT INTO `resourcerequest` (`resourcetype`, `numrequired`, `get_ID_request`) VALUES
('', 0, 1),
('', 0, 3),
('', 0, 3),
('', 0, 4),
('', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolID` int(40) NOT NULL,
  `schoolName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolID`, `schoolName`, `address`, `city`) VALUES
(1, 'a', 'a', ''),
(2, 'Stikom1', 'renon', 'bali'),
(3, 'Stikom1', 'renon', 'bali'),
(4, 'ad', 'AD', 'AD'),
(5, 'ad', 'AD', 'AD'),
(6, 'ad', 'AD', 'AD'),
(7, 'a', 'a', 'a'),
(8, 'a', 'a', 'a'),
(9, 'a', 'a', 'a'),
(10, 'Stikom1', 'Stikom1', 'Stikom1'),
(11, 'Stikom12', 'Stikom12', 'Stikom12'),
(12, 'Stikom123', 'Stikom123', 'Stikom123'),
(13, 'Stikom1234', 'Stikom1234', 'Stikom1234'),
(14, 'Stikom1234', 'Stikom1234', 'Stikom1234'),
(15, 'Stikom1234', 'Stikom1234', 'Stikom1234'),
(16, 'Stikom iTB', 'Renon', 'Bali'),
(17, 'Stikom iTB', 'Renon', 'Bali'),
(18, 'Stikom iTB', 'Renon', 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE `schooladmin` (
  `staffID` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `get_ID_User` int(50) NOT NULL,
  `get_ID_School` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schooladmin`
--

INSERT INTO `schooladmin` (`staffID`, `position`, `get_ID_User`, `get_ID_School`) VALUES
('', '', 9, 0),
('1', 'schooladmin', 10, 0),
('12', 'schooladmin', 11, 0),
('a', 'schooladmin', 12, 0),
('a', 'schooladmin', 13, 0),
('a', 'schooladmin', 14, 13),
('29', 'schooladmin', 15, 16),
('29', 'schooladmin', 16, 16),
('29', 'schooladmin', 17, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tutorialrequest`
--

CREATE TABLE `tutorialrequest` (
  `proposedDate` varchar(50) NOT NULL,
  `proposedTime` varchar(50) NOT NULL,
  `studentLevel` varchar(50) NOT NULL,
  `numStudent` varchar(50) NOT NULL,
  `get_ID_Request` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorialrequest`
--

INSERT INTO `tutorialrequest` (`proposedDate`, `proposedTime`, `studentLevel`, `numStudent`, `get_ID_Request`) VALUES
('', '', '', '', 1),
('2022-11-19', '', 'a', '1', 3),
('2022-11-02', '', 'M', '20', 3),
('2022-11-02', '', 'M', '20', 4),
('2022-11-02', '', 'M', '20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `fullname`, `email`, `phone`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
(2, '', '', '', '', '', 'volunteer'),
(3, '', '', '', '', '', 'volunteer'),
(4, '', '', '', '', '', 'volunteer'),
(5, '', '', '', '', '', 'volunteer'),
(6, '', '', '', '', '', 'volunteer'),
(7, 'a', 'a', 'a', 'a@a.c', 'a', 'volunteer'),
(8, 'a', '', 'a', 'a@a.c', 'a', 'volunteer'),
(9, 'a1', 'a1', 'a1', 'a', 'a', 'schooladmin'),
(10, 'a', 'a', '', 'a', 'a', 'schooladmin'),
(11, 'az', 'az', '', 'az', 'za', 'schooladmin'),
(12, 'a', 'a', '', 'a', 'a', 'schooladmin'),
(13, 'a', 'a', '', 'a', 'a', 'schooladmin'),
(14, 'a', 'a', 'a', 'a', 'a', 'schooladmin'),
(15, 'AdminStikom', 'AdminStikom', 'Admin', 'AdminStikom@stikom.com', '08111221122', 'schooladmin'),
(16, 'AdminStikom', 'AdminStikom', 'Admin', 'AdminStikom@stikom.com', '08111221122', 'schooladmin'),
(17, 'AdminStikom', 'AdminStikom', 'Admin', 'AdminStikom@stikom.com', '08111221122', 'schooladmin');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `dateOfBirth` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `get_ID_User` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`dateOfBirth`, `occupation`, `get_ID_User`) VALUES
('', '', 7),
('123', 'a', 8),
('123', 'a', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
