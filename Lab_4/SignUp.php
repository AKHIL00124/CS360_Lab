<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>SignUP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Sign Up Here</h1>
<?php
	$db_host = "localhost";
	$db_user = "root"; 
	$db_password = ""; 
	$db_name = "login";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
         if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		$sql = "INSERT INTO info  (fname, lname, email, pwd) VALUES ('$fname', '$lname', '$email', '$pwd')";
		if (mysqli_query($conn, $sql)) {
			echo "User registered successfully!";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
                mysqli_close($conn);
	}
?>
    
    <form class="form" action="SignUp.php" method="post" autocomplete="off">
        <div class="form-list">
        <label for="fname">First Name : </label>
        <input type="text" class="form-control" name="fname" id="fname" required value=""> <br> 
        </div>
        <div class="form-list">
        <label for="lname">Last Name : </label>
        <input type="text" class="form-control" name="lname" id="lname" required value=""> <br> 
        </div>
        <div class="form-list">
        <label for="email">Email : </label>
        <input type="text" class="form-control" name="email" id="email" required value=""> <br>
        </div>
        <div class="form-list">
        <label for="pwd">Password : </label>
        <input type="text" class="form-control" name="pwd" id="pwd" required value=""> <br>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
    </form>
        <br>
        <br>      
        <br>
        <a class="btn btn-warning" href="index.php">Back to Login</a> 
    </div>
</body>
</html>
