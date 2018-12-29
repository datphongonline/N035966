-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 06:04 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `anh`
--

INSERT INTO `anh` (`maanh`, `map`, `hinhanh`) VALUES
(1, 1, 'anh101.jpg'),
(2, 2, 'anh102.jpg'),
(5, 5, 'anh301.jpg'),
(6, 6, 'anh302.jpg'),
(7, 3, 'anh201.jpg'),
(8, 4, 'anh202.jpg');

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
  `map` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cttn`
--

INSERT INTO `cttn` (`matn`, `map`) VALUES
(1, 1),
(2, 1),
(3, 1),
(5, 1),
(7, 1),
(1, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(1, 3),
(2, 3),
(4, 3),
(5, 3),
(8, 3),
(1, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(1, 5),
(2, 5),
(4, 5),
(7, 5),
(8, 5),
(1, 6),
(3, 6),
(4, 6),
(5, 6),
(7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE IF NOT EXISTS `dichvu` (
`madv` int(11) NOT NULL,
  `tendv` text NOT NULL,
  `giadv` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `giadv`) VALUES
(3, 'dịch vụ giữ trẻ', 200),
(4, 'dịch vụ giặt ủi', 100),
(5, 'dịch vụ đưa đón', 200);

-- --------------------------------------------------------

--
-- Table structure for table `huydp`
--

CREATE TABLE IF NOT EXISTS `huydp` (
`mahuydp` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `map` int(11) NOT NULL,
  `chuthich` text NOT NULL,
  `ngayhuy` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `khach`
--

CREATE TABLE IF NOT EXISTS `khach` (
`mak` int(11) NOT NULL,
  `hotenk` varchar(35) NOT NULL,
  `sdt` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `khach`
--

INSERT INTO `khach` (`mak`, `hotenk`, `sdt`) VALUES
(1, 'nguyễn', '09171'),
(2, 'văn', '09272'),
(3, 'nguyen van', '08776'),
(4, 'van nguyen', '09521'),
(5, 'tu', '096213'),
(6, 'tu', '096442');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE IF NOT EXISTS `loaiphong` (
`malp` int(11) NOT NULL,
  `tenlp` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`malp`, `tenlp`) VALUES
(1, 'phòng tiêu chuẩn'),
(2, 'phòng cho gia đình hoặc khách nhóm'),
(3, 'phòng cao cấp');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE IF NOT EXISTS `phong` (
  `tenp` varchar(30) NOT NULL,
`map` int(11) NOT NULL,
  `malp` int(11) NOT NULL,
  `giap` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `sogiuong` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`tenp`, `map`, `malp`, `giap`, `trangthai`, `sogiuong`) VALUES
('p101', 1, 1, 100, 1, 1),
('p102', 2, 1, 150, 1, 1),
('p201', 3, 2, 500, 1, 2),
('p202', 4, 2, 700, 1, 3),
('p301', 5, 3, 800, 1, 1),
('p302', 6, 3, 1000, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
`matk` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `tendangnhap`, `matkhau`) VALUES
(1, 'nguyen', '12345'),
(2, 'van', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tiennghi`
--

CREATE TABLE IF NOT EXISTS `tiennghi` (
`matn` int(11) NOT NULL,
  `tentn` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tiennghi`
--

INSERT INTO `tiennghi` (`matn`, `tentn`) VALUES
(1, 'tivi'),
(2, 'máy lạnh'),
(3, 'bàn làm việc'),
(4, 'nước đóng chai miễn phí'),
(5, 'máy pha cà phê'),
(6, 'quầy bar mini'),
(7, 'dép đi trong phòng'),
(8, 'rèm cửa/màn che');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE IF NOT EXISTS `trangthai` (
`matt` int(11) NOT NULL,
  `tentt` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`matt`, `tentt`) VALUES
(1, 'mới tạo'),
(2, 'đã xác nhận'),
(3, 'đã nhận phòng'),
(4, 'đã trả phòng');

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
  `tongtien` int(11) DEFAULT NULL,
  `songaydat` int(11) DEFAULT NULL,
  `chuthich` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ttdatphong`
--

INSERT INTO `ttdatphong` (`mattdp`, `matt`, `mak`, `map`, `datphongtu`, `denngay`, `tongtien`, `songaydat`, `chuthich`) VALUES
(1, 1, 1, 1, '2018-12-28', '2018-12-29', NULL, 2, NULL),
(2, 1, 2, 2, '2018-12-27', '2018-12-29', NULL, 3, NULL),
(3, 1, 3, 3, '2018-12-24', '2018-12-26', NULL, 3, NULL);

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
 ADD PRIMARY KEY (`matn`,`map`), ADD KEY `map` (`map`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
 ADD PRIMARY KEY (`madv`);

--
-- Indexes for table `huydp`
--
ALTER TABLE `huydp`
 ADD PRIMARY KEY (`mahuydp`), ADD KEY `mak` (`mak`), ADD KEY `map` (`map`);

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
MODIFY `maanh` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
MODIFY `madv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `huydp`
--
ALTER TABLE `huydp`
MODIFY `mahuydp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khach`
--
ALTER TABLE `khach`
MODIFY `mak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
MODIFY `malp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
MODIFY `map` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tiennghi`
--
ALTER TABLE `tiennghi`
MODIFY `matn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ttdatphong`
--
ALTER TABLE `ttdatphong`
MODIFY `mattdp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
ADD CONSTRAINT `cttn_ibfk_2` FOREIGN KEY (`map`) REFERENCES `phong` (`map`);

--
-- Constraints for table `huydp`
--
ALTER TABLE `huydp`
ADD CONSTRAINT `huydp_ibfk_1` FOREIGN KEY (`mak`) REFERENCES `khach` (`mak`),
ADD CONSTRAINT `huydp_ibfk_2` FOREIGN KEY (`map`) REFERENCES `phong` (`map`);

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
