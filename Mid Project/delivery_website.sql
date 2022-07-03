-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 02:18 AM
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
-- Database: `delivery_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` bigint(20) DEFAULT NULL,
  `ItemName` varchar(500) DEFAULT NULL,
  `ItemPrice` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `OrderDate` varchar(500) DEFAULT NULL,
  `DeliveryPlace` varchar(500) DEFAULT NULL,
  `DeliveryStatus` varchar(500) DEFAULT NULL,
  `CustomerName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `ItemName`, `ItemPrice`, `Quantity`, `OrderDate`, `DeliveryPlace`, `DeliveryStatus`, `CustomerName`) VALUES
(1, 'Cherokee Inc.', 81, 4, 'Wednesday, June 22, 2022', 'Carolina  2517, San Jose - 5651, Mozambique', 'Delivered', 'Matt Fox'),
(2, 'Koton', 62, 4, 'Wednesday, June 22, 2022', 'New Orleans - 1433, The Bahamas', 'Canceled', 'Nathan Tindall'),
(3, 'Forever Lazy', 72, 1, 'Thursday, June 30, 2022', 'Blue Anchor  5265, Bucharest - 8214, Montenegro', 'Delivered', 'Domenic Locke'),
(4, 'SABA', 110, 2, 'Monday, June 6, 2022', 'Meadow 6079, Henderson - 6263, Norway', 'Delivered', 'Sofie Rycroft'),
(5, 'Lee', 20, 3, 'Saturday, June 18, 2022', 'Blackall   1868, Orlando - 5770, Estonia', 'Delivered', 'Chuck Redfern'),
(6, 'Marchesa', 109, 4, 'Wednesday, June 1, 2022', 'Apsley    5112, Albuquerque - 0220, Estonia', 'Delivered', 'Benjamin Thompson'),
(7, 'Brooks Brothers', 23, 1, 'Sunday, June 26, 2022', 'Champion  4953, El Paso - 6011, Luxembourg', 'Delivered', 'Belinda Robinson'),
(8, 'Merc Clothing', 146, 4, 'Thursday, June 16, 2022', 'Cephas  2061, Colorado Springs - 4274, Malawi', 'Delivered', 'Denny Mason'),
(9, 'Columbia Sportswear', 132, 2, 'Tuesday, June 7, 2022', 'Eaglet  5082, Lakewood - 0700, Poland', 'Delivered', 'Elle Forth'),
(10, 'Brooks Brothers', 117, 1, 'Wednesday, June 8, 2022', 'Virginia 1049, Tokyo - 3184, Brazil', 'Canceled', 'Jack Squire'),
(11, 'Avirex', 75, 2, 'Wednesday, June 8, 2022', 'Paris   7781, Sacramento - 3416, Nigeria', 'Delivered', 'Naomi Gilbert'),
(12, 'H&M', 37, 1, 'Tuesday, June 21, 2022', 'Huntsville - 3353, Paraguay', 'Canceled', 'Candace Roth'),
(13, 'Rip Curl', 140, 4, 'Wednesday, June 8, 2022', 'Clarks  2322, Laredo - 5343, Zambia', 'Shipped', 'Manuel Howard'),
(14, 'Mossimo', 126, 4, 'Sunday, June 19, 2022', 'Camera  8075, Murfreesboro - 2063, Kenya', 'Canceled', 'Aurelia Archer'),
(15, 'Dollie & Me', 130, 3, 'Monday, June 27, 2022', 'Biggerstaff   6503, Ontario - 1430, Azerbaijan', 'Shipped', 'Tom May'),
(16, 'Andrew Marc', 29, 3, 'Tuesday, June 28, 2022', 'Coley  5770, Lancaster - 2881, El Salvador', 'Shipped', 'Maya Sylvester'),
(17, 'Rip Curl', 76, 2, 'Thursday, June 9, 2022', 'Glenwood 1687, Laredo - 7433, Burkina Faso', 'Shipped', 'Samantha Flynn'),
(18, 'H&M', 45, 4, 'Thursday, June 9, 2022', 'Oxford 40, Long Beach - 3047, Guyana', 'Shipped', 'Maia Price'),
(19, 'Hamilton Shirts', 69, 1, 'Sunday, June 26, 2022', 'Geary   4821, Garland - 4585, Egypt', 'Canceled', 'Boris Cooper'),
(20, 'Acorn Stores', 136, 1, 'Sunday, June 5, 2022', 'Geary   954, New Orleans - 6620, Denmark', 'Order Placed', 'Clarissa Williams'),
(21, 'Koton', 50, 1, 'Monday, June 20, 2022', 'Ellerman   6868, Scottsdale - 0863, Macedonia', 'Order Placed', 'Alexander Terry'),
(22, 'Countess Mara', 100, 4, 'Thursday, June 23, 2022', 'Thomas Doyle   6538, Baltimore - 0877, Tuvalu', 'Shipped', 'Remy Murray'),
(23, 'Converse', 148, 4, 'Wednesday, June 22, 2022', 'Billing  23, Bridgeport - 0353, Suriname', 'Order Placed', 'Mike Jarrett'),
(24, 'C&A', 26, 1, 'Wednesday, June 15, 2022', 'Sherwood  9796, Honolulu - 4216, Albania', 'Order Placed', 'Tony Flack'),
(25, 'Tommy Hilfinger', 75, 4, 'Saturday, June 25, 2022', 'Colombo   4853, Otawa - 6178, Kyrgyzstan', 'Order Placed', 'Chloe Jenkin'),
(26, 'Brooks Brothers', 146, 2, 'Tuesday, June 21, 2022', 'College  1809, Fremont - 5322, Colombia', 'Order Placed', 'Sara Crawley'),
(27, 'Lilli Ann', 23, 4, 'Friday, June 24, 2022', 'Bales  2716, Reno - 8801, Turkmenistan', 'Order Placed', 'Jacob Lynn'),
(28, 'Avirex', 129, 1, 'Sunday, June 12, 2022', 'Collingwood  6984, Orlando - 1480, Israel', 'Order Placed', 'Jayden Cavanagh'),
(29, 'Forever Lazy', 142, 4, 'Friday, June 10, 2022', 'Camley   2020, Valetta - 3530, Belize', 'Order Placed', 'Ron York'),
(30, 'TNT', 45, 4, 'Thursday, June 16, 2022', 'York 5403, Fayetteville - 2070, Brazil', 'Delivered', 'Denny Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `name`, `password`) VALUES
(1, 'Logan', 'Logan Walton', 5754),
(2, 'Bristol', 'Bristol Nanton', 6314),
(3, 'Brad', 'Brad Mccall', 1884),
(4, 'Julian', 'Julian Powell', 8504),
(5, 'Abdul', 'Abdul Healy', 4674),
(6, 'Harry', 'Harry Chapman', 3169),
(7, 'William', 'William Kelly', 1209),
(8, 'Victoria', 'Victoria Andersson', 8224),
(9, 'Georgia', 'Georgia Poole', 1473),
(10, 'Jamie', 'Jamie Harrison', 2841);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
