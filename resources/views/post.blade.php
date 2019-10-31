@extends('layouts.app',['phones'=>Config::get('common.phones')])

@section('content')

<section class="post">
    <div class="container">
        <h1 class="text-center">{{$post->tittle}}</h1>
        <div class="text">
            <img src="{{ asset('img/posts/'.$post->image) }}" alt="post_image">
            @foreach ($paragraphs as $p)              
                <p>
                    {!!
                        str_replace('$shop', Config::get('common.postLinks')['$shop'], str_replace('$breaking', Config::get('common.postLinks')['$breaking'], $p))
                    !!}
                </p>
            @endforeach
        </div>
    </div>
</section>

@endsection