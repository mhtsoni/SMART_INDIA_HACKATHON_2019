-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2020 at 09:22 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `id8426207_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `2019`
--

CREATE TABLE `2019` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `01` double NOT NULL,
  `02` double NOT NULL,
  `03` double NOT NULL,
  `04` double NOT NULL,
  `05` double NOT NULL,
  `06` double NOT NULL,
  `07` double NOT NULL,
  `08` double NOT NULL,
  `09` double NOT NULL,
  `10` double NOT NULL,
  `11` double NOT NULL,
  `12` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019`
--

INSERT INTO `2019` (`id`, `day`, `01`, `02`, `03`, `04`, `05`, `06`, `07`, `08`, `09`, `10`, `11`, `12`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 0, 0, 0, 0, 0, 0.0000000000000064392935428259, 0, 0, 0, -2.9862497068282e-156, 0, 0),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0, 0, 7.8886090522101e-30, 0, 0, 0, 0, 0, 0),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 11, 0, 0, 0, 0, 0, 1.8216880036223e-44, 0, 4.6750278888723e-86, 0, 0, 0, 0),
(12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 13, 0, 0, 0, 0, 0, -3.7835932889396e-58, 0, 0, 0, -7.7628952549482e-171, 0, 0),
(14, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1.3789672079675e-185, 0, 0),
(15, 15, 0, 0, 0, 1.671, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 16, 0, 0, 0, 0, 0, 0, 0, 3.0717786140711e-100, 0, 0, 0, 0),
(17, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2.2191391726926e-214),
(22, 22, 0, 0, 0, 0, 0, 0, 0, 1.4212474288968e-114, 0, 0, 0, 0),
(23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 26, 0, 0, 0, 0, 0, 0, 0, 0, -3.6426985952983e-128, 0, 0, 0),
(27, 27, 0, 0, 100, 0, 0, 2.6176572337233e-72, 0, 0, 2.1526397439409e-142, 0, 0, 0),
(28, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 30, 0, 0, -100, 0, 0, 0, 0, 0, 0, -1.1431176545515e-200, 0, 0),
(31, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `2020`
--

CREATE TABLE `2020` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `jan` text NOT NULL,
  `feb` text NOT NULL,
  `march` text NOT NULL,
  `april` text NOT NULL,
  `may` text NOT NULL,
  `june` text NOT NULL,
  `july` text NOT NULL,
  `august` text NOT NULL,
  `september` text NOT NULL,
  `october` text NOT NULL,
  `november` text NOT NULL,
  `december` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `water_limit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `water_limit`) VALUES
(1, 'mohit', 'a03a2f5701e56e7322091ba9485f075f', 'mohit19699soni@gmail.com', '200');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `ph_no` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `email`, `address`, `ph_no`) VALUES
(1, 'mohit', 'mohit@gmail.com', 'h.no 28 ,ward.no 3 H.P Paonta sahib', '8219338068'),
(2, 'Shubham', 'shubham@gmail.com', 'h.no 28 ward no 3 mehtab Gali paonta sahib', '7347348345'),
(3, 'mohan', 'Mohanmannat7@gmail.com', 'Chandigarh', '9876930577'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019`
--
ALTER TABLE `2019`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2020`
--
ALTER TABLE `2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2019`
--
ALTER TABLE `2019`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `2020`
--
ALTER TABLE `2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
