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
                                                <?php if( $_SESSION['role']=='admin') {?> 
    

    <li>
        <a href="adminhomescreen.php">Home</a>
    </li><?php }  else{ ?> 

        <?php?> 

        <li>
    <a href="homescreen.php">Home</a>
    </li>
<?php   } ?>  
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
                                                    
                                                    <?php if( $_SESSION['role']=='admin')
     {?> 
                                                    <li class="has-dropdown">
                                                        <a href="#">Add Movies</a>
                                                        <ul class="submenu">
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongs.php">Tamil Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongstelugu.php">Telugu Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongshindi.php">Hindi Movies</a></li>
                                                            <li><a href="http://localhost/music/landing/musicplayer/addmovies/addsongsenglish.php">English Movies</a></li>
                                                        </ul>
                                                    </li> <?php }?> 
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

    <div class="ms-all-content ms-content-mobile-space pt-130">
        <main>
            <!-- About Area Start Here  -->
            <section class="ms-about-area fix">
                <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                    data-background="assets/img/about/about3.jpg">
                    <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10">
                                <div class="ms-about-content text-center">
                                    <h2 class="ms-title2 white-text mb-30 bd-title-anim">Admin About us
                                    </h2>
                                    <p class="capitalize mb-65">musicly is the UK's leading live music booking
                                        agency: we
                                        manage
                                        over
                                        3000 bookings a year, from intimate <br> weddings to high-profile
                                        corporate
                                        functions.
                                    </p>
                                   
                                </div>
 

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End Here  -->

           

           
           

        </main>

       
    </div>



 <!-- work area start -->
 <section class="work__area pt-30 pb-70">
                <div class="container">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6">
                            <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                                <div class="ms-work3-inner">
                                    <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                        <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                        <img src="assets/images/work-thumb-06.png" alt="work image">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="work__content-wrapper p-relative mb-60">
                                <div class="section__title-wrapper mb-50">
                                    <h2 class="section__title mb-40 bd-title-anim">How we works</h2>
                                    <p class="mb-55">Our hand-picked acts will guarantee you fantastic wedding
                                        <br>
                                        entertainment
                                        for each part. We'll provide help and support 24 hours a <br> day, 7
                                        days a
                                        week,
                                        right
                                        up until
                                    </p>
                                </div>
                                <div class="work__features-inner">
                                    <div class="work__features-item">
                                        <div class="work__features-icon">
                                            <span>
                                                <svg width="46" height="27" viewBox="0 0 46 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_36_265)">
                                                        <mask id="mask0_36_265" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="2" y="-1" width="42"
                                                            height="27">
                                                            <path
                                                                d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                                fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </mask>
                                                        <g mask="url(#mask0_36_265)">
                                                            <path
                                                                d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                                stroke="white" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                        <mask id="mask1_36_265" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="0" y="23" width="46"
                                                            height="4">
                                                            <path
                                                                d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                                fill="#2690FF" />
                                                        </mask>
                                                        <g mask="url(#mask1_36_265)">
                                                            <path
                                                                d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                                fill="white" />
                                                        </g>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.6847 16.2461H16.1739L15.057 10.614H11.7063L10.9617 16.2461H12.4509V17.7478C12.4509 18.368 12.9509 18.8743 13.5678 18.8743C14.1889 18.8743 14.6847 18.37 14.6847 17.7478V16.2462V16.2461Z"
                                                            fill="white" stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M21.7584 18.8743H20.2692L18.4077 10.6139H23.6199L21.7584 18.8743Z"
                                                            fill="white" stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M13.3817 9.48762C14.3069 9.48762 15.057 8.73116 15.057 7.79801C15.057 6.86486 14.3069 6.1084 13.3817 6.1084C12.4564 6.1084 11.7063 6.86486 11.7063 7.79801C11.7063 8.73116 12.4564 9.48762 13.3817 9.48762Z"
                                                            fill="white" stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M20.8277 9.48762C21.753 9.48762 22.5031 8.73116 22.5031 7.79801C22.5031 6.86486 21.753 6.1084 20.8277 6.1084C19.9024 6.1084 19.1523 6.86486 19.1523 7.79801C19.1523 8.73116 19.9024 9.48762 20.8277 9.48762Z"
                                                            fill="white" stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M27.9299 7.56274H34.8759" stroke="white"
                                                            stroke-linecap="round" />
                                                        <path d="M27.9299 10.4714H34.8759" stroke="white"
                                                            stroke-linecap="round" />
                                                        <path d="M27.9299 13.3801H34.8759" stroke="white"
                                                            stroke-linecap="round" />
                                                        <path d="M27.9299 16.2888H32.5446" stroke="white"
                                                            stroke-linecap="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_36_265">
                                                            <rect width="45" height="27" fill="white"
                                                                transform="translate(0.523438)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="work__features-content">
                                            <h4>Browse and compare.</h4>
                                            <p>Compare rates and availability <br> of local entertainers</p>
                                        </div>
                                    </div>
                                    <div class="work__features-item">
                                        <div class="work__features-icon">
                                            <span>
                                                <svg width="46" height="30" viewBox="0 0 46 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_36_354)">
                                                        <mask id="mask0_36_354" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="6" y="-1" width="41"
                                                            height="27">
                                                            <path
                                                                d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                                fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </mask>
                                                        <g mask="url(#mask0_36_354)">
                                                            <path
                                                                d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                                stroke="white" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                        <path
                                                            d="M40.7134 17.208L27.6577 17.208M24.9091 17.208L11.8533 17.208"
                                                            stroke="white" stroke-linecap="square"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M31.5173 11.7109L39.6023 11.7109C40.2159 11.7109 40.7134 11.2135 40.7134 10.5998V5.95061C40.7134 5.33696 40.2159 4.8395 39.6023 4.8395L31.5173 4.8395C30.9037 4.8395 30.4062 5.33696 30.4062 5.95061V10.5998C30.4062 11.2135 30.9037 11.7109 31.5173 11.7109Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M34.5291 11.7109V4.8395M40.7134 8.96236H35.2162M34.5291 7.58808H30.4062"
                                                            stroke="white" stroke-linecap="square"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M1.26636 20.3433H12.9603V28.4391H1.26636V20.3433Z"
                                                            fill="white" stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.0606 19.8935C12.0606 17.1611 9.8456 14.946 7.11321 14.946C4.38081 14.946 2.16577 17.1611 2.16577 19.8935"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_36_354">
                                                            <rect width="45" height="29.4444" fill="white"
                                                                transform="translate(0.523438)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="work__features-content">
                                            <h4>Book securely.</h4>
                                            <p>Booking through GigSalad <br> ensures payment protection.</p>
                                        </div>
                                    </div>
                                    <div class="work__features-item">
                                        <div class="work__features-icon">
                                            <span>
                                                <svg width="46" height="42" viewBox="0 0 46 42" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_36_396)">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M36.5665 12.3724C38.1067 12.677 39.8538 12.4088 41.4313 11.4975C44.5453 9.70015 45.8206 6.07889 44.2793 3.4094C42.7388 0.740078 38.965 0.0338131 35.8508 1.83184C34.2735 2.7425 33.1675 4.12203 32.6608 5.60739L36.5665 12.3724Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <mask id="mask0_36_396" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="38" y="2" width="4"
                                                            height="4">
                                                            <path
                                                                d="M38.9634 2.95068L40.5035 3.36336L40.0908 4.90348L38.5507 4.4908L38.9634 2.95068Z"
                                                                stroke="#2690FF" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </mask>
                                                        <g mask="url(#mask0_36_396)">
                                                            <path
                                                                d="M39.8188 2.83813L40.6161 4.21897L39.2352 5.01619L38.438 3.63536L39.8188 2.83813Z"
                                                                stroke="white" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                        <mask id="mask1_36_396" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="39" y="5" width="4"
                                                            height="4">
                                                            <path
                                                                d="M40.5579 5.7124L42.098 6.12508L41.6853 7.6652L40.1452 7.25252L40.5579 5.7124Z"
                                                                stroke="#2690FF" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </mask>
                                                        <g mask="url(#mask1_36_396)">
                                                            <path
                                                                d="M41.4133 5.59985L42.2106 6.98069L40.8297 7.77791L40.0325 6.39708L41.4133 5.59985Z"
                                                                stroke="white" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                        <mask id="mask2_36_396" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="36" y="5" width="4"
                                                            height="4">
                                                            <path
                                                                d="M36.999 5.92603L38.5391 6.3387L38.1265 7.87882L36.5863 7.46614L36.999 5.92603Z"
                                                                stroke="#2690FF" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </mask>
                                                        <g mask="url(#mask2_36_396)">
                                                            <path
                                                                d="M37.8545 5.81348L38.6517 7.19431L37.2709 7.99153L36.4737 6.6107L37.8545 5.81348Z"
                                                                stroke="white" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M33.0191 6.22821L36.2079 11.7513L33.4466 13.3461L30.2571 7.82284L33.0191 6.22821Z"
                                                            fill="white" stroke="white" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M30.2575 7.82262L33.4462 13.3457L15.0969 23.0193L12.7052 18.8768L30.2575 7.82262Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M13.1038 19.5673L14.6985 22.3293L11.9367 23.9233L10.3419 21.1619L13.1038 19.5673Z"
                                                            fill="white" stroke="white" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.1395 22.5428L4.23499 26.5292" stroke="white"
                                                            stroke-linecap="square" stroke-linejoin="round" />
                                                        <path
                                                            d="M3.54494 26.9275C1.63803 28.0284 0.984887 30.466 2.08584 32.3729C3.18697 34.2791 5.62455 34.9323 7.53127 33.832M11.5172 40.7358C13.4241 39.6348 14.0772 37.1973 12.9763 35.2904C11.8751 33.3841 9.43756 32.731 7.53084 33.8313"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M29.0258 35.4579C30.7317 35.4579 32.115 34.5359 32.115 33.3984C32.115 32.2608 30.7317 31.3389 29.0258 31.3389C27.3198 31.3389 25.9365 32.2608 25.9365 33.3984C25.9365 34.5359 27.3198 35.4579 29.0258 35.4579Z"
                                                            fill="white" />
                                                        <path d="M31.4285 32.7118V23.1736" stroke="white"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M37.9503 38.204C39.6563 38.204 41.0396 37.282 41.0396 36.1445C41.0396 35.0069 39.6563 34.085 37.9503 34.085C36.2444 34.085 34.8611 35.0069 34.8611 36.1445C34.8611 37.282 36.2444 38.204 37.9503 38.204Z"
                                                            fill="white" />
                                                        <path d="M40.3529 34.7713V25.4452L31.4285 23.1008"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_36_396">
                                                            <rect width="45" height="41.4474" fill="white"
                                                                transform="translate(0.523438)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="work__features-content">
                                            <h4>Enjoy your event.</h4>
                                            <p>Sit back, relax, and watch <br> your party come to life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- work area end -->


            

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