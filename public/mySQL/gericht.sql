-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2021 pada 18.37
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
-- Database: `gericht`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `alamat`, `kota`, `negara`, `postal_code`, `status`, `pendidikan`, `created_at`, `update_at`, `gambar`) VALUES
(1, 'Eren Yeager', 'eren@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Takeshita Dori (Takeshita Street) a narrow 400-meter street lined with shops, boutiques', 'Tokyo', 'Japan', '135-6027', 'Web Developer-Gericht Team', 'Kyoto University', '2021-02-11 11:43:21', '2021-02-18 13:38:34', 'profileAdmin/eren.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `penjelasan` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dessert`
--

INSERT INTO `dessert` (`id`, `nama`, `tersedia`, `harga`, `penjelasan`, `gambar`) VALUES
(1, 'Roasted Figs', 49, 43, 'A dessert menu with figs covered with honey and yogurt is served which makes this dessert very popular', 'roasted-figs-honeyYogurt.jpg'),
(2, 'Panna Cotta', 49, 40, 'Served with soft pudding with added strawberry cream and mix it with strawberries and blueberries', 'Panna-Cotta.jpg'),
(3, 'Rote Grütze', 50, 32, 'Served with a blend of lots of fresh fruit with vanilla cream added and has a lot of flavor in it', 'rote-grütze.jpg'),
(4, 'Semifreddo', 50, 46, 'served with creamy bread with added crimson ice on top and two chocolate bars that indulge the tongue', 'Semifreddo.jpg'),
(5, 'La Madeline au Truffle', 48, 250, 'The dessert is served with a slice of chocolate and covered in gold flakes which make this dessert very premium', 'la_madeline_au_truffle.jpg'),
(6, 'Prinsesstårta', 49, 35, 'served from a layer of sponge cake, pastry cream and combined with whipped cream wrapped in green paste', 'Prinsesstårta.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `penjelasan` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `tersedia`, `harga`, `penjelasan`, `gambar`) VALUES
(1, 'Roasted Duck Colvert', 50, 69, 'Served with premium quality duck with a combination of turnips and sauce salmis which gives a different impression', 'roasted-duck-colvert.png'),
(2, 'Roasted Scallop', 50, 69, 'Served with fresh scallops and roasted romaine lettuce, it\'s even more smoky and savory because of the iodized seasoning', 'roasted-scallop.jpg'),
(3, 'Scottish Langoustine', 48, 115, 'Premium meal served with Norwegian lobster along with fish roe and a combination of caleriact and creamy sauce', 'scottish-langoustine.jpg'),
(4, 'Veal Sweetbread', 47, 115, 'served withquality veal sweetbreads with the addition of carrots and of course the high quality olive seasoning', 'veal-sweetbread.jpg'),
(5, 'Duck Foie Gras', 48, 72, 'served with very tender duck meat accompanied by grated apple and quince and the fragrant aroma of hibiscus flowers', 'duck-foie-gras.jpg'),
(6, 'Linguine Alle Vongole', 49, 64, 'served with a mixture of fresh shellfish and soft pasta and mixed with a creamy sauce and mixed with green onion flakes', 'Linguine-alle-vongole.jpg'),
(7, 'Chicken Saltimbocca', 50, 77, 'served with quality chicken pieces with added ingredients and covered in gluten flour and sprinkled with white wine', 'chicken-saltimbocca.jpg'),
(8, 'Shrimp Fra Diavolo', 45, 72, 'served with a mix of fresh prawns and delicious pasta with additional sauce that adds a spicy taste and vegetable flakes', 'Shrimp-Fra-Diavolo.jpg'),
(9, 'Bouillabasse', 48, 66, 'serving fresh seafood accompanied by fresh sauce with a spicy and savory taste that will spoil the tongue', 'Bouillabasse.jpg'),
(10, 'Fettuccine Alfredo', 49, 69, 'we serve famous Italian style pasta with cream sauce and quality pasta style with added tooping', 'fettuccine-alfredo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `penjelasan` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `tersedia`, `harga`, `penjelasan`, `gambar`) VALUES
(1, 'Cocktail', 46, 37, 'multi-flavored drinks and sodas along with the sour taste of lemon make this drink a delicious and popular one', 'Cocktail.jpeg'),
(2, 'Negroni', 47, 33, 'A drink served with a mixture of sweet vermouth, Campari, gin and orange or lemon zest for garnish.', 'Negroni.jpg'),
(3, 'Macchiato', 49, 35, 'Caffè macchiato, espresso coffee with a little milk, usually frothy. with a mixed vanilla flavor', 'Macchiato.jpg'),
(4, 'Spritz', 47, 38, 'served as an alcoholic beverage in Northeast Italy. It consists of prosecco, Aperol and sparkling water', 'Spritz.jpg'),
(5, 'Punch', 49, 38, 'served a combination of fruit and soda with the addition of a sour taste of lemon that makes this drink look fresh', 'Punch.jpg'),
(6, 'Caffe Freddo', 46, 33, 'iced coffee served cold, brewed in various kinds with the basic division into cold drinks - brew cold coffee', 'caffe freddo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `kodePesanan` varchar(75) NOT NULL,
  `nama_orderan` varchar(500) NOT NULL,
  `jml_orderan` varchar(250) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email_pemesan` varchar(100) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_user`, `kodePesanan`, `nama_orderan`, `jml_orderan`, `nama_pemesan`, `email_pemesan`, `tanggal_pesan`, `total`, `konfirmasi`) VALUES
(21, 'Raqwan', '1604125351', 'Scottish Langoustine,Spritz,Chicken Saltimbocca\r\n', '3,5,2', 'Saefudin Ilham', 'saefudin@gmail.com', '2021-02-12 11:01:45', 809, 1),
(23, 'Raqwan', '1613293221', 'Scottish Langoustine', '2', 'John', 'John@gmail.com', '2021-02-14 09:00:21', 233, 0),
(24, 'Raqwan', '1613293647', 'Scottish Langoustine,Spritz,Prinsesstårta', '3,3,1', 'Raqwan', 'raqwan@gmail.com', '2021-02-14 09:07:27', 497, 0),
(25, 'Raqwan', '1613294260', 'Chicken Saltimbocca,Cocktail,Panna Cotta,Macchiato', '4,2,2,2', 'Raqwan', 'raqwan@gmail.com', '2021-02-14 09:17:40', 535, 0),
(26, 'Raqwan', '1613294565', 'Veal Sweetbread,Cocktail,Bouillabasse,Cocktail', '3,1,1,3', 'William Jose', 'wiliam@gmail.com', '2021-02-14 09:22:45', 562, 0),
(27, 'Raqwan', '1613294673', 'Fettuccine Alfredo,Cocktail,Scottish Langoustine,Shrimp Fra Diavolo', '1,5,2,2', 'Julian', 'Julain@gmail.com', '2021-02-14 09:24:33', 631, 0),
(28, 'Raqwan', '1613300496', 'Roasted Duck Colvert,Negroni,Roasted Scallop,Spritz,Caffe Freddo', '2,2,3,2,1', 'Michael Owen', 'Owen@gmail.com', '2021-02-14 11:01:36', 523, 1),
(31, 'Laurel', '1613653174', 'Duck Foie Gras,Cocktail,Spritz,Roasted Figs,Veal Sweetbread', '3,2,2,1,1', 'Laurel', 'Laurel@gmail.com', '2021-02-18 12:59:34', 293, 1),
(41, 'Meliodas', '1613707333', 'Veal Sweetbread,Cocktail,Linguine Alle Vongole', '2,3,1', 'Meliodas', 'Meliodas@gmail.com', '2021-02-19 04:02:13', 344, 0),
(43, 'Rizky', '1613746687', 'Shrimp Fra Diavolo,Macchiato,La Madeline au Truffle,Cocktail', '2,1,1,1', 'Rizky', 'Rizky@gmail.com', '2021-02-19 14:58:07', 432, 0),
(44, 'Rizky', '1613746772', 'Fettuccine Alfredo,Negroni,Panna Cotta,Duck Foie Gras,Spritz', '1,2,1,2,1', 'Rizky', 'Rizky@gmail.com', '2021-02-19 14:59:32', 322, 0),
(45, 'Laurel', '1613746863', 'Scottish Langoustine,Punch,Negroni', '2,1,1', 'Anna', 'Anna@gmail.com', '2021-02-19 15:01:03', 271, 0),
(46, 'Laurel', '1613746899', 'Shrimp Fra Diavolo,Caffe Freddo,Roasted Figs,Caffe Freddo', '3,1,1,2', 'Laurel', 'Laurel@gmail.com', '2021-02-19 15:01:39', 295, 0),
(47, 'Robert', '1613747029', 'Veal Sweetbread,Caffe Freddo', '1,1', 'Robert', 'Robert@gmail.com', '2021-02-19 15:03:49', 118, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petinggi`
--

CREATE TABLE `petinggi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `jabatan` enum('CEO','CTO','CFO','COO','Investor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petinggi`
--

INSERT INTO `petinggi` (`id`, `nama`, `gaji`, `negara`, `jabatan`) VALUES
(1, 'Muhammad Raqwan', '$56.142	', 'Indonesia', 'CEO'),
(2, 'Rizki Ramadhan', '$38.735', 'Indonesia', 'CTO'),
(3, 'Pancaran Ratna', '$37.538', 'Indonesia', 'CFO'),
(4, 'Muhammad Akbar', '$38.185', 'Indonesia', 'COO'),
(5, 'Muhammad Andika', '$22.142	', 'Indonesia', 'Investor'),
(7, 'Laurel Anastasia', '$23.785', 'English', 'Investor'),
(10, 'Philip Dakota', '$22.142	', 'Spain', 'Investor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Member','Premium','','') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `status`, `gambar`) VALUES
(10, 'Raqwan', 'raqwan@gmail.com', '$2y$10$phSBnGbiUtMZavsR38ySC.R4ms4YaufbZiJpYNiRjhPxqNBHm9DRC', '2021-01-18 10:27:36', 'Member', 'profile.png'),
(12, 'Meliodas', 'Meliodas@gmail.com', '$2y$10$vyQVppYttZq5SpLA8Qe0B.OYljTKEwOfiCMXDhiew9g8Z6vRRmIg.', '2021-01-18 12:48:12', 'Member', 'profile.png'),
(17, 'Laurel', 'Laurel@gmail.com', '$2y$10$.TRNWke2wrpMerkvXdvoCeJxIsTDMjVbfzveGTToX3LO2OsgQNiJW', '2021-02-17 14:45:45', 'Member', 'profile.png'),
(18, 'Rizky', 'Rizky@gmail.com', '$2y$10$cy.5s4c0mHVg97VZWAVwJOYsWnu3aXo7s7ypWyIDnqqpaxYNhDkZi', '2021-02-19 14:57:30', 'Member', 'profile.png'),
(19, 'Robert', 'Robert@gmail.com', '$2y$10$jAz/sjLTBRD8t6ioG01efuSKGXzWplxvp2T0CP4EwsNIiDKqpMvf.', '2021-02-19 15:03:25', 'Premium', 'profile.png'),
(20, 'Imanuel', 'Imanuel@gmail.com', '$2y$10$QjNAGx8.Od/bg7n2K5LThuuKBE5TEElyQGFYIbznW1G74CX/p0j9O', '2021-02-19 15:20:44', 'Member', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petinggi`
--
ALTER TABLE `petinggi`
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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `petinggi`
--
ALTER TABLE `petinggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
