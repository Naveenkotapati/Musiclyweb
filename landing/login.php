
<?php
include("loginbackend.php");
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

   

    <!-- Header area start -->
    <!-- <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body"style="background-color: #000000;">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main d-flex align-items-center justify-content-between" style="height:80px">
                                <div class="header__logo pt-25 pb-25">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo.svg" alt="logo not found">
                                    </a>
                                </div>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!-- Header area end -->

    <div class="ms-all-content ms-all-content-space">
        <main>
            <!-- page title area start  -->
            <!-- <section class="page-title-area page-title-spacing p-relative zindex-1 "
                data-background="assets/img/bg/work-bg.jpg">
                <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <h3 class="ms-page-title text-center">Login</h3>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- page title area end  -->

            <!-- login Area Start Here  -->
            <section class="ms-login-area pb-50 pt-130">
                <div class="container">
                    <div class="ms-maxw-510 mx-auto">
                        <div class="ms-login-wrap text-center ms-login-space ms-bg-2">
                            <h3 class="ms-title4 mb-50">Login</h3>
                            <form action="loginbackend.php" method="post">
                                <div class="ms-input2-box mb-25">
                                    


                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                                <div class="ms-input2-box mb-50">
                                    
                                    <input type="password" placeholder="Password" name="password" required>

                                </div>
                                <div class="ms-submit-btn mb-40">
                                    <button class="unfill__btn d-block w-100" type="submit">Log in</button>
                                </div>
                                
                                
                                <div class="ms-not-account mb-35">
                                    <p>Don’t have an account? <a href="signup.php">Register Now</a></p>
                                </div>

                                

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