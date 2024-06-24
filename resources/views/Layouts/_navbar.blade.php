<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="/assets/Admin/css/layout.css" rel="stylesheet" >

<nav class="navbar navbar-expand-lg navbar-light bg-light pb-0" style="position:fixed; z-index:10; width:100%;">
         <div class="container-fluid custom-navbar">
            <a class="navbar-brand" href="#">
            <img src="/assets/Admin/logo.png" alt="Your Logo" style="max-width:150px;"> 
          
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </div>
               <div class="ms-auto">
               
               <a href="{{url('/') }}" class="text-dark">Go to Art Gallery</a>

                </div>
         </div>
      </nav>

      <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">
        <div class="text-center my-3">
            <img src="{{ $data->profilePictureURL }}" class="rounded-circle" alt="Profile Image" width="100" height="100">
        </div>
        <div class="list-group list-group-flush mt-2">
            <a href="{{ route('admin.artist_details', $data->id) }}" class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() == 'admin.artist_details' ? 'active' : '' }}" aria-current="true">
                <span>About</span>
            </a>
            <a href="{{ route('admin.view_biographies', $data->id) }}" class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() == 'admin.view_biographies' ? 'active' : '' }}">
                <span>Biography</span>
            </a>
            <a href="{{ route('admin.view_videos', $data->id) }}" class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() == 'admin.view_videos' ? 'active' : '' }}">
                <span>Video</span>
            </a>
            <a href="{{ route('admin.view_artworks', $data->id) }}" class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() == 'admin.view_artworks' ? 'active' : '' }}">
                <span>Artworks</span>
            </a>
            <a href="{{ route('admin.feedback_artwork_lists', $data->id) }}" class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() == 'admin.feedback_artwork_lists' ? 'active' : '' }}">
                <span>Feedback</span>
            </a>
        </div>
    </div>
</nav>

