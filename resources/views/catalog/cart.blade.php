@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row cart">
            @php
                $totalPrice = 0;
                $totalCount = 0;
            @endphp
            <div class="col-xl-8">
                <div class="items">
                    @foreach ($items as $id => $item)
                        <div class="item" title="{{$item->name}}" id="item-{{$id}}">
                            <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})"  alt="item"></div>
                            <div class="name">{{$item->name}}</div>
                            <div class="item-add">
                                <div>
                                    <span id="item-price-{{$id}}">{{$item->price}}</span>
                                </div> 
                                <div class="count">
                                    <div class="count-btn" onclick="changeItemCount(-1, {{ $id }})">-</div> 
                                    <div class="count-info"> <span id="item-count-{{$id}}">{{$counts[$item->id]}}</span></div>
                                    <div class="count-btn" onclick="changeItemCount(1, {{ $id }})">+</div>
                                </div>
                                <div class="item-total">
                                    <span id="item-total-{{$id}}">{{round( $item->price * $counts[$item->id], 2)}}</span> руб.
                                </div>
                            </div>
                            <div class="item-remove" onclick="removeItemFromCart({{$id}})">
                                {{-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 510 510">
                                    <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M382.5,280.5h-255v-51h255V280.5z"/>
                                </svg> --}}
                            </div>
                        </div>
                        @php
                            $totalPrice += $item->price * $counts[$item->id];
                            $totalCount += $counts[$item->id];
                        @endphp
                    @endforeach
                </div>                
            </div>
            <div class="col-xl-4">
                <form action="{{route('order')}}" method="post" class="order" onsubmit="sendOrder(event, this)">
                    @csrf
                    <p><input type="text" name="name" min="4" placeholder="Ваше имя" required></p>
                    <p><span class="phone-prefix">+375</span><input type="text" class="phone" name="phone" placeholder="Номер телефона" required oninput="onInputPhoneNumber(event, this)"></p>
                    <p><input type="submit" value="Оформить заказ" class="button" id="order"></p>
                    <div class="count">В корзине <span id="order-count">{{$totalCount}}</span> товаров</div>
                    <hr>
                    <p class="total"> На сумму: <span id="order-price">{{$totalPrice}}</span> руб.</p>
                </form>
            </div>
        </div>
    </div>
@endsection