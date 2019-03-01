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
    <title>Statistics - Brick it with ease</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>


<!--
==================================================
Header Section Start
================================================== -->
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
            <!-- /responsive nav button -->
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
        <!-- /main nav -->
    </div>
</header>



<!--
==================================================
    Global Page Section Start
================================================== -->

<section class="global-page-header" style="background: #4b3434">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 id="heading">Activities best for you</h2>
                    <ol class="breadcrumb">
                        <li class="active" id="subheading" style="font-size: large">Select your pain area or favourte activity and check what is the best for you</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="call-to-action">
    <div class="container">
        <nav class="navbar navbar-default" style="width: 1000px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h3 style="padding-top: 15px;font-weight: bold">Directions on how to use the graph</h3><br>
                    <h5 style="font-weight: bold">
                        <ol style="padding-left: 15px;line-height: 1.5">
                            <li>
                                The height of the bar represents the effectiveness of the exercise in relieving body pain
                            </li>
                            <li>
                                Click on the legend on the right (select/ deselect), to compare two or more categories
                            </li>
                        </ol>
                    </h5>
                </div>
            </div>
        </nav><br>
        <nav class="navbar navbar-default" style="width: 1000px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h4 style="padding-top: 15px;font-weight: bold;line-height: 1.5;">Select your pain area below and
                        decide which activity to start with. This will help you decide
                        on your activities to ease your arthritis pain</h4>
                </div>
            </div>
        </nav><br>
        <div class="graph1">
<!--            <a href="https://plot.ly/~yolandaaimili/3/?share_key=3oLW2Ldug6Bsa65hgm4d02" target="_blank"-->
<!--               title="update_button" style="display: block; text-align: center;">-->
<!--                <img src="https://plot.ly/~yolandaaimili/3.png?share_key=3oLW2Ldug6Bsa65hgm4d02"-->
<!--                     alt="update_button" style="max-width: 100%;width: 800px;"  width="600" height="200"-->
<!--                     onerror="this.onerror=null;this.src='https://plot.ly/404.png';" /></a>-->
<!--            <script data-plotly="yolandaaimili:3" sharekey-plotly="3oLW2Ldug6Bsa65hgm4d02&link=false"-->
<!--                    src="https://plot.ly/embed.js" async>-->
<!--            </script>-->

            <a href="https://plot.ly/~yolandaaimili/3/?share_key=3oLW2Ldug6Bsa65hgm4d02" target="_blank"
               title="update_button" style="display: block; text-align: center;">
                <img src="https://plot.ly/~yolandaaimili/3.png?share_key=3oLW2Ldug6Bsa65hgm4d02" alt="update_button"
                     style="max-width: 100%;width: 800px;"  width="600" height="100"
                     onerror="this.onerror=null;this.src='https://plot.ly/404.png';" /></a>
                <script data-plotly="yolandaaimili:3" sharekey-plotly="3oLW2Ldug6Bsa65hgm4d02&link=false"
                        src="https://plot.ly/embed.js" async>

                </script>

<!--            <a href="https://plot.ly/~yolandaaimili/3/?share_key=3oLW2Ldug6Bsa65hgm4d02"-->
<!--               target="_blank" title="update_button" style="display: block; text-align: center;">-->
<!--            <img src="https://plot.ly/~yolandaaimili/3.png?share_key=3oLW2Ldug6Bsa65hgm4d02"-->
<!--                 alt="update_button" style="max-width: 100%; width: 600px;"  width="600"-->
<!--                 onerror="this.onerror=null;this.src='https://plot.ly/404.png';" /></a>-->
<!--            <script data-plotly=“yolandaaimili:3" sharekey-plotly="3oLW2Ldug6Bsa65hgm4d02&link=false" src="https://plot.ly/embed.js" async></script>-->

        </div>
        <nav class="navbar navbar-default" style="margin-top: 50px;width: 1000px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h4 style="text-align: center;padding-top: 15px;font-weight: bold">Select one activity below and see how effective it is
                        in easing your pain and working efficiently.</h4>
                </div>
            </div>
        </nav><br>
        <div class="graph1">
            <a href="https://plot.ly/~yolandaaimili/18/?share_key=j7Deaoogb4ypFtW3KaCaCA" target="_blank" title="update_button2" style="display: block; text-align: center;"><img src="https://plot.ly/~yolandaaimili/18.png?share_key=j7Deaoogb4ypFtW3KaCaCA" alt="update_button2" style="max-width: 100%;width: 600px;"  width="600" onerror="this.onerror=null;this.src='https://plot.ly/404.png';" /></a>
            <script data-plotly="yolandaaimili:18" sharekey-plotly="j7Deaoogb4ypFtW3KaCaCA&link=false" src="https://plot.ly/embed.js" async></script>
        </div>
    </div>
</section>

<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Start exercising
                        today</h2>
                    <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Take care of your body.
                        Plan with us to help ease your pain</p>
                </div>
            </div>
        </div><br>
        <a href="planner.php" class="btn btn-deep-orange btn-contact wow fadeInDown" data-wow-delay=".7s"
           data-wow-duration="500ms" style="font-family: Arial, sans-serif"><b>Personalised Planner</b></a>
    </div>
</section>

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
<!-- template main js -->
<script src="js/main.js"></script>
</body>
</html>