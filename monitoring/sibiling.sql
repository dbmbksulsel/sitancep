-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 08:59 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sibiling`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `kode_admin`, `username`, `password`, `nama`) VALUES
(5, 'A05', 'rudi1', 'rudi1', 'rudi1'),
(6, 'A06', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE IF NOT EXISTS `bimbingan` (
`Bimbingan_Siswa_Id` int(200) NOT NULL,
  `NIS_Bimbingan` varchar(50) NOT NULL,
  `Nama_Siswa_Bimbingan` varchar(100) NOT NULL,
  `Kode_Kelas_Bimbingan` varchar(50) NOT NULL,
  `Kode_Jurusan_Bimbingan` varchar(50) NOT NULL,
  `Kode_Pelanggaran_Bimbingan` varchar(50) NOT NULL,
  `Kode_Sanksi_Bimbingan` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Konseling` text NOT NULL,
  `Solusi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`Bimbingan_Siswa_Id`, `NIS_Bimbingan`, `Nama_Siswa_Bimbingan`, `Kode_Kelas_Bimbingan`, `Kode_Jurusan_Bimbingan`, `Kode_Pelanggaran_Bimbingan`, `Kode_Sanksi_Bimbingan`, `Tanggal`, `Konseling`, `Solusi`) VALUES
(9, '1229042010', 'Fitri', 'X TKJ 1', 'TKJ', 'Membolos', 'Skorsing', '2017-07-10', 'ssdfddffsf', 'sdfdsfsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP` varchar(50) NOT NULL,
  `Nama_Guru` varchar(50) NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kode_Kelas_Guru` varchar(50) NOT NULL,
  `Password_Guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `Nama_Guru`, `JK`, `No_Telp`, `Alamat`, `Kode_Kelas_Guru`, `Password_Guru`) VALUES
('2222', 'Basir', 'L', '0299237', 'jkjkjb', 'X-TKJ-1', 'guru'),
('3333', 'Aminah', 'P', '89378', 'hhjv', 'X-TKJ-3', 'guru'),
('5555', 'Zaenal', 'L', '2938', 'jnkjj', 'X-TKJ-2', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `Kode_Jurusan` varchar(50) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan`, `Nama_Jurusan`) VALUES
('J01', 'TKJ'),
('J02', 'AKUNTANSI');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`Kelas_id` int(50) NOT NULL,
  `Kode_Kelas` varchar(50) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kelas_id`, `Kode_Kelas`, `Nama_Kelas`) VALUES
(1, 'K01', 'X-TKJ-1'),
(2, 'K02', 'X-TKJ-2'),
(4, 'K03', 'X-TKJ-3');

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE IF NOT EXISTS `ortu` (
`Ortu_id` int(50) NOT NULL,
  `Kode_Ortu` varchar(50) NOT NULL,
  `Nama_Ortu` varchar(50) NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `Status_Keluarga` enum('Bapak','Ibu','Wali') NOT NULL,
  `No_Telp_Ortu` varchar(50) NOT NULL,
  `Alamat_Ortu` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password_Ortu` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`Ortu_id`, `Kode_Ortu`, `Nama_Ortu`, `JK`, `Status_Keluarga`, `No_Telp_Ortu`, `Alamat_Ortu`, `Username`, `Password_Ortu`) VALUES
(3, 'O_03', 'Baharis', 'L', 'Ibu', '082344518084', 'makassar', 'bahar', 'bahar'),
(6, 'O06', 'Coba', 'P', 'Ibu', '085242450553', 'sdd', 'ortu', 'ortu');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `Kode_Pelanggaran` varchar(50) NOT NULL,
  `Nama_Pelanggaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`Kode_Pelanggaran`, `Nama_Pelanggaran`) VALUES
