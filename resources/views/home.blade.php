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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">About</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">STOCK FEEDS</a></li>
              <li class="dropdown"><a href="{{ asset(url('/weeks')) }}"><span>WEEKS</span> <i class="bi bi-chevron-right"></i></a>

              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>STOCKBREED<span>.</span></h1>
          <h2>HEALTH BIRDS FOR A HEALTH NATION</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="{{ asset('/weeks') }}">Daily Activities</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="{{ asset('/progress') }}">Progress </a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Calendar</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa fa-cloud"></i>
            <h3><a href="{{ asset('/weather') }}">Weather</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Getting started Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ URL('img/poultry_2.jpg') }}" class="img-fluidd" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>You Venture Into <span> poultry farming, Make Sure You Are </span> Equiped With The Tools And Knowledge</h3>

            <ul>
              <li><i class="ri-check-double-line"></i class="p">Manual Chicken Feeder, Barrel</li>
              <p class="fst-italic">
                This manual chicken feeder barrel is widely used for free farm, cage farm chicken, duck
              </p>
              <li><i class="ri-check-double-line"></i>Automatic Chicken Feeder Pan</li>
              <p class="fst-italic">
                Automatic chicken feeder pan used for chickens, rabbits, pigeons and other animals.
              </p>
              <li><i class="ri-check-double-line"></i> Automatic Drinking System Depressure Tank</li>
              <p class="fst-italic">
                Poultry water pressure regulator is an extremely important part of your watering system
              </p>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ URL('img/poultry_3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_5.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_7.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_8.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_7.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_5.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_5.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ URL('img/poultry_3.jpg') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>What Do We Do?</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-postgresql"></i></div>
              <h4><a href="">What do we do as Stockbreed?</a></h4>
              <p>Stock Breed, which mostly focuses on broiler poultry and is a good design web application that aids in poultry farming,</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-open"></i></div>
              <h4><a href="">Daily Activities</a></h4>
              <p>All daily tasks that can be performed in accordance with broiler poultry farming are listed in our daily diary, including routinely feeding birds and checking and replenishing water sources.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bar-chart"></i></div>
              <h4><a href="">Progress</a></h4>
              <p>Our progress chart will provide all relevant data, including a summary of the goods, revenue, and losses you experience at each stage.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-calendar-check"></i></div>
              <h4><a href="">Calender</a></h4>
              <p>Our calendar requires you to record your productions in order to ensure that you have enough of each phase of the chicken, the daily feed schedule, the breeding season, and the calculation of poultry feed consumption.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cloud-light-rain"></i></div>
              <h4><a href="">Weather</a></h4>
              <p>The most efficient temperatures for layers are between 20 – 24°C. When temperatures rise above 24°C, shell quality and egg weight will reduce. The critical temperature for broilers and rearing birds is highly dependant on age.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-bookmark"></i></div>
              <h4><a href="">Our Main Aim</a></h4>
              <p>Our primary goal is to use cutting-edge technology to increase the quality and quantity of chickens so that your poultry farming can expand significantly.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Schedule A Whatsapp Chat</h3>
          <div class="icon"><i class="bi bi-whatsapp"></i></div>
          <p> Use the Whatsapp button if you wish to directly chat to us or if you have any questions so that we can help each other.</p>
          <a class="cta-btn" href="https://wa.link/u8wmb1">Whatsapp</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Check out Our Count Section</h3>
              <p>
                Stockbreed the finest of the best, join us, and make more money than you've ever made before.
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="87" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> demonstrates the level of quality we provide to our customers.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> Our clients have participated in numerous projects, and we anticipate more.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong>We have 3 years of poultry farming experience and have been providing the finest to our consumers.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Awards</strong> What are you waiting for? Join the winning team right away! As Stockbreed, we have received honors for being the best assistance in chicken farming!</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.198024113297!2d31.052455415450048!3d-17.782388079714448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a5673118070f%3A0xb9107787eed9e671!2sUniversity%20of%20Zimbabwe!5e0!3m2!1sen!2szw!4v1680298789392!5m2!1sen!2szw" width="1300" height="500" style="border:20;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>University Of Zimbabwe</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>projectgroup@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <a href="tel:+263773071155">+263773071155</a>
                <a href="">+263719307115</a>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Motto</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Health Chickens</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">For A Health Nation</a></li>
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


