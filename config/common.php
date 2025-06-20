<?php
    return array(
        /*
        |   base phone numbers 
        */
        'phones'=>array(
            '+375 29 142 09 08',
            '+375 29 242 09 09'
        ),
        /*
        | social
        */
        'social'=>array(
            'vk'=>'https://vk.com/mnogo.zamkof',
            'instagram'=>'https://www.instagram.com/zamki_i_furnitura_soligorsk/?hl=ru'
        ),
        /*
        |   settings for sities
        */
        'sities'=>array(
            'starie_dorogi'=> [
                'name'=>'Старые Дороги', 
                'where'=>'Старых Дорогах', 
                'whom'=>'Стырых Дорог', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'starie_dorogi.png'
            ],
            // 'minsk'=> [
            //     'name'=>'Минск', 
            //     'where'=>'Минске',
            //     'whom'=>'Минска', 
            //     'phone'=>'+375 29 144 96 98',
            //     'img'=>'minsk.png'
            // ],
            'slutsk'=> [
                'name'=>'Слуцк', 
                'where'=>'Слуцке',
                'whom'=>'Слуцка', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'slutsk.png'
            ],
            'luban'=> [
                'name'=>'Любань', 
                'where'=>'Любане',
                'whom'=>'Любани', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'luban.png'
            ],
            'kopil'=> [
                'name'=>'Копыль', 
                'where'=>'Копыле',
                'whom'=>'Копыля', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'kopil.png'
            ],
            'soligorsk' => [
                'name'=>'Солигорск', 
                'where'=>'Солигорске',
                'whom'=>'Солигорска', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'soligorsk.png'
            ],
            // 'baranovichi' => [
            //     'name'=>'Барановичи', 
            //     'where'=>'Барановичах',
            //     'whom'=>'Барановичей', 
            //     'phone'=>'+375 29 776 00 82',
            //     'img'=>'soligorsk.png'
            // ]
        ),
        /*
        |   contacts
        */
        'adress'=>'',//'г.Солигорск, рынок Октябрьский, павильон 21',
        'yandex'=> array(
            'home'=> '56055262',
            //'catalog'=> '56055349'
        ),
        /*
        |   metadata
        */
        'meta'=> array(
            'home'=>[
                'tittle'=> 'Магазин замков и фурнитуры Солигорск , рынок Октябрьский, павильон 21',
                'description' => 'Магазин замков и фурнитуры в Солигорске. ▶ Мы находимся по адрессу: г.Солигорск, рынок Октябрьский, павильон 21. 📱: +375 29 142 09 08',
                'keywords'=> 'купить, выбор, дверной, дверную, замок, ручку, сердцевину, Солигорск, почтовый ящик'
            ]
        ),
        /*
        |   mail settings
        */
        'mail'=>array(
            'order'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Новый заказ'
            ],
            'ticket'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Консультация'
            ],
            'callback'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Перезвонить'
            ]
        )
    )
?>

