-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 12:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scan-o-car`
--

-- --------------------------------------------------------

--
-- Table structure for table `carnumber`
--

CREATE TABLE `carnumber` (
  `number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest_cars`
--

CREATE TABLE `guest_cars` (
  `Car_ID` int(3) NOT NULL,
  `Car_Number` varchar(15) NOT NULL,
  `Org-code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_cars`
--

INSERT INTO `guest_cars` (`Car_ID`, `Car_Number`, `Org-code`) VALUES
(11, 'MH04AB2569', 'SBM456'),
(12, 'MH04AB2569', 'SBM456'),
(13, 'MH47AN6188', 'SBM456');

-- --------------------------------------------------------

--
-- Table structure for table `local_car_details`
--

CREATE TABLE `local_car_details` (
  `Car_ID` int(3) NOT NULL,
  `Car_Owner_Name` text NOT NULL,
  `Car_Number` varchar(10) NOT NULL,
  `Org_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `local_car_details`
--

INSERT INTO `local_car_details` (`Car_ID`, `Car_Owner_Name`, `Car_Number`, `Org_code`) VALUES
(1, 'Mukund Ramesh Deshmukh', 'MH47AB0796', 'SBM456'),
(2, 'Raj Nitin Desai', 'MH02BR6137', 'SBM456'),
(3, 'Neel Govind Yadav', 'MH47Q0516', 'SBM456'),
(4, 'Rahul Mandar Shinde', 'MH01BF4395', 'SBM456'),
(5, 'Priya Prakash Sompura', 'MH47AN7589', 'SBM456'),
(7, 'Malini Rajesh Awasthi', 'MH04EF1076', 'SBM456'),
(8, 'Rohan Viren Kini', 'MH04EX0071', 'SBM456'),
(9, 'Mukesh Rajnath Kovind', 'MH02CZ5019', 'SBM456'),
(10, 'Ram Jayantilal Singh', 'MH04CJ8682', 'SBM456'),
(11, 'Rajesh Kumar', 'MH04AB2569', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Org_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`Username`, `Password`, `Org_code`) VALUES
('daksh_SBM456', '32d33a86251ace36cfa92b8269d836dd805394be', 'SBM456');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Car_Number` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Org_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Car_Number`, `Date`, `Time`, `Org_code`) VALUES
('MH02BR6137', '2020-09-08', '12:41:09', 'SBM456'),
('MH04AB2569', '2020-09-08', '12:41:31', 'SBM456'),
('MH04CJ8682', '2020-09-08', '12:51:14', 'SBM456'),
('MH04AB2569', '2020-09-08', '12:52:37', 'SBM456'),
('MH47AN6188', '2020-09-10', '13:19:24', 'SBM456'),
('MH04CJ8682', '2020-09-10', '14:18:49', 'SBM456'),
('MH04CJ8682', '2020-09-10', '14:28:28', 'SBM456'),
('MH04AB2569', '2020-09-25', '15:52:03', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_cars`
--
ALTER TABLE `guest_cars`
  ADD PRIMARY KEY (`Car_ID`);

--
-- Indexes for table `local_car_details`
--
ALTER TABLE `local_car_details`
  ADD PRIMARY KEY (`Car_ID`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_cars`
--
ALTER TABLE `guest_cars`
  MODIFY `Car_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `local_car_details`
--
ALTER TABLE `local_car_details`
  MODIFY `Car_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
