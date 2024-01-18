--)Lucas Leijon data 3 2024(--

CREATE DATABASE IF NOT EXISTS forum_db;
USE forum_db;

CREATE TABLE IF NOT EXISTS forum_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    website VARCHAR(255),
    comment TEXT,
    uploaded_file VARCHAR(255),
    registration_date DATE CURRENT_TIMESTAMP
);
