<section id="contacts">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 title">
        <h2>Контакты</h2>
      </div>
    </div>
    <div class="row">
      <form action="" class="col-xl-6 col-lg-6  offset-xl-1 offset-lg-1 col-md-12 col-sm-12 contacts-form breaking-form">
        <p class="text-center">Нужна консультация? Оставьте заявку и мы свяжемся с вами</p>
        <p class="breaking-inputs"><input type="text" placeholder="Ваше имя" name="name" id=""></p>
        <p class="breaking-inputs"><input type="text" placeholder="Ваш телефон" name="phone" id=""></p>
        <p class="breaking-inputs"><textarea name="reason" placeholder="Опишите проблему" cols="35" rows="10"></textarea></p>
        <p class="breaking-inputs"><input class="breaking-button button" type="submit" value="Отправить"/>
      </form>
      <div class="col-xl-4 col-lg-4 offset-xl-1 offset-lg-1 col-md-12 col-sm-12 contacts">
      <p>Телефон мастера в </p>
      <p style="margin-top: 0;"><strong class="color-pink text-align-center">{{$where}}:</strong></p>
        <div>
          <img src="{{ asset('img/svg/contacts/whatsapp.svg') }}" alt="phone">
          <a href="tel:{{str_replace(' ', '', $phone)}}">{{$phone}}</a>
        </div>       
        <p>Почтовый адрес</p>
        <img src="{{ asset('img/svg/contacts/mail.svg') }}" alt="email">
        <a href="mailto:support@zif.by">support@zif.by</a>
      </div>
    </div>
  </div>
</section>