-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2014 at 03:04 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_des` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_des`) VALUES
(1, 'Toyota', 'Toyota Motor Corporation is a Japanese automotive manufacturer.'),
(2, 'Infiniti', 'Luxury vehicle division of Japanese automaker Nissan Motor Company'),
(3, 'MINI COOPER', 'Small economy car made by the British Motor Corporation (BMC).'),
(4, 'Ford', 'Ford Motor Company is an American multinational automaker.'),
(5, 'BMW2', 'BMW is Germany Car ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `product_des`, `product_price`) VALUES
(2, '2014 Toyota Camry XLE', '1', 'New Car. Body Style:	Sedan. Engine: 3.5L V6 24V MPFI DOHC. Transmission: 6-Speed Automatic.   ', 34213),
(3, '2014 Toyota Corolla S', '1', 'New Car. Body Style: Sedan. Engine: 1.8L I4 16V MPFI DOHC. Transmission: Automatic CVT.', 24331),
(4, '2014 Toyota Tundra', '1', 'New Car. Body Style:	Crew Cab Pickup. Engine: 5.7L V8 32V MPFI DOHC. Transmission: 6-Speed Automatic.', 51154),
(5, '2014 Infiniti Q50 Sport', '2', 'New Car. Body Style:	Sedan. Engine: Gas/Electric V-6 3.5 L/213. Transmission: 7-Speed Automatic.', 56145),
(6, '2014 Infiniti QX80 Base', '2', 'New Car. Body Style:	SUV. Engine: 5.6L V8 32V GDI DOHC. Transmission: 7-Speed Automatic.', 81095),
(7, '2013 Infiniti M37', '2', 'New Car. Body Style:	Sedan. Engine: Gas V6 3.7L/226. Transmission: 7-Speed Automatic.', 58470),
(8, '2013 Infiniti JX35', '2', 'New Car. Body Style:	SUV. Engine: Gas V6 3.5L/213. Transmission: 1-Speed Continuously variable ratio.', 49350),
(9, '2014 MINI Convertible S', '3', 'New Car. Body Style:	Convertible. Engine: 1.6L I4 16V GDI DOHC Turbo. Transmission: 6-Speed Automatic.', 39240),
(10, '2013 MINI Countryman', '3', 'New Car. Body Style:	SUV. Engine: 1.6L I4 16V GDI DOHC Turbo.', 38750),
(11, '2013 MINI Clubman', '3', 'New Car. Body Style:	Wagon. Engine: 1.6L I4 16V GDI DOHC Turbo. Transmission: 6-Speed Automatic.', 38400),
(12, '2014 MINI Roadster', '3', 'New Car. Body Style:	Convertible. Engine: 1.6L I4 16V MPFI DOHC.', 29295),
(13, '2014 Ford Fusion SE	', '4', 'New Car. Body Style: Sedan. Engine: 1.6L I4 16V GDI DOHC Turbo.	', 28720),
(14, '2014 Ford Taurus SEL', '4', 'New Car. Body Style:	Sedan. Engine: 3.5L V6 24V MPFI DOHC. Transmission: 6-Speed Automatic.', 31059),
(15, '2014 Ford E150', '4', 'New Car. Body Style:	Cargo Van. Engine: 4.6L V8 16V MPFI SOHC. Transmission: 4-Speed Automatic.', 31095),
(16, '2014 Ford Escape', '4', 'New Car. Body Style:	SUV. Engine: 2.0L I4 16V GDI DOHC Turbo. Transmission: 6-Speed Automatic.', 37657),
(19, 'toooooo', '1', ' dafdasf ', 0),
(20, 'adsfas', '1', ' dafasdfasdf', 0),
(21, 'ddd', '2', ' dddddd', 0),
(22, 'adfad', '4', ' dsafasdf d', 0),
(23, 'ddd', '5', 'asdfasdgad ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`), ADD KEY `productcategoryid` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
