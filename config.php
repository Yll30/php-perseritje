<?php

session_start();

$localhost = "localhost";
$root = "root";
$pass = "";
$dbname = "db1";

try{
    $conn = new PDO("mysql:host=$localhost; dbname=$dbname", $user, $pass);
}catch(Exeption $e);{
    echo "error";
}
?>