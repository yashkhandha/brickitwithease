<?php
//session_start();
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>About - Brick it with ease</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files
    ================================================== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!--slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
    <!-- main css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- MD bootstrap css file  -->
    <link href="css/mdb.min.css" rel="stylesheet">
</head>
<body style="background-color: #1501010f">
<!--
==================================================
Header Section Start
==================================================
 -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- logo -->
            <div class="navbar-brand">
                <a href="index.php">
                    <img src="images/downloaded/logo-onecolor-edited-white.png" alt="" class="project-logo">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" style="font-weight: bold">Home</a>
                    </li>
                    <!--<li><`a href="about.html">About</a></li>-->
                    <li><a href="exercise.php" style="font-weight: bold">Exercises</a></li>
                    <li><a href="painandease.php" style="font-weight: bold">Pain and ease</a></li>
                    <li><a href="maps.php" style="font-weight: bold">Find places</a></li>
                    <li><a href="planner.php" style="font-weight: bold">Planner</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> My Account <span
                                    class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo '
                                        <li><a href="login.php">Dashboard</a></li>
                                        <li><form name="logout-form" action="includes/logout.inc.php" method="post">
                                    <li><a href="#" onclick="document.forms[0].submit()">Log out</a></li>
                                    </form> </li>
                                    <li><a href="about.php">About us</a></li>';
                                } else {
                                    echo '
                                   
                                        <li><a href="login.php">Log in</a></li>
                                        <li><a href="about.php">About us</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--
==================================================
    Global Page Section Start
==================================================
-->
<section class="global-page-header" style="background: #4b3434;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="wow fadeInDown">Meet our team</h2>
                    <ol class="breadcrumb wow fadeInUp" style="font-family: Arial, sans-serif; font-size: 20px;">
                        <li class="active" style="line-height: 1.5;">We are all very different. We were born in
                            different cities, at different times,
                            we love different music, food, movies. <br>But we have something that unites us all.
                            It is our project.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
================================================== 
    Application Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-1 wow fadeInRight" data-wow-duration="700ms" data-wow-delay=".3s">
                <h2>
                    Why Are We Here
                </h2><br>
                <p>
                    In Victoria, 1 in 6 people have Arthritis. Yes, that is true indeed ! Also, Bricklayers have three
                    times the risk of developing rheumatoid
                    arthritis<br><br>Recent studies suggest that the people suffering from arthritis are lacking proper
                    care for their pain,
                    and the brickies have a vey busy work schedule in the week, leading to lack of proper exercise and
                    fitness<br><br>
                    We are here to help them ease their arthritis pain with some suggested exercises and sport
                    activities for them
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInRight" data-wow-duration="700ms" data-wow-delay=".5s">
                <h2 class="item_title">
                    What you get
                </h2><br>
                <p>
                    Planner for your activities with customized features for better user experience.
                    Also get email reminders for activities added in the planner<br><br>
                    Location finder for the suggested sport activities for arthritis pain<br><br>
                    Statistics to understand what exercise is best for easing your pain<br><br>
                    Some useful information and resources about what is arthritis and pain related to it
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInRight" data-wow-duration="700ms" data-wow-delay=".7s">
                <h2 class="item_title">
                    Why Choose Us
                </h2><br>
                <p>
                    Surely there are applications already on the web to provide with details about arthritis and ways to
                    ease the pain.
                    Also, finding sport facilities is easier to find using the google maps
                    <br><br> We bring to you a application which is one place for everything.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 wow fadeInDown" style="text-align: center">
                <h2 class="subtitle text-center">Team Pretty Pretty</h2>
                <img src="images/downloaded/logo_edited.png"><br>
                <p style="font-size: 20px;color: #4993ca; font-weight: 700;">Live in your pretty pretty, play in
                    ours</p>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="images/downloaded/yash2.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Yash Khandha</h3>
                    <p class="team_designation">Developer</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.linkedin.com/in/yash-khandha-b321b322/" target="_blank"><i
                                    class="ion-social-linkedin-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="images/downloaded/yolanda2.png" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Xinrui Cheng</h3>
                    <p class="team_designation">Data Scientist</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="images/downloaded/yichen2.png" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Yichen Sun</h3>
                    <p class="team_designation">Network and Security</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="images/downloaded/mario3.png" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Lei Tan</h3>
                    <p class="team_designation">Business Analyst</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
Call To Action Section Start
================================================== -->
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Start exercising
                        today</h2>
                    <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Take care of your body.
                        Plan with us to help ease your pain</p>
                    <!--<a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact</a><br><br>-->
                </div>
            </div>
        </div>
        <br>
        <a href="planner.php" class="btn btn-deep-orange btn-contact wow fadeInDown" data-wow-delay=".7s"
           data-wow-duration="500ms" style="font-family: Arial, sans-serif"><b>Personalised Planner</b></a>
    </div>
</section>

<!--
==================================================
Footer Section Start
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="">
            <p class="copyright" style="text-align: center">&copy; Copyright: <span><script>document.write(new Date().getFullYear())</script></span>
                Design and Developed by <b>Team Pretty Pretty</b><br>
            </p>
        </div>
    </div>
    </div>
</footer>

<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="plugins/form-validation/jquery.form.js"></script>
<script src="plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- wow js -->
<script src="plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="plugins/slider/slider.js"></script>
<!-- Fancybox -->
<script src="plugins/facncybox/jquery.fancybox.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>