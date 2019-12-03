@php
    $phones = [
        '+375 29 142 09 08',
        '+375 29 242 09 09'
    ]
@endphp
@extends('layouts.breaking',
    [
        "sity" => "Минск",
        "where" => "Минске",
        "phones" => $phones,
        "page" => "minsk",
        "id"=> $id,
        "tittle"=> "в Солигорске и Солигорском районе"
    ]
)

@section('content')
    <section class="breaking">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="breaking-image">
                        <img src="../img/breaking/{{$imgs[0]}}.jpg" alt="{{$imgs[0]}}">
                    </div>
                    <div class="breaking-image">                        
                        <img src="../img/breaking/{{$imgs[1]}}.jpg" alt="{{$imgs[1]}}">
                    </div>
                </div>
                <div class="col-xl-7">
                    @foreach ($subtittles as $subtittle)
                        <div class="block">
                            <div class="key"><img src="../img/svg/breaking/key.svg" alt="key"></div>
                            <div class="text">
                                {{$subtittle[0]}} <span class="bold">{{$subtittle[1]}}</span>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="reson">Причины обратится к нам</div>
            <div class="row">
                <div class="col-xl-3 about-card">
                    <img src="../img/svg/breaking/ten.svg" alt="ten">
                    <p class="about-text">
                        <span class="bold">10 лет</span> <br>
                        опыта
                    </p>
                </div>
                <div class="col-xl-3 about-card">                
                    <img src="../img/svg/breaking/shield.svg" alt="shield">
                    <p class="about-text">
                        <span class="bold">Гарантия <br> 100%</span> <br>
                        <span class="little">на замок и установку</span>
                    </p>
                </div>
                <div class="col-xl-3 about-card">
                    <img src="../img/svg/breaking/money.svg" alt="money">   
                    <p class="about-text">
                        Выезд мастера <br>
                        <span class="bold">бесплатно</span>
                    </p>             
                </div>
                <div class="col-xl-3 about-card">
                    <img src="../img/svg/breaking/door.svg" alt="door">   
                    <p class="about-text">
                        При вскрытии замка дверь
                        <span class="bold">не повреждается</span>
                    </p>             
                </div>
            </div>
        </div>
    
    </section>
    <section class="contacts">
        <div class="contacts-card">
            <div class="contacts-tittle">
                получите квалифицированную <br>
                консультацию по телефонам
            </div>
            @foreach ($phones as $phone)
                <a href="tel:{{str_replace(' ', '', $phone)}}" class="phone">
                    <img src="{{ asset('img/svg/whatsapp-white.svg') }}" alt="phone">
                    <span class="phones-text">{{$phone}}</span>
                </a>
            @endforeach
        </div>
    </section>
@endsection