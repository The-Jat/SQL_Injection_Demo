-- Create the database
CREATE DATABASE IF NOT EXISTS sql_injection_demo;

-- Use the database
USE sql_injection_demo;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Insert a test user
INSERT INTO users (username, password) VALUES ('admin', 'admin123');
