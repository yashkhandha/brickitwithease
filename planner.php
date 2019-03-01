<?php
//session_start();
//if(!isset($_SESSION['u_id'])){
//    header("Location: login.php");
//}
//?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Planner - Brick it with ease</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

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
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
<!--        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">-->
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="css/alertify.core.css">
        <link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS">
        <link rel="stylesheet" href="css/jquery-ui.css">
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
//                                        if (isset($_SESSION['u_id'])) {
                                            echo '
                                        <li><a href="login.php">Dashboard</a></li>
                                        <li><form name="logout-form" action="includes/logout.inc.php" method="post">
                                    <li><a href="#" onclick="document.forms[0].submit()">Log out</a></li>
                                    </form> </li>
                                    <li><a href="about.php">About us</a></li>';
//                                        } else {
//                                            echo '
//
//                                        <li><a href="login.php">Log in</a></li>
//                                        <li><a href="about.php">About us</a></li>';
//                                        }
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
                            <h2 id="heading">Personalize your calendar and activities</h2>
                            <ol class="breadcrumb">
                                <li class="active" id="subheading" style="font-size: large">Lets get started</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=======================================
=            Blog Left sidebar            =
========================================-->

<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="search widget">
                            <div class="input-group wow fadeIn" style="font-family: Roboto, sans-serif"><b>
                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo strtoupper("Welcome " . $_SESSION['u_first_name'] ). '<br><br>';
                                    echo "Start planning your activities now";

                                }?></b>
                            </div>
                        </div>
                        <div class="author widget wow fadeIn">
                            <div class="categories widget">
                                <h3 class="widget-head" style="text-align: center"><b>Check exercises for your pain before you start</b></h3><br/>
                                <ul>
                                    <li>
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#lowbackpainmodal" style="font-family: Arial, sans-serif">Lower Back Pain</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#kneemodal" style="font-family: Arial, sans-serif">Knee Pain</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#neckmodal" style="font-family: Arial, sans-serif">Neck Pain</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-body text-center">
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sideModalTR" style="font-family: Arial, sans-serif">Add Activities</button>

                            </div>
                        </div>
                        
                        <div class="recent-post widget">
                            <h2>Key things to note</h2>
                            <ul>
                                <li>
                                    <p style="font-size: 18px; font-family: Roboto, sans-serif">To <b>Add</b> an activity</p>
                                    <l style="font-size: 14px; font-family: Roboto, sans-serif">Click on <b>Add Activites</b> to add a new activity to your planner</l>
                                </li>
                                <li>
                                    <p style="font-size: 18px; font-family: Roboto, sans-serif">To <b>View</b> an activity</p>
                                    <l style="font-size: 14px; font-family: Roboto, sans-serif">Click on an activity to view its details</l>
                                </li>
                                <li>
                                    <p style="font-size: 18px; font-family: Roboto, sans-serif">To <b>Update</b> an activity</p>
                                    <l style="font-size: 14px; font-family: Roboto, sans-serif">Drag and drop the activity to a new day. Or<br>
                                    Click on an activity to make specific changes</l>
                                </li>
                                <li>
                                    <p style="font-size: 18px; font-family: Roboto, sans-serif">To <b>Delete</b> an activity</p>
                                    <l style="font-size: 14px; font-family: Roboto, sans-serif">Click on an activity to delete it</l>
                                </li>
                            </ul>
                        </div>

                    <!-- MODAL for LOWER BACK PAIN -->

                    <div id="lowbackpainmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="gridModalLabel" style="text-align: center">Lower back pain exercises</h2>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/lowbackpain/hamstringexercise.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Hamstring exercise</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Lie on your back and bend one knee.</li>
                                                    <li>Loop a towel under the ball of your foot.</li>
                                                    <li>Straighten your knee and slowly pull back on the towel. You should feel a gentle stretch down the back of your leg.</li>
                                                    <li>Hold for at least 15 to 30 seconds. Do 2 to 4 times for each leg</li><br/>
                                                    <li><b>Ideal Time</b> : 10 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/lowbackpain/pressupbackextensions.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Press-up Back Extensions</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Lie on your stomach with your hands under your shoulders.</li>
                                                    <li>Push with your hands so your shoulders begin to lift off the floor.</li>
                                                    <li>If it's comfortable for you, put your elbows on the floor directly
                                                        under your shoulders and hold this position for several seconds.</li>
                                                    <li><b>Ideal Time</b> : 15 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/lowbackpain/wallsits.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Wall Sits</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Stand 10 to 12 inches from the wall, then lean back until your back is flat against the wall.</li>
                                                    <li>Slowly slide down until your knees are slightly bent, pressing your lower back into the wall.</li>
                                                    <li>Hold for a count of 10, then carefully slide back up the wall. Repeat 8 to 12 times.</li>
                                                    <br/>
                                                    <li><b>Ideal Time</b> : 10 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <h6>&copy; 2016, WebMD, LLC. All rights reserved</h6>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END of MODAL for LOWER BACK PAIN-->

                    <!-- MODAL for KNEE PAIN -->

                    <div id="kneemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="gridModalLabel" style="text-align: center">Knee pain exercises</h2>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/kneepain/straightleg.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Straight Leg</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>If your knee’s not at its best, start with a simple strengthening
                                                        exercise for your quadriceps, the muscles in the front of the thigh</li>
                                                    <li>Lie on your back on the floor or another flat surface.</li>
                                                    <li>Bend one knee and place your foot flat on the floor.</li>
                                                    <li>Keeping the other leg straight, raise it to the height of the opposite knee</li>
                                                    <li>Repeat 10-15 times for three sets</li><br/>
                                                    <li><b>Ideal Time</b> : 15 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/kneepain/wallsquats.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Wall squats</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>This is a more advanced move. You’ll keep your feet on the floor.</li>
                                                    <li>Stand with your back against a wall, your feet about shoulder-width apart.</li>
                                                    <li>Slowly bend your knees, and keep your back and pelvis against the wall</li>
                                                    <li> Hold for 5-10 seconds. Don’t bend too deeply. If you feel pressure or
                                                        discomfort in your knees,
                                                        change your position</li>
                                                    <li>Repeat the exercise, and try to hold the sit position a few seconds longer
                                                        each time.</li>
                                                    <li><b>Ideal Time</b> : 12 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/kneepain/stepups.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Step ups</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Place one foot on a step bench, platform, or the lowest step on a staircase.</li>
                                                    <li>Keeping your pelvis level, bend your knee and slowly lower the opposite foot to the floor.</li>
                                                    <li>Lightly touch your toe to the floor, then rise back up.</li>
                                                    <li> Repeat 10-15 times, then switch legs</li>
                                                    <li>Repeat the exercise, and try to hold the sit position a few seconds longer
                                                        each time.</li>
                                                    <li><b>Ideal Time</b> : 10 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/kneepain/calfraises.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Calf Raises</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Stand facing the back of a sturdy chair, other support such as the back of a
                                                        couch, or a wall
                                                        bar at the gym</li>
                                                    <li>Slowly raise the heels as high as you can, then lower.</li>
                                                    <li>Do three sets of 10-15.</li>
                                                    <li>When it becomes easy, lift one foot slightly off the floor, with all your
                                                        weight on the other foot.</li>
                                                    <br/>
                                                    <li><b>Ideal Time</b> : 20 minutes</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <h6>&copy; 2016, WebMD, LLC. All rights reserved</h6>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END of MODAL for KNEE PAIN-->

                    <!-- MODAL for NECK PAIN -->

                    <div id="neckmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="gridModalLabel" style="text-align: center">Neck pain exercises</h2>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/neckpain/shouldershrug.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><h3><b>Shoulder shrug</b></h3><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Start in a comfortable seated or kneeling position, with the head stacked
                                                        directly above the shoulders and the arms resting by the sides.</li>
                                                    <li>Inhale and lift the shoulders up towards the ears.</li>
                                                    <li>Exhale and return them down, feeling the blades settle on the back.</li>
                                                    <li>Repeat 20 times with break </li><br/>
                                                    <li><b>Ideal Time</b> : 10 minutes</li>
                                                    <li><b>Tip</b> :  This move strengthens and releases the muscles in the upper back.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/neckpain/neckroll.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Neck roll</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li>Start in a comfortable seated or kneeling position, with the head stacked
                                                        directly above the shoulders and the arms resting by the sides.</li>
                                                    <li>Inhale to prepare. Exhale and slowly and gently lower the left ear towards
                                                        the left shoulder, and then take the chin towards the chest.</li>
                                                    <li>Inhale as you continue to circle, taking the right ear towards the right
                                                        shoulder, and finishing by stacking the head above the shoulders in your
                                                        starting position.</li><br/>
                                                    <li><b>Ideal Time</b> : 15 minutes</li>
                                                    <li><b>Tip</b> :  Match the pace of movement to your slow breaths,
                                                        exploring each position as you transfer through it.</li>

                                                </ol>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive" src="images/downloaded/neckpain/headtilt.jpg"><br>
                                            </div>
                                            <div class="col-md-8 ml-auto"><b>Head tilt</b><br><br>
                                                <ol style="list-style-type: disc;padding-left: 15px;">
                                                    <li> Inhale to prepare. Exhale and slowly and gently lower the left ear towards the
                                                        left shoulder, only so far as you need to feel the beginning of the stretch.</li>
                                                    <li>Inhale to hold. Exhale and return to the top.</li>
                                                    <li>Continue to slowly alternate between each position.</li>
                                                    <br/>
                                                    <li><b>Ideal Time</b> : 10 minutes</li>
                                                    <li><b>Tip</b> : Take your time throughout the movement phase to gently release each muscle.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <h6>&copy; Paleohacks</h6>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END of MODAL for NECK PAIN-->

                    </div>
                </div>
                <div class="col-12 col-md-8 animated fadeInRight">
                    <div id="calendar"></div>
                    <div class="" id="" style="margin-top: 20px;">
                        <p>
                            <h2 style="margin-top: 40px;">How does your body feel today ?</h2>
                            <input type="text" id="amount" hidden readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p><br>

                        <div id="slider"></div><br><br>
                        <div class="text-center">
                            <button class="btn btn-deep-orange" type="button" id="progressButton" style="font-family: Arial, sans-serif">Check your progress</button>
                        </div>

