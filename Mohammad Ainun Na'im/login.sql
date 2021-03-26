-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 12.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id_akun` int(20) NOT NULL,
  `nama_akun` varchar(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_akun`, `nama_akun`, `username`, `password`) VALUES
(1111, 'admin', 'yaadmin', '12345'),
(1112, 'admin1', 'yaadmin1', '123456789'),
(1113, 'admin2', 'yaadmin2', '1234567'),
(1114, 'admin', 'admin', ' te bnty'),
(1115, 'admin3', 'yaadmin3', '123456789'),
(1116, 'admin', 'admin', '12345'),
(1117, 'admin', 'admin', '12334'),
(1118, 'naim', 'admin', '12345'),
(1119, 'naim', 'naim', '123'),
(1120, 'ainun', 'ainun', '123'),
(1121, '123', '123', '123'),
(1122, '13378', '12345', '123424'),
(1123, 'wet3q4y', '3qyh4h', 'qjt4r4hn'),
(1124, 'RHGERH', 'ERHGEG', 'EHEAH'),
(1125, 'iim', 'iim', '12345'),
(1126, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(1127, 'ainun', 'ainun', '827ccb0eea8a706c4c34a16891f84e7b'),
(1128, 'ndoli', 'ndoli', '12345'),
(1129, 'jajal', 'jajal', '12345'),
(1130, '11111', '11', '698d51a19d8a121ce581499d7b701668'),
(1131, 'wwww', 'wwww', 'e34a8899ef6468b74f8a1048419ccc8b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id_akun` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
