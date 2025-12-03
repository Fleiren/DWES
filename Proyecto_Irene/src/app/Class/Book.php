<?php

namespace App\Class;

use App\Models\BookModel;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Book implements \JsonSerializable {

    private string $uuid;
    private string $title;
    private string $synopsis;
    private string $author;
    private int $pages;
    private string $cover;
    private string $isbn;

    //IRENE SOY ÁLVARO, CREO QUE TE FALTA EL CONSTRUCTOR DE ESTA CLASE XD
    public function __construct(string $uuid, string $title, string $synopsis ,string $author, int $pages, string $cover, string $isbn){
        $this->uuid = $uuid;
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->synopsis = $synopsis;
        $this->cover = $cover;
        $this->isbn = $isbn;
    }
    public function jsonSerialize(): array
    {
        return [
            "uuid" => $this->uuid,
            "title" => $this->title,
            "synopsis" => $this->synopsis,
            "author" => $this->author,
            "pages" => $this->pages,
            "isbn" => $this->isbn,
            "cover" => $this->cover
        ];
    }

    public static function createFromArray(array $bookData) :Book{
        $book = new Book($bookData["uuid"], $bookData["title"], $bookData["synopsis"], $bookData["author"], $bookData["pages"], $bookData["cover"], $bookData["isbn"]);
        return $book;
    }

    public static function validateBook(array $bookData) : bool {
        $valid = true;

        // Validar título
        if (!isset($bookData["title"]) || trim($bookData["title"]) === "") {
            $valid = false;
        }

        // Validar autor
        if (!isset($bookData["author"]) || trim($bookData["author"]) === "") {
            $valid = false;
        }

        // Validar páginas
        if (
            !isset($bookData["pages"]) ||
            !is_numeric($bookData["pages"]) ||
            (int)$bookData["pages"] < 1
        ) {
            $valid = false;
        }

        // Validar URL de la portada (NO debe empezar por http según tu lógica)
        if (isset($bookData["cover"]) && $bookData["cover"] !== "" && !str_starts_with($bookData["cover"], "http")) {
            $valid = false;
        }

        // Validar ISBN
        if (!isset($bookData["isbn"]) || trim($bookData["isbn"]) === "") {
            $valid = false;
        }

        return $valid;
    }


    /**
     * @return UuidInterface
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param UuidInterface $uuid
     * @return Book
     */
    public function setUuid(string $uuid): Book
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     * @return Book
     */
    public function setIsbn(string $isbn): Book
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Book
     */
    public function setTitle(string $title): Book
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * @param string $synopsis
     * @return Book
     */
    public function setSynopsis(string $synopsis): Book
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return Book
     */
    public function setAuthor(string $author): Book
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     * @return Book
     */
    public function setPages(int $pages): Book
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     * @return Book
     */
    public function setCover(string $cover): Book
    {
        $this->cover = $cover;
        return $this;
    }




}