


<style>
  .header__logo{
  width: 180px;
}

.header-area .header-area__inner {
    display: flex
;
    align-items: center;
    gap: 20px;
    position: relative;
    height: 100px;
    background: #ffffff38;
    border-radius: 50px;
    padding: 10px 40px;
}
</style>




<!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="M" class="characters">M</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="R" class="characters">R</span>
          <span data-text="S" class="characters">S</span>
          <span data-text="C" class="characters">C</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="P" class="characters">P</span>
          <span data-text="I" class="characters">I</span>
          <span data-text="T" class="characters">T</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="L" class="characters">L</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="E" class="characters">E</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- offcanvas start  -->
  <div class="offcanvas-3__area">
    <div class="offcanvas-3__inner">
      <div class="offcanvas-3__meta-wrapper">
        <div class="">
          <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
            <span></span>
            <span></span>
          </button>
        </div>
        <div class="">
          <div class="offcanvas-3__meta mb-145 d-none d-md-block">
            <ul>
              <li><a href="tel:+2-352698102" class="unnerline"><u>+2-352 698 102</u></a></li>
              <li><a href="mailto:contact@me.com">contact@me.com</a></li>
              <li><a href="">27 Division St, <br>
                  New York, NY 10002, USA</a></li>
            </ul>
          </div>
          <div class="offcanvas-3__social d-none d-md-block">
            <p class="title">Follow Me</p>
            <div class="offcanvas-3__social-links">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-3__menu-wrapper">
        <nav class="nav-menu offcanvas-3__menu">
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="about.php">about</a></li>  
            <li><a href="services.php">Our Services</a></li>
            <li><a href="FMCG.php">FMCG</a></li>
            <li><a href="drone.php">Drone Technologies</a></li>
            <li><a href="realestate.php">Real Estate</a></li>
            <li><a href="greenenergy.php">Green Energy</a></li>
            <li><a href="agri.php">Agri-Based</a></li>
            <li><a href="jewelry.php">Jewelry Manufacturing</a></li>
            <li><a href="pesticide.php">Pesticide Manufacturing</a></li>
            <li><a href="contact.php">Contact</a></li>
            
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- offcanvas end  -->


  <!-- search modal start -->
  <div class="modal fade" id="search-template" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="search-template" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  <!-- Header area start -->
  <header class="header-area">
    <div class="container large">
      <div class="header-area__inner">
        <div class="header__logo">
          <a href="index.php">
            <img class="show-light" src="assets/imgs/logo/logoMbh1.png" alt="Site Logo">
            <img class="show-dark" src="assets/imgs/logo/logo-light.png" alt="Site Logo">
          </a>
        </div>
        <div class="header__nav pos-center">
          <nav class="main-menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>

              <li class="menu-item-has-children">
                <a href="services.php">Our Services</a>
                <ul class="dp-menu">
                  <li><a href="FMCG.php">FMCG</a></li>
                  <li><a href="drone.php">Drone Technologies</a></li>
                  <li><a href="realestate.php">Real Estate</a></li>
                  <li><a href="greenenergy.php">Green Energy</a></li>
                  <li><a href="agri.php">Agri-Based</a></li>
                  <li><a href="agri.php">Jewelry Manufacturing</a></li>
                  <li><a href="agri.php">Pesticide Manufacturing</a></li>
                 
                </ul>
              </li>
             
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
       <!--  <div class="header__button">
          <a class="wc-btn wc-btn-primary btn-text-flip" href="contact.php"><span data-text="Contact Us">Contact Us</span></a>
        </div> -->
        <div class="header__navicon d-xl-none">
          <button onclick="showCanvas3()" class="open-offcanvas">
            <i class="fa-solid fa-bars"></i></button>
        </div>
      </div>
    </div>
  </header>
  <!-- Header area end -->