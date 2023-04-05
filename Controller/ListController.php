<?php
namespace Controller;

require_once __DIR__ . '/../Model/Lists.php';
use Model\Lists;

Class ListController{

    public static function index()
    {
        $lists = new Lists();
        return $lists->getAllLists();
    }

    public static function addJournal($data)
    {
        $lists = new Lists();
        return $lists->addJournal($data);
    }

    public static function returnBook($data)
    {
        $lists = new Lists();
        return $lists->returnBook($data);
    }
}
