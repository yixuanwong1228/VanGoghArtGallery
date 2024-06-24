@include('Admin.header')
<main style="padding-top: 50px; padding-left:50px;">
<div class="container mt-5">
    <h3 class="mb-4 text-center">Add Artist</h3>
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
        </div>
    @endif            
    <form action="{{ route('admin.add_artist') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="artist_id" class="form-label">Artist ID</label>
            <input type="text" class="form-control" id="artist_id" name="artist_id" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="intro">Introduction</label>
            <textarea class="form-control" id="intro" name="intro" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="deathdate">Deathdate</label>
            <input type="date" class="form-control" id="deathdate" name="deathdate">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" required>
        </div>
        <div class="form-group">
            <label for="birthplace">Birthplace</label>
            <input type="text" class="form-control" id="birthplace" name="birthplace" required>
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" required>
        </div>
        <div class="form-group">
            <label for="artmovement">Art Movement</label>
            <input type="text" class="form-control" id="artmovement" name="artmovement" required>
        </div>
        <div class="form-group">
            <label for="story">Story</label>
            <textarea class="form-control" id="story" name="story" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="deathplace">Deathplace</label>
            <input type="text" class="form-control" id="deathplace" name="deathplace">
        </div>
        <div class="form-group">
            <label for="deathage">Death Age</label>
            <input type="number" class="form-control" id="deathage" name="deathage">
        </div>
        <div class="form-group">
            <label for="image">Artist Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Add Artist</button>
    </form>
</div>
</main>