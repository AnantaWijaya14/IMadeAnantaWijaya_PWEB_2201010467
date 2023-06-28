-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Bulan Mei 2023 pada 16.58
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UTS_PWEB`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdsn`
--

CREATE TABLE `tbdsn` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nip` varchar(35) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `notlp` varchar(20) DEFAULT NULL,
  `iddsn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdsn`
--

INSERT INTO `tbdsn` (`id`, `nama`, `nip`, `jabatan`, `jeniskelamin`, `notlp`, `iddsn`) VALUES
(1, 'Christina Dewi', '202020', 'Kepala Program Studi ', 'Perempuan', '087816999230', 'a28f05f5f45fe2d8a900736c8935fe44'),
(5, 'A.A Gede Adi Putra ', '2424242424', 'Kepala Jurusan ', 'Laki-laki', '087878782323', '81c595f20f8f1693a8f249a6ecb187d0'),
(6, 'I Made Gede Sri Arthaa', '2121212121', 'Dekan', 'Laki-laki', '0898989898923', 'f0883acc7efce873a327c6891a80cdf3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(35) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `idmhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `jeniskelamin`, `tgl_lahir`, `idmhs`) VALUES
(7, 'I Made Ananta Wijaya', '2201010467', 'Teknik Infromatika', 'Laki-laki', '2004-02-05', '3b5a27f0389ccb7797591874ea86e46b'),
(9, 'I Gede Aditya Putra', '2201010469', 'Teknik Informatika', 'Laki-laki', '2004-05-02', '2467d3744600858cc9026d5ac6005305'),
(10, 'Ni Kadek Ayu Putri', '2201010468', 'Teknik Infromatika', 'Perempuan', '2004-05-02', '18fd72352dfa1664a589c6efdb79275f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmk`
--

CREATE TABLE `tbmk` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `dosen_pengajar` varchar(35) DEFAULT NULL,
  `jml_sks` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `ruangan` varchar(255) DEFAULT NULL,
  `idmk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbmk`
--

INSERT INTO `tbmk` (`id`, `nama`, `dosen_pengajar`, `jml_sks`, `semester`, `ruangan`, `idmk`) VALUES
(3, 'Basis Data', 'A.A Gede Adi Putra ', '3', '1', '202', 'd399b35ea67daf8750b7cf2fb5065799'),
(4, 'Pemrograman web', 'I Made Gede Sri Arthaa', '3', '2', 'Lab G', '7dd314c69441d5c69b0b3f7ca38c50d3'),
(7, 'Algoritma ', 'Christina Dewi', '3', '1', 'Lab H', 'd7e60e5c49e1d2829eacf55b44f44f36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(3, 'I Gede Ari Mahendra', 'arimahendra18@gmail.com', 'arimahen18', '12345678', '1af2ebb6a6fb4aea94ee8c3f4b175b60'),
(4, 'I made ananta wijaya', 'ananajck35@gmail.com', 'ananta', '123', 'ecf02a6a3c490e814b38332ee233e97f'),
(7, 'I Putu Surya Sentana', 'Suryasentana@gmail.com', 'Surya25', '12345678', '7fd420289ec7eef7313e0c430160e456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbdsn`
--
ALTER TABLE `tbdsn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbmk`
--
ALTER TABLE `tbmk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbdsn`
--
ALTER TABLE `tbdsn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbmk`
--
ALTER TABLE `tbmk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
