-- Initialize DATABASE if not exist

IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = 'happyme')
BEGIN
CREATE DATABASE happyme;
END

-- Initialize TABLE if not exist
 

IF OBJECT_ID('Users', 'U') IS NULL
BEGIN
CREATE TABLE Users (
    id INT IDENTITY(1,1) PRIMARY key ,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(255),
    role varchar(9) not null check (role in ('patient', 'therapist', 'admin'))
);
END


IF OBJECT_ID('Sessions', 'U') IS NULL
BEGIN
CREATE TABLE Sessions (
id INT IDENTITY(1,1) PRIMARY KEY,
date_time DATETIME NOT NULL,
therapist_id INT NOT NULL,
patient_id INT NOT NULL,
notes TEXT,
FOREIGN KEY (therapist_id) REFERENCES Users(id),
FOREIGN KEY (patient_id) REFERENCES Users(id)
);
END

IF OBJECT_ID('Messages', 'U') IS NULL
BEGIN
CREATE TABLE Messages (
id INT IDENTITY(1,1) PRIMARY KEY,
date_time DATETIME NOT NULL,
sender_id INT NOT NULL,
content TEXT NOT NULL,
FOREIGN KEY (sender_id) REFERENCES Users(id)
);
END


IF OBJECT_ID('Appointments', 'U') IS NULL
BEGIN
CREATE TABLE Appointments (
id INT IDENTITY(1,1) PRIMARY KEY,
date_time DATETIME NOT NULL,
therapist_id INT NOT NULL,
patient_id INT NOT NULL,
FOREIGN KEY (therapist_id) REFERENCES Users(id),
FOREIGN KEY (patient_id) REFERENCES Users(id)
);
END


IF OBJECT_ID('Billing', 'U') IS NULL
BEGIN
CREATE TABLE Billing (
id INT IDENTITY(1,1) PRIMARY KEY,
patient_id INT NOT NULL,
cost DECIMAL(10, 2) NOT NULL,
payment_details TEXT,
FOREIGN KEY (patient_id) REFERENCES Users(id)
);
END

IF OBJECT_ID('Reviews', 'U') IS NULL
BEGIN
CREATE TABLE Reviews (
id INT IDENTITY(1,1) PRIMARY KEY,
patient_id INT NOT NULL,
therapist_id INT NOT NULL,
rating INT NOT NULL,
review TEXT NOT NULL,
FOREIGN KEY (patient_id) REFERENCES Users(id),
FOREIGN KEY (therapist_id) REFERENCES Users(id)
);
END


IF OBJECT_ID('Insurance', 'U') IS NULL
BEGIN
CREATE TABLE Insurance (
id INT IDENTITY(1,1) PRIMARY KEY,
patient_id INT NOT NULL,
provider VARCHAR(255) NOT NULL,
policy_number VARCHAR(255) NOT NULL,
FOREIGN KEY (patient_id) REFERENCES Users(id)
);
END


IF OBJECT_ID('PatientsMedicalHistory', 'U') IS NULL
BEGIN
CREATE TABLE PatientsMedicalHistory (
id INT IDENTITY(1,1) PRIMARY KEY,
patient_id INT NOT NULL,
medical_history TEXT NOT NULL,
treatment TEXT NOT NULL,
FOREIGN KEY (patient_id) REFERENCES Users(id)
);
END


IF OBJECT_ID('TherapistsQualifications', 'U') IS NULL
BEGIN
CREATE TABLE TherapistsQualifications (
id INT IDENTITY(1,1) PRIMARY KEY,
therapist_id INT NOT NULL,
qualifications TEXT NOT NULL,
experience TEXT NOT NULL,
FOREIGN KEY (therapist_id) REFERENCES Users(id)
);
END

IF  OBJECT_ID('TestTable', 'U') IS NULL
BEGIN
CREATE TABLE TestTable(
    test_col1 text not NULL,
    test_col2 text not NULL,
    test_col3 text not NULL
);
END






