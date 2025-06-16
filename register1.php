<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
        $data = $_POST['data'];
        $ora = $_POST['ora'];


		if(empty($name) || empty($surname) || empty($email) || empty($data) || empty($ora))
		{
			echo "You need to fill all the fields.";
		}
		else
		{
			$sql = "SELECT surname FROM terminet WHERE surname=:surname";

			$tempSQL = $conn->prepare($sql);
			$tempSQL->bindParam(':surname', $surname);
			$tempSQL->execute();

			if($tempSQL->rowCount() > 0)
			{
				echo "Termini existon!";
				header( "refresh:2; url=dashboard1.php" ); 
			}
			else
			{
				$sql = "insert into terminet (name, surname, email, data, ora) values (:name, :surname, :email, :data. :ora)";
				$insertSql = $conn->prepare($sql);
			
				$insertSql->bindParam(':name', $name);
				$insertSql->bindParam(':surname', $surname);
				$insertSql->bindParam(':email', $email);
                $insertSql->bindParam(':data', $data);
                $insertSql->bindParam(':ora', $ora);

				$insertSql->execute();

				echo "Data saved successfully ...";
				header( "refresh:2; url=dashboard1.php" ); 
			}
		}
	}
?>