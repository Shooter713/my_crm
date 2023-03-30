<?php
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
        return $this->db->sql("SELECT * FROM `$this->table`");
    }

}