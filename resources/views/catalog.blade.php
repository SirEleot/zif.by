@extends('layouts.app')

@section('content')
   <section class="catalog">
      <div class="container">
         <div class="row">
            <p class="navi-string">
               <a href="{{ route('home') }}">Главная</a> /
               <a href="{{ route('catalog', 0) }}">Каталог товаров</a> /             
               <a href="{{ route('catalog', $categoryId) }}">{{$categories[$categoryId]->name}}</a> /
            </p>
         </div>
         <div class="row">
            <div class="col-xl-3 filter">
               @foreach ($categories as $item)
                  <p><a href="{{ route('catalog', ['category'=>$item->id]) }}" class="{{$item->parent == 0 ? 'filter-category' : 'filter-subcategory'}}">{{$item->name}}</a></p>
               @endforeach
            </div>
            <div class="col-xl-9">
               <div class="body">
                  @foreach ($paginator as $item)
                     <div class="card">
                        <div class="image" style="background-image: url({{ asset("image/items/".$item->image) }})"></div>
                        <div class="info">
                           <p class="info-name">{{$item->name}}</p>
                           <p class="info-price">{{$item->price}} руб</p>                   
                        </div>                     
                     </div>
                  @endforeach
               </div>          
               <div>
                  {{$paginator->links()}}   
               </div>     
            </div>      
         </div> 
      </div>
           
   </section>
@endsection