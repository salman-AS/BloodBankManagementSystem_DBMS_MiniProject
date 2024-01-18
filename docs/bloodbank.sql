-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2023 at 01:56 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sss', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

DROP TABLE IF EXISTS `bloodgroup`;
CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `give_to` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `recieve_from` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`type`, `give_to`, `recieve_from`) VALUES
('A+', 'A+,AB+', 'A+,A-,O+,O-'),
('A-', 'A+,A-,AB+,AB-', 'A-,O-'),
('AB+', 'AB+', 'A+,O+,B+,AB+,A-,O-,B-,AB-'),
('AB-', 'AB+,AB-', 'AB-,A-,B-,O-'),
('B+', 'B+,AB+', 'B+,B-,O+,O-'),
('B-', 'B+,B-,AB+,AB-', 'B-,O-'),
('O+', 'O+,A+,B+,AB+', 'O+,O-'),
('O-', 'A+,O+,B+,AB+,A-,O-,B-,AB-', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `phone_no` bigint DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `health_condition` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `blood_groups` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blood_groups` (`blood_groups`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `city`, `phone_no`, `age`, `gender`, `health_condition`, `blood_groups`) VALUES
(1, 'salman', 'calicut', 9048040741, 19, 'male', 'good', 'O+'),
(2, 'sahil', 'malappuram', 8086558484, 20, 'male', 'good', 'A+'),
(3, 'vignesh', 'malappuram', 8086559496, 20, 'male', 'good', 'B+'),
(4, 'nayif', 'kozhikode', 9207155253, 20, 'male', 'good', 'A+'),
(5, 'shahbaz', 'Thrissur', 9876542310, 21, 'male', 'good', 'B+'),
(6, 'shifal', 'kozhikode', 9786534219, 22, 'male', 'good', 'O+'),
(7, 'afeef', 'thrissur', 8907612548, 20, 'male', 'good', 'O+'),
(8, 'hisham', 'malapuram', 9083214567, 20, 'male', 'good', 'AB+'),
(9, 'rifa', 'malapuram', 8097245312, 20, 'female', 'good', 'B+'),
(10, 'ayman', 'kozhikode', 9768051234, 21, 'male', 'good', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `phone_no` bigint DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `health_condition` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `blood_groups` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hospital` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blood_groups` (`blood_groups`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `city`, `phone_no`, `age`, `gender`, `health_condition`, `blood_groups`, `hospital`) VALUES
(1, 'rajeev', 'kannur', 7865342109, 42, 'male', 'bone cancer', 'B+', 'aster medicity, ernakulam'),
(2, 'vinod', 'ernakulam', 9082314577, 39, 'male', 'diabetes', 'O-', 'aster medicity, ernakulam'),
(3, 'jameela', 'malapuram', 8098887763, 52, 'female', 'brain tumor', 'AB+', 'aster medicity, ernakulam'),
(4, 'alex mathew', 'kottayam', 9970854612, 42, 'male', 'lung cancer', 'B+', 'aster medicity, ernakulam'),
(5, 'gurmeendar singh', 'ernakulam', 8907662431, 34, 'male', 'bone cancer', 'AB-', 'aster medicity, ernakulam'),
(6, 'rishab', 'kollam', 9087564231, 35, 'male', 'hepatitis', 'A+', 'aster medicity, ernakulam'),
(7, 'renukha', 'thrissur', 907812543, 51, 'female', 'AIDS', 'B-', 'aster medicity, ernakulam'),
(8, 'lavanya', 'palakad', 8095621340, 25, 'female', 'liver cancer', 'O+', 'aster medicity, ernakulam'),
(9, 'raghavan', 'trivandrum', 9067851233, 62, 'male', 'stomach cancer', 'B-', 'aster medicity, ernakulam'),
(10, 'leela', 'kasargod', 9904456778, 71, 'female', 'testicular cancer', 'AB+', 'aster medicity, ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'uuu', '321');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`blood_groups`) REFERENCES `bloodgroup` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`blood_groups`) REFERENCES `bloodgroup` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
