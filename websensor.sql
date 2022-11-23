-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 16.22
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websensor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ultrasonik`
--

CREATE TABLE `ultrasonik` (
  `id_us` int(11) NOT NULL,
  `sensor_us` text NOT NULL,
  `tanggal_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ultrasonik`
--

INSERT INTO `ultrasonik` (`id_us`, `sensor_us`, `tanggal_us`) VALUES
(5, '0910901', '23 November 2022 02:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ultrasonik`
--
ALTER TABLE `ultrasonik`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ultrasonik`
--
ALTER TABLE `ultrasonik`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
