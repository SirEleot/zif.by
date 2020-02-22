@php
    $phones = ["+375 29 669 74 74","+375 29 573 95 40"]
@endphp
@extends('layouts.breaking',
    [
        "sity" => "Минск",
        "where" => "Минске",
        "phones" => $phones,
        "page" => "minsk",
        "id"=> $id,
        "tittle"=> "по Минску и Минской области"
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
            <div class="reson">Помните!!!</div>
            <div class="about-important">Услуги по аварийному всурытию замков проводятся только в присутствии владельца и при наличии документов подтверждающих постоянное или временное право собственности!</div>
        </div>
    
    </section>

    <section class="article">   
        <div class="container">
            <h1>Как открыть заклинивший замок своими силами!?</h1>
            <div class="article-block">
                <p>
                        Жизнь нам часто преподносит разнообразные &quot;сюрпризы&quot; и к сожалению
                    не только приятные. Представьте ситуацию, что вы пришли к себе домой и не
                    можете <strong>открыть дверь</strong> в квартиру. &quot;Даже если я потеряю ключи, то всегда
                    могу позвонить совместно проживающему человеку и воспользоваться
                    вторым комплектом&quot; - скажете вы, но откроем вам маленькую тайну: около
                    70% неприятностей с квартирными замками связано не с утерей ключей, а с
                    поломкой самих замков.
                </p>
                <p>
                        Многие из нас хоть раз в жизни попадали в ситуацию, когда <strong>замок не
                    открывается</strong>  или <strong>сломался ключ</strong> . Как правило это происходит не тогда, когда
                    вы выходите на прогулку с ребенком в свой выходной, а когда, проспав на
                    работу, понимаете, что не можете  закрыть <strong>дверь квартиры</strong>. А представьте
                    что улетая на отдых или отправляясь в деловую поездку, вспоминаете, что
                    забыли дома важные документы, вернулись за ним обратно, а <strong>замок
                    заклинил</strong>.
                </p>
            </div>
            
            <div class="article-block">
                <p class="article-block-image"><img src="/img/breaking/children.jpg" alt="child"></p>
                <p>Что касается автомобилей, то в 90 % случаев виноват сам водитель:
                    <strong>захлопнул дверь</strong>, не выключил фары из-за чего сел аккумулятор, но самое 
                    неприятное и страшное это то, когда заложником автомобиля становится
                    ребенок, закрытый внутри. В этой ситуации очень многое будет зависеть от
                ваших действий. Если у вас под рукой есть <a href="tel:{{str_replace(' ', '', $phones[0])}}" >номер мастера по аварийному вскрытию замков в Минске</a> - нужно первым делом позвонить ему и описать
                    сложившуюся ситуацию, попросить быстро приехать и <strong>вскрыть замок</strong> ,
                    параллельно пытаясь уговорить ребенка нажать на кнопочку и <strong>открыть дверь</strong> 
                    машины. В случае если дверь не удалось разблокировать самостоятельно, но
                    здоровью ребенка ничего не угрожает дождитесь скорого приезда мастера.
                </p>
                <p>
                    Что же делать если вы попали в подобную ситуацию? Давайте остановимся на этом подробнее...
                </p>
            </div>

            <div class="article-block">
                <h2>Что делать если дверь в квартиру не открывается?</h2>
                <p>
                    Если замок до этого не заедал и резко заклинил, есть шанс справиться
                    самостоятельно. Первым делом аккуратно ладошкой постучите по двери в
                    районе замка (ключевое слово – аккуратно!).
                </p>
                <p>
                    Если этот способ не помогает, есть крайний – взять большой лом, кредит на
                    новую дверь, позвать пару сильных друзей и вместе <strong>вскрыть дверь</strong>, но все
                    же лучше не усугублять ситуацию. Вызов квалифицированного специалиста
                    будет самым правильным выбором. Приехавший мастер с минимальным
                    ущербом или вообще без повреждения чего-либо <strong>вскроет замок</strong> вашей
                    квартиры в Минске. Помните что стоимость дверной фурнитуры несоизмеримо мала
                    по сравнению со стоимостью двери.
                </p>
                <p>
                    В 90% случаях комплектующие для вашей двери будут у мастера с собой в
                    наличии и вы без проблем сможете заменить вышедший из строя узел, а
                    учитывая тот факт что мы имеем <a href="/catalog/0">свой магазин замков и фурнитуры</a>  ,
                    работающий в большинстве напрямую с производителями, вы получите
                    качественный товар с гарантией и по доступной цене.
                </p>
                <h3> Причины, по которым замки выходят из строя:</h3>
                <ol>
                    <li>Механизм был изначально бракованным. Проще говоря «заводской брак».</li>
                    <li>Сам замок стоил очень дешево.</li>
                    <li>Ненадлежащая эксплуатация и уход за ним.</li>
                    <li>Разные воздействия на замок. Например, ковыряние в замке, попытка взлома, удары и другое.</li>
                </ol>
            </div>
            <div class="article-block">
                <h2>Что делать если не открывается автомобиль?</h2>
                <p class="article-block-image"><img src="/img/breaking/veh.jpg" alt="vehicle"></p>
                <p>
                    Во-первых, не паникуйте. Возможно, вы или ваши близкие не закрыли до
                    конца форточку, и это позволит вам дотянуться до кнопки открытия двери
                    авто. Может быть, где-то лежат запасные ключи и вам будет дешевле и
                    быстрее съездить за ними.
                </p>
                <p>
                    Если же ключи у вас в руках, а <strong>машина не открывается</strong>, первым делом
                    постарайтесь определить причину поломки. Возможно, вы забыли выключить
                    фары, сели батарейки в ключе, падал ключ.
                </p>
                <p>
                    Сначала попробуйте поменять батарейку. Если это не помогло, вспомните,
                    что у большинства современных авто в дверях есть скважина для того чтобы
                    механически <strong>открыть дверь авто</strong>. К сожалению, мы привыкаем к нажатию на
                    кнопки, и личинка не используется нами вообще. Но оживить ее мы можем
                    попробовать. Для этого в ближайшем магазине покупаем ВД 40 или ее
                    заменители и обильно заливаем личинку машины. Ожидаем минут 5 и
                    повторяем. Возможно, нам повезет и получится <strong>открыть машину</strong>.
                </p>
                <p>
                    Если вы определили, что забыли выключить фары и из-за этого сел
                    аккумулятор, необходимо подать питание к автомобилю. Некоторые из авто
                    позволяют это сделать путем подачи питания на стартер снизу.
                </p>
                <p>
                    Очень многое зависит и от поры года. Например, зимой иногда
                    проблематично ключом <strong>открыть дверь автомобиля</strong>. Скорее всего, туда
                    попала влага, которая за ночь замерзла. Самое простое – это нагреть
                    зажигалкой ключ (но без фанатизма). Если это не помогло, можно
                    воспользоваться так называемыми незамерзайками, их сейчас хватает в
                    каждом магазине. Проведя эти несложные манипуляции, вы, возможно,
                    <strong>вскроете машину</strong>.
                </p>
                <h3>Как нужно действовать ситуации когда примерзла дверь или замок:</h3>
                <ol>
                    <li>
                        Не поливайте только двери горячей водой - этим только повредите свое
                        авто. Например, может лопнуть стекло или лед на дверях еще больше
                        намерзнет.
                    </li>
                    <li>
                        Умеренной силой попытайтесь открыть одну и дверей, когда попадете во
                        внутрь сразу выключайте печку и через несколько минут лед на замках
                        начнет оттаивать.
                    </li>
                    <li>
                        Можно попробовать бытовым феном отогреть замок или резинки.
                    </li>
                </ol>
                <p>
                    Главное, что вы должны помнить, пытаясь <strong>вскрыть машину</strong>: основная ваша
                    задача не сделать хуже, не усугубить ситуацию. Ведь в большинстве случаев у
                    приехавшего мастера получится <strong>открыть замок двери автомабиля</strong> с
                    минимальным ущербом. А вот после неграмотного вмешательства даже он
                    не сможет сделать это без минимальных повреждений. И вам придётся
                    <strong>ремонтировать замок</strong> или <strong>поменять замок</strong>.
                </p>
            </div>
            {{-- <div class="article-block">
                <h3>Преимущества компании «ZIF»:</h3>
                <ul>
                    <li>Более 10 лет успешной работы.</li>
                    <li>Все специалисты квалифицированы.</li>
                    <li>Современные специальные инструменты.</li>
                    <li>Качественная работа.</li>
                    <li>Быстрое решение вопроса.</li>
                    <li>Работают мастера 24/7 и даже в праздничные дни.</li>
                    <li>Доступные цены.</li>
                </ul>
            </div> --}}
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