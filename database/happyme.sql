CREATE TABLE `users` (
    `u_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `u_firstName` VARCHAR(255) NOT NULL,
    `u_lastName` VARCHAR(255) NOT NULL,
    `u_email` VARCHAR(255) NOT NULL,
    `u_password` VARCHAR(255) NOT NULL,
    `u_role` ENUM('patient', 'therapist', 'admin') NULL
);

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_role`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '21042002', 'admin'),
(2, 'Nhat', 'Phuong', '2059032@itec.hcmus.edu.vn', '99999999', 'therapist'),
(3, 'Thai', 'Linh', '2059025@itec.hcmus.edu.vn', '88888888', 'patient'),
(4, 'Quang', 'Minh', '2059027@itec.hcmus.edu.vn', '09082002', 'patient'),
(5, 'Gia', 'Hung', '2059017@itec.hcmus.edu.vn', '05012002', 'therapist');


