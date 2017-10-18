-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2017 lúc 05:00 PM
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
(-1, 'admin', '000000', 'admin_clone'),
(4, 'e', 'xxxxxx', 'clone'),
(5, 'lgkidz', '111111', 'máº¡nh'),
(6, 'test', '111111', 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_ts` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma_dh`, `ma_ts`, `so_luong`, `don_gia`, `tong_gia`) VALUES
(1, 7, 2, 35000, 70000),
(1, 8, 3, 40000, 120000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `ma_ts` int(11) NOT NULL,
  `so_sao` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_gia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgiasp`
--

INSERT INTO `danhgiasp` (`ma_ts`, `so_sao`, `danh_gia`) VALUES
(7, '4.5', 'good'),
(8, '5', 'best');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_dh` int(11) NOT NULL,
  `ten_kh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dh` datetime NOT NULL,
  `noi_giao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ma_nv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ma_dh`, `ten_kh`, `ngay_dh`, `noi_giao`, `sdt`, `trang_thai`, `ma_nv`) VALUES
(1, 'nguyễn thị A', '2017-10-17 02:07:15', 'cầu giấy', '001002', 1, -1);

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
(20, 'ư', 'ư', 'ư ư', '0000-00-00 00:00:00'),
(21, 'ư', 'ư', 'ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ư ', '0000-00-00 00:00:00'),
(22, 'a', 'a', 'assssssssssssssssssssssssssssz', '0000-00-00 00:00:00'),
(23, 'a', 's', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(24, 's', 'z', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(25, 's', 's', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(26, 'z', 'c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(27, 'c', 'v', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(28, 'z', 'v', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(29, 'z', 'x', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(30, 'x', 'c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(31, 'z', 'c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(32, 'z', 'c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(33, 'z', 'c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00'),
(34, 'z', 'v', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '0000-00-00 00:00:00');

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
(-1, 'Loại này để test'),
(1, 'loại này cũng để test'),
(2, 'trà sữa'),
(3, 'đá bào'),
(4, 'kem cheese');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nv` int(11) NOT NULL,
  `ten_nv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `ten_nv`, `sdt`, `email`, `dia_chi`, `ten_dang_nhap`, `mat_khau`) VALUES
(-1, 'nhân viên Mạnh', '1', '@', '@', 'nv-1', '000000');

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
  `mat_khau_tv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`ma_tv`, `ten_tv`, `sdt`, `diachi`, `email`, `gioi_tinh`, `ten_dn_tv`, `mat_khau_tv`) VALUES
(1, 'thằng này ko cần tên', '001', '@', '@', 1, 'tv1', '000000'),
(2, 'thành viên', '000001', 'aa', 'aaaas@a', 0, 'tv2', '000000'),
(3, 'abc', '1122553', 'á', 'fasf', 0, 'áadga', '000000'),
(4, 'akshbfahkg', '22', 'dzg ha n', 'okay', 1, 'umok', '222222'),
(5, 'newone', '2222', 'asdhn', 'manh', 0, 'GG', '000000'),
(6, 'josh', '3333333', 'xx', 'xx', 1, 'josh', '000000'),
(7, 'tên', '7777', 'hà nội', 'lgkidz@gmail.com', 1, 'manh', 'manh123'),
(8, 'tên nữa', '8888', 'HCM', 'xxx@gmail.com', 0, 'kakaa', '000000'),
(9, 'tên tiếp thep', '5555555', 'laos', 'lol@gmai.com', 1, 'lololol', '0000000'),
(10, 'tên thử', '641068', 'tôi là ai? đây là đâu?', 'email@email.com', 0, 'emailemail', '000000'),
(11, 'tên cuối', '33252544', 'sao hỏa', 'mars@nasa.gov', 1, 'alien', '111111');

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
(1, 'this is a cup of tea!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-10-03 00:00:00', '../../news_images/cupoftea.png'),
(7, 'edited', 'edited', '2017-10-02 11:16:51', '../../news_images/MiuTea.png'),
(10, 'thử xem thế nào', '<p><b>đây là dòng in đậm</b><br></p>', '2017-10-09 23:31:19', '../../news_images/MiuTea.png');

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
  `mo_ta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trasua`
--

INSERT INTO `trasua` (`ma_ts`, `ma_loai_ts`, `ten_ts`, `gia_ts`, `hinh_anh_ts`, `mo_ta`) VALUES
(9, 2, 'Trà sữa 3Q', 31000, 'cupoftea.png', ''),
(10, 2, 'Trà sữa Trân Châu', 26000, 'cupoftea.png', ''),
(11, 2, 'Trà Sữa Trà Xanh Nhật Bản', 38000, 'cupoftea.png', ''),
(12, 2, 'Trà Sữa Darjeeling', 26000, 'cupoftea.png', ''),
(13, 2, 'Trà Sữa Sen', 29000, 'cupoftea.png', ''),
(14, 2, 'Trà Sữa Dâu Tây', 26000, 'cupoftea.png', ''),
(15, 2, 'Trà Sữa 4 Mùa Xuân', 32000, 'cupoftea.png', ''),
(16, 2, 'Trà Sữa Ô Long', 26000, 'cupoftea.png', ''),
(17, 2, 'Trà Sữa Toffee Nuts Sủi Bọt', 38000, 'cupoftea.png', ''),
(18, 2, 'Trà Sữa Vani', 29000, 'cupoftea.png', ''),
(19, 2, 'Trà Sữa Hạnh Nhân', 29000, 'cupoftea.png', ''),
(20, 2, 'Trà Sữa Mật Ong', 29000, 'cupoftea.png', ''),
(21, 2, 'Trà Sữa Alisan', 29000, 'cupoftea.png', ''),
(22, 2, 'Trà Sữa Quan Âm', 29000, 'cupoftea.png', ''),
(23, 2, 'Trà Sữa Ceylon', 23000, 'cupoftea.png', ''),
(24, 2, 'Trà Sữa Hoa Lục Trà', 29000, 'cupoftea.png', ''),
(25, 2, 'Trà Sữa Vải', 23000, 'cupoftea.png', ''),
(26, 2, 'Trà Sữa Gạo Nâu', 29000, 'cupoftea.png', ''),
(27, 2, 'Trà Sũa Trà Xanh', 26000, 'cupoftea.png', ''),
(28, 3, 'Kem Tuyết Trà Xanh Nhật Bản', 41000, 'cupoftea.png', ''),
(29, 3, 'Kem Tuyết Xoài', 28000, 'cupoftea.png', ''),
(30, 3, 'Kem Tuyết Dâu', 28000, 'cupoftea.png', ''),
(31, 3, 'Kem Tuyết Vải', 28000, 'cupoftea.png', ''),
(32, 3, 'Kem Tuyết Chanh Dây', 28000, 'cupoftea.png', ''),
(33, 3, 'Kem Tuyết Sôcôla', 35000, 'cupoftea.png', ''),
(34, 3, 'Kem Tuyết Đào', 35000, 'cupoftea.png', ''),
(35, 3, 'Kem Tuyết Caramen', 38000, 'cupoftea.png', ''),
(36, 4, 'Trà Tươi Sủi Bọt', 35000, 'cupoftea.png', ''),
(37, 4, 'Sủi Bọt Lá Cây', 38000, 'cupoftea.png', ''),
(38, 4, 'Trà Alisan Sủi Bọt', 38000, 'cupoftea.png', ''),
(39, 4, 'Trà Gạo Nâu Sủi Bọt', 38000, 'cupoftea.png', ''),
(40, 4, 'Trà Quan Âm Sủi Bọt', 38000, 'cupoftea.png', ''),
(41, 4, 'Trà Ô Long Sủi Bọt', 38000, 'cupoftea.png', ''),
(42, 4, 'Trà 4 Mùa Xuân Sủi Bọt', 38000, 'cupoftea.png', ''),
(43, 4, 'Matcheese', 49000, 'cupoftea.png', ''),
(44, 4, 'Trà Bí Đao Sủi Bọt', 33000, 'cupoftea.png', ''),
(45, 4, 'Trà Xanh Sủi Bọt', 35000, 'cupoftea.png', ''),
(46, 4, 'Hồng Trà Sủi Bọt', 35000, 'cupoftea.png', '');

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
-- Chỉ mục cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD PRIMARY KEY (`ma_ts`);

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
  MODIFY `ma_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  MODIFY `ma_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ma_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `loaitrasua`
--
ALTER TABLE `loaitrasua`
  MODIFY `ma_loai_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma_nv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `ma_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ma_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
