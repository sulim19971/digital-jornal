-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 27 2019 г., 18:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `disipline`
--

CREATE TABLE IF NOT EXISTS `disipline` (
  `disipline` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `disipline`
--

INSERT INTO `disipline` (`disipline`) VALUES
('Математика'),
('Русский'),
('Химия'),
('Биология'),
('Физика');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `gruppa` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `marcs` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`gruppa`, `fio`, `discipline`, `marcs`) VALUES
('16ит1', 'Иванов В. Д.', 'математика', '5 6 10 9 8 6 5'),
('16ит1', 'Сулим Д. А.', 'математика', '7 8 9 9 8'),
('16ит1', 'Морозкин Д. В.', 'математика', '9 6 5 10'),
('16ит1', 'Петров К. С.', 'математика', '6 8 9 7 10'),
('16ит1', 'Гайшун Д. В.', 'математика', '5 6 4 8 7'),
('16ит1', 'Сулим Д. А.', 'русский', '8 7 9 8'),
('16ит1', 'Морозкин Д. В.', 'русский', '8 7 8 10'),
('17ит1', 'Свисток А. А.', 'математика', '5 6 5 6 4'),
('17ит1', 'Поросенок П. А.', 'математика', '4 2 3 10'),
('17ит1', 'Третий В. А.', 'математика', '8 7 6 9');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `access`) VALUES
('user1', '$2y$10$kYU6fwpeHwyYrHj9dVUIMepF8iRGAHqxvdL/tH7AIj8.4ajqNT00e', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
