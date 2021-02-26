-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) DEFAULT 1,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `ship` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`, `amount`, `user`, `address`, `phone`, `ship`, `created_at`, `updated_at`) VALUES
(3, 'Áo thun trễ vai', '1611647707_pro_nau_3_68cac868152343bcaca151d8b084f86d_large.jpg', 100, 1, 'Nguyenvanlinh506@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 1, '2021-02-24 05:10:00', '2021-02-24 07:05:17'),
(4, 'Đầm bút chì', '1611647523_pro_hong_1_d312760203024075b1ae0a42a7a25391_large.jpg', 8, 1, 'Nguyenvanlinh506@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 1, '2021-02-24 05:10:14', '2021-02-24 07:33:02'),
(5, 'Áo len form ôm', '1611647610_pro_da_3_6d27efc076364f5494a1210ef91a83e5_large.jpg', 5, 1, 'Nguyenvanlinh506@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 1, '2021-02-24 07:32:49', '2021-02-24 13:37:20'),
(6, 'Áo thun trễ vai', '1611647707_pro_nau_3_68cac868152343bcaca151d8b084f86d_large.jpg', 100, 10, 'test@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 0, '2021-02-24 13:37:04', '2021-02-24 13:37:04'),
(7, 'Áo thun trễ vai', '1611647707_pro_nau_3_68cac868152343bcaca151d8b084f86d_large.jpg', 8, 1, 'Nguyenvanlinh506@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 0, '2021-02-25 14:04:21', '2021-02-25 14:04:21'),
(8, 'Áo len form ôm', '1611647610_pro_da_3_6d27efc076364f5494a1210ef91a83e5_large.jpg', 10, 1, 'test@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 0, '2021-02-25 14:08:15', '2021-02-25 14:08:15'),
(9, 'Đầm bút chì', '1611647523_pro_hong_1_d312760203024075b1ae0a42a7a25391_large.jpg', 8, 1, 'Nguyenvanlinh506@gmail.com', 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 337468363, 1, '2021-02-25 14:09:04', '2021-02-25 14:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'male', NULL, NULL),
(2, 'female', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `men` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `women` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `header`, `slide1`, `slide2`, `slide3`, `banner1`, `banner2`, `men`, `women`, `created_at`, `updated_at`) VALUES
(1, '1614240369_img_body_top.jpg', '1614240604_young-teen-woman-sunglasses-hat-holding-shopping-bags-her-hands-feeling-so-happiness-isolated-green-wall.jpg', '1614240604_atikh-bana-_KaMTEmJnxY-unsplash.jpg', '1614240612_slider_left_3.jpg', '1614240870_pretty-young-stylish-sexy-woman-pink-luxury-dress-summer-fashion-trend-chic-style-sunglasses-blue-studio-background-shopping-holding-paper-bags-talking-mobile-phone-shopaholic.jpg', '1614241382_tamara-bellis-AreMq4SKhPA-unsplash.jpg', '1614241359_men-7.jpg', '1614241359_alex-shaw-wYx1TABUWy0-unsplash.jpg', '2021-02-24 22:17:59', '2021-02-25 01:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_30_073253_gender', 1),
(5, '2020_12_30_073311_product_category', 1),
(6, '2020_12_30_073323_product', 1),
(7, '2021_02_24_041059_cart', 2),
(8, '2021_02_24_043123_cart', 3),
(9, '2021_02_24_115633_cart', 4),
(10, '2021_02_24_120520_create_users_table', 5),
(11, '2021_02_24_204228_image', 6),
(12, '2021_02_24_210011_image', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT 1,
  `selled` int(11) DEFAULT 0,
  `discount` int(11) DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `description`, `amount`, `selled`, `discount`, `hot`, `gender_id`, `product_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Quần culotte', '1611647536_pro_hong_4_9daff34ab21245d6993e8557c3401f47_large.jpg', 5, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 1, 0, 0, 1, 2, 1, NULL, '2021-01-26 00:54:09'),
