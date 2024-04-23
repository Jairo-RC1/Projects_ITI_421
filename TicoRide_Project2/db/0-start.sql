
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    speed VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS rides (
id INT AUTO_INCREMENT PRIMARY KEY,
ride_name VARCHAR(255) NOT NULL,
start VARCHAR(255) NOT NULL,
end VARCHAR(255) NOT NULL,
description VARCHAR(255),
departure VARCHAR(255) NOT NULL,
estimated_arrival VARCHAR(255) NOT NULL,
days VARCHAR(255) NOT NULL,
user_id INT NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(id)
);