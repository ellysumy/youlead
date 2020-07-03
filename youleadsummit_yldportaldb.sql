-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2020 at 06:29 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youleadsummit_yldportaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proffessional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youlead_alumin_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socila_media_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `community` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `first_name`, `last_name`, `job_title`, `gender`, `proffessional`, `youlead_alumin_status`, `city`, `approved_status`, `role`, `country`, `socila_media_links`, `biography`, `community`) VALUES
(1, '1592693075.jpg', 'ellysumy@gmail.com', '2020-06-20 07:08:01', '$2y$10$LSeSpYPYekC1pLZ29V02AuiNvtELHyCKoegsoXXda0HJzAZQNOOkm', NULL, '2020-06-20 07:06:19', '2020-06-20 20:01:58', 'Elibariki', 'Sumari', 'IT', NULL, NULL, NULL, 'Arusha', NULL, '1', 'Tanzania', NULL, 'When you start designing the first mockup of your website, a landing page, or an ad copy, you might need to add some placeholder text to get an overall look and feel of your design. Right?  Placeholder text helps outline the visual elements of your design. The requirements change per your design – at times you may just need a line of text, and in some cases, you will need loads of paragraphs. But, where do you get these so-called ‘placeholder text’.  At Yasza Media, we developed a tool that allows you to generate as many placeholder text infills as you need. It is a great tool for designers, webmasters, or any content creators. We have built this lorem ipsum generator in a way that everyone can benefit from it, and that too without paying a penny. You decide how much text you want and how you want it.  Sounds awesome, isn’t it? Before you begin using this tool, here’s a quick background about our lorem ipsum generator tool.', NULL),
(12, '1592780094.jpg', 'sumarie@mstcdc.or.tz', NULL, '$2y$10$JMpyRUfYQxBAY0wM3oFKVeLdraIb.GVakg2tE7wRMKZMjn81UZCYm', NULL, '2020-06-20 20:06:21', '2020-06-21 19:54:54', 'Gilbert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(13, 'default.jpg', 'test@test.test', NULL, '$2y$10$fJ8kXmxNrTvUCO.HNr4RDeRaZHcU5lS8Ar7pHIk68mw3SHL6rbu3S', NULL, '2020-06-22 03:16:04', '2020-06-22 03:16:04', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(14, 'default.jpg', 'testt@tetet.tette', NULL, '$2y$10$ZsLaYEDA0x36GIHJc8ffDeGy.EdeZmbRNM6OheTtVy19rv9IN8Mpm', NULL, '2020-06-22 11:07:51', '2020-06-22 11:07:51', 'Test2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(15, 'default.jpg', 'atuyambe2010@gmail.com', '2020-06-23 04:41:22', '$2y$10$F0pVS1pn89kZqVOOzILMTuD24UHsgW11pVlV5Agtz7YC2P4KbxB5K', 'TwHq0Q8xhJvnul2RcyT71cpgz31ygBgWbnih1R5MOtukD6iIAnaOrMOCoFx2', '2020-06-23 04:40:12', '2020-06-23 04:41:22', 'Ivan Atuyambe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(16, '1593008324.png', 'elsu@ms.dk', '2020-06-23 04:41:22', '$2y$10$mNDh2xyX0qqgfpfiGWr9L./eWGAtBIfa.psg6NmyvJHcGh3yB1jnS', NULL, '2020-06-24 09:00:05', '2020-06-24 14:18:44', 'Mkali', 'Wao', 'IT consultancy', 'on', NULL, 'on', 'Arusha', NULL, '0', 'Tanzania', NULL, 'Its guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since thenIts guru at there working there for there since then', 'Secretariates'),
(17, '1593089017.jpg', 'richiestz.rs@gmail.com', '2020-06-25 10:04:16', '$2y$10$66YUDqzfMFtcItMe.eH7nOiALwmAHvLtTUZqRlxbN7mTmA5h3G/Ye', 'NqVA1xp9Vk5jJYqHPHplrkCcTGs8EXhLObxLXnRylbbdoWEu7FxwUSilk0ue', '2020-06-25 09:57:53', '2020-07-02 15:56:09', 'Richard', 'Shirima', 'Managing', 'Male', NULL, 'No', 'Arusha', NULL, '0', 'Tanzania', NULL, NULL, 'Secretariates'),
(18, 'default.jpg', 'atuyambei@mstcdc.or.tz', NULL, '$2y$10$nP6qULmWK3eMB1Jr.PwbIOYj/wxzRSJtusVQfywdQBNt3rlTM78.C', NULL, '2020-07-02 15:39:30', '2020-07-02 15:39:30', 'iva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
