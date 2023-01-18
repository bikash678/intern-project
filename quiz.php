<?php
//include_once("session.php");
// if (isset($_SESSION['user'])) {
 include 'main.php';
  include 'nav1.php';
?>

<html>

<head>
    <!-- Start Course Header Section -->
    <header class="back-img" style="background-image: url(img/course.jpg);">
        <div class="text-center">
            <br>
            <h4 class="text-danger">Welcome to Academia </h4>
            <p class="white">Don't be afraid to fail. Be afraid not to try.</p>
            <img src="img/logo.jpg" style="width: 200px; height:auto;">
        </div>
    </header>
    <!-- End Course Header Section -->
</head>

<body>
    <!-- Start Our All Courses -->
    <div class="container">
        <!-- Start Container Courses -->
        <h3 class="text-center mt-4">Quiz</h3>
        <div class="row">
            <!-- Start Row Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/cp.jpg" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">C</h5>
                        <p class="card-text">C is a general-purpose, procedural computer programming language supporting
                            structured programming, lexical variable scope, and recursion, with a static type system.
                        </p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/html2.png" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text">HTML (HyperText Markup Language) is the most basic building block of the
                            Web. It defines the meaning and structure of web content.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="htmlhome.php">MCQ Questions
                        </a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/java1.png" class="card-img-top" alt="..." style="height: 280px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Java is a high-level, class-based, object-oriented programming language
                            that is designed to have as few implementation dependencies as possible.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="javahome.php">MCQ
                            Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/phpp.jpg" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">PHP is a general-purpose scripting language especially suited to web
                            development.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="phphome.php">MCQ Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->




        </div><!-- End Row Courses -->
    </div><!-- End Container Courses -->

    <!-- End Our All Courses -->
    <!-- Start Footer Section -->
    <?php
    include 'footer.php';
// } else {
 //   header('location:login.php');
//}
    ?>
    <!-- End Footer Section -->


</body>
<html>