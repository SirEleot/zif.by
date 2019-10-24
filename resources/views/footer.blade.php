<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 logo">
                <img src="{{ asset('img/svg/logo.svg') }}" alt="">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <p class="footer-tittle">Каталог товаров</p>
                <p class="footer-link"><a href="{{ route('catalog', ['category'=>0]) }}">Все товары</a> </p>
                <p class="footer-link"><a href="{{ route('catalog', ['category'=>1]) }}">Дверные замки</a> </p>
                <p class="footer-link"><a href="{{ route('catalog', ['category'=>9]) }}">Дверные ручки</a> </p>
                <p class="footer-link"><a href="{{ route('catalog', ['category'=>15]) }}">Фурнитура</a> </p>
                <p class="footer-link"><a href="{{ route('catalog', ['category'=>25]) }}">Прочие товары</a> </p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <p class="footer-tittle">Вскрытие замков</p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'minsk'])}}">Минск</a> </p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'soligirsk'])}}">Солигорск</a> </p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'slutsk'])}}">Слуцк</a> </p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'luban'])}}">Любань</a> </p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'kopil'])}}">Копыль</a> </p>
                <p class="footer-link"><a href="{{route('breaking',['sity'=>'baranovichi'])}}">Барановичи</a> </p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <p class="footer-tittle">Наши контакты</p>               
                <p class="footer-link"><a href="tel://375291420908">+375 29 142 09 08</a></p>
                <p class="footer-link"><a href="tel://375292420909">+375 29 242 09 09</a></p>
                <p class="footer-link">
                    <a href="#"><img class="social-ico" src="{{ asset('img/svg/vk.svg') }}" alt="vk"></a>
                    <a href="#"><img class="social-ico" src="{{ asset('img/svg/instagram-logo.svg') }}" alt="instagramm"></a>
                    <a href="#"><img class="social-ico" src="{{ asset('img/svg/viber-white.svg') }}" alt="viber"></a>
                </p>
                <p></p>
                <p></p>
                <p class="footer-link"> <a href="#">@SiteEasyFast</a></p>
            </div>
            {{-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
            <p>Закажите звонок</p>
            <input type="text" placeholder="+7 978 777 77 77">
            <img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/vk.svg') }}" alt="">
            <img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/instagram-logo.svg') }}" alt=""> --}}
        </div>
    </div>
</footer>