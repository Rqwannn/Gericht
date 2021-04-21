-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 15.42
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
(1, 'Eren Yeager', 'eren@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Takeshita Dori (Takeshita Street) a narrow 400-meter street lined with shops, boutiques', 'Tokyo', 'Japan', '135-6027', 'Web Developer-Gericht Team', 'Kyoto University', '2021-02-11 11:43:21', '2021-04-05 09:42:49', 'profileAdmin/eren.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_table`
--

CREATE TABLE `book_table` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `kodePesanan` int(25) NOT NULL,
  `nama_meja` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `proses` int(11) NOT NULL,
  `tanggal_pesan` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book_table`
--

INSERT INTO `book_table` (`id`, `id_user`, `kodePesanan`, `nama_meja`, `email`, `nama`, `total`, `konfirmasi`, `pajak`, `proses`, `tanggal_pesan`) VALUES
(2, 'pancaran', 1613294350, 'Japanese Table', 'Pancaran@gmail.com', 'Pancaran', 1, 0, 3, 1, '2021-02-28'),
(12, 'Raqwan', 1613294960, 'Japanese Table', 'raqwan@gmail.com', 'Raqwan', 1, 1, 3, 0, '2021-04-13'),
(17, 'Meliodas', 1618833029, 'Dating Table', 'Meliodas@gmail.com', 'Meliodas', 1, 1, 3, 0, '2021-04-21'),
(18, 'Meliodas', 1618833260, 'Chinese Table', 'Meliodas@gmail.com', 'Meliodas', 1, 0, 3, 1, '2021-04-20'),
(19, 'Meliodas', 1618834001, 'Dating Table', 'Meliodas@gmail.com', 'Meliodas', 1, 1, 3, 0, '2021-04-21');

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
(1, 'Roasted Figs', 50, 43, 'A dessert menu with figs covered with honey and yogurt is served which makes this dessert very popular', 'roasted-figs-honeyYogurt.jpg'),
(2, 'Panna Cotta', 50, 40, 'Served with soft pudding with added strawberry cream and mix it with strawberries and blueberries', 'Panna-Cotta.jpg'),
(3, 'Rote Grütze', 49, 32, 'Served with a blend of lots of fresh fruit with vanilla cream added and has a lot of flavor in it', 'rote-grütze.jpg'),
(4, 'Semifreddo', 46, 46, 'served with creamy bread with added crimson ice on top and two chocolate bars that indulge the tongue', 'Semifreddo.jpg'),
(5, 'La Madeline au Truffle', 50, 250, 'The dessert is served with a slice of chocolate and covered in gold flakes which make this dessert very premium', 'la_madeline_au_truffle.jpg'),
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
(1, 'Roasted Duck Colvert', 49, 69, 'Served with premium quality duck with a combination of turnips and sauce salmis which gives a different impression', 'roasted-duck-colvert.png'),
(2, 'Roasted Scallop', 49, 69, 'Served with fresh scallops and roasted romaine lettuce, it\'s even more smoky and savory because of the iodized seasoning', 'roasted-scallop.jpg'),
(3, 'Scottish Langoustine', 46, 115, 'Premium meal served with Norwegian lobster along with fish roe and a combination of caleriact and creamy sauce', 'scottish-langoustine.jpg'),
(4, 'Veal Sweetbread', 50, 115, 'served withquality veal sweetbreads with the addition of carrots and of course the high quality olive seasoning', 'veal-sweetbread.jpg'),
(5, 'Duck Foie Gras', 47, 72, 'served with very tender duck meat accompanied by grated apple and quince and the fragrant aroma of hibiscus flowers', 'duck-foie-gras.jpg'),
(6, 'Linguine Alle Vongole', 50, 64, 'served with a mixture of fresh shellfish and soft pasta and mixed with a creamy sauce and mixed with green onion flakes', 'Linguine-alle-vongole.jpg'),
(7, 'Chicken Saltimbocca', 40, 77, 'served with quality chicken pieces with added ingredients and covered in gluten flour and sprinkled with white wine', 'chicken-saltimbocca.jpg'),
(8, 'Shrimp Fra Diavolo', 50, 72, 'served with a mix of fresh prawns and delicious pasta with additional sauce that adds a spicy taste and vegetable flakes', 'Shrimp-Fra-Diavolo.jpg'),
(9, 'Bouillabasse', 48, 66, 'serving fresh seafood accompanied by fresh sauce with a spicy and savory taste that will spoil the tongue', 'Bouillabasse.jpg'),
(10, 'Fettuccine Alfredo', 50, 69, 'we serve famous Italian style pasta with cream sauce and quality pasta style with added tooping', 'fettuccine-alfredo.jpg');

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
(1, 'Cocktail', 49, 37, 'multi-flavored drinks and sodas along with the sour taste of lemon make this drink a delicious and popular one', 'Cocktail.jpeg'),
(2, 'Negroni', 49, 33, 'A drink served with a mixture of sweet vermouth, Campari, gin and orange or lemon zest for garnish.', 'Negroni.jpg'),
(3, 'Macchiato', 48, 35, 'Caffè macchiato, espresso coffee with a little milk, usually frothy. with a mixed vanilla flavor', 'Macchiato.jpg'),
(4, 'Spritz', 47, 38, 'served as an alcoholic beverage in Northeast Italy. It consists of prosecco, Aperol and sparkling water', 'Spritz.jpg'),
(5, 'Punch', 47, 38, 'served a combination of fruit and soda with the addition of a sour taste of lemon that makes this drink look fresh', 'Punch.jpg'),
(6, 'Caffe Freddo', 50, 33, 'iced coffee served cold, brewed in various kinds with the basic division into cold drinks - brew cold coffee', 'caffe freddo.jpg');

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
  `alamat` varchar(255) NOT NULL,
  `pembelian` enum('Online','Offline','','') NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(25) NOT NULL,
  `proses` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_user`, `kodePesanan`, `nama_orderan`, `jml_orderan`, `nama_pemesan`, `email_pemesan`, `alamat`, `pembelian`, `tanggal_pesan`, `total`, `proses`, `konfirmasi`) VALUES
