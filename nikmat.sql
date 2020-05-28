-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 07:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nikmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`id_kontak` int(11) NOT NULL,
  `isi_kontak` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `isi_kontak`) VALUES
(1, '<p>Instagram : @nikmat.indonesia | @nikmatrajawali</p>\r\n\r\n<p>Whatsapp : 0813 4889 1198 (Yogie)</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
`id_lokasi` int(3) NOT NULL,
  `link_lokasi` text NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `link_lokasi`, `nama_lokasi`) VALUES
(1, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.823447865916!2d113.92892811468711!3d-2.2201248983817874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb38b3c2a089b%3A0xdb85396c94a774be!2sNikmat%20Indonesia!5e0!3m2!1sid!2sid!4v1590683423939!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', 'Cut Nyak Dien'),
(3, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.823447865916!2d113.92892811468711!3d-2.2201248983817874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb38b3c2a089b%3A0xdb85396c94a774be!2sNikmat%20Indonesia!5e0!3m2!1sid!2sid!4v1590683423939!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(2) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `update`) VALUES
(2, 'firlo', 'amazon', '2019-05-19 13:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
`id_menu` int(11) NOT NULL,
  `nama_menu` varchar(60) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `foto_menu` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_menu`, `nama_menu`, `harga`, `tanggal`, `foto_menu`) VALUES
(6, 'cccccc', '20.000', '2020-05-06', '15.png'),
(7, 'sssdsd', '30.000', '2020-05-08', '2222.jpg'),
(8, 'Sekut', '50.000', '2020-05-20', '123111.jpg'),
(9, 'Sekut', '20.000', '2020-05-07', '2222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
`id_tentang` int(3) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `foto_tentang` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `deskripsi`, `foto_tentang`) VALUES
(1, '<p><span style="font-size:22px"><strong>nikmat</strong>/nik&middot;mat/ <strong>1</strong> <em>a</em> enak; lezat: <em>masakannya memang --;</em> <strong>2</strong> <em>a</em> merasa puas; senang: --<em> rasanya tidur di kamar sebagus ini;</em> <strong>3</strong> <em>n </em>pemberian atau karunia (dari Allah): <em>Allah telah memberi &ndash; kepada manusia;</em></span></p>\r\n\r\n<p><br />\r\n<span style="font-size:22px"><strong>menikmati </strong>/me&middot;nik&middot;mati /<em>v</em> <strong>1</strong> merasai (sesuatu yang nikmat atau lezat): <em>kami ~ makan minum;</em> <strong>2</strong> mengecap; mengalami (sesuatu yang menyenangkan atau memuaskan): ~<em> hasil kemerdekaan;</em><br />\r\n<br />\r\n<strong>penikmat</strong>/pe&middot;nik&middot;mat/ <em>n</em> orang yang menikmati (merasai, merasakan, mengecap, mengalami): <em>mereka ~ puisi; ia memang seorang ~ hidup;</em><br />\r\n<br />\r\n<strong>penikmatan</strong>/pe&middot;nik&middot;mat&middot;an/ <em>n</em> proses, cara, perbuatan menikmati; pengecapan;<br />\r\n<br />\r\n<strong>kenikmatan</strong>/ke&middot;nik&middot;mat&middot;an/ <em>n</em> keadaan yang nikmat; keenakan; kesedapan; kesenangan: <em>mengecap ~ peradaban modern</em></span></p>\r\n\r\n<p><span style="font-size:22px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n\r\n<p><span style="font-size:22px">Yang pada intinya kata Nikmat adalah sesuatu yang mengandung kebaikan dan membuat dampak positif layaknya Nikmat Indonesia.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:22px">Nikmat Indonesia.</span></p>\r\n', '123111.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
 ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
 ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
MODIFY `id_lokasi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
MODIFY `id_tentang` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
