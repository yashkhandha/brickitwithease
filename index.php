<?php
//session_start();
?>
<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Home - Brick it with ease</title>
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
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



    <style>
        /*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

        /********************************/
        /*       Fade Bs-carousel       */
        /********************************/
        .fade-carousel {
            position: relative;
            height: 100vh;
        }
        .fade-carousel .carousel-inner .item {
            height: 100vh;
        }
        .fade-carousel .carousel-indicators > li {
            margin: 0 2px;
            background-color: #fff;
            opacity: .7;
        }
        .fade-carousel .carousel-indicators > li.active {
            width: 10px;
            height: 10px;
            opacity: 1;
        }

        /********************************/
        /*          Hero Headers        */
        /********************************/
        .hero {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 3;
            color: #fff;
            text-align: center;
            /*text-transform: uppercase;*/
            text-shadow: 1px 1px 0 rgba(0,0,0,.75);
            -webkit-transform: translate3d(-50%,-50%,0);
            -moz-transform: translate3d(-50%,-50%,0);
            -ms-transform: translate3d(-50%,-50%,0);
            -o-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
        }
        .hero h1 {
            font-size: 6em;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .fade-carousel .carousel-inner .item .hero {
            opacity: 0;
            -webkit-transition: 2s all ease-in-out .1s;
            -moz-transition: 2s all ease-in-out .1s;
            -ms-transition: 2s all ease-in-out .1s;
            -o-transition: 2s all ease-in-out .1s;
            transition: 2s all ease-in-out .1s;
        }
        .fade-carousel .carousel-inner .item.active .hero {
            opacity: 1;
            -webkit-transition: 2s all ease-in-out .1s;
            -moz-transition: 2s all ease-in-out .1s;
            -ms-transition: 2s all ease-in-out .1s;
            -o-transition: 2s all ease-in-out .1s;
            transition: 2s all ease-in-out .1s;
        }

        /********************************/
        /*            Overlay           */
        /********************************/
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
            background-color: #080d15;
            opacity: .2;
        }

        /********************************/
        /*          Custom Buttons      */
        /********************************/
        .btn.btn-lg {padding: 10px 40px;}
        .btn.btn-hero,
        .btn.btn-hero:hover,
        .btn.btn-hero:focus {
            color: #f5f5f5;
            background-color: #1abc9c;
            border-color: #1abc9c;
            outline: none;
            margin: 20px auto;
        }

        /********************************/
        /*       Slides backgrounds     */
        /********************************/
        .fade-carousel .slides .slide-1,
        .fade-carousel .slides .slide-2,
        .fade-carousel .slides .slide-3,
        .fade-carousel .slides .slide-4{
            height: 100vh;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .fade-carousel .slides .slide-1 {
            background-image: url("images/downloaded/brick9.png");
        }
        .fade-carousel .slides .slide-2 {
            background-image: url("images/downloaded/planner3.jpg");
        }
        .fade-carousel .slides .slide-3 {
            background-image: url("images/downloaded/maps3.jpg");
        }
        .fade-carousel .slides .slide-4 {
            background-image: url("images/downloaded/roadexercise.jpeg");
        }

        /********************************/
        /*          Media Queries       */
        /********************************/
        @media screen and (min-width: 980px){
            .hero { width: 980px; }
        }
        @media screen and (max-width: 640px){
            .hero h1 { font-size: 4em; }
        }
    </style>

</head>
<body>
<button id="myBtn" title="Go to top" data-wow-delay=".5s"
        class="wow fadeInUp animated smooth-scroll" href="#landing" data-section="#landing">Top
</button>
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
Slider Section Start
================================================== -->

<section id="landing">

    <div class="carousel fade-carousel slide fadeInLeft" data-ride="carousel" id="bs-carousel" data-interval="8000">
        <!-- Overlay -->
<!--        <div class="overlay"></div>-->

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
            <li data-target="#bs-carousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1">
                </div>
                <div class="hero">
                    <div class="row">
                    <div class="col-12 col-md-4 wow fadeInLeft" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black;margin-top: 150px;">
                        In Victoria, 1 in 6 people have Arthritis. <br><br>
                        Bricklayers have three times the risk of developing rheumatoid arthritis
                    </div>
                    <div class="col-12 col-md-8 wow fadeInRight" style="margin-top: 100px;">
                        <img src="images/downloaded/brick8.jpg" class="img-rounded wow fadeInRight" style="width: 600px; height: 300px;">
                    </div>
                    </div>
                    <div class="col-12 col-md-12 wow fadeInUp" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black; margin-top: 80px;">
                        Finding proper care for the pain is difficult for the brickies due to their long working hours
                    </div>

                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black">
                        Personalize your planner with suggested physical exercises<br><br>
                        <button class="btn btn-purple" role="button" onclick="document.location.href='planner.php';">Explore Planner</button>

                    </div>
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black;">
                    </div>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black">
                        Explore play areas for suggested sport near you <br><br>
                        <button class="btn btn-purple" role="button" onclick="document.location.href='maps.php';">Explore Places</button>
                    </div>
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black;">
                    </div>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-4"></div>
                <div class="hero">
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black">

                    </div>
                    <div class="col-md-6" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: black;">
                        Find which physical activity is suitable for your pain <br><br>
                        <button class="btn btn-purple" role="button" onclick="document.location.href='painandease.php';">Explore more</button>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
            <i class="fas fa-angle-double-left" style="font-size:30px;margin-top: 350px;"></i>
        </a>
        <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
            <i class="fas fa-angle-double-right" style="font-size:30px;margin-top: 350px;"></i>
        </a>
    </div>
</section>

<section id="feature" class="feature">
    <div class="container" style="margin-top: 50px;">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">What we offer</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Different Activities and fitness to ease your pain and stay healthy<br>
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-body"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold; color: #504c4c;">Suggested Physical activities</h4>
                        <p>From the experts to help you get the best to release your pain</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold; color: #504c4c;">Interactive Pictures and Videos </h4>
                        <p>To enhance the experience of performing physical activities</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-book-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold; color: #504c4c;">Personalised Planner</h4>
                        <p>Daily activity tracking to help improve health</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold; color: #504c4c;">Favourite sport activity location</h4>
                        <p>Suggesting preferred sport activities and their location near by you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
About Section Start
================================================== -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        What is Arthritis ?
                    </h2>
                    <p>
                        <b style="font-weight: bold"></b>Arthritis is very common but is not well understood.
                        Actually, “arthritis” is not a single disease; it is an informal way of referring to joint pain
                        or joint disease.People of all ages, sexes and races can and do have arthritis, and it is the
                        leading cause of disability in Australia. <br>More than 50 million adults and 300,000 children have some type
                        of arthritis. It is most common among women and occurs more frequently as people get older.<br>
                        Common arthritis joint symptoms include swelling, pain, stiffness and decreased range of motion.

                    </p>
                    <p>
                        'Brick it with ease' is here to improve quality of life by trying to ease the pain of millions
                        of Australians including the Brickworkers who
                        are most affected by condition of Arthritis.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="images/downloaded/arthritis-1.jpeg" alt="" class="image-radius image-height img-responsive">
                </div>
            </div>
            <!--<a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".5s" href="#works" data-section="#works">-->
            <!--<img src = "images/arrow.png" class="arrow-size" width="40px" height="40px">-->
            <!--</a>-->
        </div>
    </div>
</section> <!-- /#about -->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Common Symptoms</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                These are the common affected areas for all Brickworkers working in this industry
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/downloaded/shoulder.jpg" class="symptom-images img-responsive"
                             alt="this is a title">
                        <div class="overlay" style="text-align: center">
                            <div class="buttons">
<!--                                <a rel="gallery" class="fancybox" href="images/downloaded/shoulder.jpg">View</a>-->
<!--                                <a href="details1.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="details1.html"><b>
                                    Shoulder pain</b>
                            </a>
                        </h4>
                        <p>

                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/downloaded/backpain.jpg" class="symptom-images img-responsive"
                             alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
<!--                                <a rel="gallery" class="fancybox" href="images/downloaded/backpain.jpg">View</a>-->
<!--                                <a href="details2.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="details2.html">
                                <b>Back Pain</b>
                            </a>
                        </h4>
                        <p>

                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/downloaded/wrist.jpg" class="symptom-images img-responsive" alt=""
                             width="100%">
                        <div class="overlay">
                            <div class="buttons">
<!--                                <a rel="gallery" class="fancybox" href="images/downloaded/wrist.jpg">View</a>-->
<!--                                <a href="details3.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="details3.html">
                                <b>Wrist pain</b>
                            </a>
                        </h4>
                        <p>

                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->

<div id="nav-footer"></div>
<script>
    $(function(){
        $("#nav-footer").load("footer-navbar.html");
    });
</script>

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
<script src="js/jquery-3.2.1.min.js"></script>
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
<script src="js/mdb.min.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

<script>
    // $(document).ready(function(){
    //     $('.carousel').carousel({
    //         interval: 8000
    //     });
    // });
</script>

<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
</body>
</html>