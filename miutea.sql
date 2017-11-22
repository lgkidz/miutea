-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2017 lúc 06:31 AM
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `miutea`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ma_ad` int(11) NOT NULL,
  `ten_dn_ad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_ad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ma_ad`, `ten_dn_ad`, `mat_khau`, `ten_ad`) VALUES
(-1, 'admin', '000000', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_ts` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ghi_chu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `ma_feedback` int(11) NOT NULL,
  `ten_nguoi_lh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_nguoi_lh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`ma_feedback`, `ten_nguoi_lh`, `email_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES
(1, 'Chi', 'chi@gmail.com', 'cái này thú vị đấy', '2017-11-18 17:35:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitrasua`
--

CREATE TABLE `loaitrasua` (
  `ma_loai_ts` int(11) NOT NULL,
  `ten_loai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitrasua`
--

INSERT INTO `loaitrasua` (`ma_loai_ts`, `ten_loai`) VALUES
(2, 'trà sữa'),
(3, 'đá bào'),
(4, 'kem cheese');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monthem`
--

CREATE TABLE `monthem` (
  `ma_mt` int(11) NOT NULL,
  `ten_mt` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_mt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monthem`
--

INSERT INTO `monthem` (`ma_mt`, `ten_mt`, `gia_mt`) VALUES
(1, 'Thạch QQ sữa tươi', 3000),
(2, 'Thạch QQ cà phê', 3000),
(3, 'QQ sương sáo', 3000),
(4, 'QQ sôcôla', 3000),
(5, 'QQ Dâu', 3000),
(6, 'QQ Flan', 3000),
(7, 'Trân châu', 5000),
(8, 'Thủy Tinh Yogurt', 5000),
(9, 'Thủy Tinh Kiwi', 5000),
(10, 'Hạt nguyên vị', 5000),
(11, 'Hạt Đường Phèn', 5000),
(12, 'Hạt trà xanh', 5000),
(13, 'Hạt cà phê', 5000),
(14, 'Nha Đam', 5000),
(15, 'Hạt trái cây', 5000),
(16, 'Sủi bọt', 12000),
(17, 'Thủy Tinh Dâu', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nv` int(11) NOT NULL,
  `ten_nv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `ten_nv`, `sdt`, `email`, `dia_chi`) VALUES
(-1, 'nhân viên mặc định', '1', '@', '@');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ma_tv` int(11) NOT NULL,
  `ten_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `ten_dn_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`ma_tv`, `ten_tv`, `sdt`, `diachi`, `email`, `gioi_tinh`, `ten_dn_tv`, `mat_khau_tv`, `ban`) VALUES
(14, 'Mạnh', '0974232266', 'Hà Nội', 'lgkidz@gmail.com', 0, '', '000000', 0),
(15, 'Chi', '', '', 'chi@gmail.com', 0, '', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ma_tin` int(11) NOT NULL,
  `tieu_de` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gio_dang` datetime NOT NULL,
  `hinh_anh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ma_tin`, `tieu_de`, `noi_dung`, `gio_dang`, `hinh_anh`) VALUES
(1, 'Miutea thành lập!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-03 00:00:00', '../../news_images/cupoftea.png'),
(7, 'Bạn đã thử trà sữa của chúng mình chưa?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-02 11:16:51', '../../news_images/MiuTea.png'),
(10, 'Kem tuyết cho những ngày hè nóng nực?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-09 23:31:19', '../../news_images/MiuTea.png'),
(11, 'Khai trương chuỗi cửa hàng Miutea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut nibh velit. Donec id orci eu lorem sagittis venenatis. Pellentesque vitae lorem porta odio sodales vulputate eu sit amet nisi. Ut id elit eu libero tempus ullamcorper. Donec eget auctor nulla. Donec mi nisi, tempus sit amet arcu eu, malesuada imperdiet nisi. Vivamus suscipit eget augue quis pellentesque. Sed lobortis nisi vel magna tempus, id rutrum neque dapibus. Vivamus tincidunt convallis aliquam. Mauris malesuada eget tortor non rutrum. Maecenas nisl magna, sollicitudin vel porttitor vitae, tincidunt eget ante.', '2017-10-18 23:59:12', '../../news_images/MiuTea.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trasua`
--

CREATE TABLE `trasua` (
  `ma_ts` int(11) NOT NULL,
  `ma_loai_ts` int(11) NOT NULL,
  `ten_ts` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_ts` int(11) NOT NULL,
  `hinh_anh_ts` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `1sao` int(11) NOT NULL,
  `2sao` int(11) NOT NULL,
  `3ao` int(11) NOT NULL,
  `4sao` int(11) NOT NULL,
  `5sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trasua`
--

INSERT INTO `trasua` (`ma_ts`, `ma_loai_ts`, `ten_ts`, `gia_ts`, `hinh_anh_ts`, `mo_ta`, `1sao`, `2sao`, `3ao`, `4sao`, `5sao`) VALUES
(9, 2, 'Trà sữa 3Q', 31000, '01-dau-600x600.jpg', '', 0, 0, 0, 0, 0),
(10, 2, 'Trà sữa Trân Châu', 26000, '01-tra-bi-dao-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(11, 2, 'Trà Sữa Matcha Nhật Bản', 38000, '02-tra-xanh-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(12, 2, 'Trà Sữa Darjeeling', 26000, '02-vai-300x300.jpg', '', 0, 0, 0, 0, 0),
(13, 2, 'Trà Sữa Sen', 29000, '03-chanh-day-300x300.jpg', '', 0, 0, 0, 0, 0),
(14, 2, 'Trà Sữa Dâu Tây', 26000, '03-hong-tra-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(15, 2, 'Trà Sữa 4 Mùa Xuân', 32000, '04-socola-300x300.jpg', '', 0, 0, 0, 0, 0),
(17, 2, 'Toffee Nuts Sủi Bọt', 38000, '05-dao-300x300.jpg', '', 0, 0, 0, 0, 0),
(18, 2, 'Trà Sữa Vani', 29000, '05-darjeeling-300x300.jpg', '', 0, 0, 0, 0, 0),
(19, 2, 'Trà Sữa Hạnh Nhân', 29000, '05-la-cay-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(20, 2, 'Trà Sữa Mật Ong', 29000, '06-alisan-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(21, 2, 'Trà Sữa Alisan', 29000, '06-caramen-300x300.jpg', '', 0, 0, 0, 0, 0),
(22, 2, 'Trà Sữa Quan Âm', 29000, '06-dau-tay-300x300.jpg', '', 0, 0, 0, 0, 0),
(23, 2, 'Trà Sữa Ceylon', 23000, '07-gao-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(24, 2, 'Trà Sữa Hoa Lục Trà', 29000, '07-tra-xanh-300x300.jpg', '', 0, 0, 0, 0, 0),
(25, 2, 'Trà Sữa Vải', 23000, '08-o-long-300x300.jpg', '', 0, 0, 0, 0, 0),
(26, 2, 'Trà Sữa Gạo Nâu', 29000, '08-quan-am-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(27, 2, 'Trà Sũa Trà Xanh', 26000, '08-xoai-300x300.jpg', '', 0, 0, 0, 0, 0),
(28, 3, 'Kem Tuyết Matcha', 41000, '09-o-long-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(29, 3, 'Kem Tuyết Xoài', 28000, '09-tachi-300x300.jpg', '', 0, 0, 0, 0, 0),
(30, 3, 'Kem Tuyết Dâu', 28000, '10-4-mua-xuan-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(31, 3, 'Kem Tuyết Vải', 28000, '10-socola-300x300.jpg', '', 0, 0, 0, 0, 0),
(32, 3, 'Kem Tuyết Chanh Dây', 28000, '11-khoai-mon-300x300.jpg', '', 0, 0, 0, 0, 0),
(33, 3, 'Kem Tuyết Sôcôla', 35000, '12-caramen-300x300.jpg', '', 0, 0, 0, 0, 0),
(34, 3, 'Kem Tuyết Đào', 35000, '13-vani-300x300.jpg', '', 0, 0, 0, 0, 0),
(35, 3, 'Kem Tuyết Caramen', 38000, '14-almond-300x300.jpg', '', 0, 0, 0, 0, 0),
(36, 4, 'Trà Tươi Sủi Bọt', 35000, '15-honey-300x300.jpg', '', 0, 0, 0, 0, 0),
(37, 4, 'Sủi Bọt Lá Cây', 38000, '22-4-mua-xuan-S-300x300.jpg', '', 0, 0, 0, 0, 0),
(38, 4, 'Trà Alisan Sủi Bọt', 38000, '23-sen-300x300.jpg', '', 0, 0, 0, 0, 0),
(39, 4, 'Trà Gạo Nâu Sủi Bọt', 38000, '24-tra-sua-toffee-nut-300x300.jpg', '', 0, 0, 0, 0, 0),
(40, 4, 'Trà Quan Âm Sủi Bọt', 38000, '25-TS-kiwi-300x300.jpg', '', 0, 0, 0, 0, 0),
(41, 4, 'Trà Ô Long Sủi Bọt', 38000, 'Matcheese-300x300.jpg', '', 0, 0, 0, 0, 0),
(42, 4, 'Trà 4 Mùa Xuân Sủi Bọt', 38000, 'Mattchalatte-300x300.jpg', '', 0, 0, 0, 0, 0),
(43, 4, 'Matcheese', 49000, '01-dau-600x600.jpg', '', 0, 0, 0, 0, 0),
(44, 4, 'Trà Bí Đao Sủi Bọt', 33000, '01-tra-bi-dao-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(45, 4, 'Trà Xanh Sủi Bọt', 35000, '02-tra-xanh-sb-300x300.jpg', '', 0, 0, 0, 0, 0),
(46, 4, 'Hồng Trà Sủi Bọt', 35000, '02-vai-300x300.jpg', '', 0, 0, 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma_ad`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `ma_dh` (`ma_dh`),
  ADD KEY `ma_ts` (`ma_ts`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_nv` (`ma_nv`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ma_feedback`);

--
-- Chỉ mục cho bảng `loaitrasua`
--
ALTER TABLE `loaitrasua`
  ADD PRIMARY KEY (`ma_loai_ts`);

--
-- Chỉ mục cho bảng `monthem`
--
ALTER TABLE `monthem`
  ADD PRIMARY KEY (`ma_mt`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nv`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ma_tv`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ma_tin`);

--
-- Chỉ mục cho bảng `trasua`
--
ALTER TABLE `trasua`
  ADD PRIMARY KEY (`ma_ts`),
  ADD KEY `ma_loai_ts` (`ma_loai_ts`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ma_ad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ma_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `loaitrasua`
--
ALTER TABLE `loaitrasua`
  MODIFY `ma_loai_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `monthem`
--
ALTER TABLE `monthem`
  MODIFY `ma_mt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma_nv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `ma_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ma_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `trasua`
--
ALTER TABLE `trasua`
  MODIFY `ma_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `donhang` (`ma_dh`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`ma_nv`) REFERENCES `donhang` (`ma_nv`);

--
-- Các ràng buộc cho bảng `trasua`
--
ALTER TABLE `trasua`
  ADD CONSTRAINT `trasua_ibfk_1` FOREIGN KEY (`ma_loai_ts`) REFERENCES `loaitrasua` (`ma_loai_ts`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
