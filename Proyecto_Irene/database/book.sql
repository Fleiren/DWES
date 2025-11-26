-- Borramos la tabla si ya existe para evitar errores
DROP TABLE IF EXISTS books;

-- Creamos la tabla
CREATE TABLE books (
    uuid BINARY(16),
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    pages INT NOT NULL,
    cover VARCHAR(512)
)

