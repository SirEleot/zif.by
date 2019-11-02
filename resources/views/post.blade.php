@extends('layouts.app',['phones'=>Config::get('common.phones')])

@section('content')

<section class="post" 
>
    <div class="container"
        itemscope
        itemtype="http://schema.org/Article"
    >
        <h1 class="text-center" itemprop="headline">{{$post->tittle}}</h1>
        <div class="text">
            <img itemprop="url contentUrl" src="{{ asset('img/posts/'.$post->image) }}" alt="post_image">
            <meta itemprop="url" content="{{ asset('img/posts/'.$post->image) }}">
            <article
                itemprop="articleBody"
            > 
                @foreach ($paragraphs as $p)
                    <p>
                        {!!
                            str_replace('$shop', Config::get('common.postLinks')['$shop'], str_replace('$breaking', Config::get('common.postLinks')['$breaking'], $p))
                        !!}
                    </p>
                @endforeach
            </article> 
            <p
                class="text-right"
                itemprop="datePublished"
                datetime="{{$post->created_at}}"
            >
                {{$post->created_at}}
            </p>
        </div>
    </div>
</section>

@endsection