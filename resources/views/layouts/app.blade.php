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
      <div id="main"></div>
      @include('nav')

      {{-- content --}}
      @yield('content')

    <footer class="footer">
      <div class="container">
        <div class="row footer-cont">
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-2">
            <img src="{{ asset('img/svg/logo.svg') }}" alt="">
            <a class="footer-name" href="">Замки и фурнитура</a>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
            <ul>
              <p>Каталог товаров</p>
              <li>
                <a href="">Дверные замки</a>
              </li>
              <li>
                <a href="">Дверные ручки</a>
              </li>
              <li>
                <a href="">Фурнитура для дверей</a>
              </li>
              <li>
                <a href="">Сопутствующие товары</a>
              </li>
            </ul>
          </div>
          <div class="col-xl-1 col-lg-2 col-md-2 col-sm-5">
              <ul>
                <p>Важное</p>
                <li>
                  <a href="">Статьи</a>
                </li>
                <li>
                  <a href="">Документы</a>
                </li>
                <li>
                  <a href="">Контакты</a>
                </li>
              </ul>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-2 col-sm-4">
              <p>Адреса магазинов</p>
              <img src="{{ asset('img/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
              <img src="{{ asset('img/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
              <img src="{{ asset('img/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
              <p>Закажите звонок</p>
              <input type="text" placeholder="+7 978 777 77 77">
              <img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/vk.svg') }}" alt="">
              <img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/instagram-logo.svg') }}" alt="">
            </div>
          </div>
        </div>
      </footer>
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>