-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- ����: 127.0.0.1
-- ����� ��������: ��� 19 2019 �., 20:42
-- ������ �������: 5.5.25
-- ������ PHP: 5.6.8

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
-- ��������� ������� `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `gruppa` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `marcs` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `information`
--

INSERT INTO `information` (`gruppa`, `fio`, `discipline`, `marcs`) VALUES
('16��1', '������ �. �.', '����������', '5 6 10 9 8 6 5'),
('16��1', '����� �. �.', '����������', '7 8 9 9 8'),
('16��1', '�������� �. �.', '����������', '9 6 5 10'),
('16��1', '������ �. �.', '����������', '6 8 9 7 10'),
('16��1', '������ �. �.', '����������', '5 6 4 8 7'),
('16��1', '����� �. �.', '�������', '8 7 9 8'),
('16��1', '�������� �. �.', '�������', '8 7 8 10'),
('17��1', '������� �. �.', '����������', '5 6 5 6 4'),
('17��1', '��������� �. �.', '����������', '4 2 3 10'),
('17��1', '������ �. �.', '����������', '8 7 6 9');

-- --------------------------------------------------------

--
-- ��������� ������� `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `users`
--

INSERT INTO `users` (`login`, `password`, `access`) VALUES
('user1', '$2y$10$kYU6fwpeHwyYrHj9dVUIMepF8iRGAHqxvdL/tH7AIj8.4ajqNT00e', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
