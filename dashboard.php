<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
 <?php
include_once("config.php");

$sql = "SELECT * FROM terminet";
$getUser = $conn->prepare($sql);
$getUser->execute();
$terminet = $getUser->fetchAll();

 ?>


<table>
    <thead>
        <th>ID:</th>
        <th>NAME:</th>
        <th>SURNAME:</th>
        <th>EMAIL:</th>
    </thead>

    <tbody>
        <tr>
            <?php
                foreach ($pacientat as $user) {
            ?>

            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['surname']?></td>
            <td><?= $user['email']?></td>
            <td><?= "<a href='delete.php?id=$user[id]'>delete</a> | <a href='edit.php?id=$user[id]'>edit </a>" ?></td>
        </tr>

       <?php 
              }
          ?>     
    </tbody>
</table>
        
      <a href="book.php">Book:</a>        

</body>
</html>