<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Services - Brick it with ease</title>
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
                        <a href="index.html" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
<!--                            <li><a href="about.html">About</a></li>-->
                            <li><a href="service.php">Service</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Physical Exercises</h2>
                            <ol class="breadcrumb">
<!--                                <li>-->
<!--                                    <a href="index.html">-->
<!--                                        <i class="ion-ios-home"></i>-->
<!--                                        Home-->
<!--                                    </a>-->
<!--                                </li>-->
                                <li class="active">Find the best exercise for your pain</li>
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
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Ease your problem </h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Exercise for only 2 minutes in a day can help ease your pain. So dont wait.. </p>
                    <div class="row service-parts">
                        <div class="col-md-12">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="ion-ios-paper-outline"></i>
                                <p>Lower back pain</p>
<!--                                 <h4>BRANDING</h4>
 -->                                    <p>


                                        <?php
                                            // define variables and set to empty values
                                            $genderErr = $symptomErr = $ageErr = "";
                                            $gender = $symptom = $age = "";

                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                if (empty($_POST["gender"])) {
                                                $genderErr = "Gender is required";
                                              } else {
                                                $gender = test_input($_POST["gender"]);
                                              }

                                              if (($_POST["age"]) === "Choose...") {
                                                $ageErr = "Age is required";
                                              } else {
                                                $age = test_input($_POST["age"]);
                                              }

                                              if (empty($_POST["symptomName"])) {
                                                $symptomErr = "Symptom is required";
                                              } else {
                                                $symptom = test_input($_POST["symptomName"]);
                                              }

                                              if (empty($_POST["email"])) {
                                                $emailErr = "Email is required";
                                              } else {
                                                $email = test_input($_POST["email"]);
                                                // check if e-mail address is well-formed
                                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                                  $emailErr = "Invalid email format";
                                                }
                                              }
                                            }

                                            function test_input($data) {
                                              $data = trim($data);
                                              $data = stripslashes($data);
                                              $data = htmlspecialchars($data);
                                              return $data;
                                            }
                                            ?>




                                        <h4>Please enter your preferences</h4>
                                        <!-- <p><span class="error_form">* required field</span></p> -->
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group">

<!--                                          <label for="gender">Gender </label>-->
<!--                                                <div class="form-check form-check-inline">-->
<!--                                                  <input class="form-check-input" type="radio" name="gender" --><?php //if (isset($gender) && $gender=="Male") echo "checked";?><!-- value="Male">-->
<!--                                                  <label class="form-check-label" for="gender">Male</label>-->
<!---->
<!--                                                  <input class="form-check-input" type="radio" name="gender" --><?php //if (isset($gender) && $gender=="Female") echo "checked";?><!--  value="Female">-->
<!--                                                  <label class="form-check-label" for="inlineRadio2">Female</label>-->
<!--                                                </div>   --><?php //echo $genderErr;?>
<!---->
<!--                                                <div class="form-group">-->
<!--                                                    <label for="inputAge">Age</label>-->
<!--                                                        <select id="age" class="form-control" name="age">-->
<!--                                                            <option selected>Choose...</option>-->
<!--                                                            <option>20</option>-->
<!--                                                            <option>21</option>-->
<!--                                                            <option>22</option>-->
<!--                                                            <option>23</option>-->
<!--                                                            <option>24</option>-->
<!--                                                            <option>25</option>-->
<!--                                                            <option>26</option>-->
<!--                                                            <option>27</option>-->
<!--                                                            <option>28</option>-->
<!--                                                            <option>29</option>-->
<!--                                                            <option>30</option>-->
<!--                                                            <option>31</option>-->
<!--                                                            <option>32</option>-->
<!--                                                            <option>33</option>-->
<!--                                                        </select>--><?php //echo $ageErr;?>
<!--                                                </div>-->
<!---->
<!--                                                <div class="form-group">-->
<!--                                                    <label for="inputState">Service category</label>-->
<!--                                                        <select id="inputState" class="form-control">-->
<!--                                                            <option selected>Choose...</option>-->
<!--                                                            <option>Brick layer</option>-->
<!--                                                            <option>Lifting heavy goods</option>-->
<!--                                                            <option>Loading and Unloading material</option>   -->
<!--                                                        </select>-->
<!--                                                </div>-->
                                                <div class="col-md-4">
                                                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                        <div class="img-wrapper">
                                                            <img src="images/downloaded/backpain.jpg" class="symptom-images img-responsive" alt="this is a title" >
                                                            <div class="overlay">
                                                                <div class="buttons">
                                                                    <a rel="gallery" class="fancybox" href="images/downloaded/backpain.jpg">View</a>
                                                                    <a href="details2.html">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <h4>
                                                                <a href="details2.html">
                                                                    Back Pain
                                                                </a>
                                                            </h4>
                                                            <p>

                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                        <div class="img-wrapper">
                                                            <img src="images/downloaded/wrist.jpg" class="symptom-images img-responsive" alt="" width="100%">
                                                            <div class="overlay">
                                                                <div class="buttons">
                                                                    <a rel="gallery" class="fancybox" href="images/downloaded/wrist.jpg">View</a>
                                                                    <a href="details3.html">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <h4>
                                                                <a href="details3.html">
                                                                    Wrist pain
                                                                </a>
                                                            </h4>
                                                            <p>

                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <div class="form-check">
                                                    <label >Pain area</label><br/>
                                                      <input class="form-check-input" type="checkbox" value="Knee Pain" name="symptomName">
                                                      <label class="form-check-label" for="defaultCheck1">
                                                        Knee Pain
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="Wrist Pain" name="symptomName">
                                                      <label class="form-check-label" for="defaultCheck2">
                                                        Wrist Pain
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label" for="defaultCheck1">
                                                        Back pain
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label" for="defaultCheck1">
                                                        Shoulder pain
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label" for="defaultCheck1">
                                                        Leg palm pain
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                      <label class="form-check-label" for="defaultCheck1">
                                                        Elbow pain
                                                      </label>
                                                </div>

