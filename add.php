<?php


    include_once('config.php');


    if(isset($_POST['submit']));
    {


        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];



            $sql = "INSERT INTO users(username,name,surname,password,email) VALUES (:username, :name, :surname, :password, :email)";


            $insertSql = $conn->prepare($sql);


            
            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':surname', $surname);
            $insertSql->bindParam(':password', $password);
            $insertSql->bindParam(':email', $email);


            $insertSql->execute();


            echo "The user has been added successfully";


            echo "<br>";


            echo "<a href='dashboard.php'>Dashboard</a>";


    }



?>