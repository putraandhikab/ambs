-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 01:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambs`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `file` varchar(250) DEFAULT NULL,
  `todolist` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `id_user`, `judul`, `isi`, `kategori`, `tanggal`, `jam`, `file`, `todolist`) VALUES
(2, 4, 'Fisika - Materi Gaya', '<span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#000000\"><span style=\"-webkit-font-smoothing: antialiased;\">Gaya (F) merupakan sebuah besaran turunan dari hasil perkalian antara massa (m) dengan percepatan (a). Sehingga&nbsp; rumus yang dihasilkan adalah F = m x a. Sehingga satuan dari gaya adalah kilogram meter per sekon kuadrat (kg m/s<span style=\"-webkit-font-smoothing: antialiased; font-size: 13.3333px;\"><span style=\"-webkit-font-smoothing: antialiased; position: relative; font-size: 9.99998px; line-height: 0; vertical-align: baseline; top: -0.5em;\">2</span></span></span><span style=\"-webkit-font-smoothing: antialiased;\">) dan akhirnya disebut dengan satuan N (Newton).</span></font></span><div><span style=\"-webkit-font-smoothing: antialiased;\"><br></span></div>', 'science', '2021-05-10', '04:19:11', NULL, NULL),
(3, 6, 'Aplikasi Mobile', '<p>- Untuk membuat aplikasi mobile bisa menggunaka bahsa kotlin, java, flutter, dll.</p><p>- IDE yang bisa digunakan salahsatunya adalah android studio</p>', 'computer', '2021-05-10', '04:22:01', NULL, NULL),
(4, 6, 'Isi file .htaccess', '<p>RewriteEngine On</p><p>RewriteCond %{REQUEST_FILENAME} !-f</p><p>RewriteCond %{REQUEST_FILENAME} !-d</p><p>RewriteRule ^(.*)$ index.php/$1 [L]</p>', 'science', '2021-05-21', '09:16:34', NULL, NULL),
(8, 4, 'blabla', '<p>12092oiweie</p>', 'math', '2021-05-10', '05:19:18', NULL, NULL),
(9, 6, 'Penjumlahan', '<p>1 + 1 = 2</p>', 'math', '2021-05-21', '09:17:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `username`, `password`, `foto`) VALUES
(1, 'Mario', 'marioo', '$2y$10$AuGHEwuXKMTrUS0yVFQh0Of56VtgKO9kZwsfKPsqM55RAVG4EWKk2', NULL),
(2, 'adrian', 'adriaan', '$2y$10$y.vkWvVCsGYeQeTpKkSKv.9aCoiw2ouCeWvqF4dLSFSDDSCzMy.Oa', NULL),
(3, 'sultan', 'sultaan', '$2y$10$Ye5N5OcseC.G.4bLPvvgruEd0zohagLmfPDXqu1LufL96i05.t6Jm', NULL),
(4, 'doni tata', 'dota', '$2y$10$c2ah5ANtuxDm5fETBPGZb.zD8aZvpt9zUUm5/EDK7zz6vlJZcjUIy', NULL),
(5, 'mario lawalata', 'lawalatas', '$2y$10$3LLPMx2ppGj3jfw/Mv/pr.utxbDcKlDcfxH8iTGT0UhZlfVUqecwm', NULL),
(6, 'Wawan Gunawan Surawan', 'wangun', '$2y$10$tmbQna4dUFkLUFeu891bbeNAALA0cOJnk2BlwBw9di0PjMTJRoniy', 'profilepict3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
