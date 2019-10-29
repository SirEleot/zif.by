window.deleteItem = (id) => {
    let form = document.getElementById('item_' + id);
    let method = form.querySelector('[name=_method]');
    method.value = "DELETE"; 
    form.submit();
}

window.saveItem = (id) => {
    let form = document.getElementById('item_' + id);
    form.submit();    
}