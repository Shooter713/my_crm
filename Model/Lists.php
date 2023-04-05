<?php
namespace Model;

require_once ('Model.php');

Class Lists{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->table = 'journal_books';
        $this->db    = new Model();
    }

    public function getAllLists()
    {
        return $this->db->getData("SELECT `journal_books`.`date_return`, `journal_books`.`date_issue`, `journal_books`.`id` as `journal_id`, `users`.`name` as `user_name`, `books`.`name` as `book_name` FROM `$this->table` JOIN `users` ON `users`.`id` = `journal_books`.`user_id` JOIN `books` ON `books`.`id` = `journal_books`.`book_id` ORDER BY `journal_books`.`id` DESC");
    }

    public function addJournal($data)
    {
        return $this->db->mysqliQuery("INSERT INTO `journal_books` (`id`, `user_id`, `book_id`, `date_issue`, `date_return`) VALUES (NULL, '".$data['user_id']."', '".$data['book_id']."', '".date('Y-m-d H:i:s')."', NULL)");
    }

    public function returnBook($data)
    {
        return $this->db->mysqliQuery("UPDATE `journal_books` SET `date_return` = '".$data['date']."' WHERE `journal_books`.`id` = '".$data['journal_id']."'");
    }
}
