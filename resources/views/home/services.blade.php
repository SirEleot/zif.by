<section id="services" style="background-image: url({{ asset('/img/services_bg.png') }});">
  <div class="container">
    <div class="row text-center">
        <div class="col-12 title">
          <h2>Услуги</h2>
        </div>
    </div>
    <div class="row aboutUs">
      <div class="col-xl-4 col-md-4 col-sm-12">
        <img src="img/svg/services/jimmy.svg" alt="">
        <h3>вскрытие</h3>
        <p>Оказываем услуги по вскрытию замков от сейфов, автомобилей и квартир. услуга осуществляется <strong class="color-pink">только в присутствии хозяина</strong></p>
      </div>
      <div class="col-xl-4 col-md-4 col-sm-12 service">
        <img src="img/svg/services/lock.svg" alt="">
        <h3>ремонт</h3>
        <p>Производим замену сломаных <strong class="color-pink">замков и дверной фурнитуры</strong> на исправные <br>
          на товары приобретенные в нашем магазине предоставляем гарантию</p>
      </div>
      <div class="col-xl-4 col-md-4 col-sm-12 service">
        <img src="img/svg/services/service.svg" alt="">
        <h3>консультация</h3>
        <p>Окажем профессиональную консультацию по выбору <strong class="color-pink">замка или дверной фурнитуры</strong> для вашей двери</p>
      </div>
    </div>
    <form class="form" action="{{ route('callback') }}" method="POST">
      @csrf
      <div class="row">
          <div class="col-sm-12">
            <h3>Заказать звонок</h3>
          </div>
      </div>
      <div class="row form-inputs">
          <div class="col-xl-3 col-lg-12">
            <input type="text" required placeholder="Ваше имя" name="name">
          </div>          
          <div class="col-xl-3 col-lg-12 ">
            <input type="text" required placeholder="Ваше телефон" name="phone">
          </div>
          <div class="col-xl-3 col-lg-12 ">
            <input type="text" required placeholder="Ваш город" name="city">
          </div>
          <div class="col-xl-3 col-lg-12">
              <input type="submit" class="button">
          </div>
      </div>
    </form>
  </div>
</section>