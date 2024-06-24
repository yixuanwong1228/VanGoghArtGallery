<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
               <div class="dropdown ms-auto">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
           
                  </a>  
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <a class="dropdown-item" href="#">Profile</a>
                     <form method="POST" action="#">
                        @csrf
                        <button class="dropdown-item" type="submit">Log Out</button>
                     </form>
                  </ul>
               </div>
            </div>
         </div>
      </nav>