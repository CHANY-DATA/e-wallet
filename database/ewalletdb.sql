-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 08:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewalletdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `acc_number` varchar(15) NOT NULL,
  `acc_balance` varchar(10) NOT NULL,
  `now` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `names`, `phone`, `nid`, `uname`, `pswd`, `acc_number`, `acc_balance`, `now`) VALUES
(4, 'Chantal UWIZERA', '0783590992', '1198870145789022', 'CHANIRA', 'Maneri01!', '000001', '128000', '2022-08-03 08:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `acc_number` varchar(15) NOT NULL,
  `acc_balance` varchar(10) NOT NULL,
  `now` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `phone`, `nid`, `uname`, `pswd`, `acc_number`, `acc_balance`, `now`) VALUES
(1, 'KABERA Andre', '0788656598', '1122334455667788', 'KABA', '0000', 'XYZ-000002', '219900', '2022-08-03 12:47:47'),
(3, 'Imani Ahmed', '078888888', '114555878655887', 'Imani', '0000', 'XYZ-000003', '181100', '2022-08-02 19:37:49'),
(4, 'Chantal UWIZERA', '0783590992', '1198870145789022', 'CHANIRA', 'Maneri01!', '000001', '123000', '2022-08-03 14:12:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD KEY `User_id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `nid` (`nid`),
  ADD KEY `User_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
