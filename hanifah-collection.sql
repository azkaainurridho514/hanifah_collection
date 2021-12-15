-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 12:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanifah-collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'baju'),
(2, 'celana'),
(3, 'baju dewasa'),
(4, 'celana dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id_content` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slide` int(11) NOT NULL COMMENT '1 = slide, 0 = non slide',
  `title` varchar(150) NOT NULL,
  `sub_title` text NOT NULL,
  `price` int(50) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `id_medsos` int(11) NOT NULL,
  `medsos` varchar(20) NOT NULL,
  `copy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `nav_judul` varchar(50) NOT NULL,
  `judul_hero` varchar(100) NOT NULL,
  `sub_judul_hero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `nav_judul`, `judul_hero`, `sub_judul_hero`) VALUES
(1, 'HANIFAH COLLECTION', 'SELAMAT DATANG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `image_content`
--

CREATE TABLE `image_content` (
  `id_image` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medsos`
--

CREATE TABLE `medsos` (
  `id_medsos` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motif_content`
--

CREATE TABLE `motif_content` (
  `id_motif` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `motif_1` varchar(100) NOT NULL,
  `motif_2` varchar(100) NOT NULL,
  `motif_3` varchar(100) NOT NULL,
  `motif_4` varchar(100) NOT NULL,
  `motif_5` varchar(100) NOT NULL,
  `motif_6` varchar(100) NOT NULL,
  `motif_7` varchar(100) NOT NULL,
  `motif_8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok_motif_content`
--

CREATE TABLE `stok_motif_content` (
  `id_stok_motif` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `stok_motif_1` varchar(20) NOT NULL,
  `stok_motif_2` varchar(20) NOT NULL,
  `stok_motif_3` varchar(20) NOT NULL,
  `stok_motif_4` varchar(20) NOT NULL,
  `stok_motif_5` varchar(20) NOT NULL,
  `stok_motif_6` varchar(20) NOT NULL,
  `stok_motif_7` varchar(20) NOT NULL,
  `stok_motif_8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok_warna_content`
--

CREATE TABLE `stok_warna_content` (
  `id_stok_warna` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `stok_warna_1` varchar(20) NOT NULL,
  `stok_warna_2` varchar(20) NOT NULL,
  `stok_warna_3` varchar(20) NOT NULL,
  `stok_warna_4` varchar(20) NOT NULL,
  `stok_warna_5` varchar(20) NOT NULL,
  `stok_warna_6` varchar(20) NOT NULL,
  `stok_warna_7` varchar(20) NOT NULL,
  `stok_warna_8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warna_content`
--

CREATE TABLE `warna_content` (
  `id_warna` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `warna_1` varchar(100) NOT NULL,
  `warna_2` varchar(100) NOT NULL,
  `warna_3` varchar(100) NOT NULL,
  `warna_4` varchar(100) NOT NULL,
  `warna_5` varchar(100) NOT NULL,
  `warna_6` varchar(100) NOT NULL,
  `warna_7` varchar(100) NOT NULL,
  `warna_8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_content`
--
ALTER TABLE `image_content`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `motif_content`
--
ALTER TABLE `motif_content`
  ADD PRIMARY KEY (`id_motif`);

--
-- Indexes for table `stok_motif_content`
--
ALTER TABLE `stok_motif_content`
  ADD PRIMARY KEY (`id_stok_motif`);

--
-- Indexes for table `stok_warna_content`
--
ALTER TABLE `stok_warna_content`
  ADD PRIMARY KEY (`id_stok_warna`);

--
-- Indexes for table `warna_content`
--
ALTER TABLE `warna_content`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
