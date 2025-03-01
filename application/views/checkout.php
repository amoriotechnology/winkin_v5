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
      <title>Restaurant</title>
      <link rel="icon" type="image/webp" href="<?php echo base_url();?>/images/logo-2.png">
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
                              <a href="cart.html">
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
                           <a href="<?php echo base_url('hotel/viewtable');?>" class="default-btn">Book A Table</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>Checkout</h1>
               <ul>
                  <li><a href="<?php echo base_url();?>">Home</a></li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <?php if(!empty($this->session->userdata('UserID'))) { ?>
      <div class="checkout-area ptb-100">
         <div class="container">
            <form id="checkout_data" method="post">
               <div class="row">
                  <div class="returning-customer">
                     <!-- <p>Returning Customer?<a href="<?php //echo base_url('user/login');?>"> Click here to login</a></p> -->
                     <?php if(empty($this->session->userdata('UserID'))) { ?>
                     <p>Returning Customer?<a href="<?php echo base_url('user/login');?>"> Click here to login</a></p>
                  <?php } else{ ?>
                   <p>Returning Customer?<a href="<?php echo base_url('user/login');?>">LoggedIn</a></p>
                 <?php } ?>
                  </div>
                  <div class="col-lg-7">
                     <div class="checkout-from">
                           <h2>Billing details</h2>
                           <div class="row">
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-select country" name="country" aria-label="Default select example">
                                       <option selected>United Arab Emirates</option>
                                       <option value="united States">united States</option>
                                       <option value="Austria">Austria</option>
                                       <option value="Italy">Italy</option>
                                       <option value="Italy">Italy</option>
                                       <option value="Japan">Japan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">First name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control first_name" name="first_name" required>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control last_name" name="last_name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control email" name="email" required>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control phone_number" name="phone_number" required>
                                 </div>
                              </div>
                              <!-- <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div> -->
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control address" name="address" required>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Town / City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control city" name="city" required>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control state" name="state">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Postcode / Zip <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control postcode" name="postcode" required>
                                 </div>
                              </div>
                              
                              <!-- <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="payment-method">
                                    <p>
                                       <input type="radio" id="create" name="radio-group">
                                       <label for="create">Create an account.</label>
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-sm-6 col-md-6">
                                 <div class="payment-method">
                                    <p>
                                       <input type="radio" id="different" name="radio-group">
                                       <label for="different">Ship to a different address?</label>
                                    </p>
                                 </div>
                              </div> -->
                              <div class="col-lg-12">
                                 <div class="form-group group-contact">
                                    <label class="form-label">Order Notes</label>
                                    <textarea class="form-control notes" rows="5" name="notes" placeholder="Order Notes"></textarea>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="checkout-right">
                        <h2>Your Order Summary</h2>
                        <div class="single-checkout-cart">
                           <div class="table-responsive">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th scope="col">Product Name </th>
                                       <!-- <th scope="col">Quantity</th> -->
                                       <th scope="col">Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $sum = 0; $s=0; foreach ($cart_items as $key => $value) { ?>
                                    <tr>
                                       <th scope="col"><?php echo $value->ProductName; ?></th>
                                       <input type="hidden" class="ProductName" name="ProductName" value="<?php echo $value->ProductName; ?>">
                                       <input type="hidden" class="ProductsID" name="ProductsID" value="<?php echo $value->ProductsID; ?>">
                                       <!-- <th scope="col"><?php //echo $value->quantity; ?></th> -->
                                       <th scope="col">
                                          <?php if($currency->position==1){echo $currency->curr_icon;}?>
                                          <?php echo $value->total; $sum+=$value->total;?>
                                          <!-- <?php //echo $value->price; $sum= $value->price + $value->total;?> -->
                                          <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                                       </th>
                                    </tr>

                                    <?php $s++; } ?>

                                    <!-- <tr class="card-subtotal">
                                       <th scope="col">Shipping</th>
                                       <th scope="col">$5.00</th>
                                    </tr> -->
                                    <tr class="card-subtotal">
                                       <th scope="col">Grand Total </th>
                                       
                                       <th scope="col">
                                          <input type="hidden" class="total_price" name="total_price" value="<?php echo $sum; ?>">
                                          <?php if($currency->position==1){echo $currency->curr_icon;}?>
                                          <?php echo $sum;?>
                                          <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                                       </th>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="bg-albastor">
                        <div class="bill-details">
                           <div class="bill-item-wrap">
                              <div class="payment-box">
                                 <div class="payment-method">
                                    <h2 class="text-dark">Payment Methods</h2>
                                    <br>
                                    <!-- <p>
                                       <input type="radio" id="direct-bank-transfer" name="radio-group" checked="">
                                       <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                    <p class="chack-text">There are many variations of passages of Lorem Ipsum available,
                                       but the majority have suffered alteration in some form, by injehu moand
                                       omised words which don't believable.
                                    </p>
                                    </p> -->
                                    <p>
                                       <input type="radio" id="paypal" class="payment_type" name="payment_type" value="PayPal">
                                       <label for="paypal">PayPal</label>
                                    </p>
                                    <p>
                                       <input type="radio" id="cash-on-delivery" class="payment_type" name="payment_type" value="Cash on Delivery">
                                       <label for="cash-on-delivery">Cash on Delivery</label>
                                    </p>
                                 </div>
                                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                 <button type="submit" class="default-btn checkout_btn">Place Order</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <?php } else{
         // $this->session->set_flashdata('exception', 'Please Login');
         echo "<script>
         Swal.fire(
                 'Please Login Here !!!',
                 'Please Login Here !!!',
                 'error'
               )
         </script>";
         redirect('user/login');
      } ?>
      <div class="footer-widget-area  pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6 col-md-6" data-cue="slideInUp">
                  <div class="footer-widget">
                     <a href="<?php echo base_url('/'); ?>">
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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

      <style type="text/css">
         .single-checkout-cart .table-responsive .table.table-bordered tbody .card-subtotal th{
            font-weight: 600 !important;
            font-size: 17px !important;
         }
      </style>


      <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

      $(document).ready(function(){
        $(".checkout_btn").click(function(event){
         event.preventDefault();
            // var ProductsID = $('.ProductsID').val();
            var ProductName = $('.ProductName').val();
            var total_price = $('.total_price').val();
            var first_name = $('.first_name').val();
            var last_name = $('.last_name').val();
            var address = $('.address').val();
            var city = $('.city').val();
            var state = $('.state').val();
            var postcode    = $('.postcode ').val();
            var email = $('.email').val();
            var phone_number = $('.phone_number').val();
            var notes = $('.notes').val();
            var country = $('.country').val();
            var payment_type = $('.payment_type:checked').val();
            $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>hotel/checkout',
           
            data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash,ProductName:ProductName,total_price:total_price,first_name:first_name,last_name:last_name,address:address,city:city,state:state,postcode:postcode,email:email,phone_number:phone_number,notes:notes,country:country,payment_type:payment_type},
            success:function(data)
            {     
              if(first_name == '' || last_name == '' || address == '' || city == '' || state == '' || postcode == '' || email == '' || phone_number == '' || notes == '' || country == '' || payment_type == '')
            {
               return false;
            }else{
               Swal.fire(
                 'Order Successfully',
                 'Order Successfully',
                 'success'
               )
               $.ajax({
                  type: "POST",
                  url: '<?php echo base_url(); ?>hotel/cartDelete',
                   data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash},
                  success:function(){
                     setTimeout(function() {
                     // $('#myModal').modal("show");
                        window.location = "<?php echo base_url('hotel');?>";
                        // window.location = "<?php //echo base_url('hotel/success');?>";

                     }, 2000);
                  }
               })
            } 
            // setTimeout(function() {
            //          // $('#myModal').modal("show");
            //             window.location = "<?php echo base_url('hotel/success');?>";

            //          }, 2000);


            },
            error: function (data){ 
               Swal.fire(
                 'Order Failed !!!',
                 'Order Failed !!!',
                 'error'
               )
            }
         })
        });
        
      });
   </script>
   </body>
</html>