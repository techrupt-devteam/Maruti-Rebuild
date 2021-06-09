<?php $title="Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur | SEVA" ; $pgDesc="Visit SEVA Automotive's Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur for the best Maruti Suzuki s presso, Brezza, Swift Dzire, Ertiga & Swift price" ; $pgKeywords="maruti suzuki, maruti suzuki car, Car, brezza, swift dzire, ertiga, alto 800, wagon r, alto k10, maruti, celerio, swift price, vitara brezza, swift dzire price, maruti suzuki swift, ertiga price, ertiga car, maruti suzuki s presso, maruti x presso, maruti suzuki arena, maruti showrooms near me, maruti cars, maruti suzuki ertiga, suzuki ertiga, maruti swift, wagon r 2020, swift vdi, dzire,Maruti Suzuki Showroom Nagpur, Maruti Suzuki Nagpur, Maruti Suzuki Showroom Nashik, Maruti Suzuki ARENA Nagpur, ARENA Nashik" ; include( 'connection.php'); include 'header.php'; ?>
<main>
  <!--Starting BOX-->
  <!--   <div id="boxes">
    <div style="display: none;" id="dialog" class="window">
      <div class="website_intro">
        <div class="welcomesect">
          <div class="row"> 
            <div class="col-md-4 ml-auto text-md-right">
              <picture>
                <source srcset="assets/images/icon/maruti-opisial.svg" type="image/webp">
                <source srcset="assets/images/marutilogo.png" type="image/png">
                <img src="assets/images/marutilogo.png" class="martuiLogo lazyload"> </picture>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="seva-logo"> <img src="assets/images/icon/seva-logo.svg" class="lazyload" style="width: 180px;" /> </div>
          </div>
        </div>
        <h2>Select your Drive</h2>
        <div class="other-sites" id="popupfoot"> 
          <a class="close agree" href="https://marutiseva.com/"> 
            <img src="assets/images/icon/arena.svg" class="lazyload"  /> 
          </a> 
          <a href="https://nexa.marutiseva.com/"> 
            <img src="assets/images/icon/nexa.svg" class="lazyload"/> 
          </a> 
          <a href="https://truevalue.marutiseva.com/"> 
            <img src="assets/images/true-value-white.svg" /> 
          </a> 
          <a href="https://commercial.marutiseva.com/"> 
            <img src="assets/images/icon/commercial.svg" class="lazyload"  /> 
          </a> 
        </div>
      </div>
    </div>
    <div id="mask"></div>
  </div> -->
  <!--Starting BOX-->
  <div class="container-fluid position-relative">
    <div class="row body-content">
      <div class="col-sm-12 px-0" >
        <div id="carousel-example-1z" class="carousel slide carousel-fade desktop-view" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php 
              $slider = "SELECT * FROM `slider` ORDER BY `slider`.`slider_id` ASC";
              $results = mysqli_query($conn, $slider);
              $i =1; 
              while ($row = $results->fetch_assoc()) {
            ?>
            <div class="carousel-item <?php if($i ==1){echo "active";}?>"> 
              <a href="<?php echo $row['link'];?>">
              <picture>
                <source srcset="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" type="image/jpg">
                <source srcset="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" type="image/jpg">
                <img class="d-block w-100 lazyload" src="admin/upload/seva_banner/<?php echo $row['slider_img'];?>" alt="eight slide"> </picture>
              </a> 
            </div>
            <?php 
            $i++;
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="section-filter">
            <div class="b-filter__inner bg-grey">
              <h2>Get In Touch</h2>
              <form class="b-filter">
                <div class="form-group mb-2">
                  <label style="font-weight: 500">Full Name</label>
                  <input type="text" class="form-control" placeholder="Full name" name="">
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xl-12">
                    <div class="form-group mb-2">
                      <label style="font-weight: 500">Phone No</label>
                      <input type="text" class="form-control" placeholder="Phone no" name="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-12 mb-3">
                    <div class="form-group mb-2">
                      <label style="font-weight: 500">City</label>
                      <input type="text" class="form-control" placeholder="City" name="">
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group mb-2">
                  <label style="font-weight: 500">Description </label>
                  <textarea  class="form-control" placeholder="Description" name="" style="height: 52px;"></textarea>
                </div> -->
                <div>
                  <div class="b-filter__btns">
                    <button class="btn btn-lg btn-primary rounded-0 w-100">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <link rel='stylesheet' href='assets/css/owl.carousel.min.css'>
  <section class="our-services-slider d-none d-md-block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-4 align-self-center">
          <div class="total-services">
            <h2>Our Services</h2>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="carousel-wrap-inner">
            <div class="owl-carousel">
              <div class="item">
                <a href="#">
                  <img src="assets/images/homepage-right-bottom.jpg">
                  <div class="bottom-title-slider">
                    <h2>Car Finance</h2> 
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/homepage-right-top.jpg">
                  <div class="bottom-title-slider">
                    <h2>VAS Services</h2> 
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/insurance.jpeg">
                  <div class="bottom-title-slider">
                    <h2>Car Insurance</h2> 
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/homepage-right-top.jpg">
                  <div class="bottom-title-slider">
                    <h2>Book Services</h2> 
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/homepage-right-top.jpg">
                  <div class="bottom-title-slider">
                    <h2>Book Services</h2> 
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/icon/seva-service.jpg">
                  <div class="bottom-title-slider">
                    <h2>Book Services</h2> 
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
  <script src="assets/owl-slider/script.js"></script>
  <section class="feature-car car_browse_area page-section-ptb">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <!--<span>Check out our recent cars</span> -->
          <p class="overlay-title">All Product</p>
          <h2 style="color: #2e3094;">Product</h2>
        </div>
      </div>
    </div>
    <div class="container" style="max-width:1500px">
      <div class="new_title">
        <h2>Product List</h2>
      </div>
      <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'> -->
      <div class="row">
        <div class="col-md-12">
          <div class="owl-slider">
            <div id="carousel" class="owl-carousel bg-white product-list-slider">
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/wagonR.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="wagonr.php">Wagon R </a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="car-item item">
                <div class="car-image">
                  <img src="assets/images/h-product/celerio.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="celerio.php">Celerio</a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/dzire.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="dzire.php">Swift Dzire</a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item ">
                <div class="car-image">
                  <img src="assets/images/h-product/wagonR.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="wagonr.php">Wagon R </a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/alto.png" alt="Image" style="max-width:100%;">
                  <!--  <div class="car-overlay-banner">
                          <ul>
                            <li><a href="#"><i class="mdi mdi-car-sports"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-download"></i></a></li>
                          </ul>
                        </div> --></div>
                <div class="car-content"> <a href="alto.php"> Alto </a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/new-swift.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="swift.php">  Swift </a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/vitara-brezza.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="vitara-brezza.php">Vitara Brezza</a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/ecco.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="eeco.php">EECO </a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/spresso.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="s-presso.php">S Presso</a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
              <div class="item car-item">
                <div class="car-image">
                  <img src="assets/images/h-product/ertiga.png" alt="Image" style="max-width:100%;">
                </div>
                <div class="car-content"> <a href="s-presso.php">S Presso</a>
                  <div class="price"> <span class="old-price"><i class="fa fa-inr" aria-hidden="true"></i> 45,768 </span>  <span class="new-price"><i class="fa fa-inr" aria-hidden="true"></i> 41,398 </span> 
                    <br/> <small>Ex-Showroom Price</small>
                  </div>
                </div>
                <div class="other-info">
                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="offer-secton">
    <div class="col-md-12">
      <div class="section-title">
        <!--<span>Check out our recent cars</span> -->
        <p class="overlay-title" style="bottom: 55%;">Latest Offer</p>
        <h2 style="color: #2e3094;margin-top: -10px" class="text-center mb-5">Offer</h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="owl-slider">
        <div id="carousel-2" class="owl-carousel">
          <div class="item">
            <img src="admin/upload/seva_offer_banner/kg59gikgpdxdoe831h-alto.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/atz3zwdwg2l292haz4-brezza.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/6b6i7rif8dazf9h5yo-celerio.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/wwcko7023b51qhk5t5-celeriox.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/yucjmfxpa2mfkf8uub-dzire.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/mw5a2j1kzwkohhs5wt-eeco.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/mw5a2j1kzwkohhs5wt-eeco.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/cc1gruu6dyyy29ertc-ertiga.jpg" alt="maruti-seva" class="w-100">
          </div>
          <div class="item">
            <img src="admin/upload/seva_offer_banner/vsekuo5bf62t7jxkng-spresso.jpg" alt="maruti-seva" class="w-100">
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
  <script src="assets/product-slider/script.js"></script>

  <div class="container feature-car mt-2">
    <div class="our-values">
      <div class="row align-items-center align-items-xl-start">
        <div class="col-md-12">
          <div class="section-title">
            <p class="overlay-title">Our Values</p>
            <h2 style="color: #2e3094;" class="text-center mb-5">Values</h2>
          </div>
        </div>
        <ul class="col-lg-12 col-md-12 col-sm-12">
          <li>
            <div class="Our-Values-services">
              <div class="text-center">
                <div class="items-head one">
                  <div class="border-one">
                    <div class="border-two-wrap">
                      <div class="border-two"></div>
                    </div>
                    <div class="icon">
                      <img src="assets/images/responsible.png" alt="responsible lazyload">
                    </div>
                  </div>
                </div>
                <!--// items Head-->
                <div class="items-body">
                  <div class="pt-3 title-border">
                    <h5 class="title">Responsible</h5>
                  </div>
                  <div class="padding-around">
                    <p>You can always rely on us and our network.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="Our-Values-services">
              <div class="text-center">
                <div class="items-head one">
                  <div class="border-one">
                    <div class="border-two-wrap">
                      <div class="border-two"></div>
                    </div>
                    <div class="icon">
                      <img src="assets/images/dynamic.png" alt="responsible lazyload">
                    </div>
                  </div>
                </div>
                <!--// items Head-->
                <div class="items-body">
                  <div class="pt-3 title-border">
                    <h5 class="title">Dynamism</h5>
                  </div>
                  <div class="padding-around">
                    <p>Always evolving with your needs.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="Our-Values-services">
              <div class="text-center">
                <div class="items-head one">
                  <div class="border-one">
                    <div class="border-two-wrap">
                      <div class="border-two"></div>
                    </div>
                    <div class="icon">
                      <img src="assets/images/open.png" alt="responsible lazyload">
                    </div>
                  </div>
                </div>
                <!--// items Head-->
                <div class="items-body">
                  <div class="pt-3 title-border">
                    <h5 class="title">Open</h5>
                  </div>
                  <div class="padding-around">
                    <p>Expertise that ensures utmost efficiency.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="Our-Values-services">
              <div class="text-center">
                <div class="items-head one">
                  <div class="border-one">
                    <div class="border-two-wrap">
                      <div class="border-two"></div>
                    </div>
                    <div class="icon">
                      <img src="assets/images/efficient.png" alt="responsible lazyload">
                    </div>
                  </div>
                </div>
                <!--// items Head-->
                <div class="items-body">
                  <div class="pt-3 title-border">
                    <h5 class="title">Efficient</h5>
                  </div>
                  <div class="padding-around">
                    <p>Expertise that ensures utmost efficiency.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="Our-Values-services">
              <div class="text-center">
                <div class="items-head one">
                  <div class="border-one">
                    <div class="border-two-wrap">
                      <div class="border-two"></div>
                    </div>
                    <div class="icon">
                      <img src="assets/images/reliable.png" alt="responsible lazyload">
                    </div>
                  </div>
                </div>
                <!--// items Head-->
                <div class="items-body">
                  <div class="pt-3 title-border">
                    <h5 class="title">Reliable</h5>
                  </div>
                  <div class="padding-around">
                    <p>Your safety is our number one priority.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="fact-area fact-bg">
    <div class="fact-area-title">lorem ipsum <span class="left"></span>
      <span class="right"></span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-6">
          <div class="fact-item mb-md-5 mb-3">
            <div class="fact-icon"> <i class="fa fa-smile-o" aria-hidden="true"></i>
            </div>
            <div class="fact-content">
              <h3>2900k</h3>
              <p>HAPPY CLIENTS</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
          <div class="fact-item mb-md-5 mb-3">
            <div class="fact-icon"> <i class="fa fa-car" aria-hidden="true"></i>
            </div>
            <div class="fact-content">
              <h3>2900 +</h3>
              <p>NEW CARS IN STOCK</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
          <div class="fact-item mb-md-5 mb-3">
            <div class="fact-icon"> <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="fact-content">
              <h3>2900 +</h3>
              <p>CARS IN STOCK</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
          <div class="fact-item mb-md-5 mb-3">
            <div class="fact-icon"> <i class="fa fa-wrench" aria-hidden="true"></i>
            </div>
            <div class="fact-content">
              <h3>2900 +</h3>
              <p>SERVICE CENTERS</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="seva-service-section padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="service-section-right">
            <div class="section-title">
              <div class="padding-bottom-15">
                <h6 class="title uppercase gray"> our Services </h6>
              </div>
              <div class="padding-bottom-30">
                <h2 class="heading-02"> Services We Offers </h2>
              </div>
            </div>
            <!--// Section title-->
            <div class="service-section-bottom">
              <ul class="items-wrap">
                <li class="seva-our-service-items color-01">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-car" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">Car Inspection</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
                <li class="seva-our-service-items color-02">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-sliders" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">vehicle Trade-in</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
                <li class="seva-our-service-items color-03">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-paint-brush" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">Auto Painting</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
                <li class="seva-our-service-items color-04">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-wrench" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">Parts Repairing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
                <li class="seva-our-service-items color-05">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-inr" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">Auto Financing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
                <li class="seva-our-service-items color-06">
                  <div class="item-left">
                    <div class="item-border">
                      <div class="border-bg"></div>
                      <div class="icon"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="item-right">
                    <h5 class="title">Vehicle Delivery</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                  </div>
                </li>
                <!--// Service items-->
              </ul>
            </div>
            <!--// Service Section bottom-->
          </div>
          <!--// Service Section Right-->
        </div>
        <div class="col-lg-6">
          <div class="section-border-image margin-right white-gray">
            <div class="border-design">
              <div class="border-bg top"></div>
              <div class="we-are-img">
                <img src="assets/images/listing-3.jpg" alt="img">
              </div>
            </div>
          </div>
          <!--// Section Border Image-->
        </div>
      </div>
      <!--// Row-->
    </div>
    <!--// Container-->
  </section>
  <section id="ts-feature" class="custom-block-3 about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-3 mb-md-0">
          <div class="overimg-layout">
            <img src="assets/images/icon/head-office.jpeg" class="img-fluid" style="border-radius: 4px" />
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 align-self-center col-md-12 mt-4 mt-md-0">
          <div class="title">
            <h1>About Seva Automotive</h1>
          </div>
          <div class="content">
            <h3 class="">Seva Automotive is an authorized multi-location Maruti Suzuki dealership since 1985.</h3>
            <p class="text-justify">Headquartered in Nashik, Seva Automotive family has marked its presence in Nashik, Nagpur, Nanded, Dhule, Wardha & Nandurbar. It also has its presence in rural areas like Igatpuri, Yeola, Hinganghat, Ramtek, Katol with overall 11 Arena Showrooms (including 2 E-outlets and 5 R-Outlets), 3 Nexa Showrooms, 4 Commercial Showrooms, 2 True Value Outlets, 13 Workshops in Maharashtra.</p>
            <p class="text-justify">We're a full service, state-of-the-art Maruti Suzuki dealership who strives to provide high-quality service, amenities, & experience. With Seva Automotive you are one step closer to owning your dream car. Our goal is to provide our customers with quality cars they can drive right off our showroom floor.</p> <a href="about-us.php" class="btn btn-danger btn-sm">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="b-bnr pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-md-left text-center">
          <div class="b-bnr__main">
            <h2 class="b-bnr__title">Book your Free Car Inspection</h2>
            <div class="b-bnr__info d-none d-md-block">Labore dolore magna aliqua minim ipsum veniam quis nostrud exercitation</div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-md-right text-center mt-1 mt-md-0"> <a class="btn btn-primary text-capital" href="#">Get Rigistered</a>
            <div class="b-bnr-contacts">
              <div class="b-bnr-contacts__info">Call Us For Booking Vehicle</div> <a class="b-bnr-contacts__phone" href="tel:+17553028549"><i class="fa fa-phone text-primary"></i> +1 (755) 302-8549</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!--<a href="#" class="enquire-nowBtn"> Enquire Now</a>-->
<script src="assets/js/jquery-1.7.2.min.js"></script>
<script defer>
  $(document).ready(function(){
    setInterval(function () {
     $('#dialog').show();
  }, 43200000);
  });
</script>
<?php require_once( 'footer.php'); ?>