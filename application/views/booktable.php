<?php 
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$page = $link_array[3];
// print_r($page);

?>

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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
      <title><?php echo html_escape($title); ?></title>
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
                  <a href="<?php echo base_url();?>">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-light" alt="images" width="100" height="100">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-dark" alt="images" width="100" height="100">
                  </a>
               </div>
            </div>
         </div>
          <div class="main-nav main-two-nav">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a href="<?php echo base_url();?>">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-light" alt="images" width="100" height="100">
                  <img src="<?php echo base_url();?>frontend/images/logo.png" class="logo-dark" alt="images" width="100" height="100">
                  </a>
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
                        <!-- <div class="option-item">
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
                        </div> -->
                        <div class="option-item">
                           <div class="shapping-bag">
                              <a href="<?php echo base_url('hotel/cart');?>">
                              <img src="<?php echo base_url();?>frontend/images/shopping-bag-icon.svg" alt="images">
                              </a>
                              <div class="shapping-text">
                                 <?php 
                                    if(!empty($count_products)){
                                       echo count($count_products);
                                    } else{
                                       echo "0";
                                    }
                                 ?>
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <a href="<?php echo base_url('hotel/book_table');?>" class="default-btn">Reservations</a>
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
                        <!-- <div class="option-item">
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
                        </div> -->
                        <div class="option-item">
                           <div class="shapping-bag">
                              <a href="cart.php">
                              <img src="<?php echo base_url();?>frontend/images/shopping-bag-icon.svg" alt="images">
                              </a>
                              <div class="shapping-text">
                                 <?php 
                                    if(!empty($count_products)){
                                       echo count($count_products);
                                    } else{
                                       echo "0";
                                    }
                                 ?>
                              </div>
                           </div>
                        </div>
                        <div class="option-item">
                           <a href="<?php echo base_url('hotel/book_table');?>" class="default-btn">Reservations</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pag-banner-area faqs-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>Booking Table</h1>
               <ul>
                  <li><a href="<?php echo base_url();?>">Home</a></li>
                  <li>Booking Table</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <div class="visit-two-area visit-page-area pt-100 pb-100">
         <div class="container">
            <div class="visit-two-form-content visit-page-content">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="visit-two-images">
                        <!--<div class="visit-video">-->
                        <!--   <a href="https://www.youtube.com/watch?v=PtOOI_nKwtw" class="popup-youtube">-->
                           <img src="<?php //echo base_url();?>frontend/images/video-play.svg" alt="images">
                        <!--   </a>-->
                        <!--</div>-->
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="single-visit-two-form booking-table-form">
                        <div class="section-title left-title">
                           <span class="top-title" style="line-height: 30px !important;">At Phoduyen, we manage a first come, first served principle.<br>Beat the waiting line.</span>
                           <h2>Dine in Reservation</h2>
                        </div>
                        <!-- <form id="book_table" action="<?php //echo base_url('hotel/bookTable/''); ?>" method="post"> -->
                        <form id="book_table" method="post">
                           <div class="row">
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control name" name="name" placeholder="Name" required>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control phonenumber" name="phonenumber" placeholder="Phone" required>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control person" name="person" placeholder="Persons" required>
                                    <!-- <select class="form-select" aria-label="Default select example">
                                       <option selected>Persons</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                    </select> -->
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <div class="form-group">
                                          <!-- <label for="startdate"><strong>Date</strong></label> -->
                                       <input type="date" class="form-control start_date" name="start_date" id="startdate" value="2023-05-16" required>
                                    </div>
                                   <!--  <div class="form-group">
                                       <div class="input-group date" id="datetimepicker">
                                          <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                          <span class="input-group-addon"></span>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <select class="form-select timing" name="timing" aria-label="Default select example" required>
                                       <option selected>Select Timing</option>
                                       <option value="12.00 AM">12.00 AM</option>
                                       <option value="12.30 AM">12.30 AM</option>
                                       <option value="1.00 AM">1.00 AM</option>
                                       <option value="1.30 AM">1.30 AM</option>
                                       <option value="2.00 AM">2.00 AM</option>
                                       <option value="2.30 AM">2.30 AM</option>
                                       <option value="3.00 AM">3.00 AM</option>
                                       <option value="3.30 AM">3.30 AM</option>
                                       <option value="4.00 AM">4.00 AM</option>
                                       <option value="4.30 AM">4.30 AM</option>
                                       <option value="5.00 AM">5.00 AM</option>
                                       <option value="5.30 AM">5.30 AM</option>

                                       <option value="6.00 AM">6.00 AM</option>
                                       <option value="6.30 AM">6.30 AM</option>
                                       <option value="7.00 AM">7.00 AM</option>
                                       <option value="7.30 AM">7.30 AM</option>
                                       <option value="8.00 AM">8.00 AM</option>
                                       <option value="8.30 AM">8.30 AM</option>
                                       <option value="9.00 AM">9.00 AM</option>
                                       <option value="9.30 AM">9.30 AM</option>
                                       <option value="10.00 AM">10.00 AM</option>
                                       <option value="10.30 AM">10.30 AM</option>
                                       <option value="11.00 AM">11.00 AM</option>
                                       <option value="11.30 AM">11.30 AM</option>
                                       <option value="12.00 PM">12.00 PM</option>
                                       <option value="12.30 PM">12.30 PM</option>
                                       <option value="1.00 PM">1.00 PM</option>
                                       <option value="1.30 PM">1.30 PM</option>
                                       <option value="2.00 PM">2.00 PM</option>
                                       <option value="2.30 PM">2.30 PM</option>
                                       <option value="3.00 PM">3.00 PM</option>
                                       <option value="3.30 PM">3.30 PM</option>
                                       <option value="4.00 PM">4.00 PM</option>
                                       <option value="4.30 PM">4.30 PM</option>
                                       <option value="5.00 PM">5.00 PM</option>
                                       <option value="5.30 PM">5.30 PM</option>

                                       <option value="6.00 PM">6.00 PM</option>
                                       <option value="6.30 PM">6.30 PM</option>
                                       <option value="7.00 PM">7.00 PM</option>
                                       <option value="7.30 PM">7.30 PM</option>
                                       <option value="8.00 PM">8.00 PM</option>
                                       <option value="8.30 PM">8.30 PM</option>
                                       <option value="9.00 PM">9.00 PM</option>
                                       <option value="9.30 PM">9.30 PM</option>
                                       <option value="10.00 PM">10.00 PM</option>
                                       <option value="10.30 PM">10.30 PM</option>
                                       <option value="11.00 PM">11.00 PM</option>
                                       <option value="11.30 PM">11.30 PM</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <button type="submit" class="default-btn insert_data">Book A Table</button>
                                 <input type="hidden" class="tableid" name="tableid" value="<?php echo $page; ?>">
                                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              </div>
                           </div>
                        </form>
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
                           <i class='bx bxs-downvote'></i><a href="<?php echo base_url('hotel/viewtable');?>">Reservations</a>
                        </li>
                        <li>
                           <i class='bx bxs-downvote'></i><a href="<?php echo base_url('hotel/contact');?>">Contact Us</a>
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

       $(".insert_data").click(function(event){
         event.preventDefault();
         
         var tableid = $('.tableid').val();
         var name = $('.name').val();
         var phonenumber = $('.phonenumber').val();
         var person = $('.person').val();
         var start_date = $('.start_date').val();
         // var end_date = $('.end_date').val();
         var timing = $('.timing').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>hotel/bookTable',
           
            data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash,tableid:tableid,name:name,phonenumber:phonenumber,person:person,start_date:start_date,timing:timing},
            success:function(data)
            { 
            if(name == '' || phonenumber == '' || person == '' || start_date == '' || timing == '')
            {
               return false;
            }else{
               Swal.fire(
                 'Table Booked Successfully',
                 'Table Booked Successfully',
                 'success'
               )
            }
            // location.reload();    
            },
            error: function(data){ 
               Swal.fire(
                 'Table Booked Failed !!!',
                 'Table Booked Failed !!!',
                 'error'
               )
            }
         })
       });
   </script>



   </body>
</html>      