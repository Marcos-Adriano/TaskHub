<?php

class Connection
{


    
    function __construct()
    {
        try {

            $this->connection = new PDO('mysql:host=localhost;dbname=task_manager', 'root', '');
        } catch (Exception $e) {

            echo $e->getMessage();
            die();
        }
    }

}

?>