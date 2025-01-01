CREATE DATABASE esports;

USE esports;

CREATE TABLE matches (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date DATE NOT NULL,
  teams VARCHAR(255) NOT NULL
);

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT NOT NULL
);