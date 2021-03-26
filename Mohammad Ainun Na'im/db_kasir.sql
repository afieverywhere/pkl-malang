-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 12.40
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
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `passwoard` text NOT NULL,
  `nama_akun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `passwoard`, `nama_akun`) VALUES
(11111, 'kasir1', 'kasir1', 'kasir1'),
(22222, 'kasir2', 'kasir2', 'kasir2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_barang` float NOT NULL,
  `stok_barang` int(15) NOT NULL,
  `id_supplier` int(10) NOT NULL,
  `bobot_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `id_supplier`, `bobot_barang`) VALUES
(11111, 'indomie', 2100, 500, 11111, '50gram'),
(22222, 'susu', 2000, 100, 22222, '30gram'),
(33333, 'aqua', 5000, 200, 33333, '1kg'),
(44444, 'kapal api', 2000, 200, 22222, '15gram'),
(55555, 'geri', 500, 300, 22222, '15gran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(10) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `alamat_customer` text NOT NULL,
  `nohp_customer` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `alamat_customer`, `nohp_customer`) VALUES
(1122, 'ndoli', 'pati kota', 81234567890),
(1133, 'irfan', 'pati', 82123456789);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(20) NOT NULL,
  `invoice_keranjang` int(20) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `tgl_keranjang` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `invoice_keranjang`, `id_barang`, `id_akun`, `tgl_keranjang`) VALUES
(1111, 20210101, 11111, 22222, '2021-03-02 20:39:20'),
(2222, 20210102, 55555, 11111, '2021-03-02 20:39:20'),
(2223, 20201212, 11111, 22222, '0000-00-00 00:00:00'),
(2224, 20201212, 11111, 22222, '2021-03-24 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang1`
--

CREATE TABLE `tb_keranjang1` (
  `id_keranjang` int(20) NOT NULL,
  `invoice_keranjang` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `id_akun` int(50) NOT NULL,
  `tgl_keranjang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keranjang1`
--

INSERT INTO `tb_keranjang1` (`id_keranjang`, `invoice_keranjang`, `id_barang`, `id_akun`, `tgl_keranjang`) VALUES
(2241, 20210311, 11111, 22222, '2021-02-02'),
(2243, 20201212, 11111, 2021, '2021-03-25'),
(2244, 20201212, 11111, 111, '2021-03-16'),
(2245, 20201212, 44444, 22222, '2021-03-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(20) NOT NULL,
  `invoice_keranjang` int(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `id_akun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`id_keuangan`, `invoice_keranjang`, `jenis`, `nominal`, `id_akun`) VALUES
(1111, 20210101, 'masuk', '100000', 11111),
(2222, 20210102, 'masuk', '50000', 22222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(20) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `nohp_supplier` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `nohp_supplier`) VALUES
(11111, 'ainun', 'margoyoso', 85123456789),
(22222, 'garudafood', 'pati-indonesia', 89765432109),
(33333, 'naim', 'tayu', 885098765432);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_akun_2` (`id_akun`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`) USING BTREE,
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_akun_2` (`id_akun`),
  ADD KEY `id_akun_3` (`id_akun`),
  ADD KEY `invoice_keranjang` (`invoice_keranjang`),
  ADD KEY `id_akun_4` (`id_akun`),
  ADD KEY `id_akun_5` (`id_akun`),
  ADD KEY `id_akun_6` (`id_akun`);

--
-- Indeks untuk tabel `tb_keranjang1`
--
ALTER TABLE `tb_keranjang1`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `invoice_keranjang` (`invoice_keranjang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_akun`,`id_keuangan`),
  ADD KEY `invoice_keranjang` (`invoice_keranjang`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2233;

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang1`
--
ALTER TABLE `tb_keranjang1`
  MODIFY `id_keranjang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2249;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD CONSTRAINT `111` FOREIGN KEY (`id_akun`) REFERENCES `tb_keranjang` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `222` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);

--
-- Ketidakleluasaan untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `555` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD CONSTRAINT `444` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`),
  ADD CONSTRAINT `666` FOREIGN KEY (`invoice_keranjang`) REFERENCES `tb_keranjang` (`invoice_keranjang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
