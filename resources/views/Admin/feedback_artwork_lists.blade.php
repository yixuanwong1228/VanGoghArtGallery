

@include('layouts._navbar', ['data' => $artist])
<main>
    <h1>Artworks Feedback</h1>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->name }}</td>
                        <td>
                            <a href="{{ route('admin.feedback_details', ['id' => $artwork->id]) }}">View Feedbacks</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>    
</main>
