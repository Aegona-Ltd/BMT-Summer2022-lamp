-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 08:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` tinytext DEFAULT NULL,
  `content` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `content`, `updated_at`, `created_at`) VALUES
(1, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 04:02:23', '2022-08-12 04:02:23'),
(2, 'Test', 'test@gmail.com', 'Tieu de test', 'Day la noi dung mau test', '2022-08-12 04:30:49', '2022-08-12 04:30:49'),
(3, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 04:31:34', '2022-08-12 04:31:34'),
(4, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 04:31:51', '2022-08-12 04:31:51'),
(5, '123', 'hello@gmail.com', '123', '123', '2022-08-12 04:32:34', '2022-08-12 04:32:34'),
(6, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 04:59:53', '2022-08-12 04:59:53'),
(7, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 08:27:50', '2022-08-12 08:27:50'),
(8, 'Quynhq?qwqqw', 'quynh123@gmail.comqewq', 'Tieu deq?eqw', 'Day la noi dung mauqeqw', '2022-08-12 08:43:53', '2022-08-12 08:43:53'),
(9, 'Quynh', 'quynh123@gmail.com', 'Tieu de', 'Day la noi dung mau', '2022-08-12 08:44:13', '2022-08-12 08:44:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
