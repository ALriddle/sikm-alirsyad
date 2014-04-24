-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2014 at 05:51 PM
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
-- Table structure for table `data_transaksi_kas`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_kas` (
  `NO_TRANSAKSI_KAS` varchar(10) NOT NULL,
  `KODE_KAS` varchar(10) NOT NULL,
  `TANGGAL_KAS` date NOT NULL,
  `MASUK_KAS` int(20) NOT NULL,
  `KELUAR_KAS` int(20) NOT NULL,
  `SALDO_KAS` int(20) NOT NULL,
  `SALDO_TOTAL_KAS` int(20) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  PRIMARY KEY (`NO_TRANSAKSI_KAS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_kas`
--

INSERT INTO `data_transaksi_kas` (`NO_TRANSAKSI_KAS`, `KODE_KAS`, `TANGGAL_KAS`, `MASUK_KAS`, `KELUAR_KAS`, `SALDO_KAS`, `SALDO_TOTAL_KAS`, `KETERANGAN`) VALUES
('4', 'KB', '2014-04-13', 0, 150000, 0, 0, 'Kajian Bulanan'),
('3', 'DT', '2014-04-13', 2000000, 0, 0, 0, 'Donatur Tetap'),
('2', 'DT', '2014-04-11', 0, 100000, 0, 0, 'Donatur Tetap'),
('1', 'IB', '2014-04-11', 1000000, 0, 0, 0, 'Infaq Bulanan'),
('5', 'KB', '2014-04-15', 1500000, 0, 0, 0, 'Kajian Bulanan'),
('6', 'CS', '2014-04-15', 0, 20000, 0, 0, 'Cleaning Service'),
('7', 'CS', '2014-04-17', 2500000, 0, 0, 0, 'Cleaning Service'),
('8', 'IB', '2014-04-17', 0, 250000, 0, 0, 'Infaq Bulanan'),
('9', 'IB', '2014-04-19', 2750000, 0, 0, 0, 'Infaq Bulanan'),
('10', 'DT', '2014-04-19', 0, 100000, 0, 0, 'Donatur Tetap'),
('11', 'KB', '2014-04-21', 0, 154000, 0, 0, 'Kajian Bulanan'),
('12', 'CS', '2014-04-23', 0, 164000, 0, 0, 'Cleaning Service'),
('13', 'IB', '2014-04-25', 0, 174000, 0, 0, 'Infaq Bulanan'),
('14', 'DT', '2014-04-27', 0, 184000, 0, 0, 'Donatur Tetap'),
('15', 'KB', '2014-04-29', 0, 194000, 0, 0, 'Kajian Bulanan'),
('16', 'CS', '2014-05-01', 0, 204000, 0, 0, 'Cleaning Service'),
('17', 'IB', '2014-05-03', 0, 214000, 0, 0, 'Infaq Bulanan'),
('18', 'DT', '2014-05-05', 0, 224000, 0, 0, 'Donatur Tetap'),
('19', 'KB', '2014-05-07', 0, 234000, 0, 0, 'Kajian Bulanan'),
('20', 'CS', '2014-05-09', 0, 244000, 0, 0, 'Cleaning Service'),
('21', 'IB', '2014-05-11', 0, 254000, 0, 0, 'Infaq Bulanan'),
('22', 'DT', '2014-05-13', 0, 264000, 0, 0, 'Donatur Tetap'),
('23', 'KB', '2014-05-15', 0, 274000, 0, 0, 'Kajian Bulanan'),
('24', 'CS', '2014-05-17', 0, 284000, 0, 0, 'Cleaning Service'),
('25', 'IB', '2014-05-19', 0, 294000, 0, 0, 'Infaq Bulanan'),
('26', 'DT', '2014-05-31', 11150000, 0, 0, 0, 'Donatur Tetap'),
('27', 'KB', '2014-06-02', 11550000, 0, 0, 0, 'Kajian Bulanan'),
('28', 'CS', '2014-06-04', 11950000, 0, 0, 0, 'Cleaning Service'),
('29', 'IB', '2014-06-06', 12350000, 0, 0, 0, 'Infaq Bulanan'),
('30', 'DT', '2014-06-08', 12750000, 0, 0, 0, 'Donatur Tetap'),
('31', 'KB', '2014-06-10', 13150000, 0, 0, 0, 'Kajian Bulanan'),
('32', 'CS', '2014-06-12', 13550000, 0, 0, 0, 'Cleaning Service'),
('33', 'IB', '2014-06-14', 13950000, 0, 0, 0, 'Infaq Bulanan'),
('34', 'DT', '2014-06-16', 14350000, 0, 0, 0, 'Donatur Tetap'),
('35', 'KB', '2014-06-18', 14750000, 0, 0, 0, 'Kajian Bulanan'),
('36', 'CS', '2014-06-20', 15150000, 0, 0, 0, 'Cleaning Service'),
('37', 'IB', '2014-06-22', 15550000, 0, 0, 0, 'Infaq Bulanan'),
('38', 'DT', '2014-06-24', 15950000, 0, 0, 0, 'Donatur Tetap'),
('39', 'KB', '2014-06-26', 16350000, 0, 0, 0, 'Kajian Bulanan'),
('40', 'CS', '2014-06-28', 16750000, 0, 0, 0, 'Cleaning Service'),
('41', 'IB', '2014-06-30', 17150000, 0, 0, 0, 'Infaq Bulanan'),
('42', 'DT', '2014-07-02', 17550000, 0, 0, 0, 'Donatur Tetap'),
('43', 'KB', '2014-07-04', 17950000, 0, 0, 0, 'Kajian Bulanan'),
('44', 'DT', '2014-08-03', 0, 544000, 0, 0, 'Donatur Tetap'),
('45', 'KB', '2014-08-05', 0, 554000, 0, 0, 'Kajian Bulanan'),
('46', 'CS', '2014-08-07', 24750000, 0, 0, 0, 'Cleaning Service'),
('47', 'IB', '2014-08-09', 25150000, 0, 0, 0, 'Infaq Bulanan'),
('48', 'DT', '2014-08-11', 25550000, 0, 0, 0, 'Donatur Tetap'),
('49', 'KB', '2014-08-13', 25950000, 0, 0, 0, 'Kajian Bulanan'),
('50', 'CS', '2014-08-15', 26350000, 0, 0, 0, 'Cleaning Service'),
('51', 'IB', '2014-08-17', 26750000, 0, 0, 0, 'Infaq Bulanan'),
('52', 'DT', '2014-08-19', 27150000, 0, 0, 0, 'Donatur Tetap'),
('53', 'KB', '2014-08-21', 27550000, 0, 0, 0, 'Kajian Bulanan'),
('54', 'CS', '2014-08-23', 27950000, 0, 0, 0, 'Cleaning Service'),
('55', 'IB', '2014-08-25', 28350000, 0, 0, 0, 'Infaq Bulanan'),
('56', 'DT', '2014-08-27', 28750000, 0, 0, 0, 'Donatur Tetap'),
('57', 'KB', '2014-08-29', 29150000, 0, 0, 0, 'Kajian Bulanan'),
('58', 'CS', '2014-08-31', 29550000, 0, 0, 0, 'Cleaning Service'),
('59', 'IB', '2014-09-02', 29950000, 0, 0, 0, 'Infaq Bulanan'),
('60', 'DT', '2014-09-04', 30350000, 0, 0, 0, 'Donatur Tetap'),
('61', 'KB', '2014-09-06', 30750000, 0, 0, 0, 'Kajian Bulanan'),
('62', 'CS', '2014-09-08', 31150000, 0, 0, 0, 'Cleaning Service'),
('63', 'IB', '2014-09-10', 31550000, 0, 0, 0, 'Infaq Bulanan'),
('64', 'CS', '2014-09-12', 0, 404000, 0, 0, 'Cleaning Service'),
('65', 'DT', '2014-09-12', 31950000, 0, 0, 0, 'Donatur Tetap'),
('66', 'IB', '2014-09-14', 0, 414000, 0, 0, 'Infaq Bulanan'),
('67', 'KB', '2014-09-14', 32350000, 0, 0, 0, 'Kajian Bulanan'),
('68', 'DT', '2014-09-16', 0, 424000, 0, 0, 'Donatur Tetap'),
('69', 'CS', '2014-09-16', 32750000, 0, 0, 0, 'Cleaning Service'),
('70', 'KB', '2014-09-18', 0, 434000, 0, 0, 'Kajian Bulanan'),
('71', 'IB', '2014-09-18', 33150000, 0, 0, 0, 'Infaq Bulanan'),
('72', 'CS', '2014-09-20', 0, 444000, 0, 0, 'Cleaning Service'),
('73', 'DT', '2014-09-20', 33550000, 0, 0, 0, 'Donatur Tetap'),
('74', 'IB', '2014-09-22', 0, 454000, 0, 0, 'Infaq Bulanan'),
('75', 'KB', '2014-09-22', 33950000, 0, 0, 0, 'Kajian Bulanan'),
('76', 'DT', '2014-09-24', 0, 464000, 0, 0, 'Donatur Tetap'),
('77', 'CS', '2014-09-24', 34350000, 0, 0, 0, 'Cleaning Service'),
('78', 'KB', '2014-09-26', 0, 474000, 0, 0, 'Kajian Bulanan'),
('79', 'IB', '2014-09-26', 34750000, 0, 0, 0, 'Infaq Bulanan'),
('80', 'CS', '2014-09-28', 0, 484000, 0, 0, 'Cleaning Service'),
('81', 'DT', '2014-09-28', 35150000, 0, 0, 0, 'Donatur Tetap'),
('82', 'IB', '2014-09-30', 0, 494000, 0, 0, 'Infaq Bulanan'),
('83', 'KB', '2014-09-30', 35550000, 0, 0, 0, 'Kajian Bulanan'),
('84', 'DT', '2014-10-02', 0, 504000, 0, 0, 'Donatur Tetap'),
('85', 'CS', '2014-10-02', 35950000, 0, 0, 0, 'Cleaning Service'),
('86', 'KB', '2014-10-04', 0, 514000, 0, 0, 'Kajian Bulanan'),
('87', 'IB', '2014-10-04', 36350000, 0, 0, 0, 'Infaq Bulanan'),
('88', 'CS', '2014-10-06', 0, 524000, 0, 0, 'Cleaning Service'),
('89', 'DT', '2014-10-06', 36750000, 0, 0, 0, 'Donatur Tetap'),
('90', 'IB', '2014-10-08', 0, 534000, 0, 0, 'Infaq Bulanan'),
('91', 'KB', '2014-10-08', 37150000, 0, 0, 0, 'Kajian Bulanan'),
('92', 'CS', '2014-10-10', 37550000, 0, 0, 0, 'Cleaning Service'),
('93', 'IB', '2014-10-12', 37950000, 0, 0, 0, 'Infaq Bulanan'),
('94', 'DT', '2014-10-14', 38350000, 0, 0, 0, 'Donatur Tetap'),
('95', 'KB', '2014-10-16', 38750000, 0, 0, 0, 'Kajian Bulanan'),
('96', 'CS', '2014-10-18', 39150000, 0, 0, 0, 'Cleaning Service'),
('97', 'IB', '2014-10-20', 39550000, 0, 0, 0, 'Infaq Bulanan'),
('98', 'DT', '2014-10-22', 39950000, 0, 0, 0, 'Donatur Tetap'),
('99', 'KB', '2014-10-24', 40350000, 0, 0, 0, 'Kajian Bulanan'),
('100', 'CS', '2014-10-26', 40750000, 0, 0, 0, 'Cleaning Service');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