(25, 'Raqwan', '1613294260', 'Chicken Saltimbocca,Cocktail,Panna Cotta,Macchiato', '4,2,2,2', 'Raqwan', 'raqwan@gmail.com', 'Jalan Banjaran Pucung', 'Online', '2021-02-14 09:17:40', 535, 0, 1),
(26, 'Raqwan', '1613294565', 'Veal Sweetbread,Cocktail,Bouillabasse,Cocktail', '3,1,1,3', 'William Jose', 'wiliam@gmail.com', 'Jalan Simpangan Depok', 'Online', '2021-02-14 09:22:45', 562, 0, 1),
(27, 'Raqwan', '1613294673', 'Fettuccine Alfredo,Cocktail,Scottish Langoustine,Shrimp Fra Diavolo', '1,5,2,2', 'Julian', 'Julain@gmail.com', 'Jalan Cilodong', 'Online', '2021-02-14 09:24:33', 631, 0, 1),
(41, 'Meliodas', '1613707333', 'Veal Sweetbread,Cocktail,Linguine Alle Vongole', '2,3,1', 'Meliodas', 'Meliodas@gmail.com', 'Jalan Cilangkap', 'Online', '2021-02-19 04:02:13', 344, 0, 1),
(43, 'Rizky', '1613746687', 'Shrimp Fra Diavolo,Macchiato,La Madeline au Truffle,Cocktail', '2,1,1,1', 'Rizky', 'Rizky@gmail.com', 'Jalan Cilodong', 'Online', '2021-02-19 14:58:07', 432, 0, 0),
(44, 'Rizky', '1613746772', 'Fettuccine Alfredo,Negroni,Panna Cotta,Duck Foie Gras,Spritz', '1,2,1,2,1', 'Rizky', 'Rizky@gmail.com', 'Jalan Cilodong', 'Online', '2021-02-19 14:59:32', 322, 0, 0),
(45, 'Laurel', '1613746863', 'Scottish Langoustine,Punch,Negroni', '2,1,1', 'Anna', 'Anna@gmail.com', 'Jalan Gandaria City', 'Online', '2021-02-19 15:01:03', 271, 0, 0),
(46, 'Laurel', '1613746899', 'Shrimp Fra Diavolo,Caffe Freddo,Roasted Figs,Caffe Freddo', '3,1,1,2', 'Laurel', 'Laurel@gmail.com', 'Jalan Gandaria City', 'Online', '2021-02-19 15:01:39', 295, 0, 0),
(47, 'Robert', '1613747029', 'Veal Sweetbread,Caffe Freddo', '1,1', 'Robert', 'Robert@gmail.com', 'Jalan Jati Jajar', 'Online', '2021-02-19 15:03:49', 118, 0, 0),
(48, 'Khannedy', '1613910253', 'Bouillabasse,Cocktail,Roasted Scallop,Rote Grütze', '2,3,1,1', 'Khannedy', 'Khannedy@gmail.com', 'Jalan Cibinong', 'Online', '2021-02-21 12:24:13', 246, 0, 0),
(50, 'Raqwan', '1613912639', 'Duck Foie Gras,Punch,Negroni,Duck Foie Gras,Cocktail,Semifreddo', '2,1,1,1,1,2', 'Raqwan', 'raqwan@gmail.com', 'Jalan Banjaran Pucung', 'Online', '2021-02-21 13:03:59', 290, 0, 1),
(51, 'Raqwan', '1613913390', 'Linguine Alle Vongole,Cocktail,Spritz,Duck Foie Gras,Punch', '3,3,2,3,1', 'Ahmad Yoza', 'yoza@gmail.com', 'Jalan Banjaran Pucung', 'Online', '2021-02-21 13:16:30', 598, 0, 1),
(52, 'Rizky', '1613913587', 'Chicken Saltimbocca,Spritz,Roasted Duck Colvert', '1,2,2', 'Pancaran', 'Pancaran@gmail.com', 'Jalan Cilodong', 'Online', '2021-02-21 13:19:47', 80, 0, 0),
(53, 'Robert', '1613995187', 'Fettuccine Alfredo,Negroni,Semifreddo', '2,2,2', 'Lauriel', 'Lauriel@gmail.com', 'Jalan Simpangan Depok', 'Online', '2021-02-22 11:59:47', 141, 0, 0),
(56, 'Meliodas', '1614006726', 'Roasted Duck Colvert,Negroni,Rote Grütze', '1,1,1', 'Diane', 'Diane@gmail.com', 'Jalan Simpangan Depok', 'Online', '2021-02-22 15:12:06', 72, 1, 1),
(57, 'Meliodas', '1614006867', 'Roasted Scallop,Punch,La Madeline au Truffle', '1,1,1', 'Meliodas', 'Meliodas@gmail.com', 'Jalan Jati Jajar', 'Online', '2021-02-22 15:14:27', 72, 0, 0),
(58, 'pancaran', '1614006974', 'Duck Foie Gras,Spritz,Semifreddo', '2,2,2', 'pancaran', 'pancaran@gmail.com', 'Jalan Jati Jajar', 'Online', '2021-02-22 15:16:14', 147, 0, 1),
(59, 'pancaran', '1614007120', 'Scottish Langoustine,Cocktail,Punch,Chicken Saltimbocca,Roasted Duck Colvert', '1,3,1,1,2', 'akbar', 'akbar@gmail.com', 'Jalan Jati Jajar', 'Online', '2021-02-22 15:18:40', 344, 0, 1),
(60, 'Jonathan', '1614007682', 'Semifreddo,Panna Cotta,Macchiato', '2,1,2', 'Jonathan', 'Jonathan@gmail.com', 'Jalan Tapos', 'Online', '2021-02-22 15:28:02', 135, 0, 1),
(62, 'Einstein', '1614239299', 'Shrimp Fra Diavolo,Caffe Freddo', '1,1', 'Einstein', 'Einstein@gmail.com', 'Jalan Villa Pertiwi', 'Online', '2021-02-25 07:48:19', 75, 0, 1),
(64, 'Raqwan', '1615387835', 'Linguine Alle Vongole,Cocktail', '2,2', 'Raqwan', 'raqwan@gmail.com', 'Jalan Jati Jajar', 'Online', '2021-03-10 14:50:35', 129, 0, 1),
(67, 'Guest', '1615808359', 'Duck Foie Gras,Spritz,Roasted Figs', '1,1,1', 'Veri', 'Veri@gmail.com', 'Jalan Rawa Badak', 'Online', '2021-03-15 11:39:19', 75, 1, 1),
(68, 'Guest', '1615812752', 'Roasted Scallop,Cocktail,Prinsesstårta', '2,2,2', 'Lara', 'Lara@gmail.com', 'Jalan Juanda', 'Online', '2021-03-15 12:52:32', 141, 0, 0),
(69, 'Raqwan', '1615817229', 'Bouillabasse,Negroni,Panna Cotta,Punch,Rote Grütze,Chicken Saltimbocca', '2,2,1,1,1,1', 'Raqwan', 'raqwan@gmail.com', '-', 'Offline', '2021-03-15 14:07:09', 239, 0, 0),
(70, 'Guest', '1615818436', 'Roasted Scallop,Cocktail', '2,2', 'Udin', 'Udin@gmail.com', '-', 'Offline', '2021-03-15 14:27:16', 141, 0, 0),
(71, 'Raqwan', '1617357032', 'Chicken Saltimbocca,Chicken Saltimbocca', '2,2', 'Raqwan', 'raqwan@gmail.com', 'Jalan Cilangkap', 'Online', '2021-04-02 09:50:32', 155, 0, 1),
(75, 'Raqwan', '1618299257', 'Chicken Saltimbocca,Macchiato', '2,2', 'Raqwan', 'raqwan@gmail.com', 'Jalan Cilangkap', 'Online', '2021-04-13 07:34:17', 155, 0, 1),
(76, 'Einstein', '1618299358', 'Bouillabasse,Punch,Caffe Freddo,Shrimp Fra Diavolo,Negroni', '1,1,1,2,1', 'Einstein', 'Einstein@gmail.com', 'Jalan Bojong Gede', 'Online', '2021-04-13 07:35:58', 282, 1, 1),
(77, 'pancaran', '1618402583', 'Rote Grütze', '2', 'pancaran', 'pancaran@gmail.com', 'Jati Jajar', 'Online', '2021-04-14 12:16:23', 65, 0, 0),
(78, 'Raqwan', '1618409689', 'Linguine Alle Vongole,Caffe Freddo', '1,1', 'Raqwan', 'Raqwan@gmail.com', 'Cilangkap', 'Online', '2021-04-14 14:14:49', 65, 1, 1),
(79, 'pancaran', '1618506815', 'Fettuccine Alfredo,Punch', '2,2', 'pancaran', 'pancaran@gmail.com', 'Banjaran Pucung', 'Online', '2021-04-15 17:13:35', 139, 0, 0),
(80, 'pancaran', '1618506872', 'Duck Foie Gras,Spritz,Bouillabasse', '1,2,1', 'pancaran', 'pancaran@gmail.com', 'Tapos', 'Online', '2021-04-15 17:14:32', 149, 0, 0),
(81, 'Raqwan', '1618641964', 'Bouillabasse,Semifreddo', '2,2', 'Raqwan', 'Raqwan@gmail.com', 'Cilngkap', 'Online', '2021-04-17 06:46:04', 133, 1, 1),
(82, 'Meliodas', '1618647985', 'La Madeline au Truffle', '2', 'Meliodas', 'Meliodas@gmail.com', 'Kebon Jeruk', 'Online', '2021-04-17 08:26:25', 503, 1, 1),
(83, 'Einstein', '1618648211', 'Chicken Saltimbocca,Negroni,Panna Cotta', '1,1,1', 'Einstein', 'Einstein@gmail.com', 'Jalan Sudirman', 'Online', '2021-04-17 08:30:11', 78, 1, 1),
(84, 'Einstein', '1618648871', 'Scottish Langoustine,Cocktail,Macchiato,Veal Sweetbread,Negroni,Semifreddo', '1,1,1,2,1,2', 'Einstein', 'Einstein@gmail.com', 'Cilangkap', 'Online', '2021-04-17 08:41:11', 418, 1, 1),
(90, 'Einstein', '1618654455', 'Veal Sweetbread,Cocktail', '2,2', 'Einstein', 'Einstein@gmail.com', 'Kelapa Gading', 'Online', '2021-04-17 10:14:15', 231, 1, 1),
(91, 'Guest', '1618731573', 'Roasted Duck Colvert,Cocktail,Rote Grütze', '2,2,2', 'oji', 'Fauzi@gmail.com', 'jl.kusuma', 'Online', '2021-04-18 07:39:33', 141, 1, 1),
(92, 'Meliodas', '1618807695', 'Roasted Scallop,Macchiato', '1,2', 'Meliodas', 'Meliodas@gmail.com', 'Pamulang', 'Online', '2021-04-19 04:48:15', 72, 1, 1),
(93, 'Meliodas', '1618807749', 'Duck Foie Gras,Cocktail,Semifreddo,Spritz', '3,1,2,2', 'Meliodas', 'Meliodas@gmail.com', 'Bogor', 'Online', '2021-04-19 04:49:09', 348, 0, 1),
(94, 'Guest', '1618999794', 'Scottish Langoustine,Spritz,Punch', '2,1,1', 'Ethan', 'Ethan@gmail.com', 'Chicago', 'Online', '2021-04-21 10:09:54', 271, 1, 1),
(95, 'Guest', '1619000247', 'Scottish Langoustine,Punch,Prinsesstårta', '2,2,1', 'Lara', 'Lara@gmail.com', 'Pamulang', 'Online', '2021-04-21 10:17:27', 233, 1, 1);

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
-- Struktur dari tabel `private_table`
--

