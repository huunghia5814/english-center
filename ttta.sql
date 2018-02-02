-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2017 lúc 08:25 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ttta`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cahoc`
--

CREATE TABLE `cahoc` (
  `MaCaHoc` int(10) NOT NULL,
  `TenCaHoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GioBD` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'gio bat dau',
  `GioKT` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'gio ket thuc'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `day`
--

CREATE TABLE `day` (
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenGV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `Phai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Luong` int(10) NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `QueQuan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `MaLop`, `NgaySinh`, `Phai`, `Luong`, `DiaChi`, `DienThoai`, `QueQuan`, `Password`) VALUES
('gv1', 'le na', 2, '2002-07-17', 'ná»¯', 1000, 'quan 9', '0935248156', 'hÃ  ná»™i', 'passgv1'),
('gv2', 'nguyen huong', 2, '2017-08-03', 'ná»¯', 1000, 'Dist 9', '0901989389', 'quang tri', 'passgv2'),
('gv3', 'tran huong', 1, '2017-08-09', 'nu', 2000, 'quan 2', '093524043', 'quang binh', 'passgv3'),
('gv4', 'doanh doanh', 3, '2017-08-02', 'nu', 2000, 'quan 9', '0935248156', 'long an', 'passgv4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc`
--

CREATE TABLE `hoc` (
  `MaHV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvien`
--

CREATE TABLE `hocvien` (
  `MaHV` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenHV` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `QueQuan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hocvien`
--

INSERT INTO `hocvien` (`MaHV`, `TenHV`, `MaLop`, `NgaySinh`, `DiaChi`, `DienThoai`, `QueQuan`, `password`) VALUES
('hv1', 'tran hung', 0, '2017-08-18', 'quan 12', '0935248182', 'long an', 'passhv1'),
('hv2', 'tran danh', 1, '2017-08-09', 'quan 9', '0901989659', 'hÃ  ná»™i', 'passhv2'),
('hv3', 'nguyen ron', 2, '2017-08-10', 'quan 9', '0935248156', 'hÃ  ná»™i', 'passhv3'),
('hv4', 'truong nghia', 3, '2017-08-01', 'quan 9', '0935248156', 'hÃ  ná»™i', 'passhv4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `MaHV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`MaHV`, `MaLop`, `Diem`) VALUES
('hv2', 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuhd_gv`
--

CREATE TABLE `lichsuhd_gv` (
  `MaHDGV` int(10) NOT NULL,
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayBD` date NOT NULL,
  `NgayKT` date NOT NULL,
  `MaLoaiHD` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lichsuhd_gv`
--

INSERT INTO `lichsuhd_gv` (`MaHDGV`, `MaGV`, `NgayBD`, `NgayKT`, `MaLoaiHD`) VALUES
(1, 'gv1', '2017-08-03', '2017-08-25', 'hd1'),
(2, 'gv2', '2017-07-31', '2017-09-03', 'hd5'),
(3, 'gv2', '2017-08-09', '2017-08-25', 'hd2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaPhong` int(10) NOT NULL,
  `Ngay` date NOT NULL,
  `GioBD` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GioKT` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihopdong`
--

CREATE TABLE `loaihopdong` (
  `MaLoaiDH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiHD` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungHD` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `loaihopdong`
--

INSERT INTO `loaihopdong` (`MaLoaiDH`, `TenLoaiHD`, `NoiDungHD`) VALUES
('hd1', 'hd3nam', '3 nam luong 1000'),
('hd2', 'hd2nam', '2 nam luong 1000'),
('hd5', 'hd5nam', '5 nam luong 1000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLop` int(10) NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaCaHoc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaPhong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayBD` date NOT NULL,
  `NgayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `MaLoaiLop`, `MaCaHoc`, `MaPhong`, `NgayBD`, `NgayKT`) VALUES
(1, 'toeic650', 'toeic', 'ch1', '2a08', '2017-08-01', '2017-08-18'),
(2, 'toeic900', 'toeic', 'sa1', '2a16', '2017-08-01', '2017-09-03'),
(3, 'toeic700', 'toeic', 'ch1', '2a24', '2017-08-09', '2017-08-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phucap`
--

CREATE TABLE `phucap` (
  `MaPhuCap` int(10) NOT NULL,
  `TenPhuCap` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoChiTieu` int(10) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cahoc`
--
ALTER TABLE `cahoc`
  ADD PRIMARY KEY (`MaCaHoc`);

--
-- Chỉ mục cho bảng `day`
--
ALTER TABLE `day`
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `hoc`
--
ALTER TABLE `hoc`
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaHV` (`MaHV`);

--
-- Chỉ mục cho bảng `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MaHV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD KEY `MaHV` (`MaHV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `lichsuhd_gv`
--
ALTER TABLE `lichsuhd_gv`
  ADD PRIMARY KEY (`MaHDGV`),
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaLoaiHD` (`MaLoaiHD`);

--
-- Chỉ mục cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaPhong` (`MaPhong`);

--
-- Chỉ mục cho bảng `loaihopdong`
--
ALTER TABLE `loaihopdong`
  ADD PRIMARY KEY (`MaLoaiDH`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaLoaiLop` (`MaLoaiLop`),
  ADD KEY `MaCaHoc` (`MaCaHoc`),
  ADD KEY `MaPhong` (`MaPhong`);

--
-- Chỉ mục cho bảng `phucap`
--
ALTER TABLE `phucap`
  ADD PRIMARY KEY (`MaPhuCap`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `day`
--
ALTER TABLE `day`
  ADD CONSTRAINT `day_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`) ON UPDATE CASCADE,
  ADD CONSTRAINT `day_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoc`
--
ALTER TABLE `hoc`
  ADD CONSTRAINT `hoc_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoc_ibfk_2` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichsuhd_gv`
--
ALTER TABLE `lichsuhd_gv`
  ADD CONSTRAINT `lichsuhd_gv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lichsuhd_gv_ibfk_2` FOREIGN KEY (`MaLoaiHD`) REFERENCES `loaihopdong` (`MaLoaiDH`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_2` FOREIGN KEY (`MaPhong`) REFERENCES `phonghoc` (`MaPhong`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
