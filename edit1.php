<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM terminet WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>

    <style>

        form>input {
            margin-bottom: 10px;
            font-size: 20px;
            padding: 5px;
        }

        button {
            background: none;
            border: none;
            border: 1px solid black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Edit Appointment</h2>
    
    <form action="update.php" method="POST" class="shadow p-4 rounded bg-light">
      <input type="numbers" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          value="<?= htmlspecialchars($user['name'] ?? '') ?>"
          required
        />
      </div>

      <div class="mb-3">
        <label for="surname" class="form-label">Surname</label>
        <input
          type="text"
          class="form-control"
          id="surname"
          name="surname"
          value="<?= htmlspecialchars($user['surname'] ?? '') ?>"
          required
        />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          value="<?= htmlspecialchars($user['email'] ?? '') ?>"
          required
        />
      </div>

      <div class="mb-3">
        <label for="data" class="form-label">Date</label>
        <input
          type="date"
          class="form-control"
          id="data"
          name="data"
          value="<?= htmlspecialchars($user['data'] ?? '') ?>"
          required
        />
      </div>

      <div class="mb-3">
        <label for="ora" class="form-label">Time</label>
        <input
          type="time"
          class="form-control"
          id="ora"
          name="ora"
          value="<?= htmlspecialchars($user['ora'] ?? '') ?>"
          required
        />
      </div>

      <div class="d-flex justify-content-between">
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
    <a href="dashboard1.php">Dashboard</a>
    </body>
</html>