-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 24, 2024 lúc 08:38 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `traveling`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctphong`
--

CREATE TABLE `ctphong` (
  `idphong` int(11) NOT NULL,
  `hinhphong` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tenphong` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giaphong` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `songuoi` int(20) NOT NULL,
  `giuong` int(20) NOT NULL,
  `idno` int(11) NOT NULL,
  `idct` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctphong`
--

INSERT INTO `ctphong` (`idphong`, `hinhphong`, `tenphong`, `giaphong`, `songuoi`, `giuong`, `idno`, `idct`) VALUES
(1, 'VTSunshine1.webp', 'Family', '520000', 5, 3, 1, 1),
(2, 'VTSunshine1.webp', 'Deluxe Family', '670000', 6, 4, 1, 1),
(3, 'VTSunshine1.webp', 'Superior Double', '460000', 8, 5, 1, 3),
(4, 'VTAnnata1.webp', 'Deluxe Twin with Partial Sea View', '457000', 2, 1, 2, 2),
(5, 'VTAnnata2.webp', 'Superior Partial Sea View Room', '340780', 2, 1, 2, 2),
(6, 'VTAnnata3.webp', 'Ocean View Suite', '857000', 3, 1, 2, 3),
(7, 'VTTheSong1.webp', 'Studio with Balcony', '340728', 2, 1, 3, 1),
(8, 'VTTheSong2.webp', '2-Bedroom Deluxe Apartment', '427383', 4, 2, 3, 1),
(9, 'VTTheSong3.webp', '1-Bedroom Residence with Kitchen and Balcony', '340728', 3, 1, 3, 1),
(10, 'QNFLC1.webp', 'Studio Apartment Sea View', '449234', 2, 1, 4, 2),
(11, 'QNFLC2.webp', '2-Bedroom Ocean View Apartment', '924456', 4, 2, 4, 1),
(12, 'QNFLC3.webp', '3-Bedroom Ocean View Apartment', '1452000', 6, 3, 4, 1),
(13, 'QNBlossom1.webp', 'Family Deluxe Room', '384200', 4, 2, 5, 3),
(14, 'QNBlossom2.webp', 'Deluxe Double Room', '289090', 4, 2, 5, 3),
(15, 'QNBlossom3.webp', 'King Room with View and Balcony', '362476', 4, 2, 5, 3),
(19, 'QNTMS1.webp', 'Sea View Studio', '467780', 2, 1, 6, 1),
(20, 'QNTMS2.webp', 'Family Room 205', '755000', 4, 2, 6, 1),
(21, 'QNTMS3.webp', 'Sea View Studio with Balcony', '992000', 4, 2, 6, 1),
(22, 'PYMandala1.webp', 'M Continental', '523220', 2, 1, 7, 2),
(23, 'PYMandala2.webp', 'Deluxe', '1404200', 2, 1, 7, 2),
(24, 'PYMandala3.webp', 'Executive Double 1 King Bed City View', '1444924', 2, 1, 7, 2),
(25, 'PYSala1.webp', 'Superior Twin City View', '1495201', 2, 1, 8, 3),
(26, 'PYSala2.webp', 'Deluxe Double Ocean View', '1682400', 2, 2, 8, 2),
(27, 'PYSala3.webp', 'Deluxe Twin Ocean View', '1682540', 4, 2, 8, 3),
(28, 'PYCoralina1.webp', 'Standard', '308642', 2, 1, 9, 1),
(29, 'PYCoralina2.webp', 'Superior', '396850', 2, 1, 9, 1),
(30, 'PYCoralina3.webp', 'Deluxe Twin', '485009', 4, 2, 9, 1),
(31, 'PQVinpearl1.webp', 'Deluxe King Garden View', '1972450', 2, 1, 10, 3),
(32, 'PQVinpearl2.webp', 'Deluxe King Ocean View', '2307455', 4, 2, 10, 3),
(33, 'PQVinpearl3.webp', 'Junior Suite King Bed Garden View', '3070054', 4, 2, 10, 3),
(34, 'PQWonderworld1.webp', 'Villa 2 Bedroom', '5678250', 6, 2, 11, 2),
(35, 'PQWonderworld2.webp', 'Villa 3 Bedroom', '7724541', 8, 3, 11, 2),
(36, 'PQWonderworld3.webp', 'Villa 3 Bedroom Ocean View', '8915440', 8, 3, 11, 2),
(37, 'PQWyndham1.webp', 'Superior King', '1821400', 2, 1, 12, 1),
(38, 'PQWyndham2.webp', 'Superior Twin', '1293450', 4, 2, 12, 1),
(39, 'PQWyndham3.webp', 'Deluxe King Garden View', '1922444', 2, 1, 12, 2),
(40, 'PTM1.webp', 'Deluxe Double', '814756', 2, 1, 13, 2),
(41, 'PTM2.webp', 'Premium Deluxe Twin', '931784', 4, 2, 13, 2),
(42, 'PTM3.webp', 'Executive', '1343560', 4, 2, 13, 2),
(43, 'PTMuongThanh1.webp', 'Deluxe King', '1144750', 2, 1, 14, 1),
(44, 'PTMuongThanh2.webp', 'Deluxe Twin', '1244774', 2, 2, 14, 1),
(45, 'PTMuongThanh3.webp', 'Deluxe Family Triple', '1478200', 5, 2, 14, 1),
(46, 'PTMandala1.webp', 'Deluxe Double', '1719145', 2, 1, 15, 2),
(47, 'PTMandala2.webp', 'Premium Deluxe Twin', '2047150', 2, 2, 15, 2),
(48, 'PTMandala3.webp', 'Premium Deluxe Double', '2114789', 4, 2, 15, 2),
(49, 'NTVinpearl1.webp', 'Deluxe Twin', '2023145', 2, 2, 16, 1),
(50, 'NTVinpearl2.webp', 'Deluxe Queen', '3039785', 2, 1, 16, 1),
(51, 'NTVinpearl3.webp', 'Grand Deluxe Queen', '2621450', 2, 1, 16, 1),
(52, 'NTHoli1.webp', 'Highfloor King City View', '544198', 2, 1, 17, 3),
(53, 'NTHoli2.webp', 'Executive King Studio With City View', '600000', 2, 1, 17, 3),
(54, 'NTHoli3.webp', 'Grand Studio Bathtub Panoramic Cityview', '750617', 2, 1, 17, 3),
(55, 'NTAnLam1.webp', 'Jungle Rock Villa\r\n', '5870120', 2, 1, 18, 2),
(56, 'NTAnLam2.webp', 'Bay Villa View Pool', '6785200', 2, 1, 18, 2),
(57, 'NTAnLam3.webp', 'Treetop Pool Villa', '8515200', 4, 2, 18, 2),
(58, 'HueMelia1.webp', 'The Level Deluxe', '2409120', 2, 2, 19, 1),
(59, 'HueMelia2.webp', 'The Level Premium With Views', '2976450', 4, 2, 19, 1),
(60, 'HueMelia3.webp', 'Presidential Suite', '32451650', 5, 3, 19, 1),
(61, 'HueIndochine1.webp', 'Palace Deluxe', '1542000', 2, 1, 20, 2),
(62, 'HueIndochine2.webp', 'Palace Studio', '1682450', 4, 2, 20, 2),
(63, 'HueIndochine3.webp', 'Palace Suite', '2336540', 4, 2, 20, 2),
(64, 'HueLa1.webp', 'Coconut', '296550', 2, 1, 21, 3),
(65, 'HueLa2.webp', 'Mangosteen', '310450', 2, 1, 21, 3),
(66, 'HueLa3.webp', 'Mango', '338444', 2, 2, 21, 3),
(67, 'HACitadines1.webp', 'Superior King City View', '1697450', 2, 1, 22, 2),
(68, 'HACitadines2.webp', 'Superior Twin City View', '1640000', 2, 1, 22, 2),
(69, 'HACitadines3.webp', 'Deluxe Twin City View', '1901450', 2, 1, 22, 2),
(70, 'HABay1.webp', 'Deluxe Heritage King', '2990502', 2, 1, 23, 1),
(71, 'HABay2.webp', 'Deluxe King Riverview', '3777450', 2, 1, 23, 1),
(72, 'HABay3.webp', 'Premium King', '5307000', 2, 1, 23, 1),
(73, 'HALegacy1.webp', 'Superior Balcony Garden View', '1359200', 2, 2, 24, 2),
(74, 'HALegacy2.webp', 'Deluxe Garden View', '1503450', 2, 2, 24, 2),
(75, 'HALegacy3.webp', 'Deluxe Rice Field View', '1852460', 2, 2, 24, 2),
(76, 'SGNikko1.webp', 'Deluxe Twin', '3742000', 2, 2, 25, 3),
(77, 'SGNikko2.webp', 'Deluxe King', '5126450', 4, 2, 25, 3),
(78, 'SGNikko3.webp', 'Nikko Club Deluxe King', '6124000', 4, 2, 25, 3),
(79, 'SGSilverland1.webp', 'Sunshine Garden Double Or Twin', '2986700', 4, 1, 26, 1),
(80, 'SGSilverland2.webp', 'Signature Ben Thanh Twin', '3222222', 4, 2, 26, 1),
(81, 'SGSilverland3.webp', 'Sense City Family', '4013450', 6, 3, 26, 1),
(82, 'SG221.webp', 'Premier Twin', '1516400', 4, 2, 27, 2),
(83, 'SG222.webp', 'Executive Twin - 30 Complimentary Use', '1876482', 4, 2, 27, 2),
(84, 'SG223.webp', 'Signature Double', '2236410', 4, 2, 27, 2),
(85, 'HNClassy1.webp', 'Classic', '777110', 2, 2, 29, 1),
(86, 'HNClassy2.webp', 'Deluxe', '902450', 2, 1, 29, 1),
(87, 'HNMovenpick1.webp', 'Superior Twin', '2500000', 2, 2, 30, 1),
(88, 'HNMovenpick2.webp', 'Deluxe Twin', '2700000', 4, 2, 30, 3),
(89, 'HNMovenpick3.webp', 'Deluxe King', '3260000', 4, 2, 30, 3),
(93, 'HNMina1.webp', 'Cozy Superior Double / Twin', '836852', 2, 1, 31, 3),
(94, 'HNMina2.webp', 'Elegant Deluxe Double / Twin', '923560', 4, 2, 31, 2),
(95, 'HNMina3.webp', 'Family', '1975450', 4, 2, 31, 2),
(96, 'DNSeashore1.webp', 'Superior Twin', '628650', 4, 2, 32, 2),
(97, 'DNSeashore2.webp', 'King Suite With Oceanfront', '920555', 2, 1, 32, 1),
(98, 'DNSeashore3.webp', 'Suite Double Ocean View', '1064852', 2, 1, 32, 1),
(99, 'DNGold1.webp', 'Superior Twin River View', '543120', 4, 2, 33, 1),
(100, 'DNGold2.webp', 'Deluxe Double River View', '612120', 4, 2, 33, 2),
(101, 'DNGold3.webp', 'Premium Gold Suite', '751462', 4, 2, 33, 2),
(102, 'DNBay1.webp', 'Deluxe King', '1763254', 2, 1, 34, 2),
(103, 'DNBay2.webp', 'Deluxe Twin', '2186400', 4, 2, 34, 3),
(104, 'DNBay3.webp', 'Premium Club Twin', '3753460', 4, 2, 34, 3),
(105, 'DLTerracotta1.webp', 'Superior Twin', '1494000', 4, 2, 35, 3),
(106, 'DLTerracotta2.webp', 'Basement Superior Twin', '1494587', 4, 2, 35, 3),
(107, 'DLTerracotta3.webp', 'Twin Standard', '1566470', 4, 2, 35, 3),
(108, 'DLCereja1.webp', 'Deluxe Double Or Twin Garden View', '1000000', 4, 2, 36, 1),
(109, 'DLCereja2.webp', 'Deluxe Double Or Twin Lake View', '1095485', 2, 2, 36, 1),
(110, 'DLCereja3.webp', 'Premium Double 1 Bedroom Garden View', '2000000', 4, 2, 36, 1),
(111, 'DLLuxe1.webp', 'Superior Double Garden View', '432999', 2, 1, 37, 2),
(112, 'DLLuxe2.webp', 'Deluxe Double With Valley View', '717818', 2, 1, 37, 2),
(113, 'DLLuxe3.webp', 'Superior Family', '818455', 4, 2, 37, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhnoio`
--

CREATE TABLE `hinhnoio` (
  `idhinh` int(11) NOT NULL,
  `idno` int(11) NOT NULL,
  `hinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhnoio`
--

INSERT INTO `hinhnoio` (`idhinh`, `idno`, `hinh`) VALUES
(1, 1, 'VTSunshine2.webp'),
(2, 1, 'VTSunshine3.webp'),
(3, 2, 'VTAnnata2.jpg'),
(4, 2, 'VTAnnata3.jpg'),
(5, 3, 'VTTheSong2.webp'),
(6, 3, 'VTTheSong3.webp'),
(7, 4, 'QNFLC2.jpg'),
(8, 4, 'QNFLC3.webp'),
(9, 5, 'QNSea2.webp'),
(10, 5, 'QNSea3.jpg'),
(11, 6, 'QNTMS2.webp'),
(12, 6, 'QNTMS3.webp'),
(13, 7, 'PYMandala1.webp'),
(14, 7, 'PYMandala3.webp'),
(15, 8, 'PYSala2.webp'),
(16, 8, 'PYSala3.webp'),
(17, 9, 'PYCoralina2.webp'),
(18, 9, 'PYCoralia3.webp'),
(19, 10, 'PQVinpearl2.webp'),
(20, 10, 'PQVinpearl3.webp'),
(21, 11, 'PQWonderworld2.webp'),
(22, 11, 'PQWonderworld3.webp'),
(23, 12, 'PQWyndham2.webp'),
(24, 12, 'PQWyndham3.webp'),
(25, 13, 'PTM2.webp'),
(26, 13, 'PTM3.webp'),
(27, 14, 'PTMuongThanh2.webp'),
(28, 14, 'PTMuongThanh3.webp'),
(29, 15, 'PTMandala2.webp'),
(30, 15, 'PTMandala3.webp'),
(31, 16, 'NTVinpearl2.webp'),
(32, 16, 'NTVinpearl3.webp'),
(33, 17, 'NTHoli2.webp'),
(34, 17, 'NTHoli3.webp'),
(35, 18, 'NTAnLam2.webp'),
(36, 18, 'NTAnLam3.webp'),
(37, 19, 'HueMelia2.webp'),
(38, 19, 'HUeMelia3.webp'),
(39, 20, 'HueIndochine2.webp'),
(40, 20, 'HueIndochine3.webp'),
(41, 21, 'HueLa2.webp'),
(42, 21, 'HueLa3.webp'),
(43, 22, 'HACitadines2.webp'),
(44, 22, 'HACitadines3.webp'),
(45, 23, 'HABay2.webp'),
(46, 23, 'HABay3.webp'),
(47, 24, 'HALegacy2.webp'),
(48, 24, 'HALegacy3.webp'),
(49, 25, 'HCMNikko2.webp'),
(50, 25, 'HCMNikko3.webp'),
(51, 26, 'HCMSilverland2.webp'),
(52, 26, 'HCMSilverland3.webp'),
(53, 27, 'HCM22Land1.webp'),
(54, 27, 'HCM22Land3.webp'),
(55, 29, 'HNClassy2.webp'),
(56, 29, 'HNClassy3.webp'),
(57, 30, 'HNMovenpick2.webp'),
(58, 30, 'HNMovenpick3.webp'),
(59, 31, 'HNMina2.webp'),
(60, 31, 'HNMina3.webp'),
(61, 32, 'DNSeashore2.webp'),
(62, 32, 'DNSeashore3.webp'),
(63, 33, 'DnGold2.webp'),
(64, 33, 'DNGold3.webp'),
(65, 34, 'DNBay2.webp'),
(66, 34, 'DNBay3.webp'),
(67, 35, 'DLTerracotta2.webp'),
(68, 35, 'DLTerracotta3.webp'),
(69, 36, 'DLCereja2.webp'),
(70, 36, 'DLCereja3.webp'),
(71, 37, 'DLLuxe2.webp'),
(72, 37, 'DLLuxe3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `tenkh` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `tenkh`, `diachi`, `email`, `username`, `pass`, `phone`) VALUES
(1, 'Huỳnh Hữu Thuận', '532 Aeon Bình Tân', 'huuthuan@gmail.com', 'DoThuan', 'thuan2004', 909134492),
(2, 'Mai Phương', 'S605 Vin Home Grand Park', 'ttmp0310@gmail.com', 'MeiPhwn', '03102004', 909123421);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `tennv` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhnv` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `tennv`, `diachi`, `email`, `username`, `pass`, `phone`, `hinhnv`, `ngaysinh`) VALUES
(1, 'Huỳnh Hữu Thuận', 'Aeon Bình Tân', 'huuthuan110804@gmail.com', 'RedThuan', 'thuan2004', '0909134492', 'admin1.jpg', '2004-08-11'),
(2, 'Thái Trần Mai Phương', 'Vin Home Grand Park', 'ttmp0310@gmail.com', 'Bii', '03102004', '0909876788', 'shin.jpg', '2004-03-10'),
(3, 'Trần Văn A', 'Sư Vạn Hạnh', 'athvc@gmail.com', 'TiTeo', 'thuan20042', '0909134492', 'titeo.jpg', '2004-11-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidulich`
--

CREATE TABLE `noidulich` (
  `iddl` int(11) NOT NULL,
  `tendl` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhdl` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `noidulich`
--

INSERT INTO `noidulich` (`iddl`, `tendl`, `hinhdl`) VALUES
(1, 'Vũng Tàu', 'Vungtau.webp'),
(2, 'Quy Nhơn', 'QuyNhon.jpg'),
(3, 'Phú Yên', 'PhuYen.jpg'),
(4, 'Phú Quốc', 'PhuQuoc.jpg'),
(5, 'Phan Thiết', 'PhanThiet.jpg'),
(6, 'Nha Trang', 'NhaTrang.jpg'),
(7, 'Huế', 'Hue.jpg'),
(8, 'Hội An', 'HoiAn.jpg'),
(9, 'Tp.Hồ Chí Minh', 'HCM.jpg'),
(10, 'Hà Nội', 'HaNoi.jpg'),
(11, 'Đà Nẵng', 'DaNang.jpg'),
(12, 'Đà Lạt', 'DaLat.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noio`
--

CREATE TABLE `noio` (
  `idno` int(11) NOT NULL,
  `iddl` int(11) NOT NULL,
  `tenno` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhno` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mota` varchar(20000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `noio`
--

INSERT INTO `noio` (`idno`, `iddl`, `tenno`, `diachi`, `hinhno`, `mota`) VALUES
(1, 1, 'Sunshine Residence & Homestay', 'Thủ Khoa Huân, Phường 1, Vũng Tàu, Việt Nam.', 'VTSunshine1.webp', 'Nằm ở vị trí trung tâm tại Phường 1 của Vũng Tàu, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút và tùy chọn ăn uống thú vị. Hãy nhớ dành một chút thời gian để thăm thú Hải đăng Vũng Tàu cũng như Bãi trước gần đó. Bể bơi ngoài trời và nhà hàng là một trong những tiện nghi đặc biệt sẽ nâng cao kỳ nghỉ của quý khách với sự tiện lợi ngay trong khuôn viên.'),
(2, 1, 'Khách sạn Bãi biển Annata (Annata Beach Hotel)', 'Thắng Tam, TP. Vũng Tàu, Thắng Tam, Vũng Tàu, Việt Nam.', 'VTAnnata1.jpg', 'Nằm ở vị trí trung tâm tại Thắng Tam của Vũng Tàu, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút và tùy chọn ăn uống thú vị. Hãy nhớ dành một chút thời gian để thăm thú Hải đăng Vũng Tàu cũng như Bãi trước gần đó. Chỗ nghỉ 3 sao này có nhà hàng giúp cho kỳ nghỉ của quý khách thêm thư thái và đáng nhớ.'),
(3, 1, 'Vũng Tàu The Song Apartment - Paris Homestay', '28 Đường Thi Sách, Phường 8, Thắng Tam, Vũng Tàu, Việt Nam.', 'VTTheSong1.webp', 'Nằm ở vị trí trung tâm tại Thắng Tam của Vũng Tàu, chỗ nghỉ này đặt quý khách ở gần các điểm thu hút và tùy chọn ăn uống thú vị. Hãy nhớ dành một chút thời gian để thăm thú Hải đăng Vũng Tàu cũng như Bãi trước gần đó. Được xếp hạng 5 sao, chỗ nghỉ chất lượng cao này cho phép khách nghỉ sử dụng bể bơi ngoài trời, xông khô và phòng tập ngay trong khuôn viên.'),
(4, 2, 'Căn hộ khách sạn FLC Sea Tower Quy Nhơn\n', 'Tòa Nhà FLC Sea Tower đường Võ Thị Yến, Phường Nguyễn Văn Cừ, Quy Nhơn, Thành phố biển, Quy Nhơn (Bình Định), Việt Nam.', 'QNFLC1.webp', ' Nằm ở vị trí chiến lược tại Thành phố biển, cho phép quý khách lui tới và gần với các điểm thu hút và tham quan địa phương. Đừng rời đi trước khi ghé thăm Sân bay Phù Cát nổi tiếng. Được xếp hạng 5 sao, chỗ nghỉ chất lượng cao này cho phép khách nghỉ sử dụng bể bơi trong nhà, mát-xa và bể bơi ngoài trời ngay trong khuôn viên.'),
(5, 2, 'Blossom Sea Homestay Quy Nhon\r\n', '270 Diên Hồng, Trung tâm thành phố Quy Nhơn, Quy Nhơn (Bình Định), Việt Nam.', 'QNSea1.webp', 'Nằm ở vị trí chiến lược tại Trung tâm thành phố Quy Nhơn, cho phép quý khách lui tới và gần với các điểm thu hút và tham quan địa phương. Đừng rời đi trước khi ghé thăm Sân bay Phù Cát nổi tiếng. Bể bơi trong nhà, nhà hàng và spa là một trong những tiện nghi đặc biệt sẽ nâng cao kỳ nghỉ của quý khách với sự tiện lợi ngay trong khuôn viên.'),
(6, 2, 'TMS Quy Nhơn - ROSHI Apartment Ocean View\r\n', '28 Nguyễn Huệ, Tòa Nhà TMS , Thành phố biển, Quy Nhơn (Bình Định), Việt Nam.', 'QNTMS1.jpg', 'Nằm ở vị trí chiến lược tại Thành phố biển, cho phép quý khách lui tới và gần với các điểm thu hút và tham quan địa phương. Đừng rời đi trước khi ghé thăm Sân bay Phù Cát nổi tiếng. Chỗ nghỉ 5 sao này có nhà hàng giúp cho kỳ nghỉ của quý khách thêm thư thái và đáng nhớ.'),
(7, 3, 'Mandala Hotel & Spa Phú Yên', 'Đại lộ Hùng Vương, Phường 7, Thành phố Tuy Hòa, Tỉnh Phú Yên, Biển Tuy Hòa, Tuy Hòa (Phú Yên), Việt Nam.', 'PYMandala2.webp', 'Mandala Hotel & Spa Phu Yen là một khách sạn nằm trong khu vực an ninh, toạ lạc tại Phường 7. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay Tuy Hoà (TBB) 6,67 km. Khách sạn nằm cách Tuy Hoa Railway Station 2,03 km. Không chỉ sở hữu vị trí đắc địa, Mandala Hotel & Spa Phu Yen còn là một trong những khách sạn nằm cách Ong Cliff chưa đầy 10,05 km và Long Thuy Beach chưa đầy 7,16 km.'),
(8, 3, 'Sala Grand TuyHoa Hotel', '09 Doc Lap, 07 Ward, Tuy Hoa City, Phu Yen Province, Viet Nam , Biển Tuy Hòa, Tuy Hòa (Phú Yên), Việt Nam.', 'PYSala1.webp', 'Sala Grand TuyHoa Hotel toạ lạc tại khu vực / thành phố Phường 7. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay Tuy Hoà (TBB) 5,31 km. Khách sạn nằm cách Tuy Hoa Railway Station 2,77 km. Có rất nhiều điểm tham quan lân cận như Hồ Suối Lạnh ở khoảng cách 20,59 km, và White Stone Temple ở khoảng cách 31,27 km.'),
(9, 3, 'Coralina Hotel Phu Yen', '335 Lê Duẩn, Phường 7, Thành phố Tuy Hòa, Tỉnh Phú Yên, Việt Nam.', 'PYCoralina1.webp', 'Coralina Hotel Phu Yen là đề xuất hàng đầu dành cho những tín đồ du lịch \"bụi\" mong muốn được nghỉ tại một khách sạn vừa thoải mái lại hợp túi tiền. Dành cho những du khách muốn du lịch thoải mái cùng ngân sách tiết kiệm, Coralina Hotel Phu Yen sẽ là lựa chọn lưu trú hoàn hảo, nơi cung cấp các tiện nghi chất lượng và dịch vụ tuyệt vời.'),
(10, 4, 'Vinpearl Resort & Spa Phu Quoc\r\n', 'Bãi Dài, Gành Dầu, Vũng Bàu, xã Gành Dầu, Phú Quốc, Tỉnh Kiên Giang, Việt Nam.', 'PQVinpearl1.webp', 'Vinpearl Resort & Spa Phu Quoc toạ lạc tại khu vực / thành phố xã Gành Dầu. Có rất nhiều điểm tham quan lân cận như Cang An Thoi Terminal ở khoảng cách 30,22 km, và Suối Đá Bàn ở khoảng cách 22,92 km. Không chỉ sở hữu vị trí giúp quý khách dễ dàng ghé thăm những địa điểm lý thú trong chuyến hành trình, Vinpearl Resort & Spa Phu Quoc cũng sẽ mang đến cho quý khách trải nghiệm lưu trú mỹ mãn.m.'),
(11, 4, 'Vinpearl Wonderworld Phu Quoc', 'Bãi Dài, Gành Dầu, xã Gành Dầu, Phú Quốc, Tỉnh Kiên Giang, Việt Nam.', 'PQWonderworld1.webp', 'Vinpearl Wonderworld Phu Quoc là một nơi nghỉ nằm trong khu vực an ninh, toạ lạc tại xã Gành Dầu. Không chỉ sở hữu vị trí đắc địa, Vinpearl Wonderworld Phu Quoc còn là một trong những nơi nghỉ nằm cách Cang An Thoi Terminal chưa đầy 30,39 km và Suối Đá Bàn chưa đầy 22,88 km. Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Vinpearl Wonderworld Phu Quoc'),
(12, 4, 'Wyndham Grand Phu Quoc', 'Bãi Dài, Gành Dầu, xã Gành Dầu, Phú Quốc, Tỉnh Kiên Giang, Việt Nam.', 'PQWyndham1.webp', 'Lưu trú tại Wyndham Grand Phu Quoc là một lựa chọn đúng đắn khi quý khách đến thăm xã Gành Dầu. Dù quý khách muốn tổ chức một sự kiện hay các dịp kỷ niệm đặc biệt khác, Wyndham Grand Phu Quoc là lựa chọn tuyệt vời cho quý khách với phòng chức năng rộng lớn, được trang bị đầy đủ để sẵn sàng đáp ứng mọi yêu cầu.'),
(13, 5, 'M Continental by Mandala Mui Ne', 'ĐT 716, Mui Ne, Phan Thiet, Binh Thuan, Phường Mũi Né, Phan Thiết, Bình Thuận, Việt Nam.', 'PTM1.webp', 'Lưu trú tại M Continental by Mandala Mui Ne là một lựa chọn đúng đắn khi quý khách đến thăm Phường Mũi Né. Dành cho những du khách muốn du lịch thoải mái cùng ngân sách tiết kiệm, M Continental by Mandala Mui Ne sẽ là lựa chọn lưu trú hoàn hảo, nơi cung cấp các tiện nghi chất lượng và dịch vụ tuyệt vời. Từ sự kiện doanh nghiệp đến họp mặt công ty, M Continental by Mandala Mui Ne cung cấp đầy đủ các dịch vụ và tiện nghi đáp ứng mọi nhu cầu của quý khách và đồng nghiệp.'),
(14, 5, 'Muong Thanh Holiday Mui Ne Hotel', '54 Huỳnh Thúc Kháng, phường Hàm Tiến, Phường Mũi Né, Phan Thiết, Bình Thuận, Việt Nam.', 'PTMuongThanh1.webp', 'Muong Thanh Holiday Mui Ne Hotel là một khách sạn nằm trong khu vực an ninh, toạ lạc tại Hàm Tiến. Không chỉ sở hữu vị trí đắc địa, Muong Thanh Holiday Mui Ne Hotel còn là một trong những khách sạn nằm cách Núi Tà Cú chưa đầy 43,21 km và Cây Kơ Nia chưa đầy 42,48 km. Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Muong Thanh Holiday Mui Ne Hotel. Muong Thanh Holiday Mui Ne Hotel là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(15, 5, 'Mandala Cham Bay Mui Ne', 'ĐT716, Mũi Né, Thành phố Phan Thiết, Bình Thuận, Phường Mũi Né, Phan Thiết, Bình Thuận, Việt Nam.', 'PTMandala1.webp', 'Từ sự kiện doanh nghiệp đến họp mặt công ty, Mandala Cham Bay Mui Ne cung cấp đầy đủ các dịch vụ và tiện nghi đáp ứng mọi nhu cầu của quý khách và đồng nghiệp. Dù quý khách muốn tổ chức một sự kiện hay các dịp kỷ niệm đặc biệt khác, Mandala Cham Bay Mui Ne là lựa chọn tuyệt vời cho quý khách với phòng chức năng rộng lớn, được trang bị đầy đủ để sẵn sàng đáp ứng mọi yêu cầu.'),
(16, 6, 'Vinpearl Resort Nha Trang', 'Đảo Hòn Tre, Vĩnh Nguyên, Nha Trang, Khánh Hòa, Việt Nam.', 'NTVinpearl1.webp', 'Lưu trú tại Vinpearl Resort Nha Trang là một lựa chọn đúng đắn khi quý khách đến thăm Vĩnh Nguyên. Nơi nghỉ nằm cách Bến phà Vinpearl 4,55 km. Nơi nghỉ này rất dễ tìm bởi vị trí đắc địa, nằm gần với nhiều tiện ích công cộng. Khách sạn này là nơi tốt nhất dành cho những ai mong muốn một nơi thanh bình, thư thái để ẩn mình khỏi đám đông ồn ã, xô bồ. Dịch vụ thượng hạng song hành với hàng loạt tiện nghi phong phú sẽ đem đến cho quý khách trải nghiệm của một kỳ nghỉ viên mãn nhất.'),
(17, 6, 'Holi Panorama Nha Trang', 'Panorama Building, 02 Nguyễn Thị Minh Khai, Lộc Thọ, Nha Trang, Khánh Hòa, Việt Nam.', 'NTHoli1.webp', 'Holi Panorama Nha Trang toạ lạc tại khu vực / thành phố Lộc Thọ. Không chỉ sở hữu vị trí giúp quý khách dễ dàng ghé thăm những địa điểm lý thú trong chuyến hành trình, Holi Panorama Nha Trang cũng sẽ mang đến cho quý khách trải nghiệm lưu trú mỹ mãn. Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Holi Panorama Nha Trang'),
(18, 6, 'An Lam Retreats Ninh Van Bay', 'Hòn Heo, Vịnh Ninh Vân, Nha Trang, Ninh Hòa, Khánh Hòa, Việt Nam.', 'NTAnLam1.webp', 'Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại An Lam Retreats Ninh Van Bay. An Lam Retreats Ninh Van Bay là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(19, 7, 'Melia Vinpearl Hue', '50A Hùng Vương, Phú Nhuận, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam.', 'HueMelia1.webp\r\n', 'Lưu trú tại Melia Vinpearl Hue là một lựa chọn đúng đắn khi quý khách đến thăm Phú Nhuận. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Phú Bài 13,44 km. Khách sạn nằm cách Hue Railway Station 1,92 km. Khách sạn này rất dễ tìm bởi vị trí đắc địa, nằm gần với nhiều tiện ích công cộng.'),
(20, 7, 'Indochine Palace', '105A Hùng Vương, Phú Nhuận, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam.', 'HueIndochine1.webp', 'Indochine Palace toạ lạc tại khu vực / thành phố Phú Nhuận. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Phú Bài (HUI) 12,99 km. Khách sạn nằm cách Hue Railway Station 2,17 km. Có rất nhiều điểm tham quan lân cận như Elephant Springs ở khoảng cách 48,26 km, và Kinh Thành Huế ở khoảng cách 2,11 km.'),
(21, 7, 'La Habana House', '03 Phạm Ngũ Lão, Phú Hội, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam.', 'HueLa1.webp', 'Lưu trú tại La Habana House là một lựa chọn đúng đắn khi quý khách đến thăm Phú Hội. Nơi nghỉ sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Phú Bài (HUI) 13,82 km. Nơi nghỉ nằm cách Hue Railway Station 2,27 km. Nơi nghỉ này rất dễ tìm bởi vị trí đắc địa, nằm gần với nhiều tiện ích công cộng.'),
(22, 8, 'Citadines Pearl Hội An\r\n', 'Biển An Bàng, Cẩm An, Hội An, Tỉnh Quảng Nam, Việt Nam.', 'HACitadines1.webp', 'Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Citadines Pearl Hoi An. Citadines Pearl Hoi An là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(23, 8, 'Bay Resort Hoi An', 'Thôn Xuyên Trung, Cẩm Nam, Hội An, Tỉnh Quảng Nam, Việt Nam.', 'HABay1.webp', 'Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Bay Resort Hoi An. Bay Resort Hoi An là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(24, 8, 'Legacy Hoi An Resort \r\n', 'Hamlet 5, Cẩm Thanh, Cẩm Thanh, Hội An, Tỉnh Quảng Nam, Việt Nam.', 'HALegacy1.webp', 'Lưu trú tại Legacy Hoi An Resort là một lựa chọn đúng đắn khi quý khách đến thăm Cẩm Thanh. Khách sạn này là nơi tốt nhất dành cho những ai mong muốn một nơi thanh bình, thư thái để ẩn mình khỏi đám đông ồn ã, xô bồ. Hãy sẵn sàng đón nhận trải nghiệm khó quên bằng dịch vụ độc đáo và hoàn hảo của nơi nghỉ cùng các tiện nghi đầy đủ, đáp ứng mọi nhu cầu của quý khách. Trung tâm thể dục của nơi nghỉ là một trong những tiện nghi không thể bỏ qua khi lưu trú tại đây.'),
(25, 9, 'Khách sạn Nikko Sài Gòn', '235 Nguyễn Văn Cừ, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh, Việt Nam.', 'HCMNikko1.webp', 'Hotel Nikko Saigon là một khách sạn nằm trong khu vực an ninh, toạ lạc tại Phường Nguyễn Cư Trinh. Dù quý khách muốn tổ chức một sự kiện hay các dịp kỷ niệm đặc biệt khác, Hotel Nikko Saigon là lựa chọn tuyệt vời cho quý khách với phòng chức năng rộng lớn, được trang bị đầy đủ để sẵn sàng đáp ứng mọi yêu cầu. Hotel Nikko Saigon là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(26, 9, 'Silverland Ben Thanh', '14-16 Lê Lai, Phường Bến Thành, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh, Việt Nam.', 'HCMSilverland1.webp', 'Lưu trú tại Silverland Ben Thanh là một lựa chọn đúng đắn khi quý khách đến thăm Phường Bến Thành. Hãy sẵn sàng đón nhận trải nghiệm khó quên bằng dịch vụ độc đáo và hoàn hảo của khách sạn cùng các tiện nghi đầy đủ, đáp ứng mọi nhu cầu của quý khách. Trung tâm thể dục của khách sạn là một trong những tiện nghi không thể bỏ qua khi lưu trú tại đây.'),
(27, 9, '22Land Hotel & Spa Saigon', '25 Lê Thánh Tôn, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam.', 'HCM22land2.webp', '22Land Hotel & Spa Saigon là một khách sạn nằm trong khu vực an ninh, toạ lạc tại Bến Nghé. Từ sự kiện doanh nghiệp đến họp mặt công ty, 22Land Hotel & Spa Saigon cung cấp đầy đủ các dịch vụ và tiện nghi đáp ứng mọi nhu cầu của quý khách và đồng nghiệp. Hãy tận hưởng thời gian vui vẻ cùng cả gia đình với hàng loạt tiện nghi giải trí tại 22Land Hotel & Spa Saigon, một khách sạn tuyệt vời phù hợp cho mọi kỳ nghỉ bên người thân.'),
(29, 10, 'Classy Boutique Hotel', ' 16H Đường Thành, Cửa Đông, Quận Hoàn Kiếm, Hà Nội, Việt Nam.', 'HNClassy1.webp', 'Lưu trú tại Classy Boutique Hotel là một lựa chọn đúng đắn khi quý khách đến thăm Hàng Đào. Khi lưu trú tại nơi nghỉ thì nội thất và kiến trúc hẳn là hai yếu tố quan trọng khiến quý khách mãn nhãn. Với thiết kế độc đáo, Classy Boutique Hotel mang đến không gian lưu trú làm hài lòng quý khách. Từ sự kiện doanh nghiệp đến họp mặt công ty, Classy Boutique Hotel cung cấp đầy đủ các dịch vụ và tiện nghi đáp ứng mọi nhu cầu của quý khách và đồng nghiệp.'),
(30, 10, 'Mövenpick Living West Hanoi', '21 Đường Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Hà Nội, Việt Nam.', 'HNMovenpick1.webp', 'Mövenpick Living West Hanoi toạ lạc tại khu vực / thành phố Quận Cầu Giấy. Khách sạn nằm cách National University 0,63 km. Có rất nhiều điểm tham quan lân cận như Đình Làng Nghĩa Lộ ở khoảng cách 27,06 km, và Nhà thờ Thường Lệ ở khoảng cách 16,87 km. Dịch vụ thượng hạng song hành với hàng loạt tiện nghi phong phú sẽ đem đến cho quý khách trải nghiệm của một kỳ nghỉ viên mãn nhất.'),
(31, 10, 'Mina Hotel & Spa', '40 Hàng Buồm, Hàng Buồm, Quận Hoàn Kiếm, Hà Nội, Việt Nam.', 'HNMina1.webp', 'Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại Mina Hotel & Spa. Mina Hotel & Spa là lựa chọn sáng giá dành cho những ai đang tìm kiếm một trải nghiệm xa hoa đầy thú vị trong kỳ nghỉ của mình. Lưu trú tại đây cũng là cách để quý khách chiều chuộng bản thân với những dịch vụ xuất sắc nhất và khiến kỳ nghỉ của mình trở nên thật đáng nhớ.'),
(32, 11, 'Seashore Hotel & Apartment ', '15-16 Hoàng Sa, Mân Thái, Sơn Trà, Đà Nẵng, Việt Nam.', 'DNSeashore1.webp', 'Seashore Hotel & Apartment toạ lạc tại khu vực / thành phố Mân Thái. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Đà Nẵng (DAD) 7,37 km. Khách sạn nằm cách Da Nang Railway Station 4,7 km. Có rất nhiều điểm tham quan lân cận như Chùa Linh Ứng ở khoảng cách 3,31 km, và Nhà hàng Bà Rô ở khoảng cách 2,14 km.'),
(33, 11, 'Gold Plaza Hotel Da Nang', '11 Trần Thị Lý, Quận Hải Châu, Đà Nẵng, Việt Nam.', 'DNGold1.webp', 'Lưu trú tại Gold Plaza Hotel Da Nang là một lựa chọn đúng đắn khi quý khách đến thăm Quận Hải Châu. Khách sạn sở hữu vị trí đắc địa cách sân bay Sân bay quốc tế Đà Nẵng (DAD) 2,51 km. Khách sạn nằm cách Da Nang Railway Station 2,82 km. Khách sạn này rất dễ tìm bởi vị trí đắc địa, nằm gần với nhiều tiện ích công cộng.'),
(34, 11, 'Bay Capital Danang ', '17 Quang Trung, Phường Hải Châu 1, Quận Hải Châu, Đà Nẵng, Việt Nam.', 'DNBay1.webp', 'Lưu trú tại Bay Capital Danang là một lựa chọn đúng đắn khi quý khách đến thăm Quận Hải Châu. Dù quý khách muốn tổ chức một sự kiện hay các dịp kỷ niệm đặc biệt khác, Bay Capital Danang là lựa chọn tuyệt vời cho quý khách với phòng chức năng rộng lớn, được trang bị đầy đủ để sẵn sàng đáp ứng mọi yêu cầu.'),
(35, 12, 'Terracotta Hotel & Resort Đà Lạt', 'Phân khu chức năng 7.9, KDL hồ Tuyền Lâm, Phường 3, Đà Lạt, Tỉnh Lâm Đồng, Việt Nam.', 'DLTerracotta1.webp', 'Lưu trú tại Terracotta Hotel & Resort Dalat là một lựa chọn đúng đắn khi quý khách đến thăm Phường 3. Dù quý khách muốn tổ chức một sự kiện hay các dịp kỷ niệm đặc biệt khác, Terracotta Hotel & Resort Dalat là lựa chọn tuyệt vời cho quý khách với phòng chức năng rộng lớn, được trang bị đầy đủ để sẵn sàng đáp ứng mọi yêu cầu.'),
(36, 12, 'Cereja Hotel & Resort Dalat', 'Đường Hoa Phượng Tím, Phường 3, Đà Lạt, Tỉnh Lâm Đồng, Việt Nam.', 'DLCereja1.webp', 'Lưu trú tại Cereja Hotel & Resort Dalat là một lựa chọn đúng đắn khi quý khách đến thăm Phường 3. Nơi nghỉ nằm cách Nhà Ga Cáp Treo Đà Lạt 3,9 km. Nơi nghỉ này rất dễ tìm bởi vị trí đắc địa, nằm gần với nhiều tiện ích công cộng. Không chỉ sở hữu vị trí giúp quý khách dễ dàng ghé thăm những địa điểm lý thú trong chuyến hành trình, Cereja Hotel & Resort Dalat cũng sẽ mang đến cho quý khách trải nghiệm lưu trú mỹ mãn.'),
(37, 12, 'The Luxe Hotel Dalat', '17-17Bis 3/4 , Phường 3, Đà Lạt, Tỉnh Lâm Đồng, Việt Nam.', 'DLLuxe1.webp', 'Khách sạn này là lựa chọn hoàn hảo cho các kỳ nghỉ mát lãng mạn hay tuần trăng mật của các cặp đôi. Quý khách hãy tận hưởng những đêm đáng nhớ nhất cùng người thương của mình tại The Luxe Hotel Dalat. Từ sự kiện doanh nghiệp đến họp mặt công ty, The Luxe Hotel Dalat cung cấp đầy đủ các dịch vụ và tiện nghi đáp ứng mọi nhu cầu của quý khách và đồng nghiệp. Hãy tận hưởng thời gian vui vẻ cùng cả gia đình với hàng loạt tiện nghi giải trí tại The Luxe Hotel Dalat, một khách sạn tuyệt vời phù hợp cho mọi kỳ nghỉ bên người thân.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuthongtin`
--

CREATE TABLE `phieuthongtin` (
  `id` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idphong` int(11) NOT NULL,
  `tiencoc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tienttoan` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ngayTao` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tenkhach` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieuthongtin`
--

INSERT INTO `phieuthongtin` (`id`, `idkh`, `idphong`, `tiencoc`, `tienttoan`, `ngayTao`, `tenkhach`) VALUES
(25, 1, 4, '163.068 VND', '380.492 VND', '04/06/2024', 'Phương'),
(27, 1, 74, '502.118 VND', '1.171.608 VND', '10/06/2024', 'Đỏ Thuận'),
(28, 1, 106, '499.246 VND', '1.164.908 VND', '11/06/2024', 'Mai Phương'),
(29, 1, 106, '499.246 VND', '1.164.908 VND', '11/06/2024', 'Mai Phương'),
(30, 1, 106, '499.246 VND', '1.164.908 VND', '11/06/2024', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttinkhachhang`
--

CREATE TABLE `ttinkhachhang` (
  `idttin` int(11) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `tenkhach` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ttinkhachhang`
--

INSERT INTO `ttinkhachhang` (`idttin`, `hoten`, `email`, `phone`, `tenkhach`) VALUES
(13, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, ''),
(14, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, ''),
(15, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, ''),
(16, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, ''),
(17, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, ''),
(18, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(19, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(20, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(21, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(22, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(23, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(24, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(25, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(26, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(27, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT'),
(28, 'Hữu Thuận', 'huuthuan110804@gmail.com', 909134492, 'TAT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttinphong`
--

CREATE TABLE `ttinphong` (
  `idct` int(20) NOT NULL,
  `tenct` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ttinphong`
--

INSERT INTO `ttinphong` (`idct`, `tenct`) VALUES
(1, 'Không bao gồm buổi sáng'),
(2, 'Có bao gồm buổi sáng'),
(3, 'Buổi sáng phục vụ theo order');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctphong`
--
ALTER TABLE `ctphong`
  ADD PRIMARY KEY (`idphong`),
  ADD KEY `FK_noio` (`idno`);

--
-- Chỉ mục cho bảng `hinhnoio`
--
ALTER TABLE `hinhnoio`
  ADD PRIMARY KEY (`idhinh`),
  ADD KEY `FK_pic` (`idno`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `noidulich`
--
ALTER TABLE `noidulich`
  ADD PRIMARY KEY (`iddl`);

--
-- Chỉ mục cho bảng `noio`
--
ALTER TABLE `noio`
  ADD PRIMARY KEY (`idno`),
  ADD KEY `FK_dl` (`iddl`);

--
-- Chỉ mục cho bảng `phieuthongtin`
--
ALTER TABLE `phieuthongtin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ttinkhachhang`
--
ALTER TABLE `ttinkhachhang`
  ADD PRIMARY KEY (`idttin`);

--
-- Chỉ mục cho bảng `ttinphong`
--
ALTER TABLE `ttinphong`
  ADD PRIMARY KEY (`idct`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ctphong`
--
ALTER TABLE `ctphong`
  MODIFY `idphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `hinhnoio`
--
ALTER TABLE `hinhnoio`
  MODIFY `idhinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `noidulich`
--
ALTER TABLE `noidulich`
  MODIFY `iddl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `noio`
--
ALTER TABLE `noio`
  MODIFY `idno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `phieuthongtin`
--
ALTER TABLE `phieuthongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `ttinkhachhang`
--
ALTER TABLE `ttinkhachhang`
  MODIFY `idttin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `ttinphong`
--
ALTER TABLE `ttinphong`
  MODIFY `idct` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctphong`
--
ALTER TABLE `ctphong`
  ADD CONSTRAINT `FK_noio` FOREIGN KEY (`idno`) REFERENCES `noio` (`idno`);

--
-- Các ràng buộc cho bảng `hinhnoio`
--
ALTER TABLE `hinhnoio`
  ADD CONSTRAINT `FK_pic` FOREIGN KEY (`idno`) REFERENCES `noio` (`idno`);

--
-- Các ràng buộc cho bảng `noio`
--
ALTER TABLE `noio`
  ADD CONSTRAINT `FK_dl` FOREIGN KEY (`iddl`) REFERENCES `noidulich` (`iddl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
