<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php include 'main.php';
    include 'nav1.php';
    $page_title = "Academia";
    ?>


</head>

<body>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="img/triton.jpg" alt="Third slide"
                        style="height:556px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block"
                        style="font-family:cursive; font-weight: bold; color:black;">
                        <h4 class="pb-5" style="height: 55px;">"Stay updated!Anywhere!Anytime!"</h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/tu.jpg" alt="Second slide"
                        style="height: 556px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block" style="color: black; font-weight:bold;">
                        
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/library.jpg " alt="First slide"
                        style="height: 556px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        
                        
                        </h5>

                    </div>
                </div>

            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </section>
    <!-- Start Text Banner -->
    <div class="container-fluid bg-info txt banner">
        <div class="row buttom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Colleges</h5>
            </div>
            
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Accurate Information</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-certificate mr-3"></i>Scholarship Information</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->
    <!--Start Hero Section-->
    <div class="container-fluid mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron mt-1 mb-0 mx-0">
                    <h1 class="display-6" style="font-family:cursive;"> Find Your Colleges</h1>
                    <p class="lead">We help you to find the colleges inside the valley.</p>
                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-4">Colleges <br><br>
                            <img src="img/Colleges.jpg" class="myimg" alt="Colleges">
                        </div>
                        <div class="col-sm-4">Scholarship <br><br>
                            <img src="img/scholarship.jpg" class="myimg" alt="Scholarship">
                        </div>
                        <div class="col-sm-4">Admission <br><br>
                            <img src="img/adm.jpg" class="myimg" alt="Admission">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero Section-->





    <!--Course-->
    <section class="course mt-5 ">
        <h2 class="text-center text-dark">Our Popular Colleges</h2>
        <div class="contain my-5 mx-5">
            
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body text-center">
                            <img class="img-fluid rounded-circle cover mb-4  " src="img/british.jpg" alt="Card image cap">
                            <h5 class="card-title text-center">The British College</h5>
                            <p class="card-text text-justify"
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                Founded in 2011, The British College offers world-class education for aspiring students in Nepal to gain internationally-recognised qualifications from their two partner British Universities: the University of the West of England (UWE) and Leeds Beckett University (LBU). </p>
                            <!-- <a href="course.php" class="btn btn-primary mx-5">Learn Now</a> -->
                        </div>

                    </div>

                </div>
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body text-center">
                            <img class="img-fluid rounded-circle cover mb-4 " src="img/vs.jpg"
                                alt="Card image cap">
                            <h5 class="card-title">V.S Niketan</h5>
                            <p class="card-text text-justify"
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                V.S Niketan Education Foundation –  Established by academician late Dr. B.R. Pokharel in 2038. VSN has been awarded as the best school of the nation with the nation shield and flag for the year 2065. Its graduates occupy admirable positions in medi­cine, engineering, banking and administration in Nepal as well as in abroad. </p>
                            <!-- <a href="course.php" class="btn btn-primary mx-5">Learn Now</a> -->
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body text-center">
                            <img class="img-fluid rounded-circle cover mb-4 " src="img/global.jpg"
                                alt="Card image cap">
                            <h5 class="card-title">Global College</h5>
                            <p class="card-text text-justify "
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                Global College of Management (GCM), promoted by Professional Educators Limited, is an English medium co-educational institution. The management team of GCM consists of academicians, researchers, entrepreneurs, and policymakers considerably renowned both at home and outside. </p>
                            <!-- <a href="course.php" class="btn btn-primary mx-5;">Learn Now</a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid" style="background-color: #f4d0f0;">
        <div class="custom-jumbo">
            <div class="row text-center">
                <div class="col">
                    <h4 class="mt-5 custom-h4">Ready to join?</h4>
                    <br>
                    <a href="login.php" class="btn btn-primary custom-btn">Get Started Now</a>
                </div>

                <div class="col">
                    <img class="img-custom" alt="Study now" src="img/girl.png"><br>
                </div>
            </div>
        </div>
    </div>

    <!--Start Contact Us-->
    <section class="container-fluid text-center py-5" id="contact">
        <h3 class="pb-2 my-4">Get in touch with us today!</h3>
        <p class="lead pb-3">Send us a message and we will get back to
            you as soon as possible.</p>
        <a href="contact.php" class="btn  btn-lg mb-5 custom-btn" role="button">Contact us</a>
    </section>
    <!--End Contact Us-->
    <?php
    include 'footer.php';
    // include 'uparrow.php';
    ?>
    <!-- Scroll to top button-->
    <a class="scroll-to-top rounded" href="#page-top">

        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>

</body>

</html>