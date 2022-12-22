-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2022 at 01:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom08`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'DAREU'),
(4, 'Assus'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL,
  `note` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `pro_id`, `pro_name`, `quantity`, `address`, `phone`, `status`, `total`, `note`, `date_create`) VALUES
(40, 16, 1, 'Iphone 12', 1, 'sssssss', '1241241', 1, 10000, '', '2022-12-22 12:36:05'),
(39, 16, 1, 'Iphone 12', 1, 'sssssss', '1241241', 1, 10000, '', '2022-12-01 13:46:30'),
(41, 16, 1, 'Iphone 12', 1, 'sssssss', '1241241', 1, 10000, '', '2022-12-22 12:37:53'),
(42, 16, 1, 'Iphone 12', 1, 'sssssss', '1241241', 1, 10000, '', '2022-12-22 12:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Iphone 12', 1, 1, 10000000, 'iphone12.jpg', 'iPhone 12 Series là một trong 4 phiên bản trong dòng sản phẩm năm nay Apple ra mắt, với kích thước 6.1 inch được xem là kế thừa cho mẫu điện thoại rất thành công trước đó của nhà Táo là iPhone 11. Dù không đắt như bản Pro nhưng iPhone 12 cũng có mức giá khá cao, tuy nhiên bạn có thể sở hữu một thiết bị này với chất lượng và tính năng y hệt với giá \'mềm\' hơn dưới hình thức iPhone 12 cũ. Ngoài giá cả hấp dẫn chúng ta cũng có nhiều lý do khác để mua iPhone đã qua sử dụng, hãy cùng tìm hiểu nhé!', 1, '2022-10-10 13:13:21'),
(2, 'AirPods 3', 1, 3, 4000000, 'airpods-3_800x430.jpg', 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3 Trắng sở hữu thiết kế gọn nhẹ, màu sắc trang nhã cùng nhiều công nghệ hiện đại đang chờ đón các iFan như: kết nối Bluetooth, Adaptive EQ, Chip Apple H1,...', 1, '2022-10-28 21:11:55'),
(19, 'test1', 1, 1, 22222, 'tiger_laying_hero_background.jpg', '<p>sssssssssssssssssssssssssssssssssss</p>', 1, '2022-12-22 13:52:59'),
(11, 'Laptop Asus ROG Strix Gaming ', 4, 2, 18000000, 'LapTopAsusrogstrix.jpg', 'CPU:\r\n\r\nRyzen 74800H2.9GHz\r\nRAM:\r\n\r\n8 GBDDR4 2 khe (1 khe 8 GB + 1 khe rời)3200 MHz\r\nỔ cứng:\r\n\r\n512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)\r\nMàn hình:\r\n\r\n15.6\"Full HD (1920 x 1080) 144Hz\r\nCard màn hình:\r\n\r\nCard rờiGTX 1650 4GB\r\nCổng kết nối:\r\n\r\nLAN (RJ45)USB Type-C (Power Delivery and DisplayPort)HDMI3x Type-A USB 3.2 Gen 1Jack tai nghe 3.5 mm\r\nĐặc biệt:\r\n\r\nCó đèn bàn phím\r\nHệ điều hành:\r\n\r\nWindows 11 Home SL\r\nThiết kế:\r\n\r\nVỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, khối lượng:\r\n\r\nDài 354 mm - Rộng 259 mm - Dày 20.6 mm - Nặng 2.1 kg\r\nThời điểm ra mắt:\r\n\r\n2021', 1, '2022-06-14 04:32:30'),
(15, 'Chuột không dây Xiaomi Mi Dual Mode Wireless', 5, 5, 100000, 'ChuotXiaomiMiDualModeWireless.jpg', 'Loại chuột	Chuột không dây\r\nKiểu kết nối	Bluetooth, Wifi\r\nĐộ phân giải chuột	1300 dpi\r\nThương hiệu	Xiaomi\r\nXuất xứ	Trung Quốc\r\nThời gian bảo hành (tháng)	6', 0, '2020-10-11 04:46:00'),
(16, 'Xiaomi Redmibook 15 - JYU4506AP- i5-11300H', 5, 2, 13000000, 'redmibook_2.png', 'RAM	8GB\r\nỔ cứng:	512GB\r\nMàn hình\r\nKích thước màn hình	Display Type: 15.6\" FHD Resolution: 1,920 x 1,080 PPI: 141 Brightness Control: DC Dimming Brightness: 220 nits (typ) Contrast ratio: 500:1 Color gamut: NTSC 45% (typ) Viewing angle: 90°(H)\r\nĐồ họa và Âm thanh\r\nCard màn hình:	\r\nIntel® UHD graphics\r\n11th Generation Intel® CoreTM i5\r\nCổng kết nối & tính năng mở rộng\r\nCổng giao tiếp:	HDMI 1.4 x 1 USB 3.2 Gen 1 x 2, USB 2.0 x1 Kensington lock: Yes Ethernet (Lan) :RJ45 Optical Digital Audio Out: Yes 3.5mm headphone jack x 1 SD slot: SD 3.0\r\nKết nối không dây:	Bluetooth 5.0 Wi-Fi 5 2.4GHz/5GHz\r\nThông tin khác\r\nThông tin Pin:	46Wh\r\nKích thước & trọng lượng\r\nKích thước, trọng lượng:	\r\nDimensions Product dimensions (L x W x H): 363.8 x 243.5 x 19.9mm Packing size (L x W x H): 504 x 329 x 80mm\r\nWeight Product weight: 1.8kg Packing weight: 2.7kg', 1, '2020-10-11 04:49:17'),
(13, 'Điện thoại Samsung Galaxy M33 5G', 2, 1, 60000000, 'SamsungGalaxyM335g.jpg', 'Màn hình:\r\n\r\nTFT LCD6.6\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 12\r\nCamera sau:\r\n\r\nChính 50 MP & Phụ 5 MP, 2 MP, 2 MP\r\nCamera trước:\r\n\r\n8 MP\r\nChip:\r\n\r\nExynos 1280\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nSIM:\r\n\r\n2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n5000 mAh25 W', 0, '2022-10-18 04:39:45'),
(14, 'Điện thoại Samsung Galaxy A33 5G 6GB', 2, 1, 8000000, 'SamsungGalaxyA33_5g.jpg', 'Màn hình:\r\n\r\nSuper AMOLED6.4\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 12\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 8 MP, 5 MP, 2 MP\r\nCamera trước:\r\n\r\n13 MP\r\nChip:\r\n\r\nExynos 1280\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nSIM:\r\n\r\n2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 5G\r\nPin, Sạc:\r\n\r\n5000 mAh25 W', 1, '2021-10-10 04:41:19'),
(12, 'Tai nghe chụp tai ROG Strix Wireless', 4, 3, 20000000, 'TaiNgheChupTaiRogStrixWireless1.jpg', 'Tương thích:\r\n\r\nWindows Phone\r\n\r\nAndroid\r\n\r\niOS (iPhone)\r\n\r\nĐộ dài dây:\r\n\r\n1.5 m\r\nKết nối cùng lúc:\r\n\r\n1 thiết bị\r\nPhím điều khiển:\r\n\r\nMic thoại\r\n\r\nPhát/dừng chơi nhạc\r\n\r\nChuyển bài hát\r\n\r\nTăng/giảm âm lượng\r\n\r\nNghe/nhận cuộc gọi', 0, '2022-07-19 04:37:04'),
(17, '\r\nBàn phím cơ DareU EK87 Mutiled Blue Switch', 3, 4, 2000000, '40315_dareu_ek87__multi_led__ha2.jpg', '- Kiểu: Bàn phím cơ \r\n- Kiểu kết nối: Có dây\r\n- Switch: Red D switch\r\n- Kích thước: Tenkeyless', 1, '2021-10-05 04:53:19'),
(18, 'Bà̀n phím giả cơ Dareu LK160 Gaming', 3, 4, 40000002, 'BanPhimGiaCoDareu.webp', 'Bà̀n phím giả cơ\r\n- Kết nối USB 2.0\r\n- Kiểu switch Membrane', 1, '2022-12-22 13:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'điện thoại'),
(2, 'Lap Top'),
(3, 'Tai Nghe'),
(4, 'Bàn Phím'),
(5, 'Chuột');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL,
  `Sell_number` int(11) NOT NULL,
  `Import_quantity` int(11) NOT NULL,
  `Import_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `First_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `image`, `First_name`, `Last_name`, `phone`, `username`, `password`, `role_id`) VALUES
(15, NULL, 'tran', 'nham', 12414124, 'nhamminhlap', '202cb962ac59075b964b07152d234b70', 1),
(16, NULL, 'nham', 'sang', 1241241, 'nham', '202cb962ac59075b964b07152d234b70', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
