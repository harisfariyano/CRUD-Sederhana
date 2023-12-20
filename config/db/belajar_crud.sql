-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2023 pada 20.54
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
-- Database: `belajar_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `IDNum` int(11) NOT NULL,
  `IDName` text NOT NULL,
  `IDUsername` text NOT NULL,
  `IDPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`IDNum`, `IDName`, `IDUsername`, `IDPassword`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_internet`
--

CREATE TABLE `paket_internet` (
  `id` int(20) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` decimal(10,3) NOT NULL,
  `masa_aktiv` varchar(11) NOT NULL,
  `kuota` varchar(11) NOT NULL,
  `kecepatan` decimal(5,2) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_internet`
--

INSERT INTO `paket_internet` (`id`, `nama_paket`, `harga`, `masa_aktiv`, `kuota`, `kecepatan`, `deskripsi`) VALUES
(11, 'PAKET SS 1', 50.000, '30 hari', '50 GB', 1.60, 'Paket baru yang bisa dipakai 2 perangkat bersamaan, jadi bisa mengerjakan tugas dengan laptop sambil main sosial media di gadget.'),
(12, 'TIME BASE - WIRELESS', 20.000, '1 hari', '3 Jam', 2.50, 'Cocok untuk pengguna yang suka mengunduh dan mengakses data yang besar dalam waktu tertentu.'),
(13, 'KUOTA 40K', 40.000, '30 hari', '40 GB', 2.50, 'Cocok untuk pengguna yang melakukan akses internet untuk kebutuhan data ringan seperti chatting, cek dan kirim email, update media sosial, bahkan bermain game.'),
(14, 'PAKET MEGA', 80.000, '30 hari', '100 GB', 3.00, 'Paket premium dengan kecepatan tinggi dan kuota besar untuk streaming dan pekerjaan online.'),
(15, 'STUDENT PLAN', 30.000, '30 hari', '20 GB', 1.00, 'Paket khusus pelajar dengan kuota yang cukup untuk belajar online.'),
(16, 'Paket Streaming Unlimited', 75.000, '30 hari', '500 mb', 5.00, 'Paket khusus untuk streaming tanpa batas, nikmati film dan acara TV favorit Anda kapan saja.'),
(18, 'Paket Gaming Elite', 90.000, '28 hari', '100 GB', 20.00, 'Paket khusus untuk gamer serius, pastikan koneksi selalu stabil dan cepat saat bermain game online.'),
(19, 'Paket Irit+', 2.000, '2 hari', '500 mb', 10.00, 'Paket baru yang bisa dipakai 2 perangkat bersamaan, jadi bisa mengerjakan tugas dengan laptop sambil main sosial media di gadget.'),
(25, 'gokilbis', 75.000, '28 hari', '100 GB', 20.00, 'Tetap bisa gokil bareng teman teman'),
(31, 'Paket Enjooy', 60.000, '28 Hari', '100 GB', 15.00, 'Paket Khusus kamu yang suka enjoy menikmati hari'),
(34, 'jbj', 100.000, '20 Hari', '10 GB', 20.00, 'poll banter');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paket_internet`
--
ALTER TABLE `paket_internet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket_internet`
--
ALTER TABLE `paket_internet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
