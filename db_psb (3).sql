-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2024 pada 12.22
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` char(10) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
('', 'Rika Yati', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` char(50) NOT NULL,
  `kelas` enum('A','B') NOT NULL,
  `nm_peserta` varchar(200) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','hindu','buddha','khonghucu') NOT NULL,
  `almt_peserta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `kelas`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`) VALUES
('P202300002', '2023-10-29', '', 'B', 'bima', 'Garut', '2023-10-18', 'laki-laki', 'Islam', 'garut\r\n'),
('P202300003', '2023-10-30', '', 'A', 'bbb', 'garut', '2023-10-30', 'laki-laki', 'buddha', 'garut'),
('P202300004', '2023-10-30', '', 'A', 'bbb', 'garut', '2023-10-30', 'laki-laki', 'buddha', 'garut'),
('P202300005', '2023-10-30', '', 'A', 'beni', 'garut', '2015-06-28', 'laki-laki', 'Islam', 'garut'),
('P202300006', '2023-10-30', '', 'A', 'bima', 'garut', '2023-10-30', 'laki-laki', 'Islam', 'garut'),
('P202300007', '2023-11-13', '', 'A', 'cccc', 'garut', '2015-01-01', 'laki-laki', 'Islam', 'jl pungkur'),
('P202300008', '2023-11-14', '', 'B', 'bima', 'garut', '2023-11-14', 'laki-laki', 'Islam', ''),
('P202300009', '2023-11-21', '', 'A', 'qq', 'jayaraga', '2023-11-22', 'laki-laki', 'Islam', 'Jayaraga'),
('P202400010', '2024-02-12', '', 'A', '00', 'garut', '2024-02-12', 'laki-laki', 'khonghucu', 'garut'),
('P202400011', '2024-02-12', '', 'A', 'qqq', 'Garut', '2024-02-20', 'laki-laki', 'Islam', 'garut'),
('P202400012', '2024-02-12', '', 'B', 'ggg', 'asmdwkn', '2024-02-23', 'laki-laki', 'Kristen', 'garut'),
('P202400013', '2024-02-12', '', 'B', 'jjjjjj', 'asdwasdwa', '2024-03-07', 'laki-laki', 'Islam', 'dawkdwkidnain');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
