-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2014 at 09:16 PM
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
-- Table structure for table `data_transaksi_bank`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_bank` (
  `NO_TRANSAKSI_BANK` varchar(10) NOT NULL,
  `KODE_BANK` varchar(10) NOT NULL,
  `TANGGAL_BANK` date NOT NULL,
  `MASUK_BANK` int(20) NOT NULL,
  `KELUAR_BANK` int(20) NOT NULL,
  `SALDO_BANK` int(20) NOT NULL,
  `SALDO_TOTAL_BANK` int(20) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  PRIMARY KEY (`NO_TRANSAKSI_BANK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_bank`
--

INSERT INTO `data_transaksi_bank` (`NO_TRANSAKSI_BANK`, `KODE_BANK`, `TANGGAL_BANK`, `MASUK_BANK`, `KELUAR_BANK`, `SALDO_BANK`, `SALDO_TOTAL_BANK`, `KETERANGAN`) VALUES
('2', 'DT', '2014-04-13', 2000000, 0, 0, 0, 'Donatur Tetap'),
('1', 'IB', '2014-04-11', 10000000, 0, 0, 0, 'Infaq Bulanan'),
('101', 'CJ', '2014-04-03', 100000, 0, 0, 0, 'Celengan Jumat Mei'),
('3', 'KB', '2014-04-15', 1500000, 0, 0, 0, 'Kajian Bulanan'),
('4', 'CS', '2014-04-17', 25000000, 0, 0, 0, 'Cleaning Service'),
('5', 'IB', '2014-04-19', 2750000, 0, 0, 0, 'Infaq Bulanan'),
('6', 'DT', '2014-04-21', 3150000, 0, 0, 0, 'Donatur Tetap'),
('7', 'KB', '2014-04-23', 3550000, 0, 0, 0, 'Kajian Bulanan'),
('8', 'CS', '2014-04-25', 39500000, 0, 0, 0, 'Cleaning Service'),
('9', 'IB', '2014-04-27', 4350000, 0, 0, 0, 'Infaq Bulanan'),
('10', 'DT', '2014-04-29', 4750000, 0, 0, 0, 'Donatur Tetap'),
('11', 'KB', '2014-05-01', 5150000, 0, 0, 0, 'Kajian Bulanan'),
('12', 'CS', '2014-05-03', 65500000, 0, 0, 0, 'Cleaning Service'),
('13', 'IB', '2014-05-05', 59500000, 0, 0, 0, 'Infaq Bulanan'),
('14', 'DT', '2014-05-07', 6350000, 0, 0, 0, 'Donatur Tetap'),
('15', 'KB', '2014-05-09', 6750000, 0, 0, 0, 'Kajian Bulanan'),
('16', 'CS', '2014-05-11', 7150000, 0, 0, 0, 'Cleaning Service'),
('17', 'IB', '2014-05-13', 7550000, 0, 0, 0, 'Infaq Bulanan'),
('18', 'DT', '2014-05-15', 7950000, 0, 0, 0, 'Donatur Tetap'),
('19', 'KB', '2014-05-17', 8350000, 0, 0, 0, 'Kajian Bulanan'),
('20', 'CS', '2014-05-19', 87500000, 0, 0, 0, 'Cleaning Service'),
('21', 'IB', '2014-05-21', 9150000, 0, 0, 0, 'Infaq Bulanan'),
('22', 'DT', '2014-05-23', 9550000, 0, 0, 0, 'Donatur Tetap'),
('23', 'DT', '2014-05-23', 0, 594000, 0, 0, 'Donatur Tetap'),
('24', 'KB', '2014-05-25', 9950000, 0, 0, 0, 'Kajian Bulanan'),
('25', 'KB', '2014-05-25', 0, 6040000, 0, 0, 'Kajian Bulanan'),
('26', 'CS', '2014-05-27', 10350000, 0, 0, 0, 'Cleaning Service'),
('27', 'CS', '2014-05-27', 0, 614000, 0, 0, 'Cleaning Service'),
('28', 'IB', '2014-05-29', 10750000, 0, 0, 0, 'Infaq Bulanan'),
('29', 'IB', '2014-05-29', 0, 624000, 0, 0, 'Infaq Bulanan'),
('30', 'DT', '2014-05-31', 111500000, 0, 0, 0, 'Donatur Tetap'),
('31', 'DT', '2014-05-31', 0, 634000, 0, 0, 'Donatur Tetap'),
('32', 'KB', '2014-06-02', 11550000, 0, 0, 0, 'Kajian Bulanan'),
('33', 'KB', '2014-06-02', 0, 64400000, 0, 0, 'Kajian Bulanan'),
('34', 'CS', '2014-06-04', 11950000, 0, 0, 0, 'Cleaning Service'),
('35', 'CS', '2014-06-04', 0, 654000, 0, 0, 'Cleaning Service'),
('36', 'IB', '2014-06-06', 12350000, 0, 0, 0, 'Infaq Bulanan'),
('37', 'IB', '2014-06-06', 0, 664000, 0, 0, 'Infaq Bulanan'),
('38', 'DT', '2014-06-08', 12750000, 0, 0, 0, 'Donatur Tetap'),
('39', 'DT', '2014-06-08', 0, 674000, 0, 0, 'Donatur Tetap'),
('40', 'KB', '2014-06-10', 13150000, 0, 0, 0, 'Kajian Bulanan'),
('41', 'KB', '2014-06-10', 0, 684000, 0, 0, 'Kajian Bulanan'),
('42', 'CS', '2014-06-12', 13550000, 0, 0, 0, 'Cleaning Service'),
('43', 'IB', '2014-06-14', 139500000, 0, 0, 0, 'Infaq Bulanan'),
('44', 'DT', '2014-06-16', 14350000, 0, 0, 0, 'Donatur Tetap'),
('45', 'KB', '2014-06-18', 14750000, 0, 0, 0, 'Kajian Bulanan'),
('46', 'CS', '2014-06-20', 15150000, 0, 0, 0, 'Cleaning Service'),
('47', 'IB', '2014-06-22', 15550000, 0, 0, 0, 'Infaq Bulanan'),
('48', 'IB', '2014-07-08', 18750000, 0, 0, 0, 'Infaq Bulanan'),
('49', 'DT', '2014-07-10', 19150000, 0, 0, 0, 'Donatur Tetap'),
('50', 'KB', '2014-07-12', 19550000, 0, 0, 0, 'Kajian Bulanan'),
('51', 'CS', '2014-07-14', 19950000, 0, 0, 0, 'Cleaning Service'),
('52', 'IB', '2014-07-16', 203500000, 0, 0, 0, 'Infaq Bulanan'),
('53', 'CS', '2014-08-07', 0, 6940000, 0, 0, 'Cleaning Service'),
('54', 'IB', '2014-08-09', 0, 704000, 0, 0, 'Infaq Bulanan'),
('55', 'DT', '2014-08-11', 0, 714000, 0, 0, 'Donatur Tetap'),
('56', 'KB', '2014-08-13', 0, 724000, 0, 0, 'Kajian Bulanan'),
('57', 'CS', '2014-08-15', 0, 7340000, 0, 0, 'Cleaning Service'),
('58', 'DT', '2014-08-17', 15950000, 0, 0, 0, 'Donatur Tetap'),
('59', 'IB', '2014-08-17', 0, 744000, 0, 0, 'Infaq Bulanan'),
('60', 'KB', '2014-08-19', 16350000, 0, 0, 0, 'Kajian Bulanan'),
('61', 'DT', '2014-08-19', 0, 754000, 0, 0, 'Donatur Tetap'),
('62', 'CS', '2014-08-21', 16750000, 0, 0, 0, 'Cleaning Service'),
('63', 'KB', '2014-08-21', 0, 764000, 0, 0, 'Kajian Bulanan'),
('64', 'IB', '2014-08-23', 171500000, 0, 0, 0, 'Infaq Bulanan'),
('65', 'CS', '2014-08-23', 0, 774000, 0, 0, 'Cleaning Service'),
('66', 'DT', '2014-08-25', 17550000, 0, 0, 0, 'Donatur Tetap'),
('67', 'IB', '2014-08-25', 0, 784000, 0, 0, 'Infaq Bulanan'),
('68', 'KB', '2014-08-27', 17950000, 0, 0, 0, 'Kajian Bulanan'),
('69', 'DT', '2014-08-27', 0, 794000, 0, 0, 'Donatur Tetap'),
('70', 'CS', '2014-08-29', 18350000, 0, 0, 0, 'Cleaning Service'),
('71', 'KB', '2014-08-29', 0, 804000, 0, 0, 'Kajian Bulanan'),
('72', 'CS', '2014-08-31', 0, 814000, 0, 0, 'Cleaning Service'),
('73', 'IB', '2014-09-02', 0, 824000, 0, 0, 'Infaq Bulanan'),
('74', 'DT', '2014-09-04', 0, 834000, 0, 0, 'Donatur Tetap'),
('75', 'KB', '2014-09-06', 0, 844000, 0, 0, 'Kajian Bulanan'),
('76', 'CS', '2014-09-08', 0, 854000, 0, 0, 'Cleaning Service'),
('77', 'IB', '2014-09-10', 0, 864000, 0, 0, 'Infaq Bulanan'),
('78', 'DT', '2014-09-12', 0, 8740000, 0, 0, 'Donatur Tetap'),
('79', 'KB', '2014-09-14', 0, 884000, 0, 0, 'Kajian Bulanan'),
('80', 'CS', '2014-09-16', 0, 894000, 0, 0, 'Cleaning Service'),
('81', 'IB', '2014-09-18', 0, 904000, 0, 0, 'Infaq Bulanan'),
('82', 'DT', '2014-09-20', 0, 914000, 0, 0, 'Donatur Tetap'),
('83', 'KB', '2014-09-22', 0, 924000, 0, 0, 'Kajian Bulanan'),
('84', 'CS', '2014-09-24', 0, 934000, 0, 0, 'Cleaning Service'),
('85', 'IB', '2014-09-26', 0, 9440000, 0, 0, 'Infaq Bulanan'),
('86', 'DT', '2014-09-28', 0, 954000, 0, 0, 'Donatur Tetap'),
('87', 'KB', '2014-09-30', 0, 964000, 0, 0, 'Kajian Bulanan'),
('88', 'CS', '2014-10-02', 0, 9740000, 0, 0, 'Cleaning Service'),
('89', 'IB', '2014-10-04', 0, 984000, 0, 0, 'Infaq Bulanan'),
('90', 'DT', '2014-10-06', 0, 994000, 0, 0, 'Donatur Tetap'),
('91', 'KB', '2014-10-08', 0, 1004000, 0, 0, 'Kajian Bulanan'),
('92', 'CS', '2014-10-10', 0, 1014000, 0, 0, 'Cleaning Service'),
('93', 'IB', '2014-10-12', 0, 1024000, 0, 0, 'Infaq Bulanan'),
('94', 'DT', '2014-10-14', 0, 103400000, 0, 0, 'Donatur Tetap'),
('95', 'KB', '2014-10-16', 0, 1044000, 0, 0, 'Kajian Bulanan'),
('96', 'CS', '2014-10-18', 0, 10540000, 0, 0, 'Cleaning Service'),
('97', 'IB', '2014-10-20', 0, 1064000, 0, 0, 'Infaq Bulanan'),
('98', 'DT', '2014-10-22', 0, 1074000, 0, 0, 'Donatur Tetap'),
('99', 'KB', '2014-10-24', 0, 1084000, 0, 0, 'Kajian Bulanan'),
('100', 'GJ', '2014-04-22', 0, 50000, 0, 0, 'Gaji Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi_donatur`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_donatur` (
  `ID_TRANSAKSI` varchar(20) NOT NULL,
  `TANGGAL_TRANSAKSI` date NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI_L` bigint(20) NOT NULL,
  `JUMLAH_DONASI_TL` bigint(20) NOT NULL,
  `KODE_DONATUR` varchar(50) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_donatur`
--

INSERT INTO `data_transaksi_donatur` (`ID_TRANSAKSI`, `TANGGAL_TRANSAKSI`, `NAMA_DONATUR`, `JUMLAH_DONASI_L`, `JUMLAH_DONASI_TL`, `KODE_DONATUR`, `KETERANGAN`) VALUES
('1', '2014-04-02', 'Muhammad', 100000000, 0, 'IDT', 'coba'),
('4', '2014-05-06', 'Dian', 100000000, 0, 'Donatur Tetap', 'akhir Bulan'),
('5', '2014-05-07', 'Muhammad', 0, 4000, 'MHD', 'awal Bulan');

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
('85', 'CS', '2014-10-02', 35950000, 0, 0, 0, 'Cleaning Service'),
('84', 'DT', '2014-10-02', 0, 504000, 0, 0, 'Donatur Tetap'),
('83', 'KB', '2014-09-30', 35550000, 0, 0, 0, 'Kajian Bulanan'),
('82', 'IB', '2014-09-30', 0, 494000, 0, 0, 'Infaq Bulanan'),
('81', 'DT', '2014-09-28', 35150000, 0, 0, 0, 'Donatur Tetap'),
('80', 'CS', '2014-09-28', 0, 484000, 0, 0, 'Cleaning Service'),
('79', 'IB', '2014-09-26', 34750000, 0, 0, 0, 'Infaq Bulanan'),
('78', 'KB', '2014-09-26', 0, 474000, 0, 0, 'Kajian Bulanan'),
('77', 'CS', '2014-09-24', 34350000, 0, 0, 0, 'Cleaning Service'),
('76', 'DT', '2014-09-24', 0, 464000, 0, 0, 'Donatur Tetap'),
('75', 'KB', '2014-09-22', 33950000, 0, 0, 0, 'Kajian Bulanan'),
('74', 'IB', '2014-09-22', 0, 454000, 0, 0, 'Infaq Bulanan'),
('73', 'DT', '2014-09-20', 33550000, 0, 0, 0, 'Donatur Tetap'),
('72', 'CS', '2014-09-20', 0, 444000, 0, 0, 'Cleaning Service'),
('71', 'IB', '2014-09-18', 33150000, 0, 0, 0, 'Infaq Bulanan'),
('70', 'KB', '2014-09-18', 0, 434000, 0, 0, 'Kajian Bulanan'),
('69', 'CS', '2014-09-16', 32750000, 0, 0, 0, 'Cleaning Service'),
('68', 'DT', '2014-09-16', 0, 424000, 0, 0, 'Donatur Tetap'),
('67', 'KB', '2014-09-14', 32350000, 0, 0, 0, 'Kajian Bulanan'),
('66', 'IB', '2014-09-14', 0, 414000, 0, 0, 'Infaq Bulanan'),
('65', 'DT', '2014-09-12', 31950000, 0, 0, 0, 'Donatur Tetap'),
('64', 'CS', '2014-09-12', 0, 404000, 0, 0, 'Cleaning Service'),
('63', 'IB', '2014-09-10', 31550000, 0, 0, 0, 'Infaq Bulanan'),
('62', 'CS', '2014-09-08', 31150000, 0, 0, 0, 'Cleaning Service'),
('61', 'KB', '2014-09-06', 30750000, 0, 0, 0, 'Kajian Bulanan'),
('60', 'DT', '2014-09-04', 30350000, 0, 0, 0, 'Donatur Tetap'),
('59', 'IB', '2014-09-02', 29950000, 0, 0, 0, 'Infaq Bulanan'),
('58', 'CS', '2014-08-31', 29550000, 0, 0, 0, 'Cleaning Service'),
('57', 'KB', '2014-08-29', 29150000, 0, 0, 0, 'Kajian Bulanan'),
('56', 'DT', '2014-08-27', 28750000, 0, 0, 0, 'Donatur Tetap'),
('55', 'IB', '2014-08-25', 28350000, 0, 0, 0, 'Infaq Bulanan'),
('54', 'CS', '2014-08-23', 27950000, 0, 0, 0, 'Cleaning Service'),
('53', 'KB', '2014-08-21', 27550000, 0, 0, 0, 'Kajian Bulanan'),
('52', 'DT', '2014-08-19', 27150000, 0, 0, 0, 'Donatur Tetap'),
('51', 'IB', '2014-08-17', 26750000, 0, 0, 0, 'Infaq Bulanan'),
('50', 'CS', '2014-08-15', 26350000, 0, 0, 0, 'Cleaning Service'),
('49', 'KB', '2014-08-13', 25950000, 0, 0, 0, 'Kajian Bulanan'),
('48', 'DT', '2014-08-11', 25550000, 0, 0, 0, 'Donatur Tetap'),
('47', 'IB', '2014-08-09', 25150000, 0, 0, 0, 'Infaq Bulanan'),
('46', 'CS', '2014-08-07', 24750000, 0, 0, 0, 'Cleaning Service'),
('45', 'KB', '2014-08-05', 0, 554000, 0, 0, 'Kajian Bulanan'),
('44', 'DT', '2014-08-03', 0, 544000, 0, 0, 'Donatur Tetap'),
('43', 'KB', '2014-07-04', 17950000, 0, 0, 0, 'Kajian Bulanan'),
('42', 'DT', '2014-07-02', 17550000, 0, 0, 0, 'Donatur Tetap'),
('41', 'IB', '2014-06-30', 17150000, 0, 0, 0, 'Infaq Bulanan'),
('40', 'CS', '2014-06-28', 16750000, 0, 0, 0, 'Cleaning Service'),
('39', 'KB', '2014-06-26', 16350000, 0, 0, 0, 'Kajian Bulanan'),
('38', 'DT', '2014-06-24', 15950000, 0, 0, 0, 'Donatur Tetap'),
('37', 'IB', '2014-06-22', 15550000, 0, 0, 0, 'Infaq Bulanan'),
('36', 'CS', '2014-06-20', 15150000, 0, 0, 0, 'Cleaning Service'),
('35', 'KB', '2014-06-18', 14750000, 0, 0, 0, 'Kajian Bulanan'),
('34', 'DT', '2014-06-16', 14350000, 0, 0, 0, 'Donatur Tetap'),
('33', 'IB', '2014-06-14', 13950000, 0, 0, 0, 'Infaq Bulanan'),
('32', 'CS', '2014-06-12', 13550000, 0, 0, 0, 'Cleaning Service'),
('31', 'KB', '2014-06-10', 13150000, 0, 0, 0, 'Kajian Bulanan'),
('30', 'DT', '2014-06-08', 12750000, 0, 0, 0, 'Donatur Tetap'),
('29', 'IB', '2014-06-06', 12350000, 0, 0, 0, 'Infaq Bulanan'),
('28', 'CS', '2014-06-04', 11950000, 0, 0, 0, 'Cleaning Service'),
('27', 'KB', '2014-06-02', 11550000, 0, 0, 0, 'Kajian Bulanan'),
('26', 'DT', '2014-05-31', 11150000, 0, 0, 0, 'Donatur Tetap'),
('25', 'IB', '2014-05-19', 0, 294000, 0, 0, 'Infaq Bulanan'),
('24', 'CS', '2014-05-17', 0, 284000, 0, 0, 'Cleaning Service'),
('23', 'KB', '2014-05-15', 0, 274000, 0, 0, 'Kajian Bulanan'),
('22', 'DT', '2014-05-13', 0, 264000, 0, 0, 'Donatur Tetap'),
('21', 'IB', '2014-05-11', 0, 254000, 0, 0, 'Infaq Bulanan'),
('20', 'CS', '2014-05-09', 0, 244000, 0, 0, 'Cleaning Service'),
('19', 'KB', '2014-05-07', 0, 234000, 0, 0, 'Kajian Bulanan'),
('18', 'DT', '2014-05-05', 0, 224000, 0, 0, 'Donatur Tetap'),
('17', 'IB', '2014-05-03', 0, 214000, 0, 0, 'Infaq Bulanan'),
('16', 'CS', '2014-05-01', 0, 204000, 0, 0, 'Cleaning Service'),
('15', 'KB', '2014-04-29', 0, 194000, 0, 0, 'Kajian Bulanan'),
('14', 'DT', '2014-04-27', 0, 184000, 0, 0, 'Donatur Tetap'),
('13', 'IB', '2014-04-25', 0, 174000, 0, 0, 'Infaq Bulanan'),
('12', 'CS', '2014-04-23', 0, 164000, 0, 0, 'Cleaning Service'),
('11', 'KB', '2014-04-21', 0, 150000, 0, 0, 'Kajian Bulanan'),
('10', 'DT', '2014-04-19', 0, 100000, 0, 0, 'Donatur Tetap'),
('9', 'IB', '2014-04-19', 2750000, 0, 0, 0, 'Infaq Bulanan'),
('8', 'IB', '2014-04-17', 0, 250000, 0, 0, 'Infaq Bulanan'),
('7', 'CS', '2014-04-17', 2500000, 0, 0, 0, 'Cleaning Service'),
('6', 'CS', '2014-04-15', 0, 20000, 0, 0, 'Cleaning Service'),
('5', 'KB', '2014-04-15', 1500000, 0, 0, 0, 'Kajian Bulanan'),
('4', 'KB', '2014-04-13', 0, 150000, 0, 0, 'Kajian Bulanan'),
('3', 'DT', '2014-04-13', 2000000, 0, 0, 0, 'Donatur Tetap'),
('2', 'DT', '2014-04-11', 0, 100000, 0, 0, 'Donatur Tetap'),
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

-- --------------------------------------------------------

--
-- Table structure for table `kategory_donatur`
--

CREATE TABLE IF NOT EXISTS `kategory_donatur` (
  `ID_KAT_DONATUR` varchar(50) NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI` int(20) NOT NULL,
  `KODE_DONATUR` varchar(50) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_donatur`
--

INSERT INTO `kategory_donatur` (`ID_KAT_DONATUR`, `NAMA_DONATUR`, `JUMLAH_DONASI`, `KODE_DONATUR`, `KETERANGAN`) VALUES
('1', 'Muhammad', 90000, 'MHD', 'KETERANGAN'),
('2', 'Dian', 40000000, 'Donatur Tetap', 'KETERANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pemasukan`
--

