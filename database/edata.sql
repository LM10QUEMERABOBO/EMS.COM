-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 10:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `edata`
--

CREATE TABLE `edata` (
  `eid` int(4) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `salary` int(6) NOT NULL,
  `Age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edata`
--

INSERT INTO `edata` (`eid`, `ename`, `salary`, `Age`, `email`, `mobile`, `address`) VALUES
(1, 'jsdvbwchsbc', 0, 0, 'EMS@gmail.com', 0, 'california'),
(3, 'krish soni', 40000, 25, 'krishsoni198@gmail.com', 8320302446, 'patan , Gujarat , India'),
(12, 'Ritik Joshi', 30000, 22, 'ritikjoshi195@gmail.com', 9920100270, 'deesa , gujarat '),
(13, 'Priyank thakkar', 20000, 29, 'pt2004@gmail.com', 8120385007, 'Ahmedabad, gujarat'),
(14, 'Alex ramson', 100000, 39, 'alexramson7@gmail.com', 7102002999, 'delhi, Uttar pradesh , india'),
(15, 'prince darji', 45000, 22, 'prince05@gmail.com', 9954190007, 'harij , gujrat , india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edata`
--
ALTER TABLE `edata`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edata`
--
ALTER TABLE `edata`
  MODIFY `eid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
