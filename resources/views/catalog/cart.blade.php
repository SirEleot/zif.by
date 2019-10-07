@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row cart">
            @php
                $total = 0;
            @endphp
           <div class="col-xl-8">
                <div class="items">
                    @foreach ($items as $item)
                        <div class="item" title="{{$item->name}}">
                            <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})"  alt="item"></div>
                            <div class="name">{{$item->name}}</div>
                            <div class="item-add">
                                <div>
                                    <span id="item-price">{{$items[0]->price}}</span>
                                </div> 
                                <div class="count">
                                    <div class="count-btn" onclick="changeItemCount(-1, {{ $item->id }})">-</div> 
                                <div class="count-info"> <span id="item-count-{{$item->id}}">{{$counts[$item->id]}}</span></div>
                                    <div class="count-btn" onclick="changeItemCount(1, {{$item->id}})">+</div>
                                </div>
                                <div>
                                    <span id="item-total">{{$items[0]->price}}</span> руб.
                                </div>
                            </div>
                        </div>
                        @php
                            $total += $item->price * $counts[$item->id]
                        @endphp
                    @endforeach
                </div>                
           </div>
            <div class="col-xl-4">
                <div class="order">
                    <button id="order" class="button">Оформить заказ</button>
                    <div class="count">В корзине <span class="order-count">5</span> товаров</div>
                    <hr>
                    <p class="total"> На сумму: <span class="order-price">{{$total}}</span> руб.</p>
                </div>
            </div>
        </div>
    </div>
@endsection