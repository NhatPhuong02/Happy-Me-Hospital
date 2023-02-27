-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2023 lúc 03:01 AM
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
  `u_email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`u_id`, `u_firstName`, `u_lastName`, `u_email`, `u_password`, `u_role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$EgfGdu2lOEr.WsHCdMbpYONISXAnhxCIRXQOF3yPSghiJEaBhFwlO', 'admin'),
(2, 'Quang', 'Minh', '2059027@gmail.com', '$2y$10$nbGQBSuNH2P1iQ7miMB7d.edjl7TeggULNszReQ6lIKnHvj9YdCtu', 'therapist'),
(3, 'Thai ', 'Linh', '2059025@gmail.com', '$2y$10$ySce6CubpqmpVAzjoYu1XeLQifB81yTCAYDNBLgk0gTGzUNePVgQK', 'patient');

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

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
