<?php
session_start();
 
// Establish your database connection here
$servername = "localhost";
$Name = "root";
$password = "";
$dbname = "music";

$conn = new mysqli($servername, $Name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch room details from the database (replace 'your_table_name' with your actual table name)
$sql = "SELECT Name,phoneno,email FROM signup WHERE id = '" . $_SESSION['id']. "'";





// if (isset($_SESSION['id'])) {
//     // Now it's safe to use $_SESSION['id']
//     $id = $_SESSION['id'];  
//     // Proceed with your code that relies on $user_id
// } else {
//     // Handle the case when the user is not authenticated or the session variable is not set
//     echo "User is not authenticated.";
//     // You can redirect the user to a login page or perform any other appropriate action.
// }


$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch and display room details
    $row = $result->fetch_assoc();
    $Name = $row["Name"];
    $phoneno= $row["phoneno"];
    $email = $row["email"];
   
} else {
    // Handle the case where no data is found
    $Name = "N/A";
    $phoneno = "N/A";
    $email = "N/A";
  
}

// Close the database connection

?>





<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musicly - Music Bands and Musicians HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.svg in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
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

</head>

<body>

    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

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
                    <div class="offcanvas__user mb-30">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
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
                    <?php
            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){ 
              echo '<a href="logout.php" class="ms-border-btn nav-item">Logout</a>';
            }else{
              echo '<a href="login.php" class="ms-border-btn nav-item">Logout</a>';

           }
           ?>
                   
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
                                                    

                                                <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="adminhomescreen.php">Home</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="homescreen.php">Home</a>
    </li>
<?php   } ?>   

                                                    <!-- </li>
                                                    <?php if( $_SESSION['role']=='admin') {?> 
    

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
                                                        <li><a href="allmovies.php">All Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/tamilmovies.php">Tamil</a></li>
                                                            <li><a href="http://localhost/music/landing/telugumovies.php">Telugu</a></li>
                                                            <li><a href="http://localhost/music/landing/hindimovies.php">Hindi</a></li>
                                                            <li><a href="http://localhost/music/landing/englishmovies.php">English</a></li>
                                                        </ul>
                                                    </li>
                                                    

                                                    <!-- <li class="has-dropdown">
                                                        <a href="#">Add New Movie Details</a>
                                                        <ul class="submenu">
                                                            <li><a href="tamilmoviedetails.php">Tamil Movies</a></li>
                                                            <li><a href="news-details.html">Telugu Movies</a></li>
                                                            <li><a href="news-details.html">Hindi Movies</a></li>
                                                            <li><a href="news-details.html">English Movies</a></li>
                                                        </ul>
                                                    </li> -->

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

                                                    <!-- <li class="has-dropdown">
                                                        <a href="#">Collabration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Share Audio Link</a></li>
                                                           
                                                        </ul>
                                                    </li> -->

                                                    
                                                       
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

    <div class="ms-all-content ms-all-content-space">
        <main>
            <section class="ms-login-area pb-50 pt-130">
                <div class="container">
                    <div class="ms-maxw-510 mx-auto">
                        <div class="ms-login-wrap text-center ms-login-space ms-bg-2">
                            
                            <form  method="post">
                
                                <div class="ms-input2-box mb-25">
                                <div style="text-align:left;margin-left:30px;">Name</div>
                                    <input type="name" placeholder="Password" value="<?php echo $Name; ?>" >

                                </div>
                                <div class="ms-input2-box mb-25">
                                    
                              
                                <div style="text-align:left;margin-left:30px;">Email</div>
                                    <input type="text" placeholder="Email"  value="<?php echo $email; ?>" >
                                </div>
                                <div class="ms-input2-box mb-25">
                                <div style="text-align:left;margin-left:30px;">Phone Number</div>
                                    <input type="phoneno" placeholder="Password"  value="<?php echo $phoneno; ?>" >

                                </div>
                                <!-- <div class="ms-submit-btn mb-40">
                                    <button class="unfill__btn d-block w-100" type="submit">Log in</button>
                                </div> -->
                                
                                
                                <!-- <div class="ms-not-account mb-35">
                                    <p>Don’t have an account? <a href="signup.php">Register Now</a></p>
                                </div> -->

                                

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End Here  -->

            

        </main>
        
    </div>

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