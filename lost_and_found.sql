-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 06:35 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost_and_found`
--

-- --------------------------------------------------------

--
-- Table structure for table `nationalid`
--

CREATE TABLE `nationalid` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_number` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationalid`
--

INSERT INTO `nationalid` (`id`, `image`, `image_name`, `image_number`, `time`, `location`) VALUES
(4, 'n1.jpeg', 'Maragaret Hamilton', 34515227, '2018-04-10 07:58:14', 'California'),
(6, 'n3.jpeg', 'Richard Cipher', 23456778, '2018-04-10 13:17:59', 'Hawaii'),
(7, 'n1.jpeg', 'Alex Sanchez', 34516789, '2018-04-10 13:21:18', 'California');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_number` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`id`, `image`, `image_name`, `image_number`, `time`, `location`) VALUES
(4, 'p3.jpeg', 'Richard Cipher', 23456784, '2018-04-10 08:38:59', 'California'),
(5, 'p2.jpeg', 'Mathew Mcolumn', 234567678, '2018-04-10 08:40:27', 'Nairobi'),
(6, 'p6.jpeg', 'Brian Kamau', 234567456, '2018-04-10 08:59:35', 'Hawaii');

-- --------------------------------------------------------

--
-- Table structure for table `studentid`
--

CREATE TABLE `studentid` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_number` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentid`
--

INSERT INTO `studentid` (`id`, `image`, `image_name`, `image_number`, `time`, `location`) VALUES
(1, 's2.jpeg', 'Brian Sigilai Kiprono', 34515770, '0000-00-00 00:00:00', 'Texas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `password`) VALUES
(1, 'Sigi', 792071275, 'briansigilai@gmail.com', 'a7f3c107d1817fd6b16c3efee4cdbe08'),
(2, 'Sigi', 792071275, 'briansigilai@gmail.com', 'a7f3c107d1817fd6b16c3efee4cdbe08'),
(3, 'Charity', 792071275, 'charity@mail.com', 'a7f3c107d1817fd6b16c3efee4cdbe08'),
(4, 'Charity ki', 792071275, 'briansigilai@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'joel_akwam', 703671141, 'jakwam@gmail.com', '35e6ae9b27ac0bb9fc28000086f86c51'),
(6, 'Rodgers', 703671141, 'rod#gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nationalid`
--
ALTER TABLE `nationalid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentid`
--
ALTER TABLE `studentid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nationalid`
--
ALTER TABLE `nationalid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentid`
--
ALTER TABLE `studentid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
