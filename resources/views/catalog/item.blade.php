<div class="catalog-item" itemscope itemtype="http://schema.org/Product">
    <div class="catalog-item-wrapper"> 
        <div class="catalog-item-row">
            <h1 class="catalog-item-tittle" itemprop="name">{{$items[0]->name}}</h1>
            <div id="modal-close" onclick="showModal(false)"></div>   
        </div>  
        <hr>
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
                    <div class="item" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        @if ($items[0]->sale > 0)
                            <span class="item-sale">
                                {{ round($items[0]->price * $coef, 2 ) }}
                            </span>
                            <span
                                class="item-price"
                                id="item-price-0"  
                                itemprop="price" 
                                content="{{ $items[0]->sale }}"
                            >
                                {{ $items[0]->sale }}
                            </span>
                        @else
                            <span 
                                class="item-price"
                                id="item-price-0"  
                                itemprop="price" 
                                content="{{ round($items[0]->price * $coef, 2 )}}"
                            >
                                {{ round($items[0]->price * $coef, 2 )}}
                            </span>  
                        @endif
                        <meta itemprop="priceCurrency" content="BYN">
                        <meta itemprop="prod" content="{{$items[0]->factory}}">
                    </div> 
                    <div class="count">
                        <div class="count-btn" onclick="changeItemCount(-1,0)">-</div> 
                        <div class="count-info"> <span id="item-count-0">1</span></div>
                        <div class="count-btn" onclick="changeItemCount(1,0)">+</div>
                    </div>
                    <div class="item">
                        <span 
                            id="item-total-0"
                        >
                            {{round($items[0]->price * $coef, 2) }}
                        </span> руб
                    </div> 
                    <button class="button" onclick="addItemToCart({{$items[0]->id}})">В корзину</button>
                </div>
            </div>
        </div>         
        <hr>  
        <div class="catalog-item-row">
            @for ($i = 1; $i < count($items); $i++)
                <div 
                    style="background-image: url({{ asset("img/items/".$items[$i]->image) }})" 
                    class="catalog-item-more"  onclick="loadItem({{$items[$i]->id}})"
                > 
                </div>
            @endfor
        </div>
    </div>
</div>