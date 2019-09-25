function scrollTo(elementID,smooth = true){
    const el = document.getElementById(naelementIDme);
    const option = {};
    if(smooth) option.behavior = smooth;
    if(el) el.scrollIntoView(option);
}

$(document).ready(function () {
    $('.menu-btn').click(function (e) { 
        e.preventDefault();
        $('nav').toggleClass('active');
    });
    $('.menu-link').click(function (e) { 
        e.preventDefault();     
        if($('nav').hasClass('active'))
            $('nav').removeClass('active');       
        const aray = e.target.href.split("#");
        if(e.target.origin + e.target.pathname == e.target.baseURI){
            if(aray[1]){
                scrollTo(aray[1]);
            }
        }else document.location = e.target.href
        
    });
});