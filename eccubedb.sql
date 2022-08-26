-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 8 月 26 日 15:48
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
-- テーブルの構造 `dtb_api_account`
--

CREATE TABLE `dtb_api_account` (
  `api_account_id` int(11) NOT NULL,
  `api_access_key` text NOT NULL,
  `api_secret_key` text NOT NULL,
  `enable` smallint(6) NOT NULL DEFAULT 0,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_api_account_api_account_id_seq`
--

CREATE TABLE `dtb_api_account_api_account_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_api_config`
--

CREATE TABLE `dtb_api_config` (
  `api_config_id` int(11) NOT NULL,
  `operation_name` text NOT NULL,
  `operation_description` text DEFAULT NULL,
  `auth_types` text NOT NULL,
  `enable` smallint(6) NOT NULL DEFAULT 0,
  `is_log` smallint(6) NOT NULL DEFAULT 0,
  `sub_data` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_api_config_api_config_id_seq`
--

CREATE TABLE `dtb_api_config_api_config_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_baseinfo`
--

CREATE TABLE `dtb_baseinfo` (
  `id` int(11) NOT NULL,
  `company_name` text DEFAULT NULL,
  `company_kana` text DEFAULT NULL,
  `zip01` text DEFAULT NULL,
  `zip02` text DEFAULT NULL,
  `zipcode` text DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `pref` smallint(6) DEFAULT NULL,
  `addr01` text DEFAULT NULL,
  `addr02` text DEFAULT NULL,
  `tel01` text DEFAULT NULL,
  `tel02` text DEFAULT NULL,
  `tel03` text DEFAULT NULL,
  `fax01` text DEFAULT NULL,
  `fax02` text DEFAULT NULL,
  `fax03` text DEFAULT NULL,
  `business_hour` text DEFAULT NULL,
  `law_company` text DEFAULT NULL,
  `law_manager` text DEFAULT NULL,
  `law_zip01` text DEFAULT NULL,
  `law_zip02` text DEFAULT NULL,
  `law_zipcode` text DEFAULT NULL,
  `law_country_id` int(11) DEFAULT NULL,
  `law_pref` smallint(6) DEFAULT NULL,
  `law_addr01` text DEFAULT NULL,
  `law_addr02` text DEFAULT NULL,
  `law_tel01` text DEFAULT NULL,
  `law_tel02` text DEFAULT NULL,
  `law_tel03` text DEFAULT NULL,
  `law_fax01` text DEFAULT NULL,
  `law_fax02` text DEFAULT NULL,
  `law_fax03` text DEFAULT NULL,
  `law_email` text DEFAULT NULL,
  `law_url` text DEFAULT NULL,
  `law_term01` text DEFAULT NULL,
  `law_term02` text DEFAULT NULL,
  `law_term03` text DEFAULT NULL,
  `law_term04` text DEFAULT NULL,
  `law_term05` text DEFAULT NULL,
  `law_term06` text DEFAULT NULL,
  `law_term07` text DEFAULT NULL,
  `law_term08` text DEFAULT NULL,
  `law_term09` text DEFAULT NULL,
  `law_term10` text DEFAULT NULL,
  `email01` text DEFAULT NULL,
  `email02` text DEFAULT NULL,
  `email03` text DEFAULT NULL,
  `email04` text DEFAULT NULL,
  `free_rule` decimal(10,0) DEFAULT NULL,
  `shop_name` text DEFAULT NULL,
  `shop_kana` text DEFAULT NULL,
  `shop_name_eng` text DEFAULT NULL,
  `point_rate` decimal(10,0) NOT NULL DEFAULT 0,
  `welcome_point` decimal(10,0) NOT NULL DEFAULT 0,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `top_tpl` text DEFAULT NULL,
  `product_tpl` text DEFAULT NULL,
  `detail_tpl` text DEFAULT NULL,
  `mypage_tpl` text DEFAULT NULL,
  `good_traded` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `regular_holiday_ids` text DEFAULT NULL,
  `latitude` text DEFAULT NULL,
  `longitude` text DEFAULT NULL,
  `downloadable_days` decimal(10,0) DEFAULT 30,
  `downloadable_days_unlimited` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_baseinfo`
--

INSERT INTO `dtb_baseinfo` (`id`, `company_name`, `company_kana`, `zip01`, `zip02`, `zipcode`, `country_id`, `pref`, `addr01`, `addr02`, `tel01`, `tel02`, `tel03`, `fax01`, `fax02`, `fax03`, `business_hour`, `law_company`, `law_manager`, `law_zip01`, `law_zip02`, `law_zipcode`, `law_country_id`, `law_pref`, `law_addr01`, `law_addr02`, `law_tel01`, `law_tel02`, `law_tel03`, `law_fax01`, `law_fax02`, `law_fax03`, `law_email`, `law_url`, `law_term01`, `law_term02`, `law_term03`, `law_term04`, `law_term05`, `law_term06`, `law_term07`, `law_term08`, `law_term09`, `law_term10`, `email01`, `email02`, `email03`, `email04`, `free_rule`, `shop_name`, `shop_kana`, `shop_name_eng`, `point_rate`, `welcome_point`, `update_date`, `top_tpl`, `product_tpl`, `detail_tpl`, `mypage_tpl`, `good_traded`, `message`, `regular_holiday_ids`, `latitude`, `longitude`, `downloadable_days`, `downloadable_days_unlimited`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 392, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pugachev2011@gmail.com', 'pugachev2011@gmail.com', 'pugachev2011@gmail.com', 'pugachev2011@gmail.com', NULL, '特攻天国', NULL, NULL, '0', '0', '2022-07-16 12:27:10', 'default1', 'default1', 'default1', 'default1', NULL, NULL, NULL, NULL, NULL, '30', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_best_products`
--

CREATE TABLE `dtb_best_products` (
  `best_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `RANK` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_best_products`
--

INSERT INTO `dtb_best_products` (`best_id`, `category_id`, `RANK`, `product_id`, `title`, `comment`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, 0, 1, 2, NULL, 'たまには鍋でもどうでしょう。', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, 0, 2, 1, NULL, 'お口直しに。', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_best_products_best_id_seq`
--

CREATE TABLE `dtb_best_products_best_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_best_products_best_id_seq`
--

INSERT INTO `dtb_best_products_best_id_seq` (`sequence`) VALUES
(2);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_bkup`
--

CREATE TABLE `dtb_bkup` (
  `bkup_name` text NOT NULL,
  `bkup_memo` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_bloc`
--

CREATE TABLE `dtb_bloc` (
  `device_type_id` int(11) NOT NULL,
  `bloc_id` int(11) NOT NULL,
  `bloc_name` text DEFAULT NULL,
  `tpl_path` text DEFAULT NULL,
  `filename` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `php_path` text DEFAULT NULL,
  `deletable_flg` smallint(6) NOT NULL DEFAULT 1,
  `plugin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_bloc`
--

INSERT INTO `dtb_bloc` (`device_type_id`, `bloc_id`, `bloc_name`, `tpl_path`, `filename`, `create_date`, `update_date`, `php_path`, `deletable_flg`, `plugin_id`) VALUES
(1, 1, 'サイトロゴ', 'site_logo.tpl', 'site_logo', '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 0, NULL),
(1, 2, '新着情報', 'news.tpl', 'news', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/news.php', 0, NULL),
(1, 3, 'おすすめ商品', 'recommend.tpl', 'recommend', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/recommend.php', 0, NULL),
(1, 4, 'カテゴリ', 'category.tpl', 'category', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/category.php', 0, NULL),
(1, 5, 'ログイン', 'login.tpl', 'login', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login.php', 0, NULL),
(1, 6, '【ヘッダー】ログイン', 'login_header.tpl', 'login_header', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login_header.php', 0, NULL),
(2, 1, '新着情報', 'news.tpl', 'news', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/news.php', 0, NULL),
(2, 2, 'ログイン', 'login.tpl', 'login', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login.php', 0, NULL),
(2, 3, 'おすすめ商品', 'recommend.tpl', 'recommend', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/recommend.php', 0, NULL),
(2, 4, 'カテゴリ', 'category.tpl', 'category', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/category.php', 0, NULL),
(2, 5, '【ヘッダー】ログイン', 'login_header.tpl', 'login_header', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login_header.php', 0, NULL),
(2, 6, '【ヘッダー】ナビ', 'navi_header.tpl', 'navi_header', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/navi_header.php', 0, NULL),
(2, 7, '【フッター】ログイン', 'login_footer.tpl', 'login_footer', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login_footer.php', 0, NULL),
(2, 8, '【フッター】ナビ', 'navi_footer.tpl', 'navi_footer', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/navi_footer.php', 0, NULL),
(10, 1, 'カテゴリ', 'category.tpl', 'category', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/category.php', 0, NULL),
(10, 2, '利用ガイド', 'guide.tpl', 'guide', '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 0, NULL),
(10, 3, 'カゴの中', 'cart.tpl', 'cart', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/cart.php', 0, NULL),
(10, 4, '商品検索', 'search_products.tpl', 'search_products', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/search_products.php', 0, NULL),
(10, 5, '新着情報', 'news.tpl', 'news', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/news.php', 0, NULL),
(10, 6, 'ログイン', 'login.tpl', 'login', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login.php', 0, NULL),
(10, 7, 'おすすめ商品', 'recommend.tpl', 'recommend', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/recommend.php', 0, NULL),
(10, 8, 'カレンダー', 'calendar.tpl', 'calendar', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/calendar.php', 0, NULL),
(10, 9, '【ヘッダー】ログイン', 'login_header.tpl', 'login_header', '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'frontparts/bloc/login_header.php', 0, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_blocposition`
--

CREATE TABLE `dtb_blocposition` (
  `device_type_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `bloc_id` int(11) NOT NULL,
  `bloc_row` int(11) DEFAULT NULL,
  `anywhere` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_blocposition`
--

INSERT INTO `dtb_blocposition` (`device_type_id`, `page_id`, `target_id`, `bloc_id`, `bloc_row`, `anywhere`) VALUES
(1, 1, 2, 2, 1, 0),
(1, 1, 2, 3, 2, 0),
(1, 1, 2, 4, 3, 0),
(1, 1, 10, 1, 1, 0),
(2, 1, 4, 1, 4, 0),
(2, 1, 4, 2, 1, 0),
(2, 1, 4, 3, 2, 0),
(2, 1, 4, 4, 3, 0),
(2, 1, 6, 7, 2, 0),
(2, 1, 6, 8, 1, 0),
(2, 1, 10, 5, 1, 0),
(2, 2, 6, 7, 2, 0),
(2, 2, 6, 8, 1, 0),
(2, 2, 10, 6, 1, 0),
(2, 3, 6, 7, 2, 0),
(2, 3, 6, 8, 1, 0),
(2, 3, 10, 6, 1, 0),
(2, 4, 6, 7, 2, 0),
(2, 4, 6, 8, 1, 0),
(2, 4, 10, 6, 1, 0),
(2, 5, 6, 7, 2, 0),
(2, 5, 6, 8, 1, 0),
(2, 5, 10, 6, 1, 0),
(2, 6, 6, 7, 2, 0),
(2, 6, 6, 8, 1, 0),
(2, 6, 10, 6, 1, 0),
(2, 7, 6, 7, 2, 0),
(2, 7, 6, 8, 1, 0),
(2, 7, 10, 6, 1, 0),
(2, 8, 6, 7, 2, 0),
(2, 8, 6, 8, 1, 0),
(2, 8, 10, 6, 1, 0),
(2, 9, 6, 7, 2, 0),
(2, 9, 6, 8, 1, 0),
(2, 9, 10, 6, 1, 0),
(2, 10, 6, 7, 2, 0),
(2, 10, 6, 8, 1, 0),
(2, 10, 10, 6, 1, 0),
(2, 11, 6, 7, 2, 0),
(2, 11, 6, 8, 1, 0),
(2, 11, 10, 6, 1, 0),
(2, 12, 6, 7, 2, 0),
(2, 12, 6, 8, 1, 0),
(2, 12, 10, 6, 1, 0),
(2, 13, 6, 7, 2, 0),
(2, 13, 6, 8, 1, 0),
(2, 13, 10, 6, 1, 0),
(2, 14, 6, 7, 2, 0),
(2, 14, 6, 8, 1, 0),
(2, 14, 10, 6, 1, 0),
(2, 15, 6, 7, 2, 0),
(2, 15, 6, 8, 1, 0),
(2, 15, 10, 6, 1, 0),
(2, 16, 6, 7, 2, 0),
(2, 16, 6, 8, 1, 0),
(2, 16, 10, 6, 1, 0),
(2, 17, 6, 7, 2, 0),
(2, 17, 6, 8, 1, 0),
(2, 17, 10, 6, 1, 0),
(2, 18, 6, 7, 2, 0),
(2, 18, 6, 8, 1, 0),
(2, 18, 10, 6, 1, 0),
(2, 19, 6, 7, 2, 0),
(2, 19, 6, 8, 1, 0),
(2, 19, 10, 6, 1, 0),
(2, 20, 6, 7, 2, 0),
(2, 20, 6, 8, 1, 0),
(2, 20, 10, 6, 1, 0),
(2, 21, 6, 7, 2, 0),
(2, 21, 6, 8, 1, 0),
(2, 21, 10, 6, 1, 0),
(2, 22, 6, 7, 2, 0),
(2, 22, 6, 8, 1, 0),
(2, 22, 10, 6, 1, 0),
(2, 23, 6, 7, 2, 0),
(2, 23, 6, 8, 1, 0),
(2, 23, 10, 6, 1, 0),
(2, 24, 6, 7, 2, 0),
(2, 24, 6, 8, 1, 0),
(2, 24, 10, 6, 1, 0),
(2, 25, 6, 7, 2, 0),
(2, 25, 6, 8, 1, 0),
(2, 25, 10, 6, 1, 0),
(2, 26, 6, 7, 2, 0),
(2, 26, 6, 8, 1, 0),
(2, 26, 10, 6, 1, 0),
(2, 27, 6, 7, 2, 0),
(2, 27, 6, 8, 1, 0),
(2, 27, 10, 6, 1, 0),
(2, 28, 6, 7, 2, 0),
(2, 28, 6, 8, 1, 0),
(2, 28, 10, 6, 1, 0),
(2, 29, 6, 7, 2, 0),
(2, 29, 6, 8, 1, 0),
(2, 29, 10, 6, 1, 0),
(10, 1, 1, 1, 2, 0),
(10, 1, 1, 2, 3, 0),
(10, 1, 1, 3, 1, 0),
(10, 1, 3, 4, 2, 0),
(10, 1, 3, 6, 1, 0),
(10, 1, 3, 8, 3, 0),
(10, 1, 4, 5, 2, 0),
(10, 1, 4, 7, 1, 0),
(10, 1, 10, 9, 1, 1),
(10, 2, 1, 1, 2, 0),
(10, 2, 1, 2, 3, 0),
(10, 2, 1, 3, 1, 0),
(10, 3, 1, 1, 2, 0),
(10, 3, 1, 2, 3, 0),
(10, 3, 1, 3, 1, 0),
(10, 4, 1, 1, 2, 0),
(10, 4, 1, 2, 3, 0),
(10, 4, 1, 3, 1, 0),
(10, 5, 1, 1, 2, 0),
(10, 5, 1, 2, 3, 0),
(10, 5, 1, 3, 1, 0),
(10, 6, 1, 1, 2, 0),
(10, 6, 1, 2, 3, 0),
(10, 6, 1, 3, 1, 0),
(10, 7, 1, 1, 2, 0),
(10, 7, 1, 2, 3, 0),
(10, 7, 1, 3, 1, 0),
(10, 8, 1, 1, 2, 0),
(10, 8, 1, 2, 3, 0),
(10, 8, 1, 3, 1, 0),
(10, 9, 1, 1, 2, 0),
(10, 9, 1, 2, 3, 0),
(10, 9, 1, 3, 1, 0),
(10, 10, 1, 1, 2, 0),
(10, 10, 1, 2, 3, 0),
(10, 10, 1, 3, 1, 0),
(10, 11, 1, 1, 2, 0),
(10, 11, 1, 2, 3, 0),
(10, 11, 1, 3, 1, 0),
(10, 12, 1, 1, 2, 0),
(10, 12, 1, 2, 3, 0),
(10, 12, 1, 3, 1, 0),
(10, 13, 1, 1, 2, 0),
(10, 13, 1, 2, 3, 0),
(10, 13, 1, 3, 1, 0),
(10, 14, 1, 1, 2, 0),
(10, 14, 1, 2, 3, 0),
(10, 14, 1, 3, 1, 0),
(10, 15, 1, 1, 2, 0),
(10, 15, 1, 2, 3, 0),
(10, 15, 1, 3, 1, 0),
(10, 16, 1, 1, 2, 0),
(10, 16, 1, 2, 3, 0),
(10, 16, 1, 3, 1, 0),
(10, 17, 1, 1, 2, 0),
(10, 17, 1, 2, 3, 0),
(10, 17, 1, 3, 1, 0),
(10, 18, 1, 1, 2, 0),
(10, 18, 1, 2, 3, 0),
(10, 18, 1, 3, 1, 0),
(10, 19, 1, 1, 2, 0),
(10, 19, 1, 2, 3, 0),
(10, 19, 1, 3, 1, 0),
(10, 20, 1, 1, 2, 0),
(10, 20, 1, 2, 3, 0),
(10, 20, 1, 3, 1, 0),
(10, 21, 1, 1, 2, 0),
(10, 21, 1, 2, 3, 0),
(10, 21, 1, 3, 1, 0),
(10, 22, 1, 1, 2, 0),
(10, 22, 1, 2, 3, 0),
(10, 22, 1, 3, 1, 0),
(10, 23, 1, 1, 2, 0),
(10, 23, 1, 2, 3, 0),
(10, 23, 1, 3, 1, 0),
(10, 24, 1, 1, 2, 0),
(10, 24, 1, 2, 3, 0),
(10, 24, 1, 3, 1, 0),
(10, 25, 1, 1, 2, 0),
(10, 25, 1, 2, 3, 0),
(10, 25, 1, 3, 1, 0),
(10, 26, 1, 1, 2, 0),
(10, 26, 1, 2, 3, 0),
(10, 26, 1, 3, 1, 0),
(10, 27, 1, 1, 2, 0),
(10, 27, 1, 2, 3, 0),
(10, 27, 1, 3, 1, 0),
(10, 28, 1, 1, 2, 0),
(10, 28, 1, 2, 3, 0),
(10, 28, 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_category`
--

CREATE TABLE `dtb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` text DEFAULT NULL,
  `parent_category_id` int(11) NOT NULL DEFAULT 0,
  `level` int(11) NOT NULL,
  `RANK` int(11) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_category`
--

INSERT INTO `dtb_category` (`category_id`, `category_name`, `parent_category_id`, `level`, `RANK`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, '食品', 0, 1, 5, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, '雑貨', 0, 1, 6, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(3, 'お菓子', 1, 2, 3, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(4, 'なべ', 1, 2, 4, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(5, 'アイス', 3, 3, 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(6, 'レシピ', 0, 1, 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(7, 'スイーツ', 0, 1, 11, 2, '2022-07-16 12:28:44', '2022-07-16 12:28:44', 0),
(8, 'パフェ', 7, 2, 7, 2, '2022-07-16 12:28:53', '2022-07-16 12:28:53', 0),
(9, 'ケーキ', 7, 2, 8, 2, '2022-07-16 12:29:02', '2022-07-16 12:29:02', 0),
(10, '焼き菓子', 7, 2, 9, 2, '2022-07-16 12:29:13', '2022-07-16 12:29:13', 0),
(11, 'シュークリーム', 7, 2, 10, 2, '2022-07-16 12:29:20', '2022-07-16 12:29:20', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_category_category_id_seq`
--

CREATE TABLE `dtb_category_category_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_category_category_id_seq`
--

INSERT INTO `dtb_category_category_id_seq` (`sequence`) VALUES
(11);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_category_count`
--

CREATE TABLE `dtb_category_count` (
  `category_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_category_count`
--

INSERT INTO `dtb_category_count` (`category_id`, `product_count`, `create_date`) VALUES
(4, 2, '2022-07-16 12:27:04'),
(5, 1, '2022-07-16 12:27:04'),
(6, 1, '2022-07-16 12:27:04'),
(8, 2, '2022-07-16 13:26:26'),
(9, 4, '2022-07-18 02:18:07'),
(11, 3, '2022-07-16 13:17:35');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_category_total_count`
--

CREATE TABLE `dtb_category_total_count` (
  `category_id` int(11) NOT NULL,
  `product_count` int(11) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_category_total_count`
--

INSERT INTO `dtb_category_total_count` (`category_id`, `product_count`, `create_date`) VALUES
(1, 3, '2022-07-16 12:27:04'),
(2, NULL, '2022-07-16 12:27:04'),
(3, 1, '2022-07-16 12:27:04'),
(4, 2, '2022-07-16 12:27:04'),
(5, 1, '2022-07-16 12:27:04'),
(6, 1, '2022-07-16 12:27:04'),
(7, 9, '2022-07-18 02:18:07'),
(8, 2, '2022-07-16 13:26:26'),
(9, 4, '2022-07-18 02:18:07'),
(11, 3, '2022-07-16 13:17:35');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_class`
--

CREATE TABLE `dtb_class` (
  `class_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_class`
--

INSERT INTO `dtb_class` (`class_id`, `name`, `RANK`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, '味', 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, '大きさ', 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_classcategory`
--

CREATE TABLE `dtb_classcategory` (
  `classcategory_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `RANK` int(11) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_classcategory`
--

INSERT INTO `dtb_classcategory` (`classcategory_id`, `name`, `class_id`, `RANK`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(0, NULL, 0, 0, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(1, 'バニラ', 1, 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, 'チョコ', 1, 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(3, '抹茶', 1, 3, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(4, 'L', 2, 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(5, 'M', 2, 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(6, 'S', 2, 3, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_classcategory_classcategory_id_seq`
--

CREATE TABLE `dtb_classcategory_classcategory_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_classcategory_classcategory_id_seq`
--

INSERT INTO `dtb_classcategory_classcategory_id_seq` (`sequence`) VALUES
(6);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_class_class_id_seq`
--

CREATE TABLE `dtb_class_class_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_class_class_id_seq`
--

INSERT INTO `dtb_class_class_id_seq` (`sequence`) VALUES
(2);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_csv`
--

CREATE TABLE `dtb_csv` (
  `no` int(11) NOT NULL,
  `csv_id` int(11) NOT NULL,
  `col` text DEFAULT NULL,
  `disp_name` text DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `rw_flg` smallint(6) DEFAULT 1,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_convert_kana_option` text DEFAULT NULL,
  `size_const_type` text DEFAULT NULL,
  `error_check_types` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_csv`
--

INSERT INTO `dtb_csv` (`no`, `csv_id`, `col`, `disp_name`, `RANK`, `rw_flg`, `status`, `create_date`, `update_date`, `mb_convert_kana_option`, `size_const_type`, `error_check_types`) VALUES
(1, 1, 'product_id', '商品ID', 1, 3, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(2, 1, 'product_class_id', '商品規格ID', 2, 3, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(3, 1, 'parent_classcategory_id', '親規格分類ID', 3, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(4, 1, 'classcategory_id', '規格分類ID', 4, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(5, 1, 'parent_classcategory_name', '親規格分類名', 5, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(6, 1, 'classcategory_name', '規格分類名', 6, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(7, 1, 'maker_id', 'メーカーID', 7, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(8, 1, '(SELECT name as maker_name FROM dtb_maker WHERE prdcls.maker_id = dtb_maker.maker_id) as maker_name', 'メーカー名', 8, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(9, 1, 'name', '商品名', 9, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(10, 1, 'status', '表示ステータス(公開・非公開)', 10, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(11, 1, 'comment1', 'メーカーURL(コメント1)', 11, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'URL_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,URL_CHECK'),
(12, 1, 'comment2', 'コメント2', 12, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(13, 1, 'comment3', '検索ワード(コメント3)', 13, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(14, 1, 'comment4', 'コメント4', 14, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(15, 1, 'comment5', 'コメント5', 15, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(16, 1, 'comment6', 'コメント6', 16, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(17, 1, 'note', '備考欄(SHOP専用)', 17, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(18, 1, 'main_list_comment', '一覧-メインコメント', 18, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'MTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(19, 1, 'main_list_image', '一覧-メイン画像', 19, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(20, 1, 'main_comment', '詳細-メインコメント', 20, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK,HTML_TAG_CHECK'),
(21, 1, 'main_image', '詳細-メイン画像', 21, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(22, 1, 'main_large_image', '詳細-メイン拡大画像 ', 22, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(23, 1, 'sub_title1', '詳細-サブタイトル(1)', 23, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(24, 1, 'sub_comment1', '詳細-サブコメント(1)', 24, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,HTML_TAG_CHECK'),
(25, 1, 'sub_image1', '詳細-サブ画像(1)', 25, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(26, 1, 'sub_large_image1', '詳細-サブ拡大画像(1)', 26, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(27, 1, 'sub_title2', '詳細-サブタイトル(2)', 27, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(28, 1, 'sub_comment2', '詳細-サブコメント(2)', 28, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(29, 1, 'sub_image2', '詳細-サブ画像(2)', 29, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(30, 1, 'sub_large_image2', '詳細-サブ拡大画像(2)', 30, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(31, 1, 'sub_title3', '詳細-サブタイトル(3)', 31, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(32, 1, 'sub_comment3', '詳細-サブコメント(3)', 32, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(33, 1, 'sub_image3', '詳細-サブ画像(3)', 33, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(34, 1, 'sub_large_image3', '詳細-サブ拡大画像(3)', 34, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(35, 1, 'sub_title4', '詳細-サブタイトル(4)', 35, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(36, 1, 'sub_comment4', '詳細-サブコメント(4)', 36, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(37, 1, 'sub_image4', '詳細-サブ画像(4)', 37, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(38, 1, 'sub_large_image4', '詳細-サブ拡大画像(4)', 38, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(39, 1, 'sub_title5', '詳細-サブタイトル(5)', 39, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(40, 1, 'sub_comment5', '詳細-サブコメント(5)', 40, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(41, 1, 'sub_image5', '詳細-サブ画像(5)', 41, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(42, 1, 'sub_large_image5', '詳細-サブ拡大画像(5)', 42, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,FILE_EXISTS'),
(43, 1, 'deliv_date_id', '発送日目安ID', 43, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(44, 1, 'del_flg', '削除フラグ', 44, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(45, 1, 'product_type_id', '商品種別ID', 45, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(46, 1, 'product_code', '商品コード', 46, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'EXIST_CHECK,SPTAB_CHECK,MAX_LENGTH_CHECK'),
(47, 1, 'stock', '在庫数', 47, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'AMOUNT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(48, 1, 'stock_unlimited', '在庫無制限フラグ', 48, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(49, 1, 'sale_limit', '販売制限数', 49, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'AMOUNT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(50, 1, 'price01', '通常価格', 50, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(51, 1, 'price02', '販売価格', 51, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(52, 1, 'deliv_fee', '送料', 52, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(53, 1, 'point_rate', 'ポイント付与率', 53, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PERCENTAGE_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(54, 1, 'down_filename', 'ダウンロードファイル名', 54, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(55, 1, 'down_realfilename', 'ダウンロード実ファイル', 55, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,DOWN_FILE_EXISTS'),
(56, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 0) AS recommend_product_id1', '関連商品ID(1)', 56, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(57, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 0) AS recommend_comment1', '関連商品コメント(1)', 57, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(58, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 1) AS recommend_product_id2', '関連商品ID(2)', 58, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(59, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 1) AS recommend_comment2', '関連商品コメント(2)', 59, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(60, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 2) AS recommend_product_id3', '関連商品ID(3)', 60, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(61, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 2) AS recommend_comment3', '関連商品コメント(3)', 61, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(62, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 3) AS recommend_product_id4', '関連商品ID(4)', 62, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(63, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 3) AS recommend_comment4', '関連商品コメント(4)', 63, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(64, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 4) AS recommend_product_id5', '関連商品ID(5)', 64, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(65, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 4) AS recommend_comment5', '関連商品コメント(5)', 65, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(66, 1, '(SELECT recommend_product_id FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 5) AS recommend_product_id6', '関連商品ID(6)', 66, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(67, 1, '(SELECT comment FROM dtb_recommend_products WHERE prdcls.product_id = dtb_recommend_products.product_id ORDER BY `RANK` DESC, recommend_product_id DESC limit 1 offset 5) AS recommend_comment6', '関連商品コメント(6)', 67, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(68, 1, '(SELECT ARRAY_TO_STRING(ARRAY(SELECT product_status_id FROM dtb_product_status WHERE dtb_product_status.product_id = prdcls.product_id and del_flg = 0 ORDER BY dtb_product_status.product_status_id), \',\')) as product_statuses', '商品ステータス', 68, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(69, 1, '(SELECT ARRAY_TO_STRING(ARRAY(SELECT name FROM dtb_product_status LEFT JOIN mtb_status ON  dtb_product_status.product_status_id = mtb_status.id  WHERE dtb_product_status.product_id = prdcls.product_id and del_flg = 0 ORDER BY dtb_product_status.product_status_id), \',\')) as product_status_names', '商品ステータス名', 69, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(70, 1, '(SELECT ARRAY_TO_STRING(ARRAY(SELECT category_id FROM dtb_product_categories WHERE dtb_product_categories.product_id = prdcls.product_id ORDER BY dtb_product_categories.`RANK`), \',\')) as category_ids', 'カテゴリID', 70, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(71, 1, '(SELECT ARRAY_TO_STRING(ARRAY(SELECT category_name FROM dtb_product_categories LEFT JOIN dtb_category ON dtb_product_categories.category_id = dtb_category.category_id WHERE dtb_product_categories.product_id = prdcls.product_id ORDER BY dtb_product_categories.`RANK`), \',\')) as category_names', 'カテゴリ名', 71, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(72, 2, 'customer_id', '会員ID', 1, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(73, 2, 'name01', 'お名前(姓)', 2, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(74, 2, 'name02', 'お名前(名)', 3, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(75, 2, 'kana01', 'お名前(フリガナ・姓)', 4, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(76, 2, 'kana02', 'お名前(フリガナ・名)', 5, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(77, 2, 'company_name', '会社名', 6, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', NULL, NULL),
(78, 2, 'zip01', '郵便番号1', 7, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(79, 2, 'zip02', '郵便番号2', 8, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(80, 2, 'zipcode', 'ZIP CODE', 9, 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(81, 2, '(SELECT name FROM mtb_country WHERE mtb_country.id = dtb_customer.country_id) as country', '国', 10, 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(82, 2, '(SELECT name FROM mtb_pref WHERE mtb_pref.id = dtb_customer.pref) as pref', '都道府県', 11, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(83, 2, 'addr01', '住所1', 12, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(84, 2, 'addr02', '住所2', 13, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(85, 2, 'email', 'E-MAIL', 14, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(86, 2, 'tel01', 'TEL1', 15, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(87, 2, 'tel02', 'TEL2', 16, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(88, 2, 'tel03', 'TEL3', 17, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(89, 2, 'fax01', 'FAX1', 18, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(90, 2, 'fax02', 'FAX2', 19, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(91, 2, 'fax03', 'FAX3', 20, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(92, 2, '(SELECT name FROM mtb_sex WHERE mtb_sex.id = dtb_customer.sex) as sex', '性別', 21, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(93, 2, '(SELECT name FROM mtb_job WHERE mtb_job.id = dtb_customer.job) as job', '職業', 22, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(94, 2, 'birth', '誕生日', 23, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(95, 2, 'first_buy_date', '初回購入日', 24, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(96, 2, 'last_buy_date', '最終購入日', 25, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(97, 2, 'buy_times', '購入回数', 26, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(98, 2, 'point', 'ポイント残高', 27, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(99, 2, 'note', '備考', 28, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(100, 2, 'create_date', '登録日', 29, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(101, 2, 'update_date', '更新日', 30, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, NULL),
(102, 3, 'order_id', '注文番号', 1, 3, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(103, 3, 'customer_id', '会員ID', 2, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(104, 3, 'message', '要望等', 3, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(105, 3, 'order_name01', 'お名前(姓)', 4, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(106, 3, 'order_name02', 'お名前(名)', 5, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(107, 3, 'order_kana01', 'お名前(フリガナ・姓)', 6, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVCa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(108, 3, 'order_kana02', 'お名前(フリガナ名)', 7, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVCa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(109, 3, 'order_company_name', '会社名', 8, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', NULL, NULL),
(110, 3, 'order_email', 'メールアドレス', 9, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'a', 'null', 'NO_SPTAB,EMAIL_CHECK,EMAIL_CHAR_CHECK'),
(111, 3, 'order_tel01', '電話番号1', 10, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(112, 3, 'order_tel02', '電話番号2', 11, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(113, 3, 'order_tel03', '電話番号3', 12, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(114, 3, 'order_fax01', 'FAX1', 13, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(115, 3, 'order_fax02', 'FAX2', 14, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(116, 3, 'order_fax03', 'FAX3', 15, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'TEL_ITEM_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(117, 3, 'order_zip01', '郵便番号1', 16, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'ZIP01_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK,NUM_COUNT_CHECK'),
(118, 3, 'order_zip02', '郵便番号2', 17, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'ZIP02_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK,NUM_COUNT_CHECK'),
(119, 3, 'order_zipcode', 'ZIP CODE', 18, 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'STEXT_LEN', 'GRAPH_CHECK,MAX_LENGTH_CHECK'),
(120, 3, '(SELECT name FROM mtb_country WHERE mtb_country.id = dtb_order.order_country_id) as country', '国', 19, 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(121, 3, '(SELECT name FROM mtb_pref WHERE mtb_pref.id = dtb_order.order_pref) as pref', '都道府県', 20, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(122, 3, 'order_addr01', '住所1', 21, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'MTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,NUM_CHECK'),
(123, 3, 'order_addr02', '住所2', 23, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'MTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,NUM_CHECK'),
(124, 3, 'order_sex', '性別', 23, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(125, 3, 'order_birth', '生年月日', 24, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(126, 3, 'order_job', '職種', 25, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(127, 3, 'subtotal', '小計', 38, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(128, 3, 'discount', '値引き', 39, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(129, 3, 'deliv_fee', '送料', 40, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(130, 3, 'charge', '手数料', 41, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(131, 3, 'use_point', '使用ポイント', 42, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(132, 3, 'add_point', '加算ポイント', 43, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(133, 3, 'tax', '税金', 44, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(134, 3, 'total', '合計', 45, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(135, 3, 'payment_total', 'お支払い合計', 46, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'PRICE_LEN', 'MAX_LENGTH_CHECK,NUM_CHECK'),
(136, 3, 'deliv_id', '配送業者ID', 47, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(137, 3, 'payment_method', '支払い方法', 48, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(138, 3, 'note', 'SHOPメモ', 50, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LLTEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(139, 3, 'status', '対応状況', 51, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(140, 3, 'create_date', '注文日時', 52, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'a', '', 'CHECK_DATE'),
(141, 3, 'update_date', '更新日時', 53, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'a', '', 'CHECK_DATE'),
(142, 3, 'commit_date', '発送完了日時', 54, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'a', '', 'CHECK_DATE'),
(143, 3, 'device_type_id', '端末種別ID', 55, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(144, 3, '(SELECT ARRAY_TO_STRING(ARRAY(SELECT shipping_id FROM dtb_shipping WHERE dtb_shipping.order_id = dtb_order.order_id), \',\')) as shipping_ids', '配送情報ID', 57, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK'),
(145, 4, 'B.name', '商品名', 1, 2, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(146, 4, '(SELECT name FROM mtb_disp WHERE mtb_disp.id = A.status) as status', 'レビュー表示', 2, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(147, 4, 'A.create_date', '投稿日', 3, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'a', '', 'CHECK_DATE,EXIST_CHECK'),
(148, 4, 'A.reviewer_name', '投稿者名', 4, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(149, 4, 'A.reviewer_url', '投稿者URL', 5, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVas', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(150, 4, '(SELECT name FROM mtb_sex WHERE mtb_sex.id = A.sex) as sex', '性別', 6, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(151, 4, '(SELECT name FROM mtb_recommend WHERE mtb_recommend.id = A.recommend_level) as recommend_level', 'おすすめレベル', 7, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(152, 4, 'A.title', 'タイトル', 8, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'MAX_LENGTH_CHECK'),
(153, 4, 'A.comment', 'コメント', 9, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'LTEXT_LEN', 'MAX_LENGTH_CHECK'),
(154, 5, 'category_id', 'カテゴリID', 1, 3, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(155, 5, 'category_name', 'カテゴリ名', 2, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'KVa', 'STEXT_LEN', 'SPTAB_CHECK,MAX_LENGTH_CHECK,EXIST_CHECK'),
(156, 5, 'parent_category_id', '親カテゴリID', 3, 1, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(157, 5, 'level', '階層', NULL, 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(158, 5, '`RANK`', '表示ランク', NULL, 2, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK'),
(159, 5, 'del_flg', '削除フラグ', NULL, 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'n', 'INT_LEN', 'NUM_CHECK,MAX_LENGTH_CHECK');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_csv_sql`
--

CREATE TABLE `dtb_csv_sql` (
  `sql_id` int(11) NOT NULL,
  `sql_name` text NOT NULL,
  `csv_sql` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_csv_sql_sql_id_seq`
--

CREATE TABLE `dtb_csv_sql_sql_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, '竹谷学', '竹谷学', 'タケタニ', 'マナブ', NULL, '651', '1111', NULL, 392, 1, '西区', '神戸市', 'pugachev2011@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, '4927d6d147dc591d2fca8932193e057315e9e4206b56400b5c491af292a40ddc', 1, '0eeae4e497fae22e5e5ecc20d5944a33c951ada5dcaba3cc033bab7b356148d6', '99a8370b80', 'r62f88d8cbe544Adaevmd2', NULL, NULL, '0', '0', '123', NULL, 2, '2022-08-14 05:52:12', '2022-08-14 05:52:12', 0, NULL, 3, 'test', NULL, 2, 3, 2, NULL, 'makino.jpg', 'main_image', NULL, NULL),
(17, '宇垣', '美里', 'ウガキ', 'ミサト', NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎1-2-3', 'ugaki@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, 'e70cf26e027315d772c3f875dec7c7ccaf1ec4d46e20e447b1172baa672ad7dd', 1, 'f1bde2b40026c4c27a840db25ad40945cb293e36f5513be0b3a198570c2ac867', 'f4493d1deb', 'r6302bd13f2408VVKXVzLV', NULL, NULL, '0', '0', '0', NULL, 2, '2022-08-21 23:17:39', '2022-08-21 23:17:39', 0, NULL, 3, 'うがっきー', 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '竹谷', '学', 'タケタニ', 'マナブ', NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎1-2-3', 'rina@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, NULL, NULL, 'ead9690a672f9e75f10821d61b42e78c3a061040903e53bca0c18975009d5b96', 1, '96ee5393e8d6df898cf8a6a6fc64c5d1fb294ecd9809ccc0bb4dac567b50dbe3', 'e581302fec', 'r6303803551d88uuau6YyA', NULL, NULL, '0', '0', '0', NULL, 2, '2022-08-22 13:10:13', '2022-08-22 13:10:13', 0, NULL, 3, 'test', 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '檜山', 'さや', 'ヒヤマ', 'サヤ', 'ウエザーニュース', '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎1-2-3', 'saya@gmail.com', NULL, '080', '1111', '1111', NULL, NULL, NULL, 2, 15, NULL, '01e712acecf41c21021493629f2843caadcc39f860307889d51bba0e68003cfd', 1, '2f9166c8d4768712fefe8ae3955d1011c1e4f2bd2b689c67db1d5756eae805de', '4c2ecfc39c', 'r6303fa56567c29KEvEY5S', NULL, NULL, '0', '0', '0', NULL, 2, '2022-08-22 21:51:18', '2022-08-22 21:51:18', 0, NULL, 3, 'さやっち', 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_customer_customer_id_seq`
--

CREATE TABLE `dtb_customer_customer_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_customer_customer_id_seq`
--

INSERT INTO `dtb_customer_customer_id_seq` (`sequence`) VALUES
(19);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_customer_favorite_products`
--

CREATE TABLE `dtb_customer_favorite_products` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_deliv`
--

CREATE TABLE `dtb_deliv` (
  `deliv_id` int(11) NOT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `service_name` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `confirm_url` text DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_deliv`
--

INSERT INTO `dtb_deliv` (`deliv_id`, `product_type_id`, `name`, `service_name`, `remark`, `confirm_url`, `RANK`, `status`, `del_flg`, `creator_id`, `create_date`, `update_date`) VALUES
(1, 1, 'サンプル業者', 'サンプル業者', NULL, NULL, 2, 1, 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04'),
(2, 2, '配送無し(ダウンロード商品用)', 'なし', NULL, NULL, 1, 1, 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_delivfee`
--

CREATE TABLE `dtb_delivfee` (
  `deliv_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `fee` decimal(10,0) NOT NULL,
  `pref` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_delivfee`
--

INSERT INTO `dtb_delivfee` (`deliv_id`, `fee_id`, `fee`, `pref`) VALUES
(1, 1, '1000', 1),
(1, 2, '1000', 2),
(1, 3, '1000', 3),
(1, 4, '1000', 4),
(1, 5, '1000', 5),
(1, 6, '1000', 6),
(1, 7, '1000', 7),
(1, 8, '1000', 8),
(1, 9, '1000', 9),
(1, 10, '1000', 10),
(1, 11, '1000', 11),
(1, 12, '1000', 12),
(1, 13, '1000', 13),
(1, 14, '1000', 14),
(1, 15, '1000', 15),
(1, 16, '1000', 16),
(1, 17, '1000', 17),
(1, 18, '1000', 18),
(1, 19, '1000', 19),
(1, 20, '1000', 20),
(1, 21, '1000', 21),
(1, 22, '1000', 22),
(1, 23, '1000', 23),
(1, 24, '1000', 24),
(1, 25, '1000', 25),
(1, 26, '1000', 26),
(1, 27, '1000', 27),
(1, 28, '1000', 28),
(1, 29, '1000', 29),
(1, 30, '1000', 30),
(1, 31, '1000', 31),
(1, 32, '1000', 32),
(1, 33, '1000', 33),
(1, 34, '1000', 34),
(1, 35, '1000', 35),
(1, 36, '1000', 36),
(1, 37, '1000', 37),
(1, 38, '1000', 38),
(1, 39, '1000', 39),
(1, 40, '1000', 40),
(1, 41, '1000', 41),
(1, 42, '1000', 42),
(1, 43, '1000', 43),
(1, 44, '1000', 44),
(1, 45, '1000', 45),
(1, 46, '1000', 46),
(1, 47, '1000', 47),
(2, 1, '0', 1),
(2, 2, '0', 2),
(2, 3, '0', 3),
(2, 4, '0', 4),
(2, 5, '0', 5),
(2, 6, '0', 6),
(2, 7, '0', 7),
(2, 8, '0', 8),
(2, 9, '0', 9),
(2, 10, '0', 10),
(2, 11, '0', 11),
(2, 12, '0', 12),
(2, 13, '0', 13),
(2, 14, '0', 14),
(2, 15, '0', 15),
(2, 16, '0', 16),
(2, 17, '0', 17),
(2, 18, '0', 18),
(2, 19, '0', 19),
(2, 20, '0', 20),
(2, 21, '0', 21),
(2, 22, '0', 22),
(2, 23, '0', 23),
(2, 24, '0', 24),
(2, 25, '0', 25),
(2, 26, '0', 26),
(2, 27, '0', 27),
(2, 28, '0', 28),
(2, 29, '0', 29),
(2, 30, '0', 30),
(2, 31, '0', 31),
(2, 32, '0', 32),
(2, 33, '0', 33),
(2, 34, '0', 34),
(2, 35, '0', 35),
(2, 36, '0', 36),
(2, 37, '0', 37),
(2, 38, '0', 38),
(2, 39, '0', 39),
(2, 40, '0', 40),
(2, 41, '0', 41),
(2, 42, '0', 42),
(2, 43, '0', 43),
(2, 44, '0', 44),
(2, 45, '0', 45),
(2, 46, '0', 46),
(2, 47, '0', 47);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_delivtime`
--

CREATE TABLE `dtb_delivtime` (
  `deliv_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `deliv_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_delivtime`
--

INSERT INTO `dtb_delivtime` (`deliv_id`, `time_id`, `deliv_time`) VALUES
(1, 1, '午前'),
(1, 2, '午後');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_deliv_deliv_id_seq`
--

CREATE TABLE `dtb_deliv_deliv_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_deliv_deliv_id_seq`
--

INSERT INTO `dtb_deliv_deliv_id_seq` (`sequence`) VALUES
(2);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_gift`
--

CREATE TABLE `dtb_gift` (
  `gift_id` smallint(6) NOT NULL,
  `product_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `dtb_gift`
--

INSERT INTO `dtb_gift` (`gift_id`, `product_id`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, 7, 2, '2022-07-16 13:09:16', '2022-07-16 13:09:16', 0),
(1, 9, 2, '2022-07-16 13:18:33', '2022-07-16 13:18:33', 0),
(1, 11, 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', 0),
(1, 12, 2, '2022-07-16 13:24:37', '2022-07-16 13:24:37', 0),
(1, 15, 2, '2022-07-18 02:18:07', '2022-07-18 02:18:07', 0),
(2, 8, 2, '2022-07-16 13:19:24', '2022-07-16 13:19:24', 0),
(2, 10, 2, '2022-07-16 13:17:35', '2022-07-16 13:17:35', 0),
(2, 11, 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', 0),
(2, 12, 2, '2022-07-16 13:24:37', '2022-07-16 13:24:37', 0),
(3, 6, 2, '2022-07-16 13:20:06', '2022-07-16 13:20:06', 0),
(3, 9, 2, '2022-07-16 13:18:33', '2022-07-16 13:18:33', 0),
(3, 10, 2, '2022-07-16 13:17:35', '2022-07-16 13:17:35', 0),
(3, 11, 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', 0),
(3, 13, 2, '2022-07-16 13:26:26', '2022-07-16 13:26:26', 0),
(3, 15, 2, '2022-07-18 02:18:07', '2022-07-18 02:18:07', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_hobby`
--

CREATE TABLE `dtb_hobby` (
  `hobby_id` smallint(6) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `dtb_hobby`
--

INSERT INTO `dtb_hobby` (`hobby_id`, `customer_id`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, 3, 2, '2022-07-18 11:28:40', '2022-07-18 11:28:40', 0),
(1, 4, 2, '2022-08-03 10:44:43', '2022-08-03 10:44:43', 0),
(2, 3, 2, '2022-07-18 11:28:40', '2022-07-18 11:28:40', 0),
(2, 5, 2, '2022-08-06 21:48:31', '2022-08-06 21:48:31', 0),
(3, 2, 2, '2022-07-18 11:28:26', '2022-07-18 11:28:26', 0),
(3, 3, 2, '2022-07-18 11:28:40', '2022-07-18 11:28:40', 0),
(3, 4, 2, '2022-08-03 10:44:43', '2022-08-03 10:44:43', 0),
(3, 5, 2, '2022-08-06 21:48:31', '2022-08-06 21:48:31', 0),
(4, 2, 2, '2022-07-18 11:28:26', '2022-07-18 11:28:26', 0),
(4, 3, 2, '2022-07-18 11:28:40', '2022-07-18 11:28:40', 0),
(4, 5, 2, '2022-08-06 21:48:31', '2022-08-06 21:48:31', 0),
(4, 19, 0, '2022-08-22 21:51:18', '2022-08-22 21:51:18', 0),
(5, 2, 2, '2022-07-18 11:28:26', '2022-07-18 11:28:26', 0),
(5, 3, 2, '2022-07-18 11:28:40', '2022-07-18 11:28:40', 0),
(5, 4, 2, '2022-08-03 10:44:43', '2022-08-03 10:44:43', 0),
(5, 19, 0, '2022-08-22 21:51:18', '2022-08-22 21:51:18', 0),
(7, 19, 0, '2022-08-22 21:51:18', '2022-08-22 21:51:18', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_holiday`
--

CREATE TABLE `dtb_holiday` (
  `holiday_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `month` smallint(6) NOT NULL,
  `day` smallint(6) NOT NULL,
  `RANK` int(11) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_holiday`
--

INSERT INTO `dtb_holiday` (`holiday_id`, `title`, `month`, `day`, `RANK`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, '元日(1月1日)', 1, 1, 100, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, '成人の日(1月第2月曜日)', 1, 14, 99, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(3, '建国記念の日(2月11日)', 2, 11, 98, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(4, '春分の日(3月21日)', 3, 21, 97, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(5, '昭和の日(4月29日)', 4, 29, 96, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(6, '憲法記念日(5月3日)', 5, 3, 95, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(7, 'みどりの日(5月4日)', 5, 4, 94, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(8, 'こどもの日(5月5日)', 5, 5, 93, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(9, '海の日(7月第3月曜日)', 7, 21, 92, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(10, '敬老の日(9月第3月曜日)', 9, 15, 91, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(11, '秋分の日(9月23日)', 9, 23, 90, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(12, '体育の日(10月第2月曜日)', 10, 13, 89, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(13, '文化の日(11月3日)', 11, 3, 88, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(14, '勤労感謝の日(11月23日)', 11, 23, 87, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(15, '天皇誕生日(12月23日)', 12, 23, 86, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_holiday_holiday_id_seq`
--

CREATE TABLE `dtb_holiday_holiday_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_holiday_holiday_id_seq`
--

INSERT INTO `dtb_holiday_holiday_id_seq` (`sequence`) VALUES
(15);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_index_list`
--

CREATE TABLE `dtb_index_list` (
  `table_name` text NOT NULL,
  `column_name` text NOT NULL,
  `recommend_flg` smallint(6) NOT NULL DEFAULT 0,
  `recommend_comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_index_list`
--

INSERT INTO `dtb_index_list` (`table_name`, `column_name`, `recommend_flg`, `recommend_comment`) VALUES
('dtb_customer', 'email_mobile', 0, '会員数増加時のログイン処理速度を向上させたいときに試してみてください'),
('dtb_customer', 'mobile_phone_id', 1, ''),
('dtb_mobile_ext_session_id', 'create_date', 1, ''),
('dtb_mobile_ext_session_id', 'param_key', 1, ''),
('dtb_mobile_ext_session_id', 'param_value', 1, ''),
('dtb_mobile_ext_session_id', 'url', 1, ''),
('dtb_mobile_kara_mail', 'create_date', 1, ''),
('dtb_mobile_kara_mail', 'receive_date', 1, ''),
('dtb_mobile_kara_mail', 'token', 1, ''),
('dtb_order', 'order_email', 2, '注文数が多いときに試してみてください。'),
('dtb_order', 'order_name01', 2, '注文数が多いときに試してみてください。'),
('dtb_order', 'order_name02', 0, '注文数が多いときに試してみてください。'),
('dtb_order', 'order_tel01', 0, '注文数が多いときに試してみてください。'),
('dtb_order', 'order_tel02', 0, '注文数が多いときに試してみてください。'),
('dtb_order', 'order_tel03', 0, '注文数が多いときに試してみてください。'),
('dtb_order', 'status', 2, '注文数が多いときに試してみてください。'),
('dtb_order_detail', 'product_id', 1, ''),
('dtb_order_temp', 'order_temp_id', 0, '注文数が多いときに試してみてください。'),
('dtb_products', 'name', 2, '商品名検索速度を向上させたいときに試してみてください'),
('dtb_products_class', 'product_id', 1, ''),
('dtb_product_categories', 'category_id', 2, 'カテゴリが多いときに試してみてください。'),
('dtb_send_customer', 'customer_id', 1, ''),
('dtb_session', 'update_date', 0, NULL),
('mtb_zip', 'zipcode', 2, '郵便番号検索が遅いときに試してみてください。郵便番号データの更新時には無効にしていることをおすすめします。');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_kiyaku`
--

CREATE TABLE `dtb_kiyaku` (
  `kiyaku_id` int(11) NOT NULL,
  `kiyaku_title` text NOT NULL,
  `kiyaku_text` text NOT NULL,
  `RANK` int(11) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_kiyaku`
--

INSERT INTO `dtb_kiyaku` (`kiyaku_id`, `kiyaku_title`, `kiyaku_text`, `RANK`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, '第1条 (会員)', '1. 「会員」とは、当社が定める手続に従い本規約に同意の上、入会の申し込みを行う個人をいいます。\n2. 「会員情報」とは、会員が当社に開示した会員の属性に関する情報および会員の取引に関する履歴等の情報をいいます。\n3. 本規約は、全ての会員に適用され、登録手続時および登録後にお守りいただく規約です。', 12, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(2, '第2条 (登録)', '1. 会員資格\n本規約に同意の上、所定の入会申込みをされたお客様は、所定の登録手続完了後に会員としての資格を有します。会員登録手続は、会員となるご本人が行ってください。代理による登録は一切認められません。なお、過去に会員資格が取り消された方やその他当社が相応しくないと判断した方からの会員申込はお断りする場合があります。\n\n2. 会員情報の入力\n会員登録手続の際には、入力上の注意をよく読み、所定の入力フォームに必要事項を正確に入力してください。会員情報の登録において、特殊記号・旧漢字・ローマ数字などはご使用になれません。これらの文字が登録された場合は当社にて変更致します。\n\n3. パスワードの管理\n(1)パスワードは会員本人のみが利用できるものとし、第三者に譲渡・貸与できないものとします。\n(2)パスワードは、他人に知られることがないよう定期的に変更する等、会員本人が責任をもって管理してください。\n(3)パスワードを用いて当社に対して行われた意思表示は、会員本人の意思表示とみなし、そのために生じる支払等は全て会員の責任となります。', 11, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(3, '第3条 (変更)', '1. 会員は、氏名、住所など当社に届け出た事項に変更があった場合には、速やかに当社に連絡するものとします。\n2. 変更登録がなされなかったことにより生じた損害について、当社は一切責任を負いません。また、変更登録がなされた場合でも、変更登録前にすでに手続がなされた取引は、変更登録前の情報に基づいて行われますのでご注意ください。', 10, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(4, '第4条 (退会)', '会員が退会を希望する場合には、会員本人が退会手続きを行ってください。所定の退会手続の終了後に、退会となります。', 9, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(5, '第5条 (会員資格の喪失及び賠償義務)', '1. 会員が、会員資格取得申込の際に虚偽の申告をしたとき、通信販売による代金支払債務を怠ったとき、その他当社が会員として不適当と認める事由があるときは、当社は、会員資格を取り消すことができることとします。\n2. 会員が、以下の各号に定める行為をしたときは、これにより当社が被った損害を賠償する責任を負います。\n(1)会員番号、パスワードを不正に使用すること\n(2)当ホームページにアクセスして情報を改ざんしたり、当ホームページに有害なコンピュータープログラムを送信するなどして、当社の営業を妨害すること\n(3)当社が扱う商品の知的所有権を侵害する行為をすること\n(4)その他、この利用規約に反する行為をすること', 8, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(6, '第6条 (会員情報の取扱い)', '1. 当社は、原則として会員情報を会員の事前の同意なく第三者に対して開示することはありません。ただし、次の各号の場合には、会員の事前の同意なく、当社は会員情報その他のお客様情報を開示できるものとします。\n(1)法令に基づき開示を求められた場合\n(2)当社の権利、利益、名誉等を保護するために必要であると当社が判断した場合\n2. 会員情報につきましては、当社の「個人情報保護への取組み」に従い、当社が管理します。当社は、会員情報を、会員へのサービス提供、サービス内容の向上、サービスの利用促進、およびサービスの健全かつ円滑な運営の確保を図る目的のために、当社おいて利用することができるものとします。\n3. 当社は、会員に対して、メールマガジンその他の方法による情報提供(広告を含みます)を行うことができるものとします。会員が情報提供を希望しない場合は、当社所定の方法に従い、その旨を通知して頂ければ、情報提供を停止します。ただし、本サービス運営に必要な情報提供につきましては、会員の希望により停止をすることはできません。', 7, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(7, '第7条 (禁止事項)', '本サービスの利用に際して、会員に対し次の各号の行為を行うことを禁止します。\n\n1. 法令または本規約、本サービスご利用上のご注意、本サービスでのお買い物上のご注意その他の本規約等に違反すること\n2. 当社、およびその他の第三者の権利、利益、名誉等を損ねること\n3. 青少年の心身に悪影響を及ぼす恐れがある行為、その他公序良俗に反する行為を行うこと\n4. 他の利用者その他の第三者に迷惑となる行為や不快感を抱かせる行為を行うこと\n5. 虚偽の情報を入力すること\n6. 有害なコンピュータープログラム、メール等を送信または書き込むこと\n7. 当社のサーバーその他のコンピューターに不正にアクセスすること\n8. パスワードを第三者に貸与・譲渡すること、または第三者と共用すること\n9. その他当社が不適切と判断すること', 6, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(8, '第8条 (サービスの中断・停止等)', '1. 当社は、本サービスの稼動状態を良好に保つために、次の各号の一に該当する場合、予告なしに、本サービスの提供全てあるいは一部を停止することがあります。\n(1)システムの定期保守および緊急保守のために必要な場合\n(2)システムに負荷が集中した場合\n(3)火災、停電、第三者による妨害行為などによりシステムの運用が困難になった場合\n(4)その他、止むを得ずシステムの停止が必要と当社が判断した場合', 5, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(9, '第9条 (サービスの変更・廃止)', '当社は、その判断によりサービスの全部または一部を事前の通知なく、適宜変更・廃止できるものとします。', 4, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(10, '第10条 (免責)', '1. 通信回線やコンピューターなどの障害によるシステムの中断・遅滞・中止・データの消失、データへの不正アクセスにより生じた損害、その他当社のサービスに関して会員に生じた損害について、当社は一切責任を負わないものとします。\n2. 当社は、当社のウェブページ・サーバー・ドメインなどから送られるメール・コンテンツに、コンピューター・ウィルスなどの有害なものが含まれていないことを保証いたしません。\n3. 会員が本規約等に違反したことによって生じた損害については、当社は一切責任を負いません。', 3, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(11, '第11条 (本規約の改定)', '当社は、本規約を任意に改定できるものとし、また、当社において本規約を補充する規約(以下「補充規約」といいます)を定めることができます。本規約の改定または補充は、改定後の本規約または補充規約を当社所定のサイトに掲示したときにその効力を生じるものとします。この場合、会員は、改定後の規約および補充規約に従うものと致します。', 2, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(12, '第12条 (準拠法、管轄裁判所)', '本規約に関して紛争が生じた場合、当社本店所在地を管轄する地方裁判所を第一審の専属的合意管轄裁判所とします。 ', 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_kiyaku_kiyaku_id_seq`
--

CREATE TABLE `dtb_kiyaku_kiyaku_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_kiyaku_kiyaku_id_seq`
--

INSERT INTO `dtb_kiyaku_kiyaku_id_seq` (`sequence`) VALUES
(12);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mailmaga_template`
--

CREATE TABLE `dtb_mailmaga_template` (
  `template_id` int(11) NOT NULL,
  `subject` text DEFAULT NULL,
  `mail_method` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mailmaga_template_template_id_seq`
--

CREATE TABLE `dtb_mailmaga_template_template_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mailtemplate`
--

CREATE TABLE `dtb_mailtemplate` (
  `template_id` int(11) NOT NULL,
  `subject` text DEFAULT NULL,
  `header` text DEFAULT NULL,
  `footer` text DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_mailtemplate`
--

INSERT INTO `dtb_mailtemplate` (`template_id`, `subject`, `header`, `footer`, `creator_id`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 'ご注文ありがとうございます', 'この度はご注文いただき誠にありがとうございます。\n下記ご注文内容にお間違えがないかご確認下さい。\n\n', '\n============================================\n\n\nこのメッセージはお客様へのお知らせ専用ですので、\nこのメッセージへの返信としてご質問をお送りいただいても回答できません。\nご了承ください。\n\nご質問やご不明な点がございましたら、こちらからお願いいたします。\n\n', 0, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04'),
(5, 'お問い合わせを受け付けました', NULL, NULL, 0, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mail_history`
--

CREATE TABLE `dtb_mail_history` (
  `send_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `send_date` datetime DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `subject` text DEFAULT NULL,
  `mail_body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_mail_history`
--

INSERT INTO `dtb_mail_history` (`send_id`, `order_id`, `send_date`, `template_id`, `creator_id`, `subject`, `mail_body`) VALUES
(1, 1, '2022-07-24 20:03:13', 1, 0, '【特攻天国】 ご注文ありがとうございます', '宇垣 美里 様\n\nこの度はご注文いただき誠にありがとうございます。\n下記ご注文内容にお間違えがないかご確認下さい。\n\n************************************************\n　ご請求金額\n************************************************\n\nご注文番号：1\nお支払い合計：￥1,324\nお支払い方法：銀行振込\nメッセージ：\n\n\n************************************************\n　ご注文商品明細\n************************************************\n\n商品コード: cm03\n商品名: チョコシュークリーム  \n単価：￥324\n数量：1\n\n-------------------------------------------------\n小　計 ￥324 (うち消費税 ￥24)\n送　料 ￥1,000\n手数料 ￥0\n============================================\n合　計 ￥1,324\n\n************************************************\n　ご注文者情報\n************************************************\n　お名前　：宇垣 美里　様\n　郵便番号：〒652-0807\n　住所　　：兵庫県神戸市兵庫区浜崎通り1-2-3\n　電話番号：080-1111-1111\n　FAX番号 ：\n　メールアドレス：ugaki@gmail.com\n\n************************************************\n　配送情報\n************************************************\n\n◎お届け先\n　お名前　：宇垣 美里　様\n　郵便番号：〒652-0807\n　住所　　：兵庫県神戸市兵庫区浜崎通り1-2-3\n　電話番号：080-1111-1111\n　FAX番号 ：　\n　お届け日：指定なし\n　お届け時間：指定なし\n\n商品コード: cm03\n商品名: チョコシュークリーム  \n単価：￥324\n数量：1\n\n============================================\nご使用ポイント 0 pt\n今回加算される予定のポイント 6 pt\n現在の所持ポイント 300 pt\n\n============================================\n\n\nこのメッセージはお客様へのお知らせ専用ですので、\nこのメッセージへの返信としてご質問をお送りいただいても回答できません。\nご了承ください。\n\nご質問やご不明な点がございましたら、こちらからお願いいたします。\n');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mail_history_send_id_seq`
--

CREATE TABLE `dtb_mail_history_send_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_mail_history_send_id_seq`
--

INSERT INTO `dtb_mail_history_send_id_seq` (`sequence`) VALUES
(1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_maker`
--

CREATE TABLE `dtb_maker` (
  `maker_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `RANK` int(11) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_maker_count`
--

CREATE TABLE `dtb_maker_count` (
  `maker_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_maker_maker_id_seq`
--

CREATE TABLE `dtb_maker_maker_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_member`
--

CREATE TABLE `dtb_member` (
  `member_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `login_id` text NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `authority` smallint(6) NOT NULL,
  `RANK` int(11) NOT NULL DEFAULT 0,
  `work` smallint(6) NOT NULL DEFAULT 1,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_member`
--

INSERT INTO `dtb_member` (`member_id`, `name`, `department`, `login_id`, `password`, `salt`, `authority`, `RANK`, `work`, `del_flg`, `creator_id`, `create_date`, `update_date`, `login_date`) VALUES
(1, 'dummy', NULL, 'dummy', 'dummy', 'dummy', 0, 0, 1, 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, '管理者', NULL, 'pugachev2011', '855a732b168a37eee93ff7cae3aa4b099f20911e1027abcc061217c8773882eb', '809b417d53', 0, 1, 1, 0, 0, '2022-07-16 12:27:10', '2022-07-16 12:27:10', '2022-08-21 10:28:05');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_member_member_id_seq`
--

CREATE TABLE `dtb_member_member_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_member_member_id_seq`
--

INSERT INTO `dtb_member_member_id_seq` (`sequence`) VALUES
(2);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_mobile_ext_session_id`
--

CREATE TABLE `dtb_mobile_ext_session_id` (
  `session_id` text NOT NULL,
  `param_key` text DEFAULT NULL,
  `param_value` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_module`
--

CREATE TABLE `dtb_module` (
  `module_id` int(11) NOT NULL,
  `module_code` text NOT NULL,
  `module_name` text NOT NULL,
  `sub_data` text DEFAULT NULL,
  `auto_update_flg` smallint(6) NOT NULL DEFAULT 0,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_module`
--

INSERT INTO `dtb_module` (`module_id`, `module_code`, `module_name`, `sub_data`, `auto_update_flg`, `del_flg`, `create_date`, `update_date`) VALUES
(0, '0', 'patch', NULL, 0, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_module_update_logs`
--

CREATE TABLE `dtb_module_update_logs` (
  `log_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `buckup_path` text DEFAULT NULL,
  `error_flg` smallint(6) DEFAULT 0,
  `error` text DEFAULT NULL,
  `ok` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_module_update_logs_log_id_seq`
--

CREATE TABLE `dtb_module_update_logs_log_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_news`
--

CREATE TABLE `dtb_news` (
  `news_id` int(11) NOT NULL,
  `news_date` datetime DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `news_title` text NOT NULL,
  `news_comment` text DEFAULT NULL,
  `news_url` text DEFAULT NULL,
  `news_select` smallint(6) NOT NULL DEFAULT 0,
  `link_method` text DEFAULT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_news`
--

INSERT INTO `dtb_news` (`news_id`, `news_date`, `RANK`, `news_title`, `news_comment`, `news_url`, `news_select`, `link_method`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, '2022-07-16 21:27:04', 1, 'サイトオープンいたしました!', '一人暮らしからオフィスなどさまざまなシーンで あなたの生活をサポートするグッズをご家庭へお届けします！一人暮らしからオフィスなどさまざまなシーンで あなたの生活をサポートするグッズをご家庭へお届けします！一人暮らしからオフィスなどさまざまなシーンで あなたの生活をサポートするグッズをご家庭へお届けします！', NULL, 0, NULL, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_news_news_id_seq`
--

CREATE TABLE `dtb_news_news_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_news_news_id_seq`
--

INSERT INTO `dtb_news_news_id_seq` (`sequence`) VALUES
(1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_order`
--

CREATE TABLE `dtb_order` (
  `order_id` int(11) NOT NULL,
  `order_temp_id` text DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `order_name01` text DEFAULT NULL,
  `order_name02` text DEFAULT NULL,
  `order_kana01` text DEFAULT NULL,
  `order_kana02` text DEFAULT NULL,
  `order_company_name` text DEFAULT NULL,
  `order_email` text DEFAULT NULL,
  `order_tel01` text DEFAULT NULL,
  `order_tel02` text DEFAULT NULL,
  `order_tel03` text DEFAULT NULL,
  `order_fax01` text DEFAULT NULL,
  `order_fax02` text DEFAULT NULL,
  `order_fax03` text DEFAULT NULL,
  `order_zip01` text DEFAULT NULL,
  `order_zip02` text DEFAULT NULL,
  `order_zipcode` text DEFAULT NULL,
  `order_country_id` int(11) DEFAULT NULL,
  `order_pref` smallint(6) DEFAULT NULL,
  `order_addr01` text DEFAULT NULL,
  `order_addr02` text DEFAULT NULL,
  `order_sex` smallint(6) DEFAULT NULL,
  `order_birth` datetime DEFAULT NULL,
  `order_job` int(11) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) NOT NULL DEFAULT 0,
  `deliv_id` int(11) DEFAULT NULL,
  `deliv_fee` decimal(10,0) DEFAULT NULL,
  `charge` decimal(10,0) DEFAULT NULL,
  `use_point` decimal(10,0) NOT NULL DEFAULT 0,
  `add_point` decimal(10,0) NOT NULL DEFAULT 0,
  `birth_point` decimal(10,0) NOT NULL DEFAULT 0,
  `tax` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `payment_total` decimal(10,0) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payment_method` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `commit_date` datetime DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `device_type_id` int(11) DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `memo01` text DEFAULT NULL,
  `memo02` text DEFAULT NULL,
  `memo03` text DEFAULT NULL,
  `memo04` text DEFAULT NULL,
  `memo05` text DEFAULT NULL,
  `memo06` text DEFAULT NULL,
  `memo07` text DEFAULT NULL,
  `memo08` text DEFAULT NULL,
  `memo09` text DEFAULT NULL,
  `memo10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_order`
--

INSERT INTO `dtb_order` (`order_id`, `order_temp_id`, `customer_id`, `message`, `order_name01`, `order_name02`, `order_kana01`, `order_kana02`, `order_company_name`, `order_email`, `order_tel01`, `order_tel02`, `order_tel03`, `order_fax01`, `order_fax02`, `order_fax03`, `order_zip01`, `order_zip02`, `order_zipcode`, `order_country_id`, `order_pref`, `order_addr01`, `order_addr02`, `order_sex`, `order_birth`, `order_job`, `subtotal`, `discount`, `deliv_id`, `deliv_fee`, `charge`, `use_point`, `add_point`, `birth_point`, `tax`, `total`, `payment_total`, `payment_id`, `payment_method`, `note`, `status`, `create_date`, `update_date`, `commit_date`, `payment_date`, `device_type_id`, `del_flg`, `memo01`, `memo02`, `memo03`, `memo04`, `memo05`, `memo06`, `memo07`, `memo08`, `memo09`, `memo10`) VALUES
(1, '62dd26e9a3413sM6uz3Ee', 2, NULL, '宇垣', '美里', 'ウガキ', 'ミサト', NULL, 'ugaki@gmail.com', '080', '1111', '1111', NULL, NULL, NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎通り1-2-3', 2, NULL, NULL, '324', '0', 1, '1000', '0', '0', '6', '0', '24', '1324', '1324', 3, '銀行振込', NULL, 1, '2022-07-24 11:03:13', '2022-07-24 11:03:13', NULL, NULL, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_order_detail`
--

CREATE TABLE `dtb_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_class_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_code` text DEFAULT NULL,
  `classcategory_name1` text DEFAULT NULL,
  `classcategory_name2` text DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  `point_rate` decimal(10,0) NOT NULL DEFAULT 0,
  `tax_rate` decimal(10,0) DEFAULT NULL,
  `tax_rule` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_order_detail`
--

INSERT INTO `dtb_order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_class_id`, `product_name`, `product_code`, `classcategory_name1`, `classcategory_name2`, `price`, `quantity`, `point_rate`, `tax_rate`, `tax_rule`) VALUES
(1, 1, 10, 16, 'チョコシュークリーム', 'cm03', NULL, NULL, '300', '1', '2', '8', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_order_detail_order_detail_id_seq`
--

CREATE TABLE `dtb_order_detail_order_detail_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_order_detail_order_detail_id_seq`
--

INSERT INTO `dtb_order_detail_order_detail_id_seq` (`sequence`) VALUES
(1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_order_order_id_seq`
--

CREATE TABLE `dtb_order_order_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_order_order_id_seq`
--

INSERT INTO `dtb_order_order_id_seq` (`sequence`) VALUES
(1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_order_temp`
--

CREATE TABLE `dtb_order_temp` (
  `order_temp_id` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `order_name01` text DEFAULT NULL,
  `order_name02` text DEFAULT NULL,
  `order_kana01` text DEFAULT NULL,
  `order_kana02` text DEFAULT NULL,
  `order_company_name` text DEFAULT NULL,
  `order_email` text DEFAULT NULL,
  `order_tel01` text DEFAULT NULL,
  `order_tel02` text DEFAULT NULL,
  `order_tel03` text DEFAULT NULL,
  `order_fax01` text DEFAULT NULL,
  `order_fax02` text DEFAULT NULL,
  `order_fax03` text DEFAULT NULL,
  `order_zip01` text DEFAULT NULL,
  `order_zip02` text DEFAULT NULL,
  `order_zipcode` text DEFAULT NULL,
  `order_country_id` int(11) DEFAULT NULL,
  `order_pref` smallint(6) DEFAULT NULL,
  `order_addr01` text DEFAULT NULL,
  `order_addr02` text DEFAULT NULL,
  `order_sex` smallint(6) DEFAULT NULL,
  `order_birth` datetime DEFAULT NULL,
  `order_job` int(11) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) NOT NULL DEFAULT 0,
  `deliv_id` int(11) DEFAULT NULL,
  `deliv_fee` decimal(10,0) DEFAULT NULL,
  `charge` decimal(10,0) DEFAULT NULL,
  `use_point` decimal(10,0) NOT NULL DEFAULT 0,
  `add_point` decimal(10,0) NOT NULL DEFAULT 0,
  `birth_point` decimal(10,0) NOT NULL DEFAULT 0,
  `tax` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `payment_total` decimal(10,0) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payment_method` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `mail_flag` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `deliv_check` smallint(6) DEFAULT NULL,
  `point_check` smallint(6) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `device_type_id` int(11) DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `order_id` int(11) DEFAULT NULL,
  `memo01` text DEFAULT NULL,
  `memo02` text DEFAULT NULL,
  `memo03` text DEFAULT NULL,
  `memo04` text DEFAULT NULL,
  `memo05` text DEFAULT NULL,
  `memo06` text DEFAULT NULL,
  `memo07` text DEFAULT NULL,
  `memo08` text DEFAULT NULL,
  `memo09` text DEFAULT NULL,
  `memo10` text DEFAULT NULL,
  `session` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_order_temp`
--

INSERT INTO `dtb_order_temp` (`order_temp_id`, `customer_id`, `message`, `order_name01`, `order_name02`, `order_kana01`, `order_kana02`, `order_company_name`, `order_email`, `order_tel01`, `order_tel02`, `order_tel03`, `order_fax01`, `order_fax02`, `order_fax03`, `order_zip01`, `order_zip02`, `order_zipcode`, `order_country_id`, `order_pref`, `order_addr01`, `order_addr02`, `order_sex`, `order_birth`, `order_job`, `subtotal`, `discount`, `deliv_id`, `deliv_fee`, `charge`, `use_point`, `add_point`, `birth_point`, `tax`, `total`, `payment_total`, `payment_id`, `payment_method`, `note`, `mail_flag`, `status`, `deliv_check`, `point_check`, `create_date`, `update_date`, `device_type_id`, `del_flg`, `order_id`, `memo01`, `memo02`, `memo03`, `memo04`, `memo05`, `memo06`, `memo07`, `memo08`, `memo09`, `memo10`, `session`) VALUES
('62dd26e9a3413sM6uz3Ee', 2, NULL, '宇垣', '美里', 'ウガキ', 'ミサト', NULL, 'ugaki@gmail.com', '080', '1111', '1111', NULL, NULL, NULL, '652', '0807', NULL, 392, 28, '神戸市兵庫区', '浜崎通り1-2-3', 2, NULL, NULL, '324', '0', 1, '1000', '0', '0', '6', '0', '24', '1324', '1324', 3, '銀行振込', NULL, NULL, NULL, NULL, 2, '2022-07-24 11:03:07', '2022-07-24 11:03:13', 10, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a:10:{s:4:\"cart\";a:1:{i:1;a:3:{i:1;a:11:{s:2:\"id\";s:2:\"16\";s:8:\"quantity\";s:1:\"1\";s:7:\"cart_no\";i:1;s:13:\"productsClass\";a:15:{s:10:\"product_id\";s:2:\"10\";s:5:\"stock\";s:2:\"15\";s:15:\"stock_unlimited\";s:1:\"0\";s:10:\"sale_limit\";N;s:7:\"price02\";s:3:\"300\";s:10:\"point_rate\";s:1:\"2\";s:12:\"product_code\";s:4:\"cm03\";s:16:\"product_class_id\";s:2:\"16\";s:19:\"classcategory_name1\";N;s:11:\"class_name1\";N;s:19:\"classcategory_name2\";N;s:11:\"class_name2\";N;s:4:\"name\";s:30:\"チョコシュークリーム\";s:15:\"main_list_image\";s:26:\"07162217_62d2ba526ddf1.jpg\";s:10:\"main_image\";s:26:\"07162217_62d2ba5fd4495.jpg\";}s:5:\"price\";s:3:\"300\";s:10:\"point_rate\";s:1:\"2\";s:12:\"price_inctax\";d:324;s:12:\"total_inctax\";d:324;s:8:\"tax_rate\";s:1:\"8\";s:8:\"tax_rule\";s:1:\"1\";s:10:\"tax_adjust\";s:1:\"0\";}s:15:\"cancel_purchase\";b:0;i:0;a:3:{s:5:\"price\";s:0:\"\";s:8:\"quantity\";s:0:\"\";s:10:\"point_rate\";s:0:\"\";}}}s:8:\"prev_url\";s:19:\"/eccube/html/cart/?\";s:13:\"transactionid\";s:40:\"e8264dbfb333e00b5af22f746a1bb31f41e2dd13\";s:8:\"customer\";a:45:{s:11:\"customer_id\";s:1:\"2\";s:6:\"name01\";s:6:\"宇垣\";s:6:\"name02\";s:6:\"美里\";s:6:\"kana01\";s:9:\"ウガキ\";s:6:\"kana02\";s:9:\"ミサト\";s:12:\"company_name\";N;s:5:\"zip01\";s:3:\"652\";s:5:\"zip02\";s:4:\"0807\";s:7:\"zipcode\";N;s:10:\"country_id\";s:3:\"392\";s:4:\"pref\";s:2:\"28\";s:6:\"addr01\";s:18:\"神戸市兵庫区\";s:6:\"addr02\";s:17:\"浜崎通り1-2-3\";s:5:\"email\";s:15:\"ugaki@gmail.com\";s:12:\"email_mobile\";N;s:5:\"tel01\";s:3:\"080\";s:5:\"tel02\";s:4:\"1111\";s:5:\"tel03\";s:4:\"1111\";s:5:\"fax01\";N;s:5:\"fax02\";N;s:5:\"fax03\";N;s:3:\"sex\";s:1:\"2\";s:3:\"job\";N;s:5:\"birth\";N;s:8:\"password\";s:64:\"9b2357713962fe1ec8aed92cf458d56276d941d3042ab6e6de8552f72d330200\";s:8:\"reminder\";s:1:\"1\";s:15:\"reminder_answer\";s:64:\"f588543c04ad05a9eceb2287fc38f2f749e4161fc74e6b4d7f5517b212e5dd67\";s:4:\"salt\";s:10:\"c57cbe2935\";s:10:\"secret_key\";s:22:\"r62d2c1fa6abba4GX5WfM4\";s:14:\"first_buy_date\";N;s:13:\"last_buy_date\";N;s:9:\"buy_times\";s:1:\"0\";s:9:\"buy_total\";s:1:\"0\";s:5:\"point\";s:3:\"300\";s:4:\"note\";N;s:6:\"status\";s:1:\"2\";s:11:\"create_date\";s:19:\"2022-07-16 22:49:46\";s:11:\"update_date\";s:19:\"2022-07-18 20:28:26\";s:7:\"del_flg\";s:1:\"0\";s:15:\"mobile_phone_id\";N;s:12:\"mailmaga_flg\";s:1:\"3\";s:9:\"nick_name\";s:9:\"うがみ\";s:8:\"house_id\";s:1:\"2\";s:5:\"dm_id\";s:1:\"2\";s:8:\"bijin_id\";s:1:\"3\";}s:4:\"site\";a:5:{s:18:\"pre_regist_success\";b:0;s:14:\"regist_success\";b:0;s:8:\"pre_page\";s:33:\"/eccube/html/shopping/confirm.php\";s:8:\"now_page\";s:33:\"/eccube/html/shopping/confirm.php\";s:6:\"uniqid\";s:21:\"62dd26e9a3413sM6uz3Ee\";}s:13:\"cart_prev_url\";s:63:\"https://localhost/eccube/html/products/detail.php?product_id=10\";s:7:\"cartKey\";s:1:\"1\";s:30:\"savecart_62dd26e9a3413sM6uz3Ee\";a:3:{i:1;a:11:{s:2:\"id\";s:2:\"16\";s:8:\"quantity\";s:1:\"1\";s:7:\"cart_no\";i:1;s:13:\"productsClass\";a:15:{s:10:\"product_id\";s:2:\"10\";s:5:\"stock\";s:2:\"15\";s:15:\"stock_unlimited\";s:1:\"0\";s:10:\"sale_limit\";N;s:7:\"price02\";s:3:\"300\";s:10:\"point_rate\";s:1:\"2\";s:12:\"product_code\";s:4:\"cm03\";s:16:\"product_class_id\";s:2:\"16\";s:19:\"classcategory_name1\";N;s:11:\"class_name1\";N;s:19:\"classcategory_name2\";N;s:11:\"class_name2\";N;s:4:\"name\";s:30:\"チョコシュークリーム\";s:15:\"main_list_image\";s:26:\"07162217_62d2ba526ddf1.jpg\";s:10:\"main_image\";s:26:\"07162217_62d2ba5fd4495.jpg\";}s:5:\"price\";s:3:\"300\";s:10:\"point_rate\";s:1:\"2\";s:12:\"price_inctax\";d:324;s:12:\"total_inctax\";d:324;s:8:\"tax_rate\";s:1:\"8\";s:8:\"tax_rule\";s:1:\"1\";s:10:\"tax_adjust\";s:1:\"0\";}s:15:\"cancel_purchase\";b:0;i:0;a:3:{s:5:\"price\";s:0:\"\";s:8:\"quantity\";s:0:\"\";s:10:\"point_rate\";s:0:\"\";}}s:8:\"shipping\";a:1:{i:0;a:30:{s:15:\"shipping_name01\";s:6:\"宇垣\";s:15:\"shipping_name02\";s:6:\"美里\";s:15:\"shipping_kana01\";s:9:\"ウガキ\";s:15:\"shipping_kana02\";s:9:\"ミサト\";s:21:\"shipping_company_name\";s:0:\"\";s:12:\"shipping_sex\";s:1:\"2\";s:14:\"shipping_zip01\";s:3:\"652\";s:14:\"shipping_zip02\";s:4:\"0807\";s:19:\"shipping_country_id\";s:3:\"392\";s:16:\"shipping_zipcode\";s:0:\"\";s:13:\"shipping_pref\";s:2:\"28\";s:15:\"shipping_addr01\";s:18:\"神戸市兵庫区\";s:15:\"shipping_addr02\";s:17:\"浜崎通り1-2-3\";s:14:\"shipping_tel01\";s:3:\"080\";s:14:\"shipping_tel02\";s:4:\"1111\";s:14:\"shipping_tel03\";s:4:\"1111\";s:14:\"shipping_fax01\";s:0:\"\";s:14:\"shipping_fax02\";s:0:\"\";s:14:\"shipping_fax03\";s:0:\"\";s:12:\"shipping_job\";s:0:\"\";s:14:\"shipping_birth\";s:0:\"\";s:14:\"shipping_email\";s:15:\"ugaki@gmail.com\";s:11:\"customer_id\";s:1:\"2\";s:11:\"update_date\";s:17:\"CURRENT_TIMESTAMP\";s:11:\"shipping_id\";i:0;s:13:\"shipment_item\";a:1:{i:16;a:6:{s:11:\"shipping_id\";i:0;s:16:\"product_class_id\";s:2:\"16\";s:8:\"quantity\";s:1:\"1\";s:13:\"productsClass\";a:87:{s:10:\"product_id\";s:2:\"10\";s:5:\"stock\";s:2:\"15\";s:15:\"stock_unlimited\";s:1:\"0\";s:10:\"sale_limit\";N;s:7:\"price01\";s:3:\"310\";s:7:\"price02\";s:3:\"300\";s:10:\"point_rate\";s:1:\"2\";s:12:\"product_code\";s:4:\"cm03\";s:16:\"product_class_id\";s:2:\"16\";s:7:\"del_flg\";s:1:\"0\";s:15:\"product_type_id\";s:1:\"1\";s:13:\"down_filename\";N;s:17:\"down_realfilename\";N;s:19:\"classcategory_name1\";N;s:5:\"rank1\";s:1:\"0\";s:11:\"class_name1\";N;s:9:\"class_id1\";N;s:17:\"classcategory_id1\";s:1:\"0\";s:17:\"classcategory_id2\";s:1:\"0\";s:19:\"classcategory_name2\";N;s:5:\"rank2\";s:1:\"0\";s:11:\"class_name2\";N;s:9:\"class_id2\";N;s:14:\"price01_inctax\";d:335;s:14:\"price02_inctax\";d:324;s:4:\"name\";s:30:\"チョコシュークリーム\";s:8:\"maker_id\";N;s:6:\"status\";s:1:\"1\";s:8:\"comment1\";N;s:8:\"comment2\";N;s:8:\"comment3\";N;s:8:\"comment4\";N;s:8:\"comment5\";N;s:8:\"comment6\";N;s:4:\"note\";N;s:17:\"main_list_comment\";s:27:\"チョコたっぷりです\";s:15:\"main_list_image\";s:26:\"07162217_62d2ba526ddf1.jpg\";s:12:\"main_comment\";s:18:\"人気商品です\";s:10:\"main_image\";s:26:\"07162217_62d2ba5fd4495.jpg\";s:16:\"main_large_image\";s:26:\"07162217_62d2ba6952e0e.jpg\";s:10:\"sub_title1\";N;s:12:\"sub_comment1\";N;s:10:\"sub_image1\";N;s:16:\"sub_large_image1\";N;s:10:\"sub_title2\";N;s:12:\"sub_comment2\";N;s:10:\"sub_image2\";N;s:16:\"sub_large_image2\";N;s:10:\"sub_title3\";N;s:12:\"sub_comment3\";N;s:10:\"sub_image3\";N;s:16:\"sub_large_image3\";N;s:10:\"sub_title4\";N;s:12:\"sub_comment4\";N;s:10:\"sub_image4\";N;s:16:\"sub_large_image4\";N;s:10:\"sub_title5\";N;s:12:\"sub_comment5\";N;s:10:\"sub_image5\";N;s:16:\"sub_large_image5\";N;s:10:\"sub_title6\";N;s:12:\"sub_comment6\";N;s:10:\"sub_image6\";N;s:16:\"sub_large_image6\";N;s:10:\"creator_id\";s:1:\"2\";s:11:\"create_date\";s:19:\"2022-07-16 22:17:35\";s:11:\"update_date\";s:19:\"2022-07-16 22:17:35\";s:13:\"deliv_date_id\";N;s:10:\"maker_code\";s:15:\"タカラブネ\";s:16:\"delivery_type_id\";s:1:\"3\";s:18:\"warranty_period_id\";s:1:\"1\";s:16:\"product_code_min\";s:4:\"cm03\";s:16:\"product_code_max\";s:4:\"cm03\";s:11:\"price01_min\";s:3:\"310\";s:11:\"price01_max\";s:3:\"310\";s:11:\"price02_min\";s:3:\"300\";s:11:\"price02_max\";s:3:\"300\";s:9:\"stock_min\";s:2:\"15\";s:9:\"stock_max\";s:2:\"15\";s:19:\"stock_unlimited_min\";s:1:\"0\";s:19:\"stock_unlimited_max\";s:1:\"0\";s:9:\"deliv_fee\";N;s:10:\"maker_name\";N;s:18:\"price01_min_inctax\";d:335;s:18:\"price01_max_inctax\";d:335;s:18:\"price02_min_inctax\";d:324;s:18:\"price02_max_inctax\";d:324;}s:5:\"price\";s:3:\"300\";s:12:\"total_inctax\";d:324;}}s:8:\"deliv_id\";s:1:\"1\";s:7:\"time_id\";s:0:\"\";s:13:\"shipping_time\";N;s:13:\"shipping_date\";s:0:\"\";}}s:8:\"order_id\";s:1:\"1\";}');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_other_deliv`
--

CREATE TABLE `dtb_other_deliv` (
  `other_deliv_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name01` text DEFAULT NULL,
  `name02` text DEFAULT NULL,
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
  `tel01` text DEFAULT NULL,
  `tel02` text DEFAULT NULL,
  `tel03` text DEFAULT NULL,
  `fax01` text DEFAULT NULL,
  `fax02` text DEFAULT NULL,
  `fax03` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_other_deliv_other_deliv_id_seq`
--

CREATE TABLE `dtb_other_deliv_other_deliv_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_ownersstore_settings`
--

CREATE TABLE `dtb_ownersstore_settings` (
  `public_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_pagelayout`
--

CREATE TABLE `dtb_pagelayout` (
  `device_type_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_name` text DEFAULT NULL,
  `url` text NOT NULL,
  `filename` text DEFAULT NULL,
  `header_chk` smallint(6) DEFAULT 1,
  `footer_chk` smallint(6) DEFAULT 1,
  `edit_flg` smallint(6) DEFAULT 1,
  `author` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `update_url` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `meta_robots` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_pagelayout`
--

INSERT INTO `dtb_pagelayout` (`device_type_id`, `page_id`, `page_name`, `url`, `filename`, `header_chk`, `footer_chk`, `edit_flg`, `author`, `description`, `keyword`, `update_url`, `create_date`, `update_date`, `meta_robots`) VALUES
(1, 0, NULL, 'preview', 'preview', 1, 1, 1, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 1, 'TOPページ', 'index.php', 'index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 2, '商品一覧ページ', 'products/list.php', 'products/list', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 3, '商品検索ページ', 'products/search.php', 'products/search', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 4, '商品カテゴリページ', 'products/category_list.php', 'products/category_list', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 5, '商品詳細ページ', 'products/detail.php', 'products/detail', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 6, 'MYページ', 'mypage/index.php', 'mypage/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 7, 'MYページ/会員登録内容変更(入力ページ)', 'mypage/change.php', 'mypage/change', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 8, 'MYページ/会員登録内容変更(完了ページ)', 'mypage/change_complete.php', 'mypage/change_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 9, 'MYページ/お届け先追加･変更', 'mypage/delivery.php', 'mypage/delivery', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 10, 'MYページ/お気に入り一覧', 'mypage/favorite.php', 'mypage/favorite', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 11, 'MYページ/購入履歴詳細', 'mypage/history.php', 'mypage/history', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 12, 'MYページ/ログイン', 'mypage/login.php', 'mypage/login', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 13, 'MYページ/退会手続き(入力ページ)', 'mypage/refusal.php', 'mypage/refusal', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 14, 'MYページ/退会手続き(完了ページ)', 'mypage/refusal_complete.php', 'mypage/refusal_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 16, '現在のカゴの中', 'cart/index.php', 'cart/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 17, 'お問い合わせ(入力ページ)', 'contact/index.php', 'contact/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 18, 'お問い合わせ(完了ページ)', 'contact/complete.php', 'contact/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 19, '会員登録(入力ページ)', 'entry/index.php', 'entry/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 20, 'ご利用規約', 'entry/kiyaku.php', 'entry/kiyaku', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 21, '会員登録(完了ページ)', 'entry/complete.php', 'entry/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 22, '携帯メール登録', 'entry/email_mobile.php', 'entry/email_mobile', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 23, '特定商取引に関する法律に基づく表記', 'order/index.php', 'order/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 24, '本会員登録(完了ページ)', 'regist/complete.php', 'regist/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 25, '商品購入/ログイン', 'shopping/index.php', 'shopping/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 26, '商品購入/お届け先の指定', 'shopping/deliv.php', 'shopping/deliv', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 27, '商品購入/お届け先の複数指定', 'shopping/multiple.php', 'shopping/multiple', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 28, '商品購入/お支払方法・お届け時間等の指定', 'shopping/payment.php', 'shopping/payment', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 29, '商品購入/ご入力内容のご確認', 'shopping/confirm.php', 'shopping/confirm', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 30, '商品購入/ご注文完了', 'shopping/complete.php', 'shopping/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 31, '非対応デバイス', 'unsupported/index.php', 'unsupported/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(1, 32, 'ご利用ガイド', 'guide/index.php', 'guide/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 33, 'ご利用ガイド/ご利用方法', 'guide/usage.php', 'guide/usage', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 34, 'ご利用ガイド/プライバシーポリシー', 'guide/privacy.php', 'guide/privacy', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 35, 'ご利用ガイド/通信料について', 'guide/charge.php', 'guide/charge', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 36, 'ご利用ガイド/ご利用規約', 'guide/kiyaku.php', 'guide/kiyaku', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(1, 37, 'ご利用ガイド/運営会社紹介', 'guide/about.php', 'guide/about', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 0, NULL, 'preview', 'preview', 1, 1, 1, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 1, 'TOPページ', 'index.php', 'index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 2, '商品一覧ページ', 'products/list.php', 'products/list', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 3, '商品詳細ページ', 'products/detail.php', 'products/detail', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 4, 'MYページ', 'mypage/index.php', 'mypage/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 5, 'MYページ/会員登録内容変更(入力ページ)', 'mypage/change.php', 'mypage/change', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 6, 'MYページ/会員登録内容変更(完了ページ)', 'mypage/change_complete.php', 'mypage/change_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 7, 'MYページ/お届け先追加･変更', 'mypage/delivery.php', 'mypage/delivery', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 8, 'MYページ/お気に入り一覧', 'mypage/favorite.php', 'mypage/favorite', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 9, 'MYページ/購入履歴詳細', 'mypage/history.php', 'mypage/history', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 10, 'MYページ/ログイン', 'mypage/login.php', 'mypage/login', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 11, 'MYページ/退会手続き(入力ページ)', 'mypage/refusal.php', 'mypage/refusal', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 12, 'MYページ/退会手続き(完了ページ)', 'mypage/refusal_complete.php', 'mypage/refusal_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 13, '当サイトについて', 'abouts/index.php', 'abouts/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 14, '現在のカゴの中', 'cart/index.php', 'cart/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 15, 'お問い合わせ(入力ページ)', 'contact/index.php', 'contact/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 16, 'お問い合わせ(完了ページ)', 'contact/complete.php', 'contact/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 17, '会員登録(入力ページ)', 'entry/index.php', 'entry/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 18, 'ご利用規約', 'entry/kiyaku.php', 'entry/kiyaku', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 19, '会員登録(完了ページ)', 'entry/complete.php', 'entry/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 20, '特定商取引に関する法律に基づく表記', 'order/index.php', 'order/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 21, '本会員登録(完了ページ)', 'regist/complete.php', 'regist/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 22, '商品購入/ログイン', 'shopping/index.php', 'shopping/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 23, '商品購入/お届け先の指定', 'shopping/deliv.php', 'shopping/deliv', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 24, '商品購入/お届け先の複数指定', 'shopping/multiple.php', 'shopping/multiple', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 25, '商品購入/お支払方法・お届け時間等の指定', 'shopping/payment.php', 'shopping/payment', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 26, '商品購入/ご入力内容のご確認', 'shopping/confirm.php', 'shopping/confirm', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 27, '商品購入/ご注文完了', 'shopping/complete.php', 'shopping/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(2, 28, 'プライバシーポリシー', 'guide/privacy.php', 'guide/privacy', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(2, 29, 'パスワードを忘れた方', 'forgot/index.php', 'forgot/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 0, 'プレビューデータ', 'preview', NULL, 1, 1, 1, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 1, 'TOPページ', 'index.php', 'index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 2, '商品一覧ページ', 'products/list.php', 'products/list', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 3, '商品詳細ページ', 'products/detail.php', 'products/detail', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 4, 'MYページ', 'mypage/index.php', 'mypage/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 5, 'MYページ/会員登録内容変更(入力ページ)', 'mypage/change.php', 'mypage/change', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 6, 'MYページ/会員登録内容変更(完了ページ)', 'mypage/change_complete.php', 'mypage/change_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 7, 'MYページ/お届け先追加･変更', 'mypage/delivery.php', 'mypage/delivery', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 8, 'MYページ/お気に入り一覧', 'mypage/favorite.php', 'mypage/favorite', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 9, 'MYページ/購入履歴詳細', 'mypage/history.php', 'mypage/history', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 10, 'MYページ/ログイン', 'mypage/login.php', 'mypage/login', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 11, 'MYページ/退会手続き(入力ページ)', 'mypage/refusal.php', 'mypage/refusal', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 12, 'MYページ/退会手続き(完了ページ)', 'mypage/refusal_complete.php', 'mypage/refusal_complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 13, '当サイトについて', 'abouts/index.php', 'abouts/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 14, '現在のカゴの中', 'cart/index.php', 'cart/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 15, 'お問い合わせ(入力ページ)', 'contact/index.php', 'contact/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 16, 'お問い合わせ(完了ページ)', 'contact/complete.php', 'contact/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 17, '会員登録(入力ページ)', 'entry/index.php', 'entry/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 18, 'ご利用規約', 'entry/kiyaku.php', 'entry/kiyaku', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 19, '会員登録(完了ページ)', 'entry/complete.php', 'entry/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 20, '特定商取引に関する法律に基づく表記', 'order/index.php', 'order/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 21, '本会員登録(完了ページ)', 'regist/complete.php', 'regist/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL),
(10, 22, '商品購入/ログイン', 'shopping/index.php', 'shopping/index', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 23, '商品購入/お届け先の指定', 'shopping/deliv.php', 'shopping/deliv', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 24, '商品購入/お届け先の複数指定', 'shopping/multiple.php', 'shopping/multiple', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 25, '商品購入/お支払方法・お届け時間等の指定', 'shopping/payment.php', 'shopping/payment', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 26, '商品購入/ご入力内容のご確認', 'shopping/confirm.php', 'shopping/confirm', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 27, '商品購入/ご注文完了', 'shopping/complete.php', 'shopping/complete', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'noindex'),
(10, 28, 'プライバシーポリシー', 'guide/privacy.php', 'guide/privacy', 1, 1, 2, NULL, NULL, NULL, NULL, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_payment`
--

CREATE TABLE `dtb_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_method` text DEFAULT NULL,
  `charge` decimal(10,0) DEFAULT NULL,
  `rule_max` decimal(10,0) DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `fix` smallint(6) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `payment_image` text DEFAULT NULL,
  `upper_rule` decimal(10,0) DEFAULT NULL,
  `charge_flg` smallint(6) DEFAULT 1,
  `rule_min` decimal(10,0) DEFAULT NULL,
  `upper_rule_max` decimal(10,0) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `module_path` text DEFAULT NULL,
  `memo01` text DEFAULT NULL,
  `memo02` text DEFAULT NULL,
  `memo03` text DEFAULT NULL,
  `memo04` text DEFAULT NULL,
  `memo05` text DEFAULT NULL,
  `memo06` text DEFAULT NULL,
  `memo07` text DEFAULT NULL,
  `memo08` text DEFAULT NULL,
  `memo09` text DEFAULT NULL,
  `memo10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_payment`
--

INSERT INTO `dtb_payment` (`payment_id`, `payment_method`, `charge`, `rule_max`, `RANK`, `note`, `fix`, `status`, `del_flg`, `creator_id`, `create_date`, `update_date`, `payment_image`, `upper_rule`, `charge_flg`, `rule_min`, `upper_rule_max`, `module_id`, `module_path`, `memo01`, `memo02`, `memo03`, `memo04`, `memo05`, `memo06`, `memo07`, `memo08`, `memo09`, `memo10`) VALUES
(1, '郵便振替', '0', NULL, 4, NULL, 2, 1, 0, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '現金書留', '0', NULL, 3, NULL, 2, 1, 0, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '銀行振込', '0', NULL, 2, NULL, 2, 1, 0, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '代金引換', '0', NULL, 1, NULL, 2, 1, 0, 1, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_payment_options`
--

CREATE TABLE `dtb_payment_options` (
  `deliv_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `RANK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_payment_options`
--

INSERT INTO `dtb_payment_options` (`deliv_id`, `payment_id`, `RANK`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 3),
(1, 4, 4),
(2, 3, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_payment_payment_id_seq`
--

CREATE TABLE `dtb_payment_payment_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_payment_payment_id_seq`
--

INSERT INTO `dtb_payment_payment_id_seq` (`sequence`) VALUES
(4);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_plugin`
--

CREATE TABLE `dtb_plugin` (
  `plugin_id` int(11) NOT NULL,
  `plugin_name` text NOT NULL,
  `plugin_code` text NOT NULL,
  `class_name` text NOT NULL,
  `author` text DEFAULT NULL,
  `author_site_url` text DEFAULT NULL,
  `plugin_site_url` text DEFAULT NULL,
  `plugin_version` text DEFAULT NULL,
  `compliant_version` text DEFAULT NULL,
  `plugin_description` text DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `enable` smallint(6) NOT NULL DEFAULT 0,
  `free_field1` text DEFAULT NULL,
  `free_field2` text DEFAULT NULL,
  `free_field3` text DEFAULT NULL,
  `free_field4` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_plugin_hookpoint`
--

CREATE TABLE `dtb_plugin_hookpoint` (
  `plugin_hookpoint_id` int(11) NOT NULL,
  `plugin_id` int(11) NOT NULL,
  `hook_point` text NOT NULL,
  `callback` text DEFAULT NULL,
  `use_flg` smallint(6) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_plugin_hookpoint_plugin_hookpoint_id_seq`
--

CREATE TABLE `dtb_plugin_hookpoint_plugin_hookpoint_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_plugin_plugin_id_seq`
--

CREATE TABLE `dtb_plugin_plugin_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_products`
--

CREATE TABLE `dtb_products` (
  `product_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `maker_id` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 2,
  `comment1` text DEFAULT NULL,
  `comment2` text DEFAULT NULL,
  `comment3` mediumtext DEFAULT NULL,
  `comment4` text DEFAULT NULL,
  `comment5` text DEFAULT NULL,
  `comment6` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `main_list_comment` text DEFAULT NULL,
  `main_list_image` text DEFAULT NULL,
  `main_comment` mediumtext DEFAULT NULL,
  `main_image` text DEFAULT NULL,
  `main_large_image` text DEFAULT NULL,
  `sub_title1` text DEFAULT NULL,
  `sub_comment1` mediumtext DEFAULT NULL,
  `sub_image1` text DEFAULT NULL,
  `sub_large_image1` text DEFAULT NULL,
  `sub_title2` text DEFAULT NULL,
  `sub_comment2` mediumtext DEFAULT NULL,
  `sub_image2` text DEFAULT NULL,
  `sub_large_image2` text DEFAULT NULL,
  `sub_title3` text DEFAULT NULL,
  `sub_comment3` mediumtext DEFAULT NULL,
  `sub_image3` text DEFAULT NULL,
  `sub_large_image3` text DEFAULT NULL,
  `sub_title4` text DEFAULT NULL,
  `sub_comment4` mediumtext DEFAULT NULL,
  `sub_image4` text DEFAULT NULL,
  `sub_large_image4` text DEFAULT NULL,
  `sub_title5` text DEFAULT NULL,
  `sub_comment5` mediumtext DEFAULT NULL,
  `sub_image5` text DEFAULT NULL,
  `sub_large_image5` text DEFAULT NULL,
  `sub_title6` text DEFAULT NULL,
  `sub_comment6` mediumtext DEFAULT NULL,
  `sub_image6` text DEFAULT NULL,
  `sub_large_image6` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deliv_date_id` int(11) DEFAULT NULL,
  `maker_code` text DEFAULT NULL,
  `delivery_type_id` smallint(6) DEFAULT NULL,
  `warranty_period_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_products`
--

INSERT INTO `dtb_products` (`product_id`, `name`, `maker_id`, `status`, `comment1`, `comment2`, `comment3`, `comment4`, `comment5`, `comment6`, `note`, `main_list_comment`, `main_list_image`, `main_comment`, `main_image`, `main_large_image`, `sub_title1`, `sub_comment1`, `sub_image1`, `sub_large_image1`, `sub_title2`, `sub_comment2`, `sub_image2`, `sub_large_image2`, `sub_title3`, `sub_comment3`, `sub_image3`, `sub_large_image3`, `sub_title4`, `sub_comment4`, `sub_image4`, `sub_large_image4`, `sub_title5`, `sub_comment5`, `sub_image5`, `sub_large_image5`, `sub_title6`, `sub_comment6`, `sub_image6`, `sub_large_image6`, `del_flg`, `creator_id`, `create_date`, `update_date`, `deliv_date_id`, `maker_code`, `delivery_type_id`, `warranty_period_id`) VALUES
(1, 'アイスクリーム', NULL, 1, NULL, NULL, 'アイス,バニラ,チョコ,抹茶', NULL, NULL, NULL, NULL, '暑い夏にどうぞ。', 'ice130.jpg', '冷たいものはいかがですか?', 'ice260.jpg', 'ice500.jpg', NULL, '<b>おいしいよ<b>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 2, NULL, NULL, NULL),
(2, 'おなべ', NULL, 1, NULL, NULL, '鍋,なべ,ナベ', NULL, NULL, NULL, NULL, '一人用からあります。', 'nabe130.jpg', 'たまには鍋でもどうでしょう。', 'nabe260.jpg', 'nabe500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 3, NULL, NULL, NULL),
(3, 'おなべレシピ', NULL, 1, NULL, NULL, '鍋,なべ,ナベ,レシピ,作り方', NULL, NULL, NULL, NULL, 'あの、秘伝のお鍋レシピです。', 'recipe130.jpg', '<b>この商品はダウンロード商品です</b><br />自分でチャレンジしてみたい方に。', 'recipe260.jpg', 'recipe500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 1, NULL, NULL, NULL),
(6, '苺ショートケーキ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '定番商品です', '07162206_62d2b7c0398db.jpg', '苺はあまおうです', '07162219_62d2baf8a0e07.jpg', '07162220_62d2bb007dd2c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:06:40', '2022-07-16 13:20:06', NULL, '不二家', 3, 1),
(7, 'マロンケーキ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '秋限定の商品です', '07162208_62d2b85a188dd.jpg', '上等のマロンを使用しています', '07162208_62d2b86135ca3.jpg', '07162208_62d2b867b098a.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:09:16', '2022-07-16 13:09:16', NULL, '不二家', 3, 1),
(8, '苺シュークリーム', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '定番のおやつです', '07162210_62d2b8e2886b3.jpg', '苺をたっぷり使用しています', '07162219_62d2bacbb86fc.jpg', '07162219_62d2bad6240b3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:11:41', '2022-07-16 13:19:24', NULL, 'タカラブネ', 3, 1),
(9, 'バニラシュークリーム', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '人気商品です', '07162213_62d2b982915de.jpg', '定番です', '07162218_62d2ba9b138d3.jpg', '07162218_62d2baa4c7b07.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:14:23', '2022-07-16 13:18:33', NULL, 'タカラブネ', 3, 1),
(10, 'チョコシュークリーム', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'チョコたっぷりです', '07162217_62d2ba526ddf1.jpg', '人気商品です', '07162217_62d2ba5fd4495.jpg', '07162217_62d2ba6952e0e.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:17:35', '2022-07-16 13:17:35', NULL, 'タカラブネ', 3, 1),
(11, '抹茶ケーキ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '定番商品です', '07162221_62d2bb58050cb.jpg', '上品な抹茶風味な仕上がりです', '07162221_62d2bb6136644.jpg', '07162221_62d2bb6916cc4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', NULL, '不二家', 3, 1),
(12, '苺パフェ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '定番商品です', '07162223_62d2bbdca85a9.jpg', 'あまおうの苺を使用しています', '07162223_62d2bbe4d4fc2.jpg', '07162224_62d2bc0b3af56.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:24:37', '2022-07-16 13:24:37', NULL, 'シャトレーゼ', 3, 1),
(13, 'チョコパフェ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '上品な仕上がりです', '07162225_62d2bc63c1e85.jpg', 'チョコとアイスの組み合わせが最高です', '07162226_62d2bc6db941a.jpg', '07162226_62d2bc74503df.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-16 13:26:26', '2022-07-16 13:26:26', NULL, 'シャトレーゼ', 3, 1),
(15, 'メロンケーキ', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '珍しいメロンケーキです', '07181115_62d4c23786ccf.png', '贅沢に丸ごとメロンを使用しています', '07181115_62d4c23f6ee07.png', '07181115_62d4c248e70e3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, '2022-07-18 02:18:07', '2022-07-18 02:18:07', NULL, 'シャトレーゼ', 3, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_products_class`
--

CREATE TABLE `dtb_products_class` (
  `product_class_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `classcategory_id1` int(11) NOT NULL DEFAULT 0,
  `classcategory_id2` int(11) NOT NULL DEFAULT 0,
  `product_type_id` int(11) NOT NULL DEFAULT 0,
  `product_code` text DEFAULT NULL,
  `stock` decimal(10,0) DEFAULT NULL,
  `stock_unlimited` smallint(6) NOT NULL DEFAULT 0,
  `sale_limit` decimal(10,0) DEFAULT NULL,
  `price01` decimal(10,0) DEFAULT NULL,
  `price02` decimal(10,0) NOT NULL,
  `deliv_fee` decimal(10,0) DEFAULT NULL,
  `point_rate` decimal(10,0) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `down_filename` text DEFAULT NULL,
  `down_realfilename` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_products_class`
--

INSERT INTO `dtb_products_class` (`product_class_id`, `product_id`, `classcategory_id1`, `classcategory_id2`, `product_type_id`, `product_code`, `stock`, `stock_unlimited`, `sale_limit`, `price01`, `price02`, `deliv_fee`, `point_rate`, `creator_id`, `create_date`, `update_date`, `down_filename`, `down_realfilename`, `del_flg`) VALUES
(0, 1, 0, 0, 1, 'ice-01', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 1),
(1, 1, 3, 6, 1, 'ice-01', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(2, 1, 3, 5, 1, 'ice-02', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(3, 1, 3, 4, 1, 'ice-03', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(4, 1, 2, 6, 1, 'ice-04', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(5, 1, 2, 5, 1, 'ice-05', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(6, 1, 2, 4, 1, 'ice-06', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(7, 1, 1, 6, 1, 'ice-07', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(8, 1, 1, 5, 1, 'ice-08', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(9, 1, 1, 4, 1, 'ice-09', NULL, 1, NULL, '1000', '933', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(10, 2, 0, 0, 1, 'nabe-01', '100', 0, '5', '1700', '1650', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', NULL, NULL, 0),
(11, 3, 0, 0, 2, 'recipe-01', NULL, 1, NULL, NULL, '100', NULL, '10', 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 'おなべレシピ.pdf', 'recipe_onabe.pdf', 0),
(12, 6, 0, 0, 1, 'cake01', '20', 0, NULL, '500', '450', NULL, '2', 2, '2022-07-16 13:06:40', '2022-07-16 13:20:06', NULL, NULL, 0),
(13, 7, 0, 0, 1, 'cake02', '15', 0, NULL, '550', '480', NULL, '3', 2, '2022-07-16 13:09:16', '2022-07-16 13:09:16', NULL, NULL, 0),
(14, 8, 0, 0, 1, 'cm01', '25', 0, NULL, '380', '350', NULL, '2', 2, '2022-07-16 13:11:41', '2022-07-16 13:19:24', NULL, NULL, 0),
(15, 9, 0, 0, 1, 'cm02', '25', 0, NULL, '320', '310', NULL, '2', 2, '2022-07-16 13:14:23', '2022-07-16 13:18:33', NULL, NULL, 0),
(16, 10, 0, 0, 1, 'cm03', '14', 0, NULL, '310', '300', NULL, '2', 2, '2022-07-16 13:17:35', '2022-07-16 13:17:35', NULL, NULL, 0),
(17, 11, 0, 0, 1, 'cake03', '8', 0, NULL, '400', '370', NULL, '3', 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', NULL, NULL, 0),
(18, 12, 0, 0, 1, 'p01', '20', 0, NULL, '650', '620', NULL, '0', 2, '2022-07-16 13:24:37', '2022-07-16 13:24:37', NULL, NULL, 0),
(19, 13, 0, 0, 1, 'p02', '25', 0, NULL, '700', '680', NULL, '5', 2, '2022-07-16 13:26:26', '2022-07-16 13:26:26', NULL, NULL, 0),
(21, 15, 0, 0, 1, 'cake04', '10', 0, NULL, '3000', '2800', NULL, '8', 2, '2022-07-18 02:18:07', '2022-07-18 02:18:07', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_products_class_product_class_id_seq`
--

CREATE TABLE `dtb_products_class_product_class_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_products_class_product_class_id_seq`
--

INSERT INTO `dtb_products_class_product_class_id_seq` (`sequence`) VALUES
(21);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_products_product_id_seq`
--

CREATE TABLE `dtb_products_product_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_products_product_id_seq`
--

INSERT INTO `dtb_products_product_id_seq` (`sequence`) VALUES
(15);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_product_categories`
--

CREATE TABLE `dtb_product_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `RANK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_product_categories`
--

INSERT INTO `dtb_product_categories` (`product_id`, `category_id`, `RANK`) VALUES
(1, 5, 1),
(2, 4, 2),
(3, 4, 1),
(3, 6, 1),
(6, 9, 1),
(7, 9, 2),
(8, 11, 1),
(9, 11, 2),
(10, 11, 3),
(11, 9, 3),
(12, 8, 1),
(13, 8, 2),
(15, 9, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_product_status`
--

CREATE TABLE `dtb_product_status` (
  `product_status_id` smallint(6) NOT NULL,
  `product_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_product_status`
--

INSERT INTO `dtb_product_status` (`product_status_id`, `product_id`, `creator_id`, `create_date`, `update_date`, `del_flg`) VALUES
(1, 1, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(1, 6, 2, '2022-07-16 13:20:06', '2022-07-16 13:20:06', 0),
(1, 7, 2, '2022-07-16 13:09:16', '2022-07-16 13:09:16', 0),
(1, 8, 2, '2022-07-16 13:19:24', '2022-07-16 13:19:24', 0),
(1, 9, 2, '2022-07-16 13:18:33', '2022-07-16 13:18:33', 0),
(1, 10, 2, '2022-07-16 13:17:35', '2022-07-16 13:17:35', 0),
(1, 11, 2, '2022-07-16 13:22:00', '2022-07-16 13:22:00', 0),
(1, 12, 2, '2022-07-16 13:24:37', '2022-07-16 13:24:37', 0),
(1, 13, 2, '2022-07-16 13:26:26', '2022-07-16 13:26:26', 0),
(1, 15, 2, '2022-07-18 02:18:07', '2022-07-18 02:18:07', 0),
(4, 3, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0),
(5, 3, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_recommend_products`
--

CREATE TABLE `dtb_recommend_products` (
  `product_id` int(11) NOT NULL,
  `recommend_product_id` int(11) NOT NULL,
  `RANK` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_recommend_products`
--

INSERT INTO `dtb_recommend_products` (`product_id`, `recommend_product_id`, `RANK`, `comment`, `status`, `creator_id`, `create_date`, `update_date`) VALUES
(2, 1, 4, 'お口直しに。', 0, 2, '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_review`
--

CREATE TABLE `dtb_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reviewer_name` text NOT NULL,
  `reviewer_url` text DEFAULT NULL,
  `sex` smallint(6) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `recommend_level` smallint(6) NOT NULL,
  `title` text NOT NULL,
  `comment` text NOT NULL,
  `status` smallint(6) DEFAULT 2,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_review_review_id_seq`
--

CREATE TABLE `dtb_review_review_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_send_customer`
--

CREATE TABLE `dtb_send_customer` (
  `customer_id` int(11) NOT NULL,
  `send_id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `send_flag` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_send_history`
--

CREATE TABLE `dtb_send_history` (
  `send_id` int(11) NOT NULL,
  `mail_method` smallint(6) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `send_count` int(11) DEFAULT NULL,
  `complete_count` int(11) NOT NULL DEFAULT 0,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `search_data` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `creator_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_send_history_send_id_seq`
--

CREATE TABLE `dtb_send_history_send_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_session`
--

CREATE TABLE `dtb_session` (
  `sess_id` text NOT NULL,
  `sess_data` longtext DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_session`
--

INSERT INTO `dtb_session` (`sess_id`, `sess_data`, `create_date`, `update_date`) VALUES
('0115ab394fa5e99724668bea9508cdcd', 'cart|a:0:{}prev_url|s:13:\"/eccube/html/\";transactionid|s:40:\"1b1328ff11c4d0ce27a6d4b0df2e99b8866f5c1b\";cert|s:8:\"7WDhcBTF\";member_id|s:1:\"2\";login_id|s:12:\"pugachev2011\";authority|s:1:\"0\";login_name|s:9:\"管理者\";uniqid|s:21:\"6300536a58a3e9TkEnqXK\";last_login|s:19:\"2022-08-14 10:55:25\";', '2022-08-20 03:22:18', '2022-08-21 01:16:38'),
('0db615c21988962420975757949637c1', 'cart|a:0:{}prev_url|s:29:\"/eccube/html/entry/kiyaku.php\";transactionid|s:40:\"3021c90be7761fc0b35d007d481a2c4e33170d31\";customer|a:51:{s:11:\"customer_id\";s:2:\"17\";s:6:\"name01\";s:6:\"宇垣\";s:6:\"name02\";s:6:\"美里\";s:6:\"kana01\";s:9:\"ウガキ\";s:6:\"kana02\";s:9:\"ミサト\";s:12:\"company_name\";N;s:5:\"zip01\";s:3:\"652\";s:5:\"zip02\";s:4:\"0807\";s:7:\"zipcode\";N;s:10:\"country_id\";s:3:\"392\";s:4:\"pref\";s:2:\"28\";s:6:\"addr01\";s:18:\"神戸市兵庫区\";s:6:\"addr02\";s:11:\"浜崎1-2-3\";s:5:\"email\";s:15:\"ugaki@gmail.com\";s:12:\"email_mobile\";N;s:5:\"tel01\";s:3:\"080\";s:5:\"tel02\";s:4:\"1111\";s:5:\"tel03\";s:4:\"1111\";s:5:\"fax01\";N;s:5:\"fax02\";N;s:5:\"fax03\";N;s:3:\"sex\";s:1:\"2\";s:3:\"job\";N;s:5:\"birth\";N;s:8:\"password\";s:64:\"e70cf26e027315d772c3f875dec7c7ccaf1ec4d46e20e447b1172baa672ad7dd\";s:8:\"reminder\";s:1:\"1\";s:15:\"reminder_answer\";s:64:\"f1bde2b40026c4c27a840db25ad40945cb293e36f5513be0b3a198570c2ac867\";s:4:\"salt\";s:10:\"f4493d1deb\";s:10:\"secret_key\";s:22:\"r6302bd13f2408VVKXVzLV\";s:14:\"first_buy_date\";N;s:13:\"last_buy_date\";N;s:9:\"buy_times\";s:1:\"0\";s:9:\"buy_total\";s:1:\"0\";s:5:\"point\";s:1:\"0\";s:4:\"note\";N;s:6:\"status\";s:1:\"2\";s:11:\"create_date\";s:19:\"2022-08-22 08:17:39\";s:11:\"update_date\";s:19:\"2022-08-22 08:17:39\";s:7:\"del_flg\";s:1:\"0\";s:15:\"mobile_phone_id\";N;s:12:\"mailmaga_flg\";s:1:\"3\";s:9:\"nick_name\";s:15:\"うがっきー\";s:8:\"house_id\";s:1:\"2\";s:5:\"dm_id\";s:1:\"2\";s:8:\"bijin_id\";N;s:10:\"married_id\";N;s:15:\"save_main_image\";N;s:15:\"temp_main_image\";N;s:9:\"image_key\";N;s:10:\"main_image\";N;s:8:\"filepath\";N;}', '2022-08-21 02:07:40', '2022-08-22 12:52:11'),
('5ced3ffe871c1f20111be7b9a12da2c9', 'cart|a:0:{}prev_url|s:37:\"/eccube/html/manage/customer/edit.php\";transactionid|s:40:\"01755028cc75ac18dbecc0e0dd1413ce2b8da365\";customer|a:51:{s:11:\"customer_id\";s:2:\"16\";s:6:\"name01\";s:9:\"竹谷学\";s:6:\"name02\";s:9:\"竹谷学\";s:6:\"kana01\";s:12:\"タケタニ\";s:6:\"kana02\";s:9:\"マナブ\";s:12:\"company_name\";N;s:5:\"zip01\";s:3:\"651\";s:5:\"zip02\";s:4:\"1111\";s:7:\"zipcode\";N;s:10:\"country_id\";s:3:\"392\";s:4:\"pref\";s:1:\"1\";s:6:\"addr01\";s:6:\"西区\";s:6:\"addr02\";s:9:\"神戸市\";s:5:\"email\";s:22:\"pugachev2011@gmail.com\";s:12:\"email_mobile\";N;s:5:\"tel01\";s:3:\"080\";s:5:\"tel02\";s:4:\"1111\";s:5:\"tel03\";s:4:\"1111\";s:5:\"fax01\";N;s:5:\"fax02\";N;s:5:\"fax03\";N;s:3:\"sex\";s:1:\"2\";s:3:\"job\";N;s:5:\"birth\";N;s:8:\"password\";s:64:\"4927d6d147dc591d2fca8932193e057315e9e4206b56400b5c491af292a40ddc\";s:8:\"reminder\";s:1:\"1\";s:15:\"reminder_answer\";s:64:\"0eeae4e497fae22e5e5ecc20d5944a33c951ada5dcaba3cc033bab7b356148d6\";s:4:\"salt\";s:10:\"99a8370b80\";s:10:\"secret_key\";s:22:\"r62f88d8cbe544Adaevmd2\";s:14:\"first_buy_date\";N;s:13:\"last_buy_date\";N;s:9:\"buy_times\";s:1:\"0\";s:9:\"buy_total\";s:1:\"0\";s:5:\"point\";s:3:\"123\";s:4:\"note\";N;s:6:\"status\";s:1:\"2\";s:11:\"create_date\";s:19:\"2022-08-14 14:52:12\";s:11:\"update_date\";s:19:\"2022-08-14 14:52:12\";s:7:\"del_flg\";s:1:\"0\";s:15:\"mobile_phone_id\";N;s:12:\"mailmaga_flg\";s:1:\"3\";s:9:\"nick_name\";s:4:\"test\";s:8:\"house_id\";N;s:5:\"dm_id\";s:1:\"2\";s:8:\"bijin_id\";s:1:\"3\";s:10:\"married_id\";s:1:\"2\";s:15:\"save_main_image\";N;s:15:\"temp_main_image\";s:10:\"makino.jpg\";s:9:\"image_key\";s:10:\"main_image\";s:10:\"main_image\";N;s:8:\"filepath\";N;}cart_referer_url|s:63:\"https://localhost/eccube/html/products/detail.php?product_id=10\";cert|s:8:\"7WDhcBTF\";member_id|s:1:\"2\";login_id|s:12:\"pugachev2011\";authority|s:1:\"0\";login_name|s:9:\"管理者\";uniqid|s:21:\"63018a258e841a94XeUAb\";last_login|s:19:\"2022-08-20 12:22:18\";', '2022-08-21 01:28:05', '2022-08-22 22:29:22'),
('82fbb0ec751a8b413f1be5d71ba36c13', 'cart|a:0:{}prev_url|s:38:\"/eccube/html/manage/customer/edit.php?\";transactionid|s:40:\"c90ea946fb6d19d8276a5388830983c3c140fb0e\";cert|s:8:\"7WDhcBTF\";member_id|s:1:\"2\";login_id|s:12:\"pugachev2011\";authority|s:1:\"0\";login_name|s:9:\"管理者\";uniqid|s:21:\"62ef76b874be4umDq2JTH\";last_login|s:19:\"2022-08-14 06:17:12\";', '2022-08-14 01:55:25', '2022-08-14 12:49:58'),
('91ab856846828724063c111186286800', 'cart|a:0:{}prev_url|s:30:\"/eccube/html/mypage/change.php\";site|a:5:{s:18:\"pre_regist_success\";s:0:\"\";s:14:\"regist_success\";b:0;s:8:\"pre_page\";s:0:\"\";s:8:\"now_page\";s:39:\"/eccube/html/frontparts/login_check.php\";s:6:\"uniqid\";s:0:\"\";}transactionid|s:40:\"78add06d476474f870b047d9e797166d59638210\";customer|a:51:{s:11:\"customer_id\";s:2:\"19\";s:6:\"name01\";s:6:\"檜山\";s:6:\"name02\";s:6:\"さや\";s:6:\"kana01\";s:9:\"ヒヤマ\";s:6:\"kana02\";s:6:\"サヤ\";s:12:\"company_name\";s:24:\"ウエザーニュース\";s:5:\"zip01\";s:3:\"652\";s:5:\"zip02\";s:4:\"0807\";s:7:\"zipcode\";N;s:10:\"country_id\";s:3:\"392\";s:4:\"pref\";s:2:\"28\";s:6:\"addr01\";s:18:\"神戸市兵庫区\";s:6:\"addr02\";s:11:\"浜崎1-2-3\";s:5:\"email\";s:14:\"saya@gmail.com\";s:12:\"email_mobile\";N;s:5:\"tel01\";s:3:\"080\";s:5:\"tel02\";s:4:\"1111\";s:5:\"tel03\";s:4:\"1111\";s:5:\"fax01\";N;s:5:\"fax02\";N;s:5:\"fax03\";N;s:3:\"sex\";s:1:\"2\";s:3:\"job\";s:2:\"15\";s:5:\"birth\";N;s:8:\"password\";s:64:\"01e712acecf41c21021493629f2843caadcc39f860307889d51bba0e68003cfd\";s:8:\"reminder\";s:1:\"1\";s:15:\"reminder_answer\";s:64:\"2f9166c8d4768712fefe8ae3955d1011c1e4f2bd2b689c67db1d5756eae805de\";s:4:\"salt\";s:10:\"4c2ecfc39c\";s:10:\"secret_key\";s:22:\"r6303fa56567c29KEvEY5S\";s:14:\"first_buy_date\";N;s:13:\"last_buy_date\";N;s:9:\"buy_times\";s:1:\"0\";s:9:\"buy_total\";s:1:\"0\";s:5:\"point\";s:1:\"0\";s:4:\"note\";N;s:6:\"status\";s:1:\"2\";s:11:\"create_date\";s:19:\"2022-08-23 06:51:18\";s:11:\"update_date\";s:19:\"2022-08-23 06:51:18\";s:7:\"del_flg\";s:1:\"0\";s:15:\"mobile_phone_id\";N;s:12:\"mailmaga_flg\";s:1:\"3\";s:9:\"nick_name\";s:12:\"さやっち\";s:8:\"house_id\";s:1:\"2\";s:5:\"dm_id\";s:1:\"2\";s:8:\"bijin_id\";N;s:10:\"married_id\";N;s:15:\"save_main_image\";N;s:15:\"temp_main_image\";N;s:9:\"image_key\";N;s:10:\"main_image\";N;s:8:\"filepath\";N;}', '2022-08-22 12:52:13', '2022-08-22 22:40:22');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_shipment_item`
--

CREATE TABLE `dtb_shipment_item` (
  `shipping_id` int(11) NOT NULL,
  `product_class_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_code` text DEFAULT NULL,
  `classcategory_name1` text DEFAULT NULL,
  `classcategory_name2` text DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_shipment_item`
--

INSERT INTO `dtb_shipment_item` (`shipping_id`, `product_class_id`, `order_id`, `product_name`, `product_code`, `classcategory_name1`, `classcategory_name2`, `price`, `quantity`) VALUES
(0, 16, 1, 'チョコシュークリーム', 'cm03', NULL, NULL, '300', '1');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_shipping`
--

CREATE TABLE `dtb_shipping` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_name01` text DEFAULT NULL,
  `shipping_name02` text DEFAULT NULL,
  `shipping_kana01` text DEFAULT NULL,
  `shipping_kana02` text DEFAULT NULL,
  `shipping_company_name` text DEFAULT NULL,
  `shipping_tel01` text DEFAULT NULL,
  `shipping_tel02` text DEFAULT NULL,
  `shipping_tel03` text DEFAULT NULL,
  `shipping_fax01` text DEFAULT NULL,
  `shipping_fax02` text DEFAULT NULL,
  `shipping_fax03` text DEFAULT NULL,
  `shipping_country_id` int(11) DEFAULT NULL,
  `shipping_pref` smallint(6) DEFAULT NULL,
  `shipping_zip01` text DEFAULT NULL,
  `shipping_zip02` text DEFAULT NULL,
  `shipping_zipcode` text DEFAULT NULL,
  `shipping_addr01` text DEFAULT NULL,
  `shipping_addr02` text DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `shipping_time` text DEFAULT NULL,
  `shipping_date` datetime DEFAULT NULL,
  `shipping_commit_date` datetime DEFAULT NULL,
  `RANK` int(11) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_shipping`
--

INSERT INTO `dtb_shipping` (`shipping_id`, `order_id`, `shipping_name01`, `shipping_name02`, `shipping_kana01`, `shipping_kana02`, `shipping_company_name`, `shipping_tel01`, `shipping_tel02`, `shipping_tel03`, `shipping_fax01`, `shipping_fax02`, `shipping_fax03`, `shipping_country_id`, `shipping_pref`, `shipping_zip01`, `shipping_zip02`, `shipping_zipcode`, `shipping_addr01`, `shipping_addr02`, `time_id`, `shipping_time`, `shipping_date`, `shipping_commit_date`, `RANK`, `create_date`, `update_date`, `del_flg`) VALUES
(0, 1, '宇垣', '美里', 'ウガキ', 'ミサト', NULL, '080', '1111', '1111', NULL, NULL, NULL, 392, 28, '652', '0807', NULL, '神戸市兵庫区', '浜崎通り1-2-3', NULL, NULL, NULL, NULL, NULL, '2022-07-24 11:03:13', '2022-07-24 11:03:13', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_tax_rule`
--

CREATE TABLE `dtb_tax_rule` (
  `tax_rule_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `pref_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `product_class_id` int(11) NOT NULL DEFAULT 0,
  `calc_rule` smallint(6) NOT NULL DEFAULT 1,
  `tax_rate` decimal(10,0) NOT NULL DEFAULT 8,
  `tax_adjust` decimal(10,0) NOT NULL DEFAULT 0,
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `member_id` int(11) NOT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_tax_rule`
--

INSERT INTO `dtb_tax_rule` (`tax_rule_id`, `country_id`, `pref_id`, `product_id`, `product_class_id`, `calc_rule`, `tax_rate`, `tax_adjust`, `apply_date`, `member_id`, `del_flg`, `create_date`, `update_date`) VALUES
(0, 0, 0, 0, 0, 1, '8', '0', '2022-07-16 12:27:04', 1, 0, '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_tax_rule_tax_rule_id_seq`
--

CREATE TABLE `dtb_tax_rule_tax_rule_id_seq` (
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_templates`
--

CREATE TABLE `dtb_templates` (
  `template_code` text NOT NULL,
  `device_type_id` int(11) NOT NULL,
  `template_name` text DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `dtb_templates`
--

INSERT INTO `dtb_templates` (`template_code`, `device_type_id`, `template_name`, `create_date`, `update_date`) VALUES
('default', 10, 'デフォルト', '2022-07-16 12:27:04', '2022-07-16 12:27:04'),
('mobile', 1, 'モバイル', '2022-07-16 12:27:04', '2022-07-16 12:27:04'),
('sphone', 2, 'スマートフォン', '2022-07-16 12:27:04', '2022-07-16 12:27:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `dtb_update`
--

CREATE TABLE `dtb_update` (
  `module_id` int(11) NOT NULL,
  `module_name` text NOT NULL,
  `now_version` text DEFAULT NULL,
  `latest_version` text NOT NULL,
  `module_explain` text DEFAULT NULL,
  `main_php` text NOT NULL,
  `extern_php` text NOT NULL,
  `install_sql` text DEFAULT NULL,
  `uninstall_sql` text DEFAULT NULL,
  `other_files` text DEFAULT NULL,
  `del_flg` smallint(6) NOT NULL DEFAULT 0,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `release_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_allowed_tag`
--

CREATE TABLE `mtb_allowed_tag` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_allowed_tag`
--

INSERT INTO `mtb_allowed_tag` (`id`, `name`, `RANK`) VALUES
(0, 'table', 0),
(1, 'tr', 1),
(2, 'td', 2),
(3, 'a', 3),
(4, 'b', 4),
(5, 'blink', 5),
(6, 'br', 6),
(7, 'center', 7),
(8, 'font', 8),
(9, 'span', 9),
(10, 'hr', 10),
(11, 'img', 11),
(12, 'li', 12),
(13, 'strong', 13),
(14, 'p', 14),
(15, 'div', 15),
(16, 'i', 16),
(17, 'u', 17),
(18, 's', 18),
(19, 'h1', 19),
(20, 'h2', 20),
(21, 'h3', 21),
(22, 'h4', 22),
(23, 'h5', 23),
(24, 'h6', 24),
(25, 'tbody', 25),
(26, 'thead', 26),
(27, 'tfoot', 27),
(28, 'th', 28),
(29, 'ul', 29),
(30, 'ol', 30),
(31, 'dl', 31),
(32, 'dt', 32),
(33, 'dd', 33);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_authority`
--

CREATE TABLE `mtb_authority` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_authority`
--

INSERT INTO `mtb_authority` (`id`, `name`, `RANK`) VALUES
(0, 'システム管理者', 0),
(1, '店舗オーナー', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_auth_excludes`
--

CREATE TABLE `mtb_auth_excludes` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_auth_excludes`
--

INSERT INTO `mtb_auth_excludes` (`id`, `name`, `RANK`) VALUES
(0, 'index.php', 0),
(1, 'logout.php', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_bijin`
--

CREATE TABLE `mtb_bijin` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_bijin`
--

INSERT INTO `mtb_bijin` (`id`, `name`, `rank`) VALUES
(1, '普通', 0),
(2, '美人', 1),
(3, '超美人', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_constants`
--

CREATE TABLE `mtb_constants` (
  `id` text NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_constants`
--

INSERT INTO `mtb_constants` (`id`, `name`, `RANK`, `remarks`) VALUES
('ADMIN_HOME_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"home.php\"', 165, 'ホーム'),
('ADMIN_ID', '\"1\"', 74, '管理ユーザID(メンテナンス用表示されない。)'),
('ADMIN_LOGIN_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . DIR_INDEX_PATH', 166, 'ログインページ'),
('ADMIN_LOGOUT_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"logout.php\"', 171, 'ログアウトページ'),
('ADMIN_LOG_REALFILE', 'DATA_REALDIR . \"logs/admin.log\"', 144, '管理機能ログファイル'),
('ADMIN_MODE', '0', 90, '管理モード 1:有効　0:無効(納品時)'),
('ADMIN_NEWS_STARTYEAR', '2005', 264, '新着情報管理画面 開始年(西暦) '),
('ADMIN_ORDER_EDIT_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"order/edit.php\"', 168, '注文編集ページ'),
('ADMIN_ORDER_MAIL_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"order/mail.php\"', 170, '注文編集ページ'),
('ADMIN_ORDER_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"order/\" . DIR_INDEX_PATH', 169, '注文編集ページ'),
('ADMIN_PRODUCTS_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"products/\" . DIR_INDEX_PATH', 167, '商品検索ページ'),
('ADMIN_SYSTEM_URLPATH', 'ROOT_URLPATH . ADMIN_DIR . \"system/\" . DIR_INDEX_PATH', 159, 'システム管理トップ'),
('ADMIN_TITLE', '\"EC-CUBE 管理機能\"', 134, '管理機能タイトル'),
('AMOUNT_LEN', '6', 199, '在庫数、販売制限数'),
('API_ENABLE_FLAG', 'false', 1420, 'API機能を有効にする(true:する false:しない)'),
('AUTH_TYPE', '\"HMAC\"', 10, '認証方式'),
('BIRTH_MONTH_POINT', '0', 98, '誕生日月ポイント'),
('BIRTH_YEAR', '1901', 83, '生年月日登録開始年'),
('BLOC_DIR', '\"frontparts/bloc/\"', 311, 'ブロックファイル保存先'),
('CART_URL', 'HTTP_URL . \"cart/\" . DIR_INDEX_PATH', 240, 'カートトップ'),
('CATEGORY_HEAD', '\">\"', 138, '親カテゴリ表示文字'),
('CATEGORY_MAX', '1000', 133, '最大カテゴリ登録数'),
('CERT_STRING', '\"7WDhcBTF\"', 80, '認証文字列'),
('CHAR_CODE', '\"UTF-8\"', 39, '文字コード'),
('CLOSE_DAY', '31', 45, '締め日の指定(末日の場合は、31を指定してください。)'),
('COMPILE_ADMIN_REALDIR', 'DATA_REALDIR . \"Smarty/templates_c/admin/\"', 310, 'SMARTYコンパイル(管理機能)'),
('COMPILE_REALDIR', 'DATA_REALDIR . \"Smarty/templates_c/\" . TEMPLATE_NAME . \"/\"', 309, 'SMARTYコンパイル'),
('COOKIE_EXPIRE', '365', 212, 'クッキー保持期限(日)'),
('CREDIT_ADD_YEAR', '10', 85, 'クレジットカードの期限＋何年'),
('CREDIT_NO_LEN', '4', 207, 'クレジットカードの文字数 (*モジュールで使用)'),
('CSV_LINE_MAX', '10000', 128, 'CSVアップロード1行あたりの最大文字数'),
('CSV_SIZE', '2000', 127, 'CSVサイズ制限(KB)'),
('CSV_TEMP_REALDIR', 'DATA_REALDIR . \"upload/csv/\"', 156, 'エンコードCSVの一時保存先'),
('CUSTOMER_CONFIRM_MAIL', 'false', 75, '会員登録時に仮会員確認メールを送信するか (true:仮会員、false:本会員)'),
('CUSTOMER_LOG_REALFILE', 'DATA_REALDIR . \"logs/customer.log\"', 143, '会員ログイン ログファイル'),
('CV_PAYMENT_LIMIT', '14', 275, '支払期限 (*モジュールで使用)'),
('DB_LOG_REALFILE', 'DATA_REALDIR . \"logs/db.log\"', 147, 'DBログファイル'),
('DEBUG_LOG_REALFILE', '\"\"', 145, 'デバッグログファイル(未入力:標準ログファイル・管理画面ログファイル)'),
('DEBUG_MODE', 'false', 72, 'デバッグモード(true：sfPrintRやDBのエラーメッセージ、ログレベルがDebugのログを出力する、false：出力しない)'),
('DEFAULT_COUNTRY_ID', '392', 1413, 'デフォルト国コード ISO_3166-1に準拠'),
('DEFAULT_PASSWORD', '\"******\"', 66, '会員登録変更(マイページ)パスワード用'),
('DEFAULT_PRODUCT_DISP', '2', 56, '1:公開 2:非公開'),
('DEFAULT_PRODUCT_DOWN', '1', 703, '1:実商品 2:ダウンロード'),
('DEFAULT_TEMPLATE_NAME', '\"default\"', 300, 'デフォルトテンプレート名(PC)'),
('DELIVFEE_MAX', '47', 187, '配送料金の最大表示数'),
('DELIVTIME_MAX', '16', 186, 'お届け時間の最大表示数'),
('DELIV_ADDR_MAX', '20', 67, '別のお届け先最大登録数'),
('DELIV_DATE_END_MAX', '21', 272, 'お届け可能日以降のプルダウン表示最大日数'),
('DELIV_FREE_AMOUNT', '0', 57, '送料無料購入数量 (0の場合は、いくつ買っても無料にならない)'),
('DELIV_URLPATH', 'ROOT_URLPATH . \"shopping/deliv.php\"', 241, 'お届け先設定'),
('DEVICE_TYPE_ADMIN', '99', 1103, '端末種別: 管理画面'),
('DEVICE_TYPE_MOBILE', '1', 1100, '端末種別: モバイル'),
('DEVICE_TYPE_PC', '10', 1102, '端末種別: PC'),
('DEVICE_TYPE_SMARTPHONE', '2', 1101, '端末種別: スマートフォン'),
('DISABLED_RGB', '\"#C9C9C9\"', 136, '入力項目無効時の表示色'),
('DOWNLOADS_TEMP_PLUGIN_INSTALL_DIR', 'DATA_REALDIR . \"downloads/tmp/plugin_install/\"', 613, 'プラグイン一時展開用ディレクトリ（インストール用）'),
('DOWNLOADS_TEMP_PLUGIN_UPDATE_DIR', 'DATA_REALDIR . \"downloads/tmp/plugin_update/\"', 612, 'プラグイン一時展開用ディレクトリ（アップデート用）'),
('DOWNLOAD_BLOCK', '1024', 708, 'ダウンロード販売機能 ダウンロードファイル読み込みバイト(KB)'),
('DOWNLOAD_DAYS_LEN', '3', 700, '日数桁数'),
('DOWNLOAD_EXTENSION', '\"zip,lzh,jpg,jpeg,gif,png,mp3,pdf,csv\"', 701, 'ダウンロードファイル登録可能拡張子(カンマ区切り)'),
('DOWN_SAVE_REALDIR', 'DATA_REALDIR . \"download/save/\"', 705, 'ダウンロードファイル保存先'),
('DOWN_SIZE', '50000', 702, 'ダウンロード販売ファイル用サイズ制限(KB)'),
('DOWN_TEMP_REALDIR', 'DATA_REALDIR . \"download/temp/\"', 704, 'ダウンロードファイル一時保存'),
('ECCUBE_INFO', 'true', 1218, 'EC-CUBE更新情報取得 (true:取得する false:取得しない)'),
('ECCUBE_PAYMENT', '\"EC-CUBE\"', 41, '決済モジュール付与文言'),
('ENTRY_LIMIT_HOUR', '1', 267, '再入会制限時間 (単位: 時間)'),
('ENTRY_URL', 'HTTPS_URL . \"entry/\" . DIR_INDEX_PATH', 238, '会員登録ページTOP'),
('ERROR_LOG_REALFILE', 'DATA_REALDIR . \"logs/error.log\"', 146, 'エラーログファイル(未入力:標準ログファイル・管理画面ログファイル)'),
('ERR_COLOR', '\"#ffe8e8\"', 137, 'エラー時表示色'),
('FAVORITE_ERROR', '13', 46, '一般サイトエラー'),
('FILE_NAME_LEN', '10', 209, 'ファイル名表示文字数'),
('FILE_SIZE', '10000', 130, 'ファイル管理画面アップ制限(KB)'),
('FORGOT_MAIL', '0', 95, 'パスワード忘れの確認メールを送付するか否か。(0:送信しない、1:送信する)'),
('FORM_COUNTRY_ENABLE', 'false', 1415, '各種フォームで国の指定を有効にする(true:有効 false:無効)'),
('GRAPH_LABEL_MAX', '40', 52, 'グラフのラベルの文字数'),
('GRAPH_PIE_MAX', '10', 51, '円グラフ最大表示数'),
('GRAPH_REALDIR', 'HTML_REALDIR . \"upload/graph_image/\"', 49, 'グラフ格納ディレクトリ'),
('GRAPH_URLPATH', 'ROOT_URLPATH . \"upload/graph_image/\"', 50, 'グラフURL'),
('HOOK_POINT_PREPROCESS', '\"LC_Page_preProcess\"', 1301, 'フックポイント(プレプロセス)'),
('HOOK_POINT_PROCESS', '\"LC_Page_process\"', 1302, 'フックポイント(プロセス)'),
('HTTP_REQUEST_TIMEOUT', '\"5\"', 1219, '外部サイトHTTP取得タイムアウト時間(秒)'),
('ID_MAX_LEN', 'STEXT_LEN', 195, '管理画面用：ID・パスワードの最大文字数'),
('ID_MIN_LEN', '4', 196, '管理画面用：ID・パスワードの最小文字数'),
('IMAGE_RENAME', 'true', 525, '画像リネーム設定 (商品画像のみ) (true:リネームする、false:リネームしない)'),
('IMAGE_SAVE_REALDIR', 'HTML_REALDIR . \"upload/save_image/\"', 151, '画像保存先'),
('IMAGE_SAVE_RSS_URL', 'HTTP_URL . \"upload/save_image/\"', 155, 'RSS用画像保存先URL'),
('IMAGE_SAVE_URLPATH', 'ROOT_URLPATH . \"upload/save_image/\"', 153, '画像保存先URL'),
('IMAGE_SIZE', '1000', 126, '画像サイズ制限(KB)'),
('IMAGE_TEMP_REALDIR', 'HTML_REALDIR . \"upload/temp_image/\"', 150, '画像一時保存'),
('IMAGE_TEMP_RSS_URL', 'HTTP_URL . \"upload/temp_image/\"', 154, 'RSS用画像一時保存URL'),
('IMAGE_TEMP_URLPATH', 'ROOT_URLPATH . \"upload/temp_image/\"', 152, '画像一時保存URL'),
('INPUT_DELIV_FEE', '1', 58, '配送料の設定画面表示(有効:1 無効:0)'),
('INPUT_ZIP_URLPATH', 'ROOT_URLPATH . \"input_zip.php\"', 161, '郵便番号入力'),
('INT_LEN', '9', 206, '検査数値用桁数(INT)'),
('LARGE_IMAGE_HEIGHT', '500', 111, '拡大画像縦'),
('LARGE_IMAGE_WIDTH', '500', 110, '拡大画像横'),
('LARGE_SUBIMAGE_HEIGHT', '500', 119, '拡大サブ画像縦'),
('LARGE_SUBIMAGE_WIDTH', '500', 118, '拡大サブ画像横'),
('LEVEL_MAX', '5', 132, 'カテゴリの最大階層'),
('LLTEXT_LEN', '99999', 193, '超長文の文字数 (メルマガなど)'),
('LOCALE', '\"ja_JP.UTF-8\"', 40, 'ロケール設定'),
('LOGIN_FRAME', '\"login_frame.tpl\"', 77, 'ログイン画面フレーム'),
('LOGIN_RETRY_INTERVAL', '0', 1411, 'ログイン失敗時の遅延時間(秒)(ブルートフォースアタック対策)'),
('LOG_REALFILE', 'DATA_REALDIR . \"logs/site.log\"', 142, '標準ログファイル'),
('LTEXT_LEN', '3000', 192, '長文の文字数'),
('MAIN_FRAME', '\"main_frame.tpl\"', 78, '管理画面フレーム'),
('MASTER_DATA_REALDIR', 'DATA_REALDIR . \"cache/\"', 27, 'マスターデータキャッシュディレクトリ'),
('MAX_LIFETIME', '7200', 26, 'DBセッションの有効期限(秒)'),
('MAX_LOG_QUANTITY', '5', 92, 'ログファイル最大数(ログテーション)'),
('MAX_LOG_SIZE', '\"1000000\"', 93, '1つのログファイルに保存する最大容量(byte)'),
('MEMBER_PMAX', '10', 182, 'メンバー管理ページ表示行数'),
('MLTEXT_LEN', '1000', 191, '長中文の文字数 (問い合わせなど)'),
('MOBILE_CART_URLPATH', 'ROOT_URLPATH . \"cart/\" . DIR_INDEX_PATH', 411, 'カートトップ'),
('MOBILE_COMPILE_REALDIR', 'DATA_REALDIR . \"Smarty/templates_c/\" . MOBILE_TEMPLATE_NAME . \"/\"', 313, 'SMARTYコンパイル(mobile)'),
('MOBILE_DEFAULT_TEMPLATE_NAME', '\"mobile\"', 301, 'デフォルトテンプレート名(モバイル)'),
('MOBILE_IMAGE_REALDIR', 'HTML_REALDIR . \"upload/mobile_image/\"', 408, '携帯電話向け変換画像保存ディレクトリ'),
('MOBILE_IMAGE_URLPATH', 'ROOT_URLPATH . \"upload/mobile_image/\"', 409, '携帯電話向け変換画像保存ディレクトリ'),
('MOBILE_P_DETAIL_URLPATH', 'ROOT_URLPATH . \"products/detail.php?product_id=\"', 415, '商品詳細(HTML出力)'),
('MOBILE_SESSION_LIFETIME', '1800', 402, 'モバイルサイトのセッションの存続時間 (秒)'),
('MOBILE_SHOPPING_COMPLETE_URLPATH', 'ROOT_URLPATH . \"shopping/complete.php\"', 416, '購入完了画面 (*モジュールで使用)'),
('MOBILE_SHOPPING_CONFIRM_URLPATH', 'ROOT_URLPATH . \"shopping/confirm.php\"', 413, '購入確認ページ'),
('MOBILE_SHOPPING_PAYMENT_URLPATH', 'ROOT_URLPATH . \"shopping/payment.php\"', 414, 'お支払い方法選択ページ'),
('MOBILE_TEMPLATE_NAME', '\"mobile\"', 304, 'モバイルテンプレート名'),
('MOBILE_TEMPLATE_REALDIR', 'SMARTY_TEMPLATES_REALDIR . MOBILE_TEMPLATE_NAME . \"/\"', 312, 'SMARTYテンプレート(mobile)'),
('MOBILE_TOP_URLPATH', 'ROOT_URLPATH . DIR_INDEX_PATH', 410, 'モバイルURL'),
('MODULE_DIR', '\"downloads/module/\"', 22, 'ダウンロードモジュール保存ディレクトリ'),
('MODULE_REALDIR', 'DATA_REALDIR . MODULE_DIR', 23, 'ダウンロードモジュール保存ディレクトリ'),
('MTEXT_LEN', '200', 190, '長い項目の文字数 (住所など)'),
('MULTIPLE_URLPATH', 'ROOT_URLPATH . \"shopping/multiple.php\"', 242, '複数お届け先設定'),
('MYPAGE_DELIVADDR_URLPATH', 'ROOT_URLPATH . \"mypage/delivery.php\"', 254, 'マイページお届け先URL'),
('MYPAGE_ORDER_STATUS_DISP_FLAG', 'true', 1412, 'MYページ：ご注文状況表示フラグ'),
('NAVI_PMAX', '4', 184, 'ページ番号の最大表示数量'),
('NORMAL_IMAGE_HEIGHT', '260', 115, '通常画像縦'),
('NORMAL_IMAGE_WIDTH', '260', 114, '通常画像横'),
('NORMAL_PRICE_TITLE', '\"通常価格\"', 140, '価格名称'),
('NORMAL_SUBIMAGE_HEIGHT', '200', 117, '通常サブ画像縦'),
('NORMAL_SUBIMAGE_WIDTH', '200', 116, '通常サブ画像横'),
('NOSTOCK_HIDDEN', 'false', 291, '在庫無し商品の非表示(true:非表示、false:表示)'),
('NO_IMAGE_REALFILE', 'USER_TEMPLATE_REALDIR . \"default/img/picture/img_blank.gif\"', 158, '画像がない場合に表示'),
('OPTION_CLASS_REGIST', '1', 62, '商品規格登録(有効:1 無効:0)'),
('OPTION_DELIV_FEE', '1', 60, '配送業者ごとの配送料を加算する(有効:1 無効:0)'),
('OPTION_FAVORITE_PRODUCT', '1', 523, 'お気に入り商品登録(有効:1 無効:0)'),
('OPTION_PRODUCT_DELIV_FEE', '0', 59, '商品ごとの送料設定(有効:1 無効:0)'),
('OPTION_PRODUCT_TAX_RULE', '0', 1416, '商品ごとの税率設定(軽減税率対応 有効:1 無効:0) '),
('OPTION_RECOMMEND', '1', 61, 'おすすめ商品登録(有効:1 無効:0)'),
('ORDER_BACK_ORDER', '4', 804, '取り寄せ中'),
('ORDER_CANCEL', '3', 803, 'キャンセル'),
('ORDER_DELIV', '5', 805, '発送済み'),
('ORDER_NEW', '1', 800, '新規注文'),
('ORDER_PAY_WAIT', '2', 801, '入金待ち'),
('ORDER_PENDING', '7', 806, '決済処理中'),
('ORDER_PRE_END', '6', 802, '入金済み'),
('ORDER_STATUS_MAX', '50', 70, '対応状況管理画面の一覧表示件数'),
('OSTORE_LOG_REALFILE', 'DATA_REALDIR . \"logs/ownersstore.log\"', 502, 'オーナーズストアログパス'),
('OSTORE_SSLURL', '\"https://www.ec-cube.net/\"', 501, 'オーナーズストアURL'),
('OSTORE_URL', '\"http://www.ec-cube.net/\"', 500, 'オーナーズストアURL'),
('PAGE_DISPLAY_TIME_LOG_MIN_EXEC_TIME', '2', 1003, 'ページ表示時間のログを取得する時間設定(設定値以上かかった場合に取得)'),
('PAGE_DISPLAY_TIME_LOG_MODE', '1', 1002, 'ページ表示時間のログを取得するフラグ(1:表示, 0:非表示)'),
('PASSWORD_MAX_LEN', 'SMTEXT_LEN', 205, 'フロント画面用：パスワードの最大文字数'),
('PASSWORD_MIN_LEN', '8', 204, 'フロント画面用：パスワードの最小文字数'),
('PEAR_DB_DEBUG', '0', 42, 'PEAR::DBのデバッグモード'),
('PEAR_DB_PERSISTENT', 'false', 43, 'PEAR::DBの持続的接続オプション'),
('PENDING_ORDER_CANCEL_FLAG', 'true', 1419, '決済処理中ステータスのロールバックをするか(true:する false:しない)'),
('PENDING_ORDER_CANCEL_TIME', '900', 1418, '決済処理中ステータスのロールバックを行う時間の設定(秒) '),
('PERCENTAGE_LEN', '3', 198, '率桁数'),
('PLUGIN_ACTIVATE_FLAG', 'true', 1303, 'プラグインのロード可否フラグ)'),
('PLUGIN_DIR', '\"plugins/\"', 600, '(2.11用)プラグインディレクトリ(モジュールで使用)'),
('PLUGIN_EXTENSION', '\"tar,tar.gz\"', 611, 'プラグインファイル登録可能拡張子(カンマ区切り)'),
('PLUGIN_HTML_REALDIR', 'HTML_REALDIR . \"plugin/\"', 605, 'プラグイン保存先ディレクトリ(html)'),
('PLUGIN_HTML_URLPATH', 'ROOT_URLPATH . \"plugin/\"', 614, 'プラグインURL'),
('PLUGIN_LOG_REALFILE', 'DATA_REALDIR . \"logs/plugin.log\"', 148, 'プラグインログファイル'),
('PLUGIN_REALDIR', 'USER_REALDIR . PLUGIN_DIR', 601, '(2.11用)プラグイン保存先(モジュールで使用)'),
('PLUGIN_TEMP_REALDIR', 'HTML_REALDIR . \"upload/temp_plugin/\"', 608, 'プラグインファイル一時保存先'),
('PLUGIN_UPLOAD_REALDIR', 'DATA_REALDIR . \"downloads/plugin/\"', 604, 'プラグイン保存先ディレクトリ'),
('POINT_RULE', '2', 88, 'ポイントの計算ルール(1:四捨五入、2:切り捨て、3:切り上げ)'),
('POINT_VALUE', '1', 89, '1ポイント当たりの値段(円)'),
('PRICE_LEN', '8', 197, '金額桁数'),
('PRODUCTSUB_MAX', '5', 185, '商品サブ情報最大数'),
('PRODUCTS_TOTAL_MAX', '15', 55, '商品集計で何位まで表示するか'),
('PRODUCT_TYPE_DOWNLOAD', '2', 901, 'ダウンロード商品'),
('PRODUCT_TYPE_NORMAL', '1', 900, '通常商品'),
('P_DETAIL_URLPATH', 'ROOT_URLPATH . \"products/detail.php?product_id=\"', 253, '商品詳細(HTML出力)'),
('RECOMMEND_NUM', '8', 269, 'おすすめ商品表示数'),
('RECOMMEND_PRODUCT_MAX', '6', 268, '関連商品表示数'),
('RELEASE_YEAR', '2005', 84, '本システムの稼働開始年'),
('REVIEW_ALLOW_URL', '0', 277, '商品レビューでURL書き込みを許可するか否か'),
('REVIEW_REGIST_MAX', '5', 71, 'フロントレビュー書き込み最大数'),
('RFC_COMPLIANT_EMAIL_CHECK', 'false', 401, 'EメールアドレスチェックをRFC準拠にするか(true:準拠する、false:準拠しない)'),
('SALE_PRICE_TITLE', '\"販売価格\"', 141, '価格名称'),
('SAMPLE_ADDRESS1', '\"市区町村名 (例：千代田区神田神保町)\"', 1, 'フロント表示関連'),
('SAMPLE_ADDRESS2', '\"番地・ビル名 (例：1-3-5)\"', 2, 'フロント表示関連'),
('SEARCH_CATEGORY_LEN', '18', 208, '検索カテゴリ最大表示文字数(byte)'),
('SEARCH_PMAX', '10', 183, '検索ページ表示行数'),
('SELECT_RGB', '\"#ffffdf\"', 135, '編集時強調表示色'),
('SEPA_CATNAVI', '\" > \"', 235, 'カテゴリ区切り文字'),
('SESSION_KEEP_METHOD', '\"useCookie\"', 418, 'セッション維持方法：\"useCookie\"|\"useRequest\"'),
('SESSION_LIFETIME', '1800', 419, 'セッションの存続時間 (秒)'),
('SHOPPING_COMPLETE_URLPATH', 'ROOT_URLPATH . \"shopping/complete.php\"', 246, '購入完了画面'),
('SHOPPING_CONFIRM_URLPATH', 'ROOT_URLPATH . \"shopping/confirm.php\"', 244, '購入確認ページ'),
('SHOPPING_MODULE_URLPATH', 'ROOT_URLPATH . \"shopping/load_payment_module.php\"', 249, 'モジュール追加用画面'),
('SHOPPING_PAYMENT_URLPATH', 'ROOT_URLPATH . \"shopping/payment.php\"', 245, 'お支払い方法選択ページ'),
('SHOPPING_URL', 'HTTPS_URL . \"shopping/\" . DIR_INDEX_PATH', 237, '会員情報入力'),
('SITE_FRAME', '\"site_frame.tpl\"', 79, '一般サイト画面フレーム'),
('SLTEXT_LEN', '500', 294, '短文の文字数'),
('SMALL_IMAGE_HEIGHT', '130', 113, '一覧画像縦'),
('SMALL_IMAGE_WIDTH', '130', 112, '一覧画像横'),
('SMARTPHONE_COMPILE_REALDIR', 'DATA_REALDIR . \"Smarty/templates_c/\" . SMARTPHONE_TEMPLATE_NAME . \"/\"', 315, 'SMARTYコンパイル(smartphone)'),
('SMARTPHONE_DEFAULT_TEMPLATE_NAME', '\"sphone\"', 302, 'デフォルトテンプレート名(スマートフォン)'),
('SMARTPHONE_TEMPLATE_NAME', '\"sphone\"', 305, 'スマートフォンテンプレート名'),
('SMARTPHONE_TEMPLATE_REALDIR', 'SMARTY_TEMPLATES_REALDIR . SMARTPHONE_TEMPLATE_NAME . \"/\"', 314, 'SMARTYテンプレート(smart phone)'),
('SMARTY_FORCE_COMPILE_MODE', 'true', 1401, 'SMARTYコンパイルモード'),
('SMARTY_TEMPLATES_REALDIR', ' DATA_REALDIR . \"Smarty/templates/\"', 306, 'SMARTYテンプレート'),
('SMTEXT_LEN', '100', 189, NULL),
('SQL_QUERY_LOG_MIN_EXEC_TIME', '2', 1001, 'DBログで遅延とみなす実行時間(秒)'),
('SQL_QUERY_LOG_MODE', '1', 1000, 'DBログの記録モード (0:記録しない, 1:遅延時のみ記録する, 2:常に記録する)'),
('START_BIRTH_YEAR', '1970', 139, '生年月日初期選択年'),
('STEXT_LEN', '50', 188, '短い項目の文字数 (名前など)'),
('SUBSTITUTE_CHAR', '63', 1421, 'UTF-8依存文字が入力された際に表示する文字(Unicode値の整数 デフォルト: ?)'),
('TAX_RULE_PRIORITY', '\"product_id,product_class_id,pref_id,country_id\"', 1417, '複数箇所の税率設定時における優先度設定。カンマ区切りスペース不可で記述。後に書いてあるキーに一致するほど優先される。デフォルト：\'product_id,product_class_id,pref_id,country_id\'（国＞地域（県）＞規格単位＞商品単位）'),
('TEL_ITEM_LEN', '6', 202, '電話番号各項目制限'),
('TEL_LEN', '12', 203, '電話番号総数'),
('TEMPLATE_ADMIN_REALDIR', 'SMARTY_TEMPLATES_REALDIR . \"admin/\"', 308, 'SMARTYテンプレート(管理機能)'),
('TEMPLATE_NAME', '\"default\"', 303, 'テンプレート名'),
('TEMPLATE_REALDIR', 'SMARTY_TEMPLATES_REALDIR . TEMPLATE_NAME . \"/\"', 307, 'SMARTYテンプレート(PC)'),
('TEMPLATE_SIZE', '10000', 131, 'アップできるテンプレートファイル制限(KB)'),
('TEMPLATE_TEMP_REALDIR', 'HTML_REALDIR . \"upload/temp_template/\"', 19, 'テンプレートファイル一時保存先'),
('TOP_URL', 'HTTP_URL . DIR_INDEX_PATH', 239, 'サイトトップ'),
('TRANSACTION_ID_NAME', '\"transactionid\"', 94, 'トランザクションID の名前'),
('UPDATE_HTTP', '\"http://www.ec-cube.net/info/index.php\"', 28, 'アップデート管理用ファイル格納場所'),
('UPDATE_SEND_SITE_INFO', 'false', 289, 'アップデート時にサイト情報を送出するか'),
('URL_LEN', '1024', 194, 'URLの文字長'),
('USER_DEF_PHP_REALFILE', 'DATA_REALDIR . \"__default.php\"', 20, 'ユーザー作成画面のデフォルトPHPファイル'),
('USER_DIR', '\"user_data/\"', 3, 'ユーザファイル保存先'),
('USER_PACKAGE_DIR', '\"packages/\"', 17, 'テンプレートファイル保存先'),
('USER_REALDIR', 'HTML_REALDIR . USER_DIR', 4, 'ユーザファイル保存先'),
('USER_TEMPLATE_REALDIR', 'USER_REALDIR . USER_PACKAGE_DIR', 18, 'テンプレートファイル保存先'),
('USER_URL', 'HTTP_URL . USER_DIR', 9, 'ユーザー作成ページ等'),
('USE_MOBILE', 'true', 292, 'モバイルサイトを利用するか(true:利用する、false:利用しない) (false は一部対応) (*モジュールで使用)'),
('USE_MULTIPLE_SHIPPING', 'true', 293, '複数配送先指定機能を利用するか(true:利用する、false:利用しない)'),
('USE_NORMALIZE_HOSTNAME', 'true', 1414, 'ホスト名を正規化するか (true:する false:しない)'),
('USE_POINT', 'true', 290, 'ポイントを利用するか(true:利用する、false:利用しない) (false は一部対応)'),
('USE_VERBOSE_LOG', 'DEBUG_MODE', 73, 'ログを冗長とするか(true:利用する、false:利用しない)'),
('ZIP01_LEN', '3', 200, '郵便番号1'),
('ZIP02_LEN', '4', 201, '郵便番号2'),
('ZIP_DOWNLOAD_URL', '\"https://www.post.japanpost.jp/zipcode/dl/kogaki/zip/ken_all.zip\"', 1224, '郵便番号CSVのZIPアーカイブファイルの取得元');

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_country`
--

CREATE TABLE `mtb_country` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_country`
--

INSERT INTO `mtb_country` (`id`, `name`, `RANK`) VALUES
(4, 'アフガニスタン', 4),
(8, 'アルバニア', 12),
(10, '南極', 149),
(12, 'アルジェリア', 9),
(16, 'アメリカ領サモア', 7),
(20, 'アンドラ', 17),
(24, 'アンゴラ', 15),
(28, 'アンティグア・バーブーダ', 16),
(31, 'アゼルバイジャン', 3),
(32, 'アルゼンチン', 10),
(36, 'オーストラリア', 39),
(40, 'オーストリア', 40),
(44, 'バハマ', 167),
(48, 'バーレーン', 161),
(50, 'バングラデシュ', 175),
(51, 'アルメニア', 13),
(52, 'バルバドス', 172),
(56, 'ベルギー', 201),
(60, 'バミューダ諸島|バミューダ', 169),
(64, 'ブータン', 181),
(68, 'ボリビア|ボリビア多民族国', 206),
(70, 'ボスニア・ヘルツェゴビナ', 203),
(72, 'ボツワナ', 204),
(74, 'ブーベ島', 182),
(76, 'ブラジル', 186),
(84, 'ベリーズ', 199),
(86, 'イギリス領インド洋地域', 20),
(90, 'ソロモン諸島', 121),
(92, 'イギリス領ヴァージン諸島', 21),
(96, 'ブルネイ|ブルネイ・ダルサラーム', 193),
(100, 'ブルガリア', 191),
(104, 'ミャンマー', 224),
(108, 'ブルンジ', 194),
(112, 'ベラルーシ', 198),
(116, 'カンボジア', 55),
(120, 'カメルーン', 53),
(124, 'カナダ', 51),
(132, 'カーボベルデ', 45),
(136, 'ケイマン諸島', 75),
(140, '中央アフリカ共和国', 130),
(144, 'スリランカ', 108),
(148, 'チャド', 129),
(152, 'チリ', 134),
(156, '中華人民共和国|中国', 131),
(158, '台湾', 125),
(162, 'クリスマス島 (オーストラリア)|クリスマス島', 71),
(166, 'ココス諸島|ココス（キーリング）諸島', 78),
(170, 'コロンビア', 81),
(174, 'コモロ', 80),
(175, 'マヨット', 214),
(178, 'コンゴ共和国', 82),
(180, 'コンゴ民主共和国', 83),
(184, 'クック諸島', 69),
(188, 'コスタリカ', 79),
(191, 'クロアチア', 74),
(192, 'キューバ', 60),
(196, 'キプロス', 59),
(203, 'チェコ', 128),
(204, 'ベナン', 196),
(208, 'デンマーク', 136),
(212, 'ドミニカ国', 141),
(214, 'ドミニカ共和国', 140),
(218, 'エクアドル', 33),
(222, 'エルサルバドル', 38),
(226, '赤道ギニア', 113),
(231, 'エチオピア', 36),
(232, 'エリトリア', 37),
(233, 'エストニア', 35),
(234, 'フェロー諸島', 184),
(238, 'フォークランド諸島|フォークランド（マルビナス）諸島', 185),
(239, 'サウスジョージア・サウスサンドウィッチ諸島', 85),
(242, 'フィジー', 178),
(246, 'フィンランド', 180),
(248, 'オーランド諸島', 41),
(250, 'フランス', 187),
(254, 'フランス領ギアナ', 188),
(258, 'フランス領ポリネシア', 189),
(260, 'フランス領南方・南極地域', 190),
(262, 'ジブチ', 94),
(266, 'ガボン', 52),
(268, 'グルジア', 72),
(270, 'ガンビア', 54),
(275, 'パレスチナ', 173),
(276, 'ドイツ', 137),
(288, 'ガーナ', 44),
(292, 'ジブラルタル', 95),
(296, 'キリバス', 63),
(300, 'ギリシャ', 62),
(304, 'グリーンランド', 70),
(308, 'グレナダ', 73),
(312, 'グアドループ', 66),
(316, 'グアム', 67),
(320, 'グアテマラ', 65),
(324, 'ギニア', 57),
(328, 'ガイアナ', 47),
(332, 'ハイチ', 162),
(334, 'ハード島とマクドナルド諸島', 160),
(336, 'バチカン|バチカン市国', 164),
(340, 'ホンジュラス', 209),
(344, '香港', 208),
(348, 'ハンガリー', 174),
(352, 'アイスランド', 1),
(356, 'インド', 26),
(360, 'インドネシア', 27),
(364, 'イラン|イラン・イスラム共和国', 25),
(368, 'イラク', 24),
(372, 'アイルランド', 2),
(376, 'イスラエル', 22),
(380, 'イタリア', 23),
(384, 'コートジボワール', 77),
(388, 'ジャマイカ', 97),
(392, '日本', 153),
(398, 'カザフスタン', 48),
(400, 'ヨルダン', 236),
(404, 'ケニア', 76),
(408, '朝鮮民主主義人民共和国', 133),
(410, '大韓民国', 124),
(414, 'クウェート', 68),
(417, 'キルギス', 64),
(418, 'ラオス|ラオス人民民主共和国', 237),
(422, 'レバノン', 247),
(426, 'レソト', 246),
(428, 'ラトビア', 238),
(430, 'リベリア', 242),
(434, 'リビア', 240),
(438, 'リヒテンシュタイン', 241),
(440, 'リトアニア', 239),
(442, 'ルクセンブルク', 244),
(446, 'マカオ', 211),
(450, 'マダガスカル', 213),
(454, 'マラウイ', 215),
(458, 'マレーシア', 219),
(462, 'モルディブ', 230),
(466, 'マリ共和国|マリ', 216),
(470, 'マルタ', 217),
(474, 'マルティニーク', 218),
(478, 'モーリタニア', 227),
(480, 'モーリシャス', 226),
(484, 'メキシコ', 225),
(492, 'モナコ', 229),
(496, 'モンゴル国|モンゴル', 233),
(498, 'モルドバ|モルドバ共和国', 231),
(499, 'モンテネグロ', 234),
(500, 'モントセラト', 235),
(504, 'モロッコ', 232),
(508, 'モザンビーク', 228),
(512, 'オマーン', 42),
(516, 'ナミビア', 148),
(520, 'ナウル', 147),
(524, 'ネパール', 157),
(528, 'オランダ', 43),
(531, 'キュラソー島|キュラソー', 61),
(533, 'アルバ', 11),
(534, 'シント・マールテン|シント・マールテン（オランダ領）', 100),
(535, 'BES諸島|ボネール、シント・ユースタティウスおよびサバ', 205),
(540, 'ニューカレドニア', 155),
(548, 'バヌアツ', 166),
(554, 'ニュージーランド', 156),
(558, 'ニカラグア', 151),
(562, 'ニジェール', 152),
(566, 'ナイジェリア', 146),
(570, 'ニウエ', 150),
(574, 'ノーフォーク島', 158),
(578, 'ノルウェー', 159),
(580, '北マリアナ諸島', 56),
(581, '合衆国領有小離島', 50),
(583, 'ミクロネシア連邦', 221),
(584, 'マーシャル諸島', 210),
(585, 'パラオ', 170),
(586, 'パキスタン', 163),
(591, 'パナマ', 165),
(598, 'パプアニューギニア', 168),
(600, 'パラグアイ', 171),
(604, 'ペルー', 200),
(608, 'フィリピン', 179),
(612, 'ピトケアン諸島|ピトケアン', 177),
(616, 'ポーランド', 202),
(620, 'ポルトガル', 207),
(624, 'ギニアビサウ', 58),
(626, '東ティモール', 176),
(630, 'プエルトリコ', 183),
(634, 'カタール', 49),
(638, 'レユニオン', 248),
(642, 'ルーマニア', 243),
(643, 'ロシア|ロシア連邦', 249),
(646, 'ルワンダ', 245),
(652, 'サン・バルテルミー島|サン・バルテルミー', 88),
(654, 'セントヘレナ・アセンションおよびトリスタンダクーニャ', 118),
(659, 'セントクリストファー・ネイビス', 116),
(660, 'アンギラ', 14),
(662, 'セントルシア', 119),
(663, 'サン・マルタン (西インド諸島)|サン・マルタン（フランス領）', 92),
(666, 'サンピエール島・ミクロン島', 90),
(670, 'セントビンセント・グレナディーン|セントビンセントおよびグレナディーン諸島', 117),
(674, 'サンマリノ', 91),
(678, 'サントメ・プリンシペ', 87),
(682, 'サウジアラビア', 84),
(686, 'セネガル', 114),
(688, 'セルビア', 115),
(690, 'セーシェル', 112),
(694, 'シエラレオネ', 93),
(702, 'シンガポール', 99),
(703, 'スロバキア', 109),
(704, 'ベトナム', 195),
(705, 'スロベニア', 110),
(706, 'ソマリア', 120),
(710, '南アフリカ共和国|南アフリカ', 222),
(716, 'ジンバブエ', 101),
(724, 'スペイン', 106),
(728, '南スーダン', 223),
(729, 'スーダン', 104),
(732, '西サハラ', 154),
(740, 'スリナム', 107),
(744, 'スヴァールバル諸島およびヤンマイエン島', 105),
(748, 'スワジランド', 111),
(752, 'スウェーデン', 103),
(756, 'スイス', 102),
(760, 'シリア|シリア・アラブ共和国', 98),
(762, 'タジキスタン', 126),
(764, 'タイ王国|タイ', 123),
(768, 'トーゴ', 138),
(772, 'トケラウ', 139),
(776, 'トンガ', 145),
(780, 'トリニダード・トバゴ', 142),
(784, 'アラブ首長国連邦', 8),
(788, 'チュニジア', 132),
(792, 'トルコ', 144),
(795, 'トルクメニスタン', 143),
(796, 'タークス・カイコス諸島', 122),
(798, 'ツバル', 135),
(800, 'ウガンダ', 29),
(804, 'ウクライナ', 30),
(807, 'マケドニア共和国|マケドニア旧ユーゴスラビア共和国', 212),
(818, 'エジプト', 34),
(826, 'イギリス', 19),
(831, 'ガーンジー', 46),
(832, 'ジャージー', 96),
(833, 'マン島', 220),
(834, 'タンザニア', 127),
(840, 'アメリカ合衆国', 5),
(850, 'アメリカ領ヴァージン諸島', 6),
(854, 'ブルキナファソ', 192),
(858, 'ウルグアイ', 32),
(860, 'ウズベキスタン', 31),
(862, 'ベネズエラ|ベネズエラ・ボリバル共和国', 197),
(876, 'ウォリス・フツナ', 28),
(882, 'サモア', 86),
(887, 'イエメン', 18),
(894, 'ザンビア', 89);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_customer_order_status`
--

CREATE TABLE `mtb_customer_order_status` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_customer_order_status`
--

INSERT INTO `mtb_customer_order_status` (`id`, `name`, `RANK`) VALUES
(1, '注文受付', 1),
(2, '入金待ち', 2),
(3, 'キャンセル', 4),
(4, '注文受付', 5),
(5, '発送済み', 6),
(6, '注文受付', 3),
(7, '注文未完了', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_customer_status`
--

CREATE TABLE `mtb_customer_status` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_customer_status`
--

INSERT INTO `mtb_customer_status` (`id`, `name`, `RANK`) VALUES
(1, '仮会員', 0),
(2, '本会員', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_db`
--

CREATE TABLE `mtb_db` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_db`
--

INSERT INTO `mtb_db` (`id`, `name`, `RANK`) VALUES
(1, 'PostgreSQL', 0),
(2, 'MySQL', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_delivery_date`
--

CREATE TABLE `mtb_delivery_date` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_delivery_date`
--

INSERT INTO `mtb_delivery_date` (`id`, `name`, `RANK`) VALUES
(1, '即日', 0),
(2, '1～2日後', 1),
(3, '3～4日後', 2),
(4, '1週間以降', 3),
(5, '2週間以降', 4),
(6, '3週間以降', 5),
(7, '1ヶ月以降', 6),
(8, '2ヶ月以降', 7),
(9, 'お取り寄せ(商品入荷後)', 8);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_delivery_type`
--

CREATE TABLE `mtb_delivery_type` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_delivery_type`
--

INSERT INTO `mtb_delivery_type` (`id`, `name`, `rank`) VALUES
(1, '通常', 0),
(2, '大型', 1),
(3, '冷蔵', 2),
(4, '冷凍', 3),
(5, 'その他', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_device_type`
--

CREATE TABLE `mtb_device_type` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_device_type`
--

INSERT INTO `mtb_device_type` (`id`, `name`, `RANK`) VALUES
(1, 'モバイル', 0),
(2, 'スマートフォン', 1),
(10, 'PC', 2),
(99, '管理画面', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_direct_mail`
--

CREATE TABLE `mtb_direct_mail` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_direct_mail`
--

INSERT INTO `mtb_direct_mail` (`id`, `name`, `rank`) VALUES
(1, '希望する', 0),
(2, '希望しない', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_disable_logout`
--

CREATE TABLE `mtb_disable_logout` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_disable_logout`
--

INSERT INTO `mtb_disable_logout` (`id`, `name`, `RANK`) VALUES
(1, '/shopping/deliv.php', 0),
(2, '/shopping/payment.php', 1),
(3, '/shopping/confirm.php', 2),
(4, '/shopping/card.php', 3),
(5, '/shopping/loan.php', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_disp`
--

CREATE TABLE `mtb_disp` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_disp`
--

INSERT INTO `mtb_disp` (`id`, `name`, `RANK`) VALUES
(1, '公開', 0),
(2, '非公開', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_gift`
--

CREATE TABLE `mtb_gift` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_gift`
--

INSERT INTO `mtb_gift` (`id`, `name`, `rank`) VALUES
(1, '包装', 0),
(2, 'リボン', 1),
(3, 'メッセージカード', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_hobby`
--

CREATE TABLE `mtb_hobby` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_hobby`
--

INSERT INTO `mtb_hobby` (`id`, `name`, `rank`) VALUES
(1, 'スポーツ', 0),
(2, 'アウトドア', 1),
(3, 'グルメ', 2),
(4, '読書', 3),
(5, '音楽鑑賞', 4),
(6, '車', 5),
(7, 'ゲーム', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_house`
--

CREATE TABLE `mtb_house` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_house`
--

INSERT INTO `mtb_house` (`id`, `name`, `rank`) VALUES
(1, 'アパート', 0),
(2, 'マンション', 1),
(3, '戸建て', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_job`
--

CREATE TABLE `mtb_job` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_job`
--

INSERT INTO `mtb_job` (`id`, `name`, `RANK`) VALUES
(1, '公務員', 0),
(2, 'コンサルタント', 1),
(3, 'コンピューター関連技術職', 2),
(4, 'コンピューター関連以外の技術職', 3),
(5, '金融関係', 4),
(6, '医師', 5),
(7, '弁護士', 6),
(8, '総務・人事・事務', 7),
(9, '営業・販売', 8),
(10, '研究・開発', 9),
(11, '広報・宣伝', 10),
(12, '企画・マーケティング', 11),
(13, 'デザイン関係', 12),
(14, '会社経営・役員', 13),
(15, '出版・マスコミ関係', 14),
(16, '学生・フリーター', 15),
(17, '主婦', 16),
(18, 'その他', 17);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_magazine_type`
--

CREATE TABLE `mtb_magazine_type` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_magazine_type`
--

INSERT INTO `mtb_magazine_type` (`id`, `name`, `RANK`) VALUES
(1, 'HTML', 0),
(2, 'テキスト', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_mail_magazine_type`
--

CREATE TABLE `mtb_mail_magazine_type` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_mail_magazine_type`
--

INSERT INTO `mtb_mail_magazine_type` (`id`, `name`, `RANK`) VALUES
(1, 'HTMLメール', 0),
(2, 'テキストメール', 1),
(3, '希望しない', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_mail_template`
--

CREATE TABLE `mtb_mail_template` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_mail_template`
--

INSERT INTO `mtb_mail_template` (`id`, `name`, `RANK`) VALUES
(1, '注文受付メール', 0),
(2, '注文受付メール(携帯)', 1),
(3, '注文キャンセル受付メール', 2),
(4, '取り寄せ確認メール', 3),
(5, 'お問い合わせ受付メール', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_mail_tpl_path`
--

CREATE TABLE `mtb_mail_tpl_path` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_mail_tpl_path`
--

INSERT INTO `mtb_mail_tpl_path` (`id`, `name`, `RANK`) VALUES
(1, 'mail_templates/order_mail.tpl', 0),
(2, 'mail_templates/order_mail.tpl', 1),
(3, 'mail_templates/order_mail.tpl', 2),
(4, 'mail_templates/order_mail.tpl', 3),
(5, 'mail_templates/contact_mail.tpl', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_mail_type`
--

CREATE TABLE `mtb_mail_type` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_mail_type`
--

INSERT INTO `mtb_mail_type` (`id`, `name`, `RANK`) VALUES
(1, 'PCメールアドレス', 0),
(2, '携帯メールアドレス', 1),
(3, 'PCメールアドレス (携帯メールアドレスを登録している会員は除外)', 2),
(4, '携帯メールアドレス (PCメールアドレスを登録している会員は除外)', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_married_type`
--

CREATE TABLE `mtb_married_type` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_married_type`
--

INSERT INTO `mtb_married_type` (`id`, `name`, `rank`) VALUES
(1, '未婚', 0),
(2, '既婚', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_mobile_domain`
--

CREATE TABLE `mtb_mobile_domain` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_mobile_domain`
--

INSERT INTO `mtb_mobile_domain` (`id`, `name`, `RANK`) VALUES
(1, 'docomo.ne.jp', 0),
(2, 'ezweb.ne.jp', 1),
(3, 'softbank.ne.jp', 2),
(4, 'vodafone.ne.jp', 3),
(5, 'pdx.ne.jp', 4),
(6, 'disney.ne.jp', 5),
(7, 'willcom.com', 6),
(8, 'emnet.ne.jp', 7),
(9, 'i.softbank.jp', 8),
(10, 'emobile.ne.jp', 9),
(11, 'au.com', 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_order_status`
--

CREATE TABLE `mtb_order_status` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_order_status`
--

INSERT INTO `mtb_order_status` (`id`, `name`, `RANK`) VALUES
(1, '新規受付', 1),
(2, '入金待ち', 2),
(3, 'キャンセル', 4),
(4, '取り寄せ中', 5),
(5, '発送済み', 6),
(6, '入金済み', 3),
(7, '決済処理中', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_order_status_color`
--

CREATE TABLE `mtb_order_status_color` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_order_status_color`
--

INSERT INTO `mtb_order_status_color` (`id`, `name`, `RANK`) VALUES
(1, '#FFFFFF', 0),
(2, '#FFDE9B', 1),
(3, '#C9C9C9', 2),
(4, '#FFD9D9', 3),
(5, '#BFDFFF', 4),
(6, '#FFFFAB', 5),
(7, '#FFCCCC', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_ownersstore_err`
--

CREATE TABLE `mtb_ownersstore_err` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_ownersstore_err`
--

INSERT INTO `mtb_ownersstore_err` (`id`, `name`, `RANK`) VALUES
(1000, '不明なエラーが発生しました。', 0),
(1001, '不正なパラメーターが送信されました。', 1),
(1002, '認証に失敗しました。<br />・仮会員の方は、本会員登録を行ってください<br />・認証キーが正しく設定されているか確認してください', 2),
(1003, '認証に失敗しました。<br />・仮会員の方は、本会員登録を行ってください<br />・認証キーが正しく設定されているか確認してください', 3),
(1004, '購入済みの商品はありません。', 4),
(1005, 'ダウンロード可能なアップデータはありません。<br />・ステータスが「入金待ち」の可能性があります<br />・インストールされているモジュールが既に最新版の可能性があります。', 5),
(1006, '配信サーバーでエラーが発生しました。', 6),
(1007, 'ダウンロード完了通知に失敗しました。', 7),
(2001, '管理画面の認証に失敗しました。<br />管理画面トップページへ戻り、ログインし直してください。', 8),
(2002, '配信サーバーへ接続できません。', 9),
(2003, '配信サーバーへ接続できません。', 10),
(2004, '配信サーバーでエラーが発生しました。', 11),
(2005, '認証キーが設定されていません。<br />・「認証キー設定」で認証キーを設定してください。', 12),
(2006, '不正なアクセスです。', 13),
(2007, '不正なパラメーターが送信されました。', 14),
(2008, '自動アップデートが無効です', 15),
(2009, 'ファイルの書き込みに失敗しました。<br />・書き込み権限が正しく設定されていません。<br />・data/downloads/tmpディレクトリに書き込み権限があるかどうか確認してください', 16),
(2010, 'ファイルの書き込みに失敗しました。<br />・「ログ管理」で詳細を確認してください。', 17);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_page_max`
--

CREATE TABLE `mtb_page_max` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_page_max`
--

INSERT INTO `mtb_page_max` (`id`, `name`, `RANK`) VALUES
(10, '10', 0),
(20, '20', 1),
(30, '30', 2),
(40, '40', 3),
(50, '50', 4),
(60, '60', 5),
(70, '70', 6),
(80, '80', 7),
(90, '90', 8),
(100, '100', 9);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_permission`
--

CREATE TABLE `mtb_permission` (
  `id` text NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_permission`
--

INSERT INTO `mtb_permission` (`id`, `name`, `RANK`) VALUES
('/entry/delete.php', '1', 9),
('/entry/index.php', '1', 8),
('/entry/inputzip.php', '1', 10),
('/search/delete_note.php', '1', 11),
('/system/delete.php', '0', 1),
('/system/index.php', '0', 0),
('/system/input.php', '0', 2),
('/system/master.php', '0', 3),
('/system/mastercsv.php', '0', 6),
('/system/master_delete.php', '0', 4),
('/system/master_rank.php', '0', 5),
('/system/`RANK`.php', '0', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_pref`
--

CREATE TABLE `mtb_pref` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_pref`
--

INSERT INTO `mtb_pref` (`id`, `name`, `RANK`) VALUES
(1, '北海道', 1),
(2, '青森県', 2),
(3, '岩手県', 3),
(4, '宮城県', 4),
(5, '秋田県', 5),
(6, '山形県', 6),
(7, '福島県', 7),
(8, '茨城県', 8),
(9, '栃木県', 9),
(10, '群馬県', 10),
(11, '埼玉県', 11),
(12, '千葉県', 12),
(13, '東京都', 13),
(14, '神奈川県', 14),
(15, '新潟県', 15),
(16, '富山県', 16),
(17, '石川県', 17),
(18, '福井県', 18),
(19, '山梨県', 19),
(20, '長野県', 20),
(21, '岐阜県', 21),
(22, '静岡県', 22),
(23, '愛知県', 23),
(24, '三重県', 24),
(25, '滋賀県', 25),
(26, '京都府', 26),
(27, '大阪府', 27),
(28, '兵庫県', 28),
(29, '奈良県', 29),
(30, '和歌山県', 30),
(31, '鳥取県', 31),
(32, '島根県', 32),
(33, '岡山県', 33),
(34, '広島県', 34),
(35, '山口県', 35),
(36, '徳島県', 36),
(37, '香川県', 37),
(38, '愛媛県', 38),
(39, '高知県', 39),
(40, '福岡県', 40),
(41, '佐賀県', 41),
(42, '長崎県', 42),
(43, '熊本県', 43),
(44, '大分県', 44),
(45, '宮崎県', 45),
(46, '鹿児島県', 46),
(47, '沖縄県', 47);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_product_list_max`
--

CREATE TABLE `mtb_product_list_max` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_product_list_max`
--

INSERT INTO `mtb_product_list_max` (`id`, `name`, `RANK`) VALUES
(15, '15件', 0),
(30, '30件', 1),
(50, '50件', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_product_status_color`
--

CREATE TABLE `mtb_product_status_color` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_product_status_color`
--

INSERT INTO `mtb_product_status_color` (`id`, `name`, `RANK`) VALUES
(1, '#FFFFFF', 0),
(2, '#C9C9C9', 1),
(3, '#DDE6F2', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_product_type`
--

CREATE TABLE `mtb_product_type` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_product_type`
--

INSERT INTO `mtb_product_type` (`id`, `name`, `RANK`) VALUES
(1, '通常商品', 0),
(2, 'ダウンロード商品', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_recommend`
--

CREATE TABLE `mtb_recommend` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_recommend`
--

INSERT INTO `mtb_recommend` (`id`, `name`, `RANK`) VALUES
(1, '★', 4),
(2, '★★', 3),
(3, '★★★', 2),
(4, '★★★★', 1),
(5, '★★★★★', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_reminder`
--

CREATE TABLE `mtb_reminder` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_reminder`
--

INSERT INTO `mtb_reminder` (`id`, `name`, `RANK`) VALUES
(1, '母親の旧姓は？', 0),
(2, 'お気に入りのマンガは？', 1),
(3, '大好きなペットの名前は？', 2),
(4, '初恋の人の名前は？', 3),
(5, '面白かった映画は？', 4),
(6, '尊敬していた先生の名前は？', 5),
(7, '好きな食べ物は？', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_review_deny_url`
--

CREATE TABLE `mtb_review_deny_url` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_review_deny_url`
--

INSERT INTO `mtb_review_deny_url` (`id`, `name`, `RANK`) VALUES
(0, 'http://', 0),
(1, 'https://', 1),
(2, 'ttp://', 2),
(3, 'ttps://', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_sex`
--

CREATE TABLE `mtb_sex` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_sex`
--

INSERT INTO `mtb_sex` (`id`, `name`, `RANK`) VALUES
(1, '男性', 0),
(2, '女性', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_status`
--

CREATE TABLE `mtb_status` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_status`
--

INSERT INTO `mtb_status` (`id`, `name`, `RANK`) VALUES
(1, 'NEW', 0),
(2, '残りわずか', 1),
(3, 'ポイント２倍', 2),
(4, 'オススメ', 3),
(5, '限定品', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_status_image`
--

CREATE TABLE `mtb_status_image` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_status_image`
--

INSERT INTO `mtb_status_image` (`id`, `name`, `RANK`) VALUES
(1, 'img/icon/ico_01.gif', 0),
(2, 'img/icon/ico_02.gif', 1),
(3, 'img/icon/ico_03.gif', 2),
(4, 'img/icon/ico_04.gif', 3),
(5, 'img/icon/ico_05.gif', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_target`
--

CREATE TABLE `mtb_target` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_target`
--

INSERT INTO `mtb_target` (`id`, `name`, `RANK`) VALUES
(0, 'Unused', 0),
(1, 'LeftNavi', 1),
(2, 'MainHead', 2),
(3, 'RightNavi', 3),
(4, 'MainFoot', 4),
(5, 'TopNavi', 5),
(6, 'BottomNavi', 6),
(7, 'HeadNavi', 7),
(8, 'HeaderTopNavi', 8),
(9, 'FooterBottomNavi', 9),
(10, 'HeaderInternalNavi', 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_taxrule`
--

CREATE TABLE `mtb_taxrule` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_taxrule`
--

INSERT INTO `mtb_taxrule` (`id`, `name`, `RANK`) VALUES
(1, '四捨五入', 0),
(2, '切り捨て', 1),
(3, '切り上げ', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_warranty_period`
--

CREATE TABLE `mtb_warranty_period` (
  `id` smallint(6) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `rank` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `mtb_warranty_period`
--

INSERT INTO `mtb_warranty_period` (`id`, `name`, `rank`) VALUES
(1, '1ヶ月', 0),
(2, '3ヶ月', 1),
(3, '6ヶ月', 2),
(4, '12ヶ月', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_wday`
--

CREATE TABLE `mtb_wday` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_wday`
--

INSERT INTO `mtb_wday` (`id`, `name`, `RANK`) VALUES
(0, '日', 0),
(1, '月', 1),
(2, '火', 2),
(3, '水', 3),
(4, '木', 4),
(5, '金', 5),
(6, '土', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_work`
--

CREATE TABLE `mtb_work` (
  `id` smallint(6) NOT NULL,
  `name` text DEFAULT NULL,
  `RANK` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `mtb_work`
--

INSERT INTO `mtb_work` (`id`, `name`, `RANK`) VALUES
(0, '非稼働', 0),
(1, '稼働', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `mtb_zip`
--

CREATE TABLE `mtb_zip` (
  `zip_id` int(11) NOT NULL,
  `zipcode` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `town` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `dtb_api_account`
--
ALTER TABLE `dtb_api_account`
  ADD PRIMARY KEY (`api_account_id`);

--
-- テーブルのインデックス `dtb_api_account_api_account_id_seq`
--
ALTER TABLE `dtb_api_account_api_account_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_api_config`
--
ALTER TABLE `dtb_api_config`
  ADD PRIMARY KEY (`api_config_id`);

--
-- テーブルのインデックス `dtb_api_config_api_config_id_seq`
--
ALTER TABLE `dtb_api_config_api_config_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_baseinfo`
--
ALTER TABLE `dtb_baseinfo`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `dtb_best_products`
--
ALTER TABLE `dtb_best_products`
  ADD PRIMARY KEY (`best_id`);

--
-- テーブルのインデックス `dtb_best_products_best_id_seq`
--
ALTER TABLE `dtb_best_products_best_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_bkup`
--
ALTER TABLE `dtb_bkup`
  ADD PRIMARY KEY (`bkup_name`(255));

--
-- テーブルのインデックス `dtb_bloc`
--
ALTER TABLE `dtb_bloc`
  ADD PRIMARY KEY (`device_type_id`,`bloc_id`),
  ADD UNIQUE KEY `device_type_id` (`device_type_id`,`filename`(255));

--
-- テーブルのインデックス `dtb_blocposition`
--
ALTER TABLE `dtb_blocposition`
  ADD PRIMARY KEY (`device_type_id`,`page_id`,`target_id`,`bloc_id`);

--
-- テーブルのインデックス `dtb_category`
--
ALTER TABLE `dtb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- テーブルのインデックス `dtb_category_category_id_seq`
--
ALTER TABLE `dtb_category_category_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_category_count`
--
ALTER TABLE `dtb_category_count`
  ADD PRIMARY KEY (`category_id`);

--
-- テーブルのインデックス `dtb_category_total_count`
--
ALTER TABLE `dtb_category_total_count`
  ADD PRIMARY KEY (`category_id`);

--
-- テーブルのインデックス `dtb_class`
--
ALTER TABLE `dtb_class`
  ADD PRIMARY KEY (`class_id`);

--
-- テーブルのインデックス `dtb_classcategory`
--
ALTER TABLE `dtb_classcategory`
  ADD PRIMARY KEY (`classcategory_id`);

--
-- テーブルのインデックス `dtb_classcategory_classcategory_id_seq`
--
ALTER TABLE `dtb_classcategory_classcategory_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_class_class_id_seq`
--
ALTER TABLE `dtb_class_class_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_csv`
--
ALTER TABLE `dtb_csv`
  ADD PRIMARY KEY (`no`);

--
-- テーブルのインデックス `dtb_csv_sql`
--
ALTER TABLE `dtb_csv_sql`
  ADD PRIMARY KEY (`sql_id`);

--
-- テーブルのインデックス `dtb_csv_sql_sql_id_seq`
--
ALTER TABLE `dtb_csv_sql_sql_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_customer`
--
ALTER TABLE `dtb_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `secret_key` (`secret_key`(255)),
  ADD KEY `dtb_customer_mobile_phone_id_key` (`mobile_phone_id`(255));

--
-- テーブルのインデックス `dtb_customer_customer_id_seq`
--
ALTER TABLE `dtb_customer_customer_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_customer_favorite_products`
--
ALTER TABLE `dtb_customer_favorite_products`
  ADD PRIMARY KEY (`customer_id`,`product_id`);

--
-- テーブルのインデックス `dtb_deliv`
--
ALTER TABLE `dtb_deliv`
  ADD PRIMARY KEY (`deliv_id`);

--
-- テーブルのインデックス `dtb_delivfee`
--
ALTER TABLE `dtb_delivfee`
  ADD PRIMARY KEY (`deliv_id`,`fee_id`);

--
-- テーブルのインデックス `dtb_delivtime`
--
ALTER TABLE `dtb_delivtime`
  ADD PRIMARY KEY (`deliv_id`,`time_id`);

--
-- テーブルのインデックス `dtb_deliv_deliv_id_seq`
--
ALTER TABLE `dtb_deliv_deliv_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_gift`
--
ALTER TABLE `dtb_gift`
  ADD PRIMARY KEY (`gift_id`,`product_id`);

--
-- テーブルのインデックス `dtb_hobby`
--
ALTER TABLE `dtb_hobby`
  ADD PRIMARY KEY (`hobby_id`,`customer_id`);

--
-- テーブルのインデックス `dtb_holiday`
--
ALTER TABLE `dtb_holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- テーブルのインデックス `dtb_holiday_holiday_id_seq`
--
ALTER TABLE `dtb_holiday_holiday_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_index_list`
--
ALTER TABLE `dtb_index_list`
  ADD PRIMARY KEY (`table_name`(255),`column_name`(255));

--
-- テーブルのインデックス `dtb_kiyaku`
--
ALTER TABLE `dtb_kiyaku`
  ADD PRIMARY KEY (`kiyaku_id`);

--
-- テーブルのインデックス `dtb_kiyaku_kiyaku_id_seq`
--
ALTER TABLE `dtb_kiyaku_kiyaku_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_mailmaga_template`
--
ALTER TABLE `dtb_mailmaga_template`
  ADD PRIMARY KEY (`template_id`);

--
-- テーブルのインデックス `dtb_mailmaga_template_template_id_seq`
--
ALTER TABLE `dtb_mailmaga_template_template_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_mailtemplate`
--
ALTER TABLE `dtb_mailtemplate`
  ADD PRIMARY KEY (`template_id`);

--
-- テーブルのインデックス `dtb_mail_history`
--
ALTER TABLE `dtb_mail_history`
  ADD PRIMARY KEY (`send_id`);

--
-- テーブルのインデックス `dtb_mail_history_send_id_seq`
--
ALTER TABLE `dtb_mail_history_send_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_maker`
--
ALTER TABLE `dtb_maker`
  ADD PRIMARY KEY (`maker_id`);

--
-- テーブルのインデックス `dtb_maker_count`
--
ALTER TABLE `dtb_maker_count`
  ADD PRIMARY KEY (`maker_id`);

--
-- テーブルのインデックス `dtb_maker_maker_id_seq`
--
ALTER TABLE `dtb_maker_maker_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_member`
--
ALTER TABLE `dtb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- テーブルのインデックス `dtb_member_member_id_seq`
--
ALTER TABLE `dtb_member_member_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_mobile_ext_session_id`
--
ALTER TABLE `dtb_mobile_ext_session_id`
  ADD PRIMARY KEY (`session_id`(255)),
  ADD KEY `dtb_mobile_ext_session_id_param_key_key` (`param_key`(255)),
  ADD KEY `dtb_mobile_ext_session_id_param_value_key` (`param_value`(255)),
  ADD KEY `dtb_mobile_ext_session_id_url_key` (`url`(255)),
  ADD KEY `dtb_mobile_ext_session_id_create_date_key` (`create_date`);

--
-- テーブルのインデックス `dtb_module`
--
ALTER TABLE `dtb_module`
  ADD PRIMARY KEY (`module_id`);

--
-- テーブルのインデックス `dtb_module_update_logs`
--
ALTER TABLE `dtb_module_update_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- テーブルのインデックス `dtb_module_update_logs_log_id_seq`
--
ALTER TABLE `dtb_module_update_logs_log_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_news`
--
ALTER TABLE `dtb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- テーブルのインデックス `dtb_news_news_id_seq`
--
ALTER TABLE `dtb_news_news_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_order`
--
ALTER TABLE `dtb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dtb_order_customer_id_key` (`customer_id`);

--
-- テーブルのインデックス `dtb_order_detail`
--
ALTER TABLE `dtb_order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `dtb_order_detail_order_id_key` (`order_id`),
  ADD KEY `dtb_order_detail_product_id_key` (`product_id`);

--
-- テーブルのインデックス `dtb_order_detail_order_detail_id_seq`
--
ALTER TABLE `dtb_order_detail_order_detail_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_order_order_id_seq`
--
ALTER TABLE `dtb_order_order_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_order_temp`
--
ALTER TABLE `dtb_order_temp`
  ADD PRIMARY KEY (`order_temp_id`(64));

--
-- テーブルのインデックス `dtb_other_deliv`
--
ALTER TABLE `dtb_other_deliv`
  ADD PRIMARY KEY (`other_deliv_id`);

--
-- テーブルのインデックス `dtb_other_deliv_other_deliv_id_seq`
--
ALTER TABLE `dtb_other_deliv_other_deliv_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_ownersstore_settings`
--
ALTER TABLE `dtb_ownersstore_settings`
  ADD PRIMARY KEY (`public_key`(64));

--
-- テーブルのインデックス `dtb_pagelayout`
--
ALTER TABLE `dtb_pagelayout`
  ADD PRIMARY KEY (`device_type_id`,`page_id`);

--
-- テーブルのインデックス `dtb_payment`
--
ALTER TABLE `dtb_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- テーブルのインデックス `dtb_payment_options`
--
ALTER TABLE `dtb_payment_options`
  ADD PRIMARY KEY (`deliv_id`,`payment_id`);

--
-- テーブルのインデックス `dtb_payment_payment_id_seq`
--
ALTER TABLE `dtb_payment_payment_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_plugin`
--
ALTER TABLE `dtb_plugin`
  ADD PRIMARY KEY (`plugin_id`);

--
-- テーブルのインデックス `dtb_plugin_hookpoint`
--
ALTER TABLE `dtb_plugin_hookpoint`
  ADD PRIMARY KEY (`plugin_hookpoint_id`);

--
-- テーブルのインデックス `dtb_plugin_hookpoint_plugin_hookpoint_id_seq`
--
ALTER TABLE `dtb_plugin_hookpoint_plugin_hookpoint_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_plugin_plugin_id_seq`
--
ALTER TABLE `dtb_plugin_plugin_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_products`
--
ALTER TABLE `dtb_products`
  ADD PRIMARY KEY (`product_id`);

--
-- テーブルのインデックス `dtb_products_class`
--
ALTER TABLE `dtb_products_class`
  ADD PRIMARY KEY (`product_class_id`),
  ADD UNIQUE KEY `dtb_products_class_unique_key` (`product_id`,`classcategory_id1`,`classcategory_id2`),
  ADD KEY `dtb_products_class_product_id_key` (`product_id`);

--
-- テーブルのインデックス `dtb_products_class_product_class_id_seq`
--
ALTER TABLE `dtb_products_class_product_class_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_products_product_id_seq`
--
ALTER TABLE `dtb_products_product_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_product_categories`
--
ALTER TABLE `dtb_product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`);

--
-- テーブルのインデックス `dtb_product_status`
--
ALTER TABLE `dtb_product_status`
  ADD PRIMARY KEY (`product_status_id`,`product_id`);

--
-- テーブルのインデックス `dtb_recommend_products`
--
ALTER TABLE `dtb_recommend_products`
  ADD PRIMARY KEY (`product_id`,`recommend_product_id`);

--
-- テーブルのインデックス `dtb_review`
--
ALTER TABLE `dtb_review`
  ADD PRIMARY KEY (`review_id`);

--
-- テーブルのインデックス `dtb_review_review_id_seq`
--
ALTER TABLE `dtb_review_review_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_send_customer`
--
ALTER TABLE `dtb_send_customer`
  ADD PRIMARY KEY (`send_id`,`customer_id`),
  ADD KEY `dtb_send_customer_customer_id_key` (`customer_id`);

--
-- テーブルのインデックス `dtb_send_history`
--
ALTER TABLE `dtb_send_history`
  ADD PRIMARY KEY (`send_id`);

--
-- テーブルのインデックス `dtb_send_history_send_id_seq`
--
ALTER TABLE `dtb_send_history_send_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_session`
--
ALTER TABLE `dtb_session`
  ADD PRIMARY KEY (`sess_id`(255)),
  ADD KEY `dtb_session_update_date_key` (`update_date`);

--
-- テーブルのインデックス `dtb_shipment_item`
--
ALTER TABLE `dtb_shipment_item`
  ADD PRIMARY KEY (`order_id`,`shipping_id`,`product_class_id`);

--
-- テーブルのインデックス `dtb_shipping`
--
ALTER TABLE `dtb_shipping`
  ADD PRIMARY KEY (`order_id`,`shipping_id`);

--
-- テーブルのインデックス `dtb_tax_rule`
--
ALTER TABLE `dtb_tax_rule`
  ADD PRIMARY KEY (`tax_rule_id`);

--
-- テーブルのインデックス `dtb_tax_rule_tax_rule_id_seq`
--
ALTER TABLE `dtb_tax_rule_tax_rule_id_seq`
  ADD PRIMARY KEY (`sequence`);

--
-- テーブルのインデックス `dtb_templates`
--
ALTER TABLE `dtb_templates`
  ADD PRIMARY KEY (`template_code`(255));

--
-- テーブルのインデックス `dtb_update`
--
ALTER TABLE `dtb_update`
  ADD PRIMARY KEY (`module_id`);

--
-- テーブルのインデックス `mtb_allowed_tag`
--
ALTER TABLE `mtb_allowed_tag`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_authority`
--
ALTER TABLE `mtb_authority`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_auth_excludes`
--
ALTER TABLE `mtb_auth_excludes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_bijin`
--
ALTER TABLE `mtb_bijin`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_constants`
--
ALTER TABLE `mtb_constants`
  ADD PRIMARY KEY (`id`(255));

--
-- テーブルのインデックス `mtb_country`
--
ALTER TABLE `mtb_country`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_customer_order_status`
--
ALTER TABLE `mtb_customer_order_status`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_customer_status`
--
ALTER TABLE `mtb_customer_status`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_db`
--
ALTER TABLE `mtb_db`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_delivery_date`
--
ALTER TABLE `mtb_delivery_date`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_delivery_type`
--
ALTER TABLE `mtb_delivery_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_device_type`
--
ALTER TABLE `mtb_device_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_direct_mail`
--
ALTER TABLE `mtb_direct_mail`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_disable_logout`
--
ALTER TABLE `mtb_disable_logout`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_disp`
--
ALTER TABLE `mtb_disp`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_gift`
--
ALTER TABLE `mtb_gift`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_hobby`
--
ALTER TABLE `mtb_hobby`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_house`
--
ALTER TABLE `mtb_house`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_job`
--
ALTER TABLE `mtb_job`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_magazine_type`
--
ALTER TABLE `mtb_magazine_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_mail_magazine_type`
--
ALTER TABLE `mtb_mail_magazine_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_mail_template`
--
ALTER TABLE `mtb_mail_template`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_mail_tpl_path`
--
ALTER TABLE `mtb_mail_tpl_path`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_mail_type`
--
ALTER TABLE `mtb_mail_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_married_type`
--
ALTER TABLE `mtb_married_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_mobile_domain`
--
ALTER TABLE `mtb_mobile_domain`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_order_status`
--
ALTER TABLE `mtb_order_status`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_order_status_color`
--
ALTER TABLE `mtb_order_status_color`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_ownersstore_err`
--
ALTER TABLE `mtb_ownersstore_err`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_page_max`
--
ALTER TABLE `mtb_page_max`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_permission`
--
ALTER TABLE `mtb_permission`
  ADD PRIMARY KEY (`id`(255));

--
-- テーブルのインデックス `mtb_pref`
--
ALTER TABLE `mtb_pref`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_product_list_max`
--
ALTER TABLE `mtb_product_list_max`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_product_status_color`
--
ALTER TABLE `mtb_product_status_color`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_product_type`
--
ALTER TABLE `mtb_product_type`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_recommend`
--
ALTER TABLE `mtb_recommend`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_reminder`
--
ALTER TABLE `mtb_reminder`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_review_deny_url`
--
ALTER TABLE `mtb_review_deny_url`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_sex`
--
ALTER TABLE `mtb_sex`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_status`
--
ALTER TABLE `mtb_status`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_status_image`
--
ALTER TABLE `mtb_status_image`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_target`
--
ALTER TABLE `mtb_target`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_taxrule`
--
ALTER TABLE `mtb_taxrule`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_warranty_period`
--
ALTER TABLE `mtb_warranty_period`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_wday`
--
ALTER TABLE `mtb_wday`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_work`
--
ALTER TABLE `mtb_work`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `mtb_zip`
--
ALTER TABLE `mtb_zip`
  ADD PRIMARY KEY (`zip_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `dtb_api_account_api_account_id_seq`
--
ALTER TABLE `dtb_api_account_api_account_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_api_config_api_config_id_seq`
--
ALTER TABLE `dtb_api_config_api_config_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_best_products_best_id_seq`
--
ALTER TABLE `dtb_best_products_best_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `dtb_category_category_id_seq`
--
ALTER TABLE `dtb_category_category_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `dtb_classcategory_classcategory_id_seq`
--
ALTER TABLE `dtb_classcategory_classcategory_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `dtb_class_class_id_seq`
--
ALTER TABLE `dtb_class_class_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `dtb_csv_sql_sql_id_seq`
--
ALTER TABLE `dtb_csv_sql_sql_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_customer_customer_id_seq`
--
ALTER TABLE `dtb_customer_customer_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- テーブルの AUTO_INCREMENT `dtb_deliv_deliv_id_seq`
--
ALTER TABLE `dtb_deliv_deliv_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `dtb_holiday_holiday_id_seq`
--
ALTER TABLE `dtb_holiday_holiday_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `dtb_kiyaku_kiyaku_id_seq`
--
ALTER TABLE `dtb_kiyaku_kiyaku_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `dtb_mailmaga_template_template_id_seq`
--
ALTER TABLE `dtb_mailmaga_template_template_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_mail_history_send_id_seq`
--
ALTER TABLE `dtb_mail_history_send_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `dtb_maker_maker_id_seq`
--
ALTER TABLE `dtb_maker_maker_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_member_member_id_seq`
--
ALTER TABLE `dtb_member_member_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `dtb_module_update_logs_log_id_seq`
--
ALTER TABLE `dtb_module_update_logs_log_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_news_news_id_seq`
--
ALTER TABLE `dtb_news_news_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `dtb_order_detail_order_detail_id_seq`
--
ALTER TABLE `dtb_order_detail_order_detail_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `dtb_order_order_id_seq`
--
ALTER TABLE `dtb_order_order_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `dtb_other_deliv_other_deliv_id_seq`
--
ALTER TABLE `dtb_other_deliv_other_deliv_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_payment_payment_id_seq`
--
ALTER TABLE `dtb_payment_payment_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `dtb_plugin_hookpoint_plugin_hookpoint_id_seq`
--
ALTER TABLE `dtb_plugin_hookpoint_plugin_hookpoint_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_plugin_plugin_id_seq`
--
ALTER TABLE `dtb_plugin_plugin_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_products_class_product_class_id_seq`
--
ALTER TABLE `dtb_products_class_product_class_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `dtb_products_product_id_seq`
--
ALTER TABLE `dtb_products_product_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `dtb_review_review_id_seq`
--
ALTER TABLE `dtb_review_review_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_send_history_send_id_seq`
--
ALTER TABLE `dtb_send_history_send_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dtb_tax_rule_tax_rule_id_seq`
--
ALTER TABLE `dtb_tax_rule_tax_rule_id_seq`
  MODIFY `sequence` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
