-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2022 at 03:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` float NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `size`, `other`) VALUES
(1, 'Africa', 111, 'Africa.png'),
(2, 'Brazil', 222, 'Brazil.png'),
(3, 'Cambodia', 181035, 'Khmer.png'),
(4, 'Denmark', 444, 'Denmark.png'),
(5, 'Egypt', 555, 'Egypt.png'),
(6, 'Finland', 666, 'Finland.png'),
(7, 'Greece', 777, 'Greece.png'),
(8, 'Hungary', 888, 'Hungary.png'),
(9, 'Iceland', 999, 'Iceland.png'),
(10, 'Japan', 10, 'Japan.png'),
(11, 'Korea', 111, 'Korea.png'),
(12, 'Laos', 122, 'laos.png'),
(13, 'Myanmar', 133, 'Myanmar.com'),
(15, 'Indonesia', 123456, 'Indonesia'),
(16, 'Philippines', 166, 'Filipino'),
(20, 'Singapore', 65, 'Singapura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
