<?php

namespace App\Models;

# Importamos la clase book ya que devolveremos objetos book
use App\Class\Book;
#Importamos la librería de UUIDs para la id.
use PDO;
use PDOException;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class BookModel {

    private static function connectDB(): PDO {
        $conexion = new PDO("mysql:host=mariadb;dbname=proyecto_irene", "irene", "patito1506");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }

   public static function getAllBooks(): ?array {
         try{
             $conexion = BookModel::connectDB();
         }catch(PDOException $error){
             echo $error->getMessage();
             return null;
         }
         $sql = "SELECT * FROM books";
         $stmt = $conexion->prepare($sql);
         $stmt->execute();
         $resultado =  $stmt->fetchAll(PDO::FETCH_OBJ);

         if($resultado){
             $books = [];
             foreach ($resultado as $book){
                 $books[] = Book::createFromArray($book);
             }
             return $books;
         }else{
             return null;
         }

   }

    public static function getBookById(string $uuidString): ?Book {
         try{
             $conexion = BookModel::connectDB();
         }catch(PDOException $error){
             echo $error->getMessage();
             return null;
         }
         $sql = "SELECT * FROM books WHERE uuid = :uuidString";
         $stmt = $conexion->prepare($sql);
         $stmt->bindParam('uuidString', $uuidString);
         $stmt->execute();
         $resultado = $stmt->fetch(PDO::FETCH_OBJ);
         if($resultado){
             $book = Book::createFromArray($resultado);
             return $book;
         }else{
             return null;
         }
   }

   public static function deleteBookById(string $uuidString) : bool {
        try{
            $conexion = BookModel::connectDB();
        }catch(PDOException $error){
            echo $error->getMessage();
            return false;
       }

       $sql = "DELETE FROM books WHERE uuid = :uuidString";
       $stmt = $conexion->prepare($sql);
       $stmt ->bindParam('uuidString', $uuidString);
       $stmt->execute();
       $resultado = $stmt->rowCount();
       if($resultado > 0){
           return true;
       }else{
           return false;
       }
   }

   public static function existsBookByIsbn(string $isbn): bool {
        try{
            $conexion = BookModel::connectDB();
        }catch(PDOException $error){
            echo $error->getMessage();
            return false;
        }
        $sql = "SELECT * FROM books WHERE isbn = :isbn";
        $stmt = $conexion->prepare("sql");
        $stmt -> bindParam("isbn", $isbn);
        $stmt -> execute();
        $resultado = $stmt->fetch(PDO::FETCH_OBJ);
        if($resultado){
            return true;
        }else{
            return false;
        }
   }

   //Arreglar estos métodos y empezar el index.
   public static function updateBookById(string $uuidString, Book $book): bool {

        try{
            $conexion = BookModel::connectDB();
        }catch(PDOException $error){
            echo $error->getMessage();
            return false;
        }

        $sql = "UPDATE books SET title = :title, synopsis = :synopsis, author = :author, pages = :pages, isbn = :isbn WHERE uuid = :uuidString";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("title", $book->getTitle());
        $stmt->bindParam("synopsis", $bookData["synopsis"]);
        $stmt->bindParam("author", $bookData["author"]);
        $stmt->bindParam("pages", $bookData["pages"]);
        $stmt->bindParam("isbn", $bookData["isbn"]);
        $stmt->bindParam("uuidString", $uuidString);
        $stmt->execute();
        $resultado = $stmt->rowCount();
        if($resultado > 0){
            return true;
        }else{
            return false;
        }
   }

   public static function insertBook(array $bookData): bool {
        if(!Book::validateBook($bookData) || BookModel::existsBookByIsbn($bookData["isbn"])){
            return false;
        }
        try{
            $conexion = BookModel::connectDB();
        }catch(PDOException $error){
            echo $error->getMessage();
            return false;
        }
        $book = Book::createFromArray($bookData);
        $sql = "INSERT INTO books VALUES (:uuid, :title, :synopsis, :author, :pages, :cover, :isbn)"
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam("title", $book->getTitle());
    }
}