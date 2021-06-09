-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 11:35 PM
-- Server version: 8.0.25
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gateway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'AvandhyKurniawan', 'df350745619f8cc8689e1ce688abcbe70575f563c1ef79027b98f022fac7d526bb829731fa886c302888c4f8e709045efaded228097d2aa96b13668107d4dc1aELuHP736E7pk1YxR6pnuyD+vQKkQ61YrI8p3FPYSybw=');

-- --------------------------------------------------------

--
-- Table structure for table `lantai`
--

CREATE TABLE `lantai` (
  `lantai_id` int NOT NULL,
  `no_lantai` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lantai`
--

INSERT INTO `lantai` (`lantai_id`, `no_lantai`) VALUES
(1, '02'),
(2, '03'),
(3, '05'),
(4, '06'),
(5, '07'),
(6, '08'),
(7, '09'),
(8, '10'),
(9, '11'),
(10, '12'),
(11, '15'),
(12, '16'),
(13, '17'),
(14, '18'),
(15, '18'),
(16, '19'),
(17, '20'),
(18, '8A');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` int NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` int NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `foto_diri` varchar(255) NOT NULL,
  `foto_kuasa` varchar(255) NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `alamat_ktp` varchar(255) DEFAULT NULL,
  `status` enum('recepted','rejected','hold') NOT NULL DEFAULT 'hold',
  `status_peserta` enum('Pemilik','Penyewa') NOT NULL,
  `tower_id` int NOT NULL,
  `lantai_id` int NOT NULL,
  `unit_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`peserta_id`, `nama_lengkap`, `email`, `tlp`, `foto_ktp`, `foto_diri`, `foto_kuasa`, `domisili`, `alamat_ktp`, `status`, `status_peserta`, `tower_id`, `lantai_id`, `unit_id`) VALUES
(1, 'Kurniawan Avandhy', 'avandhykurniawan@gmail.com', 8888, '5ca0cbb652060482eefe5a3c1e540012/image.png', '5ca0cbb652060482eefe5a3c1e540012/image_(1).png', '', 'Cikupa', 'Cikupa', 'hold', 'Pemilik', 3, 7, 6),
(2, 'Kurniawan', 'avandhykurniawan@gmail.com', 8888, '5cb7bcafa4fc7aa28cf22a8cd981e4d7/image_(3).png', '5cb7bcafa4fc7aa28cf22a8cd981e4d7/image_(2).png', '5cb7bcafa4fc7aa28cf22a8cd981e4d7/image_(1)_(1).png', 'Cikupa', 'Cikupa', 'recepted', 'Penyewa', 2, 15, 11),
(3, 'Avandhy Kurniawan', 'avandhykurniawan@gmail.com', 8888, 'a4ab1c79a9776eeaa90325d5c05f3fae/image.png', 'a4ab1c79a9776eeaa90325d5c05f3fae/image_(1).png', '', 'Cikupa', 'Cikupa', 'hold', 'Pemilik', 1, 17, 24);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int NOT NULL,
  `info_agenda` text NOT NULL,
  `info_tatatertib` text NOT NULL,
  `file_agenda` varchar(255) NOT NULL,
  `file_tatatertib` varchar(255) NOT NULL,
  `link_zoom` varchar(100) NOT NULL,
  `password_zoom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tower`
--

CREATE TABLE `tower` (
  `tower_id` int NOT NULL,
  `nama_tower` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tower`
--

INSERT INTO `tower` (`tower_id`, `nama_tower`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'AD'),
(6, 'AL'),
(7, 'BD'),
(8, 'BL'),
(9, 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int NOT NULL,
  `nama_unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `nama_unit`) VALUES
(3, '01'),
(4, '02'),
(5, '03'),
(6, '05'),
(7, '06'),
(8, '07'),
(9, '08'),
(10, '09'),
(11, '10'),
(12, '11'),
(13, '12'),
(14, '15'),
(15, '16'),
(16, '17'),
(17, '18'),
(18, '19'),
(19, '20'),
(20, '21'),
(21, '23'),
(22, '25'),
(23, '26'),
(24, '27'),
(25, '28'),
(26, '1A'),
(27, '2A'),
(28, '5A'),
(29, '1B'),
(30, '2B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `peserta_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `peserta_id`, `username`, `password`) VALUES
(1, 2, '0B1810-Kurniawan', '49ba0b980d20a4014b8d3076543c2170356d7c4478cd53cd449082782a13985422771868fb54369b3a22cbb3f2f3f784106cc75a2fc053fb3a89bde8f61e8632OLPeITY6loHtQwKbxEzlYmS/Ay51FyW0E6Mu4Aia7qg=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`lantai_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `tower`
--
ALTER TABLE `tower`
  ADD PRIMARY KEY (`tower_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `peserta_id` (`peserta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `lantai_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `peserta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tower`
--
ALTER TABLE `tower`
  MODIFY `tower_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`peserta_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
