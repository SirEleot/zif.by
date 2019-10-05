
window.$ = function (selector){
    switch(selector[0]) {
        case '.': return new Element(document.getElementsByClassName(selector.substring(1)), true);
        case '#': return new Element(document.getElementById(selector.substring(1)));
        default: return new Element(document.getElementsByTagName(selector), true);
    }
}
 
class Element {
    constructor(el, collection = false){
        this.el = el;
        this.collection = collection;
    }

    click = (event) => {
        if(this.collection){
            for (const el of this.el) {
                el.addEventListener('click',event);
            }
        } else this.el.addEventListener('click',event);
    }

    removeClass = (className) => {
        if(this.collection){
            for (const el of this.el) {
                el.classList.remove(className);
            }
        } else this.el.classList.remove(className);
    }
    
    addClass = (className) => {
        if(this.collection){
            for (const el of this.el) {
                el.classList.add(className);
            }
        } else this.el.classList.add(className);
    }

    css = (name, val) => {
        if(this.collection){
            for (const el of this.el) {
                el.style[name] = val;
            }
        } else this.el.style[name] = val;
    }

    html = (html)=>{
        if(this.collection){
            if(!html) return  this.el[0].innerHTML
            for (const el of this.el) {
                el.innerHTML = html;
            }
        } else {
            if(!html) return  this.el.innerHTML
            this.el.innerHTML = html;
        }
    }

    hasClass = (className)=>{
        //document.body.classList.toggle
        if(this.collection){
            return this.el[0].classList.contains(className);
        } else  return this.el.classList.contains(className);
    }

    toggleClass = (className)=>{
        if(this.collection){
            for (const el of this.el) {
                el.classList[0].toggle(className);
            }
        } else this.el.classList.toggle(className);
    }

    log = ()=>{
        if(this.collection){
            for (const el of this.el) {
                console.log(el);
            }
        } else console.log(this.el);
    }

}