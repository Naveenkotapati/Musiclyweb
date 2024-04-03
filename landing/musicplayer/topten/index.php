<?php
    session_start();
    require_once('db_connect.php');
    $con = mysqli_connect("localhost","root","","music"); 
    $sql = "SELECT * FROM `signup`"; 
    $Sql_query = mysqli_query($con,$sql); 
    $All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC); 
    $id = $_SESSION['role'];
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simple Music Player App</title>
    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .card-body {
            max-height: 300px;
            overflow-y: auto;
        }
        body{
background-image: url(naveenazam.jpg) !important;
background-repeat: no-repeat;
        }
    </style>
    <script src="./font-awesome/js/all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body class="     ">
    <script>
        start_loader();
    </script>

<?php if( $_SESSION['role']=='admin')
     {
        
        //$id = $_GET["id"];
        $title = $_GET["title"];
        $musicc = $_GET["music"];
        
        ?> 

     <main>


        
                                                          <?php 
                                                          //  $music = $conn->query("SELECT * FROM music_list where id ='$id'");
                                                          $music = $conn->query("SELECT * FROM music_list1 where title ='$title'");
                                                            while($row = $music->fetch_assoc()):
                                                                   
                                                            ?>
                                                            <div class="col-lg-12">
                                                                <h1 class="fw-bolder text-center" id="project-title"> <?php  echo $row['title'];?></a></h1>
                                                            </div> <?php endwhile; ?>

                                                            <!-- <div align ="center">
                                                                <a href="http://localhost/music/landing/allmovies.php">Go Back</a>
                                                            </div> -->
                                                            <!-- <style>
                                                #goback-link {
                                                    position: fixed;
                                                    top: 10px; /* Adjust this value as needed */
                                                    left: 10px; /* Adjust this value as needed */
                                                    z-index: 9999; /* Ensure it's on top of other elements */
                                                }
                                            </style>

                                            <div id="goback-link">
                                                <a href="http://localhost/music/landing/allmovies.php">&#8592;</a>
                                            </div> -->
                                            <style>
                                                #goback-link {
                                                    position: fixed;
                                                    top: 90px; /* Adjust this value as needed */
                                                    left: 10px; /* Adjust this value as needed */
                                                    z-index: 9999; /* Ensure it's on top of other elements */
                                                    color: #fff; /* Text color */
                                                    background-color: transparent; /* Background color */
                                                    padding: 10px; /* Padding around the icon */
                                                    border-radius: 80%; /* Make it round */
                                                    font-size: 24px; /* Icon size */
                                                    transition: background-color 0.3s ease; /* Smooth transition */
                                                }

                                                #goback-link:hover {
                                                    background-color: #555; /* Hover background color */
                                                }
                                            </style>

                                                <div id="goback-link">
                                                    <a href="http://localhost/music/landing/allmovies.php"><i class="fas fa-chevron-left"></i></a>
                                                </div>

                                                                                                            <!-- <div align="center">
                                                    <a href="http://localhost/music/landing/allmovies.php">&#8592;</a>
                                                </div> -->
                                                        <div class="clear-fix my-5"></div>
                                                        <div  class="container w-100">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="card rounded-0 shadow">
                                                                        <div class="card-header py-1">
                                                                            <div class="d-flex w-100">
                                                                                <h5 class="card-title col-auto flex-grow-1 flex-shrink-1">Music List</h5>
                                                                                <div class="col-auto">
                                                                                    <button class="btn btn-primary rounded-0 btn-sm" data-bs-toggle="modal" data-bs-target="#music_modal" type="button"><i class="fa fa-plus"></i> Add</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="card-body">
                                                                            <ul class="list-group" id="music-list">
                                                                                <?php 
                                                                                $music = $conn->query("SELECT * FROM music_list where title ='$title'");
                                                                                while($row = $music->fetch_assoc()):
                                                                                ?>
                                                                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                                                                    <div class="d-flex w-100 align-items-center">
                                                                                        <div class="col-auto pe-2">
                                                                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "http://localhost/music/landing/musicplayer/images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient    mini-display-img">
                                                                                        </div>
                                                                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                                                                            <p class="m-0 text-truncate" title="<?= $row['title'] ?>"><?= $row['title'] ?></p>
                                                                                        </div>
                                                                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                                                                            <p class="m-0 text-truncate" title="<?= $row['description'] ?>"><?= $row['description'] ?></p>
                                                                                        </div>
                                                                                        <div class="col-auto px-2">
                                                                                            
                                                                                            <button class="btn btn-outline-secondary btn-sm rounded-circle play" data-id="<?= $row['id'] ?>" data-type="pause"><i class="fa fa-play"></i></button>
                                                                                            <button class="btn btn-outline-primary btn-sm rounded-circle edit" data-id="<?= $row['id'] ?>"><i class="fa fa-edit"></i></button>
                                                                                            <button class="btn btn-outline-danger btn-sm rounded-circle delete" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <?php endwhile; ?>
                                                                            </ul>
                                                                        </div>
                                                                        <?php 
                                                                                                        //  $music = $conn->query("SELECT * FROM music_list where id ='$id'");
                                                                                                        $music = $conn->query("SELECT * FROM music_list where title ='$title'");
                                                                                                            while($row = $music->fetch_assoc()):
                                                                                                                
                                                                                                            ?>
                                                                                <!-- <div align ="center">
                                                                                    <a href="#">Recommendation Songs<br><?php  echo $row['music'];?></a>
                                                                                </div> -->
                                                                        <?php endwhile; ?> 
                                                                    
                                                                        <!-- <div class="card-body">
                                                                            
                                                                            <ul class="list-group" id="music-list">
                                                                            
                                                                                <?php 
                                                                                
                                                                                $music = $conn->query("SELECT * FROM music_list where music ='$musicc'");
                                                                                while($row = $music->fetch_assoc()):
                                                                                ?>
                                                                                
                                                                                
                                                                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                                                                    <div class="d-flex w-100 align-items-center">
                                                                                        <div class="col-auto pe-2">
                                                                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "http://localhost/music/landing/musicplayer/images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient    mini-display-img">
                                                                                        </div>
                                                                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                                                                            <p class="m-0 text-truncate" title="<?= $row['title'] ?>"><?= $row['title'] ?></p>
                                                                                        </div>
                                                                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                                                                            <p class="m-0 text-truncate" title="<?= $row['description'] ?>"><?= $row['description'] ?></p>
                                                                                        </div>
                                                                                        <div class="col-auto px-2">
                                                                                            
                                                                                            <button class="btn btn-outline-secondary btn-sm rounded-circle play" data-id="<?= $row['id'] ?>" data-type="pause"><i class="fa fa-play"></i></button>
                                                                                            <button class="btn btn-outline-primary btn-sm rounded-circle edit" data-id="<?= $row['id'] ?>"><i class="fa fa-edit"></i></button>
                                                                                            <button class="btn btn-outline-danger btn-sm rounded-circle delete" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <?php endwhile; ?>
                                                                            </ul>
                                                                            
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 text-center">
                                                                            <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="" id="display-img" class="img-fluid border bg-gradient   ">
                                                                        </div>
                                                                        <h4><b id="inplay-title">---</b></h4>
                                                                        <small class="text-muted" id="inplay-duration">--:--</small>
                                                                        <hr>
                                                                        <p id="inplay-description">---</p>
                                                                        <div class="d-flex w-100 justify-content-center">
                                                                        
                                                                            <div class="mx-1">
                                                                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="prev-btn"><i class="fa fa-step-backward"></i></button>
                                                                            </div>
                                                                            <div class="mx-1">
                                                                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="play-btn" data-value="play"><i class="fa fa-play"></i></button>
                                                                            </div>
                                                                            <div class="mx-1">
                                                                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="stop-btn"><i class="fa fa-stop"></i></button>
                                                                            </div>
                                                                            <div class="mx-1">
                                                                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="next-btn"><i class="fa fa-step-forward"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div class="mx-1">
                                                                                <span id="currentTime">--:--</span>
                                                                            </div>
                                                                            <div id="range-holder" class="mx-1">
                                                                                <input type="range" id="playBackSlider" value="0">
                                                                            </div>
                                                                            <div class="mx-1">
                                                                                <span id="vol-icon"><i class="fa fa-volume-up"></i></span> <input type="range" value="100" id="volume">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="modal text-dark" id="music_modal" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                                <div class="modal-content rounded-0">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"><i class="fa fa-music"></i> Add New Music</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container-fluid">
                                                                        <form action="" id="music-form">
                                                                            <input type="hidden" name="id" >
                                                                            
                                                                            <div class="form-group mb-3">
                                                                                <label for="title" class="control-label">Title</label>
                                                                                <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" required value="<?php echo $title;?>" readonly>
                                                                            </div>
                                                                            
                                                                            <div class="form-group mb-3">
                                                                                <label for="title" class="control-label">Music Director</label>
                                                                                <input type="text" name="music" id="music" class="form-control form-control-sm rounded-0" required value="<?php echo $musicc;?>" readonly>
                                                                            </div>

                                                                            <div class="form-group mb-3">
                                                                                <label for="description" class="control-label">Description</label>
                                                                                <textarea rows="3" name="description" id="description" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="audio" class="control-label">Audio File</label>
                                                                                <input type="file" name="audio" id="audio" class="form-control form-control-sm rounded-0" required accept="audio/*" onchange="displayFileText(this)">
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="img" class="control-label">Display Image</label>
                                                                                <input type="file" name="img" id="img" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage')">
                                                                            </div>
                                                                            <div class="form-group mb-3 text-center">
                                                                                <div class="col-md-6">
                                                                                <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient   " id="dImage">
                                                                                </div>
                                                                            </div>
                                                                                                        <div class="form-group mb-3">
                                                                                                            <label for="status" class="control-label">Recommendation</label>

                                                                                                            <select  type="text" name="status" id="status" class="form-control form-control-sm rounded-0">
                                                                                                            <!-- <option value=" " selected>Choose...</option> -->
                                                                                                            <option value="No">No</option>
                                                                                                            <option value="Yes">Yes</option>
                                                                                                            
                                                                                                                                                        
                                                                                                            </select>
                                                                                                            
                                                                                                        </div>

                                                                                                        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary btn-sm rounded-0" form="music-form">Save</button>
                                                                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal text-dark" id="update_music_modal" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                                <div class="modal-content rounded-0">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"><i class="fa fa-music"></i> Update Music Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container-fluid">
                                                                        <form action="" id="update-music-form">
                                                                            <input type="hidden" name="id" >
                                                                            <div class="form-group mb-3">
                                                                                <label for="title2" class="control-label">Title</label>
                                                                                <input type="text" name="title" id="title2" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music"  readonly>
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="title" class="control-label">Music Director</label>
                                                                                <input type="text" name="music" id="music" class="form-control form-control-sm rounded-0" required value="<?php echo $musicc;?>" readonly>
                                                                            </div>

                                                                            <div class="form-group mb-3">
                                                                                <label for="description2" class="control-label">Description</label>
                                                                                <textarea rows="3" name="description" id="description2" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="audio2" class="control-label">Audio File</label>
                                                                                <input type="file" name="audio" id="audio2" class="form-control form-control-sm rounded-0" accept="audio/*" onchange="displayFileText(this)">
                                                                                <small><i><span class="text-muted">Current:</span> <span id="audio-current"></span></i></small>
                                                                            </div>
                                                                                                    <div class="form-group mb-3">
                                                                                <label for="img2" class="control-label">Display Image</label>
                                                                                <input type="file" name="img" id="img2" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage2')">
                                                                            </div>
                                                                            <div class="form-group mb-3 text-center">
                                                                                <div class="col-md-6">
                                                                                <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient   " id="dImage2">
                                                                                </div>
                                                                            </div>
                                                                                                        <div class="form-group mb-3">
                                                                                                            <label for="status" class="control-label">Recommendation</label>

                                                                                                            <select  type="text" name="status" id="status" class="form-control form-control-sm rounded-0">
                                                                                                            <!-- <option value=" " selected>Choose...</option> -->
                                                                                                            <option value="No">No</option>
                                                                                                            <option value="Yes">Yes</option>
                                                                                                            
                                                                                                                                                        
                                                                                                            </select>
                                                                                                            
                                                                                                        </div>

                                                                            
                                                                            
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary btn-sm rounded-0" form="update-music-form">Save</button>
                                                                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
     </main>


     

     <?php }  else{
        
        ?>  
      
      <?php ?> 

     <main>

    

<div class="col-lg-12">
    <h1 class="fw-bolder text-center" id="project-title">Top 10 Songs</h1>
</div>
          

                                            
                                            
                                                                        
                                                        <!-- <div align ="center">
                                                            
                                                            
                                                                <a href="http://localhost/music/landing/allmovies.php">Go Back</a>
                                                                </div> -->
                                                                <!-- <style>
    #goback-link {
        position: fixed;
        top: 80px; /* Adjust this value as needed */
        left: 10px; /* Adjust this value as needed */
        z-index: 9999; /* Ensure it's on top of other elements */
    }
