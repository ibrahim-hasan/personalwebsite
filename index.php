<?php require('header.php'); ?>

<!-- About Me Section -->
<section id="aboutMe" class="about-me calc-height d-flex align-items-center py-5 py-lg-0" style="overflow: hidden">
  <div>
    <div class="row justify-content-left align-items-center">
      <div class="mx-lg-0 mx-auto col-lg-4 col-6 main-image mt-5 mt-lg-0 p-lg-0 pb-3 d-block">
        <img class="img-fluid d-lg-block d-none" src="img/ibrahimhasan.jpg" alt="Personal Photo">
        <img class="img-fluid rounded-circle img-thumbnail d-lg-none d-block" src="img/ibrahimhasan-rounded.jpg" alt="Personal Photo">
      </div>
      <div class="px-4 px-md-5 row col-lg-8 col-12">
        <h1 class="section-heading">Who am I?</h1>
        <p class="summary text-justify">Here is some background information about me: I am Ibrahim from Syria.
        I am a mechatronics engineer, graduated in 2015.
        I have an ambition, and in order to fulfill it, I have to work hard, think smart,
        and improve myself. My mother tongue is Arabic, and I am fluent in English.
        I am an excellent computer user. Recently, I have become interested in web development;
        in fact, this website is my first project as a front-end web developer, and it was designed
        using HTML5, CSS3, jQuery Library and some PHP. Presently, my brief knowledge about back-end
        web development needs to be broadened, thus I am learning PHP.</p>
        <hr>
        <div class="col-12 text-center">
          <a class="btn btn-outline-primary btn-lg btn-services" href="#services" role="button">Click me for more!</a>
        </div>
      </div><!-- End of Nested Row -->
    </div><!-- End of Row -->
  </div><!-- End of Container -->
</section><!-- End of About Me Section -->

<!-- Services Section -->
<section id="services" class="services calc-height feature-box d-flex align-items-center py-5 py-lg-0">
  <div class="container">
    <h1 class="section-heading mt-5 mt-lg-0">What can I do for you?</h1>
    <p class="section-description lead mr-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <div class="row">
      <div class="col-lg-4">
        <div class="service-heading">
          <i class="fa fa-area-chart fa-5x fa-fw mb-2"></i>
          <h5 class="feature-title font-weight-bold">Analytics</h5>
        </div>
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
      </div>

      <div class="col-lg-4">
        <div class="service-heading">
          <i class="fa fa-book fa-5x fa-fw mb-2"></i>
          <h5 class="feature-title font-weight-bold">Tutorials</h5>
        </div>
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
      </div>

      <div class="col-lg-4">
        <div class="service-heading">
          <i class="fa fa-coffee fa-5x fa-fw mb-2"></i>
          <h5 class="feature-title font-weight-bold">Relax</h5>
        </div>
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
      </div>
    </div><!-- End of Row -->
  </div><!-- End of Container -->
</section><!-- End of Services Section -->

<!-- Projects Section -->
<section id="projects" class="projects clearfix">
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

<?php include('footer.php'); ?>
