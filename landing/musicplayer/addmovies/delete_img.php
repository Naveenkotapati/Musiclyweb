<?php
require_once('db_connect.php');
extract($_GET);
$query = $conn->query("SELECT * FROM music_list1 where id = '{$id}'");
if($query->num_rows > 0){
    $res = $query->fetch_array();
    //$title=$res['title']; 
    $lan=$res['language']; 
    $delete = $conn->query("DELETE FROM `music_list1` where id = '{$id}'");
    if($delete){
        if(!empty($res['image_path']) && is_file(explode("?",$res['image_path'])[0]))
        unlink(explode("?",$res['image_path'])[0]);
        
        if(!empty($res['audio_path']) && is_file(explode("?",$res['audio_path'])[0]))
        unlink(explode("?",$res['audio_path'])[0]);
        
         // echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/tamilmovies.php";("./")</script>';
         
         //echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/musicplayer/addsongs.php";("./")</script>';
       //  echo '<script>alert("Movie successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/addmovies/addsongs.php")</script>';

          if( $lan=$res['language']=='tamil') {
            
        //    echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/musicplayer/addsongs.php";("./")</script>';
        //   echo '<script>alert("Audio Data successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/index.php?title='. $res['title'] . ' ")</script>';
        echo '<script>alert("Movie successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/addmovies/addsongs.php")</script>';

         }
          elseif( $lan=$res['language']=='telugu') { 
            
            
            //echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/musicplayer/addsongstelugu.php";("./")</script>';
            echo '<script>alert("Movie successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/addmovies/addsongstelugu.php")</script>';

            }  
          elseif( $lan=$res['language']=='hindi') { 
            
            //echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/musicplayer/addsongshindi.php";("./")</script>';
            echo '<script>alert("Movie successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/addmovies/addsongshindi.php")</script>';
             }
          elseif( $lan=$res['language']=='english') {
            
            // echo '<script>alert("Audio Data successfully deleted."); location.href="http://localhost/music/landing/musicplayer/addsongsenglish.php";("./")</script>';
            echo '<script>alert("Movie successfully deleted."); location.replace("http://localhost/music/landing/musicplayer/addmovies/addsongsenglish.php")</script>';
          }
        
            
         
    }else{
        echo '<script>alert("Unable to Delete the audio data."); location.href="http://localhost/music/landing/musicplayer/index.php?title='. $res['title'] . '";("./")</script>';
    }
    
}else{
    echo '<script>alert("Unknown Audio Data ID."); location.href="http://localhost/music/landing/musicplayer/index.php?title='. $res['title'] . '";("./")</script>';
}

?>