-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 07.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `library_uas`
--

CREATE TABLE `library_uas` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `library_uas`
--

INSERT INTO `library_uas` (`id`, `nomor`, `code`, `title`, `autor`, `genre`, `total`) VALUES
(1, 1, 2233, 'Bumi Manusia', 'Pramudya Ananta Tour', 'Sejarah', 10),
(2, 2, 2234, 'Hujan', 'Tere Liye', 'Roman', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'aa2@gmail.com', '123'),
(2, 'qwerty', 'aq@gmail.com', '123'),
(3, 'fahrizal', 'fahrizal@gmail.com', 'angga123'),
(4, 'q', 'q@gmail.com', '11'),
(5, 'sa', 'sa@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `library_uas`
--
ALTER TABLE `library_uas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `library_uas`
--
ALTER TABLE `library_uas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