(2, 'Đầm bút chì', '1611647523_pro_hong_1_d312760203024075b1ae0a42a7a25391_large.jpg', 8, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 3, 0, 10, 1, 2, 1, NULL, '2021-01-26 00:54:15'),
(3, 'Đầm tay phồng', '1611647563_pro_hong_1_7382e830f29842a38dd4cef102f26ae7_large.jpg', 15, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 20, 0, 5, 0, 2, 1, NULL, '2021-01-26 00:54:22'),
(4, 'Đầm hai dây', '1611647594_pro_hong_1_c7235d117dd642e4b285913368043f2e_large.jpg', 10, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 0, 2, 1, NULL, '2021-01-26 00:54:32'),
(5, 'Áo len form ôm', '1611647610_pro_da_3_6d27efc076364f5494a1210ef91a83e5_large.jpg', 5, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 1, 0, 0, 1, 2, 2, NULL, '2021-01-26 00:54:45'),
(6, 'Áo thun trễ vai', '1611647707_pro_nau_3_68cac868152343bcaca151d8b084f86d_large.jpg', 8, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 3, 0, 10, 1, 2, 2, NULL, '2021-01-26 00:55:07'),
(7, 'Váy mini xếp ly', '1611647729_pro_hong_1_c7235d117dd642e4b285913368043f2e_large.jpg', 15, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 20, 0, 5, 0, 2, 1, NULL, '2021-01-26 00:55:29'),
(8, 'Áo sơ mi cổ trụ', '1611647748_pro_nau_1_ff5bc0af8a9345e7bf18f711079299f3_large (1).jpg', 50, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 0, 2, 2, NULL, '2021-01-26 00:55:48'),
(9, 'Áo khoác jean', '1611647769_mausac_mgrey_10f20dja016__1__52fa741b4ee44b17820e3726bdd263ba_1024x1024.jpg', 5, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 1, 0, 0, 1, 1, 2, NULL, '2021-01-26 00:56:09'),
(10, 'Áo sơ mi dài', '1611647785_mausac_black_10f20dsh008__1__2e93d9b395ca451b81ed8af49b9e49e7_1024x1024.jpg', 8, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 3, 0, 10, 1, 1, 2, NULL, '2021-01-26 00:56:25'),
(11, 'Áo sơ mi kẻ', '1611647799_mausac_white_10f20shl007__1__e5d5e6d661754bd2b1bc47cd7e8b7d08_1024x1024.jpg', 15, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 20, 0, 5, 0, 1, 2, NULL, '2021-01-26 00:56:39'),
(12, 'Áo thun tay ngắn', '1611647811_mausac_black_10f20tsh019__1__699117abef874a4cb25a4f8e8f88cd80_1024x1024.jpg', 50, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 0, 1, 2, NULL, '2021-01-26 00:56:51'),
(13, 'Quần Jean rách', '1611647823_mausac_black_10f20dpa066__1__625e035344054292acd1b25c085ee70f_1024x1024.jpg', 24, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 1, 1, 1, NULL, '2021-01-26 00:57:03'),
(14, 'Quần jean trơn', '1611647834_mausac_mindigo_10f20dpa055__1__44f614c700e548b4bcf6e262ff3353bd_1024x1024.jpg', 80, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 0, 1, 1, NULL, '2021-01-26 00:57:14'),
(15, 'Quần vải lưng thun', '1611647843_mausac_black_10f20pfo007__1__69cccff598c74a51bb157c1c0714085f_1024x1024.jpg', 40, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 1, 1, 1, NULL, '2021-01-26 00:57:29'),
(16, 'Quần short', '1611647859_mausac_beige_10f20psh012__1__1e2f90d17a044dc7864e48b2a56e6950_1024x1024.jpg', 10, 'Hàng nhập khẩu, chất lượng cao, giá rẻ, uy tín số 1', 5, 0, 0, 0, 1, 1, NULL, '2021-01-26 00:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'shirt', NULL, NULL),
(2, 'pants', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` int(11) DEFAULT 0,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `cart`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Linh', 'Nguyenvanlinh506@gmail.com', '$2y$10$M.DgjY2x5n0aE1ugQI.Y7OsGFnv/JQxdI6kn7FQrC09hByNpuPXMu', 337468363, 'Đường Kinh Dương Vương, chung cư siêu thị Kinh Bắc, khu C, số nhà 57', 0, 1, NULL, '2021-02-24 05:05:57', '2021-02-24 05:05:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_gender_id_foreign` (`gender_id`),
  ADD KEY `product_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `product_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
