<nav class="nav fixed-top">
  <div class="container">
      <div class="nav-row">
        <div class="logo">
          <img src="{{ asset('img/svg/logo.svg') }}" alt="" class="nav-logo">
        </div>
        <div class="phones">
          <a href="tel:+375291420908" class="phone"><img src="{{ asset('img/svg/whatsapp-white.svg') }}" alt=""><span class="phones-text">+375 29 142 09 08</span></a>
          {{-- <a href="tel:+375291420908" class="phone"><img src="{{ asset('img/svg/whatsapp-white.svg') }}" alt=""><span class="phones-text">+375 29 242 09 09</span></a> --}}
          <a href="viber://chat?number=+375292420909" class="viber"><img src="{{ asset('img/svg/viber-white.svg') }}" alt=""> <span class="phones-text">+375 29 242 09 09</span></a>
        </div>
        <div class="nav-menu">
          <div class="nav-menu-btn">
              <div class="nav-menu-btn-line"></div>
              <div class="nav-menu-btn-line"></div>
              <div class="nav-menu-btn-line"></div>
          </div>
          <div class="nav-menu-links">                
              <a href="{{ route('home') }}#main" class="nav-menu-link">Главная</a>
              <a href="{{ route('home') }}#about" class="nav-menu-link">О нас</a>
              <a href="{{ route('home') }}#services" class="nav-menu-link">Услуги</a>
              <a href="{{ route('catalog', ['category'=>0]) }}" class="nav-menu-link">Каталог товаров</a>
              <a href="{{ route('catalog', ['category'=>0]) }}" class="nav-menu-link">Акции</a>
              <a href="{{ route('home') }}#posts" class="nav-menu-link">Статьи</a>
              <a href="{{ route('home') }}#contacts" class="nav-menu-link">Контакты</a>
          </div>
        </div>
      </div>    
  </div>
</nav>