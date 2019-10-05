


// возвращает куки с указанным name,
// или undefined, если ничего не найдено
window.getCookie = (name) => {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


// Пример использования:
//setCookie('user', 'John', {secure: true, 'max-age': 3600});
window.setCookie = (name, value, time = null, options = {}) => {

    if(time > 0) options['max-age'] = time;
    options = {
      path: '/',
      // при необходимости добавьте другие значения по умолчанию
      ...options
    };
  
    // if (options.expires.toUTCString) {
    //   options.expires = options.expires.toUTCString();
    // }
  
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  
    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }  
    document.cookie = updatedCookie;
}