$('document').ready(function() {
  var document = $(window),
      element = $('.navbar'),
      navbarDefault = 'bg-dark',
      navbarTransparent = 'navbar-transparent',
      fadeInDown = 'fadeInDown';

doTheMagic();

document.scroll(
  function() {
    doTheMagic();
  });

function doTheMagic() {
    if(document.scrollTop() > 100) {

      element.addClass(navbarDefault);
      element.removeClass(navbarTransparent);

      element.addClass(fadeInDown);
    } else {
      element.addClass(navbarTransparent);
      element.removeClass(navbarDefault);

      element.removeClass(fadeInDown);}
    }
});
