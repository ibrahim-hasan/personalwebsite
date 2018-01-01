$('document').ready(function() {

  var document = $(window);
  var navbar = $('.navbar');

  var scrollValue = $(document).scrollTop();
  var navbarHeight = navbar.outerHeight(true);

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

    hideToggleOnScroll();

    $.smoothScroll({
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbarHeight
    });
  });

  $('.btn-about').on('click', function() {
    target = '#aboutMe';

    hideToggleOnScroll();

    $.smoothScroll({
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbarHeight
    });
  });

  $('.btn-services').on('click', function() {
    target = '#services';

    hideToggleOnScroll();

    $.smoothScroll({
      scrollTarget: target,
      easing: 'swing',
      speed: 700,
      offset: -navbarHeight
    });
  });

  function hideToggleOnScroll() {
    document.scroll(function() {
      $('.navbar-toggler').addClass('collapsed');
      $('.navbar-collapse').removeClass('show');
    });
  }

  function sectionHeight() {
    "use strict";
    $(".calc-height").height($(window).height() - navbarHeight);
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
