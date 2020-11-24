-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 09:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `admin_id`, `name`, `surname`, `email`) VALUES
(1, 12345, 'admin', 'adm', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `announcment` varchar(150) DEFAULT NULL,
  `fromm` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `announcment`, `fromm`) VALUES
(1, 'gym now open', 'gym will be open tomorrow', 'admin'),
(2, 'not feeling well', 'i will not be available this week', 'admin'),
(3, 'payment ', 'no payment this month', ''),
(4, '.', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE `sched` (
  `id` int(11) NOT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sched1`
--

CREATE TABLE `sched1` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched1`
--

INSERT INTO `sched1` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, NULL, NULL, NULL, NULL, NULL),
(1011, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_00000`
--

CREATE TABLE `sched_00000` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_00000`
--

INSERT INTO `sched_00000` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, NULL, NULL, NULL, NULL, NULL),
(1011, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_00092`
--

CREATE TABLE `sched_00092` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_00092`
--

INSERT INTO `sched_00092` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, NULL, NULL, NULL, NULL, NULL),
(1011, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_10000`
--

CREATE TABLE `sched_10000` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_10000`
--

INSERT INTO `sched_10000` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, NULL, NULL, NULL, NULL, NULL),
(1011, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_10101`
--

CREATE TABLE `sched_10101` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_10101`
--

INSERT INTO `sched_10101` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, NULL, NULL, NULL, NULL, NULL),
(1011, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_11111`
--

CREATE TABLE `sched_11111` (
  `id` tinyint(1) DEFAULT NULL,
  `m` tinyint(1) DEFAULT NULL,
  `t` tinyint(1) DEFAULT NULL,
  `w` tinyint(1) DEFAULT NULL,
  `th` tinyint(1) DEFAULT NULL,
  `f` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_11111`
--

INSERT INTO `sched_11111` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(127, NULL, NULL, NULL, NULL, NULL),
(127, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sched_77877`
--

CREATE TABLE `sched_77877` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sched_90334`
--

CREATE TABLE `sched_90334` (
  `id` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sched_90909`
--

CREATE TABLE `sched_90909` (
  `id` int(11) DEFAULT NULL,
  `m` tinyint(1) DEFAULT NULL,
  `t` tinyint(1) DEFAULT NULL,
  `w` tinyint(1) DEFAULT NULL,
  `th` tinyint(1) DEFAULT NULL,
  `f` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched_90909`
--

INSERT INTO `sched_90909` (`id`, `m`, `t`, `w`, `th`, `f`) VALUES
(910, 0, 0, 1, 1, 1),
(1011, 0, 1, 0, 0, 0),
(45, 0, 0, 0, 1, 0),
(56, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `trainer` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `school_id`, `name`, `surname`, `email`, `trainer`, `trainer_id`) VALUES
(1, 245672, 'guy', 'man', 'guy@mail.com', 0, NULL),
(2, 55544, 'guy', 'man', 'guy@mail.com', 0, NULL),
(3, 23452, 'michael ', 'brown', 'michaels@somemail.com', 0, NULL),
(4, 7778, NULL, NULL, NULL, 0, NULL),
(9, 77877, 'mark ', 'eric', 'tsh@m.com', NULL, NULL),
(10, 25141, 'Tamsangqa lubasi', 'lubasi', 'thamulubasi@gmail.com', NULL, NULL),
(11, 25141, 'Tamsangqa lubasi', 'lubasi', 'thamulubasi@gmail.com', NULL, NULL),
(12, 67754, 'maharishi', 'brown', 'thamulubasi@gmail.com', NULL, NULL),
(13, 92, 'evidence', 'lubasi', 'thamulubasi@gmail.com', NULL, NULL),
(14, 10101, 'jowel', 'siziba', 'thamulubasi@gmail.com', 1, 23234),
(15, 11111, 'col', 'nice', 'thamulubasi@gmail.com', NULL, NULL),
(16, 90909, 'maf', 'n', 'thamulubasi@gmail.com', 1, 23234),
(18, 10000, 'joe', 'beiden', 'thamulubasi@gmail.com', 1, 23234);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `work_id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `trainee` int(11) DEFAULT NULL,
  `trainee1_id` int(11) DEFAULT NULL,
  `trainee2_id` int(11) DEFAULT NULL,
  `trainee3_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `work_id`, `name`, `surname`, `email`, `trainee`, `trainee1_id`, `trainee2_id`, `trainee3_id`) VALUES
(1, 23234, 'josh', 'trainer ', 'josh@gmail.com', 0, 90909, NULL, 10101),
(2, 54321, 'muhamad', 'kun', 'kun@mail.com', 0, NULL, NULL, NULL),
(3, 77333, 'steve', 'jobs', 'thamulubasi@gmail.co', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sched`
--
ALTER TABLE `sched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sched`
--
ALTER TABLE `sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
