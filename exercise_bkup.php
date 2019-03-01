<?php
session_start();
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
    <!--    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
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
                    <img src="images/downloaded/logo-one-color-edited.png" alt="" class="project-logo">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span
                                    class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo '
                                        <li><form name="logout-form" action="includes/logout.inc.php" method="post">
                                    <li><a href="#" onclick="document.forms[0].submit()">Log out</a></li>
                                    </form> </li>';
                                } else {
                                    echo '
                                        <li>
                                        <li><a href="login.php">Log in</a></li>';
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
<section class="global-page-header" style="background: #0f4154">
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


                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                What is causing Back pain</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">Back pain is often caused by a simple muscle, tendon
                                            or ligament strain and not usually by a serious problem.
                                            Often back pain doesn’t have one simple cause but may be due to a range
                                            of factors, including:
                                            poor posture
                                            lack of exercise resulting in stiffening of the spine
                                            muscle strains or sprains.
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#collapse2">
                                                    How can I help myself when I have back pain ?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body"><b>Exercise</b> is the most important way that
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
                                                <ol style="padding-left: 30px;">
                                                    <li>Swimming</li>
                                                    <li>Walking</li>
                                                    <li>Yoga</li>
                                                    <li>Going to the gym</li>
                                                </ol>
                                                They may not be suitable for all types of back pain, so it’s a good
                                                idea to get advice from your doctor or physiotherapist about
                                                specific exercises before you begin.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#collapse3">
                                                    Exercise to manage back pain</a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
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

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--  <?php
                                /*
                                                                //                                        $servername = "localhost";
                                                                //                                        $username = "bitnami";
                                                                //                                        $password = "jW26eZ4av76b";

                                                                $servername = "localhost";
                                                                $username = "root";
                                                                $password = "";
                                                                $dbname = "brickitwithease";

                                                                // Create connection
                                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                                // Check connection
                                                                if ($conn->connect_error) {
                                                                    die("Connection failed: " . $conn->connect_error);
                                                                }
                                                                // echo "Connected successfully <br><br>";

                                                                $sql = "SELECT * FROM Exercises e, Symptoms s where s.SymptomID = e.SymptomID AND s.SymptomName = '$symptom'";
                                                                $result = $conn->query($sql);

                                                                $result = mysqli_query($conn, $sql);
                                                                $row = mysqli_fetch_row($result);
                                                                print_r($row[3]);

                                                                //                                         if ($result =  mysqli_query($conn,$sql)) {
                                                                //                                             // output data of each row
                                                                //                                             while($row = mysqli_fetch_row($result)) {
                                                                //                                                 //echo "Link : " . $row["ExerciseLink1"]. "<br>";
                                                                //
                                                                //                                             }
                                                                //                                             mysqli_result_free($result);
                                                                //                                         } else {
                                                                //                                             echo "0 results";
                                                                //                                         }

                                                                $conn->close();
                                                                */ ?> -->

                            </div>

                            <div id="accordion-jquery">
                                <h3>Section 1</h3>
                                <div>
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                                <h3>Section 2</h3>
                                <div>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                </div>
                                <h3>Section 3</h3>
                                <div>
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                    <ul>
                                        <li>List item one</li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                    </ul>
                                </div>
                                <h3>Section 4</h3>
                                <div>
                                    <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                    </p>
                                    <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
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
                        <h2 style="margin-top: 50px;">Knee pain</h2>


                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            What is causing Knee pain</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse in">
                                    <div class="panel-body">Many factors can increase your risk of osteoarthritis of
                                        the knee.
                                        It’s most common if:
                                        <ol style="padding-left: 30px;">
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
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse5">
                                                How can I help myself when I have knee pain ?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse7">
                                                Living with Osteoarthritis of knee</a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse6">
                                                Exercise to manage knee pain</a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
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

                                        </div>
                                    </div>


                                </div>

                            </div>

                            <!-- <?php
                            /*
                                                            //                                        $servername = "localhost";
                                                            //                                        $username = "bitnami";
                                                            //                                        $password = "jW26eZ4av76b";

                                                            $servername = "localhost";
                                                            $username = "root";
                                                            $password = "";
                                                            $dbname = "brickitwithease";

                                                            // Create connection
                                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                                            // Check connection
                                                            if ($conn->connect_error) {
                                                                die("Connection failed: " . $conn->connect_error);
                                                            }
                                                            // echo "Connected successfully <br><br>";

                                                            $sql = "SELECT * FROM Exercises e, Symptoms s where s.SymptomID = e.SymptomID AND s.SymptomName = '$symptom'";
                                                            $result = $conn->query($sql);

                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_row($result);
                                                            print_r($row[3]);

                                                            //                                         if ($result =  mysqli_query($conn,$sql)) {
                                                            //                                             // output data of each row
                                                            //                                             while($row = mysqli_fetch_row($result)) {
                                                            //                                                 //echo "Link : " . $row["ExerciseLink1"]. "<br>";
                                                            //
                                                            //                                             }
                                                            //                                             mysqli_result_free($result);
                                                            //                                         } else {
                                                            //                                             echo "0 results";
                                                            //                                         }

                                                            $conn->close();
                                                            */ ?> -->

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
                            <!--                        <li><iframe src="https://youtu.be/embed/dtun4JxSm6g"></iframe></li>-->
                            <!--                        <iframe class="vid" src="https://youtu.be/embed/dtun4JxSm6g"></iframe>-->
                            <div class="" style="font-size: 24px;">Bricky experience</div>
                            <br/>
                            <!--                        <a href="https://youtu.be/dtun4JxSm6g" style="margin-left:130px; font-size: 20px;">Click here</a>-->
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
                            <!--                        <li><iframe src="https://youtu.be/embed/dtun4JxSm6g"></iframe></li>-->
                            <!--                        <iframe class="vid" src="https://youtu.be/embed/dtun4JxSm6g"></iframe>-->
                            <div class="" style="font-size: 24px;">Advice from the experts</div>
                            <br/>
                            <!--                        <a href="https://youtu.be/dtun4JxSm6g" style="margin-left:130px; font-size: 20px;">Click here</a>-->
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
    Clients Section Start
================================================== -->
<!--  <section id="clients">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                 <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                 <div id="clients-logo" class="owl-carousel">
                     <div>
                         <img src="images/clients/logo-1.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-2.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-3.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-4.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-5.jpg" alt="">
                     </div>
                      <div>
                         <img src="images/clients/logo-1.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-2.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-3.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-4.jpg" alt="">
                     </div>
                     <div>
                         <img src="images/clients/logo-5.jpg" alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
-->


<!--
==================================================
Call To Action Section Start
================================================== -->
<div id="nav-footer"></div>
<script>
    $(function () {
        $("#nav-footer").load("footer-navbar.html");
    });
</script>

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
        $("#accordion-jquery").accordion();
    });
</script>

</body>
</html>