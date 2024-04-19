-- Create 
CREATE DATABASE IF NOT EXISTS db ;

-- Use the database
USE db;

-- Create table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

