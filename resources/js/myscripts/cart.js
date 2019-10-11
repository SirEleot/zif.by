  
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
    //console.log(getCookie('cart'));
}

window.removeItemFromCart = (id) => {
    if(cart.length > 0){
        cart.splice(id, 1);
        setCookie('cart', JSON.stringify(cart), 3.154e+7);
        $(`#item-${id}`).remove();
        updateCart();
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