('P01', 'Menyontek'),
('P02', 'Membolos'),
('P03', 'Berkelahi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
`Pelanggaran_Siswa_Id` int(200) NOT NULL,
  `NIS_Pelanggar` varchar(50) NOT NULL,
  `Nama_Siswa_Pelanggar` varchar(100) NOT NULL,
  `Kode_Kelas_Pelanggar` varchar(50) NOT NULL,
  `Kode_Jurusan_Pelanggar` varchar(50) NOT NULL,
  `Ortu_Id_Pelanggar` varchar(50) NOT NULL,
  `NIP_Guru_Pelanggar` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode_Pelanggaran_Siswa` varchar(50) NOT NULL,
  `Kode_Sanksi_Pelanggar` varchar(50) NOT NULL,
  `No_Telp_Ortu_Pelanggar` varchar(50) NOT NULL,
  `Bimbingan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`Pelanggaran_Siswa_Id`, `NIS_Pelanggar`, `Nama_Siswa_Pelanggar`, `Kode_Kelas_Pelanggar`, `Kode_Jurusan_Pelanggar`, `Ortu_Id_Pelanggar`, `NIP_Guru_Pelanggar`, `Tanggal`, `Kode_Pelanggaran_Siswa`, `Kode_Sanksi_Pelanggar`, `No_Telp_Ortu_Pelanggar`, `Bimbingan`) VALUES
(72, '1111', 'A', 'X-TKJ-1', 'TKJ', 'Baharis', 'Basir', '2017-07-27', 'Menyontek', 'Teguran', '082344518084', 'aaaa'),
(73, '2222', 'B', 'X-TKJ-2', 'TKJ', 'Baharis', 'Zaenal', '2017-07-27', 'Menyontek', 'Teguran', '082344518084', 'jjksd');

-- --------------------------------------------------------

--
-- Table structure for table `sanksi`
--

CREATE TABLE IF NOT EXISTS `sanksi` (
  `Kode_Sanksi` varchar(50) NOT NULL,
  `Nama_Sanksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanksi`
--

INSERT INTO `sanksi` (`Kode_Sanksi`, `Nama_Sanksi`) VALUES
('S01', 'Teguran'),
('S02', 'Skorsing'),
('S03', 'DO');

-- --------------------------------------------------------

--
-- Table structure for table `siswa1`
--

CREATE TABLE IF NOT EXISTS `siswa1` (
  `NIS` varchar(50) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Kode_Kelas_Siswa` varchar(50) NOT NULL,
  `NIP_Siswa` varchar(50) NOT NULL,
  `Kode_Jurusan_Siswa` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK_Siswa` enum('L','P') NOT NULL,
  `No_Telp_Siswa` varchar(50) NOT NULL,
  `Alamat_Siswa` varchar(150) NOT NULL,
  `Ortu_Id_Siswa` varchar(50) NOT NULL,
  `No_Telp_Ortu_Siswa` varchar(50) NOT NULL,
  `Password_Siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa1`
--

INSERT INTO `siswa1` (`NIS`, `Nama_Siswa`, `Kode_Kelas_Siswa`, `NIP_Siswa`, `Kode_Jurusan_Siswa`, `Tanggal_Lahir`, `JK_Siswa`, `No_Telp_Siswa`, `Alamat_Siswa`, `Ortu_Id_Siswa`, `No_Telp_Ortu_Siswa`, `Password_Siswa`) VALUES
('1111', 'A', 'X-TKJ-3', 'Aminah', 'J01', '2017-01-01', 'L', '123', 'bone', '6', '085242450553', 'siswa'),
('2222', 'B', 'X-TKJ-2', 'Zaenal', 'J01', '2017-07-27', 'L', '123', 'maros', '3', '082344518084', 'siswa'),
('3333', 'C', 'X-TKJ-3', 'Aminah', 'J01', '2017-07-04', 'P', '4444', 'bone', '6', '085242450553', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
 ADD PRIMARY KEY (`Bimbingan_Siswa_Id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`NIP`), ADD KEY `FK_mahasiswa_jurusan` (`Kode_Kelas_Guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`Kode_Jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`Kelas_id`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
 ADD PRIMARY KEY (`Ortu_id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
 ADD PRIMARY KEY (`Kode_Pelanggaran`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
 ADD PRIMARY KEY (`Pelanggaran_Siswa_Id`);

--
-- Indexes for table `sanksi`
--
ALTER TABLE `sanksi`
 ADD PRIMARY KEY (`Kode_Sanksi`);

--
-- Indexes for table `siswa1`
--
ALTER TABLE `siswa1`
 ADD PRIMARY KEY (`NIS`), ADD KEY `FK_mahasiswa_jurusan` (`Kode_Kelas_Siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
MODIFY `Bimbingan_Siswa_Id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `Kelas_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
MODIFY `Ortu_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
MODIFY `Pelanggaran_Siswa_Id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
