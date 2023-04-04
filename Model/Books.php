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
        return $this->db->getData("SELECT `books`.`id`, `books`.`name`, `books`.`author`, `books`.`year`, `genre`.`name` as `genre_name` FROM `$this->table` JOIN `genre` ON `genre`.`id` = `books`.`genre_id`;");
    }

    public function addBook($data)
    {
        return $this->db->mysqliQuery("INSERT INTO `$this->table` (`id`, `name`, `author`, `year`, `genre_id`, `created_at`, `updated_at`) VALUES (NULL, '".$data['name_book']."', '".$data['name_author']."', '".$data['year']."', '".$data['genre']."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')");
    }

    public function editBook($data)
    {
        return $this->db->mysqliQuery("UPDATE `books` SET `name` = '".$data['name_book']."', `author` = '".$data['name_author']."', `year` = '".$data['year']."', `genre_id` = '".$data['genre']."', `updated_at` = '".date('Y-m-d H:i:s')."' WHERE `books`.`id` = '".$data['book_id']."'");
    }
}