<?php

namespace Model;

require_once ('Model.php');

Class Genre
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->table = 'genre';
        $this->db    = new Model();
    }

    public function addGenre($data)
    {
        return $this->db->mysqliQuery(
            "INSERT INTO `$this->table` (`id`, `name`, `created_at`, `updated_at`) VALUES (NULL, '".$data['name']."','".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')"
        );
    }

    public function getAllGenres()
    {
        return $this->db->getData("SELECT * FROM `$this->table`");
    }

    public function editGenre($data)
    {
        return $this->db->mysqliQuery(
            "UPDATE  `$this->table` SET `name` = '".$data['name']."', `created_at` = '".date('Y-m-d H:i:s')."', `updated_at` = '".date('Y-m-d H:i:s')."' WHERE `genre`.`id` = '".$data['genre_id']."';"
        );
    }

}
