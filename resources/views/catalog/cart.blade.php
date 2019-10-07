@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row cart">
            @php
                $total = 0;
            @endphp
            @foreach ($items as $item)
                <div class="item col-xl-12" title="{{$item->name}}">
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
                            <span id="item-total">{{$items[0]->price}}</span> руб
                        </div>
                    </div>
                </div>
                @php
                    $total += $item->price * $counts[$item->id]
                @endphp
            @endforeach
            <div class="total">
                Итого: {{$total}}
            </div>
        </div>
    </div>
@endsection