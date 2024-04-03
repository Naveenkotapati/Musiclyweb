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
    <div id="preloader" style="background-color:pink;">
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
    <!-- <div class="fix">
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
                            <div class="user__name-mail"> <h4 class="user__name"><a href="javascript:void(0)">
                            <?php // echo $_SESSION["name"]; ?></a></h4>
                                <p class="user__mail"><?php // echo $_SESSION["email"]; ?>
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
    <div class="offcanvas__overlay-white"></div> -->


    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <!-- edit here  -->
    <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body"style="background-color: #00000;">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main ms-border2 d-flex align-items-center justify-content-between" style="height:80px">
                                <div class="header__logo pt-25 pb-25">
                                    <a href="index1.php">
                                        <img src="assets/img/logo/logo.svg" alt="logo not found">
                                    </a>
                                </div>
                               
                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <!-- <li>
                                                    <a href="index1.php">Home</a>
                                                        
                                                    </li> -->
                                                    <!-- <li>
                                                    <a href="about.php">About us</a>
                                                    </li> -->
                                                    <!-- <li class="has-dropdown">
                                                        <a href="homescreen.php">Languages</a>
                                                        <ul class="submenu">
                                                        <li><a href="allmovies.php">All Movie Songs</a></li>
                                                            <li><a href="tamilmovies.php">Tamil</a></li>
                                                            <li><a href="telugumovies.php">Telugu</a></li>
                                                            <li><a href="hindimovies.php">Hindi</a></li>
                                                            <li><a href="englishmovies.php">English</a></li>
                                                        </ul>
                                                    </li>
                                                    

                                                   

                                                    <li class="has-dropdown">
                                                        <a href="homescreen.php">Collaboration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Shareaudio</a></li>
                                                            
                                                        </ul>
                                                    </li> -->

                                                    <!-- <li class="has-dropdown">
                                                        <a href="#">Chat Room</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/chat/login.php">Login</a></li>
                                                            <li><a href="http://localhost/music/landing/chat/signup.php">Register</a></li>
                                                                                                                        
                                                        </ul>
                                                    </li>
                                                    -->
                                                    <?php
            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){ 
              echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
            }else{
              echo '<li class="nav-item"><a href="login.php" class=" nav-link">Login </a></li>';
              echo '<li class="nav-item"><a href="signup.php" class="nav-link">Register</a></li>';


           }?>

                                                   
                                                </ul>
                                            </nav>
                                            
                                        </div>
                                    </div>
<!-- 
                                    <div class="header__action-inner d-flex align-items-center">
                                        <div class="enquiry__list ml-10 mr-10 ms-browse-act-wrap p-relative">
                                            <div class="ms-enquiry-box p-relative d-none d-xl-inline-flex">
<a href="contact.php"><i class="flaticon-star icon"></i> <span class="text">Contact us</span></a>
                                            </div>
                                            
                                        </div> -->


                                   
                                    <!-- <div class="header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="javascript:void(0)">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div> -->



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
                    <h2 class="ms-title2 white-text mb-50">Join With us</h2>
                    <div class="ms-banner3-item-wrap ms-join-img-grid">
                        <div class="ms-banner3-item d-none d-md-block">
                            <div class="ms-banner3-img1 ms-opacity-2 p-relative m-img">
                                <div class="ms-overlay2 p-absolute"></div>
                                <img src="assets/img/banner/banner-thumb-04.png" alt="banner image">
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
                                <img src="assets/img/banner/banner-thumb-06.png" alt="banner image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">
                               




                            <!-- hellooo -->




                            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block  " style="width:90%;height:250px;margin-left:5%;margin-right:5%" src="90(1).png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " style="width:90%;height:250px;margin-left:5%;margin-right:5%" src="dj.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block  "  style="width:90%;height:250px;margin-left:5%;margin-right:5%" src="classic." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->




                            <!-- haiiii -->
                               

                            <div class="wp-block-button btn-lg is-style-fill"><a class="wp-block-button__link" href="login.php" style="border-radius:8px;padding: 0px;margin-left:40px;" rel="noreferrer noopener">
	<img src="tamil.jpeg" alt="Paris"  style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
     
		width: 210px;
	  }
	  "></a>

      

      <img src="telugu.jpeg" alt="Paris" onclick="window.location.href='login.php'"  style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 210px;
	  }
	  "></a>


<img src="hindi.jpeg" alt="Paris" onclick="window.location.href='login.php'" style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 210px;
	  }
	  "></a>


<img src="english.jpeg" alt="Paris" onclick="window.location.href='login.php'"  style="img {
		border: 1px solid #ddd;
		border-radius: 4px;
		padding: 3px;
		width: 210px;
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