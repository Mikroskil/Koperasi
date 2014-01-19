-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2014 at 04:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `admin_id`, `password`) VALUES
(1, 'admin', '20c1a26a55039b30866c9d0aa51953ca'),
(2, 'admin01', '18c6d818ae35a3e8279b5330eda01498'),
(3, 'fachri', '481600ee22793ea5a8024be139b7c2d6'),
(4, 'admin03', '7dc2466ad3ff5911f6a5e47e043e0abc');

-- --------------------------------------------------------

--
-- Table structure for table `ajukan`
--

CREATE TABLE IF NOT EXISTS `ajukan` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `gaji` varchar(10) NOT NULL,
  `nominal` varchar(10) NOT NULL,
  `jangka` varchar(10) NOT NULL,
  `cicilan` varchar(10) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ajukan`
--

INSERT INTO `ajukan` (`user_id`, `tanggal`, `username`, `nama`, `no_hp`, `no_ktp`, `no_rek`, `gaji`, `nominal`, `jangka`, `cicilan`, `nama_file`) VALUES
(11, '12 Jan 2014', 'ricky', 'Ricky Sibuea', '085755557777', '1234567890', '111177789', '3000000', '50000000', '12', '4208334', 'gambar/Syarat.jpg'),
(13, '13 Jan 2014', 'ricky', 'Ricky Sibuea', '085755557777', '1234567890', '111177789', '3000000', '5000000', '12', '420834', 'gambar/Syarat.jpg'),
(14, '13 Jan 2014', 'ricky', 'Ricky Sibuea', '085755557777', '1234567890', '111177789', '3000000', '5000000', '12', '420834', 'gambar/Syarat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`user_id`, `username`, `pesan`) VALUES
(5, 'ricky', 'pinjaman saya kenapa belum dikirim?');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nominal` varchar(15) NOT NULL,
  `jangka` varchar(4) NOT NULL,
  `cicilan` varchar(10) NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `lunas` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`user_id`, `tanggal`, `nama`, `username`, `no_hp`, `no_rek`, `nominal`, `jangka`, `cicilan`, `status`, `alasan`, `lunas`) VALUES
(3, '13 Jan 2014', 'Ricky Sibuea', 'ricky', '085755557777', '111177789', '5000000', '12', '420834', 'yes', 'yaaa di terima', 'Sedang berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `jen_kel` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gaji` varchar(10) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `fullname`, `jen_kel`, `alamat`, `gaji`, `no_hp`, `no_ktp`, `no_rek`) VALUES
(1, 'ricky', '20c1a26a55039b30866c9d0aa51953ca', 'black.id64@gmail.com', 'Ricky Sibuea', 'Laki-laki', 'Jln.Tempuling Gg.Ibu No.43', '3000000', '085755557777', '1234567890', '111177789'),
(7, 'alfredo', '5c2bf15004e661d7b7c9394617143d07', 'alfrede_ramos@yahoo.com', 'alfredo ramos', 'Laki-laki', 'Jln. thamrin', '5000000', '087844237756', '0123456789012', '100456791');
