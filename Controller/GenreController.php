<?php
namespace Controller;

require_once __DIR__ . '/../Model/Genre.php';
use Model\Genre;

Class GenreController
{
    public static function index()
    {
        $genre = new Genre();
        return $genre->getAllGenres();
    }

    public static function addGenre($data)
    {
        $genre = new Genre();
        return $genre->addGenre($data);
    }

    public static function editGenre($data)
    {
        $genre = new Genre();
        return $genre->editGenre($data);
    }

}