-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2017 pada 12.45
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_affiliate`
--

CREATE TABLE IF NOT EXISTS `tb_affiliate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_up` int(11) NOT NULL,
  `id_user_down` int(11) NOT NULL,
  `komisi` double NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_user_up` (`id_user_up`,`id_user_down`),
  KEY `id_user_down` (`id_user_down`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paket` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_paket` (`id_paket`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `diskripsi` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE IF NOT EXISTS `tb_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(100) NOT NULL,
  `diskripsi` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket_user`
--

CREATE TABLE IF NOT EXISTS `tb_paket_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `expired` date NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`,`id_paket`),
  KEY `id_paket` (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE IF NOT EXISTS `tb_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_affiliate`
--
ALTER TABLE `tb_affiliate`
  ADD CONSTRAINT `tb_affiliate_ibfk_1` FOREIGN KEY (`id_user_up`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_affiliate_ibfk_2` FOREIGN KEY (`id_user_down`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id`),
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_paket_user`
--
ALTER TABLE `tb_paket_user`
  ADD CONSTRAINT `tb_paket_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_paket_user_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
