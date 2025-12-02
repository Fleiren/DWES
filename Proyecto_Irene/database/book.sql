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

INSERT INTO books (uuid, title, synopsis, author, pages, cover, isbn)
VALUES
    (
        UUID(),
        'El nombre del viento',
        'Kvothe narra su vida desde su infancia, su paso por la Universidad y el nacimiento de una leyenda.',
        'Patrick Rothfuss',
        872,
        'https://example.com/covers/nombre_viento.jpg',
        '9788401352836'
    ),
    (
        UUID(),
        'El Imperio Final',
        'Un joven esclavo descubre que tiene poderes alománticos y podría convertirse en la clave para derrocar a un imperio milenario.',
        'Brandon Sanderson',
        672,
        'https://example.com/covers/imperio_final.jpg',
        '9788466657662'
    ),
    (
        UUID(),
        'Yumi y el pintor de pesadillas',
        'En un mundo dividido por la magia y el espíritu, Yumi y Nikaro deben colaborar para salvar sus realidades.',
        'Brandon Sanderson',
        384,
        'https://example.com/covers/yumi_pintor.jpg',
        '9788418037439'
    ),
    (
        UUID(),
        'El Hobbit',
        'Bilbo Bolsón emprende una aventura inesperada junto a un grupo de enanos para recuperar un tesoro custodiado por un dragón.',
        'J. R. R. Tolkien',
        310,
        'https://example.com/covers/hobbit.jpg',
        '9780007458424'
    ),
    (
        UUID(),
        'Orgullo y prejuicio',
        'Elizabeth Bennet se enfrenta a los prejuicios sociales de su época en una historia de romance y crecimiento.',
        'Jane Austen',
        432,
        'https://example.com/covers/orgullo_prejuicio.jpg',
        '9780141439518'
    );

select * from books;
