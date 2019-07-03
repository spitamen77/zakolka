-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 03 2019 г., 14:30
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zakolka2`
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu`
--

INSERT INTO `in_menu` (`id`, `title`, `slug`, `template_id`, `tree`, `child`, `status`, `user_id`, `updated_date`) VALUES
(1, 'Invester uchun', 'slu', 1, 1, 0, 9, 1, 1561909743),
(2, 'Invester uchun2', 'slu2', 2, 2, 0, 9, 1, 1561909748),
(3, 'test', 'test', 1, 3, 1, 9, 1, 1561909750),
(4, 'ikkinchi', 'ikki', 1, 4, 2, 9, 1, 1561909756),
(5, 'Bacxt2', 'baxt', 1, 4, 1, 9, 1, 1561909753),
(6, 'Kelajak', 'kelajak', 2, 4, 3, 9, 1, 1561909758),
(7, 'qahramon000', '5d1c32ce48902', 1, 3, 0, 9, 1, 1562129102),
(8, 'Bezak', 'bezak', 2, 1, 0, 1, 1, 1561916847),
(9, 'Banan', 'banan', 2, 2, 0, 1, 1, 1561916864),
(10, 'Rezinka', 'rezinka', 2, 3, 0, 1, 1, 1561916878),
(11, 'Zajim', 'zajim', 2, 4, 0, 1, 1, 1561916905);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_item`
--

INSERT INTO `in_menu_item` (`id`, `menu_id`, `title`, `photo`, `short`, `text`, `slug`, `views`, `status`, `price`, `sale`, `user_id`, `created_date`, `updated_date`) VALUES
(1, 1, 'sasa', 'asasd', 'sad', 'asdasd', 'asd', 1, 0, 0, 0, 1, 1123213, NULL),
(2, 1, 'Second', NULL, 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 'bir2', 0, 9, 23432, 234, 1, 1552833485, 1561911216),
(3, 6, 'asdfasd', '5c8e8625990e7.jpg', 'asd asds', 'asdf asdf asdf ads fadsf', 'assa', 0, 9, NULL, NULL, 1, 1552844325, 1561911212),
(4, 6, 'Salom hamma', '5c99108690bea.jpg', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 'aasdsa', 0, 9, NULL, 0, 1, 1552844590, 1554522519),
(5, 6, 'hamma qani0000', '5c9a73804dbe1.jpg', 'Biurinchi qadam000', 'adfv sd sdf sdf dsf sdfg000', 'qani', 0, 9, 23432, 234, 1, 1553625939, 1561911208),
(6, 6, 'dddddddddddddd', '5c9bc053553c8.jpg', 'dssssssss', 'sdvfdsvfd sdsfsd2', 'bir2d', 5, 9, NULL, NULL, 1, 1553705417, 1561911204),
(7, 8, '2-088 title', '5d18e05e72be1.jpg', '2-088 short', '2-088 text', '2-088', 37, 9, 2000, 0, 1, 1561911349, 1562082128),
(8, 8, '2-176 title', '5d1900b6c652c.jpg', '2-176 short', '2-176 text', '2-176', 0, 1, 2000, NULL, 1, 1561919670, 1561919691),
(10, 9, 'Banan taqinchoq', 'uploads/item/5d1c36cc54e1c.jpg', 'babanli taqinchoqlar', '<p>Bababi bor taqinchoq</p>', 'bababi', 15, 1, 1200, 0, 1, 1562130049, 1562130124),
(11, 9, 'Banan taqinchoq2', 'uploads/item/5d1c3717ebd71.jpg', 'Banan taqinchoq2', '<p>Banan taqinchoq2 Banan taqinchoq2</p>', 'banani katta', 5, 1, 1100, 5, 1, 1562130199, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_item_trans`
--

