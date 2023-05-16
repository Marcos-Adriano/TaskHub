<?php

class Connection
{
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=task_manager', 'root', '');
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>