<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">    
        <title>{{ config('app.name', 'Laravel') }}</title>    
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>   
    {{-- navi --}}
    @include('layouts.navi')

    {{-- content --}}
    @yield('content')

    <footer>
        <div class="container">
            <div class="row">  
                <div class="logo"><img src="{{ asset('img/zif-logo.png') }}" alt="logo"></div>        
                <div class="menu">                
                    <a href="#" class="menu-link">First</a>
                    <a href="#" class="menu-link">Second</a>
                    <a href="#" class="menu-link">Third</a>
                    <a href="#" class="menu-link">Fourth</a>
                    <a href="#" class="menu-link">Fiveth</a>
                    <a href="" class="menu-link">Sixth</a>
                </div>
              
                <div class="auth">
                    <a href="#" class="auth-link">@ 2019 ИП "Бартошик А.А.</a>
                    <a href="#" class="auth-link">Разработка сайта - SiteEasyFast</a>
                </div>
            </div>
            
        </div>    
    </footer>
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>