CREATE TABLE IF NOT EXISTS `kategory_pemasukan` (
  `ID_KAT_PEMASUKAN` varchar(10) NOT NULL,
  `NAMA_PEMASUKAN` varchar(50) NOT NULL,
  `KODE_PEMASUKAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_KAT_PEMASUKAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pemasukan`
--

INSERT INTO `kategory_pemasukan` (`ID_KAT_PEMASUKAN`, `NAMA_PEMASUKAN`, `KODE_PEMASUKAN`) VALUES
('1', 'Celengan Jumat', 'CJ'),
('2', 'Celengan Renovasi', 'CR'),
('3', 'Dounatur Tagiihan', 'DT');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `kategory_pengeluaran` (
  `ID_KAT_PENGELUARAN` varchar(10) NOT NULL,
  `NAMA_PENGELUARAN` varchar(50) NOT NULL,
  `KODE_PENGELUARAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_KAT_PENGELUARAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pengeluaran`
--

INSERT INTO `kategory_pengeluaran` (`ID_KAT_PENGELUARAN`, `NAMA_PENGELUARAN`, `KODE_PENGELUARAN`) VALUES
('1', 'Gaji Pegawai ', 'GJ '),
('2', 'Cleaning Service', 'CS'),
('3', 'Pembangunan Masjid', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `SALES_ID` varchar(10) NOT NULL,
  `NO_KTP_PEGAWAI` varchar(50) NOT NULL,
  `NAMA_PEGAWAI` varchar(100) NOT NULL,
  `USERNAME_PEGAWAI` varchar(100) NOT NULL,
  `PASSWORD_PEGAWAI` varchar(20) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `HAK_AKSES_PEGAWAI` varchar(20) NOT NULL,
  `STATUS_PEGAWAI` varchar(20) NOT NULL,
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
('1', '30C83AB3-8E03-9228', 'mamed', 'Sullivan', '1234', 'San Sebastiano al Ve', '1990-04-13', 'Admin', 'Aktif', 'TRAINEE', 'P.O. Box 999, 9919 Nulla Avenue', '(02) 1294 6214', '2001-04-13'),
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
('99', '30C83AB3-8E03-9326', 'Troy', 'Osborn', '1234', 'Gignod', '1978-07-29', 'Admin', 'Non-Aktif', 'TRAINEE', '6023 Eu Rd.', '(03) 4018 0514', '2008-07-29'),
('ZZ100', '92840293850932', 'mmm', 'z', '1', 'Surabaya', '1965-03-04', 'Admin', 'Non-Aktif', 'SUPERVISOR', 'm', '000989789786756', '2013-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE IF NOT EXISTS `penjadwalan` (
  `TIMEKEY` datetime NOT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL,
  `USER_ID` varchar(10) NOT NULL,
  `STREET` varchar(100) NOT NULL,
  `EXTENSION_ADDRESS` varchar(100) NOT NULL,
  `HOUSE_NUMBER` varchar(20) NOT NULL,
  `TIM_ID` varchar(10) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `ID_JADWAL` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_JADWAL`),
  KEY `TIM` (`TIM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

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
('2013-08-01 02:57:49', 'aaa', 'm', 'Keputih', 'Blok 2', '1', 'B', '2013-08-19', '2013-08-22', 40),
('2013-08-20 02:23:25', '', 'Morales', 'Pepelegi', 'Blok 100', '1', 'F', '2013-08-05', '2013-08-21', 42);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
