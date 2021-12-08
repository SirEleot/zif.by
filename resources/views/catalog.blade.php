
@extends('layouts.app',[
   'phones'=>Config::get('common.phones'),
   'catalog_con'=>($categoryId != 0),
   'style'=>'catalog'
])

@section('content')
   @php
      use Illuminate\Support\Str;
      $subcategories = array();
   @endphp
   <section class="catalog">
      <div class="container">
         <div class="row alt-filter">
            <div class="col-md-12 col-sm-12">
               <div class="form-group">
                  <label for="my-select-category">Выберите категорию</label>
                  <select 
                     id="my-select-category" 
                     class="form-control" 
                     onchange="updateSubcategories()"
                  >
                     @foreach ($categories as $item)
                        @if ($item->parent == 0)
                           <option 
                              value="{{$item->id}}"
                              {{ (isset($categories[$categoryId]) && $item->id == $categories[$categoryId]->parent) ? 'selected' : ''}}
                           >
                              {{$item->name}}
                           </option>
                           @php
                               $subcategories[$item->id] = [];
                           @endphp
                        @else
                            @php
                                $subcategories[$item->parent][] = ['id'=>$item->id,'name'=>$item->name];
                            @endphp
                        @endif
                     @endforeach
                  </select>

                  <input type="hidden" id="subcat" value="{{json_encode($subcategories)}}">

                  <label for="my-select-subcategory">Выберите подкатегорию</label>
                  <select 
                     id="my-select-subcategory" 
                     class="form-control" 
                     onchange="window.location.href = this.value"
                  >
                     <option value="{{$categoryId}}" selected></option> 
                  </select>                
               </div>
            </div>            
         </div>
            <div class="navi-string" itemscope itemtype="https://schema.org/BreadcrumbList">
               <div itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                  <a href="{{ route('home') }}" itemprop="item">
                     <span itemprop="name"> Главная</span>
                  </a> 
                  <meta itemprop="position" content="1">
               </div>
               <div itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                  <a href="{{ route('catalog', 0) }}" itemprop="item">
                     <span itemprop="name">/ Каталог товаров</span>
                  </a>  
                  <meta itemprop="position" content="2">
               </div>
               <div itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                  <a href="{{ route('catalog', $categoryId) }}" itemprop="item">
                     <span itemprop="name">/
                        @switch($categoryId)
                            @case(-1)
                                Результаты поиска
                                @break
                            @case(99)
                              Акционные товары
                                @break
                            @default
                              {{$categories[$categoryId]->name}}
                        @endswitch                        
                     /</span>
                  </a> 
                  <meta itemprop="position" content="3">
               </div>
            </div>
         <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 filter">
               @foreach ($categories as $item)
                  <p class="{{$item->id == $categoryId ? 'filter-selected' : ''}}"><a href="{{ route('catalog', ['category'=>$item->id]) }}" class="{{$item->parent == 0 ? 'filter-category' : 'filter-subcategory'}}">{{$item->name}}</a></p>
               @endforeach
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
               <h1 class="tittle text-center">Каталог товаров</h1>
               <form class="catalog-search form-inputs" method="GET" action="{{ route('catalog', ['category'=>-1]) }}">
                  <div class="input"><input value="{{session('search')}}" type="text" placeholder="Поиск по сайту" name="search" required></div>
                  <div class="send"><input type="submit" value="Найти"></div>
               </form>
               <div class="body">
                  @foreach ($paginator as $item)
                     <div class="card" onclick="loadItem({{$item->id}})" title="{{$item->name}}">
                        <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})" alt="{{Str::slug($item->name, '-')}}" >
                        </div>
                        <div class="info">
                           <p class="info-name">{{$item->name}}</p>
                           <p class="info-price">Цену уточняйте</p>
                           <!-- @if ($item->sale > 0)
                              <p class="info-price-sale">{{ round($item->price * $coef, 2 ) }} руб</p>  
                              <p class="info-price">{{$item->sale }} руб</p>
                              <img src="{{ asset('img/svg/sale.svg') }}" alt="sale" class="label-sale">
                           @else
                               <p class="info-price">{{ round($item->price * $coef, 2 )}} руб</p>  
                           @endif -->
                                            
                        </div>                     
                     </div>
                  @endforeach
               </div>          
               <div>                 
                  {{$paginator->links('pagination')}}   
               </div>     
            </div>      
         </div> 
      </div>
   </section>
@endsection