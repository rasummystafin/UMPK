-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2026 г., 23:07
-- Версия сервера: 5.6.51
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hospitale`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `login` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hospital`
--

INSERT INTO `hospital` (`id`, `login`, `password`) VALUES
(1, 'rasi', '122'),
(2, 'rasi', '122'),
(3, 'rasi', '122'),
(4, '123', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `zaiva`
--

CREATE TABLE `zaiva` (
  `id` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `status` enum('В обработке','Выполнен') DEFAULT 'В обработке',
  `datetime` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `zaiva`
--

INSERT INTO `zaiva` (`id`, `adress`, `number`, `fio`, `status`, `datetime`, `created_at`) VALUES
(1, 'город уфа', '89044444444', 'Мухлисов Алим Алимбетович', 'В обработке', '2000-11-12 12:50:00', '2026-04-06 18:35:09'),
(6, 'город уфа', 'квп', 'Мухлисов Алим Алимбетович', 'Выполнен', '0000-00-00 00:00:00', '2026-04-06 18:43:01'),
(7, 'г.Уфа трасса М5', '122121221', 'Омонов Айдар Фигзнает', 'Выполнен', '2026-04-06 23:43:00', '2026-04-06 18:44:22'),
(8, 'г.Уфа трасса М5', '122121221', 'Омонов Айдар Фигзнает', 'Выполнен', '2026-04-06 23:43:00', '2026-04-06 18:46:03'),
(9, 'город уфа уцк', '43343', 'аипам Пампонов Беркутов', 'В обработке', '2343-03-12 23:53:00', '2026-04-06 18:47:24'),
(12, 'город уфа умпк', '3333333333', 'фыфка фулкат Банана', 'Выполнен', '4223-09-12 12:43:00', '2026-04-06 19:11:16'),
(14, 'Уфа лень искать в файлах', '73472950208', 'Юсупов Артём Альфредович', 'В обработке', '2026-04-07 00:43:00', '2026-04-06 19:44:23'),
(16, 'выавы', 'выа', 'ыавв выав ыва', NULL, '0002-01-31 12:12:00', '2026-04-06 19:48:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zaiva`
--
ALTER TABLE `zaiva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zaiva`
--
ALTER TABLE `zaiva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
