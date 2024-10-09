-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 08:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(11) NOT NULL,
  `h_uid` int(11) NOT NULL,
  `h_type` varchar(225) NOT NULL,
  `h_num` int(11) NOT NULL,
  `h_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `h_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`h_id`, `h_uid`, `h_type`, `h_num`, `h_time`, `h_balance`) VALUES
(5, 1, '1', 1, '2024-10-09 06:56:40', 0),
(7, 1, 'Deposit', 1, '2024-10-09 14:23:11', 1000122336),
(8, 2, 'Deposit', 11111, '2024-10-09 14:47:11', 21111),
(9, 5, 'Account created', 1000, '2024-10-09 14:50:53', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(225) NOT NULL,
  `u_lname` varchar(225) NOT NULL,
  `u_tel` varchar(225) NOT NULL,
  `u_mail` varchar(225) NOT NULL,
  `u_role` varchar(225) NOT NULL,
  `u_bal` double NOT NULL,
  `u_pin` varchar(225) NOT NULL,
  `u_pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fname`, `u_lname`, `u_tel`, `u_mail`, `u_role`, `u_bal`, `u_pin`, `u_pass`) VALUES
(1, 'trophoston', 'jomchanphan', '0910000000', '52750@yupparaj.ac.th', 'admin', 696969, '111111', '52750'),
(2, 'Jhon', 'Sena', '0000000000', 'jhon@jemail.com', 'user', 21111, '111111', 'jhon'),
(5, 'a', 'a', '0910000000', 'asdasd@asdasda', 'user', 10000, '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
