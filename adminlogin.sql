-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 04:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('travelmaniac', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `E-mail id` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`E-mail id`, `password`) VALUES
('travelmanic04@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `SL` int(11) NOT NULL,
  `name` text NOT NULL,
  `nights` int(11) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `transactiondate` date NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`SL`, `name`, `nights`, `destination`, `transactiondate`, `arrival`, `departure`) VALUES
(20, 'niyola', 7, 'pardasi hotel', '2020-08-18', '07:00:00', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `regtable`
--

CREATE TABLE `regtable` (
  `name` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`name`, `age`, `address`, `phoneno`, `email`, `password`) VALUES
('$name', 0, '$address', 0, '$email', '$password'),
('brinda', 24, 'mangalore', 986745340, 'brinda@gmail.com', '123'),
('Cindrella M D souza', 21, '#741/2 marian s  d souza house bunder road', 2147483647, 'cindrelladsouza99@gmail.com', 'hey123'),
('ciya', 19, 'bangalore', 96784532, 'ciya@gmail.com', '123'),
('Ved', 22, 'aaaa', 32234346, 'cvgbf@fhm.com', '1111'),
('divya', 23, 'shivmoga', 45678932, 'divya@gmail.com', '123'),
('heena', 45, 'bangalore', 34658797, 'heena@gmail.com', '123'),
('ishan', 23, 'pune', 2147483647, 'ishan@gmail.com', '123'),
('jane', 32, 'pune', 2147483647, 'jane@gmail.com', '123'),
('niyola', 16, 'bhatkal', 2147483647, 'neo@gmail.com', '123'),
('oggy', 23, 'mumbai', 45678923, 'oggy@gmail.com', '123'),
('piya', 24, 'pune', 2147483647, 'piya21@gmail.com', '123'),
('rehan', 25, 'punjab', 2147483647, 'rehan@gmail.com', '123'),
('sinchan', 45, 'mumbai', 45679836, 'sinchan@gmail.com', '123'),
('vidya', 32, 'bhiar', 2147483647, 'vidya@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`) VALUES
('brinda', '123'),
('cindrella', '123'),
('ciya', '123'),
('divya', '123'),
('heena', '123'),
('ishan', '123'),
('jane', '123'),
('niyola', '123'),
('oggy', '123'),
('piya', '123'),
('rehan', '123'),
('sinchan', '123'),
('vidya', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`E-mail id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `regtable`
--
ALTER TABLE `regtable`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
