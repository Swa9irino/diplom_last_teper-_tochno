-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2023 г., 04:28
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `AllProducts`
--

CREATE TABLE `AllProducts` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `citylink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `AllProducts`
--

INSERT INTO `AllProducts` (`id`, `name`, `description`, `price`, `img`, `href`, `hrefS`, `citylink`) VALUES
(30, 'Горный велосипед Giant ATX', 'Горный велосипед Giant ATX 27.5 (2022) – яркая модель, предназначенная для комфортной езды по разнообразным типам дорог, начиная от городских улиц и заканчивая лесными тропинками.', '38540.00-50000', 'https://cdn.velostrana.ru/upload/models/velo/55248/full/d4dfe1198d17b994e8dc509ba5f24bed.jpg', 'https://www.velostrana.ru/giant/atx-275/', '', ''),
(31, 'Горный велосипед Trinx M116', 'Горный велосипед Trinx M116 Pro (2021) привлекательная модель, выполненная в спортивном стиле, которая подходит для велопрогулок по городу и пересеченной местности.', '26520.00', 'https://cdn.velostrana.ru/upload/models/velo/52659/full/9fe6cb079b999587914e7ebd40dbb1bc.jpg', 'https://www.velostrana.ru/trinx/m116/', '', ''),
(32, 'AMD Ryzen 5 \r\n5600X ', 'Процессор AMD Ryzen 5 5600X OEM — шестиядерная модель с сокетом AM4. Номинальная тактовая частота — 3,7 Гц, в режиме турбо — 4,6 Гц. ', '13499.00', 'https://c.dns-shop.ru/thumb/st4/fit/wm/0/0/0337faf641403203af079998cbb8d8c3/a60d568636c393c611792fb99f68dd97fb6fe3de90e8bd6f085c7c321e9e32b0.jpg.webp', 'https://www.dns-shop.ru/product/61d281e916f9ed20/processor-amd-ryzen-5-5600x-oem/?utm_referrer=https%3A%2F%2Fwww.google.com%2F', 'https://www.mvideo.ru/products/processor-amd-ryzen-5-5600x-oem-400021830', ''),
(33, 'MSI GeForce GTX 1660 SUPER', 'Видеокарта MSI GeForce GTX 1660 SUPER Gaming X [GTX 1660 SUPER GAMING X] – игровой видеоадаптер высокого класса.', '23999.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/f1e8bc6643dd208b27563ace3e2b6195/a21ca13090f1aee5c62cb1eb261b5c324eef772f1b781e3f3209c675b921b71f.jpg.webp', 'https://www.dns-shop.ru/product/41a57000f4823332/videokarta-msi-geforce-gtx-1660-super-gaming-x-gtx-1660-super-gaming-x/', 'https://www.citilink.ru/product/videokarta-msi-nvidia-geforce-gtx-1660super-gtx-1660-super-gaming-x-6g-1188210/', 'yes'),
(34, 'ASUS GeForce RTX 2060', 'Видеокарта ASUS GeForce RTX 2060 Dual EVO OC Edition [DUAL-RTX2060-O6G-EVO] с поддержкой технологии трассировки лучей.', '31799.00', 'https://c.dns-shop.ru/thumb/st1/fit/500/500/502f454559e03518daee2ef1a6f56fc5/b3ab27192d0ca00d17bb20219c31088d42d277156f8b85915a2d324acbb1d850.jpg.webp', 'https://www.dns-shop.ru/product/1a200d8cb3293332/videokarta-asus-geforce-rtx-2060-dual-evo-oc-edition-dual-rtx2060-o6g-evo/', 'https://www.citilink.ru/product/videokarta-asus-nvidia-geforce-rtx-2060-dual-rtx2060-o6g-evo-6gb-gddr6-1160365/', 'yes'),
(35, 'iphone13', 'iphone13pro max delux edition', '80000.00', 'https://live.staticflickr.com/65535/52914082567_d50b5cfa99_z.jpg', 'https://www.dns-shop.ru/product/5429da9af387ed20/61-smartfon-apple-iphone-13-128-gb-cernyj/', 'https://www.mvideo.ru/smartfony-i-svyaz-10/smartfony-205/f/category=iphone-914/seriya-iphone=iphone-13', ''),
(36, 'Pocox5pro', 'Pocox5pro', '35000.00', 'https://live.staticflickr.com/65535/52913967796_c334ae4913_z.jpg\r\n', 'https://www.dns-shop.ru/product/4b4dd5d77ce5ed20/667-smartfon-poco-x5-pro-5g-256-gb-cernyj/', '', ''),
(37, 'Накладка Apple Silicone', 'Накладка Apple Silicone Case MHL63ZE/A для смартфона Apple iPhone 12/12 Pro насыщенного красного цвета.', '3899.00', 'https://c.dns-shop.ru/thumb/st1/fit/500/500/b3aa816de88fa3d54a9e233e720560be/ee3c1f00390eec8413657c569d01d97d81057b60bf588c41253411330bd51d0f.jpg.webp', 'https://www.dns-shop.ru/product/4c7d6f83142d3332/nakladka-apple-silicone-case-with-magsafe-dla-apple-iphone-12-12-pro-krasnyj/', '', ''),
(38, 'Чехол-книжка Samsung', 'Чехол-книжка Samsung Smart View Wallet Case обеспечивает полноценную защиту дисплея, корпуса и боковых граней смартфона.', '3499.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/5f8b84e4903a21cbcb4c4db1548b5378/ca7e7360ddd578e971b8a8c34aee713a4627105d5f5edbb069a2d8e078520846.jpg.webp', 'https://www.dns-shop.ru/product/bd4f451f9c4bed20/cehol-knizka-samsung-smart-view-wallet-case-dla-samsung-galaxy-s23-ultra-cernyj/', '', ''),
(39, 'Xiaomi Mi Power Bank 3', 'Портативный аккумулятор Xiaomi Mi Power Bank 3 Ultra Compact станет вашим незаменимым спутником в любом путешествии. ', '1499.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/7e920a62a0dd34446bf6e89fdf534ee0/242f152f603c50880175a090b5e197f71e0ea2c582f99775ef7964abb475c9c0.jpg.webp', 'https://www.dns-shop.ru/product/08e323e90f203332/portativnyj-akkumulator-xiaomi-mi-power-bank-3-cernyj/', 'https://www.citilink.ru/product/vneshnii-akkumulyator-power-bank-xiaomi-mi-power-bank-3-plm13zm-10000m-1197408/', 'yes'),
(40, 'Xiaomi Mi 50W  Power Bank 20000', 'Модель емкостью 20000 мА*ч обеспечивает быстрый заряд смартфонов, плееров, ноутбуков и других устройств.', '3299.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/a13252a8d620e06b675721f99d784aba/a61b03595ebfc4b01ed92ab73625a4ddfc197e11de14bbedd4f5d726d0a04025.jpg.webp', 'https://www.dns-shop.ru/product/ea48bfe10613d763/portativnyj-akkumulator-xiaomi-mi-power-bank-3-pro-cernyj/', 'https://www.citilink.ru/product/mobilnyi-akkumulyator-xiaomi-mi-power-bank-3-pro-50w-pd-20000mah-3a-3x-1791806/', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `bike`
--

CREATE TABLE `bike` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `popularity` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `bike`
--

INSERT INTO `bike` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`) VALUES
(11, 'Горный велосипед Giant ATX', 'Горный велосипед Giant ATX 27.5 (2022) – яркая модель, предназначенная для комфортной езды по разнообразным типам дорог, начиная от городских улиц и заканчивая лесными тропинками.', '38540.00', '10', 'https://cdn.velostrana.ru/upload/models/velo/55248/full/d4dfe1198d17b994e8dc509ba5f24bed.jpg', 'https://www.velostrana.ru/giant/atx-275/'),
(12, 'Горный велосипед Trinx M116', 'Горный велосипед Trinx M116 Pro (2021) привлекательная модель, выполненная в спортивном стиле, которая подходит для велопрогулок по городу и пересеченной местности.', '26520.00', '50', 'https://cdn.velostrana.ru/upload/models/velo/52659/full/9fe6cb079b999587914e7ebd40dbb1bc.jpg', 'https://www.velostrana.ru/trinx/m116/');

