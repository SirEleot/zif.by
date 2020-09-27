<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
      <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      @php
          $counter = Config::get('common.yandex')[Request::route()->getName()] ?? '';
      @endphp
      <title>Двери | Жалюзи | Рольшторы | Солигорск ул.Заслонова 44</title>      
      <meta name="description" content="Магазин замков и фурнитуры в Солигорске. ▶ Мы находимся по адрессу: г.Солигорск ул.Заслонова 44. 📱: +375 29 142 09 08">
      <meta name="keywords" content="купить, дверь, межкомнатная, металлическая, входная, жалюзи, рольшторы, Солигорск, Слуцк">
      <link rel="stylesheet" href="{{ asset('css/'.$style.'.css').'?v=001' }}">
      @if (isset($catalog_con) && $catalog_con)
        <link rel="canonical" href="{{ route('catalog', ['category'=>0]) }}"/>
      @endif
      @if ($counter != '')
      {{-- google analytics --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E1T86HCJV"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-2E1T86HCJV');
        </script>        
        {{-- google analytics --}}
      @endif 
  </head>
  <body>
      <div id="modal"></div>
      @include('nav')

      {{-- content --}}
      @yield('content')

      @include('footer')
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>