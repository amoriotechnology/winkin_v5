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
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title><?php echo html_escape($title);?></title>
      <link rel="icon" type="image/webp" href="<?php echo base_url();?>frontend/images/logo-2.png">
   </head>
   <body>
      <div class="preloader">
         <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <span>Ruzo</span>
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
                 <a href="<?php echo base_url();?>">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-light" alt="images">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-dark" alt="images">
                  </a>
               </div>
            </div>
         </div>
         <div class="main-nav main-two-nav">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-md navbar-light">
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                   
                   
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
                           <div class="shapping-bag">
                              <a href="cart.html">
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
               </div>
            </div>
         </div>
      </div>
      <div class="pag-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>Thankyou</h1>
               <ul>
                  <li><a href="<?php echo base_url();?>">Home</a></li>
                  <li>Thankyou</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <div class="coming-soon-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <form  method="post">
            <div class="coming-soon-contant">
              <!-- <a href="index.php">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-light" alt="images" width="100" height="100">
                  </a> -->
               <h2 style="text-decoration: underline;">Thank you for your order!</h2>
               <?php foreach ($order_details as $key => $value) { ?>
               <h4 class="text-dark text-bold">Order ID: <span style="color: #c59d5f"><?php echo $value->order_id; ?></span></h4>
               <br>
               <h4 class="text-dark text-bold">Total Price: <span style="color: #c59d5f">
                  <?php if($currency->position==1){echo $currency->curr_icon;}?>
                  <?php echo $value->total_price; ?>
                  <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                  </span></h4>
               <br>
               <h4 class="text-dark text-bold">Payment Type: <span style="color: #c59d5f"><?php echo $value->payment_type; ?></span></h4>
               <?php } ?>
               <!-- <h4 class="text-dark">Order ID: <span></span></h4>
               <h4 class="text-dark">Order ID: <span></span></h4> -->
               <br><br>
                <a href="<?php echo base_url('hotel');?>" class="default-btn"><i class='fas fa-shopping-cart'></i>
 Continue Shopping<span></span></a>
            </div>
        </form>
         </div>
      </div>
      <div class="footer-widget-area  pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <a href="<?php echo base_url();?>">
                     <img src="<?php echo base_url();?>frontend/images/logo.png" alt="images" width="100" height="100">
                     </a>
                     <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
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
                           <a href="https://www.google.com" target="_blank">
                           <i class='bx bxl-google'></i>
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
                           <i class='bx bxs-downvote'></i><a href="about.html">About Us</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="blog.html">Latest Blog</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="booking-table.html">Book A Table</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="team.html">Our Team</a>
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
                        <p>No. 12, Ribon Building, Walse street, Australia</p>
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
         <p>©<b>Ruzo</b> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
      </div>
      <div class="go-top">
         <i class='bx bxl-upwork'></i>
         <i class='bx bxl-upwork'></i>
      </div>
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