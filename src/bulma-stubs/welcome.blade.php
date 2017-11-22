<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      html, body {
          font-family: 'Raleway', sans-serif;
      }
    </style>
  </head>
  <body>
  @if (Route::has('login'))
    <nav class="navbar container" role="navigation" aria-label="main navigation">
      <div class="navbar-menu">
        @auth
        <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/home') }}">Home</a>
        </div>
        @else

        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('login') }}">Login</a>
            <a class="navbar-item" href="{{ route('register') }}">Register</a>
        </div>
      </div>
      @endauth
    </nav>
  @endif
    <section class="hero is-warning is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Laravel {{ app()->version() }}</h1>
          <h2 class="subtitle">... with <strong>Bulma</strong> 0.6.1</h2>
          <div class="box has-text-center">
            <a class="button is-primary">Primary</a>
            <a class="button is-link">Link</a>
            <a class="button is-info">Info</a>
            <a class="button is-success">Success</a>
            <a class="button is-warning">Warning</a>
            <a class="button is-danger">Danger</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <nav class="navbar">
        <a class="navbar-item" href="https://laravel.com/docs">Documentation</a>
        <a class="navbar-item" href="https://laracasts.com">Laracasts</a>
        <a class="navbar-item" href="https://laravel-news.com">News</a>
        <a class="navbar-item" href="https://forge.laravel.com">Forge</a>
        <a class="navbar-item" href="https://github.com/laravel/laravel">GitHub</a>
        <a class="navbar-item" href="https://bulma.io">Bulma</a>
      </nav>
    </section>
  </body>
</html>
