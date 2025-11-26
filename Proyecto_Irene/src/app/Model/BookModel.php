<?php

namespace App\Models;

# Importamos la clase book ya que devolveremos objetos book
use App\Class\Book;
#Importamos la librería de UUIDs para trabjar con el formato binario/cadena
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class BookModel {

    private function connectDB(): \PDO {
    try{
        $conexion = new PDO("mysql:host=mariadb;dbname=proyecto_irene", "irene", "toor");
    }
    }
}