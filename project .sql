-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 07:03 AM
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
('admin@iitm.com', 'iitm123');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `circular_title` varchar(200) DEFAULT NULL,
  `circular_desc` varchar(500) DEFAULT NULL,
  `circular_id` varchar(50) NOT NULL,
  `circular_date` date DEFAULT NULL,
  `circular_by` varchar(50) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_title` varchar(200) DEFAULT NULL,
  `doc_desc` varchar(200) DEFAULT NULL,
  `doc_id` int(50) NOT NULL,
  `doc_date` date NOT NULL,
  `doc_by` varchar(50) NOT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_title` varchar(2000) DEFAULT NULL,
  `event_desc` varchar(200) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `event_by` varchar(50) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `notice_title` varchar(200) DEFAULT NULL,
  `notice_desc` varchar(250) DEFAULT NULL,
  `notice_id` int(11) NOT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_by` varchar(50) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_title`, `notice_desc`, `notice_id`, `notice_date`, `notice_by`, `path`) VALUES
('You are viewing dummy text in English ', 'Far quitting dwelling graceful the likewise received building. An fact so to that show am shed sold cold. Unaffected remarkably get yet introduced excellence terminated led. Result either design saw she esteem and. On ashamed no inhabit ferrars it ye', 3421, '2017-02-09', 'admin', 'assets/uploads/frontpage - Copy (9).pdf'),
(' Short her not among being any. ', 'harm views do. Miles mr an forty along as he. She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered amiable gre', 43434, '2017-02-02', 'admin', 'assets/uploads/frontpage - Copy (25).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `circular`
--
ALTER TABLE `circular`
  ADD PRIMARY KEY (`circular_id`);

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
  MODIFY `doc_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43435;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
