-- thứ tự tạo bảng (vì có ràng buộc khoá chính khoá phụ)

-- Payment, Cart, OrderDetail, OrderMedicine

CREATE TABLE IF NOT EXISTS `happyme`.`User` (
  `u_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `u_firstName` VARCHAR(255) NULL,
  `u_lastName` VARCHAR(255) NULL,
  `u_Phone` VARCHAR(10) NULL,
  `u_email` VARCHAR(255) UNIQUE NULL,
  `u_password` VARCHAR(255) NULL,
  `u_gender` enum('Male','Female','Order') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_address` VARCHAR(400) NULL,
  `u_avatar` VARCHAR(45) NULL);


CREATE TABLE IF NOT EXISTS `happyme`.`Medicine` (
  `m_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `m_name` VARCHAR(255) UNIQUE NULL,
  `m_quantity` VARCHAR(255) NULL,
  `m_price` INT NULL,
  `m_pic` VARCHAR(45) NULL,
  `m_description` VARCHAR(400) NULL);

CREATE TABLE IF NOT EXISTS `happyme`.`Payment` (
  `p_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `p_type` VARCHAR(45) NULL,
  `p_amount` VARCHAR(45) NULL,
  `p_info` VARCHAR(45) NULL);

CREATE TABLE IF NOT EXISTS `happyme`.`Cart` (
`c_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`c_quantity` INT NOT NULL,
`User_u_id` INT NOT NULL,
`Medicine_m_id` INT NOT NULL,
CONSTRAINT `fk_Cart_User1`
FOREIGN KEY (`User_u_id`)
REFERENCES `happyme`.`User` (`u_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION,
CONSTRAINT `fk_Cart_Medicine1`
FOREIGN KEY (`Medicine_m_id`)
REFERENCES `happyme`.`Medicine` (`m_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS `happyme`.`OrderDetail` (
  `od_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `o_total_price` DECIMAL(10,2) NULL,
  `User_u_id` INT NOT NULL,
  `Payment_p_id` INT NOT NULL,
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
  `om_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `om_name` VARCHAR(45) NULL,
  `om_quantity` INT NULL,
  `OrderDetail_od_id` INT NOT NULL,
  `Medicine_m_id` INT NOT NULL,
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

CREATE TABLE IF NOT EXISTS `happyme`.`Post` (
`p_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`p_title` VARCHAR(255) NOT NULL,
`p_content` TEXT NOT NULL,
`p_createdDate` DATETIME NOT NULL,
`User_u_id` INT NOT NULL,
CONSTRAINT `fk_Post_User1`
FOREIGN KEY (`User_u_id`)
REFERENCES happyme.User (`u_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS `happyme`.`Replay` (
`r_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`r_content` TEXT NOT NULL,
`r_createdDate` DATETIME NOT NULL,
`Post_p_id` INT NOT NULL,
CONSTRAINT `fk_Replay_Post1`
FOREIGN KEY (`Post_p_id`)
REFERENCES happyme.Post (`p_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS `happyme`.`ReplyHasUser` (
  `r_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Post_p_id` INT NOT NULL,
  `User_u_id` INT NOT NULL,
  CONSTRAINT `fk_ReplyHasUser_Post`
    FOREIGN KEY (`Post_p_id`)
    REFERENCES `happyme`.`Post` (`p_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ReplyHasUser_User`
    FOREIGN KEY (`User_u_id`)
    REFERENCES `happyme`.`User` (`u_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);





-- this is for testing first --
CREATE TABLE IF NOT EXISTS happyme.Image (
i_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
i_name VARCHAR(50) NOT NULL,
User_u_id INT NOT NULL,
CONSTRAINT fk_Image_User1
FOREIGN KEY (User_u_id)
REFERENCES happyme.User (u_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
);




-- Thanh and Hung adds data here:
-- 123

-- medicine 

INSERT INTO `medicine` (`m_id`, `m_name`, `m_quantity`, `m_price`, `m_pic`) VALUES
(1, 'anafranil', '100', '250000', 'anafranil.jpeg'),
(2, 'clealine-caplyta', '100', '352000', 'clealine-caplyta.jpg'),
(3, 'desipramine-norpramin', '100', '221000', 'desipramine-norpramin.webp'),
(4, 'doxepin-neuraxpharm', '100', '252000', 'doxepin-neuraxpharm.jpg'),
(5, 'fuxofen-20', '100', '265000', 'fuxofen-20.jpg'),
(6, 'gaba-750mg-now', '100', '124000', 'gaba-750mg-now.png'),
(7, 'mirtazapine', '100', '544000', 'mirtazapine.jpg'),
(8, 'pexeva', '100', '350000', 'pexeva.png'),
(9, 'pristiq', '100', '452000', 'pristiq.png');

-- 
INSERT INTO `user` (`u_firstName`, `u_lastName`, `u_phone`, `u_email`, `u_password`, `u_gender`, `u_role`, `u_address`, `u_avatar`) VALUES
('ADMIN', 'ADMIN', '0906919685', 'admin@gmail.com', '$2y$10$O0ZQ2nEHVzYBP03TfkxQ2ueHlAog24IHlceSUH.D/4DmDwlyEbbHm', 'Male', 'admin', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'admin.png'),
('PATIENT', 'PATIENT', '0906919685', 'patient@gmail.com', '$2y$10$sNzCb0oQ5zeDJk6lx4Lb.uq4Oj4dRPbtD7h3/rqOOhEpUw.m/RYYe', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'patient.png'),
('THERAPIST', 'THERAPIST', '0906919685', 'therapist@gmail.com', '$2y$10$wRs/WzznRblptrA9x1BBY.SfDFin8vEWO6sDaoQtogEyMBVT52Iti', 'Male', 'therapist', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', 'therapist.png'),
('HELLO', 'HELLO', '0906919685', 'hello@gmail.com', '$2y$10$myiYCtH3H1yg4mS47lIzfOZTq4fGcn9B4kLhuUjjEcVqa7I0KzviW', 'Female', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
('TUAN', 'HưNG', '0906919685', 'baemin@gmail.com', '$2y$10$lNg3q6Lex0T3khWwVGbDl.tl56vpj2XMOQEjlf8p/s2EO4x3nCgm2', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL),
('MINH', 'BUII', '0906919685', 'buii@gmail.com', '$2y$10$FCWcU.IalkeVhEmg9gHDgekSHvEqg5Ezosalr6DKB4dINiFr9.h5m', 'Male', 'patient', '258 Đ. Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành phố Hồ Chí Minh', NULL);

