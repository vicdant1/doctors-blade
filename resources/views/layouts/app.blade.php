<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Posty</title>
</head>
<body class="bg-gray-200">

  <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center ">
      <li><a class="p-3" href="">Home</a></li>
      <li><a class="p-3" href="">Dashboard</a></li>
      <li><a class="p-3" href="">Post</a></li>
    </ul>

    <ul class="flex items-center ">
      @auth
        <li><a class="p-3" href="">J. Nascimento</a></li>
        <li><a class="p-3" href="">Logout</a></li>
      @endauth
      @guest
        <li><a class="p-3" href="">Login</a></li>
        <li><a class="p-3" href="{{route('register')}}">Register</a></li>
      @endguest
    </ul>
  </nav>
  {{-- resume at 31:46 <br/>

  https://www.youtube.com/watch?v=MFh0Fd7BsjE&t=1261s&ab_channel=TraversyMedia --}}
  
  @yield('content')
</body>
</html>