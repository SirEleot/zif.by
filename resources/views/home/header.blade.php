<header class="header" style="background-image: url({{ asset('/img/bg.png') }});">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 header-text">
          <h1 class="header-tittle">
            Магазин <strong class="color-pink">замков</strong> <br>
            и <strong class="color-pink">Фурнитуры</strong> в Солигорске
          </h1>
            <hr>
          <h3 class="header-subtittle">
            Мы предлагаем огромный выбор дверных замков <br>
            и фурнитуры на любой вкус по доступным ценам
          </h3>
          <h3 class="header-subtittle">
            Оказываем квалифицированные услуги по вскрытию <br>
            сейфов, автомобилей и домов, а так же по замене <br>
            неиспраных дверных замков
          </h3>
      </div>
    </div>
    <div class="header-buttons col-xl-6 col-lg-7 col-md-8 col-sm-12">
      <button class="button" id="test"><a href="{{ route('home') }}#services">Услуги</a></button>
      <button class="button"><a href="{{ route('catalog', ['category'=>0]) }}">Каталог товаров</a></button></div>
  </div>
</header>