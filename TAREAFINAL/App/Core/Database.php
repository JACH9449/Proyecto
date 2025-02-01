<?php

namespace App\Core;

class Database
{
    private $connection;

    public function __construct()
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=mi_proyecto", "root", "");
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}