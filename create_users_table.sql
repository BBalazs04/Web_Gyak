CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert a demo user (username: teszt, password: titok)
INSERT INTO users (username, password)
VALUES ('teszt', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
-- NOTE: Replace the password hash with a real one generated using password_hash("titok", PASSWORD_DEFAULT)