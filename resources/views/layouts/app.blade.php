<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">    
      <title>{{ config('app.name', 'zif.by') }}</title>    
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
      <div id="main"></div>
      <div id="modal"></div>
      @include('nav')

      {{-- content --}}
      @yield('content')

      @include('footer')
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>