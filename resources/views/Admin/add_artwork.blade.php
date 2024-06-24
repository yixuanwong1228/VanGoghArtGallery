<!-- resources/views/admin/view_artworks.blade.php -->

@include('layouts._navbar', ['data' => $artist])
<style>
.btn-add{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
    margin-left:400px;
}
</style>

<main>
    <div class="container">
        <h3 class="mb-4">Add New Artwork</h3>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.add_artwork') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="artistID" value="{{ $artist->id }}">

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="year">Year</label>
                        <input type="number" name="year" id="year" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="dimension">Dimension</label>
                        <input type="text" name="dimension" id="dimension" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="medium">Medium</label>
                        <input type="text" name="medium" id="medium" class="form-control" required>
                    </div>
                </div>
            </div>
                 

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="imageURL" name="imageURL">
            </div>

            <div class="form-group mb-3">
                <label for="keywords">Keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="story">Story</label>
                <textarea name="story" id="story" class="form-control" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-add">Add Artwork</button>
        </form>
    </div>
</main>
