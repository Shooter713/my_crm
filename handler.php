<?php
require_once ('Controller/UsersController.php');
require_once ('Controller/GenreController.php');
require_once ('Controller/BooksController.php');
require_once ('Controller/ListController.php');

use Controller\UsersController;
use Controller\GenreController;
use Controller\BooksController;
use Controller\ListController;

$method = $_POST['method_name'];

if ($method == 'addUser'){
    UsersController::addUser($_POST);
    header('location: /view/contact.php');
}else if($method == 'editUser'){
    UsersController::editUser($_POST);
    header('location: /view/contact.php');
}else if ($method == 'addGenre'){
    GenreController::addGenre($_POST);
    header('location: /view/book_genres.php');
}else if($method == 'editGenre'){
    GenreController::editGenre($_POST);
    header('location: /view/book_genres.php');
}else if($method == 'addBook'){
    BooksController::addBook($_POST);
    header('location: /view/book_lists.php');
}else if($method == 'editBook'){
    BooksController::editBook($_POST);
    header('location: /view/book_lists.php');
}else if ($method == 'addName'){
    ListController::addJournal($_POST);
    header('location: /view/users_list.php');
}else if($method == 'returnBook'){
    ListController::returnBook($_POST);
    header('location: /view/users_list.php');
}


