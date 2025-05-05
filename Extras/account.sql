-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 08:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `LastName`, `Email`, `password`) VALUES
(1, 'Ambreen', 'Kanwal', 'ambreenkanwal106@gmail.com', 'ambreen'),
(10, 'Sara', 'Khalid', 'sarakhalid@gmail.com', '123'),
(11, 'Tasbeeha', 'Maqsood', 'tasbeehamaqsood@gmail.com', '123'),
(12, 'Amna', 'Maqsood', 'amnamaqsood@gmail.com', '123'),
(18, 'Zara', 'Noor', 'zaranoor@gmail.com', '12345'),
(19, 'Zeenia', 'Khan', 'zkhan@gmail.com', '123'),
(20, 'Atif', 'Mehboob', 'atii778@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
