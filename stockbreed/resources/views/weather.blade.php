<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>stockbreed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset("cssfile/index.css") }}">
  <link rel="stylesheet" type="text/css" href="{{URL('assets/bootstrap.min.css') }}">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ url('/home') }}">STOCK<span>BREED.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ asset('/home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#">graphical represantation</a></li>
          <li><a class="nav-link scrollto" href="#footer">Quick Links</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ asset('/home/#about') }}" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<br><br>
 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Weather</h2>
        <p>>>>The right climate in your house benefits the growth and health of your animals and saves on your feed, water and energy costs.<<<</p>

      <div class="row">
        <div >
          <div class="icon-box">
            <div class="icon"><i class="fa fa-cloud"></i></div>
            <h4>Climate in Poultry Houses</h4>
        <p>
            The climate in poultry houses influences the wellbeing and health of humans as well as the birds. Respiratory, digestive and behavioural disorders are more
            likely to occur in houses in which the climatic conditions are not up to standard.
             The efficiency with which feed is utilised is related to the health status of the flock. Animals that are not healthy cannot be expected to perform optimally.
              The younger the animals are or the higher their production level, the more sensitive they become to the climatic conditions in the house. Climate can be
              defined as the sum of environmental factors which influence the functioning of man and animal.
        </p>
      </div>

        <h4>The following factors must be measured at animal level.</h4>
        <ul>
          <li>Temperature</li>
          <li>Realtive Humidity</li>
          <li>Air Composition</li>
          <li>Air speed and air movement</li>
          <li>light</li>
        </ul>

    </div>
  </section><!-- End Services Section -->


  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-out">

      <div class="">
        <h3>Schedule A Whatsapp Chat</h3>
        <div class="icon"><i class="bi bi-whatsapp"></i></div>
        <p> Use the Whatsapp button if you wish to directly chat to us or if you have any questions so that we can help each other.</p>
        <a class="cta-btn" href="https://wa.link/u8wmb1">Whatsapp</a>
      </div>

    </div>
  </section><!-- End Cta Section -->





























     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>STOCK<span>BREED.</span></h3>
              <p>
                University of Zimbabwe <br>
                Mt Drive<br><br>
                <strong>Phone:</strong> +263773071155<br>
                <strong>Email:</strong> projectgroup@gmail.com<br>
              </p>

            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tel:+263773071155">Call Now</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Motto</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a>Health Chickens</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>For A Health Nation</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>send to us any problems you may encounter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>STOCKBREED</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="{{ url('js/main.js') }}"></script>
</body>

</html>



