@include('Admin.header')
<style>
 .artist-card {
     cursor: pointer;
     transition: transform 0.2s;
}
 .artist-card:hover {
     transform: scale(1.05);
}
 .artist-img {
     width:200px;
     margin:auto;
     object-fit: cover;
}

.btn-add{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
}
 
    
</style>
<main style="padding-top: 50px; padding-left:20px;">
<div class="container mt-5">
      <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Select an Artist to Edit</h3>
            <a href="{{ route('admin.add_artist_page') }}" class="btn btn-add">Add Artist</a>
        </div>
        <div class="row">
            @foreach($data as $artist)
            <div class="col-md-4 mb-4">
                <a href="{{route('admin.artist_details',$artist->id)}}" class="card artist-card">
                    <img src="{{$artist->profilePictureURL}}" class="card-img-top artist-img" alt="Artist Name">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$artist->name}}</h5>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</main>

