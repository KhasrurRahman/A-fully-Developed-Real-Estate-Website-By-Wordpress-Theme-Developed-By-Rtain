<!DOCTYPE html>
<html class="no-js" lang="en">
  <!-- 
This website is desigened by Ratin
name = Md. khasrur Rahman
contact = 01761955765
email = khasrur8@gmail.com
-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clemira Real Responsive Estate is a premium HTML5 template, is a perfect choice for your real estate website. because of its clean, modern, 100% responsive & W3C HTML validate coding, and awesome design especially made for real estate agents, companies, directory sites, brokerages, apartment managers, residential & commercial developers, vacation rentals, condominium, corporate, agency owners, personal or standalone Real estate agents and much more.">
    <meta name="author" content="mardianto">
    <meta name="google-site-verification" content="y1scjlPjnMwn167QNwtbzqpA3VxqGrb4rx3XU9rOoIY" />
    <title>
      <?php bloginfo( 'name' ); ?>
    </title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/t.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootsnav.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
    <!-- Color -->
    <link rel="stylesheet" type="text/css" id="skin"  href="<?php echo get_template_directory_uri(); ?>/assets/css/themes/default.css">
    <!-- google font  -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,800" >
    <style type="text/css">
      nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover,
      nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover {
        background-color: #c1ef68;
        border-radius: 31px;
        font-weight: bold;
      }
    </style>
  </head>
  <body style="background-color: #cee4ed;">
    <!-- Start preloading -->
    <div class="spinner-wrapper">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube">
        </div>
        <div class="sk-cube2 sk-cube">
        </div>
        <div class="sk-cube4 sk-cube">
        </div>
        <div class="sk-cube3 sk-cube">
        </div>
      </div>
      <p>Please wait ....
      </p>
    </div>    
    <!-- End preloading -->
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="wrap-top-information">
              <ul class="list-inline left">
                <li>
                  <a>
                    <i class="fa fa-phone">
                    </i>
                    <span>Hotline: <?php echo cs_get_option( 'text_80' ); ?>
                    </span>
                  </a>
                </li> 
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="wrap-top-information">
              <ul class="list-inline right">
                <li>
                  <a class="social-facebook" data-original-title="facebook" data-placement="bottom" data-toggle="tooltip" href="#" title="">
                    <i class="fa fa-facebook ">
                    </i>
                  </a>
                </li>
                <li>
                  <a class="social-twitter" data-original-title="twitter" data-placement="bottom" data-toggle="tooltip" href="#" title="">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                </li>
                <li>
                  <a class="social-youtobe" data-original-title="youtobe" data-placement="bottom" data-toggle="tooltip" href="#" title="">
                    <i class="fa fa-youtube-play">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default navbar-sticky white bootsnav">
      <div class="container" style="width: 100%">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button class="navbar-toggle" data-target="#navbar-menu" data-toggle="collapse" type="button">
            <i class="fa fa-bars">
            </i>
          </button>
          <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" class="logo" alt="" style=" height: 103px;
    margin-top: -15px;
    box-shadow: 1px 7px 6px #5fa34a;
    background: white;
    border-radius: 0px 0px 15px 15px;
    color: black;;
                                                                                                                     margin-top: -15px;                                                                                                                     box-shadow: 1px 7px 6px #5fa34a;">
          </a>
        </div>
        <!-- End Header Navigation -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu" style="
                                                                      width: 100%;">
          <?php wp_nav_menu( array( 'fallback_cb' => 'custom_primary_menu_fallback', 'menu' => 'menu', 'container' => false, 'menu_id' => 'menu', 'menu_class'=>'', 'theme_location'=>'primary-menu' ) );
