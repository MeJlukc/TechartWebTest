<?php
$host = 'localhost';
$dbname = 'workspace__s244';;
$user = 'root';
$password = 'root';

$db = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8", 
    $user, 
    $password
);

?>