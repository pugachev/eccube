-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 8 月 11 日 23:45
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
  `filepath` text DEFAULT NULL,
  `main_list_image` text DEFAULT NULL,
  `save_main_list_image` text DEFAULT NULL,
  `save_main_image` text DEFAULT NULL,
  `save_main_large_image` text DEFAULT NULL,
  `temp_main_list_image` text DEFAULT NULL,
  `temp_main_image` text DEFAULT NULL,
  `temp_main_large_image` text DEFAULT NULL,
  `some_input` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_customer`
--

INSERT INTO `dtb_customer` (`customer_id`, `name01`, `name02`, `kana01`, `kana02`, `company_name`, `zip01`, `zip02`, `zipcode`, `country_id`, `pref`, `addr01`, `addr02`, `email`, `email_mobile`, `tel01`, `tel02`, `tel03`, `fax01`, `fax02`, `fax03`, `sex`, `job`, `birth`, `password`, `reminder`, `reminder_answer`, `salt`, `secret_key`, `first_buy_date`, `last_buy_date`, `buy_times`, `buy_total`, `point`, `note`, `status`, `create_date`, `update_date`, `del_flg`, `mobile_phone_id`, `mailmaga_flg`, `nick_name`, `house_id`, `dm_id`, `bijin_id`, `married_id`, `filepath`, `main_list_image`, `save_main_list_image`, `save_main_image`, `save_main_large_image`, `temp_main_list_image`, `temp_main_image`, `temp_main_large_image`, `some_input`) VALUES
(2, '宇垣', '美里', 'ウガキ', 'ミサト', NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎通り1-2-3', 'ugaki@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, '9b2357713962fe1ec8aed92cf458d56276d941d3042ab6e6de8552f72d330200', 1, 'f588543c04ad05a9eceb2287fc38f2f749e4161fc74e6b4d7f5517b212e5dd67', 'c57cbe2935', 'r62d2c1fa6abba4GX5WfM4', '2022-07-24 20:03:13', '2022-07-24 20:03:13', '1', '1324', '300', NULL, 2, '2022-07-16 13:49:46', '2022-07-18 11:28:26', 0, NULL, 3, 'うがみ', 2, 2, 3, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, '相場', '詩織', 'アイバ', 'シオリ', NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎通1-3-5', 'aiba@gmail.com', NULL, '080', '1111', '2222', NULL, NULL, NULL, 2, NULL, NULL, 'a3b5fd2cd52258a47c613fb9ab7fb465217f6cfb65752951c4ae7082e4064c28', 1, '15d906d6f9937a2c838ab00984324acb1db33fe9c37feb1af6c562d26e67f4ba', '561d483c1f', 'r62d534b2403act6XnuTHf', NULL, NULL, '0', '0', '2000', '美人さんです', 2, '2022-07-18 10:23:46', '2022-07-18 11:28:40', 0, NULL, 3, 'しおりん', 3, 1, 3, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '加藤', '綾子', 'カトウ', 'アヤコ', 'フリーランサー', '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎通1-2-3', 'katopan@gmail.com', NULL, '080', '1111', '2222', NULL, NULL, NULL, 2, 15, NULL, '3e584e0242ba3447728d29f72bc711693538b84e74a15f0dea29a4e52cc3c145', 7, '6e5c1f61c0cc3b95c21443c7ffc39ff8b48713d1fff2b8923c8a1bde596d9938', '7eef80dc20', 'r62e5027c6a844T5CKsVxs', NULL, NULL, '0', '0', '2000', NULL, 2, '2022-07-30 10:05:48', '2022-08-03 10:44:43', 0, NULL, 3, 'カトパン', NULL, 2, 2, 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, '相場', '詩織2', 'アイバ', 'シオリ', NULL, '067', '0000', NULL, 392, 1, '札幌市', '1-2-3', 'aiba2@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, '8bb6985725e49e89526f1b8904769ddd699a5f41f700aaa47212bc1885d83d8f', 7, '4bc8242835c5e877218ed828046a1c319e65dac874eda73540af33c047e9261b', 'b4c71b32da', 'r62eee1af401e7fTy7Khyq', NULL, NULL, '0', '0', '3000', NULL, 2, '2022-08-06 21:48:31', '2022-08-06 21:48:31', 0, NULL, 3, 'しおりん', NULL, 2, 3, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, '竹谷', '学', 'タケタニ', 'マナブ', NULL, '651', '0807', NULL, 392, 1, '西区', '神戸市', 'pugachev2011@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, '8974b82af71de3acb48bf19bb60d643bc0f59d74c9c6b58e03faa1ce98d21161', 1, '880d751cccca61a07d3d1fe71d54cf5ea795e76a9d30689333b7ce0da5c4ae3e', 'a9497a7158', 'r62f51a5f5e09fafMsz9d3', NULL, NULL, '0', '0', '123', NULL, 2, '2022-08-11 15:03:59', '2022-08-11 15:03:59', 0, NULL, 3, 'test', NULL, 2, 3, 2, '/eccube/html/upload/temp_image/08112353_62f517da7cfc5.jpg', NULL, NULL, NULL, NULL, '08112353_62f517da7cfc5.jpg', NULL, NULL, NULL);

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
