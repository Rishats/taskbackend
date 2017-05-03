-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 03 2017 г., 18:31
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `backtest`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`%` PROCEDURE `fixid` ()  BEGIN 
	SET SQL_SAFE_UPDATES = 0; 
    set @n = 0;
	update `zagon_all` set `id` = (select @n := @n + 1);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_all`
--

CREATE TABLE `zagon_all` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_all`
--

INSERT INTO `zagon_all` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11);

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_dead`
--

CREATE TABLE `zagon_dead` (
  `id` int(11) NOT NULL,
  `idanimal` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_dead`
--

INSERT INTO `zagon_dead` (`id`, `idanimal`, `time`) VALUES
(1, 1, '2017-05-03 04:01:39'),
(2, 2, '2017-05-03 04:20:41'),
(3, 1, '2017-05-03 04:20:58'),
(4, 3, '2017-05-03 04:34:08'),
(5, 4, '2017-05-03 04:36:10'),
(6, 1, '2017-05-03 04:37:58'),
(7, 2, '2017-05-03 05:36:22'),
(8, 2, '2017-05-03 05:53:39'),
(9, 1, '2017-05-03 13:37:15'),
(10, 2, '2017-05-03 13:37:22'),
(11, 3, '2017-05-03 13:37:27'),
(12, 1, '2017-05-03 15:25:02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `zagon_all`
--
ALTER TABLE `zagon_all`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagon_dead`
--
ALTER TABLE `zagon_dead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `zagon_all`
--
ALTER TABLE `zagon_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `zagon_dead`
--
ALTER TABLE `zagon_dead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
