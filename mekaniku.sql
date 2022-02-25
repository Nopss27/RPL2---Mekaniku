-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 04:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekaniku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(11) NOT NULL,
  `nama_bengkel` varchar(50) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `alamat` text DEFAULT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `nama_bengkel`, `gambar`, `jam_buka`, `jam_tutup`, `alamat`, `latitude`, `longitude`, `link`, `nama_pemilik`, `no_telp`, `whatsapp`, `username`, `password`) VALUES
(4, 'Bengkel Andri', 'bengkeladnri.jpg', '07:30:00', '17:27:00', 'Jl. Sriwijaya No.26A, Cigereleng, Kec. Regol, Kota Bandung, Jawa Barat 40253', '-6.938694234167234', '107.61282829715654', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63369.395285470426!2d107.612701!3d-6.939837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb65e45a729cadaf!2sBengkel%20Andri!5e0!3m2!1sid!2sid!4v1645515844469!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'andri setiyadi', '087765632556', '087765632556', 'andri', '1234'),
(10, 'bengkel eza', 'your_name-wallpaper-1366x768_2.jpg', '07:00:00', '23:00:00', 'gang haji bujang ', '-6.363114499824012', '107.17190592266175', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.13499122415!2d107.17159109432193!3d-6.363852721413669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b8e25e8c1c1%3A0x87b816508f40a363!2sKantor%20BKPPD%20Kabupaten%20bekasi!5e0!3m2!1sid!2sid!4v1645637424428!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Rezza Ramdhani', '087887689113', '085652910222', 'rezza', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('l','p') DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `email`, `username`, `password`) VALUES
(1, 'asep', NULL, NULL, '087654333333', '', 'asep123', '1234'),
(3, 'Agus Setiadi', NULL, NULL, '08787979879', '', 'agus', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `montir`
--

CREATE TABLE `montir` (
  `id_montir` int(11) NOT NULL,
  `id_bengkel` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('l','p') DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `montir`
--

INSERT INTO `montir` (`id_montir`, `id_bengkel`, `nama`, `no_telp`, `jenis_kelamin`, `email`, `whatsapp`) VALUES
(2, 4, 'Rezza Ramdhani', '087887689113', 'l', 'aquabotol015@gmail.com', '085652910222');

-- --------------------------------------------------------

--
-- Table structure for table `pageview`
--

CREATE TABLE `pageview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `userip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pageview`
--

INSERT INTO `pageview` (`id`, `page`, `userip`) VALUES
(2, 'mekaniku', '::1'),
(3, 'mekaniku', '::2');

-- --------------------------------------------------------

--
-- Table structure for table `review_bengkel`
--

CREATE TABLE `review_bengkel` (
  `id_review` int(11) NOT NULL,
  `id_bengkel` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `poin` int(1) NOT NULL,
  `komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `totalview`
--

CREATE TABLE `totalview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `totalvisit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalview`
--

INSERT INTO `totalview` (`id`, `page`, `totalvisit`) VALUES
(1, 'mekaniku', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `montir`
--
ALTER TABLE `montir`
  ADD PRIMARY KEY (`id_montir`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indexes for table `pageview`
--
ALTER TABLE `pageview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_bengkel`
--
ALTER TABLE `review_bengkel`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `review_bengkel_ibfk_1` (`id_bengkel`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `totalview`
--
ALTER TABLE `totalview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `montir`
--
ALTER TABLE `montir`
  MODIFY `id_montir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pageview`
--
ALTER TABLE `pageview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review_bengkel`
--
ALTER TABLE `review_bengkel`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `totalview`
--
ALTER TABLE `totalview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `montir`
--
ALTER TABLE `montir`
  ADD CONSTRAINT `montir_ibfk_1` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON UPDATE CASCADE;

--
-- Constraints for table `review_bengkel`
--
ALTER TABLE `review_bengkel`
  ADD CONSTRAINT `review_bengkel_ibfk_1` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `review_bengkel_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
