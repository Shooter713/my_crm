<?php

namespace Model;

require_once ('Model.php');

Class User
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->table = 'users';
        $this->db    = new Model();
    }

    public function getAllUsers()
    {
        return $this->db->getData("SELECT * FROM `$this->table`");
    }

    public function addUser($data)
    {
        return $this->db->mysqliQuery(
            "INSERT INTO `$this->table` (`id`, `name`, `last_name`, `email`, `telephone`, `created_at`, `updated_at`) VALUES (NULL, '".$data['name']."', '".$data['last_name']."', '".$data['email']."', '".$data['telephone']."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')"
        );
    }

    public function editUser($data)
    {
        return $this->db->mysqliQuery(
            "UPDATE `$this->table` SET `name` = '".$data['name']."', `last_name` = '".$data['last_name']."', `email` = '".$data['email']."', `telephone` = '".$data['telephone']."', `updated_at` = '".date('Y-m-d H:i:s')."' WHERE `users`.`id` = '".$data['user_id']."'"
        );
    }
}