<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "music"; 
	

	 $message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $name  = $_POST['name'];

     $email = $_POST['email'];

     $phoneno = $_POST['phoneno'];

	 $password = $_POST['password'];

     $repassword = $_POST['repassword'];    	 
     



     $sql = "INSERT INTO signup(name, email, phoneno, password, repassword, role) VALUES('$name','$email','$phoneno','$password','$repassword','admin')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='../login.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>