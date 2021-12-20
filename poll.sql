-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2021 at 03:14 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

DROP TABLE IF EXISTS `tbadministrators`;
CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Hafsa', 'Azhar', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

DROP TABLE IF EXISTS `tbcandidates`;
CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(3, 'Ahamed', 'Chairperson', 11),
(4, 'Mohamed', 'Chairperson', 25),
(6, 'Fathima', 'Vice-Secretary', 3),
(8, 'Sampath', 'Secretary', 10),
(9, 'Robert', 'Secretary', 47),
(11, 'Sirisena', 'Vice-Treasurer', 4),
(12, 'Akmal', 'Vice-Treasurer', 0),
(13, 'Sasna', 'Treasurer', 0),
(14, 'Roy', 'Vice-Secretary', 0),
(15, 'Safna', 'Organizing-Secretary', 4),
(16, 'Shahnas', 'Organizing-Secretary', 5),
(17, 'Sakira', 'Vice-Chairperson', 32),
(18, 'Azhar', 'Vice-Chairperson', 14),
(20, 'Nuha', 'HOD', 4),
(25, 'Fara', 'HOD', 4),
(26, 'Abdullah', 'Treasurer', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tblvotes`
--

DROP TABLE IF EXISTS `tblvotes`;
CREATE TABLE IF NOT EXISTS `tblvotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voter_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `candidateName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voter_id` (`voter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvotes`
--

INSERT INTO `tblvotes` (`id`, `voter_id`, `position`, `candidateName`) VALUES
(12, 7, 'Chairperson', 'Mohamed'),
(13, 7, 'HOD', 'Nuha'),
(14, 7, 'Secretary', 'Sampath'),
(18, 10, 'Chairperson', 'Mohamed'),
(19, 10, 'Secretary', 'Robert'),
(20, 10, 'HOD', 'Nuha'),
(21, 10, 'Treasurer', 'Abdullah');

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

DROP TABLE IF EXISTS `tbmembers`;
CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(7, 'Muhammed', 'Azhar', 'mohamed@gmail.com', '1e2a796539042ca860c3091662aa4346'),
(8, 'Sara', 'Ahamed', 'sara@gmail.com', '7812e8b74f6837fba66f86fe86688a2b'),
(10, 'Hafsa', 'Azhar', 'hafsa.17@itfac.mrt.ac.lk', '52e189a0ce8993379504172c3854b949'),
(11, 'Ayesha', 'Lareef', 'ayesha@gmail.com', '80c9ef0fb86369cd25f90af27ef53a9e');

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

DROP TABLE IF EXISTS `tbpositions`;
CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'Chairperson'),
(2, 'Secretary'),
(5, 'Vice-Secretary'),
(7, 'Organizing-Secretary'),
(8, 'Treasurer'),
(9, 'Vice-Treasurer'),
(10, 'Vice-Chairperson'),
(11, 'HOD'),
(19, 'Captain');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblvotes`
--
ALTER TABLE `tblvotes`
  ADD CONSTRAINT `tblvotes_ibfk_1` FOREIGN KEY (`voter_id`) REFERENCES `tbmembers` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
