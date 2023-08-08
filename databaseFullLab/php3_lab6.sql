-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 08, 2023 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3_lab6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('conghcpd06942@fpt.edu.vn', '$2y$10$pLmnquaD4rDRvvOmmbF2Bu1QppdH0kngjzYcVFwoBnZYCmjWHV5Cy', '2023-07-27 10:24:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgroup` int(11) NOT NULL DEFAULT 0,
  `nghenghiep` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `diachi`, `idgroup`, `nghenghiep`) VALUES
(1, 'Miss Hilma Ward', 'vlittel@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qrnJSSU0Hq', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(2, 'Hershel Mohr', 'angelita.koepp@example.com', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'exNRrXrYtd', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(3, 'Katlyn Klocko', 'richmond.huels@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2BbjQ6qSJN', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(4, 'Prof. Mathew Daniel', 'vsipes@example.org', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eE1wEMUUbv', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(5, 'Skye Daugherty', 'ruthie69@example.org', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FJ7bhuHzjZ', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(6, 'Adrain Grant', 'llewellyn.adams@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uSa7boxikm', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(7, 'Kevin Koelpin', 'anjali.strosin@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gC8Ng36hfF', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(8, 'Dexter Herzog', 'lkshlerin@example.org', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4y92SLHej0', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(9, 'Presley Tremblay', 'fmclaughlin@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tExLfmkn7p', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(10, 'Miss Serenity Quitzon', 'odavis@example.net', '2023-07-27 10:04:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H55VNGIJos', '2023-07-27 10:04:57', '2023-07-27 10:04:57', NULL, 0, NULL),
(11, 'Vui Từng Phút Giây', 'vuiqua@gmail.com', NULL, '$2y$10$tZe5fksyVIvSv3D2dEL.TuAijWdzFJrt8QzXkSyyktr7EHRCMBmjm', NULL, NULL, NULL, 'TPHCM', 1, NULL),
(12, 'Buồn Từng Phút Giây', 'buonqua@gmail.com', NULL, '$2y$10$TnB2uPRV4BkUHpx3T.F.neWFv58Q0AnTO/W3zC0lqWdOBTFeoioiC', NULL, NULL, NULL, 'TPHCM', 1, NULL),
(13, 'Nguyen Thi Gia Hu', 'giahu@gmail.com', NULL, '$2y$10$K9vCLJGCK39NRDIWTNvSQe6YKRA6R7Fo6fMLkxAhgKwb1GbeXyICi', NULL, NULL, NULL, 'HN', 0, NULL),
(14, 'Hồ Chí Công', 'conghcpd06942@fpt.edu.vn', NULL, '$2y$10$fG7HT.bbf/OqPTKGcyk7E.GRFNWyHDQ9mlTWhov0XAQsfqIOijcX.', NULL, '2023-07-27 10:23:38', '2023-07-27 10:23:38', NULL, 0, NULL),
(15, 'Võ Quý Đức', 'voquyduc2003@gmail.com', NULL, '$2y$10$6hQaUVMdisCHFbMwPxFgN.IZhNopMSW0mJRn1rJwOm/D97y4ih70u', 'MDAbi7J7NCtNAE0SnG8uyIbyJs267pE9E3Ej8cLkrw3Wf6nyXgylD20xgtov', '2023-07-27 10:27:14', '2023-08-07 13:02:49', NULL, 1, 'gggg'),
(16, 'Trần Văn Tiến', 'tien12345@gmail.com', NULL, '$2y$10$VfeLpT3u1ZswDhupvWiJQ.2rBpU7POoj3KrffMkvZeiufhCx3D7aG', NULL, '2023-07-27 12:29:39', '2023-07-27 12:29:52', NULL, 0, 'giao hang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
