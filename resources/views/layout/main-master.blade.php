<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Fonts -->
        <link rel = "dns-prefetch" href="http://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Main-Master</title>
    </head>
<body style="min-height: 100vh; display: flex; flex-direction:column;">
    <nav class="navbar navbar-expand-lg bg-body-secondary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              <a class="nav-link" href="{{ route('aboutPage') }}">about</a>
              <a class="nav-link" href="{{ route('contact') }}">contact</a>
              <a class="nav-link" href="{{ route('blogs') }}">blogs</a>
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
      </nav>

    @yield('content')
    @include('layout.footer')
</body>
</html>