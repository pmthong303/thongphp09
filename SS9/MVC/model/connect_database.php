<?php
class Connect
{
    public $conn;

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'mvc');
        return $this->conn;
    }
    public function __construct()
    {
        $this->connect();
    }
}
