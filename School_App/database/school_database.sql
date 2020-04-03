-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 01:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `id`, `password`) VALUES
('Shaheer', 'Admin', 'ma9fyd3p');

-- --------------------------------------------------------

--
-- Table structure for table `fee_schedule`
--

CREATE TABLE IF NOT EXISTS `fee_schedule` (
  `class` varchar(20) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_schedule`
--

INSERT INTO `fee_schedule` (`class`, `fees`) VALUES
('Level-1', 500),
('Level-2', 650),
('Level-3', 800),
('Level-4', 900),
('Level-5', 950),
('Level-6', 1000),
('Level-7', 1100),
('Level-8', 1250),
('Level-9', 1500),
('Level-10', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `fir_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `age` varchar(2) NOT NULL,
  `reg_no` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` varchar(30) NOT NULL,
  `fees` int(5) NOT NULL,
  `address` varchar(150) NOT NULL,
  UNIQUE KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fir_name`, `last_name`, `mail`, `cell_no`, `age`, `reg_no`, `dob`, `gender`, `class`, `fees`, `address`) VALUES
('salman', 'sheikh', 'salman@gmail.com', '03484575691', '25', '28876', '2018-07-28', 'Male', 'Level-05', 950, 'Bungalow # B-121 Phase-5 DHA Karachi'),
('Asif ', 'Khan', 'Asif@outlook.com', '0313-2553674', '17', '32145', '2000-12-21', 'Male', 'Level-10', 2000, 'House # B/511 Korangi # 5, Near Civic Center Karachi.'),
('Ahmed', 'Ali', 'Ali@leo.com', '03435853481', '35', '35821', '2018-07-14', 'Male', 'Level-07', 1100, 'House # 231 street 5, area Landhi, Karachi'),
('M.Hamza ', 'Arshad', 'hamzakhan@yahoo.com', '03316572687', '17', '35971', '2001-02-13', 'Male', 'Level-10', 2000, 'Flat # 12, Street # 01, Cheel Chowk, Liyari Karachi'),
('Mohsin', 'Ali', 'mohsin@yahoo.com', '03157579655', '21', '5968', '2018-07-19', 'Male', 'Level-03', 800, 'House # 65, street \r\n # 9, Korangi # 6, Karachi ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `designation` varchar(80) NOT NULL,
  `emp_code` varchar(30) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user_id`, `mail`, `password`, `designation`, `emp_code`) VALUES
('Areeb Khan', 'Areeb', 'areeb125@gmail.com', '28752', 'Purchaser', '1-0004'),
('Asif', 'Asif_khan', 'Asif@outlook.com', '15482', 'Assistant', '1-0004'),
('Hamza', 'Hamza_king', 'hamza_cool@gmail.com', '26874', 'Vice Principal', '1-0003'),
('Jibran', 'jibran', 'jibran@gmail.com', '12345', 'Manager', '1-0002'),
('Kahif', 'kahif_khan', 'kahif@yahoo.com', '35486', 'Incharge', '1-0002');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
