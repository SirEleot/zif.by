  
window.addItemToCart = (id) => {
    let item;
    cart.forEach(
    i => {
        if(i[0] == id) {
            item = i;
            return;
        }
    });
    const count = +$('#item-count-0').html();
    if(item)  item[1] += count;
    else cart.push([id,count]);
    setCookie('cart', JSON.stringify(cart), 3.154e+7);
    showModal(false);
    updateCountCart();
}

window.removeItemFromCart = (id) => {
    if(cart.length > 0){
        cart.forEach((item, index) => {
            if(item[0] == id){
                cart.splice(index, 1);
                setCookie('cart', JSON.stringify(cart), 3.154e+7);
                $(`#item-${id}`).remove();
                updateCart();
                return;
            }
        });
    }
}

window.updateCart = () => {
    let orderCount = 0;
    let orderPrice = 0;
    $('.count-info').each((el)=>{
        orderCount += +el.querySelector('span').innerHTML;
    });
    $('.item-total').each((el)=>{
        orderPrice += +el.querySelector('span').innerHTML;
    });
    
    $('#order-count').html(orderCount);
    $('#order-price').html(orderPrice.toFixed(2));    
    updateCountCart();
}

window.sendOrder = (e, form) => {
    e.preventDefault();
    let phone = form.querySelector('[name=phone]').value;
    phone = phone.replace(/\s/g, '');
    const code = phone.substring(0,2);
    if(code != '29' && code != '25' && code != '33') return alert('Введен некорректный код оператора');
    if(phone.length != 9) return alert('В веденном номере телефона не хватает символов');
    form.submit();
}

window.updateCountCart = () => {
    let count = 0;
    cart.forEach(element => {
        count += element[1];
    });
    if(count > 0) {
        $('#cart-count').html(count);
        $('.cart-count').css('display', 'flex');
    }
    else $('.cart-count').css('display', 'none')
}