<!--                        <img style="margin-top: 30px;margin-left: 50px;" src="images/downloaded/exercise-gif-2-edited.gif">-->
                    </div>
                </div>
            </div>
        </div>
</section>

<!--====  End of Blog Left sidebar  ====-->

        <!-- To change the direction of the modal animation change .right class -->
        <div class="modal fade" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="modal-title">

            <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
            <div class="modal-dialog modal-dialog-centered" >


                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="modal-title" style="text-align: center">Prepare your plan</h2>
                    </div>
                    <div class="modal-body">
                        <div ng-app="myapp" ng-controller="usercontroller" ng-init="loadPains()">
                            <label for="" class="col-2 col-form-label" id="pain" style="font-family: Arial, sans-serif">Select your pain area</label><br><br>
                            <select name="pain" ng-model="pain" class="form-control" ng-change="loadExercises()" >
                                <option value="" style="font-family: Arial, sans-serif">Select Pain</option>
                                <option ng-repeat="pain in painList" value="{{pain.pain_id}}" id="painName" style="font-family: Arial, sans-serif">{{pain.pain_name}}</option>
                            </select>
                            <br />
                            <label for="" class="" style="font-family: Arial, sans-serif">Select exercise</label><br><br>
                            <select name="exercise" ng-model="exercise" class="form-control" id="exerciseName" >
                                <option value="">Select Exercise</option>
                                <option ng-repeat="exercise in exerciseList" value="{{exercise.exercise_name}}" id="exerciseName" style="font-family: Arial, sans-serif">
                                    {{exercise.exercise_name}}
                                </option>
                            </select>
                        </div><br/>
                        <!--                                                <div class="form-group row">-->

                            <label for="dateinput" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Date</label>
                        <div class="col-10"><br/>
                            <input class="form-control" id="dateinput" required placeholder="Pick Exercise date" style="font-family: Arial, sans-serif"><br/>
                        </div>
                        <p id="datepair">
                        <label for="starts-at" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Start Time</label>
                        <div class="col-10 input-group-date"><br/>
                            <input class="form-control" id="starts-at" required placeholder="Pick Start Time (24 hour format)" style="font-family: Arial, sans-serif;width: 100%;"><br/>
                        </div>
                        <!--                                                </div>-->
                        <!--                                                <div class="form-group row">-->
                        <label for="ends-at" class="col-2 col-form-label" style="font-family: Arial, sans-serif">End Time</label>
                        <div class="col-10"><br/>
                            <input class="form-control" id="ends-at" required placeholder="Pick End Time (24 hour format)" style="font-family: Arial, sans-serif"><br/>
                        </div></p>
                        <!--                                                </div>-->
                        <!--                                                <div class="form-group row">-->
                        <label for="" class="form-label" style="font-family: Arial, sans-serif">Email notification</label>
                        <!--                                                    <div class="col-10"><br/>-->
                        <input id="emailToggle" class="form-control" type="checkbox" checked style="text-align: left"><br/>
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                                <div class="form-group row">-->
                        <label for="" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Color</label><br/><br/>
                        <!--                                                    <div class="col-2"><br/>-->
                        <input class="form-control col-2 col" type="color" value="#DAC0DD" id="event-color">
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark-green" id="save-event" style="margin-top: 13px;font-family: Arial, sans-serif">Save changes</button>
                        <button type="button" class="btn btn-blue-grey" id="close-event" style="font-family: Arial, sans-serif">Close</button>

                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="title">

            <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
            <div class="modal-dialog modal-dialog-centered" >

                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="eventTitle" id="eventTitle" style="text-align: center">Update your activity</h2>
                    </div>
                    <div class="modal-body">
                        <div class="" id="">
                            <h2 class="eventId" id="eventId" hidden></h2>
                            <h2 id="updateDate" hidden></h2>
                            <label for="" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Exercise name</label><br><br>
                            <input type="text" class="exerciseTitle form-control" id="exerciseTitle" disabled style="font-family: Arial, sans-serif">
                        </div><br><br>
                        <label for="start" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Start Time</label>
                        <div class="col-10"><br/>
                            <input class="form-control" id="start" required placeholder="Start Time" style="font-family: Arial, sans-serif"><br/>
                        </div>

                        <label for="end" class="col-2 col-form-label" style="font-family: Arial, sans-serif">End Time</label>
                        <div class="col-10"><br/>
                            <input class="form-control" id="end" required placeholder="End Time" style="font-family: Arial, sans-serif"><br/>
                        </div>

                        <label for="" class="form-label" style="font-family: Arial, sans-serif">Email notification</label>
                        <input id="emailToggleUpdate" class="form-control" type="checkbox" checked><br/>

                        <label for="" class="col-2 col-form-label" style="font-family: Arial, sans-serif">Color</label>
                        <input class="form-control col-2 col" type="color" value="#563d7c" id="eventColor">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" id="delete" style="margin-top: 13px;font-family: Arial, sans-serif">Delete</button>
                        <button type="button" class="btn btn-purple" id="update" style="font-family: Arial, sans-serif">Update</button>
                        <button type="button" class="btn btn-blue-grey" id="close" style="font-family: Arial, sans-serif">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="progressModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="modal-title" style="text-align: center">Your progress</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--                            <span aria-hidden="true">&times;</span>-->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="chart-container">
                            <canvas id="line-chartcanvas"></canvas>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" id="closeProgress">Close</button>
                    </div>
                </div>
            </div>
        </div>



            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Not sure about what is best for you ?</h2>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                                <a href="painandease.php" class="btn btn-deep-orange btn-contact wow fadeInDown" data-wow-delay=".5s" data-wow-duration="300ms" style="font-family: Arial, sans-serif">Click here to know more</a>
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
<!--	<script src="plugins/jQurey/jquery.min.js"></script>-->
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script>
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- owl carouserl js -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script src="js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
    <script src="js/dynamics.min.js"></script>
