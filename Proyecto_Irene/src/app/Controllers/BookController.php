<?php
namespace App\Controllers;


use App\Class\Book;
use App\Interfaces\ControllerInterface;
use App\Models\BookModel;

class BookController implements ControllerInterface {

    function index()
    {
        $books = BookModel::getAllBooks();
        $title = "Listado de Libros";
        if($books === null){
            $error = "No se han podido cargar los libros";
            include_once DIRECTORIO_VISTAS."error.php";
        }else{
            include_once DIRECTORIO_VISTAS_FRONTEND."listBooks.php";
        }
    }

    function show($id)
    {
        // TODO: Implement show() method.
    }

    function store()
    {
        if (Book::validateBook($_POST)) {

            $book = Book::createFromArray($_POST);

            if (!BookModel::insertBook($book)) {
                $error = "No se ha podido guardar el libro";
                include_once DIRECTORIO_VISTAS . "error.php";
                return;
            }

            // Redirige a la lista de libros si todo salió bien
            header("Location: /books");
            exit;

        } else {

            // Mostrar error de validación
            $error = "Los datos del libro no son válidos.";
            include_once DIRECTORIO_VISTAS . "error.php";
            return;
        }
    }


    function update($id)
    {
        // TODO: Implement update() method.
    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    function create()
    {
        include_once DIRECTORIO_VISTAS_BACKEND."createBook.php";
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

    function admin(){
        include_once DIRECTORIO_VISTAS_BACKEND."adminBooks.php";
    }
}