<!--                                                <div class="form-group">-->
<!--                                                    <label for="inputState">Pain Severity</label>-->
<!--                                                        <select id="inputState" class="form-control">-->
<!--                                                            <option selected>Choose...</option>-->
<!--                                                            <option>Low</option>-->
<!--                                                            <option>Moderate</option>-->
<!--                                                            <option>Severe</option>  -->
<!--                                                        </select>-->
<!--                                                </div>-->

                                              <!-- <div class="form-group">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                                  <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                  </label>
                                                </div>
                                              </div> -->

                                        <button type="submit" name="submit" class="btn btn-primary" data-wow-delay=".5s" href="#works service-page" data-section="#works service-page">Submit</button>
                                          <!-- <input type="submit" name="submit" value="Submit"> -->
                                          </div>
                                        </form>


<?php

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "12345";
                                        //$dbname = "brickitwithease";

//                                         $servername = "localhost";
//                                         $username = "root";
//                                         $password = "";
//                                         $dbname = "brickitwithease";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password);

                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                         echo "Connected successfully <br><br>";

                                        $conn->close();
                                        ?>
                                    </p>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-pint-outline"></i>
                                <h4>DESIGN</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>DEVELOPMENT</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>THEMEING</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
<!--            <div class="col-md-6">-->
<!--                <div class="block">-->
<!--                    <img class="border-round img-responsive" src="images/downloaded/exercise1.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>


<!-- 
================================================== 
    Works Section Start
================================================== -->
<section class="works service-page" id="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Our Suggested exercises</h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                Have a Look !
            </p>
        <div class="row">
            <div class="col-sm-4">
                 <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <?php echo "<li><iframe src=\"$row[3]\"></iframe></li>" ?>
                        <!-- <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div> -->
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Exercise 1       
                            </a>
                        </h4>
                        <p>
                            Description
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-4">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <?php echo "<li><iframe src=\"$row[3]\"></iframe></li>" ?>
                        <!-- <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div> -->
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Exercise 2      
                            </a>
                        </h4>
                        <p>
                            Description
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-4">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <?php echo "<li><iframe src=\"$row[3]\"></iframe></li>" ?>
                        <!-- <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div> -->
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Exercise 3        
                            </a>
                        </h4>
                        <p>
                            Description
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
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT DO YOU THINK ?</h2>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Start with us. Soon</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact</a>
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
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/Brick-it-with-ease-832533966917055/?modal=admin_todo_tour" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                        </ul>
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
 	</body>
</html>