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
-- Database: `4015db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(6) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` varchar(255) NOT NULL,
  `r_time` varchar(255) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_file` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_time`, `r_color`, `r_email`, `r_file`, `r_major`) VALUES
(1, 'ภาคภูมิ วรรณชัย', '', 0, '', '', '', '', '', '', ''),
(2, 'man', '0753', 0, '', '', '', '', '', '', ''),
(3, 'man', '0753', 147, '', '', '', '#dc3545', '', '', 'บัญชี'),
(4, 'pakphoom wannachai', '0630560150', 170, 'mahasarahkam', '2004-09-07', '15:23', '#fd1c32', 'manpakphoom@gmail.com', 'a.jpg', 'คอมพิวเตอร์ธุรกิจ'),
(5, 'pakphoom wannachai', '0630560150', 170, 'mahasarahkam', '2004-09-07', '15:25', '#ffb042', 'manpakphoom@gmail.com', 'a.jpg', 'ตลาด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
