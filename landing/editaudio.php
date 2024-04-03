



<?php

session_start();

$id=$_GET['id'];
$uid=$_GET['userid'];
$id = $_SESSION['id'];
//error_reporting(0);
//$msg = "";

if ( $_GET['userid'] ==  $_SESSION['id'])
{

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    
	$db = mysqli_connect("localhost", "root", "", "music");

    $audio_title  = $_POST['audio_title'];
    $audio_description = $_POST['audio_description'];
	$pagelink = $_POST['pagelink'];
    $id=$_GET['id'];
    //$id = $_SESSION['id'];
    $name= $_SESSION["name"];
    
    

	$message2 = "Uploaded successful";

	//$sql = "INSERT INTO page_link (audio_title, audio_description, pagelink, userid, username) VALUES ('$audiotitle','$description','$link','$id','$name')";
    $sql = "UPDATE page_link SET audio_title='$audio_title', audio_description='$audio_description', pagelink='$pagelink' WHERE id=$id";
    //$sql = "UPDATE tbl_order_item SET shipping_status='COMPLETE', order_status='COMPLETE' WHERE product_id=$id";

	// Execute query
	mysqli_query($db, $sql);

    //echo "<h3> Uploaded successfully!</h3>";
	echo "<script type='text/javascript'>alert('$message2');window.location.href='http://localhost/music/landing/dashboard.php';</script>";
			
	
}

}

else{

    $message = "Edit Acceess Denied";
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/music/landing/dashboard.php';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.svg in the root directory -->
	<title>Share Audio Link</title>
   
    <link rel="stylesheet" href="assets/css/style.css">
 
       
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/app/css/nice-select.css">
    <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/app/css/slick.css">
    <link rel="stylesheet" href="assets/app/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/app/css/backtotop.css">
    <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/app/css/flaticon_musicly.css">
    <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/app/css/spacing.css">
    <link rel="stylesheet" href="assets/app/css/main.css">

	
<style>
	


		* {box-sizing: border-box}

        /* Add padding to containers */
                .container {
                padding: 16px;
                }

                /* Full-width input fields */
                input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
                }

                input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
                }

                /* Overwrite default styles of hr */
                hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
                }

                /* Set a style for the submit/register button */
                .registerbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
                }

                .registerbtn:hover {
                opacity:1;
                }

                /* Add a blue text color to links */
                a {
                color: dodgerblue;
                }

                /* Set a grey background color and center the text of the "sign in" section */
                .signin {
                background-color: #f1f1f1;
                text-align: center;
                }

</style>
</head>
<body>


  

    <!-- Preloader start -->
    <div id="preloader">
        <div class="line-loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__user mb-30">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <div class="user__name-mail"> <h4 class="user__name"><a href="javascript:void(0)">
                            <?php echo $_SESSION["name"]; ?></a></h4>
                                <p class="user__mail"><?php echo $_SESSION["email"]; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="mobile-menu fix mb-30  d-xl-none"></div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="offcanvas__btn mb-30">
                        <a class="ms-border-btn" href="login.php">Logout</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->


    <?php
    $id=$_GET['id'];
    $db = mysqli_connect("localhost", "root", "", "music");
    $res=mysqli_query($db,"SELECT* from page_link WHERE id=$id");
if($row=mysqli_fetch_array($res)) 
{

$audio_title=$row['audio_title']; 
$audio_description=$row['audio_description']; 
$pagelink=$row['pagelink']; 
}
	?> 

	<form name="audio_form" action="" method="post">
	<div  class="ms-all-content ms-all-content-space">
  <div class="container">
    <h2>Share Your Audio Link</h2>
    <p>Please fill in this form to share your favourite audio link.</p>
    <hr>

    <input type="text" placeholder="Enter Audio Title" name="audio_title" value="<?php echo $audio_title;?>" required>
    

    <input type="text" placeholder="Enter Audio Description" name="audio_description" value="<?php echo $audio_description;?>" required>

	
    <hr>

	<input type="text" placeholder="Enter your Shared Page Link " name="pagelink" value="<?php echo $pagelink;?>" required>
	
    
    <button type="submit" name="upload" class="registerbtn">Submit</button>
	
  </div>

  <!-- <div align ="center">
			<a href="http://localhost/music/landing/tamil2.php">Go Back</a>
			</div>
  </div> -->
</form>


