<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @if(View::hasSection('title'))
        @yield('title')
    @else
       Blog
    @endif
</title>
    <!-- @vite('resources/css/app.css') -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand">My Blog</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('blog.index') }}">Home</a>
        </li>
        @if(Route::has('login'))
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('blog.create') }}">Add Post</a>
        </li>
       
        
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">login</a>
        </li>
        @endif
        @endauth
       
    
    </div>
  </div>
</nav>

@yield('content')
</body>
</html>