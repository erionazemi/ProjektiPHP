<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];

		if(empty($name) || empty($surname) || empty($email))
		{
			echo "You need to fill all the fields.";
		}
		else
		{
			$sql = "SELECT surname FROM pacientat WHERE surname=:surname";

			$tempSQL = $conn->prepare($sql);
			$tempSQL->bindParam(':surname', $surname);
			$tempSQL->execute();

			if($tempSQL->rowCount() > 0)
			{
				echo "Username exists!";
				header( "refresh:2; url=signup.php" ); 
			}
			else
			{
				$sql = "insert into pacientat (name, surname, email) values (:name, :surname, :email)";
				$insertSql = $conn->prepare($sql);
			
				$insertSql->bindParam(':name', $name);
				$insertSql->bindParam(':surname', $surname);
				$insertSql->bindParam(':email', $email);

				$insertSql->execute();

				echo "Data saved successfully ...";
				header( "refresh:2; url=login.php" ); 
			}
		}
	}
?>