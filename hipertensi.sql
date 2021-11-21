-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 05:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hipertensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
(1, 'Sakit kepala'),
(2, 'Penglihatan terganggu'),
(3, 'Riwayat hipertensi keluarga'),
(4, 'Penurunan kesadaran'),
(5, 'Tanda kegagalan organ seperti pembengkakkan dan parese ekstremitas'),
(6, 'Kejang'),
(7, 'Delirium'),
(8, 'Tekanan sistolik diantara 120-129mmHg dan tekanan diastolik dibawah 80mmHg'),
(9, 'Tekanan sistolik diantara 130-139mmHg dan tekanan diastolik diantara 80-89mmHg'),
(10, 'Tekanan sistolik diantara 160 mmHg atau lebih, diastolik 100 mmHg atau lebih'),
(11, 'Peningkatan Tekanan Darah yang berat >180/120mmHg pada kondisi klinis stabil tanpa adanya perubahan akut atau ancaman kerusakan organ target atau disfungsi organ'),
(12, 'Peningkatan Tekanan Darah yang berat >180/120mmHg disertai bukti kerusakan baru atau perburukan kerusakan organ target (Target Organ Damage=TOD)');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `kode_penyakit` varchar(100) NOT NULL,
  `id_gejala` int(12) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `kode_penyakit`, `id_gejala`, `mb`, `md`) VALUES
(1, 'PH', 1, 0.6, 0.4),
(2, 'HPI', 1, 0.6, 0.4),
(3, 'HPII', 1, 0.6, 0.4),
(4, 'HU', 1, 0.6, 0.4),
(5, 'HE', 1, 0.6, 0.4),
(6, 'HPI', 2, 0.6, 0.4),
(7, 'HU', 2, 0.6, 0.4),
(8, 'HE', 2, 0.6, 0.4),
(9, 'PH', 2, 0.6, 0.4),
(10, 'HPII', 2, 0.6, 0.4),
(11, 'PH', 3, 0.6, 0.4),
(12, 'HPI', 3, 0.6, 0.4),
(13, 'HPII', 3, 0.6, 0.4),
(14, 'HU', 3, 0.6, 0.4),
(15, 'HE', 3, 0.6, 0.4),
(16, 'HU', 4, 0.75, 0.25),
(17, 'HE', 4, 0.75, 0.25),
(18, 'HE', 5, 0.8, 0.2),
(19, 'HE', 6, 0.8, 0.2),
(20, 'HE', 7, 0.8, 0.2),
(21, 'PH', 8, 0.9, 0.1),
(22, 'HPI', 9, 0.9, 0.1),
(23, 'HPII', 10, 0.9, 0.1),
(24, 'HU', 11, 0.9, 0.1),
(25, 'HE', 12, 0.9, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `solusi_penyakit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `kode_penyakit`, `solusi_penyakit`) VALUES
(1, 'Pre hipertensi', 'PH', 'Atur pola makan, batasi konsumsi garam, olahraga teratur, berhenti merokok, kelola stress'),
(2, 'Hipertensi Grade I', 'HPI', 'Atur pola makan, batasi konsumsi garam, olahraga teratur, berhenti merokok, kelola stress'),
(3, 'Hipertensi Grade II', 'HPII', 'Atur pola makan, batasi konsumsi garam, olahraga teratur, berhenti merokok, kelola stress'),
(4, 'Hipertensi Urgensi', 'HU', 'Konsumsi obat darah tinggi diuretik seperti Thiazide'),
(5, 'Hipertensi Emergensi', 'HE', 'Hubungi rumah sakit terdekat dengan segera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
