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
                @foreach (Config::get('common.sities') as $key => $sity)
                    <p class="footer-link">
                        <a href="{{route('vskrytie-zamkov',['sity'=>$key])}}">{{$sity['name']}}</a>
                    </p>
                @endforeach
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <p class="footer-tittle">Наши контакты</p>               
                <p class="footer-link"><a href="tel://375291420908">+375 29 142 09 08</a></p>
                <p class="footer-link"><a href="tel://375292420909">+375 29 242 09 09</a></p>
                <p class="footer-link">
                    <a href="{{config('common.social')['vk']}}"  target="blank"><img class="social-ico" src="{{ asset('img/svg/vk.svg') }}" alt="vk"></a>
                    <a href="{{config('common.social')['instagram']}}" target="blank"><img class="social-ico" src="{{ asset('img/svg/instagram-logo.svg') }}" alt="instagramm"></a>
                    <a href="viber://chat?number=375292420909"><img class="social-ico" src="{{ asset('img/svg/viber-white.svg') }}" alt="viber"></a>
                </p>
                <p></p>
                <p></p>
                <p class="footer-link"> <a href="#">@SiteEasyFast</a></p>
            </div>
        </div>
    </div>
</footer>