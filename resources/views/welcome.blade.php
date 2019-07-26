<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <title>BisnisKita - For Better Indonesia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/util.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="buy-tickets"><a href="#buy-tickets">Promo Terbaru</a></li>
          <li class="buy-tickets"><a href="{{ route('register') }}">Dapatkan Modul Gratis</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="row">
       <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Bisnis</span>Kita</h1>
      <p class="mb-4 pb-0">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit<br>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit<br><a href="#about" class="joinn-btn scrollto">Gabung Sekarang!</a></p>

      <div class="countdownme">
        <div class="flex-w flex-c-m cd100 wsize1 m-lr-auto p-t-116">
          <div class="flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15">
            <span class="l1-txt3 p-b-9 days">35</span>
            <span class="s1-txt2">Days</span>
          </div>

          <div class="flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15">
            <span class="l1-txt3 p-b-9 hours">17</span>
            <span class="s1-txt2">Hours</span>
          </div>

          <div class="flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15">
            <span class="l1-txt3 p-b-9 minutes">50</span>
            <span class="s1-txt2">Minutes</span>
          </div>

          <div class="flex-col-c-m size2 bor1 m-l-10 m-r-10 m-b-15">
            <span class="l1-txt3 p-b-9 seconds">39</span>
            <span class="s1-txt2">Seconds</span>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="intro-container wow fadeIn">
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    </div>
  </section>


  <main id="main">
    <section id="hotels" class="wow fadeInUp">

      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <h2><strong>Modul Gratis untuk 1000 pendaftar</strong></h2><br>
            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('register') }}'">Dapatkan Sekarang!</button>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Keunggulan BisnisKita</h2>
        </div>

        <div class="row">
         <div class="col-lg-4 col-md-6">
            <h3><a href="#">Keunggulan 1</a></h3>
              <div class="hotel-img">
                <img src="img/unggul1.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <p><br>Peserta berlatih dengan temponya sendiri. Mereka mulai dengan memahami hal-hal yang belum mereka mengerti, lalu mempercepat pembelajaran.</p>
          </div>

          <div class="col-lg-4 col-md-6">
            <h3><a href="#">Keunggulan 2</a></h3>
              <div class="hotel-img">
                <img src="img/unggul2.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <p><br>Disusun oleh para pakar, perpustakaan latihan, dan praktik yang tepercaya di BisnisKita meliputi matematika, sains, dan lainnya. Selalu gratis untuk siswa dan guru.</p>
          </div>

          <div class="col-lg-4 col-md-6">
            <h3><a href="#">Keunggulan 3</a></h3>
              <div class="hotel-img">
                <img src="img/unggul3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <p><br>Bersama BisnisKita, guru dapat mengidentifikasi hal-hal yang belum dimengerti siswa mereka, menyesuaikan instruksi, dan memenuhi kebutuhan setiap siswa.</p>
          </div>

        </div>
      </div>

    </section>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
          </div>

  <!--==========================
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Footer Menu 1</h4>
            <ul>
              <li> <a href="#">Menu 1</a></li>
              <li> <a href="#">Menu 2</a></li>
              <li> <a href="#">Menu 3</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Footer Menu 2</h4>
            <ul>
              <li> <a href="#">Menu 1</a></li>
              <li> <a href="#">Menu 2</a></li>
              <li> <a href="#">Menu 3</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Footer Menu 3</h4>
            <ul>
              <li> <a href="#">Menu 1</a></li>
              <li> <a href="#">Menu 2</a></li>
              <li> <a href="#">Menu 3</a></li>
            </ul>
          </div>
----->

          <div class="col-lg-3 col-md-6 footer-contact">
            <div class="social-links">
              <a href="https://twitter.com/bisniskita?lang=en" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="http://www.facebook.com/bisniskitadotcom" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/bisniskita/?hl=en" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://t.me/bisniskitadotcom" target="_blank" class="telegram"><i class="fa fa-telegram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019 <strong>BisnisKita</strong>. All Rights Reserved.
      </div>
    </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

   <!--===============================================================================================-->  
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/moment.min.js"></script>
  <script src="vendor/countdowntime/moment-timezone.min.js"></script>
  <script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script>
    $('.cd100').countdown100({
      /*Set Endtime here*/
      /*Endtime must be > current time*/
      endtimeYear: 2019,
      endtimeMonth: 8,
      endtimeDate: 1,
      endtimeHours: 0,
      endtimeMinutes: 0,
      endtimeSeconds: 0,
      timeZone: "Asia/Jakarta" 
      // ex:  timeZone: "America/New_York"
      //go to " http://momentjs.com/timezone/ " to get timezone
    });
  </script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>

</html>
