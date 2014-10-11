-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 02:45 PM
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
  `NO_TRANSAKSI_BANK` int(10) NOT NULL,
  `KODE_BANK` varchar(10) NOT NULL,
  `TANGGAL_BANK` date NOT NULL,
  `MASUK_BANK` int(20) NOT NULL,
  `KELUAR_BANK` int(20) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  `BULAN_LAPORAN` varchar(10) NOT NULL,
  `TAHUN_LAPORAN` varchar(20) NOT NULL,
  PRIMARY KEY (`NO_TRANSAKSI_BANK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_bank`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi_donatur`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_donatur` (
  `ID_TRANSAKSI` int(20) NOT NULL,
  `TANGGAL_TRANSAKSI` date NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI_L` bigint(20) NOT NULL,
  `JUMLAH_DONASI_TL` bigint(20) NOT NULL,
  `ID_KAT_DONATUR` int(10) NOT NULL,
  `KODE_DONATUR` varchar(50) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL,
  `BULAN_LAPORAN` varchar(10) NOT NULL,
  `TAHUN_LAPORAN` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_donatur`
--

INSERT INTO `data_transaksi_donatur` (`ID_TRANSAKSI`, `TANGGAL_TRANSAKSI`, `NAMA_DONATUR`, `JUMLAH_DONASI_L`, `JUMLAH_DONASI_TL`, `ID_KAT_DONATUR`, `KODE_DONATUR`, `KETERANGAN`, `BULAN_LAPORAN`, `TAHUN_LAPORAN`) VALUES
(1, '2014-10-02', 'Muhammad', 1000, 0, 0, 'MHD', 'asdas', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi_kas`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_kas` (
  `NO_TRANSAKSI_KAS` int(10) NOT NULL,
  `KODE_KAS` varchar(10) NOT NULL,
  `TANGGAL_KAS` date NOT NULL,
  `MASUK_KAS` int(20) NOT NULL,
  `KELUAR_KAS` int(20) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  `BULAN_LAPORAN` varchar(10) NOT NULL,
  `TAHUN_LAPORAN` varchar(20) NOT NULL,
  PRIMARY KEY (`NO_TRANSAKSI_KAS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_kas`
--

INSERT INTO `data_transaksi_kas` (`NO_TRANSAKSI_KAS`, `KODE_KAS`, `TANGGAL_KAS`, `MASUK_KAS`, `KELUAR_KAS`, `KETERANGAN`, `BULAN_LAPORAN`, `TAHUN_LAPORAN`) VALUES
(99, '1101', '2014-04-23', 0, 15000000, ' Setoran ke Bank Pengembangan Masjid ', '4', '2014'),
(98, '1101', '2014-04-23', 0, 937000, ' Setoran ke Bank Hasil SPP ', '4', '2014'),
(97, '1101', '2014-04-23', 0, 1200000, ' Setoran ke Bank Hasil Donatur ', '4', '2014'),
(96, '4300', '2014-04-23', 15000000, 0, ' Sumbangan untuk Pengembangan Masjid ', '4', '2014'),
(95, '4200', '2014-04-22', 1200000, 0, ' Hasil Infaq dari Donatur ', '4', '2014'),
(94, '4400', '2014-04-22', 360000, 0, ' SPP Peserta Tahsin dan Tahfid ', '4', '2014'),
(93, '5102', '2014-04-22', 0, 54000, ' Insentif Penjaga Kajian Bulanan ', '4', '2014'),
(92, '5103', '2014-04-22', 0, 85000, ' Pasang Stiker Pintu ', '4', '2014'),
(91, '5103', '2014-04-22', 0, 13000, ' Beli Kwitansi dan Materai ', '4', '2014'),
(90, '1101', '2014-04-22', 0, 800000, ' Setoran ke Bank Hasil Donatur ', '4', '2014'),
(89, '1101', '2014-04-22', 0, 289000, ' Setoran ke Bank Hasil Celengan Renovasi ', '4', '2014'),
(88, '1101', '2014-04-22', 0, 3855000, ' Setoran Ke Bank Hasil Celengan Jumat ', '4', '2014'),
(87, '1101', '2014-04-22', 0, 260000, ' Setoran ke Bank Hasil Celengan Renovasi ', '4', '2014'),
(86, '1101', '2014-04-22', 0, 490000, ' Setoran Ke Bank Hasil Celengan ', '4', '2014'),
(85, '5108', '2014-04-21', 0, 136000, ' Konsumsi Ust. Ad-Duwaisy+Ust. Wafi ', '4', '2014'),
(84, '5108', '2014-04-19', 0, 96000, ' Konsumsi Kajian ', '4', '2014'),
(83, '5108', '2014-04-19', 0, 175000, ' Beli Aqua Gelas 10 Dos ', '4', '2014'),
(82, '5103', '2014-04-19', 0, 120000, ' Beli Lampu TL ', '4', '2014'),
(81, '4100', '2014-04-18', 289000, 0, ' Hasil Infaq dari Celengan Renovasi Tgl 18  ', '4', '2014'),
(80, '4100', '2014-04-18', 3855000, 0, ' Hasil Infaq dari Celengan Jumat Tgl 18  ', '4', '2014'),
(79, '5103', '2014-04-18', 0, 30000, ' Buat Papan Petunjuk untuk Wanita ', '4', '2014'),
(78, '5106', '2014-04-18', 0, 400000, ' Transport Khotib Jumat ', '4', '2014'),
(77, '5108', '2014-04-18', 0, 14500, ' Beli Nasi untuk Khotib Jumat ', '4', '2014'),
(76, '5109', '2014-04-18', 0, 54000, ' Beli Pulsa SMS Center ', '4', '2014'),
(75, '5103', '2014-04-18', 0, 22500, ' Beli Sabun ', '4', '2014'),
(74, '4200', '2014-04-17', 800000, 0, ' Hasil Infaq dari Donatur ', '4', '2014'),
(73, '4100', '2014-04-17', 260000, 0, ' Hasil Infaq dari Celengan Renovaso Tgl 17 ', '4', '2014'),
(72, '4100', '2014-04-17', 490000, 0, ' Hasil Infaq dari Celengan Tgl 17 ', '4', '2014'),
(71, '5103', '2014-04-17', 0, 200, ' Cetak Buletin ', '4', '2014'),
(70, '5111', '2014-04-17', 0, 850000, ' Pembayaran Tastis Lewat Bpk Abdurrahman ', '4', '2014'),
(69, '5107', '2014-04-16', 0, 1844100, ' Tiket Pesawat Ust. A. Satori ', '4', '2014'),
(68, '5103', '2014-04-16', 0, 32000, ' Beli Aqua Gelas ', '4', '2014'),
(67, '4400', '2014-04-16', 250000, 0, ' SPP Peserta Tahsin dan Tahfid ', '4', '2014'),
(66, '4500', '2014-04-14', 40000, 0, ' Kembalian Tiket Pesawat ', '4', '2014'),
(65, '4400', '2014-04-14', 327000, 0, ' SPP Peserta Tahsin dan Tahfid ', '4', '2014'),
(64, '5103', '2014-04-14', 0, 59000, ' Beli Gula, Kopi, dan Jahe ', '4', '2014'),
(63, '5102', '2014-04-14', 0, 50000, ' Insentif Lemburan Ahad ', '4', '2014'),
(62, '1101', '2014-04-14', 0, 300000, ' Setoran ke Bank Infaq Penggunaan Masjid ', '4', '2014'),
(61, '1101', '2014-04-14', 0, 275000, ' Setoran ke Bank SPP ', '4', '2014'),
(60, '1101', '2014-04-11', 0, 1900000, ' Setoran ke Bank Hasil Donatur ', '4', '2014'),
(59, '1101', '2014-04-11', 0, 406000, ' Setoran ke Bank Hasil Celengan Renovasi ', '4', '2014'),
(58, '1101', '2014-04-11', 0, 4131000, ' Setoran ke Bank Hasil Celengan Jumat ', '4', '2014'),
(57, '1101', '2014-04-11', 0, 178000, ' Setoran ke Bank Hasil Celengan Renovasi ', '4', '2014'),
(56, '1101', '2014-04-11', 0, 1012000, ' Setoran ke Bank Hasil Celengan ', '4', '2014'),
(55, '4500', '2014-04-11', 300000, 0, ' Infaq Penggunaan Masjid untuk Nikah ', '4', '2014'),
(54, '4100', '2014-04-11', 406000, 0, ' Hasil Infaq dari Celengan Renovasi Tgl 11 ', '4', '2014'),
(53, '4100', '2014-04-11', 4131000, 0, ' Hasil Infaq dari Celengan Jumat Tgl 11 ', '4', '2014'),
(52, '5106', '2014-04-11', 0, 400000, ' Transport Khotib Jumat ', '4', '2014'),
(51, '5108', '2014-04-11', 0, 14500, ' Beli Nasi untuk Khotib Jumat ', '4', '2014'),
(50, '5103', '2014-04-11', 0, 120000, ' Beli Parfum Karpet + Methanol ', '4', '2014'),
(49, '5103', '2014-04-11', 0, 12500, ' Beli Gula ', '4', '2014'),
(48, '5103', '2014-04-11', 0, 12000, ' Beli Sabun ', '4', '2014'),
(47, '4100', '2014-04-10', 178000, 0, ' Hasil Infaq dari Celengan Renovasi Tgl 10 ', '4', '2014'),
(46, '4100', '2014-04-10', 1012000, 0, ' Hasil Infaq dari Celengan Tgl 10 ', '4', '2014'),
(45, '4200', '2014-04-10', 1900000, 0, ' Hasil Infaq dari Donatur ', '4', '2014'),
(44, '5106', '2014-04-08', 0, 100000, ' Transport Guru Tahfid & Tahsin  Tgl 7 ', '4', '2014'),
(43, '1101', '2014-04-07', 0, 1883000, ' Setoran ke Bank Hasil Parkir ', '4', '2014'),
(42, '5106', '2014-04-05', 0, 100000, ' Transport Guru Tahfid & Tahsin  Tgl 4 ', '4', '2014'),
(41, '4400', '2014-04-05', 275000, 0, ' SPP Peserta Tahsin dan Tahfid ', '4', '2014'),
(40, '4500', '2014-04-05', 20000, 0, ' Hasil Infaq dari Kaset ', '4', '2014'),
(39, '4500', '2014-04-05', 1883000, 0, ' Hasil Infaq dari Parkir ', '4', '2014'),
(38, '5101', '2014-04-05', 0, 2000000, ' Gaji CS dan Pengawas Kebersihan ', '4', '2014'),
(37, '1101', '2014-04-04', 0, 1200000, ' Setoran ke Bank (Hasil Donatur) ', '4', '2014'),
(36, '1101', '2014-04-04', 0, 775000, ' Setoran ke Bank (Hasil SPP) ', '4', '2014'),
(35, '1101', '2014-04-04', 0, 462000, ' Setoran ke Bank (Hasil Celengan Renovasi) ', '4', '2014'),
(34, '1101', '2014-04-04', 0, 4075000, ' Setoran ke Bank (Hasil Celengan Jumat) ', '4', '2014'),
(33, '1101', '2014-04-04', 0, 353000, ' Setoran ke Bank (Hasil Celengan) ', '4', '2014'),
(32, '4100', '2014-04-04', 450000, 0, ' Hasil Infaq dari Celengan Renovasi ', '4', '2014'),
(31, '4100', '2014-04-04', 4075000, 0, ' Hasil Infaq dari Celengan Jumat  ', '4', '2014'),
(30, '5106', '2014-04-04', 0, 200000, ' Transport Kajian Jumat Ba''da Maghrib  ', '4', '2014'),
(29, '5102', '2014-04-04', 0, 75000, ' Insentif Rekaman Kajian Bulanan ', '4', '2014'),
(28, '5102', '2014-04-04', 0, 150000, ' Insentif Pengganti Muadzin Ahad ', '4', '2014'),
(27, '5108', '2014-04-04', 0, 22000, ' Beli Aqua Gelas ', '4', '2014'),
(26, '5106', '2014-04-04', 0, 450000, ' Transport untuk Khotib Jumat ', '4', '2014'),
(25, '5108', '2014-04-04', 0, 14500, ' Beli Nasi untuk Khotib Jumat ', '4', '2014'),
(24, '5103', '2014-04-04', 0, 30000, ' Beli Sabun ', '4', '2014'),
(23, '5103', '2014-04-04', 0, 59000, ' Beli Gula, Kopi, dan Jahe ', '4', '2014'),
(22, '4100', '2014-04-03', 12000, 0, ' Hasil Infaq dari Celengan Renovasi Tgl 3 ', '4', '2014'),
(21, '4100', '2014-04-03', 353000, 0, ' Hasil Infaq dari Celengan Tgl 3 ', '4', '2014'),
(20, '4400', '2014-04-03', 775000, 0, ' SPP Peserta Tahfid & Tahsin ', '4', '2014'),
(19, '4200', '2014-04-03', 1200000, 0, ' Hasil Infaq dari Donatur ', '4', '2014'),
(18, '5106', '2014-04-02', 0, 400000, ' Transport Kajian Selasa Ba''da Maghrib ', '4', '2014'),
(17, '5102', '2014-04-02', 0, 80000, ' Insentif Publikasi ', '4', '2014'),
(16, '5102', '2014-04-02', 0, 160000, ' Insentif Pemasangan Spanduk ', '4', '2014'),
(15, '5102', '2014-04-02', 0, 40000, ' Insentif Penyebaran Brosur ', '4', '2014'),
(14, '5102', '2014-04-02', 0, 54000, ' Insentif Penjaga Kajian Bulanan ', '4', '2014'),
(13, '5104', '2014-04-02', 0, 60000, ' Transport Jalan Pengambilan Donatur ', '4', '2014'),
(12, '5103', '2014-04-02', 0, 120000, ' Print Poster Kajian Bulanan ', '4', '2014'),
(11, '5103', '2014-04-02', 0, 40000, ' Beli Buku Iqro ', '4', '2014'),
(10, '5103', '2014-04-02', 0, 25000, ' Print Warna A3 ', '4', '2014'),
(9, '5103', '2014-04-02', 0, 1312500, ' Cetak Spanduk Kajian Bulanan ', '4', '2014'),
(8, '5103', '2014-04-02', 0, 135000, ' Setting ', '4', '2014'),
(7, '5106', '2014-04-02', 0, 7800000, ' Transport Guru Tahfid & Tahsin  ', '4', '2014'),
(6, '1101', '2014-04-02', 7000000, 0, ' Tarikan Tunai ATM ', '4', '2014'),
(5, '1101', '2014-04-02', 0, 1011000, ' Setoran ke Bank (Infaq Celengan Renovasi) ', '4', '2014'),
(4, '1101', '2014-04-02', 0, 400000, ' Setoran ke Bank (SPP) ', '4', '2014'),
(3, '1101', '2014-04-02', 0, 272000, ' Setoran ke Bank (Infaq Celengan Renovasi) ', '4', '2014'),
(2, '4400', '2014-04-01', 400000, 0, ' SPP Peserta Tahfid & Tahsin ', '4', '2014'),
(1, '4000', '2014-04-01', 21597500, 0, ' Saldo awal ', '4', '2014'),
(100, '1101', '2014-04-24', 5000000, 0, ' Tarikan Tunai ATM ', '4', '2014'),
(101, '4100', '2014-04-24', 1009000, 0, ' Hasil Infaq dari Celengan Tgl 24 ', '4', '2014'),
(102, '4100', '2014-04-24', 88000, 0, ' Hasil Infaq dari Celengan Renovasi Tgl 24 ', '4', '2014'),
(103, '5103', '2014-04-25', 0, 21000, ' Beli Sabun ', '4', '2014'),
(104, '5108', '2014-04-25', 0, 175000, ' Beli Aqua Gelas 10 Dos ', '4', '2014'),
(105, '5108', '2014-04-25', 0, 94000, ' Konsumsi Kajian Bulanan ', '4', '2014'),
(106, '5102', '2014-04-25', 0, 100000, ' Insentif Penjaga Sandal ', '4', '2014'),
(107, '5102', '2014-04-25', 0, 100000, ' Insentif Pengatur Shaf ', '4', '2014'),
(108, '5106', '2014-04-25', 0, 400000, ' Transport Khotib Jumat ', '4', '2014'),
(109, '4100', '2014-04-25', 3983000, 0, ' Hasil Infaq dari Celengan Jumat Tgl 25 ', '4', '2014'),
(110, '1101', '2014-04-25', 0, 1009000, ' Setoran ke Bank Hasil Celengan ', '4', '2014'),
(111, '1101', '2014-04-25', 0, 88000, ' Setoran ke Bank Hasil Celengan Renovasi ', '4', '2014'),
(112, '1101', '2014-04-25', 0, 3983000, ' Setoran ke Bank Hasil Celengan Jumat ', '4', '2014'),
(113, '5102', '2014-04-26', 0, 54000, ' Insentif Penjaga Kajian Bulanan ', '4', '2014'),
(114, '5102', '2014-04-26', 0, 40000, ' Insentif Pemasangan Spanduk ', '4', '2014'),
(115, '5103', '2014-04-26', 0, 59000, ' Beli Gula, Kopi, dan Jahe ', '4', '2014'),
(116, '1101', '2014-04-28', 10000000, 0, ' Tarikan Tunai ATM ', '4', '2014'),
(117, '1101', '2014-04-29', 10000000, 0, ' Tarikan Tunai ATM ', '4', '2014'),
(118, '4500', '2014-04-29', 312000, 0, ' Pengembalian Tiket ', '4', '2014'),
(119, '4500', '2014-04-29', 4000000, 0, ' Infaq dari Trawas ', '4', '2014'),
(120, '4500', '2014-04-29', 2426000, 0, ' Pinjaman Ust. Ahmad ', '4', '2014'),
(121, '5106', '2014-04-29', 0, 6000000, ' Muballigh ', '4', '2014'),
(122, '5107', '2014-04-29', 0, 740000, ' Transportasi dan Konsumsi ', '4', '2014'),
(123, '5107', '2014-04-29', 0, 520000, ' Bayar Hotel ', '4', '2014'),
(124, '5106', '2014-04-29', 0, 6100000, ' Transport Guru Tahsin Bulan Februari ', '4', '2014'),
(125, '5103', '2014-04-29', 0, 1132000, ' Cetak Banner dan Karcis Parkir ', '4', '2014'),
(126, '5109', '2014-04-29', 0, 194000, ' Bayar Tagihan TELKOM ', '4', '2014'),
(127, '4100', '2014-04-30', 1146000, 0, ' Hasil Infaq dari Celengan Tgl 30 ', '4', '2014'),
(128, '5106', '2014-04-30', 0, 5500000, ' Transport Pengajar Tahsin ', '4', '2014'),
(129, '5101', '2014-04-30', 0, 2000000, ' Gaji CS dan Pengawas Kebersihan ', '4', '2014'),
(130, '5101', '2014-04-30', 0, 13200000, ' Gaji Karyawan Takmir ', '4', '2014'),
(131, '5102', '2014-04-30', 0, 500000, ' Insentif Penjaga Sound System ', '4', '2014'),
(132, '5106', '2014-04-30', 0, 800000, ' Transport Kajian Ba''da Maghrib Senin ', '4', '2014'),
(133, '5106', '2014-04-30', 0, 1000000, ' Transport Kajian Ba''da Maghrib Selasa ', '4', '2014'),
(134, '5106', '2014-04-30', 0, 750000, ' Transport Kajian Ba''da Maghrib Jumat ', '4', '2014'),
(135, '5102', '2014-04-30', 0, 150000, ' Insentif Pengganti Muadzin Ahad ', '4', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `dim_time`
--

CREATE TABLE IF NOT EXISTS `dim_time` (
  `ID_TIME` varchar(10) NOT NULL,
  `BULAN` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_time`
--

INSERT INTO `dim_time` (`ID_TIME`, `BULAN`) VALUES
('1', 'Januari'),
('2', 'Februari'),
('3 ', 'Maret'),
('4', 'April'),
('5', 'Mei'),
('6', 'Juni'),
('7', 'Juli'),
('8', 'Agustus'),
('9', 'September'),
('10', 'Oktober'),
('11', 'November'),
('12 ', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_donatur`
--

CREATE TABLE IF NOT EXISTS `kategory_donatur` (
  `ID_KAT_DONATUR` int(10) NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI` int(20) NOT NULL,
  `KODE_DONATUR` varchar(50) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_KAT_DONATUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_donatur`
--

INSERT INTO `kategory_donatur` (`ID_KAT_DONATUR`, `NAMA_DONATUR`, `JUMLAH_DONASI`, `KODE_DONATUR`, `KETERANGAN`) VALUES
(1, 'Muhammad', 1000000, 'MHD', 'Akhir Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pemasukan`
--

CREATE TABLE IF NOT EXISTS `kategory_pemasukan` (
  `ID_KAT_PEMASUKAN` int(10) NOT NULL,
  `NAMA_PEMASUKAN` varchar(50) NOT NULL,
  `KODE_PEMASUKAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_KAT_PEMASUKAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pemasukan`
--

INSERT INTO `kategory_pemasukan` (`ID_KAT_PEMASUKAN`, `NAMA_PEMASUKAN`, `KODE_PEMASUKAN`) VALUES
(2, 'Infaq dari Celengan', '4100'),
(1, 'Saldo Awal', '4000'),
(3, 'Infaq dari Donatur Tetap', '4200'),
(4, 'Sumbangan dari Donatur Tidak Tetap', '4300'),
(5, 'Infaq untuk Program', '4400'),
(6, 'Pendapatan Lain-lain', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `kategory_pengeluaran` (
  `ID_KAT_PENGELUARAN` int(10) NOT NULL,
  `NAMA_PENGELUARAN` varchar(50) NOT NULL,
  `KODE_PENGELUARAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_KAT_PENGELUARAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pengeluaran`
--

INSERT INTO `kategory_pengeluaran` (`ID_KAT_PENGELUARAN`, `NAMA_PENGELUARAN`, `KODE_PENGELUARAN`) VALUES
(3, 'Keperluan Kantor', '5103'),
(2, 'Insentif', '5102'),
(1, 'Gaji Karyawan', '5101'),
(4, 'Transportasi', '5104'),
(5, 'Renovasi', '5105'),
(6, 'Dakwah', '5106'),
(7, 'Akomodasi', '5107'),
(8, 'Konsumsi', '5108'),
(9, 'Listrik dan Telepon', '5109'),
(10, 'Biaya Administrasi Bank', '5110'),
(11, 'Biaya Lain-lain', '5111');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `SALES_ID` int(10) NOT NULL,
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
(0, '92840293850932', 'mmm', 'z', '1', 'Surabaya', '1965-03-04', 'Admin', 'Non-Aktif', 'SUPERVISOR', 'm', '000989789786756', '2013-08-20'),
(1, '30C83AB3-8E03-9228', 'mamed', 'Sullivan', '1234', 'San Sebastiano al Ve', '1990-04-13', 'Admin', 'Aktif', 'TRAINEE', 'P.O. Box 999, 9919 Nulla Avenue', '(02) 1294 6214', '2001-04-13'),
(2, '30C83AB3-8E03-9229', 'Ryder', 'Oconnor', '1234', 'San Sebastiano al Ve', '1990-04-14', 'Admin', 'Non-Aktif', 'JUNIOR', 'Ap #335-923 Ligula. Rd.', '(09) 1380 7147', '2001-04-14'),
(3, '30C83AB3-8E03-9230', 'Freya', 'Maynard', '1234', 'Stuttgart', '1990-04-15', 'Member', 'Cuti', 'SENIOR', '936-3015 Aliquam St.', '(01) 6181 9566', '2001-04-15'),
(4, '30C83AB3-8E03-9231', 'Hedley', 'Welch', '1234', 'Santu Lussurgiu', '1990-04-16', 'Member', 'Aktif', 'SUPERVISOR', '733-6289 Ut St.', '(06) 8795 5199', '2001-04-16'),
(5, '30C83AB3-8E03-9232', 'Roth', 'Gillespie', '1234', 'Tavier', '1990-04-17', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', 'P.O. Box 896, 3584 Aenean Rd.', '(01) 2145 5141', '2001-04-17'),
(6, '30C83AB3-8E03-9233', 'Barry', 'Gates', '1234', 'Chartres', '1990-04-18', 'Admin', 'Cuti', 'TERITORY MANAGER', '311-471 In Road', '(03) 8446 6523', '2001-04-18'),
(8, '30C83AB3-8E03-9235', 'Ivana', 'Frost', '1234', 'Le Cannet', '1990-04-20', 'Member', 'Non-Aktif', 'TRAINEE', '6099 Integer Avenue', '(02) 1375 8659', '2001-04-20'),
(9, '30C83AB3-8E03-9236', 'Belle', 'Flynn', '1234', 'Carovilli', '1990-04-21', 'Admin', 'Aktif', 'JUNIOR', '718-7553 Tellus Av.', '(04) 4180 4625', '2001-04-21'),
(10, '30C83AB3-8E03-9237', 'Dana', 'Perez', '1234', 'McCallum', '1990-04-22', 'Admin', 'Non-Aktif', 'SENIOR', '365 Risus Rd.', '(04) 1601 4646', '2001-04-22'),
(11, '30C83AB3-8E03-9238', 'Linusan', 'Hampton', '1234', 'Guelph', '1990-04-23', 'Member', 'Cuti', 'SUPERVISOR', 'P.O. Box 874, 5028 Lacus. St.', '(06) 1508 9520', '2001-04-23'),
(12, '30C83AB3-8E03-9239', 'Penelope', 'Medina', '1234', 'Halle', '1990-04-24', 'Member', 'Aktif', 'ASISTEN MANAGER', 'P.O. Box 338, 6006 Eget Rd.', '(04) 1824 9807', '2001-04-24'),
(13, '30C83AB3-8E03-9240', 'Georgia', 'Kramer', '1234', 'Ururi', '1990-04-25', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'P.O. Box 275, 9864 Nisl Ave', '(03) 4552 3901', '2001-04-25'),
(14, '30C83AB3-8E03-9241', 'Rhoda', 'Anderson', '1234', 'Pietraroja', '1990-04-26', 'Admin', 'Cuti', 'REGIONAL HEAD', 'P.O. Box 183, 5694 Ut, Av.', '(04) 7438 0337', '2001-04-26'),
(15, '30C83AB3-8E03-9242', 'Donna', 'Clayton', '1234', 'Kassel', '1990-04-27', 'Member', 'Aktif', 'TRAINEE', '7571 Neque St.', '(03) 3954 0258', '2001-04-27'),
(16, '30C83AB3-8E03-9243', 'Linus', 'Morales1', '1234', 'Herne', '1990-04-28', 'Member', 'Non-Aktif', 'JUNIOR', '1143 Parturient Road', '(07) 8701 0222', '2001-04-28'),
(17, '30C83AB3-8E03-9244', 'Yuri', 'Morin', '1234', 'Schwalbach', '1990-04-29', 'Admin', 'Aktif', 'SENIOR', 'Ap #845-2154 Vitae St.', '(02) 9854 7731', '2001-04-29'),
(18, '30C83AB3-8E03-9245', 'Ferdinand', 'Mckay', '1234', 'Newark', '1990-04-30', 'Admin', 'Non-Aktif', 'SUPERVISOR', '7859 A, Ave', '(02) 3226 3935', '2001-04-30'),
(19, '30C83AB3-8E03-9246', 'Gabriel', 'Brooks', '1234', 'Vanier', '1990-05-01', 'Member', 'Cuti', 'ASISTEN MANAGER', 'P.O. Box 719, 4641 Augue Ave', '(08) 5214 4493', '2001-05-01'),
(20, '30C83AB3-8E03-9247', 'Yasir', 'Hayes', '1234', 'Boise', '1990-05-02', 'Member', 'Aktif', 'TERITORY MANAGER', '8067 Ornare Av.', '(06) 0230 3305', '2001-05-02'),
(21, '30C83AB3-8E03-9248', 'Maxine', 'Mcclain', '1234', 'Maple Creek', '1990-05-03', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', '752-2026 Nibh. St.', '(08) 4450 3860', '2009-05-03'),
(22, '30C83AB3-8E03-9249', 'Quinlan', 'Mercer', '1234', 'Glasgow', '1990-05-04', 'Admin', 'Cuti', 'TRAINEE', '274-8799 A St.', '(02) 9115 3017', '2009-05-04'),
(23, '30C83AB3-8E03-9250', 'Randall', 'Petersen', '1234', 'Harnoncourt', '1990-05-05', 'Member', 'Aktif', 'JUNIOR', 'P.O. Box 773, 7781 Orci. Rd.', '(05) 4412 9254', '2009-05-05'),
(24, '30C83AB3-8E03-9251', 'Murphy', 'Sharp', '1234', 'Sint-Katherina-Lombe', '1990-05-06', 'Member', 'Non-Aktif', 'SENIOR', '776-9225 Vestibulum Rd.', '(08) 4712 5620', '2009-05-06'),
(25, '30C83AB3-8E03-9252', 'Peter', 'House', '1234', 'Innsbruck', '1990-05-07', 'Admin', 'Aktif', 'SUPERVISOR', 'P.O. Box 160, 7537 Volutpat Rd.', '(03) 0852 8280', '2009-05-07'),
(26, '30C83AB3-8E03-9253', 'Hunter', 'Page', '1234', 'Lauro de Freitas', '1990-05-08', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '867-8412 Velit St.', '(01) 3671 4959', '2009-05-08'),
(27, '30C83AB3-8E03-9254', 'Orson', 'Gillespie1', '1234', 'Sint-Niklaas', '1990-05-09', 'Member', 'Cuti', 'TERITORY MANAGER', '111-444 Duis Rd.', '(09) 9384 2962', '2009-05-09'),
(28, '30C83AB3-8E03-9255', 'Anne', 'Talley', '1234', 'Gouvy', '1990-05-10', 'Member', 'Aktif', 'REGIONAL HEAD', 'Ap #850-6161 A St.', '(08) 6393 5956', '2009-05-10'),
(29, '30C83AB3-8E03-9256', 'Hyatt', 'Snyder', '1234', 'Borghetto di Borbera', '1990-05-11', 'Admin', 'Non-Aktif', 'TRAINEE', 'Ap #472-7571 Praesent Rd.', '(04) 8345 6971', '2009-05-11'),
(30, '30C83AB3-8E03-9257', 'Maryam', 'Gentry', '1234', 'Belford Roxo', '1990-05-12', 'Admin', 'Cuti', 'JUNIOR', '4853 Magna. Ave', '(03) 9809 2220', '2009-05-12'),
(31, '30C83AB3-8E03-9258', 'Jordan', 'Hunt', '1234', 'Darlington', '1990-05-13', 'Member', 'Aktif', 'SENIOR', 'P.O. Box 361, 645 Eu Ave', '(04) 4499 6079', '2009-05-13'),
(33, '30C83AB3-8E03-9260', 'Thaddeus', 'Vazquez', '1234', 'Arnesano', '1990-05-15', 'Admin', 'Aktif', 'ASISTEN MANAGER', '791-7770 Sapien. Street', '(06) 6109 4220', '2009-05-15'),
(34, '30C83AB3-8E03-9261', 'Risa', 'Montoya', '1234', 'Saint-Rh?my-en-Bosse', '1990-05-16', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', '6907 Non, Street', '(09) 7449 4965', '2009-05-16'),
(35, '30C83AB3-8E03-9262', 'Nadine', 'Hobbs', '1234', 'Salvador', '1990-05-17', 'Member', 'Cuti', 'REGIONAL HEAD', 'P.O. Box 210, 4268 Phasellus Avenue', '(03) 7721 5510', '2009-05-17'),
(36, '30C83AB3-8E03-9263', 'Jordan', 'Rosales', '1234', 'Sangerhausen', '1990-05-18', 'Member', 'Aktif', 'TRAINEE', '1025 Proin Avenue', '(04) 4964 0483', '2009-05-18'),
(37, '30C83AB3-8E03-9264', 'Lillian', 'Tillman', '1234', 'Okotoks', '1990-05-19', 'Admin', 'Non-Aktif', 'JUNIOR', 'Ap #378-8840 Aliquet Road', '(02) 7425 2412', '2009-05-19'),
(38, '30C83AB3-8E03-9265', 'Molly', 'Pittman', '1234', 'Otegem', '1990-05-20', 'Admin', 'Cuti', 'SENIOR', 'P.O. Box 422, 8385 Nulla Av.', '(03) 0538 5640', '2009-05-20'),
(39, '30C83AB3-8E03-9266', 'Kuame', 'Oneill', '1234', 'Bouffioulx', '1990-05-21', 'Member', 'Aktif', 'SUPERVISOR', 'Ap #794-7303 Natoque Rd.', '(09) 6352 1535', '2009-05-21'),
(40, '30C83AB3-8E03-9267', 'Kylee', 'Pickett', '1234', 'Tione di Trento', '1990-05-22', 'Member', 'Non-Aktif', 'ASISTEN MANAGER', 'P.O. Box 659, 1825 Adipiscing Ave', '(06) 4400 8977', '2009-05-22'),
(41, '30C83AB3-8E03-9268', 'Castor', 'Coffey', '1234', 'Brentwood', '1990-05-23', 'Admin', 'Aktif', 'TERITORY MANAGER', 'Ap #203-7685 Ullamcorper. Ave', '(03) 8873 3361', '2009-05-23'),
(42, '30C83AB3-8E03-9269', 'August', 'Lancaster', '1234', 'Berlare', '1990-05-24', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', '550-3999 Molestie Rd.', '(09) 5064 2054', '2009-05-24'),
(43, '30C83AB3-8E03-9270', 'Herman', 'Blanchard', '1234', 'Marcinelle', '1990-05-25', 'Member', 'Cuti', 'TRAINEE', '9592 A, Road', '(04) 5851 2847', '2009-05-25'),
(44, '30C83AB3-8E03-9271', 'Marny', 'Morales', '1234', 'Lamontz', '1990-05-26', 'Admin', 'Aktif', 'JUNIOR', '7984 Adipiscing St.', '(04) 8165 6456', '2009-05-26'),
(45, '30C83AB3-8E03-9272', 'Petra', 'Fitzgerald', '1234', 'Portree', '1990-05-27', 'Admin', 'Non-Aktif', 'SENIOR', '8192 Sit Av.', '(06) 9955 6735', '2009-05-27'),
(46, '30C83AB3-8E03-9273', 'Lars', 'Houston', '1234', 'Medemblik', '1990-05-28', 'Member', 'Cuti', 'SUPERVISOR', '825-3455 Montes, Av.', '(06) 3807 3275', '2009-05-28'),
(47, '30C83AB3-8E03-9274', 'Abigail', 'Chen', '1234', 'Baracaldo', '1990-05-29', 'Member', 'Aktif', 'ASISTEN MANAGER', 'P.O. Box 592, 848 Ipsum Road', '(06) 2311 0706', '2009-05-29'),
(48, '30C83AB3-8E03-9275', 'Sierra', 'White', '1234', 'Sars-la-Buissi', '1990-05-30', 'Admin', 'Aktif', 'TERITORY MANAGER', '3986 Sed St.', '(08) 2520 5627', '2009-05-30'),
(49, '30C83AB3-8E03-9276', 'Simone', 'Mcbride', '1234', 'Duluth', '1990-05-31', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'Ap #302-4185 Vivamus Rd.', '(04) 3449 0108', '2009-05-31'),
(50, '30C83AB3-8E03-9277', 'Sebastian', 'Bender', '1234', 'Orvault', '1990-06-01', 'Member', 'Cuti', 'TRAINEE', '330 Posuere St.', '(05) 5730 5986', '2009-06-01'),
(51, '30C83AB3-8E03-9278', 'Daryl', 'Berg', '1234', 'Rotheux-Rimi', '1990-06-02', 'Member', 'Aktif', 'JUNIOR', 'Ap #118-6484 Quisque Ave', '(08) 3537 2342', '2009-06-02'),
(52, '30C83AB3-8E03-9279', 'Sierra', 'Mooney', '1234', 'Opoeteren', '1990-06-03', 'Admin', 'Non-Aktif', 'SENIOR', 'P.O. Box 479, 106 Diam Av.', '(06) 6425 6370', '2009-06-03'),
(53, '30C83AB3-8E03-9280', 'Maisie', 'Perry', '1234', 'Prestatyn', '1990-06-04', 'Admin', 'Cuti', 'SUPERVISOR', 'Ap #503-6474 Lobortis Av.', '(02) 6094 2441', '2009-06-04'),
(54, '30C83AB3-8E03-9281', 'Medge', 'Oneal', '1234', 'Polpenazze del Garda', '1990-06-05', 'Member', 'Aktif', 'ASISTEN MANAGER', 'Ap #508-9025 Placerat Avenue', '(03) 1096 4423', '2009-06-05'),
(55, '30C83AB3-8E03-9282', 'Latifah', 'Chapman', '1234', 'Kidwelly', '1990-06-06', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'Ap #463-5415 Vitae, Road', '(02) 6547 4746', '2009-06-06'),
(56, '30C83AB3-8E03-9283', 'Delilah', 'Jefferson', '1234', 'Serrata', '1990-06-07', 'Admin', 'Aktif', 'REGIONAL HEAD', 'P.O. Box 146, 6711 Lobortis St.', '(06) 4028 7581', '2009-06-07'),
(57, '30C83AB3-8E03-9284', 'Nola', 'Hayden', '1234', 'Lasnigo', '1990-06-08', 'Member', 'Non-Aktif', 'TRAINEE', '360-9041 Praesent Rd.', '(03) 5077 0875', '2009-06-08'),
(58, '30C83AB3-8E03-9285', 'Molly', 'Heath', '1234', 'Carleton', '1978-06-18', 'Member', 'Cuti', 'JUNIOR', 'Ap #512-8871 Quis Avenue', '(07) 0894 7036', '2009-06-09'),
(59, '30C83AB3-8E03-9286', 'Lee', 'Fields', '1234', 'San Giorgio Albanese', '1978-06-19', 'Admin', 'Aktif', 'SENIOR', 'Ap #786-9649 Pellentesque St.', '(05) 0563 5806', '2009-06-10'),
(60, '30C83AB3-8E03-9287', 'Isaac', 'Gomez', '1234', 'Asni?res-sur-Seine', '1978-06-20', 'Admin', 'Non-Aktif', 'SUPERVISOR', 'P.O. Box 182, 2337 Neque Av.', '(02) 0138 1187', '2009-06-11'),
(61, '30C83AB3-8E03-9288', 'Adele', 'Frederick', '1234', 'St. Petersburg', '1978-06-21', 'Member', 'Cuti', 'ASISTEN MANAGER', '5023 Egestas. Av.', '(08) 3687 6022', '2009-06-12'),
(62, '30C83AB3-8E03-9289', 'Maggie', 'Knowles', '1234', 'Nicolosi', '1978-06-22', 'Member', 'Aktif', 'TERITORY MANAGER', '557-5054 Proin Avenue', '(02) 2108 4102', '2009-06-13'),
(63, '30C83AB3-8E03-9290', 'Cyrus', 'Rogers', '1234', 'Avigliano Umbro', '1978-06-23', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'Ap #314-9650 Euismod Road', '(03) 6425 8377', '2009-06-14'),
(64, '30C83AB3-8E03-9291', 'Baxter', 'Buckner', '1234', 'Auxerre', '1978-06-24', 'Admin', 'Aktif', 'TRAINEE', 'Ap #806-4738 Nullam St.', '(03) 8757 2798', '2009-06-15'),
(65, '30C83AB3-8E03-9292', 'Chastity', 'Copeland', '1234', 'Sherbrooke', '1978-06-25', 'Member', 'Non-Aktif', 'JUNIOR', '649-8005 Aliquet St.', '(04) 0152 9584', '2009-06-16'),
(66, '30C83AB3-8E03-9293', 'Harrison', 'Gibbs', '1234', 'Ayas', '1978-06-26', 'Member', 'Cuti', 'SENIOR', '921-4937 Ipsum. Rd.', '(01) 3913 1200', '2009-06-17'),
(67, '30C83AB3-8E03-9294', 'Tobias', 'Hicks', '1234', 'Castor', '1978-06-27', 'Admin', 'Aktif', 'SUPERVISOR', '666-4908 Erat Avenue', '(02) 9973 2915', '2009-06-18'),
(68, '30C83AB3-8E03-9295', 'Melinda', 'Schultz', '1234', 'Banbury', '1978-06-28', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '3793 Pellentesque St.', '(07) 1804 5059', '2009-06-19'),
(69, '30C83AB3-8E03-9296', 'Fritz', 'Beach', '1234', 'Rivi', '1978-06-29', 'Member', 'Cuti', 'TERITORY MANAGER', '666-5601 Vel, Rd.', '(06) 0994 7633', '2009-06-20'),
(71, '30C83AB3-8E03-9298', 'Ursa', 'Soto', '1234', 'Ferrandina', '1978-07-01', 'Admin', 'Non-Aktif', 'TRAINEE', '707-302 Felis. Rd.', '(01) 7619 2127', '2009-06-22'),
(72, '30C83AB3-8E03-9299', 'Benedict', 'Herrera', '1234', 'Hamburg', '1978-07-02', 'Admin', 'Aktif', 'JUNIOR', 'P.O. Box 221, 1153 Consectetuer Avenue', '(03) 1474 4515', '2009-06-23'),
(73, '30C83AB3-8E03-9300', 'Arthur', 'Lambert', '1234', 'Vorst', '1978-07-03', 'Member', 'Non-Aktif', 'SENIOR', 'P.O. Box 433, 9367 In Road', '(09) 2591 6866', '2008-07-03'),
(74, '30C83AB3-8E03-9301', 'Wesley', 'Copeland1', '1234', 'Guelph', '1978-07-04', 'Member', 'Cuti', 'SUPERVISOR', 'P.O. Box 866, 3673 Ut St.', '(02) 5447 7650', '2008-07-04'),
(75, '30C83AB3-8E03-9302', 'India', 'Cantu', '1234', 'Belvedere Ostrense', '1978-07-05', 'Admin', 'Aktif', 'ASISTEN MANAGER', '944 Scelerisque, Street', '(05) 7810 3523', '2008-07-05'),
(76, '30C83AB3-8E03-9303', 'Sage', 'Good', '1234', 'Attimis', '1978-07-06', 'Admin', 'Non-Aktif', 'TERITORY MANAGER', 'Ap #758-5524 Libero St.', '(04) 8435 5773', '2008-07-06'),
(77, '30C83AB3-8E03-9304', 'Nina', 'Colon', '1234', 'Wuppertal', '1978-07-07', 'Member', 'Cuti', 'REGIONAL HEAD', 'Ap #604-9536 Orci, Street', '(07) 7550 3480', '2008-07-07'),
(78, '30C83AB3-8E03-9305', 'Thane', 'Kline', '1234', 'Juseret', '1978-07-08', 'Member', 'Aktif', 'TRAINEE', 'P.O. Box 218, 9853 Purus, Rd.', '(02) 9627 8040', '2008-07-08'),
(80, '30C83AB3-8E03-9307', 'Kyra', 'Ayers', '1234', 'Montenero Val Cocchi', '1978-07-10', 'Admin', 'Aktif', 'SENIOR', '219-7630 Diam Street', '(02) 4693 8313', '2008-07-10'),
(81, '30C83AB3-8E03-9308', 'Micah', 'Morse', '1234', 'Sankt Johann im Pong', '1978-07-11', 'Member', 'Non-Aktif', 'SUPERVISOR', 'P.O. Box 864, 1453 Vulputate Rd.', '(05) 2539 5628', '2008-07-11'),
(82, '30C83AB3-8E03-9309', 'Gay', 'Tyler', '1234', 'Schiltigheim', '1978-07-12', 'Member', 'Cuti', 'ASISTEN MANAGER', 'P.O. Box 470, 3079 Ante. Ave', '(07) 6179 9650', '2008-07-12'),
(83, '30C83AB3-8E03-9310', 'Mercedes', 'Burris', '1234', 'San Giovanni Lipioni', '1978-07-13', 'Admin', 'Aktif', 'TERITORY MANAGER', '244-9265 Gravida. Street', '(03) 3591 2089', '2008-07-13'),
(84, '30C83AB3-8E03-9311', 'Kirestin', 'Melendez', '1234', 'Sint-Martens-Lennik', '1978-07-14', 'Admin', 'Non-Aktif', 'REGIONAL HEAD', 'P.O. Box 411, 4405 Arcu. Street', '(07) 3907 3358', '2008-07-14'),
(85, '30C83AB3-8E03-9312', 'McKenzie', 'Ferrell', '1234', 'Otegem', '1978-07-15', 'Member', 'Cuti', 'TRAINEE', '3354 Nulla. Av.', '(03) 1976 8328', '2008-07-15'),
(86, '30C83AB3-8E03-9313', 'Kameko', 'Patton', '1234', 'Cardigan', '1978-07-16', 'Member', 'Aktif', 'JUNIOR', '6501 Consectetuer Av.', '(04) 7701 2686', '2008-07-16'),
(87, '30C83AB3-8E03-9314', 'Hall', 'Head', '1234', 'Donosti', '1978-07-17', 'Admin', 'Non-Aktif', 'SENIOR', 'P.O. Box 519, 6534 Aliquet, Avenue', '(07) 2314 9207', '2008-07-17'),
(89, '30C83AB3-8E03-9316', 'Ahmed', 'Gutierrez', '1234', 'Bernburg', '1978-07-19', 'Member', 'Non-Aktif', 'ASISTEN MANAGER', 'Ap #739-5213 Vivamus Ave', '(07) 5070 4381', '2008-07-19'),
(90, '30C83AB3-8E03-9317', 'Bree', 'Shaffer', '1234', 'Workington', '1978-07-20', 'Member', 'Cuti', 'TERITORY MANAGER', '786-2457 Euismod Road', '(08) 3941 5025', '2008-07-20'),
(91, '30C83AB3-8E03-9318', 'Mohammad', 'Moody', '1234', 'Wels', '1978-07-21', 'Admin', 'Aktif', 'REGIONAL HEAD', '402-6851 Massa Road', '(08) 2276 0767', '2008-07-21'),
(92, '30C83AB3-8E03-9319', 'Hanae', 'Mclaughlin', '1234', 'North Bay', '1978-07-22', 'Admin', 'Non-Aktif', 'TRAINEE', '7619 Sem Rd.', '(06) 3549 3119', '2008-07-22'),
(93, '30C83AB3-8E03-9320', 'Britanni', 'Leblanc', '1234', 'Rycroft', '1978-07-23', 'Member', 'Cuti', 'JUNIOR', '7777 In Road', '(04) 8046 6956', '2008-07-23'),
(94, '30C83AB3-8E03-9321', 'Sonia', 'Pena', '1234', 'Cardigan', '1978-07-24', 'Member', 'Aktif', 'SENIOR', 'Ap #688-2175 Ut St.', '(07) 1555 0535', '2008-07-24'),
(95, '30C83AB3-8E03-9322', 'Elvis', 'Montgomery', '1234', 'Laakdal', '1978-07-25', 'Admin', 'Aktif', 'SUPERVISOR', 'Ap #226-5134 In Street', '(01) 1811 8444', '2008-07-25'),
(96, '30C83AB3-8E03-9323', 'Deirdre', 'Davenport', '1234', 'Llanidloes', '1978-07-26', 'Admin', 'Non-Aktif', 'ASISTEN MANAGER', '106 Rutrum Av.', '(05) 9398 7151', '2008-07-26'),
(97, '30C83AB3-8E03-9324', 'Gage', 'Hickman', '1234', 'Rapagnano', '1978-07-27', 'Member', 'Cuti', 'TERITORY MANAGER', 'Ap #284-7250 Lacus. Avenue', '(01) 8824 7390', '2008-07-27'),
(98, '30C83AB3-8E03-9325', 'Darius', 'Curry', '1234', 'Londerzeel', '1978-07-28', 'Member', 'Aktif', 'REGIONAL HEAD', 'P.O. Box 872, 6579 Pede, Road', '(08) 0018 5358', '2008-07-28'),
(99, '30C83AB3-8E03-9326', 'Troy', 'Osborn', '1234', 'Gignod', '1978-07-29', 'Admin', 'Non-Aktif', 'TRAINEE', '6023 Eu Rd.', '(03) 4018 0514', '2008-07-29'),
(100, '30C83AB3-8E03-9327', 'Stacy', 'Sloan', '1234', 'Campitello di Fassa', '1978-07-30', 'Admin', 'Cuti', 'JUNIOR', '803-2876 A, Street', '(04) 6359 4075', '2008-07-30'),
(101, '0001292943884575', 'Muhammad', 'm', '1', 'Surabaya', '1950-01-01', 'Admin', 'Aktif', 'REGIONAL HEAD', 'Dinoyo 51', '085731600665', '2013-08-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
