-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2019 г., 15:32
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `invest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu`
--

CREATE TABLE IF NOT EXISTS `in_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `template_id` int(3) DEFAULT NULL,
  `tree` int(3) NOT NULL DEFAULT '1',
  `child` int(4) DEFAULT NULL,
  `status` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu`
--

INSERT INTO `in_menu` (`id`, `title`, `slug`, `template_id`, `tree`, `child`, `status`, `user_id`, `updated_date`) VALUES
(1, 'Invester uchun', 'slu', 1, 1, 0, 1, 1, 123123213),
(2, 'Invester uchun2', 'slu2', 2, 2, 0, 1, 1, NULL),
(3, 'test', 'test', NULL, 3, 1, 1, 1, 1552816123),
(4, 'ikkinchi', 'ikki', NULL, 4, 2, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_item`
--

CREATE TABLE IF NOT EXISTS `in_menu_item` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `slug` varchar(128) NOT NULL,
  `views` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_item`
--

INSERT INTO `in_menu_item` (`id`, `menu_id`, `title`, `photo`, `short`, `text`, `slug`, `views`, `status`, `price`, `sale`, `user_id`, `created_date`, `updated_date`) VALUES
(1, 1, 'sasa', 'asasd', 'sad', 'asdasd', 'asd', 1, 1, 0, 0, 1, 1123213, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_item_trans`
--

CREATE TABLE IF NOT EXISTS `in_menu_item_trans` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `short` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `in_menu_trans`
--

CREATE TABLE IF NOT EXISTS `in_menu_trans` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_trans`
--

INSERT INTO `in_menu_trans` (`id`, `menu_id`, `lang`, `title`, `status`, `updated_date`) VALUES
(1, 3, 'ru-RU', 'Тест', 1, 1552825065),
(2, 4, 'en-US', 'Second', 1, NULL),
(3, 3, 'en-US', 'Tested2', 1, 1552825168);

-- --------------------------------------------------------

--
-- Структура таблицы `in_photo`
--

CREATE TABLE IF NOT EXISTS `in_photo` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_photo`
--

INSERT INTO `in_photo` (`id`, `slug`, `image`, `status`) VALUES
(1, '', 'Array', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `in_text_translate`
--

CREATE TABLE IF NOT EXISTS `in_text_translate` (
  `id` int(11) NOT NULL,
  `lang` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` varchar(128) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `updated_date` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_text_translate`
--

INSERT INTO `in_text_translate` (`id`, `lang`, `slug`, `text`, `status`, `updated_date`) VALUES
(1, 'uz-UZ', 'sevgi', 'Sevgi', 1, NULL),
(2, 'uz-UZ', 'salom', 'Salom', 1, NULL),
(3, 'ru-RU', 'salom', 'Приветь', 1, 1551543584),
(4, 'en-US', 'salom', 'Hello', 1, NULL),
(5, 'ru-RU', 'sevgi', 'Любовь', 1, 1551611979),
(6, 'uz-UZ', 'test', 'Test', 1, 1552820014),
(7, 'en-US', 'test', 'TEST', 1, NULL),
(8, 'ru-RU', 'test', 'Тест', 1, NULL),
(9, 'en-US', 'sevgi', 'Love', 1, NULL),
(10, 'uz-UZ', 'taxrir', 'Tahrir', 1, 1553536990),
(11, 'en-US', 'taxrir', 'Update', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1550999226),
('m190224_090538_create_user_table', 1550999228);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fio` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `birthdate` int(11) NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `wrong_pass` int(4) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `image`, `fio`, `birthdate`, `tel`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `wrong_pass`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', 0, '0', 'AajCcg5lGypsSXxJ0AlUWbbZ77zxfmQg', '$2y$13$0nAbzuxlVvE5hAwqL4YWY.QHzLczRm2s1oNedP5hdm1qNGT3Uo9uy', NULL, 'ax5165@gmail.com', 10, 0, 1551011259, 0),
(3, 'sardor', 'images/401923773.jpg', 'Dehqonov Sardor Shavkatovich', 0, '+998941073632', 'nDx_mLaPIe6m0lSkmJ1Q8pj2AmkXIhh7', '$2y$13$axGbX1pdTkYvaxDc7m0rze2r9i8kFjsLLRPegHWe5tExiRrIcpitq', NULL, 'sardor88.88@mail.ru', 10, 0, 1554020851, 1560664998);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `in_menu`
--
ALTER TABLE `in_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_item`
--
ALTER TABLE `in_menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_item_trans`
--
ALTER TABLE `in_menu_item_trans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_menu_trans`
--
ALTER TABLE `in_menu_trans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_photo`
--
ALTER TABLE `in_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_text_translate`
--
ALTER TABLE `in_text_translate`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `in_menu`
--
ALTER TABLE `in_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `in_menu_item`
--
ALTER TABLE `in_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `in_menu_item_trans`
--
ALTER TABLE `in_menu_item_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `in_menu_trans`
--
ALTER TABLE `in_menu_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `in_photo`
--
ALTER TABLE `in_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `in_text_translate`
--
ALTER TABLE `in_text_translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
