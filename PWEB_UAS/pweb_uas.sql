-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jul 2023 pada 07.53
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
-- Database: `pweb_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbae`
--

CREATE TABLE `tbae` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idae` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbae`
--

INSERT INTO `tbae` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idae`) VALUES
(1, 'Eldhin Rahadian Putra', 'AE celiboy', 20, 'Junggler', 'Laki-laki', 'Indonesia ', '98f13708210194c475687be6106a3b84vfavre'),
(3, 'Syauki Fauzan Sumarno', 'AE Nino', 19, 'Goldlaner', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4fgfgfsd'),
(4, 'Muhammad Julian', 'AE Udil', 22, 'Midlaner', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9eretydg'),
(5, 'Rasya Arga Wisista', 'AE Rasy', 22, 'Roamer', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9jhjhkjm'),
(6, 'Michael Giovani Tjandra', 'AE Variety', 19, 'Junggler', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4wertvgtty'),
(7, 'Gustian', 'AE RekT', 26, 'Roamer', 'Laki-laki', 'Indonesia', '4e732ced3463d06de0ca9a15b6153677vknk09'),
(8, 'Rafly Alvareza Sudrajat', 'AE Pai', 24, 'Explaner', 'Laki-laki', 'Indonesia', '1ff1de774005f8da13f42943881c655fcgtr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbaura`
--

CREATE TABLE `tbaura` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idaura` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbaura`
--

INSERT INTO `tbaura` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idaura`) VALUES
(1, 'Leonardo Prasetyo Agung', 'AURA Kabuki', 20, 'Goldlaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84advar65e4'),
(2, 'Jehuda Jordan Sumual', 'AURA High', 22, 'Roamer', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9geavwergvw'),
(3, 'Silvan Vanness', 'AURA Van', 17, 'Junggler', 'Laki-laki', 'Indonesia', '70efdf2ec9b086079795c442636b55fbmktk6798'),
(4, 'Reza Anggara', 'AURA Syndrome', 20, 'Midlaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84oifkmy5'),
(5, 'Usep Setiawan', 'AURA FaceHugger', 25, 'Midlaner', 'Laki-laki', 'Indonesia', '8e296a067a37563370ded05f5a3bf3ecagwart'),
(6, 'Kimura putra', 'AURA Pahlevi', 21, 'Explaner', 'Laki-laki', 'Indonesia', '3c59dc048e8850243be8079a5c74d079ddddffff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbtr`
--

