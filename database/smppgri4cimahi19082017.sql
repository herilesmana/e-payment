-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 02:30 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(6, 'DSP', '2017/2018', 1000000),
(7, 'DSP', '47', 950000),
(8, 'DSP', '48', 950000),
(10, 'SPP', '48', 35000),
(11, 'SPP', '47', 25000),
(12, 'TP2A', '2016/2017', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` char(10) NOT NULL,
  `nama_bulan` varchar(20) NOT NULL,
  `bulan_ke` char(10) NOT NULL,
  `ket` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`, `bulan_ke`, `ket`) VALUES
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
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(1, 'XII TKR C');

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
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kelas` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `th_ajaran_masuk` char(15) NOT NULL,
  `th_ajaran` char(15) NOT NULL,
  `telepon` char(15) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `jk`, `kelas`, `alamat`, `th_ajaran_masuk`, `th_ajaran`, `telepon`, `foto`, `status`) VALUES
('1516010', '1617010', 'Jajang Anggia', 'P', 1, 'Simpur 1', '48', '48', '081294549688', 'foto_jajang.jpg', 'aktif'),
('1617001', '10010', 'Heri Lesmana', 'L', 1, 'Sunagara', '47', '47', '081294549699', '', 'aktif');

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
(47, '2016/2017', 'Kurtilas', 'aktif'),
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

--
-- Dumping data for table `trans_dsp`
--

INSERT INTO `trans_dsp` (`no_trans`, `nis`, `jenis_tagihan`, `tgl`, `jumlah`) VALUES
('', '1718001', 'DSP', '2017-08-14', 60000),
('121', '1718001', 'DSP', '2017-08-13', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `trans_spp`
--

CREATE TABLE `trans_spp` (
  `no_trans` varchar(12) NOT NULL,
  `nis` char(10) NOT NULL,
  `id_bayar` int(15) NOT NULL,
  `kelas` char(12) NOT NULL,
  `id_bulan` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_spp`
--

INSERT INTO `trans_spp` (`no_trans`, `nis`, `id_bayar`, `kelas`, `id_bulan`, `tgl`, `jumlah`) VALUES
('100001', '1516010', 10, 'satu', '01', '2017-08-18', 35000),
('100002', '1516010', 10, 'satu', '02', '2017-08-19', 35000),
('100003', '1516010', 10, 'satu', '03', '2017-08-19', 35000),
('100004', '1516010', 10, 'satu', '04', '2017-08-19', 35000),
('100005', '1617001', 11, 'satu', '01', '2017-08-19', 25000);

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
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_bayar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `th_ajaran`
--
ALTER TABLE `th_ajaran`
  MODIFY `id_tahun` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
