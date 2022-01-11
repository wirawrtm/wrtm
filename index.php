<?php
    include "pemroses/koneksi.php";
    $sqlhome=mysqli_query ($koneksi,"SELECT * From home");
    $sqlabout=mysqli_query ($koneksi, "SELECT * from about");
    $sqlmenu=mysqli_query ($koneksi, "SELECT * from menu");
    $sqllocation=mysqli_query ($koneksi, "SELECT * from location");
    $sqlcontact=mysqli_query ($koneksi, "SELECT * from contactus");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/dimsum/logodimsum.png" alt="" srcset=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Menu</a></li>
          <li><a class="nav-link scrollto" href="#team">Location</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php
    $tampilhome=mysqli_fetch_array($sqlhome);
  ?>
  <section id="hero" class="d-flex align-items-center" style="background-image: url(assets/img/<?php echo "$tampilhome[background]";?>);">

    <div class="container">
      <div class="row">
          <h1><?php echo "$tampilhome[judulbesar]";?></h1>
          <h2><?php echo "$tampilhome[judulkecil]";?></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>
        <?php
            $tampilabout= mysqli_fetch_array($sqlabout);
        ?>

        <div class="row content">
          <div class="col-lg-6" style="margin-top: auto; margin-bottom: auto;">
            <p></p>
            <p>
              <?php echo "$tampilabout[kata2]"; ?>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <?php echo "$tampilabout[kecil1]"; ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo "$tampilabout[kecil2]"; ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo "$tampilabout[kecil3]"; ?></li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
              <div class="aboutimg" style="background-image: url(assets/img/<?php echo "$tampilhome[background]";?>);"></div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
        </div>

        <div class="row">
            <?php
            while ($tampilmenu=mysqli_fetch_array($sqlmenu)){
            ?>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="judul-display"> <?php echo "$tampilmenu[namamenu]";?></h4>
              <div class="foto-display" style="background-image: url(assets/img/menu/<?php echo "$tampilmenu[gambar]";?>);"></div>
              <p class="p-display"><?php echo "$tampilmenu[isimenu]";?></p>
            </div>
          </div>
          <?php } ?>

      </div>
    </section>
    <!-- End Services Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Address Location</h2>
        </div>

        <div class="row">
        <?php
            while ($tampilloc=mysqli_fetch_array ($sqllocation)){
        ?>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/cabang/<?php echo "$tampilloc[gambar]";?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4> <?php echo "$tampilloc[namacabang]";?></h4>
                <span></span>
                <p><?php echo "$tampilloc[alamat]";?></p>
                <div class="social">
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>


        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <?php
        $tampilcon=mysqli_fetch_array($sqlcontact);
    ?>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo"$tampilcon[lokasi]";?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo"$tampilcon[email]";?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo"$tampilcon[telp]";?></p>
              </div>

              <iframe src="<?php echo"$tampilcon[googlemap]";?>" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
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


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MAMA DIMSUM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>