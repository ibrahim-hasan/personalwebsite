// Wait for window load
$(window).on('load',function() {
  // Animate loader off screen
  $(".se-pre-con").fadeOut("slow");
});

$(function() {
/////////////////////////////////////////////
//////////// Variables Declaration //////////
/////////////////////////////////////////////

var header = $(".header");
var navbar = $('.navbar');
var navbarToggler = $('.navbar-toggler');
var navbarCollapse = $('.navbar-collapse');
var navLink = $('.nav-link');
var navbarHeight = navbar.outerHeight(true);

var target;

var btnTop = $('.btn-top');
var btnAbout = $('.btn-about');
var btnSkills = $('.btn-skills');

var calcHeight = $(".calc-height");

var PT_Serif = "PT Serif";
var Open_Sans = 'Open Sans';

var webInView = false;
var computerInView = false;
var languagesInView = false;

/////////////////////////////////////////////
//////// End of Variables Declaration ///////
/////////////////////////////////////////////

/////////////////////////////////////////////
///////////// Excecute Functions ////////////
/////////////////////////////////////////////

// Execute these functions when the page is loaded.

sectionHeight();
setTimeout(navOnScroll, 100);
setTimeout(btnTopFunc, 100);
webFunc();
computerFunc();
languagesFunc();
$('.animated-headline').animatedHeadline({
  animationType: 'type'
});

// Execute these functions when scrolling.

$(window).scroll(function() {
  setTimeout(navOnScroll, 100);
  setTimeout(btnTopFunc, 100);
});

// Execute these functions when the view is resized.

$(window).resize(function() {
  setTimeout(navOnScroll, 100);
  navbarHeight = navbar.outerHeight(true);
  sectionHeight();
});

/////////////////////////////////////////////
///////// End of Excecute Functions /////////
/////////////////////////////////////////////


/////////////////////////////////////////////
////////////// Smooth Scroll ////////////////
/////////////////////////////////////////////

navLink.click(function() {

  switch( $(this).text() ) {
    case 'About':
        target = '#aboutMe';
        break;
    case 'Skills':
        target = '#skills';
        break;
    case 'Services':
        target = '#services';
        break;
    case 'Projects':
        target = '#projects';
        break;
    case 'Contact':
        target = '#contact';
        break;
    default:
        target = '#home';
  }

  smoothScrollFunction();
});

btnAbout.click(function() {
  target = '#aboutMe';
  smoothScrollFunction();
});

btnSkills.click(function() {
  target = '#skills';
  smoothScrollFunction()
});

btnTop.click(function() {
  target = '#home';
  smoothScrollFunction();
});

/////////////////////////////////////////////
/////////// End of Smooth Scroll ////////////
/////////////////////////////////////////////


/////////////////////////////////////////////
///////////////// Functions /////////////////
/////////////////////////////////////////////

// Hide the navigation buttons when scrolling on small devices.

function hideToggleOnScroll() {
  $(window).scroll(function() {
    navbarToggler.addClass('collapsed');
    navbarCollapse.removeClass('show');
  });
}

// Change the height of specific sections to match the height of screen.

function sectionHeight() {
  "use strict";
  calcHeight.height($(window).height() - navbarHeight);
  header.height($(window).height());
}

// Change the styling and animation of the navigation bar depending on the location and width of screen.

function navOnScroll() {
  if($(window).scrollTop() > 100 || $(window).width() < 586) {
    navbar.addClass('navbar-default');
    navbar.removeClass('navbar-transparent');
    navbar.addClass('fadeInDown');
  } else {
    navbar.addClass('navbar-transparent');
    navbar.removeClass('navbar-default fixed');
    navbar.removeClass('fadeInDown');
  }
}

// Add animation to the button in the right-bottom corner to hide and show it after a distance from the top of the page.

function btnTopFunc() {
  if($(window).scrollTop() > 100) {
    btnTop.addClass('fadeInUp');
    btnTop.removeClass('fadeOutDown');

  } else {
    btnTop.addClass('fadeOutDown');
    btnTop.removeClass('fadeInUp');
  }
}

// Add smooth scroll between sections when a specific button is clicked.

function smoothScrollFunction() {
  hideToggleOnScroll();
  $.smoothScroll({
    scrollTarget: target,
    easing: 'swing',
    speed: 700,
    offset: -navbarHeight // Scroll just to the beginning of the section. The navigation bar no longer hides the content of the section.
  });
}

////////////// Animate Charts on Scroll /////////////

// Create a bar chart for web development skills.

function webFunc() {
  var webId = document.getElementById('web').getContext('2d');
  var web = new Chart(webId, {
    // The type of chart we want to create
    type: 'horizontalBar',

    // The data for our dataset
    data: {
      labels: ["HTML", "CSS", "SASS", "Bootstrap", "JavaScript", "jQuery", "PHP", "Laravel", "MySQL", "WordPress", "NPM", "Gulp.js", "Git & Github"],
      datasets: [{
        label: "Level",
        backgroundColor: '#f05f40',
        borderColor: 'rgb(255, 99, 132)',
        data: [95, 100, 80, 90, 20, 70, 50, 40, 55, 50, 60, 70, 80],
      }]
    },

    // Configuration options go here
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      title: {
        display: true,
        text: 'Web Development Skills',
        fontSize: 22,
        fontStyle: 'normal',
        padding: 20,
        fontFamily: PT_Serif
      },
      scales: {
        yAxes: [{
          barPercentage: 0.9
        }],
        xAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            drawOnChartArea: false
          }
        }]
      },
      tooltips: {
        displayColors: false
      }
    }
  });
}

