<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div class="pag-banner-area menu-pages-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>Menu Details</h1>
               <ul>
                  <li><a href="<?php echo base_url('hotel'); ?>">Home</a></li>
                  <li>Menu Details</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <div class="menu-details-area pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                <?php $s=0; foreach ($view_items as $key => $view_item) { ?>
                  <div class="menu-details">
                     <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                           <div class="mrnu-details-img">
                              <img src="<?php echo base_url($view_item->ProductImage);?>" alt="images">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="single-menu-details-contant shop-single-text">
                              <h2><?php echo $view_item->ProductName; ?></h2>
                               <input type="hidden" class="ProductsID" value="<?php echo $view_item->ProductsID; ?>">
                                <input type="hidden" class="ProductName" value="<?php echo $view_item->ProductName; ?>">
                                <span class="details-two"> 
                                    <?php if($currency->position==1){echo $currency->curr_icon;}?>
                                    <?php echo $view_item->price;?>
                                    <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                                </span>
                              <p><?php echo $view_item->descrip; ?></p>
                              <ul class="quantity-list">
                                 <li>
                                    <div class="pass-quantity">
                                       <div class="input-counter">
                                          <span class="minus-btn">
                                          <i class='bx bx-minus'></i>
                                          </span>
                                          <input type="text" value="1" name="quantity" id="quantity">
                                          <span class="plus-btn">
                                          <i class='bx bx-plus'></i>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <!-- <button type="submit" class="default-btn" id="addtoCart" data-id="<?php echo $view_item->ProductsID; ?>" data-productname="<?php echo $view_item->ProductName; ?>" data-description="<?php echo $view_item->descrip; ?>" data-price="<?php echo $view_item->price; ?>">Add To Cart</button> -->
                                    <div class="add-to-card">
                                        <a href="<?php echo base_url('hotel/cart/'.$view_item->ProductsID);?>" class="default-btn">Add To Cart</a>
                                    </div>
                                    <input type="hidden" class="variantid" value="<?php echo $view_item->variantid; ?>">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php $s++; } ?>
                  <div class="menu-details-tab">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                           <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Additional Information</button>
                        </li> -->
                       <!--  <li class="nav-item" role="presentation">
                           <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Reviews (2)</button>
                        </li> -->
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                           <div class="single-shop-text">
                            <p><?php echo $view_item->descrip; ?></p>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                           <div class="additional-information">
                              <ul class="information">
                                 <li>
                                    <span>Brand:</span> ThemeForest
                                 </li>
                                 <li>
                                    <span>Color:</span> white
                                 </li>
                                 <li>
                                    <span>Size:</span> Amaranth, Medium
                                 </li>
                                 <li>
                                    <span>Weight:</span> 46 kg
                                 </li>
                                 <li>
                                    <span>Dimensions:</span> 25 x 30 x 186 cm
                                 </li>
                              </ul>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                <!--   <div class="popular-menu-details">
                     <h2>Popular Menu</h2>
                     <div class="popular-menu-details-slider owl-carousel owl-theme">
                        <div class="single-popular-menu-details">
                           <div class="menu-details-img">
                              <img src="<?php echo base_url();?>frontend/images/menu/Machaca.png" alt="images">
                           </div>
                           <div class="single-popular-contant">
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php">
                                    <h3>Machaca</h3>
                                 </a>
                                 <span>
                                    <ul>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                    </ul>
                                 </span>
                              </div>
                              <span>Food Type : Machaca</span>
                              <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php" class="default-btn">Order Now<span></span></a>
                                 <span class="dolar">$45.00</span>
                              </div>
                           </div>
                        </div>
                        <div class="single-popular-menu-details">
                           <div class="menu-details-img">
                              <img src="<?php echo base_url();?>frontend/images/menu/Tostadas.png" alt="images">
                           </div>
                           <div class="single-popular-contant">
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php">
                                    <h3>Tostadas</h3>
                                 </a>
                                 <span>
                                    <ul>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                    </ul>
                                 </span>
                              </div>
                              <span>Food Type : Tostadas</span>
                              <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php" class="default-btn">Order Now<span></span></a>
                                 <span class="dolar">$55.00</span>
                              </div>
                           </div>
                        </div>
                        <div class="single-popular-menu-details">
                           <div class="menu-details-img">
                              <img src="<?php echo base_url();?>frontend/images/menu/Tripas.png" alt="images">
                           </div>
                           <div class="single-popular-contant">
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php">
                                    <h3>Tripas</h3>
                                 </a>
                                 <span>
                                    <ul>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                    </ul>
                                 </span>
                              </div>
                              <span>Food Type : Tripas</span>
                              <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php" class="default-btn">Order Now<span></span></a>
                                 <span class="dolar">$45.00</span>
                              </div>
                           </div>
                        </div>
                        <div class="single-popular-menu-details">
                           <div class="menu-details-img">
                              <img src="<?php echo base_url();?>frontend/images/menu/Fajitas.png" alt="images">
                           </div>
                           <div class="single-popular-contant">
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php">
                                    <h3>Fajitas</h3>
                                 </a>
                                 <span>
                                    <ul>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                       <li>
                                          <i class='bx bxs-star'></i>
                                       </li>
                                    </ul>
                                 </span>
                              </div>
                              <span>Food Type : Fajitas</span>
                              <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="menu-details.php" class="default-btn">Order Now<span></span></a>
                                 <span class="dolar">$55.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
               <!-- <div class="col-lg-4">
                  <aside class="widget-area">
                     <div class="widget widget_search">
                        <form class="search-form">
                           <input type="search" class="search-field" placeholder="Search...">
                           <button type="submit" class="default-btn"><i class='bx bx-search'></i></button>
                        </form>
                     </div>
                     <div class="category-content">
                        <h2>Category</h2>
                        <ul class="details-list">
                           <li>
                              <a>Chalupa<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Chilaquiles<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Cocido<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Fajitas<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Machaca<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Menudo<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                           <li>
                              <a>Picadillo<i class='bx bx-right-arrow-circle'></i></a>
                           </li>
                        </ul>
                     </div>
                  </aside>
               </div> -->
            </div>
         </div>
      </div>
      <div class="footer-widget-area  pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <a href="<?php echo base_url('hotel');?>">
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

    
    <script type="text/javascript">
        var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
        $(document).on('click','#addtoCart',function(){
           var product_id = $(this).attr('data-id');
           var quantity = $('#quantity').val();
           var variant_id = $('.variant_id').val();
           $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>hotel/cart',
            dataType: "json",
            data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash,product_id:product_id,quantity:quantity,variant_id:variant_id},

            success:function(data)
            {     
               // location: reload();
                console.log(data);
            },
            error: function (){ }
            });
        });
    </script>



   </body>
</html>