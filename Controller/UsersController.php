<?php
namespace Controller;

require_once __DIR__ . '/../Model/User.php';
use Model\User;


Class UsersController
{
    public static function index()
    {
        $user = new User();
        return $user->getAllUsers();
    }

    public static function addUser($data)
    {
        $user = new User();
        return $user->addUser($data);
    }

    public static function editUser($data)
    {
        $user = new User();
        return $user->editUser($data);
    }

}