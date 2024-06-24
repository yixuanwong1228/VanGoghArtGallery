<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{url('/assets/Admin/css/login.css')}}">
 

</head>
<body>
    <div class="container">
        <div class="logo">
            <!-- Your logo goes here -->
            <img src="/assets/Admin/logo.png" alt="Logo">
            <h3>Login to Artspace Innovator</h3>
        </div>
        <!-- Your existing HTML code -->
        @if ($errors->any())
            <div class="error-message">
                <p style="color:red;">{{ $errors->first() }}</p>
            </div>
        @endif


        <div class="login-form">
            <form method="POST" action="{{route('admin.login')}}">
                @csrf
                <div style="margin-bottom:10px;">
                    <label>Username</label>
                    <input name="username" required autofocus >
                </div>
                <div style="margin-bottom:10px;">
                    <label for="password">Password</label>
                    <input type="password" name="password" required >
                </div>  

                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
</body>
</html>
