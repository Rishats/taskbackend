-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 28 2017 г., 00:14
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

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_1`
--

CREATE TABLE `zagon_1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_1`
--

INSERT INTO `zagon_1` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_2`
--

CREATE TABLE `zagon_2` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_2`
--

INSERT INTO `zagon_2` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_3`
--

CREATE TABLE `zagon_3` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_3`
--

INSERT INTO `zagon_3` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Структура таблицы `zagon_4`
--

CREATE TABLE `zagon_4` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zagon_4`
--

INSERT INTO `zagon_4` (`id`) VALUES
(1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `zagon_1`
--
ALTER TABLE `zagon_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagon_2`
--
ALTER TABLE `zagon_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagon_3`
--
ALTER TABLE `zagon_3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zagon_4`
--
ALTER TABLE `zagon_4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `zagon_1`
--
ALTER TABLE `zagon_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `zagon_2`
--
ALTER TABLE `zagon_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `zagon_3`
--
ALTER TABLE `zagon_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `zagon_4`
--
ALTER TABLE `zagon_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