-- --------------------------------------------------------

--
-- Структура таблицы `cpu`
--

CREATE TABLE `cpu` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `popularity` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cpu`
--

INSERT INTO `cpu` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`, `hrefS`) VALUES
(9, 'AMD Ryzen 5 \r\n5600X ', 'Процессор AMD Ryzen 5 5600X OEM — шестиядерная модель с сокетом AM4. Номинальная тактовая частота — 3,7 Гц, в режиме турбо — 4,6 Гц. ', '13499.00', 40, 'https://c.dns-shop.ru/thumb/st4/fit/wm/0/0/0337faf641403203af079998cbb8d8c3/a60d568636c393c611792fb99f68dd97fb6fe3de90e8bd6f085c7c321e9e32b0.jpg.webp', 'https://www.dns-shop.ru/product/61d281e916f9ed20/processor-amd-ryzen-5-5600x-oem/?utm_referrer=https%3A%2F%2Fwww.google.com%2F', 'https://www.mvideo.ru/products/processor-amd-ryzen-5-5600x-oem-400021830');

-- --------------------------------------------------------

--
-- Структура таблицы `gpu`
--

CREATE TABLE `gpu` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `popularity` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gpu`
--

INSERT INTO `gpu` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`, `hrefS`) VALUES
(7, 'MSI GeForce GTX 1660 SUPER', 'Видеокарта MSI GeForce GTX 1660 SUPER Gaming X [GTX 1660 SUPER GAMING X] – игровой видеоадаптер высокого класса.', '23999.00', 45, 'https://c.dns-shop.ru/thumb/st4/fit/500/500/f1e8bc6643dd208b27563ace3e2b6195/a21ca13090f1aee5c62cb1eb261b5c324eef772f1b781e3f3209c675b921b71f.jpg', 'https://www.dns-shop.ru/product/41a57000f4823332/videokarta-msi-geforce-gtx-1660-super-gaming-x-gtx-1660-super-gaming-x/', 'https://www.citilink.ru/product/videokarta-msi-nvidia-geforce-gtx-1660super-gtx-1660-super-gaming-x-6g-1188210/'),
(8, 'ASUS GeForce RTX 2060', 'Видеокарта ASUS GeForce RTX 2060 Dual EVO OC Edition [DUAL-RTX2060-O6G-EVO] с поддержкой технологии трассировки лучей.', '31799.00', 10, 'https://c.dns-shop.ru/thumb/st1/fit/500/500/502f454559e03518daee2ef1a6f56fc5/b3ab27192d0ca00d17bb20219c31088d42d277156f8b85915a2d324acbb1d850.jpg', 'https://www.dns-shop.ru/product/1a200d8cb3293332/videokarta-asus-geforce-rtx-2060-dual-evo-oc-edition-dual-rtx2060-o6g-evo/', 'https://www.citilink.ru/product/videokarta-asus-nvidia-geforce-rtx-2060-dual-rtx2060-o6g-evo-6gb-gddr6-1160365/');

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `popularity` int NOT NULL,
  `img` varchar(250) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `phone`
