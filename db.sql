-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- ����: 127.0.0.1
-- ����� ��������: ��� 13 2019 �., 16:46
-- ������ �������: 5.5.25
-- ������ PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES cp1251 */;

--
-- ���� ������: `db`
--

-- --------------------------------------------------------

--
-- ��������� ������� `inf`
--

CREATE TABLE IF NOT EXISTS `inf` (
  `group` text NOT NULL,
  `fio` varchar(150) NOT NULL,
  `discipline` varchar(150) NOT NULL,
  `marks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `inf`
--

INSERT INTO `inf` (`group`, `fio`, `discipline`, `marks`) VALUES
('16��1', '����� � �', '����������', '4 5 10 56 23 98 '),
('16��1', '����� � �', '����������', '4 5 10 56 23 98 '),
('16��1', '��������� �', '����������', '4 5 10 56 23 98 '),
('16��1', '���������� �', '����������', '4 5 10 56 23 98 '),
('16��1', '��� � �', '����������', '4 5 10 56 23 98 '),
('17��1', '����� � �', '����������', '4 5 10 56 23 98 '),
('17��1', '����� � �', '����������', '4 5 10 56 23 98 '),
('16��1', '����� � �', '����������', '4 5 10 56 23 98 '),
('16��1', '������� � �', '����������', '4 5 10 56 23 98 '),
('16��1', '����������', '����������', '232 23424 234'),
('16��1', '�����', '�����', '������'),
('16��1', '�����', '�����', '������');

-- --------------------------------------------------------

--
-- ��������� ������� `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `group` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `marcs` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `information`
--

INSERT INTO `information` (`group`, `fio`, `discipline`, `marcs`) VALUES
('16��1', '������', '���������', '2 2 2 2'),
('16��1', '������', '���������', '2 2 2 2');

-- --------------------------------------------------------

--
-- ��������� ������� `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `users`
--

INSERT INTO `users` (`login`, `password`) VALUES
('user1', 'pass'),
('user2', 'pass2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
