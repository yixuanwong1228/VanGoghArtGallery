@include('layouts._navbar', ['data' => $artist])

<style>
    .btn-add{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
}
</style>

<main>
    <div class="row">
        <div class="col-10">
            <h3>Biographies of {{ $artist->name }}</h3>
        </div>
        <div class="col-2">
            <a href="{{ route('admin.add_biography_page', $artist->id) }}" class="btn btn-add">Add Biography</a>
        </div>
    </div>
    
    
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Timeline</th>
                    <th>Image</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($biographies as $biography)
                <tr>
                    <td>{{ $biography->timeline }}</td>
                    <td><img src="{{ $biography->imageURL }}" alt="Biography Image" class="img-fluid" style="max-width: 200px;"></td>
                    <td>{{ $biography->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
