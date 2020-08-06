-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 04:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Timetable_Generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `10a`
--

CREATE TABLE `10a` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10a`
--

INSERT INTO `10a` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `11a`
--

CREATE TABLE `11a` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `11a`
--

INSERT INTO `11a` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`) VALUES
(1, '-', 'dinesh', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `12c`
--

CREATE TABLE `12c` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12c`
--

INSERT INTO `12c` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`) VALUES
(1, 'dinesh', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', 'dinesh', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `dinesh`
--

CREATE TABLE `dinesh` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinesh`
--

INSERT INTO `dinesh` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`) VALUES
(1, '12c', '11a', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '12c', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `username` varchar(20) NOT NULL,
  `u_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`username`, `u_password`) VALUES
('helpdesk', 'helpdesk123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(6) NOT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_subject` varchar(30) DEFAULT NULL,
  `s_periods` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `s_subject`, `s_periods`) VALUES
(123, 'dinesh', 'tamil', 34);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `username` varchar(20) NOT NULL,
  `u_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`username`, `u_password`) VALUES
('dinesh', 'dineshsk7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `10a`
--
ALTER TABLE `10a`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `11a`
--
ALTER TABLE `11a`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `12c`
--
ALTER TABLE `12c`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `dinesh`
--
ALTER TABLE `dinesh`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
