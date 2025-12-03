<?php
namespace App\Controllers;


use App\Class\Book;
use App\Interfaces\ControllerInterface;
use App\Models\BookModel;
use Ramsey\Uuid\Uuid;

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
            $_POST['uuid'] = Uuid::uuid4()->toString();
            $book = Book::createFromArray($_POST);

            if (!BookModel::insertBook($book)) {
                $error = "No se ha podido guardar el libro";
                include_once DIRECTORIO_VISTAS . "error.php";
                return;
            }

            // Redirige a la lista de libros si todo salió bien
            header("Location: /admin");
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
        $bookData = json_decode(file_get_contents("php://input"), true);
        if(!Book::validateBook($bookData)){
            $error = "Los datos del libro no son válidos.";
            include_once DIRECTORIO_VISTAS . "error.php";
            return;
        }
        $bookData["uuid"]=$id;
        $book = Book::createFromArray($bookData);
        if(BookModel::updateBookById($id, $book)){
            echo json_encode(["success" => true]);
            exit;
        }else{
            echo json_encode(["success" => false, "error" => "No se ha podido actualizar el libro"]);
            exit;
        }



    }

    function destroy($id)
    {
        $result = BookModel::deleteBookById($id);
        if($result){
            echo json_encode(["success" => true]);
            exit;
        } else{
            echo json_encode(["success" => false, "error" => "No se ha podido borrar el libro"]);
        }
    }

    function create()
    {
        include_once DIRECTORIO_VISTAS_BACKEND."createBook.php";
    }

    function edit($id)
    {
        $book = BookModel::getBookById($id);
        include_once DIRECTORIO_VISTAS_BACKEND."editBook.php";
    }

    function admin(){
        $books = BookModel::getAllBooks();
        include_once DIRECTORIO_VISTAS_BACKEND."adminBooks.php";
    }
}