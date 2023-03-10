-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 10, 2023 lúc 12:27 PM
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
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `User_u_id` int(11) NOT NULL,
  `Medicine_m_id` int(11) NOT NULL,
  `c_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `m_quantity` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `m_price` int(11) DEFAULT NULL,
  `m_pic` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `m_description` varchar(400) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_quantity`, `m_price`, `m_pic`, `m_description`) VALUES
(1, 'anafranil', '100', 250000, 'anafranil.jpeg', NULL),
(2, 'clealine-caplyta', '100', 352000, 'clealine-caplyta.jpg', NULL),
(3, 'desipramine-norpramin', '100', 221000, 'desipramine-norpramin.webp', NULL),
(4, 'doxepin-neuraxpharm', '100', 252000, 'doxepin-neuraxpharm.jpg', NULL),
(5, 'fuxofen-20', '100', 265000, 'fuxofen-20.jpg', NULL),
(6, 'gaba-750mg-now', '100', 124000, 'gaba-750mg-now.png', NULL),
(7, 'mirtazapine', '100', 544000, 'mirtazapine.jpg', NULL),
(8, 'pexeva', '100', 350000, 'pexeva.png', NULL),
(9, 'pristiq', '100', 452000, 'pristiq.png', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `od_id` int(11) NOT NULL,
  `o_total_price` decimal(10,2) DEFAULT NULL,
  `User_u_id` int(11) NOT NULL,
  `Payment_p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordermedicine`
--

CREATE TABLE `ordermedicine` (
  `om_id` int(11) NOT NULL,
  `om_name` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `om_quantity` int(11) DEFAULT NULL,
  `OrderDetail_od_id` int(11) NOT NULL,
  `Medicine_m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `p_type` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `p_amount` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `p_info` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_firstName` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_lastName` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_phone` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_password` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_gender` enum('Male','Female','Other') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_address` varchar(400) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `u_avatar` varchar(45) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`u_id`, `u_firstName`, `u_lastName`, `u_phone`, `u_email`, `u_password`, `u_gender`, `u_role`, `u_address`, `u_avatar`) VALUES
(1, 'Admin', 'ADMIN', '0906919686', 'admin@gmail.com', '$2y$10$O0ZQ2nEHVzYBP03TfkxQ2ueHlAog24IHlceSUH.D/4DmDwlyEbbHm', 'Male', 'admin', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'admin.png'),
(2, 'PATIENT', 'PATIENT', '0906919685', 'patient@gmail.com', '$2y$10$sNzCb0oQ5zeDJk6lx4Lb.uq4Oj4dRPbtD7h3/rqOOhEpUw.m/RYYe', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'patient.png'),
(3, 'THERAPIST', 'THERAPIST', '0906919685', 'therapist@gmail.com', '$2y$10$wRs/WzznRblptrA9x1BBY.SfDFin8vEWO6sDaoQtogEyMBVT52Iti', 'Male', 'therapist', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'therapist.png'),
(4, 'HELLO', 'HELLO', '0906919685', 'hello@gmail.com', '$2y$10$myiYCtH3H1yg4mS47lIzfOZTq4fGcn9B4kLhuUjjEcVqa7I0KzviW', 'Female', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(5, 'TUAN', 'HưNG', '0906919685', 'baemin@gmail.com', '$2y$10$lNg3q6Lex0T3khWwVGbDl.tl56vpj2XMOQEjlf8p/s2EO4x3nCgm2', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(6, 'MINH', 'BUII', '0906919685', 'buii@gmail.com', '$2y$10$FCWcU.IalkeVhEmg9gHDgekSHvEqg5Ezosalr6DKB4dINiFr9.h5m', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
(7, 'Trâm', 'Thục', '0793016061', 'tramhnt20@uef.edu.vn', '$2y$10$TMdYc/BQXXOF308UpqvzseLcXI06juP4aXf17sR1wSNSDGJgPH6O6', 'Female', 'patient', 'Trần Văn Đang, Quận 3', NULL),
(9, 'Cc', 'Cc', '1234567899', 'cc@gmail.com', '$2y$10$xhkShhkpxCCPgn0wwQrKIueDQSQX06PW6//jtfNAsN8zA8MH6qSgu', 'Other', 'patient', NULL, NULL),
(10, 'ad', 'ad', '1234567899', 'ad@gmail.com', '$2y$10$NuM8M.0pjDt5ONPW5aoMOem5MElGkmkF7LzkH5INRVKPNSETJqdJe', 'Other', 'patient', NULL, NULL),
(11, 'Af', 'Af', '1234567890', 'ccc@gmail.com', '$2y$10$NUBkmibE8NXpFR6N7cNK5.fxYwDIRLBaZd6ZrWLneng96vmAqoL/q', 'Other', 'patient', NULL, NULL),
(12, 'ádg', 'Sadf', '1234567890', 'qưertyuiop@gmail.com', '$2y$10$GmDQxIUiMzhS58x/lOp.vO5ihb794vZ.y3rnmwodUBbgXGVIRCbtq', 'Other', 'patient', NULL, NULL),
(13, 'Minh', 'Bùi', '0982002025', 'minhbui@gmail.com', '$2y$10$NfK0SAjyTqpYJFy0MyeVOemfkdGclu.Fzo2/Psk8WDXAe8dD37K.K', 'Other', 'patient', NULL, NULL),
(14, 'Minh', 'Bùi Quang', '0982002025', 'minhbuii@gmail.com', '$2y$10$K2.vVtPhCuCl0Jfafk/W/.8fJl7CrLcTIM5QX2TBnq/56e9tZiuwu', 'Other', 'patient', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_Cart_User1` (`User_u_id`),
  ADD KEY `fk_Cart_Medicine1` (`Medicine_m_id`);

--
-- Chỉ mục cho bảng `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_name` (`m_name`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `fk_OrderDetail_User1` (`User_u_id`),
  ADD KEY `fk_OrderDetail_Payment1` (`Payment_p_id`);

--
-- Chỉ mục cho bảng `ordermedicine`
--
ALTER TABLE `ordermedicine`
  ADD PRIMARY KEY (`om_id`),
  ADD KEY `fk_OrderMedicine_OrderDetail1` (`OrderDetail_od_id`),
  ADD KEY `fk_OrderMedicine_Medicine1` (`Medicine_m_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ordermedicine`
--
ALTER TABLE `ordermedicine`
  MODIFY `om_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_Cart_Medicine1` FOREIGN KEY (`Medicine_m_id`) REFERENCES `medicine` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cart_User1` FOREIGN KEY (`User_u_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_OrderDetail_Payment1` FOREIGN KEY (`Payment_p_id`) REFERENCES `payment` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrderDetail_User1` FOREIGN KEY (`User_u_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `ordermedicine`
--
ALTER TABLE `ordermedicine`
  ADD CONSTRAINT `fk_OrderMedicine_Medicine1` FOREIGN KEY (`Medicine_m_id`) REFERENCES `medicine` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrderMedicine_OrderDetail1` FOREIGN KEY (`OrderDetail_od_id`) REFERENCES `orderdetail` (`od_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
