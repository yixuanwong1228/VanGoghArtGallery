<!-- resources/views/admin/view_artworks.blade.php -->

@include('layouts._navbar', ['data' => $artist])
<style>
.artwork-image {
    height: 200px; /* Adjust the height as needed */
    object-fit: cover;
}
.btn-add{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
}
</style>

<main>
    <div class="container">
    <div class="row mb-2">
        <div class="col-10">
            <h3>Artworks of {{ $artist->name }}</h3>
        </div>
        <div class="col-2">
            <a href="{{route('admin.add_artwork_page',$artist->id)}}" class="btn btn-add">Add Artwork</a>
        </div>
    </div>
        
        
        
        <div class="row">
        @foreach($artworks as $artwork)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ route('admin.artwork_details', ['id' => $artwork->id]) }}">
                        <img src="{{ $artwork->imageURL }}" class="card-img-top artwork-image" alt="">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $artwork->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
</main>