--

INSERT INTO `phone` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`, `hrefS`) VALUES
(1, 'iphone13', 'Не существует ни одной задачи, с выполнением которой не справился бы смартфон Apple iPhone 13. Неважно, что необходимо пользователю в текущий момент – навигация между окнами, быстрая загрузка приложений или мгновенная обработка данных. ', '80000.00', 10, 'https://live.staticflickr.com/65535/52914082567_d50b5cfa99_z.jpg', 'https://www.dns-shop.ru/product/5429da9af387ed20/61-smartfon-apple-iphone-13-128-gb-cernyj/', 'https://www.mvideo.ru/smartfony-i-svyaz-10/smartfony-205/f/category=iphone-914/seriya-iphone=iphone-13'),
(2, 'Pocox5pro', 'Смартфон POCO X5 Pro – производительное и удобное устройство для общения, работы и развлечений. Конструкция предусматривает использование двух SIM-карт, также поддерживает моментальный обмен данными в сети 5G. ', '35000.00', 100, 'https://live.staticflickr.com/65535/52913967796_c334ae4913_z.jpg\r\n', 'https://www.dns-shop.ru/product/4b4dd5d77ce5ed20/667-smartfon-poco-x5-pro-5g-256-gb-cernyj/', '');

-- --------------------------------------------------------

--
-- Структура таблицы `phonecase`
--

CREATE TABLE `phonecase` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `popularity` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `phonecase`
--

INSERT INTO `phonecase` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`, `hrefS`) VALUES
(5, 'Накладка Apple Silicone', 'Накладка Apple Silicone Case MHL63ZE/A для смартфона Apple iPhone 12/12 Pro насыщенного красного цвета.', '3899.00', 13, 'https://c.dns-shop.ru/thumb/st1/fit/500/500/b3aa816de88fa3d54a9e233e720560be/ee3c1f00390eec8413657c569d01d97d81057b60bf588c41253411330bd51d0f.jpg', 'https://www.dns-shop.ru/product/4c7d6f83142d3332/nakladka-apple-silicone-case-with-magsafe-dla-apple-iphone-12-12-pro-krasnyj/', ''),
(6, 'Чехол-книжка Samsung', 'Чехол-книжка Samsung Smart View Wallet Case обеспечивает полноценную защиту дисплея, корпуса и боковых граней смартфона.', '3499.00', 33, 'https://c.dns-shop.ru/thumb/st4/fit/500/500/5f8b84e4903a21cbcb4c4db1548b5378/ca7e7360ddd578e971b8a8c34aee713a4627105d5f5edbb069a2d8e078520846.jpg', 'https://www.dns-shop.ru/product/bd4f451f9c4bed20/cehol-knizka-samsung-smart-view-wallet-case-dla-samsung-galaxy-s23-ultra-cernyj/', '');

