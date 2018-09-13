-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 07:46 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sididok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `kode_admin` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `kode_admin`, `username`, `password`, `nama`) VALUES
(5, 'A05', 'rudi1', 'rudi1', 'rudi1'),
(10, 'A06', 'admin', 'admin', 'admin'),
(16, 'A011', 'uni', 'uni', 'unis');

-- --------------------------------------------------------

--
-- Table structure for table `datajalan`
--

CREATE TABLE IF NOT EXISTS `datajalan` (
`id_datajalan` int(100) NOT NULL,
  `kode_datajalan` varchar(100) NOT NULL,
  `addendum` int(100) NOT NULL,
  `tahun_anggaran` varchar(200) NOT NULL,
  `paket` text NOT NULL,
  `pptk` varchar(200) NOT NULL,
  `general` varchar(200) NOT NULL,
  `site_engineer` varchar(200) NOT NULL,
  `penyedia_jasa` varchar(200) NOT NULL,
  `no_kontrak_awal` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `nilai_kontrak` varchar(200) NOT NULL,
  `waktu_pelaksanaan` varchar(200) NOT NULL,
  `panjang_perkerasan_aspal` varchar(200) NOT NULL,
  `panjang_perkerasan_beton` varchar(200) NOT NULL,
  `jenis_perkerasan_aspal_rencana` varchar(200) NOT NULL,
  `jenis_perkerasan_aspal_desain` varchar(200) NOT NULL,
  `jenis_perkerasan_beton_rencana` varchar(200) NOT NULL,
  `jenis_perkerasan_beton_desain` varchar(200) NOT NULL,
  `add1_no_kontrak` int(11) NOT NULL,
  `add1_tanggal` date NOT NULL,
  `add1_nilai_kontrak` varchar(100) NOT NULL,
  `add1_waktu_pelaksanaan` varchar(100) NOT NULL,
  `add1_panjang_perkerasan_aspal` varchar(100) NOT NULL,
  `add1_panjang_perkerasan_beton` varchar(100) NOT NULL,
  `add1_jenis_perkerasan_aspal_rencana` varchar(100) NOT NULL,
  `add1_jenis_perkerasan_aspal_desain` varchar(100) NOT NULL,
  `add1_jenis_perkerasan_beton_rencana` varchar(100) NOT NULL,
  `add1_jenis_perkerasan_beton_desain` varchar(100) NOT NULL,
  `add2_no_kontrak` varchar(100) NOT NULL,
  `add2_tanggal` date NOT NULL,
  `add2_nilai_kontrak` varchar(100) NOT NULL,
  `add2_waktu_pelaksanaan` varchar(100) NOT NULL,
  `add2_panjang_perkerasan_aspal` varchar(100) NOT NULL,
  `add2_panjang_perkerasan_beton` varchar(100) NOT NULL,
  `add2_jenis_perkerasan_aspal_rencana` varchar(100) NOT NULL,
  `add2_jenis_perkerasan_aspal_desain` varchar(100) NOT NULL,
  `add2_jenis_perkerasan_beton_rencana` varchar(100) NOT NULL,
  `add2_jenis_perkerasan_beton_desain` varchar(100) NOT NULL,
  `add3_no_kontrak` varchar(100) NOT NULL,
  `add3_tanggal` date NOT NULL,
  `add3_nilai_kontrak` varchar(100) NOT NULL,
  `add3_waktu_pelaksanaan` varchar(100) NOT NULL,
  `add3_panjang_perkerasan_aspal` varchar(100) NOT NULL,
  `add3_panjang_perkerasan_beton` varchar(100) NOT NULL,
  `add3_jenis_perkerasan_aspal_rencana` varchar(100) NOT NULL,
  `add3_jenis_perkerasan_aspal_desain` varchar(100) NOT NULL,
  `add3_jenis_perkerasan_beton_rencana` varchar(100) NOT NULL,
  `add3_jenis_perkerasan_beton_desain` varchar(100) NOT NULL,
  `add4_no_kontrak` varchar(100) NOT NULL,
  `add4_tanggal` date NOT NULL,
  `add4_nilai_kontrak` varchar(100) NOT NULL,
  `add4_waktu_pelaksanaan` varchar(100) NOT NULL,
  `add4_panjang_perkerasan_aspal` varchar(100) NOT NULL,
  `add4_panjang_perkerasan_beton` varchar(100) NOT NULL,
  `add4_jenis_perkerasan_aspal_rencana` varchar(100) NOT NULL,
  `add4_jenis_perkerasan_aspal_desain` varchar(100) NOT NULL,
  `add4_jenis_perkerasan_beton_rencana` varchar(100) NOT NULL,
  `add4_jenis_perkerasan_beton_desain` varchar(100) NOT NULL,
  `spmk_nomor` varchar(100) NOT NULL,
  `spmk_tanggal` date NOT NULL,
  `spmk_konsultan` varchar(100) NOT NULL,
  `spmk_progress` varchar(100) NOT NULL,
  `spmk_realisasi` varchar(100) NOT NULL,
  `spmk_lokasi_nama` varchar(100) NOT NULL,
  `spmk_lokasi_kabupaten` varchar(100) NOT NULL,
  `spmk_lokasi_sta` varchar(100) NOT NULL,
  `spmk_lokasi_koordinat_lat` varchar(100) NOT NULL,
  `spmk_lokasi_koordinat_long` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `datajalan`
--

INSERT INTO `datajalan` (`id_datajalan`, `kode_datajalan`, `addendum`, `tahun_anggaran`, `paket`, `pptk`, `general`, `site_engineer`, `penyedia_jasa`, `no_kontrak_awal`, `tanggal`, `nilai_kontrak`, `waktu_pelaksanaan`, `panjang_perkerasan_aspal`, `panjang_perkerasan_beton`, `jenis_perkerasan_aspal_rencana`, `jenis_perkerasan_aspal_desain`, `jenis_perkerasan_beton_rencana`, `jenis_perkerasan_beton_desain`, `add1_no_kontrak`, `add1_tanggal`, `add1_nilai_kontrak`, `add1_waktu_pelaksanaan`, `add1_panjang_perkerasan_aspal`, `add1_panjang_perkerasan_beton`, `add1_jenis_perkerasan_aspal_rencana`, `add1_jenis_perkerasan_aspal_desain`, `add1_jenis_perkerasan_beton_rencana`, `add1_jenis_perkerasan_beton_desain`, `add2_no_kontrak`, `add2_tanggal`, `add2_nilai_kontrak`, `add2_waktu_pelaksanaan`, `add2_panjang_perkerasan_aspal`, `add2_panjang_perkerasan_beton`, `add2_jenis_perkerasan_aspal_rencana`, `add2_jenis_perkerasan_aspal_desain`, `add2_jenis_perkerasan_beton_rencana`, `add2_jenis_perkerasan_beton_desain`, `add3_no_kontrak`, `add3_tanggal`, `add3_nilai_kontrak`, `add3_waktu_pelaksanaan`, `add3_panjang_perkerasan_aspal`, `add3_panjang_perkerasan_beton`, `add3_jenis_perkerasan_aspal_rencana`, `add3_jenis_perkerasan_aspal_desain`, `add3_jenis_perkerasan_beton_rencana`, `add3_jenis_perkerasan_beton_desain`, `add4_no_kontrak`, `add4_tanggal`, `add4_nilai_kontrak`, `add4_waktu_pelaksanaan`, `add4_panjang_perkerasan_aspal`, `add4_panjang_perkerasan_beton`, `add4_jenis_perkerasan_aspal_rencana`, `add4_jenis_perkerasan_aspal_desain`, `add4_jenis_perkerasan_beton_rencana`, `add4_jenis_perkerasan_beton_desain`, `spmk_nomor`, `spmk_tanggal`, `spmk_konsultan`, `spmk_progress`, `spmk_realisasi`, `spmk_lokasi_nama`, `spmk_lokasi_kabupaten`, `spmk_lokasi_sta`, `spmk_lokasi_koordinat_lat`, `spmk_lokasi_koordinat_long`) VALUES
(22, 'O022', 1, '2019', 'Edi setiawan     ', 'y', 'y', 'y', 'y', '1', '2018-06-12', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 2, '2018-06-12', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'y', '2018-01-10', 'y', 'y', 'y', 'Jalan Poros Barru-Parepare', ' Parepare ', 'y', '-4.009881', '119.629573'),
(26, 'O026', 1, '1000', 'h    ', 'h', 'h', 'h', 'h', '2', '2018-06-14', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 3, '2018-06-14', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'h', '2018-01-09', 'h', 'h', 'h', 'h', 'Rappang', 'h', '-3.843397', '119.820332'),
(27, 'O027', 1, '2222', 'Proyek 1  ', 'Riri', 'Abdul', 'tes', 'ssf', '8', '2018-06-07', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 8, '2018-06-17', 'j', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '7', '2018-06-17', 'j', 'h', 'h', 'Jalan Poros Barru-Makassar', 'Barru   ', 'h', '-4.411140', '119.619631'),
(28, 'O028', 1, '1000', 'sjsb   ', 'hbh', 'bkjm', 'nn', 'jnjn', '333', '2018-06-21', 'hhh', 'h', 'hh', 'h', 'ghg', 'hg', 'gh', '', 0, '2018-06-21', 'fggh', 'bhjb', 'hbhjbhb', 'bhbhb', 'hbjhb', 'bjbh', 'bhjbh', 'hbhjb', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'jnjn', '2018-06-18', 'jhj', 'jjb', 'nbnb', 'nbnbnmb', '  mbnb   ', 'nmbmnb', '-4.410135', '119.615425'),
(29, 'O029', 2, '2000', 'h   ', 'h', 'h', 'h', 'h', '8', '2018-06-15', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 0, '2018-06-12', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'j', '2018-06-22', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'h', '2018-06-13', 'j', 'j', 'j', 'j', '  j   ', 'j', '545345', '1111'),
(30, 'O030', 3, '2003', 'u  ', 'u', 'u', 'u', 'u', '7', '2018-06-22', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 7, '2018-06-06', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '2018-06-15', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '2018-06-14', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '', '0000-00-00', '', '', '', '', '', '', '', '', 'u', '2018-06-22', 'j', 'j', 'j', 'j', ' j  ', 'j', '8999', '333'),
(31, 'O031', 4, '2005', 'l  ', 'l', 'l', 'l', 'l', '3', '2018-06-15', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 4, '2018-06-14', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '2018-06-14', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '2018-06-07', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '9', '2018-06-14', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '2018-06-15', 'l', 'l', 'l', 'l', ' l  ', 'l', '000', '009');

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE IF NOT EXISTS `latihan` (
`id` int(100) NOT NULL,
  `kode_addendum` varchar(100) NOT NULL,
  `addendum` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `latihan`
--

INSERT INTO `latihan` (`id`, `kode_addendum`, `addendum`) VALUES
(11, 'A011', 2),
(12, 'A012', 3),
(13, 'A013', 1),
(14, 'A014', 4);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id_upload` int(100) NOT NULL,
  `pptk` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_upload`, `pptk`, `filename`, `type`, `size`, `date`) VALUES
(19, 'O022', '4800-9421-1-SM.pdf', 'application/pdf', '330300', '2018-06-12'),
(21, 'O023', '1508.05736.pdf', 'application/pdf', '776942', '2018-06-12'),
(23, 'O023', '4800-9421-1-SM.pdf', 'application/pdf', '330300', '2018-06-12'),
(33, 'O022', 'BAB III_6.pdf', 'application/pdf', '245644', '2018-06-12'),
(38, 'O025', '170859-panduan-pendirian-usaha-pengembang-aplikasi-digital.pdf', 'application/pdf', '1704866', '2018-06-12'),
(39, 'O023', 'BAB III BF.pdf', 'application/pdf', '583464', '2018-06-12'),
(40, 'O023', 'BAB III.pdf', 'application/pdf', '162699', '2018-06-12'),
(41, 'O024', '3dsmax_2010_modeling.pdf', 'application/pdf', '23055877', '2018-06-13'),
(42, 'O022', '506ee549a98b0Pedoman_Praktikum_rev1.pdf', 'application/pdf', '2062528', '2018-06-13'),
(45, 'O022', 'DIVISI 1_SPEK 2010 REV 3.pdf', 'application/pdf', '74898814', '2018-06-17'),
(46, 'O031', 'COVER SPESIFIKASI UMUM REV 3.pdf', 'application/pdf', '419358', '2018-06-18'),
(47, 'O031', 'DAFTAR ISI SPESIFIKASI UMUM REV 3.pdf', 'application/pdf', '6983213', '2018-06-18'),
(48, 'O031', 'DIVISI 1_SPEK 2010 REV 3.pdf', 'application/pdf', '74898814', '2018-06-18'),
(49, 'O031', 'DIVISI 2_SPEK 2010 REV 3.pdf', 'application/pdf', '19277539', '2018-06-18'),
(50, 'O031', 'DIVISI 3_SPEK 2010 REV 3.pdf', 'application/pdf', '36318289', '2018-06-18'),
(51, 'O031', 'Divisi 4_SPEK 2010 REV 3.pdf', 'application/pdf', '5736213', '2018-06-18'),
(52, 'O031', 'DIVISI 5_SPEK 2010 REV 3.pdf', 'application/pdf', '54261802', '2018-06-18'),
(53, 'O031', 'DIVISI 6_SPEK 2010 REV 3.pdf', 'application/pdf', '42902166', '2018-06-18'),
(54, 'O031', 'DIVISI 7_SPEK 2010 REV 3.pdf', 'application/pdf', '107088472', '2018-06-18'),
(55, 'O031', 'DIVISI 8_SPEK 2010 REV 3.pdf', 'application/pdf', '54911562', '2018-06-18'),
(56, 'O031', 'DIVISI 9_SPEK 2010 REV 3.pdf', 'application/pdf', '3709049', '2018-06-18'),
(57, 'O031', 'DIVISI 10_SPEK 2010 REV 3.pdf', 'application/pdf', '10072224', '2018-06-18'),
(58, 'O031', 'LAMPIRAN.pdf', 'application/pdf', '35943307', '2018-06-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `datajalan`
--
ALTER TABLE `datajalan`
 ADD PRIMARY KEY (`id_datajalan`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `datajalan`
--
ALTER TABLE `datajalan`
MODIFY `id_datajalan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id_upload` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
