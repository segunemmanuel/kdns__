-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 12:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdns`
--

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `user_id` int(11) NOT NULL,
  `user_job` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `salary_min` float NOT NULL,
  `salary_max` float NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`user_id`, `user_job`, `company`, `date`, `salary_min`, `salary_max`, `country`, `state`, `tag`, `address`) VALUES
(18, 'Software dev', 'Brandhaven', '1970-01-01', 0, 0, ' Nigeria', 'Oyo', 'fff', 'No1'),
(19, 'Azure engineer', 'Mc', '1970-01-01', 0, 0, ' Nigeria', 'Lagos', 'sdd', 'No1'),
(23, 'Patsor', 'RCCG', '1970-01-01', 1234450, 3444, 'Ilorin', 'ILriun', 'fb0u9nhvhn0gv', 'idbufbofb'),
(24, 'Azure engineer', 'Google', '1970-01-01', 10000, 50000, ' Nigeria', 'Oyo', 'Azure', 'No1'),
(25, 'Web developer', 'KDNS', '1970-01-01', 10000, 2333, 'Nigeria', 'Lagos', 'web', 'No 10 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
