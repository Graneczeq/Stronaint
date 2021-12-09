<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Strona logowania</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:dentista@torun.pl">dentista@torun.pl</a>
        <i class="bi bi-phone"></i> +48 784 488 222
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Dentista</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Strona Główna</a></li>
          <li><a class="nav-link scrollto" href="#about">O nas</a></li>     
          <li><a class="nav-link scrollto" href="#doctors">Specjaliści</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="user-panel.html" class="appointment-btn scrollto"><span class="d-none d-md-inline">Panel użytkownika</span></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section style="color:#525252; background: #ffff" class="breadcrumbs" >
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Strona logowania</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Strona logowania</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
    <section class="inner-page">
      <div class="container">
        
          <form action="login_action.php" method="post">
		  

<div>
    <label for="uname"><b>Adres E-mail</b></label>
    <input type="email" placeholder="Podaj adres E-mail" name="uname" required>
</div>

<div>
    <label for="psw"><b>Hasło</b></label>
    <input type="password" placeholder="Podaj hasło" name="psw" required>
    <button type="submit">Login</button>
</div>
<div>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Pamiętaj mnie
    </label>
  </div>

  <label>
  Nie masz konta? <a href="register.html">Zajerejstruj się!</a>
  </label>
  

</form>
       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Dentista</h3>
            <p>
              ul.Tadeusza Kościuszki 33A <br>
              Toruń, 87-100<br>
              Polska <br><br>
              <strong>Telefon:</strong> +48 784 488 222<br>
              <strong>Email:</strong> dentista@torun.pl<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Strona Główna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">O nas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Usługi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Polityka Prywatności</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Leczenie Dokanałowe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Protetyka</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ortodoncja</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Chirurgia Stomatologiczna</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profilaktyka</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Dentista</span></strong>. Wszelkie Prawa Zastrzeżone
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>