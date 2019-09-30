function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

window.$ = function (selector) {
  switch (selector[0]) {
    case '.':
      return document.getElementsByClassName(selector.substring(1));

    case '#':
      return document.getElementById(selector.substring(1));

    default:
      return document.getElementsByTagName(selector);
  }
};

var Element = function Element(el) {
  var collection = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

  _classCallCheck(this, Element);

  this.el = el;
  this.collection = collection;
};

require('./selector');

function scrollTo(elementID) {
  var el = document.getElementById(elementID);
  if (el) el.scrollIntoView({
    behavior: "smooth"
  });
}

function showModal() {
  var id = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : -1;

  if (id < 0) {//$('body').removeClass('modal-open');
    // $('#modal').css('display', 'none')
  } else {//$('body').addClass('modal-open');
      //$('#modal').css('display', 'block');
    }
}

function addItemToCart(id) {}

document.addEventListener('DOMContentLoaded', function () {
  $("#modal-close").click(function (e) {
    showModal(-1);
  });
  $('.card').click(function (e) {
    showModal(e.currentTarget.id);
  });
  $('.nav-menu-btn').click(function (e) {
    $('.nav-menu').toggleClass('nav-menu-active');
  });
  $('.nav-menu-link').click(function (e) {
    e.preventDefault();
    if ($('.nav-menu').hasClass('nav-menu-active')) $('.nav-menu').removeClass('nav-menu-active');
    console.log(document.location.href);
    if (e.target.href.match(/catalog/)) document.location = e.target.href;else if (document.location.href.match(/catalog/)) document.location = e.target.href;else {
      var aray = e.target.href.split("#");
      scrollTo(aray[1]);
    }
  });
});
