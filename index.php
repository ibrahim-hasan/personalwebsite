<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="definition" content="Ibrahim Hasan - This is my personal blog.">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Different Title to Each Page -->
  <title>Home</title>
  <!-- Bootstrap Stylesheet CDN -->
  <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
  <!-- fontAwesome for Text Icons -->
  <link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css">
  <!-- Google Font for Brand Name -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Kaushan+Script|Open+Sans:400,400i,600,800" rel="stylesheet">
  <!-- My Custom Stylesheet -->
  <link rel="stylesheet" href="css/style.min.css">
  <!-- Animate.css javascript Plugin -->
  <link rel="stylesheet" href="src/animate.css/animate.min.css">
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <nav id="navbar" class="bg-dark navbar-transparent navbar navbar-expand-md navbar-dark animated fadeIn">
      <div class="container">
        <a class="navbar-brand animated pulse infinite d-sm-block d-none" href="index.php" id="navbar-brand">Ibrahim Hasan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li id="onHome" class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li id="onAboutMe" class="nav-item">
              <a class="nav-link" href="#aboutMe">About Me</a>
            </li>
            <li id="onServices" class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li id="onProjects" class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
          </ul>
        </div><!-- End of Collapse -->
      </div>
    </nav>

    <!-- Header -->
    <header id="home" class="header calc-height container-fluid d-flex align-items-center justify-content-center">
      <div class="row">
        <div class="col-lg-12">
          <span class="occupation text-center">Mechatronics Engineer & Web Developer</span>
          <h1 class="my-name display-3">Ibrahim Hasan</h1>
          <hr>
          <p class="text-center">
            Thank you for visiting my website. Please continue your journey.
            I promise you, you will not regret it!</p>
          <br>
          <a class="btn btn-outline-info btn-lg btn-about" href="#aboutMe">Want to know me more?</a>
        </div>
      </div><!-- End of Row -->
    </header><!-- End of Header -->

    <!-- About Me Section -->
    <section id="aboutMe" class="about-me calc-height d-flex align-items-center py-5 py-lg-0">
      <div class="container">
        <div class="row justify-content-around align-items-center">
          <div class="col-lg-4 col-6 main-image mt-5 mt-lg-0 pb-3">
              <img class="img-fluid img-thumbnail d-lg-block d-none" src="img/ibrahimhasan.jpg" alt="Personal Photo">
              <img class="img-fluid rounded-circle img-thumbnail d-lg-none d-block" src="img/ibrahimhasan-rounded.jpg" alt="Personal Photo">
          </div>
          <div class="row col-lg-7 col-12">
            <h1 class="section-heading text-light">Who am I?</h1>
            <p class="summary text-light text-justify">Here is some background information about me: I am Ibrahim from Syria.
            I am a mechatronics engineer, graduated in 2015.
            I have an ambition, and in order to fulfill it, I have to work hard, think smart,
            and improve myself. My mother tongue is Arabic, and I am fluent in English.
            I am an excellent computer user. Recently, I have become interested in web development;
            in fact, this website is my first project as a front-end web developer, and it was designed
            using HTML5, CSS3, jQuery Library and some PHP. Presently, my brief knowledge about back-end
            web development needs to be broadened, thus I am learning PHP.</p>
            <hr>
            <div class="col-12 text-center">
              <a class="btn btn-outline-warning btn-services" href="#" role="button">Click me for more!</a>
            </div>
          </div><!-- End of Nested Row -->
        </div><!-- End of Row -->
      </div><!-- End of Container -->
    </section><!-- End of About Me Section -->

    <!-- Services Section -->
    <section id="services" class="services calc-height feature-box d-flex align-items-center py-5 py-lg-0">
      <div class="container">
        <h1 class="section-heading mt-5 mt-lg-0">What can I do for you?</h1>
        <p class="section-description lead mr-auto text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <div class="row">
            <div class="col-lg-4">
              <div class="service-heading">
                <i class="fa fa-area-chart"></i>
                <h5 class="feature-title font-weight-bold">Analytics</h5>
              </div>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
            </div>

            <div class="col-lg-4">
              <div class="service-heading">
                <i class="fa fa-book"></i>
                <h5 class="feature-title font-weight-bold">Tutorials</h5>
              </div>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
            </div>

            <div class="col-lg-4">
              <div class="service-heading">
                <i class="fa fa-coffee"></i>
                <h5 class="feature-title font-weight-bold">Relax</h5>
              </div>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
            </div>
        </div><!-- End of Row -->
      </div><!-- End of Container -->
    </section><!-- End of Services Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects container-fluid clearfix">
      <div class="row no-gutter">

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="finished-project">
              <img class="" src="img/projects/project-1.jpg" alt="">
              <div class="overlay">
                <h1>My Personal Website</h1>
        				<p>HTML, SASS, Bootstrap, jQuery, Smooth Scroll, Animate.css, Wow.js, PHP</p>
              </div>
            </a>
          </div>
        </div>

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="unfinished-project">
              <img class="img-fluid" src="img/projects/project-2.jpg" alt="">
              <div class="overlay">
                <h1>Project 2</h1>
        				<p>Description Here.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="unfinished-project">
              <img class="img-fluid" src="img/projects/project-3.jpg" alt="">
              <div class="overlay">
                <h1>Project 3</h1>
        				<p>Description Here.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="unfinished-project">
              <img class="img-fluid" src="img/projects/project-4.jpg" alt="">
              <div class="overlay">
                <h1>Project 4</h1>
        				<p>Description Here.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="unfinished-project">
              <img class="img-fluid" src="img/projects/project-5.jpg" alt="">
              <div class="overlay">
                <h1>Project 5</h1>
        				<p>Description Here.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="project col-lg-4 col-md-6 col-sm-12">
          <div class="hovereffect">
            <a href="#" class="unfinished-project">
              <img class="img-fluid" src="img/projects/project-6.jpg" alt="">
              <div class="overlay">
                <h1>Project 6</h1>
        				<p>Description Here.</p>
              </div>
            </a>
          </div>
        </div>

      </div><!-- End of Row -->
    </section><!-- End of Projects Section -->

    <!--Footer-->
    <footer class="footer">
      <div class="socials container">
        <div class="socials">
          <ul>
            <!--Facebook-->
            <li class="list-item"><a class="facebook" href="https://www.facebook.com/ibrahimhasan1990" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
            <!--Skype-->
            <li class="list-item"><a class="skype" href="tel: (+90) 531 959 1332"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a></li>
            <!--Linkedin-->
            <li class="list-item"><a class="linkedin" href="https://tr.linkedin.com/in/ibrahim-hasan-9a0b24121" target="_blank"><i class="fa fa-linkedin-square fa-2x"> </i></a></li>
            <!--Email-->
            <li class="list-item"><a class="email" href="mailto: ibrahim_hasan_eng@hotmail.com"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a></li>
            <!--Phone Number-->
            <li class="list-item"><a class="phone" href="tel: (+90) 531 959 1332"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i></a></li>
          </ul>
        </div><!-- End of Socials -->
      </div><!-- End of Container -->
      <!--Copyright-->
      <div class="copyright">
          <p class="text-center">
            Copyright &copy; 2018 by Ibrahim Hasan. All Rights Reserved.
          </p>
      </div><!-- End of Copyright -->
    </footer>
      <!--/Footer-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="src/jquery/jquery.min.js"></script>
    <script src="src/jquery-smooth-scroll/jquery.smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.min.js"></script>
  </body>
</html>
