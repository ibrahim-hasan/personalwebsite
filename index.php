<?php require('header.php');

// Calculate the difference between the current date and a specified one.
function dateDiff($start_date, $addMonths = true, $addYears = true) {

  $current_date = date('Y-m-d');
  $d1 = strtotime($start_date);
  $d2 = strtotime($current_date);
  $inMonths = 0;
  $inYears = 0;
  $years = '';
  $addAnd = '';
  $months = '';

  while (($d1 = strtotime("+1 MONTH", $d1)) <= $d2) {
    $inMonths++;
    if ($addYears && $inMonths >= 12) {
      $inYears++;
      $inMonths = 0;
    }
  }

  if($addMonths) {
    if($inMonths == 0) {
      $months = '';
    } else if($inMonths == 1) {
      $months = $inMonths . ' month';
    } else {
      $months = $inMonths . ' months';
    }
  }

  if($addYears) {

    if($inYears == 0) {
      $years = '';
    } else if($inYears == 1) {
      $years = $inYears . ' year';
    } else {
      $years = $inYears . ' years';
    }
  }

  if($addMonths && $addYears) {
    if($inYears != 0 && $inMonths != 0) {
      $addAnd = ' and ';
    } else {
      $addAnd = '';
    }
  }
  return $years . $addAnd . $months;
}

?>

<!-- Scroll-to-top Button -->
<a href="#" id="btnTop" class="btn-top btn btn-sq btn-outline-primary animated" role="button">
    <i class="fa fa-chevron-up fa-1x"></i>
</a>

<!-- About Me Section -->
<section id="aboutMe" class="about-me align-items-center" style="overflow: hidden">
  <!-- About Me Row -->
  <div class="row calc-height justify-content-left align-items-center py-5 py-lg-0">
    <div class="mx-lg-0 mx-auto col-lg-4 col-6 main-image p-lg-0 pb-3 d-block">
      <img class="img-fluid" src="img/ibrahimhasan.jpg" alt="Personal Photo">
    </div>
    <div class="px-4 px-md-5 row col-lg-8 col-12">
      <h1 class="section-heading">Who am I?</h1>
      <p class="summary text-justify">
        I am Ibrahim&#8212;<em>I bet you've already got that, since it's written everywhere</em> <i class="fa fa-smile-o" aria-hidden="true"></i>; <?php echo dateDiff("1990-03-07", false, true); ?> old.
        I'm a mechatronics engineer and a web developer with excellent computer skills.
        My mother tongue is Arabic, and I am fluent in English.<br>
        I've started my web development journey <?php echo dateDiff("2017-11-01"); ?> ago.
        This website is my first project as a web developer.
        It's a long way to go; nevertheless, I would love to go farther.
        <br>
        Enough talking about myself. I'll let you explore my website by yourself.
        Please feel free contact me and let's discuss possible work. I look forward to that!
      </p>
      <hr>
      <div class="col-12 text-center">
        <a class="btn btn-outline-primary btn-lg btn-skills" href="#skills" role="button">Learn more about me!</a>
      </div>
    </div><!-- End of Nested Row -->
  </div><!-- End of Row -->

  <!-- Skills Row -->
  <div id="skills" class="row skills d-flex flex-column justify-content-between align-items-center">
    <div class="default-headeing row d-flex justify-content-center align-items-center">
      <h2>Here you can see my career-related skills. Take a look!</h2>
    </div>
    <div class="row container-fluid d-flex justify-content-center align-items-center">
      <div class="col-lg-4 col-md-8 col-12 my-3 my-lg-5">
        <canvas id="web" width="450" height="350"></canvas>
      </div>
      <div class="col-lg-4 col-md-8 col-12 my-3 my-lg-5">
        <canvas id="computer" width="350" height="350"></canvas>
      </div>
      <div class="col-lg-4 col-md-8 col-sm-12 col-8 my-3 my-lg-5">
        <canvas id="languages" width="350" height="350"></canvas>
      </div>
    </div><!-- End of Nested Row -->
  </div><!-- End of Skills Row -->
</section><!-- End of About Me Section -->