CREATE TABLE `private_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `min_People` int(11) NOT NULL,
  `max_People` int(11) NOT NULL,
  `tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `private_table`
--

INSERT INTO `private_table` (`id`, `nama`, `min_People`, `max_People`, `tersedia`) VALUES
(1, 'Japanese Table', 6, 12, 5),
(2, 'Chinese Table', 12, 20, 5),
(3, 'Dating Table', 1, 2, 11),
(4, 'Family Table', 2, 6, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `totaldessertterjual`
--

CREATE TABLE `totaldessertterjual` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `totalDessert` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `totalmakananterjual`
--

CREATE TABLE `totalmakananterjual` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `totalMakanan` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `totalminumanterjual`
--

CREATE TABLE `totalminumanterjual` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `totalMinuman` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, 'Raqwan', 'Raqwan@gmail.com', '$2y$10$phSBnGbiUtMZavsR38ySC.R4ms4YaufbZiJpYNiRjhPxqNBHm9DRC', '2021-01-18 10:27:36', 'Premium', 'Raqwan@gmail.jpg'),
(12, 'Rizky', 'Rizky@gmail.com', '$2y$10$vyQVppYttZq5SpLA8Qe0B.OYljTKEwOfiCMXDhiew9g8Z6vRRmIg.', '2021-01-18 12:48:12', 'Premium', 'profile.png'),
(17, 'Meliodas', 'Meliodas@gmail.com', '$2y$10$.TRNWke2wrpMerkvXdvoCeJxIsTDMjVbfzveGTToX3LO2OsgQNiJW', '2021-02-17 14:45:45', 'Premium', 'profile.png'),
(18, 'Laurel', 'Laurel@gmail.com', '$2y$10$cy.5s4c0mHVg97VZWAVwJOYsWnu3aXo7s7ypWyIDnqqpaxYNhDkZi', '2021-02-19 14:57:30', 'Member', 'profile.png'),
(19, 'Robert', 'Robert@gmail.com', '$2y$10$jAz/sjLTBRD8t6ioG01efuSKGXzWplxvp2T0CP4EwsNIiDKqpMvf.', '2021-02-19 15:03:25', 'Premium', 'profile.png'),
(20, 'Khannedy', 'Khannedy@gmail.com', '$2y$10$QjNAGx8.Od/bg7n2K5LThuuKBE5TEElyQGFYIbznW1G74CX/p0j9O', '2021-02-19 15:20:44', 'Member', 'profile.png'),
(21, 'pancaran', 'pancaran@gmail.com', '$2y$10$VO0cxFccDdq3DX9b50u03OfOiSNkazqu.22SiVKZe8a0FY1f/UtBu', '2021-02-22 15:15:54', 'Premium', 'profile.png'),
(22, 'Jonathan', 'Jonathan@gmail.com', '$2y$10$SW7jDBlI8fdEEMreolVpgOE6HbZXSXXOMybDdbo1IY8GAcZZvWb6C', '2021-02-22 15:27:18', 'Member', 'profile.png'),
(23, 'Einstein', 'Einstein@gmail.com', '$2y$10$dGaL/I4pMux9yUva0y6jXeBRlcAKdmu0fn8ARwPTLtfPafmI/8E76', '2021-02-25 07:45:56', 'Premium', 'profile.png'),
(24, 'Guest', 'Guest@gmail.com', '11111111', '2021-02-25 10:34:46', 'Member', 'profile.png'),
(25, 'Udin', 'M.Udin@gmail.com', '$2y$10$Ckj4Wrani5zcPM6XtRbnTumpDdZ4QB3.42pICcaTRJK97Z5LQvna2', '2021-03-03 14:05:44', 'Member', 'profile.png'),
(26, 'anca', 'ancaanca@gmail.com', '$2y$10$FrIJmLA73U0e9yivpqpnbua8VqGzjVRMn/Q5.s9fduj7jwzzbfwpC', '2021-04-18 07:44:16', 'Member', 'ancaanca@gmail.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `book_table`
--
ALTER TABLE `book_table`
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
-- Indeks untuk tabel `private_table`
--
ALTER TABLE `private_table`
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
-- AUTO_INCREMENT untuk tabel `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `petinggi`
--
ALTER TABLE `petinggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `private_table`
--
ALTER TABLE `private_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
