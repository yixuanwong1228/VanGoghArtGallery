<style>
 .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}       
</style>
@include('layouts._navbar', ['data' => $artist])

<main>
<h1>Feedbacks for {{ $artwork->name }}</h1>
        @if ($feedbacks->isEmpty())
            <p>No feedbacks available for this artwork.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Comment</th>
                        <th>Country</th>
                        <th>IP Address</th>
                        <!-- Add more table headers if needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr>
                            <td>
                                <img src="data:image/png;base64,{{ $feedback->avatarImageURL }}" alt="Avatar" class="avatar">
                            </td>
                            <td>{{ $feedback->comment }}</td>
                            <td>{{ $feedback->country }}</td>
                            <td>{{ $feedback->ipAddress}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
</main>
