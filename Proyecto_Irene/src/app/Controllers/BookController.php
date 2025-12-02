<?php
namespace App\Controllers;


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
        // TODO: Implement store() method.
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
        // TODO: Implement create() method.
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }
}