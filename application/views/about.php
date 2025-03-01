<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/boxicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/meanmenu.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/fancybox.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/odometer.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/scrollCue.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/dark.css">
      <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/responsive.css">
      <title><?php echo html_escape($title);?></title>
      <link rel="icon" type="image/webp" href="<?php echo base_url();?>frontend/images/logo-2.png">
   </head>
   <body>
      <div class="preloader">
         <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <span>Restaurant</span>
         </div>
      </div>
      <div class="switch-theme-mode">
         <label id="switch" class="switch">
         <input type="checkbox" onchange="toggleTheme()" id="slider">
         <span class="slider round"></span>
         </label>
      </div>
      <div class="submenu-area submenu-two-area">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-3">
                  <div class="submenu-right-content">
                     <ul>
                        <li>
                           <a href="https://www.facebook.com/" target="_blank">
                           <i class='bx bxl-facebook'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/" target="_blank">
                           <i class='bx bxl-twitter'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/" target="_blank">
                           <i class='bx bxl-linkedin'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/" target="_blank">
                           <i class='bx bxl-instagram'></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-8 col-md-9">
                  <div class="submenu-left-content">
                     <ul>
                        <li>
                           <img src="<?php echo base_url();?>frontend/images/phone-icon.svg" alt="icon">
                           <a href="tel:(+0188)76870859">(+0188) 7687 0859</a>
                        </li>
                        <li>
                           <img src="<?php echo base_url();?>frontend/images/email-icon.svg" alt="icon">
                           <a href="mailto:restaurant@gmail.com"><span>Restaurant@gmail.com</span></a>
                        </li>
                        <li>
                           <img src="<?php echo base_url();?>frontend/images/map.svg" alt="icon">
                           <p>4b, Walse Street , USA</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="navbar-area">
         <div class="container">
            <div class="mobile-nav">
               <div class="logo">
                  <a href="index.php">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-light" alt="images" width="100" height="100">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-dark" alt="images" width="100" height="100">
                  </a>
               </div>
            </div>
         </div>
         <div class="main-nav main-two-nav">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-md navbar-light">
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav ms-auto">
                        <?php 
                           $allmenu=$this->allmenu; 
                           foreach($allmenu as $menu){
                              $activeclass='';
                              if($menu->menu_name=='Home'){
                              $activeclass='active';
                              $href=base_url().'';
                              }
                              else{
                              $activeclass='';
                              $href=base_url().''.$menu->menu_slug;
                              }
                           ?>
                        <li class="nav-item nav-item-five">   
                           <a href="<?php echo base_url().''.html_escape($menu->menu_slug);?>" class="nav-link dropdown-toggle <?php echo html_escape($activeclass);?>">
                           <?php echo html_escape($menu->menu_name);?>
                           </a>
                        </li>
                        <?php } ?>
                     </ul>
                     <div class="others-option-vg d-flex align-items-center">
                        <div class="option-item">
                           <i class='bx bx-search search-btn'></i>
                           <i class='bx bx-x close-btn'></i>
                           <div class="search-overlay search-popup">
                              <div class='search-box'>
                                 <form class="search-form">
                                    <input class="search-input" placeholder="Search..." type="text">
                                    <button class="search-button" type="submit">
                                    <i class='bx bx-search'></i>
                                    </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <div class="shapping-bag">
                              <a href="cart.php">
                              <img src="<?php echo base_url();?>frontend/images/shopping-bag-icon.svg" alt="images">
                              </a>
                              <div class="shapping-text">
                                 01
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <a href="<?php echo base_url('hotel/viewtable');?>" class="default-btn">Book A Table</a>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="others-option-for-responsive">
            <div class="container">
               <div class="dot-menu">
                  <div class="inner">
                     <div class="circle circle-one"></div>
                     <div class="circle circle-two"></div>
                     <div class="circle circle-three"></div>
                  </div>
               </div>
               <div class="container">
                  <div class="option-inner">
                     <div class="others-option justify-content-center d-flex align-items-center">
                        <div class="option-item">
                           <i class='bx bx-search search-btn'></i>
                           <i class='bx bx-x close-btn'></i>
                           <div class="search-overlay search-popup">
                              <div class='search-box'>
                                 <form class="search-form">
                                    <input class="search-input" placeholder="Search..." type="text">
                                    <button class="search-button" type="submit">
                                    <i class='bx bx-search'></i>
                                    </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <div class="shapping-bag">
                              <a href="cart.php">
                              <img src="<?php echo base_url();?>frontend/images/shopping-bag-icon.svg" alt="images">
                              </a>
                              <div class="shapping-text">
                                 01
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <a href="booking-table.php" class="default-btn">Book A Table</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pag-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>About Us</h1>
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li>About Us</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <div class="about-area about-page pt-100 pb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6" data-cue="slideInLeft" data-duration="800">
                  <div class="about-image">
                     <img src="<?php echo base_url();?>frontend/images/about/about-page-img-1.webp" alt="images">
                  </div>
               </div>
               <div class="col-lg-6" data-cue="slideInRight" data-duration="800">
                  <div class="single-about-content">
                     <div class="section-title left-title">
                        <span class="top-title">About Us</span>
                        <h2>Enjoy An Exceptional Journey Of Taste In Our Restaurant</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
                           beguiled aitem demora lized by the charms of pleasure of the moment.
                        </p>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                           <div class="speciallst-card">
                              <h3><img src="<?php echo base_url();?>frontend/images/about/about-img-3.webp" alt="images">Speciallst</h3>
                              <p>bled it to make a type specimen boIt has survived not amnits.</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                           <div class="speciallst-card">
                              <h3><img src="<?php echo base_url();?>frontend/images/about/about-img-4.webp" alt="images">Restaurant</h3>
                              <p>bled it to make a type specimen boIt has survived not amnits.</p>
                           </div>
                        </div>
                     </div>
                     <ul>
                        <li><i class='bx bx-right-arrow-circle'></i>Mauris mattis lectus eget ligula dapibus, ac maximus ipsum Services.</li>
                        <li><i class='bx bx-right-arrow-circle'></i>Aenean facilisis erat et metus semper molestie sem posuere tests.</li>
                     </ul>
                     <a href="booking-table.php" class="default-btn">Booking Now</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="about-shape-1">
            <img src="<?php echo base_url();?>frontend/images/about/about-page-shape-1.webp" alt="images">
         </div>
         <div class="about-shape-2">
            <img src="<?php echo base_url();?>frontend/images/about/about-page-shape-2.webp" alt="images">
         </div>
         <div class="about-shape-3">
            <img src="<?php echo base_url();?>frontend/images/about/about-page-shape-3.webp" alt="images">
         </div>
         <div class="about-shape-4">
            <img src="<?php echo base_url();?>frontend/images/about/about-page-shape-4.webp" alt="images">
         </div>
      </div>
      <div class="services-area services-pages-area pt-100 pb-70">
         <div class="container">
            <div class="section-title">
               <span class="top-title">Our Services</span>
               <h2>Try Our Special Offer</h2>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="single-discover-card services-card-page">
                     <img src="<?php echo base_url();?>frontend/images/services/services-page-img-1.webp" alt="images">
                     <a href="services.php">
                        <h3>Fresh Products</h3>
                     </a>
                     <p>There are many variations of passages of ailable but the majority have saite.</p>
                     <a href="services.php" class="discover-more">Discover More</a>
                     <div class="services-shape">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-hover-img-7.webp" alt="images">
                     </div>
                     <div class="services-shape-2">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-img-4.webp" alt="images">
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="single-discover-card services-card-page">
                     <img src="<?php echo base_url();?>frontend/images/services/services-page-img-2.webp" alt="images">
                     <a href="services.php">
                        <h3>Skilled Chefs</h3>
                     </a>
                     <p>There are many variations of passages of ailable but the majority have saite.</p>
                     <a href="services.php" class="discover-more">Discover More</a>
                     <div class="services-shape">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-hover-img-8.webp" alt="images">
                     </div>
                     <div class="services-shape-2">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-img-5.webp" alt="images">
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="single-discover-card services-card-page">
                     <img src="<?php echo base_url();?>frontend/images/services/services-page-img-3.webp" alt="images">
                     <a href="services.php">
                        <h3>Best Bar</h3>
                     </a>
                     <p>There are many variations of passages of ailable but the majority have saite.</p>
                     <a href="services.php" class="discover-more">Discover More</a>
                     <div class="services-shape">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-hover-img-9.webp" alt="images">
                     </div>
                     <div class="services-shape-2">
                        <img src="<?php echo base_url();?>frontend/images/services/services-page-img-6.webp" alt="images">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="visit-today-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="section-title">
               <span class="top-title">Visit Us Today</span>
               <h2>Make A Reserve</h2>
            </div>
            <form class="reserve-from reserve-from-two">
               <div class="row">
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <input type="number" class="form-control" placeholder="Phone">
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Persons</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <div class="input-group date" id="datetimepicker">
                           <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                           <span class="input-group-addon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Time</option>
                           <option value="1">08:00 AM – 05:00 PM</option>
                           <option value="2">09:00 AM – 06:00 PM</option>
                           <option value="3">10:00 AM – 05:00 PM</option>
                           <option value="4">09:00 AM – 05:00 PM</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6">
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                     </div>
                  </div>
                  <div class="col-lg-12 col-sm-6 col-md-12">
                     <button type="submit" class="default-btn">Book A Table</button>
                  </div>
               </div>
            </form>
         </div>
      </div> -->
      <!-- <div class="team-restaurant-area team-restaurant-page-area pt-100 pb-70">
         <div class="container">
         <div class="section-title left-title">
         <span class="top-title">Team of Restaurant</span>
         <h2>Meet Our Professionals</h2>
         <div class="menu-view-btn">
         <a href="menu-details.php" class="default-btn">View All</a>
         </div>
         </div>
         <div class="team-restaurant-slider owl-carousel owl-theme">
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
         <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
         </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php"><h3>Mary Christmas</h3></a>
         <p>Assistent Chef</p>
         </div>
         </div>
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
         <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
         </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php">
         <h3>Ash Wednesday</h3>
         </a>
         <p>Chef</p>
         </div>
         </div>
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
          <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
         </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php">
         <h3>Sharon Needles</h3>
         </a>
         <p>Co - Founder</p>
         </div>
         </div>
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
         <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
         </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php">
         <h3>Mary Christmas</h3>
         </a>
         <p>Assistent Chef</p>
         </div>
         </div>
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
         <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
          </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php"><h3>Ash Wednesday</h3></a>
         <p>Chef</p>
         </div>
         </div>
         <div class="single-team-restaurant-card team-restaurant-card-pages">
         <div class="team-restaurant-img">
         <a href="menu-details.php">
         <img src="<?php echo base_url();?>frontend/images/restaurant/ban.png" alt="images">
         </a>
         <ul class="team-restaurant-list-icon">
         <li>
         <a href="https://www.instagram.com/" target="_blank">
         <i class='bx bxl-instagram'></i>
         </a>
         </li>
         <li>
         <a href="https://www.linkedin.com/" target="_blank">
         <i class='bx bxl-linkedin'></i>
         </a>
         </li>
         <li>
         <a href="https://twitter.com/" target="_blank">
         <i class='bx bxl-twitter'></i>
         </a>
         </li>
         <li>
         <a href="https://www.facebook.com/" target="_blank">
         <i class='bx bxl-facebook'></i>
         </a>
         </li>
         </ul>
         </div>
         <div class="restaurant-content">
         <a href="menu-details.php"><h3>Sharon Needles</h3></a>
         <p>Co - Founder</p>
         </div>
         </div>
         </div>
         </div>
         </div> -->
      <div class="odometer-area page-odometer-area pt-100 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-12 col-sm-2 col-md-2" data-cues="fadeIn" data-duration="1500">
                  <div class="fun-odometer fun-odometer-page">
                     <h2>
                        <span class="odometer" data-count="287">00</span>
                        <span class="target">+</span>
                     </h2>
                     <p>Clients Every Day</p>
                  </div>
               </div>
               <div class="col-lg-10 col-sm-10 col-md-10">
                  <div class="row">
                     <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                        <div class="fun-odometer fun-odometer-page">
                           <h2>
                              <span class="odometer" data-count="45">00</span>
                              <span class="target">+</span>
                           </h2>
                           <p>Table Available</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                        <div class="fun-odometer fun-odometer-page">
                           <h2>
                              <span class="odometer" data-count="70">00</span>
                              <span class="target">+</span>
                           </h2>
                           <p>Breakfast Option</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                        <div class="fun-odometer fun-odometer-page">
                           <h2>
                              <span class="odometer" data-count="130">00</span>
                              <span class="target">+</span>
                           </h2>
                           <p>Dinner Option</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                        <div class="fun-odometer fun-odometer-page">
                           <h2>
                              <span class="odometer" data-count="25">00</span>
                              <span class="target">+</span>
                           </h2>
                           <p>Year Of Experience</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="testimonials-two-area pt-100 pb-100">
         <div class="container">
            <div class="section-title">
               <span class="top-title">Our Testimonials</span>
               <h2>Meet Our Professionals</h2>
            </div>
            <div class="testimonials-two-slider owl-carousel owl-theme">
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Aaron Spacemuseum</h3>
                     <span>SEO - Manager</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Reanne Carnation</h3>
                     <span>SEO</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Val Adictorian</h3>
                     <span>Manager</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Aaron Spacemuseum</h3>
                     <span>SEO - Manager</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Reanne Carnation</h3>
                     <span>SEO</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
               <div class="testimonials-two-card">
                  <div class="testimonials-client-inform">
                     <h3>Val Adictorian</h3>
                     <span>Manager</span>
                     <div class="client-icon">
                        <img src="<?php echo base_url();?>frontend/images/testimonials-icon.svg" alt="icon">
                     </div>
                  </div>
                  <p>Sed ut perspiciatis unde omnis istatus
                     error sit voluptatem accusantium doemque laudantium totam rem aperiam.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="location-two-area location-two-area pt-100 pb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="location-map">
                     <img src="<?php echo base_url();?>frontend/images/location-map-two.webp" alt="images">
                     <div class="location-text">
                        <span></span>
                        <p>Vietnam</p>
                     </div>
                     <div class="location-text location-1">
                        <span></span>
                        <p>Peru</p>
                     </div>
                     <div class="location-text location-2">
                        <span></span>
                        <p>Ecuador</p>
                     </div>
                     <div class="location-text location-3">
                        <span></span>
                        <p>Chile</p>
                     </div>
                     <div class="location-text location-4">
                        <span></span>
                        <p>South Africa</p>
                     </div>
                     <div class="location-text location-5">
                        <span></span>
                        <p>United Kingdom</p>
                     </div>
                     <div class="location-text location-6">
                        <span></span>
                        <p>Libya</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="single-location-content location-two-content location-page">
                     <div class="section-title left-title">
                        <span class="top-title">Find Our Location</span>
                        <h2>Locations Of Our Restaurant All Over The World</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
                           beguiled aitem demora lized by the charms of pleasure of the moment.
                        </p>
                     </div>
                     <h3>Where Buy Our Restaurant</h3>
                     <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                           <div class="location-list">
                              <ul>
                                 <li>
                                    <i class='bx bx-check'></i>Dummy voluptatem
                                 </li>
                                 <li>
                                    <i class='bx bx-check'></i>Accusantium
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4">
                           <div class="location-list">
                              <ul>
                                 <li>
                                    <i class='bx bx-check'></i>Typesetting
                                 </li>
                                 <li>
                                    <i class='bx bx-check'></i>Popular belief
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4">
                           <div class="location-list">
                              <ul>
                                 <li>
                                    <i class='bx bx-check'></i>Established
                                 </li>
                                 <li>
                                    <i class='bx bx-check'></i>Many variations
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-widget-area  pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <a href="index.html">
                     <img src="<?php echo base_url();?>frontend/images/logo.png" alt="images" width="100" height="100">
                     </a>
                     <p>Giving a Twist of best Taste.</p>
                     <ul class="footer-widget-list">
                        <li>
                           <a href="https://facebook.com" target="_blank">
                           <i class='bx bxl-facebook'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com" target="_blank">
                           <i class='bx bxl-twitter'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://linkedin.com" target="_blank">
                           <i class='bx bxl-linkedin'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com" target="_blank">
                           <i class='bx bxl-instagram'></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <h2>Useful Link</h2>
                     <ul class="footer-list">
                        <li>
                           <i class='bx bxs-downvote'></i><a href="about.php">About Us</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="menu.php">Menu</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="booking-table.php">Book A Table</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="contact.php">Contact Us</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="gallery.php">Gallery</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget footer-services">
                     <h2>Opening Hours</h2>
                     <ul class="footer-list">
                        <li>
                           Monday <span>08:00 AM – 05:00 PM</span>
                        </li>
                        <li>
                           Thesday <span>09:00 AM – 06:00 PM</span>
                        </li>
                        <li>
                           Wednesday <span>10:00 AM – 05:00 PM</span>
                        </li>
                        <li>
                           Friday <span>09:00 AM – 05:00 PM</span>
                        </li>
                        <li>
                           Sat - Sun <span>Closed</span>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <h2>Get In Touch</h2>
                     <div class="footer-item">
                        <i class='bx bxs-phone-call'></i>
                        <a href="tel:(800)2162020">(800) 216 2020</a>
                     </div>
                     <div class="footer-item">
                        <i class='bx bx-envelope'></i>
                        <a href="mailto:restaurant@gmail.com"><span>Restaurant@gmail.com</span></a>
                     </div>
                     <div class="footer-item">
                        <i class='bx bx-map'></i>
                        <p>No. 12, Ribon Building, US</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-shape-1">
            <img src="<?php echo base_url();?>frontend/images/footer/footer-shape-1.webp" alt="images">
         </div>
         <div class="footer-shape-2">
            <img src="<?php echo base_url();?>frontend/images/footer/footer-shape-2.webp" alt="images">
         </div>
         <div class="footer-shape-3">
            <img src="<?php echo base_url();?>frontend/images/footer/footer-shape-3.webp" alt="images">
         </div>
         <div class="footer-shape-4">
            <img src="<?php echo base_url();?>frontend/images/footer/footer-shape-4.webp" alt="images">
         </div>
      </div>
      <div class="copyright-content">
         <p>© <?php echo date('Y'); ?> Designed & Developed By <a href="https://amoriotech.com/" target="_blank">Amorio Technologies</a></p>
      </div>
      <div class="go-top">
         <i class='bx bxl-upwork'></i>
         <i class='bx bxl-upwork'></i>
      </div>
      <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> -->
      </script><script src="<?php echo base_url();?>frontend/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/meanmenu.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/scrollCue.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/bootstrap-datepicker.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/appear.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/odometer.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/magnific-popup.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/fancybox.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/parallax.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/ajaxchimp.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/form-validator.min.js"></script>
      <script src="<?php echo base_url();?>frontend/js/subscribe-custom.js"></script>
      <script src="<?php echo base_url();?>frontend/js/contact-form-script.js"></script>
      <script src="<?php echo base_url();?>frontend/js/main.js"></script>
   </body>
</html>