<?php

include_once("congih.php");

$id = $_GET('id');

$sql = "DELETE FROM users WHERE id=:id";

$getUsers = $conn->prepare($sql);

$getUsers->blindPharom(':id' , $id);

$getUsers->execute
?>