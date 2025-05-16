-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2025 at 05:14 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `addprod`
--

DROP TABLE IF EXISTS `addprod`;
CREATE TABLE IF NOT EXISTS `addprod` (
  `pname` varchar(50) NOT NULL,
  `pcode` varchar(10) NOT NULL,
  `pamt` int NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `pcat` varchar(50) DEFAULT NULL,
  `un` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addprod`
--

INSERT INTO `addprod` (`pname`, `pcode`, `pamt`, `pimg`, `pcat`, `un`, `Email`) VALUES
('Brinjal', 'P058', 55, 'vege 4.jpg', 'Fruits & Vegetables', '123456789069', ''),
('Oranges', 'P052', 150, 'fruit 3.webp', 'Fruits & Vegetables', '123456789069', ''),
('Strawberry', 'P050', 190, 'Fruit 1.webp', 'Fruits & Vegetables', '123456789069', ''),
('Purple Pink Headset', 'P048', 15990, 'headphone.jpg', 'Electronic Devices', '456789012345', ''),
('Mac Book 21', 'P047', 210000, 'laptop.webp', 'Electronic Devices', '456789012345', ''),
('Lenevo yoga c13', 'P045', 72000, 'laptop d.jpg', 'Electronic Devices', '456789012345', ''),
('Asus Gaming tuf', 'P044', 60990, 'laptop b.webp', 'Electronic Devices', '456789012345', ''),
('I Phone 16 PRO max', 'P042', 159990, 'phone.jpg', 'Electronic Devices', '456789012345', ''),
('Xiaomi 14', 'P041', 16990, 'mobile 5.jpg', 'Electronic Devices', '456789012345', ''),
('Samsung S24', 'P039', 79900, 'mobile 2.webp', 'Electronic Devices', '456789012345', ''),
('Formal Brown Shoe', 'P036', 5080, 'shoe8.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('OrangeRed Limited Edition Shoe', 'P033', 9999, 'shoe4.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Red ankle cover Sandal', 'P024', 280, 'sandal4.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('tangerine orange Sandal', 'P022', 570, 'sandal1.webp', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Red Hills', 'P021', 999, 'sandal.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Blue Top', 'P018', 600, 'topzzz.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Black Shirt', 'P017', 1700, 'shirtzz.jpeg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('White Short Dress', 'P008', 520, 'dress3.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Maroon HalfHAnd jacketshirt', 'P006', 1200, 'halfshirt.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('OffBlue Tshirt', 'P003', 500, 'tshirt3.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('White Halfhand Tshirt', 'P001', 300, 'tshirt1.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Beetroot', 'P057', 69, 'vege 3.webp', 'Fruits & Vegetables', '123456789069', ''),
('Carrot', 'P055', 79, 'vege 1.jpg', 'Fruits & Vegetables', '123456789069', ''),
('Dragon Fruit', 'P054', 250, 'Fruit 4.jpg', 'Fruits & Vegetables', '123456789069', ''),
('Banana', 'P053', 45, 'Fruit 5.jpg', 'Fruits & Vegetables', '123456789069', ''),
('Pineapple', 'P051', 80, 'fruit 2.jpg', 'Fruits & Vegetables', '123456789069', ''),
('Faint Blue  Headphone', 'P049', 8888, 'headphone2.webp', 'Electronic Devices', '456789012345', ''),
('HP hgf 12', 'P046', 45000, 'laptop e.webp', 'Electronic Devices', '456789012345', ''),
('Dell y76', 'P043', 53000, 'laptop a.jpg', 'Electronic Devices', '456789012345', ''),
('One Plus A16', 'P040', 45900, 'mobile 4.jpg', 'Electronic Devices', '456789012345', ''),
('Google Pixel', 'P038', 36090, 'mobile 3.webp', 'Electronic Devices', '456789012345', ''),
('Commando Ocher Shoe', 'P037', 7990, 'shoe9.png', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Rainbow White Limited Edition Shoe', 'P035', 15000, 'shoe7.jpeg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('White Shoe', 'P034', 1700, 'shoe6.webp', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Purple Pink Limited edition Shoe', 'P032', 9999, 'shoe3.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Hot Red Shoe', 'P031', 680, 'shoe2.jpeg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Blue Formalwear Shoe', 'P030', 380, 'shoe1.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Blue Black BallSole Shoe', 'P029', 700, 'shoe.webp', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Lavendar Sandal', 'P028', 470, 'sandalb4.jpeg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Red White Mens Sandal', 'P027', 250, 'sandalb3.webp', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Multicolored Mens Sandal', 'P026', 880, 'sandalb1.webp', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('HighSole Baby Pink Sandal', 'P025', 10, 'sandal7.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Blue Shades Sandals', 'P023', 410, 'sandal2.jpg', 'Footwear', '508334757874', 'roshanivm693@gmail.com'),
('Mens Dressing set', 'P020', 25000, 'garment2.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Shirt set-3', 'P019', 1999, 'shirt.jpeg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Light Yellow Saree', 'P016', 5000, 'sareezzzz.jpeg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('YelloPink Saree', 'P015', 7000, 'sareezz.jpeg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Casuals men set of 3', 'P014', 15999, 'garment11.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('White Blue men set', 'P013', 2590, 'garment10.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Black Brown Men Set', 'P012', 3999, 'garment9.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Zebra strips Dress', 'P011', 600, 'dress6.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('NavyBlue mandala art Longdress', 'P009', 3500, 'dress4.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('HotRed Longdress', 'P007', 1500, 'dress1.jpg', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Ocher Downshoulder Tshirt', 'P005', 880, 'tshirtzzz.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Sapgreen Tshirt', 'P002', 500, 'tshirt2.webp', 'Garments', '508334757874', 'roshanivm693@gmail.com'),
('Eyeshades', 'P060', 1700, 'makeup 1.jpg', 'Beauty Products', '123456789069', ''),
('Foundation', 'P061', 600, 'makeup 2.webp', 'Beauty Products', '123456789069', ''),
('LipBalm', 'P062', 120, 'make up 3.webp', 'Beauty Products', '123456789069', ''),
('Lipstick Danger Red', 'P063', 500, 'makeup 4.jpg', 'Beauty Products', '123456789069', ''),
('Nailpaint', 'P064', 99, 'makeup 5.webp', 'Beauty Products', '123456789069', ''),
('Remote Controlled Car', 'P065', 13990, 'toy 1.jpg', 'Toys', '234567890912', ''),
('Red Bike', 'P066', 450, 'toy 2.webp', 'Toys', '234567890912', ''),
('JCB Orane', 'P067', 290, 'toy 3.jpg', 'Toys', '234567890912', ''),
('Electric Airplane', 'P068', 7000, 'toy 4.jpg', 'Toys', '234567890912', ''),
('Water Floating Ship', 'P069', 25000, 'toy 5.jpg', 'Toys', '234567890912', ''),
('Gold Platted Ring', 'P070', 7999, 'accs 1.jpg', 'Jewellery & Accessories', '234567890912', ''),
('Gold Braclet', 'P071', 12000, 'accs 2.jpg', 'Jewellery & Accessories', '234567890912', ''),
('Diamond Necklace', 'P072', 35000, 'accs 3.webp', 'Jewellery & Accessories', '234567890912', ''),
('Leather Hand Bag', 'P073', 60000, 'accs 4.webp', 'Jewellery & Accessories', '234567890912', ''),
('Coca Cola', 'P074', 80, 'food 3.webp', 'Food & Drinks', '654309871234', ''),
('Lays Classic Salted', 'P075', 40, 'food 4.webp', 'Food & Drinks', '654309871234', ''),
('Pepsi', 'P076', 80, 'food 5.webp', 'Food & Drinks', '654309871234', ''),
('Kurkure Masala', 'P077', 40, 'Food1.jpg', 'Food & Drinks', '654309871234', ''),
('Pringles', 'P078', 250, 'food2.avif', 'Food & Drinks', '654309871234', ''),
('Lays Hot Chilli', 'P079', 50, 'food3.jpg', 'Food & Drinks', '654309871234', ''),
('Uncle Chips', 'P080', 40, 'food4.webp', 'Food & Drinks', '654309871234', ''),
('Swiggy', 'F1234', 3000, 'dt4.png', 'Electronic Devices', '508334757874', '');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryteam`
--

DROP TABLE IF EXISTS `deliveryteam`;
CREATE TABLE IF NOT EXISTS `deliveryteam` (
  `dtid` int NOT NULL AUTO_INCREMENT,
  `dname` varchar(100) NOT NULL,
  `dphno` double NOT NULL,
  `dob` date NOT NULL,
  `dadharcardno` double NOT NULL,
  `dpw` varchar(30) NOT NULL,
  `drpw` varchar(30) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`dtid`),
  UNIQUE KEY `dadharcardno` (`dadharcardno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deliveryteam`
--

INSERT INTO `deliveryteam` (`dtid`, `dname`, `dphno`, `dob`, `dadharcardno`, `dpw`, `drpw`, `Status`, `Email`) VALUES
(3, 'Vijay Kumar', 7972831157, '2000-12-20', 123456789069, 'abc123', 'abc1', 'Restrict', ''),
(5, 'Rajdeep Kumar', 9876543210, '1994-07-22', 234567890912, '123', '123', 'Restrict', ''),
(7, 'Pritesh Shah', 7654389342, '1995-01-08', 654309871234, '123', '123', 'Permit', ''),
(8, 'Kirti Sharma', 7687986554, '2000-10-30', 345667890987, 'kirti@123', 'kirti@123', 'Restrict', ''),
(9, 'Varun Sharma', 7687966554, '2000-10-30', 341667890987, '123', '123', 'Permit', ''),
(10, 'Trisha Dsuoza', 1234567890, '2001-12-01', 98734561234, 't123', 't123', 'Restrict', ''),
(11, 'Deepika Gupta', 8767687261, '2002-11-02', 456789012345, 'd7231', 'd7231', 'Permit', ''),
(1, 'Roshani Gupta', 7972831157, '2003-09-06', 508334757874, 'rosh123', 'rosh123', 'Permit', 'roshanivm693@gmail.com'),
(14, 'Ragini gupta', 1234567891, '2003-09-06', 123456789099, '123', '123', 'Permit', ''),
(13, 'Vijay Malhotra', 7972831157, '2025-03-01', 123456789012, '123', '123', 'Permit', ''),
(15, 'Rosh', 987654321, '2000-05-09', 789012348765, '4321', '4321', 'Restrict', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('vv123@gmail.com', 'vv123'),
('vv123@gmail.com', 'vv123'),
('vv123@gmail.com', 'vv123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('krish@gmail.com', 'ka123'),
('roy7674@gmail.com', 'kr7674'),
('roshani693@gmail.com', '123'),
('vijay@malhotra', 'vm123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('pranjaligohad@gmail.com', '123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('roshanig693@gmail.com', 'abc123'),
('golesakshi@gmail.com', '1234'),
('roshanig693@gmail.com', 'abc123'),
('pooja@gmail.com', '7890'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('roshani693@gmail.com', '123'),
('aarti@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Oid` int NOT NULL AUTO_INCREMENT,
  `Item` varchar(100) NOT NULL,
  `Price` int NOT NULL,
  `Customer` varchar(50) NOT NULL,
  `un` double NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Oid`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Oid`, `Item`, `Price`, `Customer`, `un`, `Status`) VALUES
(16, 'Blue Top', 600, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(17, 'Red ankle cover Sandal', 280, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(18, 'Ocher Downshoulder Tshirt', 880, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(19, 'Blue Top', 600, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(20, 'Red ankle cover Sandal', 280, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(21, 'Pumpkin', 59, 'roshanig693@gmail.com', 123456789069, 'Delivered'),
(22, 'Strawberry', 190, 'roshanig693@gmail.com', 123456789069, 'Delivered'),
(15, 'Ocher Downshoulder Tshirt', 880, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(23, 'Purple Pink Headset', 15990, 'pranjaligohad@gmail.com', 456789012345, 'Delivered'),
(24, 'Rainbow White Limited Edition Shoe', 15000, 'pranjaligohad@gmail.com', 508334757874, 'Delivered'),
(25, 'Samsung S24', 79900, 'roshanig693@gmail.com', 456789012345, 'Delivered'),
(26, 'White Halfhand Tshirt', 300, 'golesakshi@gmail.com', 508334757874, 'Delivered'),
(27, 'White Halfhand Tshirt', 300, 'roshanig693@gmail.com', 508334757874, 'Delivered'),
(28, 'Maroon HalfHAnd jacketshirt', 1200, 'pooja@gmail.com', 508334757874, 'New Order'),
(29, 'Black Shirt', 1700, 'roshani693@gmail.com', 508334757874, 'Delivered'),
(30, 'White Halfhand Tshirt', 300, 'aarti@gmail.com', 508334757874, 'New Order'),
(31, 'Shirt set-3', 1999, 'aarti@gmail.com', 508334757874, 'New Order'),
(32, 'HotRed Longdress', 1500, 'aarti@gmail.com', 508334757874, 'Delivered'),
(33, 'OrangeRed Limited Edition Shoe', 9999, 'aarti@gmail.com', 508334757874, 'New Order');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `rpw` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `pw`, `rpw`, `question`, `answer`) VALUES
('Roshani Gupta', 'roshanig693@gmail.com', 'abc123', 'abc123', 'What is your favorite place?', 'pune'),
('Ragini Gupta', 'roshani693@gmail.com', '123', '123', 'What is your nick name?', 'me'),
('Vijay Verma', 'vv123@gmail.com', 'vv123', 'vv123', 'What is your favorite food?', 'pizza'),
('Krishna Avasthi', 'krish@gmail.com', 'ka123', 'kp123', 'What is your favorite place?', 'katraj'),
('Karishma Roy', 'roy7674@gmail.com', 'kr7674', 'kr7674', 'What is your nick name?', 'self'),
('Vijay Malhotra', 'vijay@gmail.com', 'vm123', 'vm123', 'What is your favorite place?', 'Pune'),
('Vijay Malhotra', 'vijay@malhotra', 'vm123', 'vm123', 'What is your favorite place?', 'Pune'),
('Pranjali Gohad', 'pranjaligohad@gmail.com', '123', '123', 'What is your favorite food?', 'Icecream'),
('Sakshi gole', 'golesakshi@gmail.com', '1234', '1234', 'What is your favorite food?', 'panipuri'),
('Pooja bhosale', 'pooja@gmail.com', '7890', '7890', 'What is your nick name?', 'salman khan'),
('Aarti 123  naik', 'aarti@gmail.com', '1', '1', 'What is your favorite place?', 'pu8');

-- --------------------------------------------------------

--
-- Table structure for table `vlogin`
--

DROP TABLE IF EXISTS `vlogin`;
CREATE TABLE IF NOT EXISTS `vlogin` (
  `dadharcardno` varchar(20) NOT NULL,
  `dpw` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vlogin`
--

INSERT INTO `vlogin` (`dadharcardno`, `dpw`) VALUES
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('654309871234', '123'),
('341667890987', '123'),
('341667890987', '123'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('341667890987', '123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('456789012345', 'd7231'),
('456789012345', 'd7231'),
('508334757874', 'rosh123'),
('654309871234', '123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('123456789099', '123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('123456789069', 'abc123'),
('123456789069', 'abc123'),
('508334757874', 'rosh123'),
('123456789069', 'abc123'),
('456789012345', 'd7231'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('456789012345', 'd7231'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('456789012345', 'd7231'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123'),
('508334757874', 'rosh123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
