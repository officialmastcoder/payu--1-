-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2022 at 12:17 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u645376054_crsorgii`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrtxn`
--

CREATE TABLE `qrtxn` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txnid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `upi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qrtxn`
--

INSERT INTO `qrtxn` (`id`, `userid`, `amount`, `txnid`, `date`, `upi`, `status`) VALUES
(11, 'admin@ahkwebsolutions.com', '120', 'jasfjsbf', '2022-08-06 18:41:30', 'jbh@bjp', 'approved'),
(13, 'admin@ahkwebsolutions.com', '1', 'sdf', '2022-08-06 19:02:05', 'sdf', 'approved'),
(14, 'ADMIN', '10', 'TXNCRS399_ADMIN', '2022-09-11 10:33:31', '', 'approved'),
(15, 'ADMIN', '1', 'TXNCRS394_ADMIN', '2022-09-11 10:46:07', '', 'approved'),
(16, 'ADMIN', '1', 'TXNCRS36_ADMIN', '2022-09-11 10:57:19', '', 'approved'),
(17, 'ADMIN', '1', 'TXNCRS194_ADMIN', '2022-09-11 11:01:24', '', 'approved'),
(18, 'ADMIN', '1', 'TXNCRS121_ADMIN', '2022-09-11 11:03:28', '', 'approved'),
(19, 'ADMIN', '3', 'TXNCRS96_ADMIN', '2022-09-11 11:04:17', '', 'approved'),
(20, 'ADMIN', '10', 'TXNCRS87_ADMIN', '2022-09-11 11:04:50', '', 'approved'),
(21, 'ADMIN', '1', 'TXNCRS410_ADMIN', '2022-09-11 11:38:32', '', 'approved'),
(22, 'ADMIN', '1', 'TXNCRS741_ADMIN', '2022-09-11 11:40:01', '', 'approved'),
(23, 'ADMIN', '1', 'TXNCRS54_ADMIN', '2022-09-11 11:41:01', '', 'approved'),
(24, 'ADMIN', '10', 'TXNCRS372_ADMIN', '2022-09-11 11:44:56', '', 'approved'),
(25, 'ADMIN', '1', 'TXNCRS122_ADMIN', '2022-09-11 11:48:23', '', 'approved'),
(26, 'ADMIN', '10', 'TXNCRS463_ADMIN', '2022-09-11 11:56:08', '', 'approved'),
(27, 'ADMIN', '1', 'TXNCRS256_ADMIN', '2022-09-11 11:57:47', '', 'approved'),
(28, 'ADMIN', '1', 'TXNCRS998_ADMIN', '2022-09-11 11:58:42', '', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrtxn`
--
ALTER TABLE `qrtxn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrtxn`
--
ALTER TABLE `qrtxn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
