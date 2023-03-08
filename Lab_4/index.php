<?php

$db_host = "localhost";
	$db_user = "root"; 
	$db_password = ""; 
	$db_name = "login";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $query = "SELECT * FROM info WHERE email='$email' AND pwd='$pwd'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)) {
       session_start();         
       session_regenerate_id();
       $_SESSION["user_id"] = $user["id"];     
       header("Location: UI.php");
       exit;
  } else {
       $is_invalid = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
    <h1> Welcome to my Login / Sign-Up Website </h1>

     <?php if ($is_invalid): ?>
        <em>Invalid Email or password</em>
    <?php endif; ?>

        <form class="form" action="index.php" method="post" autocomplete="off">
        <div class="form-list">
        <label for="email">Email : </label>
        <input type="text" class="form-control" name="email" id="email"> <br>
        </div>
        <div class="form-list">
        <label for="pwd">Password : </label>
        <input type="text" class="form-control" name="pwd" id="pwd"> <br>
        </div>
        <button class="btn btn-primary" name="Log In">Log In</button>
    </form>
        <br>
        <br>      
        <br>
        <a class="btn btn-warning" href="SignUp.php">Sign Up here</a> 
       
    </div>
</body>
</html>
