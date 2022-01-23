-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 02:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '$2a$12$WeUEvgpYjmdrd9z27NJ7qu6XhQLvsYGLcWEdPK5OtOaFW.2kq.7Je', 'default.svg'),
(2, 'admin', 'admin', 'default.svg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `program_studi` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `program_studi`, `no_hp`) VALUES
(1, '18630840', 'Muhammad Nazar Abdillah', 'Teknik Informatika', '082254887113'),
(2, '18310700', 'Nurul Aulia', 'Manajemen', '08567423672366'),
(3, '18630121', 'Muhammad Ridho', 'Sistem Informasi', '087854321442'),
(4, '18712011', 'Iqbal Afardian', 'Ilmu Komunikasi', '082263221145'),
(5, '19630121', 'Alia Nur Zahra', 'Sistem Informasi', '085122132121');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(128) NOT NULL,
  `mata_kuliah` varchar(128) NOT NULL,
  `nilai` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `mahasiswa`, `mata_kuliah`, `nilai`) VALUES
(1, 'Muhammad Nazar Abdillah', 'Pemrograman web', '90'),
(2, 'Nurul Aulia', 'Sistem Informasi Manajemen', '80'),
(3, 'Muhammad Ridho', 'Pemrograman Visual', '77'),
(4, 'Iqbal Afardian', 'Bahasa Indonesia', '70'),
(5, 'Alia Nur Zahra', 'Logika Matematika', '90'),
(6, 'Muhammad Ridho', 'Matematika Diskrit', '70'),
(7, 'Muhammad Nazar Abdillah', 'Sistem Informasi Manajemen', '80'),
(9, 'Muhammad Nazar Abdillah', 'Bahasa Indonesia', '100'),
(10, 'Muhammad Nazar Abdillah', 'Bahasa Indonesia', '70'),
(11, 'Nurul Aulia', 'Manajemen', '85'),
(12, 'Muhammad Ridho', 'ABC', '40'),
(13, 'Iqbal Afardian', 'Bahasa Indonesia', '10'),
(14, 'Nurul Aulia', 'WEB', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
