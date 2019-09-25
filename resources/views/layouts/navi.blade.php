<nav class="top-nav">
    <div class="container nav">
        <div class="logo"><img src="{{ asset('img/zif-logo.png') }}" alt="logo"></div>
        <div class="menu-btn">
            <div class="menu-btn-line"></div>
            <div class="menu-btn-line"></div>
            <div class="menu-btn-line"></div>
        </div>
        <div class="menu">                
            <a href="{{ route('home') }}/#main" class="menu-link">Главная</a>
            <a href="#" class="menu-link">О нас</a>
            <a href="#" class="menu-link">Сотрудники</a>
            <a href="#" class="menu-link">Вскрытие замков</a>
            <a href="#" class="menu-link">Контакты</a>
            <a href="{{ route('catalog',['category' => 0]) }}" class="menu-link">Каталог товаров</a>
        </div>
        <div class="contacts">
            {{-- <a href="tel:+375297415896" class="auth-link phone"><i class="fas fa-phone-volume"></i></a>
            <a href="#" class="auth-link viber"><i class="fab fa-viber"></i></a> --}}
            <p><a href="tel:+375297415896" class="auth-link phone">vlc.:+375297415896</a></p>
            <p><a href="tel:+375297415896" class="auth-link phone">mts.:+375297415896</a></p>
        </div>
    </div>
</nav>