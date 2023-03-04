-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2023 lúc 05:29 PM
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

--
-- Đang đổ dữ liệu cho bảng `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_quantity`, `m_price`, `m_pic`) VALUES
(1, 'anafranil', '100', '250.000', 'anafranil.jpeg'),
(2, 'clealine-caplyta', '100', '352.000', 'clealine-caplyta.jpg'),
(3, 'desipramine-norpramin', '100', '221.000', 'desipramine-norpramin.webp'),
(4, 'doxepin-neuraxpharm', '100', '252.000', 'doxepin-neuraxpharm.jpg'),
(5, 'fuxofen-20', '100', '265.000', 'fuxofen-20.jpg'),
(6, 'gaba-750mg-now', '100', '124.000', 'gaba-750mg-now.png'),
(7, 'mirtazapine', '100', '544.000', 'mirtazapine.jpg'),
(8, 'pexeva', '100', '350.000', 'pexeva.png'),
(9, 'pristiq', '100', '452.000', 'pristiq.png');

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
(11, 'PATIENT', 'PATIENT', '0906919685', 'patient@gmail.com', '$2y$10$sNzCb0oQ5zeDJk6lx4Lb.uq4Oj4dRPbtD7h3/rqOOhEpUw.m/RYYe', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'patient.png'),
(12, 'THERAPIST', 'THERAPIST', '0906919685', 'therapist@gmail.com', '$2y$10$wRs/WzznRblptrA9x1BBY.SfDFin8vEWO6sDaoQtogEyMBVT52Iti', 'Male', 'therapist', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'therapist.png'),
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
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE IF NOT EXISTS `happyme`.`Payment` (
  `p_id` INT NOT NULL,
  `p_type` VARCHAR(45) NULL,
  `p_amount` VARCHAR(45) NULL,
  `p_info` VARCHAR(45) NULL,
  PRIMARY KEY (`p_id`));

CREATE TABLE IF NOT EXISTS `happyme`.`ShoppingSession` (
  `ss_id` INT NOT NULL,
  `User_u_id` INT NOT NULL,
  PRIMARY KEY (`ss_id`, `User_u_id`),
  CONSTRAINT `fk_ShoppingSession_User1`
    FOREIGN KEY (`User_u_id`)
    REFERENCES `happyme`.`User` (`u_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `happyme`.`Cart` (
  `c_id` INT NOT NULL,
  `c_quantity` INT NOT NULL,
  `Medicine_m_id` INT NOT NULL,
  PRIMARY KEY (`c_id`, `c_quantity`, `Medicine_m_id`),
  CONSTRAINT `fk_Cart_ShoppingSession1`
    FOREIGN KEY (`c_quantity`)
    REFERENCES `happyme`.`ShoppingSession` (`ss_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cart_Medicine1`
    FOREIGN KEY (`Medicine_m_id`)
    REFERENCES `happyme`.`Medicine` (`m_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



CREATE TABLE IF NOT EXISTS `happyme`.`OrderDetail` (
  `od_id` INT NOT NULL,
  `o_total_price` VARCHAR(45) NULL,
  `User_u_id` INT NOT NULL,
  `Payment_p_id` INT NOT NULL,
  PRIMARY KEY (`od_id`, `User_u_id`, `Payment_p_id`),
  CONSTRAINT `fk_OrderDetail_User1`
    FOREIGN KEY (`User_u_id`)
    REFERENCES `happyme`.`User` (`u_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OrderDetail_Payment1`
    FOREIGN KEY (`Payment_p_id`)
    REFERENCES `happyme`.`Payment` (`p_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS `happyme`.`OrderMedicine` (
  `om_id` INT NOT NULL,
  `om_name` VARCHAR(45) NULL,
  `om_quantity` VARCHAR(45) NULL,
  `OrderDetail_od_id` INT NOT NULL,
  `Medicine_m_id` INT NOT NULL,
  PRIMARY KEY (`OrderDetail_od_id`, `Medicine_m_id`, `om_id`),
  CONSTRAINT `fk_OrderMedicine_OrderDetail1`
    FOREIGN KEY (`OrderDetail_od_id`)
    REFERENCES `happyme`.`OrderDetail` (`od_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OrderMedicine_Medicine1`
    FOREIGN KEY (`Medicine_m_id`)
    REFERENCES `happyme`.`Medicine` (`m_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);
