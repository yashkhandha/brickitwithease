<?php
//session_start();
?>
<!DOCTYPE html >
<html>
<head>
    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
    <link rel="icon" href="favicon.ico">
    <title>Maps - Brick it with ease</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->


    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
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
<!--    <link href="css/mdb.min.css" rel="stylesheet">-->

    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS">


    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Creating a Store Locator on Google Maps</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 500px;
            width: 90%;
            margin-left: 0px;
            position: absolute !important;

        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #origin-input,
        #destination-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 200px;
        }

        #origin-input:focus,
        #destination-input:focus {
            border-color: #4d90fe;
        }

        #mode-selector {
            color: #fff;
            background-color: #38923c;
            margin-left: 12px;
            padding: 5px 11px 0px 11px;
        }

        #mode-selector label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 400;
        }

        .dropdown-menu ul{
            background-color: white;
        }

        .dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{
            color:#fff;text-decoration:none;background-color:#2d12124a;outline:0
        }

        .sidebar .categories ul li a {
            color: #000;
        }

    </style>
</head>

<body onload="initMap()">

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

<section class="global-page-header" style="background: #4b3434;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 id="heading" class="wow fadeInDown">Places near you</h2>
                    <ol class="breadcrumb">
                        <li class="active wow fadeInUp" id="subheading" style="font-size: large"> Search for play areas near your favourite location in Victoria. Start searching now ! </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-full-width" style="padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar">
