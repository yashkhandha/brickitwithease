<?php
//session_start();
//?>

<?php //include 'includes/signup.inc.php' ?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Dashboard - Brick it with ease</title>
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
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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
                    <h2 id="heading">Plan your exercises with us</h2>
                    <ol class="breadcrumb">
                        <li class="active" id="subheading" style="font-size: large">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

//Signup
if(isset($_GET['signup'])) {
    if($_GET['signup'] == 'userTaken'){
        echo '<div class="alert alert-danger" role="alert" style="text-align: center;margin-bottom: 0px;">
            You are already registerd with this email address.  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['signup'] == 'invalidName'){
        echo '<div class="alert alert-danger" role="alert" style="text-align: center;margin-bottom: 0px;">
            Registration failed! Please enter valid characters in first and last name  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['signup'] == 'invalidEmail'){
        echo '<div class="alert alert-danger" role="alert" style="text-align: center;margin-bottom: 0px;">
            Please enter valid email adddress  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['signup'] == 'success'){
        echo '<div class="alert alert-success" role="alert" style="text-align: center;margin-bottom: 0px;">
            You have successfully registered. Please verify your email in your email account before login. Cheers !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        echo '<div class="alert alert-warning" role="alert" style="text-align: center;margin-bottom: 0px;">
            It might be in your spam folder as well !!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['signup'] == 'mailNotSent'){
        echo '<div class="alert alert-danger" role="alert" style="text-align: center;margin-bottom: 0px;">
            mail not sent <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else if($_GET['signup'] == 'emailVerified'){
        echo '<div class="alert alert-success" role="alert" style="text-align: center;margin-bottom: 0px;">
            Email is verified. You are set to login now <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}

//Login
if (isset($_GET['login'])){
if ($_GET['login'] == 'success'){
    echo '<div class="alert alert-success" role="alert" style="text-align: center;margin-bottom: 0px;">
  You have successfully logged in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if ($_GET['login'] == 'emailNotVerified'){
    echo '<div class="alert alert-warning" role="alert" style="text-align: center;margin-bottom: 0px;">
  Please verify your email before logging in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else {
    echo '<div class="alert alert-warning" role="alert" style="text-align: center;margin-bottom: 0px;">
  Please check your credentials & try again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}}
?>
<!--=============================================
=            Blog With Right Sidebar            =
==============================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <article class="wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1000ms">
                    <div class="blog-post-image">
                        <img class="img-responsive" src="images/downloaded/exercise.gif"/>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title" style="padding-top: 20px;">
                            Space shouldn’t be the final frontier</h2>
                        <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<p style="padding-top: 20px;">You are set to go now... </p><a href="planner.php" class="btn btn-deep-purple btn-details">Click here to add activities to your planner</a>';
                        } else {
                            echo '<p style="padding-top: 20px;">Sign in and start planning whats best for you </p>';
                        }


                        ?>

                    </div>

                </article>
<!--                    <div class="text-center">-->
<!--                        <button class="btn btn-purple" type="button" id="progressButton2" style="font-family: Arial, sans-serif">Check your progress</button>-->
<!--                    </div>-->
<!---->
<!--                <div class="modal fade" id="progressModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!---->
<!--                    <!-- Change class .modal-sm to change the size of the modal -->
<!--                    <div class="modal-dialog modal-lg" role="document">-->
<!---->
<!---->
<!--                        <div class="modal-content">-->
<!--                            <div class="modal-header">-->
<!--                                <h2 class="modal-title" id="modal-title" style="text-align: center">Your progress</h2>-->
<!--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                    <!--                            <span aria-hidden="true">&times;</span>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            <div class="modal-body">-->
<!--                                <div class="chart-container">-->
<!--                                    <canvas id="line-chartcanvas"></canvas>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="modal-footer">-->
<!--                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" id="closeProgress2">Close</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

            <div class="col-12 col-md-4">
                <div class="sidebar">
                    <div class="author widget wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1000ms">
                        <img class="img-responsive" src="images/downloaded/exercise-image-1.jpg">
                        <div class="author-body text-center">
                            <div class="author-img">
                                <img class="" src="images/downloaded/default-person.png">
                            </div>
                            <div class="author-bio">
                                <?php

                                if (isset($_SESSION['u_id'])) {
                                    echo "Welcome " . $_SESSION['u_first_name'] . '<br><br>';
//                                    echo "Your progress" . '<br><br><div class="foo blue"></div>';

                                } else {
                                    echo '<form action="includes/login.inc.php" method="post">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Email address/ Username</label><br/><br/>
                                                 <input type="text" class="form-control" name="userName" placeholder="Enter email/username" required>
                                                </div>
                                                 <div class="form-group">
                                                 <label for="exampleInputPassword1">Password</label><br/><br/>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                                <button type="submit" name = "submit" class="btn btn-primary">Login</button>
                                                </form>
                                                <br>
                                                Dont have an account yet ?
                                                <br><br>
                                                <a><button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-warning">Register here</button></a>
                                               ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL REPR -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel" style="text-align: center">Register</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <form class="signup-form" action="includes/signup.inc.php" method="post">
                                <div class="modal-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label><br/><br/>
                                            <input id="test" type="text" class="form-control" name="firstName" placeholder="Enter first name" required>
                                            <php echo $firstNameErr;?></php>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label><br/><br/>
                                            <input type="text" class="form-control" name="lastName" placeholder="Enter last name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label><br/><br/>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label><br/><br/>
                                            <input type="text" class="form-control" name="userName" placeholder="Enter username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label><br/><br/>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                    <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button>-->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit" onclick="">Save changes</button>
                                </div>
                                    <div id="snackbar">Creating your account. This may take few seconds...</div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="recent-post widget">

                        <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<h3><b>Blog news</b></h3>
                        <ul>
                            <li>
                                <a target="_blank" href="https://www.arthritis.org/living-with-arthritis/arthritis-diet/best-foods-for-arthritis/best-foods-for-arthritis.php">12 Best Foods for Arthritis</a><br>
                                <time>Arthritis Foundation</time>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.arthritis.org/living-with-arthritis/arthritis-diet/best-foods-for-arthritis/best-fruits-for-arthritis.php">Best fruits for arthritis</a><br>
                                <time>Arthritis Foundation</time>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.arthritis.org/living-with-arthritis/arthritis-diet/foods-to-avoid-limit/">8 food ingridients that can cause inflamation</a><br>
                                <time>Arthritis Foundation</time>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.arthritis.org/living-with-arthritis/arthritis-diet/losing-weight/weight-loss-program.php">How to Wisely Choose a Weight-Loss Program</a><br>
                                <time>Arthritis Foundation</time>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.arthritis.org/living-with-arthritis/exercise/success/exercise-excuses.php">Exercise Excuses and How to Get Over Them</a><br>
                                <time>Arthritis Foundation</time>
                            </li>
                        </ul>';

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
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
</footer> <!-- /#footer -->

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
<script src="js/alertify.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="js/line-dp-php.js"></script>

</body>
</html>