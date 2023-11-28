-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 13.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_klub`
--

CREATE TABLE `tb_klub` (
  `id_klub` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `kota` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_klub`
--

INSERT INTO `tb_klub` (`id_klub`, `nama`, `kota`) VALUES
(8, 'Persib', 'Bandung'),
(10, 'Persija', 'Jakarta'),
(11, 'Arema', 'Solo'),
(12, 'Persis Solo', 'Solo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skor`
--

CREATE TABLE `tb_skor` (
  `id_score` int(11) NOT NULL,
  `klub_1` varchar(120) NOT NULL,
  `klub_2` varchar(120) NOT NULL,
  `score_1` int(11) NOT NULL,
  `score_2` int(11) NOT NULL,
  `status_1` int(11) NOT NULL,
  `status_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_skor`
--

INSERT INTO `tb_skor` (`id_score`, `klub_1`, `klub_2`, `score_1`, `score_2`, `status_1`, `status_2`) VALUES
(1, 'Persib', 'Persija', 2, 1, 3, 0),
(2, 'Persija', 'Dewa United', 1, 1, 1, 1),
(3, 'Persib', 'Dewa United', 0, 2, 0, 3),
(5, 'Arema', 'Persis Solo', 2, 0, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_klub`
--
ALTER TABLE `tb_klub`
  ADD PRIMARY KEY (`id_klub`);

--
-- Indeks untuk tabel `tb_skor`
--
ALTER TABLE `tb_skor`
  ADD PRIMARY KEY (`id_score`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_klub`
--
ALTER TABLE `tb_klub`
  MODIFY `id_klub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_skor`
--
ALTER TABLE `tb_skor`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
