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
            <p class="white">Stay Updated ! Stay Wise!!!.</p>
        </div>
    </header>
    <!-- End Course Header Section -->
</head>

<body>
    <!-- Start Our All Courses -->
    <div class="container">
        <!-- Start Container Courses -->
        <h3 class="text-center mt-4">Scholarships</h3>
        <div class="row">
            <!-- Start Row Courses -->

            <div class=" col-sm-12 col-md-12 col-lg-12 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/sch1.jpg" class="card-img-top" alt="..." style="height: 250px;" width="auto !important">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div>

            <div class=" col-sm-12 col-md-12 col-lg-12 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/sch2.jpg" class="card-img-top" alt="..." style="height: 250px;" width="auto !important">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->
            <div class=" col-sm-12 col-md-12 col-lg-12 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/sch3.jpg" class="card-img-top" alt="..." style="height: 250px;" width="auto !important">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div>




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