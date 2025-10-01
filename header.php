 


  <!-- Main Header-->
			<header class="main-header header-style-one">
				<!-- Header Top -->
				<div class="header-top">
					<div class="top-left">
						<!-- Info List -->
						<ul class="list-style-one">
							<li><i class="fa fa-map-marker-alt"></i> Mira-Bhayandar, Thane, Maharashtra</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:info@asifglobal.com">info@asifglobal.com</a></li>
							<li><i class="fa fa-phone-volume"></i> <a href="tel:+91 9619791763">+91 9619791763</a></li>
						</ul>
					</div>

					<!--<div class="top-right">
						<ul class="social-icon-one">
							<li>
								<a href="#"><span class="fab fa-facebook-square"></span></a>
							</li>
							<li>
								<a href="#"><span class="fab fa-twitter"></span></a>
							</li>
							<li>
								<a href="#"><span class="fab fa-pinterest-p"></span></a>
							</li>
							<li>
								<a href="#"><span class="fab fa-instagram"></span></a>
							</li>
						</ul>
					</div>-->
				</div>
				<!-- Header Top -->

				<!-- Header Lower -->
				<div class="header-lower">
					<!-- Main box -->
					<div class="main-box">
						<div class="logo-box">
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="asif-global-export" title="Asif Global Export"/></a>
							</div>
						</div>

						<!--Nav Box-->
						<div class="nav-outer">
							<nav class="nav main-menu">
								<ul class="navigation">
									<li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current' : ''; ?>"><a href="index.php">Home</a></li>
									<li class="<?php echo basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'current' : ''; ?>"><a href="about-us.php">About Us</a></li>
									<li class="dropdown <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'current' : ''; ?>"><a href="products.php">Products</a>
									<ul>

										   <?php 
										   	include 'admin/db.php'; 
			                                 $result = mysqli_query($con,"SELECT * FROM menu   ");
			                                  while($row = mysqli_fetch_array($result))
			                                     { 
			                                        echo ' <li><a href="category.php?q='.$row['menu_id'].'">'.$row['menu_name'].'</a></li>
			                                        ';
			                                     }
			                                 ?> 
									</ul>
									</li>


									<li class="dropdown <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'current' : ''; ?>"><a href="gallery.php">Gallery</a>
									<ul>

										   <?php 
										   	include 'admin/db.php'; 
			                                 $result = mysqli_query($con,"SELECT * FROM menu   ");
			                                  while($row = mysqli_fetch_array($result))
			                                     { 
			                                        echo ' <li><a href="gallery.php?q='.$row['menu_id'].'">'.$row['menu_name'].'</a></li>
			                                        ';
			                                     }
			                                 ?> 
									</ul>
									</li>
									 
									<li class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact-us.php' ? 'current' : ''; ?>"><a href="contact-us.php">Contact Us</a></li>
									<!--<li class="dropdown">
										<a href="#">News</a>
										<ul>
											<li><a href="news-grid.php">News Grid</a></li>
											<li><a href="news-details.php">News Details</a></li>
										</ul>
									</li>-->
								</ul>
							</nav>
							<!-- Main Menu End-->

							<div class="outer-box">
								<!--<button class="ui-btn ui-btn search-btn">
									<span class="icon lnr lnr-icon-search"></span>
								</button>

								<a href="#" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>

								<a href="#" class="theme-btn btn-style-one alternate"><span class="btn-title">Get A Quote</span></a>-->

								<!-- Mobile Nav toggler -->
								<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Header Lower -->

				<!-- Mobile Menu  -->
				<div class="mobile-menu">
					<div class="menu-backdrop"></div>

					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					<nav class="menu-box">
						<div class="upper-box">
							<div class="nav-logo">
								<a href="index.php"><img src="images/logo-2.png" alt="asif-global-export" title="Asif Global Export" /></a>
							</div>
							<div class="close-btn"><i class="icon fa fa-times"></i></div>
						</div>

						<ul class="navigation clearfix">
							<!--Keep This Empty / Menu will come through Javascript-->
						</ul>
						<ul class="contact-list-one">
							<li>
								<!-- Contact Info Box -->
								<div class="contact-info-box">
									<i class="icon lnr-icon-phone-handset"></i>
									<span class="title">Call Now</span>
									<a href="tel:+91 9619791763">+91 9619791763</a>
								</div>
							</li>
							<li>
								<!-- Contact Info Box -->
								<div class="contact-info-box">
									<span class="icon lnr-icon-envelope1"></span>
									<span class="title">Send Email</span>
									<a href="mailto:info@asifglobal.com">info@asifglobal.com</a>
								</div>
							</li>
							<li>
								<!-- Contact Info Box -->
								<div class="contact-info-box">
									<span class="icon lnr-icon-location"></span>
									<span class="title">Visit Anytime</span>
									Shop no 8, Sanghai Compound, Azad Nagar Gali no 2, Mira-Bhayandar, Thane, Maharashtra, India 401105
								</div>
							</li>
						</ul>

						<ul class="social-links">
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
					</nav>
				</div>
				<!-- End Mobile Menu -->

				<!-- Header Search -->
				<div class="search-popup">
					<span class="search-back-drop"></span>
					<button class="close-search"><span class="fa fa-times"></span></button>
				</div>
				<!-- End Header Search -->

				<!-- Sticky Header  -->
				<div class="sticky-header">
					<div class="auto-container">
						<div class="inner-container">
							<!--Logo-->
							<div class="logo">
								<a href="index.php" title=""><img src="images/logo.png" alt="asif-global-export" title="Asif Global Export" /></a>
							</div>

							<!--Right Col-->
							<div class="nav-outer">
								<!-- Main Menu -->
								<nav class="main-menu">
									<div class="navbar-collapse show collapse clearfix">
										<ul class="navigation clearfix">
											<!--Keep This Empty / Menu will come through Javascript-->
										</ul>
									</div>
								</nav>
								<!-- Main Menu End-->

								<!--Mobile Navigation Toggler-->
								<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Sticky Menu -->
			</header>
			<!--End Main Header -->