// Create a radar chart for computer skills.

function computerFunc() {
  var computerId = document.getElementById('computer').getContext('2d');
  var computer = new Chart(computerId, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
      labels: ["SolidWorks", "MS Excel", "MS Visio", "MS PowerPoint", "MS Word", "MS Outlook"],
      datasets: [
        {
          label: "Level",
          fill: true,
          backgroundColor: "rgba(240,95,64,0.2)",
          borderColor: "#f05f40",
          pointBorderColor: "#f05f40",
          pointBackgroundColor: "rgba(240,95,64,1)",
          pointBorderWidth: "3",
          pointStyle: "circle",
          data: [8, 4, 10, 10, 10, 9]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      title: {
        display: true,
        text: 'Computer Skills',
        fontSize: 22,
        fontStyle: 'normal',
        padding: 20,
        fontFamily: PT_Serif
      },
      scale: {
        ticks: {
          display: false,
          beginAtZero: true,
          min: 0,
          max: 10,
          steps: 5,
          stepSize: 2
        },
        pointLabels: {
          fontSize: 12
        }
      },
      tooltips: {
        displayColors: false
      },
    }
  });
}

// Create a polar area chart chart for language skills.

function languagesFunc() {
  var languagesId = document.getElementById('languages').getContext('2d');
  var languages = new Chart(languagesId, {
    // The type of chart we want to create
    type: 'polarArea',

    // The data for our dataset
    data: {
      labels: ["Arabic", "English", "Turkish"],
      datasets: [
        {
          label: "Level",
          borderWidth: "0.5",
          backgroundColor: [
            ('rgba(240,95,64,0.9)'),
            ('rgba(240,95,64,0.7)'),
            ('rgba(240,95,64,0.4)')
          ],
          data: [10, 8, 2]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: true,
        position: "bottom"
      },
      title: {
        display: true,
        text: 'Language Skills',
        fontSize: 22,
        fontStyle: 'normal',
        padding: 20,
        fontFamily: PT_Serif
      },
      scale: {
        ticks: {
          display: false,
          beginAtZero: true,
          min: 0,
          max: 10,
          steps: 5,
          stepSize: 2
        },
        scaleLabel: {
          display: true
        }
      },
      tooltips: {
        displayColors: false
      },
    }
  });
}

/////////////////////////////////////////////
////////////// End of Functions /////////////
/////////////////////////////////////////////

});
