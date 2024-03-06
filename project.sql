-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 09:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Sid` int(11) NOT NULL,
  `Course` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Sid`, `Course`) VALUES
(11111, 'Web 2'),
(22222, 'Themodynamics'),
(22222, 'Fluids'),
(22222, 'Mechanics'),
(33333, 'Operating Systems'),
(33333, 'Network'),
(44444, 'Electronics'),
(44444, 'Calculus'),
(44444, 'Control system'),
(55555, 'Management'),
(55555, 'Administration'),
(66666, 'Finance'),
(77777, 'Database'),
(77777, 'Digital logic'),
(77777, 'Mobile Applications'),
(88888, 'Mobile Applications');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `First name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Major` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `First name`, `Last Name`, `Major`) VALUES
(11111, 'ahmad', 'masri', 'CSCI'),
(22222, 'karim', 'haddad', 'MENG'),
(33333, 'fadi', 'tartousi', 'CSCI'),
(44444, 'mario', 'saiid', 'EENG'),
(55555, 'houssein', 'mostafa', 'BMGT'),
(66666, 'ghassan', 'samad', 'BFIN'),
(77777, 'ayman', 'hassoun', 'CSCI'),
(88888, 'tayseer', 'abboud', 'CSCI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD KEY `test` (`Sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `test` FOREIGN KEY (`Sid`) REFERENCES `students` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
