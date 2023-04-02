<?php

use Controller\UsersController;

require_once ('Controller/UsersController.php');

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
}


