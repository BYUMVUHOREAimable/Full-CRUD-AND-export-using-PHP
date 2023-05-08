-- Create the database
CREATE DATABASE student_db;

-- Use the database
USE student_db;

-- Create the 'users' table
CREATE TABLE users (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
fname VARCHAR(100),
lname VARCHAR(100),
email VARCHAR(20), 
password VARCHAR(30),
gender VARCHAR(10)
);