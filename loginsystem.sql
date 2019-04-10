-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 10:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upwd` varchar(255) NOT NULL,
  `ufullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `uname`, `upwd`, `ufullname`) VALUES
(1, 'admin', 'admin', 'Gourav Aval');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `first` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `injury` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `id`, `first`, `email`, `injury`, `massage`, `timeslot`) VALUES
(0, 6, 'Gourav', 'xyz@gmail.com', 'body', 'sports', 'morning'),
(0, 7, 'akash', 'akashgoel801@yahoo.in', 'anxiety', 'body', 'afternoon'),
(0, 8, 'akash', 'akashgoel801@yahoo.in', 'anxiety', 'body', 'afternoon'),
(0, 9, 'akash', 'akashgoel801@yahoo.in', 'anxiety', 'body', 'afternoon'),
(0, 10, 'akash', 'akashgoel801@yahoo.in', 'anxiety', 'body', 'afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(9, 'Gourav', 'Gourav', 'akashgoel801@yahoo.in', 'gorv', '$2y$10$agsw8ayYr6ep5xxn5.ValOs9iM4ALNZ9uwD8HIJ9sSHwW4qCYFexi'),
(10, 'akash', 'goel', 'akash@gmail.com', 'aka', '$2y$10$5BeDAZ2LO7WObSP59uEN6.VGfkYfH..vvlwud9iPqaizxVoFFQwx2'),
(11, 'akash', 'goel', 'akashgoel0513@gmail.com', 'akashgoel0513', '$2y$10$s3LmNS/KvvCmza9aG5kjbeEVVnejh0L1llzdHb/vDnLxQF9lZ0vHG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
