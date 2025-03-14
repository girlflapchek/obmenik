-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2022 г., 10:57
-- Версия сервера: 10.5.17-MariaDB-cll-lve
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u834508602_onechange`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `oid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step` int(11) UNSIGNED DEFAULT NULL,
  `receive_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_coin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_coin_val` double DEFAULT NULL,
  `to_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_coin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_coin_val` double DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `oid`, `worker`, `step`, `receive_address`, `exchange`, `from_wallet`, `from_coin`, `from_coin_val`, `to_wallet`, `to_coin`, `to_coin_val`, `date`) VALUES
(1, '6339697e3b518', NULL, 4, '5168757245674454', 'Tether (USDT) on ПриватБанк', '', 'USDT', 200, 'TLiG4kGdNSpRw46oGK7nVScCqdUTBTUbGV', 'RUB', 13567.7, '10.02.22'),
(2, '63396a6c9e5b0', NULL, 1, '0x0Ab8c11017404a97ac8a76a8C50c6b172e6F0987', 'Bitcoin (BTC) on Ethereum (ETH)', '', 'BTC', 0.3, 'bc1qapdc0nal70md7ye68wezn7lez34rsslas852rx', 'ETH', 5.106, '10.02.22'),
(3, '63396dd74874e', NULL, 3, '1234567891234567', 'Tether (USDT) on ПриватБанк', '', 'USDT', 175, 'TLiG4kGdNSpRw46oGK7nVScCqdUTBTUbGV', 'UAH', 8102.325, '10.02.22');

-- --------------------------------------------------------

--
-- Структура таблицы `telegram`
--

CREATE TABLE `telegram` (
  `id` int(11) UNSIGNED NOT NULL,
  `telegram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `telegram`
--

INSERT INTO `telegram` (`id`, `telegram`) VALUES
(1, 'onechange_supp');

-- --------------------------------------------------------

--
-- Структура таблицы `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) UNSIGNED NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wallets`
--

INSERT INTO `wallets` (`id`, `coin`, `address`) VALUES
(1, 'BTC', 'bc1qapdc0nal70md7ye68wezn7lez34rsslas852rx'),
(2, 'ETH', '0xb7059dFaF294E574Ef5F27C1983617635E4b3e22'),
(3, 'BNB', '0xb7059dFaF294E574Ef5F27C1983617635E4b3e22'),
(4, 'FTM', '0xb7059dFaF294E574Ef5F27C1983617635E4b3e22'),
(5, 'SOL', 'HxmnGdxL9Y5UBgAu6LgCZnxKiwnFbb2VJtxvMGeMrCU2'),
(6, 'XRP', 'r3AF3NTx2BMZtg3wM3VRm9Gid45BJs3iKw'),
(7, 'XMR', '46NMNNBaqfuRN9xjS5xb7McBv4fBoJuy73CHFGZekWG1KBgG7o9PyN4FhNCj4bBWY9fLJ4WMkgtfY1p3VdEaDWAi9Vk2PSV'),
(8, 'TRX', 'TLiG4kGdNSpRw46oGK7nVScCqdUTBTUbGV'),
(9, 'DASH', 'Xhx6JEeL5UTQpzm4j1r1u2AreFuV3QeNZn'),
(10, 'LTC', 'Lh4hoqZCvHTCWTcH6EkVDVqwJ2RpZxDH49'),
(11, 'VET', '0xd96F7769280B3570a73d0a41E4b96990E5971C57'),
(12, 'XLM', 'GAQN3UY3MA54XFAJX3L4IP6KTPGUMFQKHZZZVF6KHPMP2RVWFHPLRNUD'),
(13, 'NANO', 'nano_3k8rz9t474taenyrdisej35tqugxw47pqn5yaembuhpe99q7q1j4opaxxnqq'),
(14, 'DOGE', 'D8EUxRdt9ys23h54PtZxyQUVALURVyiZpx'),
(15, 'ADA', 'addr1q9376fv8cgu6s0wh9052kx6m7estc87sz0zq3mcqnz6k8drra5jc0s3e4q7aw2lg4vd4hanqhs0aqy7yprhspx94vw6quk4fmg'),
(16, 'USDT', 'TLiG4kGdNSpRw46oGK7nVScCqdUTBTUbGV'),
(17, 'SHIB', '0xb7059dFaF294E574Ef5F27C1983617635E4b3e22');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) UNSIGNED NOT NULL,
  `promo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `telegram`
--
ALTER TABLE `telegram`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `telegram`
--
ALTER TABLE `telegram`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
