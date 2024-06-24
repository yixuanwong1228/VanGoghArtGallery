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
    <div class="container mt-5">
        <h1 class="mb-4">Add New Biography</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.add_biography') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="artistID" value="{{ $artist->id }}">

            <div class="form-group mb-3">
                <label for="timeline">Timeline</label>
                <input type="text" name="timeline" id="timeline" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="imageURL" name="imageURL">
            </div>

            <button type="submit" class="btn btn-add">Add Biography</button>
        </form>
    </div>
</main>
