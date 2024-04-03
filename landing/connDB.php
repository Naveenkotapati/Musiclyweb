<?php
$conn = mysqli_connect("localhost","root","","music_player");
if($conn){
echo "Database Connected Successfully";
}else{
echo "Database Connect Failed";
}

?>