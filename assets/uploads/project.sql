-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 05:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `admin_pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('admin51195', 'admin51195');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_desc` varchar(200) DEFAULT NULL,
  `doc_id` int(50) NOT NULL,
  `doc_date` date NOT NULL,
  `doc_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`doc_desc`, `doc_id`, `doc_date`, `doc_by`) VALUES
('Marksheet Sem 2', 6353, '2016-11-23', 'Admin'),
('Marksheet Sem 3', 37373, '2016-11-25', 'Admin'),
('Marksheet Sem 1', 47484, '2016-11-22', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_desc` varchar(200) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `event_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_desc`, `event_id`, `start_date`, `end_date`, `event_by`) VALUES
('Handball Match', 3232, '2016-11-10', '2016-11-11', 'Rajat'),
('Football Match', 3483, '2016-11-10', '2016-11-11', 'Rajat'),
('SPORT DAY', 4343, '2016-11-10', '2016-11-18', 'Chandan'),
('Check Notice', 36846, '2016-11-15', '2016-11-16', '834638'),
('Internal Viva', 378438, '2016-11-09', '2016-11-11', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_name` varchar(50) DEFAULT NULL,
  `faculty_id` int(50) NOT NULL,
  `faculty_email` varchar(50) DEFAULT NULL,
  `faculty_number` int(10) DEFAULT NULL,
  `faculty_birthday` date DEFAULT NULL,
  `faculty_pwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_name`, `faculty_id`, `faculty_email`, `faculty_number`, `faculty_birthday`, `faculty_pwd`) VALUES
('robin', 51195, 'robin@gmail.com', 98736343, '2016-11-09', 'rahul51195'),
('rahul', 65363, 'kumarbiswasrahul@yahoo.com', 2147483647, '2016-11-16', '123456'),
('rahul', 73723, 'kumarbiswasrahul4@gmail.com', 384932, '2016-11-15', '28932389');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`user_email`) VALUES
('atul@gmail.com'),
('ayush@gmail.com'),
('bcaiitm@gmail.com'),
('chandan@gmail.com'),
('kreereumarbiswasradfhul4@gmail.com'),
('kumarbiswasradfhul4@gmail.com'),
('kumarbiswasrahul4@gmail.com'),
('kumarbiswasrahul@yahoo.com'),
('manpreet@gmail.com'),
('rajat@gmail.com'),
('rkb51195@gmail.com'),
('rocky51195@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_desc` varchar(250) DEFAULT NULL,
  `notice_id` int(11) NOT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_desc`, `notice_id`, `notice_date`, `notice_by`) VALUES
('Class Test 2', 3643, '2016-11-08', 'Rahul'),
('Internal Viva For Minor Project ', 6353, '2016-11-15', 'Rahul'),
('Internal Viva For Minor Project ', 6356, '2016-11-15', 'Rahul'),
('Internal Viva For Computer Graphic ', 6357, '2016-11-15', 'Rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47485;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378439;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6358;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
