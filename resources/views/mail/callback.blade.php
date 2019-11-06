<div style="max-width: 1140px; margin: auto">
    <h1 style="text-align:center;">Запрос на обратный звонок</h1>

    <h2 style="text-align:center;">Имя заказчика: {{$name}}</h2>
    <h2 style="text-align:center;">
        Номер телефона: <a href="tel:+375{{str_replace(' ', '', $phone)}}">+375 {{$phone}}</a>        
    </h2>

    @if (isset($city))
        <h2 style="text-align:center;">Город: {{$city}}</h2>
    @endif
   
</div>
        