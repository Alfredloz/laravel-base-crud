<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel| @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <header>
          <nav class="navbar navbar-expand navbar-light bg-light">
              <ul class="nav navbar-nav">
                  <li class="nav-item {{ Route::currentRouteName() === 'home'? 'active': '' }}">
                      <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item {{ Route::currentRouteName() === 'about'? 'active': '' }}">
                      <a class="nav-link" href="{{ route('about') }}">About</a>
                  </li>
                  <li class="nav-item {{ Route::currentRouteName() === 'contacts'? 'active': '' }}">
                    <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'post.index'? 'active': '' }}">
                    <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                </li>
              </ul>
          </nav>  
      </header>
      <main class="container">
        @yield('content')
   </main>
    </body>
</html>