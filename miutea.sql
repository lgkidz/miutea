-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2017 at 06:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3650129_miutea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ma_ad` int(11) NOT NULL,
  `ten_dn_ad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_ad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ma_ad`, `ten_dn_ad`, `mat_khau`, `ten_ad`) VALUES
(-1, 'admin', '000000', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_ts` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma_dh`, `ma_ts`, `so_luong`, `don_gia`, `tong_gia`) VALUES
(1, 35, 4, 38000, 152000),
(2, 21, 1, 29000, 29000);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_dh` int(11) NOT NULL,
  `ten_kh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dh` datetime NOT NULL,
  `noi_giao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ma_nv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ma_dh`, `ten_kh`, `email`, `ngay_dh`, `noi_giao`, `sdt`, `trang_thai`, `ma_nv`) VALUES
(1, 'Mạnh', 'mmm@gmail.com', '2017-11-18 23:19:08', 'Hàn', '9000', 0, -1),
(2, 'Chi', 'chi@gmail.com', '2017-11-18 17:35:33', 'HN', '123', 0, -1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ma_feedback` int(11) NOT NULL,
  `ten_nguoi_lh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_nguoi_lh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ma_feedback`, `ten_nguoi_lh`, `email_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES
(1, 'Chi', 'chi@gmail.com', 'cái này thú vị đấy', '2017-11-18 17:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `loaitrasua`
--

CREATE TABLE `loaitrasua` (
  `ma_loai_ts` int(11) NOT NULL,
  `ten_loai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitrasua`
--

INSERT INTO `loaitrasua` (`ma_loai_ts`, `ten_loai`) VALUES
(2, 'trà sữa'),
(3, 'đá bào'),
(4, 'kem cheese');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nv` int(11) NOT NULL,
  `ten_nv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `ten_nv`, `sdt`, `email`, `dia_chi`) VALUES
(-1, 'nhân viên mặc định', '1', '@', '@');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ma_tv` int(11) NOT NULL,
  `ten_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `ten_dn_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`ma_tv`, `ten_tv`, `sdt`, `diachi`, `email`, `gioi_tinh`, `ten_dn_tv`, `mat_khau_tv`) VALUES
(14, 'Mạnh', '0974232266', 'Hà Nội', 'lgkidz@gmail.com', 0, '', '000000'),
(15, 'Chi', '', '', 'chi@gmail.com', 0, '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `ma_tin` int(11) NOT NULL,
  `tieu_de` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gio_dang` datetime NOT NULL,
  `hinh_anh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ma_tin`, `tieu_de`, `noi_dung`, `gio_dang`, `hinh_anh`) VALUES
(1, 'Miutea thành lập!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-03 00:00:00', '../../news_images/cupoftea.png'),
(7, 'Bạn đã thử trà sữa của chúng mình chưa?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-02 11:16:51', '../../news_images/MiuTea.png'),
(10, 'Kem tuyết cho những ngày hè nóng nực?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-09 23:31:19', '../../news_images/MiuTea.png'),
(11, 'Khai trương chuỗi cửa hàng Miutea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-18 23:59:12', '../../news_images/MiuTea.png');

-- --------------------------------------------------------

--
-- Table structure for table `trasua`
--

CREATE TABLE `trasua` (
  `ma_ts` int(11) NOT NULL,
  `ma_loai_ts` int(11) NOT NULL,
  `ten_ts` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_ts` int(11) NOT NULL,
  `hinh_anh_ts` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trasua`
--

INSERT INTO `trasua` (`ma_ts`, `ma_loai_ts`, `ten_ts`, `gia_ts`, `hinh_anh_ts`, `mo_ta`) VALUES
(9, 2, 'Trà sữa 3Q', 31000, '01-dau-600x600.jpg', ''),
(10, 2, 'Trà sữa Trân Châu', 26000, '01-tra-bi-dao-sb-300x300.jpg', ''),
(11, 2, 'Trà Sữa Matcha Nhật Bản', 38000, '02-tra-xanh-sb-300x300.jpg', ''),
(12, 2, 'Trà Sữa Darjeeling', 26000, '02-vai-300x300.jpg', ''),
(13, 2, 'Trà Sữa Sen', 29000, '03-chanh-day-300x300.jpg', ''),
(14, 2, 'Trà Sữa Dâu Tây', 26000, '03-hong-tra-sb-300x300.jpg', ''),
(15, 2, 'Trà Sữa 4 Mùa Xuân', 32000, '04-socola-300x300.jpg', ''),
(16, 2, 'Trà Sữa Ô Long', 26000, '04-tra-tuoi-sb-300x300.jpg', ''),
(17, 2, 'Toffee Nuts Sủi Bọt', 38000, '05-dao-300x300.jpg', ''),
(18, 2, 'Trà Sữa Vani', 29000, '05-darjeeling-300x300.jpg', ''),
(19, 2, 'Trà Sữa Hạnh Nhân', 29000, '05-la-cay-sb-300x300.jpg', ''),
(20, 2, 'Trà Sữa Mật Ong', 29000, '06-alisan-sb-300x300.jpg', ''),
(21, 2, 'Trà Sữa Alisan', 29000, '06-caramen-300x300.jpg', ''),
(22, 2, 'Trà Sữa Quan Âm', 29000, '06-dau-tay-300x300.jpg', ''),
(23, 2, 'Trà Sữa Ceylon', 23000, '07-gao-sb-300x300.jpg', ''),
(24, 2, 'Trà Sữa Hoa Lục Trà', 29000, '07-tra-xanh-300x300.jpg', ''),
(25, 2, 'Trà Sữa Vải', 23000, '08-o-long-300x300.jpg', ''),
(26, 2, 'Trà Sữa Gạo Nâu', 29000, '08-quan-am-sb-300x300.jpg', ''),
(27, 2, 'Trà Sũa Trà Xanh', 26000, '08-xoai-300x300.jpg', ''),
(28, 3, 'Kem Tuyết Matcha', 41000, '09-o-long-sb-300x300.jpg', ''),
(29, 3, 'Kem Tuyết Xoài', 28000, '09-tachi-300x300.jpg', ''),
(30, 3, 'Kem Tuyết Dâu', 28000, '10-4-mua-xuan-sb-300x300.jpg', ''),
(31, 3, 'Kem Tuyết Vải', 28000, '10-socola-300x300.jpg', ''),
(32, 3, 'Kem Tuyết Chanh Dây', 28000, '11-khoai-mon-300x300.jpg', ''),
(33, 3, 'Kem Tuyết Sôcôla', 35000, '12-caramen-300x300.jpg', ''),
(34, 3, 'Kem Tuyết Đào', 35000, '13-vani-300x300.jpg', ''),
(35, 3, 'Kem Tuyết Caramen', 38000, '14-almond-300x300.jpg', ''),
(36, 4, 'Trà Tươi Sủi Bọt', 35000, '15-honey-300x300.jpg', ''),
(37, 4, 'Sủi Bọt Lá Cây', 38000, '22-4-mua-xuan-S-300x300.jpg', ''),
(38, 4, 'Trà Alisan Sủi Bọt', 38000, '23-sen-300x300.jpg', ''),
(39, 4, 'Trà Gạo Nâu Sủi Bọt', 38000, '24-tra-sua-toffee-nut-300x300.jpg', ''),
(40, 4, 'Trà Quan Âm Sủi Bọt', 38000, '25-TS-kiwi-300x300.jpg', ''),
(41, 4, 'Trà Ô Long Sủi Bọt', 38000, 'Matcheese-300x300.jpg', ''),
(42, 4, 'Trà 4 Mùa Xuân Sủi Bọt', 38000, 'Mattchalatte-300x300.jpg', ''),
(43, 4, 'Matcheese', 49000, '01-dau-600x600.jpg', ''),
(44, 4, 'Trà Bí Đao Sủi Bọt', 33000, '01-tra-bi-dao-sb-300x300.jpg', ''),
(45, 4, 'Trà Xanh Sủi Bọt', 35000, '02-tra-xanh-sb-300x300.jpg', ''),
(46, 4, 'Hồng Trà Sủi Bọt', 35000, '02-vai-300x300.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma_ad`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `ma_dh` (`ma_dh`),
  ADD KEY `ma_ts` (`ma_ts`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_nv` (`ma_nv`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ma_feedback`);

--
-- Indexes for table `loaitrasua`
--
ALTER TABLE `loaitrasua`
  ADD PRIMARY KEY (`ma_loai_ts`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nv`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ma_tv`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ma_tin`);

--
-- Indexes for table `trasua`
--
ALTER TABLE `trasua`
  ADD PRIMARY KEY (`ma_ts`),
  ADD KEY `ma_loai_ts` (`ma_loai_ts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ma_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ma_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loaitrasua`
--
ALTER TABLE `loaitrasua`
  MODIFY `ma_loai_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma_nv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `ma_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ma_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `trasua`
--
ALTER TABLE `trasua`
  MODIFY `ma_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `donhang` (`ma_dh`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`ma_nv`) REFERENCES `donhang` (`ma_nv`);

--
-- Constraints for table `trasua`
--
ALTER TABLE `trasua`
  ADD CONSTRAINT `trasua_ibfk_1` FOREIGN KEY (`ma_loai_ts`) REFERENCES `loaitrasua` (`ma_loai_ts`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
