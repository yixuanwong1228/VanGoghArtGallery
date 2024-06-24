@include('layouts._navbar', ['data' => $artist])

<style>
    .btn-add{
    background-color: #664229;
    color:white;
    border-radius:10px;
    padding:10px;
}
.multiline-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        min-height: 3em; /* Adjust this based on your font size (approx 1.5em per line for 2 lines) */
        line-height: 1.5em; /* Ensure this matches your line height for consistent spacing */
    }
</style>

<main>
@if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    <div class="row">
        <div class="col-10">
            <h3>videos</h3>
        </div>
        <div class="col-2">
            <a href="{{ route('admin.add_video_page', $artist->id) }}" class="btn btn-add">Add Video</a>
        </div>
    </div>  
    <div class="row mt-2 me-2">
        @if($videos->isEmpty())
            <p>No videos available for this artist.</p>
        @else
        @foreach($videos as $video)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <video width="100%" controls>
                        <source src="{{ asset($video->videoURL) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body pb-0">
                        <h5 class="card-title multiline-ellipsis">{{ $video->title }}</h5>
                        <!-- Delete button form -->
                        <form action="{{ route('admin.delete_video', ['id' => $video->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this video?');">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        @endif
    </div>
</main>
