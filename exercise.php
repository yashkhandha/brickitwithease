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
    <title>Exercises - Brick it with ease</title>
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
    <!-- slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
<section class="global-page-header" style="background: #4b3434;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 id="heading" class="h2-responsive">Exercises to ease your pain</h2>
                    <ol class="breadcrumb">
                        <li class="active" id="subheading" style="font-size: large">Details regarding some common
                            symptoms of arthritis and
                            ways to ease the pain
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Ease your
                        pain </h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                        Who needs a gym membership? You can work out with comfort and convenience at your home, and
                        you have a lot
                        of options besides hopping on a stationary bike or treadmill. Use our tips to do the best </p>
                </div>
                <div class="row service-parts">
                    <div class="col-md-8">
                        <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                            <!--                                <i class="ion-ios-paper-outline"></i>-->
                            <h2>Lower back pain</h2>
                            <div id="accordion-jquery" style="margin-top: 30px;">
                                <h3>What is causing Back pain ?</h3>
                                <div>
                                    <p style="font-size: 14px;">
                                        Back pain is often caused by a simple muscle, tendon
                                        or ligament strain and not usually by a serious problem.
                                        Often back pain doesn’t have one simple cause but may be due to a range
                                        of factors, including:
                                        poor posture
                                        lack of exercise resulting in stiffening of the spine
                                        muscle strains or sprains.
                                    </p>
                                </div>
                                <h3>How can I help myself when I have back pain ?</h3>
                                <div>
                                    <p>
                                        <b>Exercise</b> is the most important way that
                                        you can help yourself if you have
                                        back pain.
                                        <br/>
                                        Exercise might make your back feel a bit sore at first but it
                                        doesn’t cause any harm.
                                        Start off slowly and gradually increase the amount of exercise you
                                        do. You can also try
                                        taking some painkillers beforehand. Over time, your back will get
                                        stronger and more flexible
                                        and this should reduce pain.
                                        <br/>
                                        Often people stop exercising once their back pain has cleared up,
                                        but it's best to keep up
                                        with the exercise to maintain strength and fitness as this will help
                                        to reduce the chances of
                                        your back pain returning.
                                        <br>
                                        Exercises that may help include:
                                    <ol style="padding-left: 30px; font-size: 14px;">
                                        <li>Swimming</li>
                                        <li>Walking</li>
                                        <li>Yoga</li>
                                        <li>Going to the gym</li>
                                    </ol>
                                        <p>They may not be suitable for all types of back pain, so it’s a good
                                        idea to get advice from your doctor or physiotherapist about
                                        specific exercises before you begin.</p>
                                    </p>
                                </div>
                                <h3>Exercise to manage back pain</h3>
                                <div style="max-height: 330px; overflow-y: auto;">
                                    <p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="images/downloaded/back-exercise-1.jpg"
                                                     style="width: 200px;">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="images/downloaded/back-exercise-2.jpg"
                                                     style="width: 200px;">
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images/downloaded/back-exercise-3.jpg"
                                                     style="width: 350px;">
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images/downloaded/back-exercise-4.jpg"
                                                     style="width: 350px;">
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images/downloaded/back-exercise-5.jpg"
                                                     style="width: 350px;">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/downloaded/low-back-pain-1.jpg"
                             style="height: 215px; width: 350px; margin-top: 55px; align-content: center"
                             class="image-radius wow fadeInUp">
                    </div>
                </div>
                <div class="row service-parts">
                    <div class="col-md-8">
                        <h2 style="margin-top: 40px;">Knee pain</h2>

                        <div id="accordion-jquery1" style="margin-top: 30px;">
                            <h3 id="h3">What is causing Knee pain ?</h3>
                            <div>
                                <p style="font-size: 14px;">
                                    Many factors can increase your risk of osteoarthritis of
                                    the knee.
                                    It’s most common if:
                                    <ol style="padding-left: 30px;font-size: 14px;">
                                        <li>You’re in your late 30s or older – this might be because your
                                            muscles have become weaker,
                                            your body is less able to heal itself or your joints have gradually
                                            worn out over time
                                        </li>
                                        <li>You do a hard, repetitive activity or a physically demanding job,
                                            for example brick layering or mining
                                        </li>
                                        <li>You have another type of joint disease which has damaged your
                                            joints,
                                            for example rheumatoid arthritis or gout.
                                        </li>
                                    </ol>
                                </p>
                            </div>
                            <h3>How can I help myself when I have knee pain ?</h3>
                            <div>
                                <p style="font-size: 14px;">
                                    <b>Exercise for osteoarthritis of the knee</b><br>
                                    Exercise is very important for osteoarthritis of the knee.
                                    You'll need to do both strengthening and aerobic exercise to help ease
                                    stiffness
                                    and reduce pain<br>
                                    <b>Weight and osteoarthritis of the knee</b><br>
                                    Being overweight increases your risk of developing osteoarthritis and
                                    makes it
                                    more likely that your symptoms will get worse over time, so it's
                                    important to keep to
                                    a healthy weight<br>
                                    <b>Reducing the strain on your knee</b><br>
                                    Reducing the strain on your knees and pacing your activities can help
                                    ease the symptoms of osteoarthritis of the knee
                                </p>
                            </div>
                            <h3>Living with Osteoarthritis of knee</h3>
                            <div style="max-height: 170px; overflow-y: auto;">
                                <p style="font-size: 14px;">
                                    You may need to make some alterations to your working environments,
                                    especially if you
                                    have a physically demanding job. Speak to your employer’s occupational
                                    health service
                                    if they have one, or your local Jobcentre Plus can put you in touch with
                                    Employment Advisors who can arrange work assessments. They can advise
                                    you on changing
                                    the way you work and on equipment that may help you to do your job more
                                    easily.
                                    If necessary, they can also help with retraining for more suitable work.
                                </p>
                            </div>
                            <h3>Exercise to manage knee pain</h3>
                            <div style="max-height: 330px; overflow-y: auto;">
                                <p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/downloaded/knee-exercise-1.jpg"
                                             style="width: 200px;">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/downloaded/knee-exercise-2.jpg"
                                             style="width: 200px;height: 300px;">
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/downloaded/back-exercise-3.jpg"
                                             style="width: 350px;">
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/downloaded/back-exercise-4.jpg"
                                             style="width: 350px;">
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/downloaded/back-exercise-5.jpg"
                                             style="width: 350px;">
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/downloaded/knee-pain-2.jpg"
                             style="height: 215px; width: 350px; margin-top: 85px; align-content: center"
                             class="image-radius">
                    </div>
                </div>
                <br/><i style="font-size: 14px; color: #d9534f;padding-top: 20px;">Information presented in
                    these exercises is not intended as a substitute for medical advice. Consult your
                    physician is your pain is severe, especially if you have osteoporosis, or any
                    artificial joints. Stop exercising immediately if you get sudden pain, severely
                    short of breath, dizzy or sick to your stomach. The producers, authors and
                    participants disclaim any liability or loss, personal or otherwise, resulting from
                    the procedures in these resources.</i><h6>&copy; Arthritis Research UK</h6>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Works Section Start
