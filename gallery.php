<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fruits | Asif Global Exports</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  </head>
  <body>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!--Header Start-->
      <?php include 'header.php';?>
      <!--Header End-->
      <!-- Start main-content -->
      <section class="page-title" style="background-image: url(images/background/6.jpg);">
        <div class="auto-container">
          <div class="title-outer">


                 <?php include('admin/db.php'); 
  
                  $q = isset($_GET['q']) ? trim($_GET['q']) : '';  

                  if ($q !== '') { 
                        $query = "SELECT * FROM menu WHERE   menu_id = '" . mysqli_real_escape_string($con, $q) . "' ";
                  }   

                  $result = mysqli_query($con, $query);

                  while($row = mysqli_fetch_array($result))
                  { echo '   

                  <h1 class="title">'.$row['menu_name'].'</h1>
                  <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>'.$row['menu_name'].'</li>
                  </ul>

                  ';
                }
                ?>

          </div>
        </div>
      </section>
      <!-- end main-content -->
      <!-- Products Section -->
      <section class="services-section">
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="sub-title">OUR PRODUCTS</span>
            <h2>The range of products we offer</h2>
          </div>
          <div class="row">
            <!-- Service Block -->


                 <?php include('admin/db.php'); 
  
                  $q = isset($_GET['q']) ? trim($_GET['q']) : '';  

                  if ($q !== '') { 
                        $query = "SELECT * FROM products WHERE status = 1 and  maincat = '" . mysqli_real_escape_string($con, $q) . "' ORDER BY id DESC";
                  }  
                  else { 
                      $query = "SELECT * FROM products WHERE status = 1  ORDER BY id DESC";
                  }

                  $result = mysqli_query($con, $query);

                  while($row = mysqli_fetch_array($result))
                  { echo '   
                  <div class="service-block col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                       <div class="image-box">
                        <figure class="image">
                          <img src="images/products/'.$row['img'].'" alt="'.$row['name'].'" /> 
                        </figure>
                      </div> 
                      <div class="content-box">
                        <img src="images/icons/fruits.png" class="icon" alt="fruits">
                        <h4 class="title">  <a href="productsdetail.php?q='.$row['id'].'">'.$row['name'].'</a> </h4>  
                        <div class="text"> </div>
                      </div>
                    </div>
                  </div>
                  ';
              }
              ?>

         
          </div>
        </div>
      </section>
      <!-- End Products Section-->
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