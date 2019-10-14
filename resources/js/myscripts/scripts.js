window.scrollTo = (elementID) => {
    const el = document.getElementById(elementID);
    if(el) el.scrollIntoView({ behavior: "smooth"});
}

window.showModal = (show = false) => {
    if(show){
        $('body').addClass('modal-open');
        $('#modal').css('display', 'block');
    }else{
        $('body').removeClass('modal-open');
        $('#modal').css('display', 'none')
    }
}

window.changeItemCount = (val, id) => {
    const el =  $(`#item-count-${id}`);
    let count = +el.html();
    if(val < 0 && count == 1) return;
    count += val;
    el.html(count);
    const price = +$(`#item-price-${id}`).html();
    $(`#item-total-${id}`).html((price * count).toFixed(2));
    if($('#order').el){
        cart[id][1] += val;    
        setCookie('cart', JSON.stringify(cart), 3.154e+7);
        updateCart(); 
    }
}

window.loadItem = async (id) => {
    if(id < 0) return;
    $('#modal').html('load...');
    showModal(true);
    let response = await fetch(`/item/${id}`);
    let result = await response.text();
    $('#modal').html(result);
}

document.addEventListener('DOMContentLoaded',() => {
    //setCookie('cart', '[]', 3.154e+7);
    const cart = getCookie('cart');
    window.cart =  cart ? JSON.parse(cart) : [];
    $('.nav-menu-btn').click(function (e) {
        $('.nav-menu').toggleClass('nav-menu-active');
    });
    $('.nav-menu-link').click(function (e) {
        console.log(e.target.pathname);
        e.preventDefault();
        if(window.location.pathname == '/' && e.target.pathname == '/'){            
            const aray = e.target.href.split("#");   
            scrollTo(aray[1]);
        }else window.location.href = e.target.href;
    });
});

window.onInputPhoneNumber = (ev, el) => {
    const next = ev.data;
    if(next === null)return;
    const prev = el.value.substring(0, el.value.length - 1)
    if(el.value.length > 12) return el.value = prev;
    if(next.match(/\d/)){
        if(el.value.length == 2 || el.value.length == 6 || el.value.length == 9) el.value += ' ';
    }else el.value = prev;
}
    