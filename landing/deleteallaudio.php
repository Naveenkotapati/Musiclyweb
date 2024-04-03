



<?php

session_start();

$id=$_GET['id'];
//$uid=$_GET['userid'];
//$id = $_SESSION['id'];
//error_reporting(0);
//$msg = "";



    
$db = mysqli_connect("localhost", "root", "", "music");

$result=mysqli_query($db,"DELETE from page_link WHERE id=$id") ; 
if($result)
{
 header("location:dashboard.php?action=deleted");
}

?>











   















