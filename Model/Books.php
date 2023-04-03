<?php

namespace Model;

require_once ('Model.php');

Class Books
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->table = 'books';
        $this->db    = new Model();
    }

    public function getAllBooks()
    {
        return $this->db->getData("SELECT * FROM `$this->table`");
    }

    public function addBook($data)
    {
        return $this->db->mysqliQuery("INSERT INTO `$this->table` (`id`, `name`, `author`, `year`, `text`, `genre_id`, `created_at`, `updated_at`) VALUES (NULL, '".$data['name_book']."', '".$data['name_author']."', '".$data['year']."', '".$data['message']."', '".$data['genre']."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')");
    }
}