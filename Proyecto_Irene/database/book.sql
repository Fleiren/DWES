-- Borramos la tabla si ya existe para evitar errores
DROP TABLE IF EXISTS books;

-- Creamos la tabla
CREATE TABLE books (
    uuid varchar(60) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    synopsis TEXT ,
    author VARCHAR(255) NOT NULL,
    pages INT NOT NULL,
    cover VARCHAR(512),
    isbn VARCHAR(13) NOT NULL
)

