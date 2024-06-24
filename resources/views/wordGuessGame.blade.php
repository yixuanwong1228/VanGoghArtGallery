
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Gallery Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
  <link href="/assets/css/wordguessgame.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/VanGoghLogo.png" alt=""> 
        
        <h2>VincentVanGogh</h2>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" >Gallery</a></li>
          <li><a href="{{url('about')}}">About</a></li>
          <li><a href="{{url('biography_timeline')}}">Biography</a></li>
          <li><a href="{{url('face_change_game')}}">PhotoBooth</a></li>
          <li class="dropdown"><a href="#"><span>Game</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{url('puzzle_index')}}">Puzzles</a></li>
                  <li><a href="{{url('word_guess')}}">Word Guess</a></li>

                </ul>
          </li>
          
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="{{ route('admin.login_page') }}" class="twitter"><i class="bi bi-wrench-adjustable">Administration</i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">  

  <div class="wrapper">
        <h3 class="text-black">Let's Play "Mystery in the Museum"</h3>
    </br>
     <div class="hint-ref"></div>
     <div id="user-input-section"></div>
     <div id="message"></div> 
     <div id="letter-container"></div>    
    </div>
    <div class="controls-container">
        <div id="result"></div>
        <div id="word"></div>
        <button id="start">Start</button>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ArtSpaceinnovator</span></strong>. All Rights Reserved
      </div>
  
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/wordguessgame.js"></script>
</body>

</html>