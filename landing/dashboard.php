<?php
session_start();
?>



 <?php if( $_SESSION['role']=='user')
     {?> 


<!doctype html>
<html class="no-js" lang="zxx">



        <head>
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
            <style>
                table, tr, th, td {
                    border: 1px solid #aaa;
                    border-collapse: collapse;
                    padding: 5px;
                }
                th {background: #eee}
                
            
            </style>
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
                                                        <a href="#">Languages</a>
                                                        <ul class="submenu">
                                                        <li><a href="allmovies.php">All Movies</a></li>
                                                        <li><a href="http://localhost/music/landing/tamilmovies.php">Tamil</a></li>
                                                            <li><a href="http://localhost/music/landing/telugumovies.php">Telugu</a></li>
                                                            <li><a href="http://localhost/music/landing/hindimovies.php">Hindi</a></li>
                                                            <li><a href="http://localhost/music/landing/englishmovies.php">English</a></li>
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
                    <!-- Join Area Start Here  -->
                    <section class="ms-join-area pb-60 pt-130 p-relative">
                        <!-- <div class="ms-join-position p-absolute text-center">
                            <h2 class="ms-title2 white-text mb-50">Dashboard</h2>
                            <div class="ms-banner3-item-wrap ms-join-img-grid">
                                <div class="ms-banner3-item d-none d-md-block">
                                    
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
                        </div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">
                                    
                                    

                                


                                    
                
        <div class="container_display">
                
                <br><br>
                
                
            
            <table cellpadding="10">
                <tr>
                <th>User Name</th>
                <th>Audio Title</th>
                <th>Audio Description</th>
                <th>Audio Link</th>
                <!-- <th>Status</th> -->
                <th>Action</th>
                </tr>
                <?php
                
                $db = mysqli_connect("localhost", "root", "", "music"); 
                $res=mysqli_query($db,"SELECT* from page_link");
                
                
                
                
                    while($row=mysqli_fetch_array($res)) 
                    {
                        echo '<tr> 
                        <td>'.$row['username'].'</td> 
                        <td>'.$row['audio_title'].'</td> 
                        <td>'.$row['audio_description'].'</td>'; 

                        if ( $row['status'] =='Approval'){
                           echo '<td><a href="'.$row['pagelink'].'">'.$row['pagelink'].'  </td>';
                         } else { 
                        
                            echo '<td><a href="'.$row['status'].'">'.$row['status'].'  </td>';
                         }

                         if ( $row['status'] =='Wait For Approval'){
                        echo '<td><a href="editaudio.php?id='.$row['id'].'&userid='.$row['userid'].'"><button class="btn-primary">Edit </button></a>
                        <br> <br>
                        <a href=\'deleteaudio.php?id='.$row['id'].'&userid='.$row['userid'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                        </td> 
                        <br>                                                              
                        </tr>';
                    } else { }
        } 







        ?>
            </table>
            </div>
            


            
            
            
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
        </body>



</html>

<?php }  else{ ?>  
<?php?> 


<!doctype html>
<html class="no-js" lang="zxx">



<head>
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
    <style>
		table, tr, th, td {
			border: 1px solid #aaa;
			border-collapse: collapse;
			padding: 5px;
		}
		th {background: #eee}
		
	
	</style>
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

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main ms-border2 d-flex align-items-center justify-content-between">
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

                                                    <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="adminabout.php">About us</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="about.php">About us</a>
    </li>
<?php   } ?>   
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
                                                    

                                                    <?php if( $_SESSION['role']=='admin')
     {?> 
                                                    <li class="has-dropdown">
                                                        <a href="#">Add Movies</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/musicplayer/addsongs.php">Tamil Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addsongstelugu.php">Telugu Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addsongshindi.php">Hindi Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addsongsenglish.php">English Movies</a></li>
                                                        </ul>
                                                    </li> <?php }?> 

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
                                                        <a href="#">Collabration</a>
                                                        <ul class="submenu">
                                                            <li><a href="dashboard.php">Dashboard</a></li>
                                                            <li><a href="shareaudio.php">Share Audio Link</a></li>
                                                            
                                                        </ul>
                                                    </li> -->

                                                    <li class="has-dropdown">
                                                        <a href="#">Chat Room</a>
                                                       
                                                        <li><a href="http://localhost/music/landing/mycommunity.php">Chat</a></li>
                                                    </li>
                                                   

                                                   
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
            <!-- Join Area Start Here  -->
            <section class="ms-join-area pb-60 pt-130 p-relative">
                <!-- <div class="ms-join-position p-absolute text-center">
                    <h2 class="ms-title2 white-text mb-50">Dashboard</h2>
                    <div class="ms-banner3-item-wrap ms-join-img-grid">
                        <div class="ms-banner3-item d-none d-md-block">
                            
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
                </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">
                               
                               

                           


                               
        
<div class="container_display">
		
		<br><br>
        
        
	
	<table cellpadding="10">
		<tr>
        <th>User Name</th>
        <th>Audio Title</th>
		<th>Audio Description</th>
		<th>Audio Link</th>
        <!-- <th>Status</th> -->
        <th>Action</th>
        </tr>
		<?php
		
		$db = mysqli_connect("localhost", "root", "", "music"); 
        $res=mysqli_query($db,"SELECT* from page_link");
         
        
        
        
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                <td>'.$row['username'].'</td> 
 <td>'.$row['audio_title'].'</td> 
                  
                  <td>'.$row['audio_description'].'</td> 
                  
				                 
                  <td><a href="'.$row['pagelink'].'">'.$row['pagelink'].'  </td>  
                  <td><a href="'.$row['status'].'">'.$row['status'].'  </td>       
																	
                  <td><a href="acceptdashboard.php?id='.$row['id'].'"><button class="btn-primary">Accept </button></a> 
                  <br>
              <a href="rejectdashboard.php?id='.$row['id'].'""><button class="btn-primary">Reject </button></a>
              <a href=\'deleteallaudio.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                        </td>
																	   
																	   	<br>
																	   
																	   
                  	
                  
				</tr>';
} 







?>
	</table>
	</div>
    


    
    
    
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
</body>



</html>


<?php   } ?> 