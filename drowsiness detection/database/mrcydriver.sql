-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 01:23 PM
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
-- Database: `mrcydriver`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `alt_id` int(11) NOT NULL,
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
  `ulocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`alt_id`, `OLog_Id`, `DLog_Id`, `vno`, `vtype`, `vmdl`, `vcolor`, `cmpny`, `tdate`, `oname`, `oaddrs`, `ocntno`, `dname`, `dage`, `date`, `atime`, `photo`, `location`, `ulocation`) VALUES
(13, 'BDRV32147618546', 'BDRV490420205820', 'KL-3655', 'Two', 'MOLK', 'RED', 'TATA', '2024-12-31', 'mohith', 'abc', '1234567890', 'RAJ', '20', '2024-01-05', '07-01-05', 'Lighthouse.jpg', 'Mundur', 'Palakkad'),
(14, '', '', 'KL01A1111', '', '', '', '', '0000-00-00', '', '', '', '', '', '2024-03-24', '05-03-18', '', 'Mundur', ''),
(15, '', '', 'KL01A1111', '', '', '', '', '0000-00-00', '', '', '', '', '', '2024-03-24', '05-03-28', '', 'Kalamassery', ''),
(16, 'BDRV63886815721', '', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', '', '', '2024-03-24', '06-03-07', '', 'Mundur', 'edapalli'),
(17, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-24', '06-03-09', 'driver.png', 'kalamassery', 'edapalli'),
(18, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-55', 'driver.png', 'kalamassery', 'kalamassery'),
(19, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-07', 'driver.png', 'kalamassery', 'kalamassery'),
(20, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-16', 'driver.png', 'kalamassery', 'kalamassery'),
(21, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-24', 'driver.png', 'kalamassery', 'kalamassery'),
(22, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-56', 'driver.png', 'kalamassery', 'kalamassery'),
(23, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-05', 'driver.png', 'kalamassery', 'kalamassery'),
(24, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-14', 'driver.png', 'kalamassery', 'kalamassery'),
(25, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-24', 'driver.png', 'kalamassery', 'kalamassery'),
(26, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-33', 'driver.png', 'kalamassery', 'kalamassery'),
(27, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-41', 'driver.png', 'kalamassery', 'kalamassery'),
(28, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-51', 'driver.png', 'kalamassery', 'kalamassery'),
(29, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-27', '19-03-00', 'driver.png', 'kalamassery', 'aluva'),
(30, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '08-03-33', 'driver.png', 'kalamassery', 'kalamassery'),
(31, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-00', 'driver.png', 'kalamassery', 'kalamassery'),
(32, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-08', 'driver.png', 'kalamassery', 'kalamassery'),
(33, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-17', 'driver.png', 'kalamassery', 'kalamassery'),
(34, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-26', 'driver.png', 'kalamassery', 'kalamassery'),
(35, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-35', 'driver.png', 'kalamassery', 'kalamassery'),
(36, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-35', 'driver.png', 'kalamassery', 'kalamassery'),
(37, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-46', 'driver.png', 'kalamassery', 'kalamassery'),
(38, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-58', 'driver.png', 'kalamassery', 'kalamassery'),
(39, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-07', 'driver.png', 'kalamassery', 'kalamassery'),
(40, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-16', 'driver.png', 'kalamassery', 'kalamassery'),
(41, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '09-03-10', 'driver.png', 'kalamassery', 'kalamassery'),
(42, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-07', 'driver.png', 'kalamassery', 'kalamassery'),
(43, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-34', 'driver.png', 'kalamassery', 'kalamassery'),
(44, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-30', 'driver.png', 'kalamassery', 'kalamassery'),
(45, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-15', 'driver.png', 'kalamassery', 'kalamassery'),
(46, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-31', 'driver.png', 'kalamassery', 'kalamassery'),
(47, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-03-28', '11-03-19', 'driver.png', 'kalamassery', 'kalamassery'),
(48, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-51', 'driver.png', 'kalamassery', 'kalamassery'),
(49, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-23', 'driver.png', 'kalamassery', 'kalamassery'),
(50, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-31', 'driver.png', 'kalamassery', 'kalamassery'),
(51, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-40', 'driver.png', 'kalamassery', 'kalamassery'),
(52, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-56', 'driver.png', 'kalamassery', 'kalamassery'),
(53, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-13', 'driver.png', 'kalamassery', 'kalamassery'),
(54, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-26', 'driver.png', 'kalamassery', 'kalamassery'),
(55, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-36', 'driver.png', 'kalamassery', 'kalamassery'),
(56, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-44', 'driver.png', 'kalamassery', 'kalamassery'),
(57, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-54', 'driver.png', 'kalamassery', 'kalamassery'),
(58, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-02', 'driver.png', 'kalamassery', 'kalamassery'),
(59, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-11', 'driver.png', 'kalamassery', 'kalamassery'),
(60, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-20', 'driver.png', 'kalamassery', 'kalamassery'),
(61, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-29', 'driver.png', 'kalamassery', 'kalamassery'),
(62, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-38', 'driver.png', 'kalamassery', 'kalamassery'),
(63, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-47', 'driver.png', 'kalamassery', 'kalamassery'),
(64, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-55', 'driver.png', 'kalamassery', 'kalamassery'),
(65, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-07', 'driver.png', 'kalamassery', 'kalamassery'),
(66, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-45', 'driver.png', 'kalamassery', 'kalamassery'),
(67, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-54', 'driver.png', 'kalamassery', 'kalamassery'),
(68, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-12', 'driver.png', 'kalamassery', 'kalamassery'),
(69, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-20', 'driver.png', 'kalamassery', 'kalamassery'),
(70, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-29', 'driver.png', 'kalamassery', 'kalamassery'),
(71, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-48', 'driver.png', 'kalamassery', 'kalamassery'),
(72, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-56', 'driver.png', 'kalamassery', 'kalamassery'),
(73, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-08', 'driver.png', 'kalamassery', 'kalamassery'),
(74, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-51', 'driver.png', 'kalamassery', 'kalamassery'),
(75, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '22-04-00', 'driver.png', 'kalamassery', 'kalamassery'),
(76, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-05', 'driver.png', 'kalamassery', 'kalamassery'),
(77, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-17', 'driver.png', 'kalamassery', 'kalamassery'),
(78, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-33', 'driver.png', 'kalamassery', 'kalamassery'),
(79, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-42', 'driver.png', 'kalamassery', 'kalamassery'),
(80, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-51', 'driver.png', 'kalamassery', 'kalamassery'),
(81, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-05', 'driver.png', 'kalamassery', 'kalamassery'),
(82, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-15', 'driver.png', 'kalamassery', 'kalamassery'),
(83, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-46', 'driver.png', 'kalamassery', 'kalamassery'),
(84, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-54', 'driver.png', 'kalamassery', 'kalamassery'),
(85, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-03', 'driver.png', 'kalamassery', 'kalamassery'),
(86, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-11', 'driver.png', 'kalamassery', 'kalamassery'),
(87, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-48', 'driver.png', 'kalamassery', 'kalamassery'),
(88, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-57', 'driver.png', 'kalamassery', 'kalamassery'),
(89, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-07', 'driver.png', 'kalamassery', 'kalamassery'),
(90, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-16', 'driver.png', 'kalamassery', 'kalamassery'),
(91, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-25', 'driver.png', 'kalamassery', 'kalamassery'),
(92, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-34', 'driver.png', 'kalamassery', 'kalamassery'),
(93, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-49', 'driver.png', 'kalamassery', 'kalamassery'),
(94, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-58', 'driver.png', 'kalamassery', 'kalamassery'),
(95, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-01', 'driver.png', 'kalamassery', 'kalamassery'),
(96, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-10', 'driver.png', 'kalamassery', 'kalamassery'),
(97, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-49', 'driver.png', 'kalamassery', 'kalamassery'),
(98, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-58', 'driver.png', 'kalamassery', 'kalamassery'),
(99, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-33', 'driver.png', 'kalamassery', 'kalamassery'),
(100, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-47', 'driver.png', 'kalamassery', 'kalamassery'),
(101, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-56', 'driver.png', 'kalamassery', 'kalamassery'),
(102, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-52', 'driver.png', 'kalamassery', 'kalamassery'),
(103, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-34', 'driver.png', 'kalamassery', 'kalamassery'),
(104, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-44', 'driver.png', 'kalamassery', 'kalamassery'),
(105, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-04', 'driver.png', 'kalamassery', 'kalamassery'),
(106, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-02', '23-04-14', 'driver.png', 'kalamassery', 'kalamassery'),
(107, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-37', 'driver.png', 'kalamassery', 'kalamassery'),
(108, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-47', 'driver.png', 'kalamassery', 'kalamassery'),
(109, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-57', 'driver.png', 'kalamassery', 'kalamassery'),
(110, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-07', 'driver.png', 'kalamassery', 'kalamassery'),
(111, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-17', 'driver.png', 'kalamassery', 'kalamassery'),
(112, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-26', 'driver.png', 'kalamassery', 'kalamassery'),
(113, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-35', 'driver.png', 'kalamassery', 'kalamassery'),
(114, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-45', 'driver.png', 'kalamassery', 'kalamassery'),
(115, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-26', 'driver.png', 'kalamassery', 'kalamassery'),
(116, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-39', 'driver.png', 'kalamassery', 'kalamassery'),
(117, '', '', '\"KL01A1111\"', '', '', '', '', '0000-00-00', '', '', '', '', '', '2024-04-11', '17-04-36', '', 'kalamassery', ''),
(118, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-43', 'driver.png', 'kalamassery', 'kalamassery'),
(119, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-14', 'driver.png', 'kalamassery', 'kalamassery'),
(120, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '17-04-51', 'driver.png', 'kalamassery', 'kalamassery'),
(121, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '18-04-34', 'driver.png', 'kalamassery', 'kalamassery'),
(122, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '18-04-52', 'driver.png', 'kalamassery', 'kalamassery'),
(123, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-11', '18-04-01', 'driver.png', 'kalamassery', 'kalamassery'),
(124, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-20', 'driver.png', 'kalamassery', 'kalamassery'),
(125, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-53', 'driver.png', 'kalamassery', 'kalamassery'),
(126, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-35', 'driver.png', 'kalamassery', 'kalamassery'),
(127, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-20', 'driver.png', 'kalamassery', 'kalamassery'),
(128, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-26', 'driver.png', 'kalamassery', 'kalamassery'),
(129, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-27', 'driver.png', 'kalamassery', 'kalamassery'),
(130, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-11', 'driver.png', 'kalamassery', 'kalamassery'),
(131, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-04-13', '12-04-12', 'driver.png', 'kalamassery', 'kalamassery'),
(132, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-22', '11-05-59', 'driver.png', 'kalamassery', 'kalamassery'),
(133, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-00', 'driver.png', 'kalamassery', 'kalamassery'),
(134, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-34', 'driver.png', 'kalamassery', 'kalamassery'),
(135, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-11', 'driver.png', 'kalamassery', 'kalamassery'),
(136, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-18', 'driver.png', 'kalamassery', 'kalamassery'),
(137, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-00', 'driver.png', 'kalamassery', 'kalamassery'),
(138, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-27', '23-05-00', 'driver.png', 'kalamassery', 'kalamassery'),
(139, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-31', '16-05-45', 'driver.png', 'kalamassery', 'kalamassery'),
(140, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-05-31', '17-05-47', 'driver.png', 'kalamassery', 'kalamassery'),
(141, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-06-03', '22-06-07', 'driver.png', 'kalamassery', 'kalamassery'),
(142, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-06-03', '22-06-51', 'driver.png', 'kalamassery', 'kalamassery'),
(143, 'BDRV63886815721', 'BDRV583112090714', 'KL01A1111', 'Four', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'owner1', '9879879877', 'Driver', '25', '2024-06-03', '22-06-23', 'driver.png', 'kalamassery', 'kalamassery');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(21) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `dated` date DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `reply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `users` (
  `user_id` bigint(21) NOT NULL,
  `Log_Id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cntno` varchar(200) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `addrs` text NOT NULL,
  `age` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `OLog_Id` varchar(200) NOT NULL,
  `lno` varchar(200) NOT NULL,
  `ldate` date NOT NULL,
  `vno` varchar(200) NOT NULL,
  `ulocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Log_Id`, `name`, `cntno`, `email`, `password`, `photo`, `addrs`, `age`, `sex`, `date`, `user_type`, `OLog_Id`, `lno`, `ldate`, `vno`, `ulocation`) VALUES
