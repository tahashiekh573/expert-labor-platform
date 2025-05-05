-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 05:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Ambreen', 'ambreen@gmail.com', '123'),
(2, 'Ammar', 'ammar@gmail.com', '321');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `Name`, `Price`, `Description`, `Image`, `Quantity`) VALUES
(1, 'Pizza', 3600, 'cheese', 'piza-3010062_1920.jpg', 3),
(4, 'Sandwich', 1000, 'Yummyyy', 'sandwich-2301387_1280.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Message`) VALUES
(1, 'ammar', 'bla bla'),
(2, 'ambreen', 'lalalala'),
(3, 'ammara', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Item` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Name`, `Phone`, `Address`, `Item`, `Quantity`, `Total`, `Date`) VALUES
(1, 'Ambreen', 123, 'iwshwsnwybxybwxby', 'Pizza', 3, 4600, '0000-00-00 00:00:00'),
(2, 'Ambreen', 123, 'iwshwsn', 'Pizza', 3, 4600, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Price`, `Description`, `Image`, `Quantity`) VALUES
(1, 'Pizza', 1200, 'cheese', 'piza-3010062_1920.jpg', 1),
(3, 'Burger', 500, 'Zinger', 'burger-74748_1280.jpg', 1),
(4, 'Sandwich', 500, 'Yummyyy', 'sandwich-2301387_1280.jpg', 1);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
