-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 05:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokpee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_carousel`
--

CREATE TABLE `tbl_admin_carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_carousel`
--

INSERT INTO `tbl_admin_carousel` (`carousel_id`, `carousel_image`) VALUES
(32, '64af7f6f49a0e.jpg'),
(33, '64aa30fc58b3d.jpg'),
(34, '64aa30ff0d284.jpg'),
(35, '64aa3101d75b4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_diskon`
--

CREATE TABLE `tbl_admin_diskon` (
  `item_id` int(11) NOT NULL,
  `item_title` varchar(225) DEFAULT NULL,
  `discount_value` varchar(225) DEFAULT NULL,
  `price_before` varchar(225) DEFAULT NULL,
  `price_after` varchar(225) DEFAULT NULL,
  `availbility` varchar(225) DEFAULT NULL,
  `item_image` varchar(225) DEFAULT NULL,
  `item_value` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_diskon`
--

INSERT INTO `tbl_admin_diskon` (`item_id`, `item_title`, `discount_value`, `price_before`, `price_after`, `availbility`, `item_image`, `item_value`) VALUES
(13, 'Nissin Kelapa Ijo 3 Pack x 280gr + Toples', '40', '33.600', '20.000', 'Tersedia', '64b11633ec132.jpg', '2'),
(14, 'Kedaung Gelas Mug Warna warni 9cm - Random', '29', '45.000', '31.900', 'Tersedia', '64b15ac22f3aa.jpg', ''),
(15, 'The Right-C 300 Mg 30 Tabs', '15', '80.000', '75.000', 'Tersedia', '64b15ad6b0ea6.jpg', ''),
(16, 'Atia Masker Kain Anti Bakteri Mix Color', '18', '117.000', '95.900', 'Tersedia', '64b15af04c665.jpg', ''),
(17, 'KIRARO Sandal Sendal Selop Tali Wanita Santai Murah', '50', '25.000', '12.500', 'Tersedia', '64b15b024c452.jpg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_foryou`
--

CREATE TABLE `tbl_admin_foryou` (
  `data_id` int(11) NOT NULL,
  `data_name` varchar(225) DEFAULT NULL,
  `data_price` varchar(225) DEFAULT NULL,
  `data_location` varchar(225) DEFAULT NULL,
  `data_rate` varchar(225) DEFAULT NULL,
  `data_image` varchar(225) DEFAULT NULL,
  `data_barang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_foryou`
--

INSERT INTO `tbl_admin_foryou` (`data_id`, `data_name`, `data_price`, `data_location`, `data_rate`, `data_image`, `data_barang`) VALUES
(13, 'Face Shield anti Droplets / Masker Pelindung Wajah', '11.000', 'Jakarta Utara', '5', '64aad5a809484.jpg', '3'),
(14, 'Face Shield anti Droplets Buka Tutup / Masker Pelindung Wajah', '15.500', 'Surabaya', '4', '64aad5bcba079.jpg', ''),
(15, 'Masker 2 in 1 face shield pelindung wajah', '7.500', 'Surabaya', '3', '64aad5d81a3cc.jpg', ''),
(16, 'Face Protector - Face Shield - Masker Pelindung Wajah serbaguna - Hitam', '14.999', 'Jakarta Utara', '4', '64aad5f75fcc8.jpg', '1'),
(17, 'Samsung A20 A30 A50 A50s Tempered Glass 6D Full Cover Ambigo - Hitam', '17.200', 'Surabaya', '4', '64aad60e837fa.jpg', ''),
(18, 'Masker Kain 3 Lapis Bisa Cuci Pakai Ulang Bukan Sritex Sensi Skreener - Hitam Garis', '9.750', 'Surabaya', '4', '64aad6258b195.jpg', ''),
(19, 'Realme 3 Pro - COPPER Tempered Glass Full Glue PREMIUM Glossy', '42.500', 'Jakarta Utara', '5', '64aad644bc605.jpg', ''),
(20, 'Sensi mask ( masker ) duckbill isi 6', '50.000', 'Jakarta Utara', '5', '64aad65eab4d9.jpg', ''),
(21, 'Kipas Angin Meja (Desk Fan) 16in - NAGOYA NG16DF - 1 Unit per Koli', '14.999', 'Jakarta Utara', '5', '64aad670f0594.jpg', ''),
(22, 'Vention SATA HDD SSD 2.5\" Enclosure Case External - KDH', '109.000', 'Jakarta', '4', '64aad68506aef.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_kategori`
--

CREATE TABLE `tbl_admin_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_kategori`
--

INSERT INTO `tbl_admin_kategori` (`kategori_id`, `kategori_image`) VALUES
(17, '64af7f7fefa54.jpg'),
(18, '64aa3277e6920.jpg'),
(19, '64aa327a9f453.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun_admin`
--

CREATE TABLE `tbl_akun_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(225) DEFAULT NULL,
  `admin_email` varchar(225) DEFAULT NULL,
  `admin_password` varchar(225) DEFAULT NULL,
  `admin_profile` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun_admin`
--

INSERT INTO `tbl_akun_admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_profile`) VALUES
(25, 'admin', 'athiang@gmail.com', '1234', '64a93d63f0950.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun_user`
--

CREATE TABLE `tbl_akun_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `user_profile` varchar(225) DEFAULT NULL,
  `no_hp` varchar(225) NOT NULL,
  `user_password` varchar(225) DEFAULT NULL,
  `date_created` varchar(225) NOT NULL,
  `tanggal_lahir` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun_user`
--

INSERT INTO `tbl_akun_user` (`user_id`, `username`, `email`, `user_profile`, `no_hp`, `user_password`, `date_created`, `tanggal_lahir`, `alamat`, `jenis_kelamin`) VALUES
(37, 'Steven Thiang', 'athiang@gmail.com', '', '123', '123', '2023-07-10', '05/06/2003', 'Jl madong lubis no 20', 'pria'),
(38, 'admin', 'admin', NULL, '085101904500', 'admin', '2023-07-11', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_carousel`
--
ALTER TABLE `tbl_admin_carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `tbl_admin_diskon`
--
ALTER TABLE `tbl_admin_diskon`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_admin_foryou`
--
ALTER TABLE `tbl_admin_foryou`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `tbl_admin_kategori`
--
ALTER TABLE `tbl_admin_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_akun_user`
--
ALTER TABLE `tbl_akun_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_carousel`
--
ALTER TABLE `tbl_admin_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_admin_diskon`
--
ALTER TABLE `tbl_admin_diskon`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin_foryou`
--
ALTER TABLE `tbl_admin_foryou`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_admin_kategori`
--
ALTER TABLE `tbl_admin_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_akun_user`
--
ALTER TABLE `tbl_akun_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
