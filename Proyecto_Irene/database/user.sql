DROP TABLE IF EXISTS users;

CREATE TABLE users(
    uuid VARCHAR(60) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created
);