<?php

session_start();



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {





  $name = $_POST["user_id"];
    
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinechatapp"; 
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



	 $user_id = $_POST['user_id'];
	      $password = $_POST['password'];



	 
$message = "Login failed. Invalid username or password.";
	 $message2 = "Login Successful";
	 

	 $user_id = mysqli_real_escape_string($conn, $user_id);  
	  $password = mysqli_real_escape_string($conn, $password);  

	 	 
 
 
	 	 $sql = "select * from message where user_id = '$user_id' and password = '$password'";  




 $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		

		echo "<script type='text/javascript'>alert('$message2');window.location.href='http://localhost/music/landing/chat/index.php';</script>";

		  
		   $_SESSION["user_id"] = $name;
		
         
        }  
        else{  
		

//            echo "<h1> Login failed. Invalid username or password.</h1>";  
//			echo '<script>alert("<h1> Login failed. Invalid username or password.</h1>")</script>';
							echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/music/landing/chat/login.php';</script>";
			

        }   
        }  
?>  