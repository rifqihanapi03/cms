-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jul 2019 pada 10.08
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(10) NOT NULL,
  `nama_buku` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_keluar` date NOT NULL,
  `jenis_buku` varchar(15) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penerbit`, `tahun_keluar`, `jenis_buku`, `gambar`) VALUES
(1, 'Pendidikan Agama isl', 'PT. STAR ABADI', '2019-07-01', 'Pendidikan', '1.jpg'),
(2, 'Pendidikan Agama isl', 'PT. INTER GAGAH', '2019-07-03', 'Pendidikan', '2.jpg'),
(3, 'Pendidikan Agama isl', 'PT. TATA ABADI', '2019-07-07', 'Pendidikan', '4.jpg'),
(4, 'Pendidikan Agama isl', 'PT. HANUR ABADI', '2019-07-02', 'Pendidikan', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
