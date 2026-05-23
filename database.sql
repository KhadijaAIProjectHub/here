
CREATE DATABASE event_planner;
USE event_planner;

CREATE TABLE bookings(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(20),
event_type VARCHAR(50),
event_date DATE,
guests INT,
payment_status VARCHAR(20)
);

CREATE TABLE admin(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(255)
);

INSERT INTO admin(username,password) VALUES ('admin','$2y$10$Q9Q1Qp6vJ8rF7c3H1lZ3hO2l2xYkQ0vX5y5p9w5Xj3v9uY6g5fYqK');
