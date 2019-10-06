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
                <p class="footer-link"><a href="#">Минск</a> </p>
                <p class="footer-link"><a href="#">Солигорск</a> </p>
                <p class="footer-link"><a href="#">Слуцк</a> </p>
                <p class="footer-link"><a href="#">Любань</a> </p>
                <p class="footer-link"><a href="#">Копыль</a> </p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <p class="footer-tittle">Вскрытие замков</p>               
                <p class="footer-link"><a href="#">+375 29 142 09 08</a></p>
                <p class="footer-link"><a href="#">+375 29 242 09 09</a></p>
                <p class="footer-link"><a href="#">Любань</a> </p>
                <p class="footer-link">
                    <a href="#"><img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/vk.svg') }}" alt=""></a>
                    <a href="#"><img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/instagram-logo.svg') }}" alt=""></a>
                    <a href="#"><img class="social-ico" style="margin-top: 15px;" src="{{ asset('img/svg/viber-white.svg') }}" alt=""></a>
                </p>
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