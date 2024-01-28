-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 07:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectict602`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(4, 'Alieya', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(11) NOT NULL,
  `newsTitle` varchar(50) NOT NULL,
  `newsDesc` varchar(100) NOT NULL,
  `newsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsTitle`, `newsDesc`, `newsDate`) VALUES
(1, 'Road Closure Due to Flooding', 'Please be advised of the following:\r\n\r\nAlternative Routes: Find alternative routes to reach your des', '2024-01-24'),
(3, 'Road Hazard', 'There is an accident in Jalan Tengku Ismail, Kuala Lumpur', '2024-01-27'),
(4, 'Construction', 'LEKAS Highway: Blocked Road. Be alert', '2024-01-27'),
(7, 'Emergency Alerts', 'Kuala Lumpur: Severe weather warning: Heavy rain expected in the next 24 hours. Stay indoors and avo', '2024-01-08'),
(8, 'Traffic Alerts', 'Highway Ipoh-Lumut: Traffic congestion expected during peak hours. Consider using alternative routes', '2024-01-10'),
(11, 'Infrastructure Updates', 'Jalan Gombak: Road repair on Main Street begins next week. Expect traffic diversions, and plan alter', '2024-01-28'),
(13, 'Construction', 'Block road. ', '2024-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `reportinfo`
--

CREATE TABLE `reportinfo` (
  `report_id` int(11) NOT NULL,
  `report_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(255) NOT NULL,
  `hazard_type` varchar(255) NOT NULL,
  `hazard_desc` text NOT NULL,
  `hazard_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportinfo`
--

INSERT INTO `reportinfo` (`report_id`, `report_timestamp`, `name`, `hazard_type`, `hazard_desc`, `hazard_loc`) VALUES
(1, '2024-01-05 02:34:02', 'Ahmad', 'Flood', 'flashflood because of a drain full of rubbish', 'Jalan Hang Tuah, Melaka'),
(2, '2024-01-28 07:21:00', 'Fatimah Khamis', 'Traffics Jam', 'Slow Movement for about 10 minutes\r\n', 'Highway Kuala Lumpur-Seremban'),
(3, '2024-01-17 14:00:39', 'Azim Azam', 'Road Hazard', 'There are elephants on the road. Please be careful', 'Jalan Kenyir-Felda Aring-Cameron'),
(4, '2024-01-27 14:21:20', 'Farisyah', 'Construction Zone', 'Jalan Alam Damai is blocked. Turn to a new way', 'Jalan Alam Damai, Cheras KL'),
(5, '2024-01-27 14:28:23', 'Abu ', 'Potholes', 'Big Potholes ', 'Jalan Datuk Sulaiman, Kuala Lumpur'),
(8, '2024-01-27 19:51:38', 'Alieya', 'Flood Hazard', 'Dangerous', 'Machang'),
(9, '2024-01-27 19:55:02', 'Akmal', 'Construction', 'Blocked Road', 'Jalan Seremban-Tampin'),
(10, '2024-01-27 20:07:27', 'Zikri', 'Natural Hazard', 'Earthquakes', 'Around Selangor'),
(11, '2024-01-28 05:57:26', 'Alieya', 'Road Hazard', 'Accident', 'Uitm Machang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `reportinfo`
--
ALTER TABLE `reportinfo`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reportinfo`
--
ALTER TABLE `reportinfo`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
