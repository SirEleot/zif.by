<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
      <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    
      <title>Вскрытие замков и авто {{$sity}} </title>      
      <meta name="description" content="Вскрытие замков дверей, сейфов и авто в {{$where}}, срочный выезд в район. Вскроем и заменим замок быстро с наименьшими повреждениями. 📱: {{$phones[0]}}">
      <meta name="keywords" content="не открывается, открыть, вскрытие, дверь, замок, авто, сейф, {{$sity}}, замена, ремонт">
      <link rel="stylesheet" href="{{ asset('css/vskrytie.css') }}?v=002">           
  </head>
  <body>
    <nav class="nav fixed-top">
      <div class="container">
        <div class="nav-row">
          <div class="logo">
            <a href="{{ route('home') }}">
              <img src="{{ asset('img/svg/logo.svg') }}" alt="logo" class="nav-logo" >
            </a>          
          </div>
          <div class="tittle">
            ВСКРЫТИЕ И УСТАНОВКА ЗАМКОВ <br>
            {{$tittle}}
          </div>
          <div class="nav-menu">
            <div class="nav-menu-btn">
                <div class="nav-menu-btn-line"></div>
                <div class="nav-menu-btn-line"></div>
                <div class="nav-menu-btn-line"></div>
            </div>
            <div class="nav-menu-links" itemscope itemtype="http://www.schema.org/SiteNavigationElement" >                
            <a href="{{ route('vskrytie-zamkov', ['sity'=>$page]) }}" class="nav-menu-link action-link {{$id==0 ? "active" : ""}}"  itemprop="url">Вскрыть дверь</a>
                <a href="{{ route('vskrytie-zamkov', ['sity'=>$page]) }}?id=1" class="nav-menu-link action-link {{$id==1 ? "active" : ""}}"  itemprop="url">Вскрыть машину</a>
                <a href="{{ route('vskrytie-zamkov', ['sity'=>$page]) }}?id=2" class="nav-menu-link action-link {{$id==2 ? "active" : ""}}"  itemprop="url">Вскрыть сейф</a>
            </div>
          </div>
          
          <div class="phones">
            @foreach ($phones as $phone)
              <a href="tel:{{str_replace(' ', '', $phone)}}" class="phone">
                <img src="{{ asset('img/svg/whatsapp-white.svg') }}" alt="phone">
                <span class="phones-text">{{$phone}}</span>
              </a>
            @endforeach
          </div>
        </div>    
      </div>
    </nav>

      {{-- content --}}
      @yield('content')

      @include('footer')
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>