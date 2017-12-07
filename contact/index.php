<?php
    $pageTitle = "Ibrahim Hasan – Contact";
    $style = 'href="css/style.css"';
    $styleHeaderFooter = 'href=""';
    $fontAwesome = 'href="../font-awesome/css/font-awesome.min.css"';
    $home = 'href="../index.php"';
    $resume = 'href="../resume/index.php"';
    $projects = 'href="../projects/index.php"';
    $contact = 'href="index.php"';
    $websiteIcon = 'href="../icons/icon.ico"';
    $homeActive = '';
    $resumeActive = '';
    $projectsActive = '';
    $contactActive = 'style="border-top:3px solid #22313F;color:#22313F;"';
    include("../includes/header.php");
?>
    <div class="container">
        <article class="content">
            <div class="contactWord">Contact</div>
            <form class="contactForm" action="contact.php" method="post">
                <div class="contactInfo">
                    <input class="input" type="text" name="cf_name" placeholder="Name" maxlength="35" required="" dir="auto">
                    <input class="input" type="email" name="cf_email" placeholder="Email" maxlength="35" required="" dir="auto">
                    <input class="input" type="text" name="cf_subject" placeholder="Subject" maxlength="35" dir="auto">
                </div>
                <div class="message">
                    <textarea name="cf_message" placeholder="Message" required="" dir="auto"></textarea>
                </div>
                <div class="submitClear">
                        <div class="floatRight">
                            <input class="submit" type="submit" value="Send">
                            <input class="clear" type="reset" value="Clear">
                        </div>
                </div>
            </form>
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
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<!-- Header Shrinks On Scroll -->
<script type="text/javascript" src="../js/plugins.js"></script>
</body>
</html>
