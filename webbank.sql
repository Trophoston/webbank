-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 04:47 PM
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
-- Table structure for table `historys`
--

CREATE TABLE `historys` (
  `h_id` int(11) NOT NULL,
  `h_uid` int(11) NOT NULL,
  `h_type` varchar(225) NOT NULL,
  `h_num` int(11) NOT NULL,
  `h_balance` int(11) NOT NULL,
  `h_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historys`
--

INSERT INTO `historys` (`h_id`, `h_uid`, `h_type`, `h_num`, `h_balance`, `h_time`) VALUES
(1, 4, 'Account created', 1000, 1000, '2024-11-17 15:46:16'),
(2, 1, 'Deposit', 1, 10001, '2024-11-17 15:46:16'),
(3, 1, 'Deposit', 123, 10124, '2024-11-17 15:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(225) NOT NULL,
  `u_lname` varchar(225) NOT NULL,
  `u_tel` varchar(225) NOT NULL,
  `u_mail` varchar(225) NOT NULL,
  `u_role` varchar(225) NOT NULL,
  `u_bal` int(11) NOT NULL,
  `u_pin` varchar(225) NOT NULL,
  `u_pass` varchar(225) NOT NULL,
  `u_secid` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_lname`, `u_tel`, `u_mail`, `u_role`, `u_bal`, `u_pin`, `u_pass`, `u_secid`) VALUES
(1, 'Minus', 'yupp', '1345782345', '52750@yupparaj.ac.th', 'admin', 10124, '111111', '52750', '2RVF4ZX'),
(11, 'trophoston', 'jomchanphan', '1345782345', 'tk@tk.tk', 'user', 0, '', 'a', '6VUU8KL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historys`
--
ALTER TABLE `historys`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historys`
--
ALTER TABLE `historys`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
