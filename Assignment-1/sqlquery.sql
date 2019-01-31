CREATE DATABASE IF NOT EXISTS db1;
USE db1;
CREATE TABLE Feedback (q1 INT NOT NULL, q2 INT NOT NULL, q3 INT NOT NULL, q4 INT NOT NULL, q5 VARCHAR(500));
CREATE USER 'vm1'@'10.0.0.1' identified by 'bishal';
grant all privileges on *.* to 'vm1'@'10.0.0.1' with grant option;
