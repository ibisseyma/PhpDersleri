<?php
include 'C:\xampp\htdocs\phpTemel\pdo_crud\crud\user_crud.php';
$userCrud = new UserCrud();
$result=$userCrud->getAllUsers();
echo "<pre>";
print_r($result);