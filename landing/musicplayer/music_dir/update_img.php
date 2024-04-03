<?php
require_once('db_connect.php');
session_start();
extract($_GET);
$query = $conn->query("SELECT * FROM music_list where id = '{$id}'");

if($query->num_rows > 0){
    
    $userid=$_SESSION['id'];
    $res = $query->fetch_array();
    
    if( $res['fav']=='on')
    { 
                   
                    $fav = $conn->query("update `music_list` set fav='off', userid='$userid' where id = '{$id}'");
                   
                    echo '<script>alert("Your Favourite Unselected"); location.replace("http://localhost/music/landing/musicplayer/index.php?title='. $res['title'] . '&music='. $res['music'] . ' ")</script>';
                  
    }
            else
            {

                $fav = $conn->query("update `music_list` set fav='on' where id = '{$id}'");
             
                echo '<script>alert("Your Favourite successfully selected"); location.replace("http://localhost/music/landing/musicplayer/index.php?title='. $res['title'] . '&music='. $res['music'] . ' ")</script>';
                                        
                  
                    
                        
                } 
                   
            }              

           
?>