-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2024 г., 16:18
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hardwarestore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `laptops and computers`
--

CREATE TABLE `laptops and computers` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `laptops and computers`
--

INSERT INTO `laptops and computers` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/laptops_computers/Lenovo Legion 5.jpg', 'Lenovo Legion 5', '15.6\'\' 1920 x 1080 IPS, 165 Гц, несенсорный, Intel Core i5 10500H 2500 МГц, 16 ГБ, SSD 512 ГБ, видеокарта NVIDIA GeForce RTX 3050 Ti 4 ГБ, без ОС, цвет крышки черный', '4100'),
(2, '/img-bd/laptops_computers/Apple Macbook Air 13.jpg', 'Apple Macbook Air 13', '13.3\'\' 2560 x 1600 IPS, 60 Гц, несенсорный, Apple M1 3200 МГц, 8 ГБ, SSD 256 ГБ, видеокарта встроенная, Mac OS, цвет крышки серый', '4250');

-- --------------------------------------------------------

--
-- Структура таблицы `microwaves`
--

CREATE TABLE `microwaves` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `microwaves`
--

INSERT INTO `microwaves` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/microwaves/Panasonic NN-GD38HS.jpg', 'Panasonic NN-GD38HS', 'отдельностоящая, микроволны и гриль, объем 23 л, выходная мощность микроволн 1000 Вт, управление электронное, цвет нержавеющая сталь/черный', '770'),
(2, '/img-bd/microwaves/BBK 20MWS-706M.jpg', 'BBK 20MWS-706M/B', 'отдельностоящая, микроволны (соло), объем 20 л, выходная мощность микроволн 700 Вт, управление механическое, цвет черный', '415');

-- --------------------------------------------------------

--
-- Структура таблицы `refrigerators and freezers`
--

CREATE TABLE `refrigerators and freezers` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `refrigerators and freezers`
--

INSERT INTO `refrigerators and freezers` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/refrigerators_freezers/ATLANT ХМ 4307-000.jpg', 'ATLANT ХМ 4307-000', 'встраиваемый, без No Frost, механическое управление, класс A, полезный объём: 234 л (167 + 67 л), перенавешиваемые двери, лоток для яиц, 54x56x178 см, белый', '1250'),
(2, '/img-bd/refrigerators_freezers/ATLANT М 7184-581.jpg', 'ATLANT М 7184-581', 'отдельностоящий, без No Frost, механическое управление, класс A+, полезный объём: 220 л, перенавешиваемые двери, использование в неотапливаемых помещениях, 60x63x150 см, серебристый', '1250');

-- --------------------------------------------------------

--
-- Структура таблицы `smartphones and tablets`
--

CREATE TABLE `smartphones and tablets` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `smartphones and tablets`
--

INSERT INTO `smartphones and tablets` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/smartphones_tablets/POCO X3 Pro.jpg', 'POCO X3 Pro 8GB/256GB(черный)', 'Android, экран 6.67\", IPS (1080x2400), Qualcomm Snapdragon 860, ОЗУ 8 ГБ, флэш-память 256 ГБ, карты памяти, камера 48 Мп, аккумулятор 5160 мАч, 2 SIM', '860'),
(2, '/img-bd/smartphones_tablets/Samsung Galaxy S21.jpg', 'Samsung Galaxy S21 6GB/128GB(белый)', 'Android, экран 6.4\", AMOLED (1080x2340), Qualcomm Snapdragon 888, ОЗУ 6 ГБ, флэш-память 128 ГБ, камера 12 Мп, аккумулятор 4500 мАч, 2 SIM', '1950'),
(3, '/img-bd/smartphones_tablets/Huawei MatePad T10.jpg', 'Huawei MatePad T10 2GB/32GB(синий)', 'Android, экран 6.4\", AMOLED (1080x2340), Qualcomm Snapdragon 888, ОЗУ 6 ГБ, флэш-память 128 ГБ, камера 12 Мп, аккумулятор 4500 мАч, 2 SIM', '500'),
(4, '/img-bd/smartphones_tablets/Nokia T20.jpg', 'Nokia T20 4GB/64GB(синий)', '10.4\", IPS (2000x1200), Android, Unisoc Tiger T610, ОЗУ 4 ГБ, флэш-память 64 ГБ, цвет синий', '850');

