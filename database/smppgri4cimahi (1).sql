-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 05:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smppgri4cimahi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(15) NOT NULL,
  `jenis_tagihan` varchar(15) NOT NULL,
  `th_ajaran_masuk` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `jenis_tagihan`, `th_ajaran_masuk`, `jumlah`) VALUES
(3, 'SPP', '2017/2018', 40000),
(6, 'DSP', '2017/2018', 1000000),
(7, 'DSP', '2016/2017', 950000),
(8, 'DSP', '2015/2016', 950000),
(10, 'SPP', '2015/2016', 35000),
(11, 'TP2A', '2017/2018', 25000),
(12, 'TP2A', '2016/2017', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` varchar(12) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `bulan_ke` char(10) NOT NULL,
  `ket` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `bulan`, `bulan_ke`, `ket`) VALUES
('01', 'Juli', '07', ''),
('02', 'Agustus', '08', ''),
('03', 'September', '09', ''),
('04', 'Oktober', '10', ''),
('05', 'Nopember', '11', ''),
('06', 'Desember', '12', ''),
('07', 'Januari', '01', ''),
('08', 'Februari', '02', ''),
('09', 'Maret', '03', ''),
('10', 'April', '04', ''),
('11', 'Mei', '05', ''),
('12', 'Juni', '06', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `user` varchar(12) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(10) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(12) NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `th_ajaran_masuk` char(15) NOT NULL,
  `th_ajaran` char(15) NOT NULL,
  `telepon` char(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `th_ajaran`
--

CREATE TABLE `th_ajaran` (
  `id_tahun` int(12) NOT NULL,
  `th_ajaran` varchar(12) NOT NULL,
  `ket` varchar(12) NOT NULL,
  `status` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th_ajaran`
--

INSERT INTO `th_ajaran` (`id_tahun`, `th_ajaran`, `ket`, `status`) VALUES
(44, '2017/2018', '', 'aktif'),
(47, '2016/2017', 'Kurtilas', 'tidak'),
(48, '2015/2016', '', 'tidak'),
(56, '2014/2015', 'ktsp', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `trans_dsp`
--

CREATE TABLE `trans_dsp` (
  `no_trans` varchar(12) NOT NULL,
  `nis` char(16) NOT NULL,
  `jenis_tagihan` varchar(16) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_spp`
--

CREATE TABLE `trans_spp` (
  `no_trans` varchar(12) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `id_bayar` varchar(12) NOT NULL,
  `kelas` char(12) NOT NULL,
  `id_bulan` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `th_ajaran`
--
ALTER TABLE `th_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `trans_dsp`
--
ALTER TABLE `trans_dsp`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `trans_spp`
--
ALTER TABLE `trans_spp`
  ADD PRIMARY KEY (`no_trans`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `th_ajaran`
--
ALTER TABLE `th_ajaran`
  MODIFY `id_tahun` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
