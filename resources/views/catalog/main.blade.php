
@extends('layouts.app',['phones'=>Config::get('common.phones'), 'meta'=>Config::get('common.meta.catalog')])

@section('content')
   @php
      use Illuminate\Support\Str;
   @endphp
   <section class="catalog">
      <div class="container">
         <div class="row search">
            <div class="col-md-12 col-sm-12">
               <div class="form-group">
                  <label for="my-select">Выберите раздел</label>
                  <select id="my-select" class="form-control" name="nav" onchange="window.location.href = this.value"> 
                     @foreach ($categories as $item)
                        <option value="{{ route('catalog', ['category'=>$item->id]) }}" class="{{$item->parent == 0 ? 'filter-category' : 'filter-subcategory'}}" {{$item->id == $categoryId ? 'selected' : ''}}>
                           {{$item->name}}
                        </option>
                     @endforeach
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
                     <span itemprop="name">/ {{$categories[$categoryId]->name}}/</span>
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
               <hr>
               <div class="body">
                  @foreach ($paginator as $item)
                     <div class="card" onclick="loadItem({{$item->id}})" title="{{$item->name}}">
                        <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})" alt="{{Str::slug($item->name, '-')}}" >
                        </div>
                        <div class="info">
                           <p class="info-name">{{$item->name}}</p>
                           @if ($item->sale > 0)
                              <p class="info-price-sale">{{ round($item->price * $coef, 2 ) }} руб</p>  
                              <p class="info-price">{{round($item->sale * $coef, 2 ) }} руб</p>
                              <img src="{{ asset('img/svg/sale.svg') }}" alt="sale" class="label-sale">
                           @else
                               <p class="info-price">{{ round($item->price * $coef, 2 )}} руб</p>  
                           @endif
                                            
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