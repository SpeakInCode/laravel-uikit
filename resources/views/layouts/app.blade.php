<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Laravel App')</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  @include('global.nav')

  <main id="app" role="document">
    @yield('content')
  </main>

  @include('global.footer')

</body>
</html>
