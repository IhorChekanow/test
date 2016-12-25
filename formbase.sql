-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2016 г., 01:30
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `formbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `humans`
--

CREATE TABLE IF NOT EXISTS `humans` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Sex` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `humans`
--

INSERT INTO `humans` (`ID`, `Name`, `Age`, `Sex`) VALUES
(1, 'Frank', 23, 0),
(2, 'Mary', 17, 0),
(3, 'Harry', 25, 0),
(4, 'Hod', 12, 1),
(5, 'Fate', 18, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `notebooks`
--

CREATE TABLE IF NOT EXISTS `notebooks` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `proc` varchar(100) NOT NULL,
  `core` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notebooks`
--

INSERT INTO `notebooks` (`ID`, `name`, `company`, `proc`, `core`, `memory`, `color`, `description`, `price`, `image`) VALUES
(1, 'BLACK asus', 'Asus', 'AMD A6', '2', '4', 'black', 'OOooooooo, I''ma firing my lazer!!!!', '7000', 'products/comp_black.jpg'),
(2, 'Ultra lenova red', 'Lenova', 'Intel Core i7', '1', '6', 'red', 'SHOOP DA WHOOP!', '5556', 'products/comp_red.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `screen` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `name`, `company`, `screen`, `RAM`, `color`, `description`, `price`, `image`) VALUES
(1, 'iphone66', 'apple', '6.1', '4', 'red', 'best iphone', 9999, 'products/mobile_red.jpg'),
(2, 'galaxyc7', 'samsink', '5.1', '3', 'silver', 'very cool phone', 7000, 'products/mobile_silver.jpg'),
(3, 'london_black', 'samsink', '4.1', '2', 'black', 'cheap black stylish phone', 3000, 'products/mobile_black.jpg'),
(4, 'Lucky 123', 'LG', '4', '1', 'white', 'very cheap phone', 1500, 'products/mobile_white.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tablets`
--

CREATE TABLE IF NOT EXISTS `tablets` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `screen` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tablets`
--

INSERT INTO `tablets` (`ID`, `name`, `company`, `screen`, `RAM`, `color`, `description`, `price`, `image`) VALUES
(5, 'red tablet', 'samsung', '7', '4', 'red', 'red teblet', 3456, 'products/tablet_red.jpg'),
(6, 'black tablet', 'prestigio', '8', '16', 'black', 'clack tablrt', 6789, 'products/tablet_black.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `humans`
--
ALTER TABLE `humans`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `humans`
--
ALTER TABLE `humans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tablets`
--
ALTER TABLE `tablets`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
