function scrollTo(elementID){
    const el = document.getElementById(elementID);
    if(el) el.scrollIntoView({ behavior: "smooth"});
}


$(document).ready(function () {
    $('.nav-menu-btn').click(function (e) {
        $('.nav-menu').toggleClass('nav-menu-active');
    });
    $('.nav-menu-link').click(function (e) { 
        e.preventDefault();     
        if($('.nav-menu').hasClass('nav-menu-active'))
            $('.nav-menu').removeClass('nav-menu-active');

        console.log(document.location.href);
        

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