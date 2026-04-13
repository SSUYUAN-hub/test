-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `people`
--

-- --------------------------------------------------------

--
-- 資料表結構 `peopleinfo`
--

CREATE TABLE `peopleinfo` (
  `name` varchar(15) NOT NULL,
  `id` varchar(20) NOT NULL,
  `inc` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(20) NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `peopleinfo`
--

INSERT INTO `peopleinfo` (`name`, `id`, `inc`, `birthday`, `sex`, `address`) VALUES
('王大明', 'A123456789', '資三甲', '2024-01-30', '女生', '地球村防衛部        '),
('陳小華', 'B223645678', '資二甲', '2023-11-01', '女生', '地球村春日部'),
('陳一二', 'B456789132', '資三甲', '2020-11-30', '男生', '博愛路100號        ');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `peopleinfo`
--
ALTER TABLE `peopleinfo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