<!--                    <div class="search widget">-->
<!--                        <div class="input-group wow fadeIn" style="font-family: Roboto, sans-serif">-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="author widget">
                        <div class="categories widget">
                            <h3 class="widget-head" style="text-align: center"><b></b></h3><br/>

                            <form style="width: 100%;text-align: center;" class="wow fadeIn">
                                <row>
                                    <div class="form-group wow fadeInDown">
                                        <label for="addressInput" style="font-family: Arial, sans-serif">Search Location</label><br><br>
                                        <input type="text" class="form-control" id="addressInput" placeholder="Enter Address or Suburb" style="font-family: Arial, sans-serif">
                                        <h6 style="font-family: Arial, sans-serif; font-size: 12px; padding-top: 5px;">Your current location will be considered if left blank.</h6>
                                    </div>
                                </row>
                                <row>
                                    <!--                    <div id="app" class="form-group">-->
                                    <!--                        <label for="sportInput">Search Sports</label><br><br>-->
                                    <!--                        <input type="text" class="form-control" id="sportInput" placeholder="Enter sport details here">-->
                                    <!---->
                                    <!--                    </div>-->
                                    <div class="form-group wow fadeInDown">
                                        <label for="sportInput" style="font-family: Arial, sans-serif">Select Sport</label><br><br>
                                        <select class="selectpicker form-control" id="sportInput" label="Sport" data-live-search="true" title="Choose one of the following..." style="font-family: Roboto, sans-serif" data-dropup-auto="false">
                                            <option value="All">All</option>
                                            <option value="Australian Rules Football">Australian Rules Football</option>
                                            <option value="Aerobics">Aerobics</option>
                                            <option value="Athletics">Athletics</option>
                                            <option value="Badminton">Badminton</option>
                                            <option value="Baseball">Baseball</option>
                                            <option value="Basketball">Basketball</option>
                                            <option value="Beach Volleyball">Beach Volleyball</option>
                                            <option value="Bocce">Bocce</option>
                                            <option value="Canoe Polo">Canoe Polo</option>
                                            <option value="Canoeing">Canoeing</option>
                                            <option value="Cricket">Cricket</option>
                                            <option value="Cricket (Indoor)">Cricket (Indoor)</option>
                                            <option value="Cycling">Cycling</option>
                                            <option value="Dancing">Dancing</option>
                                            <option value="Fitness / Gymnasium Workouts">Fitness / Gymnasium Workouts</option>
                                            <option value="Golf">Golf</option>
                                            <option value="Gymnastics">Gymnastics</option>
                                            <option value="Hockey">Hockey</option>
                                            <option value="Ice Hockey">Ice Hockey</option>
                                            <option value="Netball">Netball</option>
                                            <option value="Netball (Indoor)">Netball (Indoor)</option>
                                            <option value="Open Space">Open Space</option>
                                            <option value="Rock Climbing / Abseiling (Indoor)">Rock Climbing</option>
                                            <option value="Skating">Skating</option>
                                            <option value="Soccer">Soccer</option>
                                            <option value="Soccer (Indoor Soccer / Futsal)">Soccer (Indoor Soccer / Futsal)</option>
                                            <option value="Softball">Softball</option>
                                            <option value="Squash / Racquetball">Squash / Racquetball</option>
                                            <option value="Swimming">Swimming</option>
                                            <option value="Table Tennis">Table Tennis</option>
                                            <option value="Team Handball">Team Handball</option>
                                            <option value="Tennis (Indoor)">Tennis (Indoor)</option>
                                            <option value="Tennis (Outdoor)">Tennis (Outdoor)</option>
                                            <option value="Touch Football">Touch Football</option>
                                            <option value="Volleyball">Volleyball</option>
                                            <option value="Water Polo">Water Polo</option>
                                            <option value="Wheelchair Sports">Wheelchair Sports</option>
                                        </select>
                                        <h6 style="font-family: Arial, sans-serif; font-size: 12px; padding-top: 5px;">All sport activities will be considered if none selected.</h6>
                                    </div>
                                </row>
                                <row>
                                    <div class="form-group wow fadeInDown">
                                        <label for="radiusSelect" style="font-family: Arial, sans-serif">Radius</label><br><br>
                                        <select class="selectpicker form-control" id="radiusSelect" label="Radius" data-live-search="true" style="font-family: Arial, sans-serif" data-dropup-auto="false">
                                            <option value="1">1 kms</option>
                                            <option value="5" selected>5 kms</option>
                                            <option value="10">10 kms</option>
                                            <option value="20">20 kms</option>
                                        </select>
                                    </div>
                                </row>
                                <row>
                                    <div class="form-group" style="text-align: center">
                                        <button class="btn btn-success" type="button" id="searchButton" value="Search" style="font-family: Arial, sans-serif">Search</button>
                                    </div>
                                </row>
                                <row>
                                    <div class="form-group">
                                        <label for="results" id="results" style="visibility: hidden;font-family: Arial, sans-serif">Custom Results</label><br><br>
                                        <select label="results" class="form-control" id="locationSelect" style="visibility: hidden;font-family: Arial, sans-serif;" data-live-search="true" data-dropup-auto="false">Select one from all</select>
                                    </div>
                                </row>
                            </form>
                        </div>
                        <div class="author-body text-center">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 animated fadeInRight">
                <!--<div id="calendar"></div>-->
                <div id="map" class="wow fadeIn"></div>
            </div>
        </div>
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

<script src="js/maps.js">
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsnuXejoOhwXAMFjFROON3rUn4iFbch-g&libraries=places&callback=initMap">
</script>
<script src="plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="plugins/form-validation/jquery.form.js"></script>
<script src="plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<!-- wow js -->
<script src="plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="plugins/slider/slider.js"></script>
<!-- Fancybox -->
<!--<script src="plugins/facncybox/jquery.fancybox.js"></script>-->
<!-- template main js -->
<script src="js/main.js"></script>
<script src="js/mdb.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpstJUGMxJfBPJ1Z3DWy8d5VPFpb57yDQ&libraries=places&callback=initMap" async defer></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsnuXejoOhwXAMFjFROON3rUn4iFbch-g&libraries=places&callback=initMap" async defer></script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwZi05tN5K39Bp4xXbISybqPj8WeOnypc&libraries=places&callback=initAutocomplete"-->
<!--        async defer></script>-->
<script src="js/jquery-1.10.2.js"></script>
<!--<script src="js/selectize.js"></script>-->
<script src="js/alertify.min.js"></script>

</body>
</html>