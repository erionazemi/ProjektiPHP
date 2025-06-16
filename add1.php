<?php

include_once('config.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $ora = $_POST['ora'];

        $sql = "insert into terminet (name, surname, email, data, ora) values (:name, :surname, :email, :data, :ora)";
        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(":name", $name);
        $sqlQuery->bindParam(":surname", $surname);
        $sqlQuery->bindParam(":email", $email);
        $sqlQuery->bindParam(":data", $data);
        $sqlQuery->bindParam(":ora", $ora);

        $sqlQuery->execute();

        echo "Data saved sucsesfully";
    }

?>