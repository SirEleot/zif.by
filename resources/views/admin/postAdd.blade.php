@extends('layouts.app',[
    'phones'=>Config::get('common.phones'), 
    'meta'=>Config::get('common.meta.catalog'), 
    'style'=>'admin_posts'
])

@section('content')
    <div class="row admin-menu-top">   
        <p class="admin-menu-tittle">Категории:</p>     
        <div class="filter">
            <div class="form-group">
               <select  onchange="window.location.href = this.value">
                    @foreach ($categories as $item)
                        <option value="{{ route('admin.items.show', ['item'=>$item->id]) }}" class="{{$item->parent == 0 ? 'filter-category' : 'filter-subcategory'}}" {{$item->id == $categoryId ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
               </select>
            </div>
        </div>
        <p class="admin-menu-tittle">Коэффициент цены:</p>
        <form action="{{route('admin.setCoef')}}" method="POST" class="admin-kof">
            @csrf
            <p class="admin-kof-val"> <input type="number" value="{{$coef}}" name="coef" min="0.5" step=".1"></p> 
            <p class="admin-kof-btn">
                <button type="submit">
                    <svg 
                        version="1.1" 
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 49 49" 
                        width="25px" 
                        height="25px" 
                        fill="white"
                    >
                        <path d="M39.914,0H37.5h-28h-9v49h7h33h8V8.586L39.914,0z M35.5,2v14h-24V2H35.5z M9.5,47V28h29v19H9.5z M46.5,47h-6V26h-33v21h-5V2h7v16h28V2h1.586L46.5,9.414V47z"/>
                        <path d="M13.5,33h7c0.553,0,1-0.447,1-1s-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1S12.947,33,13.5,33z"/>
                        <path d="M23.5,35h-10c-0.553,0-1,0.447-1,1s0.447,1,1,1h10c0.553,0,1-0.447,1-1S24.053,35,23.5,35z"/>
                        <path d="M25.79,35.29c-0.181,0.189-0.29,0.45-0.29,0.71s0.109,0.52,0.29,0.71C25.979,36.89,26.229,37,26.5,37
                            c0.26,0,0.52-0.11,0.71-0.29c0.18-0.19,0.29-0.45,0.29-0.71s-0.11-0.521-0.29-0.71C26.84,34.92,26.16,34.92,25.79,35.29z"/>
                        <path d="M33.5,4h-6v10h6V4z M31.5,12h-2V6h2V12z"/>
                    </svg>
                </button>
            </p>
        </form>
    </div>
    <div class="admin admin-menu">
        <p class="admin-menu-tittle text-center">Новый товар:</p>
        <form class="admin-menu-add" id="add-item" action="{{ route('admin.items.store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="admin-item-file">
                <label for="admin-item-file-add">
                    Изображение: <img src="{{asset('/img/svg/cross.svg')}}" alt="img" alt="фото"  id="admin-item-image-add">
                </label> 
                <input accept="image/jpeg,image/png,image/gif" type="file" name="image" id="admin-item-file-add" onchange="selectFileImg('add', this.files[0])" required>                    
            </div>
            <p>Название</p>
            <div class="admin-menu-add-name">
                <input type="text" name="name" placeholder="Название" required>
            </div>
            <p>Производитель</p>
            <div>
                <input type="string" name="factory" placeholder="Производитель" required>
            </div>
            <p>Цена до коэффициента</p>
            <div>
                <input type="number" name="price" placeholder="Цена до коэффициента" required>
            </div> 
            <p>Категория</p>
            <div class="filter">
                <div class="form-group">
                   <select name="category_id">
                        @foreach ($categories as $item)
                            @if ($item->parent != 0)
                                <option value="{{ $item->id }}" class="filter-subcategory" >{{$item->name}}</option>
                            @endif
                        @endforeach
                   </select>
                </div>
            </div>
            <p>Описание</p>
            <div>
                <textarea name="description" ></textarea>
            </div>
            <button class="button">Добавить товар</button>
        </form>
    </div>
    <div class="admin-items">
        @foreach ($paginator as $item)
            <form class="admin-item" action="{{route('admin.items.update', ['item'=>$item->id])}}" method="POST" id="item_{{$item->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')                
                <div class="admin-item-file">
                    <label for="admin-item-file-{{$item->id}}">
                        <img src="{{ asset("img/items/".$item->image) }}" alt="img"  id="admin-item-image-{{$item->id}}">                        
                    </label> 
                    <input accept="image/jpeg,image/png,image/gif" type="file" name="image" id="admin-item-file-{{$item->id}}" onchange="selectFileImg({{$item->id}}, this.files[0])">                    
                </div>
                
                <div class="admin-item-id">Id: {{$item->id}}</div>
                <div class="admin-item-name" ><input type="text" name="name" value="{{$item->name}}"></div>
                <div class="admin-item-price"><input type="number" name="sale" placeholder="акция" value="{{$item->sale > 0 ? $item->sale : null}}"></div>                
                <div class="admin-item-price" ><input type="number" name="price" value="{{$item->price}}"></div>
                <div class="admin-item-total"> * {{$coef}}  = {{round($item->price * $coef, 2)}} руб.</div>
                <div class="admin-item-btn" title="Удалить товар">
                    <img src="{{ asset('/img/svg/cross.svg') }}" alt="{{$item->name}}" onclick="deleteItem({{$item->id}})">
                </div>
                <div class="admin-item-btn" title="Сохранить изменения">
                    <img src="{{ asset('/img/svg/save.svg') }}" alt="{{$item->name}}" onclick="saveItem({{$item->id}})">
                </div>                
                <div><input type="hidden" name="image_path" value="{{$item->image}}"></div>
            </form>
        @endforeach
    
        <div>
            {{$paginator->links('pagination')}}  
        </div> 
    </div>
    
@endsection