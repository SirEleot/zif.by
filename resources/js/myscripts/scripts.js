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

window.changeItemCount = (val) => {
    let count = +$('#item-count').html();
    if(val < 0 && count == 1) return;
    $('#item-count').html(+count + val);
}

window.loadItem = async (id) => {
    if(id < 0) return;
    $('#modal').html('load...');
    showModal(true);
    let response = await fetch(home + `/item/${id}`);
    let result = await response.text();
    $('#modal').html(result);
}

document.addEventListener('DOMContentLoaded',() => {
    $('.nav-menu-btn').click(function (e) {
        $('.nav-menu').toggleClass('nav-menu-active');
    });
    $('.nav-menu-link').click(function (e) { 
        e.preventDefault();     
        if($('.nav-menu').hasClass('nav-menu-active'))
            $('.nav-menu').removeClass('nav-menu-active');

        if(e.target.href.match(/catalog/))
            document.location = e.target.href;
        else if (document.location.href.match(/catalog/))
            document.location = e.target.href;
        else {       
            const aray = e.target.href.split("#");            
            scrollTo(aray[1]);
        }
    });
});