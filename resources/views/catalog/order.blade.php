<div style="max-width: 1140px; margin: auto">
    <h1 style="text-align:center;">Новый заказ {{$name}}</h1>
    <h2 style="text-align:center;">Имя заказчика: {{$name}}</h2>
    <h2 style="text-align:center;">Номер телефона: +375 {{$phone}}</h2>
    <h2 style="text-align:center;">Дата заказа: {{ date('Y-m-d H:i:s')}}</h2>
    @php
        $totalPrice = 0;
        $switcher = false;
    @endphp
    <table width="100%">
    @foreach ($items as $item) 
        <tr style="background-color: {{$switcher ? '#fff' : '#eee'}}; font-size: 20px;">
            <td style="padding: 20px; ">
                <a href="{{ asset("img/items/".$item->image) }}"> {{$item->name}}</a>
            </td>
            <td style="text-align: center;">
                Кол-во: {{$item->count}} шт.
            </td>
            <td style="text-align: right; padding: 20px;">
                Цена: {{$item->count * $item->price}} руб.
            </td>
        </tr>
        @php
            $totalPrice += $item->count * $item->price;
            $switcher = !$switcher;
        @endphp
    @endforeach
    </table>
    <hr>
    <h2 style="text-align: right;">Итого: {{$totalPrice}} руб</h2>
    @php
        //dd($items);
    @endphp
</div>
