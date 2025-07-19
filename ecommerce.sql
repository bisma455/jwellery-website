-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:28 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(1001) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `number`, `email`, `message`) VALUES
(1, 'Zainab', 'Sarwar', '0309 1042020', 'zainab@gmail.com', 'sed');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `Pimage` varchar(100) NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `PName`, `PPrice`, `Pimage`, `PCategory`) VALUES
(14, 'Armour ring', '12000', ' Uploadimage/r1.jpeg', 'Rings'),
(15, 'Eternity Ring', '5000', ' Uploadimage/r2.jpeg', 'Rings'),
(16, 'Rosary ring', '5000', ' Uploadimage/r3.jpeg', 'Rings'),
(17, 'Cameo ring', '3000', ' Uploadimage/r4.jpeg', 'Rings'),
(18, 'Birthstone ring', '5000', ' Uploadimage/r5.jpeg', 'Rings'),
(19, 'Van Cleef', '4000', ' Uploadimage/r6.jpeg', 'Rings'),
(20, 'Cartier ring', '5500', ' Uploadimage/r7.jpeg', 'Rings'),
(21, 'Messika', '5000', ' Uploadimage/r8.jpeg', 'Home'),
(22, 'Alliance Love', '4300', ' Uploadimage/r9.jpeg', 'Home'),
(23, 'Trinity weds', '6000', ' Uploadimage/r10.jpeg', 'Home'),
(24, 'Amethyst flower', '3000', 'Uploadimage/b1.jpeg', 'Bracelets'),
(25, 'opal ties', '5000', 'Uploadimage/b2.jpeg', 'Bracelets'),
(26, 'spinel hearts', '2500', 'Uploadimage/b3.jpeg', 'Bracelets'),
(27, 'pearl stones', '4000', 'Uploadimage/b4.jpeg', 'Bracelets'),
(28, 'lolite turns', '3500', 'Uploadimage/b6.jpeg', 'Bracelets'),
(29, 'The point U', '1200', 'Uploadimage/b7.jpeg', 'Bracelets'),
(30, 'Royal Fills', '2500', ' Uploadimage/b8.jpeg', 'Home'),
(31, 'Flower beads', '2000', ' Uploadimage/b9.jpeg', 'Home'),
(32, 'Full Eternity', '8000', ' Uploadimage/b11.jpeg', 'Home'),
(33, 'Zirconia', '3000', ' Uploadimage/p1.jpeg', 'Pendants'),
(34, 'Stary moon', '6000', ' Uploadimage/p2.jpeg', 'Pendants'),
(35, 'Eternity', '3000', ' Uploadimage/p3.jpeg', 'Pendants'),
(36, 'Silvery Us', '8000', ' Uploadimage/p4.jpeg', 'Pendants'),
(37, 'Hazel stone', '5000', ' Uploadimage/p5.jpeg', 'Pendants'),
(38, 'Pink Emareld', '3000', ' Uploadimage/p6.jpeg', 'Pendants'),
(39, 'ring tos', '6000', ' Uploadimage/p8.jpeg', 'Home'),
(40, 'round prine', '4000', ' Uploadimage/p9.jpeg', 'Home'),
(41, 'snow star', '4400', ' Uploadimage/p7.jpeg', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(2001) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(1, 'zainab', 'zainab@gmail.com', '123456789', 'zainabzainab'),
(2, 'Zainab Sarwar', 'zainabsarwar894@gmail.com', '11', '22'),
(4, 'z', 'zainabsarwar58@gmail.com', '234', '6543'),
(5, 'fari', 'fari@gmail.com', '0123', 'fari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
