<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      @php
          $routeName = Request::route()->getName();
          $counter = Config::get('common.yandex')[$routeName] ?? '';
          //dd($name);
          if(isset($name)) {
            $meta = str_replace(['$name', '$where', '$phone'], [$name, $where, $phones[0]], $meta);
          }
      @endphp
      <link rel="stylesheet" href="{{ asset('css/'.$routeName.'.css') }}">
      <link rel="icon" href="https://zif.by/favicon.ico" type="image/x-icon">
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
      <title>{{$meta['tittle']}}</title>      
      <meta name="description" content="{{$meta['description']}}"> 
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