-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 04:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cid`, `c_name`) VALUES
(1, 'necklace'),
(2, 'Ring'),
(3, ''),
(4, 'ssssa'),
(5, 'xzv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `name`, `hname`, `district`, `state`, `phone`, `pincode`, `email`, `password`, `confpassword`) VALUES
(1, '$name', '$hname', '$district', '$state', 0, 0, '$email', '$password', '$confpassword'),
(2, '$name', '$hname', '$district', '$state', 0, 0, '$email', '$password', '$confpassword'),
(3, '$name', '$hname', '$district', '$state', 0, 0, '$email', '$password', '$confpassword'),
(4, '', '', '', '', 2147483647, 0, '', '', ''),
(5, 'malu', 'ffgg', 'kottayam', 'fds', 2147483647, 686512, 'athira@gmail.c0m', 'fd', 'fd'),
(6, '', '', '', '', 0, 0, 'bhadrarajan2000@gmai', '', ''),
(7, 'bhadra', '', '', '', 0, 0, 'bhadrarajan2000@gmai', '', ''),
(8, 'malu', 'ffgg', 'kottayam', 'fds', 2147483647, 686512, 'haritha@gmail.com', 'fd', 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`) VALUES
(1, '', ''),
(2, 'athira@gmail.c0m', 'fd'),
(3, 'bhadrarajan2000@gmai', ''),
(4, 'bhadrarajan2000@gmai', ''),
(5, 'haritha@gmail.com', 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pid` int(11) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `des` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pid`, `prod_name`, `cid`, `des`, `photo`, `quantity`, `price`) VALUES
(1, 'fsd', 2, 'dfsdf', 'Screenshot (1).png', 2, 767);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
