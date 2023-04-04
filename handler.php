<?php
require_once ('Controller/UsersController.php');
require_once ('Controller/GenreController.php');
require_once ('Controller/BooksController.php');

use Controller\UsersController;
use Controller\GenreController;
use Controller\BooksController;

$method = $_POST['method_name'];

if ($method == 'addUser'){
    $controller = new UsersController();

    $user = $controller::addUser($_POST);
    echo json_encode(array('success'=> $user));
    header('location: /view/contact.php');
}else if($method == 'editUser'){
    $controller = new UsersController();

    $user = $controller::editUser($_POST);
    echo json_encode(array('success'=> $user));
    header('location: /view/contact.php');
}else if ($method == 'addGenre'){
    $controller = new GenreController();

    $genre = $controller::addGenre($_POST);
    echo json_encode(array('success'=> $genre));
    header('location: /view/book_genres.php');
}else if($method == 'editGenre'){
    $controller = new GenreController();

    $genre = $controller::editGenre($_POST);
    echo json_encode(array('success'=> $genre));
    header('location: /view/book_genres.php');
}else if($method == 'addBook'){
    $controller = new BooksController();

    $book = $controller::addBook($_POST);
    echo json_encode(array('success'=> $book));
    header('location: /');
}else if($method == 'editBook'){
    $controller = new BooksController();

    $book = $controller::editBook($_POST);
    echo json_encode(array('success'=> $book));
    header('location: /');
}


