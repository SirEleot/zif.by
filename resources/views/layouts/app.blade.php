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
    <div class="section nav">
      <div class="container">
        <div class="header">
          <div class="nav-top">
            <div class="row">
              <div class="col-2">
                <img class="nav-top-logo" src="{{ asset('image/svg/logo.svg')}}" alt="logo">
              </div>
              <div class="col-5 nav-top-contact">
                <img src="{{ asset('image/svg/viber-white.svg') }}" alt="">
                <a href="tel">8 800 123 45 67</a>
                <img src="{{ asset('image/svg/whatsapp-white.svg') }}" alt="">
                <a href="tel">8 800 123 45 67</a>
              </div>
              <div class="col-5">
                <ul>
                  <li>
                    <a href="">Главная</a>
                  </li>
                  <li>
                    <a href="">О нас</a>
                  </li>
                  <li>
                    <a href="">Услуги</a>
                  </li>
                  <li>
                    <a href="{{ route('catalog', ['category' => 0]) }}">Товары</a>
                  </li>
                  <li>
                    <a href="">Блог</a>
                  </li>
                  <li>
                    <a href="">Контакты</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      {{-- content --}}
      @yield('content')

    <div class="section footer">
      <div class="container">
        <div class="row footer-cont">
          <div class="col-2">
            <img src="{{ asset('image/svg/logo.svg') }}" alt="">
          </div>
          <div class="col-2">
            <a class="footer-name" href="">Замки и фурнитура</a>
          </div>
          <div class="col-2">
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
          <div class="col-1">
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
            <div class="col-3">
              <p>Адреса магазинов</p>
              <img src="{{ asset('image/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
              <img src="{{ asset('image/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
              <img src="{{ asset('image/svg/contacts/map-pointer-white.svg') }}" alt="">
              <a href="">г. Минск ул. Ленина д.32</a><br/>
            </div>
            <div class="col-2">
              <p>Закажите звонок</p>
              <input type="text" placeholder="+7 978 777 77 77">
              <img style="margin-top: 15px;" src="{{ asset('image/svg/vk.svg') }}" alt="">
              <img style="margin-top: 15px;" src="{{ asset('image/svg/instagram-logo.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Custom Scripts--}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>