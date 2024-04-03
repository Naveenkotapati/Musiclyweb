<?php
require_once('db_connect.php');
extract($_GET);
//$title = $_GET["title"];

$query = $conn->query("SELECT * FROM music_list where id = '{$id}'");
if($query->num_rows > 0){
    $res = $query->fetch_array();
    $title=$res['title']; 
    
    $delete = $conn->query("DELETE FROM `music_list` where id = '{$id}'");
    if($delete){
        if(!empty($res['image_path']) && is_file(explode("?",$res['image_path'])[0]))
        unlink(explode("?",$res['image_path'])[0]);
        
        if(!empty($res['audio_path']) && is_file(explode("?",$res['audio_path'])[0]))
        unlink(explode("?",$res['audio_path'])[0]);
        
        echo '<script>alert("Audio Data successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/tamilmovies/index.php?title='. $res['title'] . ' ")</script>';
    }else{
        echo '<script>alert("Unable to Delete the audio data."); location.replace("./")</script>';
    }
    
}else{
    echo '<script>alert("Unknown Audio Data ID."); location.replace("./")</script>';
}