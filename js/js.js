$('document').ready(function() {
  var document = $(window),
      navbar = $('.navbar'),
      navbarDefault = 'bg-dark fixed',
      navbarTransparent = 'navbar-transparent',
      fadeInDown = 'fadeInDown';

      var homeLink = $("a.nav-link.dropdown-toggle");
      var homeDropdown = $("#home-dropdown");
      var dropdown = $('#dropdown');
      var chevron = $('#chevron');

      homeLink.hover(function(){
        $('#chevron').removeClass('fa-chevron-down');
        $('#chevron').addClass('fa-chevron-up');
        homeDropdown.slideDown("fast");
      });

      dropdown.mouseleave(function(){
        $('#chevron').removeClass('fa-chevron-up');
        $('#chevron').addClass('fa-chevron-down');
        homeDropdown.slideUp("fast");
      });

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
