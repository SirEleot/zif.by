<div style="max-width: 1140px; margin: auto">
    <h1 style="text-align:center;">Новый заказ</h1>
    <h2 style="text-align:center;">Имя заказчика: {{$name}}</h2>
    <h2 style="text-align:center;">
        Номер телефона: <a href="tel:+375{{str_replace(' ', '', $phone)}}">+375 {{$phone}}</a>
    </h2>
    <h2 style="text-align:center;">Дата заказа: {{ date('Y-m-d H:i:s')}}</h2>
    @php
        $totalPrice = 0;
        $switcher = false;
    @endphp
    <table width="100%">
    @foreach ($items as $item) 
        <tr style="background-color: {{$switcher ? '#fff' : '#eee'}}; font-size: 1.3rem;"> 
            <td style="padding: 15px; ">
                {{$item->id}}
            </td>
            <td style="padding: 15px; ">
                <a href="{{ asset("img/items/".$item->image) }}"> {{$item->name}}</a>
            </td>
            <td style="padding: 15px; ">
                Цена: {{ $item->sale > 0 ? $item->sale : $item->price * $coef }}
            </td>
            <td style="text-align: center;">
                Кол-во: {{$item->count}} шт.
            </td>
            <td style="text-align: right; padding: 20px;">
                За {{$item->count}} шт: {{round($item->count * ($item->sale > 0 ? $item->sale : $item->price * $coef), 2)}}
            </td>
        </tr>
        @php
            $totalPrice += $item->count * ($item->sale > 0 ? $item->sale : $item->price * $coef);
            $switcher = !$switcher;
        @endphp
    @endforeach
    </table>
    <hr>
    <h2 style="text-align: right;">Итого: {{round($totalPrice,2)}} руб</h2>
    @php
        //dd($items);
    @endphp
</div>