function custom_primary_menu_fallback() { ?>
          <ul id="menu" class="nav navbar-nav navbar-left"  data-in="fadeInDown" data-out="fadeOutUp">
            <li>
              <a href="/">
                Home
              </a>
            </li>
            <li class="dropdown"> 
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                About Us
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/aboutus/">
                    About Shapla City
                  </a>
                </li>
                <li>
                  <a href="/vision/">
                    Our Vision,Mission & Core Value
                  </a>
                </li>
                <li>
                  <a href="/mdmsg/">
                    MD message
                  </a>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    News
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/news/">
                        Event
                      </a>
                    </li>
                    <li>
                      <a href="/tvnews/">
                        Tv-News video
                      </a>
                    </li>
                  </ul> 
                <li>
                  <a href="/faq/">
                    Terms and Conditions
                  </a>
                </li>
                </li>
          </ul>
          </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Projects
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="/project-location/">
                Project Location
              </a>
            </li>
            <li>
              <a href="/layout/">
                Project Lay Out
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Price list
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/flat/">
                    Flat Price
                  </a>
                </li>
                <li>
                  <a href="/ploat-list/">
                    Ploat Price
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Project Status
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/Complete-P/">
                    Complete project
                  </a>
                </li>
                <li>
                  <a href="/onproject/">
                    Ongoing project
                  </a>
                </li>
                <li>
                  <a href="/upproject/">
                    Upcomming Project
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/features/">
                features & Facilities
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown megamenu-fw">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Properties
          </a>
          <ul class="dropdown-menu megamenu-content" role="menu">
            <li>
              <div class="row">
                <div class="col-menu col-md-3">
                  <h5 class="title">Properties
                  </h5>
                  <div class="content">
                    <ul class="menu-col">
                      <li>
                        <a href="/p-701/">Package List-701 square feet
                        </a>
                      </li>
                      <li>
                        <a href="/1091-2/">package List-1091 square feet
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- end col-3 -->
                <div class="col-menu col-md-9">
                  <h5 class="title">Popular Property
                  </h5>
                  <div class="content">
                    <div class="nav-slider-property owl-carousel owl-theme">
                      <div class="item">
                        <a href="/p-701/">
                          <div class="listing-item compact">
                            <div class="listing-img-container">
                              <div class="listing-badges">
                                <span>
                                  For Sell
                                </span>
                              </div>
                              <div class="listing-img-content" style="background: #74ad06;opacity: .8">
                                <span class="listing-compact-title">
                                  <i style="color: black;font-weight: bold;">
                                    3994tk/sq ft=28,00,000/-
                                    <br>
                                    utility=3,00,000/-
                                    <br>
                                    Total=31,00,000/-
                                  </i>
                                </span>
                                <ul class="listing-hidden-content">
                                  <li>
                                    Area
                                    <span>
                                      701 sq ft
                                    </span>
                                  </li>
                                  <li>
                                    Rooms
                                    <span>
                                      2
                                    </span>
                                  </li>
                                  <li>
                                    Bathroom
                                    <span>
                                      2
                                    </span>
                                  </li>
                                </ul>
                              </div>
                              <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/p-1.jpg" style="height: 195px">
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="/1091-2/">
                          <div class="listing-item compact">
                            <div class="listing-img-container">
                              <div class="listing-badges">
                                <span>
                                  For Sell
                                </span>
                              </div>
                              <div class="listing-img-content" style="background: #74ad06;opacity: .8">
                                <span class="listing-compact-title">
                                  <i style="color: black;font-weight: bold;">
                                    3927tk/sq ft=43,50,000/-
                                    <br>
                                    utility=3,00,000/-
                                    <br>
                                    Total=46,50,000/-
                                  </i>
                                </span>
                                <ul class="listing-hidden-content">
                                  <li>
                                    Area
                                    <span>
                                      1091 sq ft
                                    </span>
                                  </li>
                                  <li>
                                    Rooms
                                    <span>
                                      3
                                    </span>
                                  </li>
                                  <li>
                                    Bathroom
                                    <span>
                                      2
                                    </span>
                                  </li>
                                </ul>
                              </div>
                              <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/p-2.jpg" style="height: 195px">
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">
            Gallery
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="/video/">
                Video
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">
                Photos
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/gevent/">
                    Event/program
                  </a>
                </li>
                <li>
                  <a href="/photo/">
                    Project Work Status
                  </a>
                </li>
                <li>
                  <a href="/Socilal-photo/">
                    Social Activities
                  </a>
                </li>
              </ul>
          </ul>
        </li>
        <li class="dropdown">
          <a href="/notice/">
            Notice
          </a>
        </li>
        <li class="">
          <a href="http://zsoft-bd.com/land2/newlook/cus_from_web.php">
            Registration
          </a>
        </li>
        <li class="">
          <a href="http://www.zsoft-bd.com/land2/newlook/cus_login.php">
            Log In
          </a>
        </li>
        </li>
      <li class="">
        <a href="404.php">
          Live View
        </a>
        <i class="fas fa-video" style="color:black;">
        </i>
      </li>
      <li class="">
        <a href="/contact-us/">
          Contact us
        </a>
      </ul>
    <?php } ?>
    </div>
  </div>
</nav>
<div class="clearfix">
</div>
<?php wp_head(); ?>
</head>
