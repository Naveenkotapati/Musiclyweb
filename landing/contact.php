<?php
session_start();
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
                                                        <li><a href="allmovies.php">All Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/tamilmovies.php">Tamil</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/telugumovies.php">Telugu</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/hindimovies.php">Hindi</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/englishmovies.php">English</a></li>
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
                                                    </li>
                                                    <?php }?> 

                                                    <!-- <li class="has-dropdown">
                                                        <a href="#">Collabration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Share Audio Link</a></li>
                                                           
                                                        </ul>
                                                    </li> -->


                                                    
                                                       
                                                        <li><a href="http://localhost/music/landing/mycommunity2.php">Chat</a></li>
                                                    
                                                   

                                                   
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
            <!-- page title area start  -->
            <section class="page-title-area page-title-spacing p-relative zindex-1 ">
            <!-- data-background="assets/img/bg/work-bg.jpg" -->
                <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <h3 class="ms-page-title text-center" style="color:black">Contact us</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

           
        </main>
       
    </div>


    <footer>
    <!-- data-background="assets/img/bg/footer-bg.png" -->
            <div class="ms-footer3-wrap include__bg zindex-1 p-relative" >
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="ms-footer3-top pt-150">
                    <div class="container">
                        <div class="ms-border2">
                            
                            
                            <div class="row mb-15" style="
    padding-top: 600px;>
                                <div class="col-xxl-4 col-lg-5 col-md-6">
                                    <div class="ms-footer2-widget mb-50 pr-20">
                                        <h3 class="ms-footer2-title" style="color:black">Get in touch</h3>
                                        <div class="ms-footer2-contact border-0 pb-40">
                                            <ul>
                                                <li><i class="flaticon-pin"></i><a href="#"  >Saveetha School of Engineering,
                                                        Chennai,
                                                        Tamil Nadu
                                                        602105, India</a></li>
                                                <li><i class="flaticon-phone-call"></i><a href="tel:9243567014">
                                                        9243
                                                        567014</a></li>
                                                <!-- <li><i class="flaticon-mail"></i><a href="https://html.topylo.com/cdn-cgi/l/email-protection#e28b8c848da28f97918b818e9b818d8c96838196cc818d8f"><span class="__cf_email__" data-cfemail="4821262e2708253d3b212b24312b27263c292b3c662b2725">[email&#160;protected]</span></a>
                                                </li> -->
                                                <li><i class="flaticon-mail"></i><a href="mailto:naveenkotapati46@gmail.com"><span>naveenkotapati46@gmail.com</span></a></li>

                                            </ul>
                                        </div>
                                        <div class="ms-footer-social mb-15">
                                            <a href="https://www.instagram.com/" title="Instagram"
                                                target="_blank" style="color:black">IN</a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank" style="color:black">TW</a>
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank" style="color:black">FB</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-xxl-2 col-lg-3 col-md-6">
                                    <div class="ms-footer2-widget ms-footer2-widget2 mb-50">
                                        <h3 class="ms-footer2-title">Company</h3>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="contact.html">Terms & Policy</a></li>
                                            <li><a href="contact.html">Help & Support</a></li>
                                            <li><a href="#">Press</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-lg-3 col-md-6">
                                    <div class="ms-footer2-widget mb-50">
                                        <h3 class="ms-footer2-title">Local Band Group</h3>
                                        <ul>
                                            <li><a href="#">The Tricks</a></li>
                                            <li><a href="#">Sound City</a></li>
                                            <li><a href="#">Big Teaser</a></li>
                                            <li><a href="#">The New Tones</a></li>
                                            <li><a href="#">Halos Music</a></li>
                                            <li><a href="#">Soho Soul</a></li>
                                            <li><a href="#">Atlantic</a></li>
                                            <li><a href="#">The Fiction</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-footer-bottom"style="height: 200px;>
                    <div class="container">
                        <div class="ms-footer-bottom-wrap text-center pt-35 pb-20">
                            <div class="ms-footer-copy">
                                <p style="color:black">© Musicly 2023, All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here  -->


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