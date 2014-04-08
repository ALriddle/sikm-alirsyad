-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2013 at 12:03 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sales_act`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_status`
--

CREATE TABLE IF NOT EXISTS `activity_status` (
  `ID_ACTIVITY_STATUS` varchar(10) NOT NULL,
  `KETERANGAN_A_S` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_ACTIVITY_STATUS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_status`
--

INSERT INTO `activity_status` (`ID_ACTIVITY_STATUS`, `KETERANGAN_A_S`) VALUES
('5A', 'Brosur/Flyer'),
('5B', 'Kunjungan (Berhasil)'),
('5C', 'Telepon (Berhasil)'),
('5D', 'Janjian Bertemu'),
('5E', 'Trial'),
('5F', 'Closing'),
('5G', 'Menolak'),
('5H', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `building_function`
--

CREATE TABLE IF NOT EXISTS `building_function` (
  `ID_BUILDING_FUNCTION` varchar(10) NOT NULL,
  `KETERANGAN_B_F` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_BUILDING_FUNCTION`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building_function`
--

INSERT INTO `building_function` (`ID_BUILDING_FUNCTION`, `KETERANGAN_B_F`) VALUES
('1A', 'Rumah Tangga'),
('1B', 'Ruko (Bukan Warnet)'),
('1C', 'Kantor/Warnet'),
('1D', 'Industri');

-- --------------------------------------------------------

--
-- Table structure for table `building_type`
--

CREATE TABLE IF NOT EXISTS `building_type` (
  `ID_BUILDING_TYPE` varchar(10) NOT NULL,
  `KETERANGAN_B_T` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_BUILDING_TYPE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building_type`
--

INSERT INTO `building_type` (`ID_BUILDING_TYPE`, `KETERANGAN_B_T`) VALUES
('2A', 'Bertingkat'),
('2B', 'Parkiran Mobil'),
('2C', 'Air Conditioner'),
('2D', 'Parkiran Motor'),
('2E', 'Tahap Pembangunan/Renovasi');

-- --------------------------------------------------------

--
-- Table structure for table `dim_area`
--

CREATE TABLE IF NOT EXISTS `dim_area` (
  `ID_CITY` varchar(10) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_CITY`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_area`
--

INSERT INTO `dim_area` (`ID_CITY`, `CITY`) VALUES
('1', 'Surabaya Pusat'),
('2', 'Surabaya Timur'),
('3', 'Surabaya Barat'),
('4 ', 'Surabaya Utara'),
('5', 'Surabaya Selatan'),
('6', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `dim_tim`
--

CREATE TABLE IF NOT EXISTS `dim_tim` (
  `ID_TEAM` varchar(10) NOT NULL,
  `NAMA_TEAM` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_TEAM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_tim`
--

INSERT INTO `dim_tim` (`ID_TEAM`, `NAMA_TEAM`) VALUES
('2', 'B'),
('1', 'A'),
('3', 'C'),
('4', 'D'),
('5', 'E'),
('6', 'F'),
('7', 'G'),
('8', 'H'),
('9', 'I'),
('10', 'J'),
('11', 'K'),
('12', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `fact_report_customer1`
--

CREATE TABLE IF NOT EXISTS `fact_report_customer1` (
  `ID_REPORT_SALES` int(11) NOT NULL AUTO_INCREMENT,
  `DATE_NOW` date NOT NULL,
  `ID_TEAM` varchar(10) NOT NULL,
  `SALES_ID` varchar(50) NOT NULL,
  `ACCOUNT_ID` varchar(50) NOT NULL,
  `EXTENSION_ADDRESS` varchar(50) DEFAULT NULL,
  `STREET` varchar(50) NOT NULL,
  `HOUSE_NUMBER` varchar(50) NOT NULL,
  `ID_CITY` varchar(10) NOT NULL,
  `USER_ID` varchar(50) NOT NULL,
  `PHONE` varchar(50) DEFAULT NULL,
  `REMINDER` datetime DEFAULT NULL,
  `ID_BUILDING_FUNCTION` varchar(50) DEFAULT NULL,
  `ID_BUILDING_TYPE` varchar(50) DEFAULT NULL,
  `ID_HOUSE_OWNER_PROFILE` varchar(50) DEFAULT NULL,
  `ID_HOUSE_OWNER_STATUS` varchar(50) DEFAULT NULL,
  `ID_ACTIVITY_STATUS` varchar(50) DEFAULT NULL,
  `ID_FAILED_STATUS` varchar(50) DEFAULT NULL,
  `REMARK` varchar(1000) DEFAULT NULL,
  `DATE_ACT` date NOT NULL,
  PRIMARY KEY (`ID_REPORT_SALES`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `fact_report_customer1`
--

INSERT INTO `fact_report_customer1` (`ID_REPORT_SALES`, `DATE_NOW`, `ID_TEAM`, `SALES_ID`, `ACCOUNT_ID`, `EXTENSION_ADDRESS`, `STREET`, `HOUSE_NUMBER`, `ID_CITY`, `USER_ID`, `PHONE`, `REMINDER`, `ID_BUILDING_FUNCTION`, `ID_BUILDING_TYPE`, `ID_HOUSE_OWNER_PROFILE`, `ID_HOUSE_OWNER_STATUS`, `ID_ACTIVITY_STATUS`, `ID_FAILED_STATUS`, `REMARK`, `DATE_ACT`) VALUES
(5, '2013-08-12', '2', '2', '3004', 'Blok 1', 'Perumahan Sukolilo Park Regency', '5', '2', 'm', '083845545527', '2013-08-22 15:00:00', '1A', '2C', '3D', '4E', '5F', '6G', 'BCDEFG', '2013-08-05'),
(6, '2013-08-12', '3', '3', '3007', 'Blok 1', 'Perumahan Sukolilo Park Regency', '8', '2', 'm', '031567232425', '2013-08-29 15:03:00', '1C', '2D', '3E', '4E', '5F', '6G', 'CDEEFG', '2013-08-05'),
(4, '2013-08-12', '1', '1', '3133', 'Blok 5', 'Keputih', '7', '1', 'm', '085731600665', '2013-08-23 15:00:00', '1A', '2B', '3C', '4D', '5E', '6F', 'ABCDEF', '2013-08-13'),
(7, '2013-08-12', '4', '003', '3061', 'Blok 3', 'Keputih', '9', '1', 'm', '08882231233', '2013-08-23 04:02:00', '1B', '2C', '3D', '4E', '5F', '6G', 'BCDEFG', '2013-08-07'),
(8, '2013-08-12', '4', '003', '3126', 'Blok 4', 'Keputih', '25', '1', 'm', '08882231233', '2013-08-23 04:02:00', '1B', '2C', '3D', '4E', '5F', '6G', 'BCDEFG', '2013-08-07'),
(9, '2013-08-16', '1', '1', '3011', 'Blok 2', 'Perumahan Sukolilo Park Regency', '2', '2', 'Perez', '2983912839', '2013-08-03 12:59:00', '1A', '2A', '3A', '4A', '5A', '6A', 'Hahaha', '2013-08-01'),
(1, '2013-08-15', '2', 'ES1', '3000', '', 'Delta Tama 3', '1', '2', 'admin', '031-8531945', '0000-00-00 00:00:00', '1A', '2A,2B,2C,2D', '3B', '', '', '', '', '2013-01-01'),
(2, '2013-08-15', '2', 'ES1', '3001', '', 'Delta Tama 3', '2', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2A,2B,2C,2D', '', '', '', '', '', '2013-01-02'),
(3, '2013-08-15', '2', 'ES1', '3002', '', 'Delta Tama 3', '3', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-01-03'),
(10, '2013-08-15', '2', 'ES1', '3009', '', 'Delta Tama 3', '10', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-21'),
(11, '2013-08-15', '2', 'ES1', '3010', '', 'Delta Tama 3', '11', '2', 'admin', '031-8540065/0856392118', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-22'),
(12, '2013-08-15', '2', 'ES1', '3011', '', 'Delta Tama 3', '12', '2', 'admin', '031-8542049', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-23'),
(13, '2013-08-15', '2', 'ES1', '3012', '', 'Delta Tama 3', '13', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-24'),
(14, '2013-08-15', '2', 'ES1', '3013', '', 'Delta Tama 3', '14', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-25'),
(15, '2013-08-15', '2', 'ES1', '3014', '', 'Delta Tama 3', '15', '2', 'admin', '0818030389', '0000-00-00 00:00:00', '1A', '', '', '', '', '', 'Call again', '2013-02-26'),
(16, '2013-08-15', '2', 'ES1', '3015', '', 'Delta Tama 3', '16', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-02-27'),
(17, '2013-08-15', '2', 'ES1', '3016', '', 'Delta Tama 3', '17', '2', 'admin', '0818030389', '0000-00-00 00:00:00', '', '', '', '', '', '', 'Call again', '2013-02-28'),
(18, '2013-08-15', '2', 'ES1', '3017', '', 'Delta Tama 3', '18', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-03-01'),
(19, '2013-08-15', '2', 'ES1', '3018', '', 'Delta Tama 3', '19', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '', '', '', '6A', '', '2013-03-02'),
(20, '2013-08-15', '2', 'ES1', '3019', '', 'Delta Tama 3', '20', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-03-03'),
(21, '2013-08-15', '2', 'ES1', '3020', '', 'Delta Tama 3', '21', '2', 'admin', '031-8541137', '0000-00-00 00:00:00', '', '', '', '', '', '', 'Call again', '2013-03-04'),
(22, '2013-08-15', '2', 'ES1', '3021', '', 'Delta Tama 3', '22', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-05'),
(23, '2013-08-15', '2', 'ES1', '3022', '', 'Delta Tama 3', '23', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-06'),
(24, '2013-08-15', '2', 'ES1', '3023', '', 'Delta Tama 3', '24', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-07'),
(25, '2013-08-15', '2', 'ES1', '3024', '', 'Delta Tama 3', '25', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-03-08'),
(26, '2013-08-15', '2', 'ES1', '3025', '', 'Delta Tama 3', '26', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-09'),
(27, '2013-08-15', '2', 'ES1', '3026', '', 'Delta Tama 3', '27', '2', 'admin', '031-8552184', '0000-00-00 00:00:00', '1A', '', '', '', '', '', 'Call again', '2013-03-10'),
(28, '2013-08-15', '2', 'ES1', '3027', '', 'Delta Tama 3', '28', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-11'),
(29, '2013-08-15', '2', 'ES1', '3028', '', 'Delta Tama 3', '29', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-12'),
(30, '2013-08-15', '2', 'ES1', '3029', '', 'Delta Tama 3', '30', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-13'),
(31, '2013-08-15', '2', 'ES1', '3030', '', 'Delta Tama 3', '31', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '', '', '', '', '', '', '2013-03-14'),
(32, '2013-08-15', '4', 'GX9', '3031', '', 'Delta Tama 5', '1', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-15'),
(33, '2013-08-15', '4', 'GX9', '3032', '', 'Delta Tama 5', '2', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-16'),
(34, '2013-08-15', '4', 'GX9', '3033', '', 'Delta Tama 5', '3', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-17'),
(35, '2013-08-15', '4', 'GX9', '3034', '', 'Delta Tama 5', '4', '2', 'admin', '08163625282', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '3B', '4C', '5B,5C,5G', '', '', '2013-03-18'),
(36, '2013-08-15', '4', 'GX9', '3035', '', 'Delta Tama 5', '5', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5G', '6A', '', '2013-03-19'),
(37, '2013-08-15', '4', 'GX9', '3036', '', 'Delta Tama 5', '6', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-03-20'),
(38, '2013-08-15', '4', 'GX9', '3037', '', 'Delta Tama 5', '7', '2', 'admin', '083854948064', '0000-00-00 00:00:00', '1A', '2A,2B,2C,2D', '3B', '4A,4C', '5B,5C,5F', '', '', '2013-04-15'),
(39, '2013-08-15', '4', 'GX9', '3038', '', 'Delta Tama 5', '8', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-16'),
(40, '2013-08-15', '4', 'GX9', '3039', '', 'Delta Tama 5', '9', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-17'),
(41, '2013-08-15', '4', 'GX9', '3040', '', 'Delta Tama 5', '10', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '3B', '4C', '5G', '6A', '', '2013-04-18'),
(42, '2013-08-15', '4', 'GX9', '3041', '', 'Delta Tama 5', '11', '2', 'admin', '085731514331', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5B,5C', '6D', '', '2013-04-19'),
(43, '2013-08-15', '4', 'GX9', '3042', '', 'Delta Tama 5', '12', '2', 'admin', '031-8551989', '0000-00-00 00:00:00', '1A', '2C,2D', '3B', '4C', '5G', '6D', '', '2013-04-20'),
(44, '2013-08-15', '4', 'GX9', '3043', '', 'Delta Tama 5', '13', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-21'),
(45, '2013-08-15', '4', 'GX9', '3044', '', 'Delta Tama 5', '14', '2', 'admin', '031-70110303', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '3B', '4C', '5B,5C', '6D', '', '2013-04-22'),
(46, '2013-08-15', '4', 'GX9', '3045', '', 'Delta Tama 5', '15', '2', 'admin', '08546343', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5B,5C', '', '', '2013-04-23'),
(47, '2013-08-15', '4', 'GX9', '3046', '', 'Delta Tama 5', '16', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5G', '6A', '', '2013-04-24'),
(48, '2013-08-15', '4', 'GX9', '3047', '', 'Delta Tama 5', '17', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-25'),
(49, '2013-08-15', '4', 'GX9', '3048', '', 'Delta Tama 5', '18', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-26'),
(50, '2013-08-15', '4', 'GX9', '3049', '', 'Delta Tama 5', '19', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-27'),
(51, '2013-08-15', '4', 'GX9', '3050', '', 'Delta Tama 5', '20', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-28'),
(52, '2013-08-15', '4', 'GX9', '3051', '', 'Delta Tama 5', '21', '2', 'admin', '08819429802', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5B,5C', '6D', '', '2013-04-29'),
(53, '2013-08-15', '4', 'GX9', '3052', '', 'Delta Tama 5', '22', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-04-30'),
(54, '2013-08-15', '4', 'GX9', '3053', '', 'Delta Tama 5', '23', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-01'),
(55, '2013-08-15', '4', 'GX9', '3054', '', 'Delta Tama 5', '24', '2', 'admin', '031-8541423', '0000-00-00 00:00:00', '1A', '2B,2C', '3B', '4C', '5B,5C', '', '', '2013-05-02'),
(56, '2013-08-15', '4', 'GX9', '3055', '', 'Delta Tama 5', '25', '2', 'admin', '031-8543940', '0000-00-00 00:00:00', '1A', '2B,2C', '3B', '4C', '5B,5C', '6D', '', '2013-05-03'),
(57, '2013-08-15', '4', 'GX9', '3056', '', 'Delta Tama 5', '26', '2', 'admin', '085213143088', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '3B', '4C', '5B,5C', '6B', '', '2013-05-04'),
(58, '2013-08-15', '4', 'GX9', '3057', '', 'Delta Tama 5', '27', '2', 'admin', '031-70006359', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5B,5C', '6B', '', '2013-05-05'),
(59, '2013-08-15', '4', 'GX9', '3058', '', 'Delta Tama 5', '28', '2', 'admin', '08123017443', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5B,5C', '6A', '', '2013-05-06'),
(60, '2013-08-15', '4', 'GX9', '3059', '', 'Delta Tama 5', '29', '2', 'admin', '031-71333730', '0000-00-00 00:00:00', '1A', '2B,2C', '3B', '4C', '', '6A', '', '2013-05-07'),
(61, '2013-08-15', '4', 'GX9', '3060', '', 'Delta Tama 5', '30', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-08'),
(62, '2013-08-15', '4', 'GX9', '3061', '', 'Delta Tama 5', '31', '2', 'admin', '08123140140', '0000-00-00 00:00:00', '1A', '2B,2C,2D', '3B', '4C', '5B,5C', '', '', '2013-05-09'),
(63, '2013-08-15', '4', 'GX9', '3062', '', 'Delta Tama 5', '32', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-10'),
(64, '2013-08-15', '4', 'GX9', '3063', '', 'Delta Tama 5', '33', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-11'),
(65, '2013-08-15', '4', 'GX9', '3064', '', 'Delta Tama 5', '34', '2', 'admin', '031-70601841', '0000-00-00 00:00:00', '1A', '2B,2C', '3B', '4C', '5B,5C', '6A', '', '2013-05-12'),
(66, '2013-08-15', '4', 'GX9', '3065', '', 'Delta Tama 5', '35', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2B,2D', '3B', '4C', '5G', '6A', '', '2013-05-13'),
(67, '2013-08-15', '1', 'DY1', '3066', '', 'Delta Tama 7', '1', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-05-14'),
(68, '2013-08-15', '1', 'DY1', '3067', '', 'Delta Tama 7', '2', '2', 'admin', '', '0000-00-00 00:00:00', '1A', '2D', '3B', '4C', '5A', '6A', '', '2013-05-15'),
(69, '2013-08-15', '1', 'DY1', '3068', '', 'Delta Tama 7', '3', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-16'),
(70, '2013-08-15', '1', 'DY1', '3069', '', 'Delta Tama 7', '4', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-17'),
(71, '2013-08-15', '1', 'DY1', '3070', '', 'Delta Tama 7', '5', '2', 'admin', '031-8545581', '0000-00-00 00:00:00', '1A', '', '', '', '', '', '', '2013-05-18'),
(72, '2013-08-15', '1', 'DY1', '3071', '', 'Delta Tama 7', '6', '2', 'admin', '081332392707', '0000-00-00 00:00:00', '1A', '', '', '', '', '', '', '2013-05-19'),
(73, '2013-08-15', '1', 'DY1', '3072', '', 'Delta Tama 7', '7', '2', 'admin', '081334074180', '0000-00-00 00:00:00', '1A', '', '', '', '', '', '', '2013-05-20'),
(74, '2013-08-15', '1', 'DY1', '3073', '', 'Delta Tama 7', '8', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-21'),
(75, '2013-08-15', '1', 'DY1', '3074', '', 'Delta Tama 7', '9', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-05-22'),
(76, '2013-08-15', '1', 'DY1', '3075', '', 'Delta Tama 7', '10', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-23'),
(77, '2013-08-15', '1', 'DY1', '3076', '', 'Delta Tama 7', '11', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-24'),
(78, '2013-08-15', '1', 'DY1', '3077', '', 'Delta Tama 7', '12', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-25'),
(79, '2013-08-15', '1', 'DY1', '3078', '', 'Delta Tama 7', '13', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-05-26'),
(80, '2013-08-15', '1', 'DY1', '3079', '', 'Delta Tama 7', '14', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-08-15'),
(81, '2013-08-15', '1', 'DY1', '3080', '', 'Delta Tama 7', '15', '2', 'admin', '08543657', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-08-15'),
(82, '2013-08-15', '1', 'DY1', '3081', '', 'Delta Tama 7', '16', '2', 'admin', '08121722716', '0000-00-00 00:00:00', '1A', '2A', '3A', '', '', '', '', '2013-08-15'),
(83, '2013-08-15', '1', 'DY1', '3082', '', 'Delta Tama 7', '17', '2', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '5H', '', '', '2013-09-15'),
(84, '2013-08-15', '2', 'ER9', '3083', '', 'Kerinci', '40', '1', 'admin', '031-8532163', '0000-00-00 00:00:00', '1A', '', '', '4C', '5B', '6A', '', '2013-09-16'),
(85, '2013-08-15', '2', 'ER9', '3084', '', 'Kerinci', '42', '1', 'admin', '031-8548221', '0000-00-00 00:00:00', '1A', '', '3A', '', '5B', '6A', '', '2013-09-17'),
(86, '2013-08-15', '2', 'ER9', '3085', '', 'Kerinci', '44', '1', 'admin', '031-8531477', '0000-00-00 00:00:00', '1A', '', '', '4C', '5B', '6A', '', '2013-10-15'),
(87, '2013-08-15', '2', 'ER9', '3086', '', 'Kerinci', '46', '1', 'admin', '031-8537707', '0000-00-00 00:00:00', '1A', '', '', '', '', '', '', '2013-10-16'),
(88, '2013-08-15', '2', 'ER9', '3087', '', 'Kerinci', '48', '1', 'admin', '031-8555146', '0000-00-00 00:00:00', '1A', '', '3C', '', '5B', '6A', '', '2013-10-17'),
(89, '2013-08-15', '2', 'ER9', '3088', '', 'Kerinci', '50', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '', '', '', '', '6D', '', '2013-10-18'),
(90, '2013-08-15', '2', 'ER9', '3089', '', 'Kerinci', '52', '1', 'admin', '031-8551296', '0000-00-00 00:00:00', '1A', '', '', '', '', '6D', '', '2013-10-19'),
(91, '2013-08-15', '2', 'ER9', '3090', '', 'Kerinci', '54', '1', 'admin', '031-8540530', '0000-00-00 00:00:00', '1A', '', '', '', '', '6A', '', '2013-10-20'),
(92, '2013-08-15', '2', 'ER9', '3091', '', 'Kerinci', '56', '1', 'admin', '031-8537404', '0000-00-00 00:00:00', '1A', '', '', '', '', '6A', '', '2013-10-21'),
(93, '2013-08-15', '2', 'ER9', '3092', '', 'Kerinci', '58', '1', 'admin', '031-8537634', '0000-00-00 00:00:00', '1A', '', '', '4C', '5B', '6C', '', '2013-10-22'),
(94, '2013-08-15', '2', 'ER9', '3093', '', 'Kerinci', '60', '1', 'admin', '031-8537935', '0000-00-00 00:00:00', '1A', '', '', '', '', '6C', '', '2013-10-23'),
(95, '2013-08-15', '2', 'ER9', '3094', '', 'Kerinci', '62', '1', 'admin', '031-8533380', '0000-00-00 00:00:00', '1A', '', '', '', '', '6C', '', '2013-11-15'),
(96, '2013-08-15', '2', 'ER9', '3095', '', 'Kerinci', '64', '1', 'admin', '031-8537618', '0000-00-00 00:00:00', '1A', '', '', '', '', '6D', '', '2013-11-16'),
(97, '2013-08-15', '2', 'ER9', '3096', '', 'Kerinci', '66', '1', 'admin', '031-8537544', '0000-00-00 00:00:00', '1A', '', '', '', '', '6D', '', '2013-11-17'),
(98, '2013-08-15', '2', 'ER9', '3097', '', 'Kerinci', '68', '1', 'admin', '031-8536999', '0000-00-00 00:00:00', '1A', '', '', '', '', '6D', '', '2013-11-18'),
(99, '2013-08-15', '2', 'ER9', '3098', '', 'Kerinci', '47', '1', 'admin', '031-8537753', '0000-00-00 00:00:00', '1A', '', '3A', '', '5B', '6D', '', '2013-11-19'),
(100, '2013-08-15', '2', 'ER9', '3099', '', 'Kerinci', '49', '1', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-11-20'),
(101, '2013-08-15', '2', 'ER9', '3100', '', 'Kerinci', '51', '1', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-11-21'),
(102, '2013-08-15', '2', 'ER9', '3101', '', 'Kerinci', '53', '1', 'admin', '031-8533561', '0000-00-00 00:00:00', '1A', '', '', '4D', '5B', '', '', '2013-11-22'),
(103, '2013-08-15', '2', 'ER9', '3102', '', 'Kerinci', '55', '1', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '6A,6D', '', '2013-11-23'),
(104, '2013-08-15', '2', 'ER9', '3103', '', 'Kerinci', '57', '1', 'admin', '031-855055', '0000-00-00 00:00:00', '1A', '', '', '', '', '6C', '', '2013-11-24'),
(105, '2013-08-15', '2', 'ER9', '3104', '', 'Kerinci', '59', '1', 'admin', '031-8537515', '0000-00-00 00:00:00', '1A', '', '3A', '', '5B', '', '', '2013-11-25'),
(106, '2013-08-15', '2', 'ER9', '3105', '', 'Kerinci', '61', '1', 'admin', '08563466699', '0000-00-00 00:00:00', '1A', '', '', '', '', '6A', '', '2013-11-26'),
(107, '2013-08-15', '2', 'ER9', '3106', '', 'Kerinci', '63', '1', 'admin', '031-8540829', '0000-00-00 00:00:00', '1A', '', '', '', '', '6A', '', '2013-11-27'),
(108, '2013-08-15', '2', 'ER9', '3107', '', 'Kerinci', '65', '1', 'admin', '031-8537533', '0000-00-00 00:00:00', '1A', '', '', '', '5B', '6D', '', '2013-11-28'),
(109, '2013-08-15', '2', 'ER9', '3108', '', 'Kerinci', '67', '1', 'admin', '031-8537511', '0000-00-00 00:00:00', '1A', '', '', '4D', '', '6D', '', '2013-11-29'),
(110, '2013-08-15', '2', 'ER9', '3109', '', 'Kerinci', '69', '1', 'admin', '031-8533377', '0000-00-00 00:00:00', '1A', '', '', '', '5B', '6D', '', '2013-12-15'),
(111, '2013-08-15', '12', 'M55', '3110', '', 'Kerinci', '4', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2B', '', '4D', '5A', '6A', '', '2013-12-16'),
(112, '2013-08-15', '12', 'M55', '3111', '', 'Kerinci', '6', '1', 'admin', '08133036267', '0000-00-00 00:00:00', '1A', '2A', '', '4E', '5A', '6B', '', '2013-12-17'),
(113, '2013-08-15', '12', 'M55', '3112', '', 'Kerinci', '8', '1', 'admin', '', '0000-00-00 00:00:00', '', '2E', '', '', '', '', '', '2013-12-18'),
(114, '2013-08-15', '12', 'M55', '3113', '', 'Kerinci', '17', '1', 'admin', '031-8546668', '0000-00-00 00:00:00', '1A', '2B', '3A', '4A', '5A', '6B', '', '2013-12-19'),
(115, '2013-08-15', '12', 'M55', '3114', '', 'Kerinci', '21', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2A', '3A', '4E', '5A', '6B', '', '2013-12-20'),
(116, '2013-08-15', '12', 'M55', '3115', '', 'Kerinci', '18', '1', 'admin', '031-8537504', '0000-00-00 00:00:00', '1A', '2A', '3A', '4A', '5A', '6B', '', '2013-12-21'),
(117, '2013-08-15', '12', 'M55', '3116', '', 'Kerinci', '22', '1', 'admin', '085608060250', '0000-00-00 00:00:00', '1A', '2A', '3C', '4D', '5A', '6B', '', '2013-12-22'),
(118, '2013-08-15', '12', 'M55', '3117', '', 'Kerinci', '20', '1', 'admin', '031-8542612', '0000-00-00 00:00:00', '1A', '2A', '3B', '4A', '5A', '6B', '', '2013-12-23'),
(119, '2013-08-15', '12', 'M55', '3118', '', 'Kerinci', '24', '1', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-12-24'),
(120, '2013-08-15', '12', 'M55', '3119', '', 'Kerinci', '26', '1', 'admin', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '2013-12-25'),
(121, '2013-08-15', '12', 'M55', '3120', '', 'Kerinci', '16', '1', 'admin', '', '0000-00-00 00:00:00', '', '2E', '', '', '', '', '', '2013-12-26'),
(122, '2013-08-15', '12', 'M55', '3121', '', 'Kerinci', '38', '1', 'admin', '', '0000-00-00 00:00:00', '', '2E', '', '', '', '', '', '2013-12-27'),
(123, '2013-08-15', '12', 'M55', '3122', '', 'Kerinci', '31', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2A', '3B', '4A', '5A', '6A', '', '2013-12-28'),
(124, '2013-08-15', '12', 'M55', '3123', '', 'Kerinci', '34', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2A', '3B', '4A', '5A', '6A', '', '2013-12-29'),
(125, '2013-08-15', '12', 'M55', '3124', '', 'Kerinci', '32', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2A', '3B', '4A', '5A', '6A', '', '2013-12-30'),
(126, '2013-08-15', '12', 'M55', '3125', '', 'Kerinci', '33', '1', 'admin', '', '0000-00-00 00:00:00', '1A', '2B', '3B', '4A', '5A', '6A', '', '2013-12-31'),
(127, '2013-08-19', '7', 'IA3', '3080', 'Blok 3', 'Keputih', '28', '3', 'Sullivan', '083845545527', '2013-08-23 15:01:00', '1B', '2C,2D', '3C', '4C', '5C,5D', '6D', 'haduuuuuhhh', '2013-08-01'),
(128, '2013-08-19', '4', 'GX2', '3051', 'Blok 2', 'Keputih', '8', '5', 'Sullivan', '9988777644', '0000-00-00 00:00:00', '1B', '', '', '4A', '', '6A', '', '2013-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_status`
--

CREATE TABLE IF NOT EXISTS `failed_status` (
  `ID_FAILED_STATUS` varchar(10) NOT NULL,
  `KETERANGAN_F_S` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_FAILED_STATUS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `failed_status`
--

INSERT INTO `failed_status` (`ID_FAILED_STATUS`, `KETERANGAN_F_S`) VALUES
('6A', 'Tidak Butuh Layanan'),
('6B', 'Tidak Mampu Membayar'),
('6C', 'Tidak Tahu Fungsi/ Kegunaan Produk'),
('6D', 'Sudah Pakai Provider Lain/ Sejenis'),
('6E', 'Tidak Memiliki PC'),
('6F', 'Salah Alamat'),
('6G', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `history_tim`
--

CREATE TABLE IF NOT EXISTS `history_tim` (
  `SALES_ID` varchar(10) NOT NULL,
  `NAMA_PEGAWAI` varchar(20) NOT NULL,
  `ID_TEAM` varchar(10) NOT NULL,
  `NAMA_TEAM` varchar(20) NOT NULL,
  `SUPERVISOR` varchar(20) NOT NULL,
  PRIMARY KEY (`SALES_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_tim`
--

INSERT INTO `history_tim` (`SALES_ID`, `NAMA_PEGAWAI`, `ID_TEAM`, `NAMA_TEAM`, `SUPERVISOR`) VALUES
('12', 'Penelope', '3', '5', 'Roth');

-- --------------------------------------------------------

--
-- Table structure for table `house_owner_profile`
--

CREATE TABLE IF NOT EXISTS `house_owner_profile` (
  `ID_HOUSE_OWNER_PROFILE` varchar(10) NOT NULL,
  `KETERANGAN_H_O_P` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_HOUSE_OWNER_PROFILE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owner_profile`
--

INSERT INTO `house_owner_profile` (`ID_HOUSE_OWNER_PROFILE`, `KETERANGAN_H_O_P`) VALUES
('3A', 'Usia Lanjut (55 tahun ke atas)'),
('3B', 'Usia Produktif (30 - 55 Tahun)'),
('3C', 'Mahasiswa'),
('3D', 'SMA/SLTP/SD'),
('3E', 'Balita');

-- --------------------------------------------------------

--
-- Table structure for table `house_owner_status`
--

CREATE TABLE IF NOT EXISTS `house_owner_status` (
  `ID_HOUSE_OWNER_STATUS` varchar(10) NOT NULL,
  `KETERANGAN_H_O_S` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_HOUSE_OWNER_STATUS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owner_status`
--

INSERT INTO `house_owner_status` (`ID_HOUSE_OWNER_STATUS`, `KETERANGAN_H_O_S`) VALUES
('4A', 'Wiraswasta/Pengusaha'),
('4B', 'Profesional (Dokter/Jaksa/Pengacara)'),
('4C', 'Karyawan Swasta'),
('4D', 'Karyawan BUMN'),
('4E', 'PNS (Termasuk Guru dan Dosen)');

-- --------------------------------------------------------

--
-- Table structure for table `master_pelanggan`
--

CREATE TABLE IF NOT EXISTS `master_pelanggan` (
  `ACCOUNT_ID` varchar(11) NOT NULL,
  `USER_ID` varchar(10) DEFAULT NULL,
  `FULL_NAME` varchar(50) NOT NULL,
  `STREET` varchar(50) NOT NULL,
  `EXTENSION_ADDRESS` varchar(50) NOT NULL,
  `HOUSE_NUMBER` varchar(10) NOT NULL,
  `NODE` varchar(50) DEFAULT NULL,
  `ID_CITY` varchar(10) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `ID_POWER_SUPPLY` varchar(20) NOT NULL,
  `PHONE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ACCOUNT_ID`),
  KEY `FK_RELATIONSHIP_11` (`USER_ID`),
  KEY `SALES_ID` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pelanggan`
--

INSERT INTO `master_pelanggan` (`ACCOUNT_ID`, `USER_ID`, `FULL_NAME`, `STREET`, `EXTENSION_ADDRESS`, `HOUSE_NUMBER`, `NODE`, `ID_CITY`, `CITY`, `ID_POWER_SUPPLY`, `PHONE`) VALUES
('3001', 'm', 'abc-1', 'Perumahan Sukolilo Park Regency', 'Blok 1', '2', NULL, '0', 'Surabaya Pusat', 'PS-001', '19233201'),
('3002', 'm', 'abc-1', 'Perumahan Sukolilo Park Regency', 'Blok 1', '3', NULL, '0', 'Surabaya Pusat', 'PS-002', '19233201'),
('3003', 'catur', 'abc-3', 'Perumahan Sukolilo Park Regency', 'Blok 1', '4', NULL, '0', 'Surabaya Barat', 'PS-003', '19233203'),
('3004', 'catur', 'abc-4', 'Perumahan Sukolilo Park Regency', 'Blok 1', '5', NULL, '0', 'Surabaya Selatan', 'PS-004', '19233204'),
('3005', 'catur', 'abc-5', 'Perumahan Sukolilo Park Regency', 'Blok 1', '6', NULL, '0', 'Surabaya Utara', 'PS-005', '19233205'),
('3006', 'catur', 'abc-6', 'Perumahan Sukolilo Park Regency', 'Blok 1', '7', NULL, '0', 'Surabaya Pusat', 'PS-006', '19233206'),
('3007', 'catur', 'abc-7', 'Perumahan Sukolilo Park Regency', 'Blok 1', '8', NULL, '0', 'Surabaya Timur', 'PS-007', '19233207'),
('3008', 'catur', 'abc-8', 'Perumahan Sukolilo Park Regency', 'Blok 1', '9', NULL, '0', 'Surabaya Barat', 'PS-008', '19233208'),
('3009', 'catur', 'abc-9', 'Perumahan Sukolilo Park Regency', 'Blok 1', '10', NULL, '0', 'Surabaya Selatan', 'PS-009', '19233209'),
('3010', 'catur', 'abc-10', 'Perumahan Sukolilo Park Regency', 'Blok 2', '1', NULL, '0', 'Surabaya Utara', 'PS-010', '19233210'),
('3011', 'catur', 'abc-11', 'Perumahan Sukolilo Park Regency', 'Blok 2', '2', NULL, '0', 'Surabaya Pusat', 'PS-011', '19233211'),
('3012', 'catur', 'abc-12', 'Perumahan Sukolilo Park Regency', 'Blok 2', '3', NULL, '0', 'Surabaya Timur', 'PS-012', '19233212'),
('3013', 'catur', 'abc-13', 'Perumahan Sukolilo Park Regency', 'Blok 2', '4', NULL, '0', 'Surabaya Barat', 'PS-013', '19233213'),
('3014', 'catur', 'abc-14', 'Perumahan Sukolilo Park Regency', 'Blok 2', '5', NULL, '0', 'Surabaya Selatan', 'PS-014', '19233214'),
('3015', 'catur', 'abc-15', 'Perumahan Sukolilo Park Regency', 'Blok 2', '6', NULL, '0', 'Surabaya Utara', 'PS-015', '19233215'),
('3016', 'catur', 'abc-16', 'Perumahan Sukolilo Park Regency', 'Blok 2', '7', NULL, '0', 'Surabaya Pusat', 'PS-016', '19233216'),
('3017', 'catur', 'abc-17', 'Perumahan Sukolilo Park Regency', 'Blok 2', '8', NULL, '0', 'Surabaya Timur', 'PS-017', '19233217'),
('3018', 'catur', 'abc-18', 'Perumahan Sukolilo Park Regency', 'Blok 2', '9', NULL, '0', 'Surabaya Barat', 'PS-018', '19233218'),
('3019', 'catur', 'abc-19', 'Perumahan Sukolilo Park Regency', 'Blok 11', '20', NULL, '0', 'Surabaya Selatan', 'PS-019', '19233219'),
('3020', 'm', 'abc-1', 'Perumahan Sukolilo Park Regency', 'Blok 21', '21', NULL, '0', 'Surabaya Pusat', 'PS-001', '19233201'),
('3021', 'catur', 'abc-21', 'Perumahan Sukolilo Park Regency', 'Blok 22', '22', NULL, '0', 'Surabaya Pusat', 'PS-021', '19233221'),
('3022', 'catur', 'abc-22', 'Perumahan Sukolilo Park Regency', 'Blok 23', '23', NULL, '0', 'Surabaya Timur', 'PS-022', '19233222'),
('3023', 'catur', 'abc-23', 'Perumahan Sukolilo Park Regency', 'Blok 24', '24', NULL, '0', 'Surabaya Barat', 'PS-023', '19233223'),
('3024', 'catur', 'abc-24', 'Perumahan Sukolilo Park Regency', 'Blok 25', '25', NULL, '0', 'Surabaya Selatan', 'PS-024', '19233224'),
('3025', 'catur', 'abc-25', 'Perumahan Sukolilo Park Regency', 'Blok 26', '26', NULL, '0', 'Surabaya Utara', 'PS-025', '19233225'),
('3026', 'catur', 'abc-26', 'Perumahan Sukolilo Park Regency', 'Blok 27', '27', NULL, '0', 'Surabaya Pusat', 'PS-026', '19233226'),
('3027', 'catur', 'abc-27', 'Perumahan Sukolilo Park Regency', 'Blok 28', '28', NULL, '0', 'Surabaya Timur', 'PS-027', '19233227'),
('3028', 'catur', 'abc-28', 'Perumahan Sukolilo Park Regency', 'Blok 29', '29', NULL, '0', 'Surabaya Barat', 'PS-028', '19233228'),
('3029', 'catur', 'abc-29', 'Perumahan Sukolilo Park Regency', 'Blok 30', '30', NULL, '0', 'Surabaya Selatan', 'PS-029', '19233229'),
('3030', 'catur', 'abc-30', 'Perumahan Sukolilo Park Regency', 'Blok 31', '31', NULL, '0', 'Surabaya Utara', 'PS-030', '19233230'),
('3031', 'catur', 'abc-31', 'Perumahan Sukolilo Park Regency', 'Blok 32', '32', NULL, '0', 'Surabaya Pusat', 'PS-031', '19233231'),
('3032', 'catur', 'abc-32', 'Perumahan Sukolilo Park Regency', 'Blok 33', '33', NULL, '0', 'Surabaya Timur', 'PS-032', '19233232'),
('3033', 'catur', 'abc-33', 'Perumahan Sukolilo Park Regency', 'Blok 34', '34', NULL, '0', 'Surabaya Barat', 'PS-033', '19233233'),
('3034', 'catur', 'abc-34', 'Keputih', 'Blok 1', '1', NULL, '0', 'Surabaya Selatan', 'PS-034', '19233234'),
('3035', 'catur', 'abc-35', 'Keputih', 'Blok 1', '2', NULL, '0', 'Surabaya Utara', 'PS-035', '19233235'),
('3036', 'catur', 'abc-36', 'Keputih', 'Blok 1', '3', NULL, '0', 'Surabaya Pusat', 'PS-036', '19233236'),
('3037', 'catur', 'abc-37', 'Keputih', 'Blok 1', '4', NULL, '0', 'Surabaya Timur', 'PS-037', '19233237'),
('3038', 'catur', 'abc-38', 'Keputih', 'Blok 1', '5', NULL, '0', 'Surabaya Barat', 'PS-038', '19233238'),
('3039', 'catur', 'abc-39', 'Keputih', 'Blok 1', '6', NULL, '0', 'Surabaya Selatan', 'PS-039', '19233239'),
('3040', 'catur', 'abc-40', 'Keputih', 'Blok 1', '7', NULL, '0', 'Surabaya Utara', 'PS-040', '19233240'),
('3041', 'catur', 'abc-41', 'Keputih', 'Blok 1', '8', NULL, '0', 'Surabaya Pusat', 'PS-041', '19233241'),
('3042', 'catur', 'abc-42', 'Keputih', 'Blok 1', '9', NULL, '0', 'Surabaya Timur', 'PS-042', '19233242'),
('3043', 'catur', 'abc-43', 'Keputih', 'Blok 1', '10', NULL, '0', 'Surabaya Barat', 'PS-043', '19233243'),
('3044', 'catur', 'abc-44', 'Keputih', 'Blok 2', '1', NULL, '0', 'Surabaya Selatan', 'PS-044', '19233244'),
('3045', 'catur', 'abc-45', 'Keputih', 'Blok 2', '2', NULL, '0', 'Surabaya Utara', 'PS-045', '19233245'),
('3046', 'catur', 'abc-46', 'Keputih', 'Blok 2', '3', NULL, '0', 'Surabaya Pusat', 'PS-046', '19233246'),
('3047', 'catur', 'abc-47', 'Keputih', 'Blok 2', '4', NULL, '0', 'Surabaya Timur', 'PS-047', '19233247'),
('3048', 'catur', 'abc-48', 'Keputih', 'Blok 2', '5', NULL, '0', 'Surabaya Barat', 'PS-048', '19233248'),
('3049', 'catur', 'abc-49', 'Keputih', 'Blok 2', '6', NULL, '0', 'Surabaya Selatan', 'PS-049', '19233249'),
('3050', 'catur', 'abc-50', 'Keputih', 'Blok 2', '7', NULL, '0', 'Surabaya Utara', 'PS-050', '19233250'),
('3051', 'catur', 'abc-51', 'Keputih', 'Blok 2', '8', NULL, '0', 'Surabaya Pusat', 'PS-051', '19233251'),
('3052', 'catur', 'abc-52', 'Keputih', 'Blok 2', '9', NULL, '0', 'Surabaya Timur', 'PS-052', '19233252'),
('3053', 'catur', 'abc-53', 'Keputih', 'Blok 3', '1', NULL, '0', 'Surabaya Barat', 'PS-053', '19233253'),
('3054', 'catur', 'abc-54', 'Keputih', 'Blok 3', '2', NULL, '0', 'Surabaya Selatan', 'PS-054', '19233254'),
('3055', 'catur', 'abc-55', 'Keputih', 'Blok 3', '3', NULL, '0', 'Surabaya Utara', 'PS-055', '19233255'),
('3056', 'catur', 'abc-56', 'Keputih', 'Blok 3', '4', NULL, '0', 'Surabaya Pusat', 'PS-056', '19233256'),
('3057', 'catur', 'abc-57', 'Keputih', 'Blok 3', '5', NULL, '0', 'Surabaya Timur', 'PS-057', '19233257'),
('3058', 'catur', 'abc-58', 'Keputih', 'Blok 3', '6', NULL, '0', 'Surabaya Barat', 'PS-058', '19233258'),
('3059', 'catur', 'abc-59', 'Keputih', 'Blok 3', '7', NULL, '0', 'Surabaya Selatan', 'PS-059', '19233259'),
('3060', 'catur', 'abc-60', 'Keputih', 'Blok 3', '8', NULL, '0', 'Surabaya Utara', 'PS-060', '19233260'),
('3061', 'catur', 'abc-61', 'Keputih', 'Blok 3', '9', NULL, '0', 'Surabaya Pusat', 'PS-061', '19233261'),
('3062', 'catur', 'abc-62', 'Keputih', 'Blok 3', '10', NULL, '0', 'Surabaya Timur', 'PS-062', '19233262'),
('3063', 'catur', 'abc-63', 'Keputih', 'Blok 3', '11', NULL, '0', 'Surabaya Barat', 'PS-063', '19233263'),
('3064', 'catur', 'abc-64', 'Keputih', 'Blok 3', '12', NULL, '0', 'Surabaya Selatan', 'PS-064', '19233264'),
('3065', 'catur', 'abc-65', 'Keputih', 'Blok 3', '13', NULL, '0', 'Surabaya Utara', 'PS-065', '19233265'),
('3066', 'catur', 'abc-66', 'Keputih', 'Blok 3', '14', NULL, '0', 'Surabaya Pusat', 'PS-066', '19233266'),
('3067', 'catur', 'abc-67', 'Keputih', 'Blok 3', '15', NULL, '0', 'Surabaya Timur', 'PS-067', '19233267'),
('3068', 'catur', 'abc-68', 'Keputih', 'Blok 3', '16', NULL, '0', 'Surabaya Barat', 'PS-068', '19233268'),
('3069', 'catur', 'abc-69', 'Keputih', 'Blok 3', '17', NULL, '0', 'Surabaya Selatan', 'PS-069', '19233269'),
('3070', 'catur', 'abc-70', 'Keputih', 'Blok 3', '18', NULL, '0', 'Surabaya Utara', 'PS-070', '19233270'),
('3071', 'catur', 'abc-71', 'Keputih', 'Blok 3', '19', NULL, '0', 'Surabaya Pusat', 'PS-071', '19233271'),
('3072', 'catur', 'abc-72', 'Keputih', 'Blok 3', '20', NULL, '0', 'Surabaya Timur', 'PS-072', '19233272'),
('3073', 'catur', 'abc-73', 'Keputih', 'Blok 3', '21', NULL, '0', 'Surabaya Barat', 'PS-073', '19233273'),
('3074', 'catur', 'abc-74', 'Keputih', 'Blok 3', '22', NULL, '0', 'Surabaya Selatan', 'PS-074', '19233274'),
('3075', 'catur', 'abc-75', 'Keputih', 'Blok 3', '23', NULL, '0', 'Surabaya Utara', 'PS-075', '19233275'),
('3076', 'catur', 'abc-76', 'Keputih', 'Blok 3', '24', NULL, '0', 'Surabaya Pusat', 'PS-076', '19233276'),
('3077', 'catur', 'abc-77', 'Keputih', 'Blok 3', '25', NULL, '0', 'Surabaya Timur', 'PS-077', '19233277'),
('3078', 'catur', 'abc-78', 'Keputih', 'Blok 3', '26', NULL, '0', 'Surabaya Barat', 'PS-078', '19233278'),
('3079', 'catur', 'abc-79', 'Keputih', 'Blok 3', '27', NULL, '0', 'Surabaya Selatan', 'PS-079', '19233279'),
('3080', 'catur', 'abc-80', 'Keputih', 'Blok 3', '28', NULL, '0', 'Surabaya Utara', 'PS-080', '19233280'),
('3081', 'catur', 'abc-81', 'Keputih', 'Blok 3', '29', NULL, '0', 'Surabaya Pusat', 'PS-081', '19233281'),
('3082', 'catur', 'abc-82', 'Keputih', 'Blok 3', '30', NULL, '0', 'Surabaya Timur', 'PS-082', '19233282'),
('3083', 'catur', 'abc-83', 'Keputih', 'Blok 3', '31', NULL, '0', 'Surabaya Barat', 'PS-083', '19233283'),
('3084', 'catur', 'abc-84', 'Keputih', 'Blok 3', '32', NULL, '0', 'Surabaya Selatan', 'PS-084', '19233284'),
('3085', 'catur', 'abc-85', 'Keputih', 'Blok 3', '33', NULL, '0', 'Surabaya Utara', 'PS-085', '19233285'),
('3086', 'catur', 'abc-86', 'Keputih', 'Blok 3', '34', NULL, '0', 'Surabaya Pusat', 'PS-086', '19233286'),
('3087', 'catur', 'abc-87', 'Keputih', 'Blok 3', '35', NULL, '0', 'Surabaya Timur', 'PS-087', '19233287'),
('3088', 'catur', 'abc-88', 'Keputih', 'Blok 3', '36', NULL, '0', 'Surabaya Barat', 'PS-088', '19233288'),
('3089', 'catur', 'abc-89', 'Keputih', 'Blok 3', '37', NULL, '0', 'Surabaya Selatan', 'PS-089', '19233289'),
('3090', 'catur', 'abc-90', 'Keputih', 'Blok 3', '38', NULL, '0', 'Surabaya Utara', 'PS-090', '19233290'),
('3091', 'catur', 'abc-91', 'Keputih', 'Blok 3', '39', NULL, '0', 'Surabaya Pusat', 'PS-091', '19233291'),
('3092', 'catur', 'abc-92', 'Keputih', 'Blok 3', '40', NULL, '0', 'Surabaya Timur', 'PS-092', '19233292'),
('3093', 'catur', 'abc-93', 'Keputih', 'Blok 3', '41', NULL, '0', 'Surabaya Barat', 'PS-093', '19233293'),
('3094', 'catur', 'abc-94', 'Keputih', 'Blok 3', '42', NULL, '0', 'Surabaya Selatan', 'PS-094', '19233294'),
('3095', 'catur', 'abc-95', 'Keputih', 'Blok 3', '43', NULL, '0', 'Surabaya Utara', 'PS-095', '19233295'),
('3096', 'catur', 'abc-96', 'Keputih', 'Blok 3', '44', NULL, '0', 'Surabaya Pusat', 'PS-096', '19233296'),
('3097', 'catur', 'abc-97', 'Keputih', 'Blok 3', '45', NULL, '0', 'Surabaya Timur', 'PS-097', '19233297'),
('3098', 'catur', 'abc-98', 'Keputih', 'Blok 3', '46', NULL, '0', 'Surabaya Barat', 'PS-098', '19233298'),
('3099', 'catur', 'abc-99', 'Keputih', 'Blok 3', '47', NULL, '0', 'Surabaya Selatan', 'PS-099', '19233299'),
('3100', 'catur', 'abc-100', 'Keputih', 'Blok 3', '48', NULL, '0', 'Surabaya Utara', 'PS-100', '19233300'),
('3101', 'catur', 'abc-101', 'Keputih', 'Blok 3', '49', NULL, '0', 'Surabaya Pusat', 'PS-101', '19233301'),
('3102', 'catur', 'abc-102', 'Keputih', 'Blok 4', '1', NULL, '0', 'Surabaya Timur', 'PS-102', '19233302'),
('3103', 'catur', 'abc-103', 'Keputih', 'Blok 4', '2', NULL, '0', 'Surabaya Barat', 'PS-103', '19233303'),
('3104', 'catur', 'abc-104', 'Keputih', 'Blok 4', '3', NULL, '0', 'Surabaya Selatan', 'PS-104', '19233304'),
('3105', 'catur', 'abc-105', 'Keputih', 'Blok 4', '4', NULL, '0', 'Surabaya Utara', 'PS-105', '19233305'),
('3106', 'catur', 'abc-106', 'Keputih', 'Blok 4', '5', NULL, '0', 'Surabaya Pusat', 'PS-106', '19233306'),
('3107', 'catur', 'abc-107', 'Keputih', 'Blok 4', '6', NULL, '0', 'Surabaya Timur', 'PS-107', '19233307'),
('3108', 'catur', 'abc-108', 'Keputih', 'Blok 4', '7', NULL, '0', 'Surabaya Barat', 'PS-108', '19233308'),
('3109', 'catur', 'abc-109', 'Keputih', 'Blok 4', '8', NULL, '0', 'Surabaya Selatan', 'PS-109', '19233309'),
('3110', 'catur', 'abc-110', 'Keputih', 'Blok 4', '9', NULL, '0', 'Surabaya Utara', 'PS-110', '19233310'),
('3111', 'catur', 'abc-111', 'Keputih', 'Blok 4', '10', NULL, '0', 'Surabaya Pusat', 'PS-111', '19233311'),
('3112', 'catur', 'abc-112', 'Keputih', 'Blok 4', '11', NULL, '0', 'Surabaya Timur', 'PS-112', '19233312'),
('3113', 'catur', 'abc-113', 'Keputih', 'Blok 4', '12', NULL, '0', 'Surabaya Barat', 'PS-113', '19233313'),
('3114', 'catur', 'abc-114', 'Keputih', 'Blok 4', '13', NULL, '0', 'Surabaya Selatan', 'PS-114', '19233314'),
('3115', 'catur', 'abc-115', 'Keputih', 'Blok 4', '14', NULL, '0', 'Surabaya Utara', 'PS-115', '19233315'),
('3116', 'catur', 'abc-116', 'Keputih', 'Blok 4', '15', NULL, '0', 'Surabaya Pusat', 'PS-116', '19233316'),
('3117', 'catur', 'abc-117', 'Keputih', 'Blok 4', '16', NULL, '0', 'Surabaya Timur', 'PS-117', '19233317'),
('3118', 'catur', 'abc-118', 'Keputih', 'Blok 4', '17', NULL, '0', 'Surabaya Barat', 'PS-118', '19233318'),
('3119', 'catur', 'abc-119', 'Keputih', 'Blok 4', '18', NULL, '0', 'Surabaya Selatan', 'PS-119', '19233319'),
('3120', 'catur', 'abc-120', 'Keputih', 'Blok 4', '19', NULL, '0', 'Surabaya Utara', 'PS-120', '19233320'),
('3121', 'catur', 'abc-121', 'Keputih', 'Blok 4', '20', NULL, '0', 'Surabaya Pusat', 'PS-121', '19233321'),
('3122', 'catur', 'abc-122', 'Keputih', 'Blok 4', '21', NULL, '0', 'Surabaya Timur', 'PS-122', '19233322'),
('3123', 'catur', 'abc-123', 'Keputih', 'Blok 4', '22', NULL, '0', 'Surabaya Barat', 'PS-123', '19233323'),
('3124', 'catur', 'abc-124', 'Keputih', 'Blok 4', '23', NULL, '0', 'Surabaya Selatan', 'PS-124', '19233324'),
('3125', 'catur', 'abc-125', 'Keputih', 'Blok 4', '24', NULL, '0', 'Surabaya Utara', 'PS-125', '19233325'),
('3126', 'catur', 'abc-126', 'Keputih', 'Blok 4', '25', NULL, '0', 'Surabaya Pusat', 'PS-126', '19233326'),
('3127', 'catur', 'abc-127', 'Keputih', 'Blok 5', '1', NULL, '0', 'Surabaya Timur', 'PS-127', '19233327'),
('3128', 'catur', 'abc-128', 'Keputih', 'Blok 5', '2', NULL, '0', 'Surabaya Barat', 'PS-128', '19233328'),
('3129', 'catur', 'abc-129', 'Keputih', 'Blok 5', '3', NULL, '0', 'Surabaya Selatan', 'PS-129', '19233329'),
('3130', 'catur', 'abc-130', 'Keputih', 'Blok 5', '4', NULL, '0', 'Surabaya Utara', 'PS-130', '19233330'),
('3131', 'catur', 'abc-131', 'Keputih', 'Blok 5', '5', NULL, '0', 'Surabaya Pusat', 'PS-131', '19233331'),
('3132', 'catur', 'abc-132', 'Keputih', 'Blok 5', '6', NULL, '0', 'Surabaya Timur', 'PS-132', '19233332'),
('3133', 'catur', 'abc-133', 'Keputih', 'Blok 5', '7', NULL, '0', 'Surabaya Barat', 'PS-133', '19233333'),
('3134', 'catur', 'abc-134', 'Keputih', 'Blok 5', '8', NULL, '0', 'Surabaya Selatan', 'PS-134', '19233334'),
('3135', 'catur', 'abc-135', 'Keputih', 'Blok 5', '9', NULL, '0', 'Surabaya Utara', 'PS-135', '19233335'),
('3136', 'catur', 'abc-136', 'Keputih', 'Blok 5', '10', NULL, '0', 'Surabaya Pusat', 'PS-136', '19233336'),
('3137', 'catur', 'abc-137', 'Keputih', 'Blok 5', '11', NULL, '0', 'Surabaya Timur', 'PS-137', '19233337'),
('3138', 'catur', 'abc-138', 'Keputih', 'Blok 5', '12', NULL, '0', 'Surabaya Barat', 'PS-138', '19233338'),
('3139', 'catur', 'abc-139', 'Keputih', 'Blok 5', '13', NULL, '0', 'Surabaya Selatan', 'PS-139', '19233339'),
('3140', 'catur', 'abc-140', 'Keputih', 'Blok 5', '14', NULL, '0', 'Surabaya Utara', 'PS-140', '19233340'),
('3141', 'catur', 'abc-141', 'Keputih', 'Blok 5', '15', NULL, '0', 'Surabaya Pusat', 'PS-141', '19233341'),
('3142', 'catur', 'abc-142', 'Keputih', 'Blok 5', '16', NULL, '0', 'Surabaya Timur', 'PS-142', '19233342'),
('3143', 'catur', 'abc-143', 'Keputih', 'Blok 5', '17', NULL, '0', 'Surabaya Barat', 'PS-143', '19233343'),
('3144', 'catur', 'abc-144', 'Keputih', 'Blok 5', '18', NULL, '0', 'Surabaya Selatan', 'PS-144', '19233344'),
('3145', 'catur', 'abc-145', 'Keputih', 'Blok 5', '19', NULL, '0', 'Surabaya Utara', 'PS-145', '19233345'),
('3146', 'catur', 'abc-146', 'Keputih', 'Blok 5', '20', NULL, '0', 'Surabaya Pusat', 'PS-146', '19233346'),
('3147', 'catur', 'abc-147', 'Keputih', 'Blok 5', '21', NULL, '0', 'Surabaya Timur', 'PS-147', '19233347'),
('3148', 'catur', 'abc-148', 'Keputih', 'Blok 5', '22', NULL, '0', 'Surabaya Barat', 'PS-148', '19233348'),
('3149', 'catur', 'abc-149', 'Keputih', 'Blok 5', '23', NULL, '0', 'Surabaya Selatan', 'PS-149', '19233349'),
('3151', 'Sullivan', 'udin', 'Pepelegi', 'Blok 100', '60', 'ND-1', '6', 'Sidoarjo', 'PS-151', '098765432120000');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `SALES_ID` varchar(10) NOT NULL,
  `NO_KTP_PEGAWAI` varchar(20) NOT NULL,
  `NAMA_PEGAWAI` varchar(50) NOT NULL,
  `USERNAME_PEGAWAI` varchar(50) NOT NULL,
  `PASSWORD_PEGAWAI` varchar(20) NOT NULL,
  `TEMPAT_LAHIR` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `HAK_AKSES_PEGAWAI` varchar(20) NOT NULL,
  `STATUS_PEGAWAI` varchar(10) NOT NULL,
  `STATUS_POSISI` varchar(50) NOT NULL,
  `ALAMAT_PEGAWAI` varchar(100) DEFAULT NULL,
  `NO_TELP_PEGAWAI` varchar(20) NOT NULL,
  `DATE_JOIN` date NOT NULL,
  PRIMARY KEY (`SALES_ID`),
  UNIQUE KEY `USERNAME_PEGAWAI` (`USERNAME_PEGAWAI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`SALES_ID`, `NO_KTP_PEGAWAI`, `NAMA_PEGAWAI`, `USERNAME_PEGAWAI`, `PASSWORD_PEGAWAI`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `HAK_AKSES_PEGAWAI`, `STATUS_PEGAWAI`, `STATUS_POSISI`, `ALAMAT_PEGAWAI`, `NO_TELP_PEGAWAI`, `DATE_JOIN`) VALUES
('1', '30C83AB3-8E03-9228', 'Meghan', 'Sullivan', '1234', 'San Sebastiano al Ve', '1990-04-13', 'Admin', 'Aktif', 'TRAINEE', 'P.O. Box 999, 9919 Nulla Avenue', '(02) 1294 6214', '2001-04-13'),
('10', '30C83AB3-8E03-9237', 'Dana', 'Perez', '1234', 'McCallum', '1990-04-22', 'Admin', 'Non-Aktif', 'SENIOR', '365 Risus Rd.', '(04) 1601 4646', '2001-04-22'),
('100', '30C83AB3-8E03-9327', 'Stacy', 'Sloan', '1234', 'Campitello di Fassa', '1978-07-30', 'Admin', 'Cuti', 'JUNIOR', '803-2876 A, Street', '(04) 6359 4075', '2008-07-30'),
('101', '0001292943884575', 'Muhammad', 'm', '1', 'Surabaya', '1950-01-01', 'Admin', 'Aktif', 'REGIONAL HEAD', 'Dinoyo 51', '085731600665', '2013-08-19'),
('11', '30C83AB3-8E03-9238', 'Linusan', 'Hampton', '1234', 'Guelph', '1990-04-23', 'Member', 'Cuti', 'SUPERVISOR', 'P.O. Box 874, 5028 Lacus. St.', '(06) 1508 9520', '2001-04-23'),
('12', '30C83AB3-8E03-9239', 'Penelope', 'Medina', '1234', 'Halle', '1990-04-24', 'Member', 'Aktif', 'ASISTEN MANAGER', 'P.O. Box 338, 6006 Eget Rd.', '(04) 1824 9807', '2001-04-24'),
('13', '30C83AB3-8E03-9240', 'Georgia', 'Kramer', '1234', 'Ururi', '1990-04-25', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'P.O. Box 275, 9864 Nisl Ave', '(03) 4552 3901', '2001-04-25'),
('14', '30C83AB3-8E03-9241', 'Rhoda', 'Anderson', '1234', 'Pietraroja', '1990-04-26', 'Admin', 'Cuti', 'REGIONAL HEAD', 'P.O. Box 183, 5694 Ut, Av.', '(04) 7438 0337', '2001-04-26'),
('15', '30C83AB3-8E03-9242', 'Donna', 'Clayton', '1234', 'Kassel', '1990-04-27', 'Member', 'Aktif', 'TRAINEE', '7571 Neque St.', '(03) 3954 0258', '2001-04-27'),
('16', '30C83AB3-8E03-9243', 'Linus', 'Morales1', '1234', 'Herne', '1990-04-28', 'Member', 'Non-Aktif', 'JUNIOR', '1143 Parturient Road', '(07) 8701 0222', '2001-04-28'),
('17', '30C83AB3-8E03-9244', 'Yuri', 'Morin', '1234', 'Schwalbach', '1990-04-29', 'Admin', 'Aktif', 'SENIOR', 'Ap #845-2154 Vitae St.', '(02) 9854 7731', '2001-04-29'),
('18', '30C83AB3-8E03-9245', 'Ferdinand', 'Mckay', '1234', 'Newark', '1990-04-30', 'Admin', 'Non-Aktif', 'SUPERVISOR', '7859 A, Ave', '(02) 3226 3935', '2001-04-30'),
('19', '30C83AB3-8E03-9246', 'Gabriel', 'Brooks', '1234', 'Vanier', '1990-05-01', 'Member', 'Cuti', 'ASISTEN MANAGER', 'P.O. Box 719, 4641 Augue Ave', '(08) 5214 4493', '2001-05-01'),
('2', '30C83AB3-8E03-9229', 'Ryder', 'Oconnor', '1234', 'San Sebastiano al Ve', '1990-04-14', 'Admin', 'Non-Aktif', 'JUNIOR', 'Ap #335-923 Ligula. Rd.', '(09) 1380 7147', '2001-04-14'),
('20', '30C83AB3-8E03-9247', 'Yasir', 'Hayes', '1234', 'Boise', '1990-05-02', 'Member', 'Aktif', 'TERITORY MANAGER', '8067 Ornare Av.', '(06) 0230 3305', '2001-05-02'),
('21', '30C83AB3-8E03-9248', 'Maxine', 'Mcclain', '1234', 'Maple Creek', '1990-05-03', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', '752-2026 Nibh. St.', '(08) 4450 3860', '2009-05-03'),
('22', '30C83AB3-8E03-9249', 'Quinlan', 'Mercer', '1234', 'Glasgow', '1990-05-04', 'Admin', 'Cuti', 'TRAINEE', '274-8799 A St.', '(02) 9115 3017', '2009-05-04'),
('23', '30C83AB3-8E03-9250', 'Randall', 'Petersen', '1234', 'Harnoncourt', '1990-05-05', 'Member', 'Aktif', 'JUNIOR', 'P.O. Box 773, 7781 Orci. Rd.', '(05) 4412 9254', '2009-05-05'),
('24', '30C83AB3-8E03-9251', 'Murphy', 'Sharp', '1234', 'Sint-Katherina-Lombe', '1990-05-06', 'Member', 'Non-Aktif', 'SENIOR', '776-9225 Vestibulum Rd.', '(08) 4712 5620', '2009-05-06'),
('25', '30C83AB3-8E03-9252', 'Peter', 'House', '1234', 'Innsbruck', '1990-05-07', 'Admin', 'Aktif', 'SUPERVISOR', 'P.O. Box 160, 7537 Volutpat Rd.', '(03) 0852 8280', '2009-05-07'),
('26', '30C83AB3-8E03-9253', 'Hunter', 'Page', '1234', 'Lauro de Freitas', '1990-05-08', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '867-8412 Velit St.', '(01) 3671 4959', '2009-05-08'),
('27', '30C83AB3-8E03-9254', 'Orson', 'Gillespie1', '1234', 'Sint-Niklaas', '1990-05-09', 'Member', 'Cuti', 'TERITORY MANAGER', '111-444 Duis Rd.', '(09) 9384 2962', '2009-05-09'),
('28', '30C83AB3-8E03-9255', 'Anne', 'Talley', '1234', 'Gouvy', '1990-05-10', 'Member', 'Aktif', 'REGIONAL HEAD', 'Ap #850-6161 A St.', '(08) 6393 5956', '2009-05-10'),
('29', '30C83AB3-8E03-9256', 'Hyatt', 'Snyder', '1234', 'Borghetto di Borbera', '1990-05-11', 'Admin', 'Non-Aktif', 'TRAINEE', 'Ap #472-7571 Praesent Rd.', '(04) 8345 6971', '2009-05-11'),
('3', '30C83AB3-8E03-9230', 'Freya', 'Maynard', '1234', 'Stuttgart', '1990-04-15', 'Member', 'Cuti', 'SENIOR', '936-3015 Aliquam St.', '(01) 6181 9566', '2001-04-15'),
('30', '30C83AB3-8E03-9257', 'Maryam', 'Gentry', '1234', 'Belford Roxo', '1990-05-12', 'Admin', 'Cuti', 'JUNIOR', '4853 Magna. Ave', '(03) 9809 2220', '2009-05-12'),
('31', '30C83AB3-8E03-9258', 'Jordan', 'Hunt', '1234', 'Darlington', '1990-05-13', 'Member', 'Aktif', 'SENIOR', 'P.O. Box 361, 645 Eu Ave', '(04) 4499 6079', '2009-05-13'),
('33', '30C83AB3-8E03-9260', 'Thaddeus', 'Vazquez', '1234', 'Arnesano', '1990-05-15', 'Admin', 'Aktif', 'ASISTEN MANAGER', '791-7770 Sapien. Street', '(06) 6109 4220', '2009-05-15'),
('34', '30C83AB3-8E03-9261', 'Risa', 'Montoya', '1234', 'Saint-Rhémy-en-Bosse', '1990-05-16', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', '6907 Non, Street', '(09) 7449 4965', '2009-05-16'),
('35', '30C83AB3-8E03-9262', 'Nadine', 'Hobbs', '1234', 'Salvador', '1990-05-17', 'Member', 'Cuti', 'REGIONAL HEAD', 'P.O. Box 210, 4268 Phasellus Avenue', '(03) 7721 5510', '2009-05-17'),
('36', '30C83AB3-8E03-9263', 'Jordan', 'Rosales', '1234', 'Sangerhausen', '1990-05-18', 'Member', 'Aktif', 'TRAINEE', '1025 Proin Avenue', '(04) 4964 0483', '2009-05-18'),
('37', '30C83AB3-8E03-9264', 'Lillian', 'Tillman', '1234', 'Okotoks', '1990-05-19', 'Admin', 'Non-Aktif', 'JUNIOR', 'Ap #378-8840 Aliquet Road', '(02) 7425 2412', '2009-05-19'),
('38', '30C83AB3-8E03-9265', 'Molly', 'Pittman', '1234', 'Otegem', '1990-05-20', 'Admin', 'Cuti', 'SENIOR', 'P.O. Box 422, 8385 Nulla Av.', '(03) 0538 5640', '2009-05-20'),
('39', '30C83AB3-8E03-9266', 'Kuame', 'Oneill', '1234', 'Bouffioulx', '1990-05-21', 'Member', 'Aktif', 'SUPERVISOR', 'Ap #794-7303 Natoque Rd.', '(09) 6352 1535', '2009-05-21'),
('4', '30C83AB3-8E03-9231', 'Hedley', 'Welch', '1234', 'Santu Lussurgiu', '1990-04-16', 'Member', 'Aktif', 'SUPERVISOR', '733-6289 Ut St.', '(06) 8795 5199', '2001-04-16'),
('40', '30C83AB3-8E03-9267', 'Kylee', 'Pickett', '1234', 'Tione di Trento', '1990-05-22', 'Member', 'Non-Aktif', 'ASISTEN MANAGER', 'P.O. Box 659, 1825 Adipiscing Ave', '(06) 4400 8977', '2009-05-22'),
('41', '30C83AB3-8E03-9268', 'Castor', 'Coffey', '1234', 'Brentwood', '1990-05-23', 'Admin', 'Aktif', 'TERITORY MANAGER', 'Ap #203-7685 Ullamcorper. Ave', '(03) 8873 3361', '2009-05-23'),
('42', '30C83AB3-8E03-9269', 'August', 'Lancaster', '1234', 'Berlare', '1990-05-24', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', '550-3999 Molestie Rd.', '(09) 5064 2054', '2009-05-24'),
('43', '30C83AB3-8E03-9270', 'Herman', 'Blanchard', '1234', 'Marcinelle', '1990-05-25', 'Member', 'Cuti', 'TRAINEE', '9592 A, Road', '(04) 5851 2847', '2009-05-25'),
('44', '30C83AB3-8E03-9271', 'Marny', 'Morales', '1234', 'Lamontz', '1990-05-26', 'Admin', 'Aktif', 'JUNIOR', '7984 Adipiscing St.', '(04) 8165 6456', '2009-05-26'),
('45', '30C83AB3-8E03-9272', 'Petra', 'Fitzgerald', '1234', 'Portree', '1990-05-27', 'Admin', 'Non-Aktif', 'SENIOR', '8192 Sit Av.', '(06) 9955 6735', '2009-05-27'),
('46', '30C83AB3-8E03-9273', 'Lars', 'Houston', '1234', 'Medemblik', '1990-05-28', 'Member', 'Cuti', 'SUPERVISOR', '825-3455 Montes, Av.', '(06) 3807 3275', '2009-05-28'),
('47', '30C83AB3-8E03-9274', 'Abigail', 'Chen', '1234', 'Baracaldo', '1990-05-29', 'Member', 'Aktif', 'ASISTEN MANAGER', 'P.O. Box 592, 848 Ipsum Road', '(06) 2311 0706', '2009-05-29'),
('48', '30C83AB3-8E03-9275', 'Sierra', 'White', '1234', 'Sars-la-Buissi', '1990-05-30', 'Admin', 'Aktif', 'TERITORY MANAGER', '3986 Sed St.', '(08) 2520 5627', '2009-05-30'),
('49', '30C83AB3-8E03-9276', 'Simone', 'Mcbride', '1234', 'Duluth', '1990-05-31', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'Ap #302-4185 Vivamus Rd.', '(04) 3449 0108', '2009-05-31'),
('5', '30C83AB3-8E03-9232', 'Roth', 'Gillespie', '1234', 'Tavier', '1990-04-17', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', 'P.O. Box 896, 3584 Aenean Rd.', '(01) 2145 5141', '2001-04-17'),
('50', '30C83AB3-8E03-9277', 'Sebastian', 'Bender', '1234', 'Orvault', '1990-06-01', 'Member', 'Cuti', 'TRAINEE', '330 Posuere St.', '(05) 5730 5986', '2009-06-01'),
('51', '30C83AB3-8E03-9278', 'Daryl', 'Berg', '1234', 'Rotheux-Rimi', '1990-06-02', 'Member', 'Aktif', 'JUNIOR', 'Ap #118-6484 Quisque Ave', '(08) 3537 2342', '2009-06-02'),
('52', '30C83AB3-8E03-9279', 'Sierra', 'Mooney', '1234', 'Opoeteren', '1990-06-03', 'Admin', 'Non-Aktif', 'SENIOR', 'P.O. Box 479, 106 Diam Av.', '(06) 6425 6370', '2009-06-03'),
('53', '30C83AB3-8E03-9280', 'Maisie', 'Perry', '1234', 'Prestatyn', '1990-06-04', 'Admin', 'Cuti', 'SUPERVISOR', 'Ap #503-6474 Lobortis Av.', '(02) 6094 2441', '2009-06-04'),
('54', '30C83AB3-8E03-9281', 'Medge', 'Oneal', '1234', 'Polpenazze del Garda', '1990-06-05', 'Member', 'Aktif', 'ASISTEN MANAGER', 'Ap #508-9025 Placerat Avenue', '(03) 1096 4423', '2009-06-05'),
('55', '30C83AB3-8E03-9282', 'Latifah', 'Chapman', '1234', 'Kidwelly', '1990-06-06', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'Ap #463-5415 Vitae, Road', '(02) 6547 4746', '2009-06-06'),
('56', '30C83AB3-8E03-9283', 'Delilah', 'Jefferson', '1234', 'Serrata', '1990-06-07', 'Admin', 'Aktif', 'REGIONAL HEAD', 'P.O. Box 146, 6711 Lobortis St.', '(06) 4028 7581', '2009-06-07'),
('57', '30C83AB3-8E03-9284', 'Nola', 'Hayden', '1234', 'Lasnigo', '1990-06-08', 'Member', 'Non-Aktif', 'TRAINEE', '360-9041 Praesent Rd.', '(03) 5077 0875', '2009-06-08'),
('58', '30C83AB3-8E03-9285', 'Molly', 'Heath', '1234', 'Carleton', '1978-06-18', 'Member', 'Cuti', 'JUNIOR', 'Ap #512-8871 Quis Avenue', '(07) 0894 7036', '2009-06-09'),
('59', '30C83AB3-8E03-9286', 'Lee', 'Fields', '1234', 'San Giorgio Albanese', '1978-06-19', 'Admin', 'Aktif', 'SENIOR', 'Ap #786-9649 Pellentesque St.', '(05) 0563 5806', '2009-06-10'),
('6', '30C83AB3-8E03-9233', 'Barry', 'Gates', '1234', 'Chartres', '1990-04-18', 'Admin', 'Cuti', 'TERITORY MANAGER', '311-471 In Road', '(03) 8446 6523', '2001-04-18'),
('60', '30C83AB3-8E03-9287', 'Isaac', 'Gomez', '1234', 'Asnières-sur-Seine', '1978-06-20', 'Admin', 'Non-Aktif', 'SUPERVISOR', 'P.O. Box 182, 2337 Neque Av.', '(02) 0138 1187', '2009-06-11'),
('61', '30C83AB3-8E03-9288', 'Adele', 'Frederick', '1234', 'St. Petersburg', '1978-06-21', 'Member', 'Cuti', 'ASISTEN MANAGER', '5023 Egestas. Av.', '(08) 3687 6022', '2009-06-12'),
('62', '30C83AB3-8E03-9289', 'Maggie', 'Knowles', '1234', 'Nicolosi', '1978-06-22', 'Member', 'Aktif', 'TERITORY MANAGER', '557-5054 Proin Avenue', '(02) 2108 4102', '2009-06-13'),
('63', '30C83AB3-8E03-9290', 'Cyrus', 'Rogers', '1234', 'Avigliano Umbro', '1978-06-23', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'Ap #314-9650 Euismod Road', '(03) 6425 8377', '2009-06-14'),
('64', '30C83AB3-8E03-9291', 'Baxter', 'Buckner', '1234', 'Auxerre', '1978-06-24', 'Admin', 'Aktif', 'TRAINEE', 'Ap #806-4738 Nullam St.', '(03) 8757 2798', '2009-06-15'),
('65', '30C83AB3-8E03-9292', 'Chastity', 'Copeland', '1234', 'Sherbrooke', '1978-06-25', 'Member', 'Non-Aktif', 'JUNIOR', '649-8005 Aliquet St.', '(04) 0152 9584', '2009-06-16'),
('66', '30C83AB3-8E03-9293', 'Harrison', 'Gibbs', '1234', 'Ayas', '1978-06-26', 'Member', 'Cuti', 'SENIOR', '921-4937 Ipsum. Rd.', '(01) 3913 1200', '2009-06-17'),
('67', '30C83AB3-8E03-9294', 'Tobias', 'Hicks', '1234', 'Castor', '1978-06-27', 'Admin', 'Aktif', 'SUPERVISOR', '666-4908 Erat Avenue', '(02) 9973 2915', '2009-06-18'),
('68', '30C83AB3-8E03-9295', 'Melinda', 'Schultz', '1234', 'Banbury', '1978-06-28', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '3793 Pellentesque St.', '(07) 1804 5059', '2009-06-19'),
('69', '30C83AB3-8E03-9296', 'Fritz', 'Beach', '1234', 'Rivi', '1978-06-29', 'Member', 'Cuti', 'TERITORY MANAGER', '666-5601 Vel, Rd.', '(06) 0994 7633', '2009-06-20'),
('71', '30C83AB3-8E03-9298', 'Ursa', 'Soto', '1234', 'Ferrandina', '1978-07-01', 'Admin', 'Non-Aktif', 'TRAINEE', '707-302 Felis. Rd.', '(01) 7619 2127', '2009-06-22'),
('72', '30C83AB3-8E03-9299', 'Benedict', 'Herrera', '1234', 'Hamburg', '1978-07-02', 'Admin', 'Aktif', 'JUNIOR', 'P.O. Box 221, 1153 Consectetuer Avenue', '(03) 1474 4515', '2009-06-23'),
('73', '30C83AB3-8E03-9300', 'Arthur', 'Lambert', '1234', 'Vorst', '1978-07-03', 'Member', 'Non-Aktif', 'SENIOR', 'P.O. Box 433, 9367 In Road', '(09) 2591 6866', '2008-07-03'),
('74', '30C83AB3-8E03-9301', 'Wesley', 'Copeland1', '1234', 'Guelph', '1978-07-04', 'Member', 'Cuti', 'SUPERVISOR', 'P.O. Box 866, 3673 Ut St.', '(02) 5447 7650', '2008-07-04'),
('75', '30C83AB3-8E03-9302', 'India', 'Cantu', '1234', 'Belvedere Ostrense', '1978-07-05', 'Admin', 'Aktif', 'ASISTEN MANAGER', '944 Scelerisque, Street', '(05) 7810 3523', '2008-07-05'),
('76', '30C83AB3-8E03-9303', 'Sage', 'Good', '1234', 'Attimis', '1978-07-06', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'Ap #758-5524 Libero St.', '(04) 8435 5773', '2008-07-06'),
('77', '30C83AB3-8E03-9304', 'Nina', 'Colon', '1234', 'Wuppertal', '1978-07-07', 'Member', 'Cuti', 'REGIONAL HEAD', 'Ap #604-9536 Orci, Street', '(07) 7550 3480', '2008-07-07'),
('78', '30C83AB3-8E03-9305', 'Thane', 'Kline', '1234', 'Juseret', '1978-07-08', 'Member', 'Aktif', 'TRAINEE', 'P.O. Box 218, 9853 Purus, Rd.', '(02) 9627 8040', '2008-07-08'),
('8', '30C83AB3-8E03-9235', 'Ivana', 'Frost', '1234', 'Le Cannet', '1990-04-20', 'Member', 'Non-Aktif', 'TRAINEE', '6099 Integer Avenue', '(02) 1375 8659', '2001-04-20'),
('80', '30C83AB3-8E03-9307', 'Kyra', 'Ayers', '1234', 'Montenero Val Cocchi', '1978-07-10', 'Admin', 'Aktif', 'SENIOR', '219-7630 Diam Street', '(02) 4693 8313', '2008-07-10'),
('81', '30C83AB3-8E03-9308', 'Micah', 'Morse', '1234', 'Sankt Johann im Pong', '1978-07-11', 'Member', 'Non-Aktif', 'SUPERVISOR', 'P.O. Box 864, 1453 Vulputate Rd.', '(05) 2539 5628', '2008-07-11'),
('82', '30C83AB3-8E03-9309', 'Gay', 'Tyler', '1234', 'Schiltigheim', '1978-07-12', 'Member', 'Cuti', 'ASISTEN MANAGER', 'P.O. Box 470, 3079 Ante. Ave', '(07) 6179 9650', '2008-07-12'),
('83', '30C83AB3-8E03-9310', 'Mercedes', 'Burris', '1234', 'San Giovanni Lipioni', '1978-07-13', 'Admin', 'Aktif', 'TERITORY MANAGER', '244-9265 Gravida. Street', '(03) 3591 2089', '2008-07-13'),
('84', '30C83AB3-8E03-9311', 'Kirestin', 'Melendez', '1234', 'Sint-Martens-Lennik', '1978-07-14', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'P.O. Box 411, 4405 Arcu. Street', '(07) 3907 3358', '2008-07-14'),
('85', '30C83AB3-8E03-9312', 'McKenzie', 'Ferrell', '1234', 'Otegem', '1978-07-15', 'Member', 'Cuti', 'TRAINEE', '3354 Nulla. Av.', '(03) 1976 8328', '2008-07-15'),
('86', '30C83AB3-8E03-9313', 'Kameko', 'Patton', '1234', 'Cardigan', '1978-07-16', 'Member', 'Aktif', 'JUNIOR', '6501 Consectetuer Av.', '(04) 7701 2686', '2008-07-16'),
('87', '30C83AB3-8E03-9314', 'Hall', 'Head', '1234', 'Donosti', '1978-07-17', 'Admin', 'Non-Aktif', 'SENIOR', 'P.O. Box 519, 6534 Aliquet, Avenue', '(07) 2314 9207', '2008-07-17'),
('89', '30C83AB3-8E03-9316', 'Ahmed', 'Gutierrez', '1234', 'Bernburg', '1978-07-19', 'Member', 'Non-Aktif', 'ASISTEN MANAGER', 'Ap #739-5213 Vivamus Ave', '(07) 5070 4381', '2008-07-19'),
('9', '30C83AB3-8E03-9236', 'Belle', 'Flynn', '1234', 'Carovilli', '1990-04-21', 'Admin', 'Aktif', 'JUNIOR', '718-7553 Tellus Av.', '(04) 4180 4625', '2001-04-21'),
('90', '30C83AB3-8E03-9317', 'Bree', 'Shaffer', '1234', 'Workington', '1978-07-20', 'Member', 'Cuti', 'TERITORY MANAGER', '786-2457 Euismod Road', '(08) 3941 5025', '2008-07-20'),
('91', '30C83AB3-8E03-9318', 'Mohammad', 'Moody', '1234', 'Wels', '1978-07-21', 'Admin', 'Aktif', 'REGIONAL HEAD', '402-6851 Massa Road', '(08) 2276 0767', '2008-07-21'),
('92', '30C83AB3-8E03-9319', 'Hanae', 'Mclaughlin', '1234', 'North Bay', '1978-07-22', 'Admin', 'Non-Aktif', 'TRAINEE', '7619 Sem Rd.', '(06) 3549 3119', '2008-07-22'),
('93', '30C83AB3-8E03-9320', 'Britanni', 'Leblanc', '1234', 'Rycroft', '1978-07-23', 'Member', 'Cuti', 'JUNIOR', '7777 In Road', '(04) 8046 6956', '2008-07-23'),
('94', '30C83AB3-8E03-9321', 'Sonia', 'Pena', '1234', 'Cardigan', '1978-07-24', 'Member', 'Aktif', 'SENIOR', 'Ap #688-2175 Ut St.', '(07) 1555 0535', '2008-07-24'),
('95', '30C83AB3-8E03-9322', 'Elvis', 'Montgomery', '1234', 'Laakdal', '1978-07-25', 'Admin', 'Aktif', 'SUPERVISOR', 'Ap #226-5134 In Street', '(01) 1811 8444', '2008-07-25'),
('96', '30C83AB3-8E03-9323', 'Deirdre', 'Davenport', '1234', 'Llanidloes', '1978-07-26', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '106 Rutrum Av.', '(05) 9398 7151', '2008-07-26'),
('97', '30C83AB3-8E03-9324', 'Gage', 'Hickman', '1234', 'Rapagnano', '1978-07-27', 'Member', 'Cuti', 'TERITORY MANAGER', 'Ap #284-7250 Lacus. Avenue', '(01) 8824 7390', '2008-07-27'),
('98', '30C83AB3-8E03-9325', 'Darius', 'Curry', '1234', 'Londerzeel', '1978-07-28', 'Member', 'Aktif', 'REGIONAL HEAD', 'P.O. Box 872, 6579 Pede, Road', '(08) 0018 5358', '2008-07-28'),
('99', '30C83AB3-8E03-9326', 'Troy', 'Osborn', '1234', 'Gignod', '1978-07-29', 'Admin', 'Non-Aktif', 'TRAINEE', '6023 Eu Rd.', '(03) 4018 0514', '2008-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE IF NOT EXISTS `penjadwalan` (
  `TIMEKEY` datetime NOT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `STREET` varchar(50) NOT NULL,
  `EXTENSION_ADDRESS` varchar(50) NOT NULL,
  `HOUSE_NUMBER` varchar(10) NOT NULL,
  `TIM_ID` varchar(10) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `ID_JADWAL` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_JADWAL`),
  KEY `TIM` (`TIM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`TIMEKEY`, `DESCRIPTION`, `USER_ID`, `STREET`, `EXTENSION_ADDRESS`, `HOUSE_NUMBER`, `TIM_ID`, `START_DATE`, `END_DATE`, `ID_JADWAL`) VALUES
('2013-08-01 11:03:16', 'ssssssssssssssssssss', 'm', 'Perumahan Sukolilo Park Regency', 'Blok 22', '10', 'C', '2013-08-20', '2013-08-21', 31),
('2013-08-01 11:05:45', 'adasda', 'm', 'Perumahan Sukolilo Park Regency', 'Blok 21', '23', 'C', '2013-08-19', '2013-08-29', 32),
('2013-08-01 11:06:51', 'aaaaaaaaaaaaaa', 'm', 'Keputih', 'Blok 3', 'Array', 'C', '2013-08-27', '2013-08-29', 33),
('2013-08-01 11:13:36', 'gampang', 'm', 'Keputih', 'Blok 4', 'Resource i', 'D', '2013-08-13', '2013-08-29', 34),
('2013-08-01 11:17:59', 'apaan tuh', 'm', 'Keputih', 'Blok 5', '1', 'B', '2013-08-19', '2013-08-21', 35),
('2013-08-01 11:18:39', 'apaan juga tuh', 'm', 'Keputih', 'Blok 3', '1', 'C', '2013-08-13', '2013-08-21', 36),
('2013-08-01 11:48:13', 'udin elek', 'm', 'Keputih', 'Blok 4', '1', 'B', '2013-08-27', '2013-08-30', 37),
('2013-08-01 12:43:25', 'coba bisa', 'm', 'Keputih', 'Blok 2', '1', 'C', '2013-08-02', '2013-08-10', 38),
('2013-08-01 02:04:26', 'coba2', 'm', 'Perumahan Sukolilo Park Regency', 'Blok 1', '1', 'B', '2013-08-20', '2013-08-20', 39),
('2013-08-01 02:57:49', 'aaa', 'm', 'Keputih', 'Blok 2', '1', 'B', '2013-08-19', '2013-08-22', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE IF NOT EXISTS `tim` (
  `SALES_ID` varchar(10) NOT NULL,
  `NAMA_PEGAWAI` varchar(20) NOT NULL,
  `ID_TEAM` varchar(10) NOT NULL,
  `NAMA_TEAM` varchar(20) NOT NULL,
  `SUPERVISOR` varchar(20) NOT NULL,
  PRIMARY KEY (`SALES_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`SALES_ID`, `NAMA_PEGAWAI`, `ID_TEAM`, `NAMA_TEAM`, `SUPERVISOR`) VALUES
('551', 'NURHIDAYATI HUSNA', '1', 'A', 'spv1'),
('569', 'ZUMROTUL ULA', '1', 'A', 'spv2'),
('571', 'ANDI AMIRUL HUDA', '1', 'A', 'spv3'),
('C21', 'BAYU DWI MARLINGGA', '1', 'A', 'spv4'),
('C26', 'NUR AFRI DONNY', '1', 'A', 'spv5'),
('CP8', 'SELAMET ANDRIYADI', '1', 'A', 'spv1'),
('CP9', 'IGNATIUS RUSKI JULIA', '1', 'A', 'spv2'),
('DX9', 'RICKY ARI PUTRA', '1', 'A', 'spv3'),
('DY1', 'AGUS SETIAWAN', '1', 'A', 'spv4'),
('EN1', 'AGUS HENDRIANSAH', '1', 'A', 'spv5'),
('ER8', 'SAPTO HADI', '2', 'B', 'spv1'),
('ER9', 'AGUS ARIFIN', '2', 'B', 'spv2'),
('ES1', 'ALISYAH ZAHARA YUDHA', '2', 'B', 'spv3'),
('FM9', 'DENNY FEBNUYUDIN', '2', 'B', 'spv4'),
('FN1', 'BAYU SETYAWAN', '2', 'B', 'spv5'),
('FN2', 'UMI CHOLIFAL', '2', 'B', 'spv1'),
('FN3', 'IWAN DANIEL', '2', 'B', 'spv2'),
('FN9', 'IYUT ISTIANAH', '2', 'B', 'spv3'),
('FO3', 'DWIJAYANTI', '2', 'B', 'spv4'),
('FO7', 'BAYU FREDY KURNIAWAN', '2', 'B', 'spv5'),
('FO8', 'ANDRY IRAWAN', '2', 'B', 'spv1'),
('FP2', 'DHONY PRIYO SUSANTO', '2', 'B', 'spv2'),
('FP7', 'SANDY BUANA', '2', 'B', 'spv3'),
('FP8', 'ADITYA WARDHANA', '3', 'C', 'spv4'),
('FW7', 'ANDRY PRASETYA', '3', 'C', 'spv5'),
('FW8', 'CHANDRA EDDY PRASETY', '3', 'C', 'spv1'),
('FX1', 'NAIM BEY ASMARA', '3', 'C', 'spv2'),
('FX4', 'JOKO FIRMAN PRASETYO', '3', 'C', 'spv3'),
('FY9', 'ANDREAS JATMIKO', '3', 'C', 'spv4'),
('GB5', 'MOH. MAHFUDZ', '3', 'C', 'spv5'),
('GD6', 'RONY STEVASON', '3', 'C', 'spv1'),
('GD9', 'DWI ANGGORO S', '3', 'C', 'spv2'),
('GE4', 'ZAENUL ABIDIN', '3', 'C', 'spv3'),
('GN7', 'TAUFAN CHRISTANTO', '3', 'C', 'spv4'),
('GN9', 'EKA MAHAPUTRA', '3', 'C', 'spv5'),
('GO2', 'RONALD CARLOS G', '3', 'C', 'spv1'),
('GO4', 'VENTI REDIA PUTERI', '4', 'D', 'spv2'),
('GQ7', 'FAJAR NUR AMRI HUDA', '4', 'D', 'spv3'),
('GR3', 'ARIES KUSWANTO', '4', 'D', 'spv4'),
('GS5', 'YOSEP ALEXANDER PATT', '4', 'D', 'spv5'),
('GV1', 'BARSITO', '4', 'D', 'spv1'),
('GV4', 'YANI SUPRIYANTO', '4', 'D', 'spv2'),
('GV5', 'MUALIMIN', '4', 'D', 'spv3'),
('GX2', 'BIMANTARA RACHMAN NA', '4', 'D', 'spv4'),
('GX6', 'AHMAD HABIBI', '4', 'D', 'spv5'),
('GX7', 'SUPRIYONO RIO NUGROH', '4', 'D', 'spv1'),
('GX9', 'ATHEA SABATA', '4', 'D', 'spv2'),
('HE2', 'AMALIA FARINA', '4', 'D', 'spv3'),
('HE7', 'RICO ANDREAS', '4', 'D', 'spv4'),
('HE8', 'SLASMET HERIYANTO', '5', 'E', 'spv5'),
('HE9', 'DHIVRACCA CHEYENE', '5', 'E', 'spv1'),
('HH4', 'MURSIDI', '5', 'E', 'spv2'),
('HH6', 'MUHAMMAD NASHIR FUAD', '5', 'E', 'spv3'),
('HI1', 'RADITYO KOES HENDYAN', '5', 'E', 'spv4'),
('HI3', 'ANUGRAH PERDANA KUSU', '5', 'E', 'spv5'),
('HI4', 'RINALDY EKA ADE ANUG', '5', 'E', 'spv1'),
('HI5', 'MOCH NIKI RINALDI', '5', 'E', 'spv2'),
('HI6', 'KIDUNG BAHANA PUTRA', '5', 'E', 'spv3'),
('HJ2', 'OSCAR ANGJAYA', '5', 'E', 'spv4'),
('HJ3', 'YANI PRASTYO', '5', 'E', 'spv5'),
('HR2', 'BAYU GINANJAR', '5', 'E', 'spv1'),
('HS1', 'ISHAK', '5', 'E', 'spv2'),
('HT5', 'SOFWAN ZAERONI', '6', 'F', 'spv3'),
('HT6', 'LUQMAN EKO SUSANTO', '6', 'F', 'spv4'),
('HT7', 'AHMAD THOHIR', '6', 'F', 'spv5'),
('HU1', 'HERMAWATI SELVI', '6', 'F', 'spv1'),
('HU2', 'DODIK OKTAVIALDI', '6', 'F', 'spv2'),
('HV2', 'ANDI JULIANTO', '6', 'F', 'spv3'),
('HV3', 'BADERUL QOMAR', '6', 'F', 'spv4'),
('HV4', 'ONYX RADIANT', '6', 'F', 'spv5'),
('HV6', 'SURYONO', '6', 'F', 'spv1'),
('HV7', 'AYU WULAN MITA', '6', 'F', 'spv2'),
('HV8', 'SEPTI NURHALIFAH', '6', 'F', 'spv3'),
('HW1', 'WAWAN KUSTIAWAN', '6', 'F', 'spv4'),
('HW3', 'NIKEN PUTRI ANDRIASW', '6', 'F', 'spv5'),
('HW4', 'ROSSY APRIANA TIAN', '7', 'G', 'spv1'),
('HW5', 'HERU WIBOWO', '7', 'G', 'spv2'),
('HW6', 'SUGIYARTO', '7', 'G', 'spv3'),
('HY7', 'LIEM AGUSTINUS SANTO', '7', 'G', 'spv4'),
('IA1', 'ALIT AGUNG WAHYUDI', '7', 'G', 'spv5'),
('IA2', 'ABDUL ROKHMAN', '7', 'G', 'spv1'),
('IA3', 'MOCH.RIDWAN', '7', 'G', 'spv2'),
('IA4', 'SYAHRUL PERDANA KUSU', '7', 'G', 'spv3'),
('IA5', 'SETYAWAN SAPUTRA', '7', 'G', 'spv4'),
('IA6', 'HERY WAHYUDI', '7', 'G', 'spv5'),
('IA7', 'BAGUS RAHMAT SAPUTRA', '7', 'G', 'spv1'),
('IB2', 'BAGUS FENDY FACHRULL', '7', 'G', 'spv2'),
('IB3', 'DANI AGUS SAIFUL UDI', '7', 'G', 'spv3'),
('IB4', 'RICKY SETYA WIBAWA', '7', 'G', 'spv4'),
('IB8', 'USWATUN YUSROH', '8', 'H', 'spv5'),
('IB9', 'SULISWANTO', '8', 'H', 'spv1'),
('IC3', 'TRI WIDIYANTORO', '8', 'H', 'spv2'),
('IC5', 'BETRIS KURNIA', '8', 'H', 'spv3'),
('IC6', 'HAFID ALHUDAIN', '8', 'H', 'spv4'),
('ID3', 'YANU ARIYANTO', '8', 'H', 'spv5'),
('IF6', 'SUHARTONO', '8', 'H', 'spv1'),
('IF8', 'AGIL ASHELY', '8', 'H', 'spv2'),
('IF9', 'ARIANDA HERMAWAN', '8', 'H', 'spv3'),
('IG1', 'AGUNG WAHYU WITOKO', '8', 'H', 'spv4'),
('IG2', 'HENRY NOVA ADITYA', '8', 'H', 'spv5'),
('IG3', 'FAJAR NURDIANSYAH', '8', 'H', 'spv1'),
('IG7', 'ANNO PANDU DEWANATA', '8', 'H', 'spv2'),
('IH2', 'MARYONO ANTON WAHYUD', '9', 'I', 'spv3'),
('IH3', 'ACHMAD YUSRON', '9', 'I', 'spv4'),
('IH5', 'KALEB FINNEY SITINJA', '9', 'I', 'spv5'),
('IH6', 'PANCA NOVA SADEWO', '9', 'I', 'spv1'),
('II1', 'ERIK SUNARJIANTO', '9', 'I', 'spv2'),
('II2', 'SOLIKAN MICKAN', '9', 'I', 'spv3'),
('II3', 'MIRA ENDRIYANA', '9', 'I', 'spv4'),
('II5', 'SIGIT WIBOWO', '9', 'I', 'spv5'),
('II6', 'SUHARTINI', '9', 'I', 'spv1'),
('II7', 'MOCH. MUHARAMSYAH YU', '9', 'I', 'spv2'),
('II8', 'I DJAKA SAWUNG DJATI', '9', 'I', 'spv3'),
('II9', 'ANDHIKA DWI PUTRA', '9', 'I', 'spv4'),
('IJ3', 'YUSTINUS ESTHI ELYAN', '9', 'I', 'spv5'),
('IJ5', 'BATARA SAKTI SINAGA', '10', 'J', 'spv1'),
('IJ6', 'EDDO PERWIRA ADI PRA', '10', 'J', 'spv2'),
('IJ7', 'SANSUGENG WINARTO', '10', 'J', 'spv3'),
('IJ8', 'BERLIAN ADRIANO SAPU', '10', 'J', 'spv4'),
('IJ9', 'CHOIRUL NAIM MUSTOFA', '10', 'J', 'spv5'),
('IK8', 'FARUK BADJEBER', '10', 'J', 'spv1'),
('IO2', 'ANINDHITO RIZKYANSYA', '10', 'J', 'spv2'),
('IO3', 'WIDYA SETYAMAHENDRA', '10', 'J', 'spv3'),
('IO5', 'FERRIZKY MICHAEL R.F', '10', 'J', 'spv4'),
('IO6', 'SOFIANSYAH', '10', 'J', 'spv5'),
('IO7', 'RYAN EDDY PRAMONO', '10', 'J', 'spv1'),
('IO9', 'MUHAMMAD GUFRON', '10', 'J', 'spv2'),
('IP1', 'M YUSUF ROFIQU', '11', 'K', 'spv3'),
('IV8', 'MUHAMMAD MARIO ABDIL', '11', 'K', 'spv4'),
('IV9', 'YEHEZKIEL AUDY', '11', 'K', 'spv5'),
('IX1', 'HARRIS KISTRI PUTRA', '11', 'K', 'spv1'),
('IX2', 'ANDREAS BUDIYANTO', '11', 'K', 'spv2'),
('IX3', 'RULLY SETIONO', '11', 'K', 'spv3'),
('IX4', 'ALDO RIZKY NOVIANTO', '11', 'K', 'spv4'),
('IX6', 'SETYA BUDI PURNOMO', '11', 'K', 'spv5'),
('IX8', 'MOCHAMMAD AUNUR ROFI', '11', 'K', 'spv1'),
('IX9', 'HENDRY SUWINTA', '11', 'K', 'spv2'),
('IY1', 'IVAN TAUFIK ROHMAN', '11', 'K', 'spv3'),
('IY3', 'ZULFI RAMADHAN', '11', 'K', 'spv4'),
('IY4', 'ANDRI SISWANTO', '12', 'L', 'spv5'),
('JA6', 'VARIDA PERMATA SARI', '12', 'L', 'spv1'),
('JA7', 'SELLY MITA SARI', '12', 'L', 'spv2'),
('JA8', 'PIPIT EKA', '12', 'L', 'spv3'),
('JB1', 'ANITA JUWITA SARI', '12', 'L', 'spv4'),
('JD8', 'SAIFUL ARIF', '12', 'L', 'spv5'),
('JG2', 'WASISTO MEDIAR DUTO ', '12', 'L', 'spv1'),
('JG4', 'MUHAMMAD BIN HIDAYAT', '12', 'L', 'spv2'),
('JG7', 'KISWORO AGUNG PAMBUD', '12', 'L', 'spv3'),
('JG8', 'OKY KUMALA', '12', 'L', 'spv4'),
('M55', 'NANING PUJIATI', '12', 'L', 'spv5'),
('N26', 'LUKITO PRIYO', '12', 'L', 'spv1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
