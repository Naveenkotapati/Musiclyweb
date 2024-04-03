

<?php 
session_start();
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
$sql = "SELECT * FROM music_list1";



$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>


<!doctype html>
<html class="no-js" lang="zxx">



        <head>

                <meta charset="utf-8">  
                    
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

                    
                    <style>
                               body{
background-image: url(musicplayer/naveenazam.jpg) !important;
background-repeat: no-repeat;
        }

                                .button {
                                border: none;
                                color: white;
                                padding: 16px 32px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                                margin: 4px 2px;
                                transition-duration: 0.4s;
                                cursor: pointer;
                                }



                                .button2 {
                                background-color: white; 
                                color: black; 
                                border: 2px solid #008CBA;
                                }

                                .button2:hover {
                                background-color: #008CBA;
                                color: white;
                                }


                                .button1 {
                                background-color: white; 
                                color: black; 
                                border: 2px solid #008CBA;
                                }

                                .button1:hover {
                                background-color: #008000;
                                color: white;
                                }



                                    .foto_style img {
                                width: 250px; 
                                height:250px;
                                }​  
                        
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
                                

                            <?php
                                $con = mysqli_connect("localhost","root","","music"); 
                                $sql = "SELECT * FROM `signup`"; 
                                $Sql_query = mysqli_query($con,$sql); 
                                $All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC); 
                                $id = $_SESSION['role'];
                            ?>

                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>

                                                <?php if( $_SESSION['role']=='admin')
                                                    {?> 

                                                    <li>
                                                        <a href="http://localhost/music/landing/adminhomescreen.php">Home</a>
                                                            
                                                    </li>
                                                        <?php }  else{ ?>  
        
                                                        <?php?> 
                                                    <li>
                                                        <a href="homescreen.php">Home</a>
                                                            
                                                    </li>

                                                <?php   } ?> 


                                                   
                                                

                                                    <li class="has-dropdown">
                                                        <a href="homescreen.php">Languages</a>
                                                        <ul class="submenu">
                                                        <li><a href="http://localhost/music/landing/allmovies.php">All Movie Songs</a></li>
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
                                                            <li><a href="http://localhost/music/landing/concert/allevents.php">All Language Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/tamilconcert.php">Tamil Concert </a></li>
                                                            <li><a href="http://localhost/music/landing/concert/teluguconcert.php">Telugu Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/hindiconcert.php">Hindi Concert</a></li>
                                                            <li><a href="http://localhost/music/landing/concert/englishconcert.php">English Concert</a></li>
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
                                                    <a href="http://localhost/music/landing/admincontact.php"><i class="flaticon-star icon">

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
            
            
            <section class="ms-join-area pb-60  p-relative">
                <div class="ms-join-position p-absolute text-center">
                    <h2 class="ms-title2 balck-text mb-50">New Movie Songs</h2>
                    
                </div>

                              
                </div>
            </section>
                      

        </main>
        
    </div>

    
    </div>


                    
             
       

        <div class="row bdFadeUp">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                                    aria-labelledby="nav-popular-1-tab" tabindex="0">
                                    <div class="swiper-container ms-popular-active fix">
                                        <div class="swiper-wrapper">


                                        <table style="width:100%">

                        <?php

                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                            $image=$rows['image_path']; 
                            $title=$rows['title']; 
                            $music=$rows['music'];
                            $id=$rows['id']; 
                            
                        ?>


                                            <div class="swiper-slide">
                                                <div class="ms-popular__item p-relative mb-30">
                                                    <div class="ms-popular__thumb">
                                                        <div class="ms-popular-overlay"></div>
                                                        
                                                        <img src="musicplayer/addmovies/<?=$rows['image_path']?>">
                                                        
                                                        
                                                            
                                                        
                                                    </div>
                                                    <h4 class="ms-popular__title">
                                                    
                                                   

                                                            <a href="http://localhost/music/landing/musicplayer/index.php?title=<?php echo $title;?>&music=<?php echo $music;?>">
                                                    <?php  echo $rows['title'];?></a>
                                                    </h4>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                                                      
                      
                                <?php
                            }	
                                        ?>      
            
            

		
                             </table> 
                                           
                                           
                                           
                                        </div>
                                    </div>
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
$sql = "SELECT * FROM music_list where status='Yes'";



$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>        



        
            
            
            <section class="ms-join-area pb-60 p-relative">
                <div class="ms-join-position p-absolute text-center">
                    <h2 class="ms-title2 black-text mb-50">Recommendation songs</h2>
                    
                </div>

                              
                
            </section>
                      

      
        


    
    

<div class="row bdFadeUp">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                                    aria-labelledby="nav-popular-1-tab" tabindex="0">
                                    <div class="swiper-container ms-popular-active fix">
                                        <div class="swiper-wrapper">


                                        <table style="width:100%">

                        <?php

                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                            $image=$rows['image_path']; 
                            $title=$rows['title']; 
                            $music=$rows['music'];
                            $id=$rows['id']; 
                            
                        ?>


                                            <div class="swiper-slide">
                                                <div class="ms-popular__item p-relative mb-30">
                                                    <div class="ms-popular__thumb">
                                                        <div class="ms-popular-overlay"></div>
                                                        
                                                        <img src="musicplayer/<?=$rows['image_path']?>">
                                                        
                                                        
                                                            
                                                        
                                                    </div>
                                                    <h4 class="ms-popular__title">
                                                    
                                                    
                                                    <a href="http://localhost/music/landing/musicplayer/index.php?title=<?php echo $title;?>&music=<?php echo $music;?>">
                                                    <?php  echo $rows['title'];?></a>
                                                    </h4>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                                                      
                      
                                <?php
                            }	
                                        ?>      
            
            

		
                             </table> 
                                           
                                           
                                           
                                        </div>
                                    </div>
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
// $sql = "SELECT * FROM music_list where fav='on' AND userid='$id'";
$sql = "SELECT * FROM music_list where fav='on' ";


$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>        



        
            
            
            <section class="ms-join-area pb-60 p-relative">
                <div class="ms-join-position p-absolute text-center">
                    <h2 class="ms-title2 black-text mb-50">My Favourite Songs</h2>
                    
                </div>

                              
                
            </section>
                      

      
        


    
    

<div class="row bdFadeUp">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                                    aria-labelledby="nav-popular-1-tab" tabindex="0">
                                    <div class="swiper-container ms-popular-active fix">
                                        <div class="swiper-wrapper">


                                        <table style="width:100%">

                        <?php

                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                            $image=$rows['image_path']; 
                            $title=$rows['title'];
                            $music=$rows['music']; 
                            $id=$rows['id']; 
                            
                        ?>


                                            <div class="swiper-slide">
                                                <div class="ms-popular__item p-relative mb-30">
                                                    <div class="ms-popular__thumb">
                                                        <div class="ms-popular-overlay"></div>
                                                        
                                                        <img src="musicplayer/<?=$rows['image_path']?>">
                                                        
                                                        
                                                            
                                                        
                                                    </div>
                                                    <h4 class="ms-popular__title">
                                                    
                                                    
                                                    <a href="http://localhost/music/landing/musicplayer/index.php?title=<?php echo $title;?>&music=<?php echo $music;?>">
                                                    <?php  echo $rows['title'];?></a>
                                                    </h4>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                                                      
                      
                                <?php
                            }	
                                        ?>      
            
            

		
                             </table> 
                                           
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
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
   