<!-- Offcanvas area start -->
<div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__user mb-30">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <!-- <div class="user__name-mail"> <h4 class="user__name"><a href="javascript:void(0)">
                            <?php echo $_SESSION["name"]; ?></a></h4>
                                <p class="user__mail"><?php echo $_SESSION["email"]; ?>
                            </div> -->
                            <div class="user__name-mail">
    <h4 class="user__name">
        <a href="<?php echo ($_SESSION['role'] == 'admin') ? 'adminprofile.php' : 'profile.php'; ?>">
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
                        <a class="ms-border-btn" href="login.php">Logout</a>
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
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main ms-border2 d-flex align-items-center justify-content-between"style="height:80px">
                                <div class="header__logo pt-25 pb-25">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo.svg" alt="logo not found">
                                    </a>
                                </div>
                                <!-- <div class="d-none d-xxl-block">
                                    <div class="browse-filter p-relative ms-browse-act-wrap">
                                        <div class="ms-browse-icon ms-cp">
                                            <a class="browse-filter__text" href="javascript:void(0)"><i
                                                    class="flaticon-options-lines"></i>
                                                Browse Acts</a>
                                        </div>
                                        <div class="ms-browse-act-item-wrap p-absolute">
                                            <div class="ms-song-item">
                                                <div class="ms-song-img p-relative">
                                                    <a href="genres.html"><img src="assets/img/genres/genres-01.jpg"
                                                            alt="brand-song"></a>
                                                </div>
                                                <div class="ms-song-content">
                                                    <h3 class="ms-song-title"><a href="genres.html">The Different
                                                            Lights</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="ms-song-item">
                                                <div class="ms-song-img p-relative">
                                                    <a href="genres.html"><img src="assets/img/genres/genres-02.jpg"
                                                            alt="brand-song"></a>
                                                </div>
                                                <div class="ms-song-content">
                                                    <h3 class="ms-song-title"><a href="genres.html">The Sweet
                                                            lockdown</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="ms-song-item">
                                                <div class="ms-song-img p-relative">
                                                    <a href="genres.html"><img src="assets/img/genres/genres-03.jpg"
                                                            alt="brand-song"></a>
                                                </div>
                                                <div class="ms-song-content">
                                                    <h3 class="ms-song-title"><a href="genres.html">The Sonics
                                                            Corporate
                                                            Band</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="ms-song-item">
                                                <div class="ms-song-img p-relative">
                                                    <a href="genres.html"><img src="assets/img/genres/genres-04.jpg"
                                                            alt="brand-song"></a>
                                                </div>
                                                <div class="ms-song-content">
                                                    <h3 class="ms-song-title"><a href="genres.html">The
                                                            Northern
                                                            Lights</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="ms-song-item">
                                                <div class="ms-song-img p-relative">
                                                    <a href="genres.html"><img src="assets/img/genres/genres-05.jpg"
                                                            alt="brand-song"></a>
                                                </div>
                                                <div class="ms-song-content">
                                                    <h3 class="ms-song-title"><a href="genres.html">The Sweet The
                                                            Jets</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>
                                                <?php if( $_SESSION['role']=='admin')
     {?> 

                                                    <li>
                                                    <a href="adminhomescreen.php">Home</a>
                                                        
                                                    </li>
                                                    <?php }  else{ ?>  
      
      <?php?> 
      <li>
                                                    <a href="homescreen.php">Home</a>
                                                        
                                                    </li>

      <?php   } ?> 
                                                    <!-- <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="adminabout.php">About us</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="about.php">About us</a>
    </li>
<?php   } ?>    -->
                                                    <li class="has-dropdown">
                                                        <a href="homescreen.php">Languages</a>
                                                        <ul class="submenu">
                                                            <li><a href="tamilmovies.php">Tamil</a></li>
                                                            <li><a href="telugumovies.php">Telugu</a></li>
                                                            <li><a href="hindimovies.php">Hindi</a></li>
                                                            <li><a href="englishmovies.php">English</a></li>
                                                        </ul>
                                                    </li>
                                                    

                                                    <?php if( $_SESSION['role']=='admin')
     {?> 
                                                   <li class="has-dropdown">
                                                        <a href="#">Add Movie Songs</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/musicplayer/addsongs.php">Tamil Movies</a></li>
                                                            <li><a href="news-details.html">Telugu Movies</a></li>
                                                            <li><a href="news-details.html">Hindi Movies</a></li>
                                                            <li><a href="news-details.html">English Movies</a></li>
                                                        </ul>
                                                    </li> <?php }?> 


                                                    <li class="has-dropdown">
                                                        <a href="#">Collabration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Share Audio Link</a></li>
                                                           
                                                        </ul>
                                                    </li>


                                                    
                                                       
                                                        <li><a href="http://localhost/music/landing/mycommunity.php">Chat</a></li>
                                                    
                                                   

                                                   
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


   
   

	

   
	
	


	




<!-- Back to top start -->
<div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->


    <!-- JS here -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/app/js/jquery-3.6.0.min.js"></script>
    <script src="assets/app/js/waypoints.min.js"></script>
    <script src="assets/app/js/bootstrap.bundle.min.js"></script>
    <script src="assets/app/js/nice-select.min.js"></script>
    <script src="assets/app/js/meanmenu.min.js"></script>
    <script src="assets/app/js/swiper-bundle.min.js"></script>
    <script src="assets/app/js/slick.min.js"></script>
    <script src="assets/app/js/magnific-popup.min.js"></script>
    <script src="assets/app/js/backtotop.js"></script>
    <script src="assets/app/js/ajax-form.js"></script>
    <script src="assets/app/js/jquery-ui.min.js"></script>
    <script src="assets/app/js/gsap.min.js"></script>
    <script src="assets/app/js/ScrollToPlugin.min.js"></script>
    <script src="assets/app/js/SplitText.min.js"></script>
    <script src="assets/app/js/ScrollTrigger.min.js"></script>
    <script src="assets/app/js/jquery.jplayer.min.js"></script>
    <script src="assets/app/js/jplayer.playlist.js"></script>
    <script src="assets/app/js/settings.js"></script>
    <script src="assets/app/js/main.js"></script>

</body>
</html>












   















