-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Máj 09. 00:40
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `as`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `kep_neve` varchar(255) NOT NULL,
  `leiras` text DEFAULT NULL,
  `meret` int(11) DEFAULT NULL,
  `feltoltve` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `galeria`
--

INSERT INTO `galeria` (`id`, `kep_neve`, `leiras`, `meret`, `feltoltve`) VALUES
(1, '131056076_949308028931716_2983418026461607382_n-980x735.jpg', '', 236877, '2025-05-08 22:44:45'),
(2, '20241221_0907147052-scaled.jpg', '', 689883, '2024-12-21 09:07:15'),
(3, '20241221_0908388522-scaled.jpg', '', 613745, '2024-12-21 09:08:39'),
(4, '20241221_0909509222-scaled.jpg', '', 696971, '2024-12-21 09:09:51'),
(5, '20241221_0912113482-scaled.jpg', '', 514070, '2024-12-21 09:12:11'),
(6, '20241221_0915133932-scaled.jpg', '', 703459, '2024-12-21 09:15:13'),
(7, '20241221_0917018832-scaled.jpg', '', 855541, '2024-12-21 09:17:02'),
(8, '20241221_0919425832-scaled.jpg', '', 600289, '2024-12-21 09:19:42'),
(9, '20241221_0932045002-scaled.jpg', '', 649377, '2024-12-21 09:32:04'),
(10, '20241221_0932277622-scaled.jpg', '', 1083637, '2024-12-21 09:32:28'),
(11, '20241221_1020060742-980x735.jpg', '', 197986, '2024-12-21 10:20:06'),
(12, '20241221_1026598342-scaled.jpg', '', 436377, '2024-12-21 10:27:00'),
(13, '20241221_1211232162-scaled.jpg', '', 598981, '2024-12-21 12:11:23'),
(14, '20250222_1659167002-980x677.jpg', '', 137340, '2025-02-22 16:59:17'),
(15, '20250309_1655302022-scaled.jpg', '', 435578, '2025-03-09 16:55:30'),
(16, '20250309_170611171-scaled.jpg', '', 615170, '2025-03-09 17:06:11'),
(17, '20250319_1654392532-scaled.jpg', '', 324388, '2025-03-19 16:54:39'),
(18, '20250319_1655342833-scaled.jpg', '', 289652, '2025-03-19 16:55:37'),
(19, '20250319_1657077462-scaled.jpg', '', 344821, '2025-03-19 16:57:10'),
(20, '20250319_1802363772-scaled.jpg', '', 651673, '2025-03-19 18:02:37'),
(21, '20250322_1026514562-scaled.jpg', '', 246314, '2025-03-22 10:26:51'),
(22, '20250322_1027004482-scaled.jpg', '', 265011, '2025-03-22 10:27:00'),
(23, '20250322_130538586-scaled.jpg', '', 489696, '2025-03-22 13:05:40'),
(24, '7.jpg', '', 185742, '2025-05-08 22:04:59'),
(25, 'IMG_0399.jpg', '', 1461783, '2024-02-03 11:35:40'),
(26, 'IMG_0489.jpg', '', 1224373, '2024-02-20 18:17:48'),
(27, 'IMG_20171101_144116-1080x675.jpg', '', 230169, '2025-05-08 22:22:46'),
(28, 'IMG_20171125_123411-1080x675.jpg', '', 186814, '2025-05-08 21:08:39'),
(29, 'IMG_20180105_134614-1080x675.jpg', '', 248198, '2025-05-08 22:35:56'),
(30, 'IMG_20180523_114353-1080x675.jpg', '', 131523, '2025-05-08 21:54:23'),
(31, 'IMG_20180530_111725-e1535726753703-1080x675.jpg', '', 135532, '2025-05-08 23:15:55'),
(32, 'IMG_20180606_120005-1080x675.jpg', '', 171817, '2025-05-08 22:32:11'),
(33, 'IMG_20180907_133715_11-1080x675.jpg', '', 243617, '2025-05-08 22:12:46'),
(34, 'IMG_20180913_184819-1080x675.jpg', '', 175588, '2025-05-08 21:25:08'),
(35, 'IMG_20180926_102600-1080x675.jpg', '', 197942, '2025-05-08 21:51:23'),
(36, 'IMG_20181002_135553-1080x675.jpg', '', 186753, '2025-05-08 22:35:51'),
(37, 'IMG_20181116_111751-1080x675.jpg', '', 187925, '2025-05-08 22:35:44'),
(38, 'IMG_20181127_140509-1080x675.jpg', '', 155730, '2025-05-08 22:35:40'),
(39, 'IMG_20181202_082705-1080x675.jpg', '', 161555, '2025-05-08 21:13:13'),
(40, 'IMG_20190221_115624-1080x675.jpg', '', 89862, '2025-05-08 21:21:07'),
(41, 'IMG_20190311_102957-1080x675.jpg', '', 230773, '2025-05-08 22:35:35'),
(42, 'IMG_20190522_132925_1-1080x675.jpg', '', 250375, '2025-05-08 21:25:02'),
(43, 'IMG_20190602_161022-1080x675.jpg', '', 193207, '2025-05-08 22:28:21'),
(44, 'IMG_20190722_143450-1080x675.jpg', '', 315835, '2025-05-08 21:51:18'),
(45, 'IMG_20190914_134846-1080x675.jpg', '', 199162, '2025-05-08 21:13:05'),
(46, 'IMG_20191013_114227-1080x675.jpg', '', 190516, '2025-05-08 22:19:07'),
(47, 'IMG_20191227_140545-980x735.jpg', '', 166172, '2025-05-08 23:15:50'),
(48, 'IMG_20200118_151141-1080x675.jpg', '', 283559, '2025-05-08 22:30:39'),
(49, 'IMG_20200207_140939-1080x675.jpg', '', 347717, '2025-05-08 22:04:49'),
(50, 'IMG_20200328_140544-980x735.jpg', '', 255820, '2025-05-08 23:13:47'),
(51, 'IMG_20200515_104405-1080x675.jpg', '', 187118, '2025-05-08 22:22:41'),
(52, 'IMG_20200516_155031-980x735.jpg', '', 247356, '2025-05-08 22:44:55'),
(53, 'IMG_20200517_181835-980x735.jpg', '', 262459, '2025-05-08 22:45:00'),
(54, 'IMG_20200713_164547-1080x675.jpg', '', 216987, '2025-05-08 22:04:43'),
(55, 'IMG_20200728_113517-980x735.jpg', '', 264880, '2025-05-08 22:35:30'),
(56, 'IMG_20200925_090716-1080x675.jpg', '', 165600, '2025-05-08 21:57:38'),
(57, 'IMG_20201014_125642-1080x675.jpg', '', 169121, '2025-05-08 21:57:34'),
(58, 'IMG_20201106_070508-01-1080x675.jpg', '', 202574, '2025-05-08 22:19:02'),
(59, 'IMG_20201113_073717-1080x675.jpg', '', 216642, '2025-05-08 22:18:57'),
(60, 'IMG_20210123_081526-980x735.jpg', '', 230706, '2025-05-08 22:44:50'),
(61, 'IMG_20210205_161324-01-1080x675.jpg', '', 252619, '2025-05-08 21:30:54'),
(62, 'IMG_20210221_081952-1080x675.jpg', '', 188974, '2025-05-08 21:57:29'),
(63, 'IMG_20210410_144016-1080x675.jpg', '', 175229, '2025-05-08 21:30:31'),
(64, 'IMG_20210503_181209-980x735.jpg', '', 168419, '2025-05-08 22:44:36'),
(65, 'IMG_20210530_102228-980x735.jpg', '', 141140, '2025-05-08 22:44:40'),
(66, 'IMG_20210819_210020-1080x675.jpg', '', 38489, '2025-05-08 21:30:40'),
(67, 'IMG_20211019_132620-1080x675.jpg', '', 166811, '2025-05-08 22:28:15'),
(68, 'IMG_20211204_075431-1080x675.jpg', '', 196177, '2025-05-08 21:57:24'),
(69, 'IMG_20220127_130009-1080x675.jpg', '', 211220, '2025-05-08 21:57:19'),
(70, 'IMG_20220224_102728-1080x675.jpg', '', 158354, '2025-05-08 22:04:38'),
(71, 'IMG_20220505_142625-1080x675.jpg', '', 104941, '2025-05-08 22:04:32'),
(72, 'IMG_20220510_100605-1080x675.jpg', '', 152896, '2025-05-08 21:05:46'),
(73, 'IMG_20220622_065552-1080x675.jpg', '', 123663, '2025-05-08 22:22:35'),
(74, 'Karacsony-1080x675.jpg', '', 190848, '2025-05-08 21:30:18'),
(75, 'Kep1-936x675.jpg', '', 76917, '2025-05-08 17:57:13'),
(76, 'Kep1.jpg', '', 96474, '2025-05-08 15:41:41'),
(77, 'ganzo_1.jpg', '', 202500, '2025-05-08 22:15:49'),
(78, 'girl-3528292_1920-1080x675.jpg', '', 178785, '2025-05-08 21:30:44'),
(79, 'img_20170406_165027.jpg', '', 1408536, '2025-05-08 22:32:17'),
(80, 'img_20170509_105803.jpg', '', 230682, '2025-05-08 21:25:14'),
(81, 'img_20170518_100701.jpg', '', 208827, '2025-05-08 23:18:33'),
(82, 'img_20170730_060234.jpg', '', 120810, '2025-05-08 22:15:44'),
(83, 'img_20170909_1218251.jpg', '', 224655, '2025-05-08 23:10:51'),
(84, 'img_20170921_143323.jpg', '', 163767, '2025-05-08 22:26:10'),
(85, 'img_20171117_103000.jpg', '', 186307, '2025-05-08 21:21:20'),
(86, 'img_20171205_145026.jpg', '', 157818, '2025-05-08 22:42:22'),
(87, 'img_20171217_124606.jpg', '', 475385, '2025-05-08 22:04:54'),
(88, 'img_20180123_093346.jpg', '', 161228, '2025-05-08 23:10:46'),
(89, 'img_20180201_090054.jpg', '', 133542, '2025-05-08 22:12:51'),
(90, 'img_20180417_115703.jpg', '', 321723, '2025-05-08 23:08:37'),
(91, 'kep2.jpg', '', 166907, '2025-05-08 15:45:37'),
(92, 'kep3.jpg', '', 242822, '2025-05-08 15:52:05'),
(93, 'kep4.jpg', '', 220625, '2025-05-08 15:54:30'),
(94, 'kep5.jpg', '', 190584, '2025-05-08 15:57:50'),
(95, 'kep6.jpg', '', 230735, '2025-05-08 16:00:25'),
(96, 'kep_10.jpg', '', 139044, '2025-05-08 18:20:23'),
(97, 'kep_2.jpg', '', 116163, '2025-05-08 17:59:23'),
(98, 'kep_3.jpg', '', 115331, '2025-05-08 18:02:53'),
(99, 'kep_4.jpg', '', 108769, '2025-05-08 18:06:59'),
(100, 'kep_5.jpg', '', 35186, '2025-05-08 18:09:52'),
(101, 'kep_6.jpg', '', 230102, '2025-05-08 18:13:12'),
(102, 'kep_7.jpg', '', 375519, '2025-05-08 18:16:14'),
(103, 'kep_9.jpg', '', 140573, '2025-05-08 18:18:16'),
(104, 'logo_nagy.jpg', '', 70526, '2025-05-07 09:54:32'),
(105, 'logo_nagy_feher.jpg', '', 87898, '2025-05-07 09:54:44'),
(106, 'logo_nagy_ives.jpg', '', 112445, '2025-05-07 09:54:54'),
(107, 'logo_nagy_ives_feher.jpg', '', 124123, '2025-05-07 09:55:03'),
(108, 'notepad-1130743_1920-1080x675.jpg', '', 90409, '2025-05-08 21:30:50'),
(109, 'IMG_0601.jpeg', '', 1516454, '2024-01-13 16:18:47'),
(110, 'IMG_0867-scaled.jpeg', '', 475389, '2025-05-08 14:29:04'),
(111, 'IMG_0870.jpeg', '', 102975, '2025-05-08 15:28:29'),
(112, 'IMG_0871.jpeg', '', 51552, '2025-05-08 15:04:42'),
(113, 'IMG_0873-scaled.jpeg', '', 1089169, '2025-05-08 14:38:54'),
(114, 'IMG_1630-scaled.jpeg', '', 821860, '2025-05-07 19:56:27'),
(115, 'IMG_1631-scaled.jpeg', '', 612410, '2025-05-07 19:24:43'),
(116, 'IMG_1632-scaled.jpeg', '', 796626, '2025-05-07 19:33:59'),
(117, 'IMG_1633-scaled.jpeg', '', 1040215, '2025-05-07 19:41:29'),
(118, 'IMG_1634-scaled.jpeg', '', 740413, '2025-05-07 19:51:12'),
(119, 'IMG_1635-scaled.jpeg', '', 724057, '2025-05-07 20:00:11'),
(120, 'IMG_1636-scaled.jpeg', '', 889129, '2025-05-07 19:31:17'),
(121, 'IMG_1637-scaled.jpeg', '', 657421, '2025-05-07 19:45:53'),
(122, 'IMG_1638-scaled.jpeg', '', 1210668, '2025-05-07 19:51:18'),
(123, 'IMG_1639-scaled.jpeg', '', 1046149, '2025-05-07 19:36:48'),
(124, 'IMG_1814.jpeg', '', 33411, '2025-05-08 20:04:29'),
(125, 'IMG_1886.jpeg', '', 298983, '2025-05-07 18:15:20'),
(126, 'IMG_1887.jpeg', '', 34243, '2025-05-07 17:40:57'),
(127, 'IMG_1888.jpeg', '', 30616, '2025-05-07 17:41:24'),
(128, 'IMG_1892-980x653.jpeg', '', 226048, '2025-05-07 17:35:41'),
(129, 'IMG_1893.jpeg', '', 1187048, '2025-05-07 18:10:10'),
(130, 'IMG_1894.jpeg', '', 1086809, '2025-05-07 17:36:39'),
(131, 'IMG_1895-scaled.jpeg', '', 618099, '2025-05-07 17:47:30'),
(132, 'IMG_1896.jpeg', '', 1084549, '2025-05-07 17:47:17'),
(133, 'IMG_1897.jpeg', '', 2416975, '2025-05-07 17:36:44'),
(134, 'IMG_1898-scaled.jpeg', '', 652783, '2025-05-07 17:56:07'),
(135, 'IMG_1899-scaled.jpeg', '', 665620, '2025-05-07 18:10:06'),
(136, 'IMG_1900-scaled.jpeg', '', 762456, '2025-05-07 17:36:49'),
(137, 'IMG_1901-scaled.jpeg', '', 679674, '2025-05-07 17:56:02'),
(138, 'IMG_1903-scaled.jpeg', '', 685786, '2025-05-07 18:10:15'),
(139, 'IMG_1904-scaled.jpeg', '', 1274276, '2025-05-07 18:10:20'),
(140, 'IMG_1905-scaled.jpeg', '', 714724, '2025-05-07 17:56:12'),
(141, 'IMG_2100-980x703.jpeg', '', 150502, '2025-05-07 16:45:40'),
(142, 'IMG_2101-scaled.jpeg', '', 1232010, '2025-05-07 16:56:45'),
(143, 'IMG_2102-scaled.jpeg', '', 735192, '2025-05-07 17:00:38'),
(144, 'IMG_2103-scaled.jpeg', '', 1163499, '2025-05-07 17:18:46'),
(145, 'IMG_2104-scaled.jpeg', '', 764997, '2025-05-07 17:06:32'),
(146, 'IMG_2105-scaled.jpeg', '', 868298, '2025-05-07 17:22:11'),
(147, 'IMG_2106-scaled.jpeg', '', 1220827, '2025-05-07 17:13:30'),
(148, 'IMG_2107.jpeg', '', 125205, '2025-05-07 16:51:10'),
(149, 'IMG_2113-980x561.jpeg', '', 168939, '2025-05-08 17:12:55'),
(150, 'IMG_2114.jpeg', '', 981590, '2025-05-08 17:48:52'),
(151, 'IMG_2213.jpeg', '', 2230209, '2024-12-09 19:09:08'),
(152, 'IMG_2214.jpeg', '', 1717538, '2024-12-09 19:12:07'),
(153, 'IMG_2248.jpeg', '', 458449, '2025-05-08 17:41:18'),
(154, 'IMG_2250.jpeg', '', 389889, '2025-05-08 17:35:09'),
(155, 'IMG_2257.jpeg', '', 306005, '2025-05-08 17:30:27'),
(156, 'IMG_2260.jpeg', '', 730012, '2025-05-08 17:45:23'),
(157, 'IMG_2261.jpeg', '', 1025138, '2025-05-08 17:45:33'),
(158, 'IMG_2262.jpeg', '', 1144711, '2025-05-08 17:45:28'),
(159, 'IMG_2263.jpeg', '', 529328, '2025-05-08 17:20:41'),
(160, 'IMG_2264.jpeg', '', 388067, '2025-05-08 17:48:56'),
(161, 'IMG_2265.jpeg', '', 456457, '2025-05-08 17:35:14'),
(162, 'IMG_2267.jpeg', '', 919723, '2025-05-08 17:39:00'),
(163, 'IMG_2421.jpeg', '', 1304708, '2025-04-06 16:29:56'),
(164, 'IMG_2476.jpeg', '', 1859560, '2025-04-11 12:49:41'),
(165, 'IMG_2477.jpeg', '', 1687178, '2025-04-11 13:00:14'),
(166, 'IMG_2478.jpeg', '', 1446324, '2025-04-11 13:18:05'),
(167, 'IMG_2480.jpeg', '', 2318428, '2025-04-11 14:13:18'),
(168, 'IMG_2481.jpeg', '', 2204381, '2025-04-11 14:13:27'),
(169, 'IMG_2503.jpeg', '', 2188949, '2025-04-15 17:39:26'),
(170, 'IMG_2504.jpeg', '', 1034276, '2025-04-15 17:43:58'),
(171, 'IMG_2505.jpeg', '', 1419152, '2025-04-15 17:45:51'),
(172, 'IMG_2506.jpeg', '', 1473026, '2025-04-15 17:46:56'),
(173, 'IMG_2507.jpeg', '', 2898280, '2025-04-15 17:55:12'),
(174, 'IMG_2508.jpeg', '', 2318018, '2025-04-15 17:57:57'),
(175, 'IMG_2509.jpeg', '', 1700871, '2025-04-15 17:58:43'),
(176, 'IMG_2511.jpeg', '', 2008251, '2025-04-15 18:01:51'),
(177, 'IMG_2512.jpeg', '', 1174960, '2025-04-15 17:47:52'),
(178, 'IMG_2513.jpeg', '', 1942384, '2025-04-15 19:06:35'),
(179, 'IMG_2549-980x626.jpeg', '', 98946, '2025-04-11 12:45:29'),
(180, 'IMG_0912.png', '', 1770470, '2025-05-08 15:19:55');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
