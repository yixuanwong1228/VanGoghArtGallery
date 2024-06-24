

@include('layouts._navbar', ['data' => $data])

<style>
    .btn-edit{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
    margin-top:5px;
    margin-left:400px;
}
</style>

<main>
<div class="container">
    <h3>Artist Profile</h3>
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
        </div>
    @endif            
    <form action="{{ route('admin.update_artist', ['id' =>$data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="artist_id" class="form-label">Artist ID</label>
            <input type="text" class="form-control" id="artist_id" name="artist_id" value="{{$data->id}}" disabled>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
        </div>
        <div class="form-group">
            <label for="intro">Introduction</label>
            <textarea class="form-control" id="intro" name="intro" rows="3" required>{{$data->intro}}</textarea>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{$data->birthdate}}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="deathdate">Deathdate</label>
                    <input type="date" class="form-control" id="deathdate" name="deathdate" value="{{$data->deathdate}}">
                </div>
            </div>
        </div>
        
        
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value="{{$data->nationality}}" required>
        </div>
        <div class="form-group">
            <label for="birthplace">Birthplace</label>
            <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{$data->birthplace}}" required>
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" value="{{$data->occupation}}" required>
        </div>
        <div class="form-group">
            <label for="artmovement">Art Movement</label>
            <input type="text" class="form-control" id="artmovement" name="artmovement" value="{{$data->artmovement}}" required>
        </div>
        <div class="form-group">
            <label for="story">Story</label>
            <textarea class="form-control" id="story" name="story" rows="5" required>{{$data->story}}</textarea>
        </div>
        <div class="form-group">
            <label for="deathplace">Deathplace</label>
            <input type="text" class="form-control" id="deathplace" value="{{$data->deathplace}}" name="deathplace">
        </div>
        <div class="form-group">
            <label for="deathage">Death Age</label>
            <input type="number" class="form-control" id="deathage" value="{{$data->deathage}}" name="deathage">
        </div>
        <div class="form-group">
            <label for="image">Artist Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn-edit">Update Artist</button>
    </form>
</div>
</main>