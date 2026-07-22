<?php
include 'C:\xampp\htdocs\php\pro_crud\crud\connection.php';

class UserCrud {
    function getAllUsers()
    {
        $connection = new Connection();
        $sql = " SELECT * FROM users ";

        $q=$connection->connect()->prepare($sql);
        $q->execute();
        $q->fetchAll(PDO::FETCH_ASSOC); 
    }
}