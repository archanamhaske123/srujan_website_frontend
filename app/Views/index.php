<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Srujan | <?= $PageTitle; ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="canonical" href="<?= current_url() ?>">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/favicon/favicon-16x16.png">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->
  <header class="header-area header-sticky">
  <!-- Subheader -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12 sub-header-flex" >
          <ul class="info nav-menu nav">
            <li class="menu-item">
              <a href="<?= base_url(); ?>mentors" class="menu-link">Mentor Pool</a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url(); ?>events" class="menu-link">Events</a>
            </li>
            <!-- <li class="menu-item">
              <a href="<?= base_url(); ?>contact-us" class="menu-link">Contact Us</a>
            </li> -->
          </ul>
          <ul class="social-links ">
            <li style="margin-right: 10px; padding-left: 15px;">
              <a href="#" target="_blank" ><img src="<?= base_url(); ?>assets/images/youtube.svg" alt="Youtube" style="width: 20px;" class="img-fluid"></a>
            </li>
            <li style="margin-right: 10px;">
              <a href="https://www.facebook.com/Srujan.edic?mibextid=ZbWKwL" target="_blank"><img src="<?= base_url(); ?>assets/images/facebook.svg" alt="Facebook" style="width: 20px;" class="img-fluid"></a>
            </li>
            <li style="margin-right: 10px;">
              <a href="https://www.linkedin.com/company/srujan-entrepreneurship-development-incubation-centre" target="_blank" ><img src="<?= base_url(); ?>assets/images/linkedin.svg" alt="LinkedIn" style="width: 20px;" class="img-fluid"></a>
            </li>
            <li style="margin-right: 10px;">
              <a href="#" target="_blank" ><img src="<?= base_url(); ?>assets/images/twitter.svg" alt="Twitter" style="width: 20px;" class="img-fluid"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/srujan.edic/" target="_blank" ><img src="<?= base_url(); ?>assets/images/Instagram.svg" alt="Instagram" style="width: 20px;" class="img-fluid"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- Logo -->
          <a href="<?= base_url(); ?>" class="logo">
            <img src="<?= base_url(); ?>assets/images/srujan-logo.svg" alt="Srujan" class="img-fluid">
          </a>
          <!-- Menu -->
          <ul class="nav">
            <li><a href="<?= base_url(); ?>" class="main-menu-link">Home</a></li>
            <li><a href="<?= base_url(); ?>about-us" class="main-menu-link">About</a></li>
            <li><a href="<?= base_url(); ?>programs" class="main-menu-link">Programs</a></li>
            <li><a href="<?= base_url(); ?>what-we-do" class="main-menu-link">What We Do</a></li>
            <li><a href="<?= base_url(); ?>facilities" class="main-menu-link">Facilities</a></li>
            <li><a href="<?= base_url(); ?>startups" class="main-menu-link">Startups</a></li>
            <li> <a href="<?= base_url(); ?>contact-us" class="main-menu-link">Contact Us</a></li>
            <!-- <li><a href="#" class="main-menu-link">Enroll</a></li> -->
          </ul>
          <a class="menu-trigger">
            <span>Menu</span>
          </a>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- ***** Header Area End ***** -->

<?= $content ?>




  <!-- ***** Footer Start ***** -->

  <footer>
    <section class="footer-top">
      <div class="container footer-container ">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="footer-logo">
              <a href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>assets/images/Footer-logo.svg" alt="Srujan" width="100%">
              </a>
            </div>
            <div class="social-icons">
              <a href="#" target="_blank" ><img src="<?= base_url(); ?>assets/images/youtube01.svg" alt="Youtube"></a>
              <a href="https://www.facebook.com/Srujan.edic?mibextid=ZbWKwL" target="_blank" ><img src="<?= base_url(); ?>assets/images/facebook01.svg" alt="Facebook"></a>
              <a href="https://www.linkedin.com/company/srujan-entrepreneurship-development-incubation-centre" target="_blank" ><img src="<?= base_url(); ?>assets/images/linkedin01.svg" alt="LinkedIn"></a>
              <a href="#" target="_blank" ><img src="<?= base_url(); ?>assets/images/twitter01.svg" alt="Twitter"></a>
              <a href="https://www.instagram.com/srujan.edic/" target="_blank" ><img src="<?= base_url(); ?>assets/images/instagram01.svg" alt="Instagram"></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-sm-12" style="display: flex; flex-wrap: wrap;">
            <div class="footer-links" style="flex: 1; min-width: 200px; margin-right: 20px;">
                <h3>Site Links</h3>
                <a href="<?= base_url(); ?>programs">Programs</a>
                <a href="<?= base_url(); ?>about-us">About</a>
                <a href="<?= base_url(); ?>what-we-do">What We Do</a>
                <a href="<?= base_url(); ?>facilities">Facilities</a>
                <a href="<?= base_url(); ?>mentors">Mentor Pool</a>
            </div>
            
            <div class="footer-links" style="flex: 1; min-width: 200px; margin-right: 20px;">
                <h3>Explore</h3>
                <a href="<?= base_url(); ?>events">Events</a>
                <a href="#">News</a>
                <a href="#">Blogs</a>
                <a href="#">Career</a>
            </div>
            <div class="footer-contact">
              <h3>Contact</h3>
              <hr>
              <div class="contact-details">
                <div class="contact-item">
                  <img src="<?= base_url(); ?>assets/images/location-icon.svg" alt="Location Icon" width="100%">
                  <div class="contact-info">
                    <p class="university-name">
                      SRUJAN-EDIC - SRI BALAJI UNIVERSITY, PUNE (SBUP)
                    </p>
                   
                    <p>
                      Survey No. 55/2-7, Tathawade,<br>
                      Off Mumbai-Bangalore Bypass,<br>
                      Pune – 411033, Maharashtra, India.
                    </p>
                  </div>
                </div>
                <div class="contact-item">
                  <img src="<?= base_url(); ?>assets/images/phone-icon.svg" alt="Phone Icon">
                  <a href="tel:02066741252" target="_blank" >02066741252</a>
                </div>
                <div class="contact-item">
                  <img src="<?= base_url(); ?>assets/images/email-icon.svg" alt="Email Icon">
                  <a href="mailto:edu@sbup.edu.in" target="_blank" >edu@sbup.edu.in</a>
                </div>
              </div>
            </div>
            
            
          </div>
         </div> 
        </div>
      </div>
    </section>
  <section class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 d-flex justify-content-center align-items-center">
          <ul class="footer-menu d-flex">
            <li><a href="#">Terms & Conditions</a></li>
            <li><hr class="vertical-line" /></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        
        
      <div class="col-lg-12 footer-copyright text-align-center">
        <p class="text-align-center">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Srujan.  All Rights Reserved
        
        <!-- Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
         </p>
      </div>
      </div>
    </div>
    </section>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/isotope.min.js"></script>


  <!-- <script src="<?= base_url(); ?>assets/js/owl-carousel.js"></script> -->
  <!-- <script src="<?= base_url(); ?>assets/js/counter.js"></script> -->
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>

  </body>
</html>