-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2023 г., 19:46
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cargobase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cargo_require`
--

CREATE TABLE `cargo_require` (
  `ID` int NOT NULL,
  `cargo_type` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `materials_type` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobil` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `cargo_require`
--

INSERT INTO `cargo_require` (`ID`, `cargo_type`, `materials_type`, `name`, `mobil`, `email`, `order_date`) VALUES
(30, 'Cargo2', '01100', 'Igor Buzian', '+373 (79) 24-00-88', 'saasfa@mail.ru', '2022-06-21'),
(34, 'Cargo1', '00100', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(41, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(42, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(43, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(44, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(45, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(46, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(47, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(48, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(49, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(50, 'Cargo3', '01010', 'Igor Buzian', '+373 (79) 24-00-88', 'saasf1a@mail.ru', '2022-06-15'),
(51, 'Cargo2', '10000', 'sddgf', '+373 (12) 31-21-24', 'saasf1a@mail.ru', '2022-06-15'),
(52, 'Cargo2', '10000', 'Igor Buzian Michail', '+373 (79) 24-00-88', 'iG@mail.ru', '2022-06-30'),
(53, 'Cargo2', '10000', 'Igor Buzian Michail', '+373 (79) 24-00-88', 'iG@mail.ru', '2022-06-30'),
(54, 'Cargo1', '01000', 'Igor Buzian', '+373 (12) 31-21-24', 'saasf1a@mail.ru', '2022-06-15'),
(55, 'Cargo3', '01001', 'Igor Buzian1', '+373 (12) 31-21-24', 'saa2sf1a@mail.ru', '1200-06-23'),
(56, 'Cargo1', '01000', 'gggg', '', 'ddaas@mail.ru', '1111-11-11');

-- --------------------------------------------------------

--
-- Структура таблицы `hibernate_sequence`
--

CREATE TABLE `hibernate_sequence` (
  `next_val` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `hibernate_sequence`
--

INSERT INTO `hibernate_sequence` (`next_val`) VALUES
(1);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` bigint NOT NULL,
  `cargo_type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `materials_type` varchar(255) DEFAULT NULL,
  `mobil` varchar(255) DEFAULT NULL,
  `order_date` int NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `post1`
--

CREATE TABLE `post1` (
  `id` bigint NOT NULL,
  `cargo_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cargo_require`
--
ALTER TABLE `cargo_require`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post1`
--
ALTER TABLE `post1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cargo_require`
--
ALTER TABLE `cargo_require`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
