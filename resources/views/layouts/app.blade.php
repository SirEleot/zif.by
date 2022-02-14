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
      <title>Вскрытие, замена и установка замков. | Солигорск</title>      
      <meta name="description" content="Услуги по ремонту, замене и вскрытию замков в Солигорске. ▶ 📱: +375 29 142 09 08">
      <meta name="keywords" content="ремонт, замена, открыть, дверь, машину, замок, сердцевину, Солигорск, Слуцк">
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

       {{-- Yandex.Metrika counter --}}
        <script type="text/javascript" >
          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
          m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
          ym({{$counter}}, "init", {
              clickmap:true,
              trackLinks:true,
              accurateTrackBounce:true,
              webvisor:true
          });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/{{$counter}}" style="position:absolute; left:-9999px;" alt="no js" /></div></noscript>
        {{-- /Yandex.Metrika counter --}}

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