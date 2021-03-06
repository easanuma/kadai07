-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 06 日 08:35
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accounting_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `accounting_db_01`
--

CREATE TABLE IF NOT EXISTS `accounting_db_01` (
`id` int(12) NOT NULL,
  `tourokubi` date NOT NULL,
  `syuueki` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `syuuekihozyo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `syuuekikingaku` int(20) DEFAULT NULL,
  `gennka` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gennkahozyo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gennkakingaku` int(20) DEFAULT NULL,
  `hiyou` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hiyouhozyo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hiyoukingaku` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `accounting_db_01`
--

INSERT INTO `accounting_db_01` (`id`, `tourokubi`, `syuueki`, `syuuekihozyo`, `syuuekikingaku`, `gennka`, `gennkahozyo`, `gennkakingaku`, `hiyou`, `hiyouhozyo`, `hiyoukingaku`) VALUES
(22, '2017-10-02', '', '', 0, '', '', 0, '福利厚生費', '未払金', 50000),
(23, '2017-10-03', '', '', 0, '', '', 0, '旅費交通費', '未払金', 50000),
(24, '2017-10-03', '', '', 0, '', '', 0, '旅費交通費', '未払金', 50000),
(25, '2017-10-03', '', '', 0, '', '', 0, '旅費交通費', '未払金', 50000),
(26, '2017-10-03', '', '', 0, '', '', 0, '福利厚生費', '未払金', 50000),
(27, '2017-10-03', '', '', 0, '', '', 0, '福利厚生費', '未払金', 50000),
(28, '2017-10-03', '', '', 0, '', '', 0, '福利厚生費', '未払金', 50000),
(29, '2017-10-02', '', '', 0, '', '', 0, '通信費', '未払金', 50000),
(30, '2017-10-01', '', '', 0, '', '', 0, '水道光熱費', '未払金', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_db_01`
--
ALTER TABLE `accounting_db_01`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_db_01`
--
ALTER TABLE `accounting_db_01`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
