-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2023 г., 11:28
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
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `user_id` int NOT NULL COMMENT 'id пользователя',
  `f_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'имя ',
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'телефон',
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'почта',
  `film_id` int NOT NULL COMMENT 'id фильма',
  `data` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'дата',
  `time` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'время',
  `row` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'ряд',
  `seat` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'место',
  `payment` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(11) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `f_name`, `phone`, `email`, `film_id`, `data`, `time`, `row`, `seat`, `payment`, `price`) VALUES
(26, 12, 'Каногин Владимир123', '89169196952', 'kanogina2@mail.ru', 7, '2023-04-23', '10:00', '2', '10', '', ''),
(27, 12, '123', '89169196952', 'kanogina2@mail.ru', 7, '2023-04-02', '12:00', '9', '9', '', ''),
(34, 12, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 29, '2023-04-23', '11:00', '1', '1', '', ''),
(35, 12, 'Каногин Владимир123', '89169196952', 'kanogina2@mail.ru', 29, '2023-04-11', '11:00', '1', '1', '', ''),
(54, 12, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 31, '2023-04-30', '13:00', '6', '1,2,3,4', '', ''),
(55, 12, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 31, '2023-05-23', '11:00', '1', '1,2', 'cash', '580'),
(56, 12, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 31, '2023-05-23', '11:00', '1', '1,2', 'cash', '580'),
(57, 15, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 31, '2023-05-23', '13:00', '1', '1', 'card', '290'),
(58, 15, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 31, '2023-05-23', '13:00', '1', '1', 'card', '290'),
(67, 22, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 32, '2023-05-22', '11:00', '4', '1,2', 'card', '580'),
(68, 22, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 32, '2023-05-22', '11:00', '4', '1,2', 'card', '580'),
(69, 22, 'Юлдашев Даниил Павлович', '89169196952', 'kanogina2@mail.ru', 30, '2023-05-11', '14:00', '10', '4', 'card', '290'),
(70, 23, 'Каногин Владимир', '89169196952', 'kanogina2@mail.ru', 32, '2023-05-23', '10:00', '10', '5,6', 'card', '580'),
(71, 23, 'Каногин Владимир', '89169196952', 'amaev.aar9@gmail.com', 30, '2023-05-19', '14:00', '6', '5,6', 'card', '580');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
