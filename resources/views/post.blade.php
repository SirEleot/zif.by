@extends('layouts.app',[
    'phones'=>Config::get('common.phones'), 
    'meta'=>array('tittle'=>$post->tittle,'description'=>$post->description,'keywords'=>$post->keywords), 
    'style'=>'post'
])

@section('content')

<section class="post">
    <div class="container">
        <div class="navi-string" itemscope itemtype="https://schema.org/BreadcrumbList">
           <div itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
              <a href="{{ route('home') }}" itemprop="item">
                 <span itemprop="name"> Главная</span>
              </a> 
              <meta itemprop="position" content="1">
           </div>
           <div itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
              <a href="{{ route('posts') }}" itemprop="item">
                 <span itemprop="name">/ статьи/</span>
              </a>  
              <meta itemprop="position" content="2">
           </div>          
        </div>
    </div>
    <div class="container"
        itemscope
        itemtype="http://schema.org/Article"
    >
        <h1 class="text-center" itemprop="headline">{{$post->tittle}}</h1>
        <div class="text">
            <img itemprop="image" src="{{ asset('img/posts/'.$post->image) }}" alt="post_image">
            <article
                itemprop="articleBody"
            > 
                @foreach ($paragraphs as $p)
                    <p>{!! $p !!}</p>
                @endforeach
            </article>
            <p itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="zamki i furnitura">
                <link itemprop="url" href="https://zif.by">
                <meta itemprop="address" content="ул.Заслонова-44 г.Солигорск 223710">
                <meta itemprop="telephone" content="+375291420908">
                <span itemprop="logo" content="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <link itemprop="image" href="{{ asset('img/svg/logo_black.svg') }}">
                </span>
            </p>
            <p class="text-right"
            >
                Дата публикации: 
                <span
                    itemprop="datePublished"
                    datetime="{{$post->created_at}}"
                >
                    {{$post->created_at}}
                </span>
            </p>
            <p class="text-right">
                Автор:
                <span
                    itemprop="author"
                >zif.by</span>
            </p>
            
        </div>
    </div>
</section>

@endsection