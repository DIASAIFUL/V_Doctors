-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 09:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damsmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AppointmentNumber` int(10) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `AppointmentDate` date DEFAULT NULL,
  `AppointmentTime` time DEFAULT NULL,
  `Specialization` varchar(250) DEFAULT NULL,
  `Doctor` int(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AppointmentNumber`, `Name`, `MobileNumber`, `Email`, `AppointmentDate`, `AppointmentTime`, `Specialization`, `Doctor`, `Message`, `ApplyDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(8, 940019123, 'Amit Kumar', 1425362514, 'amitkr123@test.com', '2022-11-15', '12:30:00', '13', 4, 'NA', '2022-11-11 01:56:17', 'Your appointment has been approved.', 'Approved', '2022-11-11 01:56:55'),
(9, 235260718, 'saiful', 124513145, 'saiful@gmail.com', '2022-12-24', '22:00:00', '1', 5, ' Hi, sir i have a sample problem', '2022-12-23 20:19:44', 'Your appointment request approved.', 'Approved', '2022-12-23 20:21:49'),
(10, 753169100, 'Professor Dr. Md. Abdul Hayee', 124513525, 'dr.abdulHayee@gmail.com', '2022-12-25', '22:00:00', '1', 6, 'Hi', '2022-12-24 17:25:59', 'booked', 'Cancelled', '2022-12-24 17:32:38'),
(11, 476105445, 'abid', 1121321231, 'abid@gmail.com', '2022-12-26', '10:00:00', '1', 5, 'hi', '2022-12-25 17:59:53', 'request approved', 'Approved', '2022-12-25 18:01:00'),
(12, 921940290, 'sohag', 10101210, 'sohag@gmail.com', '2022-12-27', '19:00:00', '14', 7, 'hi', '2022-12-25 18:15:59', 'Alrady booked', 'Cancelled', '2022-12-25 18:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE `tbldoctor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Specialization` varchar(250) DEFAULT NULL,
  `Password` varchar(259) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`ID`, `FullName`, `MobileNumber`, `Email`, `Specialization`, `Password`, `CreationDate`) VALUES
(5, 'Dr Saiful islam', 12451241, 'saiful@gmail.com', '1', '202cb962ac59075b964b07152d234b70', '2022-12-23 20:16:09'),
(6, 'Professor Dr. Md. Abdul Hayee', 123654789, 'dr.abdulHayee@gmail.com', '1', '202cb962ac59075b964b07152d234b70', '2022-12-24 17:24:54'),
(7, 'Dr. Somayra Nasreen', 12451421, 'Somayra@gmail.com', '14', '202cb962ac59075b964b07152d234b70', '2022-12-25 18:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<div><font color=\"#202124\" face=\"arial, sans-serif\"><b>Our mission declares our purpose of existence as a company and our objectives.</b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b><br></b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</b></font></div>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541239, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblspecialization`
--

CREATE TABLE `tblspecialization` (
  `ID` int(5) NOT NULL,
  `Specialization` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblspecialization`
--

INSERT INTO `tblspecialization` (`ID`, `Specialization`, `CreationDate`) VALUES
(1, 'Orthopedics', '2022-11-09 14:22:33'),
(2, 'Internal Medicine', '2022-11-09 14:23:42'),
(3, 'Obstetrics and Gynecology', '2022-11-09 14:24:14'),
(4, 'Dermatology', '2022-11-09 14:24:42'),
(5, 'Pediatrics', '2022-11-09 14:25:06'),
(6, 'Radiology', '2022-11-09 14:25:31'),
(7, 'General Surgery', '2022-11-09 14:25:52'),
(8, 'Ophthalmology', '2022-11-09 14:27:18'),
(9, 'Family Medicine', '2022-11-09 14:27:52'),
(10, 'Chest Medicine', '2022-11-09 14:28:32'),
(11, 'Anesthesia', '2022-11-09 14:29:12'),
(12, 'Pathology', '2022-11-09 14:29:51'),
(14, 'Cardiologist', '2022-12-25 18:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'saiful islam', 'saiful@gmail.com', '202cb962ac59075b964b'),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b'),
(3, 'user', 'user@gmail.com', '202cb962ac59075b964b'),
(4, 'user1', 'user2@gmail.com', '202cb962ac59075b964b'),
(5, 'user3', 'user3@gmail.com', '202cb962ac59075b964b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblspecialization`
--
ALTER TABLE `tblspecialization`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblspecialization`
--
ALTER TABLE `tblspecialization`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
