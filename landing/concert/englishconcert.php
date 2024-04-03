<?php
session_start();
require_once('db_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Music Player</title>
    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .card-body {
            max-height: 500px;
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

<body class=" ">
    <script>
        start_loader();
        function check(){
var x = document.getElementById("language").selectedOptions[0].label;

  if(x == "Select Language"){
    alert("Please select a language.");
   }
}
    </script>
    <main>

   
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
   
        <div class="col-lg-12">
            <h1 class="fw-bolder text-center" id="project-title"> English Concert </a></h1>
        </div> 


        <?php if( $_SESSION['role']=='admin') {?> 
            <div id="goback-link">
                                <a href="http://localhost/music/landing/adminhomescreen.php"><i class="fas fa-chevron-left"></i></a>
                            </div>
            <?php }  else{ ?>                     
            <?php?>             
            <div id="goback-link">
                                <a href="http://localhost/music/landing/homescreen.php"><i class="fas fa-chevron-left"></i></a>
            </div>
        <?php   } ?>  

        <div class="clear-fix my-5"></div>
        <div  class="container w-100">
            <div class="col-12">
                <div class="row">
                 <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card rounded-0 shadow">
                        <div class="card-header py-1">
                            <div class="d-flex w-100">
                                <h5 class="card-title col-auto flex-grow-1 flex-shrink-1">  Concert list</h5>
                                <!-- <div class="col-auto">
                                    <button class="btn btn-primary rounded-0 btn-sm" data-bs-toggle="modal" data-bs-target="#music_modal" type="button"><i class="fa fa-plus"></i> Add</button>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="card-body">
                            <ul class="list-group" id="music-list">
                               
                                <li class="list-group-item list-group-item-action item">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="col-auto pe-20">
                                            
                                        </div>
                                        
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Name</p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Description</p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Date</p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Time</p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Place</p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <p class="m-0 text-truncate" >Language</p>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </li>
                                
                               
                            </ul>
                        </div> -->
                        <div class="card-body">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Place</th>
        <th scope="col">Language</th>
      </tr>
    </thead>
    <tbody id="music-list">
      <?php
      $music = $conn->query("SELECT * FROM concert where language='english'");
      while ($row = $music->fetch_assoc()):
      ?>
      <tr class="item" data-id="<?= $row['id'] ?>">
        <td>
          <img src="<?= is_file(explode("?", $row['image_path'])[0]) ? $row['image_path'] : "./images/music-logo.jpg" ?>"
               alt="<?= $row['title'] ?>"
               class="img-thumbnail img-fluid"
               style="width: 100px; height: 80px; object-fit: cover;"
          >
        </td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['date'] ?></td>
        <td><?= $row['time'] ?></td>
        <td><?= $row['place'] ?></td>
        <td><?= $row['language'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
                        <!-- <div class="card-body">
                            <ul class="list-group" id="music-list">
                                <?php 
                                $music = $conn->query("SELECT * FROM concert where language='english'");
                                                            
                                
                                while($row = $music->fetch_assoc()):
                                    $lan=$row['language']; 
                                ?>
                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="col-auto pe-2">
                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "./images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient   mini-display-img">
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["title"] ?>"><?= $row['title'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["description"] ?>"><?= $row['description'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["date"] ?>"><?= $row['date'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["time"] ?>"><?= $row['time'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["place"] ?>"><?= $row['place'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" title="<?= $row["language"] ?>"><?= $row['language'] ?></p>
                                        </div>
                                        
                                       
                                    </div>
                                </li>
                                
                                <?php endwhile; ?>
                            </ul>
                        </div> -->
                    </div>
                 </div>
                 <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                        
                        
                        
                        <hr>
                       
                        <!-- <div class="d-flex w-100 justify-content-center">
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
                        </div> -->
                        <!-- <div class="d-flex">
                            <div class="mx-1">
                                <span id="currentTime">--:--</span>
                            </div>
                            <div id="range-holder" class="mx-1">
                                <input type="range" id="playBackSlider" value="0">
                            </div>
                            <div class="mx-1">
                                <span id="vol-icon"><i class="fa fa-volume-up"></i></span> <input type="range" value="100" id="volume">
                            </div>
                        </div> -->
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
                                <label for="title" class="control-label">Concert Name</label>
                                <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            <div class="form-group mb-3">
                                                            <label for="language" class="control-label">Language</label>

                                                            <select type="text" name="language" id="language" class="form-control form-control-sm rounded-0" onfocusout="check()" required>
										                    <option value="">Select Language</option>
										                    <option value="tamil">Tamil</option>
										                    <option value="telugu">Telugu</option>
                                                            <option value="hindi">Hindi</option>
                                                            <option value="english">English</option>
                        									</select>
                                                            
                                                        </div>
                            <div class="form-group mb-3">
                                <label for="description" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                            </div>
                             <!-- <div class="form-group mb-3">
                                <label for="audio" class="control-label">Audio File</label>
                                <input type="file" name="audio" id="audio" class="form-control form-control-sm rounded-0" required accept="audio/*" onchange="displayFileText(this)">
                            </div> -->

                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Date</label>
                                <input type="date" name="date" id="date" class="form-control form-control-sm rounded-0" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Time</label>
                                <input type="text" name="time" id="time" class="form-control form-control-sm rounded-0" required placeholder="6 PM">
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Place</label>
                                <input type="text" name="place" id="place" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="img" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="./images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient  " id="dImage">
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
                                <label for="title2" class="control-label">Movie Name</label>
                                
                                <input type="text" name="title" id="title2" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            <div class="form-group mb-3">
                                                            <label for="language" class="control-label">Language</label>

                                                            <select type="text"  name="language" id="language" class="form-control form-control-sm rounded-0">
										                    <option value="<?php echo $lan;?>"> <?php echo $lan;?> </option>
										                    <option value="tamil">Tamil</option>
										                    <option value="telugu">Telugu</option>
                                                            <option value="hindi">Hindi</option>
                                                            <option value="english">English</option>
                        									</select>
                                                            
                                                        </div>
                            <div class="form-group mb-3">
                                <label for="description2" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description2" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Date</label>
                                <input type="date" name="date" id="date" class="form-control form-control-sm rounded-0" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Time</label>
                                <input type="text" name="time" id="time" class="form-control form-control-sm rounded-0" required placeholder="6 PM">
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="control-label">Place</label>
                                <input type="text" name="place" id="place" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="img2" class="control-label">Display Image</label>
                                <input type="file" name="img" id="img2" class="form-control form-control-sm rounded-0" accept="image/*" onchange="displayImg(this,'dImage2')">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <div class="col-md-6">
                                <img src="./images/music-logo.jpg" alt="Image" class="img-fluid img-thumbnail bg-gradient  " id="dImage2">
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
</body>
<?php if(isset($conn) && $conn) @$conn->close(); ?>
</html>