-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 10:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `playerRefNo` varchar(15) DEFAULT NULL,
  `playerName` varchar(100) DEFAULT NULL,
  `inTime` timestamp NULL DEFAULT NULL,
  `outTime` timestamp NULL DEFAULT NULL,
  `present` int(1) DEFAULT NULL,
  `absent` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bad_match`
--

CREATE TABLE `bad_match` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `endTime` datetime DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `team1` varchar(100) DEFAULT NULL,
  `team2` varchar(100) DEFAULT NULL,
  `match_count` int(2) DEFAULT NULL,
  `team1_player` varchar(100) DEFAULT NULL,
  `team2_player` varchar(100) DEFAULT NULL,
  `team1_player1` varchar(100) DEFAULT NULL,
  `team1_player2` varchar(100) DEFAULT NULL,
  `team2_player1` varchar(100) DEFAULT NULL,
  `team2_player2` varchar(100) DEFAULT NULL,
  `win` varchar(100) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `batchNo` varchar(15) DEFAULT NULL,
  `faculty` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `blacklist` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `refNo`, `name`, `gender`, `dob`, `email`, `mobile`, `status`, `blacklist`) VALUES
(1, 'emp-1003', 'N.M.Karunarathna', 'female', '1995-01-07', 'nadeeKarunarathna@gmail.com', 710181608, '0', 0),
(2, 'emp-1004', 'M.P.C.M.Silva', 'female', '1995-07-14', 'chaliniSilva@gmail.com', 710181608, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `refNo`, `name`) VALUES
(1, 'fc-01', 'science'),
(2, 'fc-02', 'engineering'),
(3, 'fc-03', 'agriculture'),
(4, 'fc-04', 'medicine'),
(5, 'fc-05', 'management & finance'),
(6, 'fc-06', 'fisheries and marine sciences'),
(7, 'fc-07', ' humanities and social sciences '),
(8, 'fc-09', 'technology ');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `body` varchar(100) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `fromType` varchar(20) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `approval` int(1) DEFAULT NULL,
  `blacklist` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `refNo`, `name`, `gender`, `dob`, `faculty`, `level`, `email`, `mobile`, `status`, `approval`, `blacklist`) VALUES
(1, 'sc-9800', 'U.C.Jeewani', 'female', '1995-06-16', 'science', 'level 3', 'ucjdmmk@gmail.com', 710719706, 0, 0, 0),
(2, 'sc-9801', 'A.B.Perere', 'male', '1995-02-01', 'science', 'level 3', 'ABPerere@gmail.com', 700001111, 0, 0, 0),
(3, 'sc-9802', 'D.C.Atapattu', 'female', '1995-05-01', 'science', 'level 3', 'DCAtapattu@gmail.com', 700002222, 0, 0, 0),
(4, 'sc-9803', 'P.C.Karunarathna', 'male', '1995-11-26', 'science', 'level 3', 'PCKarunarathna@gmail.com', 700003333, 0, 0, 0),
(5, 'sc-9804', 'M.C.Silva', 'male', '1995-10-16', 'science', 'level 3', 'MCSilva@gmail.com', 700004444, 0, 0, 0),
(6, 'sc-9805', 'M.N.Rodrigo', 'female', '1995-06-16', 'science', 'level 3', 'MNRodrigo@gmail.com', 700005555, 0, 0, 0),
(7, 'sc-9818', 'G.R.T.Fonseka', 'female', '1995-07-07', 'science', 'level 3', '95thakshilafonseka@gmail.com', 710181608, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `inTime` timestamp NULL DEFAULT NULL,
  `outTime` timestamp NULL DEFAULT NULL,
  `faculty` varchar(15) DEFAULT NULL,
  `team` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `refNo`, `name`, `description`) VALUES
(1, 'sp-000001', 'badminton', NULL),
(2, 'sp-000002', 'carrom', NULL),
(3, 'sp-000003', 'teniss', NULL),
(4, 'sp-000004', 'cricket', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sport_allocation`
--

CREATE TABLE `sport_allocation` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `venderRefNo` varchar(15) DEFAULT NULL,
  `sportRefNo` varchar(15) DEFAULT NULL,
  `sport` varchar(100) DEFAULT NULL,
  `accept` int(2) DEFAULT NULL,
  `reject` int(2) DEFAULT NULL,
  `onDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport_allocation`
--

INSERT INTO `sport_allocation` (`id`, `refNo`, `venderRefNo`, `sportRefNo`, `sport`, `accept`, `reject`, `onDateTime`) VALUES
(1, 'SA-000001', 'emp-1003', 'sp-000001', 'badminton', NULL, NULL, NULL),
(2, 'SA-000002', 'emp-1003', 'sp-000002', 'carrom', NULL, NULL, NULL),
(3, 'SA-000003', 'emp-1003', 'sp-000003', 'cricket', NULL, NULL, NULL),
(4, 'SA-000004', 'emp-1004', 'sp-000001', 'badminton', NULL, NULL, NULL),
(5, 'SA-000005', 'emp-1004', 'sp-000002', 'carrom', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `refNo` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `refNo`, `name`, `password`, `type`) VALUES
(1, 'emp-1001', 'S.A.Mendis', '12345', 'admin'),
(2, 'emp-1002', 'G.N.D.Fonseka', '12345', 'admin'),
(3, 'emp-1003', 'N.M.Karunarathna', '12345', 'coach'),
(4, 'emp-1004', 'M.P.C.M.Silva', '12345', 'coach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bad_match`
--
ALTER TABLE `bad_match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_allocation`
--
ALTER TABLE `sport_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bad_match`
--
ALTER TABLE `bad_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sport_allocation`
--
ALTER TABLE `sport_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
