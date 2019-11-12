@extends('layouts.app',[
    'phones'=>Config::get('common.phones'), 
    'meta'=>Config::get('common.meta.catalog'), 
    'style'=>'admin_posts'
])

@section('content')
   <div class="container admin-posts">
        <form 
            action=" {{ isset($post) ? route('admin.posts.update',['post'=>$post->id]) : route('admin.posts.store') }}" method="post" 
            enctype="multipart/form-data"
        >
            @csrf
            @if (isset($post))                
                @method('PATCH') 
            @endif
            <p>
                <input 
                    type="text"
                    name="tittle" 
                    class="form-content" 
                    placeholder="Заголовок" 
                    value="{{$post->tittle ?? "" }}"
                >
            </p>
            <p>
                <input 
                    type="text" 
                    name="description"  
                    placeholder="Описание"
                    value="{{$post->description ?? "" }}"
                >
            </p>
            <p> 
                <input 
                    type="text" 
                    name="keywords"  
                    placeholder="Ключевые слова"
                    value="{{$post->keywords ?? "" }}"
                >
            </p>
            <label for="admin-item-file-add">
                    Изображение: <img 
                        src="{{isset($post) ? asset('/img/posts/post_'.$post->id.'.jpg') : asset('/img/svg/cross.svg')}}" 
                        alt="img" 
                        alt="фото"  
                        id="admin-item-image-add"
                    >
            </label> 
            <input 
                accept="image/jpeg,image/png,image/gif" 
                type="file" name="image" 
                id="admin-item-file-add" 
                onchange="selectFileImg('add', this.files[0])"
                value=""
            >
            <p>
                <strong>$breaking</strong> -> Наши специалисты 
                <strong>$shop</strong> -> Нашем магазине
                <strong>$site</strong> -> нашем сайте 
            </p>
            <p>
                <textarea 
                    name="text" 
                    placeholder="текст"
                >
                    {{$post->text ?? "" }}
                </textarea>
            </p>
            <p>
                <input type="submit" value="{{ isset($post) ? 'сохранить' : 'добавить'}}">
            </p>
        </form>
   </div>
    
@endsection