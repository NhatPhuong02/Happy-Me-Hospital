-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2023 lúc 08:23 AM
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_firstName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_lastName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_phone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_gender` enum('Male','Female','Order') COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;


CREATE TABLE `medicine` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `m_quantity` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `m_price` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `m_pic` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
)
--
-- Đang đổ dữ liệu cho bảng `users`
--

-- INSERT INTO `users` (`u_id`, `u_firstName`, `u_lastName`, `u_phone`, `u_email`, `u_password`, `u_gender`, `u_role`) VALUES
-- (1, 'admin', 'admin', '0906919685', 'admin@gmail.com', '21042002', 'Male', 'admin'),
-- (2, 'Quang', 'Minh', '0906919685', '2059027@gmail.com', '11111111', 'Male', 'therapist'),
-- (3, 'Thai ', 'Linh', '0906919685', '2059025@gmail.com', '22222222', 'Male', 'patient'),
-- (4, 'tuan', 'minh', '0906919685', 'hello@gmail.com', '33333333', 'Male', 'patient');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_password` (`u_password`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

ALTER TABLE `medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
