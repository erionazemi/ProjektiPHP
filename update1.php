<?php

include_once("config.php");

if(isset($_POST['update'])){  
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];

    $sql = "UPDATE terminet SET name=:name, surname=:surname, email=:email, data=:data, ora=:ora WHERE id=:id";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id) ;
    $prep->bindParam(':name', $name) ;
    $prep->bindParam(':surname', $surname) ;
    $prep->bindParam(':email', $email) ;
    $prep->bindParam(':data', $data) ;
    $prep->bindParam(':ora', $ora) ;

    $prep->execute();

    header("Location:dashboard1.php");


}

?>