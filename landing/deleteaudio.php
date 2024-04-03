



<?php

session_start();

$id=$_GET['id'];
$uid=$_GET['userid'];
$id = $_SESSION['id'];
//error_reporting(0);
//$msg = "";

if ( $_GET['userid'] ==  $_SESSION['id'])
{

    $id=$_GET['id']; 
$db = mysqli_connect("localhost", "root", "", "music");

$result=mysqli_query($db,"DELETE from page_link WHERE id=$id") ; 
if($result)
{
 header("location:dashboard.php?action=deleted");
}

}

else{

    $message = "Delete Acceess Denied";
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/music/landing/dashboard.php';</script>";
}

?>











   















