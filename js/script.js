$('document').ready(function() {

  var document = $(window);
  var navbar = $('.navbar');

  var scrollValue = $(document).scrollTop();

  var target;

  sectionHeight();
  navOnScroll();

document.scroll(
  function() {
    navOnScroll();
  });

// Smooth Scroll

  $('.nav-link').on('click', function() {

    switch( $(this).text() ) {
      case 'About Me':
          target = '#aboutMe';
          break;
      case 'Services':
          target = '#services';
          break;
      case 'Projects':
          target = '#projects';
          break;
      default:
          target = '#home';
    }

    $.smoothScroll( {
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbar.outerHeight(true)
    } );
  });

  $('.btn-about').on('click', function() {
    target = '#aboutMe';
    $.smoothScroll( {
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbar.outerHeight(true)
    } );
  });

  $('.btn-services').on('click', function() {
    target = '#services';
    $.smoothScroll( {
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbar.outerHeight(true)
    } );
  });

  function sectionHeight() {
    "use strict";
    $(".calc-height").height($(window).height() - navbar.outerHeight(true));
    $(".header").height($(window).height());

  }

  function navOnScroll() {
    if(document.scrollTop() > 100) {

      navbar.addClass('navbar-default');
      navbar.removeClass('navbar-transparent');

      navbar.addClass('fadeInDown');

    } else {

      navbar.addClass('navbar-transparent');
      navbar.removeClass('navbar-default fixed');

      navbar.removeClass('fadeInDown');

    }
  }

});
