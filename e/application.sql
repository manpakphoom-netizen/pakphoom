-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `a_id` int(7) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(255) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_dob` varchar(255) NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skills` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`a_id`, `a_position`, `a_prefix`, `a_fullname`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'UX/UI Designer', 'นาง', 'pakphoom wannachai', '2025-12-04', 'ปริญญาตรี', '', ''),
(3, 'Marketing Specialist', 'นาย', 'pakphoom wannachai', '2025-12-19', 'ปริญญาตรี', 'ร้องเพลง', 'ทำงาน 7-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
