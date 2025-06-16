<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h2>Welcome to our Health Clinic</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="book.php">Book Your Appointment</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard1.php">Reschedule or Cancel Your Appointment</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Log Out</a></li>
                </ul>
            </div>
        </nav>
    <header>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="book.css">

<div class="book">
		
	<form class="form-signin" action="register1.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please fill the Form</h1>

		<label for="inputEmail" class="sr-only">Name</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required autofocus>

		<label for="inputEmail" class="sr-only">Surname</label>
		<input type="text" id="inputSurname" class="form-control" placeholder="Surname" name="surname" required autofocus>
		
		<label for="inputPassword" class="sr-only">Email</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>

        <label for="inputPassword" class="sr-only">Date</label>
		<input type="date" id="inputData" class="form-control" placeholder="Date" name="date" required>

        <label for="inputPassword" class="sr-only">Time</label>
		<input type="time" id="inputEmail" class="form-control" placeholder="Time" name="ora" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Book</button><br>


	</form>
</div>

<footer>
        <p>&copy; 2025 Health Clinic | All rights reserved.</p>
    </footer>
