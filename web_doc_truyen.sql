-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql108.byetcluster.com
-- Thời gian đã tạo: Th12 15, 2025 lúc 07:44 PM
-- Phiên bản máy phục vụ: 11.4.7-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `if0_40292902_web_doc_truyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `chuong_id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL,
  `so_chuong` int(11) NOT NULL,
  `ten_chuong` varchar(255) DEFAULT NULL,
  `noi_dung` longtext NOT NULL,
  `ngay_dang` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong`
--

INSERT INTO `chuong` (`chuong_id`, `truyen_id`, `so_chuong`, `ten_chuong`, `noi_dung`, `ngay_dang`) VALUES
(1, 1, 1, 'Khởi đầu của thanh kiếm', 'Nội dung chương 1...', '2025-12-15 13:36:49'),
(2, 1, 2, 'Lời thề trong bình minh', 'Nội dung chương 2...', '2025-12-15 13:36:49'),
(3, 2, 1, 'Ánh trăng nhuốm máu', 'Nội dung chương 1...', '2025-12-15 13:36:49'),
(4, 2, 2, 'Khúc hát bị lãng quên', 'Nội dung chương 2...', '2025-12-15 13:36:49'),
(5, 3, 1, 'Ta là phản diện?', 'Nội dung chương 1...', '2025-12-15 13:36:49'),
(6, 3, 2, 'Kịch bản đã thay đổi', 'Nội dung chương 2...', '2025-12-15 13:36:49'),
(7, 4, 1, 'Hư vô thức tỉnh', 'Nội dung chương 1...', '2025-12-15 13:36:49'),
(8, 4, 2, 'Biên giới của vũ trụ', 'Nội dung chương 2...', '2025-12-15 13:36:49'),
(9, 5, 1, 'Triệu hồi cuối cùng', 'Nội dung chương 1...', '2025-12-15 13:36:49'),
(10, 6, 1, 'Học viện bóng tối', 'Nội dung chương 1...', '2025-12-15 13:36:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_su_doc`
--

CREATE TABLE `lich_su_doc` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL,
  `chuong_id` int(11) NOT NULL,
  `thoi_gian_doc` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lich_su_doc`
--

INSERT INTO `lich_su_doc` (`id`, `user_id`, `truyen_id`, `chuong_id`, `thoi_gian_doc`) VALUES
(1, 1, 1, 1, '2025-12-15 13:37:00'),
(2, 1, 1, 2, '2025-12-15 13:37:00'),
(3, 1, 1, 2, '2025-12-15 13:37:00'),
(4, 1, 2, 1, '2025-12-15 13:37:00'),
(5, 1, 2, 1, '2025-12-15 13:37:00'),
(6, 1, 3, 1, '2025-12-15 13:37:00'),
(7, 1, 3, 2, '2025-12-15 13:37:00'),
(8, 1, 3, 2, '2025-12-15 13:37:00'),
(9, 1, 3, 2, '2025-12-15 13:37:00'),
(10, 1, 4, 1, '2025-12-15 13:37:00'),
(11, 1, 5, 1, '2025-12-15 13:37:00'),
(12, 1, 5, 1, '2025-12-15 13:37:00'),
(13, 1, 5, 1, '2025-12-15 13:37:00'),
(14, 1, 6, 1, '2025-12-15 13:37:00'),
(15, 1, 1, 1, '2025-12-15 13:44:22'),
(16, 1, 1, 2, '2025-12-15 13:44:24'),
(17, 1, 1, 1, '2025-12-15 13:44:25'),
(18, 1, 1, 1, '2025-12-15 13:45:58'),
(19, 1, 1, 1, '2025-12-15 13:46:01'),
(20, 1, 1, 1, '2025-12-15 13:46:40'),
(21, 1, 1, 2, '2025-12-15 13:46:47'),
(22, 1, 1, 1, '2025-12-15 13:46:49'),
(23, 1, 1, 1, '2025-12-15 13:47:01'),
(24, 1, 1, 2, '2025-12-15 13:47:10'),
(25, 1, 1, 1, '2025-12-15 13:50:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `truyen_id` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `tac_gia` varchar(100) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `anh_bia` varchar(255) DEFAULT NULL,
  `trang_thai` enum('dang_tien_hanh','hoan_thanh','tam_ngung') DEFAULT 'dang_tien_hanh',
  `ngay_tao` timestamp NULL DEFAULT current_timestamp(),
  `ngay_cap_nhat` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`truyen_id`, `tieu_de`, `tac_gia`, `mo_ta`, `anh_bia`, `trang_thai`, `ngay_tao`, `ngay_cap_nhat`) VALUES
(1, 'Sword of Dawn', 'Aether Lin', 'Một thiếu niên thức tỉnh sức mạnh cổ đại và bước vào thế giới kiếm thuật.', 'https://i.imgur.com/Z7AzH2c.jpeg', 'dang_tien_hanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30'),
(2, 'Moonlit Requiem', 'Silver Crow', 'Khúc ca dưới ánh trăng của một pháp sư bị nguyền rủa.', 'https://i.imgur.com/vxZPppI.jpeg', 'dang_tien_hanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30'),
(3, 'Reborn as a Villain', 'DarkQuill', 'Trọng sinh thành phản diện trong tiểu thuyết mình từng đọc.', 'https://i.imgur.com/w9YI5l3.jpeg', 'dang_tien_hanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30'),
(4, 'Chronicles of the Void', 'Nox Aster', 'Hành trình khám phá vũ trụ và bản chất của hư vô.', 'https://i.imgur.com/9YcF2JZ.jpeg', 'hoan_thanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30'),
(5, 'The Last Summoner', 'Iris Flame', 'Triệu hồi sư cuối cùng chống lại sự diệt vong của nhân loại.', 'https://i.imgur.com/JN9RkZL.jpeg', 'dang_tien_hanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30'),
(6, 'Academy of Shadows', 'Night Owl', 'Học viện nơi bóng tối mạnh hơn ánh sáng.', 'https://i.imgur.com/3FQkKcF.jpeg', 'dang_tien_hanh', '2025-12-15 13:36:30', '2025-12-15 13:36:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `role`, `created_at`) VALUES
(1, 'testuser', '123456', 'test@example.com', 'Test User', 'user', '2025-12-15 13:37:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `truyen_id` (`truyen_id`);

--
-- Chỉ mục cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`chuong_id`),
  ADD KEY `truyen_id` (`truyen_id`);

--
-- Chỉ mục cho bảng `lich_su_doc`
--
ALTER TABLE `lich_su_doc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `truyen_id` (`truyen_id`),
  ADD KEY `chuong_id` (`chuong_id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`truyen_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuong`
--
ALTER TABLE `chuong`
  MODIFY `chuong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lich_su_doc`
--
ALTER TABLE `lich_su_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `truyen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
