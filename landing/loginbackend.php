<?php

session_start();



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  //$name = $_POST["name"];
  

  
    
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "music"; 
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


	 $email = $_POST['email'];

     $password = $_POST['password'];
	 
	 $message = "Login failed. Invalid Email or Password.";
	 $message2 = "Login successful";
	 
	 $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  

 
	 $sql = "select * from signup where email = '$email' and password = '$password'";  
	 


 $result = $conn->query($sql);
  



if ($result->num_rows == 1) {

  $userInfo = $result->fetch_assoc();
  $_SESSION["name"] = $userInfo["name"];
  $_SESSION["user"] = $userInfo["name"];
  $_SESSION['id'] = $userInfo['id'];
  $_SESSION['uid'] = $userInfo['id'];
  $_SESSION['role'] = $userInfo['role'];
  $_SESSION["email"] = $userInfo["email"];


//   if ($userInfo['role'] == 'admin') {
//     //header("Location: admin.php");

//     echo "<script type='text/javascript'>alert('$message2');window.location.href='adminhomescreen.php';</script>";
//     $_SESSION["name"] = $userInfo["name"];
// } else {
//     //header("Location: user.php");
    
//     echo "<script type='text/javascript'>alert('$message2');window.location.href='homescreen.php';</script>";
//     $_SESSION["name"] = $userInfo["name"];
// }

  
//   exit();
if ($userInfo['role'] == 'admin') {
  header("Location: adminhomescreen.php");
  exit();
} else {
  header("Location: homescreen.php");
  exit();
}
} else {
  // Invalid credentials, set the error message
  $_SESSION["name"] = "Unknown";
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";

}

// Close the database connection
$conn->close();
}

?>  