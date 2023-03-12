<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <!-- @vite('resources/css/app.css') -->
</head>
<body>


<nav class="p-3 border-gray-200 rounded bg-gray-50">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  
   <h1>My Blog</h1>
</nav>

@yield('content')
</body>
</html>