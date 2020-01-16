<?php


class DBConnection
{
    public $dsn;
    public $username;
    public $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $conn = null;
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }
}