================================================== -->
<section class="works service-page" id="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Suggested
            tips</h2>
        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
            Have a Look !
        </p>
        <div class="row">
            <div class="col-sm-4">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <figcaption>
                        <div class="img-wrapper">
                            <div class="" style="font-size: 24px;">Bricky experience</div>
                            <br/>
                        </div>

                        <h4>
                            <a target="_blank" href="https://youtu.be/dtun4JxSm6g">
                                Interview with Bricky
                            </a>
                        </h4>
                        <p>
                            Some tips to work efficiently<br/> <h6>&copy; Physio Detective</h6>
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-4">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <figcaption>
                        <div class="img-wrapper">
                            <div class="" style="font-size: 24px;">Advice from the experts</div>
                            <br/>
                        </div>

                        <h4>
                            <a target="_blank"
                               href="https://www.webmd.com/rheumatoid-arthritis/better-living-ra-17/manage/video-pain-relief-for-ra">
                                Pain Relief for RA
                            </a>
                        </h4>
                        <p>
                            Living with RA and fighting with the pain<br/> <h6>&copy; 2017 WebMD, LLC. All rights
                            reserved.</h6>
                        </p>
                    </figcaption>
                </figure>
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
        </div><br>
        <a href="planner.php" class="btn btn-deep-orange btn-contact wow fadeInDown" data-wow-delay=".7s"
           data-wow-duration="500ms" style="font-family: Arial, sans-serif"><b>Personalised Planner</b></a>
    </div>
</section>

<!--    ==================================================
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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#accordion-jquery").accordion({
            heightStyle: "content"
        });
    });
    $(function () {
        $("#accordion-jquery1").accordion({
            heightStyle: "content"
        });
    });
</script>

</body>
</html>