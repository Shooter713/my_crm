<?php
namespace Model;

Class Model
{
    protected $host_name;
    protected $user_name;
    protected $database;
    protected $password;
    protected $db_handle;

    public function __construct()
    {
        $this->host_name = 'localhost';
        $this->user_name = 'root';
        $this->database  = 'my_crm';
        $this->password  = '';
        $this->db_handle = mysqli_connect($this->host_name, $this->user_name, $this->password);
        mysqli_select_db($this->db_handle, $this->database) or die(mysqli_error());
    }

    public function getData($query)
    {
        $data = [];
        $result = mysqli_query($this->db_handle, $query);
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    public function mysqliQuery($query)
    {
        return mysqli_query($this->db_handle, $query);
    }

}