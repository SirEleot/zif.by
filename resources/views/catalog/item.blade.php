<div class="catalog-item" itemscope itemtype="http://schema.org/Product">
    <div class="catalog-item-wrapper"> 
        <div class="catalog-item-row">
            <h1 class="catalog-item-tittle" itemprop="name">{{$items[0]->name}}</h1>
            <div id="modal-close" onclick="showModal(false)"></div>   
        </div>  
        <hr>  
{{--         
        <div itemscope="" itemtype="http://schema.org/Product">
            <div itemprop="name">
               <h1>Наименование товара</h1>
            </div>
            <a itemprop="image" href="ссылка-на-изображение.jpg">
            <img src="products_pictures/ссылка-на-изображение.jpg" title="Наименование товара">
            </a>
            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
               <meta itemprop="price" content="690.00">
               <meta itemprop="priceCurrency" content="RUB">
               <div>В наличии</div>
               <link itemprop="availability" href="http://schema.org/InStock">
            </div>
            <div itemprop="description">Описание товара</div> 
        </div>
         --}}
        <div class="catalog-item-row" >
            <div 
                class="catalog-item-image"  
                style="background-image: url({{ asset("img/items/".$items[0]->image) }})" 
                itemscope 
                itemprop="image" 
                itemtype="https://schema.org/imageObject"
            >
                <meta itemprop="url" content="{{ asset("img/items/".$items[0]->image) }}">
            </div>
            <div class="catalog-item-description">
                
                <div class="catalog-item-info">                    
                    <table>
                        @php
                            $trigger=true;
                            $description = json_decode($items[0]->description);
                        @endphp
                        @if ($description == [])
                            <h2 class="catalog-item-noinfo">Нет информации</h2>
                        @endif
                        @foreach ($description as $key => $row)
                            <tr style="{{$trigger ? "background-color: #888; color: white;" : "background-color: white;"}}">
                                @php
                                    $trigger=!$trigger;
                                @endphp
                                <td class="name">{{$key}}</td>
                                <td class="value">{{$row}}</td>
                            </tr>             
                        @endforeach
                    </table> 
                </div>                 
                    
                <div class="item-add">
                    <div class="item">
                        <span id="item-price-0">{{$items[0]->price}}</span>
                    </div> 
                    <div class="count">
                        <div class="count-btn" onclick="changeItemCount(-1,0)">-</div> 
                        <div class="count-info"> <span id="item-count-0">1</span></div>
                        <div class="count-btn" onclick="changeItemCount(1,0)">+</div>
                    </div>
                    <div class="item" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span 
                            id="item-total-0" 
                            itemprop="price" 
                            content="{{$items[0]->price}}"
                        >
                            {{$items[0]->price}}
                        </span> руб
                        <meta itemprop="priceCurrency" content="BYN">
                    </div> 
                    <button class="button" onclick="addItemToCart({{$items[0]->id}})">В корзину</button>
                </div>  

            </div>
        </div>         
        <hr>  
        <div class="catalog-item-row">
            @for ($i = 1; $i < count($items); $i++)
                <div style="background-image: url({{ asset("img/items/".$items[$i]->image) }})" class="catalog-item-more"  onclick="loadItem({{$items[$i]->id}})"> </div>
            @endfor
        </div>
    </div>
</div>