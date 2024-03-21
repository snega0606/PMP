-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 03:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 'sharmi', 'sharmi26@gmail.com', 'sharmi26', 'sharmi26'),
(2, 'swetha', 'swe3@gmail.com', 'swe03', 'swe03');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `rollno` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `incharge` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `sname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `sname`, `email`, `password`) VALUES
(3, 'ravi', 'ravi@gmail.com', '$2y$10$ri8zbNU5cZE8da9bqZLcIeLtvaCB4UcyFbwnHWn63QrDc98qVce/.'),
(4, 'dev', 'dev@gmail.com', '$2y$10$4h3.dDrFqcj1F4.LkUmbr.q1rTWnpbHdXaLyx6ZEDhGMmlaXCMe0u'),
(5, 'venkat', 'venkat@gmail.com', '$2y$10$M4hpQn6osLKPAqHF8SbC5.wHdHi/jFUTBvPQe0cIeo/m1IErwtB2S'),
(6, 'venkat', 'venkat@gmail.com', '$2y$10$4JUAmeNV8qaZMJyRU9UVO.bzxghD5PVComcsQFFEdptl/.6M5zA2a'),
(7, 'amutha', 'amutha@gmail.com', '$2y$10$irjvYROSI4EQKrXZmzFfUOLH3uoWwRBXJNdTYmQgazal6sLduycKa'),
(8, 'sathiya', 'sathiya@gmail.com', '$2y$10$nGwZLbbi2IBymOYl5B1z1.qEzGNRqDNX/PD.CRpzyfOsthqtlqSsi'),
(9, 'ammu', 'ammu@gmail.com', '$2y$10$X.41IfVAf/qQorDDm0JiwOhORpBPTQ3ltrg8CCamt8dOCC0NxfdCi'),
(10, 'venkatesan', 'venki@gmail.com', '$2y$10$7SbFukKIwLcrhipTFfVxgulk8amy4jTKfTMOp7m3Gv2NYrUVXLJAm'),
(11, 'swethaa', 'swe@gmail.com', '$2y$10$btoWZEPktK61jvUn7eehJemIG/ebzx5hUZIvvyPCzoqGCWzjs7Z6S'),
(12, 'swethaasri', 'swesri@gmail.com', '$2y$10$9l3lKQki5sPqtQQkfgSFuufjWM1U.0yyChERDGIni2hPd69ICgq3G'),
(13, 'shaa', 'shaa@gmail.com', '$2y$10$Km/TQT70hmNL/I0OHiOalOPoFdGzQCC41AzGkuLdmB46wukBDMjQy'),
(14, 'vasundra', 'vasu@gmail.com', 'vasu25'),
(15, 'swathii', 'swa@gmail.com', 'swa30'),
(16, 'bernard', 'bern@gmail.com', 'bern40'),
(17, 'benjamin', 'benji@gmail.com', 'benji40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
