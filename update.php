<?php

include_once("config.php");

if(isset($_POST['update'])){

    $id=$_POST['id'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];

    $sql = "UPDATE users SET username=:username , name=:name , surname=:surname , email=:email WHERE id=id";
    $prep = $conn->prepare($sql);
    $prep->blindParam(':id', $id);
    $prep->blindParam(':username', $username);
    $prep->blindParam(':name', $name);
    $prep->blindParam(':surname', $surname);
    $prep->blindParam(':email', $email);

    $prep->prepare();

    header("Locatio:dashboard.php");
}
?>