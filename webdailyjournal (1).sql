-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2026 pada 06.36
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
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Perkenalkan', 'Halo! Nama saya Anza Ali Syahbani, mahasiswa UDINUS jurusan Teknik Informatika.', 'vctr.jpg', '2025-12-31', 'admin'),
(2, 'Latar Belakang', 'Saya lahir dan besar di Wonogiri, tempat yang sejuk nyaman', 'wonogiri.jpg', '2026-01-01', 'admin'),
(3, 'Hobi', 'Saya hobi coding, hiking, dan belajar aset digital.', '20251231200627.jpg', '2026-01-01', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'gunung lawu', 'foto saya digunung lawu', 'fotoi.jpg', '2026-01-08', 'admin'),
(2, 'gunung merbabu', 'foto saya di gunung merbabu', 'p.jpg', '2026-01-08', 'admin'),
(3, 'gunung prau', 'foto saya di gunung prau', 'prau.jpg', '2026-01-08', 'admin'),
(4, 'gunung telomoyo', 'gunung telomoyo', 'telomoyo.jpg', '2026-01-08', 'admin'),
(5, 'grojogan sewu', 'foto saya di air terjun grojogan sewu', 'grojogan.jpg', '2026-01-08', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '$2y$10$hBn2DNS4gvCdTd8yiC3aF.1YHTnfax8abP7X99LEhMJw5k0kEQfq2', '20260108112251.jpg'),
(2, 'danny', '$2y$10$PuCCVK64TMNZ8CY1Uij.BeBmC1l66/lN8EudNfobyV2.fGSUzUuQ2', 'prfl.jpg'),
(3, 'anza', '$2y$10$/DhClMBMKOAhoUGciS0UyOrIGLW4yVFgfZZq1hoNQQkq41l2e/4Q.', 'anzagntg.jpg'),
(4, 'eren', '$2y$10$zGgAoRqTZpObOP.QHNENxOtdEmlCOf4sg7dh7zqoPNQq/vVlb4lg.', '20260108120040.jpg'),
(5, 'mikasa', '$2y$10$iLV3lNWemYoGXkaEvlCEPu.NHy/u1c4QQiZGL7Bs3UffMUsIcbl7.', '20260108120056.jpg'),
(6, 'armin', '$2y$10$QPj50JMCyYpFcrAgoim9.eldIVrATxt8ibKogGSG1AVKaT8L/MumW', '20260108120119.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
