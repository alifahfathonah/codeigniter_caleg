-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Apr 2019 pada 15.30
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_caleg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caleg`
--

CREATE TABLE `caleg` (
  `id_clg` int(11) NOT NULL,
  `nama_clg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `caleg`
--

INSERT INTO `caleg` (`id_clg`, `nama_clg`) VALUES
(1, 'Bukan Caleg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi`
--

CREATE TABLE `saksi` (
  `id_sks` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `nama_sks` varchar(255) NOT NULL,
  `tlp_sks` varchar(15) NOT NULL,
  `ket_sks` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id_sra` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `kota_sra` varchar(255) NOT NULL,
  `kec_sra` varchar(255) NOT NULL,
  `kel_sra` varchar(255) NOT NULL,
  `tps_sra` varchar(5) NOT NULL,
  `jum_sra` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `lvl_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caleg`
--
ALTER TABLE `caleg`
  ADD PRIMARY KEY (`id_clg`);

--
-- Indeks untuk tabel `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id_sks`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_sra`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caleg`
--
ALTER TABLE `caleg`
  MODIFY `id_clg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id_sks` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id_sra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