</style>

<div id="goback-link">
    <a href="http://localhost/music/landing/allmovies.php">&#8592;</a>
</div> -->
<style>
    #goback-link {
        position: fixed;
        top: 90px; /* Adjust this value as needed */
        left: 10px; /* Adjust this value as needed */
        z-index: 9999; /* Ensure it's on top of other elements */
        color: pink; /* Text color */
        background-color: transparent; /* Background color */
        padding: 10px; /* Padding around the icon */
        border-radius: 50%; /* Make it round */
        font-size: 24px; /* Icon size */
        transition: background-color 0.3s ease; /* Smooth transition */
    }

    #goback-link:hover {
        background-color: #555; /* Hover background color */
    }
</style>

<div id="goback-link">
    <a href="http://localhost/music/landing/homescreen.php"><i class="fas fa-chevron-left"></i></a>
</div>
                                                                <!-- <div align="center">
    <a href="http://localhost/music/landing/allmovies.php">&#8592;</a>
</div> -->
        <div class="clear-fix my-5"></div>
        <div  class="container w-100">
            <div class="col-12">
                <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card rounded-0 shadow">
                        <div class="card-header py-1">
                            <div class="d-flex w-100">
                                <h5 class="card-title col-auto flex-grow-1 flex-shrink-1">Music List</h5>
                                <!-- <div class="col-auto">
                                    <button class="btn btn-primary rounded-0 btn-sm" data-bs-toggle="modal" data-bs-target="#music_modal" type="button"><i class="fa fa-plus"></i> Add</button>
                                </div> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group" id="music-list">
                            <?php 
                                                                    //$music = $conn->query("SELECT * FROM music_list where id ='$id'");
                                                                   // $music = $conn->query("SELECT * FROM music_list where title ='$title'");
                                                                   $music = $conn->query("SELECT * FROM music_list where top_ten ='Yes'");
                                                                    while($row = $music->fetch_assoc()):
                                                                    ?>
                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="col-auto pe-2">
                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "http://localhost/music/landing/musicplayer/images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient    mini-display-img">
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row['title'] ?>"><?= $row['title'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row['description'] ?>"><?= $row['description'] ?></p>
                                        </div>
                                        <div class="col-auto px-2">
                                        <button class="btn btn-outline-danger btn-sm rounded-circle fav" data-id="<?= $row['id'] ?>"><i class="fa fa-heart"></i></button>
                                            
                                        </div>
                                        <div class="col-auto px-2">
                                            
                                            <button class="btn btn-outline-secondary btn-sm rounded-circle play" data-id="<?= $row['id'] ?>" data-type="pause"><i class="fa fa-play"></i></button>
                                            <!-- <button class="btn btn-outline-primary btn-sm rounded-circle edit" data-id="<?= $row['id'] ?>"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-outline-danger btn-sm rounded-circle delete" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></button> -->
                                        </div>

                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>



                        <?php 
                                                          //  $music = $conn->query("SELECT * FROM music_list where id ='$id'");
                                                          //$music = $conn->query("SELECT * FROM music_list where title ='$title'");
                                                          $music = $conn->query("SELECT * FROM music_list where top_ten ='Yes'");
                                                            while($row = $music->fetch_assoc()):
                                                                   
                                                            ?>
                                <!-- <div align ="center">
                                    <a href="#">Recommendation Songs<br><?php  echo $row['music'];?></a>
                                </div> -->
                        <?php endwhile; ?> 
                       
                        <!-- <div class="card-body">
                            
                            <ul class="list-group" id="music-list">
                            
                                <?php 
                                
                                $musicc = $_GET["music"];
                                $music = $conn->query("SELECT * FROM music_list where music ='$musicc'");
                                while($row = $music->fetch_assoc()):
                                ?>
                                
                                
                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="col-auto pe-2">
                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "http://localhost/music/landing/musicplayer/images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient    mini-display-img">
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row['title'] ?>"><?= $row['title'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row['description'] ?>"><?= $row['description'] ?></p>
                                        </div>
                                        
                                      
                                        <div class="col-auto px-2">
                                        <button class="btn btn-outline-danger btn-sm rounded-circle fav" data-id="<?= $row['id'] ?>"><i class="fa fa-heart"></i></button>
                                            
                                            
                                        </div>
                                        <div class="col-auto px-2">
                                            <button class="btn btn-outline-secondary btn-sm rounded-circle play" data-id="<?= $row['id'] ?>" data-type="pause"><i class="fa fa-play"></i></button>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            
                        </div> -->

                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="col-md-12 text-center">
                            <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="" id="display-img" class="img-fluid border bg-gradient   ">
                        </div>
                        <h4><b id="inplay-title">---</b></h4>
                        <small class="text-muted" id="inplay-duration">--:--</small>
                        <hr>
                        <p id="inplay-description">---</p>
                        <div class="d-flex w-100 justify-content-center">
                            <div class="mx-1">
                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="prev-btn"><i class="fa fa-step-backward"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="play-btn" data-value="play"><i class="fa fa-play"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="stop-btn"><i class="fa fa-stop"></i></button>
                            </div>
                            <div class="mx-1">
                                <button class="btn btn-sm btn-light bg-gradient text-dark" id="next-btn"><i class="fa fa-step-forward"></i></button>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mx-1">
                                <span id="currentTime">--:--</span>
                            </div>
                            <div id="range-holder" class="mx-1">
                                <input type="range" id="playBackSlider" value="0">
                            </div>
                            <div class="mx-1">
                                <span id="vol-icon"><i class="fa fa-volume-up"></i></span> <input type="range" value="100" id="volume">
                            </div>
                        </div>
                 </div>
                </div>
            </div>
        </div>

        <div class="modal text-dark" id="music_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-music"></i> Add New Music</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="music-form">
                            <input type="hidden" name="id" >
                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" required value="<?php echo $title;?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="audio" class="control-label">Audio File</label>
                                <input type="file" name="audio" id="audio" class="form-control form-control-sm rounded-0" required accept="audio/*" onchange="displayFileText(this)">
                            </div>
                            <div class="form-group mb-3">
                                <label for="img" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient   " id="dImage">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm rounded-0" form="music-form">Save</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal text-dark" id="update_music_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-music"></i> Update Music Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="update-music-form">
                            <input type="hidden" name="id" >
                            <div class="form-group mb-3">
                                <label for="title2" class="control-label">Title</label>
                                <input type="text" name="title" id="title2" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description2" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description2" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="audio2" class="control-label">Audio File</label>
                                <input type="file" name="audio" id="audio2" class="form-control form-control-sm rounded-0" accept="audio/*" onchange="displayFileText(this)">
                                <small><i><span class="text-muted">Current:</span> <span id="audio-current"></span></i></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="img2" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img2" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage2')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="http://localhost/music/landing/musicplayer/images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient   " id="dImage2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm rounded-0" form="update-music-form">Save</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
     </main>

     <?php   } ?> 

</body>
<?php if(isset($conn) && $conn) @$conn->close(); ?>
</html>