-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `credit` int(1) NOT NULL,
  `bookName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `day`, `time`, `credit`, `bookName`) VALUES
(5, 'Math-1', 'Sun-Tue', '8-11', 3, 'Calculus By abc'),
(7, 'Physics', 'Sun-Tue', '11-12.30', 3, 'Basics of Physics'),
(8, 'C++', 'Mon-Wed', '11-12.30', 3, 'Introduction to C++');

-- --------------------------------------------------------

--
-- Table structure for table `coursestudent`
--

CREATE TABLE `coursestudent` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `gpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursestudent`
--

INSERT INTO `coursestudent` (`id`, `cid`, `sid`, `gpa`) VALUES
(15, 8, 3, 3.3),
(16, 5, 3, 3.5),
(17, 7, 3, 3.75);

-- --------------------------------------------------------

--
-- Table structure for table `courseteacher`
--

CREATE TABLE `courseteacher` (
  `id` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `tid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseteacher`
--

INSERT INTO `courseteacher` (`id`, `cid`, `tid`) VALUES
(9, 8, 6),
(10, 5, 4),
(11, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `message`) VALUES
(1, 'Welcome, Freshers'),
(2, 'Orientation class on 4th January');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cgpa` float NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `userId`, `password`, `name`, `cgpa`, `status`) VALUES
(3, 'faysal', '123', 'faysal', 3.3, 1),
(4, 'arnab', '123', 'arnab', 3.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `freeTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `freeTime`) VALUES
(4, 'AAA', 'sun-1-2/Mon -1-2'),
(5, 'BBB', 'Mon -1-2/Wed-8-11'),
(6, 'CCC', 'Mon -1-2/Wed-8-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursestudent`
--
ALTER TABLE `coursestudent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id_fk` (`cid`),
  ADD KEY `student_id_fk` (`sid`);

--
-- Indexes for table `courseteacher`
--
ALTER TABLE `courseteacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id_fk` (`tid`),
  ADD KEY `courseX_id_fk` (`cid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coursestudent`
--
ALTER TABLE `coursestudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `courseteacher`
--
ALTER TABLE `courseteacher`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursestudent`
--
ALTER TABLE `coursestudent`
  ADD CONSTRAINT `course_id_fk` FOREIGN KEY (`cid`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id_fk` FOREIGN KEY (`sid`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courseteacher`
--
ALTER TABLE `courseteacher`
  ADD CONSTRAINT `courseX_id_fk` FOREIGN KEY (`cid`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_id_fk` FOREIGN KEY (`tid`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
