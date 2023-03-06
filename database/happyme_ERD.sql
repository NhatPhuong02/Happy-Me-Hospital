-- thứ tự tạo bảng (vì có ràng buộc khoá chính khoá phụ)

-- User, Medicine, Payment, ShoppingSession, Cart, OrderDetail, OrderMedicine

CREATE TABLE IF NOT EXISTS `happyme`.`User` (
  `u_id` INT NOT NULL,
  `u_firstName` VARCHAR(255) NULL,
  `u_lastName` VARCHAR(255) NULL,
  `u_Phone` VARCHAR(10) NULL,
  `u_email` VARCHAR(255) NULL,
  `u_password` VARCHAR(255) NULL,
  `u_gender` enum('Male','Female','Order') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('patient','therapist','admin') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_address` VARCHAR(400) NULL,
  `u_avatar` VARCHAR(45) NULL,
  PRIMARY KEY (`u_id`));


CREATE TABLE IF NOT EXISTS `happyme`.`Medicine` (
  `m_id` INT NOT NULL,
  `m_name` VARCHAR(255) NULL,
  `m_quantity` VARCHAR(255) NULL,
  `m_price` INT NULL,
  `m_pic` VARCHAR(45) NULL,
  PRIMARY KEY (`m_id`));

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