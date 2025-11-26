<?php

namespace App\Class;

use Ramsey\Uuid\UuidInterface;

class Book implements \JsonSerializable {

    private UuidInterface $uuid;
    private string $title;
    private string $author;
    private int $pages;
    private string $cover;

    //IRENE SOY ÁLVARO, CREO QUE TE FALTA EL CONSTRUCTOR DE ESTA CLASE XD

    public function jsonSerialize(): mixed
    {
        return [
            "uuid" => $this->uuid,
            "title" => $this->title,
            "author" => $this->author,
            "pages" => $this->pages,
            "cover" => $this->cover
        ];
    }
}