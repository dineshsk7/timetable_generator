-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 05:04 PM
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
  `day` varchar(20) DEFAULT NULL,
  `h1` varchar(20) DEFAULT NULL,
  `h2` varchar(20) DEFAULT NULL,
  `h3` varchar(20) DEFAULT NULL,
  `h4` varchar(20) DEFAULT NULL,
  `h5` varchar(20) DEFAULT NULL,
  `h6` varchar(20) DEFAULT NULL,
  `h7` varchar(20) DEFAULT NULL,
  `h8` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10a`
--

INSERT INTO `10a` (`day`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths'),
('mon', 'tamil', 'english', 'maths', 'science', 'socialscience', 'tamil', 'maths', 'maths');

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
  `h7` varchar(30) NOT NULL,
  `h8` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12c`
--

INSERT INTO `12c` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `13b`
--

CREATE TABLE `13b` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL,
  `h8` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `13b`
--

INSERT INTO `13b` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `Ashok`
--

CREATE TABLE `Ashok` (
  `day_order` int(10) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2` varchar(30) NOT NULL,
  `h3` varchar(30) NOT NULL,
  `h4` varchar(30) NOT NULL,
  `h5` varchar(30) NOT NULL,
  `h6` varchar(30) NOT NULL,
  `h7` varchar(30) NOT NULL,
  `h8` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ashok`
--

INSERT INTO `Ashok` (`day_order`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-'),
(2, '-', '-', '-', '-', '-', '-', '-', '-'),
(3, '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '-', '-', '-', '-', '-', '-', '-', '-'),
(5, '-', '-', '-', '-', '-', '-', '-', '-'),
(6, '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `tamil` varchar(20) DEFAULT NULL,
  `english` varchar(20) DEFAULT NULL,
  `maths` varchar(20) DEFAULT NULL,
  `science` varchar(20) DEFAULT NULL,
  `socialscience` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `c_name`, `tamil`, `english`, `maths`, `science`, `socialscience`) VALUES
(121, 'a10', '111', '222', '333', '444', '555');

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
(111, 'JAI', 'tamil', 4),
(123, 'deepan', 'tamil', 34),
(139, 'Ashok', 'tamil', 34),
(150, 'deepan', 'tamil', 34),
(222, 'SANKAR', 'english', 4),
(333, 'KATHIR', 'maths', 4),
(444, 'DINESH', 'science', 4),
(555, 'Deepan', 'socialscience', 4);

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
('Ashok', 'ashok123'),
('deepan', 'jai123'),
('dinesh', 'jai123'),
('jai', 'jai123'),
('kathir', 'jai123'),
('sankar', 'jai123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `12c`
--
ALTER TABLE `12c`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `13b`
--
ALTER TABLE `13b`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `Ashok`
--
ALTER TABLE `Ashok`
  ADD PRIMARY KEY (`day_order`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`);

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
