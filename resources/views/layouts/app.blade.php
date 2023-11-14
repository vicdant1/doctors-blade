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
        <li><a class="p-3" href="">{{auth()->user()->username}}</a></li>
        <li>
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="p-3">Logout</button>
          </form>
        </li>
      @endauth
      @guest
        <li><a class="p-3" href="{{route('login')}}">Login</a></li>
        <li><a class="p-3" href="{{route('register')}}">Register</a></li>
      @endguest
    </ul>
  </nav>
  {{-- resume at 49:00 <br/>

  https://www.youtube.com/watch?v=MFh0Fd7BsjE&t=1261s&ab_channel=TraversyMedia --}}
  
  @yield('content')
</body>
</html>