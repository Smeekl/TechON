-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2019 г., 16:26
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `techon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`user_id`, `order_id`) VALUES
(1, 1),
(1, 5),
(2, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `cart_product`
--

CREATE TABLE `cart_product` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart_product`
--

INSERT INTO `cart_product` (`user_id`, `product_id`) VALUES
(1, 1),
(1, 3),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Double SIM'),
(2, 'Budget smatphones'),
(3, 'Mobile phones'),
(4, 'Used'),
(5, 'New'),
(6, '2GB'),
(7, '3GB'),
(8, '4GB'),
(9, '6GB'),
(10, '8GB');

-- --------------------------------------------------------

--
-- Структура таблицы `category_product`
--

CREATE TABLE `category_product` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `manufacturer_title` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturer_title`, `phone`) VALUES
(1, 'Samsung', '0800502000'),
(2, 'Farberware', ''),
(3, 'Microsoft', ''),
(4, 'Sceptre', ''),
(5, 'Gold`s Gym', ''),
(6, 'Fluxx', '');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_amount` int(11) NOT NULL,
  `state` enum('complete','in_proccess','canceled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products`
--

CREATE TABLE `orders_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `short_title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `viewed` int(11) NOT NULL DEFAULT '0',
  `reviews` int(11) NOT NULL DEFAULT '0',
  `buys_amount` int(11) NOT NULL DEFAULT '0',
  `createrd_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `short_title`, `description`, `price`, `vendor_id`, `manufacturer_id`, `viewed`, `reviews`, `buys_amount`, `createrd_at`, `updated_at`, `quantity`) VALUES
(1, 'Farberware 3.2-Quart Oil-Less Multi-Functional Fryer', 'Farberware_3.2-Quart_Oil', 'You can now cook faster, healthier meals thanks to the Farberware 3.2 Quart Oil-Less Multi-Functional Fryer. This advanced fryer is the perfect appliance to grill, bake, roast or fry family favorites like chicken, french fries, onion rings and even desserts. Using Rapid Hot Air Technology, it cooks foods to a golden and crispy finish using little to no oil, reducing fat and calories compared to traditional frying. This oil-less fryer features easy-to-use controls to set cooking time up to 30 minutes and temperature up to 400F. The 3.2-quart food basket fits up to 2 pounds of food and, thanks to the non-stick and dishwasher-safe food basket, youll spend less time cleaning and more time enjoying delicious meals. As an added bonus, youll receive a recipe book with 25 recipes. Your new favorite kitchen appliance is going to be the Farberware 3.2 Quart Oil-Less Multi-Functional Fryer.', 5599, 1, 2, 194, 0, 0, '2019-01-14 14:10:08', '2019-01-30 16:52:00', 40),
(2, 'SAMSUNG Galaxy Tab E 9.6\" 16GB', 'SAMSUNG_Galaxy_Tab_E_9.6_16GB', 'Purchase a Samsung Galaxy Tab E 9.6\" between 11/21/18 and 12/31/18 and get $25 in Google Play credit. Watch and play your favorites. Portable entertainment for everyone The Galaxy Tab E was made to go wherever you go and do whatever you want to do. From watching a movie with the family at home to reading a best seller at the coffee shop, the big, bright screen keeps everyone entertained. Keep it all with you Enjoy more of your favorite music, photos, movies and games on the go with a microSD card* that expands your tablets memory from 16GB** to up to an additional 400GB. Capture more every day Make shareable moments better with the Galaxy Tab Es advanced camera features. Catch more in each photo with Panorama and Continuous Shot modes. Video chat from anywhere. And quickly toggle between camera and video modes. With the Galaxy Tab E, you wont miss a thing. Safe. Fun. Kid-Friendly. Kids Mode, available for free from Samsung Galaxy Essentials, gives parents peace of mind while providing a colorful, engaging place for kids to play. Easily manage what your kids access and how long they spend using it, all while keeping your own documents private. Premium content all in one place Customize your Galaxy Tab E with the apps you use most. The Samsung Galaxy Essentials widget provides a collection of premium, complimentary apps optimized for your tablet screen. Select and download the apps you want to upgrade your tablet experience. More reasons to love your tablet Get the most out of your Galaxy Tab E with the Samsung+ app. Along with one-touch access to customer support, youll discover device tips, a library of resources and more. Plus youll have access to great music and exclusive content. Samsung+ makes life with a tablet even better.', 9900, 1, 1, 520, 0, 0, '2019-01-14 14:14:19', '2019-01-30 13:20:34', 35),
(3, 'Fluxx Watt UL2272 LED Hoverboard', 'Fluxx-Watt-UL2272-LED-Hoverboard', 'The FLUXX watt is the best entry level hoverboard available. It has all the features a new rider should look for, UL certification, Training mode and 400 WATTS of power! The unique design and fun LED lights make the FLUXX an awesome ride, the 6\" wheels which have quickly become the standard for hoverboards are made of solid rubber for a smooth ride.', 9700, 1, 6, 353, 0, 0, '2019-01-16 13:48:02', '2019-01-30 09:12:36', 40);

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `mediaType` enum('img','video') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `sort_order`, `mediaType`) VALUES
(2, 'https://i5.walmartimages.com/asr/20935f22-8720-497a-87f8-f1d13a27f33f_1.1f881dd4bb74346a98fb5e3ef032fb90.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', NULL, 'img'),
(2, 'https://i5.walmartimages.com/asr/cf61df13-4330-4059-b09e-5950a0c303d7_4.02d4f00ff50bc123ede5966c4740f596.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 1, 'img'),
(1, 'https://i5.walmartimages.com/asr/ee8cb60f-a21a-4756-add1-93226907a056_1.52b85af2a96888e733b6f07612e89d76.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 1, 'img'),
(3, 'https://i5.walmartimages.com/asr/2f44f437-452d-462c-b47e-2599f46c6dcb_3.4174f52324a0f8a4f0d5d2ac57c4aa7c.png?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 1, 'img'),
(3, 'https://i5.walmartimages.com/asr/e10c4e5b-4e10-4351-b7f0-2e918e2ff938_1.fc136923c951c91f3ee680091dc09139.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', NULL, 'img'),
(3, 'https://i5.walmartimages.com/asr/f7eb6cc8-b76d-4e66-84e8-a9a1b7cc4a8a_1.b8be353033b978c95ea05fb1ef3b4040.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', NULL, 'img');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `second_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visits` int(11) NOT NULL DEFAULT '0',
  `transfers` int(11) NOT NULL DEFAULT '0',
  `total_transfers_amount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `second_name`, `last_name`, `created_at`, `updated_at`, `visits`, `transfers`, `total_transfers_amount`) VALUES
