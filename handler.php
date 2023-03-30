<?php

$method = $_GET['method'];

if ($method=='add_new_user'){
    $user = Controller\UsersController::addUser();
    echo json_encode(array('success'=>true));
}
