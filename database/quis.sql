-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2020 pada 09.27
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
-- Database: `quis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fixhasil`
--

CREATE TABLE `fixhasil` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `fixhasil`
--

INSERT INTO `fixhasil` (`id`, `id_pertanyaan`, `jawaban`, `created`, `updated`) VALUES
(19, 5, 'Tidak Senang Sekali', '2020-06-25 00:35:07', '2020-06-25 00:35:07'),
(20, 6, 'Tidak Senang', '2020-06-25 00:35:07', '2020-06-25 00:35:07'),
(21, 7, 'Senang Sekali', '2020-06-25 00:35:07', '2020-06-25 00:35:07'),
(22, 5, 'Biasa', '2020-06-25 01:15:06', '2020-06-25 01:15:06'),
(23, 6, 'Senang', '2020-06-25 01:15:06', '2020-06-25 01:15:06'),
(24, 7, 'Senang Sekali', '2020-06-25 01:15:06', '2020-06-25 01:15:06'),
(25, 5, 'Tidak Senang Sekali', '2020-06-25 01:17:04', '2020-06-25 01:17:04'),
(26, 6, 'Tidak Senang', '2020-06-25 01:17:04', '2020-06-25 01:17:04'),
(27, 7, 'Biasa', '2020-06-25 01:17:04', '2020-06-25 01:17:04'),
(28, 5, 'Senang Sekali', '2020-06-25 01:18:31', '2020-06-25 01:18:31'),
(29, 6, 'Senang', '2020-06-25 01:18:31', '2020-06-25 01:18:31'),
(30, 7, 'Tidak Senang', '2020-06-25 01:18:31', '2020-06-25 01:18:31'),
(31, 5, 'Biasa', '2020-06-25 01:19:19', '2020-06-25 01:19:19'),
(32, 6, 'Senang', '2020-06-25 01:19:19', '2020-06-25 01:19:19'),
(33, 7, 'Tidak Senang', '2020-06-25 01:19:19', '2020-06-25 01:19:19'),
(34, 5, 'Tidak Senang Sekali', '2020-06-26 10:56:45', '2020-06-26 10:56:45'),
(35, 6, 'Tidak Senang', '2020-06-26 10:56:45', '2020-06-26 10:56:45'),
(36, 7, 'Biasa', '2020-06-26 10:56:45', '2020-06-26 10:56:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `umur` varchar(15) COLLATE utf8mb4_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(25) COLLATE utf8mb4_swedish_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `kelurahan` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `no_hp` int(25) NOT NULL,
  `pilihan1` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan2` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan3` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan4` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan5` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `umur`, `jenis_kelamin`, `kecamatan`, `kelurahan`, `email`, `no_hp`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `pilihan5`, `created`, `modified`) VALUES
