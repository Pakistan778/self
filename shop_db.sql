-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2023 г., 14:31
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Blog`
--

CREATE TABLE `Blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Blog`
--

INSERT INTO `Blog` (`id`, `title`, `text`, `pubdate`) VALUES
(1, 'Promotie!!!!!', 'Vina acum si cupara doar la noi la un pret cu reducere de pina la 70%!!!', '2023-04-18 11:14:57'),
(2, 'Stoc nou!!!', 'Acum in toate magazinele Murfy puteti procura orice produs pentru animalutul de companie', '2023-04-18 11:14:57');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `feliala` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(15) NOT NULL,
  `adresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `feliala`, `number`, `adresa`, `program`) VALUES
(1, 'Feliala Nr.1', 60629691, 'Str. Trandafirilor 23', 'Lu-Du\n8:00-19:00'),
(2, 'Feliala Nr.2', 69912896, 'str.Padurii 12', 'Lu-Du 8:00-18:00'),
(3, 'Feliala Nr.3', 75335497, ' str. Decebal 22', 'Lu-Du 8:00-20:00'),
(4, 'Feliala Nr.4', 78896321, 'str. Stefan cel Mare 72B', 'Lu-Du 8:00-21:00'),
(5, 'Feliala Nr.5', 65589321, 'str. Mircea cel Batran 45', 'Lu-Du 9:00-18:00');

-- --------------------------------------------------------

--
-- Структура таблицы `Food`
--

CREATE TABLE `Food` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` int(11) NOT NULL,
  `categorie` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Food`
--

INSERT INTO `Food` (`id`, `title`, `text`, `image`, `categorie`, `pret`) VALUES
(1, 'Crochete de pui cu orez', 'Hrănitoare crochete cu carne de pui și orez, bogate în proteine și carbohidrați', 1, 'Caini', 120),
(2, 'Pateu de ton pentru pisici', 'Delicios pateu de ton, fără adaos de conservanți sau coloranți, adecvat pentru pisici adulte', 2, 'Pisici', 70),
(3, 'Biscuiți cu carne  câini', 'Biscuiți crocanți cu carne de vită, ideali pentru rasele mari de câini, conținând proteine de calitate pentru a susține nivelul de energie al câinelui.', 3, 'Caini', 100),
(4, 'Batoane din piept  pisici', ' Gustoase batoane din piept de pui, uscate și sănătoase, potrivite pentru pisici adulte, fără adaos de zahăr sau aditivi artificiali.', 4, 'Pisici', 80),
(5, 'Whiskas', 'Whiskas este una dintre cele mai sanatoase mincaruri pentru prietenul tau de companie.', 3, 'Pisici', 50),
(6, 'Miau', 'Miau, alintă-ți pisicuța cu o gustare delicoasă de la Miau!', 1, 'Pisici', 40),
(7, 'sedgjhkljhhfddghb7', 'hfvydrsydguhmjkecy5vbgnhjgbh86y', 2, 'Caini', 100);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Food`
--
ALTER TABLE `Food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
