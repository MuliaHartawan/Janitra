-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 08:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janitradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_image` varchar(40) NOT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(1, 'Coba', '', '', '2019-08-10 08:37:35'),
(2, 'Lamongan', '<p>Kota Kecil di Jawa Timur</p>', 'b627c8b991cb5574a80ef9b2e4656d33.jpg', '2019-08-11 02:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_booking` varchar(128) NOT NULL,
  `id_status` int(1) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_user`, `kode_booking`, `id_status`, `id_paket_wisata`) VALUES
(18, 15, 'JN5D43A78731B10', 3, 27),
(19, 7, 'JN5D37AAAFD1A90', 1, 20),
(21, 8, 'JN5D37ACBF8F630', 3, 21),
(25, 8, 'JN5D54B5914F58B', 2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `email`, `no_telp`, `password`, `date_created`) VALUES
(1, 'wiwiek', 'wiwiek@gmail.com', '085842000333', '123456', 0),
(2, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(3, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(4, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(5, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(6, 'wiwiek', 'wiwiek@gmail.com', '085842000333', '123456', 0),
(7, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(8, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(9, 'wiwiek', 'wiwiek@gmail.com', '', '', 0),
(10, 'wiwiek', 'wiwiek@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `koordinat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `kota`, `koordinat`) VALUES
(1, 'Yogyakarta', '-7.803249,110.3398253'),
(2, 'Bali', '-8.4556974,114.5110384'),
(3, 'Malang Raya', '-7.9786395,112.5617421'),
(4, 'Blitar', '-8.0948239,112.1302362'),
(5, 'Surabaya', '-7.2756141,112.6426428'),
(6, 'Banyuwangi', '-8.3322203,113.661001'),
(7, 'Bandung', '-6.9034443,107.5731166'),
(8, 'Pacitan', '-8.1018832,111.022563'),
(9, 'Semarang', '-7.0247246,110.3470243');

-- --------------------------------------------------------

--
-- Table structure for table `detail_destinasi`
--

