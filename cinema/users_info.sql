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
-- Структура таблицы `users_info`
--

CREATE TABLE `users_info` (
  `id` int NOT NULL,
  `id_user` int NOT NULL COMMENT 'id пользователя',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'имя пользователя',
  `surname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'телефон',
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'почта'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users_info`
--

INSERT INTO `users_info` (`id`, `id_user`, `name`, `surname`, `phone`, `email`) VALUES
(1, 11, 'Владимир ', 'Каногин', '89169196952', '89169196952@mail.ru'),
(3, 22, 'Влад', 'Шригорьев', '89169196952', '89169196952@mail.ru'),
(4, 23, 'Владимир', 'Каногин', '89169196952', '89169196952@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_info`
--
ALTER TABLE `users_info`
  ADD CONSTRAINT `users_info_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
