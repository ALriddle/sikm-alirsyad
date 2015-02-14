-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2015 at 10:28 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sales_act2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `kategory_pengeluaran` (
  `KODE_PENGELUARAN` varchar(50) NOT NULL,
  `NAMA_PENGELUARAN` varchar(50) NOT NULL,
  PRIMARY KEY (`KODE_PENGELUARAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pengeluaran`
--

INSERT INTO `kategory_pengeluaran` (`KODE_PENGELUARAN`, `NAMA_PENGELUARAN`) VALUES
('5103', 'KEPERLUAN KANTOR'),
('5102', 'INSENTIF'),
('5101', 'GAJI KARYAWAN'),
('5104', 'TRANSPORTASI'),
('5105', 'RENOVASI'),
('5106', 'DAKWAH'),
('5107', 'AKOMODASI'),
('5108', 'KONSUMSI'),
('5109', 'BIAYA TELEPON'),
('5110', 'PULSA SMS CENTER'),
('5111', 'BIAYA ADMINISTRASI BANK'),
('1101', 'TARIKAN TUNAI'),
('1102', 'SETORAN BANK'),
('5112', 'BIAYA LAIN-LAIN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
