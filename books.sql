-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2018 pada 05.34
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_server`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id_ebook` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `halaman` int(255) NOT NULL,
  `link_ebook` varchar(255) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id_ebook`, `judul`, `penerbit`, `halaman`, `link_ebook`, `deskripsi`, `file_name`, `created`, `modified`, `user_id`) VALUES
(2, 'Cara mudah belajar ngoding', 'belajarCiy', 100, 'www.google.com', 'd', 'Binarizing_image_emguCV.pdf', '2018-01-12 06:55:04', '2018-05-24 03:14:30', 13),
(7, 'yes', 'cek', 100, 'facebook.com', 'cek', 'aw.pdf', '2018-01-12 17:22:13', '2018-01-12 17:22:13', 3),
(8, 'sadasdas', 'dsadsa', 121, 'asdas.com', 'asdsad', '', '2018-05-12 02:52:59', '2018-05-12 02:52:59', 0),
(9, 'asdsad', 'dasdsa', 1111, 'dsadsa', 'dsadsadas', '', '2018-05-12 03:17:07', '2018-05-12 03:17:07', 0),
(10, 'asdsad', 'dsad', 0, 'd', 'dsadas', '', '2018-05-12 04:38:14', '2018-05-12 04:38:14', 0),
(11, 'asdsa', 'dsada', 0, 'dasdasya', 'dasdsa', '', '2018-05-12 04:39:18', '2018-05-24 02:28:49', 0),
(12, 'dfsfds', 'fsdfs', 121, 'asdasd', 'dasdsad', '', '2018-05-12 07:28:57', '2018-05-12 07:28:57', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_ebook`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
