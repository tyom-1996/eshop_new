-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 12 2020 г., 12:27
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `voyager`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, NULL, 1, 'slider', 'slider', '2020-10-07 10:00:30', '2020-10-08 09:01:46');

-- --------------------------------------------------------

--
-- Структура таблицы `category_products`
--

CREATE TABLE `category_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_products`
--

INSERT INTO `category_products` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(1, 'компьютеры', '2020-10-08 04:09:00', '2020-10-08 04:25:30', 'category-products\\October2020\\dfKkaIqhF25aSvcW9KrW.png'),
(2, 'ноутбуки', '2020-10-08 04:10:00', '2020-10-08 04:25:16', 'category-products\\October2020\\ohVtTN9cS982mu13G3Zi.png'),
(3, 'комплектующие', '2020-10-08 04:10:00', '2020-10-08 04:25:51', 'category-products\\October2020\\gJWEx4HFBFxGayY7hijC.png'),
(4, 'периферия', '2020-10-08 04:11:00', '2020-10-08 04:24:55', 'category-products\\October2020\\MSlL4as4VgWIGrD2MN9L.png'),
(5, 'сервисный_центр', '2020-10-08 04:11:00', '2020-10-08 04:26:01', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category_sliders`
--

CREATE TABLE `category_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_sliders`
--

INSERT INTO `category_sliders` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'main slider', 'publish', '2020-10-09 06:28:00', '2020-10-10 04:29:51'),
(6, 'brands', 'publish', '2020-10-10 04:02:00', '2020-10-10 04:28:27');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(75, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 15, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(77, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(78, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(80, 15, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(89, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 17, 'cat_id', 'text', 'Cat Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(91, 17, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(92, 17, 'specifications', 'text', 'Specifications', 1, 1, 1, 1, 1, 1, '{}', 5),
(93, 17, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 6),
(94, 17, 'availability', 'text', 'Availability', 1, 1, 1, 1, 1, 1, '{}', 7),
(95, 17, 'price', 'text', 'Price', 0, 1, 1, 1, 1, 1, '{}', 8),
(96, 17, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 10),
(97, 17, 'count', 'text', 'Count', 0, 1, 1, 1, 1, 1, '{}', 11),
(98, 17, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 12),
(99, 17, 'tag', 'text', 'Tag', 1, 1, 1, 1, 1, 1, '{}', 13),
(102, 17, 'product_belongsto_category_product_relationship', 'relationship', 'category_products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategoryProduct\",\"table\":\"category_products\",\"type\":\"belongsTo\",\"column\":\"cat_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 15),
(103, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(104, 18, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(105, 18, 'image', 'multiple_images', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(106, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(107, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(110, 18, 'product_image_belongsto_product_relationship', 'relationship', 'product name', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(111, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(112, 19, 'author_id', 'text', 'Author Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(113, 19, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(114, 19, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(115, 19, 'seo_title', 'text', 'Seo Title', 0, 1, 1, 1, 1, 1, '{}', 5),
(116, 19, 'excerpt', 'text', 'Excerpt', 0, 1, 1, 1, 1, 1, '{}', 6),
(117, 19, 'body', 'text', 'Body', 1, 1, 1, 1, 1, 1, '{}', 7),
(118, 19, 'image', 'text', 'Image', 0, 1, 1, 1, 1, 1, '{}', 8),
(119, 19, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 9),
(120, 19, 'meta_description', 'text', 'Meta Description', 0, 1, 1, 1, 1, 1, '{}', 10),
(121, 19, 'meta_keywords', 'text', 'Meta Keywords', 0, 1, 1, 1, 1, 1, '{}', 11),
(122, 19, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 12),
(123, 19, 'featured', 'text', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 13),
(124, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 14),
(125, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(126, 17, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(127, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 14),
(128, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(129, 17, 'old_price', 'text', 'Old Price', 0, 1, 1, 1, 1, 1, '{}', 9),
(130, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(131, 21, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(132, 21, 'info', 'text', 'Info', 0, 1, 1, 1, 1, 1, '{}', 3),
(133, 21, 'button', 'text', 'Button', 0, 1, 1, 1, 1, 1, '{}', 4),
(134, 21, 'background', 'image', 'Background', 0, 1, 1, 1, 1, 1, '{}', 5),
(135, 21, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 6),
(136, 21, 'fon_image', 'image', 'Fon Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(137, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(138, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(139, 24, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(140, 24, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(141, 24, 'status', 'radio_btn', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"publish\",\"options\":{\"publish\":\"publish\",\"future\":\"future\"}}', 3),
(142, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(143, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(144, 21, 'slider_belongsto_category_slider_relationship', 'relationship', 'category_sliders', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategorySlider\",\"table\":\"category_sliders\",\"type\":\"belongsTo\",\"column\":\"slider_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(145, 21, 'slider_id', 'text', 'Slider Id', 1, 1, 1, 1, 1, 1, '{}', 8),
(146, 26, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(147, 26, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(148, 26, 'status', 'radio_btn', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"publish\",\"options\":{\"publish\":\"publish\",\"future\":\"future\"}}', 3),
(149, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(150, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(151, 26, 'tag_product_belongsto_category_product_relationship', 'relationship', 'category_products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategoryProduct\",\"table\":\"category_products\",\"type\":\"belongsTo\",\"column\":\"cat_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(152, 26, 'cat_id', 'text', 'Cat Id', 0, 1, 1, 1, 1, 1, '{}', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-10-06 10:06:32', '2020-10-06 10:06:32'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-10-06 10:06:32', '2020-10-06 10:06:32'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-10-06 10:06:32', '2020-10-06 10:06:32'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-10-06 10:06:52', '2020-10-07 10:02:30'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-10-06 10:06:57', '2020-10-06 10:06:57'),
(15, 'category_products', 'category-products', 'Category Product', 'Category Products', 'voyager-categories', 'App\\CategoryProduct', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-10-08 03:30:30', '2020-10-08 04:23:15'),
(17, 'products', 'products', 'Product', 'Products', NULL, 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-08 05:31:39', '2020-10-08 07:36:01'),
(18, 'product_images', 'product-images', 'Product Image', 'Product Images', 'voyager-credit-cards', 'App\\ProductImage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-08 05:49:47', '2020-10-09 05:41:54'),
(19, 'posts', 'posts', 'Post', 'Posts', NULL, 'TCG\\Voyager\\Models\\Post', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-08 06:34:02', '2020-10-08 09:04:48'),
(21, 'sliders', 'sliders', 'Slider', 'Sliders', 'voyager-credit-cards', 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-09 05:42:25', '2020-10-10 04:36:22'),
(23, 'category_slider', 'category-slider', 'Category Slider', 'Category Sliders', 'voyager-categories', 'App\\CategorySlider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(24, 'category_sliders', 'category-sliders', 'Category Slider', 'Category Sliders', 'voyager-categories', 'App\\CategorySlider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-09 06:23:55', '2020-10-10 04:25:46'),
(25, 'tag_product', 'tag-product', 'Tag Product', 'Tag Products', 'voyager-tag', 'App\\TagProduct', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(26, 'tag_products', 'tag-products', 'Tag Product', 'Tag Products', 'voyager-tag', 'App\\TagProduct', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-10 08:47:29', '2020-10-12 03:16:44');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-06 10:06:35', '2020-10-06 10:06:35'),
(3, 'header', '2020-10-07 04:16:13', '2020-10-07 04:16:13'),
(4, 'footer', '2020-10-07 05:09:12', '2020-10-07 05:09:12'),
(7, 'menu_top', '2020-10-07 06:20:02', '2020-10-07 06:20:34');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-10-06 10:06:35', '2020-10-06 10:06:35', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-10-06 10:06:35', '2020-10-08 03:12:49', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-10-06 10:06:35', '2020-10-06 10:06:35', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-10-06 10:06:35', '2020-10-06 10:06:35', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2020-10-06 10:06:35', '2020-10-10 08:43:24', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-10-06 10:06:35', '2020-10-08 03:12:49', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-10-06 10:06:35', '2020-10-08 03:12:49', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-10-06 10:06:35', '2020-10-08 03:12:49', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-10-06 10:06:35', '2020-10-08 03:12:50', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2020-10-06 10:06:35', '2020-10-10 08:43:25', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-10-06 10:06:41', '2020-10-08 03:12:50', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 9, '2020-10-06 10:06:53', '2020-10-09 06:24:33', 'voyager.categories.index', NULL),
(14, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2020-10-06 10:06:58', '2020-10-09 06:24:33', 'voyager.pages.index', NULL),
(15, 3, 'КОМПЬЮТЕРЫ', '/computers', '_self', '-', '#ffffff', NULL, 1, '2020-10-07 04:18:54', '2020-10-07 08:20:40', NULL, ''),
(16, 3, 'НОУТБУКИ', '/laptop', '_self', NULL, '#ffffff', NULL, 2, '2020-10-07 05:54:59', '2020-10-07 08:29:48', NULL, ''),
(17, 3, 'КОМПЛЕКТУЮЩИЕ', '/accessories', '_self', NULL, '#ffffff', NULL, 3, '2020-10-07 05:55:36', '2020-10-07 08:29:48', NULL, ''),
(18, 3, 'ПЕРИФИРИЯ', '/peripheral', '_self', NULL, '#ffffff', NULL, 4, '2020-10-07 05:56:51', '2020-10-07 08:29:48', NULL, ''),
(19, 3, 'СЕРВИСНЫЙ ЦЕНТР', '/service_center', '_self', NULL, '#ffffff', NULL, 5, '2020-10-07 05:57:37', '2020-10-07 08:55:33', NULL, ''),
(20, 7, 'phone', '', '_self', NULL, '#ffffff', NULL, 1, '2020-10-07 06:21:21', '2020-10-07 08:20:02', NULL, ''),
(22, 7, '+ 7 (777) 307 82 99', '+77773078299', '_self', NULL, '#ffffff', 20, 1, '2020-10-07 06:26:13', '2020-10-07 08:20:10', NULL, ''),
(23, 7, '+ 7 (707) 199 11 69', '+77071991169', '_self', NULL, '#ffffff', 20, 2, '2020-10-07 06:28:57', '2020-10-07 08:20:17', NULL, ''),
(24, 7, 'Напишите нам в WhatsApp', 'https://www.whatsapp.com/', '_self', NULL, '#ffffff', NULL, 19, '2020-10-07 07:45:08', '2020-10-07 08:20:26', NULL, ''),
(25, 4, '+7 777 307 82 99', '+77773078299', '_self', 'tel', '#ffffff', NULL, 1, '2020-10-07 08:13:04', '2020-10-07 08:30:02', NULL, ''),
(26, 4, 'Понедельник - Пятница С 10:00 до 19:00    Суббота - Воскресенье С 11:00 до 17:00', '', '_self', 'icon-time', '#ffffff', NULL, 2, '2020-10-07 08:24:09', '2020-10-07 08:51:20', NULL, ''),
(27, 4, 'Абая проспект, 138/2 3 этаж; 4 офис         Бостандыкский район, Алматы, 050046/A15H5P6', '', '_self', 'icon-mark', '#ffffff', NULL, 3, '2020-10-07 08:24:41', '2020-10-07 08:51:01', NULL, ''),
(28, 4, 'КАТЕГОРИИ', '', '_self', 'categorias', '#ffffff', NULL, 4, '2020-10-07 08:27:34', '2020-10-07 08:41:35', NULL, ''),
(29, 4, 'Компьютеры', '/computers', '_self', NULL, '#000000', 28, 1, '2020-10-07 08:29:58', '2020-10-07 08:30:02', NULL, ''),
(30, 4, 'ИНФОРМАЦИЯ', '', '_self', 'information', '#000000', NULL, 5, '2020-10-07 08:30:22', '2020-10-07 08:49:31', NULL, ''),
(31, 4, 'О нас', '', '_self', NULL, '#000000', 30, 1, '2020-10-07 08:30:36', '2020-10-07 08:30:49', NULL, ''),
(32, 4, 'Комплектующие', '/accessories', '_self', NULL, '#000000', 28, 2, '2020-10-07 08:54:09', '2020-10-07 08:55:50', NULL, ''),
(33, 4, 'Ноутбуки', '/laptop', '_self', NULL, '#000000', 28, 3, '2020-10-07 08:54:41', '2020-10-07 08:55:52', NULL, ''),
(34, 4, 'Перифирия', '/peripheral', '_self', NULL, '#000000', 28, 4, '2020-10-07 08:55:06', '2020-10-07 08:55:55', NULL, ''),
(35, 4, 'Сервисный центр', '/service_center', '_self', NULL, '#000000', 28, 5, '2020-10-07 08:55:42', '2020-10-07 08:55:59', NULL, ''),
(36, 4, 'Информация о доставке', '/information_about_delivery', '_self', NULL, '#000000', 30, 2, '2020-10-07 08:56:56', '2020-10-07 08:57:05', NULL, ''),
(37, 4, 'Политика безопасности', '/security_policy', '_self', NULL, '#000000', 30, 3, '2020-10-07 08:57:55', '2020-10-07 08:59:38', NULL, ''),
(38, 4, 'Условия соглашения', '/terms_of_agreement', '_self', NULL, '#000000', 30, 4, '2020-10-07 08:58:38', '2020-10-07 08:59:40', NULL, ''),
(39, 4, 'Личный кабинет', '/personal_area', '_self', NULL, '#000000', 30, 5, '2020-10-07 08:59:07', '2020-10-07 08:59:47', NULL, ''),
(40, 4, 'История заказов', '/order_history', '_self', NULL, '#000000', 30, 6, '2020-10-07 08:59:33', '2020-10-07 08:59:50', NULL, ''),
(41, 4, 'МЫ НА КАРТЕ', '', '_self', 'map', '#000000', NULL, 20, '2020-10-07 09:00:25', '2020-10-07 09:00:25', NULL, ''),
(46, 1, 'Category Products', '', '_self', 'voyager-categories', '#000000', 56, 3, '2020-10-08 03:30:30', '2020-10-10 08:43:24', 'voyager.category-products.index', 'null'),
(47, 1, 'Products', '', '_self', 'voyager-bag', '#000000', 56, 1, '2020-10-08 05:31:39', '2020-10-10 08:43:21', 'voyager.products.index', 'null'),
(48, 1, 'Product Images', '', '_self', 'voyager-images', '#000000', 56, 2, '2020-10-08 05:49:47', '2020-10-10 08:43:22', 'voyager.product-images.index', 'null'),
(49, 1, 'Posts', '', '_self', 'voyager-news', '#000000', NULL, 7, '2020-10-08 06:34:02', '2020-10-09 06:24:33', 'voyager.posts.index', 'null'),
(51, 1, 'Sliders', '', '_self', 'voyager-credit-cards', NULL, NULL, 5, '2020-10-09 05:42:25', '2020-10-09 05:43:58', 'voyager.sliders.index', NULL),
(54, 1, 'Category Sliders', '', '_self', 'voyager-categories', '#000000', NULL, 6, '2020-10-09 06:23:55', '2020-10-09 06:24:58', 'voyager.category-sliders.index', 'null'),
(56, 1, 'Products Settings', '', '_self', 'voyager-settings', '#000000', NULL, 10, '2020-10-10 08:41:29', '2020-10-10 08:44:00', NULL, ''),
(57, 1, 'Tag Products', '', '_self', 'voyager-tag', '#000000', 56, 4, '2020-10-10 08:47:29', '2020-10-10 08:58:00', 'voyager.tag-products.index', 'null');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-10-06 10:06:58', '2020-10-06 10:06:58');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-10-06 10:06:36', '2020-10-06 10:06:36'),
(2, 'browse_bread', NULL, '2020-10-06 10:06:36', '2020-10-06 10:06:36'),
(3, 'browse_database', NULL, '2020-10-06 10:06:36', '2020-10-06 10:06:36'),
(4, 'browse_media', NULL, '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(5, 'browse_compass', NULL, '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(6, 'browse_menus', 'menus', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(7, 'read_menus', 'menus', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(8, 'edit_menus', 'menus', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(9, 'add_menus', 'menus', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(10, 'delete_menus', 'menus', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(11, 'browse_roles', 'roles', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(12, 'read_roles', 'roles', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(13, 'edit_roles', 'roles', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(14, 'add_roles', 'roles', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(15, 'delete_roles', 'roles', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(16, 'browse_users', 'users', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(17, 'read_users', 'users', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(18, 'edit_users', 'users', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(19, 'add_users', 'users', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(20, 'delete_users', 'users', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(21, 'browse_settings', 'settings', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(22, 'read_settings', 'settings', '2020-10-06 10:06:37', '2020-10-06 10:06:37'),
(23, 'edit_settings', 'settings', '2020-10-06 10:06:38', '2020-10-06 10:06:38'),
(24, 'add_settings', 'settings', '2020-10-06 10:06:38', '2020-10-06 10:06:38'),
(25, 'delete_settings', 'settings', '2020-10-06 10:06:38', '2020-10-06 10:06:38'),
(26, 'browse_hooks', NULL, '2020-10-06 10:06:41', '2020-10-06 10:06:41'),
(27, 'browse_categories', 'categories', '2020-10-06 10:06:53', '2020-10-06 10:06:53'),
(28, 'read_categories', 'categories', '2020-10-06 10:06:53', '2020-10-06 10:06:53'),
(29, 'edit_categories', 'categories', '2020-10-06 10:06:53', '2020-10-06 10:06:53'),
(30, 'add_categories', 'categories', '2020-10-06 10:06:53', '2020-10-06 10:06:53'),
(31, 'delete_categories', 'categories', '2020-10-06 10:06:53', '2020-10-06 10:06:53'),
(37, 'browse_pages', 'pages', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(38, 'read_pages', 'pages', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(39, 'edit_pages', 'pages', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(40, 'add_pages', 'pages', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(41, 'delete_pages', 'pages', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(57, 'browse_category_products', 'category_products', '2020-10-08 03:30:30', '2020-10-08 03:30:30'),
(58, 'read_category_products', 'category_products', '2020-10-08 03:30:30', '2020-10-08 03:30:30'),
(59, 'edit_category_products', 'category_products', '2020-10-08 03:30:30', '2020-10-08 03:30:30'),
(60, 'add_category_products', 'category_products', '2020-10-08 03:30:30', '2020-10-08 03:30:30'),
(61, 'delete_category_products', 'category_products', '2020-10-08 03:30:30', '2020-10-08 03:30:30'),
(62, 'browse_products', 'products', '2020-10-08 05:31:39', '2020-10-08 05:31:39'),
(63, 'read_products', 'products', '2020-10-08 05:31:39', '2020-10-08 05:31:39'),
(64, 'edit_products', 'products', '2020-10-08 05:31:39', '2020-10-08 05:31:39'),
(65, 'add_products', 'products', '2020-10-08 05:31:39', '2020-10-08 05:31:39'),
(66, 'delete_products', 'products', '2020-10-08 05:31:39', '2020-10-08 05:31:39'),
(67, 'browse_product_images', 'product_images', '2020-10-08 05:49:47', '2020-10-08 05:49:47'),
(68, 'read_product_images', 'product_images', '2020-10-08 05:49:47', '2020-10-08 05:49:47'),
(69, 'edit_product_images', 'product_images', '2020-10-08 05:49:47', '2020-10-08 05:49:47'),
(70, 'add_product_images', 'product_images', '2020-10-08 05:49:47', '2020-10-08 05:49:47'),
(71, 'delete_product_images', 'product_images', '2020-10-08 05:49:47', '2020-10-08 05:49:47'),
(72, 'browse_posts', 'posts', '2020-10-08 06:34:02', '2020-10-08 06:34:02'),
(73, 'read_posts', 'posts', '2020-10-08 06:34:02', '2020-10-08 06:34:02'),
(74, 'edit_posts', 'posts', '2020-10-08 06:34:02', '2020-10-08 06:34:02'),
(75, 'add_posts', 'posts', '2020-10-08 06:34:02', '2020-10-08 06:34:02'),
(76, 'delete_posts', 'posts', '2020-10-08 06:34:02', '2020-10-08 06:34:02'),
(82, 'browse_sliders', 'sliders', '2020-10-09 05:42:25', '2020-10-09 05:42:25'),
(83, 'read_sliders', 'sliders', '2020-10-09 05:42:25', '2020-10-09 05:42:25'),
(84, 'edit_sliders', 'sliders', '2020-10-09 05:42:25', '2020-10-09 05:42:25'),
(85, 'add_sliders', 'sliders', '2020-10-09 05:42:25', '2020-10-09 05:42:25'),
(86, 'delete_sliders', 'sliders', '2020-10-09 05:42:25', '2020-10-09 05:42:25'),
(92, 'browse_category_slider', 'category_slider', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(93, 'read_category_slider', 'category_slider', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(94, 'edit_category_slider', 'category_slider', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(95, 'add_category_slider', 'category_slider', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(96, 'delete_category_slider', 'category_slider', '2020-10-09 06:20:56', '2020-10-09 06:20:56'),
(97, 'browse_category_sliders', 'category_sliders', '2020-10-09 06:23:55', '2020-10-09 06:23:55'),
(98, 'read_category_sliders', 'category_sliders', '2020-10-09 06:23:55', '2020-10-09 06:23:55'),
(99, 'edit_category_sliders', 'category_sliders', '2020-10-09 06:23:55', '2020-10-09 06:23:55'),
(100, 'add_category_sliders', 'category_sliders', '2020-10-09 06:23:55', '2020-10-09 06:23:55'),
(101, 'delete_category_sliders', 'category_sliders', '2020-10-09 06:23:55', '2020-10-09 06:23:55'),
(102, 'browse_tag_product', 'tag_product', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(103, 'read_tag_product', 'tag_product', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(104, 'edit_tag_product', 'tag_product', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(105, 'add_tag_product', 'tag_product', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(106, 'delete_tag_product', 'tag_product', '2020-10-10 08:38:38', '2020-10-10 08:38:38'),
(107, 'browse_tag_products', 'tag_products', '2020-10-10 08:47:29', '2020-10-10 08:47:29'),
(108, 'read_tag_products', 'tag_products', '2020-10-10 08:47:29', '2020-10-10 08:47:29'),
(109, 'edit_tag_products', 'tag_products', '2020-10-10 08:47:29', '2020-10-10 08:47:29'),
(110, 'add_tag_products', 'tag_products', '2020-10-10 08:47:29', '2020-10-10 08:47:29'),
(111, 'delete_tag_products', 'tag_products', '2020-10-10 08:47:29', '2020-10-10 08:47:29');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-06 10:06:57', '2020-10-06 10:06:57'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n                <h2>We can use all kinds of format!</h2>\r\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-06 10:06:57', '2020-10-06 10:06:57'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-06 10:06:57', '2020-10-06 10:06:57'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-06 10:06:57', '2020-10-06 10:06:57');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `specifications` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `availability` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` int(11) DEFAULT 1,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'publish',
  `count` int(11) DEFAULT 1,
  `code` int(11) NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `specifications`, `description`, `availability`, `price`, `status`, `count`, `code`, `tag`, `title`, `old_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ноутбук Lenovo G505s', 'устройство начального уровня, и в попытке сделать цену ещё ниже производители продают свой аппарат без предустановленной ОС Windows.  Созданный из чёрного пластика, необычайно тонкий ноутбук, габариты которого равны 26x38x2,6 мм, а вес составляет 2,4 кг, оснащён глянцевым 15,6-дюймовым TN+Film-экраном с разрешением 1366x768.  Lenovo G505s базируется на процессоре A10-5750M от AMD. Чип оснащён 4-мя ядрами и 4-Мб кэшем L2, построен на Trinity-архитектуре и способен разгоняться до 3,5 ГГц, при этом в обычном режиме работая на частоте 2,5 ГГц. Производительности агрегату добавляет 4-Гб модуль оперативной памяти DDR3L-типа с частотой шины 1600 МГц. При необходимости этот объём можно расширить до 16 Гб. А вот расширять объём жёсткого диска понадобится вряд ли, ведь его ёмкость составляет 1 Тб. Порадует ценителей и 2-Гб дискретная графика.  В комплекте к Lenovo G505s вы получите пакет документов, кабель и блок питания, диск с программным обеспечением и аккумулятор.  РЕКОМЕНДУЕМ', 'Общие характеристики', 'В наличии', 4554, 'publish', 545, 867468, 'new', 'USB-гарнитура с настраиваемой                     Razer Chroma подсветкой ушек', 567878, NULL, '2020-10-08 07:36:54');

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"product-images\\\\October2020\\\\XJaopQn4VSIWRe9ryHzK.png\"]', '2020-10-08 05:56:00', '2020-10-09 04:23:56');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-10-06 10:06:35', '2020-10-06 10:06:35'),
(2, 'user', 'Normal User', '2020-10-06 10:06:36', '2020-10-06 10:06:36');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'E-shop', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 3, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\October2020\\0d5omasxgMUhP65mlOOQ.png', '', 'image', 2, 'Site'),
(4, 'admin.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Admin'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(12, 'site.footer_logo', 'Footer Logo', 'settings\\October2020\\BUPWi1qUnwgwC2Bzobgw.png', NULL, 'image', 6, 'Site'),
(22, 'site.slider_prev_arrow', 'Slider Prev Arrow', 'icon-brands-prev', '{\r\n    \"default\" : \"icon-brands-prev\",\r\n    \"options\": { \r\n        \"icon-brands-prev\": \"Left\", \r\n        \"icon-left-prev-2\": \"Left 2\",\r\n        \"icon-left-prev-3\": \"Left 3\" \r\n    }\r\n}', 'select_dropdown', 7, 'Site'),
(23, 'site.slider_next_arrow', 'Slider Next Arrow', 'icon-brands-next', '{\r\n    \"default\" : \"icon-brands-next\",\r\n    \"options\" : {\r\n        \"icon-brands-next\": \"Right\",\r\n        \"icon-right-prev-2\": \"Right 2\",\r\n        \"icon-right-prev-3\": \"Right 3\"\r\n    }\r\n}', 'select_dropdown', 8, 'Site');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `background` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `info`, `button`, `background`, `image`, `fon_image`, `slider_id`, `created_at`, `updated_at`) VALUES
(1, 'сборка компьютера', 'мы поможем подобрать сборку по вашим параметрам', 'подробнее', 'sliders\\October2020\\10yaefz9bNw4Nr1k78mk.png', 'sliders\\October2020\\wVMZRfdmeUvCWDYuI5uu.png', 'sliders\\October2020\\pkLMtgSSt28WXzzO6BrP.png', 2, '2020-10-09 06:49:00', '2020-10-09 06:50:10'),
(2, 'сборка компьютера 2', 'мы поможем подобрать сборку по вашим параметрам', 'подробнее', 'sliders\\October2020\\coZP5AnrvpagLm70JUEP.png', 'sliders\\October2020\\l0CRbdeBlQmQPMKjV653.png', 'sliders\\October2020\\oCsRkwyf1ZY7Do64fyOx.png', 2, '2020-10-09 09:09:52', '2020-10-09 09:09:52'),
(3, 'gigabyte', NULL, NULL, NULL, 'sliders\\October2020\\CdGTkyZHdZueFn7xo002.png', NULL, 6, '2020-10-10 04:34:00', '2020-10-10 04:37:04'),
(4, 'gamemax', NULL, NULL, NULL, 'sliders\\October2020\\ZVZaGdMKANhENNQyM0RG.png', NULL, 6, '2020-10-10 05:25:11', '2020-10-10 05:25:11'),
(5, 'asus', NULL, NULL, NULL, 'sliders\\October2020\\ymouwyJOCpyq6lhgYRa3.png', NULL, 6, '2020-10-10 05:25:40', '2020-10-10 05:25:40'),
(6, 'asrock', NULL, NULL, NULL, 'sliders\\October2020\\0DX62ulAZ1HnjTE20g4j.png', NULL, 6, '2020-10-10 05:26:05', '2020-10-10 05:26:05'),
(7, 'intel', NULL, NULL, NULL, 'sliders\\October2020\\g6Lyhbjgc0ry251zdQqX.png', NULL, 6, '2020-10-10 05:26:21', '2020-10-10 05:26:21');

-- --------------------------------------------------------

--
-- Структура таблицы `tag_products`
--

CREATE TABLE `tag_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'publish',
  `cat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tag_products`
--

INSERT INTO `tag_products` (`id`, `name`, `status`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'игровые', 'publish', 1, NULL, '2020-10-12 03:17:01');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-10-06 10:06:58', '2020-10-06 10:06:58'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-10-06 10:06:59', '2020-10-06 10:06:59'),
(22, 'menu_items', 'title', 13, 'pt', 'Publicações', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(24, 'menu_items', 'title', 12, 'pt', 'Categorias', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(25, 'menu_items', 'title', 14, 'pt', 'Páginas', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-10-06 10:07:00', '2020-10-06 10:07:00'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-10-06 10:07:00', '2020-10-06 10:07:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$p9pbHjgxBIbNU8azJe7o1.Mu62HkT3RAAL9k1tKeM1x1x.Kibsqlq', 'u2xenzvnVVkktaALdJJyPEufhuRv8TwlFgcAilBM54QTfqf5HSuf7UtCh7UJ', NULL, '2020-10-06 10:06:55', '2020-10-06 10:06:55'),
(2, 1, 'ed', 'e@gmail.com', 'users\\October2020\\MzvhZVoIp4EohO5ufc54.png', NULL, '$2y$10$7Ps.EOgILaoYuuqCqOq7GeOqvL8iD.odC12JZwh2PS.W2ZMmS40OS', NULL, '{\"locale\":\"en\"}', '2020-10-06 10:22:00', '2020-10-06 10:22:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(2, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_sliders`
--
ALTER TABLE `category_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag_products`
--
ALTER TABLE `tag_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category_sliders`
--
ALTER TABLE `category_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tag_products`
--
ALTER TABLE `tag_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
