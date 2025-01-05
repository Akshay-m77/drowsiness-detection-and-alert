-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2024 at 03:41 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mrcydriver`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `alt_id` int(11) NOT NULL AUTO_INCREMENT,
  `OLog_Id` varchar(200) NOT NULL,
  `DLog_Id` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `vmdl` varchar(200) NOT NULL,
  `vcolor` varchar(200) NOT NULL,
  `cmpny` varchar(200) NOT NULL,
  `tdate` date NOT NULL,
  `oname` varchar(200) NOT NULL,
  `oaddrs` text NOT NULL,
  `ocntno` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `dage` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `atime` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `location` varchar(200) NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  PRIMARY KEY (`alt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`alt_id`, `OLog_Id`, `DLog_Id`, `vno`, `vtype`, `vmdl`, `vcolor`, `cmpny`, `tdate`, `oname`, `oaddrs`, `ocntno`, `dname`, `dage`, `date`, `atime`, `photo`, `location`, `ulocation`) VALUES
(13, 'BDRV32147618546', 'BDRV490420205820', 'KL-3655', 'Two', 'MOLK', 'RED', 'TATA', '2024-12-31', 'mohith', 'abc', '1234567890', 'RAJ', '20', '2024-01-05', '07-01-05', 'Lighthouse.jpg', 'Mundur', 'Palakkad');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` bigint(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` text,
  `subject` text,
  `dated` date DEFAULT NULL,
  `reply` text,
  `reply_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `phone`, `email`, `subject`, `dated`, `reply`, `reply_date`) VALUES
(1, 'BDRV32147618546', 'mohith', '1234567890', 'abc@gmail.com', 'accident\r\n\r\n', '2023-01-24', 'ok\r\n', '2023-01-24'),
(2, '', 'KOTTAYI', '9879744646', 'sh@gmail.com', 'sss', '2024-01-06', 'pending', NULL),
(3, 'BDRV-139022393', 'KOTTAYI', '9879744646', 'sh@gmail.com', 'rtru', '2024-01-06', 'pending', NULL),
(4, 'BDRV-81784810', 'PALANA', '5544646464', 'pala@gmail.com', 'hi', '2024-01-06', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cntno` varchar(200) DEFAULT NULL,
  `email` text,
  `password` text,
  `photo` text,
  `addrs` text NOT NULL,
  `age` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `OLog_Id` varchar(200) NOT NULL,
  `lno` varchar(200) NOT NULL,
  `ldate` date NOT NULL,
  `vno` varchar(200) NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Log_Id`, `name`, `cntno`, `email`, `password`, `photo`, `addrs`, `age`, `sex`, `date`, `user_type`, `OLog_Id`, `lno`, `ldate`, `vno`, `ulocation`) VALUES
(1, 'DRV8889793297896', 'Mohith', '7894653216', 'admin@gmail.com', 'admin', 'Penguins.jpg', 'PALAKKAD', '', '', '2023-01-23', 'Admin', '', '', '0000-00-00', '', 'Palakkad'),
(5, 'BDRV32147618546', 'mohith', '1234567890', 'abc@gmail.com', 'owner', 'IMG20221005083359.jpg', 'abc', '23', 'Male', '2023-01-24', 'Owner', '', '', '0000-00-00', '', 'Palakkad'),
(6, 'BDRV860011988719', 'sona', '9876543211', 'driver1@gmail.com', 'driver1', 'IMG-20200712-WA0003.jpg', 'bnv', '23', 'Female', '2023-01-24', 'Driver', 'BDRV32147618546', '1234', '2023-01-05', 'KL M 5897', 'Palakkad'),
(7, 'BDRV237858492698', 'SHAMEER', '9847169014', 'sham@gmail.com', '123456', 'a.jpg', 'PALAKKAD', '20', 'Male', '2024-01-05', 'Owner', '', '', '0000-00-00', '', 'PALAKKAD'),
(8, 'BDRV490420205820', 'RAJ', '9847169555', 'raj@gmail.com', '123456', 'Lighthouse.jpg', 'PALAKKAD', '20', 'Male', '2024-01-05', 'Driver', 'BDRV32147618546', '464646', '2024-01-02', 'KL M 5897', 'PALAKKAD'),
(9, 'BDRV-139022393', 'KOTTAYI', '9879744646', 'sh@gmail.com', '123456', 'Lighthouse.jpg', 'PALAKKAD', 'KTY', '6464646464', '2024-01-06', 'Police', '', '', '0000-00-00', '', 'PALAKKAD'),
(10, 'BDRV-81784810', 'PALANA', '5544646464', 'pala@gmail.com', '123456', 'Penguins.jpg', 'PALAKAD', 'GOVT', '6464646464', '2024-01-06', 'Hospital', '', '', '0000-00-00', '', 'PALAKKAD');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vh_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `engno` varchar(200) NOT NULL,
  `vmdl` varchar(200) NOT NULL,
  `vcolor` varchar(200) NOT NULL,
  `cmpny` varchar(200) NOT NULL,
  `tdate` date NOT NULL,
  `oname` varchar(200) NOT NULL,
  `osex` varchar(200) NOT NULL,
  `oage` varchar(200) NOT NULL,
  `oaddrs` text NOT NULL,
  `ocntno` varchar(200) NOT NULL,
  `rdate` date NOT NULL,
  `photo` text NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  PRIMARY KEY (`vh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vh_id`, `Log_Id`, `vno`, `vtype`, `engno`, `vmdl`, `vcolor`, `cmpny`, `tdate`, `oname`, `osex`, `oage`, `oaddrs`, `ocntno`, `rdate`, `photo`, `ulocation`) VALUES
(1, 'BDRV32147618546', 'KL M 5897', 'Heavy', '12345', 'TRUCK', 'BLACK', 'TATA', '2024-01-12', 'mohith', 'Male', '23', 'abc', '1234567890', '2023-01-24', 'IMG20210113170638.jpg', 'Palakkad'),
(3, 'BDRV32147618546', 'KL-3655', 'Two', '45222', 'MOLK', 'RED', 'TATA', '2024-12-31', 'mohith', 'Male', '23', 'abc', '1234567890', '2024-01-04', 'IMG-20200712-WA0003.jpg', 'Palakkad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
