-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2019 г., 01:05
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `05122018_3project`
--
CREATE DATABASE IF NOT EXISTS `05122018_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `05122018_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `code`) VALUES
(1, 'Мужчинам', 'man'),
(2, 'Женщинам', 'girl'),
(3, 'Детям', 'child');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `code` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `code`) VALUES
(1, 'Верхняя одежда', 'outerwear'),
(2, 'Джинсы', 'jeans'),
(3, 'Обувь', 'shoes'),
(4, 'Аксессурары', 'accessories');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img_src`, `name`, `sku`, `price`, `description`) VALUES
(1, '/images/catalog/man/outw_1.jpg', 'Куртка на весну синяя', '3959860', 5499, 'Куртка отлично защищает от дождя и ветра'),
(2, '/images/catalog/man/outw_2.jpg', 'Лёгкая куртка на молнии', '4069883', 2100, 'Куртка для прогулок теплыми осенними вечерами'),
(3, '/images/catalog/man/outw_3.jpg', 'Ветровка', '9797470', 1500, 'Ветровка просто огонь! Берите'),
(4, '/images/catalog/man/outw_4.jpg', 'Кожаная тёплая куртка', '3646110', 3300, 'Куртка просто огонь! Берите'),
(5, '/images/catalog/man/outw_5.jpg', 'Утеплённая куртка', '3959863', 6000, 'Куртка просто огонь! Берите'),
(6, '/images/catalog/man/outw_6.jpg', 'Лёгкая кожаная куртка', '3959864', 2600, 'Куртка просто огонь! Берите'),
(7, '/images/catalog/man/shoes_1.jpg', 'Кроссовки', '3454154', 5499, 'Кроссовки просто огонь! Берите'),
(13, '/images/catalog/man/shoes_2.jpg', 'Высокие кеды', '6767360', 4600, 'Кеды просто огонь! Берите'),
(14, '/images/catalog/man/shoes_3.jpg', 'Завышенные кроссовки', '1464362', 6800, 'Кроссовки просто огонь! Берите'),
(15, '/images/catalog/man/shoes_4.jpg', 'Осенние ботинки', '6436375', 4700, 'Ботинки просто огонь! Берите'),
(19, '/images/catalog/man/jeans_1.jpg', 'Тёмные джинсы', '8573658', 4500, 'Джинсы просто огонь! Берите'),
(25, '/images/catalog/man/jeans_2.jpg', 'Светлые джинсы', '3740854', 4100, 'Джинсы просто огонь! Берите'),
(26, '/images/catalog/man/acces_12.jpg', 'Запонки', '2468470', 7000, 'Запонки просто огонь! Берите'),
(27, '/images/catalog/man/acces_9.jpg', 'Запонки ', '2547809', 7400, 'Запонки просто огонь! Берите'),
(28, '/images/catalog/man/acces_11.jpg', 'Кошелёк-холдер', '2463696', 2800, 'Кошелёк просто огонь! Берите'),
(29, '/images/catalog/man/acces_10.jpg', 'Носки', '7385053', 800, 'Носки просто огонь! Берите'),
(30, '/images/catalog/man/acces_8.jpg', 'Сумка ', '3675479', 1900, 'Сумка просто огонь! Берите'),
(31, '/images/catalog/man/acces_7.jpg', 'Осенне-весенняя шапка', '0536864', 600, 'Шапка просто огонь! Берите'),
(32, '/images/catalog/man/acces_6.jpg', 'Кепка', '4479623', 740, 'Кепка просто огонь! Берите'),
(33, '/images/catalog/man/acces_5.jpg', 'Панама', '6575489', 650, 'Панама просто огонь! Берите'),
(34, '/images/catalog/man/acces_4.jpg', 'Шарф', '3214325', 1300, 'Шарф просто огонь! Берите'),
(35, '/images/catalog/man/acces_3.jpg', 'Бабочка', '0983578', 2350, 'Шарф просто огонь! Берите'),
(36, '/images/catalog/man/acces_2.jpg', 'Сумка на пояс', '5467458', 1860, 'Сумка просто огонь! Берите'),
(37, '/images/catalog/man/acces_1.jpg', 'Рюкзак', '8746806', 3400, 'Рюкзак просто огонь! Берите'),
(38, '/images/catalog/girl/acces_1.jpg', 'Браслет', '3556467', 450, 'Браслет просто огонь! Берите'),
(39, '/images/catalog/girl/acces_2.jpg', 'Сумка-рюкзак', '7578974', 1360, 'Вещь просто огонь! Берите'),
(40, '/images/catalog/girl/acces_3.jpg', 'Часы красные', '3365433', 8200, 'Часы просто огонь! Берите'),
(41, '/images/catalog/girl/acces_4.jpg', 'Кольцо', '9985670', 2000, 'Кольцо просто огонь! Берите'),
(42, '/images/catalog/girl/acces_5.jpg', 'Очки', '0981235', 2800, 'Очки просто огонь! Берите'),
(43, '/images/catalog/girl/acces_6.jpg', 'Сумка', '7656898', 12000, 'Сумка просто огонь! Берите'),
(44, '/images/catalog/girl/acces_7.jpg', 'Сумка на длинной цепочке', '6756745', 4700, 'Сумка просто огонь! Берите'),
(45, '/images/catalog/girl/acces_8.jpg', 'Часы белые', '9876456', 14800, 'Часы просто огонь! Берите'),
(46, '/images/catalog/girl/acces_9.jpg', 'Рюкзак', '3243245', 3200, 'Рюкзак просто огонь! Берите'),
(47, '/images/catalog/girl/acces_10.jpg', 'Чехол для очков', '5588342', 1500, 'Чехол просто огонь! Берите'),
(48, '/images/catalog/girl/jeans_1.jpg', 'Джинсы светлые', '0192835', 6300, 'Джинсы просто огонь! Берите'),
(49, '/images/catalog/girl/jeans_2.jpg', 'Джинсы тёмные', '6563444', 5200, 'Джинсы просто огонь! Берите'),
(50, '/images/catalog/girl/outw_1.jpg', 'Кожаная куртка', '6564564', 5000, 'Куртка просто огонь! Берите'),
(51, '/images/catalog/girl/outw_2.jpg', 'Зимняя куртка', '7898755', 12800, 'Куртка просто огонь! Берите'),
(52, '/images/catalog/girl/shoes_1.jpg', 'Туфли', '9875477', 6400, 'Туфли просто огонь! Берите'),
(53, '/images/catalog/girl/shoes_2.jpg', 'Осенне-весенние сапоги', '5556664', 5400, 'Сапоги просто огонь! Берите'),
(54, '/images/catalog/girl/shoes_3.jpg', 'Тёплые кроссовки', '1327685', 7300, 'Кроссовки просто огонь! Берите'),
(55, '/images/catalog/girl/shoes_4.jpg', 'Кеды', '6868652', 2500, 'Кеды просто огонь! Берите'),
(56, '/images/catalog/child/acces_1.jpg', 'Шапка', '9999552', 1999, 'Шапка просто огонь! Берите'),
(57, '/images/catalog/child/acces_2.jpg', 'Заколки', '6856654', 150, 'Заколки просто огонь! Берите'),
(58, '/images/catalog/child/acces_3.jpg', 'Сумка', '7545454', 999, 'Сумка просто огонь! Берите'),
(59, '/images/catalog/child/acces_4.jpg', 'Варежки', '4069882', 800, 'Варежки просто огонь! Берите'),
(60, '/images/catalog/child/acces_5.jpg', 'Рюкзак', '4543524', 1100, 'Рюкзак просто огонь! Берите'),
(61, '/images/catalog/child/acces_6.jpg', 'Шапка зимняя', '4537536', 850, 'Шапка просто огонь! Берите'),
(62, '/images/catalog/child/jeans_1.jpg', 'Джинсы со вставками', '4577547', 3299, 'Джинсы просто огонь! Берите'),
(63, '/images/catalog/child/jeans_2.jpg', 'Джинсы светлые', '9786756', 1980, 'Джинсы просто огонь! Берите'),
(64, '/images/catalog/child/outw_1.jpg', 'Зимняя куртка', '6437864', 6399, 'Куртка просто огонь! Берите'),
(65, '/images/catalog/child/outw_2.jpg', 'Комбинезон', '9578574', 7400, 'Комбинезон просто огонь! Берите'),
(66, '/images/catalog/child/outw_3.jpg', 'Весенняя куртка', '4634534', 1890, 'Куртка просто огонь! Берите'),
(67, '/images/catalog/child/outw_4.jpg', 'Ветровка', '8938490', 1700, 'Ветровка просто огонь! Берите'),
(68, '/images/catalog/child/shoes_1.jpg', 'Слипперы', '3965363', 3840, 'Слипперы просто огонь! Берите'),
(69, '/images/catalog/child/shoes_2.jpg', 'Светлые ботинки', '9374658', 4760, 'Ботинки просто огонь! Берите'),
(70, '/images/catalog/child/shoes_3.jpg', 'Тёмные ботинки', '0374859', 6350, 'Ботинки просто огонь! Берите'),
(71, '/images/catalog/child/shoes_4.jpg', 'Кеды', '5674830', 3220, 'Кеды просто огонь! Берите');

-- --------------------------------------------------------

--
-- Структура таблицы `product_catalog`
--

CREATE TABLE IF NOT EXISTS `product_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_catalog`
--

INSERT INTO `product_catalog` (`id`, `product_id`, `catalog_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 13, 1),
(9, 14, 1),
(10, 15, 1),
(11, 19, 1),
(12, 25, 1),
(13, 26, 1),
(14, 27, 1),
(15, 28, 1),
(16, 29, 1),
(17, 30, 1),
(18, 31, 1),
(19, 32, 1),
(20, 33, 1),
(21, 34, 1),
(22, 35, 1),
(23, 36, 1),
(24, 37, 1),
(25, 38, 2),
(26, 39, 2),
(27, 40, 2),
(28, 41, 2),
(29, 42, 2),
(30, 43, 2),
(31, 44, 2),
(32, 45, 2),
(33, 46, 2),
(34, 47, 2),
(35, 48, 2),
(36, 49, 2),
(37, 50, 2),
(38, 51, 2),
(39, 52, 2),
(40, 53, 2),
(41, 54, 2),
(42, 55, 2),
(43, 56, 3),
(44, 57, 3),
(45, 58, 3),
(46, 59, 3),
(47, 60, 3),
(48, 61, 3),
(49, 62, 3),
(50, 63, 3),
(51, 64, 3),
(52, 65, 3),
(53, 66, 3),
(54, 67, 3),
(55, 68, 3),
(56, 69, 3),
(57, 70, 3),
(58, 71, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 3),
(8, 13, 3),
(9, 14, 3),
(10, 15, 3),
(11, 19, 2),
(12, 25, 2),
(13, 26, 4),
(14, 27, 4),
(15, 28, 4),
(16, 29, 4),
(17, 30, 4),
(18, 31, 4),
(19, 32, 4),
(20, 33, 4),
(21, 34, 4),
(22, 35, 4),
(23, 36, 4),
(24, 37, 4),
(25, 38, 4),
(26, 39, 4),
(27, 40, 4),
(28, 41, 4),
(29, 42, 4),
(30, 43, 4),
(31, 44, 4),
(32, 45, 4),
(33, 46, 4),
(34, 47, 4),
(35, 48, 2),
(36, 49, 2),
(37, 50, 1),
(38, 51, 1),
(39, 52, 3),
(40, 53, 3),
(41, 54, 3),
(42, 55, 3),
(43, 56, 4),
(44, 57, 4),
(45, 58, 4),
(46, 59, 4),
(47, 60, 4),
(48, 61, 4),
(49, 62, 2),
(50, 63, 2),
(51, 64, 1),
(52, 65, 1),
(53, 66, 1),
(54, 67, 1),
(55, 68, 3),
(56, 69, 3),
(57, 70, 3),
(58, 71, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
