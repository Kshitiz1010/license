-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 09:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `license`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `driving_license_no` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `country` varchar(5) NOT NULL DEFAULT 'Nepal',
  `zone` varchar(255) NOT NULL,
  `issue_zone` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `townVillage` varchar(255) NOT NULL,
  `ward` varchar(4) NOT NULL,
  `dob` date NOT NULL,
  `father_name` varchar(2000) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `date_issue` date NOT NULL,
  `date_expire` date NOT NULL,
  `blood_group` varchar(2) NOT NULL,
  `category` varchar(1) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`driving_license_no`, `name`, `country`, `zone`, `issue_zone`, `district`, `townVillage`, `ward`, `dob`, `father_name`, `citizenship`, `passport`, `phone_no`, `date_issue`, `date_expire`, `blood_group`, `category`, `image`) VALUES
(2, 'HRIDAYA KANDEL', 'Nepal', 'Bheri', 'Bagmati', 'Banke', 'Kohalpur', '03', '1991-03-28', 'Durya Kandel', '661013/211', '28-03-065-98', '9812345678', '2012-02-13', '2022-02-11', 'A+', 'A', 'images/Hridaya.png'),
(3, 'asdhfjk', 'Nepal', 'sadfjh', 'asjdhk', 'faskjdfh', 'fajskdfh', '12', '2018-07-03', 'asdfas', '3123', '1231', '123123', '2018-07-10', '2018-07-12', 'A+', 'a', 'ASDF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`driving_license_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `driving_license_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
