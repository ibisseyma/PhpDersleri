<?php
 Class Connection {

 private $host = "localhost";
 private $db = "pdo_crud";
 private $username = "root";
 private $password = "";

 function connect (){

try {

   $connection=new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password) ;
   echo "bağlantı kuruldu";
   return $connection;
} catch (PDOException $e) {
    return $e->getMessage();
    
}

 }


 }