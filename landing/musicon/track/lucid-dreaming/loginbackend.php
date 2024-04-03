<?php

session_start();



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = $_POST["name"];
  

  
    
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
    //    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      //  $count = mysqli_num_rows($result);  
          
//         if($count == 1){  
		
//           $_SESSION["name"] = $name;
// 		echo "<script type='text/javascript'>alert('$message2');window.location.href='index.php';</script>";
		  
		
         
//         }  
//         else{  
		

// //            echo "<h1> Login failed. Invalid username or password.</h1>";  
// //			echo '<script>alert("<h1> Login failed. Invalid username or password.</h1>")</script>';
// 							echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
			

//         }   
//         }  


// Check if a user with the given credentials exists
if ($result->num_rows == 1) {
  // User is authenticated, set session variable to indicate login
 // $_SESSION["logged_in"] = true;
  $userInfo = $result->fetch_assoc();
  $_SESSION["name"] = $userInfo["name"];
  $_SESSION["email"] = $userInfo["email"];
  // Redirect to a protected page (e.g., home.php)

  echo "<script type='text/javascript'>alert('$message2');window.location.href='homescreen.php';</script>";
  
  exit();
} else {
  // Invalid credentials, set the error message
  $_SESSION["name"] = "Unknown";
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";

}

// Close the database connection
$conn->close();
}

?>  