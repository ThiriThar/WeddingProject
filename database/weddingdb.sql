-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 06:33 PM
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
-- Database: `weddingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `No` int(200) NOT NULL,
  `Username` varchar(800) NOT NULL,
  `Phone` int(200) NOT NULL,
  `Address` varchar(800) NOT NULL,
  `Product` varchar(800) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`No`, `Username`, `Phone`, `Address`, `Product`, `Name`, `Price`) VALUES
(1, 'Regina', 57829146, 'Tamwe Lay Township', 'Entertainment', 'Bunny Phyoe', 73600000),
(2, 'Vivia', 73918501, 'Sanchaung Township', 'Food', 'Sweets', 6700000),
(3, 'Kyaw Kyaw', 614580784, 'Tha Ke Ta Township', 'Hall', 'BOB Beach', 6800000),
(5, 'James', 789174902, 'Tamwe Lay Township', 'Entertainment', 'Ed Sheeran', 84500000);

-- --------------------------------------------------------

--
-- Table structure for table `bouquet`
--

CREATE TABLE `bouquet` (
  `No` int(200) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Price` int(200) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bouquet`
--

INSERT INTO `bouquet` (`No`, `Name`, `Price`, `Image`) VALUES
(1, 'LILY White', 67000, 'bo2.jpg'),
(2, 'ROS Red', 82000, 'bo3.webp'),
(3, 'DIA Pearl', 84500, 'bo4.webp'),
(4, 'REN Green', 49000, 'bo5.jpg'),
(5, 'IRA Pink', 52000, 'bo6.jpg'),
(6, 'NTA Nxde', 74000, 'bo7.webp');

-- --------------------------------------------------------

--
-- Table structure for table `bride`
--

CREATE TABLE `bride` (
  `No` int(200) NOT NULL,
  `Dress` varchar(700) NOT NULL,
  `Perfume` varchar(700) NOT NULL,
  `Price` int(200) NOT NULL,
  `Size` varchar(500) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bride`
--

INSERT INTO `bride` (`No`, `Dress`, `Perfume`, `Price`, `Size`, `Image`) VALUES
(1, 'LIA Princess', 'RLA 008', 850000, 'XL', 'b2.jpg'),
(2, 'GOY Luxury', 'RLA 031', 960000, 'L', 'b3.jpg'),
(3, 'MIIA Coul', 'RLA 016', 780000, 'L', 'b4.webp'),
(4, 'KISH Mermaid', 'RLA 020', 970000, 'M', 'b5.jpg'),
(5, 'KTA Queen', 'RLA 003', 1050000, 'XL', 'b6.jpg'),
(6, 'VOI Elegant', 'RLA 042', 948000, 'M', 'b7.jpg'),
(8, 'JEW Melian', 'RLA 031', 591000, 'L', 'b6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `No` int(200) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Hour` varchar(500) NOT NULL,
  `Price` int(200) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`No`, `Name`, `Hour`, `Price`, `Image`) VALUES
(1, 'Maroon 5', '2 hours 30 minutes', 98050000, 'e2.webp'),
(2, 'Ed Sheeran', '3 hours', 84500000, 'e3.webp'),
(3, 'Shawn Mendes', '2 hours', 97500000, 'e4.webp'),
(4, 'Bunny Phyoe', '3 hours 30 minutes', 73600000, 'e5.jpg'),
(5, 'Taylor Swift', '2 hours', 84950000, 'e6.jpg'),
(6, 'Ariana Grande', '2 hours 30 minutes', 68540000, 'e7.webp');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `No` int(200) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Price` int(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`No`, `Name`, `Price`, `Quantity`, `Image`) VALUES
(1, 'Dessert', 9800000, 250, 'f2.jpeg'),
(2, 'Breads & Flour', 7200000, 180, 'f3.jpeg'),
(3, 'Meats', 15000000, 300, 'f4.jpg'),
(4, 'Sweets', 6700000, 270, 'f5.jpg'),
(5, 'Pizza', 8370000, 160, 'f6.jpg'),
(6, 'Fruits', 7420000, 300, 'f7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groom`
--

