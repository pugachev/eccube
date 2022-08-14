-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 8 月 14 日 08:16
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `eccubedb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_customer`
--

CREATE TABLE `dtb_customer` (
  `customer_id` int(11) NOT NULL,
  `name01` text NOT NULL,
  `name02` text NOT NULL,
  `kana01` text DEFAULT NULL,
  `kana02` text DEFAULT NULL,
  `company_name` text DEFAULT NULL,
  `zip01` text DEFAULT NULL,
  `zip02` text DEFAULT NULL,
  `zipcode` text DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `pref` smallint(6) DEFAULT NULL,
  `addr01` text DEFAULT NULL,
  `addr02` text DEFAULT NULL,
  `email` text NOT NULL,
  `email_mobile` text DEFAULT NULL,
  `tel01` text DEFAULT NULL,
  `tel02` text DEFAULT NULL,
  `tel03` text DEFAULT NULL,
  `fax01` text DEFAULT NULL,
  `fax02` text DEFAULT NULL,
  `fax03` text DEFAULT NULL,
  `sex` smallint(6) DEFAULT NULL,
  `job` smallint(6) DEFAULT NULL,
  `birth` datetime DEFAULT NULL,
  `password` text DEFAULT NULL,
  `reminder` smallint(6) DEFAULT NULL,
  `reminder_answer` text DEFAULT NULL,
  `salt` text DEFAULT NULL,
  `secret_key` text NOT NULL,
  `first_buy_date` datetime DEFAULT NULL,
  `last_buy_date` datetime DEFAULT NULL,
  `buy_times` decimal(10,0) DEFAULT 0,
  `buy_total` decimal(10,0) DEFAULT 0,
  `point` decimal(10,0) NOT NULL DEFAULT 0,
  `note` text DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `mobile_phone_id` text DEFAULT NULL,
  `mailmaga_flg` smallint(6) DEFAULT NULL,
  `nick_name` text DEFAULT NULL,
  `house_id` smallint(6) DEFAULT NULL,
  `dm_id` smallint(6) DEFAULT NULL,
  `bijin_id` smallint(6) DEFAULT NULL,
  `married_id` smallint(1) DEFAULT 1,
  `save_main_image` text DEFAULT NULL,
  `temp_main_image` text DEFAULT NULL,
  `image_key` text DEFAULT NULL,
  `main_image` text DEFAULT NULL,
  `filepath` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_customer`
--

INSERT INTO `dtb_customer` (`customer_id`, `name01`, `name02`, `kana01`, `kana02`, `company_name`, `zip01`, `zip02`, `zipcode`, `country_id`, `pref`, `addr01`, `addr02`, `email`, `email_mobile`, `tel01`, `tel02`, `tel03`, `fax01`, `fax02`, `fax03`, `sex`, `job`, `birth`, `password`, `reminder`, `reminder_answer`, `salt`, `secret_key`, `first_buy_date`, `last_buy_date`, `buy_times`, `buy_total`, `point`, `note`, `status`, `create_date`, `update_date`, `del_flg`, `mobile_phone_id`, `mailmaga_flg`, `nick_name`, `house_id`, `dm_id`, `bijin_id`, `married_id`, `save_main_image`, `temp_main_image`, `image_key`, `main_image`, `filepath`) VALUES
(16, '竹谷学', '竹谷学', 'タケタニ', 'マナブ', NULL, '651', '1111', NULL, 392, 1, '西区', '神戸市', 'pugachev2011@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, '4927d6d147dc591d2fca8932193e057315e9e4206b56400b5c491af292a40ddc', 1, '0eeae4e497fae22e5e5ecc20d5944a33c951ada5dcaba3cc033bab7b356148d6', '99a8370b80', 'r62f88d8cbe544Adaevmd2', NULL, NULL, '0', '0', '123', NULL, 2, '2022-08-14 05:52:12', '2022-08-14 05:52:12', 0, NULL, 3, 'test', NULL, 2, 3, 2, NULL, 'makino.jpg', 'main_image', NULL, NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `dtb_customer`
--
ALTER TABLE `dtb_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `secret_key` (`secret_key`(255)),
  ADD KEY `dtb_customer_mobile_phone_id_key` (`mobile_phone_id`(255));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
