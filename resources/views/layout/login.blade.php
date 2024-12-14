<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #0fe3b9; /* Custom button color */
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="form-container mt-5" id="main">
        <h2 class="text-center mb-4 fw-bold">Sign In</h2>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="fw-bold form-label">Email</label>
                <input name="email" 
                 
                       class="form-control" 
                       id="exampleInputEmail1" 
                       aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" 
                       class="fw-bold form-label">Password</label>
                <input name="password" 
                       type="password" 
                       class="form-control" 
                       id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" 
                      class="form-check-input" 
                      id="exampleCheck1">
                <label class="form-check-label" 
                       for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
    </div>
</body>
</html>
