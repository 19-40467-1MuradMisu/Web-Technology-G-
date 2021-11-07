-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 02:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donnertable`
--

-- --------------------------------------------------------

--
-- Table structure for table `donnerinfo`
--

CREATE TABLE `donnerinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `yearlyincome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donnerinfo`
--

INSERT INTO `donnerinfo` (`id`, `username`, `phonenumber`, `password`, `email`, `image`, `yearlyincome`) VALUES
(2, 'misu', 23622320, '$2y$12$fx5SzfrVFt40ilSIJl61F.EPFlbx/bjRRgvF2dSjdzG', 'muradmisu663@gmail.c', '', ''),
(3, 'muradmisu', 1321851, '$2y$12$OPGegJ8FLfs/hxwv68SxVePMOm.Bi7xMXa2PgV4f./n', 'sdhcbg154', '', '06561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donnerinfo`
--
ALTER TABLE `donnerinfo`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donnerinfo`
--
ALTER TABLE `donnerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
