<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Asif Global Exports | A Complete Solutions For Exporting</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  </head>
  <body>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!--Header Start-->
      <?php include 'header.php';?>
      <!--Header End-->
      <!--Main Slider-->
      <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
          <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
              <!-- Slide 1 -->

                <?php $count = 0; 
                        include 'admin/db.php'; 
                                       $result = mysqli_query($con,"SELECT * FROM slider order by id desc   ");
                                        while($row = mysqli_fetch_array($result))
                                           {    ?> 
                                               
                                      

              <li data-index="rs-<?php echo $count++;?>" data-transition="zoomout">
                <!-- MAIN IMAGE -->
                <img src="images/sliders/<?php echo $row['img'];?>" alt="" class="rev-slidebg" />
                <div
                  class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="shape"
                  data-height="auto"
                  data-whitespace="nowrap"
                  data-width="none"
                  data-hoffset="['110','110','110','110']"
                  data-voffset="['110','90','90','90']"
                  data-x="['right','right','right','right']"
                  data-y="['bottom','bottom','bottom','bottom']"
                  data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  >
                  <i class="float-icon flaticon-cargo-boat"></i>
                </div>
                <div
                  class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="shape"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-width="none"
                  data-hoffset="['0','0','0','0']"
                  data-voffset="['110','90','90','90']"
                  data-x="['right','right','right','right']"
                  data-y="['bottom','bottom','bottom','bottom']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  >
                  <i class="float-icon flaticon-airplane-2"></i>
                </div>
                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[15,15,15,15]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['750','750','750','650']"
                  data-whitespace="normal"
                  data-hoffset="['0','0','0','0']"
                  data-voffset="['-195','-160','-160','-140']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  <span class="title"><?php echo $row['title'];?></span>
                </div>
                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[15,15,15,15]"
                  data-paddingright="[15,15,15,15]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['750','750','750','650']"
                  data-whitespace="normal"
                  data-hoffset="['0','0','0','0']"
                  data-voffset="['-70','-40','-40','-30']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  <h1><?php echo $row['description'];?></h1>
                </div>
                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[15,15,15,15]"
                  data-paddingright="[15,15,15,15]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','750','700','450']"
                  data-whitespace="normal"
                  data-hoffset="['0','0','0','0']"
                  data-voffset="['100','120','120','120']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                  >
                  <a href="<?php echo $row['link'];?>" class="theme-btn btn-style-one hvr-light"><span class="btn-title"><?php echo $row['buttonname'];?>  </span></a>
                </div>
              </li>

                  <?php }
                                       ?> 

             
            </ul>
          </div>
        </div>
      </section>
      <!-- End Main Slider-->
      <!-- About Section -->
      <section class="about-section pt-1 sm-pt-60">
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
              <div class="inner-column">
                <div class="sec-title">
                  <span class="sub-title">About Company</span>
                  <h2>Discover who we are</h2>
                  <div class="text"><?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM terms where id = 12");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo ''.$row['content'].''; 
                                                                    }
                                                                ?></div>
                  <div class="image-column desktophide mt-3">
                    <div class="inner-column">
                      <figure class="image-1"><img src="images/resource/1.png" alt="about-us-1"></figure>
                      <figure class="image-2"><img src="images/resource/2.png" alt="about-us-2"></figure>
                    </div>
                  </div>
                  
                </div>
                <!--<div class="content-box">
                  <div class="about-block">
                  	<i class="icon flaticon-worldwide-shipping"></i>
                  	<h4 class="title">Worldwide services</h4>
                  	<p class="text">We’re always provide people a complete solution focused of any business.</p>
                  </div>
                  
                  <div class="about-block">
                  	<i class="icon flaticon-3d-cube"></i>
                  	<h4 class="title">Local services</h4>
                  	<p class="text">We’re always provide people a complete solution focused of any business.</p>
                  </div>
                  </div>-->
                <div class="btm-box">
                  <a href="about-us.php" class="theme-btn btn-style-one"><span class="btn-title">Explore More</span></a>
                </div>
              </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 mobilehide">
              <div class="inner-column">
                  <?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM offers where id = 11");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo '<figure class="image-1"><img src="'.$row['img'].'" alt="asif" class="br-10"/></figure>'; 
                                                                    }
                                                                ?>
                                                                  <?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM offers where id = 12");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo '<figure class="image-2"><img src="'.$row['img'].'" alt="asif" class="br-10"/></figure>'; 
                                                                    }
                                                                ?>
 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End About Section -->
      <!-- Features Section -->
      <section class="features-section">
        <div class="bg-image" style="background-image: url(images/background/1.jpg)"></div>
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="sub-title">Our Products</span>
            <h2>The range of products we offer</h2>
          </div>
          <div class="row">
            <!-- Feature Block -->
           
               <?php 
                        include 'admin/db.php'; 
                                       $result = mysqli_query($con,"SELECT * FROM menu   ");
                                        while($row = mysqli_fetch_array($result))
                                           { 
                                              echo ' 
                                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                              <div class="inner-box">
                                                <div class="icon-box">
                                                  <img src="images/'.$row['img'].'" class="icon" alt="  '.$row['menu_name'].'">
                                                </div>
                                                <div class="content-box">
                                                  <h4 class="title">
                                                    '.$row['menu_name'].'
                                                  </h4>
                                                  <div class="text"> '.$row['description'].'</div>
                                                  <a href="category.php?q='.$row['menu_id'].'">READ MORE <span class="fa fa-angle-right"></span></a>
                                                </div>
                                              </div>
                                            </div>
                                 
                                              ';
                                           }
                                       ?> 

            <!-- Feature Block -->
            <!--<div class="feature-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <img src="images/icons/paper-carry-bag.png" class="icon" alt="paper-carry-bag">
                </div>
                <div class="content-box">
                  <h4 class="title">Paper carry bag</h4>
                  <div class="text">Environmentally friendly paper carry bags for sustainable, stylish, and convenient packaging.</div>
                </div>
              </div>
            </div>-->
            <!-- Feature Block -->
            <!--<div class="feature-block offset-lg-2 col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <img src="images/icons/paper-gift-bag.png" class="icon" alt="paper-gift-bag">
                </div>
                <div class="content-box">
                  <h4 class="title">Paper containers</h4>
                  <div class="text">Elegant paper containers for memorable and eco-friendly, and suitability for gift presentations.</div>
                </div>
              </div>
            </div>-->
            <!-- Feature Block -->
            <!--<div class="feature-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <img src="images/icons/paper-packaging-bag.png" class="icon" alt="paper-packaging-bag">
                </div>
                <div class="content-box">
                  <h4 class="title">Paper packaging bag</h4>
                  <div class="text">Versatile paper packaging bags for various industries, and cost-effective.</div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </section>
      <!-- End Features Section-->
      <!-- Why Us Start -->
      <section class="why-us-section" style="background-image: url(images/main-slider/2.png)">
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="sub-title text-white">WHY CHOOSE US</span>
            <h2 class="text-white">Reasons to select our service</h2>
          </div>
          <div class="row">
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-20 col-md-20 col-sm-12">
              <div class="inner">
                <i class="icon flaticon-delivery-courier"></i>
                <h4 class="title">Optimizing <br/>Costs</h4>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-20 col-md-20 col-sm-12">
              <div class="inner">
                <i class="icon flaticon-delivery-box-4"></i>
                <h4 class="title">Safety and <br/>reliability</h4>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-20 col-md-20 col-sm-12">
              <div class="inner">
                <i class="icon flaticon-international-shipping-3"></i>
                <h4 class="title">Global <br/>shipping</h4>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-20 col-md-20 col-sm-12">
              <div class="inner">
                <i class="icon flaticon-delivery-box-3"></i>
                <h4 class="title">Delivery <br/>on time</h4>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-20 col-md-20 col-sm-12">
              <div class="inner">
                <i class="icon flaticon-team"></i>
                <h4 class="title">Total Customer <br/>Satisfaction</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Why Us -->
      <!-- About Section Two -->
      <section class="about-section-two">
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
              <div class="inner-column">
                <div class="sec-title">
                  <span class="sub-title">Certificate</span>
                  <h2>The certificate we hold</h2>
                  <div class="text"><?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM terms where id = 29");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo ''.$row['content'].''; 
                                                                    }
                                                                ?></div>
                </div>
                <figure class="image-2 wow fadeInRight desktophide mb-3">
                  <img src="images/resource/certificate-2.png" alt="certificate-2" class="br-10"/>
                </figure>
              <!--   <ul class="list-style-two">
                  <li><i class="fa fa-plane"></i> GST (Goods and Services Tax)</li>
                  <li><i class="fa fa-plane"></i> Udyam Certificate</li>
                  <li><i class="fa fa-plane"></i> IEC (Import Export Code)</li>
                  <li><i class="fa fa-plane"></i> APEDA (Agricultural and Processed Food Products Export Development Authority) Certificate</li>
                </ul> -->
              </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 mobilehide">
              <div class="inner-column">

                 <?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM offers where id = 10");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo ' <figure class="image-1 wow fadeInUp"><img src="'.$row['img'].'" alt="certificate-1" /></figure> 

                                                                   '; 
                                                                    }
                                                                ?>


                                                                 <?php 
                                                                    $result = mysqli_query($con,"SELECT * FROM offers where id = 9");
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo '<figure class="image-2 wow fadeInRight">
                  <img src="'.$row['img'].'" alt="certificate-2" /> 
                </figure>
 '; 
                                                                    }
                                                                ?>


               
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End About Section Two -->
      <!-- Work Section -->
      <!--<section class="work-section">
        <div class="auto-container">
        	<div class="sec-title text-center">
        		<span class="sub-title">HOW IT OPERATES</span>
        		<h2>3 simple steps to complete the task</h2>
        	</div>
        
        	<div class="row">
        		<div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
        			<div class="inner-box">
        				<div class="icon-box">
        					<span class="count">01</span>
        					<i class="icon flaticon-delivery-box-4"></i>
        				</div>
        				<h4 class="title">Input your <br />& product details</h4>
        			</div>
        		</div>
        
        		<div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
        			<div class="inner-box">
        				<div class="icon-box">
        					<span class="count">02</span>
        					<i class="icon flaticon-stock-1"></i>
        				</div>
        				<h4 class="title">Pay for <br />our service charges</h4>
        			</div>
        		</div>
        
        		<div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
        			<div class="inner-box">
        				<div class="icon-box">
        					<span class="count">03</span>
        					<i class="icon flaticon-delivery-box-3"></i>
        				</div>
        				<h4 class="title">Prepared to dispatch <br />your merchandise</h4>
        			</div>
        		</div>
        	</div>
        </div>
        </section>-->
      <!-- End Work Section -->
      <!-- Tracking Section -->
      <section class="tracking-section pull-down">
        <div class="auto-container">
          <div class="outer-box">
            <div class="arrow-box wow fadeInRight">
              <img src="images/icons/arrow-2.png" alt="" class="icon" />
              <span class="title">Results in <br />few days</span>
            </div>
            <div class="tracking-form">
              <div class="row align-items-center">
                <div class="col-lg-9">
                  <h3 class="text-white">We value open communication and are readily available to address your needs.</h3>
                </div>
                <div class="col-lg-3 d-flex calltoaction">
                  <div class="btn-box">
                    <a href="contact-us.php" class="theme-btn btn-style-two hvr-light"><span class="btn-title">Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Tracking Section -->
      <?php include 'footer.php';?>
    </div>
    <!-- End Page Wrapper -->
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>
    <!--Revolution Slider-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/script.js"></script>
    <!-- GetButton.io widget -->
    <script type="text/javascript">
      (function () {
      var options = {
      whatsapp: "+91 96197 91763", // WhatsApp number
      call: "+91 96197 91763", // Call phone number
      call_to_action: "Contact Us", // Call to action
      button_color: "#bc8600", // Color of button
      position: "left", // Position may be 'right' or 'left'
      order: "whatsapp,call", // Order of buttons
      pre_filled_message: "Hello, How may we help you?", // WhatsApp pre-filled message
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
    </script>
    <!-- /GetButton.io widget -->
  </body>
</html>