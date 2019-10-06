@extends('layouts.app')

@section('content')
   {{-- @include('catalog.item',['paginator'=>$paginator]) --}}
   @php
      use Illuminate\Support\Str;
   @endphp
   <section class="catalog">
      <div class="container">
         <div class="row search">
            <div class="col-sm-12">
               <div class="form-group">
                  <label for="my-select">Выберите раздел</label>
                  <select id="my-select" class="form-control" name="">
                     <option>Дверные замки</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                  </select>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="form-group">
                  <label for="my-select">Выберите категорию</label>
                  <select id="my-select" class="form-control" name="">
                     <option>Накладные замки</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                     <option>Text</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
               <p class="navi-string">
                  <a href="{{ route('home') }}">Главная</a> /
                  <a href="{{ route('catalog', 0) }}">Каталог товаров</a> /             
                  <a href="{{ route('catalog', $categoryId) }}">{{$categories[$categoryId]->name}}</a> /
               </p>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 filter">
               @foreach ($categories as $item)
                  <p><a href="{{ route('catalog', ['category'=>$item->id]) }}" class="{{$item->parent == 0 ? 'filter-category' : 'filter-subcategory'}}">{{$item->name}}</a></p>
               @endforeach
            </div>
            <div class="col-xl-9 ">
               <div class="body">
                  @foreach ($paginator as $item)
                     <div class="card" onclick="loadItem({{$item->id}})" title="{{$item->name}}">
                     <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})" alt="{{Str::slug($item->name, '-')}}" ></div>
                        <div class="info">
                           <p class="info-name">{{$item->name}}</p>
                           <p class="info-price">{{$item->price}} руб</p>                   
                        </div>                     
                     </div>
                  @endforeach
               </div>          
               <div>
                  {{$paginator->onEachSide(1)->links()}}   
               </div>     
            </div>      
         </div> 
      </div>
   </section>
@endsection