<div id="modal" class="catalog-item" >
    <div class="catalog-item-wrapper"> 
        <div class="catalog-item-row">
            <h3 class="catalog-item-tittle">{{$paginator[0]->name}}</h2>
            <div id="modal-close">Закрыть</div>   
        </div>  
        <hr>  
        <div class="catalog-item-row">
            <div class="catalog-item-image"  style="background-image: url({{ asset("img/items/".$paginator[0]->image) }})"></div>
            <div class="catalog-item-description">
                
                <div class="catalog-item-info">                    
                    <table>
                        @php
                            $trigger=true;
                        @endphp
                        @foreach (json_decode($paginator[0]->description) as $key => $row)
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
                        <span id="item-price">{{$paginator[0]->price}}</span>
                    </div> 
                    <div class="count">
                        <div class="count-btn">-</div> 
                        <div class="count-info">1</div>
                        <div class="count-btn">+</div>
                    </div>
                    <div class="item">
                        <span id="item-total">{{$paginator[0]->price}} руб</span>
                    </div> 
                    <button class="button">В корзину</button>
                </div>  

            </div>
        </div>         
        <hr>  
        <div class="catalog-item-row">
            @for ($i = 0; $i < 5; $i++)
                <div style="background-image: url({{ asset("img/items/".$paginator[$i]->image) }})" class="catalog-item-more"> </div>
            @endfor
        </div>
    </div>
</div>