-- --------------------------------------------------------

--
-- Структура таблицы `televisors`
--

CREATE TABLE `televisors` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `televisors`
--

INSERT INTO `televisors` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/televisors/Samsung QE55QN87AAU.jpg', 'Samsung QE55QN87AAU', '55\", 3840x2160 (4K UHD), матрица IPS, частота матрицы 120 Гц, индекс динамичных сцен 4300, Smart TV (Samsung Tizen), HDR, Wi-Fi', '4150'),
(2, '/img-bd/televisors/LG 55UQ76009LC.jpg', 'LG 55UQ76009LC', '55\", 3840x2160 (4K UHD), матрица IPS, частота матрицы 60 Гц, Smart TV (LG webOS), HDR, Wi-Fi', '2700');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(345) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone number` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `addres` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone number`, `addres`, `password`) VALUES
(4, 'qwert', 'dqdq@ddwdwdwwdwqd', '121231212', 'dadsdadasd21212', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Структура таблицы `vacuum cleaner`
--

CREATE TABLE `vacuum cleaner` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `vacuum cleaner`
--

INSERT INTO `vacuum cleaner` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/vacuum_cleaner/Philips XB202301.jpg', 'Philips XB202301', 'пылесборник: контейнер, мощность всасывания: 360 Вт, потребление: 1800 Вт, без регулировки мощности, шум 82 дБ', '400'),
(2, '/img-bd/vacuum_cleaner/Scarlett SC-VC80B63.jpg', 'Scarlett SC-VC80B63', 'пылесборник: мешок, мощность всасывания: 360 Вт, потребление: 1600 Вт, труба: пластик, без регулировки мощности', '200');

-- --------------------------------------------------------

--
-- Структура таблицы `whashing mashines`
--

CREATE TABLE `whashing mashines` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `whashing mashines`
--

INSERT INTO `whashing mashines` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, '/img-bd/washing_machines/LG F12B8WDS7.jpg', 'LG F12B8WDS7', 'автоматическая стиральная машина, с паром, загрузка до 6.5 кг, отжим 1200 об/мин, глубина 44 см (с люком 46 см), энергопотребление A+++, прямой привод, 13 программ', '1600'),
(2, '/img-bd/washing_machines/ATLANT СМА 60С1010-00.jpg', 'ATLANT СМА 60С1010-00', 'автоматическая стиральная машина, загрузка до 6 кг, отжим 1000 об/мин, глубина 48.2 см (с люком 56 см), энергопотребление A+, защита от протечек, 16 программ', '1200');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `laptops and computers`
--
ALTER TABLE `laptops and computers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `microwaves`
--
ALTER TABLE `microwaves`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `refrigerators and freezers`
--
ALTER TABLE `refrigerators and freezers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `smartphones and tablets`
--
ALTER TABLE `smartphones and tablets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `televisors`
--
ALTER TABLE `televisors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacuum cleaner`
--
ALTER TABLE `vacuum cleaner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `whashing mashines`
--
ALTER TABLE `whashing mashines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `laptops and computers`
--
ALTER TABLE `laptops and computers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `microwaves`
--
ALTER TABLE `microwaves`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `refrigerators and freezers`
--
ALTER TABLE `refrigerators and freezers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `smartphones and tablets`
--
ALTER TABLE `smartphones and tablets`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `televisors`
--
ALTER TABLE `televisors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vacuum cleaner`
--
ALTER TABLE `vacuum cleaner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `whashing mashines`
--
ALTER TABLE `whashing mashines`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
