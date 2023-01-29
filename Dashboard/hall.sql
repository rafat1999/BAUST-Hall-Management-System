-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 04:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_add`
--

CREATE TABLE `emp_add` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cellNo` int(20) NOT NULL,
  `empType` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `blockNo` varchar(255) NOT NULL,
  `salary` int(20) NOT NULL,
  `presentAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_add`
--

INSERT INTO `emp_add` (`id`, `name`, `cellNo`, `empType`, `designation`, `gender`, `dob`, `doj`, `blockNo`, `salary`, `presentAddress`) VALUES
(7, 'Shihab ', 1313338008, 'Student', 'project', 'Male', '2000-04-03', '0000-00-00', 'A', 200000, 'saidpur'),
(8, 'Wahid', 156562626, 'resiptionist', 'night gurd', 'Male', '1979-05-02', '0000-00-00', 'B', 200000, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `hall_attendence`
--

CREATE TABLE `hall_attendence` (
  `id` int(255) NOT NULL,
  `stdId` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `present` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_attendence`
--

INSERT INTO `hall_attendence` (`id`, `stdId`, `name`, `present`, `date`, `program`) VALUES
(101, 0, '', '1', '2022-10-10', ''),
(102, 0, '', '1', '2022-10-10', ''),
(104, 0, '', '1', '2022-10-10', ''),
(105, 0, '', '1', '2022-10-10', ''),
(106, 0, '', '1', '2022-10-10', ''),
(107, 0, '', '0', '2022-10-10', ''),
(108, 0, '', '0', '2022-10-10', ''),
(109, 0, '', '0', '2022-10-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `serial` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `createDate` datetime NOT NULL,
  `pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`pdf`) VALUES
('BDRAILWAY_TICKET202207180827143391603.pdf'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('Application 15-9-22.pdf'),
('291029863_1159436107962713_8826046379421826246_n.jpg'),
('291029863_1159436107962713_8826046379421826246_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_add`
--

CREATE TABLE `std_add` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stdId` int(20) NOT NULL,
  `cellNo` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nameOfInst` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `batchNo` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nationalId` int(20) NOT NULL,
  `passportNo` varchar(50) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `fatherCellNo` int(20) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `motherCellNo` int(20) NOT NULL,
  `localGuardian` varchar(255) NOT NULL,
  `localGuardianCell` int(200) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `parmanentAddress` varchar(255) NOT NULL,
  `hall_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_add`
--

INSERT INTO `std_add` (`id`, `name`, `stdId`, `cellNo`, `email`, `nameOfInst`, `program`, `batchNo`, `gender`, `dob`, `bloodGroup`, `nationality`, `nationalId`, `passportNo`, `fatherName`, `fatherCellNo`, `motherName`, `motherCellNo`, `localGuardian`, `localGuardianCell`, `presentAddress`, `parmanentAddress`, `hall_name`) VALUES
(3, 'Rasa', 200101054, 1313338008, 'mdrasaraj2020@gmail.com', 'New Hall', 'CSE', '10', 'male', '1999-08-25', 'A+', 'Bangladeshi', 2147483647, 'none', 'Abdur Razzak', 1518381547, 'Shahanaz Parvin', 1767075753, 'Robin Raz', 1735832333, 'saidpur', 'Meherpur', ''),
(5, 'Shihab ', 2001010333, 1723564578, 'rafat123@gmail.com', 'New Hall', 'CSE', '10', 'male', '2000-08-25', 'A+', 'Bangladeshi', 2147483647, 'none', 'Shajahan', 1518381589, 'Shahanaz ', 1767075778, 'Robin Raz', 1735832388, 'saidpur', 'khulna', ''),
(10, 'Munai', 200101065, 1621546598, 'cse.200101065@gmail.com', 'Taramon Bibi', 'CSE', '10', 'male', '1999-08-27', 'A+', 'Bangladeshi', 162535555, 'None', 'father', 1454659887, 'Mother', 1898653254, 'None', 1465988765, 'saidpur', 'Gaibandha', ''),
(12, 'Raj', 54, 1313338008, 'cse.200101054@gmail.com', 'New Hall', 'CSE', '10', 'male', '1999-08-25', 'A+', 'Bangladeshi', 2147483647, 'none', 'Abdur Razzak', 1518381547, 'Shahanaz Parvin', 1767075753, 'Robin Raz', 1735832333, 'saidpur', 'Meherpur', ''),
(13, 'Wahid', 0, 145656656, '', '', '', '', 'Male', '1979-05-01', '', '', 0, '', '', 0, '', 0, '', 0, 'saidpur', '', ''),
(14, 'Meghna', 200101002, 1765829658, 'cse.200101002@gmail.com', 'Taramon Bibi', 'CSE', '10', 'female', '1999-05-25', 'A+', 'Bangladeshi', 1625355245, 'none', 'Baba', 2147483647, 'Ma', 1789124565, 'None', 2147483647, 'saidpur', 'Dinajpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_attendance`
--

CREATE TABLE `std_attendance` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stdId` int(20) NOT NULL,
  `cellNo` int(20) NOT NULL,
  `program` varchar(255) NOT NULL,
  `batchNo` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `present` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_attendance`
--

INSERT INTO `std_attendance` (`id`, `name`, `stdId`, `cellNo`, `program`, `batchNo`, `date`, `present`) VALUES
(2, 'Shihab ', 2001010333, 1313338008, 'CSE', '10', '2022-09-05', 'Yes'),
(3, 'Rasa Raj', 200101054, 1313338008, 'CSE', '8', '2022-10-10', 'Yes'),
(71, '', 0, 0, '', '', '2022-09-23', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_add`
--
ALTER TABLE `emp_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_attendence`
--
ALTER TABLE `hall_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `std_add`
--
ALTER TABLE `std_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_attendance`
--
ALTER TABLE `std_attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_add`
--
ALTER TABLE `emp_add`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hall_attendence`
--
ALTER TABLE `hall_attendence`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `std_add`
--
ALTER TABLE `std_add`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `std_attendance`
--
ALTER TABLE `std_attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
