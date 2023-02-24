-- at mysql server

-- IF OBJECT_ID('Users', 'U') IS NULL
BEGIN
CREATE TABLE Users (
    id INT IDENTITY(1,1) PRIMARY key ,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role varchar(9) null check (role in ('patient', 'therapist', 'admin'))
);
END

-- at myphpadmin

CREATE TABLE `Users` (
    `u_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `u_firstName` VARCHAR(255) NOT NULL,
    `u_lastName` VARCHAR(255) NOT NULL,
    `u_email` VARCHAR(255) NOT NULL,
    `u_password` VARCHAR(255) NOT NULL,
    `u_role` ENUM('patient', 'therapist', 'admin') NULL
);


