<?php
include_once("config.php");

$name = $_POST['name'] ??'';
$email = $_POST['email'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM pacientat WHERE name = ?");
$stmt->execute([$name]);
$pacienti = $stmt->fetch();
if ($pacientat && email_verify($email, $name['email'])) {
    $_SESSION['name'] = $pacienti['name'];
    echo"welcome". htmlspecialchars($pacientat['name']). "!";
}else{
    echo "invalid Name or Email.";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    

</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your Name" >
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" >
            </div>

            <small>Dont have an account? <a href="signup.php">Sign Up</a></small>
            
            <button>
                <a href="home.php">Login</a>
            </button>
            
        </form>
    </div>
</body>
</html>