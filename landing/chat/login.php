
<?php


include("loginbackend.php");
 $con = mysqli_connect("localhost","root","","music"); 
 $sql = "SELECT * FROM `signup`"; 
 $Sql_query = mysqli_query($con,$sql); 
 $All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC); 
 $id = $_SESSION['role'];
 
 ?>



<!doctype html>
<!-- <html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link rel="stylesheet" href="styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      
      <style>

         
      
      .button1 {
  background-color: white; 
  color: black; 
text-align: center;
position: center;
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008000;
  color: white;
}


</style>
   </head>
   <body>
      <div class="container-fluid">
         <div class="row p-2 bg-color-green">
            <h2 class="col-12">Online Chat App</h2>
         </div>
         <div class="row p-2 bg-color-gray max-height-90">
            <div class="col-12 d-flex">
<form action="loginbackend.php" method="post">
                  <h3>Enter your User Name:</h3>
                  <input type="text" name="user_id" class="form-control" required>
                                    <h3>Enter your Password:</h3>
                      <input type="password" class="form-control" name="password" required>

                  <button type="submit" class="btn btn-light form-control mt-2">Submit</button>
                  
                  <p>     Create Account? <a href="http://localhost/music/landing/chat/signup.php"> Signup Now</a></p>
                  
               </form>
            </div>
         </div>
      </div>
      
   
      <?php if( $_SESSION['role']=='admin')
     {?> 

  <div class="center">
  <div  class="btn btn-light form-control mt-2">
<button class="button1" onClick="window.location.href='http://localhost/music/landing/adminhomescreen.php';" align="center">Go Back</button></div>

</div>

<?php }  else{ ?>          <?php?> 
   <div class="center">
  <div  class="btn btn-light form-control mt-2">
<button class="button1" onClick="window.location.href='http://localhost/music/landing/homescreen.php';" align="center">Go Back</button></div>

</div>  <?php   } ?>   

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html> -->
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>
   <link rel="stylesheet" href="styles.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
      body {
         background-color: #f8f9fa;
      }

      .container-login {
         background-color: white;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         padding: 20px;
         margin-top: 50px;
         max-width: 400px;
         margin-left: auto;
         margin-right: auto;
      }

      .button1 {
         background-color: white;
         color: black;
         text-align: center;
         position: center;
         border: 2px solid #008CBA;
      }

      .button1:hover {
         background-color: #008000;
         color: white;
      }
   </style>
</head>

<body>
   <div class="container-fluid">
      <div class="row p-2 bg-color-green">
         <h2 class="col-12">Online Chat App</h2>
      </div>
      <div class="row p-2 bg-color-gray max-height-90">
         <div class="col-12 d-flex justify-content-center">
            <div class="container-login">
               <form action="loginbackend.php" method="post">
                  <h3>Enter your User Name:</h3>
                  <input type="text" name="user_id" class="form-control mb-3" required>
                  <h3>Enter your Password:</h3>
                  <input type="password" class="form-control mb-3" name="password" required>
                  <button type="submit" class="btn btn-light form-control mt-2">Submit</button>
                  <p>Create Account? <a href="http://localhost/music/landing/chat/signup.php">Signup Now</a></p>
               </form>
            </div>
         </div>
      </div>
   </div>

   <?php if ($_SESSION['role'] == 'admin') { ?>
      <div class="center">
         <div class="btn btn-light form-control mt-2">
            <button class="button1" onClick="window.location.href='http://localhost/music/landing/adminhomescreen.php';" align="center">Go Back</button>
         </div>
      </div>
   <?php } else { ?>
      <div class="center">
         <div class="btn btn-light form-control mt-2">
            <button class="button1" onClick="window.location.href='http://localhost/music/landing/homescreen.php';" align="center">Go Back</button>
         </div>
      </div>
   <?php } ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>