(1, 'smeekl@mail.ru', '$2y$10$93jFdkHIVBVTsJIYcKJ2Kuj4lm3mYkTKPC7MFqdo1VX7/OqAFCCdq', 'Vadim', 'Belkov', 'Aleksandrovich', '2019-01-17 21:14:46', '2019-01-20 14:53:45', 0, 0, 0),
(2, 'vadimpro3@gmail.com', '$2y$10$93jFdkHIVBVTsJIYcKJ2Kuj4lm3mYkTKPC7MFqdo1VX7/OqAFCCdq', 'vadim', 'belkov', 'aleks', '2019-01-25 13:42:51', '2019-01-27 00:31:46', 0, 0, 0),
(35, 'vadimpro5@gmail.com', '$2y$10$TvZlOVAVHBBK2OBP9rAWaObuxByhgBFXsONaQktwHfntLc8soPKRm', NULL, NULL, NULL, '2019-01-27 00:50:53', '2019-01-27 00:50:53', 0, 0, 0),
(85, 'vadimpro1@gmail.com', '$2y$10$iqUjt182Rxnrxyz1IfTrzuVjz.lLSl5tOjuAj8W89mSyQw/OhFc8O', NULL, NULL, NULL, '2019-01-27 02:01:17', '2019-01-27 02:01:17', 0, 0, 0),
(86, 'vadimpro6@gmail.com', '$2y$10$pyZX8jiOBrwPGNnimk9NPeyTq0lM8idrvszkPI0sAeTp.L7hEsWGu', NULL, NULL, NULL, '2019-01-27 02:07:59', '2019-01-27 02:07:59', 0, 0, 0),
(87, 'vadimpro7@gmail.com', '$2y$10$eiOaKRycuiCNx3NyxH8QeOFjjPOSwPA4CiSbnB7SmuVNAHsoKwDpS', NULL, NULL, NULL, '2019-01-27 03:47:26', '2019-01-27 03:47:26', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_session`
--

CREATE TABLE `user_session` (
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `hash` varchar(60) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_session`
--

INSERT INTO `user_session` (`user_id`, `ip_address`, `user_agent`, `hash`, `clicks`, `updated_at`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '8a11dd850c40f1e98e9d1dc6daeb3a64', 0, '2019-01-28 11:05:31'),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '8a11dd850c40f1e98e9d1dc6daeb3a64', 0, '2019-01-27 00:37:28'),
(85, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '8a11dd850c40f1e98e9d1dc6daeb3a64', 0, '2019-01-27 02:01:17'),
(86, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '8a11dd850c40f1e98e9d1dc6daeb3a64', 0, '2019-01-27 02:07:59'),
(87, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36', '8a11dd850c40f1e98e9d1dc6daeb3a64', 0, '2019-01-27 03:47:26');

-- --------------------------------------------------------

--
-- Структура таблицы `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `vendor_title` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_title`, `phone`) VALUES
(1, 'rayfeks', '380960677894');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `cart_product`
--
ALTER TABLE `cart_product`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `user_session`
--
ALTER TABLE `user_session`
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT для таблицы `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `cart_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `cart` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_products_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_session`
--
ALTER TABLE `user_session`
  ADD CONSTRAINT `user_session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
