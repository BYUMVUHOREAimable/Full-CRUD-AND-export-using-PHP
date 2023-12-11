-- Create the database
CREATE DATABASE Marks_management;

-- Use the database
USE MARKS_MANAGEMENT;

-- Create the 'users' table
CREATE TABLE marks (
regno INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
ass VARCHAR(100),
exam VARCHAR(100),
class VARCHAR(20)
);