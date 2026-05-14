<?php

require_once './configs/database.php';

class BaseModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::connect();
    }
}