-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2023 г., 11:29
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'название категории'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'комедия'),
(2, 'боевик'),
(3, 'детектив '),
(4, 'драма'),
(5, 'документальный'),
(6, 'исторический'),
(7, 'мистика'),
(8, 'мультфильм'),
(9, 'приключения'),
(10, 'ужасы'),
(11, 'фантастика'),
(12, 'фэнтази');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
