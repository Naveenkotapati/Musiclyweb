<?php
    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "music_player"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $Name = $_POST['name'];

     $email = $_POST['email'];

     $password = $_POST['password'];

     $sql = "INSERT INTO signup(name, email, password) VALUES('$Name','$email','$password')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>