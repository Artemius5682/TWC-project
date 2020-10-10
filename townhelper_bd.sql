-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2020 г., 21:29
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `townhelper_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fias`
--

CREATE TABLE `fias` (
  `id` int(11) NOT NULL,
  `addres` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fias`
--

INSERT INTO `fias` (`id`, `addres`) VALUES
(1, 'Фрунзе 28'),
(2, 'Жаворонков 18');

-- --------------------------------------------------------

--
-- Структура таблицы `incident`
--

CREATE TABLE `incident` (
  `id` int(11) NOT NULL,
  `date_begin` varchar(50) NOT NULL,
  `date_end` varchar(50) NOT NULL,
  `type_objective` int(11) NOT NULL,
  `view` varchar(50) NOT NULL,
  `additional_info` varchar(300) NOT NULL,
  `other` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `incident`
--

INSERT INTO `incident` (`id`, `date_begin`, `date_end`, `type_objective`, `view`, `additional_info`, `other`) VALUES
(1, '2020-10-06', '2020-10-22', 1, 'Плановый', 'Планируется заменить устаревшее оборудование.', 'Срочное задание.'),
(2, '2020-10-06', '2020-10-22', 2, 'Аварийный', 'Авария на электростанции в результате взрыва балона с газом.', 'Срочное задание. '),
(3, '2020-10-07', '2020-10-21', 2, 'Плановый', 'Планируются работы по замене труб.', 'Срочное задание'),
(4, '2020-10-07', '2020-10-21', 2, 'Плановый', 'Планируются работы по замене труб.', 'Срочное задание'),
(5, '2020-10-07', '2020-10-21', 2, 'Плановый', 'Планируются работы по замене труб', 'Срочное задание'),
(6, '2020-10-07', '2020-10-21', 2, 'Плановый', 'Планируются работы по замене труб', 'Срочное задание'),
(7, '2020-30-10', '2020-10-21', 2, 'Плановый', 'Планируются работы по замене труб', 'Срочное задание'),
(8, '', '2020-10-21', 2, 'Водоочистительная станция', '', 'Жалоб пока нет.');

-- --------------------------------------------------------

--
-- Структура таблицы `relations`
--

CREATE TABLE `relations` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `addres_impact` varchar(50) NOT NULL,
  `parametrs` varchar(50) NOT NULL,
  `other` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `relations`
--

INSERT INTO `relations` (`id`, `type`, `addres_impact`, `parametrs`, `other`) VALUES
(1, 'Котельная №21', '2', 'Крупный объект, современное оборудование.', 'Жалобы жильцов отсутствуют.'),
(2, 'Электро-станция №17', '1', 'Средний объект, старое оборудование.', 'Жильцы считают, что данный объект необходимо рекон'),
(3, 'Газоснабжающая станция №483', '2', 'Средний объект, хорошее оборудование.', 'Жалоб от жильцов не поступало.'),
(6, 'Водоснабжающая станция', '3', 'Крупный объект', 'Жалоб нету.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'Admin', '12345', 'admin'),
(2, 'User_RSO', '54321', 'rso'),
(3, 'Dispatcher', '67890', 'dispacher'),
(4, 'Observer', '09876', 'observer');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fias`
--
ALTER TABLE `fias`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `incident`
--
ALTER TABLE `incident`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `relations`
--
ALTER TABLE `relations`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fias`
--
ALTER TABLE `fias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `incident`
--
ALTER TABLE `incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
