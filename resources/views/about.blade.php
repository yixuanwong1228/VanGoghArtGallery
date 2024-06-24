<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VanGoghArtGallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/about.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a href="{{url('about')}}" class="active">About</a></li>
          <li><a href="{{url('biography_timeline')}}">Biography</a></li>
          <li><a href="{{url('face_change_game')}}">PhotoBooth</a></li>
          <li class="dropdown"><a href="#"><span>Game</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{url('puzzle_index')}}">Puzzles</a></li>
                  <li><a href="{{url('word_guess')}}">Puzzles</a></li>

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



    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3">
            <img src="{{$data->profilePictureURL}}" class="img-fluid" alt="">
          </div>
     
          <div class="col-lg-9 content">
            <h1>{{$data->name}}</h1>
            <p class="fst-italic py-3">
            {{$data->intro}}
            </p>
            <div class="row">
              <div class="col-lg-5">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Born:</strong> <span>{{ date('d-m-Y', strtotime($data->birthdate)) }}
                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Died:</strong> <span>{{ date('d-m-Y', strtotime($data->deathdate)) }}
                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>{{$data->nationality}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birth Place:</strong> <span>{{$data->birthplace}}</span></li>
                </ul>
              </div>
              <div class="col-lg-7">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Death Place:</strong> <span>{{$data->deathplace}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Occupation:</strong> <span>{{$data->occupation}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Notable Art Movement:</strong> <span>{{$data->artmovement}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Death Age:</strong> <span>{{$data->deathage}}</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            {{$data->story}}
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Video Section ======= -->
    <section id="videos" class="videos">
      <h2 class="text-center text-dark">Vincent Theater</h2>
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
            @foreach($videos as $video)
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="video-item h-100">
                    <video width="100%" controls>
                        <source src="{{ asset($video->videoURL) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-info">
                        <h5 class="text-dark">{{ $video->title }}</h5>
                    </div>
                </div>
            </div><!-- End Video Item -->
            @endforeach
        </div>
      </div>
    </section><!-- End Video Section -->


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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>