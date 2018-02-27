-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2018 lúc 05:35 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ur_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `position` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_name`, `phone_number`, `address`, `ur_name`, `password`, `created`, `position`) VALUES
(2, 'Hoàng Ngọc Hải', '0981075108', 'sdbvjdsnjdn', 'admin', '123456', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `created` double NOT NULL,
  `status` smallint(6) DEFAULT '0',
  `adult_quan` int(11) NOT NULL,
  `chirld_quan` int(11) NOT NULL,
  `total_price` decimal(15,3) DEFAULT '0.000',
  `quantity_total` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `cus_id`, `tour_id`, `payment_id`, `address`, `phone_number`, `created`, `status`, `adult_quan`, `chirld_quan`, `total_price`, `quantity_total`, `note`) VALUES
(5, 19, 18, 2, 'TDP2-Miêu Nha-Tây Mỗ-Nam TL-HN', '0971533898', 1508472375, 1, 1, 1, '1400003.000', 2, ''),
(6, 19, 23, 3, 'Hà Nội', '091231239', 1508493573, 0, 2, 3, '5400003.000', 5, ''),
(7, 21, 33, 2, 'Hóa Quỳ Như Xuân Thanh Hóa', '0981075108', 1508498941, 0, 2, 3, '8400006.000', 5, 'Không có gì'),
(8, 21, 18, 2, 'Hà Nội', '09810751515', 1508552361, 0, 2, 2, '2800006.000', 4, ''),
(9, 22, 26, 3, 'àdfdvfda', '4404.4', 1519706131, 0, 1, 1, '1198003.000', 2, 'âc');

--
-- Bẫy `book`
--
DELIMITER $$
CREATE TRIGGER `Auto Date` BEFORE INSERT ON `book` FOR EACH ROW BEGIN
	SET NEW.created=unix_timestamp();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_room`
--

