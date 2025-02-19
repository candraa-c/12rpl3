-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2025 pada 01.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepolisian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_polisi`
--

CREATE TABLE `anggota_polisi` (
  `id_polisi` int(11) NOT NULL,
  `nama_polisi` varchar(30) NOT NULL,
  `nrp` int(11) NOT NULL,
  `pangkat` varchar(11) NOT NULL,
  `id_satuan` int(111) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('p','l') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota_polisi`
--

INSERT INTO `anggota_polisi` (`id_polisi`, `nama_polisi`, `nrp`, `pangkat`, `id_satuan`, `tanggal_lahir`, `jk`) VALUES
(3, 'Abi Dul Jab ', 123, 'ob', 222, '2025-02-06', 'l'),
(4, 'rizki', 0, 'ob', 111, '2025-02-08', 'l'),
(5, 'rizki', 123, 'ob', 222, '2025-02-05', 'l');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_polisi`
--
ALTER TABLE `anggota_polisi`
  ADD PRIMARY KEY (`id_polisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota_polisi`
--
ALTER TABLE `anggota_polisi`
  MODIFY `id_polisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
