<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard1.css">
</head>
<body>
    
 <?php
include_once("config.php");

$sql = "SELECT * FROM terminet";
$getUser = $conn->prepare($sql);
$getUser->execute();
$terminet = $getUser->fetchAll(PDO::FETCH_ASSOC);
 ?>


<div class="container my-5">
    <h2 class="mb-4">Patient Data Table</h2>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Date</th>
          <th>Time</th>
          <th>C/R</th>
        </tr>
      </thead>
      <tbody>

          <?php foreach ($terminet as $user): ?>
  <tr>
    <td><?= htmlspecialchars($user['id']) ;?></td>
    <td><?= htmlspecialchars($user['name']); ?></td>
    <td><?= htmlspecialchars($user['surname']); ?></td>
    <td><?= htmlspecialchars($user['email']); ?></td>
    <td><?= htmlspecialchars($user['data']); ?></td>
    <td><?= htmlspecialchars($user['ora']) ;?></td>
    <td>
      <a href="delete.php?id=<?= urlencode($user['id']) ;?>">Cancel Appointment</a> |
      <a href="edit.php?id=<?= urlencode($user['id']) ;?>">Reschedule Appointment</a>
    </td>
  </tr>
<?php endforeach; ?>
      </tbody>
    </table>
  </div>
 
  <a href="book.php">Book</a>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>