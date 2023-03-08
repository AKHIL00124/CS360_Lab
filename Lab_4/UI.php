<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UI Menu</title>
</head>
<body>
    <div class="container">
    <h1> Welcome to the User Menu </h1>
    <br><br>
<table class="container">
  <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>

<?php
  	$db_host = "localhost";
	$db_user = "root"; 
	$db_password = ""; 
	$db_name = "login";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
         if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
    
if (isset($_GET['delete'])) {
        $fname = $_GET['delete'];
        $sql_delete = "DELETE FROM info WHERE fname='$fname'";
        mysqli_query($conn, $sql_delete);
        header('Location: UI.php');
        exit;
}
        
    $sql_menu = "SELECT * FROM info";
    $result = mysqli_query($conn, $sql_menu);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

        echo "
            <tr>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[email]</td>
                <td>
                    <a href='UI.php?delete=" . $row['fname'] ."'class='btn btn-primary' > Delete </a>
                </td>
            </tr>
        ";          
      }
    } else {
      echo "No Users Registered";
    }
 
?>
</table>
    
        <br><br><br><br>
    <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>