

<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
         <div class="position-sticky" >
         <div class="text-center my-3">
            <img src="{{$data->profilePictureURL}}" class="rounded-circle" alt="Profile Image" width="100" height="100">
        </div>
            <div class="list-group list-group-flush mt-2" >
               <a href="{{route('admin.artist_details',$data->id)}}" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
               </i><span>About</span>
               </a>
               <a href="{{route('admin.view_biographies',$data->id)}}" class="list-group-item list-group-item-action py-2 ripple">
               <span>Biography</span>
               </a>
               <a href="{{route('admin.view_artworks',$data->id)}}" class="list-group-item list-group-item-action py-2 ripple">
               <span>Artworks</span>
               </a>
               <a href="#" class="list-group-item list-group-item-action py-2 ripple">
               <span>Feedback</span>
               </a>
            </div>
         </div>
      </nav>
      <!-- Sidebar -->