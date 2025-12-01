<?php

namespace App\Class;

use App\Models\BookModel;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Book implements \JsonSerializable {

    private UuidInterface $uuid;
    private string $title;
    private string $synopsis;
    private string $author;
    private int $pages;
    private string $cover;
    private string $isbn;

    //IRENE SOY ÁLVARO, CREO QUE TE FALTA EL CONSTRUCTOR DE ESTA CLASE XD
    public function __construct(UuidInterface $uuid, string $title, string $synopsis ,string $author, int $pages, string $cover, string $isbn){
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
        $book = new Book(Uuid::uuid4(), $bookData["title"], $bookData["synopsis"], $bookData["author"], $bookData["pages"], $bookData["cover"], $bookData["isbn"]);
        return $book;
    }

    public static function validateBook(array $bookData) : bool {
        $valid = true;
        if($bookData["title"] == ""){
            $valid = false;
        }
        if($bookData["author"] == ""){
            $valid = false;
        }
        if(is_nan($bookData["pages"]) || ((int) $bookData["pages"]) < 1 || $bookData["pages"] == null ){
            $valid = false;
        }
        if($bookData["cover"].str_starts_with("http")){
            $valid = false;
        }
        if($bookData["isbn"] == ""){
            $valid = false;
        }
        return $valid;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @param UuidInterface $uuid
     * @return Book
     */
    public function setUuid(UuidInterface $uuid): Book
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