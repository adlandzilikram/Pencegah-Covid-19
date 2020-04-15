-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 10.21
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_soal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `,` varchar(30) NOT NULL,
  `.` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `,`, `.`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(1, 'Saya pergi keluar rumah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(2, 'Saya menggunakan transportasi umum:online,angkot,bus,taksi,kereta api', 'ya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(3, 'Saya tidak memakai masker saat berkumpul dengan orang lain.', 'ya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(4, 'Saya berjabat dengan orang lain', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(5, 'Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(6, 'Saya menyentuh benda/uang yang juga di sentuh orang lain.', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(7, 'Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika:belanja,bekerja,belajar,ibadah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(8, 'Saya makan di luar rumah(warung/restaurant)', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(9, 'Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(10, 'Saya berada di wilayah kelurahan tempat pasien tertular.', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(11, 'Saya tidak pasang hand sanitizier di depan pintu masuk, untuk membersihkan tangan sebelum memegang gagang untuk masuk pintu', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(12, 'saya tidak mencuci tangan dengan sabun saat tiba di rumah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(13, 'Saya tidak menyediakan : tissue basah/ antiseptic, masker bagi keluarga di rumah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(14, 'Saya tidak langsung merendam baju & celana bekas di luar rumah kedalam air panas/sabun', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(15, 'Saya tidak segera mandi keramas setelah tiba di rumah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(16, 'saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(18, 'Saya tidak jalan kaki / olahraga minimal 30 menit setiap hari', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(19, 'Saya jarang minum vitamin C & E, dan kurang tidur', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(20, 'Usia saya di atas 60 tahun', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(21, 'Saya mempunyai penyakit:jantung/diabetes/gangguan pernapasan kronik', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y'),
(17, 'saya dalam sehari tidak terkena cahayamatahari minimal 15 menit', 'iya', 'tidak', 'b', '', '0000-00-00', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
