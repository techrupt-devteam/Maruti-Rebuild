
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="keywords" content="<?php echo $pgKeywords ?>">
<meta name="description" content="<?php echo $pgDesc ?>">
<meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/css/custom.css">
<link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&family=Roboto:wght@300;400;500;700&family=Saira+Condensed:wght@100;300;400;500;600&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N44C4LH');</script>
<!-- End Google Tag Manager -->
<style></style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N44C4LH"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="preloader">
  <div id="preloader__status">&nbsp;</div>
</div>



<header  id="header_nav" class="header sticky-top ">
    <div class="container">
      <div class="row">
        <div class="w-100">
          <div class="header-container">
            <div class="header-logo"> 
              <a href="index.php" title="Seva Maruti" class="logo">
                <div><img src="assets/images/seva-logo-white.svg" alt="Seva Maruti"></div>
              </a> 
            </div>
            <div class="header__nav">
              <div class="header-banner">
               <div class="row scroll-hidden-top">
                  <div class="col-md-5 pr-4 pr-md-0 pr-xl-3" style="align-self: center;">
                    <div class="top-bar-event ts-top text-md-left text-right">
                      <ul class="list-inline">
                        <li class="topbar_item topbar_item_type-contact_timing"> 
                          <!-- <img src="assets/images/icon/phone.svg" style="width: 20px;"/>-->
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:8390446644">+91 83904 46644</a> </li> 
                        <li class="topbar_item topbar_item_type-email"> 
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                             <a href="mailto:enquiry@marutiseva.com">enquiry@marutiseva.com</a> 
                        </li> 
                      </ul>
                    </div>
                    <!-- Top Bar Text End --> 
                  </div>
                  <!-- Col End -->
                 <div class="col-md-7 d-none d-md-block  pr-0">
                  <div class="topbar-right text-right">
                    <ul class="list-inline">
                      <li> <a href="https://truevalue.marutiseva.com/" class="trueValuelogo"> <img src="assets/images/true-value-white.svg"/> </a> </li>
                      <li> <a href="http://nexa.marutiseva.com" class="nexaLogo"> <img src="assets/images/nexa.svg" class="lazyload" ></a> </li>
                      <li> <a href="http://commercial.marutiseva.com" class="nexaLogo"> <img src="assets/images/commercial.svg" class="lazyload" ></a> 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
           
              <div class="fl-nav-menu">
                  <div class="menu">
                  <ul id="menu" class='menu arrow-left'>
                    <li class="rel"><a href="#">About Us </a>
                      <ul class='submenu'>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="our-team.php">Our Team</a></li>
                        <li><a href="our-presence.php">Our Presence</a></li>
                      </ul>
                    </li>

       
<?php  include('connection.php');?>
        <li class="menu-dropdown-icon"><a href="#">Product</a>
          <ul style="display: none;" class="mobile-height-set">
             <?php 
              $product_header = "SELECT * FROM `product_cat` where car !='Eeco Tour' ORDER BY `product_cat`.`id` ASC";
              $menu_result = mysqli_query($conn, $product_header);
              while($menu_row = $menu_result->fetch_assoc()) {
              ?>
            <li><a href="#" style="border-bottom:none"></a>
            <ul class="submenu">
                <li>
                  <a href="<?php echo $menu_row['link'];?>" class="mega-link-with-img"> <img src="admin/upload/menu_image/<?php echo $menu_row['menu_image'];?>"/> 
                    <span><?php echo ucfirst($menu_row['car']);?></span> </a>
                </li>
             </ul>      
            </li>
            <?php } ?>

           
          
            
            <div class="clearfix"></div>
            <div class="display_table">
              <a href="request-a-test-drive-now.php" class="nav-booktestDrive">Request a Test Drive</a>
              </div>
          </ul>
        </li>
        
        <li class="rel"><a href="#" class="a">Workshop </a>
          <ul class='submenu'>
            <li><a href="schedule-services.php" class="a">Schedule Service / Accident Repair</a></li>
            <li><a href="our-presence-workshop.php" class="a">Our Workshops</a></li>
          </ul>
        </li>
        <li class="rel"><a href="#">Value Added Services</a>
          <ul class='submenu'>
            <li><a href="value-added-services.php">Value Added Services</a></li>
            <li><a href="maruti-insurance.php">Maruti Insurance</a></li>
            <li><a href="maruti-finance.php">Maruti Finance</a></li>
          </ul>
        </li>
        <li><a href="latest-offers.php">Latest Offer</a></li>
        <li> <a href="online-booking.php" class="booknowbtn"><i class="mdi mdi-car"></i>Book Now</a></li>
        <!-- <?php session_start(); 
        if(isset($_GET['nexa-logo'])){
          $_SESSION['link']= 'nexalink';
          }
        ?> -->
        <li><a href="enquiry.php">Enquiry</a></li>
        <li><a href="locator.php">Locator</a></li>
      </ul>
    </div>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>
  </header>

 <!-- Angle Bar End --> 
</div>
<!--Enquire Now-->

<div class="sticky-container d-none d-md-block">
  <ul class="sticky">
    <li class="hover-item"> <a href="our-presence-workshop.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-security-home"></i> <b class="footer-sticky1"> Find Workshop</b></a> </li>
    <li class="hover-item"> <a href="schedule-services.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-car-wash"></i> <b class="footer-sticky1"> Book Service</b></a> </li>
    <li class="hover-item"> <a href="online-booking.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-car-sports"></i> <b class="footer-sticky1">Book Your Car</b></a> </li>
    <li class="hover-item"> <a href="value-added-services.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-cards-playing-outline"></i> <b class="footer-sticky1">VAS Services</b></a> </li>
    <li class="hover-item"> <a href="enquiry.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-notification-clear-all"></i> <b class="footer-sticky1"> Enquiry </b></a> </li>
  </ul>
</div>

<div class="mobile-design d-md-none d-sm-none">
  <div class="mobile-fixes">
    <div class="row no-gutters">
      <div class="col">
        <a href="schedule-services.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-car-wash"></i> Service</a>
      </div>
      <div class="col border-left border-right">
        <a href="online-booking.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-car-sports"></i> Booking</a>
      </div>
      <div class="col border-left border-right">
        <a href="value-added-services.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-car-sports"></i>Book VAS </a>
      </div>
      <div class="col">
        <a href="enquiry.php" class="hvr-icon-wobble-horizontal"> <i class="mdi mdi-notification-clear-all"></i> Enquiry </a>
      </div>
    </div>
</div>
</div>


