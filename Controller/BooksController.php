<?php
namespace Controller;

require_once __DIR__ . '/../Model/Books.php';
use Model\Books;


Class BooksController
{

    public static function addBook($data)
    {
        $book = new Books();
        return $book->addBook($data);
    }
}
