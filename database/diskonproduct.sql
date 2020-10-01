-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 05:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskonproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_discount`
--

CREATE TABLE `master_discount` (
  `id_disc` int(20) NOT NULL,
  `id_product` int(20) NOT NULL,
  `qty_disc` int(20) NOT NULL,
  `minimal_product` int(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_discount`
--

INSERT INTO `master_discount` (`id_disc`, `id_product`, `qty_disc`, `minimal_product`, `start_date`, `end_date`) VALUES
(1, 1, 20000, 5, '2020-10-01', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `master_product`
--

CREATE TABLE `master_product` (
  `id_product` int(20) NOT NULL,
  `sku` char(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_product`
--

INSERT INTO `master_product` (`id_product`, `sku`, `product_name`, `price`) VALUES
(1, 'P01', 'Kompor 1 tungku', 50000),
(2, 'P02', 'Kompor 2 tungku', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_discount`
--
ALTER TABLE `master_discount`
  ADD PRIMARY KEY (`id_disc`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `master_product`
--
ALTER TABLE `master_product`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_discount`
--
ALTER TABLE `master_discount`
  MODIFY `id_disc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_product`
--
ALTER TABLE `master_product`
  MODIFY `id_product` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_discount`
--
ALTER TABLE `master_discount`
  ADD CONSTRAINT `master_discount_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `master_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