<!--    <script src="js/bootstrap-datetimepicker.min.js"></script>-->
    <script src="js/jquery.timepicker.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/datepair.js"></script>
    <script src="js/jquery.datepair.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap-toggle.min.js"></script>
    <script src="js/alertify.min.js"></script>
<!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <script src="js/line-dp-php.js"></script>

        <script>
            var steps = [
                "very painful",
                "painful",
                "not so bad",
                "less painful",
                "no pain"
            ];
            $( function() {
                $( "#slider" ).slider({
                    value:2,
                    min: 0,
                    max: 4,
                    step: 1,
                    slide: function( event, ui ) {
                        // alertify.log("Change recorded. Thanks for your feedback !");
                        var painLevel = steps[ui.value];
                        $( "#amount" ).val( steps[ui.value] );

                        $.ajax({
                            url:"update-user-pain.php",
                            type:"POST",
                            data:{painLevel:painLevel},
                            success:function () {
                                alertify.success("Your feedback is recorded successfully. Refresh your page to view your progress. Cheers !");
                            }
                        })

                    }
                }).each(function(){
                    // var vals = steps.max - steps.min;
                    // alert(vals);
                    for (var i = 0; i <= 4; i++) {

                        var el = $('<label>'+steps[(i)]+'</label>').css('left',(i/3*75)+'%');

                        $( "#slider" ).append(el);

                    }
                });

                $("#amount").val(steps[$("#slider").slider( "value" )]);
            } );
        </script>

        <script>
        var app = angular.module("myapp",[]);
        app.controller("usercontroller", function($scope, $http){
            $scope.loadPains = function(){
                $http.get("load_pain.php")
                    .success(function(data){
                        $scope.painList = data;
                    })
            }
            $scope.loadExercises = function(){
                $http.post("load_exercise.php", {'pain_id':$scope.pain})
                    .success(function(data){
                        $scope.exerciseList = data;
                    });
            }
        });
         $(function () {
             $('#dateinput').datepicker({
                 'dateFormat': 'yy-mm-dd'
             });

             $('#sideModalTR').scroll(function () {
                 // alert('scrolled');
                $("#starts-at").timepicker('hide');
                $('#starts-at').blur();
                $("#ends-at").timepicker('hide');
                $("#dateinput").datepicker('hide');
            });


            $('#starts-at').timepicker({
                'showDuration': true,
                'timeFormat': 'H:i',
                'interval': 15,
                autoclose:true
            });
             $('#ends-at').timepicker({
                 autoclose:true,
                 'showDuration': true,
                 'timeFormat': 'H:i',
                 useCurrent: false
             });
             $('#datepair').datepair();
             $("#starts-at").on("dp.change", function (e) {
                 $('#ends-at').data("DateTimePicker").minDate(e.date);
             });
             $("#ends-at").on("dp.change", function (e) {
                 $('#starts-at').data("DateTimePicker").maxDate(e.date);
             });
         });
        $(function () {
            $('#start').timepicker({
                autoclose:true,
                'showDuration': true,
                'timeFormat': 'H:i'
            });
            $('#end').timepicker({
                autoclose:true,
                'showDuration': true,
                'timeFormat': 'H:i'
            });

        });
    </script>


 	</body>
</html>