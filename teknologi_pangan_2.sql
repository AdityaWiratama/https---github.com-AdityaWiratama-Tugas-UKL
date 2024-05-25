-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2024 pada 12.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknologi_pangan_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`, `Role`) VALUES
(13, 'aditya', 'aditwirayama@gmail.c', 'ditz', 'admin', 'admin'),
(14, '', '', '', '', 'admin'),
(15, 'aditya', 'dd@gmail.com', 'ditz', 'user', 'user'),
(16, 'aditya', 'dd@gmail.com', 'ditz', 'user', 'user'),
(17, 'aditya', 'dd@gmail.com', 'ditz', 'user', 'user'),
(18, 'adit', 'dd@gmail.com', 'dd', 'user', 'user'),
(19, 'aditya', 'aa@gmailcom', 'cakep', 'user', 'user'),
(20, 'aditya', 'paokt568@gmail.com', 'DITZPRIDE', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_2`
--

CREATE TABLE `akun_2` (
  `id_akun_2` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun_2`
--

INSERT INTO `akun_2` (`id_akun_2`, `nama`, `username`, `email`, `password`, `level`) VALUES
(0, 'aditya', 'Adity.wr', 'paokt568@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalkulator_pupuk`
--

CREATE TABLE `kalkulator_pupuk` (
  `id_kalkulator_pupuk` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `luas_lahan` varchar(200) NOT NULL,
  `Banyak_pupuk` varchar(200) NOT NULL,
  `id_akun_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema_2`
--

CREATE TABLE `tema_2` (
  `id_tema_2` int(11) NOT NULL,
  `id_akun_2` int(11) NOT NULL,
  `nama_tema` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tema_2`
--

INSERT INTO `tema_2` (`id_tema_2`, `id_akun_2`, `nama_tema`) VALUES
(2, 0, 'halah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_User` int(11) NOT NULL,
  `id_akun_2` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(200) NOT NULL,
  `jenis_kel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_User`, `id_akun_2`, `nama`, `alamat`, `no_telp`, `jenis_kel`) VALUES
(1, 0, 'ww', 'qwdefcdrvfd', '088888888888', 'l');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_2`
--
ALTER TABLE `akun_2`
  ADD PRIMARY KEY (`id_akun_2`);

--
-- Indeks untuk tabel `kalkulator_pupuk`
--
ALTER TABLE `kalkulator_pupuk`
  ADD PRIMARY KEY (`id_kalkulator_pupuk`),
  ADD KEY `kalkulator_akun` (`id_akun_2`);

--
-- Indeks untuk tabel `tema_2`
--
ALTER TABLE `tema_2`
  ADD PRIMARY KEY (`id_tema_2`),
  ADD KEY `fk_tema_akun_2` (`id_akun_2`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_User`),
  ADD KEY `fk_customer_akun` (`id_akun_2`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kalkulator_pupuk`
--
ALTER TABLE `kalkulator_pupuk`
  ADD CONSTRAINT `kalkulator_akun` FOREIGN KEY (`id_akun_2`) REFERENCES `akun_2` (`id_Akun_2`);

--
-- Ketidakleluasaan untuk tabel `tema_2`
--
ALTER TABLE `tema_2`
  ADD CONSTRAINT `fk_tema_akun_2` FOREIGN KEY (`id_akun_2`) REFERENCES `akun_2` (`id_Akun_2`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_customer_akun` FOREIGN KEY (`id_akun_2`) REFERENCES `akun_2` (`id_Akun_2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
