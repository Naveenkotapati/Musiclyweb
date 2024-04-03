<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">



<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musicly</title>
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
                    <div class="offcanvas__user mb-30">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <!-- <div class="user__name-mail"> <h4 class="user__name"><a href="profile.php">
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
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body"style="background-color: #00000;">
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
                                                    <li>
                                                    <a href="#">Home</a>
                                                        
                                                    </li>
                                                    <!-- <li>
                                                    <a href="about.php">About us</a>
                                                    </li> -->
                                                    <li class="has-dropdown">
                                                        <a href="#">Languages</a>
                                                        <ul class="submenu">
                                                        <li><a href="allmovies.php">All Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/tamilmovies.php">Tamil</a></li>
                                                            <li><a href="http://localhost/music/landing/telugumovies.php">Telugu</a></li>
                                                            <li><a href="http://localhost/music/landing/hindimovies.php">Hindi</a></li>
                                                            <li><a href="http://localhost/music/landing/englishmovies.php">English</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="#">Concert</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/concert/allevents.php">All Language Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/tamilconcert.php">Tamil Concert </a></li>
                                                            <li><a href="http://localhost/music/landing/concert/teluguconcert.php">Telugu Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/hindiconcert.php">Hindi Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/englishconcert.php">English Concert</a></li>
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
                                                    <!-- <li class="has-dropdown">
                                                        <a href="#">Collabration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Share Audio Link</a></li>
                                                           
                                                        </ul>
                                                    </li> -->
                                                   

                                                    
                                                    <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="mycommunity.php">Chat</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="mycommunity2.php">Chat</a>
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
<a href="contact.php"><i class="flaticon-star icon"></i> <span class="text">Contact us</span></a>
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
            <!-- Join Area Start Here  -->
            <section class="ms-join-area pb-60 pt-130 p-relative">
                <div class="ms-join-position p-absolute text-center">
                    <!-- <h2 class="ms-title2 white-text mb-50" style="margin-top:600px">Join With us</h2> -->
                    <div class="ms-banner3-item-wrap ms-join-img-grid">
                        <div class="ms-banner3-item d-none d-md-block">
                            <div class="ms-banner3-img1 ms-opacity-2 p-relative m-img">
                                <div class="ms-overlay2 p-absolute"></div>
                                <!-- <img src="assets/img/banner/banner-thumb-04.png" alt="banner image"> -->
                            </div>
                        </div>
                        <div class="ms-banner3-item d-none d-md-block">
                            <div class="ms-banner3-img2 m-img p-relative">
                                <img src="assets/img/banner/banner-thumb-05.png" alt="banner image">
                            </div>
                        </div>
                        <div class="ms-banner3-item d-none d-md-block">
                            <div class="ms-banner3-img3 ms-opacity-2 p-relative m-img">
                                <div class="ms-overlay2 p-absolute"></div>
                                <!-- <img src="assets/img/banner/banner-thumb-06.png" alt="banner image"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">



                               
                           
<!-- Trending area start -->
<section class="trending__area p-relative fix pt-130 include__bg pb-130" >
    <div class="ms-overlay ms-overlay4 p-absolute"></div>
    <div class="container">
        <div class="row align-items-end mb-25 bdFadeUp">
            <div class="col-lg-8">
                <div class="section__title-wrapper mb-40 bd-title-anim">
                    <h2 class="section__title"><span class="animated-underline active">Most Trending</span> genres</h2>
                </div>
            </div>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checking for connections
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to retrieve data
    $id = $_SESSION['id'];
    //$musicc = $_GET["music"];
    $sql = "SELECT * FROM music_list WHERE music='Anirudh' AND userid='$id'";
    $result = mysqli_query($conn, $sql);

    // Fetching the row directly without loop
    if ($row = mysqli_fetch_assoc($result)) {
        $music = $row['music'];
        $id = $row['id'];
        ?>

        <div class="ms-trending-active-wrap bdFadeUp">
            <div class="swiper-container ms-trending-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Anirudh</span>
                            <div class="trending__price"></div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="assets/img/trending/anirudh.png" alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="http://localhost/music/landing/musicplayer/music_dir/index.php?music=<?php echo $music; ?>"> Aniruth</a>
                                </div>
                            </div>
                        </div>
                    </div><?php
    }

    mysqli_close($conn);
    ?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checking for connections
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to retrieve data
    $id = $_SESSION['id'];
    //$musicc = $_GET["music"];
    $sql = "SELECT * FROM music_list WHERE music='Devi Sri Prasad' AND userid='$id'";
    $result = mysqli_query($conn, $sql);

    // Fetching the row directly without loop
    if ($row = mysqli_fetch_assoc($result)) {
        $music = $row['music'];
        $id = $row['id'];
        ?>

                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Devi Sri Prasad</span>
                            <div class="trending__price"></div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="assets/img/trending/dsp.png" alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="http://localhost/music/landing/musicplayer/music_dir/index.php?music=<?php echo $music; ?>"> Devi Sri Prasad</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
    }

    mysqli_close($conn);
    ?>

<!-- sample -->


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checking for connections
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to retrieve data
    $id = $_SESSION['id'];
    //$musicc = $_GET["music"];
    $sql = "SELECT * FROM music_list WHERE music='Devi Sri Prasad' AND userid='$id'";
    $result = mysqli_query($conn, $sql);

    // Fetching the row directly without loop
    if ($row = mysqli_fetch_assoc($result)) {
        $music = $row['music'];
        $id = $row['id'];
        ?>

                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">DJ</span>
                            <div class="trending__price"></div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="assets/img/trending/06.jpg" alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="http://localhost/music/landing/musicplayer/music_dir/index.php?music=<?php echo $music; ?>"> DJ</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
    }

    mysqli_close($conn);
    ?>

    <!-- sample -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checking for connections
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to retrieve data
    $id = $_SESSION['id'];
    //$musicc = $_GET["music"];
    $sql = "SELECT * FROM music_list WHERE top_ten='Yes'";
    $result = mysqli_query($conn, $sql);

    // Fetching the row directly without loop
    if ($row = mysqli_fetch_assoc($result)) {
        $top_ten = $row['top_ten'];
        $id = $row['id'];
        ?>

                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Top Songs</span>
                            <div class="trending__price"></div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="assets/img/trending/07.jpg" alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="assets/img/trending/trending-shape.png" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="http://localhost/music/landing/musicplayer/topten/index.php?top_ten=<?php echo $top_ten; ?>"> Top Songs</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
    }

    mysqli_close($conn);
    ?>




                </div>
            </div>
        </div>

      





</section>
<!-- Trending area end -->




                               
                            <div class="wp-block-button btn-lg is-style-fill"><a class="wp-block-button__link" href="tamilmovies.php" style="border-radius:8px;padding: 0px;margin-left:50px;" rel="noreferrer noopener">
	<img src="tamil.jpeg" alt="Paris" style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 200px;
	  }
	  "></a>

      
      
      <img src="telugu.jpeg" alt="Paris" onclick="window.location.href='telugumovies.php'" style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 200px;
	  }
	  "></a>


<img src="hindi.jpeg" alt="Paris" onclick="window.location.href='hindimovies.php'" style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 200px;
	  }
	  "></a>


<img src="english.jpeg" alt="Paris" onclick="window.location.href='englishmovies.php'" style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 200px;
	  }
	  "></a></div>
    


    
    
    
    </div>
  </div>

  
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Join Area End Here  -->

            

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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>