-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2021 pada 12.12
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--
CREATE DATABASE IF NOT EXISTS `db_arsip` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_arsip`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE IF NOT EXISTS `surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(150) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `file` varchar(150) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor` (`nomor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nomor`, `kategori`, `judul`, `file`, `waktu`) VALUES
(1, '2020/PD6/TU/001', 'Undangan', 'Undangan Sekretariat', '1496823284.pdf', '2021-10-22 09:25:47'),
(2, '2020/PD6/TU/002', 'Pengumuman', 'Pengumuman mengenai rapat ', '386966662.pdf', '2021-10-22 09:31:35'),
(3, '2020/PD6/TU/003', 'Nota Dinas', 'Nota Dinas tahun 2021-2022', '1402379570.pdf', '2021-10-22 11:53:23'),
(4, '2020/PD6/TU/004', 'Pemberitahuan', 'Pemberitahuan pembelajaran tahun ajaran 2022', '2034920956.pdf', '2021-10-22 09:33:32'),
(8, 'dsdf54sd4fds', 'Pengumuman', 'coba', '1815841253.pdf', '2021-10-22 11:59:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