<style>
.translate-box {
  position: fixed;
  bottom: 15px;
  right: 60px; /* now bottom-left */
  z-index: 9999; 
  padding: 8px 12px;
  border-radius: 10px; 
  font-family: Arial, sans-serif;
}

.translate-box select {
padding: 6px 10px;
    border-radius: 6px;
    border: 1px solid #bc8600;
    font-size: 14px;
    background: #bc8600;
    color: white;
}
</style>

<div class="translate-box"> 
  <select id="languageSelect"> 
    <option selected value="en">English</option>
    <option value="hi">Hindi</option>
    <option value="ar">Arabic</option>
    <option value="es">Spanish</option>
    <option value="fr">French</option>
    <option value="zh-CN">Chinese (Simplified)</option>
    <option value="ja">Japanese</option>
    <option value="pt">Portuguese</option>
    <option value="de">German</option>
    <option value="ru">Russian</option>
    <option value="bn">Bengali</option>
    <option value="ur">Urdu</option>
    <option value="tr">Turkish</option>
    <option value="ko">Korean</option>
    <option value="it">Italian</option>
    <option value="id">Indonesian</option>
    <option value="ms">Malay</option>
    <option value="th">Thai</option>
    <option value="vi">Vietnamese</option>
    <option value="sw">Swahili</option>
    <option value="pl">Polish</option>
    <option value="nl">Dutch</option>
    <option value="tl">Filipino / Tagalog</option>
    <option value="fa">Persian (Farsi)</option>
  </select>
</div>

<!-- Google Translate core script (hidden) -->
<div id="google_translate_element" style="display:none;"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
  // Listen for dropdown change
  document.getElementById("languageSelect").addEventListener("change", function () {
    var lang = this.value;
    if (lang) {
      var selectField = document.querySelector("select.goog-te-combo");
      if (selectField) {
        selectField.value = lang;
        // Fire change event on hidden Google dropdown
        selectField.dispatchEvent(new Event("change"));
      }
    }
  });
</script>



