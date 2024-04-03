<?php session_start();
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
    <link rel="stylesheet" href="assets/app/css/flaticon_musicly.css">
    <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/app/css/spacing.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
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

<body class=" ">
    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="#">
                                <img src="assets/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__user mb-30 ">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <div class="user__name-mail">
    <h4 class="user__name">
        <a href="<?php echo ($_SESSION['role'] == 'admin') ? 'http://localhost/music/landing/adminprofile.php' : 'http://localhost/music/landing/profile.php'; ?>">
            <?php echo $_SESSION["name"]; ?>
        </a>
    </h4>
    <p class="user__mail"><?php echo $_SESSION["email"]; ?></p>
</div>
                        </div>
                    </div>
                    
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="mobile-menu fix mb-30  d-xl-none"></div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="offcanvas__btn mb-30">
                        <a class="ms-border-btn" href="http://localhost/music/landing/index1.php">Logout</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body" style="background-color: #000000;">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main ms-border2 d-flex align-items-center justify-content-between"style="height:80px">
                                <div class="header__logo pt-25 pb-25">
                                    <a href="#">
                                        <img src="assets/img/logo/logo.svg" alt="logo not found">
                                    </a>
                                </div>
                                
                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    

                                                <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="http://localhost/music/landing/adminhomescreen.php">Home</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="http://localhost/music/landing/homescreen.php">Home</a>
    </li>
<?php   } ?>   

                                                   
                                                    <li class="has-dropdown">
                                                        <a href="#">Languages</a>
                                                        <ul class="submenu">
                                                        <li><a href="http://localhost/music/landing/allmovies.php">All Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/tamilmovies.php">Tamil</a></li>
                                                            <li><a href="http://localhost/music/landing/telugumovies.php">Telugu</a></li>
                                                            <li><a href="http://localhost/music/landing/hindimovies.php">Hindi</a></li>
                                                            <li><a href="http://localhost/music/landing/englishmovies.php">English</a></li>
                                                        </ul>
                                                    </li>
                                                    

                                                   

                                                    <li class="has-dropdown">
                                                        <a href="#">Add Movies</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongs.php">Tamil Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongstelugu.php">Telugu Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongshindi.php">Hindi Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongsenglish.php">English Movies</a></li>
                                                        </ul>
                                                    </li>
                                                     <li class="has-dropdown">
                                                        <a href="#">Concert</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/concert/addsongs.php">Add Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/tamilconcert.php">Tamil Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/teluguconcert.php">Telugu Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/hindiconcert.php">Hindi Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/englishconcert.php">English Concert</a></li>
                                                        </ul>
                                                    </li>

                                                   

                                                    
                                                    <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="http://localhost/music/landing/mycommunity.php">Chat</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="http://localhost/music/landing/mycommunity2.php">Chat</a>
    </li>
<?php   } ?>   
                                                        <!-- <li><a href="http://localhost/music/landing/mycommunity.php">Chat</a></li> -->
                                                   
                                                   

                                                   
                                                </ul>
                                            </nav>
                                            
                                        </div>
                                    </div>

                                    <div class="header__action-inner d-flex align-items-center">
                                        <div class="enquiry__list ml-10 mr-10 ms-browse-act-wrap p-relative">
                                        <div class="ms-enquiry-box p-relative d-none d-xl-inline-flex">

<?php if( $_SESSION['role']=='admin')
{?> 

        <li>
        <a href="admincontact.php"><i class="flaticon-star icon">

</i> <span class="text">Contact us</span></a>
            
        </li>
        <?php }  else{ ?>  

<?php?> 
<li>
<a href="contact.php"><i class="flaticon-star icon">

</i> <span class="text">Contact us</span></a>
            
        </li>

<?php   } ?> 


</div>
                                            
                                        </div>


                                   
                                    <div class="header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="javascript:void(0)">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->
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
    <!-- <style>
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
</style> -->
   
        <div class="col-lg-12">
            <h1 class="fw-bolder text-center" id="project-title" style="font-size: 50px;color:black"> Add English Movie List </a></h1>
        </div> 

        <!-- <div align ="center">
                            <a href="http://localhost/music/landing/adminhomescreen.php">Go Back</a>
                            </div> -->
                            <!-- <div id="goback-link">
                            <a href="http://localhost/music/landing/adminhomescreen.php"><i class="fas fa-chevron-left"></i></a>
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
                                
                                $music = $conn->query("SELECT * FROM music_list1 where language='english'");
                                
                                
                                while($row = $music->fetch_assoc()):
                                   $lan=$row['language']; 
                                ?>
                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="col-auto pe-2">
                                            <img src="<?= is_file(explode("?",$row['image_path'])[0]) ? $row['image_path'] : "http://localhost/music/landing/musicplayer/images/music-logo.jpg" ?>" alt="" class="img-thumbnail bg-gradient    mini-display-img">
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" style="color:#000" title="<?= $row["title"] ?>"><?= $row['title'] ?></p>
                                        </div>
                                        <div class="col-auto flex-grow-1 flex-shrink-1">
                                            <p class="m-0 text-truncate" style="color:#000" title="<?= $row["description"] ?>"><?= $row['description'] ?></p>
                                        </div>
                                        <div class="col-auto px-2">
                                            
                                            <button class="btn btn-outline-primary btn-sm rounded-circle edit" data-id="<?= $row['id'] ?>"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-outline-danger btn-sm rounded-circle delete" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
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
                                <label for="title" class="control-label">Movie Name</label>
                                <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music" required>
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
                                <label for="title" class="control-label">Music Director</label>
                                <input type="text" name="music" id="music" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
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
                                <label for="title" class="control-label">Music Director</label>
                                <input type="text" name="music" id="music" class="form-control form-control-sm rounded-0" required placeholder="XYZ Music">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description2" class="control-label">Description</label>
                                <textarea rows="3" name="description" id="description2" class="form-control form-control-sm rounded-0" required placeholder="Write the description here"></textarea>
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
</body>
<?php if(isset($conn) && $conn) @$conn->close(); ?>
</html>