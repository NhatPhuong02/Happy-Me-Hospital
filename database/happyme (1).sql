-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2023 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `happyme`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `m_quantity` char(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `m_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `m_pic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_firstName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_lastName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_phone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_gender` enum('Male','Female','Order') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_address` varchar(400) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_avatar` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`u_id`, `u_firstName`, `u_lastName`, `u_phone`, `u_email`, `u_password`, `u_gender`, `u_role`, `u_address`, `u_avatar`) VALUES
(10, 'ADMIN', 'ADMIN', '0906919685', 'admin@gmail.com', '$2y$10$O0ZQ2nEHVzYBP03TfkxQ2ueHlAog24IHlceSUH.D/4DmDwlyEbbHm', 'Male', 'admin', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'admin.png'),
(11, 'PATIENT', 'PATIENT', '0906919685', 'patient@gmail.com', '$2y$10$sNzCb0oQ5zeDJk6lx4Lb.uq4Oj4dRPbtD7h3/rqOOhEpUw.m/RYYe', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(12, 'THERAPIST', 'THERAPIST', '0906919685', 'therapist@gmail.com', '$2y$10$wRs/WzznRblptrA9x1BBY.SfDFin8vEWO6sDaoQtogEyMBVT52Iti', 'Male', 'therapist', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(13, 'HELLO', 'HELLO', '0906919685', 'hello@gmail.com', '$2y$10$myiYCtH3H1yg4mS47lIzfOZTq4fGcn9B4kLhuUjjEcVqa7I0KzviW', 'Female', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(14, 'TUAN', 'HưNG', '0906919685', 'baemin@gmail.com', '$2y$10$lNg3q6Lex0T3khWwVGbDl.tl56vpj2XMOQEjlf8p/s2EO4x3nCgm2', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(15, 'MINH', 'BUII', '0906919685', 'buii@gmail.com', '$2y$10$FCWcU.IalkeVhEmg9gHDgekSHvEqg5Ezosalr6DKB4dINiFr9.h5m', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_password` (`u_password`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
