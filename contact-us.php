<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Us | Asif Global Exports</title>
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
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->
      <!--Contact Details Start-->
      <section class="contact-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="contact-details__right">
                <div class="sec-title">
                  <span class="sub-title">Do you require any assistance?</span>
                  <h2>Contact us for <br/>requirement</h2>
                  <div class="text">Feel free to reach out to us for inquiries or assistance. Our dedicated team is here to provide you with the information and support you need.</div>
                </div>
                <ul>
                  <!-- Contact Info Block -->
                  <li class="contact-info-block wow fadeInRight">
                    <div class="inner-box">
                      <div class="icon-box"><i class="icon flaticon-international-shipping-2"></i></div>
                      <h4 class="title">Address</h4>
                      <div class="text">Shop no 8, Sanghai Compound, Azad Nagar Gali no 2, Mira-Bhayandar, Thane, Maharashtra, India 401105</div>
                    </div>
                  </li>
                  <!-- Contact Info Block -->
                  <li class="contact-info-block wow fadeInRight" data-wow-delay="300ms">
                    <div class="inner-box">
                      <div class="icon-box"><i class="icon flaticon-customer-service"></i></div>
                      <h4 class="title">Email</h4>
                      <div class="text">
                        <a href="mailto:info@asifglobal.com">info@asifglobal.com</a> / <a href="mailto:sales@asifglobal.com">sales@asifglobal.com</a>
                      </div>
                    </div>
                  </li>
                  <!-- Contact Info Block -->
                  <li class="contact-info-block wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-box">
                      <div class="icon-box"><i class="icon flaticon-stock-1"></i></div>
                      <h4 class="title">Contact</h4>
                      <div class="text"><a href="tel:+91 9619791763">+91 9619791763</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="sec-title">
                <span class="sub-title">Send us email</span>
                <h2>Feel free to contact us</h2>
              </div>
              <!-- Contact Form -->
              <form action="phpmailer.php" method="POST" id="contact_form" name="contact_form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Name <small>*</small></label>
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Email <small>*</small></label>
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Subject <small>*</small></label>
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Phone <small>*</small></label>
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone" required>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label>Message</label>
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="mb-3">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" name="SubmitBtn" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                </div>
              </form>
              <!-- Contact Form Validation-->
            </div>
          </div>
        </div>
      </section>
      <!--Contact Details End-->
      <!-- Main Footer -->
      <footer class="main-footer">
        <div class="bg-image" style="background-image: url(images/background/5.jpg)"></div>
        <div class="anim-icons">
          <span class="icon icon-plane-3 bounce-x"></span>
        </div>
        <!--Widgets Section-->
        <div class="widgets-section-contact">
          <div class="auto-container">
            <div class="row">
              <!--Footer Column-->
              <div class="footer-column col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="footer-widget about-widget">
                  <div class="logo">
                    <a href="index.php"><img src="images/logo-2.png" alt="" /></a>
                  </div>
                  <div class="text">As dedicated exporters of Corrugated box, Printed paper box, Paper carry bag, Paper gift bag, Paper packaging bag. With a well-established global clientele, we take pride in our commitment to delivering the best.</div>
                </div>
              </div>
              <!--Footer Column-->
              <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget">
                  <h3 class="widget-title">Quick Links</h3>
                  <ul class="user-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <!--Footer Column-->
              <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-widget">
                  <h3 class="widget-title">Contact Us</h3>
                  <div class="widget-content">
                    <ul class="contact-us-footer">
                      <li><i class="icon flaticon-international-shipping-2"></i> Shop no 8, Sanghai Compound, Azad Nagar Gali no 2, Mira-Bhayandar, Thane, Maharashtra, India 401105</li>
                      <li><i class="icon flaticon-customer-service"></i> <a href="mailto:info@asifglobal.com">info@asifglobal.com</a></li>
                      <li><i class="icon flaticon-stock-1"></i> <a href="tel:+91 9619791763">+91 9619791763</a></li>
                    </ul>
                  </div>
                </div>
                <ul class="social-icon-two">
                  <li>
                    <a href="https://www.facebook.com/people/Asif-global2/61552577645208/" target="_blank"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/Asifglobal2" target="_blank"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/asifglobal2/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/asif-global/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
          <div class="auto-container">
            <div class="inner-container">
              <div class="copyright-text">
                <p>&copy; Copyright 2023 by <a href="index.php">Asif Global Export</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--End Main Footer -->
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