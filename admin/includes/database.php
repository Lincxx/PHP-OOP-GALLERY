<?php
require_once("new_config.php");

class Database 
{
    public $conn;

    public function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection()
    {
        //$this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($this->conn->connect_errno)
        {
            die("Database connection failed " . $this->conn->connect_errno);
        }

    }

    public function query($sql)
    {
        $result = $this->conn->query($sql);

        $this->confirm_query($result);

        return $result;
    }

    private function confirm_query($result)
    {
        if(!$result){
            die("Query failed" . $this->conn-error);
        }
    }

    public function escape_string($string)
    {
        $escaped_string = $this->conn->escape_string($string);
        return $escaped_string;
    }

    public function thse_insert_id()
    {
        return $this->conn->insert_id;
    }

}

$database = new Database();


?>