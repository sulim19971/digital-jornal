-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2019 г., 16:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES cp1251 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `inf`
--

CREATE TABLE IF NOT EXISTS `inf` (
  `group` text NOT NULL,
  `fio` varchar(150) NOT NULL,
  `discipline` varchar(150) NOT NULL,
  `marks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inf`
--

INSERT INTO `inf` (`group`, `fio`, `discipline`, `marks`) VALUES
('16ит1', 'сулим д а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'сулим д а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'морозкинд а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'поросенокд а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'ким д а', 'математика', '4 5 10 56 23 98 '),
('17ит1', 'похуй д а', 'математика', '4 5 10 56 23 98 '),
('17ит1', 'блять д а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'какая д а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'фамилия д а', 'математика', '4 5 10 56 23 98 '),
('16ит1', 'попопопопо', 'апапапапап', '232 23424 234'),
('16ит1', 'йуйуц', 'вавыа', 'фывфыв'),
('16ит1', 'йуйуц', 'вавыа', 'фывфыв');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `group` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `marcs` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`group`, `fio`, `discipline`, `marcs`) VALUES
('16ит1', 'ывывыв', 'фывфывфыв', '2 2 2 2'),
('16ит1', 'ывывыв', 'фывфывфыв', '2 2 2 2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`) VALUES
('user1', 'pass'),
('user2', 'pass2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
