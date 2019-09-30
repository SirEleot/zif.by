window.$ = function (selector){
    switch(selector[0]) {
        case '.': return document.getElementsByClassName(selector.substring(1));
        case '#': return document.getElementById(selector.substring(1));
        default: return document.getElementsByTagName(selector);
    }
}

class Element {
    constructor(el, collection = false){
        this.el = el;
        this.collection = collection;
    }
}