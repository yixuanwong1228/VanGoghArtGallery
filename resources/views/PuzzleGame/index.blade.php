
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VanGoghArtGallery</title>
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
  <link href="/assets/css/puzzle.css" rel="stylesheet">

  <style>
     .thumbnail-card {
     cursor: pointer;
     transition: transform 0.2s;
}
 .thumbnail-card:hover {
     transform: scale(1.05);
}
 .thumbnail-img {
     width:300px;
     height:300px;
     margin:auto;
     object-fit: cover;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="/assets/img/VanGoghLogo.png" alt=""> 
        
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

  <main id="main" data-aos="fade" data-aos-delay="1500" class="mt-5">

        <img src="/assets/img/Puzzle/puzzlefont.png" style="margin-top:70px; max-width:400px;">
        <div class="row mt-2">
        <div class="col-md-4 mb-4">
                <a href="{{ route('puzzle_board', ['name' => 'StarryNight']) }}" class="thumbnail-card" style="text-decoration:none;"> 
                    <img src="/assets/img/Puzzle/vangoghthestarrynight.png" class="card-img-top thumbnail-img" alt="Artist Name">
                    <div class="card-body text-center">
                        <h5 class="card-title">Starry Night</h5>
                    </div>
                </a>
        </div>
        <div class="col-md-4 mb-4">
                <a href="{{ route('puzzle_board', ['name' => 'CafeTerraceAtNight']) }}" class="thumbnail-card" style="text-decoration:none;"> 
                    <img src="/assets/img/Puzzle/vangoghcafeterrace.png" class="card-img-top thumbnail-img" alt="Artist Name">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cafe Terrace at Night</h5>
                    </div>
                </a>
        </div>
        <div class="col-md-4 mb-4">
                <a href="{{ route('puzzle_board', ['name' => 'Sunflowers']) }}" class="thumbnail-card" style="text-decoration:none;"> 
                    <img src="/assets/img/Puzzle/vangoghsunflower.png" class="card-img-top thumbnail-img" alt="Artist Name">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sunflowers</h5>
                    </div>
                </a>
        </div>
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
  <script src="/assets/js/puzzle.js"></script>
</body>

</html>