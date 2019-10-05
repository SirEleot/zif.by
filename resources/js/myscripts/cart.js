  
window.addItemToCart = (id, count = 1) => {
    let cart = getCookie('cart');
    cart = cart ? JSON.parse(cart) : [];
    let item;
    cart.forEach(
    i => {
        if(i[0] == id) return item = i;
    });
    if(item)  item[1] += count;
    else cart.push([id,count]);
    setCookie('cart', JSON.stringify(cart), 10);
}
