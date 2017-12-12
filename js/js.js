$('document').ready(function() {
  var document = $(window),
      navbar = $('.navbar'),
      navbarDefault = 'bg-dark fixed',
      navbarTransparent = 'navbar-transparent',
      fadeInDown = 'fadeInDown';

doTheMagic();

document.scroll(
  function() {
    doTheMagic();
  });

function doTheMagic() {
    if(document.scrollTop() > 80) {

      navbar.addClass(navbarDefault);
      navbar.removeClass(navbarTransparent);

      navbar.addClass(fadeInDown);
    } else {
      navbar.addClass(navbarTransparent);
      navbar.removeClass(navbarDefault);

      navbar.removeClass(fadeInDown);}
    }
});

$(function () {
  "use strict";
  $("section, header").height($(window).height());
});
