-- thứ tự tạo bảng (vì có ràng buộc khoá chính khoá phụ)

-- Payment, Cart, OrderDetail, OrderMedicine

CREATE TABLE IF NOT EXISTS `happyme`.`User` (
  `u_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `u_firstName` VARCHAR(255) NULL,
  `u_lastName` VARCHAR(255) NULL,
  `u_Phone` VARCHAR(10) NULL,
  `u_email` VARCHAR(255) UNIQUE NULL,
  `u_password` VARCHAR(255) NULL,
  `u_gender` enum('Male','Female','Other') COLLATE utf8_vietnamese_ci NOT NULL,
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



-- Thanh and Hung adds data here:
-- 123

-----------------------------------
-- Insert data for 'medicine' table

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

----------------------------------
-- Insert data for 'payment' table

INSERT INTO `payment` (`p_id`, `p_type`, `p_amount`, `p_info`) VALUES 
('1', 'credit card', '3', ''),
('2', 'credit card', '2', ''),
('3', 'credit card', '1', ''),
('4', 'credit card', '2', ''),
('5', 'credit card', '3', '');

------------------------------
--Insert data for 'cart' table 

INSERT INTO `cart` (`c_id`, `c_quantity`, `User_u_id`, `Medicine_m_id`) VALUES 
('1', '1', '', '1'),
('2', '1', '', '2'),
('3', '1', '', '3'),
('4', '1', '', '4'),
('5', '1', '', '5');