<div class="catalog-item" >
    <div class="catalog-item-wrapper"> 
        <div class="catalog-item-row">
            <h3 class="catalog-item-tittle">{{$paginator[0]->name}}</h2>
            <div id="modal-close"></div>   
        </div>  
        <hr>  
        <div class="catalog-item-row">
            <div class="catalog-item-image"  style="background-image: url({{ asset("img/items/".$items[0]->image) }})"></div>
            <div class="catalog-item-description">
                
                <div class="catalog-item-info">                    
                    <table>
                        @php
                            $trigger=true;
                            $description = json_decode($items[0]->description);
                            //dd($description);
                        @endphp
                        @if ($description == [])
                            <h2 class="catalog-item-noinfo">Нет информации</h2>
                        @endif
                        @foreach ($description as $key => $row)
                            <tr style="{{$trigger ? "background-color: #888; color: white;":"background-color: white;"}}">
                                @php
                                    $trigger=!$trigger;
                                @endphp
                                <td class="name">{{$key}}</td>
                                <td class="value">{{$row}}</td>
                            </tr>             
                        @endforeach
                    </table> 
                </div>                 
                    
                <div class="catalog-item-add">
                    <div class="item">
                        <span id="item-price">{{$items[0]->price}}</span>
                    </div> 
                    <div class="count">
                        <div class="count-btn" onclick="changeItemCount(-1)">-</div> 
                        <div class="count-info"> <span id="item-count">1</span></div>
                        <div class="count-btn" onclick="changeItemCount(1)">+</div>
                    </div>
                    <div class="item">
                        <span id="item-total">{{$items[0]->price}}</span> руб
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