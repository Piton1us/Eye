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
-- Структура таблицы `film`
--

CREATE TABLE `film` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Название фильма',
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Описание',
  `category` int NOT NULL,
  `img` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Постер',
  `link` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Ссылка на видео в YouTube'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `film`
--

INSERT INTO `film` (`id`, `title`, `description`, `category`, `img`, `link`) VALUES
(1, 'Мадагаскар 3', 'Неподражаемая четверка вновь сбивается с пути, перепутав Америку с Европой. Отвязный финал знаменитой трилогии', 8, '30-03-2023-19-40-42-asdfg.webp', 'https://www.youtube.com/embed/0FDDVJ4m24w'),
(29, 'Глубоководный горизонт', 'Инженеры-нефтяники выходят на смену, но она оборачивается бедствием. Фильм-катастрофа по реальным событиям', 5, '28-04-2023-17-54-25-horizon.webp', 'https://www.youtube.com/embed/QnSsgD1IBbQ'),
(30, 'Джон Уик 4', 'Оставляя за собой горы трупов, Джон Уик продолжает скрываться от всевозможных наёмных убийц, и теперь охоту на него возглавляет молодой и честолюбивый член Правления по имени Маркиз', 2, '28-04-2023-17-58-30-john.webp', 'https://www.youtube.com/embed/hDxoip1UFGM'),
(31, 'Сантехники Белого дома', 'Группа оперативников должна выявить утечку информации о нацбезопасности США в правительстве.', 1, '28-04-2023-18-04-46-white-house.webp', 'https://www.youtube.com/embed/S2qbFcDx6hw'),
(32, 'Яга и книга заклинаний', 'Рыжеволосая ведьма Яга живет с котом-изобретателем и весёлыми домовыми в избушке на болотах Тридевятого царства и практикуется в магии.', 8, '06-05-2023-20-50-18-iga.webp', 'https://www.youtube.com/embed/6--_LE8Dng0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `film`
--
ALTER TABLE `film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