CREATE TABLE `book_room` (
  `book_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book_room`
--

INSERT INTO `book_room` (`book_id`, `room_id`) VALUES
(5, 2),
(6, 7),
(7, 11),
(9, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `contents`, `status`) VALUES
(4, 'Biển Đảo', 'Du lịch các hòn đảo ở Việt Nam', 1),
(5, 'Miền Bắc', 'Du lịch các tỉnh miền Bắc Việt Nam', 1),
(6, 'Miền Nam', 'Du lịch các tỉnh miền Nam Việt Nam', 1),
(8, 'Châu Âu', 'Du lịch các nước ở châu Âu', 1),
(9, 'Miền Trung', 'Du lịch các tỉnh miền Trung  ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coment`
--

CREATE TABLE `coment` (
  `coment_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coment`
--

INSERT INTO `coment` (`coment_id`, `cus_id`, `tour_id`, `content`, `status`) VALUES
(1, 19, 27, 'Tuyệt Vời', 1),
(2, 19, 18, 'Quá Tuyệt Vời', 1),
(3, 20, 21, 'Tuyệt Vời', 1),
(4, 19, 23, 'Tuyệt Vời', 1),
(6, 21, 21, 'Quá đẹp', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Customer',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `email`, `phone`, `address`, `password`, `Birthday`, `status`, `created_at`) VALUES
(19, 'Trần Văn Cương 1', 'aaa@gmail.com', '0971533898', NULL, '6f65a2534c1dcf6f9cad289b5edb087b', '2017-10-27', 1, NULL),
(20, 'Trần Văn Cương', 'hihi@gmail.com', '', NULL, '6f65a2534c1dcf6f9cad289b5edb087b', '0000-00-00', 1, NULL),
(21, 'Hoàng Ngọc Hải', 'trandinhvu@gmail.com', '0981075108', NULL, 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 1, NULL),
(22, 'hoàng nsmk', 'a@gmail.com', '14914949', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `local_id` int(11) NOT NULL,
  `local_name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `local_status` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`local_id`, `local_name`, `cate_id`, `local_status`) VALUES
(23, 'Du Lịch Hà Nội', 5, 1),
(24, 'Du Lịch Tp.Hồ Chí Minh', 6, 1),
(25, 'Du Lịch Hạ Long', 5, 1),
(26, 'Du Lịch Sapa', 5, 1),
(27, 'Du Lịch Đà Nẵng', 9, 1),
(28, 'Du Lịch Hội An', 9, 1),
(29, 'Du Lịch Nha Trang', 9, 1),
(30, 'Du Lịch Huế', 9, 1),
(31, 'Du Lịch Đà Lạt', 9, 1),
(32, 'Du Lịch Ninh Bình', 5, 1),
(33, 'Du Lịch Tây Nguyên', 9, 1),
(34, 'Du Lịch Pleiku', 9, 1),
(35, 'Du Lịch Mộc Châu', 5, 1),
(36, 'Du Lịch Ba Vì', 5, 1),
(37, 'Du Lịch Sơn La', 5, 1),
(38, 'Du Lịch Lai Châu', 4, 1),
(39, 'Du Lịch Yên Bái', 5, 1),
(40, 'Du Lịch Hòa Bình', 9, 1),
(41, 'Du Lịch Phú Thọ', 9, 1),
(42, 'Du Lịch Nghệ An', 9, 1),
(43, 'Du Lịch Côn Đảo', 4, 1),
(44, 'Du Lịch Vũng Tàu', 6, 1),
(45, 'Du Lịch Lạng Sơn', 5, 1),
(46, 'Du Lịch Thanh Hóa', 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_name`, `status`) VALUES
(2, 'Thanh toán bằng tài khoản ngân hàng', 1),
(3, 'Thanh toán khi nhận hàng', 1),
(4, 'Thanh toán bằng ngân lượng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `type` smallint(6) NOT NULL,
  `status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `price`, `type`, `status`) VALUES
(2, 'Phòng 304 khách sạn Mường Thanh', '500000.0000', 2, 1),
(3, 'Phòng 104 khách sạn Minh Hải', '270000.0000', 2, 0),
(4, 'Phòng 207 khách sạn Minh Quý', '150000.0000', 1, 1),
(5, 'Phòng 102 khách sạn Nhật Tân', '145000.0000', 3, 1),
(6, 'Phòng 214 khách sạn Hữu Nghị', '370000.0000', 2, 1),
(7, 'Phòng 303 khách sạn Trường Kiên', '240000.0000', 1, 0),
(8, 'Phòng 408 khách sạn Mường Thanh', '250000.0000', 2, 1),
(9, 'Phòng 101 khách sạn Đà Nẵng', '280000.0000', 2, 1),
(10, 'Phòng 202 khách sạn Việt Trì', '145000.0000', 4, 1),
(11, 'Phòng 203 khách sạn Vũ Hồng', '475000.0000', 1, 0),
(12, 'Phòng 216 khách sạn Hà Hòa 1', '145000.0000', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_button` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `description`, `link_button`, `images`, `link_text`, `status`) VALUES
(2, 'Hà Nội', 'Slider ngày 20/09/2018', 'ha-noi-20-09-2017', 'http://localhost:8080/webdulich/files/banner2.jpg', NULL, 1),
(5, 'TP Hồ Chí Minh', 'iwfesi1213', 'ho-chi-minh', 'http://localhost:8080/webdulich/files/banner1.jpg', NULL, 1),
(17, 'ádas', 'đâsd', 'ádas', 'http://localhost:8080/webdulich/files/banner3.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `discount` float DEFAULT '0',
  `price_adult` decimal(15,3) DEFAULT '0.000',
  `price_chil` decimal(15,4) DEFAULT '0.0000',
  `days` smallint(6) NOT NULL,
  `links` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_of` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`tour_id`, `tour_name`, `local_id`, `description`, `discount`, `price_adult`, `price_chil`, `days`, `links`, `avatar`, `image1`, `image2`, `view_of`, `created`, `status`) VALUES
(18, 'Du lịch Miền Trung – Đà Nẵng', 27, 'Bạn đã lên kế hoạch cho chuyến du lịch mùa thu này chưa? Với những lý do tuyệt vời dưới đây sẽ khiến quý khách háo hức lên kế hoạch cho một chuyến khám phá trong dịp du lịch hè này', 2, '900000.000', '500000.0000', 3, 'Du-Lich-Mien-Trung-Da-Nang', 'http://localhost:8080/webdulich/files/DL-DaNang.jpg', 'http://localhost:8080/webdulich/files/DL-DaNang1.jpg', 'http://localhost:8080/webdulich/files/DL-DaNang2.jpg', 18, NULL, 1),
(19, 'Du Lịch Đà Nẵng -Hội An – Huế', 27, 'Du Lịch Miền Trung giá tốt – Dải đất Miền Trung được mẹ thiên nhiên ưu ái cho nhiều thắng cảnh đẹp với nhiều dãy núi hùng vỹ xanh rì, những bờ biển cát trắng mịn thoai thoải và những dòng sông trong vắt thơ mộng.', 2, '1000000.000', '800000.0000', 2, 'Du-Lich-Da-nang-Hoi-An-Hue', 'http://localhost:8080/webdulich/files/DL-DaNang3.jpg', 'http://localhost:8080/webdulich/files/DL-DaNang4.jpg', 'http://localhost:8080/webdulich/files/DL-DaNang5.jpg', 1, NULL, 1),
(20, 'Du lịch Miền Bắc – Hà Nội – Hạ Long', 23, 'Nhắc tới du lịch miền Bắc là nhắc tới Hà Nội, Hạ Long, Tuần Châu & Sapa. Từng điểm đến trên đều níu chân du khách không chỉ bởi vẻ đẹp thiên nhiên ban tặng mà còn bởi con người nơi đây rất thân thiện và hiếu khách. Cùng khám phá những điểm du lịch nổi tiếng với hành trình du lịch miền Bắc 5 ngày vô cùng hấp dẫn !', 2, '999000.000', '800000.0000', 2, 'Du-Lich-Mien-Bac-Ha-Noi-Ha-Long', 'http://localhost:8080/webdulich/files/DL-HN-HaLong1.jpg', 'http://localhost:8080/webdulich/files/DL-DaNang4.jpg', 'http://localhost:8080/webdulich/files/DL-HN-HaLong2.jpg', 1, NULL, 1),
(21, 'Du Lịch Hạ Long', 25, 'Hạ Long 3 ngày sẽ cho du khách được chiêm ngưỡng những tác phẩm tạo hình tuyệt mỹ, tài hoa của tạo hoá, của thiên nhiên biến hàng ngàn đảo đá vô tri tĩnh lặng kia trở nên những tác phẩm điêu khắc...', 2, '999000.000', '800000.0000', 3, 'Du-Lich-Ha-Long', 'http://localhost:8080/webdulich/files/DL-HN-HaLong4.jpg', 'http://localhost:8080/webdulich/files/DL-HN-HaLong5.jpg', 'http://localhost:8080/webdulich/files/DL-HN-HaLong2.jpg', 0, NULL, 1),
(22, 'Tour Du lịch Côn Đảo 3 Ngày 2 Đêm', 43, 'Trải nghiệm tuyệt vời cùng khi hòa mình với Côn Đảo 3 Ngày 2 Đêm', 3, '1200000.000', '900000.0000', 3, 'Du-Lich-Con-Dao-Bien-Dao', 'http://localhost:8080/webdulich/files/DL-ConDao1.jpg', 'http://localhost:8080/webdulich/files/DL-ConDao2.jpg', 'http://localhost:8080/webdulich/files/DL-ConDao3.jpg', 1, NULL, 1),
(23, 'Du Lịch Côn Đảo: Làng Cỏ Ống', 43, 'Trải nghiệm tuyệt vời cùng khi hòa mình với Côn Đảo 3 Ngày 2 Đêm', 3, '1200000.000', '900000.0000', 3, 'Du-Lich-Con-Dao-Lang-Co-Ong', 'http://localhost:8080/webdulich/files/DL-ConDao3.jpg', 'http://localhost:8080/webdulich/files/DL-ConDao4.jpg', 'http://localhost:8080/webdulich/files/DL-ConDao5.jpg', 1, NULL, 1),
(24, 'Du Lịch Hà Nội Tràng An', 23, 'Du Lịch Hà Nội Tràng An', 2, '700000.000', '500000.0000', 3, 'Du-Lich-Ha-Noi-Trang-An', 'http://localhost:8080/webdulich/files/DL-HN-TrangAn2.jpg', 'http://localhost:8080/webdulich/files/DL-HN-TrangAn.jpg', 'http://localhost:8080/webdulich/files/DL-HN-TrangAn1.jpg', 1, NULL, 1),
(25, 'Du Lịch Chùa Bái Đính', 32, 'Du Lịch Chùa Bái Đính', 2, '699000.000', '500000.0000', 3, 'Du-Lich-Chua-Bai-Dinh', 'http://localhost:8080/webdulich/files/DL-ChuaBaiDinh.jpg', 'http://localhost:8080/webdulich/files/DL-ChuaBaiDinh1.jpg', 'http://localhost:8080/webdulich/files/DL-ChuaBaiDinh2.jpg', 0, NULL, 1),
(26, 'Du Lịch Hoa Lư', 32, 'Trải nghiệm tuyệt vời cùng Du Lịch Hoa Lư', 3, '699000.000', '499000.0000', 3, 'Du-Lich-Hoa-Lu', 'http://localhost:8080/webdulich/files/Dl-HoaLu.jpg', 'http://localhost:8080/webdulich/files/Dl-HoaLu1.jpg', 'http://localhost:8080/webdulich/files/Dl-HoaLu2.jpg', 3, NULL, 1),
(27, 'Du Lịch Sapa - Fansipan', 26, 'Du Lịch hè 2017 Miền Bắc -  Đỉnh Fansipang cao 3413m là đỉnh núi kỳ lạ và bí ẩn, nơi đây gió mây hòa quyện với cây rừng có lúc xòe tay ta tưởng đã nắm được mây.', 3, '1500000.000', '1000000.0000', 2, 'Du-Lich-SaPa-Fansipan', 'http://localhost:8080/webdulich/files/DL-SaPa.jpg', 'http://localhost:8080/webdulich/files/DL-SaPa1.jpg', 'http://localhost:8080/webdulich/files/DL-SaPa2.jpg', 0, NULL, 1),
(28, 'Du Lịch Mộc Châu', 35, 'Cao Nguyên Mộc Châu là vùng đất du lịch hiền hòa, khí hậu trong lành, là điểm đến tuyệt vời để du khách có thể thoải mái nghỉ dưỡng sau những ngày dài học tập và lao động mệt mỏi.', 3, '1600000.000', '1200000.0000', 3, 'Du-Lich-Moc-Chau', 'http://localhost:8080/webdulich/files/DL-MocChau.jpg', 'http://localhost:8080/webdulich/files/DL-MocChau1.jpg', 'http://localhost:8080/webdulich/files/DL-MocChau2.jpg', 0, NULL, 1),
(29, 'Du Lịch Buôn Ma Thuột mùa hoa dã quỳ', 34, 'Đến với hành trình Buôn Ma Thuột 3 ngày 2 đêm của công ty Du Lịch Việt du khách sẽ bị hút hồn bởi những cánh đồng cà phê bạt ngàn, những con thác cao ngất hùng vĩ,', 3, '999000.000', '899000.0000', 3, 'Du-Lich-Buon-Ma-Thuat', 'http://localhost:8080/webdulich/files/DL_BuonMaThuat.jpg', 'http://localhost:8080/webdulich/files/DL_BuonMaThuat1.jpg', 'http://localhost:8080/webdulich/files/DL_BuonMaThuat2.jpg', 0, NULL, 1),
(30, 'Du Lịch Huế - Động Thiên Đường', 30, 'Động Thiên Đường là điểm đến cuốn hút khách du lịch suốt bốn mùa. Được mệnh danh là \"hoàng cung trong lòng đất\" Động Thiên Đường là một trong những kỳ quan tráng lệ và huyền ảo bậc nhất thế giới...', 3, '1200000.000', '1000000.0000', 3, 'Du-Lich-Hue-Dong-Thien-Duong', 'http://localhost:8080/webdulich/files/Dl-Hue.jpg', 'http://localhost:8080/webdulich/files/Dl-Hue1.jpg', 'http://localhost:8080/webdulich/files/Dl-HoaLu2%20%281%29.jpg', 2, NULL, 1),
(31, 'Du Lịch Đà Lạt 4 ngày mùa hoa Dã Quỳ 2017', 31, ' Đà Lạt từng được du khách biết đến là Pari thu nhỏ của Việt Nam, là điểm nghỉ dưỡng tuyệt vời cho gia đình...', 3, '1200000.000', '1000000.0000', 3, 'Du-Lich-Da-Lat-Mua-Hoa-Da-Quy', 'http://localhost:8080/webdulich/files/DL-DaLat.jpg', 'http://localhost:8080/webdulich/files/DL-DaLat2.png', 'http://localhost:8080/webdulich/files/DL-DaLat1.jpg', 0, NULL, 1),
(32, 'Tour Nha Trang - Vinpearl - Nhà Thờ Đá 4 ngày', 29, 'Nha Trang là nơi chưa đi thì mong chờ, đến rồi thì lưu luyến và khi vừa rời khỏi đã muốn quay lại” là cảm nhận của du khách khi đến với hành trình du lịch Nha Trang của Du Lịch Việt...', 3, '999000.000', '888000.0000', 4, 'Tour-Nha-trang-Vinpearl-Nha-Tho-Da-4-Ngay', 'http://localhost:8080/webdulich/files/DL-NhaTrang.jpg', 'http://localhost:8080/webdulich/files/DL-NhaTrang1.jpg', 'http://localhost:8080/webdulich/files/DL-NhaTrang2.jpg', 9, NULL, 1),
(33, 'Du Lịch Hà Giang - Quản Bạ - Cao Bằng - Hồ Ba Bể giá tốt', 37, 'Với hành trình 6 ngày 5 đêm dịp hè này, Du Lịch Việt sẽ đưa du khách đến với Hồ Ba Bể - điểm du lịch lý tưởng để du khách tạm rời xa nhưng lo toan nơi chốn thành thị và được hòa mình vào với thiên nhiên hùng vĩ. Thăm Thác Bản Giốc du khách không chỉ được ngắm cảnh, chụp hình mà còn được lênh đênh trên dòng Quây Sơn để ngắm \"tiên cảnh chốn nhân gian\" ...', 6, '2000000.000', '1200000.0000', 6, 'Du-Lich-Ha-Giang-QuanBa-CaoBang-HoBaBe', 'http://localhost:8080/webdulich/files/DL-SonLa.jpg', 'http://localhost:8080/webdulich/files/DL-SonLa1.jpg', 'http://localhost:8080/webdulich/files/DL-SonLa2.jpg', 7, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_detail`
--

CREATE TABLE `tour_detail` (
  `tour_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `Time_start` time NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_detail`
--

INSERT INTO `tour_detail` (`tour_id`, `room_id`, `date_start`, `Time_start`, `status`) VALUES
(26, 3, '2018-03-09', '10:45:00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Chỉ mục cho bảng `book_room`
--
ALTER TABLE `book_room`
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`coment_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`local_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `local_id` (`local_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `coment`
--
ALTER TABLE `coment`
  MODIFY `coment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`pay_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `book_room`
--
ALTER TABLE `book_room`
  ADD CONSTRAINT `book_room_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_room_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `coment`
--
ALTER TABLE `coment`
  ADD CONSTRAINT `coment_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coment_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`local_id`) REFERENCES `locations` (`local_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
