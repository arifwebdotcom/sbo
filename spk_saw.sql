-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 10:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE IF NOT EXISTS `tb_bobot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_kelas` double NOT NULL,
  `b_pot` double NOT NULL,
  `b_rns` double NOT NULL,
  `b_jto` double NOT NULL,
  `b_ne` double NOT NULL,
  `b_prestasi` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_bobot`
--

INSERT INTO `tb_bobot` (`id`, `b_kelas`, `b_pot`, `b_rns`, `b_jto`, `b_ne`, `b_prestasi`) VALUES
(1, 2, 1, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matriks`
--

CREATE TABLE IF NOT EXISTS `tb_matriks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `kelas` double NOT NULL,
  `pot` double NOT NULL,
  `rns` double NOT NULL,
  `jto` double NOT NULL,
  `ne` double NOT NULL,
  `prestasi` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_matriks`
--

INSERT INTO `tb_matriks` (`id`, `nis`, `kelas`, `pot`, `rns`, `jto`, `ne`, `prestasi`) VALUES
(2, 125, 3, 3, 5, 3, 4, 2),
(3, 130, 5, 4, 5, 3, 1, 2),
(4, 131, 5, 4, 5, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kelas` int(11) NOT NULL,
  `pot` double NOT NULL,
  `rns` double NOT NULL,
  `jto` double NOT NULL,
  `ne` double NOT NULL,
  `prestasi` double NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `kelas`, `pot`, `rns`, `jto`, `ne`, `prestasi`) VALUES
(125, 'Devanda', 11, 1500000, 90, 3, 80, 8),
(130, 'Muhammad Arif Wicaksono', 12, 2000000, 100, 3, 9, 9),
(131, 'Eko', 12, 2500000, 99, 1, 85, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'arif', '0192023a7bbd73250516f069df18b500');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_matriks`
--
ALTER TABLE `tb_matriks`
  ADD CONSTRAINT `tb_matriks_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
