-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2021 at 03:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `asstable`
--

CREATE TABLE `asstable` (
  `assID` int(11) NOT NULL,
  `assQtion` text NOT NULL,
  `assCourse` varchar(200) NOT NULL,
  `assAuthor` varchar(100) NOT NULL,
  `assDate` varchar(200) NOT NULL,
  `assStatus` varchar(200) NOT NULL,
  `assClass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asstable`
--

INSERT INTO `asstable` (`assID`, `assQtion`, `assCourse`, `assAuthor`, `assDate`, `assStatus`, `assClass`) VALUES
(1, 'what do you understand by the term Semantic web or web 3.0 ?', 'COM4223', 'abdullahi musa musa', '12/06/2021', 'New', 'HND 2'),
(2, 'EXPLAIN THE CONCEPT OF INTRANET', 'COM423', 'ISAH MUSA', '05/07/2021', 'New', 'HND 2'),
(14, 'EXPLAIN IN DETAILS THE CONCEPT OF NETWORKING', 'COM123', 'ABDULLAHI ISAH MUSA', '12:55:50 2021-08-23', 'New', 'ND 2');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecID` int(11) NOT NULL,
  `lecName` varchar(200) NOT NULL,
  `lecPhone` varchar(100) NOT NULL,
  `lecDepartment` varchar(200) NOT NULL,
  `lecCourse` varchar(200) NOT NULL,
  `lecUsername` varchar(200) NOT NULL,
  `lecPass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecID`, `lecName`, `lecPhone`, `lecDepartment`, `lecCourse`, `lecUsername`, `lecPass`) VALUES
(1, 'Abdullahi J.M', '123456789', 'Computer Science', 'COM4223', 'mrjaf', '123456789'),
(2, 'ABDULLAHI ISAH MUSA', '12345678', 'SLT', 'SLT123', 'isah', '123456789'),
(3, 'ABDULLAHI ISAH MUSA', '08132911690', 'COMPUTER SCIENCE', 'COM4223', 'abdullahi', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studID` int(11) NOT NULL,
  `studReg` varchar(100) NOT NULL,
  `studName` varchar(200) NOT NULL,
  `studPhone` varchar(50) NOT NULL,
  `studDepartment` varchar(200) NOT NULL,
  `studLevel` varchar(200) NOT NULL,
  `studPass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studID`, `studReg`, `studName`, `studPhone`, `studDepartment`, `studLevel`, `studPass`) VALUES
(1, '18/128991', 'abdullahi jafar musa', '08132911690', 'Computer Science', 'HND 2', '1994sheik'),
(2, '112233', 'MRJAF MUSA', '080867066', 'COMPUTER SCIENCE', 'ND 1', '112233'),
(3, '223344', 'MUSTEE SA AD', '09038363033', 'COMPUTER SCIENECE', 'ND 2', '123456789'),
(4, '18/112233', 'GABATA MUSA', '090383630333', 'COMPUTER SCIENCE', 'HND 1', '123456789'),
(5, '18/234567', 'SANI HASAN UMAR', '08107616666', 'COMPUTER SCIENCE', 'ND 1', '12345'),
(6, '18/127772', 'AHMED IBRAHIM', '08064054284', 'COMPUTER SCIENCE', 'HND 2', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `submittedass`
--

CREATE TABLE `submittedass` (
  `subID` int(11) NOT NULL,
  `assQtion` text NOT NULL,
  `subBy` varchar(200) NOT NULL,
  `subDate` varchar(100) NOT NULL,
  `subFile` varchar(200) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `Class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submittedass`
--

INSERT INTO `submittedass` (`subID`, `assQtion`, `subBy`, `subDate`, `subFile`, `marks`, `comment`, `Class`) VALUES
(9, 'what do you understand by the term Semantic web or web 3.0 ?', '18/128991', '11:17:34 2021-07-05', 'khadijaabdullahimusaCV.pdf', '', '', ''),
(10, 'EXPLAIN THE CONCEPT OF INTRANET', '18/128991', '11:33:05 2021-07-05', 'khadijaabdullahimusaCV.odt', '', '', ''),
(11, 'EXPLAIN THE CONCEPT OF INTRANET', '18/128991', '01:19:52 2021-07-06', 'khadijaabdullahimusaCV.odt', '10 / 10', 'See Me', ''),
(12, 'what do you understand by the term Semantic web or web 3.0 ?', '18/128991', '02:38:53 2021-07-06', 'khadijaabdullahimusaCV.pdf', '10 /20', 'See me', 'HND 2'),
(13, 'What do you understand by the term Cloud Computing?Instruction:Not more than Three Page with Reference', '223344', '11:29:27 2021-07-06', 'JAFAR CV.pdf', '8 /10', 'good work', 'ND 2'),
(14, 'what is computer programming Language?', '112233', '12:00:29 2021-07-07', '9b932ee4b5e7c6672f8938d716a3fd91.pdf', '3/10', 'late Submission', 'ND 1'),
(15, 'what do you understand by the term Semantic web or web 3.0 ?', '18/127772', '12:51:26 2021-08-23', '9b932ee4b5e7c6672f8938d716a3fd91.pdf', '40%', 'late submission', 'HND 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asstable`
--
ALTER TABLE `asstable`
  ADD PRIMARY KEY (`assID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studID`);

--
-- Indexes for table `submittedass`
--
ALTER TABLE `submittedass`
  ADD PRIMARY KEY (`subID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asstable`
--
ALTER TABLE `asstable`
  MODIFY `assID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submittedass`
--
ALTER TABLE `submittedass`
  MODIFY `subID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
