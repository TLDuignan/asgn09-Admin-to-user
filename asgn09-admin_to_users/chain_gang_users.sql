CREATE TABLE users (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  user_level ENUM('a', 'm'),
  hashed_password VARCHAR(255) NOT NULL
);

ALTER TABLE Userss ADD INDEX index_username (username);