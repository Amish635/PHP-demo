CREATE DATABASE IF NOT EXISTS 'bca-news';
use 'bca-news';
CREATE TABLE IF NOT EXISTS 'users'(
    'id' INT AUTO_INCREMENT PRIMARY KEY,
    'name' VARCHAR(100) NOT NULL,
    'email' VARCHAR(100) NOT NULL UNIQUE,
    'password' VARCHAR(255) NOT NULL,
    'gender' ENUM('male', 'female', 'other') NOT NULL,
    'role' ENUM('admin', 'user') DEFAULT 'user',
    'image' VARCHAR(255),

    'created_at' TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    'updated_at' TIMESTAMP DEFAULT CURRENT_TIMESTAMP   
    
    
      );