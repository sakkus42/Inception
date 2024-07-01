
CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'sakkus'@'%' IDENTIFIED BY 'asdasd';
GRANT ALL PRIVILEGES ON wordpress.* TO 'sakkus'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'forceasdasd';