<!-- Services Section -->
<section id="services" class="services calc-height feature-box d-flex align-items-center py-5 py-lg-0">
  <div class="container-fluid">
    <h1 class="section-heading">What can I do for you?</h1>
    <p class="section-description lead mr-auto">
      I reduced the number of services I provide in order to concentrate on what I love to do.
      I'm sure you won't regret asking me for help.
    </p>
    <div class="row align-self-start">

      <div class="col-lg-4">
        <div class="service-heading">
          <div class="mx-auto d-flex align-items-center justify-content-center">
            <img style="height: 140px;" class="img-fluid" src="img/services/web-development.png" alt="Web Development Icon">
          </div>
          <h5 class="feature-title font-weight-bold text-left mt-3">Web Development</h5>
        </div>
        <p class="lead text-left">
          I hope you like your journey on my website. Well, this is definitely not everything I know. I'm saving the best for you!
        </p>
      </div>

      <div class="col-lg-4">
        <div class="service-heading">
          <div class="mx-auto d-flex align-items-center justify-content-center">
            <img style="height: 140px;" class="img-fluid" src="img/services/en-ar.png" alt="Translation Icon">
          </div>
          <h5 class="feature-title font-weight-bold text-left mt-3">English/Arabic Translation</h5>
        </div>
        <p class="lead text-left">
          With <?php echo dateDiff("2016-06-01"); ?> of experience in this domain. I gladly offer you my service as a freelance translator when and as needed.
          I have an IELTS certificate.
        </p>
      </div>

      <div class="col-lg-4">
        <div class="service-heading">
          <div class="mx-auto d-flex align-items-center justify-content-center">
            <img style="height: 100px; margin: 20px 0;" class="img-fluid" src="img/services/solidworks.png" alt="SolidWorks Icon">
          </div>
          <h5 class="feature-title font-weight-bold text-left mt-3">SolidWorks</h5>
        </div>
        <p class="lead text-left">SolidWorks is a 3D Modeling CAD and Product Design Software. Guess what! I'm competent when it comes to SolidWorks, and I have <?php echo dateDiff("2017-08-01"); ?> of work experience so far.</p>
      </div>

    </div><!-- End of Row -->
  </div><!-- End of Container -->
</section><!-- End of Services Section -->

<!-- Projects Section -->
<section id="projects" class="projects clearfix">
  <div class="default-headeing row d-flex justify-content-center align-items-center">
    <h2>Here are my projects. Have a look!</h2>
  </div>
  <div class="row no-gutter">

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="finished-project">
          <img class="" src="img/projects/project-1.jpg" alt="Project 1 Image">
          <div class="overlay">
            <h1>My Personal Website</h1>
    				<p>HTML, SASS, Bootstrap, jQuery, Smooth Scroll, Animate.css, Chart.js, PHP</p>
          </div>
        </a>
      </div>
    </div>

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="unfinished-project">
          <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project 2 Image">
          <div class="overlay">
            <h1>Project 2: Coming soon!</h1>
    				<p>This is a placeholder which has my future company's logo, 6S Company. The logo is designed by: KaisCo.dk</p>
          </div>
        </a>
      </div>
    </div>

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="unfinished-project">
          <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project 3 Image">
          <div class="overlay">
            <h1>Project 3</h1>
    				<p>This is a placeholder which has my future company's logo, 6S Company. The logo is designed by: KaisCo.dk</p>
          </div>
        </a>
      </div>
    </div>

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="unfinished-project">
          <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project 4 Image">
          <div class="overlay">
            <h1>Project 4</h1>
    				<p>This is a placeholder which has my future company's logo, 6S Company. The logo is designed by: KaisCo.dk</p>
          </div>
        </a>
      </div>
    </div>

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="unfinished-project">
          <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project 5 Image">
          <div class="overlay">
            <h1>Project 5</h1>
    				<p>This is a placeholder which has my future company's logo, 6S Company. The logo is designed by: KaisCo.dk</p>
          </div>
        </a>
      </div>
    </div>

    <div class="project col-lg-4 col-md-6 col-sm-12">
      <div class="hovereffect">
        <a href="#" class="unfinished-project">
          <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project 6 Image">
          <div class="overlay">
            <h1>Project 6</h1>
    				<p>This is a placeholder which has my future company's logo, 6S Company. The logo is designed by: KaisCo.dk</p>
          </div>
        </a>
      </div>
    </div>

  </div><!-- End of Row -->
</section><!-- End of Projects Section -->

<?php include('footer.php'); ?>
