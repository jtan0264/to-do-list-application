<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    @yield('styles')
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
<nav class="navbar navbar-light bg-light">
    @auth
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
      @csrf
      <button>Log out</button>
    </form>
    @else
    <div >
      <h2>Register</h2>
      <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
      </form>
    </div>
    <div >
      <h2>Login</h2>
      <form action="/login" method="POST">
        @csrf
        <input name="loginname" type="text" placeholder="name">
        <input name="loginpassword" type="password" placeholder="password">
        <button>Log in</button>
      </form>
    </div>
    @endauth
</nav>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="{{route('todos.index')}}"><span class="navbar-brand mb-0 h1">Todo</span></a>
    </div>
</nav>

<div class="container">

    @yield('content')

</div>

</body>

</html>