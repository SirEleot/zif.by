<div style="max-width: 1140px; margin: auto">
    <h1 style="text-align:center;">По вопросу: {{$tittle}}</h1>

    <h2 style="text-align:center;">Имя заказчика: {{$name}}</h2>
    <h2 style="text-align:center;">
        Номер телефона: <a href="tel:+375{{str_replace(' ', '', $phone)}}">+375 {{$phone}}</a>
    </h2>
    <h2 style="text-align:center;">Дата запроса: {{ date('Y-m-d H:i:s')}}</h2>
    
    
    <h2 style="text-align:center;">Описание</h2>
    <p>
        {{$reason}}
    </p>
   
</div>
    