(26, 'asep', '32', 'Laki Laki', 'Sukasari', 'Ancol', 'asep@gmail.com', 897367273, '1', '0', '0', '1', '1', '2020-06-25 00:35:07', '2020-06-25 00:35:07'),
(27, 'kocak', '32', 'Laki Laki', 'Coblong', 'Ancol', 'kocak@gmail.com', 897367273, '1', '1', '1', '0', '0', '2020-06-25 01:15:06', '2020-06-25 01:15:06'),
(28, 'andi', '23', 'Laki Laki', 'Babakan Ciparay', 'Ancol', 'andi@gmail.com', 897367273, '0', '0', '1', '1', '1', '2020-06-25 01:17:04', '2020-06-25 01:17:04'),
(29, 'suep', '23', 'Laki Laki', 'Bojongloa Kaler', 'Ancol', 'suep@gmail.com', 897367273, '1', '1', '0', '1', '0', '2020-06-25 01:18:31', '2020-06-25 01:18:31'),
(30, 'babon', '22', 'Laki Laki', 'Andir', 'Ancol', 'babon@gmail.com', 897367273, '0', '1', '1', '1', '0', '2020-06-25 01:19:19', '2020-06-25 01:19:19'),
(31, 'Juice Anggur', '22', 'Laki Laki', 'Sukasari', 'Regol', 'salah@gmail.com', 897367273, '0', '0', '1', '1', '1', '2020-06-26 10:56:45', '2020-06-26 10:56:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kd_kecamatan` varchar(10) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nama_kecamatan` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `geojson_kecamatan` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `warna` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kd_kecamatan`, `nama_kecamatan`, `geojson_kecamatan`, `warna`, `created`, `updated`) VALUES
(9, '32.73.01', 'Sukasari', 'Sukasari.geojson', '#009900', '2020-06-20 22:14:35', '2020-06-25 03:21:48'),
(10, '32.73.02', 'Coblong', 'Coblong.geojson', '#555', '2020-06-20 22:18:06', '2020-06-25 03:35:59'),
(11, '32.73.03', 'Babakan Ciparay', 'Babakan Ciparay.geojson', '#f00', '2020-06-20 23:00:20', '2020-06-25 03:36:16'),
(12, '32.73.04', 'Bojongloa Kaler', 'Bojongloa Kaler.geojson', '#f90', '2020-06-20 23:00:47', '2020-06-25 03:36:21'),
(13, '32.73.05', 'Andir', 'Andir.geojson', '#09d', '2020-06-20 23:01:07', '2020-06-25 03:36:25'),
(14, '32.73.06', 'Cicendo', 'Cicendo.geojson', '#090', '2020-06-20 23:17:43', '2020-06-25 03:36:30'),
(15, '32.73.07', 'Sukajadi', 'Sukajadi.geojson', '#009999', '2020-06-20 23:17:56', '2020-06-25 03:36:34'),
(16, '32.73.08', 'Cidadap', 'Cidadap.geojson', '#990099', '2020-06-20 23:19:20', '2020-06-25 03:36:42'),
(17, '32.73.09', 'Bandung Wetan', 'Bandung Wetan.geojson', '#662222', '2020-06-20 23:19:38', '2020-06-25 03:36:46'),
(18, '32.73.10', 'Astanaanyar', 'Astanaanyar.geojson', '#888', '2020-06-20 23:20:05', '2020-06-25 03:36:50'),
(19, '32.73.11', 'Regol', 'Regol.geojson', '#222', '2020-06-20 23:20:26', '2020-06-25 03:36:54'),
(20, '32.73.12', 'Batununggal', 'Batununggal.geojson', '#009900', '2020-06-20 23:20:44', '2020-06-25 03:36:57'),
(21, '32.73.13', 'Lengkong', 'Lengkong.geojson', '#555', '2020-06-20 23:21:01', '2020-06-25 03:37:02'),
(22, '32.73.14', 'Cibeunying Kidul', 'Cibeunying Kidul.geojson', '#f00', '2020-06-20 23:21:32', '2020-06-25 03:37:05'),
(23, '32.73.15', 'Bandung Kulon', 'Bandung Kulon.geojson', '#f90', '2020-06-20 23:22:53', '2020-06-25 03:37:09'),
(24, '32.73.16', 'Kiaracondong', 'Kiaracondong.geojson', '#09d', '2020-06-20 23:23:23', '2020-06-25 03:37:12'),
(25, '32.73.17', 'Bojongloa Kidul', 'Bojongloa Kidul.geojson', '#090', '2020-06-20 23:23:48', '2020-06-25 03:37:16'),
(26, '32.73.18', 'Cibeunying Kaler', 'Cibeunying Kaler.geojson', '#009999', '2020-06-20 23:24:19', '2020-06-25 03:37:19'),
(27, '32.73.19', 'Sumur Bandung', 'Sumur Bandung.geojson', '#990099', '2020-06-20 23:24:37', '2020-06-25 03:37:24'),
(28, '32.73.20', 'Antapani', 'Antapani.geojson', '#662222', '2020-06-20 23:25:09', '2020-06-25 03:37:28'),
(29, '32.73.21', 'Bandung Kidul', 'Bandung Kidul.geojson', '#888', '2020-06-20 23:25:38', '2020-06-25 03:37:31'),
(30, '32.73.22', 'Buahbatu', 'Buahbatu.geojson', '#222', '2020-06-20 23:26:01', '2020-06-25 03:37:35'),
(31, '32.73.23', 'Rancasari', 'Rancasari.geojson', '#009900', '2020-06-20 23:26:17', '2020-06-25 03:37:40'),
(32, '32.73.24', 'Arcamanik', 'Arcamanik.geojson', '#555', '2020-06-20 23:26:35', '2020-06-25 03:37:43'),
(33, '32.73.25', 'Cibiru', 'Cibiru.geojson', '#f00', '2020-06-20 23:26:54', '2020-06-25 03:37:47'),
(34, '32.73.26', 'Ujungberung', 'Ujungberung.geojson', '#f90', '2020-06-20 23:27:18', '2020-06-25 03:37:51'),
(35, '32.73.27', 'Gedebage', 'Gedebage.geojson', '#09d', '2020-06-20 23:27:33', '2020-06-25 03:37:55'),
(36, '32.73.28', 'Panyileukan', 'Panyileukan.geojson', '#090', '2020-06-20 23:27:55', '2020-06-25 03:37:59'),
(37, '32.73.29', 'Cinambo', 'Cinambo.geojson', '#009999', '2020-06-20 23:28:11', '2020-06-25 03:38:03'),
(38, '32.73.30', 'Mandalajati', 'Mandalajati.geojson', '#990099', '2020-06-20 23:28:32', '2020-06-25 03:38:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan1` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan2` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan3` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan4` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `pilihan5` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modifed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `pilihan5`, `created`, `modifed`) VALUES
(5, 'Bagaimana suasana kerja anda saat ini ?', 'Senang Sekali', 'Senang', 'Biasa', 'Tidak Senang', 'Tidak Senang Sekali', '2020-06-24 22:17:33', '2020-06-24 22:17:33'),
(6, 'Bagaimana pendapatan anda saat ini ?', 'Senang Sekali', 'Senang', 'Biasa', 'Tidak Senang', 'Tidak Senang Sekali', '2020-06-24 22:17:45', '2020-06-24 22:17:45'),
(7, 'Bagaimana situasi emosional keluarga anda ?', 'Senang Sekali', 'Senang', 'Biasa', 'Tidak Senang', 'Tidak Senang Sekali', '2020-06-24 22:17:55', '2020-06-24 22:17:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skala_likert`
--

CREATE TABLE `skala_likert` (
  `id` int(11) NOT NULL,
  `pilihan` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modifed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `skala_likert`
--

INSERT INTO `skala_likert` (`id`, `pilihan`, `created`, `modifed`) VALUES
(1, 'Senang Sekali', '2020-06-18 00:37:32', '2020-06-18 00:37:32'),
(2, 'Senang', '2020-06-18 00:38:15', '2020-06-18 00:38:15'),
(3, 'Biasa', '2020-06-18 00:38:15', '2020-06-18 00:38:15'),
(4, 'Tidak Senang', '2020-06-18 00:38:15', '2020-06-18 00:38:15'),
(5, 'Tidak Senang Sekali', '2020-06-18 00:38:15', '2020-06-18 00:38:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modifed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `created`, `modifed`) VALUES
(1, 'Okriiza', 'admin', '0192023a7bbd73250516f069df18b500', '2020-06-18 01:35:57', '2020-06-18 01:35:57'),
(10, 'kocak', 'kocak', '5d3c184707b4ea82a412512218eb2275', '2020-06-18 16:19:56', '2020-06-18 23:08:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fixhasil`
--
ALTER TABLE `fixhasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_kecamatan` (`kd_kecamatan`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skala_likert`
--
ALTER TABLE `skala_likert`
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
-- AUTO_INCREMENT untuk tabel `fixhasil`
--
ALTER TABLE `fixhasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `skala_likert`
--
ALTER TABLE `skala_likert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
