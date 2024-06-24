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

  <style>
    .gallery-img {
    display: block;
    width: 100%; /* Adjust the width as needed */
    max-width: 700px; /* Optional: Limit the maximum width of the image */
    margin-right:20px;
    border: 15px solid white; /* Add a thick border with a wood-like color */
    }
    .tell-story-button {
            cursor: pointer;
            display: inline-block;
    }
    .tell-story-button:hover {
        color: #007bff; /* Change color on hover, adjust as needed */
    }
    .drop-zone {
        width: 100px;
        height: 100px;
        border: 2px dashed #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .drop-zone.drag-over {
        background-color: #e0e0e0;
    }
    .avatar-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
    }
    .btn-feedback {
        padding: 8px 40px;
        background: var(--color-primary);
        color: #fff;
        border-radius: 50px;
        transition: 0.3s;
    }

    .btn-feedback:hover {
        background: #2cbc85;
    }
  </style>
</head>

<body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Leave your Feedback</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('add_feedback') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
        <input type="hidden" class="form-control" id="artworkid" name="artworkid" value="{{$data->id}}">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <div class="d-flex flex-column align-items-center">
                  <div id="drop-zone" class="drop-zone">
                      <img id="avatar-preview" src="#" alt="Avatar Preview" class="avatar-preview d-none">
                      <input type="file" id="avatar" name="avatar" class="d-none" accept="image/*">
                  </div>
                  <a href="javascript:void(0);" class="text-secondary" onclick="document.getElementById('avatar').click();">Upload Avatar</a>
              </div>
            </div>
          </div>
          <div class="col-8">
              <div class="form-group">
                <label for="comment" class="text-dark">Comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
            </div>
          </div>
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-feedback">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

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

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-9 text-center">
            <h2>{{$data->name}}</h2>
            <p>{{$data->description}}</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="row">
            <div class="col-8 ">
              <img class="gallery-img" src="{{$data->imageURL}}"/>
            </div>
            <div class="col-4">
            <div class="portfolio-info">
              <h3>Artwork information</h3>
              <ul>
                <li><strong>Year</strong> <span>{{$data->year}}</span></li>
                <li><strong>Exhibit Location</strong> <span>{{$data->location}}</span></li>
                <li><strong>Dimension</strong> <span>{{$data->dimension}}</span></li>
                <li><strong>Medium</strong> <span>{{$data->medium}}</span></li>
                <li><a href="{{url('art_assistance',$data->id)}}" class="btn-visit align-self-start">Art Assistance</a></li>
              </ul>
            </div>
            </div>
            
        </div>
        <div class="d-flex">
          <h3 class="fw-bold me-2 mt-2">Story Behind</h3>
          <div class="tell-story-button"><i class="bi bi-megaphone-fill fs-3 "></i></div>
          
        </div>
        <audio id="backgroundMusic" preload="auto" loop>
            <source src="/assets/storyBGM.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        <p id="storyContent">{{$data->story}}</p>
      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header pb-0">
            <div class="row">
              <div class="col-10">
                <h2>Art Forums</h2>
              </div>

              <div class="col-2">
                  <!-- Button trigger modal -->
                <button type="button" class="btn-feedback" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add
                </button>
              </div>
            </div>
            
            
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">
          @foreach($feedbacks as $feedback) 
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                {{$feedback->comment}}
                </p>
                <div class="profile mt-auto">
                  <img src="data:image/png;base64,{{ $feedback->avatarImageURL }}" class="testimonial-img" alt="">
                  <h3>{{$feedback->country}}</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            @endforeach

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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
  <script src="/assets/js/textToSpeech.js"></script>

</body>

</html>

<script>
    // JavaScript to handle drag and drop functionality
    const dropZone = document.getElementById('drop-zone');
    const avatarInput = document.getElementById('avatar');
    const avatarPreview = document.getElementById('avatar-preview');

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('drag-over');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('drag-over');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('drag-over');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            avatarInput.files = files;
            previewAvatar(files[0]);
        }
    });

    avatarInput.addEventListener('change', () => {
        if (avatarInput.files.length > 0) {
            previewAvatar(avatarInput.files[0]);
        }
    });

    function previewAvatar(file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            avatarPreview.src = e.target.result;
            avatarPreview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
    }
</script>