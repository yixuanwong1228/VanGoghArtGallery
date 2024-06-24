<!-- resources/views/admin/view_artworks.blade.php -->

@include('layouts._navbar', ['data' => $artist])
<main>
    <div class="container mt-5">
        <h1 class="mb-4">Add New Video</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.add_video') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="artistID" value="{{ $artist->id }}">

            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="video">Video</label>
                <input type="file" class="form-control-file" id="videoURL" name="videoURL">
            </div>

            <button type="submit" class="btn btn-primary">Add Video</button>
        </form>
    </div>
</main>
