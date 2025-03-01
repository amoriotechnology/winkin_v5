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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <a href="<?php echo base_url('/'); ?>">
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
                           <a href="booking-table.php" class="default-btn">Book A Table</a>
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
      <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="page-banner-content">
               <h1>Cart</h1>
               <ul>
                  <li><a href="<?php echo base_url('hotel');?>">Home</a></li>
                  <li>Cart</li>
               </ul>
            </div>
         </div>
         <div class="page-banner-shape">
            <img src="<?php echo base_url();?>frontend/images/page/page-banner-shape-1.webp" alt="images">
         </div>
      </div>
      <div class="cart-area pt-100 pb-70">
         <div class="container">
            <form id="cart_data" method="post">
               <div class="table-responsive">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th scope="col" class="cart-text">Name</th>
                           <th scope="col">Price</th>
                           <th scope="col" class="cart-quantity">Quantity</th>
                           <th scope="col">Total</th>
                           <th scope="col">Remove</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php if(!empty($cart_items)){ $s=0; foreach ($cart_items as $key=> $value) { ?>
                        <tr>
                           <th scope="col" class="table-img">
                              <div class="table-icon">
                                 <a href="shop-single.php">
                                 <img src="<?php echo base_url($value->ProductImage);?>" width="100" alt="images">
                                 </a>
                              </div>
                           </th>
                           <th scope="col" class="cart-text">
                              <a href=""><?php echo $value->ProductName; ?></a>
                              <input type="hidden" class="ProductName" name="ProductName[]" value="<?php echo $value->ProductName; ?>">
                              <input type="hidden" id="productid" name="ProductsID[]" value="<?php echo $value->ProductsID; ?>">
                              <input type="hidden" class="variantid" name="variantid[]" value="<?php echo $value->variantid; ?>">
                           </th>
                           <th scope="col">
                             <?php if($currency->position==1){echo $currency->curr_icon;}?>
                             <?php echo $value->price;?>
                             <input type="hidden" class="product_price" name="price[]" value="<?php echo $value->price;?>">
                              <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                           </th>
                           <th scope="col" class="cart-quantity">
                              <div class="pass-quantity">
                                 <div class="input-counter">
                                    <span class="minus-btn">
                                    <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" name="quantity[]" class="quantity-input" value="1" id="qty">
                                    <span class="plus-btn">
                                    <i class='bx bx-plus'></i>
                                    </span>
                                 </div>
                              </div>
                           </th>
                           <th scope="col">
                              <!-- <input type="hidden" class='total_price' name="total"> -->
                              <?php if($currency->position==1){echo $currency->curr_icon;}?>
                              <?php 
                                 if(empty($value->price)){
                                    echo "<span name='total[]' class='total_price'></span>";
                                    // echo "<input type='text' class='total_price' name='total[]'>";
                                 }else{
                                    echo "<span name='total[]' class='total_price'>$value->price</span>";
                                    // echo "<input type='text' class='total_price' name='total[]' value='$value->price'>";
                                 }
                              ?>
                              
                              <?php if($currency->position==2){echo $currency->curr_icon;}?> 
                           </th>
                           <th>
                              <a href="<?php echo base_url('hotel/delete_items/'.$value->id);?>" class="delete-bin" onclick = "return confirm ('Are you sure, want to remove this product from our cart ?')">
                              <!-- <img src="<?php //echo base_url();?>frontend/images/delete-bin-icon.svg" alt="images"> -->
                              <i class="fa fa-trash-o text-danger" style="font-size:24px"></i>
                              </a>
                           </th>
                        </tr>
                        <?php $s++; } } else{ ?>
                        <tr>
                           <th colspan="7" class="text-center">No Products on your Cart</th>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <div class="coupon-code">
                     <div class="row align-items-center">
                       <!--  <div class="col-lg-6 col-md-6">
                           <form class="coupon">
                              <div class="mb-3">
                                 <div class="coupon-group-form">
                                    <input type="text" class="form-control" placeholder="Coupon-Code">
                                    <button type="submit" class="default-btn">
                                    Apply Coupon<span></span>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div> -->
                        <div class="col-lg-12 col-md-12">
                           <div class="bottom">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              <!-- <button type="submit" class="default-btn check_data">Proceed To Checkout<span></span></button> -->
                               <?php 
                               if(!empty($cart_items)){
                                  echo "<a href=".base_url('hotel/checkout')." class='default-btn'>Proceed To Checkout<span></span></a>";
                               }else{
                                  echo "<button type='submit' class='default-btn' disabled>Proceed To Checkout<span></span></button>";
                               }
                               ?>
                              <!-- <a href="<?php //echo base_url('hotel/checkout');?>" class="default-btn">Proceed To Checkout<span></span></a> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <!-- <div class="checkout">
               <div class="checkout-working">
                  <h2>Cart Totals</h2>
                  <ul>
                     <li class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span class="cart-number">

                     </li>
                     <li class="d-flex justify-content-between">
                        <span>Shipping</span>
                        <span class="cart-number">$30,00</span>
                     </li>
                     <li class="d-flex justify-content-between">
                        <span>Total</span>
                        
               
                     </li>
                  </ul>
                  <a href="<?php //echo base_url('hotel/checkout');?>" class="default-btn">Proceed To Checkout<span></span></a>
               </div>
            </div> -->
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

      <style type="text/css">
         .total_price{
            border: none;
         }
         .total_price:focus-visible {
        outline: none;
      }
      </style>
   
   <script>
      var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
      var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

      $(document).ready(function(){
        $(".quantity-input").change(function(){
           var quantity = $(this).val();
           var ProductsID = $(this).closest('tr').find('#productid').val();
           // alert(ProductID);
           var price = $(this).closest('tr').find('.product_price').val();
           var total = quantity * price;
           $(this).closest('tr').find('.total_price').html(total);  
           $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>hotel/update_items',
           
            data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash,ProductsID:ProductsID,total:total,quantity:quantity},
            success:function(data)
            {     
               // window.location = "<?php echo base_url(); ?>hotel/update_items";
            },
            error: function (){ }
         })
           // if(quantity <= 0){
           //  alert('quantity Must be Greater than zero');
           //  location.reload(true);
           // }
        });
        

        // $(".check_data").click(function(event){
        //  event.preventDefault();
        //  // var ProductsID = $(this).attr('data-id');
        //  var ProductsID = $('#productid').val();
        //  var variantid = $('.variantid').val();
        //  var ProductName = $('.ProductName').val();
        //  var price = $('.product_price').val();
        //  var total = $('.total_price').text();
        //  var quantity = $('#qty').val();
        //  $.ajax({
        //     type: "POST",
        //     url: '<?php echo base_url(); ?>hotel/insert_cart',
           
        //     data: {<?php echo $this->security->get_csrf_token_name();?>: csrfHash,ProductsID:ProductsID,ProductName:ProductName,variantid:variantid,ProductName:ProductName,price:price,total:total,quantity:quantity},
        //     success:function(data)
        //     {     
        //        window.location = "<?php echo base_url(); ?>hotel/checkout";
        //     },
        //     error: function (){ }
        //  })
        // });
      });
   </script>



   </body>
</html>