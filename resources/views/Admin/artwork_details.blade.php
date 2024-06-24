<style>
.btn-edit{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
    margin-left:400px;
}
</style>

@include('layouts._navbar', ['data' => $artist])
<main>
    <div class="container">
        <h1 class="mb-4">Edit Artwork</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.update_artwork', ['id' => $artwork->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input name="artworkID" value="{{ $artwork->id }}" hidden>
            <div class="row">
                <div class="col-3">
                    <img src="{{$artwork->imageURL}}" style="max-width:200px;">
                </div>
                <div class="col-9">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $artwork->name }}" required>
                    </div>
                </div>
            </div>
            

            <div class="form-group mb-3">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ $artwork->year }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $artwork->location }}"  required>
            </div>

            <div class="form-group mb-3">
                <label for="dimension">Dimension</label>
                <input type="text" name="dimension" id="dimension" class="form-control" value="{{ $artwork->dimension}}" required>
            </div>

            <div class="form-group mb-3">
                <label for="medium">Medium</label>
                <input type="text" name="medium" id="medium" class="form-control" value="{{ $artwork->medium }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="keywords">Keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control" value="{{ $artwork->keywords }}" >
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $artwork->description }} </textarea>
            </div>

            <div class="form-group mb-3">
                <label for="story">Story</label>
                <textarea rows="5" name="story" id="story" class="form-control">{{ $artwork->story }} </textarea>
            </div>

            <div class="form-group mb-3">
                <label for="image">New Image</label>
                <input type="file" class="form-control-file" id="imageURL" name="imageURL">
            </div>

            <button type="submit" class="btn-edit">Update Artwork</button>
        </form>
    </div>
</main>
