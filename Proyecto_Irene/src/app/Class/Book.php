<?php

namespace App\Class;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Book implements \JsonSerializable {

    private UuidInterface $uuid;
    private string $title;
    private string $synopsis;
    private string $author;
    private int $pages;
    private string $cover;

    //IRENE SOY ÁLVARO, CREO QUE TE FALTA EL CONSTRUCTOR DE ESTA CLASE XD
    public function __construct(UuidInterface $uuid, string $title, string $synopsis ,string $author, int $pages, string $cover){
        $this->uuid = $uuid;
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->synopsis = $synopsis;
        $this->cover = $cover;
    }
    public function jsonSerialize(): array
    {
        return [
            "uuid" => $this->uuid,
            "title" => $this->title,
            "synopsis" => $this->synopsis,
            "author" => $this->author,
            "pages" => $this->pages,
            "cover" => $this->cover
        ];
    }

    public static function createFromArray(array $bookData) :Book{
        $book = new Book(Uuid::uuid4(), $bookData["title"], $bookData["synopsis"], $bookData["author"], $bookData["pages"], $bookData["cover"]);
        return $book;
    }

    public static function validateBook(array $bookData) : bool {
        $valid = true;
        if(is_nan($bookData["pages"]) || ((int) $bookData["pages"]) < 1){
            return false;
        }
    }
}