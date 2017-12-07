<?php
    $pageTitle = "Ibrahim Hasan – Projects";
    $style = 'href="css/style.css"';
    $styleHeaderFooter = 'href=""';
    $fontAwesome = 'href="../font-awesome/css/font-awesome.min.css"';
    $home = 'href="../index.php"';
    $resume = 'href="../resume/index.php"';
    $projects = 'href="index.php"';
    $contact = 'href="../contact/index.php"';
    $websiteIcon = 'href="../icons/icon.ico"';
    $homeActive = '';
    $resumeActive = '';
    $projectsActive = 'style="border-top:3px solid #22313F;color:#22313F;"';
    $contactActive = '';
    include("../includes/header.php");
?>
    <div class="container">
        <article class="content">
            <div class="projectsWord">My Projects!</div>
            <section class="bachelorProject">
                <h2>The Bachelor Project <span style="border-left:2px solid #145374;font-weight:500;">&nbsp;Integral LQR-Based 6DoFs Autonomous Quadcopter Balancing System Control</span></h2>
                <div class="projectContent">
                    <div class="image" id="tooltip"><span class="tooltiptext">Click on the image to download the full thesis.</span><a class="fancybox" rel="projectsGroup" href="../documents/Thesis.pdf" target="_blank"><img src="img/bi/cover-page.jpg" alt="Cover Page"></a></div>
                    <div class="abstract">
                        <h3>Abstract</h3>
                        <p>Recently, UAVs control has acquired significant attention due to its efficiency in various domains. Many researches have been carried out on Multirotor UAVs owing to its capabilities; the two most remarkable examples are: the vertical take-off and landing (VTOL) which eliminate the need for a runway, secondly, the Free Motion which means the ability to move freely in the Cartesian coordinate system i.e. performing linear motions along with x, y, and z axes; moreover, around them. This thesis presents an LQR-based 6DoFs control of unmanned aerial vehicles (UAVs), namely a small-scale quadcopter. Due to its high nonlinearity and a high degree of coupling system, the control of a UAV is very challenging. Quadcopter trajectory tracking in a 3D space is greatly affected by the quadcopter balancing around its roll-pitch-yaw frame. Lack of precise tracking control about the body frame may result in inaccurate localization with respect to a fixed frame. Thus, the present thesis provides a 'high dynamic control tracking balancing system' response. An integral-LQR-based controller is proposed to enhance the dynamic system response balancing on roll, pitch and yaw. The control on the hovering angles consists of two cascaded loops: an inner loop for the angular speed control of each angular motion around the body frame axes, and an outer loop for the desired position control. Practical results obtained from the developed control algorithm implemented utilizing ATMega 2560 coincides with the simulation results conducted from the developed nonlinear dynamic model of the UAV built-in C language. The proposed control approach exhibits fast control response and high disturbance rejection.</p>
                        <div style="height:30px;overflow:hidden">
                            <button class="moreOrLess" id="more">Read more? Click here.</button>
                            <button class="moreOrLess" id="less">Read less. <i class="fa fa-frown-o fa-lg" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="less">
                    <div style="overflow:hidden">
                        <h3>Team members:</h3>
                        <div class="teamImage"><a class="fancybox" rel="team" href="img\bi\teamMembers.jpg"><img src="img\bi\teamMembers.jpg" alt="The Team Members" /></a></div>
                        <div class="teamInfo">
                            <h4>Mr. Ammar Alsabbagh</h4>
                            <p>Mechatronics Engineer and Robotics Expert. Graduated in 2015 from the University of Aleppo.</p>
                            <h4>Mr. Ibrahim Hasan</h4>
                            <p>Mechatronics Engineer and Web Developer. Graduated in 2015 from the University of Aleppo.</p>
                            <h4>Mr. Mouaz Alkouzbary</h4>
                            <p>Mechatronics engineer, graduated in 2015 from the University of Aleppo. Master Philosophy candidate and member of the research group at the center of applied biomechanics at the University of Malaya.</p>
                        </div>
                    </div>
                    <div class="paper">
                        <h3>Published Paper:</h3>
                        <p><strong>Title:</strong> Integral LQR-Based 6DoF Autonomous Quadrocopter Balancing System Control
                           <br><strong>Authers:</strong> Dr. A. Joukhadar, I. Hasan, A. Al-Sabbagh, M. Alkouzbary
                           <br><strong>Journal & Issue:</strong> International Journal of Advanced Research in Artificial Intelligence, Vol. 4, No.5, 2015, pp. 18 – 25. To download it, click <a href="../documents/Paper.pdf" target="_blank" style="color:blue;text-decoration:underline;font-style:normal">HERE</a>
                        </p>
                    </div>
                    <div>
                        <h3>Project Videos:</h3>
                        <div class="videos">
                            <ul>
                                <li>
                                    <iframe width="360" height="220" src="https://www.youtube.com/embed/I2aQ-N7zVv0" frameborder="0" allowfullscreen></iframe>
                                    <p style="padding:0 10px"><strong>Roll Response - with Disturbance</strong><br>
                                        The new control system was tested after applying a 200-gram disturbance. The controller successfully balanced the quadcopter regardless the disturbance.
                                    </p>
                                </li>
                                <li>
                                    <iframe width="360" height="220" src="https://www.youtube.com/embed/k-ydMndgY1k" frameborder="0" allowfullscreen></iframe>
                                    <p style="padding:0 10px"><strong>Roll Response - Large Angles Commands</strong><br>
                                        In this video, the control of roll angle (around x axis) was tested. The commands had been given using a personal computer wirelessly by a Bluetooth module.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <iframe width="360" height="220" src="https://www.youtube.com/embed/8br-BF-uVG0" frameborder="0" allowfullscreen></iframe>
                                    <p style="padding:0 10px"><strong>Yaw Response</strong><br>
                                        Control of Yaw angle (around z axis) and sending the commands wirelessly.
                                    </p>
                                </li>
                                <li>
                                    <iframe width="360" height="220" src="https://www.youtube.com/embed/nCt7unKKzGY" frameborder="0" allowfullscreen></iframe>
                                    <p style="padding:0 10px"><strong>Roll Response - Pitch Joystick</strong><br>
                                        In this video, the commands of the desired angle were given by a joystick with RF technology.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <iframe width="360" height="220" src="https://www.youtube.com/embed/HJRItLoo23k" frameborder="0" allowfullscreen></iframe>
                                    <p style="padding:0 10px"><strong>Attitude Control</strong><br>
                                        This video shows the stability of the quadcopter after im-plementing three control systems to control Euler angles with high dynamic performance, and the response of the quadcopter under the control of the three balancing angles.
                                    </p>
                                </li>
                                <li class="none"></li>
                            </ul>
                        </div>
                        <h3>Posters:</h3>
                        <div class="posters">
                            <div class="poster1" id="tooltip">
                                <span class="tooltiptext">Click on the image to download this poster.</span><a class="fancybox" rel="projectsGroup" href="../documents/First%20Poster.pdf" target="_blank"><img src="img/tn/image-07.jpg" alt="First Poster"></a>
                                <p style="padding:0 10px;text-indent:15px">This poster was made as a brief introduction to understanding the quadcopter and the most significant concepts.</p>
                            </div>
                            <div class="poster2" id="tooltip2">
                                <span class="tooltiptext2">Click on the image to download this poster.</span><a class="fancybox" rel="projectsGroup" href="../documents/Second%20Poster.pdf" target="_blank"><img src="img/tn/image-08.jpg" alt="Second Poster"></a>
                                <p style="padding:0 10px;text-indent:15px">This poster was made afterwards to state the final results of the graduation project. It contains the practical and simulation results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="solidWorksProjects" style="background-color:#AACFD0">
                <h2>3D Mechanical Designs for Different Purposes</h2>
                <p>The designs below were carefully created to match certain objects and be applicable for many subsequent desires. The program used to design them is Solidworks.</p>
                <div class="thumbnails">
                    <ul>
                        <li><a class="fancybox" rel="solidworks" href="img\bi\image-01.jpg"><img src="img\tn\image-01.jpg" alt="" /></a></li>
                        <li><a class="fancybox" rel="solidworks" href="img\bi\image-02.jpg"><img src="img\tn\image-02.jpg" alt="" /></a></li><li><a class="fancybox" rel="solidworks" href="img\bi\image-03.jpg"><img src="img\tn\image-03.jpg" alt="" /></a></li>
                    </ul>
                    <ul>
                        <li><a class="fancybox" rel="solidworks" href="img\bi\image-04.jpg"><img src="img\tn\image-04.jpg" alt="" /></a></li>
                        <li><a class="fancybox" rel="solidworks" href="img\bi\image-05.jpg"><img src="img\tn\image-05.jpg" alt="" /></a></li>
                        <li><a class="fancybox" rel="solidworks" href="img\bi\image-06.jpg"><img src="img\tn\image-06.jpg" alt="" /></a></li>
                    </ul>
                </div>
            </section>
        </article>
    </div>

<?php include("../includes/footer.html")?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- fancyBox -->
<script type="text/javascript" src="../source/jquery.fancybox.pack.js"></script>
<!-- Header Shrinks On Scroll -->
<script type="text/javascript" src="../js/plugins.js"></script>
</body>
</html>
