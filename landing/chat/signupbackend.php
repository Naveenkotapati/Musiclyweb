<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "onlinechatapp"; 
	

	 $message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $user_id = $_POST['user_id'];
	  	 $password = $_POST['password'];


	 
	 $sql = "INSERT INTO message(user_id, password) VALUES('$user_id','$password')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/music/landing/chat/login.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>