-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 02:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metafiechem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_nm` varchar(1000) NOT NULL,
  `a_pwd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_nm`, `a_pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(250) NOT NULL,
  `cat_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(2, 'name'),
(3, 'name');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(250) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `cat_id` int(250) NOT NULL,
  `p_price` int(250) NOT NULL,
  `p_use` varchar(500) NOT NULL,
  `p_phy_formation` varchar(500) NOT NULL,
  `p_description` text NOT NULL,
  `p_features` varchar(500) NOT NULL,
  `p_application` varchar(500) NOT NULL,
  `p_img` text NOT NULL,
  `priority` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `cat_id`, `p_price`, `p_use`, `p_phy_formation`, `p_description`, `p_features`, `p_application`, `p_img`) VALUES
(3, 'sugar', 3, 500, 'tea', 'crystal', 'sweet in test', 'white', 'none', '7411.png'),
(4, 'tea', 2, 100, 'drink', 'fanning', 'tea', 'strong', 'drink', '53'),
(5, 'tea', 2, 100, '1', '1', '1', '1', '1', '882'),
(6, '1', 2, 1, '1', '1', '1', '1', '1', '254'),
(7, '1', 2, 1, '1', '1', '1', '1', '1', '871'),
(8, '1', 2, 1, '1', '1', '1', '1', '1', '772'),
(9, '1', 2, 1, '1', '1', '1', '1', '1', '820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
