-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 07.16
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `gambar_produk`) VALUES
(1, 'Pupuk Anorganik Phonska', 135000, 'Salah satu jenis pupuk anoganik yang mengandung Nitrogen, Phosfor dan Kalium. Kandungan unsur hara disetiap butir pupuk merata. Larut dalam air sehingga mudah diserap tanaman dan dapat menambah daya tahan tanaman terhadap gangguan hama.', 'anorganik1.jpg'),
(3, 'Pupuk Anorganik Urea', 180000, 'Pupuk kimia yang memasok unsur nitrogen yang sangat dibutuhkan oleh tanaman ', 'anorganik2.jpg'),
(5, 'Pupuk Anorganik SP-36', 110000, 'Sebagai sumber hara Fosfor bagi tanaman. Memacu pertumbuhan akar dan sistem perakaran yang baik', 'anotganik3.jpg'),
(6, 'Pupuk Bumi Makmur', 250000, 'Dapat mempercepat percabangan dan pembungaan, buah menjadi lebat dan berisi dan meningkatkan kualitas buah.', 'organik1.jpg'),
(8, 'Pupuk Organik Sunvit', 160000, 'Merupakan pupuk NPK organik yang diproses dengan menggunakan teknologi daur ulang dan kemudian diformulasikan dengan berbagai bahan alamiah lainya.', 'organik2.jpg'),
(9, 'Pupuk Organik Petroganik', 176000, 'Memperbaiki struktur tanah sehingga tanah menjadi gembur, proses oksidasi lebih baik dan unsur hara mudah diserap tanaman. ', 'organik3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `alamat`, `email`, `password`) VALUES
(30, 'lysio66', 'kediri', 'sindyrosita6@gmail.com', 'reew'),
(31, 'sindy', 'kediri', 'sindy.19001@mhs.unesa.ac.id', 'gtyui'),
(32, 'deri', 'kediri', 'benefitsfor63@gmail.com', 'treewsa'),
(33, 'PupuQadmin', 'Kediri', 'adminpupuqin@gmail.com', 'admin123'),
(34, 'arjoe', 'pagu', 'arjoe@gmail.com', 'arjoevandra'),
(35, 'yohan', 'bali', 'yohannio@gmail.com', 'yohannio'),
(36, 'adit', 'kediri', 'adit@gmail.com', 'adit12345'),
(37, 'bagus', 'papua', 'bagus@gmail.com', 'bagus12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
