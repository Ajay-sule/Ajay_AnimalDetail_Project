-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 01:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animals`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals_details`
--

CREATE TABLE `animals_details` (
  `id` int(11) NOT NULL,
  `animal_ name` text NOT NULL,
  `category` text NOT NULL,
  `photo` text NOT NULL,
  `message` text NOT NULL,
  `life_expectancy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals_details`
--

INSERT INTO `animals_details` (`id`, `animal_ name`, `category`, `photo`, `message`, `life_expectancy`) VALUES
(1, 'test', 'herbivores', 'lan3.png', 'test', '0-1 year'),
(2, 'tiger', 'herbivores', 'lan3.png', 'test', '0-1 year'),
(3, 'lion', 'herbivores', '', 'test', '1-5 year'),
(4, 'lion', 'omnivores', '', 'tets', '0-1 year'),
(5, 'lion', 'carnivores', '', 'test', '1-5 year'),
(6, 'lion', 'carnivores', '', 'test', '1-5 year'),
(7, 'lion', 'carnivores', '', 'test', '1-5 year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals_details`
--
ALTER TABLE `animals_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals_details`
--
ALTER TABLE `animals_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
