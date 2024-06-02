CREATE DATABASE IF NOT EXISTS visit_counter;
CREATE USER IF NOT EXISTS 'counter_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON visit_counter.* TO 'counter_user'@'localhost';
FLUSH PRIVILEGES;

USE visit_counter;
CREATE TABLE IF NOT EXISTS counter (
    id INT PRIMARY KEY AUTO_INCREMENT,
    visits INT NOT NULL DEFAULT 0
);

INSERT INTO counter (visits) VALUES (0);