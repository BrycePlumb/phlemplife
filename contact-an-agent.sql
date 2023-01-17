








-- Create the database
CREATE DATABASE contact_agent;

-- Use the database
USE contact_agent;

-- Create the messages table
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  message TEXT NOT NULL
);
