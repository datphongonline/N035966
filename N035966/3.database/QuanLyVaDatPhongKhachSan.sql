-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 04:02 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE IF NOT EXISTS `anh` (
`maanh` int(11) NOT NULL,
  `map` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ctdv`
--

CREATE TABLE IF NOT EXISTS `ctdv` (
  `mattdp` int(11) NOT NULL,
  `madv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cttn`
--

CREATE TABLE IF NOT EXISTS `cttn` (
  `matn` int(11) NOT NULL,
  `malp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE IF NOT EXISTS `dichvu` (
`madv` int(11) NOT NULL,
  `tendv` text NOT NULL,
  `giadv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `huydp`
--

CREATE TABLE IF NOT EXISTS `huydp` (
`mahuydp` int(11) NOT NULL,
  `mattdp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `khach`
--

CREATE TABLE IF NOT EXISTS `khach` (
`mak` int(11) NOT NULL,
  `hotenk` varchar(35) NOT NULL,
  `sdt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE IF NOT EXISTS `loaiphong` (
`malp` int(11) NOT NULL,
  `tenlp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE IF NOT EXISTS `phong` (
`map` int(11) NOT NULL,
  `malp` int(11) NOT NULL,
  `giap` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
`matk` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tiennghi`
--

CREATE TABLE IF NOT EXISTS `tiennghi` (
`matn` int(11) NOT NULL,
  `tentn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE IF NOT EXISTS `trangthai` (
`matt` int(11) NOT NULL,
  `tentt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ttdatphong`
--

CREATE TABLE IF NOT EXISTS `ttdatphong` (
`mattdp` int(11) NOT NULL,
  `matt` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `map` int(11) NOT NULL,
  `datphongtu` date NOT NULL,
  `denngay` date NOT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
 ADD PRIMARY KEY (`maanh`), ADD KEY `map` (`map`);

--
-- Indexes for table `ctdv`
--
ALTER TABLE `ctdv`
 ADD PRIMARY KEY (`mattdp`,`madv`), ADD KEY `madv` (`madv`);

--
-- Indexes for table `cttn`
--
ALTER TABLE `cttn`
 ADD PRIMARY KEY (`matn`,`malp`), ADD KEY `malp` (`malp`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
 ADD PRIMARY KEY (`madv`);

--
-- Indexes for table `huydp`
--
ALTER TABLE `huydp`
 ADD PRIMARY KEY (`mahuydp`), ADD KEY `mattdp` (`mattdp`);

--
-- Indexes for table `khach`
--
ALTER TABLE `khach`
 ADD PRIMARY KEY (`mak`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
 ADD PRIMARY KEY (`malp`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
 ADD PRIMARY KEY (`map`), ADD KEY `malp` (`malp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`matk`);

--
-- Indexes for table `tiennghi`
--
ALTER TABLE `tiennghi`
 ADD PRIMARY KEY (`matn`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
 ADD PRIMARY KEY (`matt`);

--
-- Indexes for table `ttdatphong`
--
ALTER TABLE `ttdatphong`
 ADD PRIMARY KEY (`mattdp`), ADD KEY `mak` (`mak`), ADD KEY `map` (`map`), ADD KEY `matt` (`matt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh`
--
ALTER TABLE `anh`
MODIFY `maanh` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
MODIFY `madv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `huydp`
--
ALTER TABLE `huydp`
MODIFY `mahuydp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khach`
--
ALTER TABLE `khach`
MODIFY `mak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
MODIFY `malp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
MODIFY `map` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tiennghi`
--
ALTER TABLE `tiennghi`
MODIFY `matn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ttdatphong`
--
ALTER TABLE `ttdatphong`
MODIFY `mattdp` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh`
--
ALTER TABLE `anh`
ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`map`) REFERENCES `phong` (`map`);

--
-- Constraints for table `ctdv`
--
ALTER TABLE `ctdv`
ADD CONSTRAINT `ctdv_ibfk_1` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`),
ADD CONSTRAINT `ctdv_ibfk_2` FOREIGN KEY (`mattdp`) REFERENCES `ttdatphong` (`mattdp`);

--
-- Constraints for table `cttn`
--
ALTER TABLE `cttn`
ADD CONSTRAINT `cttn_ibfk_1` FOREIGN KEY (`matn`) REFERENCES `tiennghi` (`matn`),
ADD CONSTRAINT `cttn_ibfk_2` FOREIGN KEY (`malp`) REFERENCES `loaiphong` (`malp`);

--
-- Constraints for table `huydp`
--
ALTER TABLE `huydp`
ADD CONSTRAINT `huydp_ibfk_1` FOREIGN KEY (`mattdp`) REFERENCES `ttdatphong` (`mattdp`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`malp`) REFERENCES `loaiphong` (`malp`);

--
-- Constraints for table `ttdatphong`
--
ALTER TABLE `ttdatphong`
ADD CONSTRAINT `ttdatphong_ibfk_1` FOREIGN KEY (`mak`) REFERENCES `khach` (`mak`),
ADD CONSTRAINT `ttdatphong_ibfk_2` FOREIGN KEY (`map`) REFERENCES `phong` (`map`),
ADD CONSTRAINT `ttdatphong_ibfk_3` FOREIGN KEY (`matt`) REFERENCES `trangthai` (`matt`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