INSERT INTO `in_menu_item_trans` (`id`, `item_id`, `lang`, `title`, `short`, `text`, `status`, `updated_date`) VALUES
(1, 2, 'uz-UZ', 'Second', 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 9, 1561911216),
(2, 3, 'uz-UZ', 'asdfasd', 'asd asds', 'asdf asdf asdf ads fadsf', 9, 1561911212),
(3, 4, 'uz-UZ', 'Salom hamma', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(4, 2, 'uz-UZ', 'Birinchi 2', 'Biurinchi qadam', 'salom, bu birtinichi qasdaama', 9, 1561911216),
(5, 2, 'uz-UZ', 'Birinchi 2', 'Biurinchi qadam', 'salom, bu birtinichi qasdaama', 9, 1561911216),
(6, 4, 'ru-RU', 'Привет222', 'Сайцвпрв  пвап', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(7, 4, 'uz-UZ', 'Привет', 'Шортке', 'лотка аылм тлоыв ымбвамтлоывам', 9, 1554522519),
(8, 4, 'en-US', 'Hello', 'Hi, my nime is', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(9, 2, 'en-US', 'Second', 'Short teg in seconfg', 'salom, bu birtinichi qasdaama', 9, 1561911216),
(23, 4, 'uz-UZ', 'Hello222', 'Hi, my nime is', 'dsf sdf vsdf  sdf gsdf  sfd f', 9, 1554522519),
(24, 5, 'uz-UZ', 'hamma qani0000', 'Biurinchi qadam000', 'adfv sd sdf sdf dsf sdfg000', 9, 1561911208),
(25, 6, 'uz-UZ', 'dddddddddddddd', 'dssssssss', 'sdvfdsvfd sdsfsd2', 9, 1561911204),
(26, 6, 'en-US', 'Hello Guys2222000', 'Hi every222000', 'sdvfdsvfd sdsfsd2222000', 9, 1561911204),
(27, 6, 'ru-RU', 'Привет222000', 'как джеаа222000', 'ывамва ыа ыва ыва2222000', 9, 1561911204),
(28, 5, 'ru-RU', 'Привет 000', 'Biurinchi qadam0000', '0000000', 9, 1561911208),
(29, 5, 'en-US', 'asdfds0000', 'asdfdsa0000', '00000000', 9, 1561911208),
(30, 7, 'uz-UZ', '2-088 title', '2-088 short', '2-088 text', 9, 1562082128),
(31, 8, 'uz-UZ', '2-176 title', '2-176 short', '2-176 text', 1, 1561919691),
(32, 9, 'uz-UZ', '2-088 title', '2-088 short', '<p>fdbdgngfn</p>', 1, NULL),
(33, 10, 'uz-UZ', 'Banan taqinchoq', 'babanli taqinchoqlar', '<p>Bababi bor taqinchoq</p>', 1, 1562130124),
(34, 11, 'uz-UZ', 'Banan taqinchoq2', 'Banan taqinchoq2', '<p>Banan taqinchoq2 Banan taqinchoq2</p>', 1, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_menu_trans`
--

INSERT INTO `in_menu_trans` (`id`, `menu_id`, `lang`, `title`, `status`, `updated_date`) VALUES
(1, 3, 'ru-RU', 'Тест', 9, 1561909751),
(2, 4, 'en-US', 'Second', 9, 1561909756),
(3, 3, 'en-US', 'Tested2', 9, 1561909751),
(4, 5, 'uz-UZ', 'Bacxt', 9, 1561909753),
(5, 6, 'uz-UZ', 'Kelajak', 9, 1561909759),
(6, 5, 'uz-UZ', 'Bacxt2', 9, 1561909753),
(7, 2, 'ru-RU', 'Dlya ruskix222', 9, 1561909748),
(8, 7, 'uz-UZ', 'qahramon000', 9, 1562129102),
(9, 7, 'en-US', 'hi my nanrt', 9, 1562129102),
(10, 7, 'ru-RU', 'i ti toje', 9, 1562129102),
(11, 1, 'ru-RU', 'Для инвестор', 9, 1561909743),
(12, 1, 'en-US', 'For Invester', 9, 1561909743),
(13, 8, 'uz-UZ', 'Bezak', 1, 1561916847),
(14, 8, 'ru-RU', 'Ободок', 1, 1561916847),
(15, 8, 'en-US', 'Rim', 1, 1561916847),
(16, 9, 'uz-UZ', 'Banan', 1, 1561916864),
(17, 9, 'ru-RU', 'Банан', 1, 1561916864),
(18, 9, 'en-US', 'Banana', 1, 1561916864),
(19, 10, 'uz-UZ', 'Rezinka', 1, 1561916878),
(20, 10, 'ru-RU', 'Резинка', 1, 1561916878),
(21, 10, 'en-US', 'Made of rubber', 1, 1561916878),
(22, 11, 'uz-UZ', 'Zajim', 1, 1561916905),
(23, 11, 'ru-RU', 'Зажим', 1, 1561916905),
(24, 11, 'en-US', 'Outlay', 1, 1561916905);

-- --------------------------------------------------------

--
-- Структура таблицы `in_photo`
--

CREATE TABLE IF NOT EXISTS `in_photo` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `info` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_photo`
--

INSERT INTO `in_photo` (`id`, `slug`, `image`, `status`, `info`) VALUES
(1, 'salom11', '', 1, 'hammaa sadsa');

-- --------------------------------------------------------

--
-- Структура таблицы `in_rasm`
--

CREATE TABLE IF NOT EXISTS `in_rasm` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `src` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `in_shopcart_goods`
--

CREATE TABLE IF NOT EXISTS `in_shopcart_goods` (
  `good_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `price` float DEFAULT '0',
  `sale` int(11) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_shopcart_goods`
--

INSERT INTO `in_shopcart_goods` (`good_id`, `order_id`, `item_id`, `count`, `price`, `sale`) VALUES
(1, 1, 12, 1, 1200000, 0),
(2, 2, 14, 1, 900000, 0),
(3, 3, 11, 1, 2500000, 0),
(4, 4, 10, 2, 1200, 0),
(5, 4, 11, 1, 1100, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `in_shopcart_orders`
--

CREATE TABLE IF NOT EXISTS `in_shopcart_orders` (
  `order_id` int(11) NOT NULL,
  `auth_user` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `remark` varchar(1024) NOT NULL,
  `access_token` varchar(32) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `payment` varchar(64) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `new` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `type` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_shopcart_orders`
--

INSERT INTO `in_shopcart_orders` (`order_id`, `auth_user`, `name`, `address`, `phone`, `email`, `comment`, `remark`, `access_token`, `ip`, `payment`, `time`, `new`, `status`, `type`) VALUES
(1, 6, '', 'Тошкент', '989897897', '', 'ftytfy', '', 'Bkzbeq5G7rHrMu3w3Hu6siTEbFOVIUX-', '127.0.0.1', NULL, 1559491882, 0, 1, NULL),
(2, 6, '', '', '', '', '', '', 'hLlP91fHcI7Hyarks3htUZM9ayhXhpdX', '127.0.0.1', NULL, 1559538028, 0, 1, NULL),
(3, 6, '', '', '', '', '', '', 'gIOqQ7w7Yr22vQENYLLIMDKGgBD-E_Y7', '127.0.0.1', NULL, 1559628282, 0, 1, NULL),
(4, 1, NULL, NULL, NULL, '', '', '', 's1gvt8oqnb399d8s4q21p51da7', '127.0.0.1', NULL, 1562140921, 0, 0, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `in_text_translate`
--

INSERT INTO `in_text_translate` (`id`, `lang`, `slug`, `text`, `status`, `updated_date`) VALUES
(10, 'uz-UZ', 'Site_Url', 'http://amina.uz', 1, NULL),
(11, 'ru-RU', 'Site_Url', 'http://amina.uz', 1, NULL),
(12, 'en-US', 'Site_Url', 'http://amina.uz', 1, NULL),
(13, 'uz-UZ', 'Organization name', 'AMINA', 1, 1561885113),
(14, 'ru-RU', 'Organization name', 'AMINA', 1, 1561885151),
(15, 'en-US', 'Organization name', 'AMINA', 1, 1561885159),
(16, 'uz-UZ', 'phone number', '+998933826003', 1, 1561885280),
(17, 'uz-UZ', 'fax number', '+998975576003', 1, 1561885311),
(18, 'uz-UZ', 'streetAddress', 'Qòqon shaxri, Navbaxor 26', 1, 1561885216),
(19, 'uz-UZ', 'email', 'Amina-savdo@mail.ru', 1, 1561885254),
(20, 'uz-UZ', 'menu', 'Menu', 1, NULL),
(21, 'ru-RU', 'menu', 'Меню', 1, NULL),
(22, 'en-US', 'menu', 'Menu', 1, NULL),
(23, 'uz-UZ', 'signup', 'Ro''yxatdan o''tish', 1, NULL),
(24, 'ru-RU', 'signup', 'Регистрация', 1, NULL),
(25, 'en-US', 'signup', 'Sign up', 1, NULL),
(26, 'uz-UZ', 'login', 'Kirish', 1, NULL),
(27, 'en-US', 'login', 'Login', 1, NULL),
(28, 'ru-RU', 'login', 'Авторизоваться', 1, NULL),
(29, 'uz-UZ', 'Logout', 'Chiqish', 1, NULL),
(30, 'en-US', 'Logout', 'Logout', 1, NULL),
(31, 'ru-RU', 'Logout', 'Logout', 1, NULL),
(32, 'uz-UZ', 'Send text to email', 'Matnni elektron pochtaga yuborish', 1, NULL),
(33, 'ru-RU', 'Send text to email', 'Отправить текст на электронную почту', 1, NULL),
(34, 'en-US', 'Send text to email', 'Send text to email', 1, NULL),
(35, 'uz-UZ', 'About Us', 'Biz haqimizda', 1, NULL),
(36, 'ru-RU', 'About Us', 'О нас', 1, NULL),
(37, 'en-US', 'About Us', 'About Us', 1, NULL),
(38, 'uz-UZ', 'Price list', 'Narxlar jadvali', 1, NULL),
(39, 'ru-RU', 'Price list', 'Прайс-лист', 1, NULL),
(40, 'en-US', 'Price list', 'Price list', 1, NULL),
(41, 'uz-UZ', 'Contacts', 'Biz bilan bog''laning', 1, NULL),
(42, 'ru-RU', 'Contacts', 'Контакты', 1, NULL),
(43, 'en-US', 'Contacts', 'Contacts', 1, NULL),
(44, 'uz-UZ', 'search', 'Qidirish', 1, NULL),
(45, 'ru-RU', 'search', 'Поиск', 1, NULL),
(46, 'en-US', 'search', 'Search', 1, NULL),
(47, 'uz-UZ', 'Basket', 'Savat', 1, NULL),
(48, 'en-US', 'Basket', 'Basket	', 1, NULL),
(49, 'ru-RU', 'Basket', 'Корзина', 1, NULL),
(50, 'uz-UZ', 'products worth', ' ta mahsulot ', 1, NULL),
(51, 'ru-RU', 'products worth', 'товаров на сумму', 1, NULL),
(52, 'en-US', 'products worth', 'products worth', 1, NULL),
(53, 'uz-UZ', 'your basket is empty', 'Savdo sumkangiz bo''sh', 1, NULL),
(54, 'ru-RU', 'your basket is empty', 'Ваша корзина пуста', 1, NULL),
(55, 'en-US', 'your basket is empty', 'Your basket is empty', 1, NULL),
(56, 'uz-UZ', 'bosh sahifa', 'Bosh sahifa', 1, NULL),
(57, 'ru-RU', 'bosh sahifa', 'Главная', 1, NULL),
(58, 'en-US', 'bosh sahifa', 'Main', 1, NULL);

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
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `wrong_pass` int(4) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `image` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fio` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_seen` smallint(5) NOT NULL DEFAULT '0',
  `birthdate` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `wrong_pass`, `created_at`, `updated_at`, `image`, `fio`, `tel`, `admin_seen`, `birthdate`) VALUES
(1, 'admin', 'AajCcg5lGypsSXxJ0AlUWbbZ77zxfmQg', '$2y$13$0nAbzuxlVvE5hAwqL4YWY.QHzLczRm2s1oNedP5hdm1qNGT3Uo9uy', NULL, 'ax5165@gmail.com', 10, 0, 1551011259, 0, NULL, NULL, NULL, 1, NULL);

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
-- Индексы таблицы `in_rasm`
--
ALTER TABLE `in_rasm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `in_shopcart_goods`
--
ALTER TABLE `in_shopcart_goods`
  ADD PRIMARY KEY (`good_id`);

--
-- Индексы таблицы `in_shopcart_orders`
--
ALTER TABLE `in_shopcart_orders`
  ADD PRIMARY KEY (`order_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `in_menu_item`
--
ALTER TABLE `in_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `in_menu_item_trans`
--
ALTER TABLE `in_menu_item_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `in_menu_trans`
--
ALTER TABLE `in_menu_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `in_photo`
--
ALTER TABLE `in_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `in_rasm`
--
ALTER TABLE `in_rasm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `in_shopcart_goods`
--
ALTER TABLE `in_shopcart_goods`
  MODIFY `good_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `in_shopcart_orders`
--
ALTER TABLE `in_shopcart_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `in_text_translate`
--
ALTER TABLE `in_text_translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
