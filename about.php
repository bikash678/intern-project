<?php include_once("session.php"); ?>
<?php
include 'main.php';
include 'nav1.php';
?>
<html>

<head?>


    <style>
    img {
        max-width: 100%;
        max-height: 50%;
        padding-top: 10px;
        object-fit: contain;
    }
    </style>
    </head>


    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron mt-3">
                        <h1 class="display-7"> Know More About Us.....!</h1>
                        <p class="lead">Academia is a website that provides information about colleges inside Kathamndu valley</p>
                    
                         <hr class="my-4">
                        <p> Academia allows people the benefit of viewing and learning the colleges, admission notice and scholarship notice of their likes, irrespective of their physical location. Academia enables people to save a great amount of time & money.
                            They don’t have to incur any form of expenditure in terms of transportations and other resources.</p>
                            Our mission is to promote and enhance the higher education in Nepal based inside Kathmandu Valley making all-in-one relevant information into one-stop portal.
Academia aims to bring students and academic institutions together in the best education portal and support students in every way to make their lives easier and save time.
                            <br>
                            Thank You!!!
                        </p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                <div class= "containar">
                    <h2 class="text-center text-dark my-4">Our Team Member</h2>

                   <div class="row">
                   <div class=" col-sm-12 col-md-4 col-lg-4 my-3">
                <!-- Start Column Courses -->
                <div >
                    <!-- Start Card Courses -->
                    <img src="img/manjisha.jpg" class="card-img-top" alt="..." style="height: 300px; ">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-4 col-lg-4 my-3">
                <!-- Start Column Courses -->
                <div >
                    <!-- Start Card Courses -->
                    <img src="img/bikash.jpg" class="card-img-top" alt="..." style="height: 300px; ">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-4 col-lg-4 my-3">
                <!-- Start Column Courses -->
                <div >
                    <!-- Start Card Courses -->
                    <img src="img/mem3.jpeg" class="card-img-top" alt="..." style="height: 300px; ">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->


            <div class=" col-sm-12 col-md-4 col-lg-4 my-3">
                <!-- Start Column Courses -->
                <div >
                    <!-- Start Card Courses -->
                    <img src="img/praridhi.jpg" class="card-img-top" alt="..." style="height: 300px;">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-4 col-lg-4 my-3">
                <!-- Start Column Courses -->
                <div>
                    <!-- Start Card Courses -->
                    <img src="img/rohit.jpg" class="card-img-top" alt="..." style="height: 300px;">

                        <!-- <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a> -->
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->


            </div>
</div>
            <?php
    include 'footer.php';
// } else {
 //   header('location:login.php');
//}
    ?> 

                  

            <div class="container">
                        <h1></h1>

                        <!-- <div class="row text-center">
                            <?php
                            include 'connection.php';
                            $query = "select * from team_mem";

                            $query_run = mysqli_query($conn, $query);
                            if ($query_run) {

                                while ($row = mysqli_fetch_array($query_run)) {

                            ?>
                            <div class="col-md-6 mb-4">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['img']) . '" alt="img" class="img-fluid rounded-circle  mb-4 covers img-thumbnail shadow-sm "' ?>
                                <br>

                                <h4 class="mb-0"><?php echo $row['name'] ?></h4> <br>
                                <span class="small text-uppercase text-muted"><?php echo $row['work'] ?></span><br>
                                <span class="small text-uppercase text-muted"><?php echo $row['address'] ?></span>
                            </div>
                            <?php
                                }
                            }
                            ?>

                        </div> -->
                    </div>
                    
                </div>
            </div>
        </div>
        </div>

    </body>
    

</html>