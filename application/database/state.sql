-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 04:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s8`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `shipping_fee` double(16,4) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `shipping_fee`, `is_deleted`) VALUES
(1, 'Johor', 10.0000, 0),
(2, 'Kedah', 10.0000, 0),
(3, 'Kelantan', 10.0000, 0),
(4, 'Malacca', 10.0000, 0),
(5, 'Negeri Sembilan', 10.0000, 0),
(6, 'Pahang', 10.0000, 0),
(7, 'Penang', 10.0000, 0),
(8, 'Perak', 10.0000, 0),
(9, 'Perlis', 10.0000, 0),
(10, 'Sabah', 15.0000, 0),
(11, 'Sarawak', 15.0000, 0),
(12, 'Selangor', 10.0000, 0),
(13, 'Terengganu', 10.0000, 0),
(14, 'Kuala Lumpur', 10.0000, 0),
(15, 'Labuan', 10.0000, 0),
(16, 'Putrajaya', 10.0000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