CREATE TABLE `tbbtr` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idbtr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbbtr`
--

INSERT INTO `tbbtr` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idbtr`) VALUES
(1, 'Marcel Juan Moreno Sinulingga', 'BTR Moreno', 18, 'Midlaner', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4zbdfz'),
(2, 'I Gusti Made Indra Dwipayana ', 'BTR Xorizo', 20, 'Explaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84bts34'),
(3, 'Hengky Kurniawan', 'BTR Kyy', 19, 'Roamer', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc457u4q4a5'),
(4, 'Kenneth Marcello ', 'BTR SUPERKenn', 17, 'Junggler', 'Laki-laki', 'Indonesia', '70efdf2ec9b086079795c442636b55fbveg43qt'),
(5, 'Dicky Cahyana', 'BTR Sakenn', 20, 'Goldlaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84mufyw5are'),
(6, 'Calvin', 'BTR SUPERVyn', 23, 'Roamer', 'Laki-laki', 'Indonesia', '37693cfc748049e45d87b8c7d8b9aacdba4gtega');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdewa`
--

CREATE TABLE `tbdewa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `iddewa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdewa`
--

INSERT INTO `tbdewa` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `iddewa`) VALUES
(1, 'Supriyanto Salim', 'DEWA Dyxon', 21, 'Explaner', 'Laki-laki', 'Indonesia', '3c59dc048e8850243be8079a5c74d079vszdva'),
(2, 'Indra Setiawan', 'DEWA Keyz', 22, 'Midlaner', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9rgtrh'),
(3, 'Delvin Gunawan', 'DEWA Lanaya', 19, 'Junggler', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4umfmf'),
(4, ' Reynaldo Ferdiand Chai', 'DEWA Rey', 17, 'Junggler', 'Laki-laki', 'Indonesia', '70efdf2ec9b086079795c442636b55fbnydjns'),
(5, 'Supriadi Dwi Putra', 'DEWA Watt', 26, 'Goldlaner', 'Laki-laki', 'Indonesia', '4e732ced3463d06de0ca9a15b6153677dyjtxdt'),
(6, 'Sebastian Arthur', 'DEWA Pendragon', 21, 'Explaner', 'Laki-laki', 'Indonesia', '3c59dc048e8850243be8079a5c74d079mfyumy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbevos`
--

CREATE TABLE `tbevos` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idevos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbevos`
--

INSERT INTO `tbevos` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idevos`) VALUES
(1, 'Darrel Jovanco Wijaya', 'EVOS Tazz', 18, 'Junggler', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6d23faevra'),
(4, 'Rachmad Wahyudi', 'EVOS Dreams', 23, 'Roamer', 'Laki-laki', 'Indonesia', '37693cfc748049e45d87b8c7d8b9aacdaewavev'),
(5, 'Jabran Bagus Wiloko', 'EVOS Branzz', 24, 'Goldlaner', 'Laki-laki', 'Indonesia', '1ff1de774005f8da13f42943881c655ffeawgr'),
(6, 'Dalvin Ramadhana Putra ', 'EVOS Hijumme', 19, 'Midlaner', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4agreag'),
(7, 'Gerald Trinchera', 'EVOS Dlarr', 23, 'Explaner', 'Laki-laki', 'Filipina', '37693cfc748049e45d87b8c7d8b9aacdvfevae'),
(8, 'Regi Marviola', 'EVOS Fluffy', 22, 'Explaner', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9kyuku'),
(9, 'Arthur Sunarkho', 'EVOS Sutsujin', 18, 'Junggler', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6d23mnhfm'),
(10, 'Vincentsius Ivan Adrianto', 'EVOS Ivann', 23, 'Roamer', 'Laki-laki', 'Indonesia', '37693cfc748049e45d87b8c7d8b9aacdnghtrdh'),
(11, 'Muhammad Nur Effandy Yusuf', 'EVOS Cr1te', 22, 'Midlaner', 'Laki-laki', 'Indonesia', 'b6d767d2f8ed5d21a44b0e5886680cb9nhgcggc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgeek`
--

CREATE TABLE `tbgeek` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idgeek` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbgeek`
--

INSERT INTO `tbgeek` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idgeek`) VALUES
(1, 'Luke Febrian Valentinus', 'GEEK Luke', 20, 'Explaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84sberbre'),
(2, 'Allen Jedric O. Baloy', 'GEEK Baloyskie', 24, 'Roamer', 'Laki-laki', 'Filipina', '1ff1de774005f8da13f42943881c655fzdvsse'),
(3, 'Mohammad Dwi Chandra Pambudi', 'GEEK Caderaa', 20, 'Goldlaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84baebesr'),
(4, 'Valent Agriansyah Putra', 'GEEK Aboy', 19, 'Midlaner', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4zzdregr'),
(5, 'Jaymark Aaron Thomas Lazaro', 'GEEK Janaqt', 21, 'Junggler', 'Laki-laki', 'Filipina', '3c59dc048e8850243be8079a5c74d079vaewvear'),
(6, 'Matthew Geraldo', 'GEEK Matt', 20, 'Explaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84zvaerbt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbonic`
--

CREATE TABLE `tbonic` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idonic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbonic`
--

INSERT INTO `tbonic` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idonic`) VALUES
(1, 'Gilang', 'ONIC Sanzz', 21, 'Midlaner', 'Laki-laki', 'Indonesia ', '3c59dc048e8850243be8079a5c74dahdjgvba'),
(3, 'Kairi Ygnacio Rayosdelsol ', 'ONIC Kairi', 18, 'Junggler', 'Laki-laki', 'Filipina', '6f4922f45568161a8cdf4ad2299f6d23djkvba'),
(4, 'Muhammad Satrya Sanubari', 'ONIC Butss', 23, 'Explaner', 'Laki-laki', 'Indonesia', '37693cfc748049e45d87b8c7d8b9aacdzdjg'),
(5, 'Calvin Winata', 'ONIC CW', 23, 'Goldlaner', 'Laki-laki', 'Indonesia', '37693cfc748049e45d87b8c7d8b9aacdzbvse'),
(6, 'driand Larsen Wong', 'ONIC Drian', 21, 'Midlaner', 'Laki-laki', 'Indonesia', '3c59dc048e8850243be8079a5c74d079bsrbr'),
(7, 'Nicky Fernando Pontonuwu', 'ONIC Kiboy', 20, 'Roamer', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84vedbsr'),
(8, 'Albert Neilsen Iskandar', 'ONIC Albert', 19, 'Junggler', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4rebsr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrbl`
--

CREATE TABLE `tbrbl` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idrbl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbrbl`
--

INSERT INTO `tbrbl` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idrbl`) VALUES
(1, 'Karsten William', 'RBL kars', 18, 'Explaner', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6d23'),
(2, 'Dhannya Posa Hoputra', 'RBL Haizz', 20, 'Goldlaner', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3b84'),
(3, 'Vincent Frandica Suwnadhi', 'RBL Vincent', 18, 'Junggler', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6d267'),
(4, 'Bernard Ditya Wiliardi Widjanarko', 'RBL Widjanarko', 21, 'Roamer', 'Laki-laki', 'Indonesia ', '3c59dc048e8850243be8079a5c74d079'),
(5, 'Satria Putra Perdana', 'RBL Saep', 19, 'Explaner', 'Laki-laki', 'Indonesia', '1f0e3dad99908345f7439f8ffabdffc4'),
(6, 'Attanasius David Halomoan Sihaloho', 'RBL Swaylow', 21, 'Midlaner', 'Laki-laki', 'Indonesia', '3c59dc048e8850243be8079a5c74d543');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrrq`
--

CREATE TABLE `tbrrq` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nickname` varchar(255) NOT NULL,
  `umur` int(3) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `idrrq` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbrrq`
--

INSERT INTO `tbrrq` (`id`, `nama`, `nickname`, `umur`, `role`, `jeniskelamin`, `negara`, `idrrq`) VALUES
(11, ' Min Ko Ko', 'RRQ Naomi ', 21, 'Roamer', 'Laki-laki', 'Myanmar', '3c59dc048e8850243be8079a5c74d079'),
(12, 'Deden Muhammad Nurhasan', 'RRQ Clayy', 20, 'Junggler', 'Laki-laki', 'Indonesia', '98f13708210194c475687be6106a3765'),
(17, 'Ferdyansyah Kamaruddin', 'RRQ Ferxic', 18, 'Junggler', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6d23'),
(18, 'Yasaya Omega Armando Wowiling', 'RRQ Xinn', 25, 'Goldlaner', 'Laki-laki', 'Indonesia', '1ff1de774005f8da13f42943881c787f'),
(19, 'Deven Markos', 'RRQ Cipuy', 24, 'Roamer', 'Laki-laki', 'Indonesia', '1ff1de774005f8da13f42943881c655f'),
(20, 'Andre Raymond Putra', 'RRQ Banana', 18, 'Explaner', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299f6g90'),
(21, 'Schevenko David Tendean', 'RRQ Skylar', 20, 'Goldlaner', 'Laki-laki', 'Indonesia ', '98f13708210194c475687be6106a3b84'),
(22, 'Muhammad Ikhsan', 'RRQ Lemon', 23, 'Midlaner', 'Laki-laki', 'Indonesia', '6f4922f45568161a8cdf4ad2299sf45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(3, 'anton', 'anton@gmail.com', 'anjay123', '', '1af2ebb6a6fb4aea94ee8c3f4b175b60'),
(4, 'Ananta Wijaya', 'ananjack35@gmail.com', 'ananta', '123', 'ecf02a6a3c490e814b38332ee233e97f'),
(6, 'anjay', 'a@gmail.com', 'ANAN', '123', '45d4eede0ccfb09b8790a0f169082be0'),
(8, 'anantaWijaya', 'anantawijaya12@gmail.com', 'wijaya14', '1234', '875411bff43bff596f2414437616ff6d'),
(9, 'Randi', 'randi@gmail.com', 'randi17', '17', '415e6d8830cc55b50eb64cf6b030e8c5'),
(10, 'lidejack', 'lidejack@gmail.com', 'LideJack', '234', '8d7a3231e2a40a5da89c7f678f47b471'),
(11, 'ad', 'as@gmail.com', 'ahay', 'abc', 'f38ac704959f3e39b5b9d70274c2d074'),
(12, 'I Made Segara Bayu', 'Bayusegara@gmail.com', 'BayuSegara', '123', '81cbf1741d719e351e82956a1e0cbe96');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbae`
--
ALTER TABLE `tbae`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idae` (`idae`);

--
-- Indeks untuk tabel `tbaura`
--
ALTER TABLE `tbaura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idaura` (`idaura`);

--
-- Indeks untuk tabel `tbbtr`
--
ALTER TABLE `tbbtr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idbtr` (`idbtr`);

--
-- Indeks untuk tabel `tbdewa`
--
ALTER TABLE `tbdewa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iddewa` (`iddewa`);

--
-- Indeks untuk tabel `tbevos`
--
ALTER TABLE `tbevos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idevos` (`idevos`);

--
-- Indeks untuk tabel `tbgeek`
--
ALTER TABLE `tbgeek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idgeek` (`idgeek`);

--
-- Indeks untuk tabel `tbonic`
--
ALTER TABLE `tbonic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idonic` (`idonic`);

--
-- Indeks untuk tabel `tbrbl`
--
ALTER TABLE `tbrbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idrbl` (`idrbl`);

--
-- Indeks untuk tabel `tbrrq`
--
ALTER TABLE `tbrrq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idrrq` (`idrrq`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbae`
--
ALTER TABLE `tbae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbaura`
--
ALTER TABLE `tbaura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbbtr`
--
ALTER TABLE `tbbtr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbdewa`
--
ALTER TABLE `tbdewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbevos`
--
ALTER TABLE `tbevos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbgeek`
--
ALTER TABLE `tbgeek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbonic`
--
ALTER TABLE `tbonic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbrbl`
--
ALTER TABLE `tbrbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbrrq`
--
ALTER TABLE `tbrrq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