-- --------------------------------------------------------

--
-- Структура таблицы `popular`
--

CREATE TABLE `popular` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mvideo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `popular`
--

INSERT INTO `popular` (`id`, `name`, `description`, `price`, `img`, `href`, `hrefS`, `mvideo`) VALUES
(20, 'Xiaomi Mi Power Bank 3', 'Портативный аккумулятор Xiaomi Mi Power Bank 3 Ultra Compact станет вашим незаменимым спутником в любом путешествии. ', '1499.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/7e920a62a0dd34446bf6e89fdf534ee0/242f152f603c50880175a090b5e197f71e0ea2c582f99775ef7964abb475c9c0.jpg.webp', 'https://www.dns-shop.ru/product/08e323e90f203332/portativnyj-akkumulator-xiaomi-mi-power-bank-3-cernyj/', 'https://www.citilink.ru/product/vneshnii-akkumulyator-power-bank-xiaomi-mi-power-bank-3-plm13zm-10000m-1197408/', ''),
(21, 'MSI GeForce GTX 1660 SUPER', 'Видеокарта MSI GeForce GTX 1660 SUPER Gaming X [GTX 1660 SUPER GAMING X] – игровой видеоадаптер высокого класса.', '23999.00', 'https://c.dns-shop.ru/thumb/st4/fit/500/500/f1e8bc6643dd208b27563ace3e2b6195/a21ca13090f1aee5c62cb1eb261b5c324eef772f1b781e3f3209c675b921b71f.jpg.webp', 'https://www.dns-shop.ru/product/41a57000f4823332/videokarta-msi-geforce-gtx-1660-super-gaming-x-gtx-1660-super-gaming-x/', 'https://www.citilink.ru/product/videokarta-msi-nvidia-geforce-gtx-1660super-gtx-1660-super-gaming-x-6g-1188210/', ''),
(22, 'iphone13', 'Не существует ни одной задачи, с выполнением которой не справился бы смартфон Apple iPhone 13. Неважно, что необходимо пользователю в текущий момент – навигация между окнами, быстрая загрузка приложений или мгновенная обработка данных. ', '151234.00', 'https://live.staticflickr.com/65535/52914082567_d50b5cfa99_z.jpg', 'https://www.dns-shop.ru/product/5429da9af387ed20/61-smartfon-apple-iphone-13-128-gb-cernyj/', 'https://www.mvideo.ru/smartfony-i-svyaz-10/smartfony-205/f/category=iphone-914/seriya-iphone=iphone-13', 'yes'),
(23, 'AMD Ryzen 5 \r\n5600X ', 'Процессор AMD Ryzen 5 5600X OEM — шестиядерная модель с сокетом AM4. Номинальная тактовая частота — 3,7 Гц, в режиме турбо — 4,6 Гц. ', '13499.00', 'https://c.dns-shop.ru/thumb/st4/fit/wm/0/0/0337faf641403203af079998cbb8d8c3/a60d568636c393c611792fb99f68dd97fb6fe3de90e8bd6f085c7c321e9e32b0.jpg.webp', 'https://www.dns-shop.ru/product/61d281e916f9ed20/processor-amd-ryzen-5-5600x-oem/?utm_referrer=https%3A%2F%2Fwww.google.com%2F', 'https://www.mvideo.ru/products/processor-amd-ryzen-5-5600x-oem-400021830', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `powerbank`
--

CREATE TABLE `powerbank` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `popularity` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `href` varchar(200) NOT NULL,
  `hrefS` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `citylink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `powerbank`
--

INSERT INTO `powerbank` (`id`, `name`, `description`, `price`, `popularity`, `img`, `href`, `hrefS`, `citylink`) VALUES
(3, 'Xiaomi Mi Power Bank 3', 'Портативный аккумулятор Xiaomi Mi Power Bank 3 Ultra Compact станет вашим незаменимым спутником в любом путешествии. ', '1499.00', 10, 'https://c.dns-shop.ru/thumb/st4/fit/500/500/7e920a62a0dd34446bf6e89fdf534ee0/242f152f603c50880175a090b5e197f71e0ea2c582f99775ef7964abb475c9c0.jpg', 'https://www.dns-shop.ru/product/08e323e90f203332/portativnyj-akkumulator-xiaomi-mi-power-bank-3-cernyj/', 'https://www.citilink.ru/product/vneshnii-akkumulyator-power-bank-xiaomi-mi-power-bank-3-plm13zm-10000m-1197408/', 'yes'),
(4, 'Xiaomi Mi Power Bank 20000', 'Модель емкостью 20000 мА*ч обеспечивает быстрый заряд смартфонов, плееров, ноутбуков и других устройств.', '3299.00', 2, 'https://c.dns-shop.ru/thumb/st4/fit/500/500/a13252a8d620e06b675721f99d784aba/a61b03595ebfc4b01ed92ab73625a4ddfc197e11de14bbedd4f5d726d0a04025.jpg', 'https://www.dns-shop.ru/product/ea48bfe10613d763/portativnyj-akkumulator-xiaomi-mi-power-bank-3-pro-cernyj/', 'https://www.citilink.ru/product/mobilnyi-akkumulyator-xiaomi-mi-power-bank-3-pro-50w-pd-20000mah-3a-3x-1791806/', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_favorite` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `is_favorite`) VALUES
(1, 'ghffgh', 'fghfghgfhgf', 213214, NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `AllProducts`
--
ALTER TABLE `AllProducts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phonecase`
--
ALTER TABLE `phonecase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `powerbank`
--
ALTER TABLE `powerbank`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `AllProducts`
--
ALTER TABLE `AllProducts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `phonecase`
--
ALTER TABLE `phonecase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT для таблицы `powerbank`
--
ALTER TABLE `powerbank`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