CREATE TABLE `detail_destinasi` (
  `id_detil_destinasi` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL,
  `destinasi_wisata` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_destinasi`
--

INSERT INTO `detail_destinasi` (`id_detil_destinasi`, `id_destinasi`, `destinasi_wisata`) VALUES
(1, 2, 'Pantai Kuta'),
(2, 2, 'Pantai Pandawa'),
(3, 1, 'Malioboro'),
(4, 1, 'Candi Ratu Boko'),
(6, 3, 'Jatim Park 2'),
(7, 3, 'Pantai Tiga Warna'),
(8, 4, 'Makam Bung Karno'),
(9, 4, 'Candi Penataran'),
(10, 4, 'Sumber Udel Waterpark'),
(11, 7, 'Kebun Teh Pengalengan'),
(12, 7, 'Kawah Putih'),
(13, 7, 'Floating Market Lembang'),
(14, 7, 'Farm House Lembang'),
(15, 9, 'Kota Lama'),
(16, 9, 'Candi Kedung Songo'),
(17, 9, 'Klenteng Sam Po Kong'),
(18, 9, 'Lawang Sewu'),
(19, 9, 'Simpang Lima'),
(20, 8, 'Pantai Srau'),
(21, 8, 'Pantai Klayar'),
(22, 8, 'Sungai Maron'),
(23, 8, 'Pantai Teleng Ria'),
(24, 6, 'Kawah Ijen'),
(25, 6, 'Taman Nasional Baluran'),
(26, 6, 'Pantai Teluk Hijau'),
(27, 6, 'Pantai G-Land'),
(28, 5, 'Surabaya Night Carnival'),
(29, 5, 'Ekowisata Mangrove'),
(30, 5, 'Kenpark Surabaya'),
(31, 5, 'Jalan Tunjungan'),
(32, 5, 'Balai Kota'),
(33, 3, 'Bromo'),
(34, 3, 'Museum Angkut'),
(35, 3, 'Alun - Alun Kota Batu'),
(36, 3, 'Batu Night Spectacular'),
(37, 2, 'Danau Beratan Bedugul'),
(38, 2, 'Garuda Wisnu Kencana'),
(39, 2, 'Tanah Lot'),
(40, 1, 'Candi Borobudur'),
(41, 1, 'Candi Prambanan'),
(42, 1, 'Taman Sari'),
(43, 1, 'Goa Pindul');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
(1, 'Bus'),
(2, 'Hotel'),
(3, 'Makan'),
(4, 'Tiket Masuk Wisata'),
(5, 'Tour leader');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_paket`
--

CREATE TABLE `fasilitas_paket` (
  `id` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_paket`
--

INSERT INTO `fasilitas_paket` (`id`, `id_paket_wisata`, `id_fasilitas`) VALUES
(6, 20, 1),
(7, 20, 2),
(8, 20, 3),
(9, 21, 1),
(10, 21, 2),
(11, 21, 3),
(23, 27, 1),
(24, 27, 2),
(25, 27, 3),
(26, 29, 1),
(27, 29, 2),
(28, 29, 3),
(29, 29, 4),
(30, 29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `objek_paket`
--

CREATE TABLE `objek_paket` (
  `id` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `id_detil_destinasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objek_paket`
--

INSERT INTO `objek_paket` (`id`, `id_paket_wisata`, `id_detil_destinasi`) VALUES
(9, 20, 1),
(10, 20, 2),
(11, 21, 6),
(12, 21, 7),
(22, 27, 1),
(23, 27, 2),
(24, 27, 37),
(25, 27, 38),
(26, 29, 28),
(27, 29, 29),
(28, 29, 30),
(29, 29, 31);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket_wisata` int(11) NOT NULL,
  `kode_paket` varchar(50) DEFAULT NULL,
  `nama_paket` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `id_destinasi` int(11) NOT NULL,
  `jadwal_berangkat` date NOT NULL,
  `jadwal_pulang` date NOT NULL,
  `banyak_penumpang` int(12) NOT NULL,
  `biaya` int(12) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status_booking` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket_wisata`, `kode_paket`, `nama_paket`, `keterangan`, `id_destinasi`, `jadwal_berangkat`, `jadwal_pulang`, `banyak_penumpang`, `biaya`, `id_customer`, `id_user`, `id_status_booking`) VALUES
(20, 'JN5D37AAAFD1A90', 'Paket F', '', 2, '2019-08-13', '2019-08-15', 100, 200000000, 7, 7, 1),
(21, 'JN5D37ACBF8F630', 'Paket G', 'Tour Sekolah', 3, '2019-07-10', '2019-07-14', 100, 200000000, 9, 8, 2),
(27, 'JN5D43A78731B10', 'Paket A', 'SMA 1 Surabaya', 2, '2019-08-04', '2019-08-09', 100, 30000000, 1, 15, 1),
(29, 'JN5D54B5914F58B', 'paket A', 'Pergi hari ini', 5, '2019-08-23', '2019-08-25', 100, 200000000, 1, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `kode_booking` varchar(128) NOT NULL,
  `atas_nama` varchar(128) NOT NULL,
  `nominal` varchar(128) NOT NULL,
  `gambar_bukti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_booking`, `kode_booking`, `atas_nama`, `nominal`, `gambar_bukti`) VALUES
(1, 21, 'JN5D37ACBF8F630', 'laras', '200000000', 'pembayaran-190810-2ab4f4c1f0.jpg'),
(3, 25, 'JN5D54B5914F58B', 'laras', '200000000', 'pembayaran-190816-b70f5910f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Belum Dibayar'),
(2, 'Menunggu Konfirmasi'),
(3, 'Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `status_booking`
--

CREATE TABLE `status_booking` (
  `id_status_booking` int(1) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_booking`
--

INSERT INTO `status_booking` (`id_status_booking`, `status`) VALUES
(1, 'Active'),
(2, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_roll` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `no_telp`, `password`, `id_roll`, `date_created`, `is_actived`) VALUES
(4, 'mulia hartawan n', 'mulia.hartawan011@gmail.com', '627', '$2y$10$g88rO6eMPVN7jGwCXCWzzO464NpPmHFEJzGZ6JdDKCTAnkq6j9rB.', 1, 1562922525, 1),
(5, 'haris', 'haris@gmail.com', '085842310841', '$2y$10$OiJm/gKMxiAUScRxG84JI.80TACX6uDLrOYhF1DifZQOWZIm7aywi', 2, 1562917863, 1),
(6, 'zidan', 'zidanardany@gmail.com', '082299988954', '$2y$10$9ZeOkGZ25Hc6kRJjoeX5W.TbnSiKXspEJfjerCeJCu.PanklemWsi', 2, 1562917953, 1),
(7, 'wiwiek', 'wiwiek.waluyati64@gmail.com', '085150021000', '$2y$10$9ZeOkGZ25Hc6kRJjoeX5W.TbnSiKXspEJfjerCeJCu.PanklemWsi', 2, 1563576110, 1),
(8, 'laras', 'larasatihf@gmail.com', '085150021000', '$2y$10$68sXNgLcJFNlBweCJMlzwOJZ6TC4ix4UFjS51NnPmbRxeZuNUE9Wq', 2, 1563724379, 1),
(11, 'admin', 'admin@gmail.com', '+62', '$2y$10$ogIeIWBIHZoz0WD8c1JFdOit244NT8yZBLs3NAPP.vI6JP0akHGV.', 1, 1564672486, 1),
(15, 'mulia', 'mulia@gmail.com', '+62', '$2y$10$Pb4ijspimNzigZwlGhVF5uX4PD9q4L2zDjfZa8/R17BeODEZ7.0jS', 2, 1564714579, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD UNIQUE KEY `kode_booking` (`kode_booking`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_paket_wisata` (`id_paket_wisata`) USING BTREE,
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `detail_destinasi`
--
ALTER TABLE `detail_destinasi`
  ADD PRIMARY KEY (`id_detil_destinasi`),
  ADD KEY `id_destinasi` (`id_destinasi`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fasilitas_paket`
--
ALTER TABLE `fasilitas_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_wisata` (`id_paket_wisata`,`id_fasilitas`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indexes for table `objek_paket`
--
ALTER TABLE `objek_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_wisata` (`id_paket_wisata`,`id_detil_destinasi`),
  ADD KEY `id_detil_destinasi` (`id_detil_destinasi`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`),
  ADD UNIQUE KEY `kode_paket` (`kode_paket`),
  ADD KEY `id_destinasi` (`id_destinasi`),
  ADD KEY `id_user` (`id_customer`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_status_booking` (`id_status_booking`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_booking` (`kode_booking`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_booking`
--
ALTER TABLE `status_booking`
  ADD PRIMARY KEY (`id_status_booking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_destinasi`
--
ALTER TABLE `detail_destinasi`
  MODIFY `id_detil_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas_paket`
--
ALTER TABLE `fasilitas_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `objek_paket`
--
ALTER TABLE `objek_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_booking`
--
ALTER TABLE `status_booking`
  MODIFY `id_status_booking` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_paket_wisata`) REFERENCES `paket_wisata` (`id_paket_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_destinasi`
--
ALTER TABLE `detail_destinasi`
  ADD CONSTRAINT `detail_destinasi_ibfk_1` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fasilitas_paket`
--
ALTER TABLE `fasilitas_paket`
  ADD CONSTRAINT `fasilitas_paket_ibfk_1` FOREIGN KEY (`id_paket_wisata`) REFERENCES `paket_wisata` (`id_paket_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_paket_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `objek_paket`
--
ALTER TABLE `objek_paket`
  ADD CONSTRAINT `objek_paket_ibfk_1` FOREIGN KEY (`id_paket_wisata`) REFERENCES `paket_wisata` (`id_paket_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `objek_paket_ibfk_2` FOREIGN KEY (`id_detil_destinasi`) REFERENCES `detail_destinasi` (`id_detil_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD CONSTRAINT `paket_wisata_ibfk_4` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_wisata_ibfk_5` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_wisata_ibfk_6` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_wisata_ibfk_7` FOREIGN KEY (`id_status_booking`) REFERENCES `status_booking` (`id_status_booking`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