CREATE TABLE `groom` (
  `No` int(200) NOT NULL,
  `Suit` varchar(800) NOT NULL,
  `Perfume` varchar(800) NOT NULL,
  `Price` int(200) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groom`
--

INSERT INTO `groom` (`No`, `Suit`, `Perfume`, `Price`, `Size`, `Image`) VALUES
(18, 'SDK White', 'RLA 004', 550000, 'L', 'g2.jpg'),
(19, 'CI Red', 'RLA 013', 480000, 'XL', 'g3.jpg'),
(20, 'UIX Black', 'RLA 009', 780000, 'L', 'g4.jpg'),
(21, 'NVY Blue', 'RLA 032', 650000, 'XXL', 'g5.webp'),
(22, 'IVY Pink', 'RLA 027', 704000, 'L', 'g6.jpg'),
(23, 'SIA Purple', 'RLA 045', 590000, 'XL', 'g7.webp'),
(24, 'MIA Ruby', 'RLA 006', 691000, 'XL', 'g3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `No` int(200) NOT NULL,
  `Type` varchar(800) NOT NULL,
  `Hour` int(200) NOT NULL,
  `Price` int(200) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`No`, `Type`, `Hour`, `Price`, `Image`) VALUES
(1, 'IVY White', 4, 8000000, 'h1.jpg'),
(2, 'PIA Dark', 3, 7600000, 'h2.jpg'),
(3, 'RTC Pink', 4, 8900000, 'h3.jpg'),
(4, 'SEA Purple', 4, 12560000, 'h4.jpg'),
(5, 'CHR Gold', 3, 9650000, 'h5.jpg'),
(6, 'BOB Beach', 4, 6800000, 'h6.webp'),
(8, 'JAS Golden', 3, 8263000, 'bg9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jewelry`
--

CREATE TABLE `jewelry` (
  `No` int(200) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Price` int(200) NOT NULL,
  `Image` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jewelry`
--

INSERT INTO `jewelry` (`No`, `Name`, `Price`, `Image`) VALUES
(1, 'AQUA Quine', 5260000, 'j1.jpg'),
(2, 'KNC Diamond', 6890000, 'j2.jpeg'),
(3, 'TIA Ruby', 9850000, 'j3.jpg'),
(4, 'VIS Maria', 6650000, 'j4.webp'),
(5, 'CYN Blue', 7540000, 'j5.webp'),
(6, 'CIC Gold', 8945000, 'j6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

CREATE TABLE `makeup` (
  `No` int(200) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `Price` int(200) NOT NULL,
  `Artist` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`No`, `Type`, `Price`, `Artist`, `Image`) VALUES
(1, 'ILC Dark', 750000, 'Khin San Win', 'm2.webp'),
(2, 'ROS Pinky', 640000, 'Nyi Nyi Mg (San Chaung)', 'm3.jpg'),
(3, 'MIA Fresh', 730000, 'Khin San Win', 'm4.jpg'),
(4, 'OLE Neat', 972000, 'Pauk Pauk', 'm5.jpg'),
(5, 'LUX Queen', 874000, 'Pauk Pauk', 'm6.jpg'),
(6, 'EDG Soft', 876400, 'Khin San Win', 'm7.png'),
(8, 'DOR Melon', 738000, 'Khin San Win', 'm4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `No` int(200) NOT NULL,
  `Username` varchar(800) NOT NULL,
  `Phone` int(200) NOT NULL,
  `Address` varchar(800) NOT NULL,
  `Product` varchar(800) NOT NULL,
  `Name` varchar(800) NOT NULL,
  `Price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`No`, `Username`, `Phone`, `Address`, `Product`, `Name`, `Price`) VALUES
(1, 'Nicole', 654322876, 'Thingyankyun Township', 'Bride', 'LIA Princess', 850000),
(2, 'Thiri', 42581532, 'Myay Ni Gone Township', 'Jewelry', 'KNC Diamond', 6890000),
(3, 'Dia', 781648135, 'Tha Ke Ta Township', 'Bouquet', 'NTA Nxde', 74000),
(5, 'Eren', 679179274, 'Thingyankyn Township', 'Groom', 'UIX Black', 780000);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `No` int(200) NOT NULL,
  `Username` varchar(800) NOT NULL,
  `Message` varchar(800) NOT NULL,
  `Rating` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`No`, `Username`, `Message`, `Rating`) VALUES
(1, 'Nicole', 'Very excellent services and management! My wedding was successfully done beautifully.', '10 out of 10'),
(2, 'Ben', 'Really nice, neat and clean system', '8 out of 10'),
(3, 'Kate', 'Perfect management system, great employees ', '8.5 out of 10'),
(4, 'Ken', 'Always giving us best services, really affordable prices and excellent system', '8 out of 10'),
(5, 'Melia', 'Best out of all wedding companies, great managing of employees and staffs', '9 out of 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `bouquet`
--
ALTER TABLE `bouquet`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `bride`
--
ALTER TABLE `bride`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `groom`
--
ALTER TABLE `groom`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `jewelry`
--
ALTER TABLE `jewelry`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `makeup`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bouquet`
--
ALTER TABLE `bouquet`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bride`
--
ALTER TABLE `bride`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groom`
--
ALTER TABLE `groom`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jewelry`
--
ALTER TABLE `jewelry`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `makeup`
--
ALTER TABLE `makeup`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