(1, 'DRV8889793297896', 'Admin', '7894653216', 'admin@gmail.com', 'admin@123', 'admin.jpg', 'PALAKKAD', '', '', '2023-01-23', 'Admin', '', '', '0000-00-00', '', 'Palakkad'),
(5, 'BDRV32147618546', 'mohith', '1234567890', 'abc@gmail.com', 'owner', 'IMG20221005083359.jpg', 'abc', '23', 'Male', '2023-01-24', 'Owner', '', '', '0000-00-00', '', 'Palakkad'),
(6, 'BDRV860011988719', 'sona', '9876543211', 'driver1@gmail.com', 'driver1', 'IMG-20200712-WA0003.jpg', 'bnv', '23', 'Female', '2023-01-24', 'Driver', 'BDRV32147618546', '1234', '2023-01-05', 'KL M 5897', 'Palakkad'),
(7, 'BDRV237858492698', 'SHAMEER', '9847169014', 'sham@gmail.com', '123456', 'a.jpg', 'PALAKKAD', '20', 'Male', '2024-01-05', 'Owner', '', '', '0000-00-00', '', 'PALAKKAD'),
(8, 'BDRV490420205820', 'RAJ', '9847169555', 'raj@gmail.com', '123456', 'Lighthouse.jpg', 'PALAKKAD', '20', 'Male', '2024-01-05', 'Driver', 'BDRV32147618546', '464646', '2024-01-02', 'KL M 5897', 'PALAKKAD'),
(9, 'BDRV-139022393', 'KOTTAYI', '9879744646', 'sh@gmail.com', '123456', 'Lighthouse.jpg', 'PALAKKAD', 'KTY', '6464646464', '2024-01-06', 'Police', '', '', '0000-00-00', '', 'PALAKKAD'),
(10, 'BDRV-81784810', 'PALANA', '5544646464', 'pala@gmail.com', '123456', 'Penguins.jpg', 'PALAKAD', 'GOVT', '6464646464', '2024-01-06', 'Hospital', '', '', '0000-00-00', '', 'PALAKKAD'),
(12, 'BDRV51645169095', 'Driver two', '9874561230', 'D2@gmail.com', 'D2@123', 'owner.jpeg', 'd2 address', '30', 'Male', '2024-03-23', 'Driver', 'BDRV32147618546', '10000', '2024-03-07', 'KL M 5897', 'palakkad'),
(13, 'BDRV63886815721', 'OWNER', '9879879877', '', 'o1@123', 'owner.jpeg', 'owner1', '30', 'Male', '2024-03-24', 'Owner', '', '', '0000-00-00', 'KL01A1111', 'edapalli'),
(14, 'BDRV583112090714', 'Driver', '9876543219', 'd1@gmail.com', 'd1@123', 'driver.png', 'driver address', '25', 'Male', '2024-03-24', 'Driver', 'BDRV63886815721', '789987456', '2024-03-08', 'KL01A1111', 'ottapalam');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vh_id` int(11) NOT NULL,
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
  `ulocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vh_id`, `Log_Id`, `vno`, `vtype`, `engno`, `vmdl`, `vcolor`, `cmpny`, `tdate`, `oname`, `osex`, `oage`, `oaddrs`, `ocntno`, `rdate`, `photo`, `ulocation`) VALUES
(1, 'BDRV32147618546', 'KL M 5897', 'Heavy', '12345', 'TRUCK', 'BLACK', 'TATA', '2024-01-12', 'mohith', 'Male', '23', 'abc', '1234567890', '2023-01-24', 'IMG20210113170638.jpg', 'Palakkad'),
(3, 'BDRV32147618546', 'KL-3655', 'Two', '45222', 'MOLK', 'RED', 'TATA', '2024-12-31', 'mohith', 'Male', '23', 'abc', '1234567890', '2024-01-04', 'IMG-20200712-WA0003.jpg', 'Palakkad'),
(4, 'BDRV63886815721', 'KL01A1111', 'Four', '000011112222', 'M1', 'red', 'BMW', '2024-06-01', 'OWNER', 'Male', '30', 'owner1', '9879879877', '2024-03-01', 'owner.jpeg', 'kalamassery'),
(5, 'BDRV63886815721', 'V1111', 'Heavy', 'ENV1111', 'V111model', 'Red', 'Tata', '2024-07-20', 'OWNER', 'Male', '30', 'owner1', '9879879877', '2024-05-01', 'vechile.jpg', 'edapalli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`alt_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `alt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
